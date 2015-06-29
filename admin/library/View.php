<?php

namespace en2portr3s\admin\library;

class View extends Response {

    protected $template;
    protected $vars = [];

    public function __construct($template, $vars = []) {
        $this->template = $template;
        $this->vars = $vars;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function getVars() {
        return $this->vars;
    }

    public function output() {
        $template = $this->getTemplate();
        $vars = $this->getVars();
        call_user_func(function () use ($template, $vars) {
            extract($vars);
            ob_start();
            require "view/$template.tpl.php";
            $tpl_content = ob_get_contents();
            ob_end_clean();
            require "view/layout.tpl.php";
        });
    }

}
