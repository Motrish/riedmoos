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
							<h1>Seite nicht gefunden</h1>
						</div>
					</div>
				</div>
			</div>
		</div>





		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="tg-404">
							<img src="<?php echo get_template_directory_uri( ) . "/assets/images/404-img.jpg" ?>"alt="image description">
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="tg-404-content">
								<div class="tg-section-heading"><h2>Da ist wohl etwas schief gelaufen</h2></div>
								<div class="tg-description">
									<p>Die angeforderte Seite gibt es nicht. Du kannst aber direkt hier nach einer Seite suchen. Gib dazu einfach in das Siuche Feld ein was du gerne finden möchtest.</p>
								</div>
								<form class="tg-searcharea form-search">
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
						</div>
					</div>
				</div>
			</section>
		</main>
		<!--************************************
				Main End
		*************************************-->






		<article class="content px-3 py-5 p-md-5">

            <h1>Seite wurde nicht gefunden</h1>




	    </article>




<?php
    get_footer( );
?>