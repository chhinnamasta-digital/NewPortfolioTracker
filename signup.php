<?php   
    $pageID = 4;        
    include("includes/header.php"); 
?>
</head>
<body class="loginBody">
     <section class="loginContainer">
        <div class="loginHeading">
            <h2><span>Sign up </span><a href="<?=$url_?>">Go Back</a></h2>
        </div>  
        <div class="loginGrid">
            <div class="loginWithGoogle">
                <a href="#">
                    <img src="<?=$url_?>assets/images/signup.png" alt="">
                </a>
            </div>
            <p>or</p>
            <div class="loginForm">
                <form action="<?=$_SERVER['PHP_SELF'];?>" id="signupForm" method="post" autocomplete="off">
                    <div class="formFields">
                        <input type="text" name="loginName" placeholder="Name" id="username">                        
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> 
                            <div class="messageBox"></div>                       
                    </div>
                    <div class="formFields">
                        <input type="email" name="loginEmail" placeholder="Email" id="useremail">                        
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> 
                            <div class="messageBox"></div>                                   
                    </div>
                    <div class="formFields">
                        <input type="password" name="loginPass" placeholder="Password" id="userpass">                        
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> 
                            <div class="messageBox"></div>                                   
                    </div>
                    <div class="formFields rememberBox">
                        <input type="checkbox" name="remember" value="I agree" id="i_agree">
                        <label for="">I agree</label>
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> 
                    </div>
                    <div class="formFields">
                        <button type="submit">Sign up</button>
                    </div>
                    <div id="success"></div>
                </form>
            </div>
            <div class="loginForgot">
                <a href="#">By continuing to sign up you accept our Terms of Service and Privacy Policy.</a>
                <a href="<?=$url_?>login.php" class='mt-lg-4'>Already have an account? Log In</a>
            </div>            
        </div>
     </section>  
    <?php include("includes/footer.php"); ?>   
</body>
</html>