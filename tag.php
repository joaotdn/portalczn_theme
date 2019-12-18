<?php
    get_header('single');
?>
<div class="container bgwhite header-single">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell small-6 medium-4">
                <a href="#" data-mobile-menu title="Mostrar menu" class="display-inline-block margin-right-1">
                    <i class="fas fa-bars"></i>
                </a>

                <a href="<?php echo home_url(); ?>" title="Ir para a página principal"
                   class="display-inline-block logo">
                    <img src="<?php the_field( 'portalczn_logo', 'option' ); ?>"
                         alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>"
                         class="no-lazy" data-src width="150">
                </a>
            </div>
            <div class="cell small-6 medium-4 medium-text-center text-right">
                <h2 class="cat-name margin-0">
                    <strong><i class="fas fa-tags"></i> TAGS</strong>
                </h2>
            </div>
            <div class="cell auto show-for-medium">
	            <?php get_template_part('parts/form', 'search'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top-1 margin-bottom-1">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center single-banner" role="banner">
            <div class="cell auto text-center">
	            <?php
	            portalczn_show_banner( 'portalczn_banners_topo' );
	            ?>
            </div>
        </div>
    </div>
</div><div class="grid-container" id="tags-page">
    <div class="grid-x grid-padding-x">
        <header class="cell small-12 tags-results margin-top-2 margin-bottom-2">
            <h4 class="margin-0"><i class="fas fa-search"></i> Foram encontrados <?php echo $wp_query->found_posts; ?> resultados para <span>"<?php single_tag_title(); ?>"</span></h4>
        </header>

        <div class="cell small-12">
            <div class="grid-container full">
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12 medium-8 tag-list">
                        <?php
                        while ( have_posts() ) : the_post();
                        ?>
                            <figure class="tag-item width-100 media-object">
                                <div class="media-object-section">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                                    <?php echo get_the_post_thumbnail( $post->ID, 'feature-medium' ); ?>
                                    </a>
                                </div>
                                <div class="media-object-section">
                                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                    <ul class="menu">
                                        <li><a href="#" title=""><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title=""><i class="fab fa-whatsapp"></i></i></a></li>
                                    </ul>
                                </div>
                            </figure>
                        <?php
                        endwhile;
                        ?>

                        <footer id="nav-below" class="width-100 margin-top-2 margin-bottom-2 text-center hide">
	                        <?php
	                        global $wp_query;
	                        echo paginate_links();
	                        ?>
                        </footer>
                    </div>

                    <aside class="cell small-12 medium-4">
                        <div class="white-container width-100 text-center margin-bottom-1"
                             role="banner">
		                    <?php
		                    portalczn_show_banner( 'portalczn_banners_post' );
		                    ?>
                        </div>

                        <div class="czn-widget tvdiario cell small-12 margin-top-2">
		                    <?php get_template_part( 'parts/component', 'tvdiario' ); ?>
                        </div>

                        <div class="czn-widget related-features cell small-12">
		                    <?php get_template_part( 'parts/component', 'radios' ); ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();