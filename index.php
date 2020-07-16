<?php 
    include_once 'actions/dbConnection.php'; 

    if (!$_SESSION['user_id']) {
        header("Location: login.php");
    }

    $sql = "SELECT * FROM car;";

    $result = $conn->query($sql);

    if ($conn->error) {
        echo die('Some error happened') . $conn->error;
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Car Rental</title>
</head>
<body>
    <a href="create.php">Add a new Car</a>
    <br>
    <a href="logout.php">Logout</a>
    <?php 

        if ($result -> num_rows == 0) {
            echo '<div><h1>No results to show!</h1></div>';
        } elseif ($result -> num_rows == 1) {
            $row = $result->fetch_assoc();

            echo "<div>" . "<img src='" . "${row['img']}" . "' alt='car-photo'>"
                . "<p>Model: ${row['model']}" . "<p>Year: ${row['year']}" . "<p>Hp: ${row['hp']}"
                . "<br><a href='edit.php?id=" . $row['id'] . "'>" . "Edit Car</a><br>"
                . "<a href='delete.php?id=" . $row['id'] . "'>" . "Delete Car</a>"
                . "</div>"
            ;

        } else {
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            foreach($rows as $row) {
                echo "<div>" . "<img src='" . "${row['img']}" . "' alt='car-photo'>"
                . "<p>Model: ${row['model']}" . "<p>Year: ${row['year']}" . "<p>Hp: ${row['hp']}"
                . "<br><a href='edit.php?id=" . $row['id'] . "'>" . "Edit Car</a><br>"
                . "<a href='delete.php?id=" . $row['id'] . "'>" . "Delete Car</a>"
                . "</div>"
            ;
            }
        }

    ?>
    
</body>
</html>
