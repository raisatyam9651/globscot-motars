<?php
$current_page = 'blog';
$page_title = 'DC & BLDC Motor Blog & Technical Resources | Globe Scott Motors';
$meta_description = 'Engineering articles and technical guides on PMDC motors, BLDC motors, geared motors, railway signalling motors, PMDC transaxles & maintenance from Globe Scott Motors.';
$body_class = 'blog wpb-js-composer js-comp-ver-6.1 vc_responsive';

require_once __DIR__ . '/../includes/header.php';

$all_posts = [
    [
        'title' => 'What Is a PMDC Motor? Working, Advantages, Applications & Selection Guide',
        'url' => 'blog/what-is-pmdc-motor.php',
        'date' => 'August 14, 2026',
        'excerpt' => 'Permanent Magnet Direct Current (PMDC) motors are a cornerstone of modern motion-control systems. Learn how PMDC motors work, Lorentz force physics, key advantages, industrial applications, FAQs, and selection guide.',
        'image' => '/wp-content/uploads/2020/02/Permanent-magnet-DC-Motors-550x367.png'
    ],
    [
        'title' => 'How to Select an Industrial Motor Manufacturer in India for Custom Motor Requirements',
        'url' => 'blog/select-industrial-motor-manufacturer-in-india-custom-requirements.php',
        'date' => 'August 12, 2026',
        'excerpt' => 'Strategic guide to selecting an industrial motor manufacturer in India. Evaluate R&D capabilities, ISO quality certifications, testing facilities, and OEM customization.',
        'image' => '/wp-content/uploads/2020/02/industrial-automation-300x217-1.jpg'
    ],
    [
        'title' => 'Brushed DC vs Brushless DC Motors: Which Is Better for Industrial Applications?',
        'url' => 'blog/brushed-dc-vs-brushless-dc-motors-industrial-applications.php',
        'date' => 'August 8, 2026',
        'excerpt' => 'Detailed comparison between Brushed DC (PMDC) & Brushless DC (BLDC) motors. Compare efficiency, maintenance, cost, speed control & selection factors for OEMs.',
        'image' => '/wp-content/uploads/2020/02/BRUSH-LESS-DC-MOTOR-FOR-RAILWAY-CARRIAGE-FANS-550x367.png'
    ],
    [
        'title' => 'DC Motor Maintenance: Common Problems, Troubleshooting & Preventive Maintenance',
        'url' => 'blog/dc-motor-maintenance-common-problems-troubleshooting-preventive.php',
        'date' => 'August 5, 2026',
        'excerpt' => 'Complete technical guide to DC motor maintenance. Learn carbon brush inspection, commutator resurfacing, insulation resistance testing, and troubleshooting routines.',
        'image' => '/wp-content/uploads/2020/02/Permanent-Magnet-DC-Motors-1-550x367.png'
    ],
    [
        'title' => 'How to Choose the Right Motor Power, RPM and Gear Ratio for Your Machine',
        'url' => 'blog/how-to-choose-right-motor-power-rpm-and-gear-ratio.php',
        'date' => 'August 1, 2026',
        'excerpt' => 'Practical guide to selecting motor power (Watts/HP), base RPM & gear ratios for OEM machinery. Learn duty cycle sizing, thermal limits & gearhead selection.',
        'image' => '/wp-content/uploads/2020/02/A114-SERIES-GEARED-MOTORS-550x367.png'
    ],
    [
        'title' => 'Motor Torque and Speed Calculation: A Practical Guide for Industrial Applications',
        'url' => 'blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications.php',
        'date' => 'July 28, 2026',
        'excerpt' => 'Practical engineering guide to motor torque and speed calculations. Step-by-step formulas for torque, RPM, power, gear ratios, and inertia matching.',
        'image' => '/wp-content/uploads/2020/02/A92-SERIES-GEARED-MOTORS-550x367.png'
    ],
    [
        'title' => 'Custom DC Motors: How Manufacturers Design Motors for Specific Applications',
        'url' => 'blog/custom-dc-motors-design-for-specific-applications.php',
        'date' => 'July 25, 2026',
        'excerpt' => 'Inside look at custom DC motor engineering. Learn how manufacturers customize armature windings, magnetic circuits, shafts, enclosures, and gearheads for OEMs.',
        'image' => '/wp-content/uploads/2020/02/A80-SERIES-GEARED-MOTORS-550x367.png'
    ],
    [
        'title' => 'Geared PMDC Motor: Working, Benefits, Applications & Selection Guide',
        'url' => 'blog/geared-pmdc-motor-working-benefits-applications-selection-guide.php',
        'date' => 'July 24, 2026',
        'excerpt' => 'In-depth guide to Geared PMDC Motors. Discover how gear reduction multiplies torque, gearhead types (planetary, spur, worm), industrial applications, FAQs, and sizing formulas.',
        'image' => '/wp-content/uploads/2020/02/PMDC-GEARED-MOTORS.png'
    ],
    [
        'title' => 'DC Gear Motors for Winches: Torque, Speed & Load Selection Guide',
        'url' => 'blog/dc-gear-motors-for-winches-torque-speed-load-selection-guide.php',
        'date' => 'July 20, 2026',
        'excerpt' => 'Engineering guide to DC gear motors for industrial winches & hoists. Learn line pull torque calculations, gear ratios, self-locking brakes & duty cycle sizing.',
        'image' => '/wp-content/uploads/2020/02/D144-SERIES-550x367.png'
    ],
    [
        'title' => 'How to Choose the Right PMDC Motor for Industrial Applications',
        'url' => 'blog/how-to-choose-pmdc-motor-industrial-applications.php',
        'date' => 'July 20, 2026',
        'excerpt' => 'Step-by-step buyer guide for specifying PMDC motors for automation, conveyors, pumps, and medical devices. Includes torque calculations, IP protection ratings, and selection steps.',
        'image' => '/wp-content/uploads/2020/02/pmdc-motors.png'
    ],
    [
        'title' => 'PMDC Motor vs BLDC Motor: Which Motor Is Right for Your Application?',
        'url' => 'blog/pmdc-motor-vs-bldc-motor-comparison.php',
        'date' => 'July 16, 2026',
        'excerpt' => 'Head-to-head engineering comparison of Brushed PMDC vs Brushless BLDC motors. Compare efficiency, lifespan, drive controllers, maintenance requirements, and cost factors.',
        'image' => '/wp-content/uploads/2020/02/Permanent-magnet-DC-Motors_2-550x367.png'
    ],
    [
        'title' => 'PMDC Transaxle Motors for Golf Carts and Small Electric Vehicles',
        'url' => 'blog/pmdc-transaxle-motors-for-golf-carts-and-small-evs.php',
        'date' => 'July 15, 2026',
        'excerpt' => 'Engineering guide to PMDC transaxle motors for golf carts, campus buggies & small electric utility vehicles. Learn torque calculations, hill climbing & battery selection.',
        'image' => '/wp-content/uploads/2020/02/PMDC-Transaxel.png'
    ],
    [
        'title' => 'PMDC Motor Manufacturer in India: Complete Buyer’s Guide',
        'url' => 'blog/pmdc-motor-manufacturer-in-india-buyers-guide.php',
        'date' => 'July 12, 2026',
        'excerpt' => 'Comprehensive buyer guide for sourcing PMDC motors in India. Learn quality standards (ISO, CE, ROHS), custom motor options, supply chain advantages, and RFP tips.',
        'image' => '/wp-content/uploads/2020/02/PMDC-GEARED-MOTORS.png'
    ],
    [
        'title' => 'PMDC Transaxle: Working, Features, Applications & Buying Guide',
        'url' => 'blog/pmdc-transaxle-working-features-applications-buying-guide.php',
        'date' => 'July 10, 2026',
        'excerpt' => 'Comprehensive guide to PMDC transaxle drive units. Learn internal differential mechanics, gear ratios, electromagnetic brakes, applications & OEM buying tips.',
        'image' => '/wp-content/uploads/2020/02/PMDC-Transaxel.png'
    ],
    [
        'title' => 'Custom Geared PMDC Motors: How to Select the Right Gear Ratio and Torque',
        'url' => 'blog/custom-geared-pmdc-motors-gear-ratio-torque-selection.php',
        'date' => 'July 8, 2026',
        'excerpt' => 'Technical guide to selecting custom gear ratios and output torque for PMDC geared motors. Covers gearhead efficiency, self-locking worm drives, and thermal rating considerations.',
        'image' => '/wp-content/uploads/2020/02/geared-motors.png'
    ],
    [
        'title' => 'Motors for Industrial Cleaning Machines: PMDC Motor and Transaxle Applications',
        'url' => 'blog/motors-for-industrial-cleaning-machines-pmdc-transaxle-applications.php',
        'date' => 'July 5, 2026',
        'excerpt' => 'Engineering guide to motors for industrial cleaning machines. Learn PMDC motor & transaxle selection for floor scrubbers, sweepers & vacuum equipment.',
        'image' => '/wp-content/uploads/2020/02/PMDC-Transaxel.png'
    ],
    [
        'title' => 'Geared Motor vs Standard DC Motor: Key Differences Explained',
        'url' => 'blog/geared-motor-vs-standard-dc-motor-key-differences.php',
        'date' => 'July 5, 2026',
        'excerpt' => 'Compare direct-drive standard DC motors vs geared DC motors. Learn how gear reduction alters speed, multiplies torque, affects efficiency, and impacts machine physical envelope.',
        'image' => '/wp-content/uploads/2020/02/geared-motors.png'
    ],
    [
        'title' => 'Electric Motors for Material Handling Equipment: Types & Selection Guide',
        'url' => 'blog/electric-motors-for-material-handling-equipment-types-selection.php',
        'date' => 'July 1, 2026',
        'excerpt' => 'Engineering guide to electric motors for material handling equipment. Learn motor selection for AGVs, forklifts, conveyors, pallet trucks & transaxles.',
        'image' => '/wp-content/uploads/2020/02/material-handling-300x217-1.jpg'
    ],
    [
        'title' => 'BLDC Motor Manufacturer in India: Applications, Benefits & Selection Guide',
        'url' => 'blog/bldc-motor-manufacturer-in-india-guide.php',
        'date' => 'July 1, 2026',
        'excerpt' => 'Buyer guide to Brushless DC (BLDC) motors in India. Covers high energy efficiency, low noise, maintenance-free operation, industrial applications, and sourcing tips.',
        'image' => '/wp-content/uploads/2020/02/BRUSH-LESS-DC-MOTOR-FOR-RAILWAY-CARRIAGE-FANS-550x367.png'
    ],
    [
        'title' => 'BLDC Motor vs PMDC Motor: Efficiency, Cost, Speed & Maintenance Comparison',
        'url' => 'blog/bldc-motor-vs-pmdc-motor-efficiency-cost-maintenance.php',
        'date' => 'June 28, 2026',
        'excerpt' => 'Detailed side-by-side analysis of BLDC vs PMDC motors. Evaluates energy efficiency ratings, electronic vs mechanical commutation, thermal limits, and total cost of ownership.',
        'image' => '/wp-content/uploads/2020/02/BRUSH-LESS-DC-MOTOR-FOR-RAILWAY-CARRIAGE-FANS-550x367.png'
    ],
    [
        'title' => 'DC Motors for Automatic Doors and Gates: How to Choose the Right Motor',
        'url' => 'blog/dc-motors-for-automatic-doors-and-gates-selection-guide.php',
        'date' => 'June 25, 2026',
        'excerpt' => 'Engineering guide to selecting DC motors for automatic doors & sliding gates. Learn torque sizing, gear ratios, self-locking worm gearheads & encoder feedback.',
        'image' => '/wp-content/uploads/2020/02/PMDC-GEARED-MOTORS.png'
    ],
    [
        'title' => 'How to Select a BLDC Motor for Industrial Applications',
        'url' => 'blog/how-to-select-bldc-motor-industrial-applications.php',
        'date' => 'June 25, 2026',
        'excerpt' => 'Step-by-step engineering roadmap for selecting Brushless DC motors. Learn how to calculate continuous vs peak torque, select Hall sensor drives, and match supply voltages.',
        'image' => '/wp-content/uploads/2020/02/BRUSH-LESS-DC-MOTOR-FOR-RAILWAY-CARRIAGE-FANS-550x367.png'
    ],
    [
        'title' => 'PMDC Motors for Pumps: Benefits, Applications & Selection Guide',
        'url' => 'blog/pmdc-motors-for-pumps-benefits-applications-selection-guide.php',
        'date' => 'June 20, 2026',
        'excerpt' => 'Engineering guide to PMDC motors for hydraulic, diaphragm, water & agricultural pumps. Learn flow rate calculations, torque profiles, IP ratings & selection tips.',
        'image' => '/wp-content/uploads/2020/02/solur-pumps-300x217-1.jpg'
    ],
    [
        'title' => 'DC Motors for Railway Signalling Systems: Applications and Selection Factors',
        'url' => 'blog/dc-motors-for-railway-signalling-systems-applications-selection.php',
        'date' => 'June 15, 2026',
        'excerpt' => 'Engineering guide to DC motors for railway signalling systems. Compare 110V & 24V DC motors, point machines, lifting barriers, IP67 protection & RDSO selection factors.',
        'image' => '/wp-content/uploads/2020/02/RAILWAY-SIGNALING-MOTORS.png'
    ],
    [
        'title' => 'RDSO Approved Railway Motors: What Buyers Need to Know',
        'url' => 'blog/rdso-approved-railway-motors-buyers-guide.php',
        'date' => 'June 10, 2026',
        'excerpt' => 'Complete buyer guide to RDSO approved railway motors in India. Learn IRS specifications, testing standards, vendor registration & procurement guidelines.',
        'image' => '/wp-content/uploads/2020/02/AC-Motor-for-Point-Machine--550x367.png'
    ],
    [
        'title' => 'IP67 Motors for Railway Applications: Benefits, Protection & Performance',
        'url' => 'blog/ip67-motors-for-railway-applications-benefits-protection-performance.php',
        'date' => 'June 5, 2026',
        'excerpt' => 'Engineering guide to IP67 waterproof motors for railway trackside applications. Learn ingress protection testing, monsoon flood resistance, thermal design & RDSO standards.',
        'image' => '/wp-content/uploads/2020/02/railroad-tracks-in-city-258510.jpg'
    ],
    [
        'title' => 'Railway Electric Lifting Barrier: Working, Features, Benefits & Applications',
        'url' => 'blog/railway-electric-lifting-barrier-working-features-applications.php',
        'date' => 'June 1, 2026',
        'excerpt' => 'Engineering guide to railway electric lifting barriers for level crossings. Learn motor drive mechanics, counterbalancing, IP67 sealing, safety features & RDSO standards.',
        'image' => '/wp-content/uploads/2020/02/electrical-lifting-barrier-300x217-1.jpg'
    ],
    [
        'title' => 'Electric Point Machine: How It Works and Why It Is Important in Railway Signalling',
        'url' => 'blog/electric-point-machine-working-importance-railway-signalling.php',
        'date' => 'May 25, 2026',
        'excerpt' => 'Learn how an electric point machine works in railway signalling. Discover internal motor drive mechanics, locking mechanisms, safety importance & RDSO standards.',
        'image' => '/wp-content/uploads/2020/02/Electric-Point-GSM-143-min-1-250x180-1.png'
    ],
    [
        'title' => 'Point Machine Motor for Railway Signalling: Working, Features & Applications',
        'url' => 'blog/point-machine-motor-for-railway-signalling-working-features-applications.php',
        'date' => 'May 20, 2026',
        'excerpt' => 'Technical guide to point machine motors for railway signalling. Learn working principles, stroke torque calculations, friction clutch safety, IP67 protection & RDSO specs.',
        'image' => '/wp-content/uploads/2020/02/Electric-Point-GSM-220-min-1-250x180-1.png'
    ],
    [
        'title' => 'Railway Signalling Motors: Types, Applications & Safety Requirements',
        'url' => 'blog/railway-signalling-motors-types-applications-safety-requirements.php',
        'date' => 'May 15, 2026',
        'excerpt' => 'Comprehensive guide to railway signalling motors. Learn about point machine motors, barrier drives, IP67 sealing, RDSO safety standards & application selection.',
        'image' => '/wp-content/uploads/2020/02/RAILWAY-SIGNALING-MOTORS.png'
    ]
];

