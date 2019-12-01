<?php
$fone         = get_field( 'portalczn_fone', 'option' );
$facebook     = get_field( 'portalczn_facebook', 'option' );
$contact_page = get_page_by_title( 'Fale conosco' );
$videos       = get_cat_ID( 'Videos' );
?>
<section id="topbar" class="container <?php if ( in_category( $videos ) ) { echo 'topbar-videos'; } ?>">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell auto">
                <span class="weather-mini margin-right-1 hide-for-large"> Cajazeiras/PB</span>
                <span class="first-uppercase hide-for-small-only">
                    <span class="display-inline-block">
                        <i class="far fa-calendar-alt"></i>
                        <?php echo date_i18n( 'l \, j \d\e F \d\e Y' ); ?>
                    </span>
                </span>
            </div>

            <div class="cell auto text-right show-for-medium">
                <span class="display-inline-block margin-right-1">
                    <?php
                    if ( $fone ) {
	                    echo '<a href="tel:' . $fone . '" target="_blank" class="white" title="Ligue para o Portal CZN"><i class="fas fa-phone-alt"></i> ' . $fone . '</a>';
                    }
                    ?>
                </span>
                <span>
                    <?php
                    if ( $contact_page ) {
	                    echo '<a href="' . esc_html( get_page_link( $contact_page->ID ) ) . '" target="_blank" class="white margin-right-1" title="Fale conosco"><i class="far fa-envelope"></i> Fale conosco</a>';
                    }
                    ?>
                </span>
                <span class="display-inline-block">
                    <?php
                    if ( $facebook ) {
	                    echo '<a href="' . esc_html( $facebook ) . '" target="_blank" title="Ir para a fanpage" class="white"><i class="fab fa-facebook"></i> Siga-nos</a>';
                    }
                    ?>
                </span>
            </div>
        </div>
    </div>
</section>