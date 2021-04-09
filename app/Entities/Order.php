<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Order extends Entity
{
   

    
    protected $attributes = [
        //"id" =>null,
        'user_id' => null,
        'status' => null,
    ];
    

    public function getFullName()
    {
        return $this->shipping_first_name." ".$this->shipping_last_name;
    }

}

?>
