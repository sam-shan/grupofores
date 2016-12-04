<?php
/**
 * The template used for displaying hero content.
 *
 * @package TODH
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="todh-hero">
		<?php the_post_thumbnail( 'todh-hero' ); ?>
	</div>
<?php endif; ?>
