<?php
$current_page     = 'motor-insufficient-torque-under-load-how-to-choose';
$canonical_path   = 'blog/motor-insufficient-torque-under-load-how-to-choose/';
$page_title       = 'Insufficient Motor Torque Under Load? | Globe Scott Motors';
$meta_description = 'Motor insufficient torque under load? Re-measure breakaway, acceleration, peak and RMS torque, then pick the cheapest fix: re-ratio, upsize or move to BLDC.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/motor-insufficient-torque-under-load-how-to-choose.jpg';
$body_class       = 'post-template-default single single-post postid-2423 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/"
      },
      "headline": "How to Choose a Motor When Your Machine Cannot Handle the Required Load",
      "name": "How to Choose a Motor When Your Machine Cannot Handle the Required Load",
      "description": "Motor insufficient torque under load? Re-measure breakaway, acceleration, peak and RMS torque, then pick the cheapest fix: re-ratio, upsize or move to BLDC.",
      "url": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Torque, Machine Upgrades",
      "keywords": "motor insufficient torque under load, load torque calculation, rms torque, motor torque-speed curve, motor sizing, service factor, motor upgrade options",
      "wordCount": 2528,
      "image": {
        "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/motor-insufficient-torque-under-load-how-to-choose.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/motor-insufficient-torque-under-load-how-to-choose.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Re-establishing load torque, peak and RMS demand before choosing a motor upgrade for a machine that has outgrown its drive"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#breadcrumb",
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
          "name": "Motor Insufficient Torque: Choosing an Upgrade",
          "item": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How can I tell whether my motor is too small for the load or simply faulty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Test the motor decoupled from the machine. If its no-load speed and current match the original test sheet at the same voltage, and terminal voltage holds up under load, the motor is healthy and the load has outgrown it. A faulty PMDC motor usually shows higher no-load speed (weakened magnets) or high no-load current (friction or shorted turns); a large terminal voltage drop points to cabling or supply instead."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate the torque my machine actually needs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Add the torque components at the load for each part of the cycle: breakaway or running friction, process and gravity torque, and acceleration torque (inertia × angular acceleration). Divide by gear ratio × gearbox efficiency to refer them to the motor shaft, then add the torque to accelerate the motor's own rotor. The largest value is the peak requirement; the RMS over the whole cycle is the thermal one."
          }
        },
        {
          "@type": "Question",
          "name": "What is RMS torque and why does it matter for motor sizing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RMS torque is the steady torque that would heat the motor as much as the real, varying cycle does. Because copper loss rises with current squared and torque is proportional to current, square each torque, weight it by its duration, average over the full cycle including dwells, and take the square root. The result must stay below the continuous rating at the actual ambient temperature."
          }
        },
        {
          "@type": "Question",
          "name": "Will a higher gear ratio fix insufficient torque under load?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only if the motor has spare speed. A higher ratio divides the reflected load torque by the ratio, but multiplies the motor speed required by the same factor. On fast-cycling, high-inertia loads the gain is smaller than expected, because the motor's own rotor must accelerate faster as the ratio rises. Recalculate both peak and RMS torque at the new ratio before ordering a gearbox."
          }
        },
        {
          "@type": "Question",
          "name": "Is it safe to raise the controller current limit to get more torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It can be, within limits. Available peak torque rises in proportion to the current limit, but heating rises with current squared, and very high current pulses can partially demagnetise the ferrite magnets of a PMDC motor and accelerate brush wear. Stay within the manufacturer's permitted peak current and confirm that the RMS torque of the cycle still sits inside the continuous rating."
          }
        },
        {
          "@type": "Question",
          "name": "When does switching to a BLDC motor make sense for more torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A BLDC motor is worth considering when the load has short, high torque peaks over a modest average, when speed must hold tightly under changing load, or when brush wear is already a maintenance burden. With a matched driver it offers flat torque up to rated speed and a peak capability that is often two to three times continuous torque, as with our BLDC motors ."
          }
        },
        {
          "@type": "Question",
          "name": "What service factor should I use when upsizing a geared motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Apply the service factor to the gearbox rating rather than as a blanket multiplier on every calculation. Typical values run from about 1.0–1.25 for smooth, uniform loads to 1.25–1.5 for moderate shock and 1.75–2.0 for heavy shock or frequent reversing, rising with hours per day and starts per hour. Size the motor itself on RMS torque at 80–90 % of rating and peaks within the current-limited torque."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/",
      "url": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/",
      "name": "Insufficient Motor Torque Under Load? | Globe Scott Motors",
      "description": "Motor insufficient torque under load? Re-measure breakaway, acceleration, peak and RMS torque, then pick the cheapest fix: re-ratio, upsize or move to BLDC.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/#primaryimage"
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
<h1>How to Choose a Motor When Your Machine Cannot Handle the Required Load</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Motor Insufficient Torque: Choosing an Upgrade</li></ol> </nav>
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
<article class="post-2423 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-motor-torque tag-motor-sizing tag-rms-torque tag-geared-motors tag-pmdc-motors tag-globe-scott-motors" id="post-2423">

<img alt="Geared DC motor being re-sized for a machine with insufficient torque under load in an Indian motor manufacturing plant" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/motor-insufficient-torque-under-load-how-to-choose.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Engineering, Troubleshooting</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>On machines that have been in service for a few years, the same entry keeps appearing in the maintenance log: <strong>motor insufficient torque under load</strong>. The drive that indexed, pushed or lifted reliably at commissioning now stalls on the first move of the shift, crawls through acceleration or runs too hot to touch. Often nothing inside the motor has failed. The machine has simply been asked to do more: heavier product, a faster cycle, a new fixture or attachment.</p>

<p>Ordering the next frame size up is the reflex, but it is not always the cheapest fix, or even a sufficient one. A lighter fixture, a different ratio, a revised current limit or a better-matched <a href="/products-geared-motors/">industrial geared motor</a> may close the gap for far less. This guide shows how to re-establish what the machine now demands, read that demand against the motor's torque-speed curve, and choose the upgrade that clears both the peak and the thermal requirement.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> When a machine can no longer handle its load, first confirm the motor itself is healthy. Then re-measure the load at the motor shaft: breakaway, running and acceleration torque (including the motor's own rotor), divided through the gear ratio and efficiency. Plot the resulting peak and RMS torque on the torque-speed curve. The peak must sit inside the intermittent zone and the RMS inside the continuous zone. Then pick the cheapest fix that satisfies both.
</div>

