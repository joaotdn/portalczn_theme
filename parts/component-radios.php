<div id="radios-widget" class="width-100 padding-2">
    <header class="text-center">
        <h4><i class="fas fa-broadcast-tower display-inline-block margin-right-1"></i>Rádios OnLine</h4>
    </header>
    <div class="grid-container margin-top-1">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell auto">
				<?php
				$radios = get_field( 'portalczn_radios', 'option' );
				if ( $radios && ! empty( $radios ) ):
					?>
                    <select name="radios" id="radios-select" class="font-header">
                        <option>Selecionar rádio</option>
						<?php
						foreach ( $radios as $radio ) {
							printf( '<option value="%s">%s</option>', $radio['portalczn_radio_link'], $radio['portalczn_radio_nome'] );
						}
						?>
                    </select>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>