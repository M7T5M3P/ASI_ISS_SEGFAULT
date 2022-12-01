<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'init_class_user.php';

$username = $_GET["username"];
$email = $_GET["email"];
$avatar = $_GET["avatar"];
$password = $_GET["password"];

$this->tmp_password = $this->get_tmp_password();
if ($tmp_pwd == $this->tmp_password) {
    $this->modify_access();
}

if ($_GET["signin"] == 1) {
    new User(0, $username, $password, $email, $avatar);
} else {
    new User(1, null, $password, $email, null);
}