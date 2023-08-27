<?php
    include("../php-functions/functions.php"); 
    $token_id = mysqli_real_escape_string($conn, $_POST['id']);
    $token_name = mysqli_real_escape_string($conn, $_POST['token_name']);
    $date_of_purchase = mysqli_real_escape_string($conn, $_POST['date_of_purchase']);
    $price_time_of_purchase = mysqli_real_escape_string($conn, $_POST['price_time_of_purchase']);
    $quantityField = mysqli_real_escape_string($conn, $_POST['quantityField']);

    if($token_name == '' || $date_of_purchase == '' || $quantityField == '' || $price_time_of_purchase == ''){
        $response = ["message" => "All Fields Required", "status" => false];
    }
    else{
        $_assets_table =  "SELECT * FROM assets_added WHERE coin_token_name = '$token_name'";
        $_assets_table_query = mysqli_query($conn, $_assets_table);
        $_assets_table_num_rows = mysqli_num_rows($_assets_table_query);
        if($_assets_table_num_rows == 1){
            $response = ["message" => "Token Name already Exist", "status" => false];
        }
        else{
            $insert_data = "INSERT INTO assets_added(assets_id, coin_token_name, date_of_purchase, price_time_of_purchase, quantity) VALUES('$token_id','$token_name','$date_of_purchase','$price_time_of_purchase', '$quantityField')";
            $query = mysqli_query($conn, $insert_data);
            if($query){
                $response = ["message" => "Your Asset has been created", "status" => true];
            }
            else{
                $response = ["message" => "Something went wrong", "status" => false];
            }
        }
    }    

    echo json_encode($response);
?>