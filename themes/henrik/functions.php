<?php
function register_menus() {
	register_nav_menus(
		array(
			'top' => __('Top Menu', 'henrik'),
			'social' => __('Social Links Menu', 'henrik')
		)
	);
	add_theme_support(
		'starter-content',
		'nav_menus' => array(
			'top' => array(
				'name' => __('Top Menu', 'henrik'),
				'items' => array(
					'link_home',
					'page_about',
					'page_blog',
					'page_contact',
				)
			)
		)
	);
}

add_action('init', 'register_menus');
