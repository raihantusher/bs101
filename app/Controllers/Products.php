<?php

/**
 *
 * Admin is main dashboard
 */
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class Products extends CandleController
{
    private $products = null;

    public function __construct()
    {
        parent::__construct();

        $this->products = Model::name("products");
    }

    public function index()
    {
        $products = $this->products->findAll();


        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('products'));
    }

    public function view($id)
    {
        $product = $this->products->find($id);
        //increment views
        $product->viewed = $product->viewed +1;

        $this->products->save($product);
        
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('product'));
    }

    public function create()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }

    public function store()
    {
        $product_file = $this->request->getFile("p_file");
        // Generate a new secure name
        $name = $product_file->getRandomName();
        $product_file->move(ROOTPATH."public/uploads", $name);
        echo APPPATH."public/uploads";
            
        $data = [
            'name' =>  $this->request->getPost("p_name"),
            'price' => $this->request->getPost("p_price"),
            'product_cat' => $this->request->getPost("p_cat"),
            'product_image' => $name,
            'description' => $this->request->getPost("p_des"),
        ];
        print_r($data);

        echo $this->products->insert($data);

        return redirect()->to(base_url('products'))
                           ->with("success", "New model is created!! ");
    }

    public function delete($id)
    {
        if ($this->request->getMethod() ==  "post") {
            $this->products->delete($id);
        }
        
        return redirect()->to(base_url('products'))
                        ->with("success", "Model is deleted successfully!! ");
    }
}
