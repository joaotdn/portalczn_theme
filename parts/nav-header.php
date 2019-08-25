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
                <form action="" id="form-search">
                    <div class="input-group margin-0 font-header">
                        <label for="search-input" class="input-group-label padding-left-0"><i class="fas fa-search"></i></label>
                        <input type="search" id="search-input" class="input-group-field" placeholder="Pesquisar...">
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>