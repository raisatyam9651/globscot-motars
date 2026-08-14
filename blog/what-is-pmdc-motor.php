<?php
$current_page = 'what-is-pmdc-motor';
$page_title = 'What Is a PMDC Motor? Working, Advantages, Applications & Selection Guide | Globe Scott Motors';
$meta_description = 'Comprehensive guide to Permanent Magnet DC (PMDC) motors — working principle, construction, Lorentz force, key advantages, industrial applications, FAQs and step-by-step selection guide from Globe Scott Motors.';
$body_class = 'post-template-default single single-post postid-2335 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

require_once __DIR__ . '/../includes/header.php';
?>

<!-- End of Header ============================================= -->
<main class="normal-footer">
<!-- breadcrumb -->
<section class="breadcrumb-area breadcrumb-bg image-overlay" style="background-image: url(/wp-content/uploads/2020/02/AdobeStock_115615488_Preview-e1581314210869.jpeg);">
<div class="container">
<div class="row">
<div class="col-12 text-center">
<div class="page-title header1-height">
<h1>What Is a PMDC Motor? Working, Advantages, Applications & Selection Guide</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="index.php">Home</a></li><li class="breadcrumb-item"><a href="blog/">Blog</a></li><li class="breadcrumb-item active">PMDC Motor Guide</li></ol> </nav>
</div>
</div>
</div>
</div>
</section>
<!-- breadcrumb-end -->
<!-- blog-section - start ================================================== -->
<section class="blog-area blog-area-pt blog-details pb-70 pt-100">
<div class="container">
<div class="row">
<div class="col-lg-8 blog-post-content">
<div class="blog-wrapper">
<div class="blog-details-content">
<article class="post-2335 post type-post status-publish format-standard has-post-thumbnail hentry category-dcmotors category-motors tag-pmdc-motor tag-dc-motors tag-motors" id="post-2335">
<img alt="PMDC Motor Working and Selection Guide" class="img-fluid full-thumb-img" src="/wp-content/uploads/2020/02/blog1-min-1.png"/>
<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>August 14, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>PMDC Motors, DC Motors, Motion Control</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>
<div class="blog-inner-blog">

<h2>Introduction to PMDC Motors</h2>
<p>Permanent Magnet Direct Current (PMDC) motors are fundamental motion-control components widely utilized in modern automation, robotics, automotive systems, and specialized industrial equipment. Unlike conventional wound-field DC motors that rely on electromagnetic field coils on the stator, a PMDC motor utilizes high-coercivity permanent magnets to generate a persistent magnetic field. This architectural distinction eliminates excitation power loss, dramatically simplifies motor construction, and enables superior power density in low-to-medium power applications.</p>

<p>Whether you are designing precision robotic drives, automotive actuators, or industrial conveyors, selecting the right motor drive demands a clear technical understanding of PMDC operating mechanics, electromechanical equations, and application boundaries. At <a href="about-us.php">Globe Scott Motors manufacturing expertise</a>, we engineered fractional and integral horsepower motor solutions designed for continuous duty and extreme operational environments. Explore our complete <a href="products-pmdc-motors.php">high-performance PMDC motors catalog</a> for technical datasheets and customized winding options.</p>

<hr/>

<h2>1. What Is a PMDC Motor and How Does It Work?</h2>
<p>A Permanent Magnet DC motor is an electromechanical rotary device that transforms direct current electrical energy into mechanical shaft power through magnetic field interaction. The fundamental components of a PMDC motor comprise three structural subsystems:</p>

<h3>A. Stator Assembly</h3>
<p>The stator forms the stationary outer housing (yoke) and houses two or more high-density permanent magnet poles (commonly Ferrite, Samarium-Cobalt, or Neodymium-Iron-Boron NdFeB). These magnets deliver a constant radial magnetic flux (&Phi;) across the air gap into the rotor core without requiring electrical excitation coils.</p>

