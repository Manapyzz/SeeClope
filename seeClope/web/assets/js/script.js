/**
 * Created by Wrex on 16/05/2016.
 */
/*---MENU HAMBURGER---*/
$(function () {
    $('#sidebar-btn').click(function () {
        $('#sidebar').toggleClass('visible');
    });
    /*-------------------*/
    $('.blockSearch').hide();
    $('.fa-chevron-up').click(function () {
        $('.fa-chevron-up').toggleClass('fa-chevron-down');
        $('.blockSearch').slideDown('slow', function () {
            $(this).show();
        });
        $('.fa-chevron-down').click(function () {
            $('.blockSearch').hide();
        })
    });
});



