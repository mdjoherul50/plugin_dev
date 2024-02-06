<?php

/*
 * Plugin Name:       Our First Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       This is our first plugin.
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
   //the content
   add_filter('the_content','change_content');
   function change_content($content){
    $content = $content . "this is my first plugin";
    $custom_content = "<br>";
    $custom_content = " Post Id : " . get_the_ID();
    $content = $content . $custom_content;
     return $content ;
   }
// chnage the tit

add_filter('excerpt_length','change_excerpt_length');
function change_excerpt_length($length){
  return 20;
}
add_filter('the_title','change_title' );
function change_title($title){
  if(is_admin()){
    return $title;
  }
  $custom_title = ' <h2> This is my custom title</h2>';
  $title .= $custom_title;
  return $title;
}
//html5

  