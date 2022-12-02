<?php
    include "../../../connect_todb.php";
    $connection = new Connection();
    $conn = $connection->get_connection();

    function get_score($conn) {
        $id = 10;
        $max = "SELECT score as score FROM user WHERE id = $id;";
        $stmt = $conn->prepare($max);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $max = $row['score'];
        return $max;
    }
    echo get_score($conn);
?>