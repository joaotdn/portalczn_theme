<?php
/**
 * @param string $cat_name Nome da categoria
 *
 * @return array Todas as tags da categoria em parametro
 */
function get_all_tags_cat( $cat_name = 'Noticias' ) {
	$project_query = query_posts('category_name=' . $cat_name);
	$all_tags_arr = array();
	while (have_posts()) : the_post();
		$posttags = get_the_tags();
		if ($posttags) {
			foreach($posttags as $tag) {
				$all_tags_arr[] = $tag -> name;
			}
		}
	endwhile;
	$tags_arr = array_unique($all_tags_arr);

	return $tags_arr;
}