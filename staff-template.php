<?php
/* Template Name: Staff Template */
get_header(); ?>
	<div class="tg-banner tg-haslayout">
		<div class="tg-imglayer"> <img src="<?php echo get_template_directory_uri() . "/assets/images/bg-pattran.png " ?>"alt="image description"> </div>
		<div class="container">
			<div class="row">
				<div class="tg-banner-content tg-haslayout">
					<div class="tg-pagetitle">
						<h1><?php echo get_the_title() ?></h1> </div>
				</div>
			</div>
		</div>
	</div>
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>Vorstand</h2> </div>
			<div class="col-sm-11 col-xs-11 pull-right">
				<div class="row">
					<div class="tg-topratedplayer tg-haslayout">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div>
									<div>
										<div>
											<?php
												$functions = array(
													'Erster Vorsitzender',
													'Zweiter Vorsitzender',
													'Dritter Vorsitzender',
													'Schriftführer',
													'Jugendleitung',
													'Technischer Leiter',
													'Kassier'
												);

												foreach ($functions as $function)
												{
													$query = new WP_Query(array(
														'post_type' => 'staff',
														'meta_query' => array(
															array(
																'key' => 'funktion',
																'value' => array(
																	$function
																)
															)
														)
													));
													while ($query->have_posts())
													{
														$query->the_post();
														get_template_part('template-parts/content', 'staffmember');
													}
												}
												// Reset post data
												wp_reset_postdata();
											?>
										</div>
										<div>
											<div> </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="tg-contentbox">
									<div class="tg-section-heading">
										<h2>Bankverbindungen</h2></div>
									<div class="tg-description">
										<p><?php the_content(); ?></p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="tg-main-section tg-haslayout">
		<div class="container">
			<div class="tg-section-name">
				<h2>Weitere Funktionen</h2> </div>
			<div class="col-sm-11 col-xs-11 pull-right">

						
							<div class="col-md-11 col-sm-12 col-xs-12 staffcol-2">
								
										
											<?php
												$functions = array(
													'2. Schriftführer',
													'2. Technischer Leiter',
													'2. Kassier',
													'2. Jugendleitung',
													'Schiedsrichterobmann',
													'Revisor',
													'Webmaster',
													'Propagandawart',
													'Platzvermietung',
												);

												foreach ($functions as $function)
												{
													$query = new WP_Query(array(
														'post_type' => 'staff',
														'meta_query' => array(
															array(
																'key' => 'funktion',
																'value' => array(
																	$function
																)
															)
														)
													));
													while ($query->have_posts())
													{
														$query->the_post();
														get_template_part('template-parts/content', 'staffmember');
													}
												}
												// Reset post data
												wp_reset_postdata();
											?>
										
										
									
							
				</div>
			</div>
		</div>
	</section>

	<!-- get_template_part( 'template-parts/content', 'staffmember' );-->/staff-template.php
	<?php
get_footer();

?>