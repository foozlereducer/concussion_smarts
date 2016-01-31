<?php
get_header();
( ! isset( $class ) ? $class = get_body_class( $class ) : nothing );
$class = implode( ',', $class );
?>

<body <?php body_class() ?> >
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
			<h1 class='banner-content_heading_layout '>Stories</h1>
			<!--<a href="#"><img src="assets/img/icon-cta.png" alt="App store"></a> -->
		</section>
	</header>
	
</div>
<!-- freshest stories -->

<div class="row container-medium row--margin">
	<div class="row ">
			<div class="col-wide-stories stories__text">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
				
					<h2><a href="<?php the_permalink(); ?>" title="For More Info on <?php
        				the_title_attribute(); ?>"><?php the_title(); ?></a>
        			</h2>
    				<?php the_content(); ?>
				<?php endwhile; else: ?>
			   		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			  	<?php endif; ?>
			  	</article>
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
<?php 
	wp_footer();
	get_footer();
?>	
</div>
</html>