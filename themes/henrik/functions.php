<?php
require_once get_template_directory() . '/plugins/class-wp-bootstrap-navwalker.php';

function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}

class Empty_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()){
	}
	function end_lvl(&$output, $depth = 0, $args = array()) {
	}
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	}
	function end_el(&$output, $item, $depth = 0, $args = array()) {
	}
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
	}
}

class Minimal_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()){
		$output .= "<ol>";
	}
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "</ol>";
	}
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$output .= '<li><a href = "' . esc_attr($item->url) . '">';
	}
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</a></li>";
	}
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		$this->start_el($output, $element, $depth, $args);
		$output .= $element->title;
		$this->end_el($output, $element, $depth, $args);
	}
}

function register_menus() {
	register_nav_menus(
		array(
			'top' => __('Top Menu', 'henrik'),
			'social' => __('Social Links Menu', 'henrik')
		)
	);
}

add_action('init', 'register_menus');
