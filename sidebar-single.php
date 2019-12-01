<?php
global $post;
$category = get_the_category( $post->ID );
?>
<aside class="post-sidebar cell small-12 large-4">
    <div class="grid-x grid-padding-x">
        <div class="czn-widget related-features cell small-12 medium-6 large-12">
            <header>
                <h4><i class="far fa-star"></i> Destaques em <a href="<?php echo get_category_link( $category[0]->term_id ); ?>" title=""><strong><?php echo $category[0]->name; ?></strong></a></h4>
            </header>
            <nav class="post-features margin-top-1">
				<?php
				$posts = get_posts( array(
					'posts_per_page' => 3,
					'meta_key'       => 'popular_posts',
					'orderby'        => 'meta_value_num',
					'order'          => 'DESC',
					'category_name'       => $category[0]->slug
				) );
				foreach ( $posts as $popular ):
					?>
                    <div class="media-object">
                        <div class="media-object-section">
                            <div class="thumbnail">
                                <a href="<?php echo get_the_permalink( $popular->ID ); ?>"
                                   title="<?php echo get_the_title( $popular->ID ); ?>">
	                                <?php echo get_the_post_thumbnail( $popular->ID, 'feature-xsmall' ); ?>
                                </a>
                            </div>
                        </div>
                        <div class="media-object-section">
                            <h2>
                                <a href="<?php echo get_the_permalink( $popular->ID ); ?>"
                                   title="<?php echo get_the_title( $popular->ID ) ?>"><?php echo get_the_title( $popular->ID ) ?></a>
                            </h2>
                        </div>
                    </div>
				<?php endforeach; ?>
            </nav>
        </div>

        <div class="czn-widget related-features cell small-12 medium-6 large-12">
            <div class="white-container width-100 text-center margin-bottom-1"
                 role="banner">
	            <?php
	            portalczn_show_banner( 'portalczn_banners_post' );
	            ?>
            </div>
        </div>

        <div class="czn-widget related-features cell small-12">
			<?php get_template_part( 'parts/component', 'radios' ); ?>
        </div>

        <div class="czn-widget tvdiario cell small-12 margin-top-2">
		    <?php get_template_part( 'parts/component', 'tvdiario' ); ?>
        </div>
    </div>
</aside>