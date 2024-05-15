<?php
/**
 *
 *  template name: Get Involved
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
              
               <div class="row">
                <header class="page-title" style="background-image:url('<?php echo $background_image; ?>')">
                  <div class="page-title-w">
                    <h1><?php the_title(); ?></h1>
                  </div>  
                </header>
               </div>                
                

              
                
                
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