<?php
	global $post;

	$cats = get_the_category();
	$args = array( 'category_name' => $cats[0]->name );
	
  // The Query
  $wp_query = new WP_Query( $args );

  // The Loop
  if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) :
        
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
		<header class="entry-header">
			<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
			?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			$wp_query->the_post();
				echo smb_generate_auto_excerpt( get_the_content(), 30 );
			?>
		</div>
	</article>

<?php
  endwhile; endif;

  // Reset Post Data
  wp_reset_postdata();
?>
