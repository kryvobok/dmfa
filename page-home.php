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


  
  <section class="page-block full-width home-page-block" id="page-block">
    <div class="page-block-w">
          <div class="page-block-i"> 
            
            <div class="page-contents" id="page-contents">
             <div class="page-contents-i">
              
<?php
     the_content();         
?>              
              

              
                     
  
              
             </div>
            </div>
            <div class="cl-fl"></div>
                        
          </div>                                                             
    </div>
  </section>  
  

<?php endwhile; ?> 
<?php get_footer(); ?>