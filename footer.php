   <?php
    $post_ID = get_the_ID();
    $show_on = array(54,9,11,5,140,17,101,103); 
    if( in_array( $post_ID, $show_on ) ) :
   ?>

<script type="text/javascript">
_linkedin_partner_id = "4318321";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4318321&fmt=gif" />
</noscript>
   
    <div class="footer-contact">
     <div class="row">
      <div class="footer-contact-left">
        <div class="wpb_wrapper">
			<h2>Contact Us</h2>
      <p>If you would like more information about membership, sponsorship opportunities, events or award procedures please contact us today. We will be happy to provide the answers.</p>
      <p><a class="button" href="https://members.dmfa.org/contact">Contact Us</a></p>
      <!-- 
      <p><strong><a href="mailto:info@dmfa.org">info@dmfa.org</a><br>PO Box 51 Tenafly, NJ 07670<br>646-675-7314</strong></p>
      -->
		    </div>        
      </div>
      <div class="footer-contact-right">
        <?php //echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]'); ?>
        
      </div>      
      <div class="cl-fl"></div>
     </div>      
    </div>   
    
   
   <?php 
    endif;
   ?>
    
  </div><!-- EOF #page -->
  
  <div id="footer_wrap">
    
    <div class="footer-w">
     <div class="row">
      <div class="footer-i">

        <?php
          //if( is_active_sidebar('footer') ) :
            //dynamic_sidebar('footer');
          //endif;
        ?>
        <div class="footer-brand-logo">
          <div class="row">
            <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.png"></a>
          </div>
        </div>      
        <div class="footer-widget-col">
            <?php if( is_active_sidebar('footer_column_1') ): ?>
              <?php dynamic_sidebar('footer_column_1'); ?>
            <?php endif; ?>                        
        </div>                 
        <div class="footer-menu-w">
          <div class="row">
                   <?php
                    $main_nav_args = array(
	                   'theme_location'  => 'footer_navigation',
	                   'menu'            => 'footer_navigation',
	                   'container'       => '',
	                   'menu_class'      => 'menu',
	                   'menu_id'         => 'footer-navigation',
	                   'echo'            => true,
	                   'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="cl-fl"></div>'
                    );
                    wp_nav_menu( $main_nav_args );
                   ?> 
          </div>
        </div>         
        <div class="copyright">
          <div class="row">
            <div class="copyright-i">
              <p>2018 ALL RIGHTS RESERVED - The Direct Marketing Fundraisers Association (DMFA). Website: <a href="https://www.sharkeyadvertising.com/" target="_blank">Sharkey Advertising</a></p>
            </div>
          </div>
        </div>

        <div class="cl-fl"></div>              
        
      </div> <!-- footer-i --> 
     </div>
    </div>
  
    
  </div> <!-- #footer_wrap -->
 </div> <!-- #wrap -->
<?php wp_footer(); ?>

<style>
  html { margin-top:0 !important; }
  #wpadminbar { position:relative; }
</style>

</body>
</html>