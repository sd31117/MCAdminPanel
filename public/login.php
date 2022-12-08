<?php
if (isset($_SESSION['user'])) {
    header('Location: /');
}
if (isset($_POST['submit'])) {
    $_SESSION['user'] = htmlspecialchars($_POST['username']);
    header('Location: /');
}
?>

You must be logged in to do that!
<form method="POST">
    <input type="text" name="username" id="username-input" placeholder="Username">
    <input type="password" name="password" id="password-input" placeholder="Password">
    <input type="submit" name="submit" id="login-button" value="Submit">
</form>