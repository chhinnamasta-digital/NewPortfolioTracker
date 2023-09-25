<?php  
    
    $pageID = 6;        
    include("includes/header.php");     
    include("includes/sessions.php");    
?>
<style>
    body{
        background: #fff;
    }
    .suggession{
        display: flex;
        justify-content: center;
        margin-top: 100px;
        flex-flow: column;
        justify-content: center;
    }
    .datalist>li>span{
        color: red;
    }
</style>
</head>
<body>
    <div class="suggession">
        <form action="" id="forms">
            <input type="text" name="" id="searchField" class="search-string">
        </form>
        <ul class="datalist">

        </ul>

    </div>

    <?php include("includes/footer.php"); ?> 
    <script>
        $(function(){
            let strArray = [];
            async function suggession(){            
                const FetchApiUrl = await fetch("https://dummyjson.com/products");
                const ResponseData = await FetchApiUrl.json();
                // console.warn(ResponseData.products)
                ResponseData.products.forEach(function(items){
                    strArray.push(items.title.toLowerCase().trim());
                })
                // console.warn(strArray);
                
                $(".search-string").on("input", function(e){
                    console.warn(e)
                document.querySelectorAll(".datalist>li").forEach((items)=> items.remove());
                for(let listName of strArray){
                    if(listName.startsWith(e.target.value) && e.target.value != ''){
                        let words = "<span>"+listName.substr(0, e.target.value.length)+"</span>";
                        words += listName.substr(e.target.value.length)
                        $(".datalist").append("<li>"+ words +"</li>");
                    }
                }

                
            })

            }
            suggession();
            // let itemsArray = [];
            // let input_ = document.querySelector("#searchField");

            // async function apiFetch(){
            //     const fetchData = await fetch("https://dummyjson.com/products");
            //     const response = await fetchData.json();
            //     // console.warn(response.products)
            //     let productList = response.products;
            //     productList.forEach(function(items){
            //         itemsArray.push(items.title.toLowerCase().trim());
            //     })

            //     input_.addEventListener("input", function(e){
            //         removeElements();
            //         let inputString = e.target.value.toLowerCase();
            //         for(let i of itemsArray){
            //             if(i.startsWith(inputString) && inputString != ''){
            //                 let listItem = document.createElement("li");

            //                 // let word = "<b>" + i.substr(0, inputString.length) + "</b>";
            //                 let word = i.substr(inputString.length);
            //                 console.warn(word);
                            
            //                 listItem.innerHTML = i;
            //                 document.querySelector(".datalist").appendChild(listItem);
            //             }
            //         }
            //     })
            // }

            // apiFetch();
            
            // function removeElements() {
            //     //clear all the item
            //     let items = document.querySelectorAll('.datalist li');
            //     items.forEach((item) => {
            //         item.remove();
            //     });
            // }
        })
    </script>  
</body>
</html>