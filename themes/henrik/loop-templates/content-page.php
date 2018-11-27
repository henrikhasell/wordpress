<?php the_post(); ?>
<article class="p-4">
	<h2><?php the_title(); ?></h2>
	<div class="py-2">
	<?php the_content(); ?>
	</div>
	<span class="small text-muted">
    <time>
      <?php the_time('F j, Y g:i a'); ?>
    </time> by
    <strong>
      <?php the_author(); ?>
    </strong>
  </span>
</article>
