<?php
$current_page     = 'motor-gearbox-sizing-problems-output';
$canonical_path   = 'blog/motor-gearbox-sizing-problems-output/';
$page_title       = 'Motor Gearbox Sizing Problems & Fixes | Globe Scott Motors';
$meta_description = 'Motor gearbox sizing problems explained: gearbox efficiency, speed droop, stall torque vs gearbox rating, service factor, reflected inertia, heat and the fixes.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/motor-gearbox-sizing-problems-output.jpg';
$body_class       = 'post-template-default single single-post postid-2430 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/"
      },
      "headline": "Why Does Your Motor and Gearbox Combination Fail to Deliver the Required Output?",
      "name": "Why Does Your Motor and Gearbox Combination Fail to Deliver the Required Output?",
      "description": "Motor gearbox sizing problems explained: gearbox efficiency, speed droop, stall torque vs gearbox rating, service factor, reflected inertia, heat and the fixes.",
      "url": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Gearboxes, Drive Engineering",
      "keywords": "motor gearbox sizing problems, gearbox efficiency, gear motor service factor, reflected inertia, gearbox torque rating, output torque calculation, worm gear efficiency",
      "wordCount": 2303,
      "image": {
        "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/motor-gearbox-sizing-problems-output.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/motor-gearbox-sizing-problems-output.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Checking a motor and gearbox combination for efficiency, peak torque, thermal and shaft-load sizing problems."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#breadcrumb",
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
          "name": "Motor & Gearbox Sizing Problems",
          "item": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do you calculate the output torque of a motor and gearbox?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multiply motor torque by the gear ratio and the gearbox efficiency: T_out = T_m × i × η. A motor delivering 0.4 Nm through a 30:1 gearbox at 90 % efficiency gives 0.4 × 30 × 0.9 = 10.8 Nm. Use the efficiency at your real load and temperature rather than the best catalogue figure, and use the lower starting efficiency when checking breakaway, especially for worm gearboxes."
          }
        },
        {
          "@type": "Question",
          "name": "Why is my worm gear motor weaker than the calculation says?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Worm gear efficiency depends strongly on lead angle and friction, so a single-start, high-ratio worm may run at only 40–60 % efficiency instead of the 80–90 % often assumed, and static friction lowers it further at start-up. The motor must supply more torque, so it slows down, draws more current and may reach the controller's current limit before the load breaks away."
          }
        },
        {
          "@type": "Question",
          "name": "Can a motor damage its own gearbox?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A PMDC motor's stall torque is typically several times its rated torque, and at a jam the gearbox output sees that stall torque multiplied by the ratio and efficiency. If the result exceeds the gearbox's peak rating, teeth, keys or shafts can fail. Set the controller current limit so the reflected torque stays within the peak rating, or fit a slip clutch."
          }
        },
        {
          "@type": "Question",
          "name": "What service factor should I use for a geared motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typical values are 1.0–1.25 for smooth, uniform loads such as light conveyors, 1.25–1.5 for moderate shock such as indexing tables and mixers, and 1.75–2.0 for heavy shock or frequent reversing. Multiply the load torque by the factor and compare it with the gearbox's continuous rating, increasing it for long daily running hours or many starts per hour as the gearbox maker's tables advise."
          }
        },
        {
          "@type": "Question",
          "name": "What is reflected inertia in a geared drive?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Reflected inertia is the load inertia as the motor feels it through the gearbox: the load inertia divided by the square of the ratio. A 0.5 kg·m² load behind a 50:1 gearbox looks like 0.0002 kg·m² at the motor. The reverse also applies, because rotor inertia appears multiplied by the ratio squared at the output, which governs stopping shocks and acceleration time."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my gearbox output speed drop under load?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A PMDC motor's speed falls almost linearly as its torque rises, and gearbox losses add to that torque. If the gearbox is less efficient than assumed, the motor runs further down its speed–torque line and the output slows even though the ratio is correct. Hot windings and supply voltage sag deepen the droop, so measure current and terminal voltage under load."
          }
        },
        {
          "@type": "Question",
          "name": "Should I upsize the motor or the gearbox?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Upsize whichever component is exceeding its rating. If the motor draws more than rated current continuously or overheats, the motor or the gear efficiency is the limit. If gear teeth, bearings, seals or housing temperature are failing while the motor runs comfortably, upsize or change the gearbox. Often the cheapest fix is a more efficient gear type, which relieves both components."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/",
      "url": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/",
      "name": "Motor Gearbox Sizing Problems & Fixes | Globe Scott Motors",
      "description": "Motor gearbox sizing problems explained: gearbox efficiency, speed droop, stall torque vs gearbox rating, service factor, reflected inertia, heat and the fixes.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/#primaryimage"
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
<h1>Why Does Your Motor and Gearbox Combination Fail to Deliver the Required Output?</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Motor &amp; Gearbox Sizing Problems</li></ol> </nav>
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
<article class="post-2430 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-motor-gearbox-sizing tag-gearbox-efficiency tag-geared-motors tag-service-factor tag-reflected-inertia tag-globe-scott-motors" id="post-2430">

<img alt="Geared PMDC motor and gearbox on a test bench being checked for motor gearbox sizing problems and output torque" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/motor-gearbox-sizing-problems-output.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Engineering, Selection, Troubleshooting</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A geared drive can look correct on paper, with motor power above load power and a ratio matched to the required speed, yet still fall short on the machine. The output turns slower than specified, stalls on a cold morning, runs hot or strips a gear the first time the load jams. Most of these failures are not a bad motor or a bad gearbox but <strong>motor gearbox sizing problems</strong>: two components, each adequate on its own, combined on the wrong assumptions about efficiency, speed, peak torque, inertia, heat or shaft loading.</p>

<p>This guide examines the mismatch itself. If the ratio is your open question, our sibling guide to <a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">DC motor gear ratio selection</a> covers it. Here we focus on why a motor and gearbox pairing, such as our <a href="/products-geared-motors/">industrial geared motors</a> with standard ratios from 9:1 to 80:1, delivers less than the calculation promised, and how to prove which assumption failed.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> A motor and gearbox combination under-delivers when the design relies on figures the hardware cannot meet. The usual culprits are gearbox efficiency below the assumed value (especially worm gears at start-up), motor speed droop under the real load, a gearbox rated below the motor's stall torque multiplied by the ratio, ignored service factors, reflected inertia, gearbox thermal limits and excessive overhung load. Measure current, voltage, speed and temperature, then recheck each assumption.
</div>

<h2>How Torque, Speed and Losses Flow Through a Geared Drive</h2>

<p>Every geared drive obeys two simple relations between motor and output:</p>

<div class="gsm-equation">\[ T_{out} = T_m \cdot i \cdot \eta_g, \qquad N_{out} = \frac{N_m}{i} \]</div>

<p>The catch is that none of the inputs is fixed. Gear efficiency \( \eta_g \) varies with gear type, ratio, load, temperature and whether the drive is starting or running. A PMDC motor's speed depends on its torque, falling almost linearly from no-load speed \( N_0 \) to zero at stall torque:</p>

<div class="gsm-equation">\[ N_m = N_0\left(1 - \frac{T_m}{T_{stall}}\right) \]</div>

<p>So any torque the gearbox wastes is torque the motor must add, which lowers its speed and raises its current. And the gearbox has its own continuous, peak, thermal and shaft-load ratings that are independent of the motor's. Our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a> covers the underlying load calculations; the seven problems below are where combinations go wrong.</p>

<hr/>

<h2>Seven Motor Gearbox Sizing Problems That Starve the Output</h2>

<h3>1. Assuming a Gearbox Efficiency the Hardware Cannot Achieve</h3>

<p>A well-made spur or helical mesh transmits about 95–98 % of its input per stage, but small grease-filled gearheads with bushes and seals measure lower, and their efficiency falls sharply at light load because seal drag and grease churning are roughly fixed losses. Worm gears are far more variable. Neglecting the pressure angle:</p>

<div class="gsm-equation">\[ \eta_{worm} \approx \frac{\tan\lambda}{\tan(\lambda + \phi)}, \qquad \phi = \arctan\mu \]</div>

<p>where \( \lambda \) is the lead angle and \( \mu \) the friction coefficient. A single-start, high-ratio worm with \( \lambda = 4^\circ \) and running friction \( \mu = 0.05 \) gives about 58 %; a multi-start worm with \( \lambda = 20^\circ \) reaches about 86 %. At start-up, static friction near \( \mu = 0.10 \) drops the 4° worm to about 41 %, and cold grease lowers it further. Use running efficiency for continuous checks and starting efficiency for breakaway.</p>

<h3>2. Ignoring Motor Speed Droop Under the Real Load</h3>

<p>If losses are higher than assumed, the motor runs further down its speed–torque line and the output is slow even though the ratio is right. Hot windings make it worse: copper resistance rises about 0.393 % per °C, increasing droop, while ferrite magnets lose roughly 0.2 % of flux per °C, reducing torque per amp. Field symptoms are covered in our guide to a <a href="/blog/dc-motor-running-slow-causes-troubleshooting/">DC motor running slow</a>.</p>

<h3>3. A Gearbox Rated Below the Motor's Stall Torque Times the Ratio</h3>

<p>A PMDC motor's stall torque is typically several times its rated torque. When the load jams, the gearbox output sees that stall torque multiplied by ratio and efficiency, plus the kinetic energy of the decelerating rotor. If this exceeds the gearbox's peak rating, teeth, keys or shafts fail. The controller's current limit is the cheapest protection:</p>

<div class="gsm-equation">\[ I_{limit} \le I_0 + \frac{T_{out,peak}}{K_t \cdot i \cdot \eta_g} \]</div>

<p>where \( I_0 \) is no-load current and \( K_t \) the torque constant. Where a hard limit would block legitimate breakaway, a slip clutch does the job mechanically; our <a href="/products-railway-signalling-products/">railway electric lifting barriers</a> include a self-resetting friction clutch that protects the motor. A motor-mounted brake is multiplied by the ratio in the same way when it stops the load.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
If motor stall torque × ratio × efficiency exceeds the gearbox's peak rating, a current limit or slip clutch is not optional. Removing a "nuisance" current limit to cure a starting problem is a common way to break a gearbox.
</div>

<h3>4. Ignoring the Service Factor for Shock and Duty</h3>

<p>Catalogue gearbox ratings assume uniform load and a stated running time. Shock loads, reversing and frequent starts demand that the load torque be multiplied by a service factor, typically 1.0–1.25 for uniform loads up to 1.75–2.0 for heavy shock, before comparison with the gearbox rating. Our guide to <a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">custom geared PMDC motor torque selection</a> lists these factors.</p>

<h3>5. Overlooking Reflected Inertia and Stopping Energy</h3>

<p>The motor feels the load inertia divided by \( i^2 \), but the output feels the rotor inertia multiplied by \( i^2 \): a 3 × 10<sup>-4</sup> kg·m² rotor behind a 60:1 gearbox looks like 1.08 kg·m² at the output. The motor torque during acceleration is:</p>

<div class="gsm-equation">\[ T_m = \left(J_m + \frac{J_{load}}{i^2 \eta_g}\right)\alpha_m + \frac{T_{load}}{i \cdot \eta_g} \]</div>

<p>High ratios therefore lengthen acceleration and make hard stops or end-of-travel impacts discharge the rotor's energy through the teeth. Backlash adds impact on every load reversal.</p>

<h3>6. Exceeding the Gearbox's Thermal Capacity</h3>

<p>Gearbox losses become housing heat:</p>

<div class="gsm-equation">\[ \Delta T_g = P_{in}\,(1 - \eta_g) \cdot R_{th} \]</div>

<p>A worm gearbox at 60 % efficiency with 200 W input dissipates 80 W; with a housing thermal resistance of 0.5 K/W that is a 40 K rise, or 85 °C in a 45 °C Indian summer. Grease oxidises, seals harden and efficiency falls further. Many worm units are thermally limited in continuous duty well before their mechanical rating.</p>

<h3>7. Overloading the Output Shaft With Overhung and Axial Loads</h3>

<p>A sprocket, pulley or pinion on the output shaft imposes a radial load:</p>

<div class="gsm-equation">\[ F_r = \frac{2\,T_{out}}{d} \cdot f_z \]</div>

<p>where \( d \) is the pitch diameter and \( f_z \) a transmission factor, around 1.0 for chain sprockets and higher for pre-tensioned belts; use your gearbox maker's values. At 40 Nm, an 80 mm sprocket gives 1,000 N, but a 50 mm sprocket gives 1,600 N, and mounting it further from the housing raises the bearing load again. Helical and worm gears and screw-driven loads add axial thrust. Overloaded output shafts show up as bearing rumble, as covered in our guide to a <a href="/blog/geared-motor-making-noise-causes-diagnosis-solutions/">geared motor making noise</a>, followed by seal leaks.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Motor and Gearbox Matching Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">An engineering checklist covering efficiency verification, the motor operating point, gearbox peak torque against motor stall, service factor, thermal capacity, overhung load and commissioning measurements.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: A 60:1 Worm Drive That Would Not Start</h2>

<p>A mixer needs 20 Nm at 50 rpm running and 26 Nm to break away. The designer chose a 24 V PMDC motor rated 0.40 Nm at 3,000 rpm (no-load speed 3,400 rpm, stall torque 3.4 Nm, \( K_t = 0.064\,\mathrm{Nm/A} \), no-load current 0.6 A, rated current 6.85 A), a single-start 60:1 worm gearbox rated 25 Nm continuous and 50 Nm peak, and a controller limited to 10 A. Assuming 85 % efficiency:</p>

<div class="gsm-equation">\[ T_m = \frac{20}{60 \times 0.85} = 0.392\,\mathrm{Nm} \]</div>

<p>That is 98 % of rated torque, already tight. With the worm's real running efficiency of 0.58, the motor needs \( 20/(60 \times 0.58) = 0.575\,\mathrm{Nm} \), so it slows to \( 3400(1 - 0.575/3.4) \approx 2825\,\mathrm{rpm} \), giving 47.1 rpm at the output, and draws \( 0.6 + 0.575/0.064 \approx 9.58\,\mathrm{A} \), about 1.96 times the rated copper loss. At breakaway, with starting efficiency 0.41, the motor needs 1.06 Nm, or 17.1 A. The 10 A limit allows only \( (10 - 0.6) \times 0.064 = 0.602\,\mathrm{Nm} \), which delivers \( 0.602 \times 60 \times 0.41 = 14.8\,\mathrm{Nm} \) at the output, well short of 26 Nm, so the mixer will not start.</p>

<p>Removing the current limit would be worse: at a jam, \( 3.4 \times 60 \) multiplied by 0.41–0.58 gives 84–118 Nm, 1.7 to 2.4 times the 50 Nm peak rating. Replacing the worm with a two-stage helical gearbox of the same rating at about 0.92 running efficiency (0.90 at breakaway) resolves every problem:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Parameter</th><th>Design Assumption (η 0.85)</th><th>Actual Worm (η 0.58 / 0.41)</th><th>Two-Stage Helical (η 0.92 / 0.90)</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Motor torque, running</strong></td><td>0.392 Nm (98 % of rated)</td><td>0.575 Nm (144 %)</td><td>0.362 Nm (91 %)</td></tr>
<tr><td><strong>Motor current, running</strong></td><td>6.7 A</td><td>9.58 A</td><td>6.3 A</td></tr>
<tr><td><strong>Output speed</strong></td><td>50.1 rpm</td><td>47.1 rpm</td><td>50.6 rpm</td></tr>
<tr><td><strong>Breakaway current for 26 Nm</strong></td><td>Not checked</td><td>17.1 A (limit 10 A: no start)</td><td>8.1 A</td></tr>
<tr><td><strong>Maximum output torque at 10 A</strong></td><td>Not checked</td><td>14.8 Nm at start</td><td>33.2 Nm, within 50 Nm peak</td></tr>
</tbody>
</table>
</div>

<p>If the worm was chosen for self-locking or a right-angle output, keep those functions another way, for example with an electromagnetic holding brake, rather than accepting a drive that cannot start.</p>

<hr/>

<h2>Motor–Gearbox Mismatch Diagnostic Matrix</h2>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Observed Symptom</th><th>Most Likely Mismatch</th><th>Verification Check</th><th>Corrective Action</th></tr>
</thead>
<tbody>
<tr><td><strong>Output 5–10 % slow; current above rated</strong></td><td>Gear efficiency below assumption; speed droop</td><td>Measure current, terminal voltage and output speed; back-calculate efficiency</td><td>More efficient gear type or larger motor</td></tr>
<tr><td><strong>Will not start when cold; runs once moving</strong></td><td>Low starting efficiency against current limit</td><td>Breakaway current versus controller limit</td><td>Efficient gearing; short-time limit within gearbox peak</td></tr>
<tr><td><strong>Broken teeth or sheared key after a jam</strong></td><td>Stall torque × ratio × efficiency above gearbox peak</td><td>Calculate reflected stall torque</td><td>Current limit, slip clutch or larger gearbox</td></tr>
<tr><td><strong>Gearbox far hotter than motor</strong></td><td>Thermal capacity exceeded, often worm</td><td>Housing temperature after stabilisation</td><td>Higher-efficiency gearing or larger housing</td></tr>
<tr><td><strong>Output bearing or seal failures</strong></td><td>Overhung or axial load too high</td><td>Radial load at actual sprocket position</td><td>Larger sprocket, closer mounting, outboard bearing</td></tr>
<tr><td><strong>Slow acceleration; damage at end stops</strong></td><td>Reflected inertia and rotor energy</td><td>Current trace during acceleration and stopping</td><td>Ramps, soft end stops, ratio review</td></tr>
<tr><td><strong>Teeth fail after months of shock loading</strong></td><td>Service factor ignored</td><td>Gearbox rating versus load × service factor</td><td>Larger gearbox frame</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Fixing the Mismatch: Change the Right Component</h2>

<p>Work from the cheapest change to the most expensive. Correct the controller current limit and acceleration ramps first. Then fix the gear type: replacing a low-lead-angle worm with helical or planetary gearing, or a multi-start worm, often cures speed, current, starting and heat at once. If the speed target itself is wrong, revisit the ratio. Upsize the gearbox when teeth, bearings or housing temperature are the limit while the motor runs comfortably; upsize the motor, for example within our <a href="/products-pmdc-motors/">PMDC motor range from 15 W to 1,500 W</a>, when continuous current or winding temperature is the limit. For heavy traction duties, our <a href="/products-pmdc-geared-motors/">PMDC geared motors</a> pair the motor with steel parallel-exit gears and AISI 303 axles up to 20 mm, and very low output speeds are covered in our guide to selecting a <a href="/blog/high-torque-low-speed-dc-motor-selection/">high torque low speed DC motor</a>.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Ask for five figures on every geared motor datasheet: continuous and peak output torque; efficiency at rated load, and at start for worm units; thermal rating; permissible overhung load and its position; and backlash. A combination checked against all five rarely surprises you on commissioning.
</div>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How do you calculate the output torque of a motor and gearbox?</h3>
<p>Multiply motor torque by the gear ratio and the gearbox efficiency: T_out = T_m × i × η. A motor delivering 0.4 Nm through a 30:1 gearbox at 90 % efficiency gives 0.4 × 30 × 0.9 = 10.8 Nm. Use the efficiency at your real load and temperature rather than the best catalogue figure, and use the lower starting efficiency when checking breakaway, especially for worm gearboxes.</p>

<h3>Q2. Why is my worm gear motor weaker than the calculation says?</h3>
<p>Worm gear efficiency depends strongly on lead angle and friction, so a single-start, high-ratio worm may run at only 40–60 % efficiency instead of the 80–90 % often assumed, and static friction lowers it further at start-up. The motor must supply more torque, so it slows down, draws more current and may reach the controller's current limit before the load breaks away.</p>

<h3>Q3. Can a motor damage its own gearbox?</h3>
<p>Yes. A PMDC motor's stall torque is typically several times its rated torque, and at a jam the gearbox output sees that stall torque multiplied by the ratio and efficiency. If the result exceeds the gearbox's peak rating, teeth, keys or shafts can fail. Set the controller current limit so the reflected torque stays within the peak rating, or fit a slip clutch.</p>

<h3>Q4. What service factor should I use for a geared motor?</h3>
<p>Typical values are 1.0–1.25 for smooth, uniform loads such as light conveyors, 1.25–1.5 for moderate shock such as indexing tables and mixers, and 1.75–2.0 for heavy shock or frequent reversing. Multiply the load torque by the factor and compare it with the gearbox's continuous rating, increasing it for long daily running hours or many starts per hour as the gearbox maker's tables advise.</p>

<h3>Q5. What is reflected inertia in a geared drive?</h3>
<p>Reflected inertia is the load inertia as the motor feels it through the gearbox: the load inertia divided by the square of the ratio. A 0.5 kg·m² load behind a 50:1 gearbox looks like 0.0002 kg·m² at the motor. The reverse also applies, because rotor inertia appears multiplied by the ratio squared at the output, which governs stopping shocks and acceleration time.</p>

<h3>Q6. Why does my gearbox output speed drop under load?</h3>
<p>A PMDC motor's speed falls almost linearly as its torque rises, and gearbox losses add to that torque. If the gearbox is less efficient than assumed, the motor runs further down its speed–torque line and the output slows even though the ratio is correct. Hot windings and supply voltage sag deepen the droop, so measure current and terminal voltage under load.</p>

<h3>Q7. Should I upsize the motor or the gearbox?</h3>
<p>Upsize whichever component is exceeding its rating. If the motor draws more than rated current continuously or overheats, the motor or the gear efficiency is the limit. If gear teeth, bearings, seals or housing temperature are failing while the motor runs comfortably, upsize or change the gearbox. Often the cheapest fix is a more efficient gear type, which relieves both components.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>When a motor and gearbox combination fails to deliver, the cause is almost always an assumption: an optimistic efficiency, a speed read at no load, a gearbox rating compared with rated rather than stall torque, or a thermal or shaft-load limit that was never checked. Measure the real operating point, recalculate with honest figures, and the right fix usually becomes obvious.</p>

<p>If you would like a second opinion on a geared drive that is falling short, <a href="/contact-us/">contact our engineering team</a> with the load, breakaway torque, speed, duty and shaft-load details.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is Your Geared Drive Falling Short of Its Required Output?</strong></h3>
<p style="margin-bottom: 0;">Send us the running and breakaway torque, output speed, duty cycle, supply voltage and shaft-load arrangement. Our engineers will check the motor operating point, gear efficiency, peak torque and thermal limits together and recommend a matched Globe Scott geared motor for your machine.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Motor Gearbox Sizing, Gearbox Efficiency, Geared Motors, Service Factor, Reflected Inertia, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/industrial-cleaning-machine-motor-problems-failures/">
<h4 class="post-title">How to Reduce Frequent Motor Failures in Industrial Cleaning Machines</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/compact-dc-motor-selection-limited-space/">
<h4 class="post-title">How to Choose the Right DC Motor When Space Inside Your Machine Is Limited</h4>
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
<li><a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">Gear Ratio Selection When Motor Speed Is Too High</a></li>
<li><a href="/blog/high-torque-low-speed-dc-motor-selection/">High Torque Low Speed DC Motor Selection</a></li>
<li><a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">Custom Geared PMDC Motors: Ratio and Torque</a></li>
<li><a href="/blog/geared-motor-vs-standard-dc-motor-key-differences/">Geared Motor vs Standard DC Motor</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">Motor and Gearbox Matching Checklist</h3>
          <p class="gsm-modal-subtitle">Check every motor and gearbox pairing against seven common sizing errors before you order samples or commission a machine.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Seven-Point Match Check:</strong> Efficiency, droop, peak torque, inertia, heat and shaft loads</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Current-Limit Formula:</strong> Set a controller limit that protects the gearbox teeth</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Commissioning Tests:</strong> Measurements that prove the drive delivers its required output</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Motor &amp; Gearbox Sizing Problems Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Motor and Gearbox Matching Checklist">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/motor-gearbox-sizing-problems-output/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Matching Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Motor and Gearbox Matching Checklist immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/motor-gearbox-matching-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
