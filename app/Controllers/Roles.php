<?php 

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;
/**
 * @class Users
 * @constructor
 * @extends CandleController
 * 
 */
class Roles extends CandleController
{
     private $Roles          = null;
     private $rolePermission = null;
     
     public function __construct() {
          parent::__construct();
          $this->Roles =  Model::name("role");
          $this->rolePermission = Model::name("role_permission");
         
      }

    /**
     * show add new user form
     *
     * @return void
     */
   public function index() {
        $view = $this->getTwigViewName(__FUNCTION__);

        $per_page = 10;
        
       

        print_r($this->request->getVar("granted"));

        $search = $this->request->getVar('search');

        $all = $this->Roles->paginate($per_page);
        
        if ($search)
            $all = $this->Roles->where("name", $search)->paginate( $per_page );
        
        $pager = $this->Roles->pager;
        
        $total =  $this->Roles->builder()->countAllResults();
        $page  = $this->request->getVar("page");


        $links = $pager->makeLinks( ($page ? $page : 1),$per_page , $total ,  "bootstrap4");
        //$links = $pager->links();

        $session = session();
        $success = $session->get("success");
       
        echo $this->twig->render($view, compact('all', 'links',  'success'));

   }

   /**
    * handle post request 
    * from add new users form
    *
    * @return void
    */
   public function create() {
        $view = $this->getTwigViewName(__FUNCTION__);
        
        return $this->twig->render($view);
   }

   
   public function store()
   {  
       $data = [
           'role' => $this->request->getPost("role"),
       ];

      $this->Roles->insert($data);

      return redirect()->to( base_url('roles'))
                           ->with("success", "New role is created!! ");
      
   }

  


   /**
    * @param $user_id
    *
    *
    */
   
    public function grant() {

          $granted_ability = $this->request->getPost("granted");
          $role_id = $this->request->getPost("role");
          print_r($role_id);
          echo '<br/>';
          $role_permission = Model::name("role_permission");

          //set no permission that role id
          $this->rolePermission->where("role_id", $role_id)->set("can", 0)->update();
          
          if (!empty($granted_ability)) {
                    foreach($granted_ability as $ability){
                         
                         $exist = $role_permission->where("role_id", $role_id)
                                                  ->where("permission", $ability)
                                                  ->first();
                         $data = [
                              "permission" => $ability,
                                   "role_id" => $role_id,
                              "can" => 1 ,
                         ];

                         if ($exist) {
                             
                              echo $this->rolePermission->update($exist["id"], $data);
                         } 
                         else {
                              echo  $this->rolePermission->insert( $data); 
                         }
                    }
          }
          

         return redirect()->to( base_url('roles'))
                         ->with("success", "Permission are updated successfully!! ");
    }

    


   public function permission ($id = null) {
        $view = $this->getTwigViewName(__FUNCTION__);

        // redirect back if 
        //$id is note provided with url
        if ($id == null ) {
          return redirect()->back();
        }

        $permissions = [];
        $permission_name = [];
        
        $role_permission = Model::name("role_permission")
                                   ->where("role_id", $id)
                                   ->findAll();

        $models          = Model::name("model")->findAll();

        foreach ($models as $model) {
             $permission_name[] = 'browse_'.$model["name"];
             $permission_name[] = 'read_'.$model["name"];
             $permission_name[] = 'add_'.$model["name"];
             $permission_name[] = 'edit_'.$model["name"];
             $permission_name[] = 'delete_'.$model["name"];
        }

        foreach ($permission_name as $ability) {
             $current_role_permissions = [];

             $current_role_permissions['permission'] = $ability;

             foreach( $role_permission as $p){
                  
                    if ($ability == $p["permission"]) {
                         $current_role_permissions['can'] = $p["can"];
                    }
                    
               }
             
            
            $permissions[] = $current_role_permissions;

        }      

        echo $this->twig->render($view, compact('permissions', 'id'));
   }

    /**
    * @param $user_id
    *
    *
    */
   
   public function edit($id) {
        $view = $this->getTwigViewName("create");
     
        $role = $this->Roles->find($id);

        
        echo $this->twig->render($view, compact('role'));
   }

    /**
    * @param $user_id
    *
    *
    */
   public function update($id) {
     $data = [
          'role' => $this->request->getPost("role"),
          
      ];

      $this->Roles->update($id,$data);

      return redirect()->to( base_url('roles'))
              ->with("success", "User is updated successfully!! ");
   }

    /**
    * @param $user_id
    *
    *
    */
   public function delete ($id) {
        
     if ($this->request->getMethod() ==  "post"){
          $this->Roles->delete($id);    
     }
   

     return redirect()->to( base_url('roles') )
                      ->with("success", "User is deleted successfully!! ");
   }



}
