<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Product extends Entity
{
    
    public function setName(string $name)
    {
        $this->attributes['name'] = ucfirst($name);

        return $this;
    }
    
}

?>
