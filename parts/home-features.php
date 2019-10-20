<section id="home-features" class="container margin-top-2 headlines-group hide-img" role="main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-7 large-8">
                <?php get_template_part('parts/features', 'big_title'); ?>

				<div class="grid-container full margin-top-1">
					<div class="grid-x grid-margin-x">

                        <?php get_template_part('parts/features', 'medium_title'); ?>

                        <div class="cell small-12 medium-4 headline-small text-center" role="banner">
	                        <?php
	                        portalczn_show_banner( 'portalczn_banners_destaques' );
	                        ?>
						</div>
					</div>
				</div>
			</div>
			<div class="cell small-12 medium-5 large-4 position-relative margin-bottom-1" id="features-slideshow"
			     role="slider">
				<?php get_template_part('parts/features', 'slider'); ?>
			</div>
		</div>
	</div>
</section>