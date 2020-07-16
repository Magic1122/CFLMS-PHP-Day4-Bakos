<?php
    require_once 'dbConnection.php';

    if($_POST) {

        $model = $_POST['model'];
        $year = $_POST['year'];
        $hp = $_POST['hp'];
        $img = $_POST['img'];


        $sql = "INSERT INTO car (model, year, hp, img)
        VALUES('$model', '$year', '$hp', '$img');";

        $conn->query($sql);

        if ($conn->error) {
            echo "Some error occured " . $conn->error;
        } else {
            echo "<p>Success!</p>" . "<a href='../index.php'>Go Home</a>";
        }

    }

?>
