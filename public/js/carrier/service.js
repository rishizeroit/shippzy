$(document).ready(function() {

    $('#add_servicePrice').click(function() {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            method: 'get',
            success: function(data) {
                $('#commonModal').show();
                $('#htmlData').html(data);
                $('.modal-title').html('Add Service');
            }
        });
    });

    $('#submit_servicePrice').on('submit', function() {
        event.preventDefault();
        var formData = $("#submit_servicePrice").serialize();
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: formData,
            success: function(data) {
                if ($.isEmptyObject(data.error) && $.isEmptyObject(data.eror)) {
                    $(".already").find("p").html('');
                    $(".already").css('display', 'block');
                    $(".already").find("p").html(data.success);
                    setTimeout(function() {
                        location.reload(true);
                    }, 2000);
                } else if(!$.isEmptyObject(data.error)) {
                    printErrorMsg(data.error);
                }else
                {
                    $(".already").find("p").html('');
                    $(".already").css('display', 'block');
                    $(".already").find("p").html(data.eror);
                }
            }
        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
    });

    $('.editServicePrice').click(function() {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            method: 'get',
            success: function(data) {
                $('#commonModal').show();
                $('#htmlData').html(data);
                $('.modal-title').html('Edit Service');
            }
        });
    });
    $('#close_modal').click(function() {
        $('#commonModal').hide();
    });

    $('#servicePrice_update').on('submit', function() {
        event.preventDefault();
        var formData = $("#servicePrice_update").serialize();
        $.ajax({
            url: $(this).attr('action'),
            method:'post',
            data: formData,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    $(".already").find("p").html('');
                    $(".already").css('display', 'block');
                    $(".already").find("p").html(data.success);
                    setTimeout(function() {
                        location.reload(true);
                    }, 2000);
                } else {
                    printErrorMsg(data.error);
                }
            }

        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
    });

});