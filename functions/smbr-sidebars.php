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
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_top_l',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_top_r',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_mid_l',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_mid_r',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_bot_l',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_features_bot_r',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_mid_l',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'front_page_mid_r',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'category_index',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'story_type_one',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'story_type_two',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'=>'story_type_three',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		)
	);
}