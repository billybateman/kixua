<?php

class Router
{
    private $registry;
    private $path;
    private $isAdmin;
    private $controller;
    private $route;
    private $routes;
    private $action;
    private $arguments;
    private static $instance;

    public function __construct($registry)
    {
        $this->registry = $registry;

        if (file_exists(__APP_PATH . '/config/routes.php')) {
            include(__APP_PATH . '/config/routes.php');
            $this->routes = $routes;
        }

        $route = isset($_GET['request']) ? trim($_GET['request'], '/') : '';
        $route = str_replace(['index.php-', '.html'], '', $route);

        if (array_key_exists($route, $this->routes)) {
            $split = explode('/', trim($this->routes[$route], '/'));
            $this->route = explode('/', $this->routes[$route]);
        } else {
            $split = explode('/', trim($route, '/'));
            $this->route = explode('/', $route);
        }

        $this->process($split);
    }

    public function process($split)
    {
        $arguments = [];
        switch ($split[0]) {
            case 'admin':
                $this->isAdmin = true;
                $this->setControllerAndAction($split, $arguments, 1, 2, 'admin', 'index');
                break;
            default:
                $this->isAdmin = false;
                $this->setControllerAndAction($split, $arguments, 0, 1, 'index', 'index');
                break;
        }
        $this->arguments = $arguments;
    }

    private function setControllerAndAction($split, &$arguments, $controllerIndex, $actionIndex, $defaultController = '', $defaultAction = '')
    {
        foreach ($this->route as $key => $val) {
            if ($key == $controllerIndex) {
                $this->controller = !empty($split[$controllerIndex]) ? $split[$controllerIndex] : $defaultController;
            } elseif ($key == $actionIndex) {
                $this->action = !empty($split[$actionIndex]) ? $split[$actionIndex] : $defaultAction;
            } else {
                $arguments[$key] = $val;
            }
        }
    }

    public function route()
    {
        require_once('BaseController.class.php');
        $file = $this->getControllerFilePath();

        if (is_readable($file)) {
            include $file;
            $class = $this->controller . 'Controller';
        } else {
            include __APP_PATH . '/controllers/error.controller.php';
            $class = 'ErrorController';
        }

        $controller = new $class($this->registry);
        $action = !empty($this->action) ? $this->action : 'index';
        call_user_func_array([$controller, $action], $this->arguments);
    }

    private function getControllerFilePath()
    {
        if ($this->isAdmin) {
            return __APP_PATH . '/controllers/admin/' . $this->controller . '.controller.php';
        } else {
            return __APP_PATH . '/controllers/' . $this->controller . '.controller.php';
        }
    }
}