<?php
$fone         = get_field( 'portalczn_fone', 'option' );
$facebook     = get_field( 'portalczn_facebook', 'option' );
$contact_page = get_page_by_title( 'Fale conosco' );
?>
<div id="menu-offcanvas" class="container position-fixed height-100">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 text-right offcanvas-header">
				<button class="close-button" aria-label="Close alert" type="button" data-mobile-menu>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="cell small-12 margin-bottom-1" role="search">
				<div class="input-group">
					<label for="search-input-offcanvas" class="input-group-label padding-left-0"><i
							class="fas fa-search"></i></label>
					<input type="search" id="search-input-offcanvas" class="input-group-field open-search"
					       placeholder="Pesquisar...">
				</div>
			</div>

			<div class="cell small-12" role="navigation">
				<header class="width-100 font-header">
					<span>Seções</span>
				</header>
				<ul class="menu vertical">
					<?php
                        get_template_part('parts/menu', 'items');
                        $videos = get_cat_ID('Videos');
                    ?>
					<li><a href="<?php echo esc_html( get_category_link( $videos ) ); ?>" title="Vídeos" class="tv-link"><i class="fas fa-play"></i> Vídeos</a></li>
				</ul>
			</div>

			<div class="cell small-12 margin-top-1 margin-bottom-1" role="navigation">
				<header class="width-100 font-header">
					<span>Conheça-nos</span>
				</header>
				<ul class="menu vertical">
					<?php
					if ( $fone ) {
						echo '<li><a href="tel:' . $fone . '" target="_blank" class="white" title="Ligue para o Portal CZN"><i class="fas fa-phone-alt"></i> ' . $fone . '</a></li>';
					}

					if ( $contact_page ) {
						echo '<li><a href="' . esc_html( get_page_link( $contact_page->ID ) ) . '" target="_blank" class="white margin-right-1" title="Fale conosco"><i class="far fa-envelope"></i> Fale conosco</a></li>';
					}

					if ( $facebook ) {
						echo '<li><a href="' . esc_html( $facebook ) . '" target="_blank" title="Ir para a fanpage" class="white"><i class="fab fa-facebook"></i> Siga-nos</a></li>';
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<a href="#" class="width-100 height-100 position-fixed offcanvas-layer" data-mobile-menu></a>