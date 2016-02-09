<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="en">
<?php
get_header();
?>
<body>
<!-- banner -->
<div class="row row--banner_cs_widget">
	<header class="row container-wide header" role="banner">
		
		<div class="header__logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logos/logo_bk.png" alt="Concussion Smarts">
		</div>
	
		<?php
		require_once( trailingslashit( get_template_directory() ). 'nav-banner.php' );
		?>
		<section class="row container-medium banner-content__heading_bio">
			<h1 class='banner-content_heading_layout '>Stories</h1>
			<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
		</section>
	</header>
	
</div>
<!-- freshest stories -->
<div class="row container-medium row--margin">
	<div class="row features__row">

		<div class="col-wide-stories stories__text">
			<h2 class="stories__heading">
				<?php the_post_thumbnail( 'page-featured-image' ); ?>
			</h2>
			<?php global $post ?>
			<?php echo the_content( $post ); ?>
		</div>
		<aside class="col-narrow-stories cs_widget ">
			<div class="cs_widget__row">
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('story_type_one') ); ?>
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('story_type_two') ); ?>
				<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('story_type_three') ); ?>
			</div>
		</side>
	</div>
</div>

<!-- footer -->
<div class="row row--dark-grey row--padding-medium footer">
	<footer class="row container-wide" role="contentinfo">
		<div class="col-wide footer__info">
			<div class="footer__logo">
				<img src="assets/img/logos/concussion_smarts_final_small.png" alt="concussion smarts">
			</div>
			<div class="row">
				<div class="col-medium">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
				<div class="col-medium">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Google+</a></li>
					</ul>
				</div>
			</div>
			<div class="row footer__copyright">
				<ul>
					<li>&copy; 2015 Concussion Smarts inc.</li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms</a></li>
				</ul>
			</div>
		</div>
		<div class="col-narrow--right footer__cta">
			<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a>
		</div>
	</footer>
</div>
</body>
</html>