                        <div class="tg-player col">
                            <div class="col-sm-6 col-xs-6 pull-right">
                                <div class="tg-playcontent">
                                    <a class="tg-theme-tag"><?php $funktion = get_post_meta( $post->ID, 'funktion', true );   
											if($funktion == 'Schiedsrichterobmann'){
												echo 'Schiedsrichter&shy;obmann';
											}else{
												echo $funktion;
											};
										?></a>
                                    <h3><a><?php $staffname = get_post_meta( $post->ID, 'staffname', true );   echo $staffname; ?></a></h3>
                                    
                                    <div class="tg-description">
                                        <!-- <h6>Informationen</h6>
                                        <p><?php #the_content(); ?>
                                        </p> -->
                                    </div>
                                    <ul class="tg-socialicons">
                                        <li><a href="<?php $telefonnummer = get_post_meta( $post->ID, 'telefonnummer', true );  echo $telefonnummer; ?>"><i class="fa fa-phone"></i></a></li>
                                        <li><a href="mailto:<?php $mail = get_post_meta( $post->ID, 'mail', true );    echo $mail; ?>"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <figure>
                                        <?php the_post_thumbnail( 'theme-slug-single-post', array( 'class' => 'single-post-image' ) ); ?>
                                </figure>
                            </div>
                        </div>