<h2>Step 1: Confirm It Is Insufficient Torque Under Load, Not a Faulty Motor</h2>

<p>A motor that used to handle exactly the same load and now cannot has a degradation problem: weakened magnets, voltage sag, worn brushes or a dragging gearbox. A bigger motor hides that fault rather than fixing it, and the diagnosis belongs to our guide on a <a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC motor losing torque under load</a>. Two quick tests separate the cases:</p>

<ul>
<li><strong>No-load speed and current, decoupled from the machine.</strong> Compare them with the original test sheet at the same voltage. A healthy PMDC motor will be within a few per cent on speed and close on current. A partly demagnetised one runs noticeably <em>faster</em> at no load; high no-load current points to friction or shorted turns.</li>
<li><strong>Terminal voltage under load,</strong> measured at the motor rather than at the controller. A drop of more than about 5 % from nominal points to cabling or supply.</li>
</ul>

<p>If both tests pass, the motor is fine. List everything that has changed since commissioning (product mass, cycle time, fixtures, guarding, incline, lubricant): that list tells you which load term has grown.</p>

<hr/>

<h2>Step 2: Re-Establish the Real Load at the Motor Shaft</h2>

<p>What matters is the torque at the motor shaft in every segment of the cycle, built from four terms. The general formulae are in our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a>; here the emphasis is on measuring them on a machine that already exists.</p>

