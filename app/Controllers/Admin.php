<?php 

/**
 * 
 * Admin is main dashboard
 */
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;

class Admin extends CandleController
{
    public function __construct() {
        parent::__construct();
    }
   public function index() {
    
    $view = $this->getTwigViewName(__FUNCTION__);
    
   
    return $this->twig->render($view);
   }

}
