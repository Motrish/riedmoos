<?php
############################
// Theme Support
############################
function riedmoos_theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
}
add_action( 'after_setup_theme', 'riedmoos_theme_support' );

function riedmoos_menus(){

$locations = array(
    'primary_left' => "Desktop Hauptmenu Links",
    'primary_right' => "Desktop Hauptmenü Rechts",
    'primary_mobile' => "Mobiles Hauptmenü",
    'footer'  => "Footer Menu",
);
    register_nav_menus( $locations );
}

add_action( 'init', 'riedmoos_menus');

?>