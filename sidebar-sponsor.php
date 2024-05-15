                        <aside class="widget sign-up-widget"> 
                         <h5><a href="/stay-connected/">STAY CONNECTED</a></h5>
                         <a href="/stay-connected/">
                          <div class="careers-image sign-up-image">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sign-up-for-emails.jpg">
                          </div>
                         </a>
                         <p>Get the competitive edge in Direct Marketing Fundraising. Sign up today to receive the DMFA newsletter Forum and stay abreast of current trends and events with regular updates from leaders in the world of direct marketing.</p>
                        </aside>  
                                               
                        <aside class="widget">        
                         <h5><a href="/resources/careers/">CAREERS</a></h5>
                         <a href="/resources/careers/"><div class="careers-image"></div></a>
                         <p>Looking to advance your career to the next level? Check out Careers and see some of the interesting positions that are currently available at DMFA member organisations. If you are currently a member and want to post an open position, email your job description today to <a href="mailto:info@dmfa.org">info@dmfa.org</a>.</p>
                        </aside> 
                        
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