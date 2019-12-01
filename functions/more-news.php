<?php
add_action( 'wp_ajax_nopriv_more_news', 'more_news' );
add_action( 'wp_ajax_more_news', 'more_news' );

function more_news() {
	$offset   = $_GET['offset'];
	$category = $_GET['category'];

	$posts = new WP_Query( array(
		'posts_per_page' => 3,
		'category'       => $category,
		'offset'         => $offset + 4
	) );

	if ( $posts->have_posts() ) :  while ( $posts->have_posts() ) : $posts->the_post();
		global $post;
		?>
        <div class="media-object news-cat-item news-group">
            <div class="media-object-section">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	                <?php echo get_the_post_thumbnail( $post->ID, 'lastnews-thumb' ); ?>
                </a>
            </div>
            <div class="media-object-section">
                <h3 class="headline-kicker display-inline-block width-100">
                    <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>
                    <span class="display-inline-block open-share">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                </h3>
                <h2><a href="<?php the_permalink(); ?>"
                       title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>
        </div>
	<?php
	endwhile; wp_reset_postdata(); endif;
	exit();
}
