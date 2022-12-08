<?php

class Router
{
    protected $routes = [];

    public function add($path, $callback)
    {
        $path = '/' . $path;
        $this->routes += [$path => $callback];
    }

    public function route($urlPath)
    {
        if (($callback = $this->routes[$urlPath]) === null) {
            return false;
        }

        include_once 'public/' . $callback;
    }

    public function throw($errorCode)
    {
        switch ($errorCode) {
            case 404:
                header('HTTP1.1/ 404 Not Found', true, $errorCode);
                break;

            default:
                header('HTTP1.1/500 Server Error', true, 500);
                break;
        }
    }

    public function showRoutes()
    {
        print_r($this->routes);
    }
}
