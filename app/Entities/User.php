<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    public function setPassword(string $pass)
    {
        $this->attributes['password'] = password_hash($pass, PASSWORD_ARGON2I);

        return $this;
    }

    public function getFullName()
    {
        return $this->fname." ".$this->lname;
    }
    // ...
}
