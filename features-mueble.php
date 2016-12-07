<?php
/**
 * Template part for displaying feature product.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */
?>

<ul class="product--features">
	<li class="product--features__item">
		<b><?php _e("<!--:es-->Caracter&iacute;sticas<!--:--><!--:en-->Features<!--:-->"); ?></b>
	</li>
	<?php if ( get_field('coleccion') ) {?>
	<li class="product--features__item">
	<?php the_field('coleccion'); ?>
	</li>
	<?php }?>
	<?php if ( get_field('referencia') ) {?>
	<li class="product--features__item">
	<?php the_field('nombre'); ?>
	</li>
	<li class="product--features__item">Ref: <?php the_field('referencia'); ?></li>
	<?php }?>
	<?php if(in_array('blancobrillo', get_field('muestra') )): ?>
		<li class="product--features__item"><?php _e("<!--:es-->Blanco Brillo<!--:--><!--:en-->White Shine<!--:-->"); ?>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_blanco.png"></li>
	<?php endif; ?>
	<?php if(in_array('wengue', get_field('muestra') )): ?>
		<li class="product--features__item">Wengue
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_wengue.png"></li>
	<?php endif; ?>
	<?php if(in_array('blancoline', get_field('muestra') )): ?>
		<li class="product--features__item">Blanco Line
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_blancoline.png"></li>
	<?php endif; ?>
	<?php if(in_array('grisceniza', get_field('muestra') )): ?>
		<li class="product--features__item">Gris Ceniza
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_grisceniza.png"></li>
	<?php endif; ?>
	<?php if(in_array('lila', get_field('muestra') )): ?>
	<li class="product--features__item">Lila
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_lila.png"></li>
	<?php endif; ?>
	<?php if(in_array('naranja', get_field('muestra') )): ?>
	<li class="product--features__item"><?php _e("<!--:es-->Naranja<!--:--><!--:en-->Orange<!--:-->"); ?>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_naranja.png"></li>
	<?php endif; ?>
	<?php if(in_array('verde', get_field('muestra') )): ?>
	<li class="product--features__item"><?php _e("<!--:es-->Verde<!--:--><!--:en-->Green<!--:-->"); ?>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_verde.png"></li>
	<?php endif; ?>
	<?php if(in_array('nuez', get_field('muestra') )): ?>
	<li class="product--features__item">Nuez
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_nuez.png"></li>
	<?php endif; ?>
	<?php if(in_array('castano', get_field('muestra') )): ?>
	<li class="product--features__item">Casta&ntilde;o
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_castano.png"></li>
	<?php endif; ?>
	<?php if(in_array('negrobrillo', get_field('muestra') )): ?>
		<li class="product--features__item">Negro Brillo
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_negrobrillo.png"></li>
	<?php endif; ?>
	<?php if(in_array('wengueclaro', get_field('muestra') )): ?>
		<li class="product--features__item">Wengue Claro
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mostra_wengueclaro.png"></li>
	<?php endif; ?>
	<?php if ( get_field('medidas') ) {?>
		<li class="product--features__item"><?php the_field('medidas'); ?> cm.</li>
	<?php }?>
</ul><!-- /product- features__-->
