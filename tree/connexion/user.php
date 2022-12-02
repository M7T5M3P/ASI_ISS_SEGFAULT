<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include './init_class_user.php';

$username = $_GET["username"];
$email = $_GET["email"];
$avatar = $_GET["avatar"];
$password = $_GET["password"];
$signin = $_GET["signin"];
if (isset($_GET["tmp_pwd"])) {
    $tmp_pwd = $_GET["tmp_pwd"];
    $user = new User($signin, $username, $password, $email, $avatar, $tmp_pwd);
    echo $user->html;
} else if ($_GET["signin"] == 0) {
    $user = new User($signin, $username, $password, $email, $avatar, null);
    echo $user->return;
} else {
    $result = new User($signin, null, $password, $email, null, null);
    echo $result->return;
}