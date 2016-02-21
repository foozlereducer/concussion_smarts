<h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
<li>
    <a href="<?php esc_url( get_permalink() ); ?>">
		<span class="smbr-post-thumb">
			<?php echo get_the_post_thumbnail( $post->ID, 'smbr_152' ) ?>
		</span>
		<?php 
		ob_start();
		the_content();
		$p = ob_get_clean();
		echo smb_generate_auto_excerpt( $p, 30 ) ?>
	</a>
</li>
	