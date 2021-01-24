<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'candle_users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['fname', 'lname', 'email','password','role_id'];


}