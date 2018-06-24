<?php
/* Template Name: Bio */ 
get_header();
?>
<body>
<!-- banner -->
<?php smbr__category_banner(); ?>
	<header class="row container-wide header" role="banner">
		<ul class="header__inline_list">
			<div class="header__logo">
				<img src="<?php bloginfo('template_url'); ?>/img/logos/logo_bk.png" alt="Concussion Smarts">
			</div>
		</ul>
		<?php
			require_once( trailingslashit( get_template_directory() ). 'nav-banner.php' );
		?>
		<section class="row container-medium banner-content__heading_bio">
			<h1 class='banner-content_heading_layout '>Karen's Bio</h1>
			<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
		</section>
	</header>
	
</div>
<!-- bio -->
<!-- freshest stories -->
<div class="row container-medium row--margin">
	<div class="row features__row">

		<div class="col-wide-stories stories__text">
			<h2 class="stories__heading">
				<?php  the_post_thumbnail( 'page-featured-image' ); ?>
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
			<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('bio') ); ?>
	
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