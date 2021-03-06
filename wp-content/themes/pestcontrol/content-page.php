<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pestControl
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php get_template_part('content','head'); ?>

	<div id="contentWrap">
		<section id="contentInner">
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'pestcontrol' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'pestcontrol' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->

		</section>
		<?php get_sidebar(); ?>
	</div>
</article><!-- #post-## -->
