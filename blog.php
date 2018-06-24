<?php
/* Template Name: Blog */ 
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
			<div class='search-clear'>
			<?php 
				$smbr_Device_Router = new sbmr_Device_Router();
				if ( 
					'desktop' == $smbr_Device_Router->get_device() || 
					'tablet' == $smbr_Device_Router->get_device() 
				) {
					get_search_form();
				}
			?>
			</div>

			<?php
				query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged'));
				if( have_posts() ) {
					while( have_posts() ): the_post();
				?>
						<div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<a href="<?php the_permalink(); ?>">
						<p>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'smbr_300' ); ?></a>
						</p>
                		<p>
							<span class="fresh-stories_meta">
								Posted on <?php esc_attr( the_time( 'F jS, Y' ) ) ?> at 
								<?php esc_attr( the_time( 'g:i a' ) ) ?> by 
								<?php esc_attr( the_author_posts_link() ) ?>
							</span>
						</p>
						
						<?php the_excerpt(__('Continue reading »','example')); ?>
						</a>
            			</div><!-- /#post-<?php get_the_ID(); ?> -->
						<hr/>
        			<?php endwhile; ?>

		<div class="navigation">
			<span class="newer"><?php previous_posts_link(__('« Newer')) ?></span> <span class="older"><?php next_posts_link(__('Older »')) ?></span>
		</div><!-- /.navigation -->

	<?php } else { ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php } wp_reset_query(); ?>

	</div><!-- /#content -->
		</div>
		<div class="col-narrow-stories cs_widget ">

			<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar('contact') ); ?>
	
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