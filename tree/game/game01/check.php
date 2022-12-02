<?php
    include "../../../connect_todb.php";
    $connection = new Connection();
    $conn = $connection->get_connection();

    function generate_question($conn) {
        $max = "SELECT MAX(id) as id FROM GAME01;";
        $stmt = $conn->prepare($max);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $max = $row['id'];
        $min = "SELECT MIN(id) as id FROM GAME01;";
        $stmt = $conn->prepare($min);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $min = $row['id'];
        $i = rand($min, $max);
        $rqt = "SELECT * FROM GAME01 WHERE id = $i;";
        $stmt = $conn->prepare($rqt);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row;
    }
    // var_dump(json_encode(generate_question($conn)));
    echo json_encode(generate_question($conn));
?>