<h3>1. Breakaway (Static) Torque</h3>

<p>Breakaway torque starts the load from rest. It exceeds running friction because of static friction, cold grease and settled seals. Measure it with a spring balance on a known lever arm, or a dial torque wrench on the output shaft, pulled slowly until the load moves. Repeat after an overnight stand: that is the case that trips machines at shift start.</p>

<h3>2. Running Torque: Friction, Process and Gravity</h3>

<p>Running torque keeps the load moving at steady speed: bearing and guide friction, seals, process forces and any gravity component. The existing motor is a convenient instrument for this term.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Use the motor as a torque transducer. Log the steady current \( I \) under load, subtract the no-load current \( I_0 \) measured decoupled, and multiply by the torque constant: \( T \approx K_t (I - I_0) \). In SI units \( K_t = K_e \), so without a datasheet, \( K_t \approx V/\omega_0 \) from a no-load speed test (slightly high, because brush and resistive drops are ignored).
</div>

<h3>3. Acceleration Torque, Including the Motor's Own Rotor</h3>

<p>Every time the load speeds up, the drive must supply \( T = J\alpha \). Load inertia reaches the motor divided by the square of the gear ratio, but the rotor accelerates at the full motor-side rate, so with high ratios the motor's own inertia can be a large share of the total:</p>

<div class="gsm-equation">\[ T_m = \frac{T_{fr} + J_L\,\alpha_L}{i\,\eta_g} + J_m\,\alpha_L\, i \]</div>

<p>Here \( T_{fr} \) is friction torque at the load, \( J_L \) and \( J_m \) the load and motor inertias, \( \alpha_L \) the load's angular acceleration, \( i \) the gear ratio and \( \eta_g \) the gearbox efficiency. Faster cycles hurt more than heavier parts. For a move through angle \( \theta \) in time \( t \) with a triangular speed profile, acceleration is \( 4\theta/t^2 \) and peak speed \( 2\theta/t \), so:</p>

<div class="gsm-equation">\[ P_{pk} = J\,\alpha\,\omega_{pk} = \frac{8\,J\,\theta^2}{t^3} \]</div>

<p>Cutting a move from 0.6 s to 0.4 s multiplies peak power by \( (0.6/0.4)^3 \approx 3.4 \). Doubling the inertia only doubles it.</p>

<h3>4. Peak and RMS Torque Over the Cycle</h3>

<p>Peak torque decides whether the motor can make the move at all. RMS torque decides whether it survives the shift, because copper loss rises with current squared:</p>

<div class="gsm-equation">\[ T_{rms} = \sqrt{\frac{\sum T_k^2\, t_k}{\sum t_k}} \]</div>

<p>Include dwell time at zero torque in the denominator, but count only part of it if a shaft-mounted fan cools the motor, because the fan stops too. The result is valid when each segment is short compared with the motor's thermal time constant. Transmission losses belong inside every \( T_k \): a worm stage at 60 % efficiency inflates each term by two-thirds.</p>

<hr/>

<h2>Step 3: Read the Load Against the Motor Torque-Speed Curve</h2>

<p>A permanent magnet DC motor has a straight-line torque-speed characteristic at a given voltage, falling from no-load speed to zero at the stall torque \( T_{stall} = K_t V/R_a \). The area under it divides into zones, and each new load point must land in the right one. Our <a href="/products-pmdc-motors/">PMDC motors</a> are dynamometer-tested for torque, speed, current and efficiency, which is exactly the data this step needs.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Zone</th><th>Bounded By</th><th>What May Operate There</th><th>Acceptance Check</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Continuous</strong></td><td>Thermal rating at 40 °C ambient</td><td>The RMS torque of the whole cycle</td><td>RMS ≤ 80–90 % of continuous torque</td></tr>
<tr><td><strong>Intermittent</strong></td><td>Controller current limit, commutation, magnet demagnetisation current</td><td>Short peaks: breakaway, acceleration, process spikes</td><td>Every peak ≤ about 80 % of current-limited torque</td></tr>
<tr><td><strong>Voltage-limited edge</strong></td><td>Supply voltage minus resistive and brush drop</td><td>High torque combined with high speed</td><td>Peak point under the line at minimum supply voltage</td></tr>
<tr><td><strong>Outside</strong></td><td>None</td><td>Nothing: stall, current limit or speed collapse</td><td>Re-ratio, reduce load or change motor</td></tr>
</tbody>
</table>
</div>

