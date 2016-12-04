<?php
/* Template Name: Portada */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
XXXX
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
