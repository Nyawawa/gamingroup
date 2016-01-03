<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<div class="entry-content">
<p><img src="https://gg-ac-eiko.c9users.io/wp-content/uploads/2016/01/giphy.gif"><img src="https://gg-ac-eiko.c9users.io/wp-content/uploads/2016/01/Picachu-crying-pokemon.gif"></p>
					<p><?php _e( "Du scheiß Vollidiot.", 'twentyten' ); ?></p>
					<p><?php _e( "Man ey!", 'twentyten' ); ?></p>
					<p><?php _e( "Du hast schon wieder alles zerstört.", 'twentyten' ); ?></p>
					<p><?php _e( "Mach doch mal wenigstens eine einzige verdammte Sache richtig.", 
						'twentyten' ); ?></p>
					
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>