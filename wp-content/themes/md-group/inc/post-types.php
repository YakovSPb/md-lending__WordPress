<?php
	function yak_create_post_type() {
		register_post_type( 'catalog',
			array(
				'labels' => array(
					'name' => 'Каталог',
					'singular_name' => 'Каталог',
				),
				'menu_icon' => 'dashicons-images-alt2',
				'public' => true,
				'rewrite' => 'catalogs',
				'has_archive' => true,	
				'supports' => array('title', 'editor', 'thumbnail'),
			)
		);
		register_post_type( 'cases',
			array(
				'labels' => array(
					'name' => 'Наши работы',
					'singular_name' => 'Наша работа',
				),
				'menu_icon' => 'dashicons-portfolio',
				'public' => true,
				'rewrite' => 'cases',
				'has_archive' => true,	
				'supports' => array('title', 'editor', 'thumbnail'),
			)
		);
	}
	add_action('init', 'yak_create_post_type');


// REGISTER TAXONOMY
function custom_taxonomy_for_site() {
	register_taxonomy(
		'mytypes', 'catalog',		//первое айдишик, второе к какому post-type
		array(
			'label' => 'Типы ограждений',
			'public'=> true,
			'rewrite' => false,
			'hierarchical' => true,
		)
	);	register_taxonomy(
		'mytypes2', 'cases',		//первое айдишик, второе к какому post-type
		array(
			'label' => 'Типы ограждений',
			'public'=> true,
			'rewrite' => false,
			'hierarchical' => true,
		)
	);
}

add_action( 'init', 'custom_taxonomy_for_site' );


	?>