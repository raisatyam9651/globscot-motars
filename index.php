<?php
$current_page = 'index';
$page_title = 'PMDC Motor Manufacturer in India | Globe Scott Motors';
$meta_description = 'Globe Scott Motors Pvt. Ltd. is a premier PMDC motor manufacturer in India since 1985. We engineer custom PMDC motors, BLDC motors, geared motors & transaxle drives.';
$body_class = 'home page-template page-template-page-template page-template-blank-page page-template-page-templateblank-page-php page page-id-27 wpb-js-composer js-comp-ver-6.1 vc_responsive';
$extra_head_content = <<<'EOD'
<style data-type="vc_shortcodes-custom-css">.vc_custom_1552817809723{padding-top: 90px !important;padding-bottom: 92px !important;}.vc_custom_1611056463305{padding-top: 100px !important;padding-bottom: 65px !important;background-color: #f4f7fc !important;}.vc_custom_1581396682668{padding-top: 0px !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1581396710784{padding-top: 0px !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1611061407800{padding-top: 0px !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1611062053098{padding-top: 0px !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1610010728183{padding-top: 90px !important;padding-bottom: 70px !important;}.vc_custom_1610703772527{background-image: url(/wp-content/uploads/2020/02/AdobeStock_212814481_Preview.jpeg?id=2558) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1611060134647{padding-top: 90px !important;padding-bottom: 20px !important;}.vc_custom_1611059732564{padding-top: 75px !important;padding-bottom: 75px !important;background-color: #ffffff !important;}.vc_custom_1581485638370{margin-top: -127px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}.vc_custom_1610014956658{margin-top: 2% !important;}.vc_custom_1611057383033{padding-bottom: 100px !important;}.vc_custom_1611054341963{margin-top: -38px !important;margin-bottom: 45px !important;}.vc_custom_1611054366124{margin-top: -38px !important;margin-bottom: 45px !important;}.vc_custom_1611054387660{margin-top: -38px !important;margin-bottom: 45px !important;}.vc_custom_1547372057966{margin-bottom: 35px !important;}.vc_custom_1552462676632{margin-top: -38px !important;margin-bottom: 45px !important;}.vc_custom_1610703560120{background-image: url(/wp-content/uploads/2020/03/p1.jpg?id=2973) !important;}.vc_custom_1581484702546{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1550469080349{padding-left: 0px !important;}.vc_custom_1610703602125{background-image: url(/wp-content/uploads/2020/03/p2.jpg?id=2975) !important;}.vc_custom_1581484713071{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1610703623110{background-image: url(/wp-content/uploads/2020/03/p7.jpeg?id=2986) !important;}.vc_custom_1581484726630{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1550469080349{padding-left: 0px !important;}.vc_custom_1610703637502{background-image: url(/wp-content/uploads/2020/03/p4.jpg?id=2980) !important;}.vc_custom_1581484738719{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1610703676417{background-image: url(/wp-content/uploads/2020/03/p6.jpg?id=2984) !important;}.vc_custom_1581484753718{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1550469080349{padding-left: 0px !important;}.vc_custom_1610703665104{background-image: url(/wp-content/uploads/2020/03/p4.jpg?id=2980) !important;}.vc_custom_1581484738719{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1610703676417{background-image: url(/wp-content/uploads/2020/03/p6.jpg?id=2984) !important;}.vc_custom_1581484753718{padding-top: 45px !important;padding-bottom: 45px !important;}.vc_custom_1550469080349{padding-left: 0px !important;}.vc_custom_1546250337591{margin-bottom: -30px !important;}.vc_custom_1611059896603{padding-bottom: 50px !important;}</style>
EOD;

require_once __DIR__ . '/includes/header.php';
?>

<!-- End of  Header 
    ============================================= -->
<main class="normal-footer"><div class="container">
<div class="row">
<div class="col-md-12">
<div class="vc_row section-element hslider fixedScreenSection vc_row-no-padding vc_row-o-full-height" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" style="position: relative; left: -40px; box-sizing: border-box; width: 1280px; min-height: 74.9175vh;">
<div class="vc_col-sm-12 vc_custom_1581485638370">
<script>
  jQuery(window).on('load', function () {

    // mainSlider
    function mainSlider() {
        var BasicSlider = jQuery('.slider-active');
        BasicSlider.on('init', function (e, slick) {
            var $firstAnimatingElements = jQuery('.single-main-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = jQuery('.single-main-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 10000,
            dots: false,
            fade: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                { breakpoint: 767, settings: { dots: false, arrows: false } }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = jQuery(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();

  });
</script>
<!-- h1 slider area -->
<section class="slider-area main-slider">
<div class="slider-active slick-initialized slick-slider"><button class="slick-prev slick-arrow" style="" type="button"><i class="fa fa-angle-left"></i></button>
<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5120px;"><div aria-hidden="false" class="single-main-slider slidebg-reoverlay-opt4 d-flex align-items-center slick-slide slick-current slick-active" data-slick-index="0" style='background-image: url("/wp-content/uploads/2020/03/motors_1.jpg"); width: 1280px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;' tabindex="0">
<div class="container">
<div class="row">
<div class="col-xl-7 col-lg-9 col-12">
<div class="slider-content">
<span class="animated fadeInUp" data-animation="fadeInUp" data-delay=".2s" style="animation-delay: 0.2s;">We Provide</span>
<h1 class="animated fadeInUp" data-animation="fadeInUp" data-delay=".4s" style="animation-delay: 0.4s;">Driving Motorized Innovation</h1>
<div class="animated fadeInUp" data-animation="fadeInUp" data-delay=".6s" style="animation-delay: 0.6s;">
<p>We meet the exact requirement of modern company.</p>
</div>
</div>
<div class="slider-btn">
<a class="btn bordered-btn animated fadeInUp" data-animation="fadeInUp" data-delay=".8s" href="#" style="animation-delay: 0.8s;" tabindex="0">Discover more  <i class="fa fa-angle-double-right"></i></a> </div>
</div>
</div>
</div>
</div><div aria-hidden="true" class="single-main-slider slidebg-reoverlay-opt4 d-flex align-items-center slick-slide" data-slick-index="1" style='background-image: url("/wp-content/uploads/2020/02/railroad-tracks-in-city-258510.jpg"); width: 1280px; position: relative; left: -1280px; top: 0px; z-index: 998; opacity: 0;' tabindex="-1">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-xl-7 col-lg-9 col-12">
<div class="slider-content">
<span data-animation="fadeInUp" data-delay=".2s">We Provide</span>
<h2 data-animation="fadeInUp" data-delay=".4s">Guaranteed Faster Engineering Solution</h2>
<div data-animation="fadeInUp" data-delay=".6s">
<p></p>
</div>
</div>
<div class="slider-btn">
<a class="btn bordered-btn" data-animation="fadeInUp" data-delay=".8s" href="#" tabindex="-1">Discover more  <i class="fa fa-angle-double-right"></i></a> </div>
</div>
</div>
</div>
</div><div aria-hidden="true" class="single-main-slider slidebg-reoverlay-opt3 d-flex align-items-center slick-slide" data-slick-index="2" style='background-image: url("/wp-content/uploads/2020/02/red-and-white-roller-coaster-on-railings-749061.jpg"); width: 1280px; position: relative; left: -2560px; top: 0px; z-index: 998; opacity: 0;' tabindex="-1">
<div class="container">
<div class="row justify-content-end text-right">
<div class="col-xl-7 col-lg-9 col-12">
<div class="slider-content">
<span data-animation="fadeInUp" data-delay=".2s">We provide</span>
<h2 data-animation="fadeInUp" data-delay=".4s">Best Motors For Amusement Park Rides</h2>
<div data-animation="fadeInUp" data-delay=".6s">
<p></p>
</div>
</div>
<div class="slider-btn">
<a class="btn bordered-btn" data-animation="fadeInUp" data-delay=".8s" href="#" tabindex="-1">Discover more  <i class="fa fa-angle-double-right"></i></a> </div>
</div>
</div>
</div>
</div><div aria-hidden="true" class="single-main-slider slidebg-reoverlay-opt3 d-flex align-items-center slick-slide" data-slick-index="3" style='background-image: url("/wp-content/uploads/2020/03/forkLiftTruck.jpg"); width: 1280px; position: relative; left: -3840px; top: 0px; z-index: 998; opacity: 0;' tabindex="-1">
<div class="container">
<div class="row justify-content-end text-right">
<div class="col-xl-7 col-lg-9 col-12">
<div class="slider-content">
<span data-animation="fadeInUp" data-delay=".2s">We provide</span>
<h2 data-animation="fadeInUp" data-delay=".4s">Motors For Material Handling Equipments</h2>
<div data-animation="fadeInUp" data-delay=".6s">
<p></p>
</div>
</div>
<div class="slider-btn">
<a class="btn bordered-btn" data-animation="fadeInUp" data-delay=".8s" href="#" tabindex="-1">Discover more  <i class="fa fa-angle-double-right"></i></a> </div>
</div>
</div>
</div>
</div></div></div>
<button class="slick-next slick-arrow" style="" type="button"><i class="fa fa-angle-right"></i></button></div>
</section>
<!-- End h1 slider area -->
</div>
</div><div class="vc_row-full-width"></div><div class="vc_row section-element vc_custom_1552817809723">
<div class="vc_col-sm-12">
<div class="vc_row section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head
============================================= -->
<div class="row">
<div class="col-xl-7 col-md-10 col-lg-8">
<div class="section-title second-home-title center-title">
<span class="wow fadeInUp" style="visibility: hidden; animation-name: none;">About Us</span>
<h2 class="wow fadeInUp" style="visibility: hidden; animation-name: none;">We meet the exact requirement of a modern company</h2>
<p class="wow fadeInUp" style="visibility: hidden; animation-name: none;">Founded in 1985, Globe Scott Motors is the first company to introduce and manufacture PMDC motor for the first time in India. Since then we have thrived and grown widely by absorbing the best technology and making our products of the highest and consistent quality.</p>
</div>
</div>
</div>
<!-- End Of Rounding Section Head
============================================= -->
</div></div></div></div><div class="vc_row section"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="best-features-wrap mb-30 wow" style="visibility: hidden; animation-name: none;">
<div class="features-head mb-20">
<div class="features-hed-icon">
<img alt="Features image" src="wp-content/uploads/2020/07/one.png"/>
</div>
<div class="features-head-title">
<span>DRIVING</span>
<h4>motorized innovation</h4>
</div>
</div>
<p></p>
</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="best-features-wrap mb-30 wow" style="visibility: hidden; animation-name: none;">
<div class="features-head mb-20">
<div class="features-hed-icon">
<img alt="Features image" src="wp-content/uploads/2020/07/two.png"/>
</div>
<div class="features-head-title">
<span>HIGH QUALITY</span>
<h4>engineering solutions</h4>
</div>
</div>
<p></p>
</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="best-features-wrap mb-30 wow" style="visibility: hidden; animation-name: none;">
<div class="features-head mb-20">
<div class="features-hed-icon">
<img alt="Features image" src="wp-content/uploads/2020/07/three.png"/>
</div>
<div class="features-head-title">
<span>DESIGNED &amp; DEVELOPED</span>
<h4>as per your needs</h4>
</div>
</div>
<p></p>
</div>
</div></div></div></div><div class="vc_row section vc_custom_1610014956658"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="best-features-wrap mb-30 wow" style="visibility: hidden; animation-name: none;">
<div class="features-head mb-20">
<div class="features-hed-icon">
<img alt="Features image" src="wp-content/uploads/2020/07/four.png"/>
</div>
<div class="features-head-title">
<span>PERFOMNACE</span>
<h4>uncompromised</h4>
</div>
</div>
<p></p>
</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="best-features-wrap mb-30 wow" style="visibility: hidden; animation-name: none;">
<div class="features-head mb-20">
<div class="features-hed-icon">
<img alt="Features image" src="wp-content/uploads/2020/07/five.png"/>
</div>
<div class="features-head-title">
<span>COST EFFECTIVE</span>
<h4>products and services</h4>
</div>
</div>
<p></p>
</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element">
<p>Our wide range of PMDC motors, Wound field motors, geared motors have been custom-designed to operate in a broad range of applications. Over the years, we have thrived and grown to continuously improving our products through constant design and quality testing.</p>
</div> <div class="vc_empty_space" style="height: 35px"><span class="vc_empty_space_inner"></span></div></div></div></div></div><div class="vc_row section homeaboutus vc_custom_1611057383033"><div class="features-wrapper minH-550 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-4 vc_col-md-12 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head
============================================= -->
<div class="row">
<div class="col-lg-12">
<div class="section-title second-home-title center-title">
<span class="wow" style="visibility: hidden; animation-name: none;">Featuring</span>
<h2 class="wow" style="visibility: hidden; animation-name: none;"></h2>
<p class="wow" style="visibility: hidden; animation-name: none;"></p>
</div>
</div>
</div>
<!-- End Of Rounding Section Head
============================================= -->
<div class="wpb_text_column wpb_content_element vc_custom_1611054341963">
<ul class="rounding-list">
<li>Powers from 25 to 3000 watts intermittent or continuous duty.</li>
<li>Standard or special construction forms and dimensions.</li>
<li>Waterproof or open motors with different degrees of protection.</li>
<li>EMI suppression filters (Standard in many motors).</li>
<li>Position, speed and shifting sensors such as encoders, can be fitted on request.</li>
<li>Electromagnetic brakes on request.</li>
<li>Reduction gears on request.</li>
<li>Incorporated or separate electronic controls on request.</li>
</ul>
</div> </div></div></div><div class="features-wrapper minH-550 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-4 vc_col-md-12 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head
============================================= -->
<div class="row">
<div class="col-lg-12">
<div class="section-title second-home-title center-title">
<span class="wow" style="visibility: hidden; animation-name: none;">Offering</span>
<h2 class="wow" style="visibility: hidden; animation-name: none;"></h2>
<p class="wow" style="visibility: hidden; animation-name: none;"></p>
</div>
</div>
</div>
<!-- End Of Rounding Section Head
============================================= -->
<div class="wpb_text_column wpb_content_element vc_custom_1611054366124">
<ul class="rounding-list">
<li>Experience and technical knowledge to develop special motors according to customer’s specifications for small or large-scale production.</li>
<li>A research department where special motors are designed and developed.</li>
<li>Product certification on request.</li>
<li>Conformity and test certificates on Request.</li>
<li>A test laboratory equipped with a computerized data acquisition system where lifetime or mechanical stress tests can also be carried out.</li>
</ul>
</div> </div></div></div><div class="features-wrapper minH-550 wpb_column vc_column_container vc_col-sm-3 vc_col-lg-4 vc_col-md-12 vc_col-xs-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head
============================================= -->
<div class="row">
<div class="col-lg-12">
<div class="section-title second-home-title center-title">
<span class="wow" style="visibility: hidden; animation-name: none;">Electrics Motors For</span>
<h2 class="wow" style="visibility: hidden; animation-name: none;"></h2>
<p class="wow" style="visibility: hidden; animation-name: none;"></p>
</div>
</div>
</div>
<!-- End Of Rounding Section Head
============================================= -->
<div class="wpb_text_column wpb_content_element vc_custom_1611054387660">
<ul class="rounding-list">
<li>General Purpose.</li>
<li>Gear Motors.</li>
<li>Pumps.</li>
<li>Safety Motors.</li>
<li>Crossing Automation.</li>
<li>Winches.</li>
<li>Cleaning Machines.</li>
</ul>
</div> </div></div></div></div><div class="vc_empty_space" id="feature-shape" style="height: 0px"><span class="vc_empty_space_inner"></span></div>
<!-- Section Head
============================================= -->
<div class="row">
<div class="col-lg-8 offset-lg-2 text-center center-title">
<div class="section-title second-home-title center-title">
<span class="wow" style="visibility: hidden; animation-name: none;">We have wide range of products</span>
<h2 class="wow" style="visibility: hidden; animation-name: none;">Our Products</h2>
<p class="wow" style="visibility: hidden; animation-name: none;"></p>
</div>
</div>
</div>
<!-- End Of Rounding Section Head
============================================= -->
</div>
</div><div class="vc_row section-element cost-effective-section vc_custom_1611056463305" data-vc-full-width="true" data-vc-full-width-init="true" id="quality-mentioned-section" style="position: relative; left: -40px; box-sizing: border-box; width: 1280px; padding-left: 40px; padding-right: 40px;">
<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-md-push-6">
<div class="wpb_single_image wpb_content_element vc_align_right wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight services-img wpb_start_animation animated">
<figure class="wpb_wrapper vc_figure">
<div class="vc_single_image-wrapper vc_box_border_grey"><img alt="AdobeStock_53478260_Preview" class="vc_single_image-img" height="427" src="wp-content/uploads/2020/02/AdobeStock_53478260_Preview-570x427.jpeg" title="AdobeStock_53478260_Preview" width="570"/></div>
</figure>
</div>
</div>
<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-md-pull-6 vc_custom_1547372057966">
<!-- Section Head
============================================= -->
<div class="row">
<div class="col-lg-12">
<div class="section-title second-home-title center-title">
<span class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">We Provide High Quality</span>
<h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">And Cost Effective Products.</h2>
<p class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi risus orci, finibus eu turpis eu, elementum sodales enim. Quisque vitae suscipit ligula. Suspendisse facilisis finibus arcu sed elementum. Duis eu ligula a erat accumsan congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus quis egestas purus. Sed orci ante, pharetra a lobortis rutrum, vestibulum eu arcu.</p>
</div>
</div>
</div>
<!-- End Of Rounding Section Head
============================================= -->
<div class="wpb_text_column wpb_content_element vc_custom_1552462676632 wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight wpb_start_animation animated">
<ul class="rounding-list">
<li>There are many variations of passages Ipsum available.</li>
<li>If you are going passage of anything embarrassing.</li>
<li>Lorem Ipsum that majority suff alteration text.</li>
</ul>
</div> <!-- Rounding Button
  ============================================= -->
<div class="rounding-btn wow animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s;">
<a class="btn bordered-btn" href="products/">Discover More <i class="fa fa-angle-double-right"></i></a>
</div>
<!-- End Of Rounding Button
  ============================================= -->
</div>
</div><div class="vc_row-full-width"></div><section id="homepagep1" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-faq-full-section vc_custom_1581396682668 vc_section-has-fill"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 rightsideproductinfo  vc_custom_1581484702546">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInDown">Our Product</span>
      <h2 class="wow fadeInDown">RAILWAY SIGNALING PRODUCTS</h2>
      <p class="wow fadeInDown">Globe Scott Motors is a leading name in the field of manufacture of Railway Signaling Motors Build With Our Experienced Staff...</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-railway-signalling-products/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 
</div><div class="vc_row section-element who-sec-left-bg vc_custom_1610703560120">
	<div class="vc_col-sm-3 who-we-play-btn  vc_custom_1550469080349">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><section id="homepagep2" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-skill-full-section"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 leftsideproductinfo  vc_custom_1581484713071">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInUp">Our Product</span>
      <h2 class="wow fadeInUp">PMDC MOTOR</h2>
      <p class="wow fadeInUp">We Offer Wide Range Of DC Motors that is useful for Pumps, Elevators, Automatic Doors &amp; Gates etc...</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-pmdc-motors/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 
</div><div class="vc_row section-element who-sec-right-bg vc_custom_1610703602125">
	<div class="vc_col-sm-12 who-we-play-btn ">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><section id="homepagep3" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-faq-full-section vc_custom_1581396710784 vc_section-has-fill"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 rightsideproductinfo  vc_custom_1581484726630">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInDown">Our Product</span>
      <h2 class="wow fadeInDown">GEARED PMDC MOTOR</h2>
      <p class="wow fadeInDown">We specialize in the production of custom Geared Designed motors based on your requirements...</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-pmdc-geared-motors/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 
</div><div class="vc_row section-element who-sec-left-bg vc_custom_1610703623110">
	<div class="vc_col-sm-3 who-we-play-btn  vc_custom_1550469080349">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><section id="homepagep4" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-skill-full-section"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 leftsideproductinfo  vc_custom_1581484738719">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInUp">Our Product</span>
      <h2 class="wow fadeInUp">PMDC TRANSAXLE</h2>
      <p class="wow fadeInUp">We look forward to the opportunity to serve you with exclusive range of our Products to fulfill your requirements.</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-pmdc-transaxle/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 
</div><div class="vc_row section-element who-sec-right-bg vc_custom_1610703637502">
	<div class="vc_col-sm-12 who-we-play-btn ">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><section id="homepagep5" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-faq-full-section vc_custom_1611061407800 vc_section-has-fill"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 rightsideproductinfo  vc_custom_1581484753718">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInDown">Our Product</span>
      <h2 class="wow fadeInDown">RESEARCH, DESIGN &amp; DEVELOPMENTS</h2>
      <p class="wow fadeInDown">Globe Scott Motors is a leading name in the field of manufacture of Railway Signaling Motors Build With Our Experienced Staff...</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-railway-signalling-products/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 
</div><div class="vc_row section-element who-sec-left-bg vc_custom_1610703676417">
	<div class="vc_col-sm-3 who-we-play-btn  vc_custom_1550469080349">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><section id="homepagep6" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-skill-full-section"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 leftsideproductinfo  vc_custom_1581484738719">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInUp">Our Product</span>
      <h2 class="wow fadeInUp">BLDC MOTORS</h2>
      <p class="wow fadeInUp">We look forward to the opportunity to serve you with exclusive range of our BLDC Motors to fulfill your requirements.</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-pmdc-transaxle/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 
</div><div class="vc_row section-element who-sec-right-bg vc_custom_1610703665104">
	<div class="vc_col-sm-12 who-we-play-btn ">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><section id="homepagep7" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section who-we-are-faq-full-section vc_custom_1611062053098 vc_section-has-fill"><div class="vc_row section-element">
	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 ">
			
	</div> 

	<div class="vc_col-sm-12 vc_col-lg-6 vc_col-md-6 rightsideproductinfo  vc_custom_1581484753718">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-12">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInDown">Our Product</span>
      <h2 class="wow fadeInDown">SPARE &amp; PARTS</h2>
      <p class="wow fadeInDown">We look forward to the opportunity to serve you with exclusive range of our Products to fulfill your requirements.</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

  <!-- Rounding Button
  ============================================= -->
  <div class="rounding-btn wow " data-wow-delay="0.6s">
        <a href="/products-pmdc-transaxle/" class="btn bordered-btn">Discover More <i class="fa fa-angle-double-right"></i></a>
      </div>
  <!-- End Of Rounding Button
  ============================================= -->


	</div> 
</div><div class="vc_row section-element who-sec-left-bg vc_custom_1610703676417">
	<div class="vc_col-sm-3 who-we-play-btn  vc_custom_1550469080349">
			
	</div> 
</div></section><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row section-element hideme vc_custom_1610010728183">
	<div class="vc_col-sm-12 ">
			<div class="vc_row section"><div class="text-center wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-8 offset-lg-2 text-center center-title">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInUp">Testimonial</span>
      <h2 class="wow fadeInUp">What Clients Say</h2>
      <p class="wow fadeInUp">There are many variations of passages of Lorem Ipsum available but the majority have to suffered alteration that some words slightly believable.</p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

</div></div></div></div><div class="vc_row section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">

<script>
  jQuery(document).ready(function($){

    $('.testimonial-slider').slick({
      slidesToShow: 3,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
      arrows: false,
      dots: true,
      responsive: [

          {
            breakpoint: 1025,
            settings: {
                arrows: false,
                slidesToShow: 2            }
          }, 
          {
              breakpoint: 768,
              settings: {
                  arrows: false,
                  slidesToShow: 1              }
          },
          
      ]
    });
  });
</script>

  <!-- testimonail three area -->
<div class="testimonial-style-three testi-slider2">
  <div class="testimonial-slider">
              <div class="testimonail4-item">
          <div class="testimonial-three-content">
              <div class="testimonial-three-icon ">
                <i class="flaticon-quotation"></i>
              </div>
              <div class="testimonial-three-text ">
                <p>There are many variations of passages of Lorem Ipsum available but the majority the have suffered alteration in that some</p>
              </div>
              <div class="client-info">
                <div class="testimonial-three-thumb">
                  <img width="200" height="200" src="/wp-content/uploads/2019/03/testimonial-05.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Globe Scott Motors client" loading="lazy" srcset="/wp-content/uploads/2019/03/testimonial-05.jpg 200w, /wp-content/uploads/2019/03/testimonial-05-150x150.jpg 150w, /wp-content/uploads/2019/03/testimonial-05-80x80.jpg 80w" sizes="(max-width: 200px) 100vw, 200px"/>                </div>
                <div class="testimonial-three-meta">
                  <h4>Cristina</h4>
                  <span>Plugin Developer</span>
                </div>
              </div>
          </div>
        </div>
                <div class="testimonail4-item">
          <div class="testimonial-three-content">
              <div class="testimonial-three-icon ">
                <i class="flaticon-quotation"></i>
              </div>
              <div class="testimonial-three-text ">
                <p>There are many variations of passages of Lorem Ipsum available but the majority the have suffered alteration in that some</p>
              </div>
              <div class="client-info">
                <div class="testimonial-three-thumb">
                  <img width="200" height="200" src="/wp-content/uploads/2019/03/testimonial-04.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Globe Scott Motors client" loading="lazy" srcset="/wp-content/uploads/2019/03/testimonial-04.jpg 200w, /wp-content/uploads/2019/03/testimonial-04-150x150.jpg 150w, /wp-content/uploads/2019/03/testimonial-04-80x80.jpg 80w" sizes="(max-width: 200px) 100vw, 200px"/>                </div>
                <div class="testimonial-three-meta">
                  <h4>Jon Doe</h4>
                  <span>HR Manager</span>
                </div>
              </div>
          </div>
        </div>
                <div class="testimonail4-item">
          <div class="testimonial-three-content">
              <div class="testimonial-three-icon ">
                <i class="flaticon-quotation"></i>
              </div>
              <div class="testimonial-three-text ">
                <p>There are many variations of passages of Lorem Ipsum available but the majority the have suffered alteration in that some</p>
              </div>
              <div class="client-info">
                <div class="testimonial-three-thumb">
                  <img width="200" height="200" src="/wp-content/uploads/2019/03/testimonial-03.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Globe Scott Motors client" loading="lazy" srcset="/wp-content/uploads/2019/03/testimonial-03.jpg 200w, /wp-content/uploads/2019/03/testimonial-03-150x150.jpg 150w, /wp-content/uploads/2019/03/testimonial-03-80x80.jpg 80w" sizes="(max-width: 200px) 100vw, 200px"/>                </div>
                <div class="testimonial-three-meta">
                  <h4>Ana Doe</h4>
                  <span>Founder &amp; CEO</span>
                </div>
              </div>
          </div>
        </div>
                <div class="testimonail4-item">
          <div class="testimonial-three-content">
              <div class="testimonial-three-icon ">
                <i class="flaticon-quotation"></i>
              </div>
              <div class="testimonial-three-text ">
                <p>There are many variations of passages of Lorem Ipsum available but the majority the have suffered alteration in that some</p>
              </div>
              <div class="client-info">
                <div class="testimonial-three-thumb">
                  <img width="200" height="200" src="/wp-content/uploads/2019/03/testimonial-02.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Globe Scott Motors client" loading="lazy" srcset="/wp-content/uploads/2019/03/testimonial-02.jpg 200w, /wp-content/uploads/2019/03/testimonial-02-150x150.jpg 150w, /wp-content/uploads/2019/03/testimonial-02-80x80.jpg 80w" sizes="(max-width: 200px) 100vw, 200px"/>                </div>
                <div class="testimonial-three-meta">
                  <h4>Alexndra Li</h4>
                  <span>UI/UX Designer</span>
                </div>
              </div>
          </div>
        </div>
                <div class="testimonail4-item">
          <div class="testimonial-three-content">
              <div class="testimonial-three-icon ">
                <i class="flaticon-quotation"></i>
              </div>
              <div class="testimonial-three-text ">
                <p>There are many variations of passages of Lorem Ipsum available but the majority the have suffered alteration in that some</p>
              </div>
              <div class="client-info">
                <div class="testimonial-three-thumb">
                  <img width="200" height="200" src="/wp-content/uploads/2019/03/testimonial-06.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Globe Scott Motors client" loading="lazy" srcset="/wp-content/uploads/2019/03/testimonial-06.jpg 200w, /wp-content/uploads/2019/03/testimonial-06-150x150.jpg 150w, /wp-content/uploads/2019/03/testimonial-06-80x80.jpg 80w" sizes="(max-width: 200px) 100vw, 200px"/>                </div>
                <div class="testimonial-three-meta">
                  <h4>Meredith Gutmann</h4>
                  <span>Product Designer</span>
                </div>
              </div>
          </div>
        </div>
          </div>
</div>
  <!-- testimonail three area end -->

</div></div></div></div>
	</div> 
</div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row section-element counter-area vc_custom_1610703772527">
	<div class="vc_col-sm-12 counter-border text-center, textHighlighter_1 ">
			
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-lg-8 offset-lg-2 text-center center-title">
    <div class="section-title second-home-title center-title">
      <span class="wow ">STATE OF ART MANUFACTURING</span>
      <h2 class="wow ">MOTORS OF INTERNATIONAL CLASS</h2>
      <p class="wow "></p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->


	</div> 
</div><div class="vc_row-full-width"></div><div class="vc_row section-element our-blog vc_custom_1611060134647">
	<div class="vc_col-sm-12 ">
			<div class="vc_row section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1546250337591"><div class="wpb_wrapper">
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-xl-7 col-md-10 col-lg-8">
    <div class="section-title second-home-title center-title">
      <span class="wow fadeInUp">Read Our</span>
      <h2 class="wow fadeInUp">Case studies and blogs</h2>
      <p class="wow fadeInUp"></p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->

</div></div></div></div><div class="vc_row section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1611059896603"><div class="wpb_wrapper">
  <!-- blog-area -->
  <div class="row blog-active">
    
    <div class="col-md-6 col-lg-4">
      <div class="blog-wrap rounding-695 ">
                  <div class="blog-thumb">
            <img width="695" height="500" src="/wp-content/uploads/2020/07/pexels-darshak-pandya-2526935-695x500.jpg" class="attachment-rounding-695 size-rounding-695 wp-post-image" alt="railway case study" loading="lazy"/>          </div>
                <div class="blog-content blog-column-wrap">
          <div class="entry-meta">
                            <div class="author">
                  by <a href="/author/gscottmadmin/" title="Posts by GLOB SCOTT MOTORS" rel="author">GLOB SCOTT MOTORS</a>                </div>
               
                              <div class="month">
                  -  <a href="/case-study/">July 27, 2020</a>
                </div>
                        </div>
          <h4><a href="/case-study/">Case Study</a></h4>
          <p>Indian Railways: More than 200,000 on the Indian Rail Tracks400V AC successfully supplied more than 1000 motorsIP67 production</p>
                    <div class="entry-meta-footer">
            <a href="/case-study/" class="read-more">Continue Reading</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-md-6 col-lg-4">
      <div class="blog-wrap rounding-695 ">
                  <div class="blog-thumb">
            <img width="695" height="500" src="/wp-content/uploads/2020/02/blog-image-min-695x500.png" class="attachment-rounding-695 size-rounding-695 wp-post-image" alt="ADVANTAGES OF USING BLDC MOTOR FOR MICRO AND MACRO APPLICATIONS" loading="lazy" srcset="/wp-content/uploads/2020/02/blog-image-min-695x500.png 695w, /wp-content/uploads/2020/02/blog-image-min-80x59.png 80w" sizes="(max-width: 695px) 100vw, 695px"/>          </div>
                <div class="blog-content blog-column-wrap">
          <div class="entry-meta">
                            <div class="author">
                  by <a href="/author/gscottmadmin/" title="Posts by GLOB SCOTT MOTORS" rel="author">GLOB SCOTT MOTORS</a>                </div>
               
                              <div class="month">
                  -  <a href="/advantages-of-using-bldc-motor-for-micro-and-macro-applications/">December 28, 2018</a>
                </div>
                        </div>
          <h4><a href="/advantages-of-using-bldc-motor-for-micro-and-macro-applications/">Advantages of using bldc motor for micro and macro applications.</a></h4>
          <p>Background: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The industrial revolution was transition from induction motor to the new concept for constant and variable speed</p>
                    <div class="entry-meta-footer">
            <a href="/advantages-of-using-bldc-motor-for-micro-and-macro-applications/" class="read-more">Continue Reading</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-md-6 col-lg-4">
      <div class="blog-wrap rounding-695 ">
                  <div class="blog-thumb">
            <img width="695" height="500" src="/wp-content/uploads/2020/02/blog1-min-1-695x500.png" class="attachment-rounding-695 size-rounding-695 wp-post-image" alt="WHAT IS BLDC MOTOR" loading="lazy" srcset="/wp-content/uploads/2020/02/blog1-min-1-695x500.png 695w, /wp-content/uploads/2020/02/blog1-min-1-80x59.png 80w" sizes="(max-width: 695px) 100vw, 695px"/>          </div>
                <div class="blog-content blog-column-wrap">
          <div class="entry-meta">
                            <div class="author">
                  by <a href="/author/gscottmadmin/" title="Posts by GLOB SCOTT MOTORS" rel="author">GLOB SCOTT MOTORS</a>                </div>
               
                              <div class="month">
                  -  <a href="/what-is-bldc-motor/">October 25, 2018</a>
                </div>
                        </div>
          <h4><a href="/what-is-bldc-motor/">What is bldc motor?</a></h4>
          <p>BLDC stands for Brushless DC motor. BLDC motor is a synchronous motor, which is electronically commutated (no physical</p>
                    <div class="entry-meta-footer">
            <a href="/what-is-bldc-motor/" class="read-more">Continue Reading</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-md-6 col-lg-4">
      <div class="blog-wrap rounding-695 ">
                  <div class="blog-thumb">
            <img width="695" height="500" src="/wp-content/uploads/2020/02/blog1-min-695x500.png" class="attachment-rounding-695 size-rounding-695 wp-post-image" alt="DC MOTOR MAINTENANCE" loading="lazy"/>          </div>
                <div class="blog-content blog-column-wrap">
          <div class="entry-meta">
                            <div class="author">
                  by <a href="/author/gscottmadmin/" title="Posts by GLOB SCOTT MOTORS" rel="author">GLOB SCOTT MOTORS</a>                </div>
               
                              <div class="month">
                  -  <a href="/dc-motor-maintenance/">November 17, 2016</a>
                </div>
                        </div>
          <h4><a href="/dc-motor-maintenance/">DC motor maintenance.</a></h4>
          <p>Reviewing the Service History: D.C. motor maintenance, as with all types of industrial maintenance, requires pre-maintenance planning and</p>
                    <div class="entry-meta-footer">
            <a href="/dc-motor-maintenance/" class="read-more">Continue Reading</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-md-6 col-lg-4">
      <div class="blog-wrap rounding-695 ">
                  <div class="blog-thumb">
            <img width="695" height="500" src="/wp-content/uploads/2020/02/blog2-min-695x500.png" class="attachment-rounding-695 size-rounding-695 wp-post-image" alt="DIFFERENCE BETWEEN DC MOTORS AND GEARED MOTORS" loading="lazy"/>          </div>
                <div class="blog-content blog-column-wrap">
          <div class="entry-meta">
                            <div class="author">
                  by <a href="/author/gscottmadmin/" title="Posts by GLOB SCOTT MOTORS" rel="author">GLOB SCOTT MOTORS</a>                </div>
               
                              <div class="month">
                  -  <a href="/difference-between-dc-motors-and-geared-motors/">November 17, 2016</a>
                </div>
                        </div>
          <h4><a href="/difference-between-dc-motors-and-geared-motors/">Difference between DC motors and geared motors.</a></h4>
          <p>DC MOTORS: A DC motor is any of a class of electrical machines that converts direct current electrical</p>
                    <div class="entry-meta-footer">
            <a href="/difference-between-dc-motors-and-geared-motors/" class="read-more">Continue Reading</a>
          </div>
        </div>
      </div>
    </div>

      </div>
  <!-- blog-area-end -->

  </div></div></div></div>
<!-- Section Head
============================================= -->
<div class="row">
  <div class="col-xl-7 col-md-10 col-lg-8">
    <div class="section-title second-home-title center-title">
      <span class="wow ">Here are some of</span>
      <h2 class="wow ">Our Valuable Customers</h2>
      <p class="wow "></p>
    </div>
  </div>
</div>

<!-- End Of Rounding Section Head
============================================= -->


	</div> 
</div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row section-element brand-area vc_custom_1611059732564">
	<div class="vc_col-sm-12 ">
			
<script>
  jQuery(document).ready(function($){

    $('.brand-active').slick({
      slidesToShow: 6,
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
      arrows: true,
      dots: false,
      responsive: [

          {
            breakpoint: 1200,
            settings: {
                arrows: true,
                slidesToShow: 6            }
          }, 
          {
              breakpoint: 1024,
              settings: {
                  arrows: true,
                  slidesToShow: 3              }
          },
          {
              breakpoint: 768,
              settings: {
                  arrows: true,
                  slidesToShow: 2              }
          },
          {
              breakpoint: 480,
              settings: {
                  arrows: true,
                  slidesToShow: 2              }
          }
      ]
    });
  });
</script>  

  <!-- brand-area -->
  <div class="brand-active">
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/02/1.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/02/2.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/02/3.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/02/4.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/02/5.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/02/6.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/07/g.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/07/st.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/07/se.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/07/LLL.png" alt="Brand image">
      </div>
          <div class="single-brand">
          <img src="/wp-content/uploads/2020/07/gg.png" alt="Brand image">
      </div>
      </div>   
  <!-- brand-area-end -->



	<div class="wpb_raw_code wpb_content_element wpb_raw_html">
		<div class="wpb_wrapper">
			<script>


var myvar = '<div style="background-color: #eb9600;">	'+
'  <div class="">			'+
'    <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>'+
'    <h2 style="color: white;text-align: center;font-family: Poppins, sans-serif;font-weight:300;font-style:normal; font-size:small; padding-left: 5px;padding-right: 5px;" class="vc_custom_heading wpb_animate_when_almost_visible wpb_bounceIn bounceIn wpb_start_animation animated">COVID-19 Alert: We have resumed manufacturing under the guidelines of the government authority.</h2>'+
'    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>	'+
'  </div> '+
'</div>';
	
	
document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
    jQuery(".home").prepend(myvar);
});

</script>
		</div>
	</div>

	</div> 
</div><div class="vc_row-full-width"></div>

					</div>
	</div>
</div>


</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>


