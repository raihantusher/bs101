<?php 

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;
use App\Libraries\Candle\Password;
use Propel\Model\StoresQuery;

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
      

        $user = Model::name("user")->where("id",Auth::auth()->id)->first();
       
        $validation =  \Config\Services::validation();
        if ($this->request->getMethod() ==  "post" && $validation->run($this->request->getPost(), 'setting')  ) {
           
            $old_password = $this->request->getPost("old_password");
            $new_password = $this->request->getPost("password");

            if  ( Password::verify($old_password, $user->password) ) {
               Auth::setNewPassword($user->email, $new_password);
               return redirect()->to(site_url("admin/index"));
            }  
        }
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact($validation));
   }

   public function store () {
        
        $store = StoresQuery::create()->findPk(1);
        
     
        if ($this->request->getMethod() == "post") {  
            $store->setStoreName($this->request->getPost("store_name"));
            $store->setStoreTitle($this->request->getPost("store_title"));
           // $store->setStoreDescription($this->request->getPost("store_description"));
            $store->setStoreEmail($this->request->getPost("store_email"));
            $store->setStorePhone($this->request->getPost("store_phone"));
            $store->setStoreAddress($this->request->getPost("store_address"));
            $store->save();
        }
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('store') );
   }






}
