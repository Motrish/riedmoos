<?php
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
							<h1>Suche</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-section-name">
							<h2>Suchergebnisse</h2>
						</div>
						<div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
							<div class="col-sm-11 col-xs-11 pull-right">
								<div class="row">
									<div class="col-md-9 col-sm-8 col-xs-12 pull-left">
										<div class="tg-blogpost tg-blogpostgrid">
										<?php
											if( have_posts()){

												while( have_posts()){
													the_post();
														get_template_part( 'template-parts/content', 'archive' );
												}

											}
										?>
										</div>
										<ul class="tg-pagination">
											<li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
											<li class="active"><a href="#">4</a></li>
											<li><a href="#">6</a></li>
											<li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
									<div class="col-md-3 col-sm-4 col-xs-12">
										<aside id="tg-sidebar" class="tg-sidebar">
											<div class="tg-widget tg-search">
												<form class="form-search">
												<fieldset>
													<form role="search" method="get" id="searchform" class="form-search searchform" action="<?php echo esc_url( home_url( '../' ) ); ?>">
														<div>
															<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
															<input type="search" placeholder="Suche ..." value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="s" />
															<button title="Search" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><i class="fa fa-search"></i></button>
														</div>
													</form>
												</fieldset>
												</form>
											</div>
											<div class="tg-widget tg-catagories-widget">
												<h3>catagories</h3>
												<ul>
													<li>
														<a href="#"><em>Web Design</em><i>389</i></a>
													</li>
													<li>
														<a href="#"><em>Marketing</em><i>203</i></a>
													</li>
													<li>
														<a href="#"><em>Wordpress</em><i>256</i></a>
													</li>
													<li>
														<a href="#"><em>Graphic Design</em><i>52</i></a>
													</li>
													<li>
														<a href="#"><em>Photography</em><i>43</i></a>
													</li>
													<li>
														<a href="#"><em>eCommerce</em><i>23</i></a>
													</li>
													<li>
														<a href="#"><em>Html</em><i>389</i></a>
													</li>
												</ul>
											</div>
											<div class="tg-widget tg-mostcommented-widget">
												<h3>Most Commented</h3>
												<ul>
													<li>
														<figure>
															<a href="#">
																<img src="images/blog/img-11.jpg" alt="image description">
															</a>
														</figure>
														<div class="tg-posttitle">
															<h3><a href="#">elit sed do eiusmod tempor</a></h3>
															<span>500 Comments</span>
														</div>
													</li>
													<li>
														<figure>
															<a href="#">
																<img src="images/blog/img-12.jpg" alt="image description">
															</a>
														</figure>
														<div class="tg-posttitle">
															<h3><a href="#">elit sed do eiusmod tempor</a></h3>
															<span>500 Comments</span>
														</div>
													</li>
													<li>
														<figure>
															<a href="#">
																<img src="images/blog/img-13.jpg" alt="image description">
															</a>
														</figure>
														<div class="tg-posttitle">
															<h3><a href="#">elit sed do eiusmod tempor</a></h3>
															<span>500 Comments</span>
														</div>
													</li>
												</ul>
											</div>
											<div class="tg-widget tg-price-widget">
												<h3>filter by price</h3>
												<div class="tg-price-range">
													<div id="tg-slider-range" class="tg-slider-range"></div>
													<p>
														<label for="amount">Price:</label>
														<input type="text" id="amount" readonly>
													</p>
													<a class="tg-btn" href="#">Filter</a>
												</div>
											</div>
											<div class="tg-widget">
												<h3>Slideshow Widget</h3>
												<div class="tg-slideshow-widget tg-haslayout">
													<div id="tg-slideshow-slider" class="tg-slideshow-slider tg-haslayout">
														<div class="swiper-wrapper">
															<div class="swiper-slide">
																<figure class="tg-postimg">
																	<img src="images/sidebar/img-01.jpg" alt="image description">
																</figure>
															</div>
															<div class="swiper-slide">
																<figure class="tg-postimg">
																	<img src="images/sidebar/img-01.jpg" alt="image description">
																</figure>
															</div>
															<div class="swiper-slide">
																<figure class="tg-postimg">
																	<img src="images/sidebar/img-01.jpg" alt="image description">
																</figure>
															</div>
														</div>
														<div class="swiper-pagination tg-pagination-slider"></div>
														<div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
														<div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
													</div>
												</div>
											</div>
											<div class="tg-widget tg-tags-widget">
												<h3>popular tags</h3>
												<ul>
													<li><a class="tg-btn" href="#">fashion</a></li>
													<li><a class="tg-btn" href="#">travel</a></li>
													<li><a class="tg-btn" href="#">sports</a></li>
													<li><a class="tg-btn" href="#">blog</a></li>
													<li><a class="tg-btn" href="#">magazine</a></li>
													<li><a class="tg-btn" href="#">fun time</a></li>
													<li><a class="tg-btn" href="#">ui</a></li>
													<li><a class="tg-btn" href="#">tech</a></li>
													<li><a class="tg-btn" href="#">soccer</a></li>
												</ul>
											</div>
										</aside>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->

		<?php
	get_footer( );

?>