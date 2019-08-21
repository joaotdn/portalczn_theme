<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal CZN - Capa</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/logofooter.png" rel="apple-touch-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto:400,700,900&display=swap"
	      rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>

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
					<li><a href="#" title="" class="active">Principal</a></li>
					<li><a href="#" title="">Política</a></li>
					<li><a href="#" title="">Policial</a></li>
					<li><a href="#" title="">Esportes</a></li>
					<li><a href="#" title="">Brasil</a></li>
					<li><a href="#" title="">Mundo</a></li>
					<li><a href="#" title="" class="tv-link"><i class="fas fa-play"></i> TV</a></li>
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
<div id="menu-offcanvas" class="container position-fixed height-100">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 text-right offcanvas-header">
				<button class="close-button" aria-label="Close alert" type="button" data-mobile-menu>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="cell small-12 margin-bottom-1" role="search">
				<div class="input-group">
					<label for="search-input-offcanvas" class="input-group-label padding-left-0"><i
							class="fas fa-search"></i></label>
					<input type="search" id="search-input-offcanvas" class="input-group-field"
					       placeholder="Pesquisar...">
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
					<li><a href="#" title="" class="tv-link"><i class="fas fa-play"></i> TV</a></li>
				</ul>
			</div>

			<div class="cell small-12 margin-top-1 margin-bottom-1" role="navigation">
				<header class="width-100 font-header">
					<span>Conheça-nos</span>
				</header>
				<ul class="menu vertical">
					<li><a href="tel:988888888" target="_blank" class="white"><i class="fas fa-phone-alt"></i> (83)
							98888.9847</a></li>
					<li><a href="#" target="_blank" class="white margin-right-1"><i class="far fa-envelope"></i> Fale
							conosco</a></li>
					<li><a href="#" target="_blank" title="Ir para a fanpage" class="white"><i
								class="fab fa-facebook"></i> Siga-nos</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<a href="#" class="width-100 height-100 position-fixed offcanvas-layer" data-mobile-menu></a>
<section id="topbar" class="container">
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
</section>
<header id="header" class="container padding-top-1 padding-bottom-1" role="banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<figure class="cell auto margin-0 site-brand margin-bottom-small-1" role="figure">
				<a href="#" title="Página principal" class="display-inline-block">
					<img src="assets/img/logohome.png" alt="Logo da CZN">
				</a>
			</figure>

			<div class="cell shrink margin-bottom-small-1 text-right hide-for-large">
                <span class="margin-right-1 display-inline-block">
                    <a href="#" role="button" data-mobile-menu><i class="fas fa-bars"></i></a>
                </span>
			</div>

			<figure class="cell small-12 medium-8 auto margin-0 text-center large-text-right medium-text-right"
			        role="figure">
				<div class="display-inline-block">
					<a href="#" title="Adsense">
						<img src="assets/img/adsa.jpg" alt="Logo da CZN">
					</a>
				</div>
			</figure>

			<div class="cell shrink show-for-large">
				<div class="weather-component width-100 align-middle">
					<div class="grid-container full">
						<div class="grid-x text-center">
							<div class="cell small-12 padding-top-1">
								<div class="media-object">
									<div class="media-object-section">
                                        <span class="display-inline-block width-100 text-uppercase icon"><i
		                                        class="fas fa-sun"></i></span>
									</div>
									<div class="media-object-section main-section">
										<span class="display-block font-header text-uppercase"><strong>Cajazeiras</strong></span>
										<span class="min">30 <i class="fas fa-temperature-low"></i></span>
										<span class="max">38 <i class="fas fa-temperature-high"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav id="main-menu" class="container" role="navigation">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell auto show-for-large">
				<ul class="menu dropdown">
					<li><a href="#" title="" class="active">Principal</a></li>
					<li><a href="#" title="">Política</a></li>
					<li><a href="#" title="">Policial</a></li>
					<li><a href="#" title="">Esportes</a></li>
					<li><a href="#" title="">Brasil</a></li>
					<li><a href="#" title="">Mundo</a></li>
					<li><a href="#" title="" class="tv-link"><i class="fas fa-play"></i> TV</a></li>
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
<section id="header-features" class="container">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell auto ellipsis">
				<span class="text-uppercase font-bold display-inline-block margin-right-1"><i class="far fa-clock"></i> Destaques:</span>
				<div class="cycle-slideshow display-inline-block"
				     data-cycle-fx="fade"
				     data-cycle-timeout="5000"
				     data-cycle-slides="> span"
				     data-cycle-prev=".prev"
				     data-cycle-next=".next"
				>
					<span><a href="#" title="" rel="contents">Nova versão de relatório deixa estados e municípios fora da Previdência</a></span>
					<span><a href="#" title="" rel="contents">Segundo o relator, deputado Samuel Moreira, discussão sobre inclusão de estados e municípios pode ficar para plenário </a></span>
					<span><a href="#" title="" rel="contents">Copa América: Seleção brasileira vence Argentina e chega à final após 12 anos</a></span>
					<span><a href="#" title="" rel="contents">Ex-juiz nega perseguição a jornalista após vazamento de mensagens da Lava Jato</a></span>
				</div>
			</div>

			<div class="cell small-2 medium-1 text-right">
				<span><a href="#" class="display-inline-block nav prev"><i class="fas fa-chevron-left"></i></a></span>
				<span><a href="#" class="display-inline-block nav next"><i class="fas fa-chevron-right"></i></a></span>
			</div>
		</div>
	</div>
</section>