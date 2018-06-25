<?php
session_start();
$login = isset($_POST['login']) ? $_POST['login'] : "";

if ($login == 'admin') {
    header('Location: lk.php');
    if (isset($_POST['remember'])) {
        setcookie('login','admin', time() + 86400, '/');
    }
} else {
    header('Location: login.php?error_id=1');
    $_SESSION['login'] = $login;
}