<h3>B. Rotor (Armature) Assembly</h3>
<p>The rotor consists of a laminated iron core mounted on the central steel shaft. Insulated copper wire coils (armature windings) are wound into longitudinal slots around the core. Lamination minimizes eddy current losses during high-speed operation.</p>

<h3>C. Commutator & Carbon Brushes</h3>
<p>Mounted on the rear of the shaft is a segmented cylindrical copper commutator. Spring-loaded carbon or copper-graphite brushes maintain continuous sliding contact with the rotating commutator segments, feeding DC voltage directly into the active armature coils.</p>

<h3>The Electromechanical Working Principle</h3>
<p>The operation of a PMDC motor is governed by <strong>Lorentz's Force Law</strong> and <strong>Faraday's Law of Induction</strong>. When an external DC voltage source ($V$) is applied across the brush terminals, electrical current ($I_a$) flows into the armature winding situated within the stator's magnetic field ($B$).</p>

<p>Every current-carrying conductor inside the magnetic field experiences a mechanical force ($F$) defined by the vector equation:</p>

$$\vec{F} = I_a (\vec{L} \times \vec{B})$$

<p>Where $I_a$ is armature current, $L$ is the active length of the conductor, and $B$ is the magnetic flux density. Because conductors on opposite sides of the rotor core carry current in opposing relative directions, equal and opposite forces create a mechanical torque ($\tau$) about the shaft axis:</p>

$$\tau = K_t \cdot \Phi \cdot I_a$$

<p>Where $K_t$ is the motor torque constant and $\Phi$ is the fixed magnetic flux generated by the permanent magnets. As the rotor turns, the mechanical action of the commutator automatically switches current direction in each coil as it crosses the magnetic neutral axis. This mechanical commutation ensures continuous, uni-directional electromagnetic torque generation.</p>

<p>Simultaneously, as the armature conductors cut the permanent magnetic field, a counter-electromotive force (Back EMF, $E_b$) is induced within the rotor windings opposing the supply voltage:</p>

$$E_b = K_e \cdot \Phi \cdot \omega$$

<p>Where $K_e$ is the back-EMF constant and $\omega$ is rotational angular velocity in rad/s. The terminal voltage equation of a PMDC motor is expressed as:</p>

$$V = E_b + I_a R_a = (K_e \Phi \omega) + I_a R_a$$

<p>Where $R_a$ represents the total armature resistance including brush contact drops. For a deeper breakdown of basic motor principles, read our detailed comparison on the <a href="benefits-of-using-dc-motors.php">key benefits of using DC motors</a> in industrial automation.</p>

<hr/>

<h2>2. Key Operational Characteristics & Performance Curves</h2>
<p>PMDC motors exhibit linear operational relationships between voltage, current, speed, and torque, making them exceptionally easy to model and control via Pulse Width Modulation (PWM).</p>

<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Operational Parameter</th>
<th>Mathematical Formula / Relationship</th>
<th>Engineering Significance</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Speed-Torque Relationship</strong></td>
<td>$\omega = \frac{V}{K_e \Phi} - \frac{R_a}{(K_e \Phi)(K_t \Phi)} \cdot \tau$</td>
<td>Delivers a straight-line dropping speed curve; speed decreases predictably as mechanical shaft load increases.</td>
</tr>
<tr>
<td><strong>Stall Torque ($\tau_{stall}$)</strong></td>
<td>$\tau_{stall} = K_t \cdot \Phi \cdot \left(\frac{V}{R_a}\right)$</td>
<td>Maximum starting torque available at zero speed ($\omega = 0$); dictates acceleration under heavy inertia.</td>
</tr>
<tr>
<td><strong>No-Load Speed ($\omega_0$)</strong></td>
<td>$\omega_0 = \frac{V - I_{0} R_a}{K_e \Phi}$</td>
<td>Maximum shaft rotation speed when no external load torque is applied.</td>
</tr>
<tr>
<td><strong>Motor Efficiency ($\eta$)</strong></td>
<td>$\eta = \frac{P_{out}}{P_{in}} = \frac{\tau \cdot \omega}{V \cdot I_{total}}$</td>
<td>Reaches 82% to 92% peak efficiency because zero energy is dissipated in field excitation windings.</td>
</tr>
</tbody>
</table>

