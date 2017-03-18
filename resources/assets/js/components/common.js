/**
 * Created by bong on 2017. 2. 22..
 */




$(document).ready(function(){
   $('.hamburger a').click(function(){
        $(this).parent('.hamburger').toggleClass('active');
        $('.menu_main').toggleClass('active');
   });

   // item detail popup
    $('.portfolio_pop').click(function(){
        $('.popup.itemdetail').addClass('active');
    });
    $('.btn_close').click(function(){
        $('.popup').removeClass('active');
    });

});
