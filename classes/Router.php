<?php

class Router
{
    protected $routes = [];

    public function add($path, $callback)
    {
        $this->routes += [$path => $callback];
    }

    public function showRoutes()
    {
        print_r($this->routes);
    }
}
