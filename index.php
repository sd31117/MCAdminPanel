<?php
include 'includes/session.php';

// echo 'Session vars: <br>';
// print_r($_SESSION);
// echo '<br><br>';

$app = new Application();

$app->add('', 'home.php');
$app->add('login', 'login.php');
$app->add('logout', 'logout.php');

if (@$app->route($_SERVER['REQUEST_URI']) === false) {
    $app->throw(404);
}
