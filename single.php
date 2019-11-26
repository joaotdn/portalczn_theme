<?php
    get_header('home');
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v4.0"></script>

<div id="menu-scroll" class="container position-fixed-top">
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle">
      <div class="cell auto">
        <h2 class="margin-0">
            <a href="#" class="open-menu-scroll" data-mobile-menu>
                <span><i class="fas fa-bars"></i> MENU</span>
            </a>
        </h2>
      </div>
        <div class="cell auto small-8 hide-for-medium">
            <ul class="menu align-right">
                <li>
                    <a href="#" title="Compartilhar no Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Compartilhar no Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Compartilhar no Linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Enviar por email">
                        <i class="far fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a href="#" title="Imprimir post">
                        <i class="fas fa-print"></i>
                    </a>
                </li>
                <li>
                    <a href="#comments" title="Comentários">
                        <i class="far fa-comments"></i>
                    </a>
                </li>            </ul>
        </div>
        <div class="cell auto small-8 show-for-medium">
            <form action="" id="form-search-single">
                <div class="input-group margin-0 font-header">
                    <label for="search-input-scroll" class="input-group-label padding-left-0"><i class="fas fa-search"></i></label>
                    <input type="search" id="search-input-scroll" class="input-group-field" placeholder="Pesquisar...">
                </div>
            </form>
        </div>
    </div>
  </div>
</div><div id="menu-offcanvas" class="container position-fixed height-100">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 text-right offcanvas-header">
                <button class="close-button" aria-label="Close alert" type="button" data-mobile-menu>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="cell small-12 margin-bottom-1" role="search">
                <div class="input-group">
                    <label for="search-input-offcanvas" class="input-group-label padding-left-0"><i class="fas fa-search"></i></label>
                    <input type="search" id="search-input-offcanvas" class="input-group-field" placeholder="Pesquisar...">
                </div>
            </div>

            <div class="cell small-12" role="navigation">
                <header class="width-100 font-header">
                    <span>Seções</span>
                </header>
                <ul class="menu vertical">
                    <li><a href="#" title="" class="active">Principal</a></li>
                    <li><a href="#" title="">Política</a></li>
                    <li><a href="#" title="">Policial</a></li>
                    <li><a href="#" title="">Esportes</a></li>
                    <li><a href="#" title="">Brasil</a></li>
                    <li><a href="#" title="">Mundo</a></li>
                    <li><a href="#" title="" class="tv-link"><i class="fas fa-play"></i> TV</a></li>                </ul>
            </div>

            <div class="cell small-12 margin-top-1 margin-bottom-1" role="navigation">
                <header class="width-100 font-header">
                    <span>Conheça-nos</span>
                </header>
                <ul class="menu vertical">
                    <li><a href="tel:988888888" target="_blank" class="white"><i class="fas fa-phone-alt"></i> (83) 98888.9847</a></li>
                    <li><a href="#" target="_blank" class="white margin-right-1"><i class="far fa-envelope"></i> Fale conosco</a></li>
                    <li><a href="#" target="_blank" title="Ir para a fanpage" class="white"><i class="fab fa-facebook"></i> Siga-nos</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<a href="#" class="width-100 height-100 position-fixed offcanvas-layer" data-mobile-menu></a><section id="topbar" class="container">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell auto">
                <span class="weather-mini margin-right-1 hide-for-large"><i class="fas fa-cloud-sun"></i> 36º Cajazeiras/PB</span>
                <span class="display-inline-block"><i class="far fa-calendar-alt"></i> Quinta-feira, 12 de maio de 2019</span>
            </div>

            <div class="cell auto text-right show-for-medium">
                <span class="display-inline-block margin-right-1"><a href="tel:988888888" target="_blank" class="white"><i
                        class="fas fa-phone-alt"></i> (83) 98888.9847</a></span>
                <span><a href="#" target="_blank" class="white margin-right-1"><i class="far fa-envelope"></i> Fale conosco</a></span>
                <span class="display-inline-block"><a href="#" target="_blank" title="Ir para a fanpage"
                                                      class="white"><i class="fab fa-facebook"></i> Siga-nos</a></span>
            </div>
        </div>
    </div>
