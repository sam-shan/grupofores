<?php


/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type
function create_post_type()
{
  register_taxonomy_for_object_type('category', 'coleccion'); // Register Taxonomies for Category
  register_taxonomy_for_object_type('post_tag', 'coleccion');
  register_post_type('colecciones', // Register Custom Post Type
      array(
      'labels' => array(
          'name' => __('Colecciones', 'coleccion'), // Rename these to suit
          'singular_name' => __('Coleccion', 'coleccion'),
          'add_new' => __('Add New', 'coleccion'),
          'add_new_item' => __('Add New Custom Post', 'coleccion'),
          'edit' => __('Edit', 'coleccion'),
          'edit_item' => __('Edit Custom Post', 'coleccion'),
          'new_item' => __('New Custom Post', 'coleccion'),
          'view' => __('View Custom Post', 'coleccion'),
          'view_item' => __('View Custom Post', 'coleccion'),
          'search_items' => __('Search Custom Post', 'coleccion'),
          'not_found' => __('No Custom Posts found', 'coleccion'),
          'not_found_in_trash' => __('No Custom Posts found in Trash', 'coleccion')
      ),
      'public' => true,
      'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
      'has_archive' => true,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail'
      ),
      'can_export' => true, // Allows export in Tools > Export
      'taxonomies' => array(
          'post_tag',
          'category'
      ) // Add Category and Post Tags support
  ));


  register_taxonomy_for_object_type('category', 'mueble'); // Register Taxonomies for Category
  register_taxonomy_for_object_type('post_tag', 'mueble');

  register_post_type('mueble', // Register Custom Post Type
      array(
      'labels' => array(
          'name' => __('mueble', 'mueble'), // Rename these to suit
          'singular_name' => __('Mueble', 'mueble'),
          'add_new' => __('Add New', 'mueble'),
          'add_new_item' => __('Add New Custom Post', 'mueble'),
          'edit' => __('Edit', 'mueble'),
          'edit_item' => __('Edit Custom Post', 'mueble'),
          'new_item' => __('New Custom Post', 'mueble'),
          'view' => __('View Custom Post', 'mueble'),
          'view_item' => __('View Custom Post', 'mueble'),
          'search_items' => __('Search Custom Post', 'mueble'),
          'not_found' => __('No Custom Posts found', 'mueble'),
          'not_found_in_trash' => __('No Custom Posts found in Trash', 'mueble')
      ),
      'public' => true,
      'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
      'has_archive' => true,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail'
      ),
      'can_export' => true, // Allows export in Tools > Export
      'taxonomies' => array(
          'post_tag',
          'category'
      ) // Add Category and Post Tags support
  ));
}

add_action('init', 'create_post_type'); // Add  Custom Post Type
