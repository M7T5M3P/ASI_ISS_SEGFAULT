<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'connect_todb.php';

class User
{
    public $conn;
    public $username;
    public $password;
    public $email;
    public $ip;
    public $avatar;

    function __construct($username, $password, $email, $avatar)
    {
        $connection = new Connection();
        $this->conn = $connection->get_connection();
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->avatar = $avatar;
    }
    function getIPAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    function new_user()
    {
        $sql = "INSERT INTO `user`(`username`, `password`, `email`, `ip`, `avatar`, `acces`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssss", $this->username, $this->password, $this->email, $this->getIPAddress(), $this->avatar);
        $stmt->execute();
        $this->conn->close();
    }
    function user_html()
    {
        $html = "<div class=\"user\"></div>";
        return $html;
    }
}