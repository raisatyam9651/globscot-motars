<?php
$current_page     = 'compact-dc-motor-selection-limited-space';
$canonical_path   = 'blog/compact-dc-motor-selection-limited-space/';
$page_title       = 'Compact DC Motor Selection Guide | Globe Scott Motors';
$meta_description = 'Compact DC motor selection for tight spaces: torque per rotor volume, motor plus gearhead trade-offs, PMDC vs BLDC size and the thermal limits of small frames.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/compact-dc-motor-selection-limited-space.jpg';
$body_class       = 'post-template-default single single-post postid-2431 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/"
      },
      "headline": "How to Choose the Right DC Motor When Space Inside Your Machine Is Limited",
      "name": "How to Choose the Right DC Motor When Space Inside Your Machine Is Limited",
      "description": "Compact DC motor selection for tight spaces: torque per rotor volume, motor plus gearhead trade-offs, PMDC vs BLDC size and the thermal limits of small frames.",
      "url": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Torque Density, Machine Design",
      "keywords": "compact dc motor selection, torque density, small dc motor high torque, planetary gear motor, motor envelope dimensions, bldc vs pmdc size, torque per rotor volume",
      "wordCount": 2260,
      "image": {
        "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/compact-dc-motor-selection-limited-space.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/compact-dc-motor-selection-limited-space.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Section drawing of a compact electromechanical assembly used to check motor, gearhead and connector clearances inside a tight envelope."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#breadcrumb",
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
          "name": "Compact DC Motor Selection for Tight Spaces",
          "item": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I get more torque from a small DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Add a gearhead and run the motor faster. Output torque equals motor torque multiplied by the ratio and gear efficiency, so a two-stage 20:1 planetary gearhead at about 90 % efficiency turns 0.11 Nm into roughly 2 Nm. Raising current alone only works up to the frame's thermal limit. Higher-energy magnets, better heat conduction into the machine frame, or an intermittent S2 or S3 duty rating can also increase usable torque from the same envelope."
          }
        },
        {
          "@type": "Question",
          "name": "Is a BLDC motor smaller than a PMDC motor for the same torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usually, yes. Brushless motors built with rare-earth NdFeB magnets carry more air-gap flux than ferrite designs, and their stator windings conduct heat straight into the housing, so they reach a higher torque per unit volume. They also avoid the axial length of a commutator and brush gear. The trade-off is the driver, which needs space somewhere in the machine, plus phase and Hall-sensor wiring."
          }
        },
        {
          "@type": "Question",
          "name": "Is a planetary gear motor better than a spur gear motor in a tight space?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on the shape of the space. A planetary gearhead is coaxial with the motor and offers the highest torque density, which suits long, narrow bores. A parallel-shaft spur or helical gearbox offsets the output and is wider, but it is efficient, robust and well suited to wheel and trolley drives. Where length is the problem, a right-angle worm or bevel stage can fold the drive around a corner."
          }
        },
        {
          "@type": "Question",
          "name": "Why do small motors run hotter than large ones?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Copper loss for a given torque rises steeply as a motor shrinks, while the surface area available to shed that heat falls. For geometrically similar motors, halving the volume roughly triples copper loss at the same torque and removes about a third of the cooling surface, so temperature rise grows several times. That is why small frames need a good conduction path, a realistic ambient and an honest duty rating."
          }
        },
        {
          "@type": "Question",
          "name": "Should I choose a longer motor or a larger-diameter motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you have the choice, diameter is the stronger lever: continuous torque scales with rotor diameter squared but only linearly with length. A short, wide pocket therefore suits a flat, short-stack motor, while a long, narrow bore suits a slim motor with an in-line planetary gearhead. Remember that a larger diameter also raises rotor inertia, which matters for fast-reversing or positioning drives."
          }
        },
        {
          "@type": "Question",
          "name": "What should a motor envelope drawing include?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Include maximum length and diameter including the gearhead, brake or encoder, connector and cable bend radius; the mounting face, type and bolt pattern; shaft position, extension and radial load; lead exit direction as a clock angle; service clearance for brush caps or connectors; and keep-out zones, nearby heat sources and the intended conduction path. A STEP model of the surrounding parts removes most fit surprises."
          }
        },
        {
          "@type": "Question",
          "name": "Can I mount a compact motor so the machine frame absorbs its heat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, and in tight enclosures it is often the most effective cooling available. Face-mount the motor directly onto a metal bracket or plate with clean, flat contact surfaces so heat conducts from the frame into the machine structure. Check that the bracket itself is not near a heat source, and confirm the result with a temperature-rise test at the real duty cycle and enclosure ambient."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/",
      "url": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/",
      "name": "Compact DC Motor Selection Guide | Globe Scott Motors",
      "description": "Compact DC motor selection for tight spaces: torque per rotor volume, motor plus gearhead trade-offs, PMDC vs BLDC size and the thermal limits of small frames.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/#primaryimage"
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
<h1>How to Choose the Right DC Motor When Space Inside Your Machine Is Limited</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Compact DC Motor Selection for Tight Spaces</li></ol> </nav>
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
<article class="post-2431 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-compact-dc-motor-selection tag-torque-density tag-planetary-gear-motor tag-bldc-motors tag-pmdc-motors tag-globe-scott-motors" id="post-2431">

<img alt="Engineer sketching a compact assembly section view during compact DC motor selection for a space-limited machine" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/compact-dc-motor-selection-limited-space.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Machine Design, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>The drive has to fit in a pocket the size of a soft-drink can, next to a heater, behind a panel that technicians rarely open. The first instinct is to search catalogues for the most powerful small motor, but <strong>compact DC motor selection</strong> is governed by torque, not power. A motor's size is set by the torque it must produce continuously and by how well its frame sheds heat, so the winning design is often a smaller motor running faster through a gearhead, not a larger motor running slowly.</p>

<p>This guide explains the scaling laws behind motor size, works through a direct-drive versus motor-plus-gearhead comparison in the same envelope, and covers gearhead geometry, the choice between ferrite <a href="/products-pmdc-motors/">PMDC motors</a> and rare-earth <a href="/products-bldc-motors/">BLDC motors</a>, the thermal penalty of small frames and the envelope details that decide whether the motor really fits.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> In a tight space, motor size is set by continuous torque, which scales with rotor volume \( (D^2 L) \) and with the frame's ability to shed heat. To fit more output into less space:
<ol>
<li>run a smaller motor faster and add a gearhead, which shrinks motor torque by the ratio times efficiency;</li>
<li>match gearhead geometry (planetary, parallel-shaft or right-angle) to the envelope's shape;</li>
<li>use higher-energy magnets where torque density matters;</li>
<li>give the frame a conduction path for heat;</li>
<li>draw the full envelope, including connectors and service access.</li>
</ol>
</div>

<hr/>

<h2>Why Torque, Not Power, Decides Motor Size</h2>

<h3>Torque per Rotor Volume</h3>
<p>For a given cooling method and magnet material, the continuous torque a motor can produce is roughly proportional to its rotor volume. Designers express this as torque per rotor volume (TRV):</p>

<div class="gsm-equation">\[ T = \mathrm{TRV} \cdot V_r = \mathrm{TRV} \cdot \frac{\pi D^2 L}{4} \]</div>

<p>Here \( D \) is rotor diameter and \( L \) is active stack length. TRV is set by magnetic loading (magnet grade and air-gap flux density) and electric loading (current per unit of rotor circumference, which cooling limits). Published design references place small, naturally cooled, totally enclosed ferrite motors in the single figures of kNm/m³, with high-performance servo motors several times higher.</p>

<p>Power is a different matter. Because \( P = T\omega \), the same 30 W can come from 2 Nm at 150 rpm or 0.1 Nm at 3,000 rpm, and the second motor needs roughly one-twentieth of the rotor volume. That is the whole case for gearheads in compact machines.</p>

<h3>Why Diameter Beats Length</h3>
<p>Torque grows with the square of rotor diameter but only linearly with length. Doubling the length doubles torque; doubling the diameter quadruples it. A pocket that is short but wide therefore suits a flat, short-stack motor, while a long, narrow bore suits a slim motor and gearhead in line. Larger diameter also raises rotor inertia, which matters for fast-reversing or positioning drives (see our guide to <a href="/blog/motor-position-control-selection-guide/">motor position control selection</a>).</p>

<hr/>

<h2>Trading Speed for Size: Motor Plus Gearhead</h2>

<p>A gearhead with ratio \( i \) and efficiency \( \eta_g \) divides the torque the motor must make:</p>

<div class="gsm-equation">\[ T_m = \frac{T_{out}}{i \cdot \eta_g}, \qquad N_m = N_{out} \cdot i \]</div>

<p>Since rotor volume tracks motor torque, it shrinks by the factor \( i\,\eta_g \). The gearhead has volume of its own, of course, but steel gears carry far more torque per unit volume than an electromagnetic air gap does.</p>

<h3>Worked Example: Direct Drive vs Gearhead in a Ø70 × 140 mm Envelope</h3>
<p>A dosing roller needs 2.0 Nm continuously at 150 rpm, and the motor, gearhead and connector must fit a cylinder 70 mm in diameter and 140 mm long. Output power is \( P = 2.0 \times 2\pi \times 150/60 = 31.4\,\mathrm{W} \). For illustration, assume a TRV of 6 kNm/m³ for a naturally cooled ferrite PMDC motor and 15 kNm/m³ for a rare-earth BLDC motor; real values come from the manufacturer's rated continuous torque.</p>
<ul>
<li><strong>Option A, direct drive:</strong> \( V_r = 2.0/6000 = 3.33 \times 10^{-4}\,\mathrm{m^3} = 333\,\mathrm{cm^3} \). With \( L = D \), \( D = (4V_r/\pi)^{1/3} = 75\,\mathrm{mm} \), wider than the whole envelope. Limiting the rotor to 35 mm diameter would need a stack of \( 3.33 \times 10^{-4}/(\pi \times 0.035^2/4) = 0.346\,\mathrm{m} \).</li>
<li><strong>Option B, ferrite PMDC at 3,000 rpm with a two-stage 20:1 planetary gearhead</strong> (\( \eta_g \approx 0.90 \)): \( T_m = 2.0/(20 \times 0.90) = 0.111\,\mathrm{Nm} \), \( V_r = 0.111/6000 = 18.5\,\mathrm{cm^3} \), a 30 mm rotor with a 26 mm stack. Motor shaft power is \( 0.111 \times 314.2 = 34.9\,\mathrm{W} \), so the gearhead loses about 3.5 W.</li>
<li><strong>Option C, BLDC at 3,000 rpm with the same gearhead:</strong> \( V_r = 0.111/15000 = 7.4\,\mathrm{cm^3} \), for example a 25 mm rotor with a 15 mm stack, provided the driver can sit elsewhere.</li>
</ul>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Option</th><th>Motor Torque</th><th>Rotor Volume</th><th>Indicative Rotor</th><th>Fits Ø70 × 140 mm?</th>
</tr>
</thead>
<tbody>
<tr><td><strong>A: Ferrite PMDC, direct drive at 150 rpm</strong></td><td>2.0 Nm</td><td>333 cm³</td><td>Ø75 × 75 mm, or Ø35 × 346 mm</td><td>No</td></tr>
<tr><td><strong>B: Ferrite PMDC at 3,000 rpm + 20:1 planetary</strong></td><td>0.111 Nm</td><td>18.5 cm³</td><td>Ø30 × 26 mm stack</td><td>Yes, with the gearhead in line</td></tr>
<tr><td><strong>C: BLDC at 3,000 rpm + 20:1 planetary</strong></td><td>0.111 Nm</td><td>7.4 cm³</td><td>Ø25 × 15 mm stack</td><td>Yes, shortest; driver mounted elsewhere</td></tr>
</tbody>
</table>
</div>

<p>Rotor volume falls 18-fold from A to B, exactly \( i\,\eta_g = 20 \times 0.90 \). Before committing, confirm that the gearhead's continuous and peak output ratings exceed 2.0 Nm with margin for starting, and that its output bearing carries the roller's radial load. When the real need is very high torque at very low speed, our guide to <a href="/blog/high-torque-low-speed-dc-motor-selection/">high torque, low speed DC motor selection</a> covers ratio and gear-type choice in depth.</p>

<hr/>

<h2>Choosing Gearhead Geometry to Suit the Envelope</h2>

<p>The shape of the free space often decides the gearhead before the ratio does:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Drive Option</th><th>Envelope Shape</th><th>Strengths</th><th>Watch-Outs</th></tr>
</thead>
<tbody>
<tr><td><strong>Motor + planetary gearhead</strong></td><td>Slim coaxial cylinder</td><td>Highest gear torque density; coaxial output; typically around 90–97 % per stage</td><td>Cost rises per stage; backlash and lubrication</td></tr>
<tr><td><strong>Motor + parallel-shaft (spur or helical)</strong></td><td>Offset output, box-shaped</td><td>Efficient, roughly 95–98 % per stage; robust; suits wheel and trolley drives</td><td>Wider; output axis offset from motor axis</td></tr>
<tr><td><strong>Right-angle (worm or bevel)</strong></td><td>L-shaped; short axial length</td><td>Folds the drive around a corner; worm stages can resist back-driving</td><td>Worm efficiency roughly 40–90 % depending on ratio and lead angle</td></tr>
<tr><td><strong>Flat, short-stack motor</strong></td><td>Wide and short</td><td>Uses diameter, the strongest torque lever</td><td>Higher rotor inertia; needs radial space</td></tr>
<tr><td><strong>Direct drive</strong></td><td>Large in both directions for high torque</td><td>No backlash, no gear wear</td><td>Lowest torque per unit volume at low speed</td></tr>
</tbody>
</table>
</div>

<p>Our <a href="/products-geared-motors/">industrial geared motors</a> pair PMDC frames with ratios from 9:1 to 61:1 on the A80 and A92 series, our PMDC geared traction motors use parallel-exit steel gearboxes with exit axles up to 20 mm, and our BLDC motors can be built with planetary or helical gearboxes.</p>

<hr/>

<h2>PMDC or BLDC: What Changes the Size Equation</h2>

<p>Two physical differences give rare-earth brushless motors higher torque density. Sintered NdFeB magnets have roughly three times the remanence of ferrite, so the same air gap carries more flux. And a BLDC motor's windings sit in the stator, conducting heat straight into the housing, so they tolerate higher current loading for the same temperature. A brushed PMDC motor also spends axial length on its commutator and brush gear.</p>

<p>The trade-offs are system-level. A BLDC motor needs a driver, which may need its own space, plus a harness carrying three phase leads and the Hall-sensor signal and supply wires. Our BLDC range runs from 12 V to 310 V DC with matched drivers and IP54–IP67 sealing; the G-BLDC 57/80 series covers 30–400 W at 3,000 rpm rated, with 0.10–1.30 Nm continuous torque and NEMA 23/34 or IEC B14 mounting. Ferrite PMDC motors remain simpler and cheaper where the duty is intermittent and the supply is plain DC. Our <a href="/blog/pmdc-vs-bldc-motor-application-fit-guide/">PMDC vs BLDC application fit guide</a> covers the full decision.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Compact Motor Envelope and Sizing Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable worksheet that takes you from envelope dimensions and load torque to required motor torque, gearhead choice, thermal check and a complete envelope drawing checklist.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>The Thermal Penalty of Small Frames</h2>

<h3>Motor Constant: The Figure of Merit for Small Frames</h3>
<p>The motor constant \( K_m \) tells you how much copper loss a motor needs to make a given torque:</p>

<div class="gsm-equation">\[ K_m = \frac{K_t}{\sqrt{R}}, \qquad P_{cu} = \left(\frac{T}{K_m}\right)^2, \qquad \Delta T = P_{loss} \cdot R_{th} \]</div>

<p>For geometrically similar motors, \( K_m^2 \) scales with linear size to the fifth power, while the surface area that sheds heat scales with its square. Shrink every dimension by 20 % (about half the volume) and, for the same torque, copper loss rises roughly threefold while the cooling surface falls by about a third. The temperature rise grows almost fivefold. When comparing candidates that fit, pick the highest \( K_m \), not the highest rated power.</p>

<h3>Practical Ways to Shed Heat in a Tight Space</h3>
<ul>
<li><strong>Conduct it away:</strong> face-mount the motor directly onto a metal bracket or plate so the frame has a low thermal resistance path into the machine.</li>
<li><strong>Measure the real ambient:</strong> air inside an enclosure is often far hotter than the room, and every degree comes out of the insulation's margin; our PMDC motors are endurance and temperature-rise tested to Class F (155&deg;C).</li>
<li><strong>Use the duty rating:</strong> if the drive runs intermittently, an S2 or S3 rating allows a smaller frame than S1. Continuous drives need the opposite care, covered in our guide to <a href="/blog/continuous-duty-motor-overheating-prevention/">continuous duty motor overheating</a>.</li>
<li><strong>Allow for magnets:</strong> ferrite loses roughly 0.18–0.2 % of remanence per &deg;C, NdFeB roughly 0.1–0.12 %/&deg;C, so a hot compact motor makes less torque per amp.</li>
</ul>

<hr/>

<h2>Envelope Drawing Checklist for Compact DC Motor Selection</h2>

<p>Most "it fitted on the drawing" failures come from items left off the envelope. Before requesting quotations, draw and dimension:</p>
<ul>
<li>maximum length and diameter (or square section), including the gearhead, rear brake or encoder, connector and cable bend radius;</li>
<li>the mounting face and type: B14 face mounting bolts from the machine side without a flange overhang, which suits tight spaces, as explained in our article on <a href="/blog/motor-mounting-configurations-explained/">motor mounting configurations</a>;</li>
<li>shaft position, extension, orientation and the radial load on it;</li>
<li>lead exit direction (axial or radial) as a clock angle, with mating clearance for the connector;</li>
<li>service access: PMDC motors with externally accessible brushes need clearance to remove the brush caps;</li>
<li>keep-out zones, nearby heat sources, airflow paths and the conduction path into the frame.</li>
</ul>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
If the envelope is length-limited, look first at a wider, shorter motor; if it is diameter-limited, look first at a faster motor with an in-line planetary gearhead; if neither fits, a right-angle stage can fold the drive around the obstruction.
</div>

<p>When no catalogue frame fits even after these trade-offs, a standard frame with a changed shaft, stack length or lead exit is usually the next step; our guide to <a href="/blog/custom-motor-design-non-standard-sizes/">custom motor design for non-standard sizes</a> ranks those changes by effort.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How do I get more torque from a small DC motor?</h3>
<p>Add a gearhead and run the motor faster. Output torque equals motor torque multiplied by the ratio and gear efficiency, so a two-stage 20:1 planetary gearhead at about 90 % efficiency turns 0.11 Nm into roughly 2 Nm. Raising current alone only works up to the frame's thermal limit. Higher-energy magnets, better heat conduction into the machine frame, or an intermittent S2 or S3 duty rating can also increase usable torque from the same envelope.</p>

<h3>Q2. Is a BLDC motor smaller than a PMDC motor for the same torque?</h3>
<p>Usually, yes. Brushless motors built with rare-earth NdFeB magnets carry more air-gap flux than ferrite designs, and their stator windings conduct heat straight into the housing, so they reach a higher torque per unit volume. They also avoid the axial length of a commutator and brush gear. The trade-off is the driver, which needs space somewhere in the machine, plus phase and Hall-sensor wiring.</p>

<h3>Q3. Is a planetary gear motor better than a spur gear motor in a tight space?</h3>
<p>It depends on the shape of the space. A planetary gearhead is coaxial with the motor and offers the highest torque density, which suits long, narrow bores. A parallel-shaft spur or helical gearbox offsets the output and is wider, but it is efficient, robust and well suited to wheel and trolley drives. Where length is the problem, a right-angle worm or bevel stage can fold the drive around a corner.</p>

<h3>Q4. Why do small motors run hotter than large ones?</h3>
<p>Copper loss for a given torque rises steeply as a motor shrinks, while the surface area available to shed that heat falls. For geometrically similar motors, halving the volume roughly triples copper loss at the same torque and removes about a third of the cooling surface, so temperature rise grows several times. That is why small frames need a good conduction path, a realistic ambient and an honest duty rating.</p>

<h3>Q5. Should I choose a longer motor or a larger-diameter motor?</h3>
<p>If you have the choice, diameter is the stronger lever: continuous torque scales with rotor diameter squared but only linearly with length. A short, wide pocket therefore suits a flat, short-stack motor, while a long, narrow bore suits a slim motor with an in-line planetary gearhead. Remember that a larger diameter also raises rotor inertia, which matters for fast-reversing or positioning drives.</p>

<h3>Q6. What should a motor envelope drawing include?</h3>
<p>Include maximum length and diameter including the gearhead, brake or encoder, connector and cable bend radius; the mounting face, type and bolt pattern; shaft position, extension and radial load; lead exit direction as a clock angle; service clearance for brush caps or connectors; and keep-out zones, nearby heat sources and the intended conduction path. A STEP model of the surrounding parts removes most fit surprises.</p>

<h3>Q7. Can I mount a compact motor so the machine frame absorbs its heat?</h3>
<p>Yes, and in tight enclosures it is often the most effective cooling available. Face-mount the motor directly onto a metal bracket or plate with clean, flat contact surfaces so heat conducts from the frame into the machine structure. Check that the bracket itself is not near a heat source, and confirm the result with a temperature-rise test at the real duty cycle and enclosure ambient.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Compact motor selection starts with output torque, not power. Convert the load into continuous and peak torque, use a gearhead to move the motor to a higher speed where its rotor can be small, choose gear geometry that matches the shape of the free space, and check temperature rise with the real conduction path and enclosure ambient. Then dimension the full envelope, connectors and service access included.</p>

<p>If you have a pocket drawing and a load requirement, <a href="/contact-us/">send them to our engineers</a> and we will compare PMDC, BLDC and geared configurations that fit the envelope.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Short of Space for the Drive Inside Your Machine?</strong></h3>
<p style="margin-bottom: 0;">Send our engineers your envelope drawing or STEP model, the output torque and speed, supply voltage, duty cycle and enclosure ambient. We will compare PMDC, BLDC and geared motor configurations that fit the space and check their thermal margin before you commit.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Compact DC Motor Selection, Torque Density, Planetary Gear Motor, BLDC Motors, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/motor-gearbox-sizing-problems-output/">
<h4 class="post-title">Why Does Your Motor and Gearbox Combination Fail to Deliver the Required Output?</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/high-torque-low-speed-dc-motor-selection/">
<h4 class="post-title">How to Select a Motor When You Need High Torque at Low Speed</h4>
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
<li><a href="/blog/pmdc-vs-bldc-motor-application-fit-guide/">PMDC vs BLDC Motors: Which One Fits Your Application</a></li>
<li><a href="/blog/motor-mounting-configurations-explained/">Motor Mounting Configurations: B3, B5 and B14 Explained</a></li>
<li><a href="/blog/high-torque-low-speed-dc-motor-selection/">High Torque, Low Speed DC Motor Selection</a></li>
<li><a href="/blog/custom-motor-design-non-standard-sizes/">Custom Motor Design When Standard Sizes Do Not Fit</a></li>
<li><a href="/blog/motor-position-control-selection-guide/">Choosing a Motor for Precise Position Control</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Sizing Worksheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">Compact Motor Envelope and Sizing Worksheet</h3>
          <p class="gsm-modal-subtitle">Turn a pocket drawing and a load requirement into a motor and gearhead combination that fits, with the thermal and interface checks engineers often miss.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Step-by-Step Sizing:</strong> Load torque to motor torque through ratio and efficiency</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Gearhead Comparison:</strong> Planetary, parallel-shaft and right-angle options by envelope shape</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Envelope Checklist:</strong> Connectors, bend radius, service access and heat path items</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Compact DC Motor Selection for Tight Spaces Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Compact Motor Envelope and Sizing Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/compact-dc-motor-selection-limited-space/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Sizing Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Compact Motor Envelope and Sizing Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/compact-motor-envelope-sizing-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
