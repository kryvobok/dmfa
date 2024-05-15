<?php
    load_theme_textdomain('dmfa');
    
    require_once('libs/visual_composer_shortcodes.php');
    
    add_theme_support('post-thumbnails');
    
    add_filter('use_widgets_block_editor', '__return_false');
    
    if (function_exists('add_image_size')) {
        //add_image_size( 'post_preview_thumb', 320, 9999 ); //300 pixels wide (and unlimited height)
        add_image_size('post_preview_thumb', 500, 300, true); //(cropped)
        add_image_size('person_portrait', 240, 320, true); //(cropped)
        add_image_size('sponsor_logo_uncropped', 190, 70, false); //(cropped)
        add_image_size('sponsor_logo_cropped', 190, 70, true); //(cropped)
        //add_image_size( 'blog_preview_thumbnail', 275, 135, true ); //(cropped)
        //add_image_size( 'portfolio_grid', 360, 360, true ); //(cropped)
    }
    
    
    function make_href_root_relative($input)
    {
        return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
    }
    
    function pretty_text($content)
    {
        $pretty_text = "";
        $raw_content = trim(strip_tags(strip_shortcodes($content)));
        $pretty_text = html_entity_decode($content);
        for ($i = 0; $i < 5; $i++) {
            $blog_post = stripslashes($blog_post);
        }
        $pretty_text = str_replace(array('//', '\\'), '', $pretty_text);
        return $pretty_text;
    }
    
    function pretty_excerpt($content, $size = 25, $read_more = "")
    {
        $pretty_excerpt = "";
        $raw_content = strip_tags(strip_shortcodes($content));
        $words = explode(" ", $raw_content);
        for ($a = 0; $a <= $size; $a++) {
            $pretty_excerpt .= $words[$a] . " ";
        }
        echo $pretty_excerpt . "" . $read_more;
    }
    
    function get_pretty_excerpt($content, $size = 25, $read_more = "")
    {
        $pretty_excerpt = "";
        $raw_content = strip_tags(strip_shortcodes($content));
        $words = explode(" ", $raw_content);
        for ($a = 0; $a <= $size; $a++) {
            $pretty_excerpt .= $words[$a] . " ";
        }
        return $pretty_excerpt . "" . $read_more;
    }
    
    function pretty_link($content)
    {
        $pretty_link = "";
        $raw_content = strip_tags(strip_shortcodes($content));
        $words = explode(" ", $raw_content);
        for ($a = 0; $a <= sizeof($words); $a++) {
            $pretty_link .= $words[$a] . "_";
        }
        return $pretty_link;
    }
    
    register_nav_menus(array(
        'main_navigation' => 'Main Navigation',
        'mobile_navigation' => 'Mobile Navigation',
        'footer_navigation' => 'Footer Navigation',
    ));
    
    add_filter('the_content', 'remove_empty_p', 20, 1);
    function remove_empty_p($content)
    {
        $content = force_balance_tags($content);
        return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
    }
    
    /************************
     *  Our Label Array Function
     ************************/
    function post_type_labels($singular, $plural = '')
    {
        if ($plural == '') $plural = $singular . 's';
        
        return array(
            'name' => _x($plural, 'post type general name'),
            'singular_name' => _x($singular, 'post type singular name'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New ' . $singular),
            'edit_item' => __('Edit ' . $singular),
            'new_item' => __('New ' . $singular),
            'view_item' => __('View ' . $singular),
            'search_items' => __('Search ' . $plural),
            'not_found' => __('No ' . $plural . ' found'),
            'not_found_in_trash' => __('No ' . $plural . ' found in Trash'),
            'parent_item_colon' => ''
        );
    }

// Create our post type
    add_action('init', 'create_cpts');
    function create_cpts()
    {
        /*
             $args = array(
             'labels' => post_type_labels( 'Slide','Slides' ),
             'public' => true,
             'publicly_queryable' => true,
             'show_ui' => true,
             'show_in_menu' => true,
             'query_var' => true,
             'rewrite' => array(
               'slug' => 'slide'
             ),
             'capability_type' => 'post',
             'has_archive' => true,
             'hierarchical' => false,
             'menu_position' => 9,
             'supports' => array( 'title','editor','custom-fields','thumbnail' )
             );
             register_post_type( 'slides', $args );
        */
        
    }
    
    
    function sidebars_init()
    {
        
        register_sidebar(array(
            'name' => __('Right Sidebar'),
            'id' => 'right_sidebar',
            'description' => __('Widgets in the Sidebar'),
            'before_widget' => '<section>',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="sidebar-widget-title">',
            'after_title' => '</h2>',
        ));
        
        register_sidebar(array(
            'name' => __('Posts Sidebar'),
            'id' => 'post_sidebar',
            'description' => __('Widgets on posts'),
            'before_widget' => '<aside class="widget">',
            'after_widget' => '</aside>',
            'before_title' => '<h5 class="sidebar-widget-title">',
            'after_title' => '</h5>',
        ));
        
        register_sidebar(array(
            'name' => __('Footer'),
            'id' => 'footer_column_1',
            'description' => __('Widgets in the Footer'),
            'before_widget' => '<div class="footer-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h6>',
            'after_title' => '</h6>',
        ));
        
    }
    
    add_action('widgets_init', 'sidebars_init');

//Add our scripts
    
    function theme_scripts()
    {
        wp_enqueue_script('jquery_easing', get_bloginfo('template_directory') . '/js/jquery.easing.1.3.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery_extends', get_bloginfo('template_directory') . '/js/jquery.extends.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('skrollr', get_bloginfo('template_directory') . '/js/skrollr.js', array('jquery'), '1.0.0', true);
        
        wp_enqueue_script('jquery_transit', get_template_directory_uri() . '/js/jquery.transit.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery_backgroundSize', get_bloginfo('template_directory') . '/js/jquery.backgroundSize.js', array('jquery'), '1.0.0', true);
        wp_enqueue_style('jquery_slick_style', get_template_directory_uri() . '/js/slick/slick.css', array(), '1.0.0');
        wp_enqueue_script('jquery_slick_slider', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0.0', true);
        
        wp_enqueue_style('jquery_owl_style', get_template_directory_uri() . '/js/owl.carousel.min.css', array(), '1.0.0');
        wp_enqueue_script('jquery_owl_slider', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
        
        
        wp_enqueue_script('jquery_magnific_popup', get_template_directory_uri() . '/js/magnific-popup.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_style('jquery_magnific_popup_style', get_template_directory_uri() . '/js/magnific-popup.css', array(), '1.0.0', 'all');
        wp_enqueue_script('jquery_matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery_smoothscroll', get_template_directory_uri() . '/js/smoothscroll.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery_appear', get_template_directory_uri() . '/js/appear.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery_scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery_localScroll', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array('jquery'), '1.0.0', true);
        
        wp_enqueue_style('jquery_shadowbox_style', get_template_directory_uri() . '/js/shadowbox/shadowbox.css', array(), '1.0.0', 'all');
        wp_enqueue_script('jquery_shadowbox', get_template_directory_uri() . '/js/shadowbox/shadowbox.js', array('jquery'), '1.0.0', true);
        
        // 	fancyapps
        wp_enqueue_style('fancyapps_style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css', array(), '5.0', 'all');
        wp_enqueue_style('fancyapps_thumbs_style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.thumbs.css', array(), '5.0', 'all');
        wp_enqueue_script('fancyapps_script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js', array('jquery'), '5.0', true);
        wp_enqueue_script('fancyapps_thumbs_script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.thumbs.umd.js', array('jquery'), '5.0', true);
        
        wp_register_script("custom_scripts", get_stylesheet_directory_uri() . '/js/custom-functions.js', array('jquery'), '1.0.0', true);
        wp_localize_script('custom_scripts', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'custom_nonce' => wp_create_nonce('custom-nonce'),));
        wp_enqueue_script('custom_scripts');
    }
    
    add_action('wp_enqueue_scripts', 'theme_scripts');
    
    
    function upcoming_event_shortcode($atts, $content = null)
    {
        $a = shortcode_atts(array(
            'class' => 'caption',
        ), $atts);
        
        ob_start();
        ?>
        
        <?php
        $upcoming_events = new WP_Query(
            array(
                'post_type' => 'upcoming_event',
                'posts_per_page' => 1,
                'orderby' => 'menu_order',
            )
        );
        if ($upcoming_events->have_posts()) {
            
            while ($upcoming_events->have_posts()) : $upcoming_events->the_post();
                $event_date = get_post_meta(get_the_ID(), 'event_date', true);
                $post_id = get_the_ID();
                $post_thumbnail_id = get_post_thumbnail_id();
                $background_image = wp_get_attachment_url($post_thumbnail_id);
                ?>
                <a href="<?php echo get_post_meta(get_the_ID(), 'register_link', true); ?>"
                   style="backgorund-image:url(' <?php echo $background_image; ?> ');">
                    <div class="description theme events">
                        <div class="ptbl">
                            <div class="pcell">
                                <p><?php echo $event_date; ?></p>
                                <p><strong><?php the_title(); ?></strong></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;
            wp_reset_query();
            
        }
        ?>
        <?php
        return ob_get_clean();
    }
    
    add_shortcode('upcoming_event', 'upcoming_event_shortcode');
    
    function past_event_shortcode($atts, $content = null)
    {
        $a = shortcode_atts(array(
            'class' => 'caption',
        ), $atts);
        
        ob_start();
        ?>
        
        <?php
        $upcoming_events = new WP_Query(
            array(
                'post_type' => 'past_event',
                'posts_per_page' => 1,
                'orderby' => 'menu_order',
            )
        );
        if ($upcoming_events->have_posts()) {
            
            while ($upcoming_events->have_posts()) : $upcoming_events->the_post();
                $event_date = get_post_meta(get_the_ID(), 'event_date', true);
                $post_id = get_the_ID();
                $post_thumbnail_id = get_post_thumbnail_id();
                $background_image = wp_get_attachment_url($post_thumbnail_id);
                ?>
                <a href="<?php echo get_post_meta(get_the_ID(), 'view_link', true); ?>">
                    <div class="description theme events">
                        <div class="ptbl">
                            <div class="pcell">
                                <p>Missed our last event?<br>Get the presentation</p>
                                <p><strong><?php the_title(); ?></strong></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;
            wp_reset_query();
            
        }
        ?>
        <?php
        return ob_get_clean();
    }
    
    add_shortcode('past_event', 'past_event_shortcode');
    
    function partner_event_shortcode($atts, $content = null)
    {
        $a = shortcode_atts(array(
            'class' => 'caption',
        ), $atts);
        
        ob_start();
        ?>
        
        <?php
        $upcoming_events = new WP_Query(
            array(
                'post_type' => 'partner_event',
                'posts_per_page' => 1,
                'orderby' => 'menu_order',
            )
        );
        if ($upcoming_events->have_posts()) {
            
            while ($upcoming_events->have_posts()) : $upcoming_events->the_post();
                $event_date = get_post_meta(get_the_ID(), 'event_date', true);
                $post_id = get_the_ID();
                $post_thumbnail_id = get_post_thumbnail_id();
                $background_image = wp_get_attachment_url($post_thumbnail_id);
                ?>
                <a href="<?php echo get_post_meta(get_the_ID(), 'register_link', true); ?>" style="">
                    <div class="description theme events">
                        <div class="ptbl">
                            <div class="pcell">
                                <p><?php echo $event_date; ?></p>
                                <p><strong><?php the_title(); ?></strong></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;
            wp_reset_query();
            
        }
        ?>
        <?php
        return ob_get_clean();
    }
    
    add_shortcode('partner_event', 'partner_event_shortcode');
////////////////////////////////////////////////////////////////////////////////////////////////////
    add_shortcode('upcoming_events_sidebar', 'upcoming_events_sidebar_shortcode');
    
    function upcoming_events_sidebar_shortcode($atts, $content = null)
    {
        $a = shortcode_atts(array(
            'class' => 'caption',
        ), $atts);
        
        ob_start();
        ?>

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
                    if ($upcoming_events->have_posts()) {
                        
                        while ($upcoming_events->have_posts()) : $upcoming_events->the_post();
                            ?>
                            <li>
                                <div class="article-image">
                                    <?php
                                        if ('' != get_the_post_thumbnail()) :
                                            echo '<a class="with-image" href="' . get_post_meta(get_the_ID(), 'register_link', true) . '">';
                                            the_post_thumbnail('thumbnail');
                                            echo '</a>';
                                        else:
                                            echo '<a class="no-image" href="' . get_post_meta(get_the_ID(), 'register_link', true) . '"></a>';
                                        endif;
                                    ?>
                                </div>
                                <div class="article-text">
                                    <a href="<?php echo get_post_meta(get_the_ID(), 'register_link', true); ?>"><?php the_title(); ?></a>
                                    <p><?php echo get_post_meta(get_the_ID(), 'event_date', true); ?></p>
                                </div>
                                <div class="cl-fl"></div>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_query();
                        
                    }
                ?>

            </ul>
        </div>
        <?php
        return ob_get_clean();
    }

////////////////////////////////////////////////////////////////////////////////////////////////////
    add_shortcode('past_events_sidebar', 'past_events_sidebar_shortcode');
    
    function past_events_sidebar_shortcode($atts, $content = null)
    {
        $a = shortcode_atts(array(
            'class' => 'caption',
        ), $atts);
        
        ob_start();
        ?>
        <div class="indsutry-info-articles">
            <ul>
                <?php
                    $upcoming_events = new WP_Query(
                        array(
                            'post_type' => 'past_event',
                            'posts_per_page' => 2,
                            'orderby' => 'menu_order',
                        )
                    );
                    if ($upcoming_events->have_posts()) {
                        
                        while ($upcoming_events->have_posts()) : $upcoming_events->the_post();
                            ?>
                            <li>
                                <div class="article-image">
                                    <?php
                                        if ('' != get_the_post_thumbnail()) :
                                            echo '<a class="with-image open-iframe" href="' . get_post_meta(get_the_ID(), 'view_link', true) . '">';
                                            the_post_thumbnail('full');
                                            echo '</a>';
                                        else:
                                            echo '<a class="no-image open-iframe" href="' . get_post_meta(get_the_ID(), 'view_link', true) . '"></a>';
                                        endif;
                                    ?>
                                </div>
                                <div class="article-text">
                                    <a href="<?php echo get_post_meta(get_the_ID(), 'view_link', true); ?>"
                                       class="open-iframe"><?php the_title(); ?></a>
                                    <p><?php echo get_post_meta(get_the_ID(), 'event_date', true); ?></p>
                                </div>
                                <div class="cl-fl"></div>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_query();
                        
                    }
                ?>

            </ul>
        </div>
        <?php
        return ob_get_clean();
    }
    
    function defer_parsing_of_js($url)
    {
        if (FALSE === strpos($url, '.js')) return $url;
        if (strpos($url, 'jquery.js')) return $url;
//return $url." defer='defer' ";
        return $url;
    }
    
    add_filter('clean_url', 'defer_parsing_of_js', 11, 1);
    
    
    /**
     *  Note 1: Replace the placeholder string below ('css-selector-for-the-close-button')
     *  with the actual CSS selector (HTML ID or class attribute) assigned to the target
     *  attachment (for example, image or graphic).
     *
     *  Note 2: Replace the popup ID used below ('#popmake-123') with the
     *  value '#popmake-{integer}' used within your popup.  From the WP Admin, refer
     *  to 'Popup Maker' -> 'All Popups' -> 'CSS Classes (column)' -> to find
     *  the popup ID.
     *
     *  Add the following code to your theme (or child-theme)
     *  'functions.php' file starting with 'add_action()'.
     * -------------------------------------------------------------------------- */
    add_action('wp_footer', 'my_custom_popup_scripts', 500);
    /**
     *  Close a popup by targeting a specific HTML element within a popup container.
     *
     * @return void
     * @since 1.0.0
     *
     */
    function my_custom_popup_scripts()
    { ?>

        <script type="text/javascript">

            jQuery(document).on('click tap', '#popmake-1495 .mn-subscribe-button', function () {
                console.log('subscribed');
                jQuery('#popmake-1495').trigger('pumSetCookie');
            });


        </script>
        <style>
            #popmake-1495 a.mn-subscribe-show {
                display: none;
            }

            #popmake-1495 .mn-subscribe-form {
                display: block;
                opacity: 1;
                height: auto;
            }

            #popmake-1495 .mn-subscribe-form .mn-subscribe-email {
                margin-right: 150px;
            }

            #popmake-1495 .mn-subscribe-form .mn-subscribe-email input {
                padding: 10px;
                background: #efeef;
                color: #404040;
            }

            #popmake-1495 .mn-subscribe-form .mn-subscribe-button {
                background: #fb7701;
                border: solid 1px #fb7701;
                margin: 0;
                color: #fff;
                display: inline-block;
                width: auto;
                font-size: 15px;
                font-weight: 400;
                line-height: 1em;
                position: relative;
                cursor: pointer;
                text-transform: uppercase;
                padding: 0.75em 1.5em;
                font-family: 'Montserrat', sans-serif;
                transition: all ease 250ms;
            }

            #popmake-1495 .mn-subscribe-form .mn-subscribe-button:hover {
                background: #000;
                border: solid 1px #000;
                color: #fff;
                display: inline-block;
                width: auto;
                font-weight: 400;
                position: relative;
            }
        </style>
        <?php
        
    }
    
    /*Days Countdown Shortcode*/
    function days_countdown_shortcode($atts)
    {
        $a = shortcode_atts(array(
            'date' => 'date',
            'days' => 10,
        ), $atts);
        $now = time(); // or your date as well
        $your_date = strtotime($a['date']);
        $datediff = $your_date - $now;
        $days = round($datediff / (60 * 60 * 24));
        $round_width = 560 / $a['days'] * ($a['days'] - $days);
        if ($days != 1) {
            $label = 'Days';
        } else {
            $label = 'Day';
        }
        if ($days < 1) {
            $days = 0;
        }
        $days_countdown = '
  <div class="circle">
    <svg style="">
      <circle cx="90" cy="90" r="90" style="" class="back_circle"></circle>
      <circle cx="90" cy="90" r="90" id="dd" class="front_circle" style="stroke-dashoffset:' . $round_width . ';"></circle>
    </svg>
    <div class="days">' . $days . '<br><span>' . $label . ' Left To Enter</span></div>
  </div>';
        return $days_countdown;
    }
    
    add_shortcode('days_countdown', 'days_countdown_shortcode');