<p>The voltage-limited edge is the one most often forgotten. At the end of acceleration the motor needs its highest speed and a high current at the same moment:</p>

<div class="gsm-equation">\[ V_{min} \ge K_e\,\omega_{pk} + I_{pk}\,R_a + V_{b} \]</div>

<p>BLDC motors behave differently: torque is roughly flat up to rated speed, and the driver's current limit sets a peak often two to three times the continuous value. Our <a href="/products-bldc-motors/">BLDC motors</a> in the G-BLDC 57/80 series, for example, are rated up to 1.30 Nm continuous with 3.8 Nm peak.</p>

<hr/>

<h2>Step 4: Choose the Cheapest Effective Upgrade</h2>

<p>Read across from what your numbers show. The worked example below follows one path through this table.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>If the Numbers Show</th><th>Cheapest Effective Fix</th><th>Why It Works</th><th>Watch Out For</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Peak short by under ~20 %, RMS within rating</strong></td><td>Raise the current limit or lengthen the acceleration ramp</td><td>The shortfall is a setting, not a thermal limit</td><td>Motor's permitted peak current; brush wear</td></tr>
<tr><td><strong>Acceleration terms dominate</strong></td><td>Lighter fixtures, smaller pulleys or a smoother motion profile</td><td>Acceleration torque scales with \( J \) and with \( 1/t^2 \)</td><td>Cycle-time target; stiffness of lighter parts</td></tr>
<tr><td><strong>Torque short, but motor has speed headroom</strong></td><td>Higher gear ratio</td><td>Reflected load torque falls with \( i \)</td><td>Rotor term rises with \( i \); optimum near \( \sqrt{J_L/J_m} \)</td></tr>
<tr><td><strong>Speed collapses at torque; RMS fine</strong></td><td>Higher-voltage winding and supply</td><td>Pushes the voltage-limited edge outward</td><td>Does not raise continuous torque</td></tr>
<tr><td><strong>RMS above continuous rating</strong></td><td>Larger frame or geared motor</td><td>Only more copper, iron and surface raise the thermal limit</td><td>New rotor inertia; gearbox and mounting</td></tr>
<tr><td><strong>High peaks over a modest RMS, or tight speed control</strong></td><td>BLDC motor with matched driver</td><td>High peak-to-continuous ratio, flat torque</td><td>Driver set-up; feedback wiring</td></tr>
</tbody>
</table>
</div>

<p>If the shortfall pushes you towards very low output speeds, our guide to the <a href="/blog/high-torque-low-speed-dc-motor-selection/">high torque low speed DC motor</a> covers gear-type choice. For a new machine rather than a rescue, the specification-stage discipline is in our guide to avoiding <a href="/blog/undersized-motor-problems-how-to-avoid/">undersized motor problems</a>.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Machine Load Growth Motor Re-Sizing Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable six-step worksheet to confirm motor health, measure breakaway, running and acceleration torque, calculate peak and RMS at the motor shaft, and choose the cheapest effective upgrade.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Rotary Index Table After a Fixture Upgrade</h2>

