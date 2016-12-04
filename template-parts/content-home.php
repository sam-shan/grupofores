<?php
/**
 * Template part for displaying page content in template-portada.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */
?>

<?php //the_content(); ?>

<div class="slider">
	SLIDER
</div>

<ul class="secondary-navigation">

	<li class="secondary-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/category/cat-actualidad/">
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/category/cat-actualidad/?lang=en">
		<?php endif ?>
		<p><?php _e("<!--:es-->Actualidad<!--:--><!--:en-->Present<!--:-->"); ?></p>
		</a>
	</li>

	<li class="secondary-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/novedades/">
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/novedades/?lang=en">
		<?php endif ?>
		<p><?php _e("<!--:es-->Novedades<!--:--><!--:en-->News<!--:-->"); ?></p></a>
	</li>

	<li class="secondary-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/el-grupo/">
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/el-grupo/?lang=en">
		<?php endif ?>
		<p><?php _e("<!--:es-->El Grupo<!--:--><!--:en-->The Group<!--:-->"); ?></p></a>
	</li>

	<li class="secondary-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/servicios/">
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/servicios/?lang=en">
		<?php endif ?>
		<p><?php _e("<!--:es-->Servicios<!--:--><!--:en-->Services<!--:-->"); ?></p></a>
	</li>

	<li class="secondary-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/contacto/">
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/contacto/?lang=en">
		<?php endif ?>
		<p><?php _e("<!--:es-->Contacto<!--:--><!--:en-->Contact<!--:-->"); ?></p></a>
	</li>

</ul>
