<?php
############################
// Tabelle erstellen für Ergebnisse
############################

function Spieltage_create_db() {

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'next_games';
	$table_name = $wpdb->prefix . 'latest_games';
	$sql = "CREATE TABLE $table_name (
		  id mediumint(9) NOT NULL AUTO_INCREMENT,
      datum DATE NOT NULL,
      uhrzeit TIME NOT NULL,     
      day VARCHAR(250) NOT NULL,
      liga VARCHAR(250) NOT NULL,
      team0 VARCHAR(250) NOT NULL,
      score0 VARCHAR(250) NOT NULL,
      score1 VARCHAR(250) NOT NULL,
      team1 VARCHAR(250) NOT NULL,
      location VARCHAR(250) NOT NULL,
      url VARCHAR(255) NOT NULL,
		  UNIQUE KEY id (id)
	) $charset_collate;";


$sql2 = "CREATE TABLE $table_name2 (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  datum DATE NOT NULL,
  uhrzeit TIME NOT NULL,     
  day VARCHAR(250) NOT NULL,
  team0 VARCHAR(250) NOT NULL,
  score0 VARCHAR(250) NOT NULL,
  score1 VARCHAR(250) NOT NULL,
  team1 VARCHAR(250) NOT NULL,
  url VARCHAR(255) NOT NULL,
  UNIQUE KEY id (id)
) $charset_collate;";



	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
  dbDelta( $sql2 );
}



// Hook function to the 'after_switch_theme' action
add_action('after_switch_theme', 'Spieltage_create_db');


?>