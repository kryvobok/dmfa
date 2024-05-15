<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24930950-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

 	 gtag('config', 'UA-24930950-1');
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-V95B15ZTZY"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-V95B15ZTZY');
	</script>
	
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">  
    
    <!-- <link href="<?php echo get_theme_file_uri(); ?>/css/fontawesome-all.css?v=<?php echo rand(1,9999); ?>" rel="stylesheet"> -->
    <link href="<?php echo get_theme_file_uri(); ?>/css/font-awesome.min.css?v=<?php echo rand(1,9999); ?>" rel="stylesheet">
 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-6jHF7Z3XI3fF4XZixAuSu0gGKrXwoX/w3uFPxC56OtjChio7wtTGJWRW53Nhx6Ev" crossorigin="anonymous">

    <link media="all" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo rand(0,15000); ?>" rel="stylesheet">
    
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" sizes="32x32" />
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />    
    
    <?php wp_head(); ?>
    <?php global $post; ?>
    
    <style>
      .fa-linkedin:before { content: "\f08c" !important; }
    </style>
  
  
 
  
  </head>
  <!-- Body starts here -->
  


  
  <body <?php body_class(); ?> id="top" >     
     <div id="wrap">
      <div id="page">
        
        
        <header id="main-header">
    <div class="sticky-header visible-lg visible-md">
		  <div class="sticky-header-content">

		
		    <div class="row">
          <div class="sticky-logo">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png"></a>          
          </div>
          <div class="sticky-menu">
            <nav class="navbar main-menu">
                   <?php
                    $main_nav_args = array(
	                   'theme_location'  => 'main_navigation',
	                   'menu'            => 'main_navigation',
	                   'container'       => '',
	                   'menu_class'      => 'main-navigation menu',
	                   'menu_id'         => '',
	                   'echo'            => true,
	                   'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="cl-fl"></div>'
                    );
                    wp_nav_menu( $main_nav_args );
                   ?>          
					 </nav>
          </div>
          <div class="cl-fl"></div>
        </div>

 
	 
		   </div><!-- sticky-header-content -->

		
			</div>              
        
          <div class="topbar">
            <div class="row">
              <div class="topbar-i">
                <div class="topbar-left">
					       <ul class="topbar-social">
								   <li><a class="facebook" href="https://www.facebook.com/thedmfa/" target="_blank"><i class="fab fa-facebook"></i></a></li>
  						     <li><a class="twitter" href="https://twitter.com/thedmfa" target="_blank"><i class="fab fa-twitter"></i></a></li>
                   <li><a class="LinkedIn" href="https://www.linkedin.com/groups/75712/profile" target="_blank"><i class="fab fa-linkedin"></i></a></li>																		
									</ul>               
                </div>              
                <div class="topbar-right">
					       <ul class="topbar-menu">
								   <li><a class="" href="https://directmarketingfundraisersassociation.growthzoneapp.com/a/MIC/Login" target="_blank">Login</a></li>
								   <li><a class="" href="<?php echo site_url(); ?>" target="">Home</a></li>		 
								   <li><a class="highlight" href="/dmfa-online-newsletter-sign-up/">Stay Connected</a></li>                                     														
									</ul>                             
                </div>
                <div class="cl-fl"></div>
              </div>
            </div>
          </div>
          <div class="logo-header">
            <div class="row">
                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png"></a>
                <div class="cl-fl"></div>
            </div>
          </div>          
          <div class="menu-wrapper">          
              <div class="row"> 
                <div class="menu-inner">                 
                  <div class="header-menu">                 
                   <div class="header-menu-tbl"><div class="header-menu-cell">
                    <div class="cl-fl"></div>
                   
                   <div class="desktop"><?php
                    $main_nav_args = array(
	                   'theme_location'  => 'main_navigation',
	                   'menu'            => 'main_navigation',
	                   'container'       => '',
	                   'menu_class'      => 'main-navigation menu',
	                   'menu_id'         => 'main-navigation',
	                   'echo'            => true,
	                   'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="cl-fl"></div>'
                    );
                    wp_nav_menu( $main_nav_args );
                   ?></div>
                  <div class="mobile">
                    <div class="mobile-menu-icon">
                      <div class="mmi-i">
                        <a href="#" id="toggle-menu" rel="nofollow"><i class="fa fa-bars"></i></a>
                      </div>
                    </div>
                  </div> 
                  </div></div>
                 </div>                                 
                 <div class="cl-fl"></div>
                </div>                 
               </div>
              
              <!-- Mobile Nav -->
             <div class="mobile">
              <div class="mobile-menu">
               <div class="mobile-menu-inner">
                   <?php
                    $main_nav_args = array(
	                   'theme_location'  => 'mobile_navigation',
	                   'menu'            => 'mobile_navigation',
	                   'container'       => 'div',
	                   'menu_class'      => 'menu',
	                   'menu_id'         => 'main-navigation',
	                   'echo'            => true,
	                   'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="cl-fl"></div>'
                    );
                    wp_nav_menu( $main_nav_args );
                   ?>
                </div>
              </div> 
              </div>                 
            <div class="cl-fl"></div>
          </div>
        </header>
        

	