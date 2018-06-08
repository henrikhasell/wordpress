<?php
get_header();

while(have_posts() == true)
{
	get_template_part('loop-templates/content', get_post_format());
}

get_footer();
?>
