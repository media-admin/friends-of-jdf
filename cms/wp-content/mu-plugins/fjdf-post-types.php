<?php

/* === FJDF CUSTOM POST TYPES === */
function fjdf_post_types() {

	add_post_type_support( 'team', 'thumbnail' );
	add_post_type_support( 'team', 'excerpt' );

	add_filter( 'fjdf_gallery_metabox_post_types', function( $types ) {
		$types[] = 'gallery';
		return $types;
	} );



	/* --- Custom Post Type FAQ --- */
	$labels = array(
		'name' =>  'FAQs',
		'add_new' => 'Neue FAQ erstellen',
		'edit_item' => 'FAQ bearbeiten',
		'singular_name' => 'FAQ',
		'all_items' => 'Alle FAQs',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'faq', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'taxonomies' => array( 'faq-category' ),
		'labels' => $labels,
		'supports' => ['editor', 'page-attributes', 'revisions', 'thumbnail', 'title', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => false,
		'rewrite' => array('slug' => 'faq', 'with_front' => true, 'pages' => true, 'feeds' => true,),
		'menu_position' => 9,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-lightbulb'
	));

	add_post_type_support( 'faq', 'thumbnail' );



	/* --- Custom Post Type TESTIMONIAL --- */
	$labels = array(
		'name' =>  'Testimonials',
		'add_new' => 'Neues Testimonial erstellen',
		'edit_item' => 'Testimonial bearbeiten',
		'singular_name' => 'Testimonial',
		'all_items' => 'Alle Testimonials',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'testimonial', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'labels' => $labels,
		'supports' => ['editor', 'page-attributes', 'revisions', 'thumbnail', 'title', 'excerpt', 'custom-fields'],
		'has_archive' => false,
		'exclude_from_search' => false,
		'menu_position' => 9,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-testimonial'
	));

	add_post_type_support( 'faq', 'thumbnail' );



	/* --- Custom Post Type AKTUELLER HINWEIS --- */
	$labels = array(
		'name' =>  'Hinweis',
		'add_new' => 'Neuen Hinweis erstellen',
		'edit_item' => 'Hinweis bearbeiten',
		'singular_name' => 'Hinweis',
		'all_items' => 'Alle Hinweise',
		'supports' => array('title', 'editor', 'author', 'custom-fields',
	));

	register_post_type( 'notification', array(
		'show_in_rest' => true,
		'public' => true,
		'show_ui' => true,
		'supports' => ['editor', 'page-attributes', 'revisions', 'thumbnail', 'title', 'excerpt', 'custom-fields'],
		'labels' => $labels,
		'has_archive' => false,
		'exclude_from_search' => true,
		'rewrite' => array('slug' => 'hinweise'),
		'menu_position' => 12,
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => true,
		'menu_icon' => 'dashicons-bell'
	));

}



/* === FJDF CUSTOM TAXONOMIES === */

function fjdf_taxonomies() {

	/* --- Custom Taxonomie FAQ-KATEGORIE --- */
	$labels = array(
		'name' => _x( 'FAQ-Kategorie', 'taxonomy general name' ),
		'singular_name' => _x( 'FAQ-Kategorie', 'taxonomy singular name' ),
		'search_items' =>  __( 'FAQ-Kategorien durchsuchen' ),
		'popular_items' => __( 'Meist benutzte FAQ-Kategorien' ),
		'all_items' => __( 'Alle FAQ-Kategorien' ),
		'parent_item' => __( 'Übergeordnete FAQ-Kategorie' ),
		'parent_item_colon' => __( 'Übergeordnete FAQ-Kategorien:' ),
		'edit_item' => __( 'FAQ-Kategorie bearbeiten' ),
		'update_item' => __( 'FAQ-Kategorie aktualisieren' ),
		'add_new_item' => __( 'Neue FAQ-Kategorien hinzufügen' ),
		'new_item_name' => __( 'Name der neuen FAQ-Kategorien' ),
	);

	register_taxonomy('faq-category', array('faqs'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'faqs' ),
	));

}

add_action('init', 'fjdf_post_types');
add_action( 'init', 'fjdf_taxonomies', 0 );

?>