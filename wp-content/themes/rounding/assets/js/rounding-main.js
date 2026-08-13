(function ($) {
    
"use strict";

    // window-load
    $(window).on('load', function () {
        $("#loading").fadeOut(500);
    })

    // mobile menu
    $("#mobile-menu").meanmenu({
        meanMenuContainer: ".mobile-menu",
        meanScreenWidth: "991"
    });

    // offcanvas menu
    $(".menu-tigger").on("click", function () {
        $(".offcanvas-menu,.offcanvas-overly").addClass("active");
        return false;
    });
    $(".menu-close,.offcanvas-overly").on("click", function () {
        $(".offcanvas-menu,.offcanvas-overly").removeClass("active");
    });

    /* TOP Menu Stick  */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 160) {
            $('#sticky-header').addClass("sticky-menu");
            $('#menufix').addClass("menufix-height");
        }
        else {
            $('#sticky-header').removeClass("sticky-menu");
            $('#menufix').removeClass("menufix-height");
        }
    });
    
    $(".pricing-box").hover(function(){
        var cur = $(this);
        $(".pricing-box").removeClass("active");
        cur.addClass("active");
        return true;
    });


    // blog

    $('.blog-active').slick({
        slidesToShow: 3,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.portfolio-clients').slick({
        slidesToShow: 5,
        arrows: false,
        dots: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    arrows: false,
                    slidesToShow: 4
                }
            }, 
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    // counterUp

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


    // popup
    $('.view').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
    });

    $('.video-view').magnificPopup({
        type: 'iframe',
    });

    $('.portfolio-area').imagesLoaded( function() {
        // portfolio - active
        var $grid = $('.portfolio-active').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1
            }
        })

        // filter items on button click
        $('.portfolio-menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
        //for menu active class
        $('.portfolio-menu button').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });

    });
    // Scrollup
    $(document).on("scroll", function () {
      if (jQuery(this).scrollTop() > 500) {
        jQuery('.scroll-to-top').fadeIn();
      } else {
        jQuery('.scroll-to-top').fadeOut();
      }
    });

    jQuery('.scroll-to-top').click(function () {
      jQuery("html, body").animate({
        scrollTop: 0
      }, 1500);
      return false;
    });


    // Elements Animation
    if(jQuery('.wow').length){
        var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true       // act on asynchronously loaded content (default is true)
          }
        );
        wow.init();
    }

})(jQuery);