<?php

function custom_post_types() {

	// Agenda Cultural
	register_post_type( 'cultural_schedule',

		array(
			'labels'              => array(
				'name'               => __( 'Agenda Cultural', 'portalczn' ),
				'singular_name'      => __( 'Agenda Cultural', 'portalczn' ),
				'all_items'          => __( 'Todos os eventos', 'portalczn' ),
				'add_new'            => __( 'Adicionar novo', 'portalczn' ),
				'add_new_item'       => __( 'Adicionar novo evento', 'portalczn' ),
				'edit'               => __( 'Editar', 'portalczn' ),
				'edit_item'          => __( 'Editar evento', 'portalczn' ),
				'new_item'           => __( 'Novo evento', 'portalczn' ),
				'view_item'          => __( 'Ver evento', 'portalczn' ),
				'search_items'       => __( 'Buscar evento', 'portalczn' ),
				'not_found'          => __( 'Evento não encontrado.', 'portalczn' ),
				'not_found_in_trash' => __( 'Não encontrado na lixeira', 'portalczn' ),
				'parent_item_colon'  => ''
			),
			'description'         => __( 'Agenda cultural de eventos', 'portalczn' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui'             => true,
			'query_var'           => true,
			'menu_position'       => 8,
			'menu_icon'           => 'dashicons-camera-alt',
			'rewrite'             => array( 'slug' => 'agenda', 'with_front' => false ),
			'has_archive'         => 'agenda',
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'supports'            => array( 'title', 'thumbnail', 'revisions' )
		)
	);

}

add_action( 'init', 'custom_post_types' );