<?php 
    $pageID = 6;        
    include("includes/header.php");     
    include("includes/sessions.php");    
?>
</head>
<body class="loginBody">
     <section class="loginContainer congratulations">
        <div class="success-message-container">
            <div class="success-sign">
                <svg xmlns="http://www.w3.org/2000/svg" width="149" height="149" viewBox="0 0 149 149" fill="none">
                    <mask id="mask0_119_985" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="149" height="149">
                    <rect width="149" height="148.736" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_119_985)">
                    <path d="M55.875 130.144C45.5278 130.144 36.7326 126.529 29.4896 119.299C22.2465 112.069 18.625 103.289 18.625 92.9602V55.7761C18.625 45.4472 22.2465 36.6676 29.4896 29.4374C36.7326 22.2072 45.5278 18.592 55.875 18.592H93.125C103.472 18.592 112.267 22.2072 119.51 29.4374C126.753 36.6676 130.375 45.4472 130.375 55.7761V92.9602C130.375 103.289 126.753 112.069 119.51 119.299C112.267 126.529 103.472 130.144 93.125 130.144H55.875ZM68.2917 99.1575L105.542 61.9735L96.85 53.2972L68.2917 81.805L54.6333 68.1708L45.9417 76.8471L68.2917 99.1575ZM55.875 117.75H93.125C99.9542 117.75 105.8 115.322 110.664 110.468C115.527 105.613 117.958 99.7773 117.958 92.9602V55.7761C117.958 48.959 115.527 43.1232 110.664 38.2686C105.8 33.414 99.9542 30.9867 93.125 30.9867H55.875C49.0458 30.9867 43.1997 33.414 38.3365 38.2686C33.4733 43.1232 31.0417 48.959 31.0417 55.7761V92.9602C31.0417 99.7773 33.4733 105.613 38.3365 110.468C43.1997 115.322 49.0458 117.75 55.875 117.75Z" fill="white"/>
                    </g>
                </svg>
            </div>
            <div class="success-message-text">
                <h4>Congratulations</h4>
                <p>Your Asset has been created</p>
            </div>
        </div>
        <div class="success-message-btn-block">
            <div class="addmore-assets">
                <a href="<?=$url_?>add-assets.php" class="add-assets-btn">
                    <span>Add more</span>
                    <object data="<?=$url_?>assets/images/icons/add.svg"" type=""></object>
                </a>
            </div>
            <div class="goBack">
                <a href="<?=$url_?>dashboard.php"><span>&laquo;&nbsp;</span><span>Back to Dashboard</span></a>
            </div>
        </div>
     </section>    
    <?php include("includes/footer.php"); ?>   
</body>
</html>