<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<!--[if lt IE 9]>
<script src="style/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>
<?php $class = 'full-layout'; ?>
<body <?php body_class( $class ); ?>>
<!-- Begin Body Wrapper -->
<div class="body-wrapper"> 
  <!-- Begin Top Wrapper -->
  <div class="top-wrapper">
    <div class="inner"> 
      <!-- Begin Header -->
      <header>
      		
            
            <!-- Start Logo -->
            <?php if( vp_option('header_logo') != '' ){ ?>
            <div class="logo">
            <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo vp_option('header_logo'); ?>" alt="Logo" />
            </a>
            </div>
            <?php } ?>
            <!-- Start Logo -->
        
        <!-- Begin Menu -->
        <div class="search-contact">
        	<?php get_search_form(); ?>
        	<ul class="social">
      
      			<?php if( vp_option('enablerss') == '1' ){ ?>
		        <li><a href="<?php bloginfo('rss_url'); ?>"><i class="icon-s-rss"></i></a></li>
        		<?php } ?>
        
		        <?php if( vp_option('twitter') != '' ){ ?>
        		<li><a href="<?php echo vp_option('twitter'); ?>"><i class="icon-s-twitter"></i></a></li>
		        <?php } ?>
        
        		<?php if( vp_option('facebook') != '' ){ ?>
		        <li><a href="<?php echo vp_option('facebook'); ?>"><i class="icon-s-facebook"></i></a></li>
        		<?php } ?>
        
		        <?php if( vp_option('dribbble') != '' ){ ?>
        		<li><a href="<?php echo vp_option('dribbble'); ?>"><i class="icon-s-dribbble"></i></a></li>
		        <?php } ?>
        
        		<?php if( vp_option('pinterest') != '' ){ ?>
		        <li><a href="<?php echo vp_option('pinterest'); ?>"><i class="icon-s-pinterest"></i></a></li>
        		<?php } ?>
        
		        <?php if( vp_option('flickr') != '' ){ ?>
        		<li><a href="<?php echo vp_option('flickr'); ?>"><i class="icon-s-flickr"></i></a></li>
		        <?php } ?>
        
        		<?php if( vp_option('vimeo') != '' ){ ?>
		        <li><a href="<?php echo vp_option('vimeo'); ?>"><i class="icon-s-vimeo"></i></a></li>
        		<?php } ?>
        		
		        <li><a href="/kontakt"><i class="icon-mail"></i></a></li>
			</ul>
        </div>
		<?php get_template_part('nav'); ?>
        <!-- End Menu -->
        <div class="clear"></div>
      </header>
      <!-- End Header -->
      
      
    </div>
  </div>
  <!-- End Top Wrapper -->