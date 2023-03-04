<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Informationen</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-aboutussection">
								<div class="row">
									<div class="col-md-6 col-sm-12 col-xs-12">
										<figure>
											<img src="<?php 
			if (has_post_thumbnail()) {
				the_post_thumbnail_url( 'thumbnail'); # code...
			}else{
				echo get_template_directory_uri(  ) . "/assets/images/KeinBild.png";

			}
			?>"alt="image description" width="100%" height="10px">
										</figure>
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2><?php the_title(); ?></h2></div>
											<div class="tg-description">
												<p><?php the_content(); ?></p>
											</div>
											<div class="tg-btnbox">
												<a class="tg-btn" href="<?php the_permalink(); ?>"><span>read more</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>