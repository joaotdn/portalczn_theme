<div class="reveal full" id="search-container" data-reveal data-animation-in="slide-in-up"
     data-animation-out="slide-out-down" data-animation-duration="200">

    <div class="grid-container margin-top-3">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 margin-bottom-2 text-center">
                <a href="<?php home_url(); ?>" title="Página principal" class="display-inline-block">
                    <img src="<?php the_field( 'portalczn_logo', 'option' ); ?>"
                         alt="<?php _e( 'Logo da CZN', 'portalczn' ); ?>"
                         class="no-lazy" data-src>
                </a>
            </div>
            <div class="cell small-12">
                <input type="search" name="s" class="width-100 radius" id="search-field" placeholder="O que você procura?">
            </div>
        </div>
    </div>

    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>