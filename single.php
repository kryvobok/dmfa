<?php

 get_header(); 
?>
<?php  
while( have_posts() ) : the_post();
  global $post;                                  
  $post_id = $post_ID = get_the_ID();
  $category = get_the_category(); 
$category_parent_id = $category[0]->category_parent;
if ( $category_parent_id != 0 ) {
    $category_parent = get_term( $category_parent_id, 'category' );
    $css_slug = $category_parent->slug;
} else {
    $css_slug = $category[0]->slug;
}

      $latest_news = array(  
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => '-1',
        'post_status' => 'publish',  
      );
      $latest_news_q = new WP_Query($latest_news);
      $news_years = array();
      while( $latest_news_q->have_posts() ) : $latest_news_q->the_post();
        if( !in_array( get_the_time('Y'), $news_years ) ) : 
          $news_years[] = get_the_time('Y');
        endif;
      endwhile; wp_reset_query();
  
      //var_dump($news_years);
 
?>

<?php 

  if( $css_slug == 'industry-info' ) {
?>  
<div class="page-template-template-resources-industry-info">
<section class="about-us-pages" style="margin-top:30px;">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i">                    
                                              <div id="parent-140" class="child-page">    
                                                          <a href="<?php echo site_url(); ?>/resources/careers/" title="Careers" class="">   
                                                        
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/resources-careers-opt-1.jpg" class="attachment-full size-full wp-post-image" alt="" ><div class="caption"><p>Careers</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                                <div id="parent-145" class="child-page">    
                                                          <a href="<?php echo site_url(); ?>/resources/industry-info/" title="Industry Info" class="active">   
                                                        
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="<?php echo site_url(); ?>/wp-content/uploads/2018/05/resources-industry-news.jpg" class="attachment-full size-full wp-post-image" alt="">                               <div class="caption"><p>Industry Info</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                                <div id="parent-147" class="child-page">    
                                                          <a href="https://directmarketingfundraisersassociation.growthzoneapp.com/MIC/2936527/2572093/#/Directory//2428" target="_blank" title="DMFA Directory" class="">   
                                                        
                             <div class="image-wrapper">
                               <img width="1000" height="700" src="<?php echo site_url(); ?>/wp-content/uploads/2018/05/resources-dmfa-directory.jpg" class="attachment-full size-full wp-post-image" alt="" >                               <div class="caption"><p>DMFA Directory</p></div>
                             </div>
                            </a>
                          </div>  
                          
                                            
                      <div class="cl-fl"></div>
                     </div>
                    </div>
                  </div>                                                  
                </section>
              </div>

<?php  
  }
  
?>


  
  
             <section class="child-page-block" style="margin-top:30px;">
                  <div class="child-page-block-w">
                    <div class="row">
                     <div class="child-page-block-i">
                       <div class="content-area">
                          <div id="post-<?php the_ID(); ?>" class="page">                                
                              <?php //the_post_thumbnail('full'); ?>
                       
	               <?php if( has_post_thumbnail() ) : ?>	
                   <div class="single-image" style="margin-bottom:30px;"><?php the_post_thumbnail('full'); ?>	</div>
                 <?php endif; ?>
			           <h2 class="single-title"><?php echo get_the_title(); ?></h2>

                 <div class="single-content">
                  
                  <?php the_content(); ?>
                 
                 </div>                              
                          </div>                                                
                       </div>
                       <div class="sidebar">
                        <div class="sidebar-i">
                        <?php dynamic_sidebar('post_sidebar'); ?>
                        </div>
                       </div>                       
                                        
                      <div class="cl-fl"></div>
                      </div>
                    </div>
                  </div>                                                  
            </section>   


<?php endwhile; ?> 
<?php get_footer(); ?>