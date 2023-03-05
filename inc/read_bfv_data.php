<?php


// ############################
// Spiele aus dem BFV auslesen und in eine Funktion Speichern
// ############################


// Funktion zum Eintrag in die Datenbank
function fetch_games_bfv() { 


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
      global $wpdb;     
      $table_name = $wpdb->prefix . 'next_games';  
      $wpdb->query("TRUNCATE TABLE $table_name");
      $table_name2 = $wpdb->prefix . 'latest_games';  
      $wpdb->query("TRUNCATE TABLE $table_name2");
    
    
    ###############################
    # Durchlauf Next Games
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
  $entries = $xpath->query('//div[contains(@class, "bfv-spieltag-eintrag__match")]');

  // Durchlaufe alle Einträge und speichere die Daten in die Datenbank (next-games)
  foreach ($entries as $entry) {

                // Hole die Liga aus dem Eintrag
                $liga = $xpath->query('.//div[contains(@class, "bfv-spieltag-eintrag__region")]', $entry)->item(0)->nodeValue;
                $liga = trim($liga);
                // Hole das Datum aus dem Eintrag
                $datum_uhrzeit = $xpath->query('.//div[contains(@class, "bfv-matchday-date-time")]/span[2]', $entry)->item(0)->nodeValue;
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



                // $datum = DateTime::createFromFormat('d.m.Y', $datum)->format('Y-m-d');
                // $uhrzeit = DateTime::createFromFormat('H:i', $uhrzeit)->format('H:i:s');
                // Hole den Wochentag aus dem Eintrag
                $day = $xpath->query('.//div[contains(@class, "bfv-matchday-date-time")]/span[1] ', $entry)->item(0)->nodeValue;
                $day = trim($day);
                // Hole Team0 aus dem Eintrag
                $team0 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__team-name--team0")]', $entry)->item(0)->nodeValue;
                $team0 = trim($team0);
                // Hole Team1 aus dem Eintrag
                $team1 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__team-name--team1")]', $entry)->item(0)->nodeValue;
                $team1 = trim($team1);
                // Hole Score0 aus dem Eintrag
                $score0 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__goals--team0")]', $entry)->item(0)->nodeValue;
                $score0 = trim($score0);
                // Hole Score1 aus dem Eintrag
                $score1 = $xpath->query('.//div[contains(@class, "bfv-matchdata-result__goals--team1")]', $entry)->item(0)->nodeValue;
                $score1 = trim($score1);
                // Hole den Ort aus dem Eintrag
                $location = $xpath->query('.//div[contains(@class, "bfv-spieltag-eintrag__location")]', $entry)->item(0)->nodeValue;
                $location = trim($location);


                $data = array();
                $data['liga'] = $liga;
                $data['datum'] = $datum;
                $data['uhrzeit'] = $uhrzeit;
                $data['day'] = $day;
                $data['team0'] = $team0;
                $data['score0'] = $score0;
                $data['score1'] = $score1;
                $data['team1'] = $team1;
                $data['location'] = $location;
                $data['url'] = $url;
                $wpdb->insert($table_name, $data );


              }
              // Beitragsdaten zurücksetzen
              wp_reset_postdata();

}
    
    
    
    
###############################
# Durchlauf Latest Games
###############################

    // Auslesen der Letzten ergebnisse

    $last_games_link = $xpath->query('//a[@title="Letzte Spiele"]')->item(0);
    $url2 = $last_games_link->getAttribute('href');
    

    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $url2);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_CONNECTTIMEOUT, 10);
    
    // Hole den HTML-Code der Seite
    $html2 = curl_exec($ch2);

    // Schließe CURL-Verbindung
    curl_close($ch2);

    // Erstelle ein neues DOMDocument-Objekt und unterdrücke Fehlermeldungen
    $dom2 = new DOMDocument();
    libxml_use_internal_errors(true);

    // Lade den HTML-Code in das DOMDocument-Objekt
    $dom2->loadHTML($html2);

    // Erstelle ein neues DOMXPath-Objekt für die Abfrage der Daten
    $xpath2 = new DOMXPath($dom2);

    // Finde alle Einträge mit der Klasse "bfv-spieltag-eintrag"
    $entries2 = $xpath2->query('//div[contains(@class, "bfv-spieltag-eintrag__match")]');

    foreach ($entries as $entry) {

      // Hole die Liga aus dem Eintrag
      $liga2 = $xpath2->query('.//div[contains(@class, "bfv-spieltag-eintrag__region")]', $entry2)->item(0)->nodeValue;
      $liga2 = trim($liga2);
      // Hole das Datum aus dem Eintrag
      $datum_uhrzeit2 = $xpath2->query('.//div[contains(@class, "bfv-matchday-date-time")]/span[2]', $entry2)->item(0)->nodeValue;
      $datum_uhrzeit2 = preg_replace('/\s+/', '', $datum_uhrzeit2); // Entfernt alle Leerzeichen
      $datum_uhrzeit2 = str_replace("/", " | ", $datum_uhrzeit2);
      $datum_uhrzeit2 = str_replace('Uhr', '', $datum_uhrzeit2);

      $teile2 = explode("|", $datum_uhrzeit2);
      $datum2 = trim($teile2[0]);
      $uhrzeit2 = trim($teile2[1]);

      // Split Datum in seine drei Teile (Jahr, Monat, Tag)
      list($tag2, $monat2, $jahr2) = explode(".", $datum2);

      // Füge die Teile in umgekehrter Reihenfolge zusammen
      $datum2 = "$jahr2-$monat2-$tag2";
      // Hole den Wochentag aus dem Eintrag
      $day2 = $xpath2->query('.//div[contains(@class, "bfv-matchday-date-time")]/span[1] ', $entry2)->item(0)->nodeValue;
      $day2 = trim($day2);
      // Hole Team0 aus dem Eintrag
      $team02 = $xpath2->query('.//div[contains(@class, "bfv-matchdata-result__team-name--team0")]', $entry2)->item(0)->nodeValue;
      $team02 = trim($team0);
      // Hole Team1 aus dem Eintrag
      $team12 = $xpath2->query('.//div[contains(@class, "bfv-matchdata-result__team-name--team1")]', $entry2)->item(0)->nodeValue;
      $team12 = trim($team1);
      // Hole Score0 aus dem Eintrag
      $score0_node = $xpath2->query('.//div[contains(@class, "bfv-matchdata-result__goals--team0")]', $entry2)->item(0);
      $score02 = ($score0_node !== null) ? trim($score0_node->nodeValue) : '-';
      // Hole Score1 aus dem Eintrag
      $score1_node = $xpath2->query('.//div[contains(@class, "bfv-matchdata-result__goals--team1")]', $entry2)->item(0);
      $score12 = ($score1_node !== null) ? trim($score1_node->nodeValue) : '-';
      // Hole den Ort aus dem Eintrag
      $location2 = $xpath2->query('.//div[contains(@class, "bfv-spieltag-eintrag__location")]', $entry2)->item(0)->nodeValue;
      $location2 = trim($location2);


      // $data2 = array();
      // $data2['liga'] = $liga2;
      // $data2['datum'] = $datum2;
      // $data2['uhrzeit'] = $uhrzeit2;
      // $data2['day'] = $day2;
      // $data2['team0'] = $team02;
      // $data2['score0'] = $score02;
      // $data2['score1'] = $score12;
      // $data2['team1'] = $team12;
      // $data2['location'] = $location2;
      // $data2['url'] = $url2;
      // $wpdb2->insert($table_name2, $data2 );

      $data2 = array();
      $data2['liga'] = 'B-Klasse';
      $data2['datum'] = '2023-03-12';
      $data2['uhrzeit'] = '12:00:00';
      $data2['day'] = 'So.';
      $data2['team0'] = 'Riedmoos';
      $data2['score0'] = '4';
      $data2['score1'] = '2';
      $data2['team1'] = 'Gegner';
      $data2['location'] = 'Sportplatz Riedmoos, Kunstrasen | Zum Hirschdamm 3 | 85716 Unterschleißheim';
      $data2['url'] = 'https://www.bfv.de/mannschaften/sv-riedmoos-ev-1959-ii/016PM67AP4000000VV0AG80NVUT1FLRU';
      $wpdb2->insert($table_name2, $data2 );


    }
    // Beitragsdaten zurücksetzen
    wp_reset_postdata();

}
    
    
    
    
    // Cronjob zum Ausführen der Funktion einmal jede Stunde
    function rio_schedule_cronjob() {
      if ( ! wp_next_scheduled( 'fetch_hourly_games' ) ) {
        wp_schedule_event( time(), 'hourly', 'fetch_hourly_games' );
      }
    }
    add_action( 'wp', 'rio_schedule_cronjob' );
    add_action( 'fetch_hourly_games', 'fetch_games_bfv' );
    
    
    ?>