<?php
add_action( 'wp_ajax_nopriv_search_videos', 'search_videos' );
add_action( 'wp_ajax_search_videos', 'search_videos' );

function search_videos() {
	$args                = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged']       = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
	$args['category']    = get_cat_ID( 'Videos' );
	$args['s']           = stripslashes( $_POST['search'] );

	query_posts( $args );

	if ( have_posts() ) {
		while ( have_posts() ) : the_post();
			global $post;
			echo the_title();
			?>

		<?php
		endwhile;
	}

	exit();
}