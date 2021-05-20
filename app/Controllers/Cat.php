<?php 

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

use CodeIgniter\RESTful\ResourceController;
use Propel\Model\Categories;
use Propel\Model\CategoriesQuery;
use Propel\Model\ProductsQuery;

/**
 * @class Users
 * @constructor
 * @extends CandleController
 * 
 */
class Cat extends CandleController
{
    private $resource = null;

    private $topics    = null;

 

    public function __construct() {
        parent::__construct();
        $this->topics =  Model::name("topic");
       
    }

   
    public function index()
    {  

        $page = $this->request->getVar("p");
        
        if (!isset($page)) {
            $page = 1;
        }

        $categories = CategoriesQuery::create()
        //$categories->where();
        ->paginate($page, $maxPerPage = 10);
       // print_r($categories);
       $links = $categories->getLinks(5);

        $view = $this->getTwigViewName(__FUNCTION__);
        echo $this->twig->render($view, compact('categories', 'links', 'page'));
    }


 
    /**
     * show add model form
     *
     * @return void
     */
    public function create()
    {    
        $categories = CategoriesQuery::create()->find();

        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('categories'));
    }


 
    public function store()
    {  
        $category = new Categories();
        $category->setParentId($this->request->getPost("parent"));
        $category->setName($this->request->getPost("parent"));
        $category->save();
       echo $category->getId();

        return redirect()
                ->to( base_url('cat'))
                ->with("success", "New model is created!! ");
       
    }
 
    public function edit($id = null)
    {
        $categories = CategoriesQuery::create()->find();

      $view = $this->getTwigViewName("create");

      $category = CategoriesQuery::create()->findPk($id);

      return $this->twig->render($view, compact('category', 'categories') );
    }

    /**
     * 
     * @param  $id
     * redirect back
     * session
     */
 
    public function update($id = null)
    {   $category = CategoriesQuery::create()->findPk($id);
        $category->setParentId($this->request->getPost("parent"));
        $category->setName( $this->request->getPost("name"));
       $category->save();

        return redirect()->to( base_url('cat'))
                ->with("success", "Category is updated successfully!! ");

	
    }




}
