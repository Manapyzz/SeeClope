$(function () {
    $('#roger').submit(function(){
        var data = $(this).serialize();
        $.ajax({
            data: data,
            url: '/articles',
            type: 'POST',
            dataType: 'json',
            success: function() {
                console.log('success');
            },
            error: function () {
                console.log('error');
            }
        });
        return false;
    });
});

