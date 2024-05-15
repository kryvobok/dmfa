(function ($) {

    // Init Skrollr
    //var s = skrollr.init();

    // Refresh Skrollr after resizing our sections
    // s.refresh(jQuery('home-about-parallax')); 
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 750) {
        $("body").addClass("scrolled");
    } else {
        $("body").removeClass("scrolled");
    }

    $(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 300) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    });


    // Run the function in case of window resize

    $(document).ready(function () {

        ////////////////////////////////////////////////////
        ///////////////////////////////////////
        //////////////////////////////
        function resize_elements() {
            jQuery('.director-content p').css({'height': 'auto'});
            jQuery('.single-award-column h4').matchHeight({
                byRow: true,
                //target: '.item',
            });


            jQuery('.single-award-column').matchHeight({
                byRow: true,
                //target: '.item',
            });

            jQuery('.award-block').matchHeight({
                byRow: true,
                //target: '.item',
            });

            jQuery('.director-content p').matchHeight({
                byRow: true,
                //target: '.item',
            });
        }


        if (document.documentElement.clientWidth > '667') {
            resize_elements();
        }
        jQuery(window).resize(function () {
            resize_elements();
        });


        // Initialize weddings carousels
        var sponsors_owl = $('.sponsors-carousel');
        sponsors_owl.owlCarousel({
            // loop:true,
            loop: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplaySpeed: 750,
            margin: 20,
            nav: false,
            responsive: {
                0: {items: 1},
                480: {items: 2},
                600: {items: 3},
                1000: {items: 5},
            }
        });
        $('.sponsors-carousel-i .customNextBtn').click(function (e) {
            e.preventDefault();
            sponsors_owl.trigger('next.owl.carousel');
            return false;
        })
        $('.sponsors-carousel-i .customPrevBtn').click(function (e) {
            e.preventDefault();
            sponsors_owl.trigger('prev.owl.carousel');
            return false;
        })

        ////////////////////////////////////////////////////
        ///////////////////////////////////////
        //////////////////////////////

        jQuery(document).on('click tap', '.open-iframe', function (e) {
            var new_iframe_src = jQuery(this).attr('href');
            $.magnificPopup.open({
                items: {
                    src: new_iframe_src, // can be a HTML string, jQuery object, or CSS selector
                    type: 'iframe'
                }
            });

            return false;
        });


        jQuery(document).on('click tap', '#toggle-menu', function (e) {
            e.preventDefault();
            var total_viewport_width = document.documentElement.clientWidth;
            var clicked_anchor = jQuery(this);

            var mobile_menu = jQuery('.mobile-menu');
            jQuery(mobile_menu).stop();
            var menu_visible = jQuery(mobile_menu).css('display');
            if (menu_visible == 'none') {
                jQuery(mobile_menu).fadeIn(250);
                jQuery(clicked_anchor).find('i').removeClass('fa-bars').addClass('fa-times');
            } else {
                jQuery(mobile_menu).fadeOut(250);
                jQuery(clicked_anchor).find('i').removeClass('fa-times').addClass('fa-bars');
            }

            return false;
        });

        $(' a.vertical').on('click', function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);
            var distance_top_without_header = $target.offset().top - $('#main-header .sticky-header').outerHeight(true);

            $('html, body').stop().animate({
                'scrollTop': distance_top_without_header
            }, 600, 'swing');
        });


        $(document).on('click tap', '#close-popup', function (e) {
            // everything looks good!    
            e.preventDefault();

            return false;
        });

        function galleryWithThumbnailsSlider() {
            const slider = $('.gallery-with-thumbnails');

            if (slider) {
                slider.each(function () {
                    new Carousel(this, {
                        Dots: false,
                        Thumbs: {
                            type: "classic",
                        },
                    }, {Thumbs});
                })
            }
        }

        galleryWithThumbnailsSlider();

    }); //document ready


})(jQuery);