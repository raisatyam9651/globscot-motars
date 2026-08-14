<?php
$current_page = 'blog';
$page_title = 'DC & BLDC Motor Blog & Technical Resources | Globe Scott Motors';
$meta_description = 'Engineering articles and technical guides on PMDC motors, BLDC motors, geared motors, railway signalling motors, PMDC transaxles & maintenance from Globe Scott Motors.';
$body_class = 'blog wpb-js-composer js-comp-ver-6.1 vc_responsive';

require_once __DIR__ . '/../includes/header.php';

$posts = [
    [
        'title' => 'What Is a PMDC Motor? Working, Advantages, Applications & Selection Guide',
        'url' => 'blog/what-is-pmdc-motor.php',
        'date' => 'August 14, 2026',
        'excerpt' => 'Permanent Magnet Direct Current (PMDC) motors are a cornerstone of modern motion-control systems. Learn how PMDC motors work, Lorentz force physics, key advantages, industrial applications, FAQs, and selection guide.',
        'image' => 'wp-content/uploads/2020/02/blog1-min-1.png'
    ],
    [
        'title' => 'How to Select an Industrial Motor Manufacturer in India for Custom Motor Requirements',
        'url' => 'blog/select-industrial-motor-manufacturer-in-india-custom-requirements.php',
        'date' => 'August 12, 2026',
        'excerpt' => 'Strategic guide to selecting an industrial motor manufacturer in India. Evaluate R&D capabilities, ISO quality certifications, testing facilities, and OEM customization.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'Brushed DC vs Brushless DC Motors: Which Is Better for Industrial Applications?',
        'url' => 'blog/brushed-dc-vs-brushless-dc-motors-industrial-applications.php',
        'date' => 'August 8, 2026',
        'excerpt' => 'Detailed comparison between Brushed DC (PMDC) & Brushless DC (BLDC) motors. Compare efficiency, maintenance, cost, speed control & selection factors for OEMs.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'DC Motor Maintenance: Common Problems, Troubleshooting & Preventive Maintenance',
        'url' => 'blog/dc-motor-maintenance-common-problems-troubleshooting-preventive.php',
        'date' => 'August 5, 2026',
        'excerpt' => 'Complete technical guide to DC motor maintenance. Learn carbon brush inspection, commutator resurfacing, insulation resistance testing, and troubleshooting routines.',
        'image' => 'wp-content/uploads/2020/02/blog4.png'
    ],
    [
        'title' => 'How to Choose the Right Motor Power, RPM and Gear Ratio for Your Machine',
        'url' => 'blog/how-to-choose-right-motor-power-rpm-and-gear-ratio.php',
        'date' => 'August 1, 2026',
        'excerpt' => 'Practical guide to selecting motor power (Watts/HP), base RPM & gear ratios for OEM machinery. Learn duty cycle sizing, thermal limits & gearhead selection.',
        'image' => 'wp-content/uploads/2020/02/blog3.png'
    ],
    [
        'title' => 'Motor Torque and Speed Calculation: A Practical Guide for Industrial Applications',
        'url' => 'blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications.php',
        'date' => 'July 28, 2026',
        'excerpt' => 'Practical engineering guide to motor torque and speed calculations. Step-by-step formulas for torque, RPM, power, gear ratios, and inertia matching.',
        'image' => 'wp-content/uploads/2020/02/blog2-min.png'
    ],
    [
        'title' => 'Custom DC Motors: How Manufacturers Design Motors for Specific Applications',
        'url' => 'blog/custom-dc-motors-design-for-specific-applications.php',
        'date' => 'July 25, 2026',
        'excerpt' => 'Inside look at custom DC motor engineering. Learn how manufacturers customize armature windings, magnetic circuits, shafts, enclosures, and gearheads for OEMs.',
        'image' => 'wp-content/uploads/2020/02/blog1-min-1.png'
    ],
    [
        'title' => 'Geared PMDC Motor: Working, Benefits, Applications & Selection Guide',
        'url' => 'blog/geared-pmdc-motor-working-benefits-applications-selection-guide.php',
        'date' => 'July 24, 2026',
        'excerpt' => 'In-depth guide to Geared PMDC Motors. Discover how gear reduction multiplies torque, gearhead types (planetary, spur, worm), industrial applications, FAQs, and sizing formulas.',
        'image' => 'wp-content/uploads/2020/02/blog2-min.png'
    ],
    [
        'title' => 'DC Gear Motors for Winches: Torque, Speed & Load Selection Guide',
        'url' => 'blog/dc-gear-motors-for-winches-torque-speed-load-selection-guide.php',
        'date' => 'July 20, 2026',
        'excerpt' => 'Engineering guide to DC gear motors for industrial winches & hoists. Learn line pull torque calculations, gear ratios, self-locking brakes & duty cycle sizing.',
        'image' => 'wp-content/uploads/2020/02/blog4.png'
    ],
    [
        'title' => 'How to Choose the Right PMDC Motor for Industrial Applications',
        'url' => 'blog/how-to-choose-pmdc-motor-industrial-applications.php',
        'date' => 'July 20, 2026',
        'excerpt' => 'Step-by-step buyer guide for specifying PMDC motors for automation, conveyors, pumps, and medical devices. Includes torque calculations, IP protection ratings, and selection steps.',
        'image' => 'wp-content/uploads/2020/02/blog3.png'
    ],
    [
        'title' => 'PMDC Motor vs BLDC Motor: Which Motor Is Right for Your Application?',
        'url' => 'blog/pmdc-motor-vs-bldc-motor-comparison.php',
        'date' => 'July 16, 2026',
        'excerpt' => 'Head-to-head engineering comparison of Brushed PMDC vs Brushless BLDC motors. Compare efficiency, lifespan, drive controllers, maintenance requirements, and cost factors.',
        'image' => 'wp-content/uploads/2020/02/blog4.png'
    ],
    [
        'title' => 'PMDC Transaxle Motors for Golf Carts and Small Electric Vehicles',
        'url' => 'blog/pmdc-transaxle-motors-for-golf-carts-and-small-evs.php',
        'date' => 'July 15, 2026',
        'excerpt' => 'Engineering guide to PMDC transaxle motors for golf carts, campus buggies & small electric utility vehicles. Learn torque calculations, hill climbing & battery selection.',
        'image' => 'wp-content/uploads/2020/02/blog3.png'
    ],
    [
        'title' => 'PMDC Motor Manufacturer in India: Complete Buyer’s Guide',
        'url' => 'blog/pmdc-motor-manufacturer-in-india-buyers-guide.php',
        'date' => 'July 12, 2026',
        'excerpt' => 'Comprehensive buyer guide for sourcing PMDC motors in India. Learn quality standards (ISO, CE, ROHS), custom motor options, supply chain advantages, and RFP tips.',
        'image' => 'wp-content/uploads/2020/02/blog1-min-1.png'
    ],
    [
        'title' => 'PMDC Transaxle: Working, Features, Applications & Buying Guide',
        'url' => 'blog/pmdc-transaxle-working-features-applications-buying-guide.php',
        'date' => 'July 10, 2026',
        'excerpt' => 'Comprehensive guide to PMDC transaxle drive units. Learn internal differential mechanics, gear ratios, electromagnetic brakes, applications & OEM buying tips.',
        'image' => 'wp-content/uploads/2020/02/blog2-min.png'
    ],
    [
        'title' => 'Custom Geared PMDC Motors: How to Select the Right Gear Ratio and Torque',
        'url' => 'blog/custom-geared-pmdc-motors-gear-ratio-torque-selection.php',
        'date' => 'July 8, 2026',
        'excerpt' => 'Technical guide to selecting custom gear ratios and output torque for PMDC geared motors. Covers gearhead efficiency, self-locking worm drives, and thermal rating considerations.',
        'image' => 'wp-content/uploads/2020/02/blog2-min.png'
    ],
    [
        'title' => 'Motors for Industrial Cleaning Machines: PMDC Motor and Transaxle Applications',
        'url' => 'blog/motors-for-industrial-cleaning-machines-pmdc-transaxle-applications.php',
        'date' => 'July 5, 2026',
        'excerpt' => 'Engineering guide to motors for industrial cleaning machines. Learn PMDC motor & transaxle selection for floor scrubbers, sweepers & vacuum equipment.',
        'image' => 'wp-content/uploads/2020/02/blog1-min-1.png'
    ],
    [
        'title' => 'Geared Motor vs Standard DC Motor: Key Differences Explained',
        'url' => 'blog/geared-motor-vs-standard-dc-motor-key-differences.php',
        'date' => 'July 5, 2026',
        'excerpt' => 'Compare direct-drive standard DC motors vs geared DC motors. Learn how gear reduction alters speed, multiplies torque, affects efficiency, and impacts machine physical envelope.',
        'image' => 'wp-content/uploads/2020/02/blog3.png'
    ],
    [
        'title' => 'Electric Motors for Material Handling Equipment: Types & Selection Guide',
        'url' => 'blog/electric-motors-for-material-handling-equipment-types-selection.php',
        'date' => 'July 1, 2026',
        'excerpt' => 'Engineering guide to electric motors for material handling equipment. Learn motor selection for AGVs, forklifts, conveyors, pallet trucks & transaxles.',
        'image' => 'wp-content/uploads/2020/02/blog3.png'
    ],
    [
        'title' => 'BLDC Motor Manufacturer in India: Applications, Benefits & Selection Guide',
        'url' => 'blog/bldc-motor-manufacturer-in-india-guide.php',
        'date' => 'July 1, 2026',
        'excerpt' => 'Buyer guide to Brushless DC (BLDC) motors in India. Covers high energy efficiency, low noise, maintenance-free operation, industrial applications, and sourcing tips.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'BLDC Motor vs PMDC Motor: Efficiency, Cost, Speed & Maintenance Comparison',
        'url' => 'blog/bldc-motor-vs-pmdc-motor-efficiency-cost-maintenance.php',
        'date' => 'June 28, 2026',
        'excerpt' => 'Detailed side-by-side analysis of BLDC vs PMDC motors. Evaluates energy efficiency ratings, electronic vs mechanical commutation, thermal limits, and total cost of ownership.',
        'image' => 'wp-content/uploads/2020/02/blog4.png'
    ],
    [
        'title' => 'DC Motors for Automatic Doors and Gates: How to Choose the Right Motor',
        'url' => 'blog/dc-motors-for-automatic-doors-and-gates-selection-guide.php',
        'date' => 'June 25, 2026',
        'excerpt' => 'Engineering guide to selecting DC motors for automatic doors & sliding gates. Learn torque sizing, gear ratios, self-locking worm gearheads & encoder feedback.',
        'image' => 'wp-content/uploads/2020/02/blog2-min.png'
    ],
    [
        'title' => 'How to Select a BLDC Motor for Industrial Applications',
        'url' => 'blog/how-to-select-bldc-motor-industrial-applications.php',
        'date' => 'June 25, 2026',
        'excerpt' => 'Step-by-step engineering roadmap for selecting Brushless DC motors. Learn how to calculate continuous vs peak torque, select Hall sensor drives, and match supply voltages.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'PMDC Motors for Pumps: Benefits, Applications & Selection Guide',
        'url' => 'blog/pmdc-motors-for-pumps-benefits-applications-selection-guide.php',
        'date' => 'June 20, 2026',
        'excerpt' => 'Engineering guide to PMDC motors for hydraulic, diaphragm, water & agricultural pumps. Learn flow rate calculations, torque profiles, IP ratings & selection tips.',
        'image' => 'wp-content/uploads/2020/02/blog4.png'
    ],
    [
        'title' => 'DC Motors for Railway Signalling Systems: Applications and Selection Factors',
        'url' => 'blog/dc-motors-for-railway-signalling-systems-applications-selection.php',
        'date' => 'June 15, 2026',
        'excerpt' => 'Engineering guide to DC motors for railway signalling systems. Compare 110V & 24V DC motors, point machines, lifting barriers, IP67 protection & RDSO selection factors.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'RDSO Approved Railway Motors: What Buyers Need to Know',
        'url' => 'blog/rdso-approved-railway-motors-buyers-guide.php',
        'date' => 'June 10, 2026',
        'excerpt' => 'Complete buyer guide to RDSO approved railway motors in India. Learn IRS specifications, testing standards, vendor registration & procurement guidelines.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'IP67 Motors for Railway Applications: Benefits, Protection & Performance',
        'url' => 'blog/ip67-motors-for-railway-applications-benefits-protection-performance.php',
        'date' => 'June 5, 2026',
        'excerpt' => 'Engineering guide to IP67 waterproof motors for railway trackside applications. Learn ingress protection testing, monsoon flood resistance, thermal design & RDSO standards.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'Railway Electric Lifting Barrier: Working, Features, Benefits & Applications',
        'url' => 'blog/railway-electric-lifting-barrier-working-features-applications.php',
        'date' => 'June 1, 2026',
        'excerpt' => 'Engineering guide to railway electric lifting barriers for level crossings. Learn motor drive mechanics, counterbalancing, IP67 sealing, safety features & RDSO standards.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'Electric Point Machine: How It Works and Why It Is Important in Railway Signalling',
        'url' => 'blog/electric-point-machine-working-importance-railway-signalling.php',
        'date' => 'May 25, 2026',
        'excerpt' => 'Learn how an electric point machine works in railway signalling. Discover internal motor drive mechanics, locking mechanisms, safety importance & RDSO standards.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'Point Machine Motor for Railway Signalling: Working, Features & Applications',
        'url' => 'blog/point-machine-motor-for-railway-signalling-working-features-applications.php',
        'date' => 'May 20, 2026',
        'excerpt' => 'Technical guide to point machine motors for railway signalling. Learn working principles, stroke torque calculations, friction clutch safety, IP67 protection & RDSO specs.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ],
    [
        'title' => 'Railway Signalling Motors: Types, Applications & Safety Requirements',
        'url' => 'blog/railway-signalling-motors-types-applications-safety-requirements.php',
        'date' => 'May 15, 2026',
        'excerpt' => 'Comprehensive guide to railway signalling motors. Learn about point machine motors, barrier drives, IP67 sealing, RDSO safety standards & application selection.',
        'image' => 'wp-content/uploads/2020/07/pexels-darshak-pandya-2526935.jpg'
    ]
];
?>

<!-- End of Header ============================================= -->
<main class="normal-footer">
<!-- breadcrumb -->
<section class="breadcrumb-area breadcrumb-bg image-overlay" style="background-image: url(/wp-content/uploads/2020/02/AdobeStock_115615488_Preview-e1581314210869.jpeg);">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="page-title header1-height">
<h1>Blog Posts</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center">
<li class="breadcrumb-item"><a class="home" href="index.php">Home</a></li>
<li class="breadcrumb-item active">Blog</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</section>
<!-- breadcrumb-end -->

<section class="blog-area pb-70 pt-100">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="row">

<?php foreach ($posts as $index => $post): ?>
<div class="col-lg-12 mb-30">
<article class="post-card type-post status-publish format-standard has-post-thumbnail hentry">
<div class="blog-wrap">
<div class="blog-thumb">
<a href="<?php echo $post['url']; ?>">
<img alt="<?php echo htmlspecialchars($post['title']); ?>" class="img-fluid wp-post-image" loading="lazy" src="<?php echo $post['image']; ?>"/>
</a>
</div>
<div class="blog-content" style="padding: 25px; background: #ffffff; border: 1px solid #eee; border-top: none;">
<div class="entry-meta" style="margin-bottom: 10px; font-size: 14px; color: #777;">
<span class="author">by <strong>GLOBE SCOTT MOTORS</strong></span>
<span class="month"> - <a href="<?php echo $post['url']; ?>"><?php echo $post['date']; ?></a></span>
</div>
<h3 style="font-size: 20px; font-weight: 700; margin-bottom: 15px;">
<a href="<?php echo $post['url']; ?>" style="color: #222; text-decoration: none;"><?php echo $post['title']; ?></a>
</h3>
<p style="color: #555; line-height: 1.6; margin-bottom: 15px;"><?php echo $post['excerpt']; ?></p>
<div class="entry-meta-footer">
<a class="btn btn-warning text-dark font-weight-bold" href="<?php echo $post['url']; ?>" style="background-color: #eb9600; border-color: #eb9600; padding: 8px 20px; border-radius: 4px;">Continue Reading →</a>
</div>
</div>
</div>
</article>
</div>
<?php endforeach; ?>

</div>
</div>

<div class="col-lg-4">
<aside class="sidebar-wrapper">
<div class="widget mb-40 widget_recent_entries" style="background: #faf9f9; padding: 25px; border: 1px solid #eee;">
<h3 class="widget-title" style="font-size: 18px; font-weight: 700; border-bottom: 2px solid #eb9600; padding-bottom: 10px; margin-bottom: 20px;">Recent Articles</h3>
<ul style="list-style: none; padding: 0; margin: 0;">
<?php foreach (array_slice($posts, 0, 8) as $recent): ?>
<li style="margin-bottom: 12px; border-bottom: 1px solid #eef; padding-bottom: 8px;">
<a href="<?php echo $recent['url']; ?>" style="color: #333; font-weight: 500; font-size: 14px; text-decoration: none;"><?php echo $recent['title']; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>

<div class="widget mb-40 widget_categories" style="background: #faf9f9; padding: 25px; border: 1px solid #eee;">
<h3 class="widget-title" style="font-size: 18px; font-weight: 700; border-bottom: 2px solid #eb9600; padding-bottom: 10px; margin-bottom: 20px;">Product Categories</h3>
<ul style="list-style: none; padding: 0; margin: 0;">
<li style="margin-bottom: 8px;"><a href="products-pmdc-motors.php">PMDC Motors India</a></li>
<li style="margin-bottom: 8px;"><a href="products-geared-motors.php">Geared Motors India</a></li>
<li style="margin-bottom: 8px;"><a href="products-pmdc-geared-motors.php">PMDC Geared Motors</a></li>
<li style="margin-bottom: 8px;"><a href="products-pmdc-transaxle.php">PMDC Transaxle Drives</a></li>
<li style="margin-bottom: 8px;"><a href="products-bldc-motors.php">Brushless BLDC Motors</a></li>
<li style="margin-bottom: 8px;"><a href="products-railway-signalling-products.php">Railway Signalling Motors</a></li>
</ul>
</div>
</aside>
</div>

</div>
</div>
</section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
