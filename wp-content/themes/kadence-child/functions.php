<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()

{

    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'kadence-global','kadence-header','kadence-content','kadence-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10, 2);
function add_last_nav_item($items,$args) {
  // Vérifie si l'utilisateur est connecté
  if (is_user_logged_in() && $args->theme_location == 'primary') {
        // Construit l'élément "Admin"
        $admin_item = '<li class="menu-item"><a class="menu-link" href="' . get_admin_url(). '">Admin</a></li>';

        // Trouve la position du 1er item de "</li>" dans le menu
        $position_first_item_li = strpos($items, '</li>');

        // Insère l'élément "Admin" après la première occurrence de "</li>"
        $items = substr_replace($items, $admin_item, $position_first_item_li, 0);
    }

    return $items;
  }
  add_filter('wp_nav_menu_items','add_last_nav_item', 10, 2);

// END ENQUEUE PARENT ACTION
