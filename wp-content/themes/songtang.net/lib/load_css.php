<?php
    $cssDir = '/static/css/';
    $cssFile = false;
    if(is_home())
        $cssFile = 'home.css';
    if(is_search())
        $cssFile = 'search.css';
    if(is_single())
        $cssFile = 'single.css';
    if(is_page())
        $cssFile = 'page.css';
    if(is_category())
        $cssFile = 'category.css';
    if(is_month())
        $cssFile = 'month.css';
?>
<?php if($cssFile!=false):?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?><?=$cssDir.$cssFile?>" type="text/css" media="screen" />
<?php endif;?>
