<?php
get_header( 'single' );
$obj = get_queried_object();
?>
<div class="container bgwhite header-single">
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
                <h2 class="cat-name margin-0">
                    <strong><i class="far fa-folder"></i> <?php echo $obj->name; ?></strong>
                </h2>
            </div>

            <div class="cell auto show-for-medium">
                <?php get_template_part('parts/form', 'search'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top-1 margin-bottom-1">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center single-banner" role="banner">
            <div class="cell auto text-center">
				<?php
				portalczn_show_banner( 'portalczn_banners_topo' );
				?>
            </div>
        </div>
    </div>
</div>

<div class="container page-category">
    <div class="grid-container">
        <div class="grid-padding-x grid-x">
            <div class="cell small-12 show-for-medium margin-bottom-1">
                <div class="list-cat-tags width-100">
                    <ul class="menu">
                        <li><strong><i class="fas fa-tags"></i> <?php echo $obj->name; ?>:</strong></li>
						<?php
						$posts = get_posts( array(
							'posts_per_page' => 6,
							'category'       => $obj->term_id
						) );
						foreach ( $posts as $post ) {
							if ( wp_get_post_tags( $post->ID )[0] ) {
								echo '<li><a href="' . get_tag_link( wp_get_post_tags( $post->ID )[0]->term_id ) . '" title="' . wp_get_post_tags( $post->ID )[0]->name . '">' . wp_get_post_tags( $post->ID )[0]->name . '</a></li>';
							}
						}
						?>
                    </ul>
                </div>
            </div>

            <div class="cell small-12">
                <article class="width-100 headline-1" role="article">
                    <h3 class="headline-kicker display-inline-block width-100">
                        <span class="display-inline-block"><?php echo wp_get_post_tags( $posts[0]->ID )[0]->name; ?></span>
                        <span class="display-inline-block open-share">
                            <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                        </span>
                    </h3>
                    <h1 class="headline-url"><a href="<?php echo get_the_permalink( $posts[0]->ID ); ?>"
                                                title="<?php echo get_the_title( $posts[0]->ID ); ?>"><?php echo get_the_title( $posts[0]->ID ); ?></a>
                    </h1>
                    <p class="headline-excerpt"><?php echo get_the_excerpt( $posts[0]->ID ); ?></p>
                </article>
            </div>

			<?php $i = 1;
			while ( $i <= 3 ): ?>
                <div class="cell small-12 medium-4 big-thumb">
                    <div class="width-100 height-100 position-relative"
                         data-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $posts[ $i ]->ID ), 'feature-slider' )[0]; ?>">
                        <a href="<?php echo get_the_permalink( $posts[ $i ]->ID ); ?>"
                           class="display-block width-100 height-100 position-absolute">
                        <span class="display-block big-thumb-link position-absolute width-100">
                            <span class="tag-thumb"><?php echo wp_get_post_tags( $posts[ $i ]->ID )[0]->name; ?></span><br>
                            <span class="title-thumb"><?php echo get_the_title( $posts[ $i ]->ID ); ?></span>
                        </span>
                        </a>
                    </div>
                </div>
				<?php $i ++; endwhile; ?>

            <div class="cell small-12 medium-8 last-news-cat margin-top-1">
                <header>
                    <h4><i class="far fa-clock"></i> Últimas</h4>
                </header>

                <nav class="margin-top-2">
					<?php
					$posts = get_posts( array(
						'posts_per_page' => 5,
						'category'       => $obj->term_id,
						'offset'         => 4
					) );
					foreach ( $posts as $post ):
						?>
                        <div class="media-object news-cat-item news-group position-relative">
                            <span class="display-inline-block open-share position-absolute" style="top: 0; right: 0;">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                            <div class="media-object-section">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php echo get_the_post_thumbnail( $post->ID, 'lastnews-thumb' ); ?>
                                </a>
                            </div>
                            <div class="media-object-section">
                                <h3 class="headline-kicker display-inline-block width-100">
                                    <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>
                                </h3>
                                <h2><a href="<?php the_permalink(); ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        </div>
					<?php endforeach; ?>
                </nav>
                <a href="#" data-cat-id="<?php echo $obj->term_id; ?>" class="button expanded hollow load-posts"><i
                            class="fas fa-plus"></i> Notícias</a>
            </div>

            <div class="cell small-12 medium-4 category-sidebar margin-top-1">
                <div class="czn-widget width-100 margin-bottom-2">
                    <header>
                        <h4><i class="fas fa-fire-alt primary"></i> Mais lidas em <strong><?php echo $obj->name; ?></strong>
                        </h4>
                    </header>
                    <nav class="post-features margin-top-1">
						<?php $posts = new WP_Query( array(
							'posts_per_page' => 1,
							'meta_key'       => 'popular_posts',
							'orderby'        => 'meta_value_num',
							'order'          => 'DESC',
							'category'       => $obj->ID
						) );
						while ( $posts->have_posts() ) : $posts->the_post();
							global $post;
							?>
                            <div class="media-object">
                                <div class="media-object-section">
                                    <div class="thumbnail">
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php the_title(); ?>">
											<?php echo get_the_post_thumbnail( $post->ID, 'feature-xsmall' ); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="media-object-section">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php the_title() ?>"><?php the_title() ?></a>
                                    </h2>
                                </div>
                            </div>
						<?php endwhile; ?>
                    </nav>
                </div>

                <div class="czn-widget width-100 margin-bottom-2">
                    <div class="white-container width-100 text-center margin-bottom-1" role="banner">
						<?php
						portalczn_show_banner( 'portalczn_banners_post' );
						?>
                    </div>
                </div>

                <div class="czn-widget width-100 margin-bottom-2">
					<?php get_template_part( 'parts/component', 'radios' ); ?>
                </div>

                <div class="czn-widget width-100 margin-bottom-2">
					<?php get_template_part( 'parts/component', 'tvdiario' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
