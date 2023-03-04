<?php

foreach ( glob( get_template_directory() . '/inc/*.php' ) as $file ) {
  require_once $file;
}







############################
// Widget Areas
############################

function riedmoos_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'name' => __( 'Menü Socialbar', 'textdomain' ),
            'id' => 'socialbar-1',
            'desciption' => 'Socialbar Widget Area',
        ),
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="content px-3 py-5 p-md-5" style="margin-left: var(--sidebar-width)">',
            'after_widget' => '</div>',
            'name' => __( 'Footer Area', 'textdomain' ),
            'id' => 'footer-1',
            'desciption' => 'Footer Widget Area',
        ),
    );


};

add_action( 'widgets_init', 'riedmoos_widget_areas');


############################
############################Block für custom widget
############################

class Social_Media_Widget extends WP_Widget {

    function __construct() {
      parent::__construct(
        'social_media_widget',
        __('Social Media Widget', 'text_domain'),
        array( 'description' => __( 'Displays links to your social media channels', 'text_domain' ), )
      );
    }
  
    public function widget( $args, $instance ) {
      echo '<ul class="tg-socialicons">';
      if ( ! empty( $instance['facebook'] ) ) {
        echo '<li><a href="' . $instance['facebook'] . '"><i class="fa fa-facebook"></i></a></li>';
      }
      if ( ! empty( $instance['instagram'] ) ) {
        echo '<li><a href="' . $instance['instagram'] . '"><i class="fa fa-instagram"></i></a></li>';
      }
      echo '</ul>';
      echo $args['after_widget'];
    }
  
    public function form( $instance ) {
      if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
      }
      else {
        $title = __( 'Follow Us', 'text_domain' );
      }
      $facebook = $instance['facebook'];
      $instagram = $instance['instagram'];
      ?>
          

      <p>
        <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook URL:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
      </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram URL:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
    </p>
    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
    $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
    return $instance;
  }

}

function register_social_media_widget() {
    register_widget( 'Social_Media_Widget' );
}
add_action( 'widgets_init', 'register_social_media_widget' );

############################
// Ausschnitt Länge kürzen
############################

function riedmoos_custom_excerpt_length( $length ) {
  return 14;
}
add_filter( 'excerpt_length', 'riedmoos_custom_excerpt_length', 999 );





############################
// Custom Walker Area
############################

class Dropdown_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class='tg-dropdown-menu'>\n";
  }
}



?>