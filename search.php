<?php
/**
 * The template for displaying Search Results
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

 get_header(); 
?>
<?php  
  global $post;                                  
  $post_id = get_the_ID();

 
?>

        <section class="page-title">      
          <?php
           if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          ?>
          <div class="title-wrapper" style="background:url('<?php the_post_thumbnail_url(); ?>') center center no-repeat #444; background-size:cover;">
          <?php    
           } else {
	         $thumbnail_url = get_stylesheet_directory_uri().'/images/wagen-background.jpg';
          ?>
           <div class="title-wrapper" style="background:url('<?php echo $thumbnail_url; ?>') center center no-repeat #444; background-size:cover;">
          <?php
           }   
          ?>       
           <div class="darker"></div>
           <div class="row">
            <div class="title-inner">
              <h1><?php _e('Search Results','jaeger'); ?></h1>        
            </div>
           </div>
          </div>          
        </section>  



  <section class="page-content" id="page-content">
    <div class="page-content-wrapper">
        <div class="page-content-i">
          <div class="row"> 
            
            <div class="left-contents" id="contents">
             <div class="left-contents-i">
              <h4><?php printf( __( 'Search Results: %s', 'jaeger' ), get_search_query() ); ?></h4>
              
                  <div class="section-contents newsroom-items">
                    <div class="section-contents-i theme-bg">
                      <?php 

                        $newsroom_ctr = 1;
              while( have_posts() ) :the_post(); ?>
  
                      <div class="news-item  <?php if( $newsroom_ctr==2 ): echo "last"; endif; ?>">
                        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo get_pretty_excerpt ( get_the_content(), $size=21, $read_more="..." ); ?></p>
                        <A class="button read-more" href="<?php echo get_permalink(); ?>"><?php _e( 'READ MORE', 'jaeger' ); ?></a>
                        <div class="cl-fl"></div>
                      </div>
                      
                      <?php 
                        if( $newsroom_ctr==2 ): $newsroom_ctr=1; echo '<div class="cl-fl"></div>'; else: $newsroom_ctr++; endif;
                        endwhile; wp_reset_query();
                      ?>                                                                  
                      <?php if( $newsroom_ctr==2 ): echo '<div class="cl-fl"></div>'; endif; ?>
                      <div class="cl-fl"></div>
                    </div>

                    
                  </div>
              
             </div>
            </div>
            <div class="right-sidebar" id="sidebar">
             <div class="right-sidebar-i">
        <?php
          if( is_active_sidebar('right_sidebar') ) :
            dynamic_sidebar('right_sidebar');
          endif;
        ?>               
             </div>
            </div>
            <div class="cl-fl"></div>
                        
          </div>                                                     
        </div>        
    </div>
  </section>
  
 
<?php get_footer(); ?>
