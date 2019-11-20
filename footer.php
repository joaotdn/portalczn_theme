<div class="large reveal padding-0" id="videoModal" data-reset-on-close="true" data-animation-in="fade-in"
     data-animation-out="fade-out" data-reveal>
	<div class="responsive-embed large">
		<iframe width="560" height="315" frameborder="0"
		        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
		        allowfullscreen></iframe>
	</div>
</div>
<div class="dropdown-pane small" id="share-dropdown" data-dropdown data-close-on-click="true">
	<ul class="menu vertical">
		<li><a href="#" title=""><i class="fab fa-facebook"></i> Facebook</a></li>
		<li><a href="#" title=""><i class="fab fa-twitter"></i> Twitter</a></li>
		<li><a href="#" title=""><i class="fab fa-instagram"></i> Instagram</a></li>
	</ul>
</div>
<div id="radio-player">
	<div id='radio-bars'>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
		<div class='radio-bars'></div>
	</div>
	<span class="radio-name display-inline-block text-uppercase font-header"></span>

	<button class="close-button close-radio" aria-label="Close radio" type="button">
		<span aria-hidden="true">&times;</span>
	</button>

	<audio id="radio-audio">
		<p>Seu navegador não possui suporte para essa funcionalidade. Atualize-o!</p>
	</audio>
</div>
<footer id="footer" class="container margin-top-2">
	<div class="grid-container padding-top-2 padding-bottom-2">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-4 text-center medium-text-left">
				<a href="#" title="Página principal" class="logo-footer">
					<img src="assets/img/logofooter.png" alt="Marca da CZN" width="130">
				</a>
				<div class="width-100 margin-top-1 footer-contact">
					<p><strong>&copy;2019 - Portal CZN - O Sertão em Notícias</strong></p>
					<p><i class="fas fa-at"></i> redacao@portalczn.com.br</p>
					<p><i class="fas fa-phone-alt"></i> (83) 98787.7676</p>
					<p class="margin-0"><i class="far fa-envelope"></i> <a href="#" title="Fale conosco">Fale
							conosco</a></p>
				</div>
			</div>
			<div class="cell small-12 medium-8">
				<ul class="menu align-right show-for-medium">
					<li><a href="#" title="" class="active">Principal</a></li>
					<li><a href="#" title="">Política</a></li>
					<li><a href="#" title="">Policial</a></li>
					<li><a href="#" title="">Esportes</a></li>
					<li><a href="#" title="">Brasil</a></li>
					<li><a href="#" title="">Mundo</a></li>
					<li><a href="#" title="" class="tv-link"><i class="fas fa-play"></i> TV</a></li>
				</ul>

				<div class="width-100 margin-top-1 keep-czn text-center medium-text-right">
					<span><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></span>
					<span><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></span>
					<span><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></span>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script>
    (function ($) {
        // TODO retirar daqui, colocar no repo do front
        $( '.cycle-slideshow' ).on( 'cycle-post-initialize', function() {
            $('#features-slideshow').removeClass('hide');
        });
    })(jQuery);
</script>
</body>
</html>
