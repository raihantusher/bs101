<?php

/**
 *
 * Authentiaction Controller
 * login , register, forgot password will be here
 */

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class Home extends CandleController
{
    protected $role = null;
    private $email;

    public function __construct()
    {
        parent::__construct();
        $this->email = \Config\Services::email();
    }
    

    public function index()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
       

                
        $validation =  \Config\Services::validation();
        
        if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'login')) {
            $login =  $this->request->getPost("email");
            $password = $this->request->getPost("password");
            $remember_password = $this->request->getPost("remember");

            Auth::login(
                $login,
                $password
            );
        }
       
        if (Auth::isLoggedIn()) {
            return  redirect()->to(site_url('admin/index')) ;
        }


        
        return $this->twig->render($view, compact('validation', 'login', 'password', 'remember'));
    }
    
    public function logout()
    {
        if ($this->request->getMethod() == "post") {
            Auth::logout();
        }
        return redirect()->to(site_url("home/index"));
    }

    public function lout()
    {
        Auth::logout();
        return redirect()->to(site_url("home/index"));
    }

    public function signup()
    {
        $view = $this->getTwigViewName(__FUNCTION__);

        helper("form");

        $validation =  \Config\Services::validation();
        
        // print_r($this->request->getPost());
        
        if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'sign_up')) {
            Auth::register(
                $this->request->getPost("fname"),
                $this->request->getPost("lname"),
                $this->request->getPost("email"),
                $this->request->getPost("password")
            );

            return redirect()->to(site_url('home/index'))
              ->with("success", "Registration is successfully done!! ");
        }
        
        if (Auth::isLoggedIn()) {
            return  redirect()->route('role');
        }

        return $this->twig->render($view, compact('validation'));
    }



    /**
     *
     */
    public function forgot_password()
    {
        $view = $this->getTwigViewName(__FUNCTION__);

        $validation =  \Config\Services::validation();
        
        
        if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'forgot_password')) {
            $email = $this->request->getPost("email");
            $key = Auth::forgot_password($email);
        
            $this->email->setTo($email);
            $this->email->setSubject('Candle Forgot Password');
            $this->email->setMessage(view("candle/mail/permission", compact('key', 'email')));
       
            //$this->email->attach(ROOTPATH.'assets/img/RT.pdf');

            if (!$this->email->send()) {
                // Generate error
                        //echo "Not sent";
                     //   $data = $this->email->printDebugger(['headers']);
                        //print_r($data);
            }
        }

        
        //echo $encrypter->decrypt(base64_decode($base));

        // return view("candle/forgot_password", compact('validation'));

        if (Auth::isLoggedIn()) {
            return  redirect()->to(site_url('roles'));
        }
        return $this->twig->render($view, compact('validation'));
    }

    /**
     *
     */
    public function reset_password()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        
        $valid_token = false;

        $email = $this->request->getGet("email");
        $token = $this->request->getGet("token");

        $db = \Config\Database::connect();

        $query = $db->query("SELECT email, token, DATEDIFF(now() , created) as age FROM candle_forgot_password WHERE email='$email' and token='$token'");
        $result = $query->getRow();
        
        // check if token is valid or not
        //print_r($result->age);

        if (isset($result) && $result->age < 1) {
            $valid_token = true;
        }

        $validation =  \Config\Services::validation();
        
        if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'reset_password')) {
            $new_password =  $this->request->getPost("password");
            // token after 1 day token will  expire
            if ($result->age < 1) {
                // set new password and will notify user using mail
                Auth::setNewPassword($email, $new_password);
                //delete token
                $db->query("DELETE FROM candle_forgot_password WHERE email='$email';");
            }
        }

        if (Auth::isLoggedIn()) {
            return  redirect()->to(site_url('roles'));
        }
        return $this->twig->render($view, compact('validation', 'valid_token'));
    }
}
