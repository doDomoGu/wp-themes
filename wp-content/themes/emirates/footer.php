				</div>
				<?php /*Bing_banner_span12( 'footer' ); */?>
			</div>
			<footer id="footer">
				<div class="box-md">
					<nav class="menu footer-menu-box" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<span class="menu-title"><span class="dashicons dashicons-menu"></span><?php /*echo Bing_menu_name( 'footer_menu' ); */?></span>
						<?php wp_nav_menu( array(
							'theme_location' => 'footer_menu',
							'container'      => false,
							'items_wrap'     => '<ul id="footer-menu">%3$s</ul>',
							'fallback_cb'    => 'Bing_empty_menu_fallback'
						) ); ?>
					</nav>
					<!--<p class="footer-left"><?php /*echo Bing_mpanel( 'footer_text_left' ); */?></p>
					<p class="footer-right"><?php /*echo Bing_mpanel( 'footer_text_right' ); */?></p>-->
				</div>
				<?php /*Bing_mobile_menu(); */?>
			</footer>
		</div>
	<?php wp_footer(); ?>
	</body>
</html>