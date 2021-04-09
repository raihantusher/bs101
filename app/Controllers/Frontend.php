<?php
namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

class Frontend extends CandleController {
   
    public function __construct() {
        parent::__construct();
    
    }

    public function index() {
        $view = $this->getTwigViewName(__FUNCTION__);

        return $this->twig->render($view);
    }

    public function quiz($id) {

        $ques = Model::name("quiz")->find($id);

        $title = $ques['question'];

        $options = json_decode(html_entity_decode($ques['options']), TRUE);
        $options = json_decode($options);
       
        
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('id', 'title' , 'options'));
    }


    public function quiz_create() {
      
    //     $ques["q"] = "How many legs do you have ?";
    //     $ques["o"] = json_encode([
    //         '4' , '2', '3' , '5'
    //     ]);

    //    $ques['a'] = json_encode(['2']) ;
        
    //   // print_r($ques);
      

    //     $data =  [
    //         'question' => $ques['q'],
    //         'options'   => json_encode($ques["o"]),
    //         'answer'    =>  json_encode($ques["a"]),
    //     ] ;

    //     echo Model::name('quiz')->insert($data );

        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view);
    }


    public function check() {

        if($this->request->getPost())
            $id = $this->request->getPost("qid"); 
            //echo $id;
            $ques = Model::name("quiz")->where("id", $id)->first();
            
            //answer string decode into array
            $right_answer = json_decode($ques['answer']);
            $right_answer = json_decode($right_answer);
            
            // answer from post
            $submitted_answer = $this->request->getPost("ok");

            $foo =serialize($right_answer);
            $bar =serialize($submitted_answer);
            if ($foo == $bar) echo "Foo and bar are equal";

    }

    
}