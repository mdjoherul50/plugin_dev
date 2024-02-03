<?php 

/*
 * Plugin Name:       Best WP Testimonials
 * Plugin URI:        https://wordpress.org/plugins/best-wp-testimonial
 * Description:       Best wordpress plugin for display your client review or testimonials for your website
 * Version:           1.0
 * Requires at least: 6.4.2
 * Requires PHP:      7.2
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

// Register Custom Post Type
if ( ! function_exists('bwpt_custom_post_type') ) {

    // Register Custom Post Type
    function bwpt_custom_post_type() {
    
        $labels = array(
            'name'                  => _x( 'Testimonials', 'Post Type General Name', 'bwpt' ),
            'singular_name'         => _x( 'Testimonial Type', 'Post Type Singular Name', 'bwpt' ),
            'menu_name'             => __( 'Testimonials', 'bwpt' ),
            'name_admin_bar'        => __( 'Post Type', 'bwpt' ),
            'archives'              => __( 'Item Archives', 'bwpt' ),
            'attributes'            => __( 'Item Attributes', 'bwpt' ),
            'parent_item_colon'     => __( 'Parent Item:', 'bwpt' ),
            'all_items'             => __( 'All Items', 'bwpt' ),
            'add_new_item'          => __( 'Add New Item', 'bwpt' ),
            'add_new'               => __( 'Add New', 'bwpt' ),
            'new_item'              => __( 'New Item', 'bwpt' ),
            'edit_item'             => __( 'Edit Item', 'bwpt' ),
            'update_item'           => __( 'Update Item', 'bwpt' ),
            'view_item'             => __( 'View Item', 'bwpt' ),
            'view_items'            => __( 'View Items', 'bwpt' ),
            'search_items'          => __( 'Search Item', 'bwpt' ),
            'not_found'             => __( 'Not found', 'bwpt' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'bwpt' ),
            'featured_image'        => __( 'Featured Image', 'bwpt' ),
            'set_featured_image'    => __( 'Set featured image', 'bwpt' ),
            'remove_featured_image' => __( 'Remove featured image', 'bwpt' ),
            'use_featured_image'    => __( 'Use as featured image', 'bwpt' ),
            'insert_into_item'      => __( 'Insert into item', 'bwpt' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'bwpt' ),
            'items_list'            => __( 'Items list', 'bwpt' ),
            'items_list_navigation' => __( 'Items list navigation', 'bwpt' ),
            'filter_items_list'     => __( 'Filter items list', 'bwpt' ),
        );
        $args = array(
            'label'                 => __( 'Testimonial Type', 'bwpt' ),
            'description'           => __( 'Testimonial Description', 'bwpt' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 999,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'testimonial', $args );
    
    }
    add_action( 'init', 'bwpt_custom_post_type', 0 );
    
    }

?>