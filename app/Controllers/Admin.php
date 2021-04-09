<?php 

/**
 * 
 * Admin is main dashboard
 */
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class Admin extends CandleController
{
  
    public function __construct() {
        parent::__construct();
    }
   public function index() {
    
    $total_products = Model::name("products")->builder()->countAllResults();
    $orders = Model::name("orders")->builder()->countAllResults();
    $total_sales = Model::name("orderproduct")->builder()
        ->join("orders", "orders.id = order_product.order_id")
        ->where("orders.status", "delivered")
        ->selectSum("order_product.subtotal")
        ->first();
    $total_page_views = Model::name("products")->builder()->selectSum('viewed')->first();

    $view = $this->getTwigViewName(__FUNCTION__);
    return $this->twig->render($view, compact( 'total_products', 'orders', 'total_page_views', 'total_sales'));
   }

}
