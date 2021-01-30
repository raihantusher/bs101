<?php namespace App\Controllers;

use CodeIgniter\Controller;


use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class CandleController extends Controller
{
    protected $twig = null;
    
    public function __construct()
    {
    }
    
    

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        helper("url");
        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        // $this->session = \Config\Services::session();
        $loader = new \Twig\Loader\FilesystemLoader(APPPATH.'Views');
        

        $this->twig = new \Twig\Environment($loader, [
            'debug' => true,
        //	'cache' => APPPATH.'Views/compiled',
        ]);
        
        // site_url function usable into twig view
        $site_url = new \Twig\TwigFunction('site_url', function ($string ="/") {
            return site_url($string);
        });
        $this->twig->addFunction($site_url);
        // site_url($str) function is added

        // site_url function usable into twig view
        $base_url = new \Twig\TwigFunction('base_url', function ($string ="/") {
            return base_url($string);
        });
        $this->twig->addFunction($base_url);
        // site_url($str) function is added
        
        //can function usable into twig view
        $can = new \Twig\TwigFunction('can', function ($permission, $model_name) {
            return Model::can($permission, $model_name);
        });
        $this->twig->addFunction($can);
        // can($permission, $model_name) function is added

        //lang function usable into twig view
        $lang = new \Twig\TwigFunction('lang', function ($string ="/") {
            return lang($string);
        });
        $this->twig->addFunction($lang);
        //lang($str) function is added

        $this->twig->addGlobal('assets', base_url().'/assets');
        $this->twig->addGlobal('csrf', '<input type="hidden" name="'. csrf_token().'" value="'.csrf_hash().'" />');
        $this->twig->addGlobal('auth', Auth::auth());
    }


    public function getName()
    {
        $path = explode('\\', get_class($this));
        return array_pop($path);
    }

    public function getTwigViewName($str)
    {
        return strtolower($this->getName()."/".$str.".html");
    }

    //--------------------------------------------------------------------
}
