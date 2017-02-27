<?php

// Support Featured Images
add_theme_support( 'post-thumbnails' );

add_image_size( 'admin-list-thumb', 80, 80, true); //admin thumbnail (sprobuj usunąć jeśli nic nie zmienia)

// Galeria sponsorzy --> współpraca POCZĄTEK

$sponsory_labels = array(
	'name' => _x('Współpraca', 'post type general name'),
	'singular_name' => _x('Współpraca', 'post type singular name'),
	'add_new' => _x('Dodaj', 'współpracę'),
	'add_new_item' => __("Dodaj współpracę"),
	'edit_item' => __("Edytuj współpracę"),
	'new_item' => __("Nowa współpraca"),
	'view_item' => __("Wyświetl współpracę"),
	'search_items' => __("Szukaj współpracy"),
	'not_found' =>  __('Nie znaleziono'),
	'not_found_in_trash' => __('Nie znaleziono'), 
	'parent_item_colon' => ''
		
);
$sponsory_args = array(
	'labels' => $sponsory_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
	// 'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
); 
register_post_type('sponsory', $sponsory_args);

// odkomentowanie poniższego kodu doda taxonomie

// add_action( 'init', 'jss_create_sponsory_taxonomies', 0);
 
// function jss_create_sponsory_taxonomies(){
// 	register_taxonomy(
// 		'phototype', 'sponsory', 
// 		array(
// 			'hierarchical'=> true, 
// 			'label' => 'Photo Types',
// 			'singular_label' => 'Photo Type',
// 			'rewrite' => true
// 		)
// 	);	
// }

add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-sponsory_columns', 'jss_add_new_sponsory_columns');
 
function jss_add_new_sponsory_columns( $columns ){
	$columns = array(
		'cb'				=>		'<input type="checkbox">',
		'jss_post_thumb'	=>		'Miniaturka',
		'title'				=>		'Tytuł zdjęcia',
		// 'phototype'			=>		'Photo Type', // doda taxonomie
		'author'			=>		'Autor',
		'date'				=>		'Data'
		
	);
	return $columns;
}
 
function jss_custom_columns( $column ){
	global $post;
	
	switch ($column) {
		case 'jss_post_thumb' : echo the_post_thumbnail('admin-list-thumb'); break;
		case 'description' : the_excerpt(); break;
		case 'phototype' : echo get_the_term_list( $post->ID, 'phototype', '', ', ',''); break;
	}
}
 
//add thumbnail images to column
add_filter('manage_posts_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_pages_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_custom_post_columns', 'jss_add_post_thumbnail_column', 5);
 
// Add the column
function jss_add_post_thumbnail_column($cols){
	$cols['jss_post_thumb'] = __('Thumbnail');
	return $cols;
}
 
function jss_display_post_thumbnail_column($col, $id){
  switch($col){
    case 'jss_post_thumb':
      if( function_exists('the_post_thumbnail') )
        echo the_post_thumbnail( 'admin-list-thumb' );
      else
        echo 'Not supported in this theme';
      break;
  }
}

// koniec Galerii Sponsorzy

// Galeria friends --> Partnerzy POCZĄTEK

$friends_labels = array(
	'name' => _x('Partnerzy', 'post type general name'),
	'singular_name' => _x('Partnerzy', 'post type singular name'),
	'add_new' => _x('Dodaj', 'partnera'),
	'add_new_item' => __("Dodaj partnera"),
	'edit_item' => __("Edytuj partnera"),
	'new_item' => __("Nowy partnera"),
	'view_item' => __("Wyświetl partnera"),
	'search_items' => __("Szukaj partnera"),
	'not_found' =>  __('Nie znaleziono'),
	'not_found_in_trash' => __('Nie znaleziono'), 
	'parent_item_colon' => ''
		
);
$friends_args = array(
	'labels' => $friends_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
	// 'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
); 
register_post_type('friends', $friends_args);


add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-friends_columns', 'jss_add_new_friends_columns');
 
