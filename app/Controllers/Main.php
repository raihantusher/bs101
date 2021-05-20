<?php

/**
 *
 * Admin is main dashboard
 */
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;



use  \Config\Services;
use Propel\Model\CandleRoleQuery;
use Propel\Model\CandleUsersQuery;
use Propel\Model\Products;
use Propel\Model\ProductsQuery;

class Main extends CandleController
{
    private $session = null;

    // models
    private $users = null;
    public function __construct()
    {
        parent::__construct();
        $this->session = Services::session();
        $this->users = Model::name("user");
    }
   
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {

    //$users = Model::name("user")->builder()->countAllResults();
        //$topics = Model::name("topic")->builder()->countAllResults();
        //$questions = Model::name("quiz")->builder()->countAllResults();
        
        $cond = "";
        //page number
        $p = $this->request->getVar("p");
        //search query
        $s = $this->request->getVar("s");

        $products = ProductsQuery::create();

        if ($s != null){

            $cond = "%".$s."%";
            $products->where("Products.name LIKE ?", $cond)
                ->_or()
                ->where("Products.description LIKE ?", $cond)
                ->paginate($page = 1, $maxPerPage = 10);
           
        } else {
            $products->paginate($page = 1, $maxPerPage = 10);
        }
            
        //$topics = Model::name("topic")->builder()->countAllResults();
        //$questions = Model::name("quiz")->builder()->countAllResults();

       
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('products'));
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function login()
    {
        if (Auth::isLoggedIn()) {
            return redirect()->to(site_url('main/dashboard'));
        }

        // entity
        $user = new \App\Entities\User();

        if ($this->request->getPost("register") == "register") {
            $user->fname = $this->request->getPost("fname");
            $user->lname = $this->request->getPost("lname");
            $user->email = $this->request->getPost("email");
            $user->mobile = $this->request->getPost("mobile");
            $user->password = $this->request->getPost("password");

            $this->users->save($user);
        }

        if ($this->request->getPost("login") == "login") {
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");
            
            if (Auth::login($email, $password)) {
                //echo "you are logged in";
                return redirect()->to('main/dashboard');
            }
        }

        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function dashboard()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function my_Orders()
    {
        $orders = Model::name("orders")->where("user_id", Auth::auth()->id)
            ->orderBy("id", 'DESC')
            ->limit(10)
            ->find();

        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('orders'));
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function settings()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function address()
    {
        $user = $this->users->find(Auth::auth()->id);
        //print_r($user);
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('user'));
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit_address($type = null)
    {
        //$user = $this->users->find(Auth::auth()->id);
        $user = CandleUsersQuery::create()->findPk(Auth::auth()->id);
        //$user_entity = new \App\Entities\User();
        //$user_entity->id = $user->id;
        $view = null;
        switch ($type) {
            case "shipping":
                //echo "shipping";
                $view = $this->getTwigViewName(__FUNCTION__."_".$type);
            break;
            
            case "billing":
                //echo "billing";
                $view = $this->getTwigViewName(__FUNCTION__."_".$type);
            break;
            default:
            $view = $this->getTwigViewName("404");
        }

        if ($this->request->getMethod() == "post" && $type != null) {
            if ($type == "shipping") {
                $user->setShippingRegion($this->request->getPost("region"));
                $user->setShippingCity($this->request->getPost("city"));
                $user->setShippingZip($this->request->getPost("zip"));
                $user->setShippingAddress($this->request->getPost("address"));
                
            } elseif ($type == "billing") {
                $user->setRegion($this->request->getPost("region"));
                $user->setCity($this->request->getPost("city"));
                $user->setZip($this->request->getPost("zip"));
                $user->setAddress($this->request->getPost("address"));
            }
        
            $user->save();
            return redirect()->back()->with("success", ucfirst($type)." address is updated!");
        }

        return $this->twig->render($view, compact('user'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function cart()
    {
        // if update cart button submit
        if ($this->request->getMethod() == "post") {
            $product_id = $this->request->getPost("product_id");
            $product_name = $this->request->getPost("product_name");
            $product_quantity = $this->request->getPost("quantity");
            $product_price = $this->request->getPost("price");
                
            $data = [];

            for ($i = 0; $i < count($product_id); $i++) {
                $data[] = [
                        "product_id"   => $product_id[$i],
                        "product_name" => $product_name[$i],
                        "quantity"     => $product_quantity[$i],
                        "price"        => $product_price[$i],
                        "subtotal"     => $product_quantity[$i] * $product_price[$i]
                    ];
            }
                
            // put products under products object (json)
            $arr = [];
            $arr["products"] = $this->session->get("products");
            $arr["products"] = $data;

            // put above array into session
            $this->session->set($arr);
            return redirect()->back()->with("success", "Cart is updated!");
        }

        //product from session
        $products = $this->session->get("products");
        
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('products'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function checkout()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('products'));
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function logout()
    {
        if ($this->request->getMethod() == "post") {
            Auth::logout();
        }
        return redirect()->to(site_url("main/login"));
    }
}
