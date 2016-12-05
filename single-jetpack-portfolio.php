<?php
/**
 * The Template for displaying all single projects.
 *
 * @package TODH
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'components/features/portfolio/content', 'portfolio-single' ); ?>

			<?php the_post_navigation(); ?>

		<?php endwhile; // end of the loop. ?>

		</main>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
