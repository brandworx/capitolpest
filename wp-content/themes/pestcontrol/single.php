<?php
/**
 * The template for displaying all single posts.
 *
 * @package pestControl
 */

get_header(); ?>

	<div id="mainWrap">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>
	</div>

<?php get_footer(); ?>
