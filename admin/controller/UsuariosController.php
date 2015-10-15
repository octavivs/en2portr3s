<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;

class UsuariosController {

    public function indexAction() {
        return new View('usuarios');
    }

}
