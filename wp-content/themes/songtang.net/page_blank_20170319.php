<?php
/*
Template Name:单页面_空白_20170319
*/
?>

<?php
    get_header();
?>
<div id="content">
    <div id="banner">
        <div class="intro"></div>
    </div>
    <div id="main" class="container">
        <div id="post_content">
        <?=$post->post_content?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php
    get_footer();
?>