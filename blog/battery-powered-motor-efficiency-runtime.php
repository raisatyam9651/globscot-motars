<?php
$current_page     = 'battery-powered-motor-efficiency-runtime';
$canonical_path   = 'blog/battery-powered-motor-efficiency-runtime/';
$page_title       = 'Battery Powered Motor Efficiency Guide | Globe Scott Motors';
$meta_description = 'Poor runtime on battery equipment? Improve battery powered motor efficiency with runtime maths, Peukert\'s law, motor operating points and an energy budget.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/battery-powered-motor-efficiency-runtime.jpg';
$body_class       = 'post-template-default single single-post postid-2437 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/"
      },
      "headline": "Why Does Your Battery-Powered Equipment Have Poor Motor Runtime?",
      "name": "Why Does Your Battery-Powered Equipment Have Poor Motor Runtime?",
      "description": "Poor runtime on battery equipment? Improve battery powered motor efficiency with runtime maths, Peukert's law, motor operating points and an energy budget.",
      "url": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Battery Equipment, Motor Efficiency, Troubleshooting",
      "keywords": "battery powered motor efficiency, battery runtime calculation, peukert's law, motor efficiency curve, bldc vs brushed efficiency, lithium vs lead acid, regenerative braking",
      "wordCount": 2280,
      "image": {
        "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/battery-powered-motor-efficiency-runtime.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/battery-powered-motor-efficiency-runtime.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Motor construction and operating point both shape the runtime of battery-powered equipment."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#breadcrumb",
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
          "name": "Battery Motor Efficiency & Runtime",
          "item": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I calculate battery runtime for a motor-driven machine?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multiply the battery's usable capacity by its voltage and the system efficiency, then divide by the average mechanical power the machine needs. Usable capacity is the rated Ah corrected for discharge rate (Peukert's law) and multiplied by the allowed depth of discharge. System efficiency is the product of wiring, controller, motor and gear efficiencies, which can easily fall to 50–70 % when each stage loses a little. Use measured average power over a real shift."
          }
        },
        {
          "@type": "Question",
          "name": "What is Peukert's law?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Peukert's law describes how a battery's deliverable capacity falls as discharge current rises. Runtime equals H × (C ÷ (I × H)) raised to the power k, where C is the rated capacity over H hours and k is the Peukert exponent, typically 1.1–1.3 for lead-acid. A 100 Ah (C20) lead-acid battery discharged at 25 A with k = 1.2 delivers only about 72.5 Ah, so reducing current extends runtime more than proportionally."
          }
        },
        {
          "@type": "Question",
          "name": "Is a BLDC motor more efficient than a brushed DC motor on battery power?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usually, yes. Typical efficiency bands are 85–95 % for BLDC motors and 78–88 % for brushed PMDC motors. A BLDC motor has no brush voltage drop, which alone costs a 24 V brushed motor around 4–8 %, no brush friction, and usually a wider high-efficiency region. The gain matters most on high-hour machines; on light, occasional duty a well-matched PMDC motor can remain the more economical choice."
          }
        },
        {
          "@type": "Question",
          "name": "Will a bigger motor improve battery runtime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not necessarily. A PMDC motor reaches peak efficiency at a fairly light load, often around a tenth of its stall current, and efficiency falls on either side. A motor that is too small works at high current with heavy I²R loss, while one that is far too large idles at a few per cent of stall where friction and iron losses dominate. Match the motor and gear ratio so the typical cruise current sits near the peak."
          }
        },
        {
          "@type": "Question",
          "name": "Is lithium better than lead-acid for motor runtime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For the same nameplate energy, lithium iron phosphate usually gives noticeably longer runtime. It allows 80–90 % or more usable depth of discharge against typically 50–80 % for lead-acid, its Peukert exponent is close to 1 and its voltage sags less under load. It is also lighter. Its battery management cut-offs, charger and temperature limits must suit the machine, and the controller must accept the pack's full voltage window."
          }
        },
        {
          "@type": "Question",
          "name": "How much does regenerative braking extend battery runtime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "On flat floors at walking pace, very little: an 800 kg tug at 2 m/s stores only about 0.44 Wh of kinetic energy, so even 200 stops a shift with half recovered returns around 2 % of the energy used. Regeneration matters more on ramps and in heavy stop-start duty, since lowering the same tug down a 3 m height releases about 6.5 Wh each time. It needs a regenerative (two- or four-quadrant) controller and a battery able to accept charge."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/",
      "url": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/",
      "name": "Battery Powered Motor Efficiency Guide | Globe Scott Motors",
      "description": "Poor runtime on battery equipment? Improve battery powered motor efficiency with runtime maths, Peukert's law, motor operating points and an energy budget.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/#primaryimage"
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
<h1>Why Does Your Battery-Powered Equipment Have Poor Motor Runtime?</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Battery Motor Efficiency &amp; Runtime</li></ol> </nav>
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
<article class="post-2437 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-battery-runtime tag-motor-efficiency tag-peukert-s-law tag-pmdc-transaxles tag-bldc-motors tag-globe-scott-motors" id="post-2437">

<img alt="BLDC motor stator and rotor construction illustrating battery powered motor efficiency and equipment runtime" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/battery-powered-motor-efficiency-runtime.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Efficiency, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>When a battery trolley, tug, scrubber or AGV no longer lasts a shift, the battery usually takes the blame. Often the real losses sit between the battery terminals and the wheel: a motor working far from its best operating point, undersized cables, dragging mechanics, or a lead-acid pack discharged faster than its rating assumes. Improving <strong>battery powered motor efficiency</strong> means treating that whole chain as one system, from the cells through the controller and motor to drive units such as our <a href="/products-pmdc-transaxle/">PMDC transaxles</a>.</p>

<p>This guide sets out the runtime equation, Peukert's law, the shape of a DC motor's efficiency curve and the losses that accumulate along the drivetrain, then works through an energy budget showing how a 3.8-hour machine becomes a 6.6-hour machine on the same battery. Machine-specific failure issues in scrubbers and sweepers are covered in our guide to <a href="/blog/industrial-cleaning-machine-motor-problems-failures/">industrial cleaning machine motor problems</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Runtime equals usable battery energy multiplied by system efficiency, divided by the average mechanical power the machine needs. Poor runtime usually comes from several modest losses multiplied together: a motor running far from its peak-efficiency point, wiring and controller losses, gear losses, extra mechanical drag, and lead-acid capacity lost to high discharge current (the Peukert effect), heat or ageing. Measure energy per shift, then fix the largest losses first; the gains compound.
</div>

<h2>The Runtime Equation: Where the Battery's Energy Goes</h2>

<div class="gsm-equation">\[ t = \frac{C \cdot V \cdot DoD \cdot \eta_{sys}}{P_{mech}}, \qquad \eta_{sys} = \eta_{wiring} \cdot \eta_{ctrl} \cdot \eta_{motor} \cdot \eta_{gear} \]</div>

<p>Here C is the capacity in Ah at the actual discharge rate, V the nominal voltage, DoD the usable depth of discharge, and \( P_{mech} \) the <em>average</em> mechanical power at the wheels or tool over the duty cycle, not the peak. Usable DoD is typically 50&ndash;80 % for lead-acid, depending on the cycle life wanted, and 80&ndash;90 % or more for lithium iron phosphate (LiFePO4).</p>

<p>The equation is a product, so efficiencies multiply. Four stages at a respectable 90 % each deliver only 66 % of the battery's energy to the load; four at 80 % deliver 41 %. That is why runtime problems rarely have a single cause.</p>

<hr/>

<h2>Peukert's Law: Why Lead-Acid Capacity Shrinks at High Current</h2>

<p>Lead-acid capacity is quoted at a gentle rate, commonly 20 hours (C20). Draw current faster and the deliverable capacity falls:</p>

<div class="gsm-equation">\[ t = H \left( \frac{C}{I \, H} \right)^{k}, \qquad C_{eff} = C \left( \frac{C}{I \, H} \right)^{k-1} \]</div>

<p>H is the rated discharge time and k the Peukert exponent, typically about 1.1&ndash;1.3 for lead-acid and close to 1.0&ndash;1.05 for lithium-ion. A 100 Ah (C20) battery with k = 1.2 discharged at 25 A gives \( C_{eff} = 100 \times 0.2^{0.2} \approx 72.5\,\mathrm{Ah} \): 2.9 hours instead of the 4 hours that simple division suggests. Every amp saved elsewhere in the system therefore buys back capacity as well as energy.</p>

<h3>Battery Ageing and Temperature</h3>
<p>Capacity fades with cycling, and many makers define end of life at 80 % of rated capacity, so a two-year-old pack may have lost a fifth of its runtime before any motor issue. Lead-acid also delivers noticeably less capacity when cold, while sustained heat, such as a battery compartment in a 45 &deg;C Indian summer, accelerates ageing sharply. Internal resistance rises with age, so voltage sags further under load and the controller's low-voltage cut-off can trip with usable charge still in the pack; intermittent cut-outs of that kind are covered in our article on a <a href="/blog/dc-motor-keeps-stopping-during-operation/">DC motor that keeps stopping</a>.</p>

<h3>Lithium Versus Lead-Acid</h3>
<p>Switching chemistry changes three terms in the runtime equation at once. Lithium iron phosphate allows a deeper usable discharge, its Peukert exponent is close to 1, and its discharge voltage stays flatter, so the motor holds speed until late in the shift and the controller's low-voltage cut-off arrives later. It is also considerably lighter, which trims rolling resistance on small vehicles. The trade-offs are a higher purchase cost, a battery management system whose cut-offs must be co-ordinated with the motor controller, and charging temperature limits that matter in cold stores and in hot summer compartments alike.</p>

<hr/>

<h2>Battery Powered Motor Efficiency Depends on the Operating Point</h2>

<p>A motor's catalogue efficiency is a single point on a curve. For a brushed PMDC motor, modelling the fixed friction and iron losses as a no-load current \( I_0 \) and writing the stall current as \( I_s = V/R_a \) gives:</p>

<div class="gsm-equation">\[ \eta(I) = \left(1 - \frac{I_0}{I}\right)\left(1 - \frac{I}{I_s}\right), \qquad \eta_{max} = \left(1 - \sqrt{\frac{I_0}{I_s}}\right)^2 \;\text{at}\; I = \sqrt{I_0 I_s} \]</div>

<p>With a no-load current of 1 % of stall current, the curve looks like this:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Current (% of stall)</th><th>Torque (% of stall)</th><th>Speed (% of no-load)</th><th>Efficiency</th>
</tr>
</thead>
<tbody>
<tr><td><strong>2.5 %</strong></td><td>1.5 %</td><td>98 %</td><td>59 %</td></tr>
<tr><td><strong>5 %</strong></td><td>4 %</td><td>96 %</td><td>76 %</td></tr>
<tr><td><strong>10 % (peak)</strong></td><td>9 %</td><td>91 %</td><td>81 %</td></tr>
<tr><td><strong>20 %</strong></td><td>19 %</td><td>81 %</td><td>76 %</td></tr>
<tr><td><strong>30 %</strong></td><td>29 %</td><td>71 %</td><td>68 %</td></tr>
<tr><td><strong>50 %</strong></td><td>49 %</td><td>51 %</td><td>49 %</td></tr>
</tbody>
</table>
</div>

<p>A PMDC motor's peak efficiency therefore sits at a fairly light load relative to stall. An oversized motor idling at a few per cent of stall wastes energy on friction; an undersized or over-geared one working at 30 % of stall wastes it as \( I^2 R \). Real motors also lose 1&ndash;2 V across the brushes, which lowers the whole curve, and a motor run at part speed through PWM has a lower efficiency ceiling still, because back-EMF falls with speed (see our guide to the <a href="/blog/high-torque-low-speed-dc-motor-selection/">high torque low speed DC motor</a>). Gear the machine so the motor runs near rated speed at the travel speed it uses most.</p>

<hr/>

<h2>Losses Between the Battery and the Wheel</h2>

<p>Once the motor's operating point is understood, the remaining losses sit in the wiring, the controller, the gearing and the machine's own drag. Each is modest on its own; together they decide whether the battery lasts the shift.</p>

<h3>Wiring, Connectors and the Controller</h3>
<p>A 25 m&Omega; loop of cable, fuse, contactor and crimps carrying 24 A drops 0.6 V and wastes 14 W, and one corroded lug can double that. Measure the voltage difference between the battery posts and the motor terminals under load; on a 24 V machine anything above about 0.5 V deserves attention. MOSFET PWM controllers typically run at 95&ndash;98 %, lower if the switching frequency or current ripple is badly matched to the motor.</p>

<h3>Gearing and Mechanical Drag</h3>
<p>A helical or spur stage loses only a few per cent, but worm stages, misaligned chains and dry bearings lose far more. On wheeled machines, rolling resistance \( F = C_{rr} \, m \, g \) dominates: an 800 kg tug with \( C_{rr} = 0.015 \) needs 118 N, but soft tyres or a dragging brake raising \( C_{rr} \) to 0.020 add a third. A spring-balance towing test, with the brake released, measures this directly. The <a href="/blog/pmdc-transaxle-motors-for-golf-carts-and-small-evs/">PMDC transaxle guide for golf carts and small EVs</a> covers drivetrain layout for these vehicles.</p>

<h3>Brushed Versus BLDC Efficiency</h3>
<p>Typical bands are 78&ndash;88 % for PMDC and 85&ndash;95 % for BLDC motors, as explained in our article on <a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">motor efficiency ratings</a>. A BLDC motor has no brush drop, which costs a 24 V brushed motor 4&ndash;8 % on its own, no brush friction, and usually a wider high-efficiency region. Our <a href="/products-bldc-motors/">BLDC motors</a>, wound for 12&ndash;96 V battery systems, have a stated efficiency of 88&ndash;94 % or higher. For high-hour machines the gain pays back; for light, occasional duty a well-matched PMDC remains economical.</p>

<h3>Regenerative Braking and System Voltage</h3>
<p>Kinetic energy is \( E = \tfrac{1}{2} m v^2 \): an 800 kg tug at 2 m/s carries only 1.6 kJ (0.44 Wh). Even recovering half of it at 200 stops a shift returns about 44 Wh against roughly 2 kWh consumed, around 2 %. Gradients are different: descending a ramp 3 m high releases \( m g h \approx 23.5\,\mathrm{kJ} \) (6.5 Wh) each time. Regeneration needs a regenerative (two- or four-quadrant) controller and a battery able to accept charge. A higher system voltage cuts current, cable loss and the brush-drop share; the trade-offs are covered in our article on <a href="/blog/wrong-motor-voltage-problems-solutions/">wrong motor voltage problems</a>.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Battery Equipment Runtime Audit Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable audit for battery-powered machines: energy-per-shift logging, Peukert-corrected capacity, stage-by-stage efficiency checks, drag tests and a runtime calculation template with typical efficiency ranges.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Energy Budget for a Battery Tow Trolley</h2>

<p>A 24 V tow trolley uses a 150 Ah (C20) flooded lead-acid battery with k = 1.25 and an 80 % usable depth of discharge. Logged data shows an average mechanical demand of 300 W at the wheels. Before improvement:</p>

<div class="gsm-equation">\[ \eta_{sys} = 0.96 \times 0.95 \times 0.68 \times 0.85 = 0.527, \qquad P_{batt} = \frac{300}{0.527} = 569\,\mathrm{W}, \qquad I = \frac{569}{24} = 23.7\,\mathrm{A} \]</div>

<div class="gsm-equation">\[ C_{eff} = 150 \left( \frac{150}{23.7 \times 20} \right)^{0.25} = 112.5\,\mathrm{Ah}, \qquad t = \frac{0.8 \times 112.5}{23.7} = 3.8\,\mathrm{h} \]</div>

<p>The improvements: cables upsized and lugs re-crimped; a better-matched controller; a motor re-selected so cruise current sits near its peak-efficiency point; the chain stage replaced by a correctly lubricated helical stage; and tyres re-inflated with brake drag removed, cutting wheel power to 260 W.</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Stage</th><th>Before: efficiency / loss</th><th>After: efficiency / loss</th></tr>
</thead>
<tbody>
<tr><td><strong>Battery output</strong></td><td>569 W</td><td>364 W</td></tr>
<tr><td><strong>Wiring and connectors</strong></td><td>96 % / 23 W</td><td>99 % / 4 W</td></tr>
<tr><td><strong>Controller</strong></td><td>95 % / 27 W</td><td>97 % / 11 W</td></tr>
<tr><td><strong>Motor</strong></td><td>68 % / 166 W</td><td>80 % / 70 W</td></tr>
<tr><td><strong>Gearing</strong></td><td>85 % / 53 W</td><td>93 % / 20 W</td></tr>
<tr><td><strong>Mechanical output</strong></td><td>300 W</td><td>260 W</td></tr>
<tr><td><strong>System efficiency</strong></td><td>52.7 %</td><td>71.4 %</td></tr>
<tr><td><strong>Battery current</strong></td><td>23.7 A</td><td>15.2 A</td></tr>
<tr><td><strong>Peukert-corrected capacity</strong></td><td>112.5 Ah</td><td>125.8 Ah</td></tr>
<tr><td><strong>Runtime at 80 % DoD</strong></td><td>3.8 h</td><td>6.6 h</td></tr>
</tbody>
</table>
</div>

<p>Runtime rises by about 75 % on the same battery. The motor was the largest single loss, but no single fix would have achieved this: the lower current also recovered 13 Ah of Peukert capacity. A larger battery would have added weight and cost while leaving 270 W of losses in place.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Before buying a bigger battery, log watt-hours per shift and compare them with the wheel or tool power the job actually needs. If system efficiency is below about 60 %, the drivetrain, not the battery, is the first place to spend money.
</div>

<hr/>

<h2>Diagnosing Poor Runtime in the Field</h2>

<p>A structured sequence separates battery problems from drivetrain losses within a single shift:</p>
<ol>
<li><strong>Log energy, not just time.</strong> A shunt-based watt-hour meter at the battery terminals gives Wh and Ah per shift; divide by the work done (distance travelled, area cleaned, loads moved) to get a benchmark you can trend.</li>
<li><strong>Test the battery on its own.</strong> A capacity test at the rated discharge rate shows whether the pack itself has faded.</li>
<li><strong>Walk the voltage chain under load.</strong> Measure at the battery posts, the controller input and the motor terminals; each drop is a loss you can price in watts.</li>
<li><strong>Compare cruise current with stall current</strong> and run a towing test to quantify drag.</li>
</ol>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Observed Symptom</th><th>Most Likely Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Short runtime from new</strong></td><td>System losses or drag</td><td>Log Wh per shift; towing-force test</td><td>Remove drag; re-gear or re-select motor</td></tr>
<tr><td><strong>Runtime falls month by month</strong></td><td>Battery ageing or poor charging</td><td>Capacity test at the rated discharge rate</td><td>Correct the charge regime; replace the pack</td></tr>
<tr><td><strong>Cut-outs on ramps with charge remaining</strong></td><td>Voltage sag at high current</td><td>Log voltage and current on the ramp</td><td>Higher voltage, lithium, lower peak current</td></tr>
<tr><td><strong>Warm cables or lugs</strong></td><td>High-resistance joints</td><td>Millivolt drop across each joint under load</td><td>Re-crimp, clean, upsize</td></tr>
<tr><td><strong>Motor hot at cruise</strong></td><td>Operating far from peak efficiency</td><td>Cruise current vs motor stall current</td><td>Re-gear or re-size; consider BLDC</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How do I calculate battery runtime for a motor-driven machine?</h3>
<p>Multiply the battery's usable capacity by its voltage and the system efficiency, then divide by the average mechanical power the machine needs. Usable capacity is the rated Ah corrected for discharge rate (Peukert's law) and multiplied by the allowed depth of discharge. System efficiency is the product of wiring, controller, motor and gear efficiencies, which can easily fall to 50–70 % when each stage loses a little. Use measured average power over a real shift.</p>

