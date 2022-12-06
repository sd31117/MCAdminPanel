<?php

class Application extends Router
{
    public function __construct()
    {
        if (empty($username = $_SESSION['user'])) {
            header('Location: login.php');
        }
        //handle user landing

        $this->add('/', 'index');
        $this->add('/login', 'login');
        $this->showRoutes();
    }
}
