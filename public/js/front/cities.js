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
});