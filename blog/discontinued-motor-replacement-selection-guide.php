<?php
$current_page     = 'discontinued-motor-replacement-selection-guide';
$canonical_path   = 'blog/discontinued-motor-replacement-selection-guide/';
$page_title       = 'Discontinued Motor Replacement Guide | Globe Scott Motors';
$meta_description = 'Discontinued motor replacement guide: capture nameplate data, Ke and resistance, shaft and mounting details, then choose and validate an equivalent DC motor.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/discontinued-motor-replacement-selection-guide.jpg';
$body_class       = 'post-template-default single single-post postid-2427 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/"
      },
      "headline": "How to Select a Replacement Motor When the Original Model Is Discontinued",
      "name": "How to Select a Replacement Motor When the Original Model Is Discontinued",
      "description": "Discontinued motor replacement guide: capture nameplate data, Ke and resistance, shaft and mounting details, then choose and validate an equivalent DC motor.",
      "url": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Replacement Engineering, Maintenance",
      "keywords": "discontinued motor replacement, obsolete motor replacement, motor cross reference, motor nameplate data, equivalent dc motor, custom replacement motor, back emf constant",
      "wordCount": 2474,
      "image": {
        "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/discontinued-motor-replacement-selection-guide.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/discontinued-motor-replacement-selection-guide.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Engineers reviewing interface drawings while capturing data from an obsolete DC motor to specify an equivalent replacement."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#breadcrumb",
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
          "name": "Discontinued Motor Replacement Guide",
          "item": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can I replace a discontinued DC motor with any motor of the same voltage, power and rpm?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not without checking. Matching voltage, wattage and rated rpm fixes only one point on the motor's torque–speed line. Two such motors can differ in back-EMF constant and terminal resistance, which changes speed at your real load, stall current and stall torque. They can also differ in shaft fit, spigot, rotation direction and duty rating. Measure the old motor's no-load speed, no-load current and resistance first, then compare every candidate against those numbers."
          }
        },
        {
          "@type": "Question",
          "name": "How do I identify a motor when the nameplate is missing or unreadable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Reconstruct the data by testing. Run the motor decoupled at a known voltage and record no-load speed and current, measure terminal resistance with a locked-rotor low-voltage test, and calculate Ke = (V − I0 × Rt) / ω0. Measure the spigot, PCD, shaft and overall dimensions with a vernier and micrometer. A temperature-rise run at a known load then indicates a safe continuous rating. Old purchase records and machine manuals often hold the original part number too."
          }
        },
        {
          "@type": "Question",
          "name": "What is a motor cross reference and can I rely on it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A motor cross reference maps an obsolete part number to current models with similar nameplate data and dimensions. It is a quick way to build a shortlist, but it rarely checks back-EMF constant, terminal resistance, shaft tolerance, lead exit or duty rating. Treat every cross-referenced equivalent as a candidate that still needs bench measurement, a trial fit and an on-machine validation run before it is approved as a spare."
          }
        },
        {
          "@type": "Question",
          "name": "Should I rewind the old motor or buy a new equivalent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rewinding restores the armature but not worn bearings, a scored commutator, weakened magnets or a damaged shaft, and it depends on knowing the original turn count and wire gauge. It can be a sensible stop-gap for one critical machine. Where several machines share the same obsolete motor, a new equivalent built to a written performance specification and interface drawing gives a repeatable spare and removes the dependency."
          }
        },
        {
          "@type": "Question",
          "name": "How do I find the gear ratio of an old geared motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mark the output shaft and the motor shaft or fan, then count motor revolutions over five or more complete output revolutions; the ratio is input turns divided by output turns. Counting over several turns exposes non-integer ratios such as 30.5:1. You can also measure both speeds with an optical tachometer while running. Check whether the output can be back-driven by hand, because the machine may rely on a self-locking stage to hold the load."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use an adaptor plate to fit a replacement motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if it is designed properly. The adaptor needs its own machined spigot so the motor stays concentric with the driven shaft, and it adds length that moves any pulley or pinion further from the motor bearing, which raises bearing load. Check the envelope, coupling engagement and fastener torque. For a fleet of machines, a motor built with the correct flange and shaft is usually more robust than an adaptor."
          }
        },
        {
          "@type": "Question",
          "name": "How can I avoid motor obsolescence problems in future?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Specify motors by performance and interface rather than catalogue number: voltage, Ke with tolerance, resistance range, no-load speed, rated point, duty, insulation class and IP code, plus a dimensioned interface drawing. Keep a validated retained sample, agree change notification with your supplier and review spares when a model nears end of life. Our guide to custom DC motor sourcing covers lifecycle planning."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/",
      "url": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/",
      "name": "Discontinued Motor Replacement Guide | Globe Scott Motors",
      "description": "Discontinued motor replacement guide: capture nameplate data, Ke and resistance, shaft and mounting details, then choose and validate an equivalent DC motor.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/#primaryimage"
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
<h1>How to Select a Replacement Motor When the Original Model Is Discontinued</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Discontinued Motor Replacement Guide</li></ol> </nav>
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
<article class="post-2427 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-discontinued-motor-replacement tag-obsolete-motor-replacement tag-motor-nameplate-data tag-motor-selection tag-pmdc-motors tag-globe-scott-motors" id="post-2427">

<img alt="Engineers reviewing dimensioned drawings to specify a discontinued motor replacement for an existing machine" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/discontinued-motor-replacement-selection-guide.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A machine that has run reliably for fifteen years loses its drive motor, and the supplier's reply is short: the model is no longer made. Getting a <strong>discontinued motor replacement</strong> right is harder than it looks, because matching the voltage, wattage and rpm on the nameplate ignores most of what made the old motor work in that machine. Two motors with identical plates can differ in loaded speed, stall current, shaft fit and lead exit, and any one of those can stop a line or quietly overload a gearbox.</p>

<p>This guide sets out a capture-first method: record the old motor's electrical fingerprint and interface while it is still available, use it to measure the real load, then choose a drop-in, adaptor or custom-built match from ranges such as our <a href="/products-pmdc-motors/">PMDC motors from 15 W to 1,500 W at 12 V to 220 V DC</a> and <a href="/products-geared-motors/">industrial geared motors</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> A reliable discontinued motor replacement matches the old motor's behaviour, not just its nameplate. Before the original leaves the machine:
<ol>
<li>record the nameplate and measure no-load speed, no-load current and terminal resistance to calculate its back-EMF constant;</li>
<li>log current and speed in service to find the real load torque;</li>
<li>capture mounting, spigot, PCD, shaft, lead exit, brake, encoder and gear ratio;</li>
<li>choose a drop-in, adaptor or custom-equivalent route;</li>
<li>validate on the machine and freeze a specification drawing.</li>
</ol>
</div>

<hr/>

<h2>Why a Matching Nameplate Does Not Guarantee a Matching Motor</h2>

<p>A nameplate states one operating point. A permanent magnet DC motor, however, runs along a straight torque–speed line set by two constants: the back-EMF constant \( K_e \) and the terminal resistance \( R_t \) (armature plus brushes). In SI units the torque constant \( K_t \) in Nm/A equals \( K_e \) in V·s/rad.</p>

<div class="gsm-equation">\[ \omega = \frac{V - I R_t}{K_e}, \qquad I = \frac{T_L}{K_t} + I_0 \]</div>

<p>Here \( I_0 \) is the no-load current and \( T_L \) the load torque. Two motors can share a rated point yet have different slopes, and the machine notices:</p>
<ul>
<li><strong>Loaded speed:</strong> a conveyor or dosing pump may run 5–10 % faster or slower at its real load.</li>
<li><strong>Stall torque and current:</strong> a lower-resistance motor has a higher stall current, \( I_{stall} \approx V/R_t \), so gearboxes and keys see more torque at a jam, and fuses or current limits may trip on starts.</li>
<li><strong>Duty rating:</strong> an S2 or S3 motor in continuous S1 service will overheat despite a generous plate wattage (see our guide to <a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">DC motor overheating causes</a>).</li>
<li><strong>Interfaces:</strong> spigot, PCD, shaft fit, rotation, connector and brake voltage either fit or they do not.</li>
</ul>
<p>Motor cross-reference tables compare nameplate fields, so treat them as a shortlist generator, never as an approval.</p>

<hr/>

<h2>Step 1: Capture the Old Motor's Electrical Fingerprint</h2>

<p>Test the old motor before it reaches the scrap bin, even if it runs poorly. If it has failed, test a sibling unit or a spare from stores.</p>

<h3>1.1 Record the Nameplate in Full</h3>
<p>Photograph the plate and transcribe voltage, output, speed, current, duty type (S1, S2 with its time limit, or S3 with its cyclic duration factor), insulation class, IP code, part number and date code. The rated speed on a PMDC plate is the <em>loaded</em> speed, usually with a warm winding; no-load speed is higher.</p>

<h3>1.2 Measure No-Load Speed, Current and Terminal Resistance</h3>
<p>Run the motor decoupled at nameplate voltage for about five minutes, then read speed with an optical tachometer and current with a true-DC clamp meter. Lock the shaft and briefly apply a low voltage that drives roughly rated current; \( R_t = V/I \), averaged over three rotor positions, with the winding temperature noted. Then calculate:</p>

<div class="gsm-equation">\[ K_e = \frac{V - I_0 R_t}{\omega_0}, \qquad \omega_0 = \frac{2\pi N_0}{60} \]</div>

<h3>1.3 Confirm Rotation and Polarity</h3>
<p>Note the rotation viewed from the drive end with positive on a marked lead. Limit switches, ratchets and pumps often depend on it.</p>

<h4>Worked Example: Fingerprinting a 24 V Motor and Screening a Candidate</h4>
<p>The old plate reads 24 V, 160 W, 2,700 rpm, 8.5 A, S1. At 24.0 V with no load the motor runs at 3,100 rpm drawing 0.80 A, and \( R_t = 0.32\,\Omega \) at 25&deg;C.</p>
<ul>
<li>\( \omega_0 = 2\pi \times 3100/60 = 324.6\,\mathrm{rad/s} \); \( K_e = (24.0 - 0.80 \times 0.32)/324.6 = 23.74/324.6 = 0.0731\,\mathrm{V\,s/rad} \), so \( K_t = 0.0731\,\mathrm{Nm/A} \).</li>
<li>Cross-check: at 8.5 A with a warm winding of about \( 0.39\,\Omega \), \( \omega = (24 - 8.5 \times 0.39)/0.0731 = 283\,\mathrm{rad/s} \approx 2700\,\mathrm{rpm} \), matching the plate.</li>
<li>In service the motor draws 6.0 A, so \( T_L = 0.0731 \times (6.0 - 0.80) = 0.380\,\mathrm{Nm} \), well below the plate rating of about 0.56 Nm.</li>
</ul>
<p>A slightly larger catalogue candidate, plated 24 V, 180 W, 2,800 rpm, looks like a safe upgrade. It tests at \( K_e = 0.0725 \), \( R_t = 0.22\,\Omega \), \( I_0 = 0.90\,\mathrm{A} \). At the same cold resistance and 0.380 Nm:</p>
<ul>
<li>Old motor: \( \omega = (24 - 6.0 \times 0.32)/0.0731 = 302\,\mathrm{rad/s} \), about 2,884 rpm.</li>
<li>Candidate: \( I = 0.380/0.0725 + 0.90 = 6.14\,\mathrm{A} \); \( \omega = (24 - 6.14 \times 0.22)/0.0725 = 312\,\mathrm{rad/s} \), about 2,983 rpm, only 3.4 % faster.</li>
<li>Stall: old \( 24/0.32 = 75\,\mathrm{A} \), about 5.5 Nm; candidate \( 24/0.22 = 109\,\mathrm{A} \), about 7.9 Nm, or 44 % more torque into the gearbox at a jam.</li>
</ul>
<p>The candidate passes on speed but fails on stiffness: its lower resistance raises stall current and torque far beyond what the driveline and fuse were sized for. Either specify a winding with \( R_t \) close to 0.32 Ω, or keep the candidate, confirm the gearbox rating and add a controller current limit at about the old 75 A.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
If a candidate's \( K_e \) is within about ±5 % of the old motor's and its terminal resistance within about ±15 %, loaded speed usually lands within about 6 % and stall current within about 18 % of the original. Outside those bands, plan a ratio change, a current limit or a custom winding before ordering.
</div>

<hr/>

<h2>Step 2: Use the Old Motor as a Load Cell Before You Remove It</h2>

<p>Once \( K_t \) is known, the old motor is a calibrated torque transducer. Log terminal voltage, current and speed through a full cycle: start, steady running, heaviest product, cold start and any jam. Each reading converts to torque through \( T = K_t (I - I_0) \). Measure voltage at the motor terminals so cable drop is not mistaken for a motor characteristic. For cyclic loads, size on RMS torque and check the peak separately:</p>

<div class="gsm-equation">\[ T_{rms} = \sqrt{\frac{\sum T_k^2 \, t_k}{\sum t_k}} \]</div>

<p>If the old motor ran close to its limit, do not copy its rating blindly; our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a> rebuilds the load case from first principles.</p>

<hr/>

<h2>Step 3: Record the Mechanical and System Interface</h2>

<p>Mechanical mismatches are the most common reason a "correct" replacement is returned. Measure the old motor against this table and photograph each feature beside a steel rule. Tighten the targets for synchronised or position-critical drives.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Parameter</th><th>How to Measure</th><th>Typical Drop-In Acceptance</th>
</tr>
</thead>
<tbody>
<tr><td><strong>No-load speed</strong></td><td>Tachometer, decoupled, at plate voltage after 5 minutes</td><td>±5 %, or corrected by ratio or setpoint</td></tr>
<tr><td><strong>\( K_e = K_t \)</strong></td><td>Calculated from the no-load test</td><td>±5 %</td></tr>
<tr><td><strong>Terminal resistance</strong></td><td>Locked-rotor low-voltage test, three rotor positions</td><td>±15 %; it sets stall current</td></tr>
<tr><td><strong>Rotation</strong></td><td>From drive end, positive on marked lead</td><td>Identical</td></tr>
<tr><td><strong>Mounting and spigot</strong></td><td>B3, B5 or B14; spigot diameter by micrometer, depth by gauge</td><td>Same type, diameter and fit</td></tr>
<tr><td><strong>Bolt PCD and holes</strong></td><td>Centre distance of opposite holes; count; size or thread</td><td>PCD ±0.1 mm; same holes</td></tr>
<tr><td><strong>Shaft</strong></td><td>Micrometer to 0.01 mm; extension from mounting face; key or flat</td><td>Same diameter and tolerance class; length ±0.5 mm unless position-critical</td></tr>
<tr><td><strong>Envelope and lead exit</strong></td><td>Overall length and diameter; exit clock position; connector and pin-out</td><td>Within installed clearance; identical connector or adaptor harness</td></tr>
<tr><td><strong>Brake, encoder, gearbox</strong></td><td>Coil voltage and holding torque; PPR and output type; ratio by turn count</td><td>Same voltage and signals; ratings at least equal; ratio identical</td></tr>
</tbody>
</table>
</div>

<p>Our article on <a href="/blog/motor-mounting-configurations-explained/">motor mounting configurations</a> explains how B3, B5 and B14 interfaces carry load.</p>

<h3>3.1 Finding the Ratio of an Unmarked Gearbox</h3>
<p>Mark the output and motor shafts, then count motor revolutions over five or more output revolutions; ratio is input turns divided by output turns, and counting over several turns exposes ratios such as 30.5:1. Try back-driving the output by hand: if a self-locking stage was holding the load, the replacement needs the same behaviour or a brake.</p>

<h3>3.2 Controller Dependencies</h3>
<p>Check how the brake coil is fed, whether the PLC scales encoder counts to a specific PPR, and what current limit, fuse and thermal protector the controller expects. A mechanically perfect replacement can still fault on its first start if the drive was tuned around the old motor's resistance.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Discontinued Motor Replacement Data Capture Sheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable record sheet for nameplate data, bench test readings, interface dimensions, accessories, in-service load and validation results, with typical acceptance targets for each parameter.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Step 4: Choose the Discontinued Motor Replacement Route</h2>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Route</th><th>Use It When</th><th>Main Checks</th></tr>
</thead>
<tbody>
<tr><td><strong>Direct catalogue equivalent</strong></td><td>Mounting, shaft and \( K_e \) match a standard frame</td><td>Full interface table; duty and IP code</td></tr>
<tr><td><strong>Catalogue motor plus adaptor</strong></td><td>Performance matches but spigot, PCD or shaft differ</td><td>Added length, second spigot fit, overhung load further from the bearing</td></tr>
<tr><td><strong>Ratio or setpoint change</strong></td><td>\( K_e \) differs, so loaded speed differs</td><td>Stall torque through the gearbox; current limit</td></tr>
<tr><td><strong>Custom equivalent</strong></td><td>Envelope or performance must match exactly, or a fleet needs a repeatable spare</td><td>Specification drawing, samples, validation</td></tr>
<tr><td><strong>Change to BLDC</strong></td><td>Brushes wore out on high-hour duty, or sealing is now required</td><td>Driver space, wiring, control signals, EMC</td></tr>
</tbody>
</table>
</div>

<p>Adaptor plates are quick, but each adds length and a second fit, and each fit adds concentricity error; machine the adaptor with its own register rather than relying on bolts. A custom equivalent avoids that compromise: a winding matched to the old \( K_e \), with the original shaft and flange, on a standard frame. Our PMDC frames from A60 to D144 offer B3, B5 and B14 mountings, fail-safe brake and encoder-ready options, and externally accessible brushes, while our A80 and A92 geared frames include ratios from 9:1 to 61:1. The wider menu of shaft, flange and winding changes is covered in our guide to <a href="/blog/custom-motor-design-non-standard-sizes/">custom motor design for non-standard sizes</a>.</p>

<p>If the old brushed motor kept failing on long running hours, consider our <a href="/products-bldc-motors/">BLDC motors</a> with matched drivers, provided the machine has room for the driver.</p>

<hr/>

<h2>Step 5: Validate the Replacement on the Machine</h2>

<ol>
<li><strong>Bench acceptance:</strong> no-load speed, current, resistance and rotation against the old motor's values.</li>
<li><strong>Fit check:</strong> spigot engagement, connector mating and shaft runout at the extension, typically 0.05 mm or better for a coupled drive.</li>
<li><strong>Operating point:</strong> at the same machine load, current within about ±10 % of the logged value and speed within process tolerance.</li>
<li><strong>Thermal run:</strong> operate at the real duty until frame temperature changes by less than about 2 K per hour, then compare the rise with the old motor's record.</li>
<li><strong>Fault cases:</strong> a deliberate jam with the real protection fitted, brake hold and release, encoder direction and reversing.</li>
<li><strong>Endurance:</strong> run a pilot machine for an agreed period before converting the fleet.</li>
</ol>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Record the old motor's current, speed and frame temperature at the same machine settings you will use to test the replacement. A comparison made at different loads, ambients or supply voltages proves nothing.
</div>

<hr/>

<h2>Step 6: Document It So the Problem Does Not Return</h2>

<p>The machine failed because it depended on a catalogue number. Make it depend on a specification instead:</p>
<ul>
<li><strong>Performance specification:</strong> voltage, \( K_e \) with tolerance, resistance range, no-load speed range, rated point, duty, insulation class, IP code and ambient.</li>
<li><strong>Interface drawing:</strong> spigot, PCD, shaft with tolerance class, key or flat, overall length, lead exit, connector and pin-out.</li>
<li><strong>Acceptance tests and retained sample:</strong> the Step 5 values as pass limits, plus one validated motor stored as the physical reference.</li>
<li><strong>Change notification:</strong> agree it with the supplier; our article on <a href="/blog/custom-dc-motor-sourcing-oem-mistakes/">custom DC motor sourcing</a> covers lifecycle planning.</li>
</ul>
<p>The same package is what a manufacturer needs to quote. Our <a href="/blog/custom-motor-specification-checklist-first-call/">first-call specification checklist</a> orders it by importance, and freezing it early avoids the <a href="/blog/custom-motor-manufacturing-delays-specifications/">custom motor manufacturing delays</a> that follow late changes.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. Can I replace a discontinued DC motor with any motor of the same voltage, power and rpm?</h3>
<p>Not without checking. Matching voltage, wattage and rated rpm fixes only one point on the motor's torque–speed line. Two such motors can differ in back-EMF constant and terminal resistance, which changes speed at your real load, stall current and stall torque. They can also differ in shaft fit, spigot, rotation direction and duty rating. Measure the old motor's no-load speed, no-load current and resistance first, then compare every candidate against those numbers.</p>

<h3>Q2. How do I identify a motor when the nameplate is missing or unreadable?</h3>
<p>Reconstruct the data by testing. Run the motor decoupled at a known voltage and record no-load speed and current, measure terminal resistance with a locked-rotor low-voltage test, and calculate Ke = (V − I0 × Rt) / ω0. Measure the spigot, PCD, shaft and overall dimensions with a vernier and micrometer. A temperature-rise run at a known load then indicates a safe continuous rating. Old purchase records and machine manuals often hold the original part number too.</p>

<h3>Q3. What is a motor cross reference and can I rely on it?</h3>
<p>A motor cross reference maps an obsolete part number to current models with similar nameplate data and dimensions. It is a quick way to build a shortlist, but it rarely checks back-EMF constant, terminal resistance, shaft tolerance, lead exit or duty rating. Treat every cross-referenced equivalent as a candidate that still needs bench measurement, a trial fit and an on-machine validation run before it is approved as a spare.</p>

<h3>Q4. Should I rewind the old motor or buy a new equivalent?</h3>
<p>Rewinding restores the armature but not worn bearings, a scored commutator, weakened magnets or a damaged shaft, and it depends on knowing the original turn count and wire gauge. It can be a sensible stop-gap for one critical machine. Where several machines share the same obsolete motor, a new equivalent built to a written performance specification and interface drawing gives a repeatable spare and removes the dependency.</p>

<h3>Q5. How do I find the gear ratio of an old geared motor?</h3>
<p>Mark the output shaft and the motor shaft or fan, then count motor revolutions over five or more complete output revolutions; the ratio is input turns divided by output turns. Counting over several turns exposes non-integer ratios such as 30.5:1. You can also measure both speeds with an optical tachometer while running. Check whether the output can be back-driven by hand, because the machine may rely on a self-locking stage to hold the load.</p>

<h3>Q6. Can I use an adaptor plate to fit a replacement motor?</h3>
<p>Yes, if it is designed properly. The adaptor needs its own machined spigot so the motor stays concentric with the driven shaft, and it adds length that moves any pulley or pinion further from the motor bearing, which raises bearing load. Check the envelope, coupling engagement and fastener torque. For a fleet of machines, a motor built with the correct flange and shaft is usually more robust than an adaptor.</p>

<h3>Q7. How can I avoid motor obsolescence problems in future?</h3>
<p>Specify motors by performance and interface rather than catalogue number: voltage, Ke with tolerance, resistance range, no-load speed, rated point, duty, insulation class and IP code, plus a dimensioned interface drawing. Keep a validated retained sample, agree change notification with your supplier and review spares when a model nears end of life. Our guide to <a href="/blog/custom-dc-motor-sourcing-oem-mistakes/">custom DC motor sourcing</a> covers lifecycle planning.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>A discontinued motor is a measurement problem before it is a purchasing problem. Capture the old motor's back-EMF constant, resistance, rotation and interface, use it as a load cell to find the real torque, choose the route that matches those numbers, validate on the machine and write the result into a specification.</p>

<p>If you have the nameplate photograph, bench readings and interface sketch, <a href="/contact-us/">send them to our engineering team</a> and we will advise whether a drop-in, an adaptor solution or a matched custom build is the right route.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Need an Equivalent for a Discontinued Motor in Your Machine?</strong></h3>
<p style="margin-bottom: 0;">Share the old motor&#x27;s nameplate photograph, bench readings, interface sketch and duty pattern with our engineers. We will compare them against our PMDC, BLDC and geared motor ranges and advise whether a standard frame, an adaptor solution or a matched custom build is the right replacement route.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Discontinued Motor Replacement, Obsolete Motor Replacement, Motor Nameplate Data, Motor Selection, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/automatic-door-motor-problems-open-close/">
<h4 class="post-title">Why Does an Automatic Door Motor Fail to Open or Close Properly?</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/winch-motor-insufficient-torque-lifting-load/">
<h4 class="post-title">Why Is Your Winch Motor Unable to Lift the Required Load?</h4>
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
<li><a href="/blog/custom-motor-specification-checklist-first-call/">Custom Motor Specification Checklist for Your First Call</a></li>
<li><a href="/blog/motor-mounting-configurations-explained/">Motor Mounting Configurations: B3, B5 and B14 Explained</a></li>
<li><a href="/blog/custom-motor-design-non-standard-sizes/">Custom Motor Design When Standard Sizes Do Not Fit</a></li>
<li><a href="/blog/custom-dc-motor-sourcing-oem-mistakes/">Custom DC Motor Sourcing: OEM Mistakes to Avoid</a></li>
<li><a href="/blog/custom-motor-manufacturing-delays-specifications/">Custom Motor Delays: Specifications to Finalise Early</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Engineering Data Sheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">Discontinued Motor Replacement Data Capture Sheet</h3>
          <p class="gsm-modal-subtitle">Record the old motor&#x27;s electrical constants, interface dimensions and in-service load before it leaves the machine, then validate the replacement against them.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Bench Test Record:</strong> No-load speed, current, resistance and Ke calculation steps</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Interface Dimension Sheet:</strong> Spigot, PCD, shaft, key, lead exit and connector fields</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Validation Checklist:</strong> Acceptance targets for speed, current, temperature and fit</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Discontinued Motor Replacement Guide Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Discontinued Motor Replacement Data Capture Sheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/discontinued-motor-replacement-selection-guide/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Data Capture Sheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Discontinued Motor Replacement Data Capture Sheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/discontinued-motor-replacement-data-capture-sheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
