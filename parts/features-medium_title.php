<div class="cell small-12 medium-4 headline-small">
	<?php
	$posts     = get_posts( array(
		'posts_per_page' => 1,
	) );
	$the_query = new WP_Query( $posts );
	if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();
		global $post;
		if ( get_field( 'portalczn_home_features', $post->ID ) == 'medium_title_one' ):
?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
               class="display-block width-100 margin-bottom-1">
				<?php echo get_the_post_thumbnail( $post->ID, 'feature-medium' ); ?>
            </a>
            <h3 class="headline-kicker display-inline-block width-100">
                <span class="display-inline-block"><?php echo get_tags()[0]->name; ?></span>

                <span class="display-inline-block open-share">
                    <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                </span>
            </h3>
            <h1 class="headline-url"><a href="<?php the_permalink(); ?>"
                                        title="<?php the_title() ?>"><?php the_title() ?></a></h1>

		<?php endif; endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
</div>

<div class="cell small-12 medium-4 headline-small">
    <?php
    $posts     = get_posts( array(
        'posts_per_page' => 1,
    ) );
    $the_query = new WP_Query( $posts );
    if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post();
        global $post;
        if ( get_field( 'portalczn_home_features', $post->ID ) == 'medium_title_two' ):
    ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="display-block width-100 margin-bottom-1">
	    <?php echo get_the_post_thumbnail( $post->ID, 'feature-medium' ); ?>
    </a>
    <h3 class="headline-kicker display-inline-block width-100">
        <span class="display-inline-block"><?php echo get_tags()[0]->name; ?></span>

        <span class="display-inline-block open-share">
            <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
        </span>
    </h3>
    <h1 class="headline-url"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <?php endif; endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
