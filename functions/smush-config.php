<?php

function exclude_attachment_from_smushing( $smush, $id ) {

	// attachment ids to skip smushing
	$attachment_ids = array( 1 ); // example: array( 2, 4, 5 );

	$matched = in_array( $id, $attachment_ids );

	if ( ! $matched ) return $smush;
	update_post_meta( $id, 'wp-smpro-smush-data', 'skipped' );
	return false;
}
add_filter( 'wp_smush_image', 'exclude_attachment_from_smushing', 10, 2 );