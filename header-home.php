<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal CZN - Capa</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/logofooter.png" rel="apple-touch-icon"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <style>
        .current-menu-item a,
        .current_page_item a {
            color: #d41f1c !important;
        }

        .first-uppercase:first-letter {
            text-transform: uppercase;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<?php
get_template_part( 'parts/nav', 'scroll' );
get_template_part( 'parts/nav', 'offcanvas' );
get_template_part( 'parts/nav', 'topbar' );
?>
<header id="header" class="container padding-top-1 padding-bottom-1" role="banner">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <figure class="cell auto margin-0 site-brand margin-bottom-small-1" role="figure">
                <a href="#" title="Página principal" class="display-inline-block">
                    <img src="<?php the_field( 'portalczn_logo', 'option' ); ?>"
                         alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>">
                </a>
            </figure>

            <div class="cell shrink margin-bottom-small-1 text-right hide-for-large">
                <span class="margin-right-1 display-inline-block">
                    <a href="#" role="button" data-mobile-menu><i class="fas fa-bars"></i></a>
                </span>
            </div>

            <div class="cell small-12 medium-8 auto margin-0 text-center large-text-right medium-text-right"
                 role="banner">
                <div class="display-inline-block">
					<?php
					portalczn_show_banner( 'portalczn_banners_topo' );
					?>
                </div>
            </div>

            <div class="cell shrink show-for-large weather-component hide">
                <div class="width-100 align-middle">
                    <div class="grid-container full">
                        <div class="grid-x text-center">
                            <div class="cell small-12 padding-top-1">
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <span class="display-inline-block width-100 text-uppercase icon">
                                            <i class="fas fa-sun"></i>
                                        </span>
                                    </div>
                                    <div class="media-object-section main-section">
                                        <span class="display-block font-header text-uppercase"><strong>Cajazeiras</strong></span>
                                        <span class="min"> <i class="fas fa-temperature-low"></i></span>
                                        <span class="max"> <i class="fas fa-temperature-high"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php get_template_part( 'parts/nav', 'header' ); ?>
<section id="header-features" class="container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell auto ellipsis">
                <span class="text-uppercase font-bold display-inline-block margin-right-1"><i class="far fa-clock"></i> Destaques:</span>
                <div class="cycle-slideshow display-inline-block"
                     data-cycle-fx="fade"
                     data-cycle-timeout="5000"
                     data-cycle-slides="> span"
                     data-cycle-prev=".prev"
                     data-cycle-next=".next"
                >
                    <span><a href="#" title="" rel="contents">Nova versão de relatório deixa estados e municípios fora da Previdência</a></span>
                    <span><a href="#" title="" rel="contents">Segundo o relator, deputado Samuel Moreira, discussão sobre inclusão de estados e municípios pode ficar para plenário </a></span>
                    <span><a href="#" title="" rel="contents">Copa América: Seleção brasileira vence Argentina e chega à final após 12 anos</a></span>
                    <span><a href="#" title="" rel="contents">Ex-juiz nega perseguição a jornalista após vazamento de mensagens da Lava Jato</a></span>
                </div>
            </div>

            <div class="cell small-2 medium-1 text-right">
                <span><a href="#" class="display-inline-block nav prev"><i class="fas fa-chevron-left"></i></a></span>
                <span><a href="#" class="display-inline-block nav next"><i class="fas fa-chevron-right"></i></a></span>
            </div>
        </div>
    </div>
</section>