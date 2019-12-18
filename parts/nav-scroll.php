<div id="menu-scroll" class="container position-fixed-top">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">

            <div class="cell auto hide-for-large">
                <h2 class="margin-0"><a href="#" class="open-menu-scroll" data-mobile-menu>
                        <span><i class="fas fa-bars"></i> MENU</a></span>
                </h2>
            </div>

            <div class="cell auto show-for-large">
                <ul class="menu">
                    <?php get_template_part('parts/menu', 'items'); ?>
                </ul>
            </div>

            <div class="cell auto show-for-large">
	            <?php get_template_part('parts/form', 'search'); ?>
            </div>

        </div>
    </div>
</div>