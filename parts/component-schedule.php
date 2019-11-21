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
            foreach ($posts as $post):
                $info = get_field('');
            ?>
			<li class="accordion-item is-active" data-accordion-item>
				<a href="#" class="accordion-title">
					<i class="far fa-calendar-alt"></i> <?php ?>
				</a>
				<div class="accordion-content position-relative" data-tab-content>
					<div class="poster-calendar position-absolute height-100 width-100"
					     data-bg="assets/img/temp/agd1.jpg"></div>
					<div class="calendar-info position-relative width-100 text-left">
						<h3><a href="#">Vestibular 2020: Veja os cronogramas das principais
								universidades de SP</a></h3>
						<p><i class="fas fa-map-marker-alt"></i> Campestre Clube / Cajazeiras-PB</p>
						<p><i class="far fa-clock"></i> 23:40</p>
					</div>
				</div>
			</li>
            <?php endforeach; ?>
		</ul>
		<a href="#" class="button margin-bottom-0 expanded small text-uppercase hollow">
			<i class="fas fa-book-open display-inline-block"></i> Agenda completa
		</a>
	</nav>
</div>