<p>An illustrative six-station assembly machine indexes a rotary table 60° (1.047 rad) through a 30:1 parallel-shaft gearbox (\( \eta_g = 0.90 \)). The 24 V PMDC motor has 0.40 Nm continuous rating, \( K_t = 0.07\,\mathrm{Nm/A} \), rotor inertia \( 2.0 \times 10^{-4}\,\mathrm{kg\,m^2} \), and a 15 A controller limit giving about 1.0 Nm. The original cycle was a 0.6 s index plus 1.2 s dwell. An upgrade fitted heavier fixtures and cut it to 0.4 s plus 0.8 s. Now the table stalls on the first index of the morning and the motor runs hot.</p>

<h4>Measure</h4>
<ul>
<li><strong>Friction:</strong> a spring balance on a 300 mm arm at the table shaft reads 15 N to break away after an overnight stand and 10 N to keep turning, so \( T_{bk} = 4.5\,\mathrm{Nm} \) and \( T_{fr} = 3.0\,\mathrm{Nm} \).</li>
<li><strong>Inertia from CAD masses:</strong> aluminium plate, 7.95 kg at 0.25 m radius: \( 0.5 \times 7.95 \times 0.25^2 = 0.25\,\mathrm{kg\,m^2} \). Six new 2.5 kg fixtures at 0.20 m: \( 6 \times 2.5 \times 0.20^2 = 0.60\,\mathrm{kg\,m^2} \). Total \( J_L = 0.85\,\mathrm{kg\,m^2} \), against 0.49 with the old 1 kg fixtures.</li>
<li><strong>Current log:</strong> during a failed index the controller sits on its 15 A limit for most of the acceleration: a torque shortfall, not a fault.</li>
</ul>

<h4>Calculate</h4>
<p>The new move needs \( \alpha_L = 4 \times 1.047/0.4^2 = 26.2\,\mathrm{rad/s^2} \) and peaks at 50 rpm at the table (1,500 rpm at the motor). Load acceleration torque is \( 0.85 \times 26.2 = 22.3\,\mathrm{Nm} \); with \( i\,\eta_g = 27 \), the rotor term is \( 2.0 \times 10^{-4} \times 26.2 \times 30 = 0.157\,\mathrm{Nm} \):</p>

<div class="gsm-equation">\[ T_{pk} = \frac{4.5 + 22.3}{27} + 0.157 = 1.15\,\mathrm{Nm}, \qquad T_{acc} = \frac{3.0 + 22.3}{27} + 0.157 = 1.09\,\mathrm{Nm} \]</div>

<p>Deceleration, with friction helping and the same \( i\,\eta_g \) applied conservatively, needs \( (22.3 - 3.0)/27 + 0.157 = 0.87\,\mathrm{Nm} \). Over 0.2 s accelerating, 0.2 s decelerating and 0.8 s dwell, counted in full because this motor has no shaft fan:</p>

<div class="gsm-equation">\[ T_{rms} = \sqrt{\frac{1.09^2 \times 0.2 + 0.87^2 \times 0.2}{1.2}} = 0.57\,\mathrm{Nm} \]</div>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Quantity</th><th>Original Cycle</th><th>Upgraded Cycle</th><th>Existing Motor Limit</th></tr>
</thead>
<tbody>
<tr><td><strong>Load inertia</strong></td><td>0.49 kg·m²</td><td>0.85 kg·m²</td><td>–</td></tr>
<tr><td><strong>Index / dwell</strong></td><td>0.6 s / 1.2 s</td><td>0.4 s / 0.8 s</td><td>–</td></tr>
<tr><td><strong>Motor speed at peak</strong></td><td>1,000 rpm</td><td>1,500 rpm</td><td>Within curve</td></tr>
<tr><td><strong>Peak torque at motor</strong></td><td>0.45 Nm</td><td>1.15 Nm</td><td>≈ 1.0 Nm at 15 A</td></tr>
<tr><td><strong>RMS torque at motor</strong></td><td>0.17 Nm</td><td>0.57 Nm</td><td>0.40 Nm continuous</td></tr>
</tbody>
</table>
</div>

