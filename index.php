<?php
get_header('home');

get_template_part('parts/home', 'features');

get_template_part('parts/home-category', 'feature');

get_template_part('parts/home', 'videos');

get_template_part('parts/home', 'news');

?>

<section class="container margin-bottom-1">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-8">
                <div class="width-100 album-component position-relative cycle-slideshow margin-bottom-1"
                     data-cycle-fx="scrollHorz"
                     data-cycle-timeout="9000"
                     data-cycle-slides="> figure"
                     data-cycle-pager=".album-pager"
                     data-cycle-next=".next-gal"
                     data-cycle-prev=".prev-gal"
                     data-cycle-pager-template="<span></span>"
                     data-cycle-pause-on-hover="true"
                     data-cycle-swipe="true"
                     data-cycle-swipe-fx="scrollHorz"
                >
                    <header class="position-absolute">
                        <h3><a href="#" title="Todos os álbuns"><i class="fas fa-camera"></i> Galerias</a></h3>
                    </header>

                    <figure class="width-100">
                        <a href="#" title="" class="album-thumb" data-bg="assets/img/temp/album1.jpg">
                            <span class="display-block position-absolute width-100 height-100"></span>
                            <figcaption class="width-100 position-absolute">
                                <strong class="width-100 display-inline-block">15 anos</strong>
                                <h2>Grande acordo comercial que o Brasil tem que fazer é com ele mesmo, diz
                                    secretário</h2>
                            </figcaption>
                        </a>
                    </figure>

                    <figure class="width-100">
                        <a href="#" title="" class="album-thumb" data-bg="assets/img/temp/album2.jpg">
                            <span class="display-block position-absolute width-100 height-100"></span>
                            <figcaption class="width-100 position-absolute">
                                <strong class="width-100 display-inline-block">Wesley Safadão</strong>
                                <h2>Líder democrata busca apoio para condenar tuíte racista de Trump</h2>
                            </figcaption>
                        </a>
                    </figure>

                    <figure class="width-100">
                        <a href="#" title="" class="album-thumb" data-bg="assets/img/temp/album3.jpg">
                            <span class="display-block position-absolute width-100 height-100"></span>
                            <figcaption class="width-100 position-absolute">
                                <strong class="width-100 display-inline-block">Aniversariante do mês</strong>
                                <h2>Vestibular 2020: Veja os cronogramas das principais universidades de SP</h2>
                            </figcaption>
                        </a>
                    </figure>

                    <a href="#" title="Anterior" class="nav-gal display-block prev-gal"><i
                                class="fas fa-chevron-left"></i></a>
                    <a href="#" title="Próximas" class="nav-gal display-block next-gal"><i
                                class="fas fa-chevron-right"></i></a>

                    <nav class="album-pager position-absolute"></nav>
                </div>
            </div>

            <div class="small-12 medium-4 cell">
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
                            <li class="accordion-item is-active" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    <i class="far fa-calendar-alt"></i> Sábado, 03 de Julho
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
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    <i class="far fa-calendar-alt"></i> Domingo, 04 de Julho
                                </a>
                                <div class="accordion-content position-relative" data-tab-content>
                                    <div class="poster-calendar position-absolute height-100 width-100"
                                         data-bg="assets/img/temp/agd2.jpg"></div>
                                    <div class="calendar-info position-relative width-100 text-left">
                                        <h3><a href="#">Grande acordo comercial que o Brasil tem que fazer é com ele
                                                mesmo, diz secretário</a></h3>
                                        <p><i class="fas fa-map-marker-alt"></i> Campestre Clube / Cajazeiras-PB</p>
                                        <p><i class="far fa-clock"></i> 23:40</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-item" data-accordion-item>
                                <a href="#" class="accordion-title">
                                    <i class="far fa-calendar-alt"></i> Sábado, 23 de Agosto
                                </a>
                                <div class="accordion-content position-relative" data-tab-content>
                                    <div class="poster-calendar position-absolute height-100 width-100"
                                         data-bg="assets/img/temp/agd3.jpg"></div>
                                    <div class="calendar-info position-relative width-100 text-left">
                                        <h3><a href="#">Líder democrata busca apoio para condenar tuíte racista de
                                                Trump</a></h3>
                                        <p><i class="fas fa-map-marker-alt"></i> Campestre Clube / Cajazeiras-PB</p>
                                        <p><i class="far fa-clock"></i> 23:40</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="button margin-bottom-0 expanded small text-uppercase hollow">
                            <i class="fas fa-book-open display-inline-block"></i> Agenda completa
                        </a>
                    </nav>
                </div>
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
                    <img src="assets/img/pub1.gif" alt="">
                </div>
            </div>

            <div class="cell small-12 medium-4 popular-article margin-bottom-1">
                <div class="width-100 position-relative">
                    <header class="width-100 position-absolute width-100 text-center padding-top-2">
                        <h4 class="margin-bottom-1"><i class="fas fa-plus"></i> Lida do dia</h4>
                        <h2><a href="#" title="">Vestibular 2020: Veja os cronogramas das principais universidades de
                                SP</a></h2>
                    </header>
                    <figure class="position-absolute width-100 height-100" data-bg="assets/img/temp/popular.jpg">
                        <a href="#" class="display-block position-absolute width-100 height-100">

                        </a>
                    </figure>
                </div>
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
                        <iframe height="260" src="http://www.diariodosertao.com.br/parceiros_tv?mudo=1" frameborder="0"
                                allowfullscreen="" class="width-100 display-inline-block"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();