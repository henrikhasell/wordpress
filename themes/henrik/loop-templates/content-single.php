<?php the_post(); ?>
<article class="p-4">
<header>
  <h2><?php the_title(); ?></h2>
</header>
<p>
	<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
</p>
<?php the_content(); ?>
</article>
