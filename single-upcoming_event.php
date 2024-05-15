<?php

 get_header(); 
?>
<?php  
while( have_posts() ) : the_post();
  global $post;                                  
  $post_id = $post_ID = get_the_ID();

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

<section class="page-block full-width single-post-block" id="page-block">
    <div class="page-block-w">
          <div class="page-block-i"> 
            
            <div class="page-contents" id="page-contents">
             <div class="page-contents-i" style="padding:30px 0;">


              <div class="row">
               <div class="content-area">
                <div class="content-area-inner">
		
			           <h2 class="single-title"><?php echo get_the_title(); ?></h2>

                 <div class="single-content">
                  
                  <?php the_content(); ?>
                 
                 </div>
               </div>
              </div>

              <div class="cl-fl"></div>            
  
              </div> 
             </div>
            </div>
            <div class="cl-fl"></div>
                        
          </div>                                                             
    </div>
  </section>


<?php endwhile; ?> 
<?php get_footer(); ?>