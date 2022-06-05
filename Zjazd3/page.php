<?php
session_start();
if (isset($_SESSION['counter'])) {
$_SESSION['counter']++;
?>

<!DOCTYPE html>
<html lang="pl">
<header>
</header>
<body>

<?php

echo '<form action="login.php" method="post">';
echo '<input type="submit" name="logout" value="Logout">';
echo '</form>';


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: page.php");
    exit;
}

if (isset($_COOKIE['counter'])) {
    $counter = $_COOKIE['counter'] + 1;
} else {
    $counter = 1;
}

setcookie('counter', $counter, time() + 3600);

echo 'Cookies: ' . $counter . '<br>';
echo 'Sessions: ' . $_SESSION['counter'];

}
else {
    echo 'Login first please';
}
?>

</body>
</html>