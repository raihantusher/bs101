<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use App\Libraries\Candle\CandleAuth as Auth;
/**
 * Restrict view form login, signup, forgot password to admin 
 */
class AdminFormFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
       
       if (Auth::isLoggedIn()) {
           return redirect()->to(site_url("admin/index"));
       }
       
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        
    }
}