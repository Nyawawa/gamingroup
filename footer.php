<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">
			<div id="site-info">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php site_icon_url(); ?>"></img>
					<div class="site-info-title"><?php bloginfo( 'name' ); ?></div>
				</a>
				<div id="right-side-info">
					<div class="contact">
						<a href="./kontakt" title="Kontakt">Kontakt</a>
					</div>
					<div id="socialbuttons">
						<a href="https://twitter.com/lol_fsmpi">
							<img src="wp-content/themes/gg-ac/images/icon_twitter.png"></img>
						</a>
						<a href="https://www.facebook.com/rwthgg">
							<img src="wp-content/themes/gg-ac/images/icon_facebook.png"></img>
						</a>
					</div>
					<div id="mediabutton-youtube">
						<a href="https://www.youtube.com/user/lolfsmpi">
							<img src="wp-content/themes/gg-ac/images/icon_youtube.png"></img>
						</a>
					</div>
					<div id="mediabutton-twitch">
						<a href="http://www.twitch.tv/gaminggroupaachen">
							<img src="wp-content/themes/gg-ac/images/logo_twitch.png"></img>
						</a>
					</div>
				</div>
			</div><!-- #site-info -->
		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
