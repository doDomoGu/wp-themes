$(function(){
    //menu 菜单栏
    _curMenu = $('#menu > .menu-container > ul#header-menu > li.current-menu-item');
    if(_curMenu.length == 0){
        _curMenu = $('#menu > .menu-container > ul#header-menu > li.current-menu-parent');
        if(_curMenu.length == 0){
            _curMenuChildren =$('#menu > .menu-container > ul#header-menu > li > ul.sub-menu > li.current-menu-parent');
            if(_curMenuChildren.length == 0){
                _curMenu = $('#menu > .menu-container > ul#header-menu > li').eq(0);
            }else{
                _curMenu = _curMenuChildren.parent('ul').parent('li.menu-item');
                if(_curMenu.length == 0){
                    _curMenu = $('#menu > .menu-container > ul#header-menu > li').eq(0);
                }
            }
        }
    }
    _curMenu.addClass('on');
    _curMenu.children('a').find('span.bkg').animate({height:'80px',top:'0'},200);

    $('#menu > .menu-container > ul#header-menu > li').mouseenter(function(){
        if($('#menu > .menu-container > ul#header-menu > li.on').length > 0){
            _curMenu.removeClass('on');
            _curMenu.children('a').find('span.bkg').stop().animate({height:'0',top:'80px'},200);
        }
        $(this).addClass('on');
        $(this).children('a').find('span.bkg').stop().animate({height:'80px',top:'0'},200);
    }).mouseleave(function(){
        $(this).removeClass('on');
        $(this).children('a').find('span.bkg').stop().animate({height:'0',top:'80px'},200);

        if($('#menu > .menu-container > ul#header-menu > li.on').length == 0){
            _curMenu.addClass('on');
            _curMenu.children('a').find('span.bkg').stop().animate({height:'80px',top:'0'},200);
        }
    });


    $('#menu > .menu-container > ul#header-menu > li.menu-item-has-children').mouseenter(function(){
        $(this).find('ul.sub-menu').stop().animate({height:'60px',lineHeight:'60px'},200);
    }).mouseleave(function(){
        $(this).find('ul.sub-menu').stop().animate({height:'0',lineHeight:'13px'},200);
    });

    $('#menu > .menu-container > ul#header-menu > li.menu-item-has-children > ul.sub-menu > li').mouseenter(function(){
        $(this).addClass('on');
    }).mouseleave(function(){
        $(this).removeClass('on');
    });
});