<?php
if ( count( $results ) > 0 ) {
  $result = $results[0];
  $team0 = $result->team0;
  $team1 = $result->team1;
  $location = $result->location;
  $datum = $result->datum;
  $uhrzeit = $result->uhrzeit;
  $liga = $result->liga;
?>
<!--************************************
					Upcoming Match Start
			*************************************-->
<section class="tg-haslayout tg-bgstyleone">
  <div class="tg-bgboxone"></div>
  <div class="tg-bgboxtwo"></div>
  <div class="tg-bgpattrant">
    <div class="container">
      <div class="row">
        <div class="tg-upcomingmatch-counter">
          <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
            <figure>
              <img src="<?php echo get_template_directory_uri(  ) . "/assets/images/img-02.png" ?>" alt="image description">
            </figure>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="tg-contentbox">
              <div class="tg-section-heading">
                <h2><?php echo $team0 ?><span> gegen </span><?php echo $team1 ?></h2>
              </div>
              <div class="tg-description">
                <p><?php echo $datum ?></p><p><?php echo $uhrzeit ?></p><p><?php echo $location ?></p><p><?php echo $liga ?></p>
              </div>
              <div class="tg-counters">
                <div class="tg-counter tg-days"></div>
                <div class="tg-counter tg-hours"></div>
                <div class="tg-counter tg-minutes"></div>
                <div class="tg-counter tg-seconds"></div>
              </div>
              <div class="tg-btnbox">
                <a class="tg-btn" href="#"><span>read more</span></a>
                <a class="tg-btn" href="#"><span>book my ticket</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--************************************
					Upcoming Match End
			*************************************-->