<?php
/**
 * sbmr-Modern-Responsive functions and definitions
 *
 * @package Modern-Responsive
 */

// Path of the parent theme
define('SBMR_DIR',__DIR__);
// Report all PHP errors
error_reporting(-1);
/**********************
funtions.php
***********************/

register_nav_menus();

/**********************
page title filter
***********************/
/*function sbmr_filter_wp_title( $currenttitle, $sep, $seplocal ) {
  $site_name = get_bloginfo( 'name' );
  $full_title = $site_name . $currenttitle;

  if ( is_front_page() || is_home() ) {
    $site_desc = get_bloginfo( 'description' );
    $full_title .= ' ' . $sep . ' ' . $site_desc;
  }
  return $full_title;
}*/

add_filter( 'wp_title', 'sbmr_filter_wp_title', 10, 3 );

/**********************
post query
***********************/
function sbmr_query_posts( $sbmr_args, $sbmr_is_where = false, $sbmr_where_filter_name = '' ) {

	if ( empty( $sbmr_is_where ) ) {
		return new WP_Query( $sbmr_args );
	} else {
		add_filter( 'posts_where', $sbmr_where_filter_name, 10, 3 );
		$sbmr_query = new WP_Query( $sbmr_args );
		remove_filter( 'posts_where',  $sbmr_where_filter_name );
		return $sbmr_query;
	}
}

/*
* where filters for post query
*/
function smbr_7_day_where( $where = '' ) {
    // posts in the last 10 days
    $where .= " AND post_date > '" . date( 'Y-m-d', strtotime( '-7 days' ) ) . "'";
    return $where;
}

/**********************
generate auto excerpt
***********************/
function sbmr_generate_auto_excerpt( $sbmr_content, $num_of_words ) {
	
	$sbmr_words = explode( ' ', $sbmr_content );
	$sbmr_excerpt = '';

	for ( $i = 0; $i <= $num_of_words; $i++ ) {
		$sbmr_excerpt .= $sbmr_words[ $i ] . " ";
	}

	return $sbmr_excerpt;
}



/**********************
display_fresh_posts
***********************/
function sbmr_display_fresh_posts() {
	// Start of the mini-loop, specifies which category to look in and how many posts to pull//
	$sbmr_args = array (
		'showposts' =>3
	);

	$sbmr_query = sbmr_query_posts( $sbmr_args, true, 'smbr_7_day_where' );

	if ( $sbmr_query->found_posts > 3 ) {

		while ( $sbmr_query->have_posts() ) : $sbmr_query->the_post();
		 	$do_not_duplicate = $post->ID;
		 	$sbmr_content = get_the_content();
			?>
			<div class="col-wide fresh-stories__story1">'
					<h2 class="fresh-stories__heading">
						<a href="<?php the_permalink(); ?>"><?php esc_attr( get_the_title() ); ?></a>
					</h2>
					<p>
						<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url') ?>/img/x.jpg" /></a>
						<span>
							<?php 
								
								$sbmr_excerpt = sbmr_generate_auto_excerpt( get_the_post(), 200 );
								
								if ( empty( $sbmr_excerpt ) ) {
									'no exerpt available';
								} else {
									echo( esc_attr( $sbmr_excerpt ) );
								}
							?>
							<a href="<?php get_permalink(); ?>"> more </a>
						</span>
						<span class="fresh-stories_meta">
							Posted on <?php esc_attr( the_time( 'F jS, Y' ) ) ?> at 
							<?php esc_attr( the_time( 'g:i a' ) ) ?> by 
							<?php esc_attr( the_author_posts_link() ) ?>
						</span>
					</p>
				</div>
			<?php
		endwhile;

		wp_reset_postdata();

	} else {
		$sbmr_args = array (
			'showposts' => 3,
			'orderby' => 'rand'
		);

		$sbmr_query = sbmr_query_posts( $sbmr_args );

		while ( $sbmr_query->have_posts() ) : $sbmr_query->the_post();
		 	$do_not_duplicate = $post->ID;
		 	$sbmr_excerpt = sbmr_generate_auto_excerpt( get_the_content(), 10 );
			?>
			<div class="col-wide fresh-stories__story1">
					<h2 class="fresh-stories__heading">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p>
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail( 'thumbnail' ) ?>" /></a>
						<span>
						<?php 	
							if ( empty( $sbmr_excerpt ) ) {
								'no exerpt available';
							} else {
								echo( $sbmr_excerpt );
							}
						?>
						<a href="<?php the_permalink(); ?>">more ...</a>
						</span>
					</p>
					<p>
						<span class="fresh-stories_meta">
							Posted on <?php esc_attr( the_time( 'F jS, Y' ) ) ?> at 
							<?php esc_attr( the_time( 'g:i a' ) ) ?> by 
							<?php esc_attr( the_author_posts_link() ) ?>
						</span>
					</p>
				</div>
			<?php
		endwhile;

		wp_reset_postdata();

	}
	
}

/**********************
Side bars
***********************/
if ( function_exists('register_sidebar') ) {
	
	/**********************
	Front Page Dynamic Sidebars
	***********************/
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