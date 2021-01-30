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
class Models extends CandleController
{
    private $resource = null;

    private $models    = null;

 

    public function __construct()
    {
        parent::__construct();
        $this->models =  Model::name("model");
    }

   
    public function index()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
          
        $per_page = 10;
       

        $search = $this->request->getVar('search');

        $all = $this->models->paginate($per_page);

        if ($search) {
            $all = $this->models ->where("name", $search)->paginate($per_page);
        }
            
        
        $pager = $this->models->pager;
        
        $total =  $this->models->builder()->countAllResults();
       
        $page  = $this->request->getVar("page");


        $links = $pager->makeLinks(($page ? $page : 1), $per_page, $total, "bootstrap4");
        //$links = $pager->links();

        $session = session();
        $success = $session->get("success");
       
        echo $this->twig->render($view, compact('all', 'pager', 'links', 'success'));
    }


 
    /**
     * show add model form
     *
     * @return void
     */
    public function create()
    {
        $view = $this->getTwigViewName(__FUNCTION__);

        
        echo $this->twig->render($view);
    }


 
    public function store()
    {
        $data = [
            'name' => $this->request->getPost("model_name"),
            'class' => $this->request->getPost("namespace"),
        ];

        echo $this->models->insert($data);

        return redirect()->to(base_url('models'))
                            ->with("success", "New model is created!! ");
    }
 
    public function edit($id = null)
    {
        $view = $this->getTwigViewName("create");

        $model = $this->models->find($id);

        echo $this->twig->render($view, compact('model'));
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
            'name' => $this->request->getPost("model_name"),
            'class' => $this->request->getPost("namespace"),
        ];

        $this->models->update($id, $data);

        return redirect()->to(base_url('models'))
                ->with("success", "Model is updated successfully!! ");
    }
 
    public function delete($id = null)
    {
        if ($this->request->getMethod() ==  "post") {
            $this->models->delete($id);
        }
    
        return redirect()->to(base_url('models'))
                        ->with("success", "Model is deleted successfully!! ");
    }
}
