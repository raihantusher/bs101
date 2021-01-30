<?php 

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
use App\Libraries\Candle\CandleModel as Model;

use CodeIgniter\RESTful\ResourceController;

/**
 * @class Users
 * @constructor
 * @extends CandleController
 * 
 */
class Quiz extends CandleController
{
    private $resource = null;

    private $quiz    = null;

 

    public function __construct() {
        parent::__construct();
        $this->quiz =  Model::name("quiz");
    }

   
    public function index()
    {    
        $all_topic = Model::name("topic")->findAll();


        if ($this->request->getMethod() ==  "post") {
                $ques["q"] = $this->request->getPost("quiz");
                $ques["o"] = json_encode(  $this->request->getPost("ops") );

               $ques['a'] = json_encode(  $this->request->getPost("ok") ) ;
                
              // print_r($ques);

                $data =  [
                    'question' => $ques['q'],
                    'options'   => json_encode($ques["o"]),
                    'answer'    =>  json_encode($ques["a"]),
                    'topic_id' => $this->request->getPost("topic")
                ] ;

                echo Model::name('quiz')->insert($data );
        }

        

        $view = $this->getTwigViewName(__FUNCTION__); 
        return $this->twig->render($view, compact('all_topic', 'pager', 'links',  'success'));
    }

    public function edit ($id) {
        $all_topic = Model::name("topic")->findAll();

        // get cuurent quiz
        $quiz = $this->quiz->find($id);

        // print_r($quiz);
        $options = json_decode($quiz['options']);
        $options = json_decode($options);

        $answers = json_decode($quiz['answer']);
        $answers = json_decode($answers);
        // print_r($options);

        $view = $this->getTwigViewName('index'); 
        return $this->twig->render($view, compact('all_topic', 'quiz', 'options', 'answers'));
    }

    public function view ($id) {

            $quiz = $this->quiz->find($id);

            // print_r($quiz);
            $options = json_decode($quiz['options']);
            $options = json_decode($options);

            $answers = json_decode($quiz['answer']);
            $answers = json_decode($answers);
            // print_r($options);


            $view = $this->getTwigViewName(__FUNCTION__); 
            return $this->twig->render($view, compact('quiz', 'options', 'answers'));
        }


    public function all ($topic_id) {

        $all_quiz = Model::name('quiz')
                    ->where('topic_id', $topic_id)
                    ->findAll();
                    
        $view = $this->getTwigViewName(__FUNCTION__); 

        return $this->twig->render($view, compact('all_quiz'));
    }

    /**
     * 
     * update quiz
     *
     * @return void
     */
    public function update ($id = null) {
        if ($this->request->getMethod() ==  "post") {
            $ques["q"] = $this->request->getPost("quiz");
            $ques["o"] = json_encode(  $this->request->getPost("ops") );

           $ques['a'] = json_encode(  $this->request->getPost("ok") ) ;
            
          // print_r($ques);

            $data =  [
                'question' => $ques['q'],
                'options'   => json_encode($ques["o"]),
                'answer'    =>  json_encode($ques["a"]),
                'topic_id' => $this->request->getPost("topic")
            ] ;

             Model::name('quiz')->update($id,$data );
        }   
        return redirect()->to(base_url('quiz'))
                ->with("success", "Quiz is updated successfully!! ");
    }
}
