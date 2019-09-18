<?php
$the_query = new WP_Query( array(
	'posts_per_page' => 6,
) );
?>
<section id="header-features" class="container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell auto ellipsis">
                <span class="text-uppercase font-bold display-inline-block margin-right-1"><i class="far fa-clock"></i> Destaques:</span>
                <div class="cycle-slideshow display-inline-block"
                     data-cycle-fx="fade"
                     data-cycle-timeout="5000"
                     data-cycle-slides="> span"
                     data-cycle-prev=".prev"
                     data-cycle-next=".next"
                >
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <span><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                 rel="contents"><?php the_title(); ?></a></span>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
                </div>
            </div>

            <div class="cell small-2 medium-1 text-right">
                <span><a href="#" class="display-inline-block nav prev"><i class="fas fa-chevron-left"></i></a></span>
                <span><a href="#" class="display-inline-block nav next"><i class="fas fa-chevron-right"></i></a></span>
            </div>
        </div>
    </div>
</section>