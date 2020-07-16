<?php
    require_once 'dbConnection.php';

    if($_POST) {

        $id = $_POST['id'];
        $model = $_POST['model'];
        $year = $_POST['year'];
        $hp = $_POST['hp'];


        $sql = "UPDATE car SET model = '$model', year = '$year', hp = '$hp' WHERE id = '$id';";

        $conn->query($sql);

        if ($conn->error) {
            echo "Some error occured " . $conn->error;
        } else {
            echo "<p>Success!</p>" . "<a href='../index.php'>Go Home</a>";
        }

    }


?>