// Add custom gallery block to WPBakery Page Builder
    function custom_gallery_block_wpbakery()
    {
        vc_map(
            array(
                "name" => __("Gallery with thumbnails", "dmfa"),
                "base" => "custom_gallery_block",
                "category" => __("Content", "dmfa"),
                "params" => array(
                    array(
                        "type" => "textfield",
                        "heading" => __("Title", "dmfa"),
                        "param_name" => "title",
                        "description" => __("Enter the title for your gallery.", "dmfa"),
                    ),
                    array(
                        "type" => "attach_images",
                        "heading" => __("Images", "dmfa"),
                        "param_name" => "images",
                        "description" => __("Select images for your gallery.", "dmfa"),
                    ),
                ),
            )
        );
    }
    
    add_action('vc_before_init', 'custom_gallery_block_wpbakery');


// Shortcode output
    function custom_gallery_block_output($atts)
    {
        $atts = shortcode_atts(
            array(
                'title' => '',
                'images' => '',
            ),
            $atts,
            'custom_gallery_block'
        );
        
        $title = $atts['title'];
        $images_ids = explode(',', $atts['images']);
        $output = '<div class="gallery-with-thumbnails">';
        
        if (!empty($title)) {
            $output .= '<h2 class="gallery-with-thumbnails__title">' . esc_html($title) . '</h2>';
        }
    
        $output .= '<div class="gallery-with-thumbnails_slider f-carousel">';
        
        foreach ($images_ids as $image_id) {
            $image_src = wp_get_attachment_image_src($image_id, 'large');
            $output .= '<div class="gallery-with-thumbnails__slide f-carousel__slide" data-thumb-src="' . esc_url($image_src[0]) . '"><img width="100%" height="auto" data-lazy-src="' . esc_url($image_src[0]) . '" alt="" /></div>';
        }
        
        $output .= '</div>';
        $output .= '</div>';
        
        return $output;
    }
    
    add_shortcode('custom_gallery_block', 'custom_gallery_block_output');