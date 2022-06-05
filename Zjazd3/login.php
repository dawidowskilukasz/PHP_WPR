<!DOCTYPE html>
<html lang="pl">
<head>
</head>
<body>

Login&Password: asdasd

<form action="login.php" method="post">
    <input type="text" name="login" placeholder="Login">
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <input type="submit" value="Login">
</form>

<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == 'asdasd' && $password == 'asdasd') {
        if (!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 0;
        }
        header("Location: page.php");
    } else {

        echo 'Bad login credentials';
    }
}

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}

setcookie('counter', $counter, time() + 3600);

echo 'Cookies: ' . $counter;
?>

</body>
</html>