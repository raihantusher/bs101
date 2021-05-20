<?php

/**
 *
 * Admin is main dashboard
 */
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

use  \Config\Services;
use Propel\Model\CandleUsers;
use Propel\Model\CandleUsersQuery;
use Propel\Model\OrderProduct;
use Propel\Model\Orders;

class Cart extends CandleController
{
    private $session = null;
    
    // models
    private $products = null;
    private $orders  = null;
    private $users = null;
    public function __construct()
    {
        parent::__construct();
        $this->session = Services::session();

        //assign model instance
        $this->products = Model::name("products");
        $this->users = Model::name("user");
        $this->orders = Model::name("orders");
    }
///////////////////////////////////////////////////////////////////////////////////////////
   
    public function get_cart()
    {
        $arr = $this->session->get("products");
        return $this->response->setJSON($arr);
    }
///////////////////////////////////////////////////////////////////////////////////////////
    public function delete() {
       //get shopping cart from sesssion
        $shopping_cart = $this->session->get("products");

        if ($this->request->getMethod() == "post") {
            foreach ($shopping_cart as $keys=>$values) 
            {
                if ($values["product_id"] == $this->request->getVar("item_id") ) 
                {
                    unset($shopping_cart[$keys]);
                }
            }
            $this->session->set(["products" => $shopping_cart]);    
           // var_dump($shopping_cart);
            return redirect()->back();
        }

      
    }
////////////////////////////////////////////////////////////////////////////////////////////////
    public function addtocart()
    {
        $data = [];

        if ($this->request->getMethod() == "post") {
            $price = (double) $this->request->getPost("price");
            $qty = (double) $this->request->getPost("qty");

            $data[] = [
                "product_id"    => $this->request->getPost("product_id"),
                "product_name"  => $this->request->getPost("product_name"),
                "quantity"      => $qty,
                "price"         => $price,
                "subtotal"      => $qty * $price,
            ];

            // put products under products object (json)
            $arr = [];
            $arr["products"] = $data;
            
            $shopping_cart= $this->session->get("products"); 

            if ($shopping_cart == null) {
                $shopping_cart = [];
            }

            // delete if product already exist
            foreach ($shopping_cart as $keys=>$values) 
            {
                if ($values["product_id"] == $data[0]["product_id"] ) 
                {
                    unset($shopping_cart[$keys]);
                }
            }

            if ( $shopping_cart == null  ) {
                $this->session->set($arr);
            } else {
                $this->session->push("products",$data);
            }
            
            // put above array into session
            //$this->session->set($arr);
            $this->response->setJSON($arr);
        }
        return redirect()->back()->with('success', 'Product is added to cart!');
    }
//////////////////////////////////////////////////////////////////////////////////////////////
    // public function delete_cart($sl)
    // {
    //     //get products from session
    //     $products = $this->session->get("products");
        
    //     array_splice($products, $sl, 1);
        
    //     $data["products"] = $products;
        
    //     // put above array into session
    //     $this->session->set($data);
    //     return $this->response->setJSON($products);
    // }
   
////////////////////////////////////////////////////////////////////////////////////////
    public function clear()
    {
        // temp delete
        $this->session->remove("products");
    }
////////////////////////////////////////////////////////////////////////////////////////
    public function cart()
    {
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('products'));
    }

////////////////////////////////////////////////////////////////////////////////////////
    public function place_order()
    {
        // get products from session

        $user = CandleUsersQuery::create()->findPk(Auth::auth()->id);
        $products = $this->session->get("products");

        if ($products == null) {
            $products = [];
        }

        $total = 0;
        foreach ($products as $product) {
            $total += $product["subtotal"];
        }


        if ($this->request->getMethod() == "post") {
           // create order
            $order = new Orders();
            $order->setFirstName($this->request->getPost("first_name"));
            $order->setLastName($this->request->getPost("last_name"));
            $order->setEmail($this->request->getPost("email"));
            $order->setMobile($this->request->getPost("mobile"));
            $order->setAddress($this->request->getPost("address"));
            $order->setRegion($this->request->getPost("region"));
            $order->setZip($this->request->getPost("zip"));
            $order->setCity($this->request->getPost("city"));
            $order->setShippingFirstName($this->request->getPost("shipping_first_name"));
            $order->setShippingLastName($this->request->getPost("shipping_last_name"));
            $order->setShippingEmail($this->request->getPost("shipping_email"));
            $order->setShippingMobile($this->request->getPost("shipping_mobile"));
            $order->setShippingAddress($this->request->getPost("shipping_address"));
            $order->setShippingRegion($this->request->getPost("shipping_region"));
            $order->setShippingZip($this->request->getPost("shipping_zip"));
            $order->setShippingCity($this->request->getPost("shipping_city"));
            $order->setShippingCost($this->request->getPost("shipping_cost"));
            $order->setStatus('Pending');
            $order->setUserId(Auth::auth()->id);
            $order->save();

            for ($i = 0; $i < count($products); $i++) {
                $order_product = new OrderProduct();
                $order_product->setOrderId($order->getId());
                $order_product->setProductId($products[$i]["product_id"]);
                $order_product->setProductName($products[$i]["product_name"]);
                $order_product->setPrice($products[$i]["price"]);
                $order_product->setQuantity($products[$i]["quantity"]);
                $order_product->setSubtotal($products[$i]["subtotal"]);
                $order_product->save();
            }
            // empty the shopping cart
            $this->session->set("products",[]);
        } // if method is post

        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('user', 'total'));
    }
/////////////////////////////////////////////////////////////////////////////////////

}
