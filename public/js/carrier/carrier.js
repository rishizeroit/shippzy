$(document).ready(function() {
    $('#add_carrier').click(function() {
        event.preventDefault();
        $.ajax({
            url:$(this).attr('href'),
            method:'get',
            success:function(data)
            {    
                $('#commonModal').show();
                $('#htmlData').html(data);
                $('.modal-title').html('Add Carrier');
            }
        });    
    }); 

    $('#carrier_add').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#carrier_add').serialize(),
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

    $('.editCarrier').on('click',function() {
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
    $('#carrier_update').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#carrier_update').serialize(),
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

    $('.showCarrier').click(function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Carrier');
                }
            });    
    });
    $('#close_modal').click(function(){
        $('#commonModal').hide();
     });
});
