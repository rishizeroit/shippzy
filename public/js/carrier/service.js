$(document).ready(function() {

    $('#add_service').click(function() {
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

    $('#submit_service').on('submit', function() {
        event.preventDefault();
        var formData = $("#submit_service").serialize();
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: formData,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    $('.alert-danger').html(data.success);
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

    $('.editService').click(function() {
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

    $('#service_update').on('submit', function() {
        event.preventDefault();
        var formData = $("#service_update").serialize();
        $.ajax({
            url: $(this).attr('action'),
            method: 'post',
            data: formData,
            success: function(data) {
                console.log(data);
                if ($.isEmptyObject(data.error)) {
                    $('.card-title').html(data.success);
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

    $('.showService').click(function() {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            method: 'get',
            success: function(data) {
                $('#commonModal').show();
                $('#htmlData').html(data);
                $('.modal-title').html('Additional Service');
            }
        });
    });
});