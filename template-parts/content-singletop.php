<div class="tg-banner tg-haslayout">
			<div class="tg-imglayer">
				<img src="<?php echo get_template_directory_uri( ) . "/assets/images/bg-pattran.png" ?>"alt="image description">
			</div>
			<div class="container">
				<div class="row">
					<div class="tg-banner-content tg-haslayout">
						<div class="tg-pagetitle">
							<h1><?php the_title(); ?></h1>
						</div>
						<ol class="tg-breadcrumb">
							<li class="active">
								<?php 
									$categories = get_the_category(); 
									if ( ! empty( $categories ) ) {
										echo esc_html( $categories[0]->name );   
									}
									if ( ! empty( get_post_meta( $post->ID, 'jahrgang', true ) )){
										$jahrgang = get_post_meta( $post->ID, 'jahrgang', true );   
										echo $jahrgang;
									}


									

								?>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>