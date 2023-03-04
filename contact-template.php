<?php
/* Template Name: Contact Template */
get_header();
?>
<div class="tg-banner tg-haslayout">
<div class="tg-imglayer">
    <img src="<?php echo get_template_directory_uri( ) . "/assets/images/bg-pattran.png" ?>"alt="image description">
</div>
<div class="container">
    <div class="row">
        <div class="tg-banner-content tg-haslayout">
            <div class="tg-pagetitle">
                <h1>Kontaktformular</h1>
            </div>
        </div>
    </div>
</div>
</div>
<?php
/* Start the Loop */
while (have_posts()) :
    the_post();
    ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- .entry-header -->
    <div class="entry-content">

        <main id="tg-main" class="tg-main tg-paddingbottom-zero tg-haslayout">
			<section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
            <div class="container">
					<div class="tg-section-name">
						<h2>contact</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-contactus tg-haslayout">
								<div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tg-contactinfobox">
                                    <div class="tg-section-heading"><h2>Du willst mit uns Kontakt aufnehmen, oder hast ein anderes Anliegen?</h2>
                                    </div>
                                    <div class="tg-description">
                                
                                
                                
                                <?php
                                the_content('<p>', '</p>');
                                ?>
                                </div>
                                        <ul class="tg-contactinfo">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <address>SV Riedmoos e.V. 1959<br>
                                                        Zum Hirschdamm 3<br>
                                                        85716 Unterschleißheim
                                                </address>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <a href="mailto:info@svriedmoos.de">info@svriedmoos.de</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-facebook-f"></i>
                                                <a href="hattps://facebook.com/svriedmoos">facebook.com/svriedmoos</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-twitter"></i>
                                                <a href="https://instagram.com/svriedmoos">instagram.com/svriedmoos</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-laptop"></i>
                                                <a href="https://www.svriedmoos.de">www.svriedmoos.de</a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">



                                        <form name="contactForm" class="tg-commentform help-form" id="contactForm" method="post" onsubmit="return formValidation()"  action="">
                                            <fieldset>
                                                <div class="row form-group">
                                                    <input type="text" id="name" placeholder="Name*" name="name" class="form-control">
                                                </div>
                                                <div class="row form-group">
                                                    <input type="text" placeholder="Email*" class="form-control" id="email" name="email">
                                                </div>
                                                <div class="row form-group">
                                                    <input type="text" placeholder="Thema" id="subject" name="subject">
                                                </div>
                                                <div class="form-group">
													<div class="tg-select">
														<select name="contact[type]">
															<option value="">Message Type*</option>
															<option value="Help">Discussion</option>
															<option value="Help">Help</option>
															<option value="Consutation">Consutation</option>
														</select>
													</div>
												</div>
                                                <div class="row form-group">
                                                    <textarea id="message" placeholder="Nachricht*" name="message" rows="5"></textarea>
                                                </div>
                                                <div class="row form-group">
                                                    <input class="tg-btn submit-now" type="submit" value="Submit"> <span id="status"></span>
                                                </div>
                                            </fieldset>
                                        </form> 
									</div>
									<div id="tg-officeaddressslider" class="tg-officeaddressslider tg-officeaddressnav owl-carousel">
										<div class="item">
											<span class="tg-theme-tag"></span>
											<div class="tg-section-heading"><h2>SV Riedmoos</h2></div>
											<ul class="tg-contactinfo">
												<li>
													<i class="fa fa-map-marker"></i>
													<address>SV Riedmoos e.V. 1959<br>
															Zum Hirschdamm 3<br>
															85716 Unterschleißheim</address>
												</li>
												
												<li>
													<i class="fa fa-envelope-o"></i>
													<span>info@svriedmoos.de</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="tg-mapcontent" class="tg-mapcontent owl-carousel">
					<div class="item">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10623.94226502881!2d11.5329278!3d48.264652299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e7059a26d8a4b%3A0xdabe19927d1eb548!2sSV%20Riedmoos%20e.V.%201959!5e0!3m2!1sde!2sde!4v1676204589186!5m2!1sde!2sde"></iframe>
					</div>
				</div>
			</section>
		</main>

                
				
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->
<?php
endwhile
; // End of the loop.

get_footer();
?>