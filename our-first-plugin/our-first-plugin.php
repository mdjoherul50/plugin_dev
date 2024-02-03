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
// chnage the title
add_filter('the_title','chnage_title');
function chnage_title($title){
  $title = $title . " <h1> Bangladesh";
  return $title;
}
//html5

  