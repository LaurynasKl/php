<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    die;
}
if (isset($_SESSION['login']) && $_SESSION['login'] == '1') {
    unset($_SESSION['login']);
    unset($_SESSION['name']);
}
header('Location: http://localhost/BIT-backend/php/014auth/index.php');
die;