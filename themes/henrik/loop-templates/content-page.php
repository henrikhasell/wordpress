<?php the_post(); ?>
<div>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<hr/>
	<p class="small">
		<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
	</p>
</div>
