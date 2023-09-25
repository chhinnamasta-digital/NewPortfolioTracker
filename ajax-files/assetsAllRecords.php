<?php
    header("Content-Type:application/json");
    header("Access-Control-Allow-Origin:*");

    include("../php-functions/functions.php");
    $user_id = $_GET['userId'];

    $_assets_table =  "SELECT * FROM assets_added WHERE user_id = '$user_id'";
    $_assets_table_query = mysqli_query($conn, $_assets_table);
    $_assets_table_num_rows = mysqli_num_rows($_assets_table_query);
    if($_assets_table_num_rows != 0){
        $_asset_fetch = mysqli_fetch_all($_assets_table_query, MYSQLI_ASSOC);
        $response = ["message" => "Asset Table data", "all_records" => $_asset_fetch, "status" => true];
    }
    else{
            $response = ["message" => "Something went wrong", "status" => false];
    }
    echo json_encode($response);
?>