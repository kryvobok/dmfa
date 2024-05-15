<?php
/**
 *
 *  template name: Resources - Industry Info
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
  $cur_page_url = get_permalink($post_id);
  $blog_page_id = get_permalink($post_id);
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

                
                <section class="about-us-pages" style="margin-top:30px;">
                  <div class="about-us-pages-w">
                    <div class="row">
                     <div class="about-us-pages-i">                    
                    <?php  
                      $parent = new WP_Query(array(        
                        'post_parent'       => $post_parent_ID,   
                        'post_type'         => 'page',                    
                        'order'             => 'ASC',
                        'orderby'           => 'menu_order',
                        'posts_per_page'    => 2
                      ));
                      $ctr = 1;  
                      if ($parent->have_posts()) : 

                        while ($parent->have_posts()) : $parent->the_post(); 
                          if( get_the_ID() == $post_ID ) : $active='active'; $first_child = get_the_ID(); else: $active=''; endif;
                          $ctr++;
                        
                        ?>
                          <div id="parent-<?php the_ID(); ?>" class="child-page">    
                            <?php 
                              if ( get_the_title() == 'DMFA Directory' ) :
                            ?>
                              <a href="<?php echo site_url(); ?>/resources/dmfa-directory/" target="" title="<?php the_title(); ?>" class="<?php echo $active; ?>">   
                            <?php                              
                              else:
                            ?>
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="<?php echo $active; ?>">   
                            <?php                       
                              endif;
                            ?>                            
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
					<?php  
                      $parent = new WP_Query(array(        
                        'post__in'       => ['2281'],   
                        'post_type'         => 'page',                    
                        'order'             => 'ASC',
                        'orderby'           => 'menu_order',
                        'posts_per_page'    => 1
                      ));
                      $ctr = 1;
                      if ($parent->have_posts()) : 

                        while ($parent->have_posts()) : $parent->the_post(); 
                          if( get_the_ID() == $post_ID ) : $active='active'; $first_child = get_the_ID(); else: $active=''; endif;
                          $ctr++;
                        
                        ?>
                          <div id="parent-<?php the_ID(); ?>" class="child-page">    
                            <?php 
                              if ( get_the_title() == 'DMFA Directory' ) :
                            ?>
                              <a href="<?php echo site_url(); ?>/resources/dmfa-directory/" target="" title="<?php the_title(); ?>" class="<?php echo $active; ?>">   
                            <?php                              
                              else:
                            ?>
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="<?php echo $active; ?>">   
                            <?php                       
                              endif;
                            ?>                            
                             <div class="image-wrapper image-wrapper--custom">
                               <?php the_post_thumbnail('full'); ?>
                               <div class="caption"><p><?php the_title(); ?></p></div>
                             </div>
                            </a>
						
							<style>
								.image-wrapper--custom img {
									height: 100%;
									object-fit: contain;
								}
							</style>
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
                              <div class="content"><?php the_content(); ?></div>
                              
                            <?php 
							  function get_nopaging_url() {

								  global $wp;

								  $current_url =  home_url( $wp->request );
								  $position = strpos( $current_url , '/page' );
								  $nopaging_url = ( $position ) ? substr( $current_url, 0, $position ) : $current_url;

								  return trailingslashit( $nopaging_url );

								}
							  
                              $industry_info_q = new WP_Query (  
                                array(
                                  'post_type' => 'post',
                                  'post_status' => 'publish',
                                  'posts_per_page' => -1,                                 
                                )
                              );
                              $total_posts = $industry_info_q->found_posts;
                              $current_page = ( get_query_var('paged') ) ? get_query_var('paged') : 1 ;

                              $posts_per_page = 9;
                              $total_pages = ceil( $total_posts / $posts_per_page ) ;
                              $offset = ( $posts_per_page * $current_page ) - $posts_per_page;
                             
                              if( $current_page > 1 ) { 
                                $prev='<a href="'.$blog_page_id.'page/'.( $current_page-1 ).'">&laquo; Previous</a>';
                              } else {
                                $prev='<span>&laquo; Previous</span>'; 
                              }
                              if( $current_page < $total_pages ) { 
                                $next='<a href="'.$blog_page_id.'page/'.( $current_page+1 ).'">Next &raquo;</a>';
                              } else {
                                $next='<span>Next &raquo;</span>'; 
                              }                              
                              
                              //$blog_page_id
                              $paginated_q = new WP_Query (  
                                array(
                                  'post_type' => 'post',
                                  'post_status' => 'publish',
                                  'posts_per_page' => $posts_per_page, 
                                  'offset' => $offset,
                                  'orderby' => 'date',                                 
                                )
                              );
                              while( $paginated_q->have_posts() ) : $paginated_q->the_post();
                                ?>
                                  
                                  <div class="blog-post-item">
                                    <div class="blog-post-excerpt">
                                      <h4><a href="<?php echo get_permalink(); ?>" class=""><?php echo get_the_title(); ?></a></h4>                                    
                                      <p><?php echo get_pretty_excerpt ( get_the_content() , $size=25, $read_more="" ); ?></p>
                                      <a href="<?php echo get_permalink(); ?>" class="read-more">Read More &raquo;</a>
                                    </div>
                                    <div class="cl-fl"></div>
                                  </div>
                                
                                <?php
                              endwhile; wp_reset_query();
                              //$blog_page_id
                            ?>
                              
                              
                            <div class="pagination">
                            
                              <div class='prev'><?php echo $prev; ?></div>
                              <div class="pages">
                                <ul>
                                 <?php 
									
                                  for( $i = 1; $i <= $total_pages; $i++ ) {
                                    if( $i == $current_page ) {
                                      echo '<li><span class="active">'.$i.'</span></li>';                                    
                                    } else {
                                      echo '<li><a href="'.get_nopaging_url().'page/'.$i.'" class="">'.$i.'</a></li>';                                    
                                    }
                                  }
                                 ?>
                                </ul>
                              </div>
                              <div class='next'><?php echo $next; ?></div>
                              <div class="cl-fl"></div>

                            </div>  
                              
                          </div>  
                        
                       
                       </div>
                       <div class="sidebar">
                        <div class="sidebar-i">
                        <?php dynamic_sidebar('right_sidebar'); ?>
                        </div>
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