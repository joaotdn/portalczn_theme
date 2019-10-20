<div class="cell small-12 medium-4 headline-small">
	<?php
	$posts = get_posts( array(
		'posts_per_page' => 1,
		'meta_key'       => 'portalczn_home_features',
		'meta_value'     => 'medium_title_one'
	) );

	foreach ( $posts as $post ):
		?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
           class="display-block width-100 margin-bottom-1">
			<?php echo get_the_post_thumbnail( $post->ID, 'feature-medium' ); ?>
        </a>
        <h3 class="headline-kicker display-inline-block width-100">
            <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>
            <span class="display-inline-block open-share">
            <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
        </span>
        </h3>
        <h1 class="headline-url"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

	<?php endforeach;
	wp_reset_postdata(); ?>
</div>

<div class="cell small-12 medium-4 headline-small">
	<?php
	$posts = get_posts( array(
		'posts_per_page' => 1,
		'meta_key'       => 'portalczn_home_features',
		'meta_value'     => 'medium_title_two'
	) );
	foreach ( $posts as $post ):
		?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
           class="display-block width-100 margin-bottom-1">
			<?php echo get_the_post_thumbnail( $post->ID, 'feature-medium' ); ?>
        </a>
        <h3 class="headline-kicker display-inline-block width-100">
            <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>
            <span class="display-inline-block open-share">
            <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
        </span>
        </h3>
        <h1 class="headline-url"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

	<?php endforeach;
	wp_reset_postdata(); ?>
</div>
