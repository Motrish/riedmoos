		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-haslayout tg-footerinfobox">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-footerinfo">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-posttitle">
										<h3>signup newsletter</h3>
									</div>
									<div class="tg-description">
										<p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si aliqua quis.</p>
									</div>
									<form class="tg-form-newsletter">
										<fieldset>
											<div class="form-group">
												<input type="email" class="form-control" name="email" placeholder="Email">
											</div>
											<button class="tg-btn" type="submit">signup</button>
										</fieldset>
									</form>
									<div class="tg-posttitle">
										<h3>popular tags</h3>
									</div>
									<div class="tg-tags">
									<?php
// Anzahl der Tags, die in der Tag-Wolke angezeigt werden sollen
$tags_count = 10;

// Holen Sie sich die am häufigsten verwendeten Tags und sortieren Sie sie nach ihrer Häufigkeit
$tags = get_terms(array(
    'taxonomy' => 'post_tag',
    'hide_empty' => true,
    'orderby' => 'count',
    'order' => 'DESC',
    'number' => $tags_count
));

// Ausgabe der Tags
if (!empty($tags)) {
    
    foreach ($tags as $tag) {
        echo '<a class="tg-tag" href="' . get_term_link($tag) . '">' . $tag->name . '</a>';
    }

}
?>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-posttitle">
										<h3>Top products</h3>
									</div>
									<div class="tg-toprated">
										<ul>
											<li>
												<figure>
													<a href="#">
														<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-04.jpg" ?>"alt="image description">
													</a>
												</figure>
												<div class="tg-productcontent">
													<h4><a href="#">Smooth 3-Stripes Scarf</a></h4><span class="tg-stars"><span></span></span>
													<span class="tg-price">Price: $67</span>
												</div>
											</li>
											<li>
												<figure>
													<a href="#">
														<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-05.jpg" ?>"alt="image description">
													</a>
												</figure>
												<div class="tg-productcontent">
													<h4><a href="#">Smooth 3-Stripes Scarf</a></h4><span class="tg-stars"><span></span></span>
													<span class="tg-price">Price: $67</span>
												</div>
											</li>
											<li>
												<figure>
													<a href="#">
														<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-06.jpg" ?>"alt="image description">
													</a>
												</figure>
												<div class="tg-productcontent">
													<h4><a href="#">Smooth 3-Stripes Scarf</a></h4><span class="tg-stars"><span></span></span>
													<span class="tg-price">Price: $67</span>
												</div>
											</li>
											<li>
												<figure>
													<a href="#">
														<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-07.jpg" ?>"alt="image description">
													</a>
												</figure>
												<div class="tg-productcontent">
													<h4><a href="#">Smooth 3-Stripes Scarf</a></h4><span class="tg-stars"><span></span></span>
													<span class="tg-price">Price: $67</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-haslayout">
										<strong class="tg-logo">
											<a href="">
												

												<?php
													$custom_logo_id = get_theme_mod( 'custom_logo' );
														$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
														if ( has_custom_logo() ) {
															echo '<img src="'. esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) .'">';
														} else {
															echo '<h1>' . get_bloginfo('name') . '</h1>';
														}

														?>


											</a>
										</strong>
									</div>
									<div class="tg-description">
										<p>Vielleicht sind wir nicht der Verein mit der größten Strahlkraft. Aber bei uns ist jeder Willkommen. Denn wir sind mehr als nur ein Verein.</p>
									</div>
									<ul class="tg-contactinfo">
										<li>
											<i class="fa fa-home"></i>
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
											<i class="fa fa-phone"></i>
											<span>+44 123 456 788 - 9</span>
										</li>
									</ul>
									<div class="tg-haslayout">
										<a class="tg-btn" href="/kontaktformular">Kontakt</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<span class="tg-copyright"><a target="_blank" href="https://www.svriedmoos.de">© SV Riedmoos</a></span>
					<nav class="tg-footernav">
					<?php
										$args = array(
											'menu' => 'footer',
											'container' => '',
											'items_wrap' => '<ul>%3$s</ul>',
											'theme_location' => "footer",
											'walker' => new Dropdown_Walker_Nav_Menu()
										);
										wp_nav_menu($args);
									?>
					</nav>
				</div>
			</div>
		</footer>




					





		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div class="tg-searchbox">
		<a id="tg-close-search" class="tg-close-search" href="javascript:void(0)"><span class="fa fa-close"></span></a>
		<div class="tg-searcharea">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<form class="tg-form-search">
							<fieldset>
								<input type="search" class="form-control" placeholder="keyword">
								<i class="icon-icon_search2"></i>
							</fieldset>
						</form>
						<p>Start typing and press Enter to search</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Search End
	*************************************-->
	<!--************************************
		LightBoxes Start
	*************************************-->
	<div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="tg-modal-content">
				<div class="tg-formarea">
					<div class="tg-border-heading">
						<h3>Login</h3>
					</div>
					<form class="tg-loginform" method="post">
						<fieldset>
							<div class="form-group">
								<input type="text" name="userName/email" class="form-control" placeholder="username/email">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="password">
							</div>
							<div class="form-group">
								<label>
									<input type="checkbox" value="rememberme" class="checkbox">
									<em>Remember Me</em>
								</label>
								<a href="#">
									<em>Forgot Password</em>
									<i class="fa fa-question-circle"></i>
								</a>
							</div>
							<div class="form-group">
								<button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
							</div>
							<div class="tg-description">
								<p>Don't have an account? <a href="#">Signup</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="tg-logintype">
					<div class="tg-border-heading">
						<h3>Login with</h3>
					</div>
					<ul>
						<li class="tg-facebook"><a href="#">facebook</a></li>
						<li class="tg-twitter"><a href="#">twitter</a></li>
						<li class="tg-googleplus"><a href="#">google+</a></li>
						<li class="tg-linkedin"><a href="#">linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="tg-modalbox modal fade" id="tg-register" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="tg-modal-content">
				<div class="tg-formarea">
					<div class="tg-border-heading">
						<h3>Signup</h3>
					</div>
					<form class="tg-loginform" method="post">
						<fieldset>
							<div class="form-group">
								<input type="text" name="userName" class="form-control" placeholder="username">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="email">
							</div>
							<div class="form-group">
								<div class="tg-note">
									<i class="fa fa-exclamation-circle"></i>
									<span>We will email you your password.</span>
								</div>
							</div>
							<div class="form-group">
								<button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
							</div>
							<div class="tg-description">
								<p>Already have an account? <a href="#">Login</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="tg-logintype">
					<div class="tg-border-heading">
						<h3>Signup with</h3>
					</div>
					<ul>
						<li class="tg-facebook"><a href="#">facebook</a></li>
						<li class="tg-twitter"><a href="#">twitter</a></li>
						<li class="tg-googleplus"><a href="#">google+</a></li>
						<li class="tg-linkedin"><a href="#">linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
		LightBoxes End
	*************************************-->
	<script src="<?php echo get_template_directory_uri() ."/assets/js/jquery-library.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/bootstrap.min.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/customScrollbar.min.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/owl.carousel.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/isotope.pkgd.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/prettyPhoto.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/swiper.min.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/jquery-ui.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/countTo.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/appear.js"?>"></script>
	<script src="<?php echo get_template_directory_uri() ."/assets/js/main.js"?>"></script>
	<script type='text/javascript' src="https://widget-prod.bfv.de/widget/widgetresource/widgetjs"></script>

</body>


</html>