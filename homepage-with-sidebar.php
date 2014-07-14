<?php /* Template Name: Homepage with Sidebar */ ?>
<?php get_header(); ?>

<!-- Begin Wrapper -->
  <div class="wrapper">
    <!-- Custom Homepage -->
    <div class="inner <?php echo vp_option('page_color'); ?>">
    	<section class="content full">
    
        <?php
	  	$custom_page = vp_option('custom_page_id');		
		query_posts('page_id='.$custom_page);
		
			while ( have_posts() ) : the_post(); 
			
				the_content();
			
			endwhile;
		?>
		</section>
        <!-- Begin Sidebar -->
			<?php get_sidebar(); ?>
	    <!-- End Sidebar -->
    <div class="clear"></div>
    </div>
    <!-- End Custom Homepage -->    
  </div>
  <!-- End Wrapper -->
  
<?php get_footer(); ?>