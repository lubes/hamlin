/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
          
        // Mobile Menu
        $('.menu-toggle').click(function(){
            $(this).toggleClass('open');
            $('.nav-primary').toggleClass('active');
            if($(this).hasClass('open')) {
                $(this).html('<i class="ion-android-close"></i>');
            } else {
                $(this).html('<i class="ion-navicon"></i>');
            }
        });       

        window.sr = ScrollReveal({ reset: false });
        sr.reveal('.fadein', {
            duration   : 500,
            scale      : 1,
            distance   : '20px',
            origin     : 'bottom',
            reset      : false,
            easing     : 'ease-out',
            viewFactor : 0.5
        });          
          
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 0
        });          
          
        // Show Newsletter Modal on Click
        $('.signup').click(function() {
            $('#newsletterModal').modal('show'); 
        });
          
        $('.posts-slider').slick({
            dots: true,
            arrows: true,
            infinite: false, 
            slidesToShow: 1, 
            slidesToScroll: 1,
            speed: 600,
            autoplay: false,
            autoplaySpeed: 4000,
            pauseOnHover: false,
            adaptiveHeight: true,
            appendArrows: $('.navs-wrap'),
            prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-left'></i></div>",
            nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-right'></i></div>",
        });           
          
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Directors page, note the change from about-us to about_us.
    'post_type_archive_directors': {
      init: function() {
        // JavaScript to be fired on the directors page
          
        // Load posts via AJAX
        $(".post-link").click(function(event) {
            event.preventDefault();
            $("#project-container").removeClass('active')
            var post_id = $(this).attr('rel');
            var ajaxURL = site.ajaxurl;
            $.ajax({
                type: 'POST',
                url: ajaxURL,
                data: {"action": "load-content", post_id: post_id },
                success: function(response) {
                    $("#project-container").html(response);
                    return false;
                },
                complete: function() {
                    $("#project-container").addClass('active');
                }
            });
        }); 
          
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