</section><div class="container bgwhite header-single">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell small-6 medium-4">
                <a href="#" data-mobile-menu title="Mostrar menu" class="display-inline-block margin-right-1">
                    <i class="fas fa-bars"></i>
                </a>

                <a href="#" title="Ir para a página principal" class="display-inline-block logo">
                    <img src="assets/img/logoczn.png" alt="Logo do Portal CZN" width="150">
                </a>
            </div>
            <div class="cell small-6 medium-4 medium-text-center text-right">
                <h2 class="cat-name margin-0">
                    <strong><a href="#" title=""><i class="far fa-folder"></i> Política</a></strong>
                </h2>
            </div>
            <div class="cell auto show-for-medium">
                <form action="" id="form-search-single">
                    <div class="input-group margin-0 font-header">
                        <label for="search-input-1" class="input-group-label padding-left-0"><i class="fas fa-search"></i></label>
                        <input type="search" id="search-input-1" class="input-group-field" placeholder="Pesquisar...">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container margin-top-1 margin-bottom-1">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-center single-banner" role="banner">
            <div class="cell auto text-center">
                <img src="assets/img/pub1.gif" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container single-page">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 margin-bottom-1 hide-for-medium">
                <ul class="menu align-center">
                    <li>
                        <a href="#" title="Compartilhar no Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Compartilhar no Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Compartilhar no Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Enviar por email">
                            <i class="far fa-envelope"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Imprimir post">
                            <i class="fas fa-print"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Comentários">
                            <i class="far fa-comments"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <aside class="cell medium-1 share-post padding-right-0" data-sticky-container>
                <div class="sticky" data-sticky-on="medium" data-margin-top="3" data-sticky data-anchor="content">
                    <ul class="menu vertical">
                        <li>
                            <a href="#" title="Compartilhar no Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Compartilhar no Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Compartilhar no Linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Enviar por email">
                                <i class="far fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Imprimir post">
                                <i class="fas fa-print"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#comments" title="Comentários">
                                <i class="far fa-comments"></i>
                            </a>
                        </li>                    </ul>
                </div>
            </aside>
            <div class="cell small-12 medium-11" id="content">
                <div class="grid-container padding-left-0">
                    <div class="grid-padding-x grid-x">
                        <header class="cell small-12 post-header margin-bottom-1 margin-top-1">
                            <h3 class="margin-bottom-0 headline-kicker display-inline-block width-100">
                                <span class="display-inline-block">Operação Lava-jato</span>
                            </h3>
                            <h2>Governo distribui cargos no Incra a aliados políticos</h2>
                            <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam doloribus error laboriosam neque nihil praesentium similique sit unde.</p>
                        </header>
                        <article class="cell small-12" role="article">
                            <div class="grid-container full">
                                <div class="grid-x grid-padding-x">
                                    <div class="cell small-12 large-8 post-content text-wrap">
                                        <div class="width-100 float-left margin-bottom-1 post-author">
                                            <div class="float-left">
                                                <span class="margin-0"><strong>Jota França, Portal CZN</strong></span><br>
                                                <span>27 de Julho de 2019 | 18h45</span>
                                            </div>
                                            <div class="float-right">
                                                <a href="#" title="Aumentar fonte" class="display-inline-block font-plus"><i class="fas fa-font"></i> +</a>
                                                <a href="#" title="Diminuir fonte" class="display-inline-block font-minus"><i class="fas fa-font"></i> -</a>
                                            </div>
                                        </div>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto consequatur delectus eaque eius enim eum ex impedit ipsam, natus numquam officiis omnis quod repellat sed tempore vel velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur debitis distinctio dolorum, eaque eum illo maxime molestiae nostrum rerum! Animi consequatur cum cumque debitis ea eveniet optio quam ut!</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolorem itaque provident repellat totam. Assumenda cumque eaque eius, enim fuga illum itaque minus molestiae necessitatibus nostrum praesentium quibusdam unde veniam?</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur autem consectetur dolores, ducimus eius eos laudantium molestiae nam natus perferendis quis repellendus sint vel. A deleniti tempore voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius excepturi impedit praesentium qui quisquam tempore. Autem eaque eligendi et fuga harum, nobis reiciendis. Consequatur dolor dolores dolorum nisi possimus, sunt? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet culpa cumque dolorem ea eius eveniet itaque iure magnam maxime minus molestias nisi obcaecati optio pariatur possimus quidem quis repudiandae, vero.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto consequatur delectus eaque eius enim eum ex impedit ipsam, natus numquam officiis omnis quod repellat sed tempore vel velit veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur debitis distinctio dolorum, eaque eum illo maxime molestiae nostrum rerum! Animi consequatur cum cumque debitis ea eveniet optio quam ut!</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dolorem itaque provident repellat totam. Assumenda cumque eaque eius, enim fuga illum itaque minus molestiae necessitatibus nostrum praesentium quibusdam unde veniam?</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur autem consectetur dolores, ducimus eius eos laudantium molestiae nam natus perferendis quis repellendus sint vel. A deleniti tempore voluptates! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius excepturi impedit praesentium qui quisquam tempore. Autem eaque eligendi et fuga harum, nobis reiciendis. Consequatur dolor dolores dolorum nisi possimus, sunt? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet culpa cumque dolorem ea eius eveniet itaque iure magnam maxime minus molestias nisi obcaecati optio pariatur possimus quidem quis repudiandae, vero.</p>

                                        <div class="width-100 float-left post-tags margin-bottom-2 margin-top-2">
                                            <header><strgon>O que sabemos sobre:</strgon></header>
                                            <ul class="menu">
                                                <li><a href="#" class="button small" title=""><i class="fas fa-tag"></i> Jair Bolsonaro</a></li>
                                                <li><a href="#" class="button small" title=""><i class="fas fa-tag"></i> Lava-Jato</a></li>
                                                <li><a href="#" class="button small" title=""><i class="fas fa-tag"></i> Juiz Moro</a></li>
                                            </ul>
                                        </div>

                                        <div id="comments" class="width-100 margin-bottom-2">
                                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
                                        </div>

                                        <div class="grid-container full post-related">
                                            <div class="grid-padding-x grid-x">
                                                <header class="cell small-12 margin-bottom-1">
                                                    <h4>Recomendadas para você</h4>
                                                </header>
                                                <div class="cell small-12 medium-4 news-group">
                                                    <figure class="width-100 position-relative">
                                                        <a href="#" class="news-cat display-block width-100" title="Todas as notícias em Policial"><i class="far fa-folder"></i> Policial</a>
                                                        <a href="#" class="display-inline-block width-100 news-thumb position-relative" title="">
                                                            <img src="assets/img/temp/news6.webp" alt="">
                                                        </a>

                                                        <figcaption class="width-100 margin-top-1">
                                                            <h3 class="headline-kicker display-inline-block width-100">
                                                                <span class="display-inline-block">Previdência</span>

                                                                <span class="display-inline-block open-share">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                                                            </h3>
                                                            <h2><a href="#" title="">Grande acordo comercial que o Brasil tem que fazer é com ele mesmo, diz secretário</a></h2>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="cell small-12 medium-4 news-group">
                                                    <figure class="width-100 position-relative">
                                                        <a href="#" class="news-cat display-block width-100" title="Todas as notícias em Brasil"><i class="far fa-folder"></i> Brasil</a>
                                                        <a href="#" class="display-inline-block width-100 news-thumb position-relative" title="">
                                                            <img src="assets/img/temp/news7.webp" alt="">
                                                        </a>

                                                        <figcaption class="width-100 margin-top-1">
                                                            <h3 class="headline-kicker display-inline-block width-100">
                                                                <span class="display-inline-block">São Paulo</span>

                                                                <span class="display-inline-block open-share">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                                                            </h3>
                                                            <h2><a href="#" title="">Vestibular 2020: Veja os cronogramas das principais universidades de SP</a></h2>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="cell small-12 medium-4 news-group">
                                                    <figure class="width-100 position-relative">
                                                        <a href="#" class="news-cat display-block width-100" title="Todas as notícias em Mundo"><i class="far fa-folder"></i> Mundo</a>
                                                        <a href="#" class="display-inline-block width-100 news-thumb position-relative" title="">
                                                            <img src="assets/img/temp/news8.webp" alt="">
                                                        </a>

                                                        <figcaption class="width-100 margin-top-1">
                                                            <h3 class="headline-kicker display-inline-block width-100">
                                                                <span class="display-inline-block">EUA</span>

                                                                <span class="display-inline-block open-share">
                                <i class="fas fa-share-alt" data-toggle="share-dropdown"></i>
                            </span>
                                                            </h3>
                                                            <h2><a href="#" title="">Líder democrata busca apoio para condenar tuíte racista de Trump</a></h2>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <aside class="post-sidebar cell small-12 large-4">
                                        <div class="grid-x grid-padding-x">
                                            <div class="czn-widget related-features cell small-12 medium-6 large-12">
                                                <header>
                                                    <h4>Destaques em <a href="#" title=""><strong><i>Política</i></strong></a></h4>
                                                </header>
                                                <nav class="post-features margin-top-1">
                                                    <div class="media-object">
                                                        <div class="media-object-section">
                                                            <div class="thumbnail">
                                                                <img src="assets/img/temp/news6.webp" width="100">
                                                            </div>
                                                        </div>
                                                        <div class="media-object-section">
                                                            <h2>
                                                                <a href="#" title="">
                                                                    Governo pode devolver terras desapropriadas para antigos donos
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="media-object">
                                                        <div class="media-object-section">
                                                            <div class="thumbnail">
                                                                <img src="assets/img/temp/news7.webp" width="100">
                                                            </div>
                                                        </div>
                                                        <div class="media-object-section">
                                                            <h2>
                                                                <a href="#" title="">
                                                                    Novo ataque nos EUA deixa 9 mortos e 16 feridos em Ohio; horas antes, homem assassinou 20 no Texas
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="media-object">
                                                        <div class="media-object-section">
                                                            <div class="thumbnail">
                                                                <img src="assets/img/temp/news8.webp" width="100">
                                                            </div>
                                                        </div>
                                                        <div class="media-object-section">
                                                            <h2>
                                                                <a href="#" title="">
                                                                    Após ataques de Bolsonaro, boatos contra alvos do presidente ganham impulso nas redes
                                                                </a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>
                                            <div class="czn-widget related-features cell small-12 medium-6 large-12">
                                                <div class="white-container width-100 text-center margin-bottom-1" role="banner">
                                                    <img src="assets/img/temp/pub3.gif" alt="">
                                                </div>
                                            </div>
                                            <div class="czn-widget related-features cell small-12">
                                                <div id="radios-widget" class="width-100 padding-2">
                                                    <header class="text-center">
                                                        <h4><i class="fas fa-broadcast-tower display-inline-block margin-right-1"></i>Rádios OnLine</h4>
                                                    </header>
                                                    <div class="grid-container margin-top-1">
                                                        <div class="grid-x grid-padding-x align-middle">
                                                            <div class="cell auto">
                                                                <select name="radios" id="radios-select" class="font-header">
                                                                    <option>Selecionar rádio</option>
                                                                    <option value="http://72.29.81.124:8118/;stream.mp3">Tabajara FM</option>
                                                                    <option value="http://72.29.81.124:8226/;stream.mp3">Tabajara AM</option>
                                                                    <option value="http://72.29.81.124:8118/;stream.mp3">Patamuté FM</option>
                                                                    <option value="http://72.29.81.124:8118/;stream.mp3">Difusora Cajazeiras</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 get_footer();
?>