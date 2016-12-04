<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
				if (qtrans_getLanguage() == 'en') {the_field('titulillo_pdf_ingles');}
				elseif (qtrans_getLanguage() == 'es') {the_field('titulillo_pdf');}
				else { echo 'es'; }
			?>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-mueble' );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_template_part('sidebar-mueble'); ?>

<?php
get_sidebar();
get_footer();
