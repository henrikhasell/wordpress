<?php the_post(); ?>
<h2><?php the_title(); ?></h2>
<p>
	<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
</p>
<?php the_content(); ?>
