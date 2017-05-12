<?php
    get_header();
?>
<div id="content">
    <div id="banner">
        <div class="intro" style="    background: #cbcbcb;
    height: 60px;"></div>
    </div>
    <div style="background: #c7000b ;height:506px;overflow: hidden;">
        <div style="width:1200px;position:relative;margin:0 auto;">
        <img src="http://www.songtang.net/wp-content/uploads/2017/03/20170325051930617.jpg" width="1200" height="506" />
        <div style="position:absolute;top:130px;right:230px;">
            <div style="width:80px;border-top:2px solid #fefefe;height:1px;margin-bottom:10px;"></div>
            <div style="color:#fefefe;font-size:28px;">
            <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
            ?>
            </div>
        </div>
        </div>
    </div>
    <div id="main" class="container clearfix" style="width:1200px;">

            <div id="post_list" class="link-block clearfix">
            <?php if(have_posts()) :?>
                <?php while(have_posts()) : the_post(); ?>
                <a href="<?php the_permalink() ?>">
                    <div class="date-block">
                        <span class="day"><?php the_time('d') ?></span>
                        <?php the_time('M') ?><br>
                        <?php the_time('Y') ?>
                    </div>
                    <div class="summary">
                        <h1><?php the_title(); ?></h1>
                        <h3><?=WP_THEME_LANG=='cn'?'发布者':'Publisher '?>: <?php if(WP_THEME_LANG=='cn'){ the_author ();}else{echo get_the_author_meta('first_name');} ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=WP_THEME_LANG=='cn'?'浏览次数':'Views '?>: <?=getPostViews($post->ID);?></h3>
                        <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 420,"......"); ?></p>
                    </div>
                </a>
                <?php endwhile; ?>
                <ul class="pagination">
                    <?php /*gk_page($query_string);*/?>
                </ul>
            <?php else: ?>

            <?php endif; ?>
            </div>

    </div>
</div>

<?php
get_footer();
?>