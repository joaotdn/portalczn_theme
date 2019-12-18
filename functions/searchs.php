<?php
add_action( 'wp_ajax_nopriv_search_videos', 'search_videos' );
add_action( 'wp_ajax_search_videos', 'search_videos' );

function search_videos() {
	$args                = json_decode( stripslashes( $_POST['query'] ), true );
	$args['post_status'] = 'publish';
	$args['category']    = get_cat_ID( 'Videos' );
	$args['s']           = trim( $_POST['search'] );

	query_posts( $args );

	if ( have_posts() ) {
		while ( have_posts() ) : the_post();
			global $post;
			?>
            <div class="cell video-feature-mini">
                <figure>
                    <div class="width-100 position-relative" data-magellan data-animation-duration="200">
                        <a href="#video-player" title="<?php the_title(); ?>" class="show-video"
                           data-video-id="<?php echo $post->ID; ?>">
                            <span><i class="fas fa-play-circle"></i></span>
                            <img src="<?php echo get_video_thumb( $post->ID, 'lastnews-thumb' ); ?>"
                                 alt="<?php the_title(); ?>">
                            <p><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></p>
                        </a>
                    </div>
                    <figcaption>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </figcaption>
                </figure>
            </div>
		<?php
		endwhile;
	}

	exit();
}

add_action( 'wp_ajax_nopriv_search_all', 'search_all' );
add_action( 'wp_ajax_search_all', 'search_all' );

function search_all() {
	$args                = json_decode( stripslashes( $_POST['query'] ), true );
	$args['post_status'] = 'publish';
	$args['s']           = trim( $_POST['search'] );
	$_POST['category'] != 'false' ? $args['category'] = trim( $_POST['category'] ) : null;

	query_posts( $args );

	if ( have_posts() ) {
		while ( have_posts() ) : the_post();
			global $post;
			?>
            <article class="cell small-12 search-item margin-bottom-2">
                <div class="media-object">
                    <div class="media-object-section show-for-medium">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                        <?php echo get_the_post_thumbnail( $post->ID, 'feature-medium' ); ?>
                        </a>
                    </div>
                    <div class="media-object-section">
                        <div class="headline-kicker">
                            <span><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>
                        </div>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <ul class="menu">
                            <li><a href="#" title=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title=""><i class="fab fa-whatsapp"></i></i></a></li>
                        </ul>
                    </div>
                </div>
            </article>
            <?php
		endwhile;
		wp_reset_postdata();
	}

	exit();
}