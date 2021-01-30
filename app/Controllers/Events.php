<?php
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class Events extends CandleController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
       // \CodeIgniter\Events\Events::simulate(true);
        \CodeIgniter\Events\Events::trigger('some_eventt', "raihan.tusher@yahoo.com");
        
        echo "hello";
    }

    
}