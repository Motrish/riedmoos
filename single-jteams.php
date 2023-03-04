<?php
    get_header();
    get_template_part( 'template-parts/content', 'jteamstop' );
			?>

<section class="tg-main-section tg-paddingbottom-zero tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <figure>
                            <?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>

                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h3>Trainer</h3>
                        
                        
                        <div class="tg-player">
                            <div class="col-sm-6 col-xs-6 pull-right">
                                <div class="tg-playcontent">
                                    <a class="tg-theme-tag">Trainer</a>
                                    <h3><a><?php $trainername = get_post_meta( $post->ID, 'trainername', true );   echo $trainername; ?></a></h3>
                                    
                                    <div class="tg-description">
                                        <h6>Bisherige Trainerstationen</h6>
                                        <p>SV Lohhof, SC Inhauser Moos, FC Phönix Schleißheim
                                        </p>
                                    </div>
                                    <ul class="tg-socialicons">
                                        <li><a href="<?php $telefonnummer = get_post_meta( $post->ID, 'telefonnummer', true );  echo $telefonnummer; ?>"><i class="fa fa-phone"></i></a></li>
                                        <li><a href="mailto:<?php $mail = get_post_meta( $post->ID, 'mail', true );    echo $mail; ?>"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>


                                
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <figure>
                                    <a>
                                        <img src="<?php $trainerbild = get_post_meta( $post->ID, 'trainerbild', true );  echo $trainerbild; ?>" alt="image description" class="mCS_img_loaded">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <h3>Trainingszeiten</h3>
                        <ul class="list-unstyled">
                            <li>
                                <?php $trainingstage = get_post_meta( $post->ID, 'trainingstage', true );    echo $trainingstage; ?>
                            </li>
                            <li>
                                <?php $trainingszeit = get_post_meta( $post->ID, 'trainingszeit', true );    echo $trainingszeit; ?>
                            </li>
                            <li>
                                <?php $trainingsadresse = get_post_meta( $post->ID, 'trainingsadresse', true );    echo $trainingsadresse; ?>
                            </li>
                        </ul>
                    </div>
                </div>

                


        


            </div>
</section>
<?php
        get_template_part('template-parts/content', 'table');
        ?>
/Theme/Single-Teams.php
<?php
get_footer( );
?>

