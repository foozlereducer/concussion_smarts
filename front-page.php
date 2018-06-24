<?php
get_header();
?>
<body <?php body_class( 'container' ); ?> >
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
	</header>
	<section class="row container-medium banner-content">
		<h1 class="banner-content__heading">
			Concussion Education Service
		</h1>
		<div class='banner-call-to-action'>
			<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('header_call_to_action') ); ?>
		</div>
	</section>
</div>

<!-- freshest stories -->
<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('body_top_content') ); ?>
	
<!-- features -->
<div class="row row--white row--padding-wide features">
	<div class="row container-medium">
		<div class="row features__row">
			
			<div class="col-narrow--right"> <!-- features__top -->
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_features_top_l') ); ?>
			</div>
			<div class="col-wide">
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_features_top_r') ); ?>
			</div>
		</div>
		<div class="row features__row">
			<div class="col-narrow">
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_features_mid_l') ); ?>
			</div>
			<div class="col-wide--right features__padding">
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_features_mid_r') ); ?>		
			</div>
		</div>
		<div class="row features__row">
			<div class="col-narrow--right">
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_features_bot_l') ); ?>
			</div>
			<div class="col-wide">
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_features_bot_r') ); ?>
			</div>
		</div>
	</div>
</div>

<!-- photos -->
<div class="row">
	<div class="col-medium">
		<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_mid_l') ); ?>
	</div>
	<div class="col-medium">
		<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('front_page_mid_r') ); ?>
	</div>
</div>

<!-- testimonials -->
<div class="row row--white row--padding-wide testimonials">
	<section class="row container-narrow">
		<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('mid-mid') ); ?>
	</section>
</div>

<!-- facts -->
<div class="row row--grey row--padding-wide facts">
	<section class="row container-narrow facts-intro">
		<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('mid-mid2') ); ?>
	</section>
</div>

<!-- press -->
<div class="row row--blue row--padding-medium press">
	<section class="row container-wide">
		<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('mid-mid3') ); ?>
	</section>
</div>

<!-- footer -->
<div class="row row--dark-grey row--padding-medium footer">
	<?php get_footer(); ?>
</div>
</body>
</html>
