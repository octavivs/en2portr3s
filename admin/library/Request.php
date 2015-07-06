<?php

namespace en2portr3s\admin\library;

class Request {

    protected $url;
    protected $controller;
    protected $default_controller = 'contenido';
    protected $action;
    protected $default_action = 'index';
    protected $params = [];

    public function __construct($received_url) {
        $this->url = $received_url;
        $segments = explode('/', $this->url);
        $this->resolveController($segments);
        $this->resolveAction($segments);
        $this->resolveParams($segments);
    }

    public function resolveController(&$segments) {
        $this->controller = array_shift($segments);
        if (empty($this->controller)) {
            $this->controller = $this->default_controller;
        }
    }

    public function resolveAction(&$segments) {
        $this->action = array_shift($segments);
        if (empty($this->action)) {
            $this->action = $this->default_action;
        }
    }

    public function resolveParams(&$segments) {
        $this->params = $segments;
    }

    public function getControllerClassName() {
        return Inflector::studlyCaps($this->controller) . 'Controller';
    }

    public function getControllerFileName() {
        return 'controller/' . $this->getControllerClassName() . '.php';
    }

    public function getActionMethodName() {
        return Inflector::camelCase($this->action) . 'Action';
    }

    public function execute() {
        $controller_class_name = $this->getControllerClassName();
        $controller_file_name = $this->getControllerFileName();
        $action_method_name = $this->getActionMethodName();
        if (!file_exists($controller_file_name)) {
            $controller_class_name = 'IncidenceController';
            $action_method_name = 'indexAction';
        }
        $namespaces = "\\en2portr3s\\admin\\controller\\";
        $qualified_controller_name = $namespaces . $controller_class_name;
        $controller = new $qualified_controller_name();
        $response = call_user_func_array([$controller, $action_method_name], $this->params);
        $this->executeResponse($response);
    }

    public function executeResponse($response) {
        if ($response instanceof Response) {
            $response->output();
        } else if (is_string($response)) {
            echo $response;
        } else if (is_array($response)) {
            echo json_encode($response);
        } else {
            exit('Respuesta no valida');
        }
    }

}
