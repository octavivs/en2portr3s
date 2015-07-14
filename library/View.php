<?php

namespace en2portr3s\library;

class View extends Response {

    protected $template;
    protected $vars = [];

    public function __construct($template, $vars = []) {
        $this->template = $template;
        $this->vars = $vars;
    }

    public function getTemplate() {
        $layout = file_get_contents('view/layout.tpl.php');
        $file = 'view/'. $this->template . '.tpl.php';
        $content = file_get_contents($file);
        $template = str_replace('{tpl_content}', $content, $layout);
        return $template;
    }

    public function getVars() {
        return $this->vars;
    }

    public function output() {
        $template = $this->getTemplate();
        $vars = $this->getVars();
        call_user_func(function () use ($template, $vars) {
            extract($vars);
            echo $template;
        });
    }

}
