	<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package WP
 */
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Scripts & Styles.
 *
 * Frontend with no conditions, Add Custom styles to wp_head.
 *
 * @since  1.0.0
 */


function mkp_style_script() {
  if (! is_admin()){
    // wp_enqueue_style(mkp_slick, get_template_directory_uri() . '/slick.css' );
  // wp_enqueue_style(mkp_slick_theme, get_template_directory_uri() . '/slick-theme.css' );
  // wp_enqueue_style(mkp_animate, get_template_directory_uri() . '/animate.css' );
  // wp_enqueue_style(mkp_bulma, get_template_directory_uri() . '/bulma.min.css' );
  wp_enqueue_style('mkp_google_font', 'https://fonts.googleapis.com/css?family=Amiri|Montserrat:400,500,600|Open+Sans:300,400', false);
  wp_enqueue_style('mkp_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
  }
}
function mkp_scripts() {
  // wp_enqueue_script(mkp_style, get_template_directory_uri() . '/bulma.min.css', array(), 'all');
  // wp_enqueue_script(mkp_style, get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'mkp_style_script' );

//MKP The excerpt limit and custom finally parrafo

function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}

add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

	///text finally
function mkp_excerpt_custom_finally($more) {
return '...';
}

add_filter('excerpt_more', 'mkp_excerpt_custom_finally');


// mkp the add images

function mkp_setup(){
  //image support
    add_theme_support('post-thumbnails');
  add_image_size( 'small-thumbnail-2', 644, 385, true );
  add_image_size( 'small-thumbnail-3', 280, 120, true );
  add_image_size( 'small-thumbnail-1', 400, 300, true );
	add_image_size( 'square-thumbnail', 80, 80, true );
	add_image_size( 'banner-image', 1024, 1024, true );
	add_image_size( 'grid-thumbnail', 1280, 960, true );
}
add_action( 'after_setup_theme' ,'mkp_setup');

// mkp menus

function mkp_menus() {
  register_nav_menus(array(
    'main-menu' => ('Main menu'),
    'category-menu' => ('Category menu'),
    'social-menu' => ('Social menu'),
    'footer-menu' => ('Footer menu'),
    'keywords-menu' => ('keywords menu'),
  ));
}

add_action( 'init', 'mkp_menus' );

//END mkp menus


//MKP add class for item menu

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
