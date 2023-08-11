<?php
    $hostName = "localhost";
    $userName = "root";
    $dbPassword = "";
    $dbName = "portfolio_db";
    $conn = "";

    $conn = mysqli_connect($hostName, $userName, $dbPassword, $dbName);
    if(!$conn){
        die("Server Connection Error:". mysqli_connect_error());
        exit();
    }

?>