<?php
add_action( 'wp_ajax_nopriv_more_videos', 'more_videos' );
add_action( 'wp_ajax_more_videos', 'more_videos' );

function more_videos() {
	$args                = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged']       = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$args['category']    = get_cat_ID( 'Videos' );

	query_posts( $args );

	if ( have_posts() ) {
		while ( have_posts() ) : the_post();
			global $post;
			?>
            <div class="cell video-feature-mini">
                <figure>
                    <div class="width-100" data-magellan>
                        <a href="#video-player" title="<?php the_title(); ?>" data-video-id="<?php echo $post->ID; ?>">
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