<h4>Select</h4>
<ul>
<li><strong>Raise the current limit only:</strong> the peak would pass, but RMS at 143 % of rating would not, and pulses far above rated current risk demagnetising ferrite magnets.</li>
<li><strong>Re-ratio to 36:1:</strong> peak falls only to about 1.01 Nm and RMS to 0.51 Nm, because the rotor term grows with the ratio. Not enough.</li>
<li><strong>Larger PMDC geared motor:</strong> a candidate with 0.80 Nm continuous, \( K_t = 0.11\,\mathrm{Nm/A} \), \( R_a = 0.25\,\Omega \) and rotor inertia \( 4.5 \times 10^{-4}\,\mathrm{kg\,m^2} \). Recalculated, peak is 1.34 Nm and RMS 0.68 Nm: 85 % of continuous rating, and 80 % of the 1.67 Nm that a 16 A limit delivers after its 0.8 A no-load current. At the end of acceleration: \( 0.11 \times 157 + 12.5 \times 0.25 + 1.0 \approx 21.4\,\mathrm{V} \), inside 24 V with about 10 % to spare.</li>
</ul>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Upsizing changes the problem. Put the new rotor inertia back into the calculation: here the heavier rotor added 0.20 Nm to every acceleration and deceleration, half the original motor's entire continuous rating.
</div>

<p>The decision is the larger geared motor, a roughly 150 W frame in place of the original 100 W unit, which sits within our A80/A92 geared families with a 30:1 ratio. The gearbox must also be checked against the 27 Nm table-side peak, as our guide to <a href="/blog/motor-gearbox-sizing-problems-output/">motor gearbox sizing problems</a> explains.</p>

<hr/>

<h2>Validate the Upgrade on the Machine</h2>

<p>Calculations get you to a shortlist; the machine has the final word. After installation:</p>

<ul>
<li>Log current over a full shift: RMS at or below about 85 % of rated current, with the peak touching the current limit only briefly, if at all.</li>
<li>Repeat the overnight breakaway test on the first index of the morning, the case that failed before.</li>
<li>Let the frame temperature stabilise over two to three hours and confirm it settles with margin at the hottest expected ambient.</li>
<li>Record the new no-load speed and current as the baseline for future diagnosis.</li>
</ul>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How can I tell whether my motor is too small for the load or simply faulty?</h3>
<p>Test the motor decoupled from the machine. If its no-load speed and current match the original test sheet at the same voltage, and terminal voltage holds up under load, the motor is healthy and the load has outgrown it. A faulty PMDC motor usually shows higher no-load speed (weakened magnets) or high no-load current (friction or shorted turns); a large terminal voltage drop points to cabling or supply instead.</p>

<h3>Q2. How do I calculate the torque my machine actually needs?</h3>
<p>Add the torque components at the load for each part of the cycle: breakaway or running friction, process and gravity torque, and acceleration torque (inertia × angular acceleration). Divide by gear ratio × gearbox efficiency to refer them to the motor shaft, then add the torque to accelerate the motor's own rotor. The largest value is the peak requirement; the RMS over the whole cycle is the thermal one.</p>

<h3>Q3. What is RMS torque and why does it matter for motor sizing?</h3>
<p>RMS torque is the steady torque that would heat the motor as much as the real, varying cycle does. Because copper loss rises with current squared and torque is proportional to current, square each torque, weight it by its duration, average over the full cycle including dwells, and take the square root. The result must stay below the continuous rating at the actual ambient temperature.</p>

<h3>Q4. Will a higher gear ratio fix insufficient torque under load?</h3>
<p>Only if the motor has spare speed. A higher ratio divides the reflected load torque by the ratio, but multiplies the motor speed required by the same factor. On fast-cycling, high-inertia loads the gain is smaller than expected, because the motor's own rotor must accelerate faster as the ratio rises. Recalculate both peak and RMS torque at the new ratio before ordering a gearbox.</p>

