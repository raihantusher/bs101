<?php 

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table      = 'candle_role';
    protected $primaryKey = 'id';

    protected $allowedFields = [ 'role'];


}