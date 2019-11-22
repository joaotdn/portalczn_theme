<div class="widget-agenda width-100">
    <header>
        <h4 class="display-table margin-bottom-1">
            <a href="<?php echo get_post_type_archive_link( 'cultural_schedule' ); ?>"
               title="Veja toda a Agenda Cultural">
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
				'post_type'      => 'cultural_schedule'
			) );
			$i     = 0;
			foreach ( $posts as $post ):
				$info = get_field( 'portalczn_agenda_info' );
				?>
                <li class="accordion-item <?php if ( $i == 0 ) {
					echo 'is-active';
				} ?>" data-accordion-item>
                    <a href="#" class="accordion-title event-day" title="<?php the_title(); ?>" data-event-day>
                        <i class="far fa-calendar-alt"></i> <?php echo $info['portalczn_agenda_data']; ?>
                    </a>
                    <div class="accordion-content position-relative" data-tab-content>
                        <div class="poster-calendar position-absolute height-100 width-100 event-thumb"
                             data-bg="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'schedule-thumb' )[0]; ?>"></div>
                        <div class="calendar-info position-relative width-100 text-left">
                            <h3><a href="#" data-open="scheduleModal" title="<?php the_title(); ?>" class="event-title"><?php the_title(); ?></a></h3>
                            <p class="event-local"><i class="fas fa-map-marker-alt"></i> <?php echo $info['portalczn_agenda_local']; ?></p>
                            <p class="event-hour"><i class="far fa-clock"></i> <?php echo $info['portalczn_agenda_hora']; ?></p>
                            <p class="hide event-description" style="display: none;"><?php echo $info['portalczn_agenda_descricao']; ?></p>
                        </div>
                    </div>
                </li>
				<?php $i ++; endforeach; ?>
        </ul>
        <a href="<?php echo get_post_type_archive_link( 'cultural_schedule' ); ?>"
           class="button margin-bottom-0 expanded small text-uppercase hollow" title="Ver toda a agenda">
            <i class="fas fa-book-open display-inline-block"></i> Agenda completa
        </a>
    </nav>
</div>