<?php

namespace en2portr3s\controller;

use en2portr3s\library\View;

class   LoginController {

    public function indexAction() {
        return new View('login');
    }

}
