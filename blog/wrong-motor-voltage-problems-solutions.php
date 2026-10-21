<?php
$current_page     = 'wrong-motor-voltage-problems-solutions';
$canonical_path   = 'blog/wrong-motor-voltage-problems-solutions/';
$page_title       = 'Wrong Motor Voltage Problems & Fixes | Globe Scott Motors';
$meta_description = 'Wrong motor voltage problems explained: what overvoltage and undervoltage do to a DC motor, 12 V vs 24 V vs 48 V trade-offs, and fixes including rewinding.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/wrong-motor-voltage-problems-solutions.jpg';
$body_class       = 'post-template-default single single-post postid-2433 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/"
      },
      "headline": "What Happens When You Choose the Wrong Motor Voltage? Common Problems and Solutions",
      "name": "What Happens When You Choose the Wrong Motor Voltage? Common Problems and Solutions",
      "description": "Wrong motor voltage problems explained: what overvoltage and undervoltage do to a DC motor, 12 V vs 24 V vs 48 V trade-offs, and fixes including rewinding.",
      "url": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Electrical Supply, Troubleshooting",
      "keywords": "wrong motor voltage problems, motor voltage mismatch, 12v vs 24v motor, dc motor overvoltage, dc motor undervoltage, rewinding motor for different voltage, 48v battery system",
      "wordCount": 2339,
      "image": {
        "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#primaryimage"
      },
      "author": {
        "@type": "Organization",
        "@id": "https://www.globescott.net/#organization",
        "name": "Globe Scott Motors Pvt Ltd",
        "url": "https://www.globescott.net/"
      },
      "publisher": {
        "@id": "https://www.globescott.net/#organization"
      }
    },
    {
      "@type": "ImageObject",
      "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/wrong-motor-voltage-problems-solutions.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/wrong-motor-voltage-problems-solutions.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Checking how a DC motor's speed and current respond to its supply voltage on a test panel."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.globescott.net/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Blog",
          "item": "https://www.globescott.net/blog/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Wrong Motor Voltage: Problems & Solutions",
          "item": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can I run a 12 V DC motor on 24 V?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only through a controller that limits the average voltage and current. Connected directly, a 12 V motor on 24 V runs at roughly twice its rated speed, with about twice the stall and inrush current, harder commutator sparking and roughly four times the centrifugal and unbalance forces on bearings and any gearbox. Short tests may look fine while brush, bearing and magnet damage builds up. A 24 V winding is the proper fix."
          }
        },
        {
          "@type": "Question",
          "name": "Can I run a 24 V DC motor on 12 V?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It will run, but slowly and weakly. No-load speed roughly halves, and under load it falls further because the resistive and brush drops do not scale with voltage: in our worked example a 24 V motor at rated torque drops from about 2,780 rpm to 1,140 rpm on 12 V. Stall torque also roughly halves, so loads with high breakaway friction may not start. It is acceptable only where the reduced speed and torque are genuinely enough."
          }
        },
        {
          "@type": "Question",
          "name": "How much overvoltage can a DC motor tolerate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no universal percentage, so check the data sheet or ask the manufacturer for the permitted supply window. Battery systems swing by design: a 24 V lead-acid bank sits near 21 V when discharged and up to about 28.8 V on charge, roughly −12 % to +20 % of nominal, so the motor and controller should be specified for that whole window. Sustained operation above it shortens brush, bearing and magnet life."
          }
        },
        {
          "@type": "Question",
          "name": "Does a higher voltage make a DC motor more powerful?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It makes the motor faster, and therefore able to deliver more power, but not more torque per amp. Torque depends on current through the torque constant, which is fixed by the winding and magnets. The extra power arrives with higher speed, more commutation sparking, faster brush wear, larger stall and reversing currents and higher mechanical stress, so the continuous rating does not simply scale up with voltage."
          }
        },
        {
          "@type": "Question",
          "name": "Is 24 V or 48 V better for battery-powered equipment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For drives above a few hundred watts, 48 V is usually better: current halves, cable and connector losses fall to a quarter, brush drop becomes a smaller share of the supply and thinner cables can be used. 24 V suits lighter equipment and simpler battery packs. A charging 48 V pack approaches the 60 V DC level that many standards use as a touch-safety threshold, which is why 48 V is a common upper limit for low-voltage machines."
          }
        },
        {
          "@type": "Question",
          "name": "Can a DC motor be rewound for a different voltage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The back-EMF constant is proportional to the number of armature conductors, so the turns are scaled by the voltage ratio and the conductor cross-section by its inverse to keep the same slot fill. Resistance then scales with the square of the voltage ratio and rated current scales inversely with voltage, so copper loss, torque and speed stay essentially unchanged. The new winding should pass surge, high-voltage and load tests before use."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/",
      "url": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/",
      "name": "Wrong Motor Voltage Problems & Fixes | Globe Scott Motors",
      "description": "Wrong motor voltage problems explained: what overvoltage and undervoltage do to a DC motor, 12 V vs 24 V vs 48 V trade-offs, and fixes including rewinding.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/#primaryimage"
      },
      "about": {
        "@id": "https://www.globescott.net/#organization"
      }
    }
  ]
}
</script>
GSMJSONLD;

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
<h1>What Happens When You Choose the Wrong Motor Voltage? Common Problems and Solutions</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Wrong Motor Voltage: Problems &amp; Solutions</li></ol> </nav>
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
<article class="post-2433 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-motor-voltage-mismatch tag-dc-motor-overvoltage tag-dc-motor-undervoltage tag-battery-voltage-systems tag-pmdc-motors tag-globe-scott-motors" id="post-2433">

