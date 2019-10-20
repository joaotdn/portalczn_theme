<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/logofooter.png" rel="apple-touch-icon"/>
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <style>
        .current-menu-item a,
        .current_page_item a {
            color: #d41f1c !important;
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
                         alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>"
                         class="no-lazy">
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

			<?php get_template_part( 'parts/component', 'weather' ); ?>
        </div>
    </div>
</header>
<?php
get_template_part( 'parts/nav', 'header' );

get_template_part( 'parts/top', 'news' );
?>