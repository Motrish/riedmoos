<?php
############################
// Styles hinzufügen
############################
function riedmoos_register_styles(){

    $version1 = wp_get_theme()->get('Version');
     wp_enqueue_style('svriedmoos-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '3.3.6', 'all' );
     wp_enqueue_style('svriedmoos-normalize', get_template_directory_uri() . "/assets/css/normalize.css", array(), '4.1.1', 'all' );
     wp_enqueue_style('svriedmoos-font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", array(), '4.6.3', 'all' );
     wp_enqueue_style('svriedmoos-transitions', get_template_directory_uri() . "/assets/css/transitions.css", array(), $version1, 'all' );
     wp_enqueue_style('svriedmoos-prettyPhoto', get_template_directory_uri() . "/assets/css/prettyPhoto.css", array(), $version1, 'all' );
     wp_enqueue_style('svriedmoos-swiper', get_template_directory_uri() . "/assets/css/swiper.min.css", array(), '3.3.1', 'all' );
     wp_enqueue_style('svriedmoos-jquery-ui', get_template_directory_uri() . "/assets/css/jquery-ui.css", array(), 'v1.12.0-rc.2', 'all' );
     wp_enqueue_style('svriedmoos-animate', get_template_directory_uri() . "/assets/css/animate.css", array(), '3.5.1', 'all' );
     wp_enqueue_style('svriedmoos-owl-theme', get_template_directory_uri() . "/assets/css/owl.theme.css", array(), '1.3.3', 'all' );
     wp_enqueue_style('svriedmoos-owl-carousel', get_template_directory_uri() . "/assets/css/owl.carousel.css", array(), '1.3.3', 'all' );
     wp_enqueue_style('svriedmoos-customScrollbar', get_template_directory_uri() . "/assets/css/customScrollbar.css", array(), $version1, 'all' );
     wp_enqueue_style('svriedmoos-icomoon', get_template_directory_uri() . "/assets/css/icomoon.css", array(), $version1, 'all' );
     wp_enqueue_style('svriedmoos-main', get_template_directory_uri() . "/assets/css/main.css", array('svriedmoos-bootstrap'), $version1, 'all' );
     wp_enqueue_style('svriedmoos-color', get_template_directory_uri() . "/assets/css/color.css", array(), $version1, 'all' );
     wp_enqueue_style('svriedmoos-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), $version1, 'all' );
}
add_action( 'wp_enqueue_scripts', 'riedmoos_register_styles');
?>