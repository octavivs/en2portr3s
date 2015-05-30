<?php

namespace en2portr3s\controller;

use en2portr3s\library\View;

class ServiciosController {

    public function indexAction() {
        return new View('servicios');
    }

}
