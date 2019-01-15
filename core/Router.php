<?php

namespace Core;

class Router
{
    private $routes = [];

    private $params = [];

    public function set($route, $params = [])
    {
        $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function dispatch($uri)
    {
        if ($this->matchUri($uri)) 
        {
            $controller = $this->params['controller'];
            $controller = $this->getNamespace() . $controller;

            if (class_exists($controller))
            {
                $controller_object = new $controller();

                $method = $this->params['method'];
                $controller_object->$method();
            }
        }
    }

    private function matchUri($uri)
    {
        foreach($this->routes as $route => $params)
        {
            if ($route == $uri)
            {
                foreach($this->routes[$route] as $key => $value)
                {
                    $this->params[$key] = $value;
                }
                return true;
            }
        }
        return false;
    }

    private function getNamespace()
    {
        return 'App\Controllers\\';
    }
}