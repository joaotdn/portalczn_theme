<?php

function getFirstTag() {
	$tag = get_the_tags() ? get_the_tags()[0]->name : '';
	print($tag);
}