<hr/>

<h2>3. Key Advantages of PMDC Motors</h2>
<p>PMDC motors offer compelling mechanical and thermal benefits over wound-field DC motors and fixed-speed AC induction motors:</p>

<ul>
<li><strong>High Power-to-Weight Ratio & Compact Footprint:</strong> Eliminating bulky field coils reduces overall motor volume and mass by 30% to 50%, enabling integration into space-constrained housings.</li>
<li><strong>Superior Operating Efficiency:</strong> Because permanent magnets require zero electrical power to maintain field flux, internal thermal losses ($I^2 R$) are limited strictly to the rotor windings.</li>
<li><strong>High Starting Torque & Rapid Response:</strong> PMDC motors deliver instant linear torque response from standstill, ideal for stop-start indexing drives.</li>
<li><strong>Simplified Speed Control:</strong> Armature voltage control directly modulates shaft speed linearly without complex field-weakening logic.</li>
<li><strong>Lower Electromagnetic Interference (EMI):</strong> Constant magnet flux minimizes sudden field inductive voltage spikes during operational switching.</li>
<li><strong>Cost-Effectiveness:</strong> Reduced copper content and simplified manufacturing lower initial unit cost in fractional horsepower sizes. For high-torque applications requiring reduced shaft output speeds, consider our specialized <a href="products-pmdc-geared-motors.php">heavy-duty PMDC geared motors</a>.</li>
</ul>

<hr/>

<h2>4. Diverse Real-World Applications</h2>
<p>Thanks to their high efficiency, predictable speed-torque curve, and dynamic responsiveness, PMDC motors serve as vital prime movers across multiple industry verticals:</p>

<h3>A. Automotive & Transportation Systems</h3>
<p>Used extensively in 12V and 24V automotive auxiliary drives including power window lifters, windshield wipers, electric seat adjusters, radiator cooling fans, and anti-lock braking (ABS) pump actuators. Explore our <a href="applications.php">industrial and automotive motor applications</a> overview for more industry examples.</p>

<h3>B. Robotics & Automated Guided Vehicles (AGVs)</h3>
<p>Integrated into wheel drives, robotic arm joints, conveyor indexing mechanisms, and precision pan-tilt positioning platforms where lightweight compact motors are mandatory.</p>

<h3>C. Medical & Healthcare Equipment</h3>
<p>Powering portable peristaltic infusion pumps, automated wheelchairs, surgical drills, laboratory centrifuges, and diagnostic imaging equipment requiring low noise and high reliability.</p>

<h3>D. Industrial Automation & Material Handling</h3>
<p>Driving small belt conveyors, packaging machines, metering pumps, and automated sorting tables. For heavy continuous-duty applications, pairing PMDC drives with gearboxes provides optimal torque multiplication; see our range of <a href="products-geared-motors.php">industrial geared motor solutions</a>.</p>

<h3>E. Portable Consumer Electronics & Tools</h3>
<p>Found in cordless drills, handheld vacuum cleaners, lawn trimmers, and battery-operated personal mobility devices.</p>

<hr/>

<h2>5. Ultimate PMDC Motor Selection Guide: Step-by-Step</h2>
<p>Selecting the ideal PMDC motor for an application requires matching key mechanical, electrical, thermal, and environmental parameters against your target operating profile.</p>

<h3>Step 1: Determine Required Torque & Speed Profile</h3>
<p>Calculate continuous load torque ($\tau_{cont}$), peak acceleration torque ($\tau_{peak}$), and operating speed ($\omega$) using basic dynamics:</p>

$$\tau_{load} = \tau_{friction} + \tau_{process} + J_{total} \cdot \alpha$$

