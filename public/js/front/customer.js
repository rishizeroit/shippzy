$(document).ready(function() {

    $('#customer_add').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#customer_add').serialize(),
            success:function(data){
            if($.isEmptyObject(data.error)){
                window.location.href= "/login";
            }else{
                printErrorMsg(data.error);
            }
        }
            
        });  
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });

    

    $('#customer_login').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#customer_login').serialize(),
            success:function(data){
            if($.isEmptyObject(data.false)){
                window.location.href= "/";
            }else{
                    $("#error").html(data.false);
            }
        }
            
        });  
    });

    $('#contactForm').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#contactForm').serialize(),
            success:function(data){
            if($.isEmptyObject(data.error)){
                $('form[name="contactform"]')[0].reset();
                $(".success").css('display', 'block');
                $(".success").find("p").html(data.success);
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }else{
                printErrorMsg(data.error);
            }
        }
            
        });  
        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
   

});
