<?php
/**
 * The template for displaying category content
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
		<section class="row container-medium banner-content">
			<?php if( 'bio' == smbr_get_the_category() ) { ?>
				<h1 class='banner-content__heading_bio'><?php echo smbr_get_the_category() ?></h1>
				<span class='smbr-caption'>Karen Saevil-Turgeon - Concussion Educator</span>
			<?php } else { ?>
				<h1 class='banner-content__heading'><?php echo smbr_get_the_category() ?></h1>
			<?php } ?>
			<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
		</section>
	</header>	
</div>
<!-- freshest stories -->

<!-- <div class="row container-medium row--margin">
	<div class="row featured-content">
	</div>
</div> -->

<div id="smbr-content" class="row container-medium row--margin">
	<div class="row features__row">
		<div class="col-wide-stories stories__text">
			<?php
				$smbr_Device_Router = new sbmr_Device_Router();
				if ( 'mobile' == $smbr_Device_Router->get_device() ) {
					get_search_form();
				}
			?>
			<ul class="cs_widget__header-wigets">
			<?php
				// header widgets
				if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('category_index_header') );
			?>
			</ul>
			<?php
			  	// The Query
			  	while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
			?>
		</div>
		<div class="col-narrow-stories cs_widget ">
			
			<?php 
				$smbr_Device_Router = new sbmr_Device_Router();
				if ( 
					'desktop' == $smbr_Device_Router->get_device() || 
					'tablet' == $smbr_Device_Router->get_device() 
				) {
					get_search_form();
				}
			?>
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