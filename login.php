<?php

    include_once 'actions/dbConnection.php'; 

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "SELECT * FROM `user` WHERE email = '$email'";
        $result = $conn->query($query);

        if ($conn->error) {
            die('Some error happaned' . $conn->error);
        }

        $row = $result->fetch_assoc();
        
        // echo var_dump($row);

        if (password_verify($pass, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_role'] = $row['role'];
            
            header('Location: index.php');

        } else {
            die('Incorrect password');
        }


    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="email">Email: </label>
        <input type="text" name="email">
        <label for="password">Password: </label>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
    <p><a href="register.php">You don't have an account? Register here!</a></p>
</body>
</html>