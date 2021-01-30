<?php 

namespace App\Models;

use CodeIgniter\Model;

class RolePermissionModel extends Model
{
    protected $table      = 'candle_role_permission';
    protected $primaryKey = 'id';

    protected $allowedFields = [ 'permission', 'role_id', 'can'];


}