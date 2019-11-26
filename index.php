<?php
get_header( 'home' );

get_template_part( 'parts/home', 'features' );

get_template_part( 'parts/home-category', 'feature' );

get_template_part( 'parts/home', 'videos' );

get_template_part( 'parts/home', 'news' );

?>

    <section class="container margin-bottom-1">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 medium-8">
					<?php get_template_part( 'parts/home', 'galleries' ); ?>
                </div>
                <div class="small-12 medium-4 cell">
					<?php get_template_part( 'parts/component', 'schedule' ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container" role="main">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 white-container text-center margin-bottom-2" role="banner">
                    <div class="width-100 bg-white padding-1 radius">
                        <header class="width-100 text-uppercase text-left font-header">
                            <span>Publicidade</span>
                        </header>
						<?php portalczn_show_banner( 'portalczn_banners_rodape' ); ?>
                    </div>
                </div>

                <div class="cell small-12 medium-4 popular-article margin-bottom-1">
					<?php get_template_part( 'parts/popular', 'post' ); ?>
                </div>

                <div class="cell small-12 medium-4 margin-bottom-1">
					<?php get_template_part( 'parts/component', 'loteria' ); ?>
                </div>

                <div class="cell small-12 medium-4 margin-bottom-1">
	                <?php get_template_part( 'parts/component', 'tvdiario' ); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();