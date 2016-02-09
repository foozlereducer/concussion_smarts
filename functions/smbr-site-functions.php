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
function smbr_jetpack_setup() {
	add_theme_support(
		'infinite-scroll',
		array(
			'container' => 'smbr-content',
			'footer' => 'smbr-footeru',
    		'posts_per_page' => 5,
		)
	);
}

function smbr__category_banner() {

	$cats = get_the_category();
	switch ( $cats[0]->name ) {
		case 'resources':
			echo '<div class="row row--banner_resources">';
			break;
		case 'contact':
			echo '<div class="row row--banner_contact">';
			break;
		default:
			echo '<div class="row row--banner_cs_widget">';
		 	break;
	}
}

/**********************
generate auto excerpt
***********************/
function smb_generate_auto_excerpt( $content, $num_of_words ) {
	
	$words = explode( ' ', $content );
	$excerpt = '';

	for ( $i = 0; $i <= $num_of_words; $i++ ) {
		$excerpt .= $words[ $i ] . " ";
	}

	return $excerpt;
}

/*require_once( SBMR_DIR .'/functions/sbmr-device-router.php' );
$sbmr_Device_Router = new sbmr_Device_Router();*/
/**
 * Detect device
 */
/*function csmrt_get_device_type() {
	return $sbmr_Device_Router->get_device();
}*/

/* Directives below that run on each page load */




