<nav role="navigation">

	<ul class="featured-navigation">

		<li class="featured-navigation__item">
			<svg class="icon  icon--actualidad">
				<use class="icon__item" xlink:href="#icon-actualidad" />
			</svg>
			<?php if(qtrans_getLanguage() == "es") : ?>

			<a class="btn btn-link" href="<?php bloginfo('url'); ?>/category/cat-actualidad/">
			<?php endif ?>

			<?php if(qtrans_getLanguage() == "en") : ?>
			<a class="btn btn-link" href="http://fores.es/category/cat-actualidad/?lang=en">
			<?php endif ?>
			<p><?php _e("<!--:es-->Actualidad<!--:--><!--:en-->Present<!--:-->"); ?></p>
			</a>
		</li>

		<li class="featured-navigation__item">
			<svg class="icon  icon--novedades">
				<use class="icon__item" xlink:href="#icon-novedades" />
			</svg>
			<?php if(qtrans_getLanguage() == "es") : ?>
			<a class="btn btn-link" href="<?php bloginfo('url'); ?>/novedades/">
			<?php endif ?>
			<?php if(qtrans_getLanguage() == "en") : ?>
			<a class="btn btn-link" href="http://fores.es/novedades/?lang=en">
			<?php endif ?>
			<p><?php _e("<!--:es-->Novedades<!--:--><!--:en-->News<!--:-->"); ?></p></a>
		</li>

		<li class="featured-navigation__item">
			<svg class="icon  icon--grupo">
				<use class="icon__item" xlink:href="#icon-grupo" />
			</svg>
			<?php if(qtrans_getLanguage() == "es") : ?>
			<a class="btn btn-link" href="<?php bloginfo('url'); ?>/el-grupo/">
			<?php endif ?>
			<?php if(qtrans_getLanguage() == "en") : ?>
			<a class="btn btn-link" href="http://fores.es/el-grupo/?lang=en">
			<?php endif ?>
			<p><?php _e("<!--:es-->El Grupo<!--:--><!--:en-->The Group<!--:-->"); ?></p></a>
		</li>

		<li class="featured-navigation__item">
			<svg class="icon  icon--servicios">
				<use class="icon__item" xlink:href="#icon-servicios" />
			</svg>
			<?php if(qtrans_getLanguage() == "es") : ?>
			<a class="btn btn-link" href="<?php bloginfo('url'); ?>/servicios/">
			<?php endif ?>
			<?php if(qtrans_getLanguage() == "en") : ?>
			<a class="btn btn-link" href="http://fores.es/servicios/?lang=en">
			<?php endif ?>
			<p><?php _e("<!--:es-->Servicios<!--:--><!--:en-->Services<!--:-->"); ?></p></a>
		</li>

		<li class="featured-navigation__item">
			<svg class="icon  icon--contacto">
				<use class="icon__item" xlink:href="#icon-contacto" />
			</svg>
			<?php if(qtrans_getLanguage() == "es") : ?>
			<a class="btn btn-link" href="<?php bloginfo('url'); ?>/contacto/">
			<?php endif ?>
			<?php if(qtrans_getLanguage() == "en") : ?>
			<a class="btn btn-link" href="http://fores.es/contacto/?lang=en">
			<?php endif ?>
			<p><?php _e("<!--:es-->Contacto<!--:--><!--:en-->Contact<!--:-->"); ?></p></a>
		</li>

	</ul>
	<?php //wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
</nav>