<p>Where $J_{total}$ is total system inertia reflected to the motor shaft and $\alpha$ is rotational angular acceleration ($\text{rad/s}^2$). Ensure that $\tau_{cont}$ lies well within the motor's Continuous Operating Zone on its thermal curve.</p>

<h3>Step 2: Select System DC Operating Voltage</h3>
<p>Match the nominal motor voltage rating (e.g., 12V, 24V, 48V, 90V, or 180V DC) to your power supply source or battery pack capacity. Operating a motor above its rated voltage increases speed linearly but accelerates brush wear and thermal stress.</p>

<h3>Step 3: Evaluate Thermal Ratings and Duty Cycle</h3>
<p>Determine whether the duty cycle is Continuous (S1) or Intermittent (S2/S3). Calculate root-mean-square (RMS) torque for cyclic loads:</p>

$$\tau_{rms} = \sqrt{\frac{\sum (\tau_i^2 \cdot t_i)}{\sum t_i}}$$

<p>Select a motor whose continuous torque rating exceeds $\tau_{rms}$ to avoid thermal breakdown of winding insulation.</p>

<h3>Step 4: Check Stall Current & Power Supply Limits</h3>
<p>Ensure your DC power supply and electronic motor driver (H-Bridge PWM driver) can safely deliver peak stall current ($I_{stall} = V / R_a$) without triggering overcurrent shutdown or severe voltage sag.</p>

<h3>Step 5: Account for Environmental Ratings (IP Code)</h3>
<p>Select enclosure protection standards based on mounting environment: IP44 for general indoor use, IP65 for washdown environments, or IP67 for dusty industrial locations. Routine maintenance is critical for brushed designs; refer to our comprehensive <a href="dc-motor-maintenance.php">DC motor maintenance and brush inspection guide</a>.</p>

<hr/>

<h2>6. Real-World Engineering Example: Sizing a PMDC Motor for a Mobile Robot</h2>
<p>To demonstrate the selection procedure, consider an automated mobile robot (AMR) designed for warehouse logistics with the following target specifications:</p>

<ul>
<li><strong>Robot Total Mass ($m$):</strong> 40 kg (2-wheel drive, 20 kg per wheel)</li>
<li><strong>Wheel Radius ($r$):</strong> 0.075 m (75 mm)</li>
<li><strong>Maximum Speed ($v$):</strong> 1.5 m/s</li>
<li><strong>Acceleration Time ($t_{acc}$):</strong> 1.0 s to reach max speed</li>
<li><strong>Rolling Resistance Coefficient ($\mu$):</strong> 0.03</li>
<li><strong>Available Battery Supply ($V$):</strong> 24V DC</li>
</ul>

<h3>Calculation Steps:</h3>
<ol>
<li><strong>Wheel Rotational Speed:</strong>
$$\omega = \frac{v}{r} = \frac{1.5}{0.075} = 20 \text{ rad/s} \approx 191 \text{ RPM}$$
</li>
<li><strong>Rolling Friction Resistance Force per wheel:</strong>
$$F_{friction} = \mu \cdot (m_{wheel} \cdot g) = 0.03 \cdot (20 \text{ kg} \cdot 9.81 \text{ m/s}^2) = 5.886 \text{ N}$$
$$\tau_{friction} = F_{friction} \cdot r = 5.886 \cdot 0.075 = 0.441 \text{ N}\cdot\text{m}$$
</li>
<li><strong>Acceleration Force & Torque per wheel:</strong>
$$a = \frac{\Delta v}{\Delta t} = \frac{1.5}{1.0} = 1.5 \text{ m/s}^2$$
$$F_{acc} = m_{wheel} \cdot a = 20 \cdot 1.5 = 30 \text{ N}$$
$$\tau_{acc} = F_{acc} \cdot r = 30 \cdot 0.075 = 2.25 \text{ N}\cdot\text{m}$$
</li>
<li><strong>Peak Starting Torque Required:</strong>
$$\tau_{peak} = \tau_{friction} + \tau_{acc} = 0.441 + 2.25 = 2.691 \text{ N}\cdot\text{m}$$
</li>
<li><strong>Continuous Shaft Mechanical Output Power:</strong>
$$P_{mech} = \tau_{friction} \cdot \omega = 0.441 \text{ N}\cdot\text{m} \cdot 20 \text{ rad/s} = 8.82 \text{ Watts}$$
</li>
</ol>