function jss_add_new_friends_columns( $columns ){
	$columns = array(
		'cb'				=>		'<input type="checkbox">',
		'jss_post_thumb'	=>		'Miniaturka',
		'title'				=>		'Tytuł zdjęcia',
		// 'phototype'			=>		'Photo Type', // doda taxonomie
		'author'			=>		'Autor',
		'date'				=>		'Data'
		
	);
	return $columns;
}

// Galeria Mecesani POCZĄTEK

$mecenat_labels = array(
	'name' => _x('Mecenat', 'post type general name'),
	'singular_name' => _x('Mecenat', 'post type singular name'),
	'add_new' => _x('Dodaj', 'mecenat'),
	'add_new_item' => __("Dodaj mecenat"),
	'edit_item' => __("Edytuj mecenat"),
	'new_item' => __("Nowy mecenat"),
	'view_item' => __("Wyświetl mecenat"),
	'search_items' => __("Szukaj mecenat"),
	'not_found' =>  __('Nie znaleziono'),
	'not_found_in_trash' => __('Nie znaleziono'), 
	'parent_item_colon' => ''
		
);
$mecenat_args = array(
	'labels' => $mecenat_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
	// 'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
); 
register_post_type('mecenat', $mecenat_args);


add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-mecenat_columns', 'jss_add_new_mecenat_columns');
 
function jss_add_new_mecenat_columns( $columns ){
	$columns = array(
		'cb'				=>		'<input type="checkbox">',
		'jss_post_thumb'	=>		'Miniaturka',
		'title'				=>		'Tytuł zdjęcia',
		// 'phototype'			=>		'Photo Type', // doda taxonomie
		'author'			=>		'Autor',
		'date'				=>		'Data'
		
	);
	return $columns;
}


// WYDARZENIA POST
function create_event_post() {
	register_post_type( 'event_post',
			array(
			'labels' => array(
					'name' => __( 'Wydarzenia' ),
					'singular_name' => __( 'Wydarzenia' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
			),
			'taxonomies'   => array(
				'post_tag',
				// 'category', // dodaj kategorii.. usuń post_tag w projektach
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
	));
	register_taxonomy_for_object_type( 'post_tag', 'event_post' );
}
add_action( 'init', 'create_event_post' );

// PROJEKTY POST
function create_projects_post() {
	register_post_type( 'projekty_post',
			array(
			'labels' => array(
					'name' => __( 'Projekty' ),
					'singular_name' => __( 'Projekty' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
			),
			'taxonomies'   => array(				
				'category', // dodaj kategorii.. usuń post_tag w projektach
			),
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
	));
	register_taxonomy_for_object_type( 'category', 'projekty_post' );
}
add_action( 'init', 'create_projects_post' );

// REMOVE EMOJI ICONS
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

//MAIN SLIDER PICTURES//

// function create_mainSlider_pictures() {
// 	register_post_type( 'mainSlider_pictures',
// 			array(
// 			'labels' => array(
// 					'name' => __( 'Mainpictures' ),
// 					'singular_name' => __( 'Mainpictures' ),
// 			),
// 			'public' => true,
// 			'has_archive' => true,
// 			'supports' => array(
//                     'title',
// 					'editor',
// 					'thumbnail',
// 			),
// //			'taxonomies'   => array(
// //				'post_tag',
// //			),
// 			'show_ui' => true,
// 			'show_in_menu' => true,
// 			'show_in_nav_menus' => true,
// 			'publicly_queryable' => true,
// 			'exclude_from_search' => false,
// 			'has_archive' => true,
// 			'query_var' => true,
// 			'can_export' => true,
// 			'rewrite' => true,
// 			'capability_type' => 'post'
// 	));
	
// }
// add_action( 'init', 'create_mainSlider_pictures' );

function create_zespol_post() {
	register_post_type( 'zespol_post',
			array(
			'labels' => array(
					'name' => __( 'Zespół' ),
					'singular_name' => __( 'Zespół' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
			),			
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post'
	));
	
}
add_action( 'init', 'create_zespol_post' );

?>