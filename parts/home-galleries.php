<?php
$cat_id   = get_cat_ID( 'Cotidiano' );
$cat_link = get_category_link( $cat_id );
?>
<div class="width-100 album-component position-relative cycle-slideshow margin-bottom-1"
     data-cycle-fx="scrollHorz"
     data-cycle-timeout="9000"
     data-cycle-slides="> figure"
     data-cycle-pager=".album-pager"
     data-cycle-next=".next-gal"
     data-cycle-prev=".prev-gal"
     data-cycle-pager-template="<span></span>"
     data-cycle-pause-on-hover="true"
     data-cycle-swipe="true"
     data-cycle-swipe-fx="scrollHorz"
>
    <header class="position-absolute">
        <h3><a href="<?php echo esc_html( $cat_link ); ?>" title="Todos tudo que aconteceu em Cotidiano"><i
                        class="fas fa-camera"></i>
                Cotidiano</a></h3>
    </header>
	<?php
	$posts = get_posts( array(
		'posts_per_page' => 3,
		'category'       => $cat_id
	) );
	foreach ( $posts as $post ):
		?>
        <figure class="width-100">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="album-thumb"
               data-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'gallery-home-thumb' )[0]; ?>">
                <span class="display-block position-absolute width-100 height-100"></span>
                <figcaption class="width-100 position-absolute">
                    <strong class="width-100 display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></strong>
                    <h2><?php the_title(); ?></h2>
                </figcaption>
            </a>
        </figure>
	<?php endforeach; ?>

    <a href="#" title="Anterior" class="nav-gal display-block prev-gal"><i
                class="fas fa-chevron-left"></i></a>
    <a href="#" title="Próximas" class="nav-gal display-block next-gal"><i
                class="fas fa-chevron-right"></i></a>

    <nav class="album-pager position-absolute"></nav>
</div>