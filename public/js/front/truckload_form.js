$(document).ready(function() {


    $('#ship_from').on('keyup',function() {
        var cou_code = $('#ship_from').val();
        if(cou_code.length>0){
        $.ajax({
        url:"/getcountry/",
        method:'get',
        data:{'country':cou_code},
            success:function(response)
            {    
                $("#shipFrom").empty();
                $.each(response.country, function (){
                    $("#shipFrom").append($("<option     />").val(this.city_name+","+this.latitude+","+this.longitude+","+this.state).text(this.city_name+","+this.state));
                });
            }
        });    
        }
    }); 

    $('#ship_to').on('keyup',function() {
        var cou_code = $('#ship_to').val();
        if(cou_code.length>0){
        $.ajax({
        url:"/getcountry/",
        method:'get',
        data:{'country':cou_code},
            success:function(response)
            {    
                $("#shipTo").empty();
                $.each(response.country, function (){
                    $("#shipTo").append($("<option     />").val(this.city_name+","+this.latitude+","+this.longitude+","+this.state).text(this.city_name+","+this.state));
                });
            }
        });    
        }
    }); 

    
      $(".validate").on('blur keyup',function(){
        let invl=$(this).val();
        if(invl.length>0){
            $(this).css("border", "1px solid #234986");
        }else{
            $(this).css("border", "1px solid red");
        }    
      });

});

$("#truckloadForm").on('mousemove',function(){
    let pickup_city=$(".pickup_city").val();
    let deliver_city=$(".deliver_city").val();
    let item_description=$(".item_description").val();
    let checkinput=false;
   

    if(item_description.length>0){
        checkinput=true;
    }else{
        checkinput=false;
    }

   
    if(checkinput){
        $('.media-data>.form-save').prop("disabled", false);
    }else{
        $('.media-data>.form-save').prop("disabled", true);
    } 
});
