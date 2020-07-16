<?php

    include_once 'actions/dbConnection.php'; 

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $name = $_POST['name'];

        $pass = password_hash($pass, PASSWORD_DEFAULT);


        $query = "INSERT INTO `user`(name, email, password) 
        VALUES('$name', '$email', '$pass')";

        $result = $conn->query($query);


        if (!$result) {
            die('Some error happaned' . $conn->error);
        } else {
            header('Location: login.php');
        }


    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <label for="email">Email: </label>
        <input type="text" name="email">
        <label for="password">Password: </label>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
    <p><a href="login.php">You already have an account? Login here!</a></p>
</body>
</html>