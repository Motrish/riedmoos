<?php
############################
// Skripts hinzufügen 
############################

function riedmoos_register_scripts(){

    $version2 = wp_get_theme()->get('Version');
    wp_enqueue_script( 'svriedmoos-jquery-library',get_template_directory_uri() .  "/assets/js/jquery-library.js", array(), '1.12.4', true );
    wp_enqueue_script( 'svriedmoos-bootstrap',get_template_directory_uri() .  "/assets/js/bootstrap.min.js", array(), '3.3.6', true );
    wp_enqueue_script( 'svriedmoos-customScrollbar',get_template_directory_uri() .  "/assets/js/customScrollbar.min.js", array(), $version2, true );
    wp_enqueue_script( 'svriedmoos-owl.carousel',get_template_directory_uri() .  "/assets/js/owl.carousel.js", array(), '1.3.3', true );
    wp_enqueue_script( 'svriedmoos-isotope',get_template_directory_uri() .  "/assets/js/isotope.pkgd.js", array(), '2.2.2', true );
    wp_enqueue_script( 'svriedmoos-prettyPhoto',get_template_directory_uri() .  "/assets/js/prettyPhoto.js", array(), '3.1.6', true );
    wp_enqueue_script( 'svriedmoos-swiper',get_template_directory_uri() .  "/assets/js/swiper.min.js", array(), '3.3.1', true );
    wp_enqueue_script( 'svriedmoos-jquery-ui',get_template_directory_uri() .  "/assets/js/jquery-ui.js", array(), '1.12.0-rc.2', true );
    wp_enqueue_script( 'svriedmoos-countto',get_template_directory_uri() .  "/assets/js/countTo.js", array(), $version2, true );
    wp_enqueue_script( 'svriedmoos-appear',get_template_directory_uri() .  "/assets/js/appear.js", array(), $version2, true );
    wp_enqueue_script( 'svriedmoos-main',get_template_directory_uri() .  "/assets/js/main.js", array(), $version2, true );
    wp_enqueue_script( 'svriedmoos-modernizer',get_template_directory_uri() .  "/assets/js/modernizr-2.8.3-respond-1.4.2.min.js", array(), '2.8.3', 'all');   
}
add_action( 'wp_enqueue_scripts', 'riedmoos_register_scripts');
?>