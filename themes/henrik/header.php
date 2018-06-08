<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title>Henrik Hasell</title>
		<meta charset="utf-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.min.css" rel="stylesheet"/>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"/>
	</head>
	<body>
		<div class = "henrik-scroll">
			<div class = "container">
				<?php get_template_part('navbar', get_post_format()); ?>
				<h1><?php echo get_bloginfo('name'); ?></h1>
				<h2><?php echo get_bloginfo('description'); ?></h2>
				<hr/>