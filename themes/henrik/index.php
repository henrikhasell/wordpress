<?php get_header(); ?>
<small><?php echo "Post format: " . get_post_format(); ?></small>
<?php
while(have_posts() == true)
{
	get_template_part('content', get_post_format());
}
?>
<?php get_footer(); ?>
