<?php 
    session_start();
    
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbase = 'car_rental';

    $conn = mysqli_connect($host, $user, $pwd, $dbase);

    if ($conn->connect_error) {
        echo 'Some error happened ' . $conn->connect_error;
    }
    
?>