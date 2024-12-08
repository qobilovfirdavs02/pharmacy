<?php
/**
 * Template Name: Full Width
 *
 * @package Medical Head
 */

get_header(); ?>

<div class="content clearfix">
	<div class="full-width-content">
	<?php
		while ( have_posts() ) : the_post();

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'medical-heed' ),
				'after'  => '</div>',
			) );

		endwhile; // End of the loop.
	?>
	</div>

</div>

<?php get_footer();