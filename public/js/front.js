$(document).ready(function() {

    /*
    $("input[type='password']").keyup(function(){
        $(this).css({"font-size":"50px"});
    });
    */
    

    $('[data-toggle="tooltip"]').tooltip();        
    $('[data-toggle="popover"]').popover();


    toastr.options = {
        timeOut: 5000,
        "closeButton": true
    };


    $(".btn-login").on('click',function(){
        hide_sidebar();
        $(".bg-fade-auth").fadeIn(300);
        $(".auth-modal-login").addClass("auth-show").animate({"right":"0"}, 300);
    });


    $(".btn-login-switch").on('click',function(){
        // $(".bg-fade-auth").fadeIn(300);
        $(".auth-modal").animate({"right":"-400px"}, 300).fadeOut(300, function(){
            $(this).removeClass("auth-show");
            $(".auth-modal-login").addClass("auth-show").animate({"right":"0"}, 300);
        });
    });


    $(".btn-register").on('click',function(){
        hide_sidebar();
        $(".bg-fade-auth").fadeIn(300);
        $(".auth-modal-register").addClass("auth-show").animate({"right":"0"}, 300);
    });

    
    $(".btn-register-switch").on('click',function(){
        // $(".bg-fade-auth").fadeIn(300);
        $(".auth-modal").animate({"right":"-400px"}, 300).fadeOut(300, function(){
            $(this).removeClass("auth-show");
            $(".auth-modal-register").addClass("auth-show").animate({"right":"0"}, 300);
        });
    });

    
    $(".btn-forgot-password-switch").on('click',function(){
        // $(".bg-fade-auth").fadeIn(300);
        $(".auth-modal").animate({"right":"-400px"}, 300).fadeOut(300, function(){
            $(this).removeClass("auth-show");
            $(".auth-modal-forgot-password").addClass("auth-show").animate({"right":"0"}, 300);
        });
    });

    
    $(".bg-fade-auth, .bg-fade-auth-backend, .auth-modal-close").on('click',function(){
        $(".auth-modal").animate({"right":"-400px"}, 300).fadeOut(300, function(){
            $(this).removeClass("auth-show auth-show-default");
        });
        $(".bg-fade-auth, .bg-fade-auth-backend").fadeOut(300, function(){
            $(this).removeClass("auth-show auth-show-default")
        });
        hide_sidebar();
    });
    


    $(".password-toggle").on('click',function(){
        var password_toggle_type = $(this).siblings("input").attr("type");
        if (password_toggle_type == "password"){
            $(this).children().removeClass("fa-eye").addClass("fa-eye-slash");
            $(this).siblings("input").attr("type","text");
        }
        else{
            $(this).children().removeClass("fa-eye-slash").addClass("fa-eye");
            $(this).siblings("input").attr("type","password");
        }
    });
    
   function show_sidebar(){
        $("#sidebar_fade").fadeIn(300);
        $("#sidebar").css("display","block");
        $("#sidebar").animate({"left":"0%"},300);
    }

    function hide_sidebar(){
        $("#sidebar_fade").fadeOut(300);
        $("#sidebar").animate({"left":"-100%"},300, function(){
            $("#sidebar").css("display","none");
        });
    }

    $(".header_link_sidebar").click(function(){
        show_sidebar();
    });

    $("#sidebar_fade").click(function(){
        hide_sidebar();
    });

    /*
    var scroll_to = "";
    function scroll_to_section(scroll_to){
        if ((scroll_to !== "") && (scroll_to.substr(0,1) === "#")){
            $("html,body").animate({
                scrollTop: $(scroll_to).offset().top
            },500);
        }
    }

    scroll_to = window.location.hash;
    scroll_to_section(scroll_to);

    $("a[href]").click(function(e){
        if (!$(this).hasClass("no-scroll")){
            scroll_to = $(this).attr("href").trim();
            scroll_to_section(scroll_to);
        }
    });
    */
   
});


function highlightShareLink(id='direct-share-link'){
    var copyText = document.getElementById(id);
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/
}

function copyShareLink(id='direct-share-link'){
    /* Get the text field */
    var copyText = document.getElementById(id);

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied: " + copyText.value);
}


function pad(str, max){
    str = str.toString();
    return str.length < max ? pad(str + "0", max) : str;
}

function addCommas(nStr, divider=',', decimal='.'){
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? decimal + pad(x[1],2) : decimal+'00';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + divider + '$2');
    }
    return x1 + x2;
}

function priceFormat(price, currency_symbol='$'){
    // alert(price);
    // alert(currency_symbol);

    price_rounded = Math.round(price * 1000) / 1000;
    
    if (currency_symbol != "€"){
        return (currency_symbol + addCommas(price_rounded));
    }
    else{
        return (addCommas(price_rounded,'.',',') + ' ' + currency_symbol);
    }
}