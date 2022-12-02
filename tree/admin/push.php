<?php
    header('Content-Type: text/html; charset=utf-8');
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include "../../connect_todb.php";
    $connection = new Connection();
    $conn = $connection->get_connection();

    $sql = "INSERT INTO GAME01 (question, reponse01, reponse02, reponse03, xp)
    VALUES ('".$_POST["question"]."', '".$_POST["rep1"]."', '".$_POST["rep2"]."', '".$_POST["rep3"]."', '".$_POST["xp"]."')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);
?>