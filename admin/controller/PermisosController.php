<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;

class PermisosController {

    public function indexAction() {
        return new View('permisos');
    }
    
     public function actualizarAction() {
    
         $user_data = [
             $id => filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT),
             $username => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING),
             $pass => filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING),
             $kind => filter_input(INPUT_POST, 'kind',FILTER_SANITIZE_STRING)
             ];
        $account = new Account();
        $account->edit($user_data);
        
       return $account->message;
    }
}
