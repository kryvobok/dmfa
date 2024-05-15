<?php
/**
 *
 *  template name: Resources
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
               <div class="row">              
                <header class="page-title" style="background-image:url('<?php echo $background_image; ?>')">
                  <div class="page-title-w">
                    <h1><?php echo get_the_title( $post_ID ); ?></h1>
                  </div>  
                </header>
               </div>
                
                <section class="about-us-pages">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i">                    
                    <?php  
                      $parent = new WP_Query(array(        
                        'post_parent'       => $post_ID,   
                        'post_type'         => 'page',                    
                        'order'             => 'ASC',
                        'orderby'           => 'menu_order',
                        'posts_per_page'    => 3
                      ));
                      $ctr = 1;
                      if ($parent->have_posts()) : 

                        while ($parent->have_posts()) : $parent->the_post(); 
                          if( get_the_ID() == $post_ID ) : $active='active'; $first_child = get_the_ID(); else: $active=''; endif;
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
                        endwhile; unset($parent); endif; wp_reset_postdata(); 
                      ?>                      
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
                              <h2 class="content-title"><?php echo get_the_title(); ?></h2>
                              <?php the_post_thumbnail('full'); ?>
                              <div class="content"><?php the_content(); ?></div>
                          </div>  
                        
                       
                       </div>
                       <div class="sidebar">
                        <aside class="widget"> 
                         <h5>RECEIVE OUR EMAILS</h5>
                         <div class="careers-image"></div>
                         <p>Nulla sit amet dui et nibh pellentesque aliquam quis id erat. Fusce molestie odio velit, eget elementum diam tempor vel. Vestibulum eros erat, scelerisque non pellentesque a, lobortis at augue. Aliquam id tortor at arcu tristique facilisis.</p>
                        </aside>                        
                        <aside class="widget"> 
                         <h5>CAREERS</h5>
                         <div class="careers-image"></div>
                         <p>Nulla sit amet dui et nibh pellentesque aliquam quis id erat. Fusce molestie odio velit, eget elementum diam tempor vel. Vestibulum eros erat, scelerisque non pellentesque a, lobortis at augue. Aliquam id tortor at arcu tristique facilisis.</p>
                        </aside> 
                        <aside class="widget">                        
                         <h5>ADVERTISEMENT</h5>
                         <div class="ad-image"></div>
                        </aside>
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