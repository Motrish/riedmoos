<!doctype html lang="de">

<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SV Riedmoos <?php the_title();?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	wp_head();
?>


</head>
<body>
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
			<span id="tg-close" class="tg-close fa fa-close"></span>
			<div class="tg-colhalf">
				<ul>
					<li class="active menu-item-has-children">
						<a href="#">Main</a>
						<ul class="tg-dropdown-menu">
							<li class="active"><a href="/">home1</a></li>
							<li><a href="/">home2</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="#">team</a>
						<ul class="tg-dropdown-menu">
							<li><a href="playergrid-v1.html">playergrid-v1</a></li>
							<li><a href="playergrid-v2.html">playergrid-v2</a></li>
							<li><a href="playerdetail.html">playergrid detail</a></li>
						</ul>
					</li>
					<li><a href="buyticket.html">Buy Tickets</a></li>
					<li class="menu-item-has-children">
						<a href="#">Match Results</a>
						<ul class="tg-dropdown-menu">
							<li><a href="matchresult.html">match result</a></li>
							<li><a href="matchresultdetail.html">match result detail</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="tg-colhalf">
				<ul>
					<li class="menu-item-has-children">
						<a href="#">fixtures</a>
						<ul class="tg-dropdown-menu">
							<li><a href="fixtures.html">fixtures</a></li>
							<li><a href="fixturedetail.html">fixture detail</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="#">pro soccer media</a>
						<ul class="tg-dropdown-menu">
							<li><a href="soccermedia-1.html">pro soccer media1</a></li>
							<li><a href="soccermedia-2.html">pro soccer media2</a></li>
						</ul>
					</li>
					<li><a href="contactus.html">Contact</a></li>
					<li class="menu-item-has-children">
						<a href="#"><i class=" fa fa-navicon"></i></a>
						<ul>
							<li><a href="aboutus.html">about us</a></li>
							<li><a href="shoplist.html">shop list</a></li>
							<li><a href="shopgrid.html">shop grid</a></li>
							<li><a href="productsingle.html">shop detail</a></li>
							<li><a href="bloglist.html">blog list</a></li>
							<li><a href="bloggrid.html">blog grid</a></li>
							<li><a href="blogdetail.html">blog detail</a></li>
							<li><a href="404.html">404 error</a></li>
							<li><a href="comming-soon.html">comming soon</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										<nav class="tg-addnav">
											<ul>
												<li><a href="javascript().html" data-toggle="modal" data-target="#tg-login">login</a></li>
												<li><a href="javascript().html" data-toggle="modal" data-target="#tg-register">Register</a></li>
												<li>
													<div class="tg-cart">
														<a href="javascript:void(0)" class="dropdown-toggle" id="tg-cartdropdown" data-toggle="dropdown">
															<i class="fa fa-shopping-cart"></i>
														</a>
														<div class="tg-cartcontent dropdown-menu" aria-labelledby="tg-cartdropdown">
															<ul>
																<li>
																	<figure>
																		<a href="#">
																			<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-01.jpg" ?>"alt="image description">
																		</a>
																	</figure>
																	<div class="tg-product-detail">
																		<h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
																		<span class="tg-price">Price: $23</span>
																		<a class="tg-delete" href="#"></a>
																	</div>
																</li>
																<li>
																	<figure>
																		<a href="#">
																			<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-02.jpg" ?>"alt="image description">
																		</a>
																	</figure>
																	<div class="tg-product-detail">
																		<h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
																		<span class="tg-price">Price: $23</span>
																		<a class="tg-delete" href="#"></a>
																	</div>
																</li>
																<li>
																	<figure>
																		<a href="#">
																			<img src="<?php echo get_template_directory_uri(  ) . "/assets/images/thumbnails/img-03.jpg" ?>"alt="image description">
																		</a>
																	</figure>
																	<div class="tg-product-detail">
																		<h3><a href="#">Smooth 3-Stripes Scarf</a></h3>
																		<span class="tg-price">Price: $23</span>
																		<a class="tg-delete" href="#"></a>
																	</div>
																</li>
																<li>
																	<div class="tg-btnbox">
																		<strong class="tg-carttotal">Total: $134</strong>
																		<a class="tg-btn" href="#"><span>checkout</span></a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<a id="tg-btn-search" href="javascript:void(0)"><i class="fa fa-search"></i></a>
												</li>
											</ul>
										</nav>
									</div>
									<div class="tg-colhalf">
									<?php 
										dynamic_sidebar( 'socialbar-1' )
									?>
									</div>
								</div>
							</nav>
						</div>
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button>
								<strong class="tg-logo">
									<a href="/">
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
							<div id="tg-navigation" class="tg-navigation">
								<div class="tg-colhalf">
									<?php
										$args = array(
											'menu' => 'primary_left',
											'container' => '',
											'items_wrap' => '<ul>%3$s</ul>',
											'theme_location' => "primary_left",
											'walker' => new Dropdown_Walker_Nav_Menu()
										);
										wp_nav_menu($args);
									?>
								</div>
							 	<div class="tg-colhalf">
									<?php
										$args = array(
											'menu' => 'primary_right',
											'container' => '',
											'items_wrap' => '<ul>%3$s</ul>',
											'theme_location' => "primary_right",
											'walker' => new Dropdown_Walker_Nav_Menu()
										);
										wp_nav_menu($args);
									?>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->