<img alt="DC motor on a test panel illustrating wrong motor voltage problems, overvoltage and undervoltage effects" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/wrong-motor-voltage-problems-solutions.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Troubleshooting, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A DC motor is wound for one supply voltage, but connect it to a higher or lower one and it will usually still turn. That is exactly why <strong>wrong motor voltage problems</strong> survive commissioning and surface weeks later as burnt brushes, blown fuses, weak starts or short battery runtime. Our <a href="/products-pmdc-motors/">PMDC motors</a> are built for 12, 24, 36, 48, 110, 180 and 220 V DC precisely because the winding has to match the bus.</p>

<p>This guide explains what voltage actually controls in a DC motor, what goes wrong above and below the design voltage, how to choose between 12 V, 24 V and 48 V systems, and how to correct a mismatch, including rewinding. A worked example follows a 24 V motor onto a 36 V supply.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> A DC motor's speed rises roughly in proportion to supply voltage, while its torque per amp is fixed by the winding. <strong>Overvoltage</strong> raises speed, power, stall and reversing current, commutation sparking and mechanical stress, and can demagnetise ferrite magnets. <strong>Undervoltage</strong> cuts speed and stall torque, and drives that must hold power draw more current. Fix the mismatch at the source: correct the supply, regulate it with a DC-DC converter or controller, or specify (or rewind) a winding for the real bus voltage.
</div>

<h2>How Voltage Sets the Behaviour of a DC Motor</h2>

<p>Three relationships describe a permanent-magnet DC motor on a steady supply (ignoring the small no-load current):</p>

<div class="gsm-equation">\[ \omega_0 = \frac{V - V_{brush}}{K_e}, \qquad I_{stall} = \frac{V - V_{brush}}{R_a}, \qquad T = K_t I_a \]</div>

<p>The back-EMF constant \( K_e \) (equal to \( K_t \) in SI units) is fixed by the number of armature turns and the magnet flux. Voltage therefore scales no-load speed and stall current, but not torque per amp. Under load, speed follows \( \omega = (V - I_a R_a - V_{brush})/K_e \); because the resistive and brush drops do not scale with supply voltage, loaded speed is not exactly proportional to it. The speed equation is explored further in our guide to a <a href="/blog/dc-motor-running-slow-causes-troubleshooting/">DC motor running slow</a>, and the underlying construction in <a href="/blog/what-is-pmdc-motor/">what is a PMDC motor</a>.</p>

<hr/>

<h2>Overvoltage: What Goes Wrong When the Supply Is Too High</h2>

<h3>1. Overspeed and Mechanical Stress</h3>
<p>Centrifugal stress in the armature banding and commutator, and the force from any residual unbalance (\( F = m e \omega^2 \)), rise with the square of speed. Bearing life in hours is inversely proportional to speed, even at constant load, and a gearbox or driven machine may be pushed beyond its own input-speed limit.</p>

<h3>2. Commutation Sparking and Brush Wear</h3>
<p>The reactance voltage induced in a coil as it commutates is proportional to the current reversed and to the speed at which it must reverse. Run faster at the same current and sparking at the trailing brush edge increases. Brush wear rises with sliding distance and rises steeply once electrical arcing begins.</p>

<h3>3. Higher Stall, Inrush and Reversing Current</h3>
<p>Stall current scales with voltage, and reversing a running motor at full voltage (plugging) drives roughly \( (V + E_b - V_{brush})/R_a \) through the armature, approaching twice the stall current. The armature field of these current pulses opposes the magnets. Ferrite magnets are most vulnerable when <em>cold</em>, because their coercivity falls as temperature drops, so a cold-morning reversal on an over-voltage supply is the classic demagnetising event. The resulting permanent torque loss is diagnosed in our article on a <a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC motor losing torque</a>.</p>

