<?php 

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

use CodeIgniter\RESTful\ResourceController;

/**
 * @class Users
 * @constructor
 * @extends CandleController
 * 
 */
class Topics extends CandleController
{
    private $resource = null;

    private $topics    = null;

 

    public function __construct() {
        parent::__construct();
        $this->topics =  Model::name("topic");
       
    }

   
    public function index()
    {    
        $view = $this->getTwigViewName(__FUNCTION__);
          
        $per_page = 10;
       

        $search = $this->request->getVar('search');

        $all = $this->topics->paginate($per_page);

        if ($search){
            $all = $this->topics ->where("name", $search)->paginate( $per_page );
        }
            
        
        $pager = $this->topics->pager;
        
        $total =  $this->topics->builder()->countAllResults();
       
        $page  = $this->request->getVar("page");


        $links = $pager->makeLinks( ($page ? $page : 1),$per_page , $total ,  "bootstrap4");
        //$links = $pager->links();

        $session = session();
        $success = $session->get("success");
       
        echo $this->twig->render($view, compact('all', 'pager', 'links',  'success'));
    }


 
    /**
     * show add model form
     *
     * @return void
     */
    public function create()
    {    
        $all_topic = $this->topics->findAll();
        $view = $this->getTwigViewName(__FUNCTION__);
        
        return $this->twig->render($view, compact('all_topic'));
    }


 
    public function store()
    {  
        $data = [
            'parent_id' => $this->request->getPost("parent"),
            'name' => $this->request->getPost("name"),
        ];

       echo $this->topics->insert($data);

       return redirect()->to( base_url('topics'))
                            ->with("success", "New model is created!! ");
       
    }
 
    public function edit($id = null)
    {
      $all_topic = $this->topics->findAll();
      $view = $this->getTwigViewName("create");

      $topic = $this->topics->find($id);

      return $this->twig->render($view, compact('topic', 'all_topic') );
    }

    /**
     * 
     * @param  $id
     * redirect back
     * session
     */
 
    public function update($id = null)
    {  
        $data = [
            'parent_id' => $this->request->getPost("parent"),
            'name' => $this->request->getPost("name"),
        ];

        $this->topics->update($id,$data);

        return redirect()->to( base_url('topics'))
                ->with("success", "Model is updated successfully!! ");

	
    }

    public function questions($topic_id) {

       

        $view = $this->getTwigViewName(__FUNCTION__);

        return $this->twig->render($view, compact('topic_id') );
    }
 
   



}
