<?php get_header(); ?>

  <!-- Begin Wrapper -->
  <div class="wrapper">
    <div class="inner light">
      <div class="page-intro clearfix">
        <h1 class="page-title"><?php the_title(); ?></h1>
      </div>
	  <section class="content full">
      <?php // Start Loop
            while (have_posts()) : the_post();
							
				the_content();
								
			endwhile;
			// End Loop
	?>
	      </section>
	<!-- Begin Sidebar -->
			<?php get_sidebar(); ?>
	    <!-- End Sidebar -->
    <div class="clear"></div>
      
    </div>
  </div>
  <!-- End Wrapper --> 
  
<?php get_footer(); ?>