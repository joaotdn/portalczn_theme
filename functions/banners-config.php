<?php
function portalczn_show_banner( $name = '' ) {
	$banners = get_field( $name, 'option' );
	$is_html = get_field( $name . '_tipo', 'option' );
	$html    = get_field( $name . '_html', 'option' );

	if ( ! $is_html && is_array( $banners ) && ! empty( $banners ) ) {
		shuffle( $banners );

		! empty( $banners[0][ $name . '_imagem_link' ] )
			? printf( '<a href="%s"><img src="%s" alt="%s" class="no-lazy"></a>',
			$banners[0][ $name . '_imagem_link' ], $banners[0][ $name . '_imagem' ], 'Publicidade' )
			: printf( '<img src="%s" alt="%s">',
			$banners[0][ $name . '_imagem' ], 'Publicidade' );

	} else {
		echo $html;
	}
}