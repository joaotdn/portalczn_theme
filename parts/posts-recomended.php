<?php global $post; ?>
<div class="grid-container full post-related">
    <div class="grid-padding-x grid-x">
        <header class="cell small-12 margin-bottom-1">
            <h4><i class="far fa-clock" style="opacity: .5;"></i> Mais notícias</h4>
        </header>

		<?php
		$videos = get_cat_ID( 'Videos' );
		$posts  = get_posts( array(
			'posts_per_page' => 3,
			'cat'            => - $videos,
			'post__not_in'   => array( $post->ID )
		) );
		foreach ( $posts as $recommended ):
			$cat = get_the_category( $recommended->ID );
			?>
            <div class="cell small-12 medium-4 news-group">
                <figure class="width-100 position-relative">
                    <a href="<?php echo get_category_link( $cat[0]->term_id ); ?>"
                       class="news-cat display-block width-100"
                       title="Todas as notícias em <?php echo $cat[0]->name; ?>"><i
                                class="far fa-folder"></i> <?php echo $cat[0]->name; ?></a>
                    <a href="<?php echo get_the_permalink( $recommended->ID ); ?>"
                       class="display-inline-block width-100 news-thumb position-relative"
                       title="<?php echo get_the_title( $recommended->ID ); ?>">
						<?php echo get_the_post_thumbnail( $recommended->ID, 'feature-medium' ); ?>
                    </a>

                    <figcaption class="width-100 margin-top-1">
                        <h3 class="headline-kicker display-inline-block width-100">
                            <span class="display-inline-block"><?php echo wp_get_post_tags( $recommended->ID )[0]->name; ?></span>

                            <span class="display-inline-block open-share">
	                        <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
	                    </span>
                        </h3>
                        <h2><a href="<?php echo get_the_permalink( $recommended->ID ); ?>"
                               title="<?php echo get_the_title( $recommended->ID ); ?>"><?php echo get_the_title( $recommended->ID ); ?></a>
                        </h2>
                    </figcaption>
                </figure>
            </div>
		<?php endforeach; ?>
        <div class="cell small-12">
            <a href="<?php echo get_category_link( get_cat_ID( 'Noticias' ) ); ?>" title="Veja mais Notícias"
               class="button expanded small"><i class="fas fa-folder-plus" aria-hidden="true"></i> Veja mais</a>
        </div>
    </div>
</div>