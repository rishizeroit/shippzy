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

    

});

$(document).ready(function() {

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

    

});