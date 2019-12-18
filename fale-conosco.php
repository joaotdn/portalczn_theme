<?php
/* Template Name: Contato */
get_header( 'home' );
?>

    <div class="grid-container" id="contact-page">
        <header class="width-100 margin-bottom-2 margin-top-2">
            <h1>fale conosco</h1>
        </header>

        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-8">
                <h4>Preencha o formulário abaixo e aguarde nosso retorno.</h4>
                <?php echo do_shortcode( '[contact-form-7 id="21671" title="Formulário de contato 1"]' ); ?>
            </div>

            <div class="cell small-12 medium-3 medium-offset-1 list-social">
	            <?php
	            $social = get_field( 'portalczn_redes_sociais', 'option' );

	            foreach ($social as $key => $value) {
		            if ($key == 'portalczn_fone' && !empty($value)) {
			            printf('<p><strong><i class="fab fa-whatsapp"></i> Whatsapp</strong></p><a href="tel:%s" target="_blank" title="Whatsapp">%s</a>', $value, $value);
		            }

		            if ($key == 'portalczn_facebook' && !empty($value)) {
			            printf('<p><strong><i class="fab fa-facebook"></i> Facebook</strong></p><a href="%s" target="_blank" title="Facebook">%s</a>', $value, $value);
		            }

		            if ($key == 'portalczn_twitter' && !empty($value)) {
			            printf('<p><strong><i class="fab fa-twitter"></i> Twitter</strong></p><a href="%s" target="_blank" title="Twitter">%s</a>', $value, $value);
		            }

		            if ($key == 'portalczn_instagram' && !empty($value)) {
			            printf('<p><strong><i class="fab fa-instagram"></i> Instagram</strong></p><a href="%s" target="_blank" title="Instagram">%s</a>', $value, $value);
		            }

		            if ($key == 'portalczn_youtube' && !empty($value)) {
			            printf('<p><strong><i class="fab fa-youtube"></i> Youtube</strong></p><a href="%s" target="_blank" title="Youtube">%s</a>', $value, $value);
		            }
	            }
	            ?>
            </div>
        </div>
    </div>

<?php
get_footer();