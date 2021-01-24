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
class Users extends CandleController
{
     private $Users = null;

     public function __construct() {
          parent::__construct();
          $this->Users =  Model::name("user");

      }

    /**
     * show add new user form
     *
     * @return void
     */
   public function index() {
        $view = $this->getTwigViewName(__FUNCTION__);

        $per_page = 10;
       

        $search = $this->request->getVar('search');

        $all = $this->Users->paginate($per_page);
        
        if ($search)
            $all = $this->Users->where("email", $search)->paginate( $per_page );
        
        $pager = $this->Users->pager;
        
        $total =  $this->Users->builder()->countAllResults();
        $page  = $this->request->getVar("page");


        $links = $pager->makeLinks( ($page ? $page : 1),$per_page , $total ,  "bootstrap4");
        //$links = $pager->links();

        $session = session();
        $success = $session->get("success");
       
        return $this->twig->render($view, compact('all', 'links',  'success'));

   }

   /**
    * handle post request 
    * from add new users form
    *
    * @return void
    */
   public function create() {
        $view = $this->getTwigViewName(__FUNCTION__);

        $roles = Model::name("role")->findAll();
        
        echo $this->twig->render($view, compact('roles'));
   }


   public function store()
   {  
      $validation =  \Config\Services::validation();
      if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'sign_up')) {
          
                    Auth::register(    
                                      $this->request->getPost("fname"),
                                      $this->request->getPost("lname"),
                                      $this->request->getPost("email"),
                                      $this->request->getPost("password")
                              );
                  
               return redirect()->to( site_url('users/index'))
                                ->with("success", "Registration is successfully done!! ");
                              
          }
      
   }

  


   /**
    * @param $user_id
    *
    *
    */
   public function show($id) {
        $view = $this->getTwigViewName(__FUNCTION__);

        
        echo $this->twig->render($view);
   }

    /**
    * @param $user_id
    *
    *
    */
   
   public function edit($id) {
        $view = $this->getTwigViewName(__FUNCTION__);
     
        $user = $this->Users->find($id);
     
        $roles = Model::name("role")->findAll();
        
        
        echo $this->twig->render($view, compact('user', 'roles'));
   }

    /**
    * @param $user_id
    *
    *
    */
   public function update($id) {
     $data = [];
     
     $validation =  \Config\Services::validation();
     if ($this->request->getPost("update-info") && $validation->run($this->request->getPost(), 'update_user_info')) {
          $data= [
               'fname' => $this->request->getPost("fname"),
               'lname' => $this->request->getPost("lname"),
               'email' => $this->request->getPost("email"),
               'role_id' => $this->request->getPost("role"),
           ];

           $this->Users->update($id,$data);
     }

     if ($this->request->getPost("change-password") && $validation->run($this->request->getPost(), 'reset_password')) {
          $data= [
               'password' => Password::make($this->request->getPost("password") ),
           ];

           $this->Users->update($id,$data);
     }
     

      return redirect()->to( base_url('users'))
              ->with("success", "User is updated successfully!! ");
   }

    /**
    * @param $user_id
    *
    *
    */
   public function delete ($id) {
     
     if ($this->request->getMethod() ==  "post") {
          $this->Users->delete($id); 
     }
            

     return redirect()->to( base_url('users') )
                      ->with("success", "User is deleted successfully!! ");
   }




}
