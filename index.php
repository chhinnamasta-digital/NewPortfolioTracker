<?php    
    $pageID = 1;        
    include("includes/header.php"); 
?>
</head>
<body>
    <header>
        <?php include("includes/navigation.php"); ?>
        <?php include("includes/banner.php"); ?>
    </header>
    <main>
    <?php include("includes/automated-block.php"); ?>
    
    <section class="trackGlobalContainer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="trackGlobal">
                        <h2>Track Global Banks & Brokerages with Best in Class Connectivity.</h2>
                        <p>Track your Global Bank Accounts, Stocks, Investments, Crypto, DeFi, Physical Assets & Liabilities all in one place. Trusted by the World's Leading Financial Advisors, Portfolio Managers & their HNWI Clients.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <object data="<?=$url_?>assets/images/Rectangle.svg" alt="Banner Img" class="img-fluid"></object>
                </div>
            </div>
        </div>
    </section>
    <section class="trackGlobalContainer2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <object data="<?=$url_?>assets/images/circle.svg" alt="Banner Img" class="img-fluid"></object>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="trackGlobal">
                        <h2>Track your Global <span>Stock Portfolio</span></h2>
                        <p>Track your Global Bank Accounts, Stocks, Investments, Crypto, DeFi, Physical Assets & Liabilities all in one place. Trusted by the World’s Leading Financial Advisors, Portfolio Managers & their HNWI Clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="thousand-thousand">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="automatedContent">
                        <h2>Thousands of households use to track their total assets worth<span></span></h1>                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trackGlobalContainer2 bgSetPosRight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="trackGlobal">
                        <h2><span></span></h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <object data="<?=$url_?>assets/images/circle.svg" alt="Banner Img" class="img-fluid"></object>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php include("includes/footer.php"); ?>   
</body>
</html>