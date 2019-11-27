<?php

function get_share_items( $post_id ) {
	$link  = urlencode( get_the_permalink( $post_id ) );
	$title = str_replace( ' ', '%20', get_the_title( $post_id ) );

	$twitterURL  = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $link . '&amp;via=wpvkp';
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $link . '&t=' . $title;
	$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $link . '&amp;title=' . $title;
	?>
    <li>
        <a title="Compartilhar no Twitter" href="<?php echo $twitterURL; ?>" target="_blank" rel="nofollow">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
    <li>
        <a href="<?php echo $facebookURL; ?>" title="Compartilhar no Facebook" rel="nofollow" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <li>
        <a href="<?php echo $linkedInURL; ?>" title="Compartilhar no Linkedin" rel="nofollow" target="_blank">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </li>
    <li>
        <a href="mailto:?subject=<?php echo $title; ?>" title="Enviar esta noticia por email">
            <i class="far fa-envelope"></i>
        </a>
    </li>
    <li>
        <a href="javascript:window.print();" title="Imprimir post">
            <i class="fas fa-print"></i>
        </a>
    </li>
    <li>
        <a href="#comments" title="Comentários">
            <i class="far fa-comments"></i>
        </a>
    </li>
	<?php
}