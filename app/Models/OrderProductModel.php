<?php 

namespace App\Models;

use CodeIgniter\Model;

class OrderProductModel extends Model
{
    protected $table      = 'order_product';
    protected $primaryKey = 'id';
    
    //date
    //protected $useTimestamps = false;
   // protected $createdField  = 'created_at';
    
    protected $allowedFields = [ 'order_id', 'product_name', 'price' , 'subtotal'];

  
    protected $returnType    = 'App\Entities\OrderProduct';
}