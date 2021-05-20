<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use App\Libraries\Candle\CandleAuth as Auth;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
       
       if (!Auth::isLoggedIn() && Auth::roleID() != 8) {
           return redirect()->to(site_url("home/index"));
       } else if (Auth::roleID() == 8) {
           return redirect()->to(site_url('main/index'));
       }
       
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        
    }
}