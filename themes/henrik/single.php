<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
      <?php
      while(have_posts() == true)
      {
        get_template_part('loop-templates/content-single', get_post_format());
      }
      ?>
		</div>
		<div class="col-md-4">
      <hr class="d-block d-md-none"/>
		  <?php get_sidebar(); ?>
	  </div>
	</div>
  <hr/>
  <div class="bg-light my-3 p-3">
    <?php
    if(comments_open() || get_comments_number())
    {
	    comments_template();
    }
    ?>
  </div>
</div>
<?php get_footer(); ?>
