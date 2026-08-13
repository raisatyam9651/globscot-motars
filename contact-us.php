<?php
$current_page = 'contact-us';
$page_title = 'Contact us – GLOBE SCOTT MOTORS PVT LTD';
$body_class = 'page-template page-template-page-template page-template-blank-page-sidebar page-template-page-templateblank-page-sidebar-php page page-id-2782 wpb-js-composer js-comp-ver-6.1 vc_responsive';

$form_message = '';
$form_status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['your-name']) ? sanitize_input($_POST['your-name']) : '';
    $email = isset($_POST['your-email']) ? sanitize_input($_POST['your-email']) : '';
    $phone = isset($_POST['your-pnumber']) ? sanitize_input($_POST['your-pnumber']) : '';
    $message = isset($_POST['your-message']) ? sanitize_input($_POST['your-message']) : '';

    if (empty($name) || empty($email) || empty($phone)) {
        $form_status = 'error';
        $form_message = 'Please fill in all required fields (Name, Email, and Phone number).';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_status = 'error';
        $form_message = 'Please enter a valid email address.';
    } else {
        $form_status = 'success';
        $form_message = 'Thank you, ' . htmlspecialchars($name) . '! Your message has been sent successfully. We will contact you soon.';
    }
}

$extra_head_content = <<<'EOD'
<style data-type="vc_shortcodes-custom-css">.vc_custom_1610014486678{padding-top: 60px !important;padding-bottom: 30px !important;}.vc_custom_1610014529637{padding-bottom: 70px !important;}.vc_custom_1581659157236{margin-top: -38px !important;}.vc_custom_1545733179515{margin-bottom: -30px !important;}.vc_custom_1547288586939{padding-bottom: 100px !important;}.vc_custom_1610014571938{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1581660131432{margin-bottom: 0px !important;}</style>
EOD;

require_once __DIR__ . '/includes/header.php';
?>

<main class="normal-footer">
<!-- breadcrumb -->
<section class="breadcrumb-area breadcrumb-bg image-overlay" style="background-image: url(wp-content/uploads/2020/02/AdobeStock_115615488_Preview-e1581314210869.jpeg);">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="page-title header1-height">
<h1>Contact us</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="index/">Home</a></li><li class="breadcrumb-item active">Contact us</li></ol> </nav>
</div>
</div>
</div>
</div>
</section>
<!-- breadcrumb-end -->
<div class="container">
<div class="vc_row section-element vc_custom_1610014486678" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" style="position: relative; left: -40px; box-sizing: border-box; width: 1280px;">
<div class="vc_col-sm-12">
<div class="wpb_text_column wpb_content_element">
<h2 style="text-align: center;">Office in India</h2>
</div>
</div>
</div><div class="vc_row-full-width"></div><div class="vc_row section-element vc_custom_1610014529637" data-vc-full-width="true" data-vc-full-width-init="true" style="position: relative; left: -40px; box-sizing: border-box; width: 1280px; padding-left: 40px; padding-right: 40px;">
<div class="vc_col-sm-12">
<div class="vc_row section contact-info-wrap vc_custom_1581659157236"><div class="custom_contact_elm wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head -->
<div class="contact-cta mb-30">
<div class="cta-icon">
<img alt="Contact image" src="wp-content/uploads/2018/12/phone-call.png"/>
</div>
<div class="cta-content">
<h3>Phone</h3>
<p><?php echo CONTACT_PHONE_1; ?><br/>
<?php echo CONTACT_PHONE_2; ?></p>
</div>
</div>
</div></div></div><div class="custom_contact_elm wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head -->
<div class="contact-cta mb-30">
<div class="cta-icon">
<img alt="Contact image" src="wp-content/uploads/2018/12/mail.png"/>
</div>
<div class="cta-content">
<h3>Email</h3>
<p><?php echo CONTACT_EMAIL; ?></p>
</div>
</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner"><div class="wpb_wrapper">
<!-- Section Head -->
<div class="contact-cta mb-30">
<div class="cta-icon">
<img alt="Contact image" src="wp-content/uploads/2018/12/pin.png"/>
</div>
<div class="cta-content">
<h3>Address</h3>
<p><?php echo CONTACT_ADDRESS; ?></p>
</div>
</div>
</div></div></div></div>
</div>
</div><div class="vc_row-full-width"></div><div class="vc_row section-element">
<div class="vc_col-sm-12 text-center vc_custom_1545733179515">
<!-- Section Head -->
<div class="row">
<div class="col-lg-8 offset-lg-2 text-center center-title">
<div class="section-title second-home-title center-title">
<h2 class="wow fadeInUp">Get In Touch</h2>
<p class="wow fadeInUp">Would you like to get in touch with us? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
</div>
</div>
</div>
</div>
</div><div class="vc_row section-element vc_custom_1547288586939">
<div class="vc_col-sm-12">
<div class="wpcf7" dir="ltr" id="wpcf7-f602-p2782-o1" lang="en-US" role="form">

<?php if (!empty($form_message)): ?>
  <div class="alert alert-<?php echo $form_status === 'success' ? 'success' : 'danger'; ?>" style="margin-bottom: 25px; padding: 15px; border-radius: 4px; font-size: 15px; text-align: center;">
    <?php echo $form_message; ?>
  </div>
<?php endif; ?>

<form action="contact-us/" class="wpcf7-form" method="post">
<div class="question-form-wrap contact-form">
<div class="row">
<div class="col-lg-4 col-md-6">
<span class="wpcf7-form-control-wrap your-name">
  <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="your-name" placeholder="Name *" required size="40" type="text" value="<?php echo isset($_POST['your-name']) ? htmlspecialchars($_POST['your-name']) : ''; ?>"/>
</span></div>
<div class="col-lg-4 col-md-6">
<span class="wpcf7-form-control-wrap your-email">
  <input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" name="your-email" placeholder="Email Address *" required size="40" type="email" value="<?php echo isset($_POST['your-email']) ? htmlspecialchars($_POST['your-email']) : ''; ?>"/>
</span></div>
<div class="col-lg-4">
<span class="wpcf7-form-control-wrap your-pnumber">
  <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" name="your-pnumber" placeholder="Phone number *" required size="40" type="text" value="<?php echo isset($_POST['your-pnumber']) ? htmlspecialchars($_POST['your-pnumber']) : ''; ?>"/>
</span></div>
<div class="col-12">
<span class="wpcf7-form-control-wrap your-message">
  <textarea class="wpcf7-form-control wpcf7-textarea" cols="40" name="your-message" placeholder="Your Requirements/Specification" rows="10"><?php echo isset($_POST['your-message']) ? htmlspecialchars($_POST['your-message']) : ''; ?></textarea>
</span>
<div class="rounding-btn" style="text-align:center;"><button type="submit" class="btn">Send Message</button></div></div></div>
</div>
</form></div>
</div>
</div><div class="vc_row section-element vc_custom_1610014571938" data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" style="position: relative; left: -40px; box-sizing: border-box; width: 1280px;">
<div class="vc_col-sm-12">
<div class="wpb_gmaps_widget wpb_content_element vc_custom_1581660131432"><div class="wpb_wrapper"><div class="wpb_map_wraper"><iframe allowfullscreen="" frameborder="0" height="600" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7473.210619390231!2d72.963661!3d20.5224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7321cdc6c5c44a67!2sGlobe%20Scott%20Motors%20Private%20Limited!5e0!3m2!1sen!2sin!4v1581660114387!5m2!1sen!2sin" style="border: 0px; pointer-events: none;" width="800"></iframe></div></div></div>
</div>
</div><div class="vc_row-full-width"></div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