<h3>4. Load-Dependent Heating and Insulation Stress</h3>
<p>On a constant-torque load, current stays the same, so copper loss is unchanged, while iron, friction and brush losses rise with speed. On a fan or centrifugal pump, torque rises with the square of speed and current climbs sharply, as the worked example shows. Dielectric stress is rarely the issue on 12&ndash;48 V motors, but it matters on high-voltage windings: a 180 V DC motor connected to a capacitor-filtered rectifier on 230 V AC sees about 310&ndash;325 V, roughly 70&ndash;80 % over its rating. Such motors belong on a thyristor or PWM drive that limits armature voltage; our <a href="/products-bldc-motors/">BLDC motors</a>, by contrast, include 310 V DC windings designed for rectified 230 V AC.</p>

<hr/>

<h2>Worked Example: A 24 V Motor Connected to a 36 V Supply</h2>

<p>Consider a 24 V PMDC motor with \( R_a = 0.25\,\Omega \), a brush drop of 1.5 V and \( K_e = K_t = 0.070 \) V&middot;s/rad, rated at 0.6 Nm. Rated current is \( 0.6/0.070 = 8.57\,\mathrm{A} \). At 24 V:</p>

<div class="gsm-equation">\[ \omega_{24} = \frac{24 - 8.57 \times 0.25 - 1.5}{0.070} = 290.8\,\mathrm{rad/s} \approx 2{,}777\,\mathrm{rpm} \]</div>

<p>On 36 V with the same 0.6 Nm load:</p>

<div class="gsm-equation">\[ \omega_{36} = \frac{36 - 8.57 \times 0.25 - 1.5}{0.070} = 462.2\,\mathrm{rad/s} \approx 4{,}414\,\mathrm{rpm} \]</div>

<p>If the load is a fan whose torque follows \( T = k\omega^2 \) (with k set by the 24 V operating point), solving the speed equation at 36 V gives about 4,077 rpm and 1.29 Nm. The comparison:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Quantity</th><th>24 V (design)</th><th>36 V, constant-torque load</th><th>36 V, fan load</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Shaft speed</strong></td><td>2,777 rpm</td><td>4,414 rpm (+59 %)</td><td>4,077 rpm (+47 %)</td></tr>
<tr><td><strong>Torque / current</strong></td><td>0.60 Nm / 8.6 A</td><td>0.60 Nm / 8.6 A</td><td>1.29 Nm / 18.5 A</td></tr>
<tr><td><strong>Output power</strong></td><td>175 W</td><td>277 W</td><td>552 W</td></tr>
<tr><td><strong>Armature copper loss</strong></td><td>18.4 W</td><td>18.4 W</td><td>85.3 W (&times; 4.6)</td></tr>
<tr><td><strong>Unbalance / centrifugal force</strong></td><td>1.0 &times;</td><td>2.5 &times;</td><td>2.2 &times;</td></tr>
<tr><td><strong>Stall current</strong></td><td>90 A</td><td>138 A</td><td>138 A</td></tr>
<tr><td><strong>Reversing current from full speed</strong></td><td>171 A</td><td>267 A</td><td>258 A</td></tr>
</tbody>
</table>
</div>

<p>On a constant-torque conveyor the copper loss is unchanged, but the motor runs 59 % fast with 2.5 times the unbalance force, and a reversal now drives about three times the 24 V stall current through the magnets' field. On a fan the copper loss alone rises 4.6-fold, before the extra iron and brush losses, and the winding overheats. In both cases the fuse, controller and wiring are now undersized for the stall current.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
If a DC motor's measured no-load speed is well above the no-load figure on its test sheet, check the terminal voltage before anything else. If the voltage is correct and the motor is still fast at no load but weak under load, suspect weakened magnets.
</div>

<hr/>

<h2>Undervoltage: Slow, Weak and Sometimes Hotter</h2>

<p>Put the same 24 V motor on 12 V and, at 0.6 Nm, the speed equation gives \( (12 - 2.14 - 1.5)/0.070 = 119\,\mathrm{rad/s} \), about 1,140 rpm: 41 % of rated speed, not 50 %, because the 3.6 V of resistive and brush drop does not shrink with the supply. Stall torque falls from 6.3 Nm to 2.9 Nm, so loads with high breakaway friction may not start at all.</p>

<p>Undervoltage can also make a motor hotter. On a constant-torque load the current, and therefore copper loss, is unchanged while a shaft-mounted fan slows. And any drive that must hold output power, such as a speed-regulated BLDC controller on a sagging battery, draws more current as voltage falls: 500 W at 90 % efficiency needs 11.6 A from 48 V but 13.9 A from 40 V, raising cable and battery \( I^2 R \) losses by 44 %. That extra sag then deepens itself. The current side of this story is covered in our guide to <a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC motor high current draw</a>.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Motor Voltage Compatibility Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable checklist for matching a DC motor to its supply: voltage-window survey, nameplate checks, overvoltage and undervoltage risk tests, remedy selection and a battery voltage reference table.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Choosing Between 12 V, 24 V and 48 V Systems</h2>

