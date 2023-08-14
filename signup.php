<?php    
    $pageID = 1;        
    include("includes/header.php"); 
?>
</head>
<body class="loginBody">
     <section class="loginContainer">
        <div class="loginHeading">
            <h2>Sign up</h2>
        </div>  
        <div class="loginGrid">
            <div class="loginWithGoogle">
                <a href="#">
                    <img src="<?=$url_?>assets/images/signup.png" alt="">
                </a>
            </div>
            <p>or</p>
            <div class="loginForm">
                <form action="">
                    <div class="formFields">
                        <input type="text" name="loginName" placeholder="Name">
                    </div>
                    <div class="formFields">
                        <input type="email" name="loginEmail" placeholder="Email">
                    </div>
                    <div class="formFields">
                        <input type="password" name="loginPass" placeholder="Password">
                    </div>
                    <div class="formFields rememberBox">
                        <input type="checkbox" name="remember">
                        <label for="">I agree</label>
                    </div>
                    <div class="formFields">
                        <button type="submit">Sign up</button>
                    </div>
                </form>
            </div>
            <div class="loginForgot">
                <a href="#">By continuing to sign up you accept our Terms of Service and Privacy Policy.</a>
                <a href="<?=$url_?>login.php" class='mt-lg-4'>Already have an account? Log In</a>
            </div>            
        </div>
     </section>
</body>
</html>