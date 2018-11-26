<?php the_post(); ?>
<div class="p-4">
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	<p>
		<?php the_time('F j, Y g:i a'); ?> by <strong><?php the_author(); ?></strong>
	</p>
  <div>
	  <?php echo get_the_excerpt(); ?>
  </div>
</div>
<?php if (($wp_query->current_post +1) != ($wp_query->post_count)) {
  echo '<hr/>';
} ?>
