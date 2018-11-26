<?php the_post(); ?>
<div class="p-4">
<h2><?php the_title(); ?></h2>
<p>
	<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
</p>
<?php the_content(); ?>
</div>
