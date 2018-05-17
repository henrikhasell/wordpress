<?php
function register_menus() {
	register_nav_menus(
		array(
			'top' => __('Top Menu', 'henrik'),
			'social' => __('Social Links Menu', 'henrik')
		)
	);
}

add_action('init', 'register_menus');
