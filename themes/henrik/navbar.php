<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-top" aria-controls="nav-top" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
		wp_nav_menu(array(
			'theme_location'  => 'top',
			'depth'           => 2,
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'nav-top',
			'menu_class'      => 'nav navbar-nav',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker()
		));
		?>
	</div>
</nav>