<?php get_header(); ?>
<div class="container mb-4">
  <div class="row">
	  <div class="col-lg-8">
	    <?php
	    while(have_posts() == true)
	    {
		    get_template_part('loop-templates/content', get_post_format());
	    }
	    ?>
	  </div>
	  <div class="col-lg-4">
      <hr class="d-block d-lg-none"/>
		  <?php get_sidebar(); ?>
	  </div>
  </div>
</div>
<?php get_footer(); ?>
