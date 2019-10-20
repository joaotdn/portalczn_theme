<div class="width-100 slide-items position-relative cycle-slideshow"
     data-cycle-fx="fade"
     data-cycle-timeout="9000"
     data-cycle-slides="> figure"
     data-cycle-pager=".page-slide"
     data-cycle-next=".next-slider"
     data-cycle-prev=".prev-slider"
     data-cycle-pager-template="<span></span>"
     data-cycle-pause-on-hover="true"
     data-cycle-swipe="true"
     data-cycle-swipe-fx="scrollHorz"
>
    <div id="progress" class="position-absolute"></div>

	<?php
	$posts = get_posts( array(
		'posts_per_page' => 3,
		'meta_key'       => 'portalczn_home_features',
		'meta_value'     => 'slider_news'
	) );

	foreach ( $posts as $post ):
		?>
        <figure class="width-100 height-100">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
               class="width-100 display-block slide-thumb">
				<?php echo get_the_post_thumbnail( $post->ID, 'feature-slider' ); ?>
            </a>
            <figcaption class="width-100 margin-top-1">
                <h3 class="headline-kicker display-inline-block width-100">
                    <span class="display-inline-block"><?php echo wp_get_post_tags( $post->ID )[0]->name; ?></span>
                    <span class="display-inline-block open-share">
	                    <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
	                </span>
                </h3>
                <h2 class="margin-bottom-1">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
            </figcaption>
        </figure>
	<?php
	endforeach;
	wp_reset_postdata();
	?>
    <div class="page-slide position-absolute width-100 text-center"></div>
</div>

<div class="nav-slider position-absolute width-100">
    <a href="#" class="display-block prev-slider"><i class="fas fa-chevron-left"></i></a>
    <a href="#" class="display-block next-slider"><i class="fas fa-chevron-right"></i></i></a>
</div>