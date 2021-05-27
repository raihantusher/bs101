<?php

/**
 *
 * Admin is main dashboard
 */
namespace App\Controllers;
#library

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

#services
use  \Config\Services;
use Propel\Model\CategoriesQuery;
use Propel\Model\Products as ProductsModel;
use Propel\Model\ProductsQuery;


class Products extends CandleController
{
  
    private $session = null;
    public function __construct()
    {
        parent::__construct();

        $this->session = Services::session();
    }
///////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        $products = ProductsQuery::create()->find();


        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('products'));
    }
///////////////////////////////////////////////////////////////////////////////////////////
    public function view($id)
    {
        $product = ProductsQuery::create()->findPk($id);
        //increment views
        $product->setViewed($product->getViewed() +1);

        $product->save();
        
        if ($this->session->get("products") == null) {
            $this->session->set("products", []);
        }
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('product'));
        
    }
///////////////////////////////////////////////////////////////////////////////////////////////
    public function create()
    {
        $categories = CategoriesQuery::create()->find();
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('categories'));
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    public function store()
    {
       
        $product_file = $this->request->getFile("p_file");
        // Generate a new secure name
        $name = $product_file->getRandomName();
        $product_file->move(ROOTPATH."public/uploads", $name);
        echo APPPATH."public/uploads";
        
        $product = new ProductsModel();
        $product->setName($this->request->getPost("p_name"));
        $product->setPrice($this->request->getPost("p_price"));
        $product->setCategoryId($this->request->getPost("p_cat"));
        $product->setProductImage($name);
        $product->setDescription($this->request->getPost("p_des"));
        $product->save();
        
        return redirect()->to(base_url('products'))
                           ->with("success", "New model is created!! ");
    }
/////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id = null) {
        $product = ProductsQuery::create()->findPk($id);
        $categories = CategoriesQuery::create()->find();
        $view = $this->getTwigViewName("create");
        return $this->twig->render($view, compact('categories', 'product'));
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    public function update($id = null) {
        $product_file = $this->request->getFile("p_file");
        

        $product = ProductsQuery::create()->findPk($id);
        $product->setName($this->request->getPost("p_name"));
        $product->setPrice($this->request->getPost("p_price"));
        $product->setCategoryId($this->request->getPost("p_cat"));

        if ($product_file->isValid()) {
            // Generate a new secure name
            $name = $product_file->getRandomName();
            $product_file->move(ROOTPATH."public/uploads", $name);
            $product->setProductImage($name);
        }
      
        $product->setDescription($this->request->getPost("p_des"));
        $product->save();
        return redirect()
            ->to(base_url('products'))
            ->with("success", "Model is deleted successfully!! ");
    }
    public function delete($id)
    {
        if ($this->request->getMethod() ==  "post") {
           $product = ProductsQuery::create()->findPk($id);
           $file = ROOTPATH."public/uploads/".$product->getProductImage();
           unlink($file);
           $product->delete();

        }
        
        return redirect()
            ->to(base_url('products'))
            ->with("success", "Product is deleted successfully!! ");
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
}
