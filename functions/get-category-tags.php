<?php

function pczn_get_category_tags() {
	$terms = get_terms(
		get_category( get_query_var( 'cat' ) )
		, array(
			'fields'       => 'ids'
		,
			'hierarchical' => true
		,
			'hide_empty'   => false
		,
			'pad_counts'   => true
		)
	);

	$term_links = array();

	foreach ( $terms as $term ) {
		$link = get_term_link( $term, 'category' );

		! is_wp_error( $link ) AND $term_links[] = sprintf(
			'<a href="%s" rel="tag">%s</a>'
			, esc_url( $link )
			, $term->name
		);
	}

	! is_empty( $terms ) AND printf(
		'<ul>%s</ul>'
		, implode( "", $term_links )
	);
}