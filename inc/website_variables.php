<?php

############################
// Menüpunkt Variablen erstellen
############################

// Menüseite erstellen
function my_menu_page() {
  add_menu_page('Systemweite Variablen', 'Systemweite Variablen', 'manage_options', 'my-plugin', 'my_plugin_page');
}

// Menüseite Inhalt
function my_plugin_page() {
  ?>
  <div class="wrap">
    <h1 style="font-size:30px;">Variablen</h1>
    <form method="post" action="" >

    <h1 style="margin-top:1em">Vereinsdaten</h1>
    <div style="display: grid; grid-template-columns: 0.5fr 2fr 0.5fr 2fr; grid-gap: 1rem;">
    <label for="street" style="margin-top: 1rem; font-weight: bold;">Straße:</label> 
      <input type="text" name="street" id="street" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('street')); ?>" >
      
      <label for="postal-code" style="margin-top: 1rem; font-weight: bold;">PLZ-Ort:</label>
      <input type="text" name="postal-code" id="postal-code" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('postal-code')); ?>">
      
      <label for="phone" style="margin-top: 1rem; font-weight: bold;">Telefonnummer:</label>
      <input type="text" name="phone" id="phone" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('phone')); ?>">
      
      <label for="email" style="margin-top: 1rem; font-weight: bold;">E-Mail-Adresse:</label>
      <input type="email" name="email" id="email" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('email')); ?>">
    </div>

    <h1 style="margin-top:2em">Andere Daten</h1>
    <div style="display: grid; grid-template-columns: 0.5fr 2fr; grid-gap: 1rem;">
    <label for="data1" style="margin-top: 1rem; font-weight: bold;">Daten 1</label> 
      <input type="text" name="data1" id="data1" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('street')); ?>" >
      
      <label for="data2" style="margin-top: 1rem; font-weight: bold;">Daten 2</label>
      <input type="text" name="data2" id="data2" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('postal-code')); ?>">
      
      <label for="data3" style="margin-top: 1rem; font-weight: bold;">Daten 3</label>
      <input type="text" name="data3" id="data3" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('phone')); ?>">
      
      <label for="data4" style="margin-top: 1rem; font-weight: bold;">Daten 4</label>
      <input type="email" name="data4" id="data4" style="width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem;" value="<?php echo esc_attr(get_option('email')); ?>">
    </div>
 <?php wp_nonce_field('update-my-plugin-settings'); ?>
      <input type="submit" name="submit" value="Speichern" style="padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #fff; background-color: #007bff; border: 1px solid #007bff; border-radius: 0.25rem; cursor: pointer;">
    </form>
  </div>
  <?php
}

// Eingabefelder speichern
function save_my_plugin_settings() {
  if (!isset($_POST['submit'])) {
    return;
  }
  check_admin_referer('update-my-plugin-settings');
  update_option('street', sanitize_text_field($_POST['street']));
  update_option('postal-code', sanitize_text_field($_POST['postal-code']));
  update_option('phone', sanitize_text_field($_POST['phone']));
  update_option('email', sanitize_text_field($_POST['email']));
  ?>
  <div class="notice notice-success is-dismissible">
    <p>Einstellungen gespeichert.</p>
  </div>
  <?php
}

// Aktionen hinzufügen
add_action('admin_menu', 'my_menu_page');
add_action('admin_init', 'save_my_plugin_settings');


?>