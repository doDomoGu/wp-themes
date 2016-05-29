<?php
    get_header();
?>
<?php
    $banner_pics = [1=>[],2=>[],3=>[]];
    $pics_1 = of_get_option('index_banner_pics_1');
    $pics_2 = of_get_option('index_banner_pics_2');
    $pics_3 = of_get_option('index_banner_pics_3');
    if($pics_1)
        $banner_pics[1]['p'] = $pics_1;
    if($pics_2)
        $banner_pics[2]['p'] = $pics_2;
    if($pics_3)
        $banner_pics[3]['p'] = $pics_3;

    $link_1 = of_get_option('index_banner_link_1');
    $link_2 = of_get_option('index_banner_link_2');
    $link_3 = of_get_option('index_banner_link_3');
    if($pics_1)
        $banner_pics[1]['l'] = $link_1;
    if($pics_2)
        $banner_pics[2]['l'] = $link_2;
    if($pics_3)
        $banner_pics[3]['l'] = $link_3;

?>
<div id="content">
    <div id="banner">
        <ul class="pics">
            <?php if(!empty($banner_pics)):?>
            <?php $i=1;foreach($banner_pics as $bp):?>
                <?php if(isset($bp['p']) && $bp['p']!=''):?>
            <li style="background-image: url('<?=$bp['p']?>');" class="b<?=$i?>"><a href="<?=isset($bp['l']) && $bp['l']!=''?$bp['l']:'/'?>" target="_blank"></a></li>
                <?php $i++;endif;?>
            <?php endforeach;?>
            <?php endif;?>
        </ul>
        <div class="btns">
            <a href="javascript:void(0);" class="prev"><span class="off"></span><span class="on"></span></a>
            <a href="javascript:void(0);" class="next"><span class="off"></span><span class="on"></span></a>
        </div>
        <div class="g-wrap">
            <ul class="idxs">
                <?php for($i=0;$i<count($banner_pics);$i++):?>
                <li style="margin-top: 0;" class="<?=$i==0?'on':''?>"></li>
                <?php endfor;?>
            </ul>
        </div>
    </div>
        <?php
            $news_cate_id = of_get_option('index_news_cate_id');
            $recent = new WP_Query("showposts=5&cat=".$news_cate_id);

        ?>


    <div id="news-slide">
        <?php while($recent->have_posts()) : $post_item = $recent->the_post();?>
        <div class="item">
            <a href="<?=get_the_permalink()?>"><?php the_title();?><span><?php the_time('Y.m.d')?></span></a>
            <a class="more" href="<?php echo get_category_link(get_the_category()[0]->term_id)?>">更多新闻</a>
        </div>
        <?php   endwhile; wp_reset_query();  ?>
    </div>

    <?php
        $slide_pics = [1=>[],2=>[],3=>[]];
        $slide_pics_1 = of_get_option('index_slide_pics_1');
        $slide_pics_2 = of_get_option('index_slide_pics_2');
        $slide_pics_3 = of_get_option('index_slide_pics_3');
        if($slide_pics_1)
            $slide_pics[1]['p'] = $slide_pics_1;
        if($slide_pics_2)
            $slide_pics[2]['p'] = $slide_pics_2;
        if($slide_pics_3)
            $slide_pics[3]['p'] = $slide_pics_3;

        $slide_link_1 = of_get_option('index_slide_link_1');
        $slide_link_2 = of_get_option('index_slide_link_2');
        $slide_link_3 = of_get_option('index_slide_link_3');
        if($slide_pics_1)
            $slide_pics[1]['l'] = $slide_link_1;
        if($slide_pics_2)
            $slide_pics[2]['l'] = $slide_link_2;
        if($slide_pics_3)
            $slide_pics[3]['l'] = $slide_link_3;

        $slide_txt_1 = of_get_option('index_slide_txt_1');
        $slide_txt_2 = of_get_option('index_slide_txt_2');
        $slide_txt_3 = of_get_option('index_slide_txt_3');
        if($slide_pics_1)
            $slide_pics[1]['t'] = $slide_txt_1;
        if($slide_pics_2)
            $slide_pics[2]['t'] = $slide_txt_2;
        if($slide_pics_3)
            $slide_pics[3]['t'] = $slide_txt_3;
    ?>

    <div id="pic_down" >
        <div class="container">
        <?php if(!empty($slide_pics)):$k=1;?>
            <?php foreach($slide_pics as $sp):?>
                <?php if(isset($sp['p']) && $sp['p']!=''):?>
                    <?php if(isset($sp['l']) && $sp['l']!=''):?>
                        <a href="<?=$sp['l']?>" target="_blank">
                    <?php endif;?>
                            <span class="pic_down_span <?=$k==3?'span_right':''?>">
                                <img class="pic_down_img" src="<?=$sp['p']?>" alt="" title="" />
                                <span class="pic_down_txt"><?=$sp['t']?></span>
                            </span>
                    <?php if(isset($sp['l']) && $sp['l']!=''):?>
                        </a>
                    <?php endif;?>
                <?php endif;?>
            <?php $k++;endforeach;?>
        <?php endif;?>
        </div>

        <!--<a href="http://www.baidu.com" target="_blank">
            <img src="<?/*=bloginfo('template_url');*/?>/static/img/slide/a1.jpg" alt="站长素材1" title="" />
        </a>
        <img src="<?/*=bloginfo('template_url');*/?>/static/img/slide/a2.jpg" alt="站长素材2" title="" />
        <img src="<?/*=bloginfo('template_url');*/?>/static/img/slide/a3.jpg" alt="站长素材3" title="" />-->
    </div>

    <!--<div id="slidedeck_frame" class="skin-slidedeck">
        <dl class="slidedeck">
            <dt>Slide 1</dt>
            <dd><img src="<?/*=bloginfo('template_url');*/?>/static/img/slidedeck/1.jpg"/>Slide content</dd>
            <dt>Slide 2</dt>
            <dd><img src="<?/*=bloginfo('template_url');*/?>/static/img/slidedeck/2.jpg"/>Slide content</dd>
            <dt>Slide 3</dt>
            <dd><img src="<?/*=bloginfo('template_url');*/?>/static/img/slidedeck/3.jpg"/>Slide content</dd>
            <dt>Slide 4</dt>
            <dd><img src="<?/*=bloginfo('template_url');*/?>/static/img/slidedeck/4.jpg"/>Slide content</dd>
            <dt>Slide 5</dt>
            <dd><img src="<?/*=bloginfo('template_url');*/?>/static/img/slidedeck/5.jpg"/>Slide content</dd>
        </dl>
    </div>-->
    <!--<div id="subjects">
        <div class="g-wrap state-0">
            <a href="/" target="_blank" class="item-1" idx="1">
                <span class="p1">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_1.jpg">
                </span>
                <span class="p2" style="left: 350px; top: 21px;">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_1_2.jpg">
                </span>
            </a>
            <a href="/" target="_blank" class="item-2" idx="2">
                <span class="p1">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_2.jpg">
                </span>
                <span class="p2">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_2_2.jpg">
                </span>
            </a>
            <a href="/" class="item-3" idx="3">
                <span class="p1">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_3.jpg">
                </span>
                <span class="p2">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_3_2.jpg">
                </span>
            </a>
            <a href="/" target="_blank" class="item-4" idx="4">
                <span class="p1">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_4.jpg">
                </span>
                <span class="p2">
                    <img alt="" src="<?php /*bloginfo('template_url');*/?>/static/img/home/slider_4_2.jpg">
                </span>
            </a>
        </div>
    </div>-->
</div>
<?php
    get_footer();
?>