<p>For battery equipment the "right" voltage is a system decision. The table compares a 1 kW load fed through 2 m of 10 mm&sup2; copper cable (4 m loop, about 6.9 m&Omega; at 20 &deg;C):</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>System</th><th>Current for 1 kW</th><th>Cable loss and drop</th><th>Brush drop share (1&ndash;2 V)</th><th>Lead-acid voltage window</th></tr>
</thead>
<tbody>
<tr><td><strong>12 V</strong></td><td>83 A</td><td>48 W (4.8 %)</td><td>8&ndash;17 %</td><td>10.5&ndash;14.4 V (one 12 V block)</td></tr>
<tr><td><strong>24 V</strong></td><td>42 A</td><td>12 W (1.2 %)</td><td>4&ndash;8 %</td><td>21.0&ndash;28.8 V (two blocks)</td></tr>
<tr><td><strong>48 V</strong></td><td>21 A</td><td>3 W (0.3 %)</td><td>2&ndash;4 %</td><td>42.0&ndash;57.6 V (four blocks)</td></tr>
</tbody>
</table>
</div>

<p>Each doubling of voltage halves the current and quarters the cable loss in the same conductor. Two further points follow from the last column. First, the motor and controller must be specified for the battery's whole window, roughly &minus;12 % to +20 % of nominal for lead-acid between discharge and charge, not just the nominal figure. Second, the controller's MOSFETs and capacitors must tolerate the maximum charge voltage plus regenerative-braking rise.</p>

<p>Touch safety sets the ceiling. The extra-low-voltage band referred to in IEC 61140 extends to 120 V ripple-free DC, and many installation and product standards use about 60 V DC as the threshold below which live parts may be touchable in dry conditions. A charging 48 V pack reaches about 58 V, which is why 48 V is the common upper nominal for low-voltage machines; confirm the requirement in the standard for your product. Runtime effects of voltage choice are covered in our guide to <a href="/blog/battery-powered-motor-efficiency-runtime/">battery powered motor efficiency</a>.</p>

<hr/>

<h2>Solutions for Wrong Motor Voltage Problems</h2>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Observed Symptom</th><th>Likely Voltage Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Runs fast, sparks, noisy bearings</strong></td><td>Supply above winding voltage</td><td>Terminal voltage and no-load speed vs nameplate</td><td>Correct supply, DC-DC converter or duty limit</td></tr>
<tr><td><strong>Fuses or controller trip at start or reversal</strong></td><td>Stall or plugging current scaled up by overvoltage</td><td>Inrush on a true-DC clamp meter</td><td>Current limit, soft start, stop before reversing</td></tr>
<tr><td><strong>Slow, weak, fails to start loaded</strong></td><td>Low supply or cable sag</td><td>Voltage at motor terminals under load vs at source</td><td>Larger cables, healthy battery, correct winding</td></tr>
<tr><td><strong>Fan or pump motor overheating</strong></td><td>Overvoltage on a square-law load</td><td>Current vs rated current at operating speed</td><td>Restore voltage; never over-volt square-law loads</td></tr>
</tbody>
</table>
</div>

<p>The remedies, in order of preference:</p>
<ul>
<li><strong>Correct the supply</strong> or the transformer or charger tap. It is the cheapest fix where the bus itself is wrong.</li>
<li><strong>Regulate with a DC-DC converter or PWM controller.</strong> A 36 V bus feeding a 24 V motor needs a maximum duty of about 67 %, a current limit at the motor's rating and a switching frequency high enough to keep current ripple small.</li>
<li><strong>Avoid series dropping resistors.</strong> In the example, a 1.4 &Omega; resistor drops 12 V at rated current but burns 103 W, a third of the input, and gives no drop at light load, so the motor still over-speeds.</li>
<li><strong>Specify the correct winding</strong> from the outset, since our PMDC and <a href="/products-geared-motors/">geared motor ranges</a> cover 12 V to 220 V DC.</li>
</ul>

<h3>Rewinding a Motor for a Different Voltage</h3>

<div class="gsm-equation">\[ K_e = \frac{p Z \Phi}{2\pi a} \;\Rightarrow\; Z_2 = Z_1 \frac{V_2}{V_1}, \qquad R_2 = R_1 \left(\frac{V_2}{V_1}\right)^2, \qquad I_2 = I_1 \frac{V_1}{V_2} \]</div>

