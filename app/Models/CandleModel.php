<?php 

namespace App\Models;

use CodeIgniter\Model;

class CandleModel extends Model
{
    protected $table      = 'candle_models';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'class'];


}