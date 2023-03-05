<?php


// ############################
// Spiele aus dem BFV auslesen und in eine Funktion Speichern
// ############################


// Funktion zum Eintrag in die Datenbank
function fetch_latest_games_bfv() { 


    // Array zum Speichern der bfvseite Werte
    $bfvseiten = array();
    
    // Query für Custom Post Type "teams"
    $teams_query = new WP_Query(array(
        'post_type' => 'teams',
        'posts_per_page' => -1 // Alle Posts abrufen
    ));
    
    // Query für Custom Post Type "jteams"
    $jteams_query = new WP_Query(array(
        'post_type' => 'jteams',
        'posts_per_page' => -1 // Alle Posts abrufen
    ));
    
    // Schleife durch die Posts im Custom Post Type "teams"
      if ($teams_query->have_posts()) {
          while ($teams_query->have_posts()) {
              $teams_query->the_post();
              $bfvseite = get_post_meta(get_the_ID(), 'bfvseite', true); // Wert des Feldes "bfvseite" abrufen
              if (!empty($bfvseite)) {
                  array_push($bfvseiten, $bfvseite); // Wert des Feldes "bfvseite" zum Array hinzufügen
              }
          }
      }
    
      // Schleife durch die Posts im Custom Post Type "jteams"
      if ($jteams_query->have_posts()) {
          while ($jteams_query->have_posts()) {
              $jteams_query->the_post();
              $bfvseite = get_post_meta(get_the_ID(), 'bfvseite', true); // Wert des Feldes "bfvseite" abrufen
              if (!empty($bfvseite)) {
                  array_push($bfvseiten, $bfvseite); // Wert des Feldes "bfvseite" zum Array hinzufügen
              }
          }
      }
    
      // Variablen setzen und Tabelle leeren
      global $wpdb2;     
      $table_name2 = $wpdb2->prefix . 'latest_games';  
      $wpdb2->query("TRUNCATE TABLE $table_name");

    
    
    ###############################
    # Durchlauf latest Games
    ###############################
          // Durchlaufe alle URLs
foreach ($bfvseiten as $url) {

  // Initiiere CURL und setze die Optionen
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

  // Hole den HTML-Code der Seite
  $html = curl_exec($ch);

  // Schließe CURL-Verbindung
  curl_close($ch);

  // Erstelle ein neues DOMDocument-Objekt und unterdrücke Fehlermeldungen
  $dom = new DOMDocument();
  libxml_use_internal_errors(true);

  // Lade den HTML-Code in das DOMDocument-Objekt
  $dom->loadHTML($html);

  // Erstelle ein neues DOMXPath-Objekt für die Abfrage der Daten
  $xpath = new DOMXPath($dom);

  // Finde alle Einträge mit der Klasse "bfv-spieltag-eintrag"
  $entries = $xpath->query('(.//div[contains(@class, "bfv-statistic__tile-wrapper--team")][1]//div[contains(@class, "bfv-result-tile")])[1]');

  // Durchlaufe alle Einträge und speichere die Daten in die Datenbank (latest-games)
  foreach ($entries as $entry) {


                // Hole das Datum aus dem Eintrag
                $datum_uhrzeit = $xpath->query('.//div[contains(@class, "bfv-matchday-date-time")][1]/span[2]', $entry)->item(0)->nodeValue;
                $datum_uhrzeit = preg_replace('/\s+/', '', $datum_uhrzeit); // Entfernt alle Leerzeichen
                $datum_uhrzeit = str_replace("/", " | ", $datum_uhrzeit);
                $datum_uhrzeit = str_replace('Uhr', '', $datum_uhrzeit);

                $teile = explode("|", $datum_uhrzeit);
                $datum = trim($teile[0]);
                $uhrzeit = trim($teile[1]);

                // Split Datum in seine drei Teile (Jahr, Monat, Tag)
                list($tag, $monat, $jahr) = explode(".", $datum);

                // Füge die Teile in umgekehrter Reihenfolge zusammen
                $datum = "$jahr-$monat-$tag";

                // Hole den Wochentag aus dem Eintrag
                $day = $xpath->query('.//div[contains(@class, "bfv-matchday-date-time")]/span[1]', $entry)->item(0)->nodeValue;
                $day = trim($day);
                // Hole Team0 aus dem Eintrag
                $team0 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__team-name--team0")][1]', $entry)->item(0)->nodeValue;
                $team0 = trim($team0);
                // Hole Team1 aus dem Eintrag
                $team1 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__team-name--team1")][1]', $entry)->item(0)->nodeValue;
                $team1 = trim($team1);
                // Hole Score0 aus dem Eintrag
                $score0 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__goals--team0")]', $entry)->item(0)->nodeValue;
                $score0 = trim($score0);
                // Hole Score1 aus dem Eintrag
                $score1 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__goals--team1")]', $entry)->item(0)->nodeValue;
                $score1 = trim($score1);



                $data2 = array();
                // $data['datum'] = '2023-03-10';
                // $data['uhrzeit'] = '12:00:00';
                $data2['day'] = 'day';
                $data2['team0'] = 'team0';
                $data2['score0'] = 'score0';
                $data2['score1'] = 'score1';
                $data2['team1'] = 'team1';
                $data2['url'] = 'url';
                $wpdb2->insert($table_name2, $data2 );


              }
              // Beitragsdaten zurücksetzen
              wp_reset_postdata();

}
    
}
    
    
    
    // Cronjob zum Ausführen der Funktion einmal jede Stunde
    function rio_schedule_latest_cronjob() {
      if ( ! wp_latest_scheduled( 'fetch_latest_games' ) ) {
        wp_schedule_event( time(), 'hourly', 'fetch_latest_games' );
      }
    }
    add_action( 'wp', 'rio_schedule_latest_cronjob' );
    add_action( 'fetch_latest_games', 'fetch_latest_games_bfv' );
    
    
    ?>