<?php    
    $pageID = 1;        
    include("includes/header.php"); 
?>
</head>
<body class="loginBody">
     <section class="loginContainer">
        <div class="loginHeading">
            <h2>log in</h2>
        </div>  
        <div class="loginGrid">
            <div class="loginWithGoogle">
                <a href="#">
                    <img src="<?=$url_?>assets/images/googleBtn.png" alt="">
                </a>
            </div>
            <p>or</p>
            <div class="loginForm">
                <form action="">
                    <div class="formFields">
                        <input type="text" name="loginName" placeholder="Name">
                    </div>
                    <div class="formFields">
                        <input type="password" name="loginPass" placeholder="Password">
                    </div>
                    <div class="formFields rememberBox">
                        <input type="checkbox" name="remember">
                        <label for="">Remember me on this device</label>
                    </div>
                    <div class="formFields">
                        <button type="submit">log in</button>
                    </div>
                </form>
            </div>
            <div class="loginForgot">
                <a href="#">Forgot Password?</a>
                <a href="#">New to Wealth? Sign Up</a>
            </div>            
        </div>
     </section>
</body>
</html>