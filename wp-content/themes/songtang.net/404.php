<?php
get_header();
setPostViews(get_the_ID());
?>
<style>
    #banner {
        width:100%;
        overflow: hidden;
    }
    #banner .intro {
        background: url('/wp-content/themes/songtang.net/static/img/common/banner_001.jpg') no-repeat center;
        height:93px;
    }
</style>
<div id="content">
    <div id="banner">
        <div class="intro"></div>
    </div>
    <div id="nav" class="container">
        <div class="wrap">
            <div class="crumbs">
                <a href="<?php bloginfo('siteurl'); ?>/">首页</a>
            </div>

        </div>

    </div>
    <div id="main" class="container clearfix" style="padding:40px 15px;height:400px;">
        <h1 style="font-size:40px;">很抱歉，您要访问的页面不存在！</h1>
    </div>
</div>

<?php
get_footer();
?>