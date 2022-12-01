<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'init_class_user.php';

if (isset($_GET["tmp_pwd"])) {
    $tmp_pwd = $_GET["tmp_pwd"];
    $user = new User(2, $username, $password, $email, $avatar, $tmp_pwd);
    $user->tmp_password = $user->get_tmp_password();
    if ($tmp_pwd == $user->tmp_password) {
        $user->modify_access();
    }
}

$username = $_GET["username"];
$email = $_GET["email"];
$avatar = $_GET["avatar"];
$password = $_GET["password"];

if ($_GET["signin"] == 0) {
    $user = new User(0, $username, $password, $email, $avatar, null);
} else {
    $result = new User(1, null, $password, $email, null, null);
    echo $result->html;
}