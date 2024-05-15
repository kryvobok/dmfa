(function($){

  // Init Skrollr
  //var s = skrollr.init();
 
  // Refresh Skrollr after resizing our sections
 // s.refresh(jQuery('home-about-parallax')); 
 var scroll = jQuery(window).scrollTop();
     if ( scroll >= 125 ) {
        $("body").addClass("scrolled");
    } else {
        $("body").removeClass("scrolled");
    } 

$(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();

    if ( scroll >= 125 ) {
        $("body").addClass("scrolled");
    } else {
        $("body").removeClass("scrolled");
    } 
});

var headerHeight = jQuery('#main-header').outerHeight(true);
var h = document.getElementById('main-header').offsetHeight;
//console.log( headerHeight + " vs " + h );
jQuery('#page').css({'paddingTop':headerHeight+'px'})

    function fullscreen(){
      var new_banner_width = document.documentElement.clientWidth,
          new_banner_height = document.documentElement.clientHeight; 
      
        jQuery('#banner-container').css({
            width: new_banner_width,
            //height: document.documentElement.clientHeight
            height: '800px'
        });          
        
    }
  
    fullscreen();

  // Run the function in case of window resize
  jQuery(window).resize(function() {
       fullscreen();         
    });

  $(document).ready(function(){

  if ( document.documentElement.clientWidth > '800' ) {

    jQuery('.home-widgets').find('.wpb_text_column .wpb_wrapper').matchHeight({
     byRow: false,
     //target: '.item',
    });

    jQuery('.investments-grid-block').find('.igi-i-box').matchHeight({
     byRow: false,
     //target: '.item',
    });
    
  }  

  var owl = $('.investments-slider');
    owl.owlCarousel({
      autoplay:true,
      autoplayTimeout:8000,
      center: false,
      items:3,
      loop:true,
      margin:0,
      responsive:{
        1024:{
            items:3
        },
        768:{
            items:2
        },
        480:{
            items:1
        }, 
        320:{
            items:1
        }               
      },
      onResized: callback_resized,
    });
    
    function callback_resized() {
      jQuery('.investments-slider').find('.islider-i-box').matchHeight({
        byRow: false,
        //target: '.item',
      });      
    }
    
    // Go to the next item
    $('.investments-slider-block #next').click(function() {
      owl.trigger('next.owl.carousel');
    });
    $('.investments-slider-block #prev').click(function() {
      owl.trigger('prev.owl.carousel');
    }); 

    jQuery('.investments-slider').find('.islider-i-box').matchHeight({
     byRow: false,
     //target: '.item',
    });    


  /////////////////////////
  ////////////////////////////////////////////
  //Calculate sidebar height
  function sidebar_height_calc(){
    var with_sidebar_width = 1024;
    var doc_width = document.documentElement.clientWidth;
    if( doc_width > 1024 && document.getElementById('sidebar') !== null && document.getElementById('contents') !== null ) {     
      
      var sidebar_h = document.getElementById('sidebar').clientHeight;
      var content_h = document.getElementById('contents').clientHeight;
      if( content_h > sidebar_h ) {
        var s1 = document.getElementById("sidebar");
        s1.style.height = content_h+"px";
      }
    } else {
      if( document.getElementById('sidebar') !== null ) {
        var s1 = document.getElementById("sidebar");
        s1.style.height = "auto"; 
      }   
    }
  }





      //sidebar_height_calc(); //call function to calculate sidebar height
  
  
  
  




  



  ////////////////////////////////////////////////////
  ///////////////////////////////////////
  //////////////////////////////
 

  jQuery(document).on('click tap', '#toggle-menu', function(e){
    e.preventDefault();
    var total_viewport_width = document.documentElement.clientWidth;
    var clicked_anchor = jQuery(this);
    

      var mobile_menu = jQuery('.mobile-menu');
      jQuery(mobile_menu).stop();
      var menu_visible = jQuery(mobile_menu).css('display');
      if( menu_visible == 'none' ){
        jQuery(mobile_menu).fadeIn(250);
        jQuery(clicked_anchor).find('i').removeClass('fa-bars').addClass('fa-close');
      } else {
        jQuery(mobile_menu).fadeOut(250);
        jQuery(clicked_anchor).find('i').removeClass('fa-close').addClass('fa-bars');        
      }    
    
    return false;
  });    
  
	$('p a[href^="#"], section a[href^="#"], a.vertical').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 600, 'swing' );
      
      
	});


  
 $(document).on('submit','form#subscribe-me', function (e) {
    // everything looks good!
    console.log('Good');
    e.preventDefault();
    
    var email_address = $(this).find('input.email-address').val();
    var first_name = $(this).find('input.first-name').val();    
    var last_name = $(this).find('input.last-name').val();    
    
    if( !first_name || !last_name || !email_address ) {
      alert('Please fill all required data!');
      return false;
    }
    
    //PayPal selected
    var fd = new FormData();                                                           
    var admin_url = customAjax.ajaxurl; 
    var custom_nonce = customAjax.custom_nonce;   
    var cursor_Y = e.pageY;
    
    
    fd.append('action', 'mailchimp_signup');     
    fd.append('custom_nonce', custom_nonce);
    fd.append('email_address', email_address); 
    fd.append('first_name', first_name); 
    fd.append('last_name', last_name);                                    

    $.ajax({
      type: 'POST',
      url: admin_url,
      data: fd,
      contentType: false,
      processData: false,
      beforeSend: function(response){
          
      },
      success: function(response){
        var obj = jQuery.parseJSON(response);
        console.log(obj.message);  
        var available_viewport = document.documentElement.clientHeight;
        var modal_available_height = Math.ceil( available_viewport*0.9 );
        
      }, //success
      complete: function(){
                   
      },
                                        
    });
    return false;

      
 });  
  
  
  }); //document ready

  


})(jQuery);





  


    
    


      
  
