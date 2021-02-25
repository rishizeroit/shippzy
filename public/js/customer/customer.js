$(document).ready(function() {

    $('#add_customer').click(function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Add Customer');
                }
            });    
    }); 

    $('#customer_add').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#customer_add').serialize(),
            success:function(data){
            if($.isEmptyObject(data.error)){
                $('.card-title').html(data.success);
                setTimeout(function () {
                    location.reload(true);
                  }, 2000);
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

    $('.editCustomer').on('click',function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Edit Customer');
                }
            });    
    }); 
  
    $('#customer_update').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#customer_update').serialize(),
            success:function(data){
            if($.isEmptyObject(data.error)){
                $('.card-title').html(data.success);
                setTimeout(function () {
                    location.reload(true);
                  }, 2000);
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

    $('.showCustomer').click(function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Customer');
                }
            });    
    });

    $('#close_modal').click(function(){
        $('#commonModal').hide();
     });
});