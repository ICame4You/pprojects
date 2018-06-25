<?php
session_start();
$login = isset($_POST['login']) ? $_POST['login'] : "";

if ($login == 'admin') {
    setcookie('login','admin', time() + 86400, '/');
    header('Location: lk.php');
} else {
    header('Location: login.php?error_id=1');
}
test