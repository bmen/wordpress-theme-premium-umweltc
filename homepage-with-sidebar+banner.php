<?php /* Template Name: Homepage with Sidebar and Banner */ ?>
<?php get_header(); ?>

<!-- Begin Wrapper -->
  <div class="wrapper">
  	  	<?php if( vp_option('slider_enable') == '1'){ ?>
    <div class="inner light">
      <div class="bannercontainer">
        <div class="banner">
          <ul>
          	
            <?php
			$args = array( 'numberposts' => -1, 'order'=> 'DESC', 'post_type' => 'slider');
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post);
			?>
            
            <?php if( vp_metabox('slider_option.slider_position') == 'left'){ ?>
            
            <!-- Left -->
            <li data-transition="fade">
            <?php the_post_thumbnail('slider'); ?>
            
            <div class="caption sft navy-bg" data-x="70" data-y="70" data-speed="300" data-start="1500" data-easing="easeOutExpo">
            <?php the_title(); ?>
            </div>
            
           <div class="caption sfl" data-x="70" data-y="151" data-speed="300" data-start="2100" data-easing="easeOutExpo">
               <div class="text-description">
               <?php echo vp_metabox('slider_option.slider_description'); ?>
               </div>
           </div>
           </li>
           <!-- Left -->
           
           <?php }elseif( vp_metabox('slider_option.slider_position') == 'right'){ ?>
           
           <!-- right -->
            <li data-transition="fade">
            <?php the_post_thumbnail('slider'); ?>
            
            <div class="caption navy-bg sft" data-x="600" data-y="80" data-speed="300" data-start="1500" data-easing="easeOutExpo">
            <?php the_title(); ?>
            </div>
            
           <div class="caption sfr" data-x="600" data-y="150" data-speed="300" data-start="2100" data-easing="easeOutExpo">
               <div class="text-description">
               <?php echo vp_metabox('slider_option.slider_description'); ?>
               </div>
           </div>
           </li>
           <!-- right -->
           
           <?php } ?>
           
           <?php wp_reset_query(); endforeach; ?>
           
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
    </div>
    <?php } ?>

    
    <?php if( vp_option('action_enable') == '1'){ ?>
    <div class="inner <?php echo vp_option('calltoaction_color'); ?>">
      <div class="aligncenter">
        <h1 class="lined"><?php echo vp_option('action_text'); ?></h1>
        <p class="description"><?php echo vp_option('action_sub'); ?></p>
        <a href="<?php echo vp_option('action_link'); ?>" class="button big"><?php echo vp_option('action_button'); ?></a> </div>
    </div>
    <?php } ?>
    

    <?php if( vp_option('services_enable') == '1'){ ?>
    <div class="inner <?php echo vp_option('service_color'); ?>">
      <h2><?php echo vp_option('services_title'); ?></h2>
      <p><?php echo vp_option('services_desc'); ?></p>
      <br />
      
      <div class="services">
      
      <?php
	  $args = array(
		'order'    => 'DESC',
		'posts_per_page' => -1,
		'post_type' => 'services'
	  );
								
	  query_posts($args);
	  while ( have_posts() ) : the_post();
	  ?>
      
        <div class="one-half <?php echo (($wp_query->current_post%2==0)?'first':'last'); ?>">
        <i class="<?php echo vp_metabox('service_option.service_icon') ?> special"></i>
          <div class="info">
            <h3 class="lined"><?php the_title(); ?></h3>
            <p><?php echo vp_metabox('service_option.service_text') ?></p>
          </div>
        </div>
        <?php echo (($wp_query->current_post%2==0)?'':'<br>'); ?>

     <?php endwhile; ?>
        
        <div class="clear"></div>
      </div>
    </div>
    <?php } ?>
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
     <div class="inner dark">
      <h3>Aktuelle Projekte <a style="font-size:16px;" href="/projekte">(Alle Projekte)</a></h3>
      <div class="grid-wrapper">
      <ul class="items">
      
      <?php $args = array( 'numberposts' => 4, 'order'=> 'DESC', 'post_type' => 'portfolio', 'exclude' => get_the_ID() );
			  $postslist = get_posts( $args );
			  foreach ($postslist as $post) :  setup_postdata($post);
		?>
      
        <li class="item">
        
          <div class="overlay">
          <a href="<?php echo get_permalink(); ?>">
          <?php the_post_thumbnail('portfolio-fourcol'); ?>
          </a>
          </div>
          
          <div class="info">
            <h4 class="long-lined"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php content( '10' ); ?></p>
            <a href="<?php echo get_permalink(); ?>" class="more">Weitere Informationen →</a> </div>
        </li>
        
        <?php wp_reset_query(); endforeach; ?>
        
      </ul>
      </div>
    </div>
  </div>
  <!-- End Wrapper -->
  
<?php get_footer(); ?>