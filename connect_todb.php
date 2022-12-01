<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class Connection
{
    public $path;

    function __construct()
    {
        $this->path = parse_ini_file("sex_info.ini");
    }
    function get_connection()
    {
        $servername = $this->path['BDD_HOST'];
        $username = $this->path['BDD_USER'];
        $password = $this->path['BDD_PASSWORD'];
        $dbname = $this->path['BDD'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)
            die("Connection failed: " . $conn->connect_error);
        return $conn;
    }
}