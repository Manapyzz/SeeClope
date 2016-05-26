$(function () {

    var pathname = window.location.pathname;

    var splitUrl = pathname.split('/');

    console.log(splitUrl[3]);

    $('.profile_comment').submit(function(){
        var data = $(this).serialize();
        $.ajax({
            data: data,
            url: pathname,
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                $('.allReviews').prepend(
                    '<div>' +
                    data[0] + '<br>' +
                    data[1] + '<br>' +
                    data[2] + '<br>' +
                    '</div>' + '<br>'
                );
            }
        });
        return false;
    });
});

