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
    
    $users = Model::name("user")->builder()->countAllResults();
    $topics = Model::name("topic")->builder()->countAllResults();
    $questions = Model::name("quiz")->builder()->countAllResults();
    
    $view = $this->getTwigViewName(__FUNCTION__);
    return $this->twig->render($view, compact('users', 'topics', 'questions'));
   }

}
