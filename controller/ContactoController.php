<?php

namespace en2portr3s\controller;

use en2portr3s\library\View;
use en2portr3s\model\Question;
use en2portr3s\model\Suggestion;

class ContactoController {

    private $question_args = array(
        'first_name' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'last_name' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'email' => FILTER_SANITIZE_EMAIL,
        'content' => FILTER_SANITIZE_STRING
    );

    public function indexAction() {
        return new View('contacto');
    }

    public function saveQuestionAction() {
        $question_data = filter_input_array(INPUT_POST, $this->question_args);
        $question_data['status'] = 'Pendiente';

        $question = new Question($question_data);

        return $question->message;
    }

    public function saveSuggestionAction() {
        $suggestion_data = [
            'content' => filter_input(INPUT_POST, 'buzon', FILTER_SANITIZE_STRING, array('flags' => FILTER_FLAG_ENCODE_LOW)),
            'status' => 'Pendiente'
        ];

        $suggestion = new Suggestion($suggestion_data);

        return $suggestion->message;
    }

}
