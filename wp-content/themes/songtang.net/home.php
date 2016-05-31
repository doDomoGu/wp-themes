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
        $template_url = get_template_directory_uri();
        $mag_pics = [
            1=>['p'=>$template_url."/static/img/home/magizine_01.png"],
            2=>['p'=>$template_url."/static/img/home/magizine_02.png"],
            3=>['p'=>$template_url."/static/img/home/magizine_03.png"],
        ];
        $mag_pics_1 = of_get_option('index_mag_pics_1');
        $mag_pics_2 = of_get_option('index_mag_pics_2');
        $mag_pics_3 = of_get_option('index_mag_pics_3');
        if($mag_pics_1)
            $mag_pics[1]['p'] = $mag_pics_1;
        if($mag_pics_2)
            $mag_pics[2]['p'] = $mag_pics_2;
        if($mag_pics_3)
            $mag_pics[3]['p'] = $mag_pics_3;

        $mag_link_1 = of_get_option('index_mag_link_1');
        $mag_link_2 = of_get_option('index_mag_link_2');
        $mag_link_3 = of_get_option('index_mag_link_3');
        if($mag_pics_1)
            $mag_pics[1]['l'] = $mag_link_1;
        if($mag_pics_2)
            $mag_pics[2]['l'] = $mag_link_2;
        if($mag_pics_3)
            $mag_pics[3]['l'] = $mag_link_3;
    ?>

    <div id="pic_mag" >
        <div class="container">
            <div class="mag_00">
                <img src="<?php bloginfo('template_url');?>/static/img/home/magizine_00.png" />
            </div>
            <div class="mag_div mag_01">
                <?php if(isset($mag_pics[1]['l']) && $mag_pics[1]['l']!=''):?>
                <a href="<?=$mag_pics[1]['l']?>" target="_blank" />
                <?php endif;?>
                    <img src="<?=$mag_pics[1]['p']?>" />
                <?php if(isset($mag_pics[1]['l']) && $mag_pics[1]['l']!=''):?>
                </a>
                <?php endif;?>
            </div>
            <div class="mag_div mag_02">
                <?php if(isset($mag_pics[2]['l']) && $mag_pics[2]['l']!=''):?>
                    <a href="<?=$mag_pics[2]['l']?>" target="_blank" />
                <?php endif;?>
                <img src="<?=$mag_pics[2]['p']?>" />
                <?php if(isset($mag_pics[2]['l']) && $mag_pics[2]['l']!=''):?>
                    </a>
                <?php endif;?>
            </div>
            <div class="mag_div mag_03">
                <?php if(isset($mag_pics[3]['l']) && $mag_pics[3]['l']!=''):?>
                    <a href="<?=$mag_pics[3]['l']?>" target="_blank" />
                <?php endif;?>
                <img src="<?=$mag_pics[3]['p']?>" />
                <?php if(isset($mag_pics[3]['l']) && $mag_pics[3]['l']!=''):?>
                    </a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>