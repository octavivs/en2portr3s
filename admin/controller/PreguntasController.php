<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;
use en2portr3s\model\Question;

class PreguntasController {

    public function indexAction() {
        return new View('preguntas');
    }

    public function deleteAction() {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $question = new Question();
        $question->delete($id);

        return $question->message;
    }

}
