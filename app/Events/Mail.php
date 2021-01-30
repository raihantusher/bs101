<?php 

namespace App\Events;


class Mail {

    
    public static function hello($emaill) {
        $email = \Config\Services::email();
        $email->setTo($emaill);
		$email->setSubject('Password Has Been Changed');
		$email->setMessage("heloo");
        echo  $email->send();
    }
}