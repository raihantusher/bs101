<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'candle_users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['fname', 'lname', 'mobile','email','password','role_id',
'region' , 'zip' ,'city', 'address', 'shipping_region' , 'shipping_zip' ,'shipping_city', 'shipping_address'];
    
    protected $returnType    = 'App\Entities\User';
   

}