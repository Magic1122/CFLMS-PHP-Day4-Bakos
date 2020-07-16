<?php
    require_once 'actions/dbConnection.php';

    if ($_GET['id']) {

        $id = $_GET['id'];

        $sql = "SELECT * FROM car WHERE id = $id;";

        $result = $conn->query($sql);

        $result_arr;

        if ($result->num_rows != 0) {

            $result_arr = $result->fetch_assoc();

        } else {
            echo "No records with the id number of " . $id;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="actions/aEdit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $result_arr['id']; ?>">
        <input type="text" name="model" value="<?php echo $result_arr['model']; ?>"><br>
        <input type="text" name="year" value="<?php echo $result_arr['year']; ?>"><br>
        <input type="text" name="hp" value="<?php echo $result_arr['hp']; ?>"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
