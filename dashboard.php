<?php  
    $pageID = 5;        
    include("includes/header.php");     
    include("includes/sessions.php");
?>
</head>
<body class="loginBody">
     <section class="loginContainer dashboard-outlet">
        <div class="containers">
            <div class="dashboard-grid">                
                <!-- User login id -->
                <input type="hidden" value="<?=$_SESSION['sessionUserId'];?>" id="getLoginUserId">

                <?php include("includes/dashboard-left.php"); ?> 
                <?php include("includes/dashboard-right.php"); ?> 
                <?php include("includes/dashboard-footer.php"); ?> 
            </div>
        </div>        
     </section>
    
    <?php include("includes/footer.php"); ?>   

    <script>
        $(function(){
            const userId = document.querySelector("#getLoginUserId");
            const totalWorthAmountElm = document.querySelector("#total-worth-amount");
            let coin_token_array_object = [];
            let coin_token_name = [];
            let netWorthValue = [];
            let sumOfValue = 0;     
            $.getJSON("ajax-files/assetsAllRecords.php", {userId: $(userId).val()}, function(data){
                console.warn(data);
                // document.write(date_add)
                if(data.status == true){
                    data.all_records.forEach(function(dataFields){
                        let _tokenName = dataFields.coin_token_name.toLowerCase();
                        let _token_quantity = parseFloat(dataFields.quantity);
                        coin_token_array_object.push({tokenname: _tokenName, quantity: _token_quantity});
                    })
                    //Get token name 
                    for(let i = 0; i < coin_token_array_object.length; i++){
                        // console.warn(coin_token_array_object[i].tokenname)
                        coin_token_name.push(coin_token_array_object[i].tokenname);
                    }
                    const livePriceUrl = `https://api.coingecko.com/api/v3/simple/price?ids=${coin_token_name}&vs_currencies=chf`;
                    
                    console.warn(livePriceUrl);
                    fetch(livePriceUrl)
                    .then(function(responseLivePrice){
                        return responseLivePrice.json();
                    })
                    .then(function(livePriceData){                                         
                        const livePriceValueData = livePriceData;
                        var sumOfVal = 0;
                        for(let j = 0; j < coin_token_array_object.length; j++){
                            
                            let coin_quantity = coin_token_array_object[j].quantity;
                            let tName = coin_token_array_object[j].tokenname;
                            let livePriceValue = livePriceValueData[tName]['chf'];
                            let  mulNumber = livePriceValue * coin_quantity;
                            sumOfVal = mulNumber + sumOfVal; 
                            console.warn(coin_quantity, "coin_quantity");  
                            console.warn(livePriceValue, "livePriceValue");
                            console.warn(sumOfVal, "sumOfVal");                      
                        }
                        console.warn(sumOfVal.toFixed(5))
                        $(totalWorthAmountElm).html(sumOfVal.toFixed(5));                    
                    })
                }                
            })

        })
    </script> 
    <!-- rddry -->
</body>
</html>