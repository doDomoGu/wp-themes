$(function(){
    $('#nav > .menu-container > ul#header-menu > li').mouseenter(function(){
        $(this).addClass('hover');
    }).mouseleave(function(){
        $(this).removeClass('hover');
    });


    $('#nav > .menu-container > ul#header-menu > li.menu-item-has-children').mouseenter(function(){
        $(this).find('ul.sub-menu').show();
    }).mouseleave(function(){
        $(this).find('ul.sub-menu').hide();
    });

    $('#nav > .menu-container > ul#header-menu > li.menu-item-has-children > ul.sub-menu > li').mouseenter(function(){
        $(this).addClass('hover');
    }).mouseleave(function(){
        $(this).removeClass('hover');
    });


});