<?php
add_action( 'wp_ajax_nopriv_more_videos', 'more_videos' );
add_action( 'wp_ajax_more_videos', 'more_videos' );

function more_videos() {
	$offset   = $_GET['offset'];
	$category = $_GET['category'];

	$posts = new WP_Query( array(
		'posts_per_page' => 3,
		'category'       => $category,
		'offset'         => $offset + 4
	) );

	if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
		global $post;
		?>
		<div class="cell video-feature-mini">
			<figure>
				<a href="#" title="<?php the_title(); ?>">
					<span><i class="fas fa-play-circle"></i></span>
					<img src="<?php echo get_video_thumb( $post->ID, 'lastnews-thumb' ); ?>" alt="<?php the_title(); ?>">
					<p><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></p>
				</a>
				<figcaption>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</figcaption>
			</figure>
		</div>
	<?php
	endwhile;
		wp_reset_postdata(); endif;
	exit();
}
