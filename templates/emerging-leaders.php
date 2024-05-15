<?php
/**
 *
 *  template name: Emerging Leaders
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
              </div>
                
                <section class="about-us-pages" style="padding-top:30px;">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i"> 
                        <style>
                            .image-wrapper--custom img {
                                height: 100%;
                                object-fit: contain;
                            }
                            .child-page a.active .caption {
                                background: rgba(235,147,11,0.65);
                            }

                            .child-page a.active, .child-page a:hover{
                                border-color: rgb(235,147,11);
                            }
                            
                        </style>                   
                    <?php  
                      $parent = new WP_Query(array(        
                        'post__in'          => array('140', '145' , '2281'),   
                        'post_type'         => 'page',                    
                        'order'             => 'ASC',
                        'orderby'           => 'ID',
                        'posts_per_page'    => 3
                      ));
                      $ctr = 1;
                      if ($parent->have_posts()) : 

                        while ($parent->have_posts()) : $parent->the_post(); 
                          if( get_the_ID() == $post_ID ) : $active='active'; $first_child = get_the_ID(); else: $active=''; endif;

                        
                        ?>
                          <div id="parent-<?php the_ID(); ?>" class="child-page">    
                            <?php 
                              if ( get_the_title() == '' /*'Marketer of the Year'*/ ) :
                            ?>
                              <a href="https://directmarketingfundraisersassociation.growthzoneapp.com/ap/Form/Fill/Pd1eJSdL" target="_blank" title="<?php the_title(); ?>" class="<?php echo $active; ?>">   
                            <?php                              
                              else:
                            ?>
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="<?php echo $active; ?>">   
                            <?php                       
                              endif;
                            ?>                            
                             <div class="image-wrapper <?php if ($ctr == 3) : echo 'image-wrapper--custom';endif;?>">
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
                       <div class="content-area" style="float:none; width:100%;">
                        <?php the_content(); ?>
                       
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