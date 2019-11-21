<?php
/**
 * @param int $category_id identificador da categoria
 *
 * @return false|string Buffer de saída do conteúdo do bloco
 */
function news_block( $category_id = 1 ) {

	$link     = get_category_link( $category_id );
	$name     = get_cat_name( $category_id );
	$posts    = get_posts( array(
		'posts_per_page' => 1,
		'category'       => $category_id
	) );

	ob_start();
	?>
    <figure class="width-100 position-relative">
        <a href="<?php echo $link; ?>" class="news-cat display-block width-100"
           title="Todas as notícias em <?php echo $name; ?>"><i
                    class="far fa-folder"></i> <?php echo $name; ?></a>
        <a href="<?php echo get_the_permalink( $posts[0]->ID ); ?>"
           class="display-inline-block width-100 news-thumb position-relative"
           title="<?php echo get_the_title( $posts[0]->ID ); ?>">
			<?php echo get_the_post_thumbnail( $posts[0]->ID, 'feature-medium' ); ?>
        </a>

        <figcaption class="width-100 margin-top-1">
            <h3 class="headline-kicker display-inline-block width-100">
                <span class="display-inline-block"><?php echo wp_get_post_tags( $posts[0]->ID )[0]->name; ?></span>
                <span class="display-inline-block open-share">
                    <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                </span>
            </h3>
            <h2><a href="<?php echo get_the_permalink( $posts[0]->ID ); ?>"
                   title="<?php echo get_the_title( $posts[0]->ID ); ?>"><?php echo get_the_title( $posts[0]->ID ); ?></a>
            </h2>
        </figcaption>
    </figure>
	<?php
	$out = ob_get_contents();
	ob_end_clean();

	return $out;
}