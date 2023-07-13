<?php
define( 'THEME_VERSION', '1.2' );
define( 'HOME_URL', trailingslashit( home_url() ) );
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URL', trailingslashit( get_template_directory_uri() ) );

function vts_custom_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://code.jquery.com/jquery-2.2.4.min.js"), false);

    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'vts_custom_jquery');
function xxx_scripts() {
    wp_enqueue_style('bootstrap-css' , THEME_URL . 'asset/css/bootstrap.min.css');
    wp_enqueue_style('swiper-css' , THEME_URL . 'asset/css/swiper.min.css');
    wp_enqueue_style('swiper-bundle-css' , THEME_URL . 'asset/css/swiper-bundle.min.css');
    wp_enqueue_style('aos-css' , THEME_URL . 'asset/css/aos.css');
    wp_enqueue_style('style-css' , THEME_URL . 'asset/css/style.css');
    wp_enqueue_style('respon-css' , THEME_URL . 'asset/css/responsive.css');

    wp_enqueue_script( 'jquery.counterup.min-js', get_template_directory_uri() . '/asset/js/jquery.counterup.min.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri() . '/asset/js/waypoint.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'boostrap-js', get_template_directory_uri() . '/asset/js/bootstrap.min.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/asset/js/swiper-bundle.min.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/asset/js/aos.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/asset/js/custom.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'common-js', get_template_directory_uri() . '/asset/js/common.js', array( ), THEME_VERSION, true );
    wp_enqueue_script( 'pure-counter-js', get_template_directory_uri() . '/asset/js/functions.js', array( ), THEME_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'xxx_scripts',10 );


// if ( ! function_exists( 'ssls_setup' ) ) :
//     function ssls_setup() {
//         register_nav_menus( array(
//             'menu-footer'   => esc_html__( 'Menu footer', 'SSls' ),
//         ) );
//     }
// endif;
// add_action( 'after_setup_theme', 'ssls_setup' );

add_image_size( 'blog-thumbnail', 420,240, true );
add_image_size( 'thumbnail-service', 350,250, true );
add_image_size( 'blog-thumbnail-1', 750,360, true );
add_image_size( 'thumbnail-inf', 550,350, true );
add_image_size( 'thumbnail-inf-1', 230,160, true );



if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'anonymous' ),
	    	'footer_menu'  => __( 'Footer Menu', 'anonymous' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}