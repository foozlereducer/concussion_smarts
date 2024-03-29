<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="en">
<?php
get_header();
?>
<body>
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

			<?php if( 'bio' == smbr_get_the_category() ) { ?>
				<span class='smbr-caption'>Karen Saevil-Turgeon - Concussion Educator</span>
			<?php } ?>
			<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
		</section>
	</header>
	
</div>
<!-- Story -->
<div id="smbr-content" class="row container-medium row--margin">
	<div class="row features__row">
		<div class="col-wide-stories stories__text">
			<h2 class="stories__heading">
				<?php the_post_thumbnail( 'page-featured-image' ); ?>
			</h2>
			<?php global $post ?>
			<?php echo apply_filters( 'the_content', $post->post_content ); ?>
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
			<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('story_side') ); ?>
	
		</div>
	</div>
</div>

<!-- footer -->
<div class="row row--dark-grey row--padding-medium footer">
<?php
	wp_footer();
	get_footer();
?>
</div>
</body>
</html>