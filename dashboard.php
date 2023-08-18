<?php 
    $pageID = 5;        
    include("includes/header.php"); 
?>
</head>
<body class="loginBody">
     <section class="loginContainer dashboard-outlet">
        <div class="containers">
            <div class="dashboard-grid">
                <div class="dashboard-left-side-outlet"> 
                    <div class="logo">
                        <object data="<?=$url_?>assets/images/dashboard-logo.svg"" type=""></object>                        
                    </div>
                    <div class="net-worth">
                        <p>Net Worth</p>
                        <h2><span>$222</span></h2>
                    </div> 
                    <div class="dashboard-menu">
                        <ul>
                            <li>
                                <a href="<?=$url_?>">
                                    <object data="<?=$url_?>assets/images/icons/add_home.svg"" type=""></object>
                                    <span>home</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$url_?>">
                                    <object data="<?=$url_?>assets/images/icons/feed.svg"" type=""></object>
                                    <span>News & Blogs</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=$url_?>">
                                    <object data="<?=$url_?>assets/images/icons/help.svg"" type=""></object>
                                    <span>Contact Support</span>
                                </a>
                            </li>
                        </ul>
                    </div>                  
                </div>
                <div class="dashboard-right-side-outlet">
                    <div class="dashboard-block">
                        <div class="user-manage-header">
                            <div class="username">
                                <h4>Hello, Roni</h4>
                            </div>
                            <div class="user-assets">
                                <ul>
                                    <li>
                                        <a href="<?=$url_?>">
                                            <span>Add assets</span>
                                            <object data="<?=$url_?>assets/images/icons/add.svg"" type=""></object>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$url_?>">
                                            <span>add</span>
                                            <object data="<?=$url_?>assets/images/icons/manage.svg"" type=""></object>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$url_?>">
                                            <span>add</span>
                                            <object data="<?=$url_?>assets/images/icons/notify.svg"" type=""></object>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=$url_?>">
                                            <span>add</span>
                                            <object data="<?=$url_?>assets/images/icons/help.svg"" type=""></object>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
     </section>
    <?php include("includes/footer.php"); ?>   
</body>
</html>