<?php

function portalczn_show_banner( $name = '' ) {
	$banners = get_field( $name, 'option' );

	if ( ! empty( $banners ) && is_array( $banners ) ) {
		shuffle( $banners );
		printf( '<img src="%s" alt="%s">',
			$banners[0]['portalczn_banners_topo_imagem'], 'Publicidade' );
	} else {
		echo $banners;
	}
}