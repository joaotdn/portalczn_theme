<?php
$posts = get_posts( array(
	'posts_per_page' => 1,
	'meta_key'       => 'portalczn_home_features',
	'meta_value'     => 'big_title'
) );
foreach ( $posts as $post ):
	?>
    <article class="width-100 headline-1" role="article">
        <h3 class="headline-kicker display-inline-block width-100">
            <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>

            <span class="display-inline-block open-share">
                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
            </span>
        </h3>
        <h1 class="headline-url"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
        <p class="headline-excerpt"><?php the_excerpt(); ?></p>
    </article>
<?php endforeach;
wp_reset_postdata(); ?>
