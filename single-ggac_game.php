<?php 
get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
            ?>
            
            <h2 class="entry-title">Aktuelles zu <?= get_the_title() ?></h2>
            <?php
            query_posts( 'tag=' . get_the_title() );
            get_template_part( 'loop', 'ggac_game' );
            wp_reset_query();
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>

