<?php
    get_header();
?>
		<!--************************************
				Home Slider Start
		*************************************-->
		<?php

			get_template_part( 'template-parts/content', 'slider' );

		?>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->


			<?php
			$args = array( 'post_type' => 'warnings', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part( 'template-parts/content', 'warnung' );
			endwhile;
			?>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Latest Result Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>latest result</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult">
								<div class="row">
									<div class="col-md-8 col-sm-12 col-xs-12">
										<div class="tab-content tg-tabscontent">
											<div role="tabpanel" class="tab-pane active" id="one">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>3 - 3</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="two">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>7 - 3</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="three">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>4 - 9</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="four">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>5 - 8</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="five">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>2 - 1</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="six">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>10 - 0</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="seven">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>4 - 6</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-01.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Gladiators ( Win )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-02.png"  ?>"alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">horned grogs ( lose )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div id="tg-matchscrollbar" class="tg-matchscrollbar tg-allmatchstatus">
											<ul class="tg-matchtabnav" role="tablist">
												<li role="presentation" class="active">
													<a href="#one" aria-controls="one" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#two" aria-controls="two" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#three" aria-controls="three" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#four" aria-controls="four" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#five" aria-controls="five" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																		<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#six" aria-controls="six" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#seven" aria-controls="seven" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>win</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-s-01.png"  ?>"alt="image description">
																</strong>
																<h4>lose</h4>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
										<div class="tg-btnbox">
											<a class="tg-btn" href="#"><span>view all</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Latest Result End
			*************************************-->
			<!--************************************
					Upcoming Match Start
			*************************************-->
			<section class=" tg-haslayout tg-bgstyleone">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-upcomingmatch-counter">
								<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/img-02.png" ?>"alt="image description">
									</figure>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="tg-contentbox">
										<div class="tg-section-heading"><h2>Gladiators <span>VS</span> Horned Frogs</h2></div>
										<div class="tg-description">
											<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Latest blog / news</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-blogpost">
								<div class="row rowart">
								<?php
											// if( have_posts()){

											// 	while( have_posts()){
											// 		the_post();
											// 			get_template_part( 'template-parts/content', 'archive' );
											// 	}
											// }

											$args = array(
												'post_type' => 'post',
												'posts_per_page' => 6
											  );
											  
											  $query = new WP_Query($args);
											  
											  if($query->have_posts()) {
												while($query->have_posts()) {
												  $query->the_post();
												  get_template_part('template-parts/content', 'archivefront');
												}
											  }
											  
											  wp_reset_postdata();



										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistics Start
			*************************************-->
			<!-- <section class="tg-main-section tg-haslayout tg-bgdark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-statistics">
								<div class="tg-statistic tg-goals">
									<span class="tg-icon icon-Icon1"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="2700" data-speed="8000" data-refresh-interval="50">2700</span></h2>
									<h3>Goals</h3>
								</div>
								<div class="tg-statistic tg-activeplayers">
									<span class="tg-icon icon-Icon2"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="1673" data-speed="8000" data-refresh-interval="50">1673</span></h2>
									<h3>Active Players</h3>
								</div>
								<div class="tg-statistic tg-activeteams">
									<span class="tg-icon icon-Icon3"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="236" data-speed="8000" data-refresh-interval="50">236</span></h2>
									<h3>Active Teams</h3>
								</div>
								<div class="tg-statistic tg-earnedawards">
									<span class="tg-icon icon-Icon4"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="197" data-speed="8000" data-refresh-interval="50">197</span></h2>
									<h3>Earned Awards</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!--************************************
					Statistics End
			*************************************-->
			<!--************************************
					Fixtures Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>fixtures</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>consectetur adipisicing elit sedia tempor labore</h2></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip ex ea commodo consequat.</p>
											</div>
											<div class="tg-btnbox">
												<a class="tg-btn" href="#"><span>view all</span></a>
											</div>
										</div>
									</div>
									<div class="col-md-7 col-sm-12 col-xs-12">
										<div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Gladiators</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Horned frogs</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="#"><span>read more</span></a>
																<a class="tg-btn" href="#"><span>book my ticket</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Gladiators</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Horned frogs</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="#"><span>read more</span></a>
																<a class="tg-btn" href="#"><span>book my ticket</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Gladiators</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Horned frogs</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="#"><span>read more</span></a>
																<a class="tg-btn" href="#"><span>book my ticket</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Gladiators</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Horned frogs</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="#"><span>read more</span></a>
																<a class="tg-btn" href="#"><span>book my ticket</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Gladiators</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/team-logo/logo-l-02.png" ?>"alt="image description">
																</strong>
																<h3>Horned frogs</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Jan16, 2017 15:30 PM Soccer Stadium, Dubai</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="#"><span>read more</span></a>
																<a class="tg-btn" href="#"><span>book my ticket</span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
											<div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Fixtures End
			*************************************-->
			<!--************************************
					Video Start
			*************************************-->
			<section class="tg-videobox tg-haslayout">
				<figure>
					<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/bg-video.jpg" ?>"alt="image description">
					<figcaption>
						<a class="tg-playbtn" href="https://youtu.be/iC9CpnSj-MU?iframe=true" data-rel="prettyPhoto[iframe]"></a>
						<h2>accusantium doloremque lauda totam rem aperiam ipsa</h2>
					</figcaption>
				</figure>
			</section>
			<!--************************************
					Video End
			*************************************-->
			<!--************************************
					Top Rated Player Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>top Rated Player</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-topratedplayer tg-haslayout">
								<div class="row">
									<div class="col-md-7 col-sm-12 col-xs-12">
										<div id="tg-playerscrollbar" class="tg-players tg-playerscrollbar">
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/player/img-01.png" ?>"alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/player/img-02.png" ?>"alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/player/img-03.png" ?>"alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/player/img-01.png" ?>"alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/player/img-02.png" ?>"alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/player/img-03.png" ?>"alt="image description">
														</a>
													</figure>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
											</div>
											<div class="tg-btnbox">
												<a class="tg-btn" href="#"><span>view all</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Top Rated Player End
			*************************************-->
			<!--************************************
					Points Table Start
			*************************************-->
			<section class=" tg-haslayout tg-bgstyletwo">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-pointstablewrapper">
								<div class="col-sm-8 col-xs-12">
									<div class="tg-pointstable">
										<div class="tg-section-heading"><h2>Tabelle Erste Mannschaft</h2></div>
										<div id="tg-pointstable-slider" class="tg-pointstable-slider">
											<?php
													$url = 'https://www.bfv.de/mannschaften/sv-riedmoos-ev/016PB2OPTC000000VV0AG811VTE5EA5R';

													// Neue DOMDocument-Instanz erstellen
													$dom = new DOMDocument();

													// Seite laden
													$dom->loadHTMLFile($url);

													// Alle Elemente mit der Klasse "bfv-table-entry" finden
													$elements = $dom->getElementsByTagName('td');
													$table_entries = array();
													foreach ($elements as $element) {
														$class = $element->getAttribute('class');
														if (strpos($class, 'bfv-table-entry') !== false) {
															$table_entries[] = $element->nodeValue;
														}
													}


													$match_found = false;
													// Ausgabe als 8-spaltige Tabelle
													echo "<div class='swiper-wrapper'>\n";
													$i = 0;
													$j =0;
													foreach ($table_entries as $entry) {
														if ($i % 9 == 0) {
															echo "<div class='swiper-slide'><div class='tg-pointtable'>";
														}
														$entry = trim($entry);
														// Hervorheben der 
														if (preg_match("/(.+)riedmoos.(.+)/i", $entry)) {
															echo "<div class='tg-box' style='font-weight:600'>$entry</div>";
															$j++;
														}else{
															if ($j >= 1 && $j <= 7) {
															echo "<div class='tg-box' style='font-weight:600'>$entry</div>";
															$j++;	
															}else{
															echo "<div class='tg-box' style='color:#37354270'>$entry</div>";	
															}
															
														
														}
														if ($i % 9 == 8) {
															echo "</div></div>\n";
														}
														$i++;
													}
													echo "</div>\n";




											?>
											<div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
											<div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
										</div>
										<div class="tg-btnbox">
										<a class="bfv-logo-a" style="color:white" href="https://www.bfv.de/mannschaften/sv-riedmoos-ev/016PB2OPTC000000VV0AG811VTE5EA5R">Bereitgestellt durch: 
											<svg class="bfv-logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166 64">
											<path class="bfv-logo-path" fill="#FFF" fill-rule="evenodd" d="M33.16 21.695C30.815 13.088 25.04 7 18.284 7 9.453 7 2.295 17.403 2.295 30.234c0 12.833 7.158 23.238 15.99 23.237.138 0 .274-.005.411-.01l-2.35-2.974 5.143-6.517-5.153-6.513 5.147-6.516-1.89-5.419h-2.47l-.415 1.44 2.88.008-.56 1.12h-2.649l-.792 2.72h-1.418l.479-2.72h-1.696c.131.24.185.526.125.866-.2 1.142-1.34 1.855-2.687 1.855H6.015l.479-2.72h-1.28l.56-1.121h.918l.45-2.557h4.096c1.173 0 2.112.57 1.911 1.71a1.54 1.54 0 0 1-.464.847h2.16l.452-2.557h5.853l.816 3.912 2.277-3.909 2.405.003 4.474-5.672c1.53 4.122 2.16 7.659 2.4 9.994l-1.737 2.198 1.805 2.282c-.215 3.742-.968 7.245-2.144 10.32l-4.811-6.085-5.146 6.514 4.954 6.264c1.906-1.642 3.558-3.83 4.883-6.39-2.76 6.874-7.67 11.865-13.688 11.865-8.846 0-16.449-11.057-16.336-24.694.082-9.853 3.828-17.544 8.58-21.41C4.068 13.684 0 22.184 0 32.194 0 46.13 7.775 57.43 17.366 57.43c9.59 0 17.365-11.299 17.365-25.233 0-3.748-.563-7.304-1.572-10.501zm-1.375 9.244l-5.137-6.52-5.165 6.522 5.152 6.515 5.15-6.517zm-20.904-5.413H8.898l-.395 1.446h2.124c.624 0 1.014-.339 1.082-.725.067-.378-.204-.721-.828-.721zm-.17 2.56H8.17l-.47 1.603 2.73.001c.635 0 1.16-.347 1.24-.794.08-.46-.323-.81-.958-.81zm150.439 8.51c-.293 0-.44 0-.627.026v4.814c.107.027.28.04.574.04 1.107 0 1.973-.76 1.973-2.44 0-1.4-.266-2.44-1.92-2.44zm-.254 7.027c-.973 0-1.946-.027-2.852-.081v-8.96c.706-.04 1.933-.08 3.24-.08 2.626 0 4.466 1.08 4.466 4.334 0 3.08-1.933 4.787-4.854 4.787zm-8.116-.067l-1.507-3.08a24.519 24.519 0 0 1-.893-2.027c.054.534.066.84.066 1.427v3.68h-2.385v-9h3.172l1.307 2.68c.387.8.787 1.613 1.093 2.333a18.356 18.356 0 0 1-.093-1.866v-3.147h2.387v9h-3.147zm-10.026-4.547c-.16-.52-.32-1-.413-1.56h-.027c-.08.52-.253 1.12-.44 1.707l-.306.987h1.546l-.36-1.134zm1.453 4.547l-.466-1.467h-2.773l-.454 1.467h-2.453l2.933-9h2.84l3.08 9h-2.707zm-10.68-3.68c-.093 0-.492 0-.64.013v1.64c.16.014.428.026.64.026.667 0 1.121-.292 1.121-.853 0-.466-.347-.826-1.12-.826zm.068-3.387c-.28 0-.494.014-.707.027v1.52c.147.013.32.013.533.013.773 0 1.134-.333 1.134-.853 0-.467-.374-.707-.96-.707zm-.08 7.093c-.547 0-1.587-.026-3.107-.026V34.57c.907-.054 2.466-.08 3.586-.08 1.947 0 3.2.746 3.2 2.32 0 .8-.466 1.52-1.16 1.88v.04c.774.266 1.294 1.08 1.294 1.946 0 1.627-1.24 2.906-3.814 2.906zm-8.773-7.053c-.16 0-.387.014-.467.027v1.933c.093.014.28.027.413.027.68 0 1.147-.36 1.147-1.027 0-.533-.28-.96-1.093-.96zm1.32 7.027l-1.694-3.28h-.093v3.28h-2.48v-9c.84-.053 1.947-.067 3.08-.067 2.294 0 3.573.814 3.573 2.814 0 1.066-.6 2.093-1.64 2.466.24.36.454.694.654 1.04l1.613 2.747h-3.013zm-11.466 0v-9h5.266v2.106h-2.786v1.268h2.64v2.026h-2.64v1.453h2.786v2.147h-5.266zm-4.253 0h-2.92l-2.96-9h2.667l1.373 4.507c.147.48.306.986.44 1.6h.027c.106-.56.173-.907.426-1.734l1.334-4.373h2.532l-2.919 9zm-10.118-2.48h3.467v-1.933h-3.467v1.933zm-6.185 2.48v-9h2.48v6.786H99v2.214h-4.96zm-6.426 0v-9h2.48v6.786h2.48v2.214h-4.96zm-5.44-4.547c-.16-.52-.32-1-.413-1.56h-.026c-.08.52-.254 1.12-.44 1.707l-.308.987h1.547l-.36-1.134zm1.454 4.547l-.467-1.467h-2.773l-.453 1.467H77.48l2.934-9h2.84l3.08 9h-2.707zm-10.547-3.68c-.093 0-.493 0-.64.013v1.64c.16.014.427.026.64.026.667 0 1.12-.292 1.12-.853 0-.466-.346-.826-1.12-.826zm.067-3.387c-.28 0-.493.014-.706.027v1.52c.146.013.32.013.533.013.773 0 1.133-.333 1.133-.853 0-.467-.373-.707-.96-.707zm-.08 7.093c-.547 0-1.586-.026-3.106-.026V34.57c.906-.054 2.466-.08 3.586-.08 1.947 0 3.2.746 3.2 2.32 0 .8-.466 1.52-1.16 1.88v.04c.773.266 1.294 1.08 1.294 1.946 0 1.627-1.24 2.906-3.813 2.906zm-8.466.147a8.644 8.644 0 0 1-1.853-.187l.133-2.266c.493.173 1.24.32 1.92.32.6 0 .987-.254.987-.667 0-1.307-3.36-.533-3.36-3.613 0-1.787 1.373-2.933 3.747-2.933.453 0 1.08.054 1.64.146l-.134 2.147a5.857 5.857 0 0 0-1.6-.24c-.693 0-.986.28-.986.627 0 1.133 3.36.693 3.36 3.507 0 1.8-1.454 3.16-3.854 3.16zm-6.96 0a8.649 8.649 0 0 1-1.852-.187l.133-2.266c.493.173 1.24.32 1.92.32.6 0 .986-.254.986-.667 0-1.307-3.36-.533-3.36-3.613 0-1.787 1.374-2.933 3.747-2.933.454 0 1.08.054 1.64.146l-.133 2.147a5.857 5.857 0 0 0-1.6-.24c-.693 0-.987.28-.987.627 0 1.133 3.36.693 3.36 3.507 0 1.8-1.453 3.16-3.853 3.16zm-7.199.013c-2.893 0-3.653-1.533-3.653-3.44v-5.746h2.48v5.627c0 .96.293 1.48 1.32 1.48 1 0 1.32-.427 1.32-1.547v-5.56h2.453v5.426c0 2.614-1.506 3.76-3.92 3.76zm-7.865-7.053v1.454h2.506v2.04h-2.506v3.373h-2.48v-9h5.133v2.133h-2.653zm117.181-15.171a5.65 5.65 0 0 0-.646.037v2.677c.13.019.388.037.572.037.942 0 1.588-.499 1.588-1.421 0-.74-.388-1.33-1.514-1.33zm1.828 9.731l-2.345-4.543h-.129v4.543h-3.435V18.786c1.164-.074 2.696-.093 4.266-.093 3.175 0 4.948 1.127 4.948 3.896 0 1.477-.83 2.9-2.271 3.416.332.498.628.96.905 1.44l2.234 3.804h-4.173zm-16.985 0V18.786h7.294v2.917h-3.859v1.754h3.655v2.806h-3.655v2.013h3.859v2.973h-7.294zm-7.194 0v-4.912h-3.73v4.912h-3.434V18.786h3.434v4.542h3.73v-4.542h3.433v12.463h-3.433zm-13.293.165c-4.892 0-5.908-3.378-5.908-5.89 0-4.153 2.345-6.83 6.426-6.83.812 0 1.68.11 2.4.295l-.388 3.102a7.691 7.691 0 0 0-2.012-.277c-1.625 0-2.64 1.126-2.64 3.139 0 2.16.83 3.323 2.769 3.323.535 0 1.366-.13 1.883-.351l.406 3.065c-.867.277-1.939.424-2.936.424zm-13.494.075c-.85 0-1.735-.075-2.566-.259l.184-3.139c.683.24 1.717.443 2.66.443.83 0 1.365-.35 1.365-.923 0-1.81-4.652-.738-4.652-5.004 0-2.474 1.901-4.062 5.188-4.062.627 0 1.495.075 2.27.204l-.184 2.972a8.138 8.138 0 0 0-2.216-.332c-.96 0-1.366.388-1.366.868 0 1.57 4.653.96 4.653 4.856 0 2.493-2.012 4.376-5.336 4.376zm-9.637-.24h3.435V18.786h-3.435v12.463zm-8.583-9.731c-.222 0-.535.019-.647.037v2.677c.13.019.389.037.574.037.94 0 1.587-.499 1.587-1.421 0-.74-.387-1.33-1.514-1.33zm1.828 9.731l-2.345-4.543h-.13v4.543h-3.433V18.786c1.162-.074 2.695-.093 4.265-.093 3.175 0 4.948 1.127 4.948 3.896 0 1.477-.831 2.9-2.27 3.416.331.498.627.96.904 1.44l2.233 3.804H94.23zm-16.615 0V18.786h7.293v2.917h-3.859v1.754h3.656v2.806h-3.656v2.013h3.859v2.973h-7.293zm-6.552-4.303v4.303h-3.435v-4.283l-3.896-8.18h3.73l1.163 2.696c.314.72.554 1.347.74 1.901h.036c.222-.665.554-1.403.905-2.178l1.07-2.42h3.638l-3.951 8.161zm-12.939-1.993c-.221-.72-.443-1.385-.572-2.16h-.037c-.11.72-.351 1.55-.61 2.363l-.424 1.365h2.142l-.499-1.568zm2.013 6.296l-.646-2.032h-3.84l-.629 2.032h-3.397l4.062-12.463h3.933l4.265 12.463h-3.748zm-15.71-5.096c-.13 0-.684 0-.887.018v2.271c.222.019.59.037.886.037.923 0 1.551-.406 1.551-1.181 0-.647-.48-1.145-1.55-1.145zm.092-4.69c-.388 0-.684.019-.98.037v2.105c.204.018.444.018.74.018 1.07 0 1.57-.462 1.57-1.182 0-.646-.518-.978-1.33-.978zm-.111 9.822c-.757 0-2.197-.036-4.302-.036V18.804c1.255-.074 3.416-.11 4.966-.11 2.696 0 4.432 1.033 4.432 3.212 0 1.108-.646 2.105-1.607 2.603v.056c1.071.369 1.791 1.495 1.791 2.695 0 2.253-1.716 4.025-5.28 4.025z"></path>
											</svg>
											</a> 
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/img-03.png" ?>"alt="image description">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Points Table End
			*************************************-->
			<!--************************************
					Blog Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Latest blog / news</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-blogpost">
								<div class="row">
									<div class="col-sm-6 col-xs-12">
										<article class="tg-post">
											<figure class="tg-postimg">
												<a href="#">
													<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/blog/img-01.jpg" ?>"alt="image description">
												</a>
												<figcaption>
													<ul class="tg-postmetadata">
														<li><a href="#">by admin</a></li>
														<li><a href="#">04 comments</a></li>
														<li><a href="#">lifestyle</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="tg-posttitle"><h3><a href="#">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
											</div>
											<a class="tg-btn" href="#">Read more</a>
										</article>
									</div>
									<div class="col-sm-6 col-xs-12">
										<article class="tg-post">
											<figure class="tg-postimg">
												<a href="#">
													<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/blog/img-02.jpg" ?>"alt="image description">
												</a>
												<figcaption>
													<ul class="tg-postmetadata">
														<li><a href="#">by admin</a></li>
														<li><a href="#">04 comments</a></li>
														<li><a href="#">lifestyle</a></li>
													</ul>
												</figcaption>
											</figure>
											<div class="tg-posttitle"><h3><a href="#">dipisicing elit sed do eiusmod tempor indunt</a></h3></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
											</div>
											<a class="tg-btn" href="#"><span>read more</span></a>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Blog End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
frontpage push test
<?php
	get_footer( );
?>


