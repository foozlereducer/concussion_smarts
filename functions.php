<?php
/**
 * sbmr-Modern-Responsive functions and definitions
 *
 * @package Modern-Responsive
 */

// Path of the parent theme
define('SBMR_DIR',__DIR__);
// Report all PHP errors
error_reporting( E_ALL );
/**********************
funtions.php
***********************/

register_nav_menus();

/**********************
page title filter
***********************/
function sbmr_filter_wp_title( $currenttitle, $sep, $seplocal ) {
  $site_name = get_bloginfo( 'name' );
  $full_title = $site_name . $currenttitle;

  if ( is_front_page() || is_home() ) {
    $site_desc = get_bloginfo( 'description' );
    $full_title .= ' ' . $sep . ' ' . $site_desc;
  }
  return $full_title;
}

add_filter( 'wp_title', 'sbmr_filter_wp_title', 10, 3 );

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

}

function smbr__filter_wp_title( $currenttitle, $sep, $seplocal ) {
  $site_name = get_bloginfo( 'name' );
  $full_title = $site_name . $currenttitle;

  if ( is_front_page() || is_home() ) {
    $site_desc = get_bloginfo( 'description' );
    $full_title .= ' ' . $sep . ' ' . $site_desc;
  }
  return $full_title;
}
add_filter( 'wp_title', 'smbr_filter_wp_title', 10, 3 );


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

/*require_once( SBMR_DIR .'/functions/sbmr-device-router.php' );
$sbmr_Device_Router = new sbmr_Device_Router();*/
/**
 * Detect device
 */
/*function csmrt_get_device_type() {
	return $sbmr_Device_Router->get_device();
}*/

/* Directives below that run on each page load */

/*require_once( SBMR_DIR .'/functions/sbmr-site-functions.php');*/
?>