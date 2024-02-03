<?php
/*
 * Plugin Name:       Awesome QR Code Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Display a qr code for current page
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md Jahirul Islam
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


class FQC_QR_Code {

	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );
	}
	public function init() {
		add_filter( 'the_content', array( $this, 'add_qr_code' ) );
	}
	public function add_qr_code( $content ) {
		$current_link = esc_url( get_permalink() );
		$title        = get_the_title();
		$current_link = "<img src='https://chart.googleapis.com/chart?cht=qr&chl=$current_link&chs=120x120' alt='{$title}'>";
		return $content . $current_link;
	}
}
new FQC_QR_Code();


// <!-- class AQC_Qr_Code{

// add init
// public function __construct(){
// add_action('init',array($this,'init'));
// }
// public function init(){
// add_filter('the_content',array($this,'add_qr_code'))
// }
// } -->
