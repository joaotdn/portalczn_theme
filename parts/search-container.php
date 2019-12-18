<div class="reveal full" id="search-container" data-reveal data-animation-in="slide-in-up"
     data-animation-out="slide-out-down" data-animation-duration="200" style="z-index: 999999;">

    <div class="grid-container margin-top-3">
        <form method="post" action="" class="grid-x grid-padding-x align-bottom" id="search-form-reveal">
            <div class="cell small-12 margin-bottom-2 text-center">
                <a href="<?php home_url(); ?>" title="Página principal" class="display-inline-block">
                    <img src="<?php the_field( 'portalczn_logo', 'option' ); ?>"
                         alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>"
                         class="no-lazy" data-src>
                </a>
            </div>

            <div class="cell small-12 medium-8">
                <label><small>Buscar</small>
                    <input type="search" name="s" class="width-100 radius large margin-0" id="search-field"
                           placeholder="O que você procura?" required>
                </label>
            </div>

            <div class="cell small-12 medium-4">
                <button type="submit" class="button margin-0 expanded search-btn" title="Buscar">Buscar</button>
            </div>
        </form>

        <div class="grid-padding-x grid-x margin-top-2 margin-bottom-2" id="list-results">
            <div class="cell small-12 margin-top-2 margin-bottom-2 text-center wait-search hide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif"
                     alt="">
            </div>
        </div>
    </div>

    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>