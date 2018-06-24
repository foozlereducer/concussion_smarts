
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
			
			if ( is_category() || is_post() ) {
				if ( has_post_thumbnail() ) {
					echo  
					'<a href="'. esc_url( get_permalink() ) . '">' .
						'<span class="smbr-post-thumb">' .
							get_the_post_thumbnail( $post->ID, 'smbr_152' ) . 
						'</span>' . smb_generate_auto_excerpt( get_the_content(), 30 ) .
						strip_shortcodes( smb_generate_auto_excerpt( get_the_content(), 30 ) ) .
					'</a>';
				} else {
					echo 
					'<a href="'. esc_url( get_permalink() ) . '">' .
						strip_shortcodes( smb_generate_auto_excerpt( get_the_content(), 30 ) ) .
					'</a>';
				}
			} else {
				if ( has_post_thumbnail() ) {
					echo  
					'<a href="'. esc_url( get_permalink() ) . '">' .
						'<span class="smbr-post-thumb">' .
							get_the_post_thumbnail( $post->ID, 'smbr_1000' ) . 
						'</span>' .get_the_content() .
					'</a>';
				} else {
					echo 
					'<a href="'. esc_url( get_permalink() ) . '">' .
						get_the_content() .
					'</a>';
				}
			}


			?>
		</div>
	</article>
