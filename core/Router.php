<?php

class Router
{
    protected $route;

    public static function init($fileName='router')
    {
        $router = new static;
        require_once "{$fileName}.php";

        return $router;
    }

    public function add($uri, $controller)
    {
        $this->route[$uri] = $controller;
    }

    public function getPage()
    {
        $path = Request::getUri();
        if(array_key_exists($path, $this->route)){
            $methods = explode('@', $this->route[$path]);
            $this->runAction(...$methods);
            
            return true;
        }

        throw new \Exception('Route Not Found');
    }

    public function runAction($class, $method)
    {
        $class = new $class;
        $class->$method();
    }
}