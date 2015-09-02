<?php
get_header();
?>
<body>
<!-- banner -->
<div class="row row--banner">
	<header class="row container-wide header" role="banner">
		<div class="header__logo">
			<img src="assets/img/logos/logo_bk.png" alt="Concussion Smarts">
		</div>

		<nav class="header__nav" role="navigation">
			<ul>
				<?php wp_nav_menu( array( 'menu' => 'main' ) ); ?>
			</ul>
		</nav>
	</header>
	<section class="row container-medium banner-content">
		<h1 class="banner-content__heading">
			Concussion Education Service
		</h1>
		<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
	</section>
</div>
<!-- freshest stories -->
<div class="row row--padding-wide fresh-stories">
	<div class="row container-wide">
			<div class="col-wide fresh-stories__story1">
				<h2 class="fresh-stories__heading">
					Story One
				</h2>
				<p>
					<img src='./assets/img/x.jpg' />
					 <span>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</span>
				</p>
			</div>
			<div class="col-wide fresh-stories__story2">
				<h2 class="fresh-stories__heading">
					Story Two
				</h2>
				<p>
				<img src='assets/img/bell.jpg' />
				<span>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</span> 

				</p>
			</div>
			<div class="col-wide fresh-stories__story3">
				<h2 class="fresh-stories__heading">
					Story Three
				</h2>
				<p>
					<img src='assets/img/head.jpg' />
					<span>Taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</span>
				</p>
			</div>
		</div>
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
		<img src="assets/img/photo1.jpg" alt="Writing on notepaper">
	</div>
	<div class="col-medium">
		<img src="assets/img/photo2.jpg" alt="Holding a mobile device showing a graph">
	</div>
</div>

<!-- testimonials -->
<div class="row row--white row--padding-wide testimonials">
	<section class="row container-narrow">
		<h3 class="testimonials__heading">
			What they are saying
		</h3>
		<img src="assets/img/avatar.jpg" alt="Robert Johnson - Avatar">
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
				<a href="#"><img src="assets/img/logo-solveable.png" alt="Solveable"></a>	
			</div>
			<div class="press__logos press__logos--nc">
				<a href="#"><img src="assets/img/logo-nc.png" alt="NC"></a>
			</div>
			<div class="press__logos press__logos--waratah">
				<a href="#"><img src="assets/img/logo-waratah.png" alt="The Waratah Post"></a>
			</div>
			<div class="press__logos press__logos--bevel">
				<a href="#"><img src="assets/img/logo-bevel.png" alt="The Bevel"></a>
			</div>
		</div>
	</section>
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