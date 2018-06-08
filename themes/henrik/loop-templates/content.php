<?php the_post(); ?>
<div>
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	<p>
		<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
	</p>
	<?php the_excerpt(); ?>
</div>