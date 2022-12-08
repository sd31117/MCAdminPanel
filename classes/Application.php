<?php

class Application extends Router
{
    public function __construct()
    {
        if (
            empty($username = isset($_SESSION['user']) ? $_SESSION['user'] : null)
            && $_SERVER['REQUEST_URI'] !== '/login'
        ) {
            header('Location: /login');
        }
    }
}
