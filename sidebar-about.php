
                      <aside class="widget">   
                         <h5>UPCOMING EVENTS</h5>                       
                         <div class="indsutry-info-articles">                         
                          <ul>
                          <?php 
                            $upcoming_events = new WP_Query(
                              array(
                                'post_type' => 'upcoming_event',
                                'posts_per_page' => 5,
                                'orderby' => 'menu_order',
                              )
                            );
                            if( $upcoming_events->have_posts() ) {
                            
                             while( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); 
                          ?>
                            <li>
                              <div class="article-image">
                              <?php 
                                if( '' != get_the_post_thumbnail() ) :
                                  echo '<a class="with-image" href="'. get_post_meta( get_the_ID(), 'register_link', true ) .'">'; 
                                    the_post_thumbnail('thumbnail');
                                  echo '</a>';
                                else:
                                  echo '<a class="no-image" href="'. get_post_meta( get_the_ID(), 'register_link', true ) .'"></a>';
                                endif;
                              ?>                                
                              </div>
                              <div class="article-text">
                                <a href="<?php echo get_post_meta( get_the_ID(), 'register_link', true ); ?>"><?php the_title(); ?></a>
                                <p><?php echo get_post_meta( get_the_ID(), 'event_date', true ); ?></p>
                              </div>
                              <div class="cl-fl"></div>
                            </li>                                                                            
                          <?php    
                             endwhile; wp_reset_query();
                            
                            }                           
                          ?>                          
                                                                                                          
                          </ul>
                         </div>                      
                        </aside>