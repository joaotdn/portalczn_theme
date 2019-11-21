<div class="widget-agenda width-100">
	<header>
		<h4 class="display-table margin-bottom-1">
			<a href="#" title="Veja toda a Agenda Cultural">
				<i class="fas fa-theater-masks display-inline-block float-left"></i>
				<span>Agenda Cultural</span>
			</a>
		</h4>
	</header>

	<nav role="tablist">
		<ul class="accordion" data-accordion>
            <?php
            $posts = get_posts( array(
	            'posts_per_page' => 3,
                'post_type' => 'cultural_schedule'
            ) );
            $i = 0;
            foreach ($posts as $post):
                $info = get_field('portalczn_agenda_info');
            ?>
			<li class="accordion-item <?php if ($i == 0) echo 'is-active'; ?>" data-accordion-item>
				<a href="#" class="accordion-title" title="<?php the_title(); ?>">
					<i class="far fa-calendar-alt"></i> <?php echo $info['portalczn_agenda_data']; ?>
				</a>
				<div class="accordion-content position-relative" data-tab-content>
					<div class="poster-calendar position-absolute height-100 width-100"
					     data-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'schedule-thumb' )[0]; ?>"></div>
					<div class="calendar-info position-relative width-100 text-left">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><i class="fas fa-map-marker-alt"></i> <?php echo $info['portalczn_agenda_local']; ?></p>
						<p><i class="far fa-clock"></i> <?php echo $info['portalczn_agenda_hora']; ?></p>
					</div>
				</div>
			</li>
            <?php $i++; endforeach; ?>
		</ul>
		<a href="#" class="button margin-bottom-0 expanded small text-uppercase hollow">
			<i class="fas fa-book-open display-inline-block"></i> Agenda completa
		</a>
	</nav>
</div>