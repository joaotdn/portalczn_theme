<?php

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
remove_filter('the_excerpt', 'wpautop'); // sem paragrafo no resumo