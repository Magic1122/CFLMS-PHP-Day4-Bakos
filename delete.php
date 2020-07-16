<?php

    require_once 'actions/dbConnection.php';

    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = "DELETE FROM car WHERE id = $id;";

        $conn->query($sql);

        if($conn->error) {
            echo "Error " . $conn->error;
        } else {
            echo 'Success<br>
                <a href="index.php">Back Home</a>';
        }

}

$conn->close();

?>
