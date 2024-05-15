<?php
/**
 *
 * Default page template 
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


  <section class="page-block full-width" id="page-block">
    <div class="page-block-w">
          <div class="page-block-i"> 
            
            <div class="page-contents" id="page-contents">
             <div class="page-contents-i">
				 <div class="content-area">
                	<div class="row"><h1 class="page-title"><?php the_title(); ?></h1></div>
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