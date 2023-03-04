<div class="col-md-6 col-sm-12 col-xs-12">
	<article class="tg-post">
		<figure class="tg-postimg">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php 
			if (has_post_thumbnail()) {
				the_post_thumbnail_url( 'thumbnail'); # code...
			}else{
				echo get_template_directory_uri(  ) . "/assets/images/KeinBild.png";

			}
			?>"alt="image description">
			</a>
			<figcaption>
				<ul class="tg-postmetadata">
					<li><a href="#"><?php the_date(); ?></a></li>
					<li><a href="#"><?php the_category( '</a></li><li><a href="#">' ); ?></a></li>
			</figcaption>
		</figure>
		<div class="tg-posttitle"><h3><a href="<?php the_permalink(); ?>"><?php 
		$title = get_the_title();
		$after = 'lol';
	 	$echo = true;

		if(strlen($title)>35){
			$title=substr($title,0,30)."...";
		}
		if($echo){
			echo $title;
		}else{
			return $title;
		}?></a></h3></div>
		<div class="tg-description">
			<?php the_excerpt(  ); ?>
		</div>
		<a class="tg-btn" href="<?php the_permalink(); ?>">Weiter lesen &rarr;</a>
	</article>
</div>