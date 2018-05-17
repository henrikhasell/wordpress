<?php get_header(); ?>
<?php
while(have_posts() == true)
{
	get_template_part('content', get_post_format());
}
?>
<?php get_footer(); ?>
