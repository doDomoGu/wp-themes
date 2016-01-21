<?php
    $jsDir = '/static/js/';
    $jsFile = false;
    if(is_home())
        $jsFile = 'home.js';
    if(is_search())
        $jsFile = 'search.js';
    if(is_single())
        $jsFile = 'single.js';
    if(is_page())
        $jsFile = 'page.js';
    if(is_category())
        $jsFile = 'category.js';
    if(is_month())
        $jsFile = 'month.js';
?>
<?php if($jsFile!=false):?>
<script src="<?php bloginfo('template_url'); ?><?=$jsDir.$jsFile?>"></script>
<?php endif;?>
