<?php
require_once __DIR__ . '/functions.php';

$current_page = isset($current_page) ? $current_page : 'index';
$page_title = isset($page_title) ? $page_title : 'GLOBE SCOTT MOTORS PVT LTD – DC Motor Manufacturers';
$body_class = isset($body_class) ? $body_class : 'page-template page-template-page-template page-template-blank-page wpb-js-composer js-comp-ver-6.1 vc_responsive';
?>
<!DOCTYPE html>
<html class="js_active vc_desktop vc_transform vc_transform" lang="en-US">
<head>
<base href="/" />
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<link href="wp-content/uploads/2020/02/globescott_LogoNew_fevicon.png" rel="shortcut icon" type="image/png"/>
<title><?php echo htmlspecialchars($page_title); ?></title>

<link href="wp-includes/css/dist/block-library/style.min.css" id="wp-block-library-css" media="all" rel="stylesheet"/>
<link href="wp-content/plugins/contact-form-7/includes/css/styles.css" id="contact-form-7-css" media="all" rel="stylesheet"/>
<link href="wp-content/plugins/rounding-master/framework/assets/css/font-awesome.min.css" id="font-awesome-css" media="all" rel="stylesheet"/>
<link href="wp-content/plugins/rounding-master/assets/admin/visual-composer.css" id="rounding-visual-composer-css-css" media="all" rel="stylesheet"/>
<link href="_external/fonts.googleapis.com/css_75b8c5b4.css" id="rounding-body-fonts-css" media="screen" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/bootstrap.min.css" id="bootstrap-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/font-awesome.min.css" id="fontawesome-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/slick.css" id="slick-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/fonts/flaticon.css" id="flaticon-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/magnific-popup.css" id="magnific-popup-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/meanmenu.css" id="meanmenu-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/animate.min.css" id="animate-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/rounding-default.css" id="rounding-default-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/rounding-main.css" id="rounding-main-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/rounding/assets/css/rounding-responsive.css" id="rounding-responsive-css" media="all" rel="stylesheet"/>
<link href="wp-content/themes/gsmpltheme/style.css" id="rounding-style-css" media="all" rel="stylesheet"/>
<style id="rounding-style-inline-css">
    .menu-area {
      padding: 2px 0;
    }
    .main-menu ul li a {
      font-size: 14px;
    }
    .main-menu ul li ul.submenu li a {
      font-size: 13px;
    }
    
    .pagination li.page-item a.page-link,
    .single-counter-wrap .counter,
    .contact-cta .cta-content p,
    .features-head-title span,
    .contact-query-form .btn,
    .sidebar-link li a,
    .error-content p,
    .project-info li b,
    .project-info li span,
    .portfolio-menu button,
    .breadcrumb > .active,
    .slider-content span,
    .main-menu ul li a,
    .breadcrumb-item a,
    .about-content h4,
    .price-head span,
    .price-count h1,
    .team-info span,
    .blog-btn .btn,
    .footer-cta li,
    .contact-title p,
    body {
      font-family: Poppins, sans-serif;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: Poppins, sans-serif;
    }

    .bd-comment-box .content .name a.comment-reply-link:hover,
    #search-modal .modal-dialog .modal-content form button,
    .single-counter-wrap.counter-three-wrap .counter,
    .main-menu ul li.current_page_item > a,
    .price-count h1 span.price-limit,
    .services-link a.btn-link:hover,
    .blog-meta-info ul li a:hover,
    .portfolio-overly h4:hover a,
    .project-details-btn a:hover,
    .rc-post-content h4:hover a,
    footer.entry-footer a:hover,
    .single-features:hover h4 a,
    .flaticon-quotation::before,
    .features-head-title span,
    .main-menu ul li:hover> a,
    .blog-content h4:hover a,
    .meta-info span a:hover,
    .footer-widget a:hover,
    p.logged-in-as a:hover,
    .post-desc p a:hover,
    .copyright-text p a,
    .tags-list a:hover,
    .nav-links a:hover,
    .post-desc span,
    .ws-input button:hover,
    .sidebar-blog a:hover,
    .blog-comment-area .comment-title small a:hover,
    .side-social a:hover,
    .menu-close:hover i,
    .services-icon i {
      color: #eb9600 !important;
    }
    
    .pricing-box.active .price-count h1 span.price-limit{
      color:#fff !important;
    }

    .third-services:hover,
    .play-icon a::before,
    .play-icon a:hover,
    .team-info,
    .services-wrap.first-services .services-icon i:after {
      background: #eb9600 !important;
    }

    .services-wrap:hover span.bottom-right:before,
    .services-wrap:hover span.bottom-right:after,
    .services-wrap:hover span.top-left:before,
    .services-wrap:hover span.top-left:after,
    .vc_progress_bar .vc_single_bar .vc_bar,
    .footer-widget .menu li a::before,
    .pricing-box.active,
    .scroll-to-top {
      background-color: #eb9600 !important;
    }

    .header-cta {
      color: #242424;
      background-color: #fff;
      border-bottom: 1px solid #f0f0f0;
    }
    .header-social a i {
      color: #242424 !important;
      border: 1px solid #c7c5c5 !important;
    }
    .header-social a:hover i {
      color: #fff !important;
    }
    
    .home-three-header .menu-area,
    .header-default .menu-area {
      background-color: #fff;
    }
    .home-three-header .main-menu ul li a,
    .header-default .main-menu ul li a,
    .home-three-header .menu-icon i,
    .header-default .menu-icon i {
      color: #242424;
    }

    .home-three-header .menu-icon .menu-tigger span,
    .header-default .menu-icon .menu-tigger span {
      background: #242424;
    }

    .home-three-header .main-menu ul li.current_page_item > a,
    .header-default .main-menu ul li.current_page_item > a,
    .home-three-header .main-menu ul li:hover> a,
    .header-default .main-menu ul li:hover> a {
      color: #eb9600 !important;
    }
    .home-three-header .main-menu ul li ul.submenu,
    .header-default .main-menu ul li ul.submenu {
      background: #fff;
    }
    .home-three-header .main-menu ul li ul.submenu li a,
    .header-default .main-menu ul li ul.submenu li a {
      color: #242424;
    }

    .header-bg {
      background: #00000080;
    }
    .header-two .home-two-menu ul> li> a {
      color: #fff;
    }
    .header-two .main-menu ul li.current_page_item > a,
    .header-two .main-menu ul li:hover> a {
      color: #eb9600 !important;
    }
    .header-two .main-menu ul li ul.submenu {
      background: #fff;
    }
    .header-two .main-menu ul li ul.submenu li a {
      color: #242424;
    }
    .home-two-icon i {
      color: #fff;
    }
    .home-two-icon .menu-tigger span {
      background: #fff;
    }
    .header-bg.sticky-menu {
      background: #000156;
    }

    .testimonial-nav .slick-arrow,
    .blog-active .slick-arrow, 
    .team-active .slick-arrow,
    .widget_tag_cloud a,
    .portfolio-btn .btn,
    .rounding-btn .btn, 
    .services-btn .btn,
    .slider-btn .btn,
    .price-btn .btn,
    .btn {
      color: #131313 !important;
      background-color: #ffffff !important;
    }

    .testimonial-nav .slick-arrow:hover,
    .blog-active .slick-arrow:hover, 
    .team-active .slick-arrow:hover,
    .error-content .btn:hover,
    .rounding-btn .btn:hover, 
    .portfolio-btn .btn:hover,
    .slider-btn .btn:hover,
    .play-icon a:hover,
    .btn:hover {
      color: #ffffff !important;
      border-color: #eb9600 !important;
      background-color: #eb9600 !important;
    }

    .form-control:focus,
    blockquote p {
      border-color: #eb9600 !important;
    }

    .price-btn .btn:hover {
      color: #ffffff !important;
      background-color: #eb9600 !important;
    }

    .play-icon a::before {
      background-color: #eb9600;
    }

    .play-icon a:hover::before {
      background-color: #eb9600;
    }

    .slider-btn .btn,
    .rounding-btn .btn {
      border-color: #d4d4d4;
    }

    .slider-btn .btn:hover,
    .rounding-btn .btn:hover {
      border-color: #ffffff;
    }

    .play-icon a:hover::before {
      background-color: #eb9600;
    }

    .breadcrumb-bg.image-overlay:after {
      opacity: 0.9;
      background-color: #000000;
    }

    .subscribe-form .btn:hover,
    .pagination li.page-item.active a.page-link,
    .pagination li.page-item:hover a.page-link,
    .widget_tag_cloud a:hover{
      border-color: #eb9600 !important;
      background: #eb9600 !important;
      color:#fff !important;
    }

    .breadcrumb-area {
      padding: 155px 0;
    }

    #loading {
      background: #eb9600;
    }
    .object {
      background-color: #fff;
    }
    .single-main-slider {
      padding-top: 255px;
      padding-bottom: 270px;
    }
