<footer id="footer">
    <div class="container clearfix">
        <div class="footer-content">
            <img src="<?php bloginfo('template_url');?>/static/img/footer.png" />
        </div>
        <div class="copyright">
            Copyright &copy; 1993 - <?=date('Y')?> <strong><a href="<?php bloginfo('siteurl'); ?>/"><?php if(WP_THEME_LANG=='cn')bloginfo('name');else{echo 'China\'s Glory United';}?></a></strong> . All rights reserved
        </div>
    </div>
</footer>
<!-- /Footer -->
<?php
//wp_footer();
?>
</body>
</html>