<div class="tv-diario width-100">
    <header>
		<span class="text-uppercase font-header">
		  <strong><i class="fas fa-satellite-dish"></i> TV Diário do Sertão</strong>
		</span>
    </header>
    <div class="width-100 text-center">
		<?php
		$tv = get_field( 'tv_diario_do_sertao', 'option' );
		if ( $tv ) {
			echo $tv;
		}
		?>
    </div>
</div>