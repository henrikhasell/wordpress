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
		<div class="container text-center">
      <img class="img-fluid mt-4 mb-3" src="https://blackrockdigital.github.io/startbootstrap-freelancer/img/profile.png" alt="">
			<h1 class="display-1 m-0">
			    <?php echo get_bloginfo('name'); ?>
      </h1>
			<h2 class="font-weight-light text-muted mb-4">
			    <?php echo get_bloginfo('description'); ?>
      </h2>
			<hr/>
		</div>
