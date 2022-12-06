<?php

class Application extends Router
{
    public function __construct()
    {
        if (empty($username = $_SESSION['user'])) {
            header('Location: login.php');
        }
        //echo 'Welcome ' . $username . "!";

        $this->add('/', 'index');
        $this->add('/login', 'login');
        $this->showRoutes();
    }
}
