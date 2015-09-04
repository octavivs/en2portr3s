<?php

namespace en2portr3s\registrados\library;

use en2portr3s\model\Page;

class View extends Response {

    protected $data;
    protected $html;
    protected $name;
    protected $vars = [];

    public function __construct($name, $vars = []) {
        $this->name = $name;
        $this->vars = $vars;
    }

    public function getTemplate() {
        $layout = file_get_contents('view/layout.tpl.php');
        $file = 'view/' . $this->name . '.tpl.php';
        $content = file_get_contents($file);
        $template = str_replace('{tpl_content}', $content, $layout);
        $this->html = $template;
    }

    public function getData() {
        $page = new Page();
        $page->select($this->name);
        $this->data = $page->getContent();
    }

    public function getVars() {
        return $this->vars;
    }

    function compose() {
        foreach ($this->data as $item) {
            switch ($item['kind']) {
                case 'image':
                    $this->html = str_replace('{tpl_content_' . $item['id'] . '_url}', $item['url'], $this->html);
                    $this->html = str_replace('{tpl_content_' . $item['id'] . '_alt}', $item['alt'], $this->html);
                    break;
                case 'text':
                    $this->html = str_replace('{tpl_content_' . $item['id'] . '_body}', $item['body'], $this->html);
                    break;
                default:
                    break;
            }
        }
    }

    public function output() {
        $this->getTemplate();
        $this->getData();
        $this->compose();
        $html = $this->html;
        $vars = $this->getVars();
        call_user_func(function () use ($html, $vars) {
            extract($vars);
            echo $html;
        });
    }

}
