<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';
    
    //date
    //protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    
    protected $allowedFields = [
        'user_id',
        'note',
        'first_name',
        'last_name',
        'mobile',
        'address',
        'email',
        'region',
        'city',
        'zip',
        'shipping_first_name',
        'shipping_last_name',
        'shipping_mobile',
        'shipping_address',
        'shipping_email',
        'shipping_region',
        'shipping_city',
        'shipping_zip',
        'status',
                                  ];

  
    protected $returnType    = 'App\Entities\Order';
}
