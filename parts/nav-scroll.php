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
                <form action="" id="form-search-scroll">
                    <div class="input-group margin-0 font-header">
                        <label for="search-input" class="input-group-label padding-left-0"><i class="fas fa-search"></i></label>
                        <input type="search" id="search-input" class="input-group-field" placeholder="Pesquisar...">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>