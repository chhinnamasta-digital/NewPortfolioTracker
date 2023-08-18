<?php
    $hostName = "82.180.174.238";
    $userName = "u974474633_tracker";
    $dbPassword = "mwyGmjWnU9[P";
    $dbName = "u974474633_portfolio";
    $conn = "";

    $conn = mysqli_connect($hostName, $userName, $dbPassword, $dbName);
    if(!$conn){
        die("Server Connection Error:". mysqli_connect_error());
        exit();
    }

?>