// --- Pagination Logic (9 blogs per page in a 3x3 grid) ---
$per_page = 9;
$total_posts = count($all_posts);
$total_pages = (int)ceil($total_posts / $per_page);

$current_page_num = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page_num < 1) {
    $current_page_num = 1;
} elseif ($current_page_num > $total_pages) {
    $current_page_num = $total_pages;
}

$offset = ($current_page_num - 1) * $per_page;
$posts = array_slice($all_posts, $offset, $per_page);
?>

<!-- Custom CSS for 3x3 Grid Cards -->
<style>
.blog-grid-card {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    overflow: hidden;
    background: #ffffff;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.blog-grid-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
}
.blog-grid-card .img-wrapper {
    position: relative;
    overflow: hidden;
    height: 210px;
    background-color: #f8f9fa;
}
.blog-grid-card .img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}
.blog-grid-card:hover .img-wrapper img {
    transform: scale(1.05);
}
.blog-grid-card .card-body-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.blog-grid-card .meta-info {
    font-size: 12px;
    font-weight: 600;
    color: #eb9600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 8px;
}
.blog-grid-card .post-title-heading {
    font-size: 17px;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 12px;
}
.blog-grid-card .post-title-heading a {
    color: #1a202c;
    text-decoration: none;
    transition: color 0.2s ease;
}
.blog-grid-card .post-title-heading a:hover {
    color: #eb9600;
}
.blog-grid-card .post-excerpt-text {
    font-size: 14px;
    color: #4a5568;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}
.blog-grid-card .read-more-btn {
    display: inline-block;
    background-color: #eb9600;
    color: #ffffff;
    font-weight: 700;
    font-size: 13px;
    padding: 8px 18px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.2s ease;
    align-self: flex-start;
}
.blog-grid-card .read-more-btn:hover {
    background-color: #d18400;
    color: #ffffff;
}
</style>

<!-- End of Header ============================================= -->
<main class="normal-footer">
<!-- breadcrumb -->
<section class="breadcrumb-area breadcrumb-bg image-overlay" style="background-image: url(/wp-content/uploads/2020/02/AdobeStock_115615488_Preview-e1581314210869.jpeg);">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="page-title header1-height">
<h1>Blog & Knowledge Center</h1>
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

<section class="blog-area pb-70 pt-80">
<div class="container">

<div class="row mb-4">
<div class="col-12 d-flex justify-content-between align-items-center">
<h2 style="font-size: 24px; font-weight: 700; color: #2d3748; margin: 0;">Latest Technical Articles</h2>
<span style="font-size: 14px; color: #718096; font-weight: 500;">Showing <?php echo $offset + 1; ?>–<?php echo min($offset + $per_page, $total_posts); ?> of <?php echo $total_posts; ?> articles</span>
</div>
</div>

<!-- ========== 3x3 Card Grid (9 Blogs Per Page) ========== -->
<div class="row">
<?php foreach ($posts as $post): ?>
<div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
<article class="blog-grid-card">
<div class="img-wrapper">
<a href="<?php echo $post['url']; ?>">
<img alt="<?php echo htmlspecialchars($post['title']); ?>" loading="lazy" src="<?php echo $post['image']; ?>"/>
</a>
</div>
<div class="card-body-content">
<div class="meta-info">
GLOBE SCOTT MOTORS • <?php echo $post['date']; ?>
</div>
<h3 class="post-title-heading">
<a href="<?php echo $post['url']; ?>"><?php echo $post['title']; ?></a>
</h3>
<p class="post-excerpt-text"><?php echo $post['excerpt']; ?></p>
<a class="read-more-btn" href="<?php echo $post['url']; ?>">Read Article →</a>
</div>
</article>
</div>
<?php endforeach; ?>
</div>

<!-- ========== Pagination Controls ========== -->
<?php if ($total_pages > 1): ?>
<div class="row mt-4 mb-5">
<div class="col-12 text-center">
<nav aria-label="Blog Page Navigation">
<ul class="pagination justify-content-center" style="display: inline-flex; gap: 8px; list-style: none; padding: 0; margin: 0;">

<?php if ($current_page_num > 1): ?>
<li class="page-item">
<a class="page-link" href="blog/index.php?page=<?php echo $current_page_num - 1; ?>" style="padding: 10px 18px; border: 1px solid #eb9600; color: #eb9600; background: #fff; font-weight: bold; border-radius: 4px; text-decoration: none;">« Prev</a>
</li>
<?php endif; ?>

<?php for ($p = 1; $p <= $total_pages; $p++): ?>
<li class="page-item <?php echo ($p === $current_page_num) ? 'active' : ''; ?>">
<a class="page-link" href="blog/index.php?page=<?php echo $p; ?>" style="padding: 10px 18px; border: 1px solid #eb9600; color: <?php echo ($p === $current_page_num) ? '#ffffff' : '#eb9600'; ?>; background: <?php echo ($p === $current_page_num) ? '#eb9600' : '#ffffff'; ?>; font-weight: bold; border-radius: 4px; text-decoration: none;">
<?php echo $p; ?>
</a>
</li>
<?php endfor; ?>

<?php if ($current_page_num < $total_pages): ?>
<li class="page-item">
<a class="page-link" href="blog/index.php?page=<?php echo $current_page_num + 1; ?>" style="padding: 10px 18px; border: 1px solid #eb9600; color: #eb9600; background: #fff; font-weight: bold; border-radius: 4px; text-decoration: none;">Next »</a>
</li>
<?php endif; ?>

</ul>
</nav>
</div>
</div>
<?php endif; ?>

</div>
</section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
