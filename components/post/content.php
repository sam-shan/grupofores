<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		if ( 'post' === get_post_type() ) : ?>
		<?php get_template_part( 'components/post/content', 'meta' ); ?>

		<? elseif ( 'mueble' === get_post_type() ) : { ?>
		<?php
			if (qtrans_getLanguage() == 'en') {the_field('titulillo_pdf_ingles');}
			elseif (qtrans_getLanguage() == 'es') {the_field('titulillo_pdf');}
			else { echo 'es'; }
		?>
		<?php //get_template_part('sidebar-mueble'); ?>
		<?php } ?>

		<?php endif; ?>
	</header>

	<?php if ( 'colecciones' === get_post_type() ) : { ?>
		<?php if ( '' != get_the_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>">
				<figure>
					<?php the_post_thumbnail( 'ambientes' ); ?>
					<?php	the_title( '<figcaption class="entry-title">', '</figcaption>' ); ?>
				</figure>
			</a>
		<?php endif; ?>
	<?php } endif; ?>
	
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'todh' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'todh' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php get_template_part( 'components/post/content', 'footer' ); ?>
</article><!-- #post-## -->
