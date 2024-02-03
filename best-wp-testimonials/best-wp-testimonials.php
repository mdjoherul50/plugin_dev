<?php 

/*
 * Plugin Name:       Best WP Testimonials
 * Plugin URI:        https://wordpress.org/plugins/best-wp-testimonial
 * Description:       Best wordpress plugin for display your client review or testimonials for your website
 * Version:           1.0
 * Requires at least: 6.4.2
 * Requires PHP:      8.2
 * Author:            BM Jahirul Islam
 * Author URI:        https://newgen-bd.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       bwpt
 */

/**
 * bwpt styles css
 */
function bwpt_enqueue_style() {
   //wp_enqueue_style('string $handle', mixed $src, array $deps, mixed $ver, string $meida );
	wp_enqueue_style( 'owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css' );
    wp_enqueue_style( 'owl.theme', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css' );
    wp_enqueue_style( 'bwpt-style', plugins_url( 'css/bwpt-style.css', __FILE__ ) );
	
}
add_action( 'wp_enqueue_scripts', 'bwpt_enqueue_style');

/* bwpt js style add*/
function bwpt_enqueue_script(){
    //wp_enqueue_style('string $handle', mixed $src, array $deps, mixed $ver, bol $in_footer );
    wp_enqueue_script('adsensejs', 'https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202401110101/show_ads_impl_fy2021.js?bust=31080431', array(), '1.0.0', 'true' );
    wp_enqueue_script('owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('bwpt_script', plugins_url( 'js/bwpt_script.js', __FILE__ ), array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'bwpt_enqueue_script');



?>