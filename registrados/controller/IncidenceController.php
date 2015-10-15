<?php

namespace en2portr3s\registrados\controller;

use en2portr3s\registrados\library\View;

class IncidenceController{

    public function indexAction() {
        return new View('incidence');
    }

}