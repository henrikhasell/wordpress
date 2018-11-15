<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title>Henrik Hasell</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		<?php get_template_part('navbar', get_post_format()); ?>
		<div class="container text-center ">
			<h1 class="display-1"><?php echo get_bloginfo('name'); ?></h1>
			<h2 class="font-weight-light text-muted"><?php echo get_bloginfo('description'); ?></h2>
			<hr/>
		</div>
