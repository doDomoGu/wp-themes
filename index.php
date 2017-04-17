<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
if(isset($_GET['lang']) && in_array($_GET['lang'],['cn','en'])){
    $lang = $_GET['lang'];
    setcookie('lang',$lang,time()+3600*24*30);
}else{
    if(isset($_COOKIE['lang'])){
        $lang = $_COOKIE['lang'];
    }else{
        $lang = 'cn';
    }
}

define('WP_THEME_LANG',$lang);

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
