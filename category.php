<?php
/**
 * The template for displaying Category pages
 *
 */

get_header(); ?>
<?php  
  global $wp_query;
  $queried_object = get_queried_object(); 
  $current_category_slug = $queried_object->slug;
  $current_category_desc = $queried_object->description;
  $current_category_name = $queried_object->name;  
  $current_category_ID = $queried_object->term_id;  
?>
  <div class="main-area-w blog-page page-bg" style="">   
      <div class="main-area-i">
        <div class="blog-page-content">
          <div class="b-p-c-i">
            <div class="blog-header-w">
              <div class="b-h-i">
                <div class="smallest-row">
                  <div class="logo-blog"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-blog.png" alt="Blog" /></div>
                </div>
                <div class="categories-blog">
                 <ul>
                 <?php
                    $count_categories = 0;
                    $blog_cat_id = get_cat_id('blog');
                    $args = array(
                      'parent'       => $blog_cat_id,
                      'orderby'      => 'name',
                      'hide_empty'   => 0
                    );
                    $blog_categories = get_categories( $args );
                    foreach ($blog_categories as $blog_category) {     	    
                      $category_link = get_category_link( $blog_category->term_id );
                 ?>                 
                      <li><a class="<?php if( $current_category_slug == $blog_category->slug ) : echo "active"; endif;?>" href="<?php echo $category_link; ?>"><?php echo $blog_category->name; ?></a></li>  
                 <?php
                      $count_categories++;             
                    }
                 ?>
                 </ul>
                 <div class="cl-fl"></div>
                </div>
              </div>                          
            </div>
            
            <div class="blog-posts-w">
             <div class="smallest-row">
              <div class="b-p-i">
                <?php 
                  $all_posts_args = array (
                    "post_type" => "post",
                    "category_name" => $current_category_slug,
                    "post_status" => "publish",
                    "posts_per_page" => $posts_per_page,
                    ""
                  );
                  $all_posts_query = new WP_Query($all_posts_args);
                  while( $all_posts_query->have_posts() ) : $all_posts_query->the_post();
                ?>
                  <div class="blog-post-each">
                    <div class="b-p-each-i">
                      <div class="b-p-date"><?php the_date("F j, Y"); ?></div>
                      <div class="b-p-headline"><h4><?php the_title(); ?></h4></div>
                      <div class="b-p-excerpt"><?php echo get_the_excerpt(); ?></div> 
                      <div class="b-p-read-more"><a href="<?php echo get_permalink(); ?>">Continue Reading</a></div>                                           
                      <div class="b-p-meta">
                        <div class="b-p-comments">
                          <?php 
                            $comments_count = wp_count_comments();
                            if ( $comments_count->approved == 0 ) { echo $comments_count->approved." Comments"; }
                            else if ( $comments_count->approved == 1 ) { echo $comments_count->approved." Comment"; }
                            else { echo $comments_count->approved." Comments"; }
                          ?>
                        </div>
                        <div class="b-p-tags">
                          Posted Under:
                          <?php 
                            $separator = ' ';
                            $output = '';
                            $post_categories = get_the_category();
                            foreach($post_categories as $post_category) {
		                          $output .= '<a href="'.get_category_link( $post_category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $post_category->name ) ) . '">'.$post_category->cat_name.'</a>'.$separator;
	                          }
                            echo $output;
                          ?>
                        </div>                        
                        <div class="cl-fl"></div>
                      </div>
                    </div>
                  </div>
                <?php 
                  endwhile; wp_reset_query();
                ?>
              </div>
             </div>                          
            </div>            
            
           </div><!-- b-p-c-i -->          
        </div>                    
      </div><!-- main-area-i -->    
  </div><!-- main-area-w -->
<?php get_footer(); ?>