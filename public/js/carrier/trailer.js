$(document).ready(function() {

    $('#add_trailer').click(function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Add Trailer');
                }
            });    
    }); 

    $('#trailer_add').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#trailer_add').serialize(),
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

    $('.editTrailer').on('click',function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Edit Trailer');
                }
            });    
    }); 
  
    $('#trailer_update').on('submit', function(){
        event.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:'post',
            data: $('#trailer_update').serialize(),
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

    $('.showTrailer').click(function() {
        event.preventDefault();
        $.ajax({
                url:$(this).attr('href'),
                method:'get',
                success:function(data)
                {    
                    $('#commonModal').show();
                    $('#htmlData').html(data);
                    $('.modal-title').html('Trailer');
                }
            });    
    });

    $('#close_modal').click(function(){
        $('#commonModal').hide();
     });
});