<div class="width-100 position-relative">
	<?php $popular = new WP_Query( array(
		'posts_per_page' => 1,
		'meta_key'       => 'joki_post_views_count',
		'orderby'        => 'meta_value_num',
		'order'          => 'DESC',
		'date_query'     => array(
			'after' => '1 week ago',
		)
	) );
	while ( $popular->have_posts() ) : $popular->the_post();
		global $post; ?>
        <header class="width-100 position-absolute width-100 text-center padding-2">
            <h4 class="margin-bottom-1"><i class="fas fa-plus"></i> Lida do dia</h4>
            <h2><a href="<?php the_permalink(); ?>"
                   title="<?php the_title() ?>"><?php the_title() ?></a></h2>
        </header>
        <figure class="position-absolute width-100 height-100"
                data-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'feature-slider' )[0]; ?>">
            <a href="<?php the_permalink(); ?>"
               class="display-block position-absolute width-100 height-100"
               title="<?php the_title() ?>"></a>
        </figure>
	<?php endwhile;
	wp_reset_postdata(); ?>
</div>