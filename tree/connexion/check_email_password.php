<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
include 'init_class_user.php';

$connection = new Connection();
$conn = $connection->get_connection();
$sql = "SELECT tmp_password FROM user WHERE email Like ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET["email"]);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if (strcmp($row["tmp_password"], $_GET["password"]) == 0)
    echo "1";
else {
    echo "0";
}