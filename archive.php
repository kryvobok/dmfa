<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); 

   global $wp_query;
  $queried_object = get_queried_object(); 
  $current_category_slug = $queried_object->slug;
  $current_category_ID = $queried_object->term_id;

  $current_category = get_category( $current_category_ID);  
  echo '<div style="display:none;">';
  var_dump($queried_object);  
  echo '</div>';
  global $wp_query;
  $all_archive_posts = $wp_query->max_num_pages;
  $posts_per_page = get_option('mytheme_posts_per_page');
  $total_pages = ceil( $all_archive_posts / $posts_per_page ); 
  $current_page_number = ( get_query_var('paged') ) ? get_query_var('paged') : 1 ;
  $post_type_name = $queried_object->name; 
  $post_type_label = $queried_object->labels->name;
  //print_r($queried_object);
  $post_type_term_name = $queried_object->rewrite['slug'];
  //echo $current_page_number;
  //echo $queried_object->rewrite['slug']; 
?>
    
  <div class="main-area-w upcoming-events-template">   
      <div class="main-area-i">
        <div class="banner-w">
         <div class="row">
          <div class="banner-i">
            <div class="banner-image"><img src="<?php bloginfo('template_directory'); ?>/images/default-banner.jpg"></div>            
            <?php get_template_part('menu','banner'); ?>
          </div>
         </div>
        </div><!-- banner-w -->

        <div class="upcoming-events-w page-content-w">
         <div class="row">
          <div class="page-content-i">
           
		<?php if ( have_posts() ) : ?>                  
           
            <h1>
            <?php echo $post_type_label.' Archives'; ?>
            </h1>    
            <div class="u-e-posts-w">
              <div class="u-e-posts-i">
                <?php 
                  $enviro_counter = 1;
                  while ( have_posts() ) : the_post();                  
                   $presented_by = get_post_meta( get_the_ID(), "_my_meta_value_presented_by", true );
                   $date = get_post_meta( get_the_ID(), "_my_meta_value_date", true );
                ?>
                <?php if ( $enviro_counter == 1 ) : //select first layout ?>
                
                  <div class="post_layout-right each-post">
                    <div class="p-l-r-i">
                      <div class="each-post-content">
                        <div class="e-p-c-i">                          
                          <h4><?php the_title(); ?></h4>
                          <p class="presented-by"><span>Presented By</span> <?php echo $presented_by; ?></p>
                          <p class="date"><span>DATE</span> <?php echo $date; ?></p>
                          <p><?php echo get_pretty_excerpt( get_the_content(), 55, "... " ); ?><span><a href="<?PHP echo get_permalink( get_the_ID() ); ?>">LEARN MORE</a></span></p>
                          <div class="e-p-categories">
                            <ul>                            
                            <?php 
                              $term_name = $post_type_term_name.'-category';                            
                              $terms = get_the_terms( get_the_ID(), $term_name );
                              foreach ( $terms as $term ) {
		                            echo '<li>'.$term->name.'</li>';
	                             }                               
                            ?>
                            </ul>
                            <div class="cl-fl"></div>
                          </div>
                        </div>                        
                      </div>
                      <div class="each-post-thumbnail">
                        <?php the_post_thumbnail( array(320,390) ); ?>
                      </div>
                      <div class="cl-fl"></div>
                    </div>  
                  </div>
                
                <?php else : //select second layout ?>

                  <div class="post_layout-left each-post">
                    <div class="p-l-r-i">
                      <div class="each-post-thumbnail">
                        <?php the_post_thumbnail( array(320,390) ); ?>
                      </div>
                      <div class="each-post-content">
                        <div class="e-p-c-i">                          
                          <h4><?php the_title(); ?></h4>
                          <p class="presented-by"><span>Presented By</span> <?php echo $presented_by; ?></p>
                          <p class="date"><span>DATE</span> <?php echo $date; ?></p>
                          <p><?php echo get_pretty_excerpt( get_the_content(), 55, "... " ); ?><span><a href="<?PHP echo get_permalink( get_the_ID() ); ?>">LEARN MORE</a></span></p>
                          <div class="e-p-categories">
                            <ul>                            
                            <?php 
                              $term_name = $post_type_term_name.'-category';                            
                              $terms = get_the_terms( get_the_ID(), $term_name );
                              foreach ( $terms as $term ) {
		                            echo '<li>'.$term->name.'</li>';
	                             }                               
                            ?>
                            </ul>
                            <div class="cl-fl"></div>
                          </div>
                        </div>                        
                      </div>
                      <div class="cl-fl"></div>
                    </div>  
                  </div>
               
                <?php endif; ?>
                                
                <?php 
                  $enviro_counter = ( $enviro_counter == 2 ) ? 1 : $enviro_counter+1 ; 
                  endwhile; wp_reset_query();
                ?>
              </div>
            </div><!-- environmental-posts-w -->
             
             <div class="page-pagination">
              <div class="p-p-i">
                <?php 
                
                  $older_posts = ( $current_page_number == 1 ) ? 1 : $current_page_number-1 ;
                  $newer_posts = ( $current_page_number == $total_pages ) ? $total_pages : $current_page_number+1 ;
                ?>
                <div class="pages-list">
                 <div class="prev-pages">
                   <a href="<?php echo get_post_type_archive_link( $post_type_name ); ?>page/<?php echo $older_posts; ?>">&laquo; older</a>
                 </div>
                 <div class="p-list-ul">
                  <ul>
                  <?php 
                    for ( $i=1; $i<=$total_pages; $i++ ) {
                  ?>
                      <li class="<?php if( $current_page_number == $i ) : echo "active"; endif; ?>">
                        <a href="<?php echo get_post_type_archive_link( $post_type_name ); ?>page/<?php echo $i?>"><?php echo $i; ?></a> 
                      </li>
                  <?php
                    }
                  ?>
                  <div class="cl-fl"></div>
                  </ul>
                 </div>
                 <div class="next-pages">
                   <a href="<?php echo get_post_type_archive_link( $post_type_name ); ?>page/<?php echo $newer_posts; ?>">newer &raquo;</a>
                 </div>
                 <div class="cl-fl"></div>
                </div>
              </div>              
             </div>
             

             <?php endif; ?>
          </div>
         </div>
        </div><!-- archive-page-w page-content-w -->
        
         <?php 
          /*
          *  Let's get template to display image columns sidebar widgets
          */
          get_template_part('sidebar','image-columns');         
         ?>

         <?php 
          //Let's get template to display testimonials
          get_template_part('layout','testimonials-slider');         
         ?>                 
                            
      </div><!-- main-area-i -->    
  </div><!-- main-area-w -->


<?php get_footer(); ?>