<p><strong>Selection Conclusion:</strong> A direct-drive PMDC motor requiring 2.69 N·m at 191 RPM would be unnecessarily large. By pairing a 24V PMDC motor (rated at 3000 RPM, 0.15 N·m continuous torque) with a 15:1 planetary gearbox, the output speed becomes $3000 / 15 = 200 \text{ RPM}$ and continuous output torque multiplies to $0.15 \cdot 15 \cdot 0.85 = 1.91 \text{ N}\cdot\text{m}$, easily meeting continuous and acceleration demands. For maintenance-free high-speed alternatives, evaluate our <a href="what-is-bldc-motor.php">working principle of BLDC motors</a> guide or explore our <a href="products-bldc-motors.php">brushless DC (BLDC) motor series</a>.</p>

<hr/>

<h2>7. PMDC vs. BLDC Motor Comparison</h2>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Feature</th>
<th>Permanent Magnet DC (PMDC) Motor</th>
<th>Brushless DC (BLDC) Motor</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Commutation Mechanism</strong></td>
<td>Mechanical (Carbon Brushes & Copper Commutator)</td>
<td>Electronic (Inverter Transistors controlled by Hall Sensors or Sensorless FOC)</td>
</tr>
<tr>
<td><strong>Operational Lifespan</strong></td>
<td>2,000 to 5,000 hours (limited by brush wear)</td>
<td>>20,000 hours (limited only by bearing life)</td>
</tr>
<tr>
<td><strong>Drive Electronics Complexity</strong></td>
<td>Very Low (Direct DC source or simple PWM chopper)</td>
<td>Moderate to High (Requires 3-phase inverter controller)</td>
</tr>
<tr>
<td><strong>Sparking / EMI</strong></td>
<td>Occurs at brush-commutator contact points</td>
<td>Zero electrical sparking; extremely low acoustic noise</td>
</tr>
<tr>
<td><strong>Initial System Cost</strong></td>
<td>Low motor cost; minimal controller expense</td>
<td>Higher initial motor and electronic drive cost</td>
</tr>
</tbody>
</table>

<hr/>

<h2>8. Frequently Asked Questions (FAQs)</h2>

<h3>Q1: What is the main difference between a PMDC motor and a standard DC motor?</h3>
<p>A PMDC motor uses permanent magnets attached to the inner stator casing to produce field magnetic flux, whereas a standard wound-field DC motor uses electromagnetic field coils wound on poles that must be continuously energized with DC current.</p>

<h3>Q2: Can the direction of rotation of a PMDC motor be reversed?</h3>
<p>Yes. Because the stator field flux ($\Phi$) is fixed by permanent magnets, reversing the polarity of the applied DC supply voltage at the motor terminals reverses the direction of armature current ($I_a$), causing the Lorentz force vector and rotational direction to flip instantly.</p>

<h3>Q3: What factors determine the lifespan of a PMDC motor?</h3>
<p>The primary factor limiting PMDC motor lifespan is mechanical brush wear and commutator surface degradation. Regular brush inspection, clean operating environments, staying within thermal limits, and using high-grade bearings typically extend motor service life between 3,000 and 6,000 operational hours.</p>

<h3>Q4: How do you control the speed of a PMDC motor?</h3>
<p>PMDC motor speed is directly proportional to applied armature voltage. Speed control is most efficiently achieved using Pulse Width Modulation (PWM) drivers that rapidly switch the DC supply voltage on and off at high frequencies (typically 10kHz to 20kHz), adjusting the average voltage applied across the motor terminals.</p>

