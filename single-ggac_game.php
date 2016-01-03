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
            
            
            
            <?php
            query_posts( 'tag=' . the_title() );
            get_template_part( 'loop', 'category' );
            wp_reset_query();
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
