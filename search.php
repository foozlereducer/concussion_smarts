<?php
/* Template Name: Search */ 
/**
 * The template for displaying search content
 *
 * Used for both category index pages..
 *
 * @package SMBR
 * @subpackage SMBR Mobile Responsive
 * @since SMBR Mobile Responsive 1.0
 */
?>

<?php
get_header();
?>

<body>
<!-- Category Page -->
<!-- banner -->
<?php smbr__category_banner(); ?>

	<header class="row container-wide header" role="banner">
		
		<div class="header__logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logos/logo_bk.png" alt="Concussion Smarts">
		</div>
	
		<?php
			require_once( trailingslashit( get_template_directory() ). 'nav-banner.php' );
		?>
		<section class="row container-medium banner-content">
			<h1 class='banner-content__heading'><?php echo smbr_get_the_category() ?></h1>
		</section>
	</header>
	
</div>

<div class="row row--white row--padding-wide features">
	<div class="row container-medium">
		<div class="row features__row">
			<?php get_search_form() ?>
			<ul class='smb-search'>
			<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2>Search Results for: <span>".get_query_var('s')."</span></h2>");
        echo '<h4>Found <span>' . $the_query->found_posts . '</span> matches </h4>';
        
        while ( $the_query->have_posts() ) {
   			$found_post = $the_query->the_post();
    		?><a href="<?php $found_post ?>"><?php get_template_part( 'content-search', 'search' );?></a> <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>
		</div>
	</div>
</div>

<!-- footer -->
<div id='smbr-footer' class="row row--dark-grey row--padding-medium footer">
<?php 
	wp_footer();
	get_footer();
?>	
</div><!-- .ow row--dark-grey row--padding-medium footer -->
</html>
