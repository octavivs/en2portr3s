<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;
use en2portr3s\model\Suggestion;

class SugerenciasController {

    public function indexAction() {
        return new View('sugerencias');
    }

    public function deleteAction() {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $suggestion = new Suggestion();
        $suggestion->delete($id);

        return $suggestion->message;
    }

}
