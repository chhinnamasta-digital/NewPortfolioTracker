<?php    
    if(!isset($_SESSION['sessionUserEmail'])){
        header("location: $url_");
   }
   else{
        $sessionUserId = $_SESSION['sessionUserId'];
        $sessionUserName = $_SESSION['sessionUserName'] ;
        $uEmail = $_SESSION['sessionUserEmail'];    
   }
    
?>