<p>Here p is the number of poles, Z the armature conductors, &Phi; the flux per pole and a the parallel paths. To move our 24 V motor to 36 V, the turns rise by 1.5 (a 12-turn coil becomes 18 turns) and the conductor area falls by 1.5 to keep the same slot fill. Resistance becomes 0.56 &Omega;, rated current 5.71 A, and copper loss stays at 18.4 W. Speed at rated torque is 2,845 rpm, slightly above the original 2,777 rpm because the 1.5 V brush drop is now a smaller fraction of the supply. A practical rewind must also fit a standard wire size, keep bar-to-bar voltage acceptable and suit the brush grade, and it should pass the surge, high-voltage and dynamometer checks described in our article on <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">motor testing before dispatch</a>.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. Can I run a 12 V DC motor on 24 V?</h3>
<p>Only through a controller that limits the average voltage and current. Connected directly, a 12 V motor on 24 V runs at roughly twice its rated speed, with about twice the stall and inrush current, harder commutator sparking and roughly four times the centrifugal and unbalance forces on bearings and any gearbox. Short tests may look fine while brush, bearing and magnet damage builds up. A <strong>24 V winding</strong> is the proper fix.</p>

<h3>Q2. Can I run a 24 V DC motor on 12 V?</h3>
<p>It will run, but slowly and weakly. No-load speed roughly halves, and under load it falls further because the resistive and brush drops do not scale with voltage: in our worked example a 24 V motor at rated torque drops from about 2,780 rpm to 1,140 rpm on 12 V. Stall torque also roughly halves, so loads with high breakaway friction may not start. It is acceptable only where the reduced speed and torque are genuinely enough.</p>

<h3>Q3. How much overvoltage can a DC motor tolerate?</h3>
<p>There is no universal percentage, so check the data sheet or ask the manufacturer for the permitted supply window. Battery systems swing by design: a 24 V lead-acid bank sits near 21 V when discharged and up to about 28.8 V on charge, roughly −12 % to +20 % of nominal, so the motor and controller should be specified for that whole window. Sustained operation above it shortens brush, bearing and magnet life.</p>

<h3>Q4. Does a higher voltage make a DC motor more powerful?</h3>
<p>It makes the motor faster, and therefore able to deliver more power, but not more torque per amp. Torque depends on current through the torque constant, which is fixed by the winding and magnets. The extra power arrives with higher speed, more commutation sparking, faster brush wear, larger stall and reversing currents and higher mechanical stress, so the continuous rating does not simply scale up with voltage.</p>

<h3>Q5. Is 24 V or 48 V better for battery-powered equipment?</h3>
<p>For drives above a few hundred watts, <strong>48 V</strong> is usually better: current halves, cable and connector losses fall to a quarter, brush drop becomes a smaller share of the supply and thinner cables can be used. 24 V suits lighter equipment and simpler battery packs. A charging 48 V pack approaches the 60 V DC level that many standards use as a touch-safety threshold, which is why 48 V is a common upper limit for low-voltage machines.</p>

<h3>Q6. Can a DC motor be rewound for a different voltage?</h3>
<p>Yes. The back-EMF constant is proportional to the number of armature conductors, so the turns are scaled by the voltage ratio and the conductor cross-section by its inverse to keep the same slot fill. Resistance then scales with the square of the voltage ratio and rated current scales inversely with voltage, so copper loss, torque and speed stay essentially unchanged. The new winding should pass surge, high-voltage and load tests before use.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Voltage sets a DC motor's speed and its stall and reversing currents, while the winding fixes torque per amp. Too much voltage overspeeds, sparks and over-stresses magnets and mechanics; too little leaves the machine slow and weak and can raise current in power-regulated drives. Specify the motor for the real voltage window of the supply, size cables and controllers for it, and correct mismatches with regulation or a matched winding rather than resistors.</p>

