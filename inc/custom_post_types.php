<?php
############################
// Our custom post type function
############################


function create_posttype() {
  
  register_post_type( 'teams',
  // CPT Options
      array(
        'labels' => array(
            'name' => __( 'Teams' ),
            'singular_name' => __( 'Team' )
        ),
        'public' => true,
        'rewrite' => array('slug' => 'teams'),
        'show_in_rest' => true,
        'supports' => array( 'title', 'thumbnail' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        // 'taxonomies'  => array( 'category' ),
      )
    );
  register_post_type( 'jteams',
  // CPT Options
      array(
        'labels' => array(
            'name' => __( 'JugendTeams' ),
            'singular_name' => __( 'JugendTeam' )
        ),
        'public' => true,
        'rewrite' => array('slug' => 'jugendteams'),
        'show_in_rest' => true,
        'supports' => array( 'title', 'thumbnail' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
      )
    );
  register_post_type( 'warnings',
      array(
        'labels' => array(
            'name' => __( 'Informationen' ),
            'singular_name' => __( 'Information' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'warnings'),
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
      )
    );
  register_post_type( 'staff',
      array(
        'labels' => array(
            'name' => __( 'Funktionäre' ),
            'singular_name' => __( 'Funktionäre' )
        ),
        'public' => true,
        'rewrite' => array('slug' => 'staff'),
        'show_in_rest' => true,
        'supports' => array( 'title', 'thumbnail' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
      )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



?>