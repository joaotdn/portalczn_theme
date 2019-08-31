<?php
function portalczn_show_banner( $name = '' ) {
	$banners = get_field( $name, 'option' );

	if ( ! empty( $banners ) && is_array( $banners ) ) {
		shuffle( $banners );

		! empty( $banners[0][ $name . '_imagem_link' ] )
			? printf( '<a href="%s"><img src="%s" alt="%s"></a>',
			$banners[0][ $name . '_imagem_link' ], $banners[0][ $name . '_imagem' ], 'Publicidade' )
			: printf( '<img src="%s" alt="%s">',
			$banners[0][ $name . '_imagem' ], 'Publicidade' );

	} else {
		echo $banners;
	}
}