<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
    <?php if(is_home()) { ?>
		<title><?php echo get_bloginfo('name'); ?></title>
    <?php } else { ?>
		<title><?php the_title(); ?> - <?php echo get_bloginfo('name'); ?></title>
    <?php } ?>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/bootstrap.min.css" rel="stylesheet"/>
	</head>
	<body>
		<?php get_template_part('navbar', get_post_format()); ?>
		<div class="jumbotron text-center">
	      <img class="mb-3 rounded-circle" src="<?php echo get_bloginfo('template_directory'); ?>/henrik.png" alt="">
				<h1 class="display-1 m-0">
				    <?php echo get_bloginfo('name'); ?>
	      </h1>
				<h2 class="m-0 text-muted">
				    <?php echo get_bloginfo('description'); ?>
	      </h2>
		</div>
