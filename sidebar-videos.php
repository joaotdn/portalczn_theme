<aside class="small-12 medium-3 cell margin-top-2">
	<?php
	$youtube = get_field( 'portalczn_youtube', 'option' );
	if ( $youtube )
		echo '<a href="' . $youtube . '" target="_blank" class="display-block width-100 text-center margin-bottom-2" style="color: #d41f1c;"><h1 class="margin-0"><i class="fab fa-youtube"></i></h1> <strong>Visite nosso canal no<br>Youtube</strong></a>'
	?>

    <figure class="margin-bottom-2 text-center">
		<?php
		portalczn_show_banner( 'portalczn_banners_post' );
		?>
    </figure>

    <div class="video-feature">
        <header class="video-aside-header">
            <span><i class="fas fa-plus"></i> visto do dia</span>
        </header>
		<?php $popular = new WP_Query( array(
			'posts_per_page' => 1,
			'meta_key'       => 'popular_posts',
			'orderby'        => 'meta_value_num',
			'order'          => 'DESC',
			'category'       => get_cat_ID( 'Videos' )
		) );
		while ( $popular->have_posts() ) : $popular->the_post();
			global $post; ?>
            <figure class="position-relative width-100">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                   data-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'feature-slider' )[0]; ?>"></a>
                <figcaption>
                            <span class="v-feature-title">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="media-object">
                                    <span class="media-object-section">
                                        <i class="fas fa-play"></i>
                                    </span>
                                    <span class="media-object-section">
                                       <?php the_title(); ?>
                                    </span>
                                </a>
                            </span>
                </figcaption>
            </figure>
		<?php endwhile;
		wp_reset_postdata(); ?>
    </div>
</aside>