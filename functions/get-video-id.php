<?php
/**
 * @param $post_id int ID do post com vídeo
 *
 * @return string ID do vídeo no Youtube
 */
function get_video_id( $post_id ) {
	preg_match( '/src="(.+?)"/', get_field( 'portalczn_post_video', $post_id ), $matches );
	$thumb = explode( '/', $matches[1] );
	$thumb = explode( '?', $thumb[ count( $thumb ) - 1 ] );

	return $thumb ? $thumb[0] : null;
}