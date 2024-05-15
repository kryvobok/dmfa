<?php
/**
 *
 *  template name: Awards - Rules
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

  <section class="about-page-block full-width theme-about" id="page-block" style="margin-top:30px;">
    <div class="page-block-w">
          <div class="page-block-i"> 
            
            <div class="page-contents" id="page-contents">
             <div class="page-contents-i">
              <div class="content-area">
                
                <div class="row">
                  <?php
                    the_content();         
                  ?>              
              
                </div>

                        
                           
              
  
              </div>
             </div>
            </div>
            <div class="cl-fl"></div>
                        
          </div>                                                             
    </div>
  </section>

<?php endwhile; ?> 
<?php get_footer(); ?>