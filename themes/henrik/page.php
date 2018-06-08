<?php get_header(); ?>
<div class="container">
<?php
while(have_posts() == true)
{
	get_template_part('loop-templates/content', get_post_format());
}
?>
</div>
<?php get_footer(); ?>