<h3>Q2. What is Peukert&#x27;s law?</h3>
<p>Peukert's law describes how a battery's deliverable capacity falls as discharge current rises. Runtime equals H × (C ÷ (I × H)) raised to the power k, where C is the rated capacity over H hours and k is the Peukert exponent, typically 1.1–1.3 for lead-acid. A 100 Ah (C20) lead-acid battery discharged at 25 A with k = 1.2 delivers only about 72.5 Ah, so reducing current extends runtime more than proportionally.</p>

<h3>Q3. Is a BLDC motor more efficient than a brushed DC motor on battery power?</h3>
<p>Usually, yes. Typical efficiency bands are 85–95 % for <a href="/products-bldc-motors/">BLDC motors</a> and 78–88 % for brushed PMDC motors. A BLDC motor has no brush voltage drop, which alone costs a 24 V brushed motor around 4–8 %, no brush friction, and usually a wider high-efficiency region. The gain matters most on high-hour machines; on light, occasional duty a well-matched PMDC motor can remain the more economical choice.</p>

<h3>Q4. Will a bigger motor improve battery runtime?</h3>
<p>Not necessarily. A PMDC motor reaches peak efficiency at a fairly light load, often around a tenth of its stall current, and efficiency falls on either side. A motor that is too small works at high current with heavy I²R loss, while one that is far too large idles at a few per cent of stall where friction and iron losses dominate. Match the motor and gear ratio so the typical cruise current sits near the peak.</p>

