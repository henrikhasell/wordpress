<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
		<?php
		while(have_posts() == true)
		{
			get_template_part('loop-templates/content', get_post_format());
		}
		?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