</style>
<link href="wp-content/plugins/tablepress/css/default.min.css" id="tablepress-default-css" media="all" rel="stylesheet"/>
<link href="wp-content/plugins/js_composer/assets/css/js_composer.min.css" id="js_composer_front-css" media="all" rel="stylesheet"/>
<script id="jquery-core-js" src="wp-includes/js/jquery/jquery.min.js"></script>

<?php if (isset($extra_head_content)) echo $extra_head_content; ?>

</head>
<body class="<?php echo htmlspecialchars($body_class); ?>">
<div style="background-color: #eb9600;">
  <div class="">
    <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
    <h2 class="vc_custom_heading wpb_animate_when_almost_visible wpb_bounceIn bounceIn wpb_start_animation animated" style="color: white;text-align: center;font-family: Poppins, sans-serif;font-weight:300;font-style:normal; font-size:small; padding-left: 5px;padding-right: 5px;">COVID-19 Alert: We have resumed manufacturing under the guidelines of the government authority.</h2>
    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
  </div>
</div>

<!-- Start of Header ============================================= -->
<header class="header-default">
<div class="header-cta d-none d-md-block">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-7 text-center text-lg-left col-lg-9">
<div class="single-cta">
<i aria-hidden="true" class="fa fa-phone"></i>
<span><?php echo CONTACT_PHONE_1; ?></span>
</div>
<div class="single-cta">
<i aria-hidden="true" class="fa fa-envelope-o"></i>
<span><?php echo CONTACT_EMAIL; ?></span>
</div>
<div class="single-cta">
<i aria-hidden="true" class="fa fa-map-marker"></i>
<span><?php echo CONTACT_ADDRESS; ?></span>
</div>
</div>
<div class="col-xl-5 d-none d-lg-block col-lg-3 text-right">
<div class="header-social">
<a href="https://business.facebook.com/Globe-Scott-Motors-Pvt-Ltd-134264700644329/?ref=your_pages" target="_blank"><i class="fa fa-facebook"></i></a>
<a href="https://twitter.com/GlobescottMotor" target="_blank"><i class="fa fa-twitter"></i></a>
<a href="https://www.linkedin.com/in/globe-scott-motors-a4823b134?trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div>
<div id="menufix"></div>
<div class="menu-area" id="sticky-header">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-2 col-md-6">
<div class="logo"><a class="navbar-brand-logo" href="index/"><img alt="<?php echo SITE_NAME; ?>" src="wp-content/uploads/2020/02/globescott_LogoNew-e1581224444161.png"/></a></div>
</div>
<div class="col-lg-10 text-right">
<div class="main-menu">
<nav id="mobile-menu" style="display: block;">
<ul class="rounding-main-menu">
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10 <?php echo is_active_menu('index', $current_page); ?>" id="menu-item-10"><a href="index/" title="Home">Home</a></li>
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12 <?php echo is_active_menu('about-us', $current_page); ?>" id="menu-item-12"><a href="about-us/" title="About Us">About Us</a></li>
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13 submenu-area <?php echo is_active_menu(['products', 'products-pmdc-motors', 'products-pmdc-geared-motors', 'products-pmdc-transaxel', 'products-railway-signalling-products', 'products-bldc-motors'], $current_page); ?>" id="menu-item-13">
    <a aria-haspopup="true" class="dropdown-toggle" data-toggle="submenu-area" href="products/" title="Products">Products</a>
    <ul class="submenu">
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2287 <?php echo is_active_menu('products-pmdc-motors', $current_page); ?>" id="menu-item-2287"><a href="products-pmdc-motors/" title="PMDC Motors">PMDC Motors</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2289 <?php echo is_active_menu('products-pmdc-geared-motors', $current_page); ?>" id="menu-item-2289"><a href="products-pmdc-geared-motors/" title="Geared PMDC Motors">Geared PMDC Motors</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2290 <?php echo is_active_menu('products-pmdc-transaxel', $current_page); ?>" id="menu-item-2290"><a href="products-pmdc-transaxel/" title="PMDC Transaxle">PMDC Transaxle</a></li>
      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2291 <?php echo is_active_menu('products-railway-signalling-products', $current_page); ?>" id="menu-item-2291"><a href="products-railway-signalling-products/" title="Railway Signaling Products">Railway Signaling Products</a></li>
      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3051 <?php echo is_active_menu('products-bldc-motors', $current_page); ?>" id="menu-item-3051"><a href="products-bldc-motors/" title="BLDC Motors">BLDC Motors</a></li>
    </ul>
  </li>
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14 <?php echo is_active_menu('applications', $current_page); ?>" id="menu-item-14"><a href="applications/" title="Applications">Applications</a></li>
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16 <?php echo is_active_menu('blog', $current_page); ?>" id="menu-item-16"><a href="blog/" title="Blog">Blog</a></li>
  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 <?php echo is_active_menu('contact-us', $current_page); ?>" id="menu-item-18"><a href="contact-us/" title="Contact Us">Contact Us</a></li>
</ul>
</nav>
</div>
</div>
<div class="col-12">
<div class="mobile-menu"></div>
</div>
</div>
</div>
</div>
</header>
<!-- header-end -->


