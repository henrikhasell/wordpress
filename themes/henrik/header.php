<!doctype html>
<html lang="en">
	<head>
		<title>Henrik Hasell</title>
		<meta charset="utf-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		<div class = "container">
			<?php wp_nav_menu(array('theme_location' => 'top', 'container' => 'nav', 'container_class' => 'navbar navbar-dark bg-dark')); ?>
			<h1><?php echo get_bloginfo('name'); ?></h1>
			<h2><?php echo get_bloginfo('description'); ?></h2>
			<hr/>