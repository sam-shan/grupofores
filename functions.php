<?php
/**
 * components functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TODH
 */

if ( ! function_exists( 'todh_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the aftercomponentsetup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function todh_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'todh' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'todh', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'todh-featured-image', 640, 9999 );
	add_image_size( 'todh-hero', 1280, 1000, true );
	add_image_size( 'todh-thumbnail-avatar', 100, 100, true );
	add_image_size('fotogrande', 365, 365);
  add_image_size('slider', 940, 250, true);
  add_image_size('thumbsportada', 210, 130);
  add_image_size('thumbspie', 100, 135, true);
  add_image_size('portadaproductos', 818, 200, true);
  add_image_size('thumbsproductos', 172, 127);
  add_image_size('productospeque', 70, 80);
  add_image_size('thumbsgaleria', 146, 185, true);
  add_image_size('grid_6', 220, 125);
  add_image_size('carruselsubsidiary', 460, 125, true);
	add_image_size('carruselsidebar', 122, 133, true);
	add_image_size('ambientes', 450, 250, true);
	add_image_size('th-actualidad', 279, 155);
  add_image_size('galeria', 50, 50);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top', 'todh' ),
		'primary' => esc_html__( 'Primary', 'todh' ),
	) );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'todh_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'todh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function todh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'todh_content_width', 640 );
}
add_action( 'after_setup_theme', 'todh_content_width', 0 );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function todh_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function todh_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'todh' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'todh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function todh_scripts() {
	wp_enqueue_style( 'todh-style', get_stylesheet_uri() );

	// wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/stylesheets/slick.css', '1.6.0', 'all');

	wp_enqueue_script( 'todh-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'todh-social', get_template_directory_uri() . '/assets/js/social.js', array(), '20151215', true );

	wp_enqueue_script( 'todh-effects', get_template_directory_uri() . '/assets/js/effects-min.js', array(), '20151215', true );

	wp_enqueue_script( 'todh-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true );

	wp_enqueue_script( 'todh-sliders', get_template_directory_uri() . '/assets/js/slider-min.js', array(), '20151215', true );

	wp_enqueue_script( 'todh-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'todh_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom post type.
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Theme customization.
 */
require get_template_directory() . '/inc/theme-custom.php';

/**
 * Social sharing.
 */
//require get_template_directory() . '/inc/social.php';

/**
 * Related posts
 */
require get_template_directory() . '/inc/related-posts.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
