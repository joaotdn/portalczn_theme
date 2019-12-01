<?php
get_header( 'single' );
global $post;
$obj      = get_queried_object();
$category = get_the_category();
$categories = get_field( 'portalczn_ultimas_noticias', 'option' );
$tags = get_the_tags( $post->ID );
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
                        <strong><a href="<?php echo get_category_link( $category[0]->term_id ); ?>"
                                   title="<?php echo $category[0]->cat_name; ?>"><i
                                        class="far fa-folder"></i> <?php echo $category[0]->cat_name; ?></a></strong>
                    </h2>
                </div>

                <div class="cell auto show-for-medium">
                    <form action="" id="form-search-single">
                        <div class="input-group margin-0 font-header">
                            <label for="search-input-1" class="input-group-label padding-left-0"><i
                                        class="fas fa-search"></i></label>
                            <input type="search" id="search-input-1" class="input-group-field"
                                   placeholder="Pesquisar...">
                        </div>
                    </form>
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
    </div>

    <div class="container single-page">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 margin-bottom-1 hide-for-medium">
                    <ul class="menu align-center">
						<?php get_share_items( $post->ID ); ?>
                    </ul>
                </div>

                <aside class="cell medium-1 share-post padding-right-0" data-sticky-container>
                    <div class="sticky" data-sticky-on="medium" data-margin-top="3" data-sticky data-anchor="content">
                        <ul class="menu vertical">
							<?php get_share_items( $post->ID ); ?>
                        </ul>
                    </div>
                </aside>

                <div class="cell small-12 medium-11" id="content">
                    <div class="grid-container padding-left-0">
                        <div class="grid-padding-x grid-x">
                            <header class="cell small-12 post-header margin-bottom-1 margin-top-1">
                                <h3 class="margin-bottom-0 headline-kicker display-inline-block width-100">
                                    <span class="display-inline-block"><?php echo $tags[0]->name; ?></span>
                                </h3>
                                <h2 id="post-title"><?php the_title(); ?></h2>
                                <p class="post-excerpt"><?php the_excerpt(); ?></p>
                            </header>
                            <article class="cell small-12" role="article">
                                <div class="grid-container full">
                                    <div class="grid-x grid-padding-x">
                                        <div class="cell small-12 large-8 post-content text-wrap">
											<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
												<?php get_template_part( 'parts/loop', 'single' ); ?>
											<?php endwhile; else : ?>
												<?php get_template_part( 'parts/content', 'missing' ); ?>
											<?php endif; ?>

                                            <div id="comments" class="width-100 margin-bottom-2">
                                                <div class="fb-comments"
                                                     data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                                                     data-width="100%" data-numposts="5"></div>
                                            </div>

                                            <?php get_template_part('parts/posts', 'recomended'); ?>

                                        </div>
                                        <?php get_sidebar('single'); ?>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>