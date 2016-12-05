<?php
/**
 * Template Name: Contacto
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="jumbotron text-center">
				<h3><?php _e("<!--:es-->Atencion al cliente<!--:--><!--:en-->Customer Care<!--:--><!--:pt-->M&oacute;veis e decora&ccedil;&atilde;o<!--:--><!--:fr-->Mobilier et d&eacute;coration<!--:-->"); ?></h3>
				<h1>T. <span>+34</span> 964 49 25 65</h1>
				<a class="btn btn-default" title="Formulario de contacto Mueble y decoraci&oacute;n" href="<?php echo site_url(); ?>/form-atencion-al-cliente/">
					<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?>
				</a>
			</div>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'components/page/content', 'contact' );
			endwhile; // End of the loop.
			?>

			<figure>
			<img title="localizacion" src="<?php echo site_url(); ?>/wp-content/uploads/localizacion.jpg" alt="" width="470" height="266">
			</figure>

			<h5><?php _e("<!--:es-->Mapa de accesos<!--:--><!--:en-->Access map<!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></h5>
			<a href="<?php bloginfo('template_directory'); ?>/descargas/accesos_fores.pdf.zip">
			<?php _e("<!--:es-->Descargar en formato PDF<!--:--><!--:en-->Access map to download? Format: PDF<!--:--><!--:pt-->Acesse o mapa para download? Formato: PDF<!--:--><!--:fr-->Plan dacc&egrave;s pour t&eacute;l&eacute;charger? Format: PDF<!--:-->"); ?></a>

			<h5><?php _e("<!--:es-->Descargas<!--:--><!--:en-->Downloads<!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></h5>
			<a href="<?php bloginfo('template_directory'); ?>/descargas/Dossier_Prensa.pdf.zip">
			<?php _e("<!--:es-->Dossier de prensa<!--:--><!--:en-->Access map to download? Format: PDF<!--:--><!--:pt-->Acesse o mapa para download? Formato: PDF<!--:--><!--:fr-->Plan dacc&egrave;s pour t&eacute;l&eacute;charger? Format: PDF<!--:-->"); ?>
			</a>

			<a href="<?php bloginfo('template_directory'); ?>/descargas/logo_fores.zip">
			<?php _e("<!--:es-->Logotipo For&eacute;s. Zip<!--:--><!--:en--><!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></a>

			<a href="<?php bloginfo('template_directory'); ?>/descargas/logofores_eps.eps.zip">
			<?php _e("<!--:es-->Logotipo For&eacute;s. Eps.<!--:--><!--:en--><!--:--><!--:pt--><!--:--><!--:fr--><!--:-->"); ?></a>

		</main>
	</div>
<?php
get_sidebar();
get_footer();
