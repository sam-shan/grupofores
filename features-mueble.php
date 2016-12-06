<?php
/**
 * Template part for displaying feature product.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */

?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- producto -->
		<div>

			<ul class="list-group">
				<li class="list-group-item">
					<b><?php _e("<!--:es-->Caracter&iacute;sticas<!--:--><!--:en-->Features<!--:-->"); ?></b>
				</li>
				<?php if ( get_field('coleccion') ) {?>
				<li class="list-group-item">
				<?php the_field('coleccion'); ?>
				</li>
				<?php }?>
				<?php if ( get_field('referencia') ) {?>
				<li class="list-group-item">
				<?php the_field('nombre'); ?>
				</li>
				<li class="list-group-item">Ref: <?php the_field('referencia'); ?></li>
				<?php }?>
				<?php if(in_array('blancobrillo', get_field('muestra') )): ?>
					<li class="list-group-item"><?php _e("<!--:es-->Blanco Brillo<!--:--><!--:en-->White Shine<!--:-->"); ?>
					<img src="<?php bloginfo('template_directory'); ?>/img/mostra_blanco.png"></li>
				<?php endif; ?>
				<?php if(in_array('wengue', get_field('muestra') )): ?>
					<li class="list-group-item">Wengue
					<img src="<?php bloginfo('template_directory'); ?>/img/mostra_wengue.png"></li>
				<?php endif; ?>
				<?php if(in_array('blancoline', get_field('muestra') )): ?>
					<li class="list-group-item">Blanco Line
					<img src="<?php bloginfo('template_directory'); ?>/img/mostra_blancoline.png"></li>
				<?php endif; ?>
				<?php if(in_array('grisceniza', get_field('muestra') )): ?>
					<li class="list-group-item">Gris Ceniza
					<img src="<?php bloginfo('template_directory'); ?>/img/mostra_grisceniza.png"></li>
				<?php endif; ?>
				<?php if(in_array('lila', get_field('muestra') )): ?>
				<li class="list-group-item">Lila
				<img src="<?php bloginfo('template_directory'); ?>/img/mostra_lila.png"></li>
				<?php endif; ?>
				<?php if(in_array('naranja', get_field('muestra') )): ?>
				<li class="list-group-item"><?php _e("<!--:es-->Naranja<!--:--><!--:en-->Orange<!--:-->"); ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/mostra_naranja.png"></li>
				<?php endif; ?>
				<?php if(in_array('verde', get_field('muestra') )): ?>
				<li class="list-group-item"><?php _e("<!--:es-->Verde<!--:--><!--:en-->Green<!--:-->"); ?>
				<img src="<?php bloginfo('template_directory'); ?>/img/mostra_verde.png"></li>
				<?php endif; ?>
				<?php if(in_array('nuez', get_field('muestra') )): ?>
				<li class="list-group-item">Nuez
				<img src="<?php bloginfo('template_directory'); ?>/img/mostra_nuez.png"></li>
				<?php endif; ?>
				<?php if(in_array('castano', get_field('muestra') )): ?>
				<li class="list-group-item">Casta&ntilde;o
				<img src="<?php bloginfo('template_directory'); ?>/img/mostra_castano.png"></li>
				<?php endif; ?>
				<?php if(in_array('negrobrillo', get_field('muestra') )): ?>
					<li class="list-group-item">Negro Brillo
					<img src="<?php bloginfo('template_directory'); ?>/img/mostra_negrobrillo.png"></li>
				<?php endif; ?>
				<?php if(in_array('wengueclaro', get_field('muestra') )): ?>
					<li class="list-group-item">Wengue Claro
					<img src="<?php bloginfo('template_directory'); ?>/img/mostra_wengueclaro.png"></li>
				<?php endif; ?>
				<?php if ( get_field('medidas') ) {?>
					<li class="list-group-item"><?php the_field('medidas'); ?> cm.</li>
				<?php }?>
				</ul><!-- /list-group -->

			<?php edit_post_link('...'); ?>
		</div>
		<!-- /producto -->

		<?php the_tags( __( 'Tags: ', 'todh' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

		<p><?php _e( '', 'todh' ); the_category(', '); // Separated by commas ?></p>
		<?php edit_post_link('{ edit }'); ?>

	</article>
	<!-- /article -->
