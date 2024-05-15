<?php
/**
 *
 *  template name: Past Events
 *
 * 
 */


  get_header(); 
?>
<?php  
while( have_posts() ) : the_post();
  global $post;                                  
  $post_id = get_the_ID();
  $post_thumbnail_id = get_post_thumbnail_id( );
  $background_image = wp_get_attachment_url( $post_thumbnail_id );
 
?>

  <section class="about-page-block full-width theme-about" id="page-block">
    <div class="page-block-w">
          <div class="page-block-i"> 
            
            <div class="page-contents" id="page-contents">
             <div class="page-contents-i">


                <section class="about-us-pages" style="margin:0 0 30px 0;">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i">                    
                                              <div id="parent-70" class="child-page">                                
                            <a href=" http://members.dmfa.org/events" target="_blank" title="Upcoming Events" class="">
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="/wp-content/uploads/2022/02/dmfa-upcomingevents.jpg" class="attachment-full size-full wp-post-image" alt="" >                               <div class="caption"><p>Upcoming Events</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                                <div id="parent-72" class="child-page">                                
                            <a href="/events/past-events/" title="Past Events" class="active">
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="/wp-content/uploads/2022/02/dmfa-pastevents.jpg" class="attachment-full size-full wp-post-image" alt="">                               <div class="caption"><p>Past Events</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                                <div id="parent-77" class="child-page">                                
                            <a href="/events/partner-events/" title="Partner Events" class="">
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
                
              
                <section class="child-page-block ">
                  <div class="child-page-block-w">
                    <div class="row">
                     <div class="child-page-block-i">                      
                       <div class="content-area">

                        <?php the_content(); ?>                          
                        
                        <div class="current-events-w">

                          <?php 
                            $upcoming_events = new WP_Query(
                              array(
                                'post_type' => 'past_event',
                                'posts_per_page' => 10,
                                'orderby' => 'menu_order',
                              )
                            );
                            if( $upcoming_events->have_posts() ) {
                            
                             while( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); 
                          ?>
                          <div class="single-event">
                            <div class="event-details">
                              <?php 
                                if( '' != get_the_post_thumbnail() ) :
                                  echo '<div class="event-image-featured">'; 
                                    the_post_thumbnail('medium');
                                  echo '</div>';
                                else:
                                  echo '<div class="event-image"></div>';
                                endif;
                              ?>
                              <div class="event-info">
                                <div class="event-title">
                                  <h5><?php the_title(); ?></h5>
                                  <!--<div class="read-more"><a href="<?php echo get_post_meta( get_the_ID(), 'view_link', true ); ?>" class="open-iframe button">VIEW</a></div> -->
                                  <div class="read-more"><a href="<?php echo get_post_meta( get_the_ID(), 'view_link', true ); ?>" class="button">VIEW</a></div>

                                </div>                              
                                <?php 
                                  $event_date = get_post_meta( get_the_ID(), 'event_date', true );
                                  $datetime = strtotime($event_date); 
                                ?>                             
                                <p class="first"><i class="fal fa-calendar-alt"></i> <?php echo $event_date; ?></p>
                                <div class="cl-fl"></div>                                  
                              </div>
                              <div class="cl-fl"></div>  
                            </div>                           
                          </div>                                                    
                          <?php    
                             endwhile; wp_reset_query();
                            
                            }                           
                          ?>
                        
    
                          
            
                          
                                                                                                                                                                                                                                                                                                        
                        </div>                 
                       
                       </div>
                       <div class="sidebar sidebar-right">
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