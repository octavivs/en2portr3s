<?php

namespace en2portr3s\library;

class Request {

    protected $url;
    protected $controller;
    protected $defaultController = 'inicio';
    protected $action;
    protected $defaultAction = 'index';
    protected $params = array();

    public function __construct($urlRecibida) {
        $this->url = $urlRecibida;
        $segments = explode('/', $this->getUrl());
        $this->resolveController($segments);
        $this->resolveAction($segments);
        $this->resolveParams($segments);
    }

    public function getUrl() {
        return $this->url;
    }

    public function resolveController(&$segments) {
        $this->controller = array_shift($segments);
        if (empty($this->controller)) {
            $this->controller = $this->defaultController;
        }
    }

    public function resolveAction(&$segments) {
        $this->action = array_shift($segments);
        if (empty($this->action)) {
            $this->action = $this->defaultAction;
        }
    }

    public function resolveParams(&$segments) {
        $this->params = $segments;
    }

    public function getController() {
        return $this->controller;
    }

    public function getAction() {
        return $this->action;
    }

    public function getParams() {
        return $this->params;
    }

    public function getControllerClassName() {
        return Inflector::camel($this->getController()) . 'Controller';
    }

    public function getControllerFileName() {
        return 'controller/' . $this->getControllerClassName() . '.php';
    }

    public function getActionMethodName() {
        return Inflector::camel($this->getAction()) . 'Action';
    }

    public function execute() {
        $controllerClassName = $this->getControllerClassName();
        $controllerFileName = $this->getControllerFileName();
        $actionMethodName = $this->getActionMethodName();
        $params = $this->getParams();
        if (!file_exists($controllerFileName)) {
            $controllerClassName = 'IncidenceController';
            $controllerFileName = 'controller/IncidenceController.php';
            $actionMethodName = 'indexAction';
        }
        $namespace = "\\en2portr3s\\controller\\";
        $qualifiedControllerClassName = $namespace . $controllerClassName;
        $controller = new $qualifiedControllerClassName();
        $response = call_user_func_array([$controller, $actionMethodName], $params);
        $this->executeResponse($response);
    }

    public function executeResponse($response) {
        if ($response instanceof Response) {
            $response->execute();
        } else if (is_string($response)) {
            echo $response;
        } else if (is_array($response)) {
            echo json_encode($response);
        } else {
            exit('Respuesta no valida');
        }
    }

}
