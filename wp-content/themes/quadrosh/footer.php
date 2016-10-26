<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			

			<div class="site-info">
			<svg version="1.1" 
							id="sns_x5F_logo_x5F_text" 
							class="footer_logo"
							xmlns="http://www.w3.org/2000/svg" 
							xmlns:xlink="http://www.w3.org/1999/xlink"
							x="0px" y="0px" 
							viewBox="0 0 256.9 90.4" 
							style="enable-background:new 0 0 256.9 90.4;" 
							xml:space="preserve"
							>
						<style type="text/css">
							.logotext_0{fill:#3B909C;}
						</style>
						<g id="XMLID_57_">
							<path id="XMLID_59_" class="logotext_0" d="M135.1,72.3c-2.8,1.4-8.5,2.8-15.8,2.8c-16.8,0-29.5-10.6-29.5-30.2
								c0-18.7,12.7-31.3,31.1-31.3c7.4,0,12.1,1.6,14.2,2.7l-1.9,6.3c-2.9-1.4-7.1-2.5-12-2.5c-14,0-23.3,8.9-23.3,24.6
								c0,14.6,8.4,24,22.9,24c4.7,0,9.5-1,12.6-2.5L135.1,72.3z"/>
							<path id="XMLID_61_" class="logotext_0" d="M152.4,14.6v25h28.8v-25h7.8v59.6h-7.8v-28h-28.8v28h-7.7V14.6H152.4z"/>
							<path id="XMLID_271_" class="logotext_0" d="M244.1,72.3c-2.8,1.4-8.5,2.8-15.8,2.8c-16.8,0-29.5-10.6-29.5-30.2
								c0-18.7,12.7-31.3,31.1-31.3c7.4,0,12.1,1.6,14.2,2.7l-1.9,6.3c-2.9-1.4-7.1-2.5-12-2.5c-14,0-23.3,8.9-23.3,24.6
								c0,14.6,8.4,24,22.9,24c4.7,0,9.5-1,12.6-2.5L244.1,72.3z"/>
						</g>
						<path id="XMLID_437_" class="logotext_0" d="M36.6,78.4c0,0-23.2-1.7-25.1-18.1s9.9-30.4,25.9-49.7C37.5,10.6,8.4,53,36.6,78.4z"/>
						<path id="XMLID_422_" class="logotext_0" d="M38.9,13.2c0,0,21.8,25.7,20.1,44.7c-1.6,19-21.3,17.5-21.3,17.5S65.7,72.1,38.9,13.2z"/>
						<path id="XMLID_421_" class="logotext_0" d="M37.5,13.4c-1.1,4-2.4,8.9-3.6,14.6c0,0-2.3,10-0.2,15.7c0.2,0.5,0.6,1.3,1.4,1.9
							c1,0.7,2.6,0.8,3.7,0.2c0.5-0.3,1.2-0.9,1.7-2.2c1.7-4.8-0.6-15.8-1.1-18.2C38.7,22.5,38,18.4,37.5,13.4z"/>
						<path id="XMLID_420_" class="logotext_0" d="M36.6,73.6c-0.6-1.1-1.4-2.8-2-4.9C34,66.9,31,56.5,35,53.6c1.2-0.9,3.1-0.9,4.2-0.2
							c2.6,1.5,2.2,6.5,2.1,8.6C40.9,66.9,38.7,70.9,36.6,73.6z"/>
				</svg>
				<!-- <div class="footer_links">
					<a href="">О компании</a>
					<a href="">контакты</a>
				</div>	 -->
				<nav class="site-nav">
					 <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu') ); ?>
				</nav>
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>