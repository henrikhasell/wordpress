<!doctype html>
<html lang="en">
	<head>
		<title>Henrik Hasell</title>
		<meta charset="utf-8"/>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"/>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php wp_nav_menu(array('theme_location' => 'top')); ?>
		<h1><?php echo get_bloginfo('name'); ?></h1>
		<h2><?php echo get_bloginfo('description'); ?></h2>
