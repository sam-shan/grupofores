<ul class="featured-navigation" role="navigation">

	<li class="featured-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>

		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/category/cat-actualidad/">
			<svg class="icon  icon--featured  icon--actualidad">
				<use class="icon__item" xlink:href="#icon-actualidad" />
			</svg>
		<?php endif ?>

		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/category/cat-actualidad/?lang=en">
		<?php endif ?>
		<h3><?php _e("<!--:es-->Actualidad<!--:--><!--:en-->Present<!--:-->"); ?></h3>
		</a>
	</li>

	<li class="featured-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/novedades/">
			<svg class="icon  icon--featured  icon--novedades">
				<use class="icon__item" xlink:href="#icon-novedades" />
			</svg>
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/novedades/?lang=en">
		<?php endif ?>
		<h3><?php _e("<!--:es-->Novedades<!--:--><!--:en-->News<!--:-->"); ?></h3></a>
	</li>

	<li class="featured-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/el-grupo/">
			<svg class="icon  icon--featured  icon--grupo">
				<use class="icon__item" xlink:href="#icon-grupo" />
			</svg>
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/el-grupo/?lang=en">
		<?php endif ?>
		<h3><?php _e("<!--:es-->El Grupo<!--:--><!--:en-->The Group<!--:-->"); ?></h3></a>
	</li>

	<li class="featured-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/servicios/">
			<svg class="icon  icon--featured  icon--servicios">
				<use class="icon__item" xlink:href="#icon-servicios" />
			</svg>
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/servicios/?lang=en">
		<?php endif ?>
		<h3><?php _e("<!--:es-->Servicios<!--:--><!--:en-->Services<!--:-->"); ?></h3></a>
	</li>

	<li class="featured-navigation__item">
		<?php if(qtrans_getLanguage() == "es") : ?>
		<a class="btn btn-link" href="<?php bloginfo('url'); ?>/contacto/">
			<svg class="icon  icon--featured  icon--contacto">
				<use class="icon__item" xlink:href="#icon-contacto" />
			</svg>
		<?php endif ?>
		<?php if(qtrans_getLanguage() == "en") : ?>
		<a class="btn btn-link" href="http://fores.es/contacto/?lang=en">
		<?php endif ?>
		<h3><?php _e("<!--:es-->Contacto<!--:--><!--:en-->Contact<!--:-->"); ?></h3></a>
	</li>

</ul>
<?php //wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
