<?php  
    
    $pageID = 6;        
    include("includes/header.php");     
    include("includes/sessions.php");    
?>
</head>
<body class="loginBody">
     <section class="loginContainer add-assets-section">
        <div class="add-assets-block">
            <button type="button">
                <span>Add Assets</span>
                <object data="<?=$url_?>assets/images/icons/add.svg" type=""></object>
            </button>
            <div class="assets-list">
                <ul>
                    <?php
                        $select_assets_list = "SELECT * From assets_list WHERE id != ''";
                        $query_assets_list = mysqli_query($conn, $select_assets_list);
                        while($run_assets_list = mysqli_fetch_array($query_assets_list)){
                            $assets_list_id = $run_assets_list['id'];
                            $assets_name = $run_assets_list['assets_name'];
                            $assets_img = $run_assets_list['assets_img'];
                    ?>
                            <li data-list-id="<?=$assets_list_id?>">
                                <object data="<?=$url_?>assets/images/icons/<?=$assets_img?>" type=""></object>
                                <span><?=$assets_name?></span>
                            </li>
                    <?php 
                        }
                    ?>
                </ul>
                <div class="selectedAssetsForm">
                    <div class="equityBlock" id="1">
                        <form action="<?=$_SERVER['PHP_SELF'];?>">
                            <input type="text" class="search-name" placeholder="equity Search here">
                            
                        </form>
                        <div class="asset-name">
                            <ul id="asset-name-list">                            
                            </ul>
                        </div>
                    </div>
                    <div class="bondsBlock" id="2">
                        <form action="<?=$_SERVER['PHP_SELF'];?>">
                            <input type="text" class="search-name" placeholder="bonds Search here">
                        </form>
                        <div class="asset-name">
                            <ul id="asset-name-list">                            
                            </ul>
                        </div>
                    </div>
                    <div class="cryptoBlock" id="3">
                        <form action="<?=$_SERVER['PHP_SELF'];?>">
                            <input type="text" class="search-name" placeholder="crypto Search here">
                        </form>
                        <div class="asset-name">
                            <ul id="asset-name-list">                            
                            </ul>
                        </div>
                    </div>
                    <div class="cashBlock" id="4">
                        <div class="selectCurrency">
                            <h4>Select your Currency</h4>                                                   
                            <ul id="asset-name-list"> 
                                <li>
                                    <div class="currency-symbol">
                                        <span>$</span><span>usd</span>
                                    </div>
                                </li>                
                                <li>
                                    <div class="currency-symbol">
                                        <span>&#x20A3;</span><span>chf</span>
                                    </div>
                                </li>                 
                                <li>
                                    <div class="currency-symbol">
                                        <span>&#x20A4;</span><span>gbp</span>
                                    </div>
                                </li>                   
                                <li>
                                    <div class="currency-symbol">
                                        <span>&#x20AC;</span><span>eur</span>
                                    </div>
                                </li>                       
                            </ul>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="currencyForm">
                <h4></h4>
                <form class="row g-3" action="<?=$_SERVER['PHP_SELF'] ?>?>" method="post" id="addAssetsForm">
                    <div class="col-6">
                        <label for="staticEmail2">Coin/Token Name</label>
                    </div>
                    <div class="col-6">
                        <input type="hidden" class="form-control-plaintext" id="user_id" value="<?=$sessionUserId?>">
                        <input type="hidden" class="form-control-plaintext" id="asset_id" >
                        <input type="text" class="form-control-plaintext" id="token_name" >
                    </div>
                    <div class="col-6">
                        <label for="staticEmail2">Date of Purchase</label>
                    </div>
                    <div class="col-6">
                        <input type="date" class="form-control-plaintext" id="date_of_purchase" >
                    </div>
                    <div class="col-6">
                        <label for="staticEmail2">Price at Time of Purchase (CHF)</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control-plaintext" id="price_time_of_purchase" >
                    </div>
                    <div class="col-6">
                        <label for="staticEmail2">Quantity Purchased</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control-plaintext" id="quantity" >
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" id="save-asset-btn">Save Asset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="goBack">
            <a href="<?=$url_?>dashboard.php"><span>&laquo;&nbsp;</span><span>Back to Dashboard</span></a>
        </div>
     </section>    
    <?php include("includes/footer.php"); ?>   
</body>
</html>