<?php
add_action( 'wp_ajax_nopriv_show_video', 'show_video' );
add_action( 'wp_ajax_show_video', 'show_video' );

function show_video() {
	$post_id = $_POST['post_id'];
	preg_match( '/src="(.+?)"/', get_field( 'portalczn_post_video', $post_id ), $matches );

	$arr = array(
		'videoUrl' => stripslashes( $matches[1] ),
		'title'    => html_entity_decode( get_the_title( $post_id ) ),
		'link'     => stripslashes( get_the_permalink( $post_id ) ),
		'excerpt'  => html_entity_decode( get_the_excerpt( $post_id ) ),
		'post_id'  => $post_id,
		'tag'      => html_entity_decode( wp_get_post_tags( $post_id )[0]->name )
	);

	echo json_encode( $arr );
	exit();
}