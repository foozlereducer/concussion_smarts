<?php
get_header();
?>
<body <?php body_class( 'container' ); ?> >
<!-- banner -->
<div class="row row--banner">
	<header class="row container-wide header" role="banner">
		<div class="header__logo">
			<img src="<?php bloginfo('template_url'); ?>/img/logos/logo_bk.png" alt="Concussion Smarts">
		</div>
		<?php
		require_once( trailingslashit( get_template_directory() ). 'nav-banner.php' );
		?>
	</header>
	<section class="row container-medium banner-content">
		<h1 class="banner-content__heading">
			Concussion Education Service
		</h1>
		<!--<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/icon-cta.png" alt="App store"></a> -->
	</section>
</div>
<!-- freshest stories -->
<div class="row row--padding-wide fresh-stories">
	<div class="row container-wide">
	<?php
		sbmr_display_fresh_posts();
	?>
	</div>
</div>
<!-- features -->
<div class="row row--white row--padding-wide features">
	<div class="row container-medium">
		<div class="row features__row">
			<div class="col-narrow--right features__bike">
			</div>
			<div class="col-wide">
				<h2 class="features__heading">
					Easy To Get Started...
					Easy To Get Started...
					Easy To Get Started...
				</h2>
				<p class="features__text">
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
				</p>
			</div>
		</div>
		<div class="row features__row">
			<div class="col-narrow features__phone">
			</div>
			<div class="col-wide--right features__padding">
				<h2 class="features__heading">
					Facilitator Lead Sessions
				</h2>
				<p class="features__text">
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
				</p>			
			</div>
		</div>
		<div class="row features__row">
			<div class="col-narrow--right features__safe">
			</div>
			<div class="col-wide">
				<h2 class="features__heading">
					Training Packages
				</h2>
				<p class="features__text">
					Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
				</p>
			</div>
		</div>
	</div>
</div>

<!-- photos -->
<div class="row">
	<div class="col-medium">
		<img src="<?php bloginfo('template_url'); ?>/img/photo1.jpg" alt="Writing on notepaper">
	</div>
	<div class="col-medium">
		<img src="<?php bloginfo('template_url'); ?>/img/photo2.jpg" alt="Holding a mobile device showing a graph">
	</div>
</div>

<!-- testimonials -->
<div class="row row--white row--padding-wide testimonials">
	<section class="row container-narrow">
		<h3 class="testimonials__heading">
			What they are saying
		</h3>
		<img src="<?php bloginfo('template_url'); ?>/img/avatar.jpg" alt="Robert Johnson - Avatar">
		<blockquote>
			<p class="testimonials__quote">
				<em>"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur"</em>
			</p>
			<p class="testimonials__source">
				Robert Johnson
			</p>
		</blockquote>
	</section>
</div>

<!-- facts -->
<div class="row row--grey row--padding-wide facts">
	<section class="row container-narrow facts-intro">
		<h3 class="facts-intro__heading">
			A few facts
		</h3>
		<p class="facts-intro__text">
			Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.
		</p>
	</section>
	<div class="row container-medium facts-list">
		<div class="col-narrow">
			<span class="facts-list__icons facts-list__id"></span>
			<h4 class="facts-list__heading">2,000,000</h4>
			<p class="facts-list__text">Lorem ipsum</p>
		</div>
		<div class="col-narrow">
			<span class="facts-list__icons facts-list__eye"></span>
			<h4 class="facts-list__heading">11,000,000</h4>
			<p class="facts-list__text">Lorem ipsum</p>
		</div>
		<div class="col-narrow">
			<span class="facts-list__icons facts-list__timer"></span>
			<h4 class="facts-list__heading">5 minutes</h4>
			<p class="facts-list__text">Lorem ipsum</p>
		</div>
		<div class="col-narrow">
			<span class="facts-list__icons facts-list__chart"></span>
			<h4 class="facts-list__heading">40%</h4>
			<p class="facts-list__text">Lorem ipsum</p>
		</div>
	</div>
</div>

<!-- press -->
<div class="row row--blue row--padding-medium press">
	<section class="row container-wide">
		<h3 class="press__heading">
			Recent press
		</h3>
		<div class="row">
			<div class="press__logos press__logos--solvable">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo-solveable.png" alt="Solveable"></a>	
			</div>
			<div class="press__logos press__logos--nc">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo-nc.png" alt="NC"></a>
			</div>
			<div class="press__logos press__logos--waratah">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo-waratah.png" alt="The Waratah Post"></a>
			</div>
			<div class="press__logos press__logos--bevel">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo-bevel.png" alt="The Bevel"></a>
			</div>
		</div>
	</section>
</div>

<!-- footer -->
<div class="row row--dark-grey row--padding-medium footer">
	<?php get_footer(); ?>	
</div>
</body>
</html>