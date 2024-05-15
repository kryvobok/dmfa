<?php
/**
 *
 *  template name: Get Involved - Attend Our Events
 *
 * 
 */


  get_header(); 
?>
<?php  
while( have_posts() ) : the_post();
  global $post;                                  
  $post_id = get_the_ID();
  $post_ID = get_the_ID();  
  $post_thumbnail_id = get_post_thumbnail_id( );
  $background_image = wp_get_attachment_url( $post_thumbnail_id );
  $post_parent_ID = wp_get_post_parent_id( $post_ID );
  $parent_post_thumbnail_id = get_post_thumbnail_id( $post_parent_ID );
  $parent_background_image = wp_get_attachment_url( $parent_post_thumbnail_id ); 
 
?>

  <section class="about-page-block full-width theme-about" id="page-block">
    <div class="page-block-w">
          <div class="page-block-i"> 
            
            <div class="page-contents" id="page-contents">
             <div class="page-contents-i">
          
                
                <section class="about-us-pages" style="padding:0 0 30px 0;">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i">                    
                                              <div id="parent-70" class="child-page">                                
                            <a href="http://members.dmfa.org/events" title="Become a Member" class="">
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="/wp-content/uploads/2022/02/dmfa-upcomingevents.jpg" class="attachment-full size-full wp-post-image" alt="" >                                 <div class="caption"><p>Upcoming Events</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                                <div id="parent-72" class="child-page">                                
                            <a href="/events/past-events/" title="Attend Our Events" class="">
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="/wp-content/uploads/2022/02/dmfa-pastevents.jpg" class="attachment-full size-full wp-post-image" alt="">                               <div class="caption"><p>Past Events</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                                <div id="parent-77" class="child-page">                                
                            <a href="/events/partner-events/" title="Become A Sponsor" class="">
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="/wp-content/uploads/2018/05/get-involved-become-a-sponsor.jpg" class="attachment-full size-full wp-post-image" alt="">                               <div class="caption"><p>Partner Events</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                            
                      <div class="cl-fl"></div>
                     </div>
                    </div>
                  </div>                                                  
                </section>  
                
                <section class="child-page-block">
                  <div class="child-page-block-w">
                    <div class="row">
                     <div class="child-page-block-i">
                       <div class="content-area">


                          <div id="page-<?php the_ID(); ?>" class="page">                                
                              <div class="content"><?php the_content(); ?></div>
                          </div>  
                        
                       
                       </div>
                       <div class="sidebar">
                        <div class="sidebar-i">
                          <?php dynamic_sidebar('right_sidebar'); ?>
                        </div>
                       </div>    
                                        
                      <div class="cl-fl"></div>
                      </div>
                    </div>
                  </div>                                                  
                </section>                                 
                
                
               
                   
  
              
             </div>
            </div>
            <div class="cl-fl"></div>
                        
          </div>                                                             
    </div>
  </section>

<?php endwhile; ?> 
<?php get_footer(); ?>