<?php
get_header();

while(have_posts() == true)
{
	get_template_part('content', get_post_format());
}

get_footer();
?>
