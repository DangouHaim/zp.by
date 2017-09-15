<?

add_action("init", "init_taxanomy", 0 );

function init_taxanomy () {
	register_post_type( 'slider',
		array(
			'labels' => array(
				'name' => 'Слайдер',
				'singular_name' =>'Слайд',
				'add_new' =>'Добавить новый',
				'add_new_item' => 'Добавить слайд'
				),
			'public' => true,
			'menu_position' => 20,
			'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields', 'excerpt', 'revisions', 'page-attributes' ),
			'hierarchical' => true,
			'has_archive' => false,
			'capability_type' => 'page'
			)
		);

	register_taxonomy(
		't_slider',
		'slider',
		array(
			'labels' => array(
				'name' => 'Слайды',
				),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,
			'query_var' => true,
			'show_in_nav_menus' => true
			)
		);

	register_taxonomy(
		't_post',
		'post',
		array(
			'labels' => array(
				'name' => 'Type',
				),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true,
			'query_var' => true,
			'show_in_nav_menus' => true
			)
		);
}