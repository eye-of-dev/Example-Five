$( document ).ready(function() {
    
    $('#show-registr-form').bind('click', function (){
        $('#login-form').slideUp("slow");
        $("#registr-form").slideDown("slow");
    });
    
    $('#show-login-form').bind('click', function (){
        $("#registr-form").slideUp("slow");
        $('#login-form').slideDown("slow");
    });
    
});