<h3>Q5. Is it safe to raise the controller current limit to get more torque?</h3>
<p>It can be, within limits. Available peak torque rises in proportion to the current limit, but heating rises with current squared, and very high current pulses can partially demagnetise the ferrite magnets of a PMDC motor and accelerate brush wear. Stay within the manufacturer's permitted peak current and confirm that the RMS torque of the cycle still sits inside the continuous rating.</p>

<h3>Q6. When does switching to a BLDC motor make sense for more torque?</h3>
<p>A BLDC motor is worth considering when the load has short, high torque peaks over a modest average, when speed must hold tightly under changing load, or when brush wear is already a maintenance burden. With a matched driver it offers flat torque up to rated speed and a peak capability that is often two to three times continuous torque, as with our <a href="/products-bldc-motors/">BLDC motors</a>.</p>

<h3>Q7. What service factor should I use when upsizing a geared motor?</h3>
<p>Apply the service factor to the gearbox rating rather than as a blanket multiplier on every calculation. Typical values run from about 1.0–1.25 for smooth, uniform loads to 1.25–1.5 for moderate shock and 1.75–2.0 for heavy shock or frequent reversing, rising with hours per day and starts per hour. Size the motor itself on RMS torque at 80–90 % of rating and peaks within the current-limited torque.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>When a machine outgrows its drive, start with numbers rather than catalogues. Confirm the motor is healthy, measure breakaway, running and acceleration torque at the motor shaft, check peak and RMS against the torque-speed curve, and choose the cheapest change that clears both with margin. Then re-check, because a bigger motor brings a bigger rotor.</p>

<p>Share your measured friction, inertia, cycle times and current logs through our <a href="/contact-us/">engineering enquiry page</a>, and our engineers will review the options with you, from a ratio change to a larger PMDC, geared or BLDC drive.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Has Your Machine Outgrown Its Motor?</strong></h3>
<p style="margin-bottom: 0;">Share your measured breakaway and running torque, load inertia, cycle times, supply voltage and current logs with our engineers. We will help you compare a ratio change, a larger PMDC or geared motor, or a BLDC drive, and check peak, RMS and gearbox margins.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Motor Torque, Motor Sizing, RMS Torque, Geared Motors, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/dc-motor-not-starting-troubleshooting-guide/">
<h4 class="post-title">Why Does a DC Motor Fail to Start? A Troubleshooting Guide</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/conveyor-motor-overload-heavy-loads/">
<h4 class="post-title">Why Does Your Conveyor Motor Struggle to Move Heavy Loads?</h4>
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
<li><a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC Motor Losing Torque Under Load: Causes &amp; Fixes</a></li>
<li><a href="/blog/undersized-motor-problems-how-to-avoid/">How to Avoid Choosing an Undersized Motor</a></li>
<li><a href="/blog/motor-gearbox-sizing-problems-output/">Motor and Gearbox Sizing Problems</a></li>
<li><a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">Motor Torque and Speed Calculation Guide</a></li>
<li><a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">Geared PMDC Motors: Gear Ratio &amp; Torque Selection</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">Machine Load Growth Motor Re-Sizing Worksheet</h3>
          <p class="gsm-modal-subtitle">A measured, step-by-step method for re-sizing a drive when heavier parts, faster cycles or new attachments have outgrown the original motor.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Health Check First:</strong> Separate a faulty motor from a machine that has outgrown it</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Peak and RMS Method:</strong> Motor-shaft torque per segment, including rotor inertia and gear losses</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Upgrade Decision Guide:</strong> Match the shortfall to ratio, current limit, frame or BLDC</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Motor Insufficient Torque: Choosing an Upgrade Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Machine Load Growth Motor Re-Sizing Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/motor-insufficient-torque-under-load-how-to-choose/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Re-Sizing Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Machine Load Growth Motor Re-Sizing Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/machine-load-growth-motor-resizing-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
