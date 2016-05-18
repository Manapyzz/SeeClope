/**
 * Created by Wrex on 16/05/2016.
 */
/*---MENU HAMBURGER---*/
$(function(){
    $('#sidebar-btn').click(function() {
        $('#sidebar').toggleClass('visible');
    });

    $('.textMenu').hover(function(){
       $(this).css("color", "red")
    });
});



