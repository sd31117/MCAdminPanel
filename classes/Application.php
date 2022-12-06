<?php

class Application
{
    public function __construct()
    {
        if (empty($username = $_SESSION['user'])) {
            header('Location: login.php');
        }
        echo 'Welcome ' . $username . "!";
    }
}
