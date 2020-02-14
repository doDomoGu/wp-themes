<?php
/*
Template Name:单页面_空白_20170319
*/
?>

<?php
    get_header();
?>
<div id="content">
<!--    <div id="banner">-->
<!--        <div class="intro"></div>-->
<!--    </div>-->
    <div id="main" class="container">
        <div id="post_content">
            <?php
            if(WP_THEME_LANG == 'en'){
                $postInEnglish = get_post($post->post_id_in_english);
                $post_content = $postInEnglish->post_content;
            }else{
                $post_content = $post->post_content;
            }
            ?>
        <?=$post_content?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php
    get_footer();
?>