<p>If you are changing a machine's battery system or supply, or a motor is behaving oddly after a supply change, send our engineers the bus voltage range, load and duty through the <a href="/contact-us/">Globe Scott contact page</a> for a winding recommendation.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Changing Your Machine&#x27;s Supply or Battery Voltage?</strong></h3>
<p style="margin-bottom: 0;">Tell us the supply or battery voltage window, load torque, speed and duty cycle. Globe Scott engineers will recommend a matched PMDC, BLDC or geared motor winding, along with the controller and protection settings that keep it within its ratings.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Motor Voltage Mismatch, DC Motor Overvoltage, DC Motor Undervoltage, Battery Voltage Systems, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/high-torque-low-speed-dc-motor-selection/">
<h4 class="post-title">How to Select a Motor When You Need High Torque at Low Speed</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/continuous-duty-motor-overheating-prevention/">
<h4 class="post-title">How to Prevent Motor Overheating in Continuous-Duty Applications</h4>
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
<form action="/blog/" class="search-form" method="get">
<label><input class="search-field" name="s" placeholder="Search..." type="search"/></label>
<button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
<div class="widget mb-40 widget_recent_entries">
<h3 class="widget-title">Related Technical Guides</h3>
<ul>
<li><a href="/blog/dc-motor-running-slow-causes-troubleshooting/">Why a DC Motor Runs Slowly: Troubleshooting</a></li>
<li><a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC Motor High Current Draw: Causes &amp; Fixes</a></li>
<li><a href="/blog/battery-powered-motor-efficiency-runtime/">Battery-Powered Motor Efficiency and Runtime</a></li>
<li><a href="/blog/what-is-pmdc-motor/">What Is a PMDC Motor? Working &amp; Selection</a></li>
<li><a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">Motor Torque and Speed Calculation Guide</a></li>
</ul>
</div>
<div class="widget mb-40 widget_categories">
<h3 class="widget-title">Engineered Motor Solutions</h3>
<ul>
<li><a href="/products-pmdc-motors/">PMDC Motors (15W &ndash; 1500W)</a></li>
<li><a href="/products-bldc-motors/">Brushless DC (BLDC) Motors</a></li>
<li><a href="/products-geared-motors/">Industrial Geared Motors</a></li>
<li><a href="/products-pmdc-geared-motors/">PMDC Geared Motors</a></li>
<li><a href="/products-pmdc-transaxle/">PMDC Transaxles</a></li>
<li><a href="/products-railway-signalling-products/">Railway Signalling Motors</a></li>
</ul>
</div>
</aside>
</div>

</div>
</div>
</section>
</main>

<!-- ========================================================
     LEAD MAGNET POPUP MODAL (15-SECOND DELAY TRIGGER)
======================================================== -->
<div id="gsmLeadMagnetModal" class="gsm-modal-overlay" style="display: none;" role="dialog" aria-modal="true" aria-labelledby="gsmModalTitle">
  <div class="gsm-modal-backdrop" onclick="closeLeadMagnetModal()"></div>
  <div class="gsm-modal-dialog">
    <button type="button" class="gsm-modal-close" onclick="closeLeadMagnetModal()" aria-label="Close modal">&times;</button>

    <div class="gsm-modal-body">
      <!-- Initial Form State -->
      <div id="gsmLeadMagnetFormState">
        <div class="gsm-modal-header text-center">
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Engineering Checklist</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">Motor Voltage Compatibility Checklist</h3>
          <p class="gsm-modal-subtitle">Check any DC motor against its real supply window before commissioning, and choose the right fix when the voltage does not match.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Supply Window Survey:</strong> Record minimum, nominal and maximum voltage at the motor terminals</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Risk Checks:</strong> Overspeed, stall current, reversing current and square-law load tests</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Battery Voltage Table:</strong> Lead-acid and LiFePO4 voltage windows for 12, 24 and 48 V systems</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Wrong Motor Voltage: Problems &amp; Solutions Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Motor Voltage Compatibility Checklist">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/wrong-motor-voltage-problems-solutions/">
          <div id="gsmFormError" class="gsm-form-alert" style="display: none;" role="alert"></div>

          <div class="gsm-form-group">
            <label for="gsmLeadName"><i class="fa fa-user"></i> Full Name *</label>
            <input type="text" id="gsmLeadName" name="name" class="gsm-form-control" placeholder="e.g. Rajesh Kumar" required autocomplete="name">
          </div>

          <div class="gsm-form-group">
            <label for="gsmLeadPhone"><i class="fa fa-phone"></i> Phone / WhatsApp Number *</label>
            <input type="tel" id="gsmLeadPhone" name="phone" class="gsm-form-control" placeholder="e.g. +91 98765 43210" required autocomplete="tel">
          </div>

          <div class="gsm-form-group">
            <label for="gsmLeadEmail"><i class="fa fa-envelope"></i> Work Email Address *</label>
            <input type="email" id="gsmLeadEmail" name="email" class="gsm-form-control" placeholder="e.g. rajesh@company.com" required autocomplete="email">
          </div>

          <button type="submit" id="gsmLeadSubmitBtn" class="gsm-submit-btn">
            <span class="gsm-btn-text"><i class="fa fa-download"></i> Get Instant Free Download (PDF)</span>
            <span class="gsm-btn-loader" style="display: none;"><i class="fa fa-circle-o-notch fa-spin"></i> Processing...</span>
          </button>

          <p class="gsm-privacy-text"><i class="fa fa-lock"></i> 100% Free. Instant PDF access. Your information is confidential.</p>
        </form>
      </div>

      <!-- Success Confirmation State -->
      <div id="gsmLeadMagnetSuccessState" style="display: none;" class="text-center">
        <div class="gsm-success-icon"><i class="fa fa-check"></i></div>
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Voltage Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Motor Voltage Compatibility Checklist immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/motor-voltage-compatibility-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
          <i class="fa fa-file-pdf-o"></i> Download Free PDF
        </a>

        <div style="margin-top: 25px; padding-top: 15px; border-top: 1px solid #e2e8f0;">
          <p style="font-size: 13.5px; color: #64748b; margin-bottom: 12px;">Need custom motor sizing or help with a failing application?</p>
          <a href="/contact-us/" class="btn btn-sm btn-outline-primary" style="font-size: 13px; font-weight: 600; padding: 6px 16px;">Contact Globe Scott Engineering Team</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Lead Magnet Modal Styling */
