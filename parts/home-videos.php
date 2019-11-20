<?php
$videos_cat  = get_cat_ID( 'Videos' );
$videos_link = get_category_link( $videos_cat );
?>
<section id="videos-component" class="container margin-bottom-2">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-8" role="main">
                <div class="videos-container grid-container position-relative">
                    <div class="grid-x grid-padding-x">
                        <div class="cell small-12">
                            <header>
                                <h2><a href="<?php echo esc_html( $videos_link ); ?>" title="Veja mais vídeos"><i
                                                class="fas fa-video"></i> Vídeos</a></h2>
                            </header>
                        </div>
						<?php
						$posts   = get_posts( array(
							'posts_per_page' => 1,
							'category'       => $videos_cat
						) );
						$post_id = $posts[0]->ID;
						$thumb   = get_video_thumb( $post_id );
						?>
                        <div class="poster cell small-12 medium-6" data-bg="<?php echo $thumb; ?>">
                            <a href="#"
                               title="<?php echo get_the_title( $post_id ); ?>"
                               class="position-relative width-100 height-100 display-block"
                               data-open="videoModal"
                               data-video-id="<?php echo get_video_id( $post_id ); ?>"></a>
                        </div>

                        <nav class="cell small-12 medium-6 nav-videos medium-offset-6 padding-top-2 padding-bottom-2">
                            <span class="display-inline-block font-header tag-video"><?php echo wp_get_post_tags( $post_id )[0]->name; ?></span>
                            <span class="display-inline-block open-share">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                            <h2 class="display-inline-block width-100">
                                <a href="#"
                                   title="Assistir <?php echo get_the_title( $post_id ); ?>"
                                   data-open="videoModal"
                                   data-video-id="<?php echo get_video_id( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a>
                            </h2>
                            <p class="margin-bottom-1">
                                <a href="#"
                                   title="Assistir <?php echo get_the_permalink( $post_id ); ?>"
                                   class="video-btn display-inline-block"
                                   data-open="videoModal"
                                   data-video-id="<?php echo get_video_id( $post_id ); ?>">
                                    <i class="fas fa-play"></i> Assistir agora
                                </a>
                            </p>

                            <div class="line-video"></div>

							<?php
							$posts   = get_posts( array(
								'posts_per_page' => 1,
								'offset'         => 1,
								'category'       => $videos_cat
							) );
							$post_id = $posts[0]->ID;
							$thumb   = get_video_thumb( $post_id, 'videos-component-small' );
							?>
                            <div class="media-object margin-top-1">
                                <div class="media-object-section play-mask position-relative hide-for-medium-only">
                                    <a href="#"
                                       title="<?php echo get_the_title( $post_id ); ?>"
                                       class="display-block text-center"
                                       data-open="videoModal"
                                       data-video-id="<?php echo get_video_id( $post_id ); ?>">
                                        <span><i class="fas fa-play"></i></span>
                                        <img src="<?php echo $thumb; ?>" width="120" alt="<?php echo get_the_title( $post_id ); ?>">
                                    </a>
                                </div>
                                <div class="media-object-section">
                                    <span class="display-inline-block font-header tag-video"><?php echo wp_get_post_tags( $post_id )[0]->name; ?></span>
                                    <span class="display-inline-block open-share">
                                        <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                                    </span>
                                    <h4>
                                        <a href="#"
                                           title="<?php echo get_the_title( $post_id ); ?>"
                                           data-open="videoModal"
                                           data-video-id="<?php echo get_video_id( $post_id ); ?>"><?php echo get_the_title( $post_id ); ?></a>
                                    </h4>
                                </div>
                            </div>

                            <div class="width-100 margin-top-2">
                                <a href="<?php echo esc_html( $videos_link ); ?>" title="Veja mais Vídeos"
                                   class="display-inline-block width-100 all-video-btn text-center shadow"><i
                                            class="fas fa-list display-inline-block margin-right-1"></i> Mais vídeos</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <aside class="cell small-12 medium-4 radios-sidebar">
                <?php get_template_part('parts/component', 'radios'); ?>

                <div class="white-container width-100 text-center margin-top-1" role="banner">
                    <header class="width-100 text-center text-uppercase font-header">
                        <span>Publicidade</span>
                    </header>
	                <?php
	                portalczn_show_banner( 'portalczn_banners_radios' );
	                ?>
                </div>
            </aside>
        </div>
    </div>
</section>