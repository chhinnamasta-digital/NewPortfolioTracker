<?php
    include("../php-functions/functions.php"); 
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $i_agreeVal = mysqli_real_escape_string($conn, $_POST['i_agreeVal']);
    $userPass = $_POST['userPass'];
    $password_hash = password_hash($userPass, PASSWORD_DEFAULT);

    if($userName == '' || $userEmail == '' || $userPass == '' || $i_agreeVal == ''){
        $response = ["message" => "All Fields Required", "status" => false];
    }
    else{
        
        if(!preg_match("/^[a-zA-Z-' ]*$/", $userName) ){
            $response = ["message" => "Name Should be Charcter", "status" => false];
        }
        elseif (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
            $response = ["message" => "Email Not Valid", "status" => false];
        }
        else{
            $to = $userEmail;
            $subject = "Welcome Email";
            $from = $userEmail;
            $confirm_code = bin2hex(random_bytes(20));

            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
            // Create email headers
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
            
            // Compose a simple HTML email message
            $message = '<html><body>';
            $message .= '<p>'.$subject.'</p>';
            $message .= '<p>Hello!</p>';
            $message .= '<p>Thank you so much for signing up to use Swiss Company Creations</p>';
            $message .= '<p>Please click on the link below to activate your account.</p>';

            $message .= "<a href='".$url_."emailverify/verifiy.php?email=$userEmail&v_code=$confirm_code'><strong>Click here to Verifiy</strong></a>";
            
            $message .= '<p>You can always contact us at support@sccforyou.com if you need any help.</p>';
            $message .= '<p>Yours sincerely,</p>';
            $message .= '<p>Swiss Company Creations</p>';
            $message .= "<p style='font-size: 10px'>Disclaimer: This email and any attachments are intended solely for the named recipient(s) and may contain confidential and/or privileged information. If you have received this email in error, please notify the sender immediately and delete it from your system. Any unauthorized use, disclosure, copying, or distribution of this email and its contents is strictly prohibited. </p>";
            $message .= '</body></html>';

            $_signup_table =  "SELECT * FROM user_signup WHERE user_email = '$userEmail'";
            $_signup_table_query = mysqli_query($conn, $_signup_table);
            $_signup_table_num_rows = mysqli_num_rows($_signup_table_query);
            if($_signup_table_num_rows == 1){
                $response = ["message" => "This email already Exist", "status" => false];
            }
            else{
                $insert_data = "INSERT INTO user_signup(user_name, user_email, user_password, user_i_agree, confirmation_code) VALUES('$userName','$userEmail','$password_hash','$i_agreeVal', '$confirm_code')";
                $query = mysqli_query($conn, $insert_data);
                if($query){
                    // Sending email
                    // if(mail($to, $subject, $message, $headers)){
                    //     $response = ["message" => "Please Check your email", "status" => true];
                    // } 
                    // else{
                    //     $response = ["message" => "Email sent To Fail", "status" => false];
                    // } 
                    $response = ["message" => "Please Check your email", "status" => true];
                }
                else{
                    $response = ["message" => "Something went wrong", "status" => false];
                }
            }
        }
    }

    echo json_encode($response);
?>