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
					Story One
				</h2>
				<p>
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
				</p>
			
				<p>
					 orem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. 
				</p>
				<p>
				Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. 
				</p>
				<p>
				Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. 
				</p>
				<p>
				Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. 
				</p>
		</div>
		<div class="col-narrow-stories cs_widget ">
			<div class="cs_widget__row">
				<div class="features__bike ">
				</div>
			</div>
			<div class="cs_widget__row">
				<div class="features__bike ">
				</div>
			</div>
			<div class="cs_widget__row">
				<div class="features__bike ">
				</div>
			</div>
			<div class="cs_widget__row">
				<div class="features__bike ">
				</div>
			</div>
			<div class="cs_widget__row">
				<div class="features__bike ">
				</div>
			</div>
			<div class="cs_widget__row">
				<div class="features__bike ">
				</div>
			</div>
		</div>
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