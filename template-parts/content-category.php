<?php
/**
 * Template part for displaying CPT's in category.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */
?>

<ul class="product--list">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<li class="product--list__item">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<?php the_post_thumbnail('thumbsproductos'); ?>
				<?php endif; ?>
				<?php the_title(); ?>
			</a>
		</li>

	<?php edit_post_link('...'); ?>

	<?php endwhile; ?>
</ul>
<?php else: ?>
<?php endif; ?>
