<?php the_post(); ?>
<div class="bg-light p-4">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>
<hr/>
<p class="small">
	<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
</p>
