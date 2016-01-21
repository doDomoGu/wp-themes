$(function(){
    //nav导航菜单栏
    _curNav = $('#nav > .menu-container > ul#header-menu > li.current-menu-item');
    if(_curNav.length == 0){
        _curNav = $('#nav > .menu-container > ul#header-menu > li.current-menu-parent');
        if(_curNav.length == 0){
            _curNav = $('#nav > .menu-container > ul#header-menu > li').eq(0);
        }
    }
    _curNav.addClass('on');
    _curNav.children('a').find('span.bkg').animate({height:'80px',top:'0'},200);

    $('#nav > .menu-container > ul#header-menu > li').mouseenter(function(){
        if($('#nav > .menu-container > ul#header-menu > li.on').length > 0){
            _curNav.removeClass('on');
            _curNav.children('a').find('span.bkg').stop().animate({height:'0',top:'80px'},200);
        }
        $(this).addClass('on');
        $(this).children('a').find('span.bkg').stop().animate({height:'80px',top:'0'},200);
    }).mouseleave(function(){
        $(this).removeClass('on');
        $(this).children('a').find('span.bkg').stop().animate({height:'0',top:'80px'},200);

        if($('#nav > .menu-container > ul#header-menu > li.on').length == 0){
            _curNav.addClass('on');
            _curNav.children('a').find('span.bkg').stop().animate({height:'80px',top:'0'},200);
        }
    });


    $('#nav > .menu-container > ul#header-menu > li.menu-item-has-children').mouseenter(function(){
        $(this).find('ul.sub-menu').stop().animate({height:'60px',lineHeight:'60px'},200);
    }).mouseleave(function(){
        $(this).find('ul.sub-menu').stop().animate({height:'0',lineHeight:'13px'},200);
    });

    $('#nav > .menu-container > ul#header-menu > li.menu-item-has-children > ul.sub-menu > li').mouseenter(function(){
        $(this).addClass('on');
    }).mouseleave(function(){
        $(this).removeClass('on');
    });
});