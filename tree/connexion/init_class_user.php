<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include '../../connect_todb.php';

class User
{
    public $conn;
    public $username;
    public $password;
    public $email;
    public $ip;
    public $avatar;
    public $access;
    public $html;
    public $tmp_password;

    function __construct($bool, ?string $username = null, $password, $email, ?string $avatar = null, ?string $tmp_pwd = null)
    {
        $connection = new Connection();
        $this->conn = $connection->get_connection();
        $this->email = $email;
        $this->password = $password;
        if ($bool == 0) {
            $this->tmp_password = $this->generate_password();
            $this->username = $username;
            $this->avatar = $avatar;
            $this->new_user();
            $this->access = 0;
            $this->html = $this->mail_html(0);
        } else if ($bool == 1) {
            echo "ici <br><br>";
            $this->access = $this->get_access();
            $this->username = $this->get_username();
            if ($this->connect_user())
                $this->html = $this->create_html(1);
            else
                $this->html = $this->create_html(0);
        } else {
            $this->access = $this->get_access();
            $this->tmp_password = $tmp_pwd;
            $this->username = $this->get_username();
            if ($this->check_password_email())
                $this->html = $this->mail_html(1);
            else
                $this->html = $this->mail_html(0);
        }
    }
    function modify_access()
    {
        $sql = "UPDATE `user` SET `access` = 1 WHERE `email` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $this->conn->close();
    }
    function create_html($check)
    {
        if ($check) {
            return "<div class=\"connection\">
                    connected
                </div>";
        } else {
            return "<div class=\"connection\">
                    not connected
                </div>";
        }
    }
    function mail_html($check)
    {
        if ($check) {
            return "<div class=\"connection\">
                    connected
                </div>";
        } else {
            return "<div class=\"connection\">
                    check your mail
                </div>";
        }
    }
    function send_email()
    {
        $message = "Line 1\r\nLine 2\r\nLine 3" . $this->tmp_password;
        $message = wordwrap($message, 70, "\r\n");
        mail($this->email, 'My Subject', $message);
    }
    function generate_password()
    {
        $password = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($password), 0, 7);
    }
    function get_tmp_password()
    {
        echo $this->email;
        $sql = "SELECT tmp_password FROM user WHERE email Like ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row["tmp_password"];
    }
    function get_username()
    {
        $sql = "SELECT username FROM user WHERE email Like ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row["username"];
    }
    function get_access()
    {
        $sql = "SELECT access FROM user WHERE email Like ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row["access"];
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
    function check_email()
    {
        $sql = "SELECT email FROM user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        for (; $row = $result->fetch_assoc();) {
            if ($row['email'] == $this->email) {
                return 1;
            }
        }
        return 0;
    }
    function new_user()
    {
        if ($this->check_email() != 1) {
            $options = ['cost' => 12,];
            $password = password_hash($this->password, PASSWORD_BCRYPT, $options);
            $sql = "INSERT INTO `user`(`username`, `password`, `email`, `ip`, `avatar`, `tmp_password`) VALUES (?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $ip = $this->getIPAddress();
            $stmt->bind_param("ssssss", $this->username, $password, $this->email, $ip, $this->avatar, $this->tmp_password);
            $stmt->execute();
            $this->conn->close();
            $this->send_email();
        }
    }
    function check_password_email()
    {
        $sql = "SELECT tmp_password FROM user WHERE email Like ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if (password_verify($this->tmp_password, $row['tmp_password'])) {
            $password = 1;
        } else {
            $password = 0;
        }
        $this->conn->close();
        if ($password == 1)
            return 1;
        else
            return 0;
    }
    function connect_user()
    {
        $sql = "SELECT password FROM user WHERE email Like ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        var_dump($row);
        if (password_verify($this->password, $row['password'])) {
            $password = 1;
        } else {
            $password = 0;
        }
        $this->conn->close();
        if ($password == 1)
            return 1;
        else
            return 0;
    }
    function user_html()
    {
        $html = "<div class=\"user\">
        
                </div>";
        return $html;
    }
}