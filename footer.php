<?php
$contact_page = get_page_link( get_page_by_title( 'Fale Conosco' )->ID );
get_template_part( 'parts/component', 'radio-player' );
?>
<footer id="footer" class="container margin-top-2">
    <div class="grid-container padding-top-2 padding-bottom-2">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-4 text-center medium-text-left">
                <a href="<?php echo home_url(); ?>" title="Página principal" class="logo-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logofooter.png"
                         alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>"
                         class="no-lazy" data-src width="130">
                </a>
                <div class="width-100 margin-top-1 footer-contact">
                    <p><strong>&copy;<?php echo date( "Y" ); ?> - Portal CZN
                            - <?php echo get_bloginfo( 'description' ); ?></strong></p>
                    <p><i class="fas fa-at"></i> <?php echo get_field( 'portalczn_email', 'option' ); ?></p>
                    <p><i class="fas fa-phone-alt"></i> <?php echo get_field( 'portalczn_fone', 'option' ); ?></p>
                    <p class="margin-0"><i class="far fa-envelope"></i>
                        <a href="<?php echo $contact_page; ?>"
                           title="Fale conosco">Fale conosco</a>
                    </p>
                </div>
            </div>
            <div class="cell small-12 medium-8">
                <ul class="menu align-right show-for-medium">
					<?php get_template_part( 'parts/menu', 'items' ); ?>
                </ul>

                <div class="width-100 margin-top-1 keep-czn text-center medium-text-right">
					<?php
					$social = get_field( 'portalczn_redes_sociais', 'option' );
					foreach ($social as $key => $value) {
					    if ($key == 'portalczn_facebook' && !empty($value)) {
					        printf('<span><a href="%s" target="_blank" title="Siga-nos no Facebook"><i class="fab fa-facebook"></i></a></span>', $value);
                        }

						if ($key == 'portalczn_twitter' && !empty($value)) {
							printf('<span><a href="%s" target="_blank" title="Siga-nos no Twitter"><i class="fab fa-twitter"></i></a></span>', $value);
						}

						if ($key == 'portalczn_instagram' && !empty($value)) {
							printf('<span><a href="%s" target="_blank" title="Siga-nos no Instagram"><i class="fab fa-instagram"></i></a></span>', $value);
						}

						if ($key == 'portalczn_youtube' && !empty($value)) {
							printf('<span><a href="%s" target="_blank" title="Siga-nos no Youtube"><i class="fab fa-youtube"></i></a></span>', $value);
						}
                    }
					?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
get_template_part( 'parts/modal', 'videos' );

get_template_part( 'parts/modal', 'schedule' );

wp_footer();
?>

</body>
</html>
