<?php
    get_header();?>
		<div class="tg-banner tg-haslayout">
			<div class="tg-imglayer">
				<img src="<?php echo get_template_directory_uri( ) . "/assets/images/bg-pattran.png" ?>"alt="image description">
			</div>
			<div class="container">
				<div class="row">
					<div class="tg-banner-content tg-haslayout">
						<div class="tg-pagetitle">
							<h1><?php echo get_the_title() ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
        <section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
				<div class="container">
					 <?php the_content(); ?>
				</div>
			</section>

            page
<?php
	get_footer( );

?>

