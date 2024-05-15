<?php
/**
 * template name: Home Page Template
 *
 */

  get_header();        
?>
<?php  
while( have_posts() ) : the_post();
  global $post;                                  
  $post_id = get_the_ID();
  
?>


  <section class="banner" id="banner-container">
    <div class="banner-wrapper">     
   
      <div class="go-down"><a class="enter-site" href="#about-us" class="vertical">Unlock The<br>Possibilities<br><i class="fa fa-chevron-down"></i></a></div>
        
      <div class="banner-contents">            
        <div class="banner-c-tbl">
          <div class="banner-c-cell">
            <div class="row">
              <div class="banner-c-text">
                <h2>Building Wealth Through Real Estate</h2>
                <h2>We Invest in what we know.</h2>
              </div>  
            </div>
          </div>        
        </div>
      </div>
   
    </div>
  </section>  

  <section class="home-widgets" id="about-us">
    <div class="row">
      <div class="hw-inner">
        <div class="services-box col">
          <div class="services-content">
            <div class="sc-wraper">
              <p>Diversify your portfolio with great real estate opportunities from Bayberry Capital Group.</p>
            </div>
          </div>
        </div>
        <div class="services-box col">
          <div class="img-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bayberry-capital-llc.jpg" alt="Bayberry Capital LLC">
          </div>
          <div class="services-content match-height">
            <div class="sc-wraper">
              <h3>Bayberry Capital LLC</h3>
              <p>A Private Equity Real Investment Trust</p>
            </div>
          </div>
        </div>
        <div class="services-box col">
          <div class="img-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/courtyards-on-fifth.jpg" alt="Bayberry Capital LLC">
          </div>
          <div class="services-content match-height">
            <div class="sc-wraper">
              <h3>Courtyards on Fifth</h3>
              <p>&nbsp;</p>
            </div>
          </div>
        </div>
        <div class="services-box col nomargin">
          <div class="img-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/broadway-221.jpg" alt="Bayberry Capital LLC">
          </div>
          <div class="services-content match-height">
            <div class="sc-wraper">
              <h3>221 Broadway</h3>
              <p>&nbsp;</p>
            </div>
          </div>
        </div>        
        <div class="cl-fl"></div>               
      </div>
    </div>
  </section>
  
  <section id="home-about" class="home-about-parallax" data-bottom-top="background-position:0px -100px;" data--100-bottom="background-position:0px -20px;" >
    <div class="home-about-w">
      <div class="overlay"></div> 
      <div class="row intro-row">
        <div class="home-about-i">
          <p>Bayberry Capital Group sources, acquires, renovates, develops, leases, and sells a diversified portfolio of residential and commercial properties. We target distressed properties, selective development sites, non-preforming mortgage notes, and low LTV lending opportunities throughout New York and the Tri-state area.</p>
        </div>
      </div>
    </div>
  </section>
  

<?php endwhile; ?> 
<?php get_footer(); ?>