.gsm-modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 999999; display: flex; align-items: center; justify-content: center; padding: 15px; box-sizing: border-box; }
.gsm-modal-backdrop { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(11, 37, 69, 0.78); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); }
.gsm-modal-dialog { position: relative; z-index: 1000000; background: #ffffff; border-radius: 12px; max-width: 520px; width: 100%; max-height: calc(100vh - 30px); overflow-y: auto; box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.4); animation: gsmModalSlideUp 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
@keyframes gsmModalSlideUp { from { opacity: 0; transform: translateY(28px) scale(0.96); } to { opacity: 1; transform: translateY(0) scale(1); } }
.gsm-modal-close { position: absolute; top: 12px; right: 15px; background: transparent; border: none; font-size: 28px; line-height: 1; color: #64748b; cursor: pointer; padding: 5px; transition: color 0.2s; z-index: 10; }
.gsm-modal-close:hover { color: #0f172a; }
.gsm-modal-body { padding: 32px 30px 28px 30px; }
.gsm-badge { display: inline-block; background: #eef4f8; color: #0b2545; font-size: 11.5px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px; }
.gsm-modal-title { color: #0b2545; font-size: 22px; font-weight: 700; margin: 0 0 8px 0; line-height: 1.3; }
.gsm-modal-subtitle { color: #475569; font-size: 13.5px; margin: 0 0 16px 0; line-height: 1.5; }
.gsm-modal-perks { list-style: none; padding: 10px 14px; margin: 0 0 20px 0; background: #f8fafc; border-radius: 6px; border-left: 3px solid #0056b3; }
.gsm-modal-perks li { font-size: 12.5px; color: #334155; margin-bottom: 6px; line-height: 1.4; display: flex; align-items: flex-start; gap: 8px; }
.gsm-modal-perks li:last-child { margin-bottom: 0; }
.gsm-modal-perks li i { color: #10b981; font-size: 14px; margin-top: 2px; }
.gsm-form-group { margin-bottom: 14px; text-align: left; }
.gsm-form-group label { display: block; font-size: 12.5px; font-weight: 600; color: #1e293b; margin-bottom: 5px; }
.gsm-form-group label i { color: #0056b3; margin-right: 4px; }
.gsm-form-control { width: 100%; box-sizing: border-box; padding: 10px 13px; font-size: 14px; border: 1px solid #cbd5e1; border-radius: 6px; color: #1e293b; transition: border-color 0.2s, box-shadow 0.2s; }
.gsm-form-control:focus { outline: none; border-color: #0056b3; box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.15); }
.gsm-submit-btn { width: 100%; background: linear-gradient(135deg, #0056b3 0%, #003d80 100%); color: #ffffff; font-size: 15px; font-weight: 700; padding: 12px 18px; border: none; border-radius: 6px; cursor: pointer; box-shadow: 0 4px 12px rgba(0, 86, 179, 0.3); transition: transform 0.15s, box-shadow 0.15s, background 0.2s; margin-top: 6px; }
.gsm-submit-btn:hover { background: linear-gradient(135deg, #0066cc 0%, #004d99 100%); box-shadow: 0 6px 16px rgba(0, 86, 179, 0.4); color: #ffffff; }
.gsm-submit-btn:active { transform: scale(0.985); }
.gsm-privacy-text { font-size: 11.5px; color: #64748b; text-align: center; margin: 10px 0 0 0; }
.gsm-privacy-text i { color: #10b981; }
.gsm-form-alert { background: #fef2f2; border: 1px solid #fecaca; color: #b91c1c; padding: 8px 12px; border-radius: 6px; font-size: 13px; margin-bottom: 12px; text-align: left; }
.gsm-success-icon { width: 60px; height: 60px; background: #ecfdf5; color: #10b981; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 28px; margin-bottom: 15px; }
.blog-inner-blog .gsm-equation { text-align: center; font-size: 1.1em; background: #f8f9fa; padding: 12px; border-radius: 4px; margin: 18px 0; overflow-x: auto; }
</style>

<script>
// ==========================================
// Lead Magnet Popup Controller (15s Timer)
// ==========================================
(function() {
  var POPUP_DELAY_MS = 15000; // 15 seconds
  var STORAGE_KEY = 'gsm_lead_magnet_dismissed';
  var FORM_ACTION = 'https://app.formester.com/forms/4YfTiyKIi/submissions';

  // sessionStorage can throw in private modes or when site data is blocked
  function wasDismissed() {
    try { return !!window.sessionStorage.getItem(STORAGE_KEY); } catch (e) { return false; }
  }
  function markDismissed() {
    try { window.sessionStorage.setItem(STORAGE_KEY, 'true'); } catch (e) {}
  }
  function isOpen() {
    var modal = document.getElementById('gsmLeadMagnetModal');
    return !!modal && modal.style.display !== 'none';
  }

  function initLeadMagnetTimer() {
    // If the visitor already closed or converted in this session, do not auto-pop
    if (wasDismissed()) {
      return;
    }
    setTimeout(function() {
      // Check again in case it was opened manually earlier
      if (!wasDismissed() && !isOpen()) {
        openLeadMagnetModal();
      }
    }, POPUP_DELAY_MS);
  }

  window.openLeadMagnetModal = function() {
    var modal = document.getElementById('gsmLeadMagnetModal');
    if (modal) {
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // prevent background scrolling
      var first = document.getElementById('gsmLeadName');
      if (first && document.getElementById('gsmLeadMagnetFormState').style.display !== 'none') {
        setTimeout(function() { first.focus(); }, 50);
      }
    }
  };

  window.closeLeadMagnetModal = function() {
    var modal = document.getElementById('gsmLeadMagnetModal');
    if (modal) {
      modal.style.display = 'none';
      document.body.style.overflow = '';
      markDismissed();
    }
  };

  // Close on ESC key (only when the modal is actually open)
  document.addEventListener('keydown', function(event) {
    if ((event.key === 'Escape' || event.keyCode === 27) && isOpen()) {
      closeLeadMagnetModal();
    }
  });

  function showSuccess() {
    markDismissed();
    document.getElementById('gsmLeadMagnetFormState').style.display = 'none';
    document.getElementById('gsmLeadMagnetSuccessState').style.display = 'block';
  }

  // Handle Form Submission
  window.handleLeadMagnetSubmit = function(e) {
    e.preventDefault();

    var nameInput = document.getElementById('gsmLeadName');
    var phoneInput = document.getElementById('gsmLeadPhone');
    var emailInput = document.getElementById('gsmLeadEmail');
    var errorBox = document.getElementById('gsmFormError');
    var submitBtn = document.getElementById('gsmLeadSubmitBtn');
    var btnText = submitBtn.querySelector('.gsm-btn-text');
    var btnLoader = submitBtn.querySelector('.gsm-btn-loader');

    var nameVal = (nameInput.value || '').trim();
    var phoneVal = (phoneInput.value || '').trim();
    var emailVal = (emailInput.value || '').trim();

    errorBox.style.display = 'none';
    errorBox.textContent = '';

    if (!nameVal || !phoneVal || !emailVal) {
      errorBox.textContent = 'Please fill out all required fields.';
      errorBox.style.display = 'block';
      return;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailVal)) {
      errorBox.textContent = 'Please enter a valid email address.';
      errorBox.style.display = 'block';
      return;
    }

    if (phoneVal.replace(/\D/g, '').length < 8) {
      errorBox.textContent = 'Please enter a valid phone number.';
      errorBox.style.display = 'block';
      return;
    }

    // Button loading state
    submitBtn.disabled = true;
    btnText.style.display = 'none';
    btnLoader.style.display = 'inline-block';

    var formEl = document.getElementById('gsmLeadMagnetForm');
    var formData = new FormData(formEl);

    // no-cors: Formester does not return CORS headers, so a normal fetch would reject
    // after the submission was already recorded and trigger a duplicate native submit.
    fetch(FORM_ACTION, {
      method: 'POST',
      mode: 'no-cors',
      body: formData
    })
    .then(function() {
      submitBtn.disabled = false;
      btnText.style.display = 'inline-block';
      btnLoader.style.display = 'none';
      showSuccess();
    })
    .catch(function() {
      // Network failure before the request left the browser: fall back to a native POST
      formEl.submit();
    });
  };

  // Initialize on load
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLeadMagnetTimer);
  } else {
    initLeadMagnetTimer();
  }
})();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
