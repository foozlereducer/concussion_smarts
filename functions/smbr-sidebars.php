<?php

/**********************
Side bars
***********************/
if ( function_exists('register_sidebar') ) {
	
	/**********************
	Front Page Dynamic Sidebars
	***********************/

	register_sidebar(
		array(
			'name'=>'body_top_content',
			'description' => 'Top widget area. Used on the front-page ( this templates home page ).',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_top_l',
			'description' => 'Features top left widget area.',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_top_r',
			'description' => 'Features top right widget area.',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_mid_l',
			'description' => 'Features mid left widget area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_mid_r',
			'description' => 'Features mid right widget area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_bot_l',
			'description' => 'Features bottom left widget area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_bot_r',
			'description' => 'Features bottom right widget area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_mid_l',
			'description' => 'Mid left widget area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_mid_r',
			'description' => 'Mid right widget area',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'story_side',
			'description' => 'Side widget area for stories',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'header_call_to_action',
			'description' => 'Call to action in header, shows only on front-page ( home in this template )',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'=>'category_index_header',
			'description' => 'Category Index ( Atop each category page widget area',
			'before_widget' => '<li>',
			'after_widget' => '</li>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'category_index',
			'description' => 'Category side widget area, on the side of every category page',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'contact',
			'before_widget' => '',
			'description' => 'Contact side widget area',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'mid-mid',
			'description'=> 'White horizontal section used in the original design for testimonials',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'mid-mid2',
			'description' => 'White horizontal section ( above light blue section ), used in the original 
			design for facts',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<ul>',
			'after_title' => '</ul>',
		)
	);

	register_sidebar(
		array(
			'name'=>'mid3',
			'description' => 'Light blue horizontal section. Widget area for any general layout. Used in the original design for press',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name' => 'footer',
			'description' => 'Footer widget sidebar: it will show the same on all pages of your site.',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);
}