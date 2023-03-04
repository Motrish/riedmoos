<?php

############################
// Custom fields für Mannschaften und Jugendmannschaften
############################

add_action( 'add_meta_boxes', 'add_custom_fields_to_post_type' );

function add_custom_fields_to_post_type() {
  add_meta_box( 'custom_fields', 'Mannschaftsdaten', 'display_custom_fields', array('teams', 'jteams'), 'normal', 'high' );
}

function display_custom_fields( $post ) {
    $jahrgang = get_post_meta( $post->ID, 'jahrgang', true );
    $bfvseite = get_post_meta( $post->ID, 'bfvseite', true );

    #Training
    $trainingstage = get_post_meta( $post->ID, 'trainingstage', true );
    $trainingszeit = get_post_meta( $post->ID, 'trainingszeit', true );
    $trainingsadresse = get_post_meta( $post->ID, 'trainingsadresse', true );

    #Trainer
    $trainername = get_post_meta( $post->ID, 'trainername', true );
    $telefonnummer = get_post_meta( $post->ID, 'telefonnummer', true );
    $mail = get_post_meta( $post->ID, 'mail', true );
    $trainerbild = get_post_meta( $post->ID, 'trainerbild', true );
    #Kontakt2
    $kontaktname = get_post_meta( $post->ID, 'kontaktname', true );
    $kontakttelefonnummer = get_post_meta( $post->ID, 'kontakttelefonnummer', true );
    $kontaktmail = get_post_meta( $post->ID, 'kontaktmail', true );
    $kontaktbild = get_post_meta( $post->ID, 'kontaktbild', true );

    ?>
<div> 
  <div style="display:inline-block;"><h1>Mannschaftsinfos</h1> 
    <div style="margin-bottom: 1rem;">
        <label for="jahrgang" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Jahrgangsinfo / Liga:</label>
        <input type="text" id="jahrgang" name="jahrgang" value="<?php echo esc_attr( $jahrgang ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>    
    <div style="margin-bottom: 1rem;">
        <label for="bfvseite" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Link zur BFV-Seite</label>
        <input type="text" class="form-control" id="bfvseite" name="bfvseite" value="<?php echo esc_attr( $bfvseite ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div> 
  <div style="display:inline-block;"><h1>Training</h1>        
    <div style="margin-bottom: 1rem;">
        <label for="trainingstage" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Trainingstage:</label>
        <input type="text" id="trainingstage" name="trainingstage" value="<?php echo esc_attr( $trainingstage ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="trainingszeit" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Trainingszeit:</label>
        <input type="text" id="trainingszeit" name="trainingszeit" value="<?php echo esc_attr( $trainingszeit ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="trainingsadresse" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Trainingsadresse:</label>
        <input type="text" class="form-control" id="trainingsadresse" name="trainingsadresse" value="<?php echo esc_attr( $trainingsadresse ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>

  </div>
  <div style="display:inline-block;" ><h1>Trainerinfo</h1>   
    <div style="margin-bottom: 1rem;">
        <label for="trainername" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Name:</label>
        <input type="text" id="trainername" name="trainername" value="<?php echo esc_attr( $trainername ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="telefonnummer" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Telefonnummer:</label>
        <input type="text" class="form-control" id="telefonnummer" name="telefonnummer" value="<?php echo esc_attr( $telefonnummer ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="mail" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">E-Mail:</label>
        <input type="text" class="form-control" id="mail" name="mail" value="<?php echo esc_attr( $mail ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="trainerbild" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Link zum Trainerbild</label>
        <input type="text" class="form-control" id="trainerbild" name="trainerbild" value="<?php echo esc_attr( $trainerbild ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
  </div id="kontakt">
  <div style="display:inline-block;" ><h1>Zweiter Kontakt</h1>   
    <div style="margin-bottom: 1rem;">
        <label for="kontaktname" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Name:</label>
        <input type="text" id="kontaktname" name="kontaktname" value="<?php echo esc_attr( $kontaktname ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="kontakttelefonnummer" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">kontaktTelefonnummer:</label>
        <input type="text" class="form-control" id="kontakttelefonnummer" name="kontakttelefonnummer" value="<?php echo esc_attr( $kontakttelefonnummer ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="kontaktmail" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">E-Mail:</label>
        <input type="text" class="form-control" id="kontaktmail" name="kontaktmail" value="<?php echo esc_attr( $kontaktmail ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
    <div style="margin-bottom: 1rem;">
        <label for="kontaktbild" style="display: inline-block; margin-bottom: 0.5rem; font-weight: bold;">Link zum Kontaktbild</label>
        <input type="text" class="form-control" id="kontaktbild" name="kontaktbild" value="<?php echo esc_attr( $kontaktbild ); ?>" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" />
    </div>
  </div>



</div> 
    <?php
}

add_action( 'save_post', 'save_custom_fields' );

function save_custom_fields( $post_id ) {
    if ( array_key_exists( 'jahrgang', $_POST ) ) {
        update_post_meta( $post_id, 'jahrgang', sanitize_text_field( $_POST['jahrgang'] ) );
    }    
    if ( array_key_exists( 'trainername', $_POST ) ) {
      update_post_meta( $post_id, 'trainername', sanitize_text_field( $_POST['trainername'] ) );
    }
    if ( array_key_exists( 'trainingstage', $_POST ) ) {
        update_post_meta( $post_id, 'trainingstage', sanitize_text_field( $_POST['trainingstage'] ) );
    }
    if ( array_key_exists( 'trainingszeit', $_POST ) ) {
        update_post_meta( $post_id, 'trainingszeit', sanitize_text_field( $_POST['trainingszeit'] ) );
    }
    if ( array_key_exists( 'telefonnummer', $_POST ) ) {
        update_post_meta( $post_id, 'telefonnummer', sanitize_text_field( $_POST['telefonnummer'] ) );
    }
    if ( array_key_exists( 'mail', $_POST ) ) {
        update_post_meta( $post_id, 'mail', sanitize_text_field( $_POST['mail'] ) );
    }
    if ( array_key_exists( 'trainingsadresse', $_POST ) ) {
      update_post_meta( $post_id, 'trainingsadresse', sanitize_text_field( $_POST['trainingsadresse'] ) );
    }
    if ( array_key_exists( 'trainerbild', $_POST ) ) {
      update_post_meta( $post_id, 'trainerbild', sanitize_text_field( $_POST['trainerbild'] ) );
    }
    if ( array_key_exists( 'bfvseite', $_POST ) ) {
      update_post_meta( $post_id, 'bfvseite', sanitize_text_field( $_POST['bfvseite'] ) );
    }
    if ( array_key_exists( 'kontaktname', $_POST ) ) {
      update_post_meta( $post_id, 'kontaktname', sanitize_text_field( $_POST['kontaktname'] ) );
    }
    if ( array_key_exists( 'kontakttelefonnummer', $_POST ) ) {
        update_post_meta( $post_id, 'kontakttelefonnummer', sanitize_text_field( $_POST['kontakttelefonnummer'] ) );
    }
    if ( array_key_exists( 'kontaktmail', $_POST ) ) {
            update_post_meta( $post_id, 'kontaktmail', sanitize_text_field( $_POST['kontaktmail'] ) );
    }
    if ( array_key_exists( 'kontaktbild', $_POST ) ) {
      update_post_meta( $post_id, 'kontaktbild', sanitize_text_field( $_POST['kontaktbild'] ) );
    }
}

?>