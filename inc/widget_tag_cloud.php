<?php
############################
// Tag Cloud hinzufügen
############################

function wpb_tag_cloud() { 
    $tags = get_tags();
    $args = array(
        'smallest'                  => 10, 
        'largest'                   => 22,
        'unit'                      => 'px', 
        'number'                    => 10,  
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count', 
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => false
    ); 
     
    $tag_string = wp_generate_tag_cloud( $tags, $args );
     
    return $tag_string; 
     
    } 
    // Add a shortcode so that we can use it in widgets, posts, and pages
    add_shortcode('wpb_popular_tags', 'wpb_tag_cloud'); 
     
    // Enable shortcode execution in text widget
    add_filter ('widget_text', 'do_shortcode'); 
  
  
  
  ?>