<?php
    include "../../../connect_todb.php";
    $connection = new Connection();
    $conn = $connection->get_connection();

    function add_xp($conn, $id, $new_score) {
        $sql = "UPDATE user SET score = $new_score WHERE id = $id;";
        mysqli_query($conn, $sql);
    }

    $requete = "SELECT * FROM GAME01 WHERE question = " . $_POST['question'] . ";";
    $stmt = $conn->prepare($requete);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $requete = $row['reponse01'];

    if ($requete == $_POST["reponse"]) {
        add_xp($conn, $id_user, $_POST['score'] + $row['xp']);
    }
    mysqli_close($conn);
?>