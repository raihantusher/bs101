<?php 

namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
    protected $table      = 'quiz';
    protected $primaryKey = 'id';

    protected $allowedFields = [ 'question','options','answer', 'topic_id'];


}