<h3>Q5: What happens if a PMDC motor is subjected to extreme thermal overload?</h3>
<p>Severe thermal overload ($>150^\circ\text{C}$) can cause irreversible demagnetization of permanent magnets (especially lower-grade Ferrite or NdFeB magnets exceeding their Curie temperature threshold), permanently reducing motor torque constant ($K_t$) and destroying armature insulation.</p>

<h3>Q6: Why are PMDC motors preferred for battery-powered equipment?</h3>
<p>PMDC motors do not consume electrical energy to maintain their magnetic field, achieving high electrical-to-mechanical conversion efficiency (85%+). This maximizes battery run-time in mobile robots, cordless power tools, and automotive auxiliaries.</p>

<h3>Q7: What is the purpose of adding a gearbox to a PMDC motor?</h3>
<p>A gearbox reduces the high output shaft speed of a PMDC motor (typically 1500 to 5000 RPM) down to usable application speeds while proportionally multiplying shaft torque, enabling compact motors to drive heavy mechanical loads efficiently.</p>

<h3>Q8: Where can I get custom PMDC motors engineered for specific industrial applications?</h3>
<p>Globe Scott Motors manufactures customized PMDC motors, PMDC geared motors, and specialized traction drives tailored to your exact voltage, torque, speed, shaft geometry, and mounting requirements. You can <a href="contact-us.php">contact our motor engineering specialists</a> directly to discuss your custom drive requirements.</p>

<hr/>

<h2>Conclusion</h2>
<p>PMDC motors continue to serve as versatile, efficient, and cost-effective actuators across modern industrial, automotive, and robotic systems. Understanding their linear speed-torque relationship, thermal limits, and mechanical commutation requirements empowers engineers to select optimal drive configurations for long-term operational success.</p>

<p>At Globe Scott Motors, we have engineered high-performance DC motor solutions for over three decades. Whether you need standard catalog motors or custom-wound OEM solutions, explore our products or contact our engineering team today to accelerate your motion control designs.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center"><strong>Need help selecting the perfect PMDC motor for your project?</strong></h3>
</div>
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="contact-us.php" rel="noreferrer noopener" target="_blank">Contact Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> PMDC Motor, Permanent Magnet DC Motor, DC Motors, Motor Selection, Motion Control, Geared Motors </div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="what-is-bldc-motor.php">
<h4 class="post-title">What is bldc motor?</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="benefits-of-using-dc-motors.php">
<h4 class="post-title">Benefits of using DC motors.</h4>
<h3 class="post-nav-title icon-right"><i class="fa fa-long-arrow-right"></i> Next Post</h3>
</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

<div class="col-lg-4">
<aside class="sidebar-wrapper">
<div class="widget mb-40 widget_search">
<form action="blog/" class="search-form" method="get">
<label><input class="search-field" name="s" placeholder="Search..." type="search"/></label>
<button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
<div class="widget mb-40 widget_recent_entries">
<h3 class="widget-title">Recent Posts</h3>
<ul>
<li><a href="blog/what-is-pmdc-motor.php">What Is a PMDC Motor? Working, Advantages, Applications & Selection Guide</a></li>
<li><a href="case-study.php">Case Study</a></li>
<li><a href="advantages-of-using-bldc-motor-for-micro-and-macro-applications.php">Advantages of using bldc motor for micro and macro applications.</a></li>
<li><a href="what-is-bldc-motor.php">What is bldc motor?</a></li>
<li><a href="dc-motor-maintenance.php">DC motor maintenance.</a></li>
</ul>
</div>
<div class="widget mb-40 widget_categories">
<h3 class="widget-title">Categories</h3>
<ul>
<li class="cat-item"><a href="blog/">Bldcmotor</a></li>
<li class="cat-item"><a href="blog/">DC Motors</a></li>
<li class="cat-item"><a href="blog/">Geared Motors</a></li>
<li class="cat-item"><a href="blog/">PMDC Motors</a></li>
<li class="cat-item"><a href="blog/">Motors</a></li>
</ul>
</div>
</aside>
</div>

</div>
</div>
</section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
