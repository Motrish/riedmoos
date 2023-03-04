<?php
############################
// Custom Post Type Staff
############################

add_action( 'add_meta_boxes', 'add_custom_fields2_to_post_type' );

function add_custom_fields2_to_post_type() {
  add_meta_box( 'custom_fields2', 'Funktionärsdaten', 'display_custom_fields2', array('staff'), 'normal', 'high' );
}

function display_custom_fields2( $post ) {
    $staffname = get_post_meta( $post->ID, 'staffname', true );
    $telefonnummer = get_post_meta( $post->ID, 'telefonnummer', true );
    $mail = get_post_meta( $post->ID, 'mail', true );
    $funktion = get_post_meta( $post->ID, 'funktion', true );
    ?>
<div style="margin-bottom: 1rem;">
    <label for="staffname" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Funktionärsname:</label>
    <input type="text" id="staffname" name="staffname" value="<?php echo esc_attr( $staffname ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
</div>
<div style="margin-bottom: 1rem;">
    <label for="telefonnummer" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Telefonnummer:</label>
    <input type="text" class="form-control" id="telefonnummer" name="telefonnummer" value="<?php echo esc_attr( $telefonnummer ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
</div>
<div style="margin-bottom: 1rem;">
    <label for="mail" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">E-Mail:</label>
    <input type="text" class="form-control" id="mail" name="mail" value="<?php echo esc_attr( $mail ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
</div>
<div style="margin-bottom: 1rem;">
    <label for="funktion" style="display: block; margin-bottom: 0.5rem; font-weight: bold;">Funktion:</label>
    <select type="text" class="form-control" id="funktion" name="funktion" value="<?php echo esc_attr( $funktion ); ?> for="funktion" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" size="10">
      <option <?php selected( $funktion, 'Erster Vorsitzender' ); ?> >Erster Vorsitzender</option>
      <option <?php selected( $funktion, 'Zweiter Vorsitzender' ); ?> >Zweiter Vorsitzender</option>
      <option <?php selected( $funktion, 'Dritter Vorsitzender' ); ?> >Dritter Vorsitzender</option>
      <option <?php selected( $funktion, 'Schriftführer' ); ?> >Schriftführer</option>
      <option <?php selected( $funktion, 'Technischer Leiter' ); ?> >Technischer Leiter</option>
      <option <?php selected( $funktion, 'Jugendleitung' ); ?> >Jugendleitung</option>
      <option <?php selected( $funktion, 'Kassier' ); ?> >Kassier</option>
      <option <?php selected( $funktion, '2. Technischer Leiter' ); ?> >2. Technischer Leiter</option>
      <option <?php selected( $funktion, '2. Schriftführer' ); ?> >2. Schriftführer</option>
      <option <?php selected( $funktion, '2. Jugendleitung' ); ?> >2. Jugendleitung</option>
      <option <?php selected( $funktion, '2. Kassier' ); ?> >2. Kassier</option>
      <option <?php selected( $funktion, 'Schiedsrichterobmann' ); ?> >Schiedsrichterobmann</option>
      <option <?php selected( $funktion, 'Revisor' ); ?> >Revisor</option>
      <option <?php selected( $funktion, 'Webmaster' ); ?> >Webmaster</option>
      <option <?php selected( $funktion, 'Propagandawart' ); ?> >Propagandawart</option>
      <option <?php selected( $funktion, 'Platzvermietung' ); ?> >Platzvermietung</option>
    </select>
</div>

    <?php
}

add_action( 'save_post', 'save_custom_fields2' );

function save_custom_fields2( $post_id ) {
    if ( array_key_exists( 'staffname', $_POST ) ) {
        update_post_meta( $post_id, 'staffname', sanitize_text_field( $_POST['staffname'] ) );
    }
    if ( array_key_exists( 'telefonnummer', $_POST ) ) {
        update_post_meta( $post_id, 'telefonnummer', sanitize_text_field( $_POST['telefonnummer'] ) );
    }
    if ( array_key_exists( 'mail', $_POST ) ) {
        update_post_meta( $post_id, 'mail', sanitize_text_field( $_POST['mail'] ) );
    }
    if ( array_key_exists( 'funktion', $_POST ) ) {
      update_post_meta( $post_id, 'funktion', sanitize_text_field( $_POST['funktion'] ) );
    }
}

?>