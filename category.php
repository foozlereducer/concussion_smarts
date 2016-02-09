<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package SMBR
 * @subpackage SMBR Mobile Responsive
 * @since SMBR Mobile Responsive 1.0
 */
?>

<?php
get_header();
?>

<body <?php body_class(); ?> >
<!-- Category Page -->
<!-- banner -->
<?php smbr__category_banner(); ?>

	<header class="row container-wide header" role="banner">
		<div class="header__logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logos/logo_bk.png" alt="Concussion Smarts">
		</div>
		<?php 
			// slider here 
			require_once( trailingslashit( get_template_directory() ). 'nav-banner.php' );
		?>
		<section class="row container-medium banner-content__heading_bio">
			<h1 class='banner-content_heading_layout '><?php the_category() ?></h1>
			<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
		</section>
	</header>
	
</div>
<!-- freshest stories -->

<div class="row container-medium row--margin">
	<div class="row featured-content">
	</div>
</div>

<div id="smbr-content" class="row container-medium row--margin">
	<div class="row features__row">
		<div class="col-wide-stories stories__text">
			<?php get_template_part( 'content' ); ?>
		</div>
		<div class="col-narrow-stories cs_widget ">
			<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('category_index') ); ?>
	
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