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
						<a href="#video-player" title="<?php the_title(); ?>" class="show-video" data-video-id="<?php echo $post->ID; ?>">
							<span><i class="fas fa-play-circle"></i></span>
							<img src="<?php echo get_video_thumb( $post->ID, 'lastnews-thumb' ); ?>" alt="<?php the_title(); ?>">
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