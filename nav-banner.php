		<?php
		
			if ( 'bio' == smbr_get_the_category() ) {
				?>
				<nav class="header__nav nav_bio" role="navigation">
				<?php
			} else {
				?>
				<nav class="header__nav" role="navigation">
				<?php
			}
		
			$nav_settings = array(
				'theme_location'  => '',
				'menu'            => 'main_menu',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => ''
			);

			wp_nav_menu( $nav_settings );
		?>
		</nav>

		