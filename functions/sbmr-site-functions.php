<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Concussions-Smarts
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function sbmr_jetpack_setup() {
	add_theme_support(
		'infinite-scroll',
		array(
			'container' => 'main',
			'footer'    => 'page',
		)
	);
}



