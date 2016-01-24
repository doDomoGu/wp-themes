<?php
    get_header();
?>
<div id="content">
    <div id="banner">
        <ul class="pics">
            <li style="background-image: url('<?php bloginfo('template_url')?>/static/img/test/banner1_1920.jpg');" class="b1"><a href="/" target="_blank"></a></li>
            <li style="background-image: url('<?php bloginfo('template_url')?>/static/img/test/banner2_1920.jpg');" class="b2"><a href="/" target="_blank"></a></li>
            <li style="background-image: url('<?php bloginfo('template_url')?>/static/img/test/banner3.jpg');" class="b3"><a href="/" target="_blank"></a></li>
        </ul>
        <div class="btns">
            <a href="javascript:void(0);" class="prev"><span class="off"></span><span class="on"></span></a>
            <a href="javascript:void(0);" class="next"><span class="off"></span><span class="on"></span></a>
        </div>
        <div class="g-wrap">
            <ul class="idxs">
                <li style="margin-top: 0px;" class="on"></li>
                <li style="margin-top: 0px;" class=""></li>
                <li style="margin-top: 0px;" class=""></li>
            </ul>
        </div>
    </div>
    <div id="news-slide">
        <div class="item">
            <a href="/">万科物业与优步（Uber）启动深度合作<span>2015.11.06</span></a>
            <a class="more" href="/">更多新闻</a>
        </div>
        <div class="item">
            <a href="/">关于欢迎安邦保险集团成为万科重要股东的声明<span>2015.12.23</span></a>
            <a class="more" href="/">更多新闻</a>
        </div>
        <div class="item">
            <a href="/">12月23日，王石在瑞士信贷与投资者交流<span>2015.12.23</span></a>
            <a class="more" href="/">更多新闻</a>
        </div>
    </div>
    <div id="subjects">
        <div class="g-wrap state-0">
            <a href="/" target="_blank" class="item-1" idx="1">
                <span class="p1">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_1.jpg">
                </span>
                <span class="p2" style="left: 350px; top: 21px;">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_1_2.jpg">
                </span>
            </a>
            <a href="/" target="_blank" class="item-2" idx="2">
                <span class="p1">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_2.jpg">
                </span>
                <span class="p2">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_2_2.jpg">
                </span>
            </a>
            <a href="/0" class="item-3" idx="3">
                <span class="p1">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_3.jpg">
                </span>
                <span class="p2">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_3_2.jpg">
                </span>
            </a>
            <a href="/" target="_blank" class="item-4" idx="4">
                <span class="p1">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_4.jpg">
                </span>
                <span class="p2">
                    <img alt="" src="<?php bloginfo('template_url');?>/static/img/test/slider_4_2.jpg">
                </span>
            </a>
        </div>
    </div>
</div>
<?php
    get_footer();
?>