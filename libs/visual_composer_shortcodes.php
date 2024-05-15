<?php 

/*
  Addons
    1) Hover Image

*/
// Here are some functions that will be needed for custom outputs in Visual Composer


/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
vc_map( array(
      "name" => __( "New image banner", "dmfa" ),
      "base" => "new_image_banner",
      "icon" => get_stylesheet_directory_uri() . "/images/favicon.png", // Simply pass url to your icon here      
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 1", "dmfa" ),
            "param_name" => "image_1",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),    
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_1_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),              
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_1_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_1_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 2", "dmfa" ),
            "param_name" => "image_2",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_2_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_2_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_2_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 3", "dmfa" ),
            "param_name" => "image_3",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_3_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_3_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_3_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ), 
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 4", "dmfa" ),
            "param_name" => "image_4",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_4_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_4_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_4_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),   
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 5", "dmfa" ),
            "param_name" => "image_5",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_5_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_5_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_5_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),   
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 6", "dmfa" ),
            "param_name" => "image_6",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_6_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_6_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_6_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),                                                                 
      )
    ) 
); // EOF vc_map

add_shortcode( 'new_image_banner', 'new_image_banner_func' );
function new_image_banner_func( $atts ) {
   extract( shortcode_atts( array(
      'image_1' => '',
      'image_1_description' => '',
      'image_1_title' => '',      
      'image_1_link' => '',
      'image_2' => '',
      'image_2_description' => '',      
      'image_2_title' => '',
      'image_2_link' => '',   
      'image_3' => '',
      'image_3_description' => '',      
      'image_3_title' => '',
      'image_3_link' => '',  
      'image_4' => '',
      'image_4_description' => '',      
      'image_4_title' => '',
      'image_4_link' => '',  
      'image_5' => '',
      'image_5_description' => '',      
      'image_5_title' => '',
      'image_5_link' => '',  
      'image_6' => '',
      'image_6_description' => '',      
      'image_6_title' => '',
      'image_6_link' => '',                           
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image_1 = wp_get_attachment_image_src( $image_1, 'full' );
    $block_image_2 = wp_get_attachment_image_src( $image_2, 'full' );
    $block_image_3 = wp_get_attachment_image_src( $image_3, 'full' );    
    $block_image_4 = wp_get_attachment_image_src( $image_4, 'full' );
    $block_image_5 = wp_get_attachment_image_src( $image_5, 'full' );
    $block_image_6 = wp_get_attachment_image_src( $image_6, 'full' );                
   ?>

              <section class="home-banners new-home-banners">
               <div class="row"> 
                <div class="home-banners-i">

                     <?php 
                        for( $i=1; $i<=6; $i++ ) {
                     ?>
                       <div class="hbn-item hbn-item-<?php echo $i; ?>"><a href="<?php echo ${'image_'. $i .'_link'}; ?>" style="background-image:url('<?php echo ${'block_image_'. $i}[0]; ?>'); background-size:cover;">
                        
                        <?php if( $i == 1 ) : ?>
                          <p><?php echo ${'image_'. $i .'_description'}; ?></p>
                        <?php endif; ?>
                        
                        <div class="description theme events"><div class="ptbl"><div class="pcell">
                          <?php if( $i != 1 ) : ?>
                          <p><?php echo ${'image_'. $i .'_description'}; ?></p>
                        <?php endif; ?>
                          <p><strong><?php echo ${'image_'. $i .'_title'};?></strong></p>                                                    
                        </div></div></div>
                       </a></div>                           
                     <?php   
                        }                     
                     ?>
                                                   
                    <div class="cl-fl"></div>
                  </div>
                 
                
                </div>
               </div>
              </section>


   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}

/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
add_shortcode( 'sponsor_info', 'sponsor_info_func' );
function sponsor_info_func( $atts ) {
   extract( shortcode_atts( array(
      'title' => '',
      'name' => '',
      'package_creators' => '',
      'package_name' => '',
      'description' => ''
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
   ?>
    <div class="single-award-column vc-sac" style="">
      <h4><?php echo $title; ?></h4>
      <strong><?php echo $name; ?></strong>
      <?php if($package_creators) : ?>
        <span>Package Creator(s): <?php echo $package_creators ?></span>
      <?php endif; ?>
      <?php if($package_name) : ?>
        Package Name: <?php echo $package_name; ?><br>
      <?php endif; ?>   
      <?php if($description) : ?>
        Description: <?php echo $description; ?><br>
      <?php endif; ?>           
    </div>
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
vc_map( array(
      "name" => __( "Sponsor information", "dmfa" ),
      "base" => "sponsor_info",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(   
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Name", "dmfa" ),
            "param_name" => "name",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),         
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Package Creator(s)", "dmfa" ),
            "param_name" => "package_creators",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Package Name", "dmfa" ),
            "param_name" => "package_name",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         )                           
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

/////////////////////////////////////////////////////////////////////////////////   
//add_action( 'vc_before_init', 'dmfa_custom_VC_shortcodes' );
add_action( 'vc_before_init', 'dmfa_custom_VC_shortcodes' );
function dmfa_custom_VC_shortcodes( $blade_libraries ) {

  $sponsor_categories = array( '-' );
  
  
  global $wpdb;
$querystr = "
	SELECT * FROM $wpdb->posts
	LEFT JOIN $wpdb->postmeta ON($wpdb->posts.ID = $wpdb->postmeta.post_id)
	LEFT JOIN $wpdb->term_relationships ON($wpdb->posts.ID = $wpdb->term_relationships.object_id)
	LEFT JOIN $wpdb->term_taxonomy ON($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
	LEFT JOIN $wpdb->terms ON($wpdb->term_taxonomy.term_id = $wpdb->terms.term_id)
	WHERE $wpdb->posts.post_type = 'sponsor'
	ORDER BY $wpdb->postmeta.meta_value ASC
";
  $pageposts = $wpdb->get_results($querystr, OBJECT);
  foreach($pageposts as $pagepost ) {
    if( !in_array( $pagepost->slug, $sponsor_categories ) && $pagepost->slug ) {
      $sponsor_categories[] = $pagepost->slug;
    } 
  }
  //var_dump($pageposts);
  //var_dump($sponsor_categories);
  
vc_map( array(
      "name" => __( "Sponsors", "dmfa" ),
      "base" => "sponsors_layout",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "show_settings_on_create" => true,  
      "params" => array(   
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),          
         array(
            "type" => "dropdown",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Select Sponsor Category", "dmfa" ),
            "param_name" => "sponsor_category",
            "value"       => __( $sponsor_categories, "dmfa" ),
            "description" => __( "", "dmfa" )
         ), 
       )                         
    ) 
); // EOF vc_map


add_shortcode( 'sponsors_layout', 'sponsors_layout_func' );
function sponsors_layout_func( $atts ) {
   extract( shortcode_atts( array(
      'sponsor_category' => '',
      'title' => '',
   ), $atts ) );   
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
   ?>
    
    
    
    <div class="sponsors-row <?php echo $sponsor_category; ?>">
      <div class="sponsors-row-i">
        <div class="title-wrapper"><h3><?php echo $title; ?></h3></div>      
       <?php 
         $dir_args = array(
          'post_type' => 'sponsor',
          'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'sponsor_category',
			'field'    => 'slug',
			'terms'    => $sponsor_category,
		),
	),          
         );
         $dir_q = new WP_Query($dir_args);
         while( $dir_q->have_posts() ) : $dir_q->the_post();
          $data = pods( 'sponsor' ); 
          $sponsor_link = '';
       ?>
          <div class="sponsor-each">
            <div class="sponsor-content">
              
              <?php 
                $sponsor_link = pods_field_display('sponsor',get_the_ID(), 'sponsor_link', true ); 
                if( $sponsor_link ) :
              ?>
                <div class="sponsor-image"><div class="ver-tbl"><div class="ver-cell"><a href="<?php echo $sponsor_link; ?>" target="_blank"><?php the_post_thumbnail('sponsor_logo_uncropped'); ?></a></div></div></div>
              <?php  
                else :
              ?>
                <div class="sponsor-image"><div class="ver-tbl"><div class="ver-cell"><?php the_post_thumbnail('full'); ?></div></div></div>                   
              <?php
                endif;              
              ?>                 
            </div>
          </div>
       <?php
         endwhile; wp_reset_query();
       ?>
       <div class="cl-fl"></div>
      </div>
    </div>
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
}

/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

add_shortcode( 'directors_layout', 'directors_layout_func' );
function directors_layout_func( $atts ) {
   extract( shortcode_atts( array(
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image = wp_get_attachment_image_src( $hover_image, 'full' );
   ?>
    <div class="directors-row">
      <div class="directors-row-i">
       <?php 
         $dir_args = array(
          'post_type' => 'director',
          'posts_per_page' => -1,
         );
         $dir_q = new WP_Query($dir_args);
         while( $dir_q->have_posts() ) : $dir_q->the_post();
          $data = pods( 'director' ); 
       ?>
          <div class="director-each">
            <div class="director-content">
              <div class="director-image"><?php the_post_thumbnail('person_portrait'); ?></div>
              <p><?php the_title(); ?><br>
              <em><?php echo pods_field_display('director',get_the_ID(), 'director_company', true ); ?></em></p>            
            </div>
          </div>
       <?php
         endwhile; wp_reset_query();
       ?>
       <div class="cl-fl"></div>
      </div>
    </div>
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
/////////////////////////////////////////////////////////////////////////////////   
vc_map( array(
      "name" => __( "Directors", "dmfa" ),
      "base" => "directors_layout",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "show_settings_on_create" => false,
      "params" => array(      
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  


add_shortcode( 'awards_title_with_logo', 'awards_title_with_logo_func' );
function awards_title_with_logo_func( $atts ) {
   extract( shortcode_atts( array(
      'hover_image' => '',
      'title' => '',
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image = wp_get_attachment_image_src( $hover_image, 'full' );
   ?>
    <div class="awards-main-title">   
      <img src="<?php echo $block_image[0]; ?>" title="<?php echo $title; ?>">
      <h4 style="margin-bottom:20px;"><?php echo $title; ?></h4>
      <div class="cl-fl"></div>
    </div>    
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
/////////////////////////////////////////////////////////////////////////////////   
vc_map( array(
      "name" => __( "Awards title with logo", "dmfa" ),
      "base" => "awards_title_with_logo",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image", "dmfa" ),
            "param_name" => "hover_image",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),    
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  

add_shortcode( 'awards_numbered_item', 'awards_numbered_item_func' );
function awards_numbered_item_func( $atts, $content ) {
   extract( shortcode_atts( array(
      'number' => '',
      'link' => '',
      'title' => '',
      ''
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
   ?>
  <div class="amb-menu-item">
  <?php if( $link != '' ) : ?><a href="<?php echo $link; ?>"><?php endif; ?>
                                <span class="number"><?php echo $number; ?></span>
                                <div class="amb-mennu-item-content">
                                  <h6><?php echo $title; ?></h6>
                                  <?php echo wpautop($content); ?>                                  
                                </div>
  <?php if( $link != '' ) : ?></a><?php endif; ?>
  </div>
    
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
/////////////////////////////////////////////////////////////////////////////////   
vc_map( array(
      "name" => __( "Awards Numbered Item", "dmfa" ),
      "base" => "awards_numbered_item",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(   
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Number", "dmfa" ),
            "param_name" => "number",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),       
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textarea_html",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Content", "dmfa" ),
            "param_name" => "content",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),                  
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  

add_shortcode( 'hover_image', 'hover_image_func' );
function hover_image_func( $atts ) {
   extract( shortcode_atts( array(
      'hover_image' => '',
      'link' => '',
      'title' => '',
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image = wp_get_attachment_image_src( $hover_image, 'full' );
   ?>
    <div class="hover-image">
      <a href="<?php echo $link; ?>">
        <img src="<?php echo $block_image[0]; ?>" title="<?php echo $title; ?>">
        <div class="caption"><div class="caption-tbl"><div class="caption-cell"><p><?php echo $title; ?></p></div></div></div>
      </a>
    </div>
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
/////////////////////////////////////////////////////////////////////////////////   
vc_map( array(
      "name" => __( "Hover image with caption", "dmfa" ),
      "base" => "hover_image",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image", "dmfa" ),
            "param_name" => "hover_image",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         )         
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
add_shortcode( 'full_image_banner', 'full_image_banner_func' );
function full_image_banner_func( $atts ) {
   extract( shortcode_atts( array(
      'full_image' => '',
      'top_1_title' => '',
      'top_1_link' => '',
      'top_1_caption' => '',
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image = wp_get_attachment_image_src( $full_image, 'full' );
   ?>
<div class="home-banners"><div class="row"><div class="home-banners-i"><div class="hb-above-row">
                    <div class="hb-above-1">   
                      <a href="<?php echo $top_1_link; ?>" style="background-image:url('<?php echo $block_image[0]; ?>'); background-size:cover; background-position:left center;">
                         <p style=""><?php echo $top_1_caption; ?></p>
                        <div class="description theme member"><div class="ptbl"><div class="pcell">
                          <p><strong><?php echo $top_1_title; ?></strong></p>                                                    
                        </div></div></div>
                      </a>
                    </div>   
                    <div class="cl-fl"></div>                                  
</div></div></div></div>
   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
vc_map( array(
      "name" => __( "Full image banner", "dmfa" ),
      "base" => "full_image_banner",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image", "dmfa" ),
            "param_name" => "full_image",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "top_1_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Caption", "dmfa" ),
            "param_name" => "top_1_caption",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),         
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "top_1_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         )         
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
add_shortcode( 'one_fourth_and_three_fourths_banner', 'one_fourth_and_three_fourths_banner_func' );
function one_fourth_and_three_fourths_banner_func( $atts ) {
   extract( shortcode_atts( array(
      'image_1' => '',
      'image_1_title' => '',
      'image_1_link' => '',
      'image_2' => '',
      'image_2_title' => '',
      'image_2_link' => '',      
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image_1 = wp_get_attachment_image_src( $image_1, 'full' );
    $block_image_2 = wp_get_attachment_image_src( $image_2, 'full' );    
   ?>

<section class="home-banners">
               <div class="row"> 
                <div class="home-banners-i">
                  <div class="hb-bottom-row">
                    <div class="hb-bottom-1">
                      <a href="<?php echo $image_1_link; ?>" style="background-image:url('<?php echo $block_image_1[0]; ?>'); background-size:cover; background-position:left center;">
                        
                        <div class="description theme get-involved"><div class="ptbl"><div class="pcell">
                          <p><strong><?php echo $image_1_title; ?></strong></p>                                                    
                        </div></div></div>
                      </a>
                    </div>
                    <div class="hb-bottom-2">
                      <a href="<?php echo $image_2_link; ?>" style="background-image:url('<?php echo $block_image_2[0]; ?>'); background-size:cover; background-position:center 90%;">
                        
                        <div class="description theme awards"><div class="ptbl"><div class="pcell">
                          <p><strong><?php echo $image_2_title; ?></strong></p>                                                    
                        </div></div></div>
                      </a>
                    </div>    
                    <div class="cl-fl"></div>                                  
                  </div>
                
                </div>
               </div>
              </section>


   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
vc_map( array(
      "name" => __( "1/4 + 3/4 image banner", "dmfa" ),
      "base" => "one_fourth_and_three_fourths_banner",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 1", "dmfa" ),
            "param_name" => "image_1",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_1_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_1_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 2", "dmfa" ),
            "param_name" => "image_2",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_2_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_2_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         )                        
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
add_shortcode( 'one_fourth_two_fourths_one_fourth_banner', 'one_fourth_two_fourths_one_fourth_banner_func' );
function one_fourth_two_fourths_one_fourth_banner_func( $atts ) {
   extract( shortcode_atts( array(
      'image_1' => '',
      'image_1_description' => '',
      'image_1_title' => '',      
      'image_1_link' => '',
      'image_2' => '',
      'image_2_description' => '',      
      'image_2_title' => '',
      'image_2_link' => '',   
      'image_3' => '',
      'image_3_description' => '',      
      'image_3_title' => '',
      'image_3_link' => '',         
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   
   ob_start();
    $block_image_1 = wp_get_attachment_image_src( $image_1, 'full' );
    $block_image_2 = wp_get_attachment_image_src( $image_2, 'full' );
    $block_image_3 = wp_get_attachment_image_src( $image_3, 'full' );        
   ?>

              <section class="home-banners">
               <div class="row"> 
                <div class="home-banners-i">

                  
                  
                  <div class="hb-top-row">
                    <div class="hb-top-1"><a href="<?php echo $image_1_link; ?>" style="background-image:url('<?php echo $block_image_1[0]; ?>'); background-size:cover; background-position:left center;">
                        <div class="description theme events"><div class="ptbl"><div class="pcell">
                          <p><?php echo $image_1_description; ?></p><p><strong><?php echo $image_1_title; ?></strong></p>                                                    
                        </div></div></div>
            </a></div>
                    <div class="hb-top-2"><a href="<?php echo $image_2_link; ?>" style="background-image:url('<?php echo $block_image_2[0]; ?>'); background-size:cover; background-position:center 20%;">
                        <div class="description theme events"><div class="ptbl"><div class="pcell">
                         <p><?php echo $image_2_description; ?></p><p><strong><?php echo $image_2_title; ?></strong></p>                                                    
                        </div></div></div>
            </a></div>      
                    <div class="hb-top-3">                                                         
            <a href="<?php echo $image_3_link; ?>" style="background-image:url('<?php echo $block_image_3[0]; ?>'); background-size:cover; background-position:center center;">
                        <div class="description theme events"><div class="ptbl"><div class="pcell">
                          <p><?php echo $image_3_description; ?></p>
                          <p><strong><?php echo $image_3_title; ?></strong></p>                                                    
                        </div></div></div>
            </a>                                                                                                                                 
                    </div>                                                      
                    <div class="cl-fl"></div>
                  </div>
                 
                
                </div>
               </div>
              </section>


   <?php
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
vc_map( array(
      "name" => __( "1/4 + 2/4 + 1/4 image banner", "dmfa" ),
      "base" => "one_fourth_two_fourths_one_fourth_banner",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 1", "dmfa" ),
            "param_name" => "image_1",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),    
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_1_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),              
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_1_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_1_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 2", "dmfa" ),
            "param_name" => "image_2",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_2_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_2_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_2_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Image 3", "dmfa" ),
            "param_name" => "image_3",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Description", "dmfa" ),
            "param_name" => "image_3_description",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),           
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "image_3_title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),      
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Link", "dmfa" ),
            "param_name" => "image_3_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         )                                    
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
add_shortcode( 'sponsor_carousel', 'sponsor_carousel_func' );
function sponsor_carousel_func( $atts ) {
   extract( shortcode_atts( array(
      'number_of_sponsors' => '-1',
      'title' => '',
      'title_button_text',      
      'title_button_link',
      'bottom'
   ), $atts ) );
   //return "<div style='color:{$color};'>foo = {$foo}</div>";   
   ob_start(); 
   ?>
   <section class="sponsors">
               <div class="row"> 
                <div class="sponsors-i">
                  <div class="title-wrapper"><h3><?php echo $title; ?></h3></div>
                  <a href="<?php echo $title_button_link; ?>" class="sponsor-button"><?php echo $title_button_text; ?> <i class="fa fa-angle-right"></i></a>

                  <div class="sponsors-carousel-wrapper">

                    <div class="sponsors-carousel-i  ">
                      <a href="#" class="left-arrow customPrevBtn"><i class="fa fa-angle-left"></i></a>
                      <a href="#" class="right-arrow customNextBtn"><i class="fa fa-angle-right"></i></a>

                   <div class="sponsors-carousel owl-carousel owl-theme">     
   <?php
   $args = array(
    'post_type' => 'sponsor',
    'posts_per_page' => $number_of_sponsors,
    'post_status' => 'publish',
	'tax_query' => array(
		array(
			'taxonomy' => 'sponsor_category',
			'field'    => 'slug',
			'terms'    => array( 'gold', 'silver', 'platinum' ),
		),
	),
    'orderby' => 'menu_order',
   );
   $q = new WP_Query($args);
   while( $q->have_posts() ) : $q->the_post();
     $data = pods( 'sponsor' ); 
     $sponsor_link = '';
   ?> 

                    
                      <div class="item">
              <?php 
                $sponsor_link = pods_field_display('sponsor',get_the_ID(), 'sponsor_link', true ); 
                if( $sponsor_link ) :
              ?>
                <div class="sponsor-image"><div class="ver-tbl"><div class="ver-cell"><a href="<?php echo $sponsor_link; ?>" target="_blank"><?php the_post_thumbnail('sponsor_logo_uncropped'); ?></a></div></div></div>
              <?php  
                else :
              ?>
                <div class="sponsor-image"><div class="ver-tbl"><div class="ver-cell"><?php the_post_thumbnail('sponsor_logo_uncropped'); ?></div></div></div>                   
              <?php
                endif;              
              ?>                          
                                                                
                      </div>                                                                                                                                                                                                                   
    
   <?php
   endwhile; wp_reset_query();
   ?>
    </div>  
                   <div class="cl-fl"></div>                                                                       
                                                                     
                   </div>
                  </div><!-- sponsors-carousel-wrapper -->                        
                </div>
               </div>
              </section>   
   <?php  
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
}
/////////////////////////////////////////////////////////////////////////////////   
vc_map( array(
      "name" => __( "Sponsors carousel", "dmfa" ),
      "base" => "sponsor_carousel",
      "class" => "",
      "category" => __( "Content", " dmfa"),
      "params" => array( 
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Number of sponsors", "dmfa" ),
            "param_name" => "number_of_sponsors",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title", "dmfa" ),
            "param_name" => "title",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),               
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title button text", "dmfa" ),
            "param_name" => "title_button_text",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         ),
         array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __( "Title button link", "dmfa" ),
            "param_name" => "title_button_link",
            "value" => __( "", "dmfa" ),
            "description" => __( "", "dmfa" )
         )         
      )
    ) 
); // EOF vc_map
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\  
?>