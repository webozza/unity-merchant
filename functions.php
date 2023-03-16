<?php

function webozza_assets() {
    // STYLESHEETS
    wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css' );
    // wp_enqueue_style( 'select2', get_stylesheet_directory_uri() . '/css/select2.min.css' );

    // SCRIPTS
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/js/swiper.min.js', array('jquery') );
    // wp_enqueue_script( 'select2', get_stylesheet_directory_uri() . '/js/select2.min.js', array('jquery') );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );
    
}
add_action( 'wp_enqueue_scripts', 'webozza_assets' );

function create_um_services() {
    register_post_type( 'um_services',
        array(
            'labels' => array(
                'name' => __( 'UM Services' ),
                'singular_name' => __( 'UM Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'um_service'),
            'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
			'menu_icon' => 'https://webozza.com/unity-merchant/wp-content/uploads/2023/03/favicon.png',
        )
    );
}
add_action('init', 'create_um_services');

function sc_um_services() {
    ob_start();
    include(get_stylesheet_directory() . '/partials/um-services.php');
    $content = ob_get_clean();
    return $content;
}
add_shortcode('um_services', 'sc_um_services');

function sc_um_features() {
    ob_start();
    include(get_stylesheet_directory() . '/partials/um-features.php');
    $content = ob_get_clean();
    return $content;
}
add_shortcode('um_features', 'sc_um_features');

function create_um_clients() {
    register_post_type( 'um_clients',
        array(
            'labels' => array(
                'name' => __( 'UM Clients' ),
                'singular_name' => __( 'UM Client' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'um_client'),
            'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
			'menu_icon' => 'https://webozza.com/unity-merchant/wp-content/uploads/2023/03/favicon.png',
        )
    );
}
add_action('init', 'create_um_clients');

function logo_slider() {
    ob_start();
    include(get_stylesheet_directory() . '/partials/um-clients.php');
    $content = ob_get_clean();
    return $content;
}
add_shortcode('um_clients', 'logo_slider');

function admin_css() {
  echo '<style>
    #menu-posts-um_services .wp-menu-image img,
	#menu-posts-um_clients .wp-menu-image img {
		width: 20px;
		height: auto;
		position: relative;
		top: -3px;
	}
	#adminmenu li.wp-not-current-submenu.wp-menu-separator {
		display: none;
	}
  </style>';
}
add_action('admin_head', 'admin_css');