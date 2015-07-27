<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;

class PermisosController {

    private $update_args = array(
        'id' => FILTER_SANITIZE_NUMBER_INT,
        'username' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
         'kind' => FILTER_SANITIZE_STRING
    );

    public function indexAction() {
        return new View('permisos');
    }

    public function updateAction() {
        $user_data = filter_input_array(INPUT_POST, $this->update_args);

        $account = new Account();
        $account->update($user_data);

        return $account->message;
    }

}
