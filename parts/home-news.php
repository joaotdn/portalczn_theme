<?php
$news_cat   = get_cat_ID( 'Noticias' );
$news_link  = get_category_link( $news_cat );
$categories = get_field( 'portalczn_ultimas_noticias', 'option' );
?>
<section id="section-news" class="container margin-bottom-2" role="main">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <header class="cell small-12 section-header padding-top-1">
                <div class="grid-x margin-bottom-1">
                    <div class="cell shrink">
                        <h2 class="display-inline-block">
                            <a href="<?php echo esc_html( $news_link ); ?>" title="Veja todas as notícias">Notícias</a>
                        </h2>
                    </div>
                    <div class="cell auto text-right show-for-medium margin-left-1">
                        <ul class="menu header-menu">
							<?php
							$posts = get_posts( array(
								'posts_per_page' => 6,
								'category'       => $news_cat
							) );
							foreach ( $posts as $post ) {
								echo '<li><a href="' . get_tag_link( wp_get_post_tags( $post->ID )[0]->term_id ) . '" title="' . wp_get_post_tags( $post->ID )[0]->name . '">' . wp_get_post_tags( $post->ID )[0]->name . '</a></li>';
							}
							?>
                        </ul>
                    </div>
                </div>
            </header>
			<?php
			foreach ( $categories as $category ) {
				printf('<div class="cell small-12 medium-3 news-group">%s</div>', news_block( $category ));
			}
			?>
        </div>
    </div>
</section>