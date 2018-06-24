<?php
/**
 * Add custom image sizes for Postmedia
 */
function smbr_custom_image_sizes() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'smbr_100', 100, 100 ); // 100 pixels wide used for fresh posts;
	add_image_size( 'smbr_240', 240, 155 ); // 240 pixels wide
	add_image_size( 'smbr_455', 455, 300 ); // 455 pixels wide 
	add_image_size( 'smbr_storyline', 475, 356, true ); // 475 pixels wide (and 356 height, crop the images)
	add_image_size( 'smbr_700', 700, 9999 ); // 700 pixels wide (and unlimited height)
	add_image_size( 'smbr_925', 925, 9999 ); // 925 pixels wide (and unlimited height)
	add_image_size( 'smbr_1000', 1000, 9999 ); // 925 pixels wide (and unlimited height) this is full width as of 13 Feb 2014
	add_image_size( 'smbr_236', 236, 132, true );
	add_image_size( 'smbr_630', 630, 550, true ); // 630 mobile banner
	add_image_size( 'smbr_300', 300, 170, true ); // Head posts
	add_image_size( 'smbr_newsletter_main', 378, 260, true ); // Head posts
	add_image_size( 'smbr_newsletter_thumb', 141, 96, true ); // Head posts
	//Based on Image optimization request
	add_image_size( 'smbr_660', 660, 495, true ); // 660 pixels wide 
	add_image_size( 'smbr_323', 323, 243, true ); // 323 pixels wide 
	add_image_size( 'smbr_310', 310, 232, true ); // 310 pixels wide 
	add_image_size( 'smbr_206', 206, 155, true ); // 206 pixels wide 
	add_image_size( 'smbr_152', 152, 114, true ); // 152 pixels wide 
	add_image_size( 'smbr_140', 140, 105, true ); // 140 pixels wide 
}
add_action( 'after_setup_theme', 'smbr_custom_image_sizes' );

add_filter( 'image_size_names_choose', 'smb_custom_sizes' );
 
function smb_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
		'smbr_100' => __( '100 pixels wide' ),
		'smbr_240' => __( '240 pixels wide' ),
		'smbr_455' => __( '455 pixels wide' ),
		'smbr_storyline' => __( '475 pixels wide (and 356 height, crop the images)' ),
		'smbr_700' => __( '700 pixels wide' ),
		'smbr_925' => __( '925 pixels wide' ),
		'smbr_1000' => __( 'full pixels wide' ),
		'smbr_236' => __( '236 pixels wide and 132 pixels high' ),
		'smbr_630' => __( '630 mobile banner' ),
		'smbr_300' => __( '300 pixels wide by 170 high' ),
		'smbr_newsletter_main' => __( '378 wide by 260 high' ),
		'smbr_newsletter_thumb' => __( '141 wide by 96 high' ),
		'smbr_660' => __( '660 wide by 495 high ( Image optimizaiton request )' ),
		'smbr_323' => __( '323 wide by 243 high ( Image optimizaiton request )' ),
		'smbr_310' => __( '310 wide by 232 high ( Image optimizaiton request )' ),
		'smbr_206' => __( '206 wide by 155 high ( Image optimizaiton request )' ),
		'smbr_152' => __( '152 wide by 114 high ( Image optimizaiton request )' ),
		'smbr_140' => __( '140 wide by 105 high ( Image optimizaiton request )' ),
    ) );
}

/**********************
page title filter
***********************/
function smbr_filter_wp_title( $currenttitle, $sep, $seplocal ) {
  $site_name = get_bloginfo( 'name' );
  $full_title = $site_name . $currenttitle;

  if ( is_front_page() || is_home() ) {
    $site_desc = get_bloginfo( 'description' );
    $full_title .= ' ' . $sep . ' ' . $site_desc;
  }
  return $full_title;
}

add_filter( 'wp_title', 'smbr_filter_wp_title', 10, 3 );

/**********************
after_setup_theme action
***********************/
