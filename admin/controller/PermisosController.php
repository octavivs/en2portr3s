<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;
use en2portr3s\model\Account;

class PermisosController {

    private $update_args = array(
        'username' =>  FILTER_SANITIZE_STRING,
        'kind' => FILTER_SANITIZE_STRING
    );

    public function indexAction() {
        return new View('permisos');
    }

    public function updateAction() {
        $register_data = filter_input_array(INPUT_POST, $this->update_args);

        $account = new Account();
        $account->update( $register_data);
         var_dump($register_data);
        return $account->message;
       
    }

}
