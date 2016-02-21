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
			'type' => 'click',
			'container' => 'smbr-content',
			'footer' => 'smbr-footer',
    		'posts_per_page' => 4,
		)
	);
}



function smbr_get_the_category() {
	$cats = get_the_category();
	
	if ( ! empty(  $_GET ) ) {
		// Search
		if ( isset( $_GET['s'] ) ) {
			return 'search';
		}
	} else if ( is_category() ) {
	 	return $cats[0]->name;
	} else if ( is_page() ) {
		return smbr_the_slug();
	} else if ( is_front_page() ) {
		return 'home';
	} else {
		return $cats[0]->name;
	}
}

function smbr_the_slug() {
	$post_data = get_post($post->ID, ARRAY_A );
	return $post_data['post_name'];
 }

function smbr__category_banner() {
	/**
	* Initialte the device router
	*/
	$smbr_Device_Router = new sbmr_Device_Router();

	switch ( smbr_get_the_category() ) {
		case 'bio':
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner_bio__mobile">' : '<div class="row row--banner_bio">'
				);
			break;
		case 'blog':
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner_blog__mobile">' : '<div class="row row--banner_blog">'
			);
			break;
		case 'contact':
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner_contact__mobile">' : '<div class="row row--banner_contact">'
			);
			break;
		case 'resources':
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner_resources__mobile">' : '<div class="row row--banner_resources">'
			);
			break;
		case 'francais':
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner_francais__mobile">' : '<div class="row row--banner_francais">'
			);
			break;
		case 'search':
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner_search__mobile">' : '<div class="row row--banner_search">'
			);
			break;
		default:
			echo(
				( 'mobile' == $smbr_Device_Router->get_device() ) ? '<div class="row row--banner row--banner_home__mobile">' : '<div class="row row--banner_home">'
			);
		 	break;
	}
}

/**********************
generate auto excerpt
***********************/
function smb_generate_auto_excerpt( $content, $num_of_words ) {
	
	if ( ! empty( $content ) ) {
		$words = explode( ' ', $content );
		
		if ( count( $words ) < $num_of_words ) {
			return $content;
		}

		$excerpt = '';

		if ( ! empty( $words ) ) {
			for ( $i = 0; $i <= $num_of_words; $i++ ) {

				$excerpt .= $words[ $i ] . " ";
			}

			return $excerpt;
		}

		return '';
	}
	
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




