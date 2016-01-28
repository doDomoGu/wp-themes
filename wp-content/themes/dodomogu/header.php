<!DOCTYPE HTML>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="renderer" content="webkit">
    <?php include('lib/seo.php'); ?>
    <link rel="stylesheet" href="<?=get_stylesheet_uri()?>" type="text/css" media="screen" />
    <script src="<?=get_template_directory_uri().'/static/js/jquery.min.js'?>"></script>
    <!--<script src="<?/*=get_template_directory_uri().'/static/js/header.js'*/?>"></script>-->
    <?php include('lib/load_script.php');?>
</head>
<body>
<div id="header">
    <div class="container clearfix">
        <h1 class="logo">
            <a title="doDomogu" href="<?=home_url('')?>">
                <img src="<?=get_template_directory_uri().'/static/img/logo.png'?>" alt="doDomoGu" />
            </a>
        </h1>
    </div>
</div>
