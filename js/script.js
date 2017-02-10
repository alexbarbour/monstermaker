jQuery.extend(jQuery.easing,{
    easeInOutExpo: function(x, t, b, c, d){
        if (t==0) return b;
        if (t==d) return b+c;
        if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
        return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
    }
});//from the easing plugin for jquery

$(document).ready(function(){

    $('a[href=nav]').click(function(e){
        e.preventDefault(); //stops the browser from attempting to load a new page
        $('nav').removeClass('visible'); //hide the nav bar when a selection is made
        $('html,body').stop().animate({scrollTop: $('.'+$(this).data('scrollto')).offset().top-65 }, 700, 'easeInOutExpo', function(){}); //scrolls to selection with the easing animation
    });


    $('.toggle-menu').click(function(){
        $('nav').toggleClass('visible');
    });
    //for mobile. toggles the nav bar when pressed

    if($(window).width() < 800){
        $('.pricing > div > div:nth-of-type(3)').insertAfter($('.pricing > div > div:nth-of-type(1)'));
    }

});