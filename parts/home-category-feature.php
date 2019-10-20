<?php
$obj      = get_field( 'pczn_cat_feature', 'option' );
$obj_cat  = $obj ? $obj : get_category_by_slug( 'noticias' );
$cat_link = get_category_link( get_cat_ID( $obj_cat->term_id ) );
?>
<div class="container margin-top-2 margin-bottom-2" role="main">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-8 section-header primary">
                <div class="grid-x margin-bottom-1">
                    <div class="cell shrink">
                        <h2 class="display-inline-block">
                            <a href="<?php echo esc_html( $cat_link ); ?>" title="<?php echo $obj_cat->name; ?>"
                               rel="contents">
								<?php echo $obj_cat->name; ?>
                            </a>
                        </h2>
                    </div>
                    <div class="cell auto text-right show-for-medium margin-left-1">
                        <ul class="menu header-menu">
							<?php
							$posts = get_posts( array(
								'posts_per_page' => 6,
								'category'       => $obj_cat->term_id
							) );

							foreach ( $posts as $post ) {
								echo '<li><a href="' . get_tag_link( wp_get_post_tags( $post->ID )[0]->term_id ) . '" title="' . wp_get_post_tags( $post->ID )[0]->name . '">' . wp_get_post_tags( $post->ID )[0]->name . '</a></li>';
							}
							?>
                        </ul>
                    </div>
                </div>

                <div class="grid-container full">
                    <div class="grid-x grid-padding-x">
                        <div class="cell small-12 medium-6 large-8 headlines-group">
							<?php
							$posts = get_posts( array(
								'posts_per_page' => 1,
								'category'       => $obj_cat->term_id
							) );
							foreach ( $posts as $post ):
								?>
                                <figure class="width-100 news-containers">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php echo get_the_post_thumbnail( $post->ID, 'feature-category-big' ); ?>
                                    </a>
                                    <figcaption class="width-100 margin-top-1 headline-medium-v">
                                        <h3 class="headline-kicker display-inline-block width-100">
                                        <span class="display-inline-block">
                                            <?php echo wp_get_post_tags( $post->ID )[0]->name; ?>
                                        </span>

                                            <span class="display-inline-block open-share">
                                            <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                                        </span>
                                        </h3>
                                        <h1 class="headline-url medium">
                                            <a href="<?php the_permalink(); ?>"
                                               title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h1>
                                        <p class="headline-excerpt margin-0"><?php the_excerpt(); ?></p>
                                    </figcaption>
                                </figure>
							<?php endforeach; ?>
                        </div>

                        <div class="cell small-12 medium-6 large-4 headlines-group hide-img">
							<?php
							$i     = 0;
							$posts = get_posts( array(
								'posts_per_page' => 2,
								'offset'         => 1,
								'category'       => $obj_cat->term_id
							) );

							foreach ( $posts as $post ):
								?>
                                <figure class="with-100 headline-small">
									<?php
                                    // 73d8886b
									if ( $i == 0 ) {
										echo '<a href="' . get_the_permalink( $post->ID ) . '" title="' . get_the_title( $post->ID ) . '">';
										echo get_the_post_thumbnail( $post->ID, 'feature-medium' );
										echo '</a>';
									}
									?>
                                    <figcaption class="width-100 margin-top-1">
                                        <h3 class="headline-kicker display-inline-block width-100">
                                            <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>

                                            <span class="display-inline-block open-share">
                                            <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                                        </span>
                                        </h3>
                                        <h1 class="headline-url"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                                    </figcaption>
                                </figure>
							<?php $i++; endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="cell small-12 medium-4">
               <?php get_template_part('parts/home', 'quotations'); ?>

                <div class="white-container width-100 text-center margin-top-1" role="banner">
                    <header class="width-100 text-center text-uppercase font-header">
                        <span>Publicidade</span>
                    </header>
                    <img src="assets/img/temp/pub2.gif" alt="">
                </div>
            </aside>
        </div>
    </div>
</div>