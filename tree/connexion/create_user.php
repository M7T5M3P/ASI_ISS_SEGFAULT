<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'init_class_user.php';

$username = $_GET["username"];
$email = $_GET["email"];
$avatar = $_GET["avatar"];
$password = $_GET["password"];

new User($username, $password, $email, $avatar);