<?php
/**
 *
 *  template name: About us
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
                
                <section class="about-us-pages">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i">                    
                    <?php  
                      $parent = new WP_Query(array(        
                        'post_parent'       => $post_id,   
                        'post_type'         => 'page',                    
                        'order'             => 'ASC',
                        'orderby'           => 'menu_order',
                        'posts_per_page'    => 3
                      ));
                      $ctr = 1;
                      if ($parent->have_posts()) : 

                        while ($parent->have_posts()) : $parent->the_post(); 
                          if( $ctr==1 ) : $active='active'; $first_child = get_the_ID(); else: $active=''; endif;
                          $ctr++;
                        
                        ?>
                          <div id="parent-<?php the_ID(); ?>" class="child-page">                                
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="<?php echo $active; ?>">
                             <div class="image-wrapper">
                               <?php the_post_thumbnail('full'); ?>
                               <div class="caption"><p><?php the_title(); ?></p></div>
                             </div>
                            </a>
                          </div>  
                          
                      <?php 
                        $ctr++;
                        endwhile; unset($parent); endif; wp_reset_postdata(); ?>                      
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

                    <?php  
                      $parent = new WP_Query(array(        
                        'p'       => $first_child,   
                        'post_type'         => 'page',                    
                        'posts_per_page'    => 1
                      )); 

                        while ($parent->have_posts()) : $parent->the_post(); 
  
                        
                        ?>
                          <div id="page-<?php the_ID(); ?>" class="page">                                
                              <?php the_post_thumbnail('full'); ?>
                              <div class="content"><?php the_content(); ?></div>
                          </div>  
                      <?php endwhile; ?>
                      <?php unset($parent); wp_reset_postdata(); ?>                          
                       
                       </div>
                       <div class="sidebar">

                        <?php get_sidebar('about-new'); ?>                        

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