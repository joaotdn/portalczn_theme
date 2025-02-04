<?php
get_header( 'single' );
$obj = get_queried_object();
?>
    <div class="container bgwhite header-single header-video">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-middle">
                <div class="cell small-6 medium-4">
                    <a href="#" data-mobile-menu title="Mostrar menu" class="display-inline-block margin-right-1">
                        <i class="fas fa-bars"></i>
                    </a>
                    <a href="<?php echo home_url(); ?>" title="Ir para a página principal"
                       class="display-inline-block logo">
                        <img src="<?php the_field( 'portalczn_logo', 'option' ); ?>"
                             alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>"
                             class="no-lazy" data-src width="150">
                    </a>
                </div>

                <div class="cell small-6 medium-4 medium-text-center text-right">
                    <h2 class="cat-name margin-0 white">
                        <strong><i class="fas fa-play"></i> Vídeos</strong>
                    </h2>
                </div>

                <div class="cell auto show-for-medium">
                    <form action="" id="form-search-single">
                        <div class="input-group margin-0 font-header">
                            <label for="search-input-1" class="input-group-label padding-left-0"><i
                                        class="fas fa-search"></i></label>
                            <input type="search" id="search-input-1" class="input-group-field"
                                   placeholder="Pesquisar...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container video-player-list position-relative">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div id="video-player" class="small-12 medium-5 cell" data-magellan-target="video-player">
					<?php
					$posts = get_posts( array(
						'posts_per_page' => 1,
						'category'       => $obj->term_id
					) );
					$embed = get_field( 'portalczn_post_video', $posts[0]->ID );
					?>
                    <header class="video-player-header">
                    <span class="video-tag display-block">
                        <strong><small><?php echo wp_get_post_tags( $posts[0]->ID )[0]->name; ?></small></strong>
                    </span>
                        <h2><a href="<?php echo get_the_permalink( $posts[0]->ID ); ?>"
                               title="<?php echo get_the_title( $posts[0]->ID ); ?>"><?php echo get_the_title( $posts[0]->ID ); ?></a>
                        </h2>
                        <div class="video-excerpt show-for-medium">
                            <p><?php echo get_the_excerpt( $posts[0]->ID ); ?></p>
                        </div>
                        <p>
                            <a href="<?php echo get_the_permalink( $posts[0]->ID ); ?>"
                               class="button alert hollow small float-left video-post" title="Continue lendo">
                                Continuar lendo <i class="fas fa-angle-right"></i>
                            </a>

                            <span class="display-inline-block open-share float-right" title="Compartilhar"
                                  data-postid="<?php echo $posts[0]->ID; ?>">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                        </p>
                    </header>
                </div>
                <div class="small-12 medium-7 cell">
                    <div id="video-iframe" class="responsive-embed">
						<?php echo $embed; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="wait-video position-absolute width-100 height-100">
            <div class="width-100 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" alt="">
            </div>
        </div>
    </div>

    <div class="container videos-content">
        <div class="grid-container">
            <div class="grid-padding-x grid-x">
                <div class="small-12 medium-9 cell">
                    <div class="grid-container full">
                        <div class="grid-x grid-padding-x">
                            <div class="cell small-12 list-videos">

                                <header class="width-100 padding-1 margin-bottom-2">
                                    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <input type="search" name="s" id="search-videos"
                                               class="width-100 search-video margin-0"
                                               placeholder="Buscar vídeos...">
                                    </form>
                                </header>

                                <div class="grid-container align-center single-banner margin-bottom-2" role="banner">
                                    <div class="grid-x grid-padding-x">
                                        <div class="cell auto text-center">
											<?php
											portalczn_show_banner( 'portalczn_banners_topo' );
											?>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid-container full">
                                    <div class="width-100 margin-top-2 margin-bottom-2 text-center wait-search hide">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif"
                                             alt="">
                                    </div>

                                    <div class="grid-x grid-padding-x small-up-1 medium-up-2 large-up-3 videos-list">
										<?php
										$posts = get_posts( array(
											'posts_per_page' => 9,
											'category'       => $obj->term_id
										) );
										foreach ( $posts as $post ):
											?>
                                            <div class="cell video-feature-mini">
                                                <figure>
                                                    <div class="width-100 position-relative" data-magellan
                                                         data-animation-duration="200">
                                                        <a href="#video-player" title="<?php the_title(); ?>"
                                                           class="show-video" data-video-id="<?php echo $post->ID; ?>">
                                                            <span><i class="fas fa-play-circle"></i></span>
                                                            <img src="<?php echo get_video_thumb( $post->ID, 'lastnews-thumb' ); ?>"
                                                                 alt="<?php the_title(); ?>">
                                                            <p><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></p>
                                                        </a>
                                                    </div>
                                                    <figcaption>
                                                        <a href="<?php the_permalink(); ?>"
                                                           title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                                    </figcaption>
                                                </figure>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>

								<?php
								global $wp_query;
								if ( $wp_query->max_num_pages > 1 ) {
									echo '<a href="#" class="load-videos button expanded hollow small text-uppercase alert" title="Carregar mais vídeos"><i class="fas fa-plus"></i> Mais vídeos</a>';
								}
								?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php get_sidebar('videos'); ?>
            </div>
        </div>
    </div>
<?php
get_footer();
?>