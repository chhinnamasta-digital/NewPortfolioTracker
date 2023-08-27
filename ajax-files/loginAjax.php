<?php
    include("../php-functions/functions.php"); 
    $u_loging_email = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $u_login_pass = $_POST['userPass'];

    if($u_loging_email == '' || $u_login_pass == ''){
        $response = ["message" => "All Fields Required", "status" => false];
    }
    else{        
        $select_auth = "SELECT * FROM user_signup  WHERE user_email='$u_loging_email' AND confirmation_status='1'";
        $select_auth_query = mysqli_query($conn, $select_auth);
        $select_auth_num = mysqli_num_rows($select_auth_query);
    
    
        if($select_auth_num == 1){
            
            $fetch_password = mysqli_fetch_array($select_auth_query);
            $userId = $fetch_password['id'];
            $user_name = $fetch_password['user_name'];
            $passwordMatch = password_verify($u_login_pass, $fetch_password['user_password']);
            if($passwordMatch == 1){ 
                   
                $_SESSION['sessionUserEmail'] = $u_loging_email;
                $_SESSION['sessionUserId'] = $userId;
                $_SESSION['sessionUserName'] = $user_name;
    
                // select if user not fill the start company form
                // if($userType == "start company"){
                //     $select_startComp = "SELECT * FROM scc_start_company WHERE sin_user_id='$userId' AND status='1'";
                //     $select_startComp_query = mysqli_query($conn, $select_startComp);
                //     $select_startComp_num = mysqli_num_rows($select_startComp_query);
                //     if($select_startComp_num == 1){
                //         $response = ["message" => "", "status" => true, "location" => "home"];
                //     }
                //     else{
                //         $response = ["message" => "", "status" => false, "location" => "start company"];
                //     }
                // }
                // else{
                //      $response = ["message" => "", "status" => true, "location" => "home"];
                // }
                $response = ["message" => "", "status" => true, "location" => "home"];
            }
            else{
                $response = ["message" => "Wrong Password", "status" => false];
            }
        }
        else{
            $response = ["message" => "Did you Verify Email link/Invalid credentials ?....", "status" => false];
        }
    }

    echo json_encode($response);
?>