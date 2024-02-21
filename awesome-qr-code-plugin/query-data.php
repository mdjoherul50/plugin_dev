<?php 
/***    
 * 
 * The query data from database
 */
class Query_Data{
  public function __construct(){
    //   add_shortcode('query_data', array($this,'query_data'));
         add_shortcode('query_data', array($this,'wp_query'));
  }
   
  /*
  public function query_data(){
    //    return "I am from query data";
    ob_start();
    $args = array(
        'post_type' => 'post',
        'post_per_page' => 10,

    );
    $posts = get_posts($args);
     ?>
     <ul>
    <?php
    foreach ($posts as $post){
        ?>
    <li><a href="<?php echo get_permalink($post->ID);?>"><?php echo $post->post_title; ?></a></li>
    <?php 

    }
    ?>
    </ul>
    <?php
    return ob_get_clean();


  }
   */

   public function wp_query(){
     ob_start();
     $args = array(
         'post_type' => 'post', 
         'post_per_page' => 10,
     );
     $query = new WP_Query($args);
     ?>
     <ul>
     <?php
      if($query->have_posts()){
          while($query->have_posts()){
              $query->the_post();
              ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php

          }
   }    
   ?>   
   </ul>
   <?php
  wp_reset_postdata();
  return ob_get_clean();


}