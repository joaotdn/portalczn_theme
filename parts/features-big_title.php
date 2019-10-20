<?php
$posts     = get_posts( array(
		'posts_per_page' => 1
	)
);
$the_query = new WP_Query( $posts );
if ( $the_query->have_posts() ):
 while ( $the_query->have_posts() ) :$the_query->the_post();
global $post;
if ( get_field( 'portalczn_home_features', $post->ID ) == 'big_title' ):
	?>
    <article class="width-100 headline-1" role="article">
        <h3 class="headline-kicker display-inline-block width-100">
            <span class="display-inline-block"><?php echo get_the_tags($post->ID)[0]->name; ?></span>

            <span class="display-inline-block open-share">
                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
            </span>
        </h3>
        <h1 class="headline-url"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <p class="headline-excerpt"><?php the_excerpt(); ?></p>
    </article>
<?php endif; endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
