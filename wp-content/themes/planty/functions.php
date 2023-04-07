<?php
/**
 * Planty Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Planty
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PLANTY_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'planty-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all' );
	// Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
	//* Enqueue Font Awesome
    wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css' );
	//* Chargement de Bootstrap */
	wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.4.slim.min.js', [], false, true);
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


function register_my_menu(){
    register_nav_menu('main-menu', 'En tête du menu');
    register_nav_menu('footer-menu', 'Pied de page');
}
add_action( 'after_setup_theme', 'register_my_menu' );


add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu( $items, $args ) {
	
	if (is_user_logged_in() && $args->theme_location == 'main-menu' ) {
		$items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page order-link"><a class="menu-link" href="http://localhost:8888/planty/wp-admin/">Admin</a></li>';
	}
	return $items;
}

/* Ajout d'une classe sur a du menu */
//function montheme_menu_link_class($attrs)
//{
//  $attrs['class'] = 'menu-link-commander';
// return $attrs;
//}
//add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

/* Ajout d'une classe sur li du menu */
//function montheme_menu_class($classes)
//{
//   $classes[] = 'page_item menu-item';
//   return $classes;
//}
//add_filter('nav_menu_css_class', 'montheme_menu_class');
