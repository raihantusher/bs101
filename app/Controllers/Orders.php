<?php

/**
 *
 * Admin is main dashboard
 */
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;
use Propel\Propel\OrdersQuery;

class Orders extends CandleController
{
    private $orders = null;
    private $order_products = null;
    
    public function __construct()
    {
        parent::__construct();
        $this->orders = Model::name("orders");
        $this->order_products = Model::name("orderproduct");
    }


    ///////////////////////////////////////////////////////////////////////
    public function index()
    {
        $users = Model::name("user")->builder()->countAllResults();
        //$topics = Model::name("topic")->builder()->countAllResults();
        //$questions = Model::name("quiz")->builder()->countAllResults();
        $orders = $this->orders->findAll();
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('orders'));
    }
    /////////////////////////////////////////////////////////////////////////



    //////////////////////////////////////////////////////////////////////////
    public function view($id = null)
    {
        $order = $this->orders->find($id);
        $products = $this->order_products
            ->where("order_id",$id)
            ->find();

        
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('order', 'products'));
    }
    //////////////////////////////////////////////////////////////////////////


    ///////////////////////////////////////////////////////////////////////////
    public function update($id = null) {

       // print_r($this->request->getPost("status"));
        if ($this->request->getMethod() == "post") {
            $order = OrdersQuery::create()
            ->findOneById($id);
            $order->setSellerNote($this->request->getPost("seller_note"));  //$this->request->getPost("seller_note");
            $order->setStatus($this->request->getPost("status"));  //$this->request->getPost("status");
            $order->save();
            
            return $this->response->setJSON($order->toJSON());
        }
        
    }
    ////////////////////////////////////////////////////////////////////////////////
}
