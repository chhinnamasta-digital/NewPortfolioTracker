$(function(){

    // signup form validation message 
    let signupForm = document.querySelector("#signupForm");
    $("#signupForm").submit(function(e){
        e.preventDefault();
        if(formValidation()){
            signupDataInsertAjax();
        } 
        $("#success").fadeIn();
    })
    signupForm?.addEventListener("keydown", function(){
        formValidation();
        $("#success").fadeOut();
    });
    signupForm?.addEventListener("change", function(){
        formValidation();
        // $("#success").fadeOut();
    });
    
    function formValidation(){        
        const userName = $("#username").val();
        const userEmail = $("#useremail").val();
        const userPass = $("#userpass").val();

        const emailPattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,7}\b$/i;

        if(userName == ""){
            errorMessage("username","Name Field required");
            return false;
        }
       else if(userName.replace(/\s+/g, '').length <= 3){
            errorMessage("username", "Enter Atleast 4 Character");
            return false;
        }
        else{
            successMessage("username");
        }
        if(userEmail == ""){
            errorMessage("useremail", "Email Field required");
            return false;
        }
            
        if(!emailPattern.test(userEmail)){
            errorMessage("useremail", "Enter Valid Email Address");
            return false;
        }
        else{
            successMessage("useremail");
        }
        if(userPass == ""){
            errorMessage("userpass", "Password Field required");
            return false;
        }
        else if(userPass.replace(/\s+/g, '').length < 6){
            errorMessage("userpass", "Password length not less than 6 Char");
            return false;
        }
        else{
            successMessage("userpass");
        }
        
        if($("#i_agree").is(":checked")){            
            successMessage("i_agree");
        }
        else{            
            errorMessage("i_agree", "Check Box");
            return false;
        }

        return true;
    }


    // signUp Data Insert
    let signupDataInsertAjax = () =>{
         const formDataObject = {
            userName: $("#username").val(),
            userEmail: $("#useremail").val(),
            userPass: $("#userpass").val(),
            i_agreeVal: $("#i_agree").val()
         }
         $.post("ajax-files/signupAjax.php", formDataObject, function(data){

            const response = JSON.parse(data);
            console.warn(response);
            if(response.status == true){
                $("#signupForm").trigger('reset');
                $("#success").html("<p>"+response.message+"</p>");
                setTimeout(() => {
                    $("#success").fadeOut();
                    
                    document.querySelectorAll(".formFields").forEach((items) =>{
                        $(items).removeClass("messageSuccess");
                    })

                }, 3000);
            }
            else{
                $("#success").html("<p>"+response.message+"</p>");
            }
         })
    }

    // login form data

    $("#loginForm").submit(function(e){
        e.preventDefault();
        if(loginFormValidation()){
            loginUser();
        } 
        $("#success").fadeIn();
    })

    const loginForm = document.querySelector("#loginForm");
    loginForm?.addEventListener("keydown", function(){
        loginFormValidation();
        $("#success").fadeOut();
    });
    loginForm?.addEventListener("change", function(){
        loginFormValidation();
    });
    function loginFormValidation(){     
        const userEmail = $("#userEmail").val();
        const userPass = $("#loginUserpass").val();

        if(userEmail == ""){
            errorMessage("userEmail", "Email Field required");
            return false;
        }          
        else{
            successMessage("userEmail");
        }
        if(userPass == ""){
            errorMessage("loginUserpass", "Password Field required");
            return false;
        }         
        else{
            successMessage("loginUserpass");
        }
        return true;
    }
    const loginUser = () =>{

        const formDataObject = {
            userEmail: $("#userEmail").val(),
            userPass: $("#loginUserpass").val(),
         }

         $.post("ajax-files/loginAjax.php", formDataObject, function(data){

            const response = JSON.parse(data);
            console.warn(response);
            if(response.status == false){
                $("#success").html("<p>"+response.message+"</p>");
            }
            else{
                window.location.href="dashboard.php";
            }
         })
    }

    
    const errorMessage = (id, message) =>{
        $("#"+id).closest(".formFields").addClass("messageError").removeClass("messageSuccess");
        $("#"+id).closest(".formFields").children(".messageBox").html(`<p>${message}</p>`)
    }
    const successMessage = (id) =>{
        $("#"+id).closest(".formFields").addClass("messageSuccess").removeClass("messageError");
        $("#"+id).closest(".formFields").children(".messageBox").html(" ");
    }

    // Dashboard Script Add Assets list

    let addList = document.querySelectorAll(".add-assets-block .assets-list ul>li");
    addList.forEach(function(items){
        items.addEventListener("click", function(){
            const assetsListId = $(items).attr("data-list-id");  

            // enable search tab
            const activeBlockId = $(".selectedAssetsForm").children("div");
            $.each(activeBlockId, function(index, items){
                const _idAttr = $(items).attr("id");
                if(assetsListId == _idAttr){
                    $(this).fadeIn().siblings().fadeOut();
                }
            })
        })
    })

    // Fetch Crypto data from api Function
    let _selectOption = document.querySelector(".cryptoBlock #asset-name-list");
    let searchNameInput = document.querySelector(".cryptoBlock .search-name");
  
    searchNameInput.addEventListener("input", function(e){
        const searchValue = $(".cryptoBlock .search-name").val();
        $(".cryptoBlock #asset-name-list").html("");

        let expression = new RegExp(searchValue, "i");
        $.getJSON("https://dummyjson.com/products", function(data){            
            $.each(data.products, function(index, value){
                // console.warn(value.title.search(expression)) // if no record match then display -1
                if(value.title.search(expression) != -1){
                    $(".cryptoBlock #asset-name-list").append('<li>'+value.title+'</li>');                    
                }
            })            
        })        
    }) 

    $(document).on("click", ".cryptoBlock #asset-name-list>li", function(){
        // console.warn($(this));
        $(".cryptoBlock .search-name").val($(this).text());
        $(".cryptoBlock #asset-name-list").html("");
    })

})