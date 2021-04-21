<?php 

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;
use App\Libraries\Candle\Password;
/**
 * @class Users
 * @constructor
 * @extends CandleController
 * 
 */
class Setting extends CandleController
{
    public function __construct() {
        parent::__construct();
    }


  

   /**
    * view all users
    * @index
    * 
    */

   public function index() {
        $view = $this->getTwigViewName(__FUNCTION__);

        $user = Model::name("user")->where("id",Auth::auth()->id)->first();
       
        $validation =  \Config\Services::validation();
        if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'setting')  ) {
            
            
            $old_password = $this->request->getPost("old_password");
            $new_password =  $this->request->getPost("password");

            if  ( Password::verify($old_password, $user['password']) ) {
               Auth::setNewPassword($user["email"], $new_password);
               return redirect()->to(site_url("admin/index"));
            }

            
            echo $old_password." " .$new_password;
            
        }
        
        return $this->twig->render($view, compact($validation));
   }






}
