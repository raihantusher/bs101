<?php

/**
 *
 * Authentiaction Controller
 * login , register, forgot password will be here
 */

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class Saddam extends CandleController
{
    public function index()
    {
        //echo "Hello world";
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }

    /**
     *
     */
    public function reset_password()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }
}
