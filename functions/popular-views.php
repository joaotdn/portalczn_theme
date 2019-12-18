<?php

function joki_count_views($postID) {
	$post_meta = 'joki_post_views_count';
	$count = get_post_meta($postID, $post_meta, true);
	if($count == '') {
		$count = 0;
		delete_post_meta($postID, $post_meta);
		add_post_meta($postID, $post_meta, '0');
	}
	else {
		$count++;
		update_post_meta($postID, $post_meta, $count);
	}
}

function joki_track_views ($post_id) {
	if ( !is_single() ) { return; }
	if ( empty ( $postId) ) {
		global $post;
		$postId = $post->ID;
	}
	joki_count_views($postId);
}

add_action( 'wp_head', 'joki_track_views');

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10);