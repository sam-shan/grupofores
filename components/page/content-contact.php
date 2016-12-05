<?php
/**
 * Template part for displaying page content in template-contacto.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TODH
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'todh' ),
				'after'  => '</div>',
			) );
		?>
		<address class="acontacto">
			<h5><?php _e("<!--:es-->Mueble y decoraci&oacute;n<!--:--><!--:en-->Furniture and decor <!--:--><!--:pt-->M&oacute;veis e decora&ccedil;&atilde;o<!--:--><!--:fr-->Mobilier et d&eacute;coration<!--:-->"); ?></h5>
			<p>T. <span>+34</span> 964 468 200</p>
			<a class="btn btn-default" title="Formulario de Contacto de Grandes Superf&iacute;cies" href="<?php echo site_url(); ?>/form-mueble-y-decoracion/">
			<span class="el-icon-envelope"></span>
			<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
		</address>

		<address class="acontacto">
			<h5><?php _e("<!--:es-->Grandes superf&iacute;cies<!--:--><!--:en-->Great Surfaces<!--:--><!--:pt-->Grandes superficies<!--:--><!--:fr-->Les Grandes Surfaces<!--:-->"); ?></h5>
			<p>T. <span>+34</span> 964 468 328</p>
			<a class="btn btn-default" title="Formulario de Contacto de Grandes Superf&iacute;cies" href="<?php echo site_url(); ?>/form-grandes-superficies/">
			<span class="el-icon-envelope"></span>
			<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
		</address>

		<address class="acontacto">
			<h5><?php _e("<!--:es-->Bricolage y ferreter&iacute;a<!--:--><!--:en-->DIY and hardware<!--:--><!--:pt-->Bricolage e hardware<!--:--><!--:fr-->Bricolage et du mat&eacute;riel <!--:-->"); ?></h5>
			<p>T. <span>+34</span> 964 468 315</p>
			<a class="btn btn-default" title="Formulario de contacto Bricolage y ferretería" href="<?php echo site_url(); ?>/form-bricolage-y-ferreteria/">
			<span class="el-icon-envelope"></span>
			<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
		</address>

		<address class="acontacto">
			<h5><?php _e("<!--:es-->Exportaci&oacute;n<!--:--><!--:en-->Export<!--:--><!--:pt-->Exportar<!--:--><!--:fr-->Exporter<!--:-->"); ?></h5>
			<p>T. <span>+34</span> 964 468 327</p>
			<a class="btn btn-default" title="Formulario de Contacto de Exportación" href="<?php echo site_url(); ?>/form-exportacion/">
			<span class="el-icon-envelope"></span>
			<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
		</address>

		<address class="acontacto">
			<h5><?php _e("<!--:es-->Proveedores<!--:--><!--:en-->Suppliers<!--:--><!--:pt-->Fornecedores<!--:--><!--:fr-->Fournisseurs <!--:-->"); ?></h5>
			<p>T. <span>+34</span> 964 468 318</p>
			<a class="btn btn-default" title="Proveedores" href="<?php echo site_url(); ?>/proveedores/">
			<span class="el-icon-envelope"></span>
			<?php _e("<!--:es-->e-mail<!--:--><!--:en-->Your message<!--:--><!--:pt-->Deixe sua mensagem<!--:--><!--:fr-->Laissez votre message<!--:-->"); ?></a>
		</address>
	</div>

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'todh' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer>
</article><!-- #post-## -->