<h3>Q5. Is lithium better than lead-acid for motor runtime?</h3>
<p>For the same nameplate energy, <strong>lithium iron phosphate</strong> usually gives noticeably longer runtime. It allows 80–90 % or more usable depth of discharge against typically 50–80 % for lead-acid, its Peukert exponent is close to 1 and its voltage sags less under load. It is also lighter. Its battery management cut-offs, charger and temperature limits must suit the machine, and the controller must accept the pack's full voltage window.</p>

<h3>Q6. How much does regenerative braking extend battery runtime?</h3>
<p>On flat floors at walking pace, very little: an 800 kg tug at 2 m/s stores only about 0.44 Wh of kinetic energy, so even 200 stops a shift with half recovered returns around 2 % of the energy used. Regeneration matters more on ramps and in heavy stop-start duty, since lowering the same tug down a 3 m height releases about 6.5 Wh each time. It needs a regenerative (two- or four-quadrant) controller and a battery able to accept charge.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Poor runtime is rarely one fault. It is the product of battery rate effects and a chain of efficiencies, each of which looks acceptable on its own. Measure the energy actually used, separate battery capacity from system losses, and correct the largest losses first, starting with the motor's operating point, mechanical drag and wiring. Only then size the battery.</p>

<p>If your equipment is falling short of a shift, our engineers can review the duty cycle, voltage system and motor operating point, and recommend a matched PMDC transaxle, <a href="/products-pmdc-motors/">PMDC motor</a> or BLDC drive. Share your data through the <a href="/contact-us/">Globe Scott contact page</a>.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is Your Battery Equipment Falling Short of a Shift?</strong></h3>
<p style="margin-bottom: 0;">Send us your battery type and capacity, system voltage, vehicle or tool load, duty cycle and any logged current data. Globe Scott engineers will review the motor operating point and drivetrain losses, then recommend a matched PMDC transaxle, PMDC motor or BLDC drive.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Battery Runtime, Motor Efficiency, Peukert&#x27;s Law, PMDC Transaxles, BLDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/custom-motor-design-non-standard-sizes/">
<h4 class="post-title">How to Select a Motor When Standard Sizes Do Not Fit Your Equipment</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">
<h4 class="post-title">How to Choose the Right Gear Ratio When Your Motor Speed Is Too High</h4>
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
<li><a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">Motor Efficiency Ratings Explained for Buyers</a></li>
<li><a href="/blog/pmdc-transaxle-motors-for-golf-carts-and-small-evs/">PMDC Transaxles for Golf Carts and Small EVs</a></li>
<li><a href="/blog/industrial-cleaning-machine-motor-problems-failures/">Cleaning Machine Motor Failures: How to Reduce Them</a></li>
<li><a href="/blog/wrong-motor-voltage-problems-solutions/">Wrong Motor Voltage: Problems &amp; Solutions</a></li>
<li><a href="/blog/bldc-motor-vs-pmdc-motor-efficiency-cost-maintenance/">BLDC vs PMDC: Efficiency, Cost &amp; Maintenance</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Runtime Audit Worksheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">Battery Equipment Runtime Audit Worksheet</h3>
          <p class="gsm-modal-subtitle">Find out where your battery&#x27;s energy goes and which fixes will extend runtime most, before you buy a bigger battery.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Energy Budget Template:</strong> Stage-by-stage losses from battery terminals to wheel or tool</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Peukert Correction Steps:</strong> Correct lead-acid capacity for your real discharge current</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Field Test Checklist:</strong> Cable drop, towing force, cruise current and battery capacity checks</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Battery Motor Efficiency &amp; Runtime Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Battery Equipment Runtime Audit Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/battery-powered-motor-efficiency-runtime/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Runtime Audit Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Battery Equipment Runtime Audit Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/battery-equipment-runtime-audit-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
