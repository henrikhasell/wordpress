<?php the_post(); ?>
<div class="p-4">
	<h2><?php the_title(); ?></h2>
	<div class="py-2">
	<?php the_content(); ?>
	</div>
	<span class="small text-muted"><?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong></span>
</div>
