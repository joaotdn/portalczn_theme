<?php
get_header( 'home' );

get_template_part( 'parts/home', 'features' );

get_template_part( 'parts/home-category', 'feature' );

get_template_part( 'parts/home', 'videos' );

get_template_part( 'parts/home', 'news' );

?>

    <section class="container margin-bottom-1">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 medium-8">
					<?php get_template_part( 'parts/home', 'galleries' ); ?>
                </div>
                <div class="small-12 medium-4 cell">
					<?php get_template_part( 'parts/component', 'schedule' ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container" role="main">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 white-container text-center margin-bottom-2" role="banner">
                    <div class="width-100 bg-white padding-1 radius">
                        <header class="width-100 text-uppercase text-left font-header">
                            <span>Publicidade</span>
                        </header>
						<?php portalczn_show_banner( 'portalczn_banners_rodape' ); ?>
                    </div>
                </div>

                <div class="cell small-12 medium-4 popular-article margin-bottom-1">
                    <?php get_template_part('parts/popular', 'post'); ?>
                </div>

                <div class="cell small-12 medium-4 margin-bottom-1">
                    <div class="width-100 component-loteria">
                        <div class="width-100">
                            <header class="width-100 text-center margin-bottom-1">
                                <img src="assets/img/logo-caixa.png" alt="">
                            </header>

                            <ul class="accordion" data-accordion>
                                <li class="accordion-item is-active" data-accordion-item>
                                    <a href="#" class="accordion-title megasena">Mega-sena</a>
                                    <div class="accordion-content" data-tab-content>
                                        <span>43</span>
                                        <span>67</span>
                                        <span>33</span>
                                        <span>22</span>
                                        <span>11</span>
                                        <span>01</span>
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title quina">Quina</a>
                                    <div class="accordion-content" data-tab-content>
                                        <span>43</span>
                                        <span>67</span>
                                        <span>33</span>
                                        <span>22</span>
                                        <span>11</span>
                                        <span>01</span>
                                    </div>
                                </li>
                                <li class="accordion-item" data-accordion-item>
                                    <a href="#" class="accordion-title lotofacil">Lotofacil</a>
                                    <div class="accordion-content" data-tab-content>
                                        <span>43</span>
                                        <span>67</span>
                                        <span>33</span>
                                        <span>22</span>
                                        <span>11</span>
                                        <span>01</span>
                                    </div>
                                </li>
                            </ul>

                            <a href="#" class="width-100 button expanded small margin-bottom-0">Mais resultados (12/07 -
                                13:30)</a>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 medium-4 margin-bottom-1">
                    <div class="cell small-12 medium-4 tv-diario">
                        <header>
                      <span class="text-uppercase font-header">
                          <strong><i class="fas fa-satellite-dish"></i> TV Diário do Sertão</strong>
                      </span>
                        </header>
                        <div class="width-100 text-center">
                            <iframe height="260" src="http://www.diariodosertao.com.br/parceiros_tv?mudo=1"
                                    frameborder="0"
                                    allowfullscreen="" class="width-100 display-inline-block"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();