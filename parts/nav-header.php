<nav id="main-menu" class="container" role="navigation">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell auto show-for-large">
                <ul class="menu dropdown">
					<?php
					wp_nav_menu( array(
						'menu'       => 'Menu principal',
						'items_wrap' => '%3$s',
						'container'  => '',
					) );
					?>
                </ul>
            </div>

            <div class="cell auto large-4 text-right">
				<?php get_template_part( 'parts/header', 'search' ); ?>
            </div>
        </div>
    </div>
</nav>