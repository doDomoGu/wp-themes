<?php
    //css
    $cssDir = '/static/css/';
    $cssFile = false;
    if(is_home())
        $cssFile = 'home.css';
    if(is_search())
        $cssFile = 'search.css';
    if(is_single())
        $cssFile = 'single.css';
    if(is_page()){
        if('page_intro.php' == get_page_template_slug()){
            $cssFile = 'page_intro.css';
        }else{
            $cssFile = 'page.css';
        }
    }

    if(is_category())
        $cssFile = 'category.css';
    if(is_month())
        $cssFile = 'month.css';
?>
<?php if($cssFile!=false):?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?><?=$cssDir.$cssFile?>" type="text/css" media="screen" />
<?php endif;?>

<?php
    //js
    $jsDir = '/static/js/';
    $jsFile = false;
    $jsFiles = [];
    if(is_home())
        $jsFile = 'home.js';
    if(is_search())
        $jsFile = 'search.js';
    if(is_single())
        $jsFile = 'single.js';
    if(is_page()){
        if('page_intro.php' == get_page_template_slug()){
            $jsFiles[] = 'nav.js';
            //$jsFile = 'page_intro.js';
        }else{
            //$jsFile = 'page.js';
        }
    }
    if(is_category())
        $jsFiles[] = 'category.js';
        $jsFiles[] = 'nav.js';
    if(is_month())
        $jsFile = 'month.js';
?>
<?php if(!empty($jsFiles)):?>
    <?php foreach($jsFiles as $js):?>
        <script src="<?php bloginfo('template_url'); ?><?=$jsDir.$js?>"></script>
    <?php endforeach;?>
<?php elseif($jsFile!=false):?>
    <script src="<?php bloginfo('template_url'); ?><?=$jsDir.$jsFile?>"></script>
<?php endif;?>

