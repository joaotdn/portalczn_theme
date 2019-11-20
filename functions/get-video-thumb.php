<?php
/**
 * @param $id ID da postagem do vídeo
 *
 * @param string $size Tamanho do thumb
 *
 * @return string URL da imagem do vídeo
 */
function get_video_thumb( $id, $size = 'full' ) {
	preg_match( '/src="(.+?)"/', get_field( 'portalczn_post_video', $id ), $matches );
	$thumb = explode( '/', $matches[1] );
	$thumb = explode( '?', $thumb[ count( $thumb ) - 1 ] );
	$featured = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), $size );
	$thumb = $featured ? $featured[0] : 'http://i3.ytimg.com/vi/' . $thumb[0] . '/maxresdefault.jpg';

	return $thumb;
}