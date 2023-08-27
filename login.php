<?php 
    $pageID = 3;        
    include("includes/header.php"); 
?>
</head>
<body class="loginBody">
     <section class="loginContainer">
        <div class="loginHeading">
            <h2><span>log in </span><a href="<?=$url_?>">Go Back</a></h2>
        </div>  
        <div class="loginGrid">
            <div class="loginWithGoogle">
                <a href="#">
                    <img src="<?=$url_?>assets/images/googleBtn.png" alt="">
                </a>
            </div>
            <p>or</p>
            <div class="loginForm">
                <form action="<?=$_SERVER['PHP_SELF'];?>" id="loginForm" method="post" autocomplete="off">
                    <div class="formFields">
                        <input type="text" name="loginEmail" placeholder="Email" id="userEmail">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> 
                            <div class="messageBox"></div> 
                    </div>
                    <div class="formFields">
                        <input type="password" name="loginPass" placeholder="Password" id="loginUserpass">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> 
                            <div class="messageBox"></div> 
                    </div>
                    <div class="formFields rememberBox">
                        <input type="checkbox" name="remember">
                        <label for="">Remember me on this device</label>
                    </div>
                    <div class="formFields">
                        <button type="submit">log in</button>
                    </div>
                    <div id="success"></div>
                </form>
            </div>
            <div class="loginForgot">
                <a href="#">Forgot Password?</a>
                <a href="<?=$url_?>signup.php">New to Wealth? Sign Up</a>
            </div>            
        </div>
     </section>  
    <?php include("includes/footer.php"); ?>   
</body>
</html>