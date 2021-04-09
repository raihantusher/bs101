<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';
    
    
    protected $allowedFields = [ 'name',
                                'price', 
                                'product_cat', 
                                'product_image', 
                                'description',
                                'viewed'
                            ];

  
    protected $returnType    = 'App\Entities\Product';
}