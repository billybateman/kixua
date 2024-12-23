<?php

abstract class BaseController
{
    protected $registry;

    function __construct($registry)
    {
        $this->registry = $registry;
        $this->initializeUser();
    }

    abstract function index();

    protected function initializeUser()
    {
        $user = $this->registry->session->get('user');
        if ($user) {
            $this->registry->template->user = $user;
        }
    }

    public function loadModel($name)
    {
        return $this->loadComponent('models', $name, 'model');
    }

    public function loadLibrary($name)
    {
        return $this->loadComponent('libraries', $name);
    }

    public function loadHelper($name)
    {
        return $this->loadComponent('helpers', $name);
    }

    private function loadComponent($type, $name, $suffix = '')
    {
        $suffix = $suffix ? ".$suffix" : '';
        require(__APP_PATH . "/$type/$name$suffix.php");
        return new $name;
    }
}