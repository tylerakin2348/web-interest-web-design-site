<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */
 function digwp_bloginfo_shortcode( $atts ) {
    extract(shortcode_atts(array(
        'key' => '',
    ), $atts));
    return get_bloginfo($key);
 }
 // add_shortcode('bloginfo', 'digwp_bloginfo_shortcode');
 function register_my_menu() {
   register_nav_menu('header-menu',__( 'Header Menu' ));
 }
 add_action( 'init', 'register_my_menu' );
