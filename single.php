<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TODH
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'components/post/content', get_post_format() );

			if ( 'post' === get_post_type() ) :
				the_post_navigation();
			endif;

		endwhile; // End of the loop.
		?>

		<?php if ( 'mueble' === get_post_type() ) : ?>
			<?php //get_template_part( 'features-mueble' ); ?>
			<?php get_template_part( 'sidebar-mueble' ); ?>
		<?php endif; ?>

		</main>
	</div>
<?php
get_sidebar();
get_footer();
