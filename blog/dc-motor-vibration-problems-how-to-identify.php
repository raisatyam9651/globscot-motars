<?php
$current_page     = 'dc-motor-vibration-problems-how-to-identify';
$canonical_path   = 'blog/dc-motor-vibration-problems-how-to-identify/';
$page_title       = 'DC Motor Vibration Problems: Causes | Globe Scott Motors';
$meta_description = 'Diagnose DC motor vibration problems: ISO severity zones, H/V/A measurement, and the frequency signatures of unbalance, misalignment, bearings and commutators.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-vibration-problems-how-to-identify.jpg';
$body_class       = 'post-template-default single single-post postid-2421 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/"
      },
      "headline": "Why Does a DC Motor Vibrate Excessively? How to Identify the Problem",
      "name": "Why Does a DC Motor Vibrate Excessively? How to Identify the Problem",
      "description": "Diagnose DC motor vibration problems: ISO severity zones, H/V/A measurement, and the frequency signatures of unbalance, misalignment, bearings and commutators.",
      "url": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Troubleshooting, Vibration Analysis, Maintenance",
      "keywords": "dc motor vibration problems, motor vibration analysis, rotor unbalance, shaft misalignment, soft foot, bearing defect frequency, iso 10816 vibration limits",
      "wordCount": 2300,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-vibration-problems-how-to-identify.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-vibration-problems-how-to-identify.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Industrial brushless DC motor used to illustrate vibration measurement and frequency-based fault diagnosis."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#breadcrumb",
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
          "name": "DC Motor Vibration: How to Identify the Cause",
          "item": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is an acceptable vibration level for a small DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For installed motors up to 15 kW, ISO 10816-1 guidance (Class I) treats up to 0.71 mm/s RMS as typical of a new machine, up to 1.8 mm/s as acceptable for long-term running, 1.8 to 4.5 mm/s as unsatisfactory for continuous operation, and above 4.5 mm/s as damaging. On the test bench, IEC 60034-14 grade A allows 1.6 mm/s for shaft heights of 56 to 132 mm."
          }
        },
        {
          "@type": "Question",
          "name": "How can I tell if motor vibration is electrical or mechanical?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Use the power-cut test . Run the motor at normal speed, switch off the supply and watch the vibration reading. If it disappears instantly, the source is driven by current, such as rectifier ripple, commutation ripple or PWM. If it decays gradually as the shaft slows, it is mechanical, such as unbalance, misalignment, looseness or a bearing defect. Cogging in permanent-magnet motors persists while the shaft coasts."
          }
        },
        {
          "@type": "Question",
          "name": "What does vibration at twice running speed indicate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A strong peak at twice running speed (2×) in the radial direction most often indicates parallel shaft misalignment, especially when axial vibration at 1× is also high and the coupling runs warm. It can also come from mechanical looseness or soft foot. Check alignment with a laser or dial indicators, aim for roughly 0.05 mm offset, and check each foot for soft foot before re-measuring."
          }
        },
        {
          "@type": "Question",
          "name": "Can rewinding a DC motor armature cause vibration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rewinding adds or redistributes copper, solder and varnish, so a rewound armature is almost always out of balance until it is dynamically balanced again. Even 3 g of extra mass at 30 mm radius on a 2.5 kg armature can raise the unbalance force more than five-fold at 3,000 rpm. Always ask the rewind shop for a balancing report before refitting the armature."
          }
        },
        {
          "@type": "Question",
          "name": "How do I check a motor for soft foot?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tighten all hold-down bolts, place a dial indicator on one foot, then slacken that foot's bolt and read the lift. Repeat for every foot. As a field rule, more than about 0.05 mm of lift indicates soft foot. Correct it with clean stainless steel shims under the affected foot rather than by forcing the frame down with bolt torque, then re-check alignment."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my DC motor vibrate only at certain speeds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Vibration that peaks in one narrow speed band and falls away either side usually means resonance : a natural frequency of the base, bracket or guard coincides with running speed or one of its multiples. Confirm it with a hammer bump test while the motor is stopped. Stiffen or detune the structure, or programme the controller to skip that speed band."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/",
      "url": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/",
      "name": "DC Motor Vibration Problems: Causes | Globe Scott Motors",
      "description": "Diagnose DC motor vibration problems: ISO severity zones, H/V/A measurement, and the frequency signatures of unbalance, misalignment, bearings and commutators.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/#primaryimage"
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
<h1>Why Does a DC Motor Vibrate Excessively? How to Identify the Problem</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">DC Motor Vibration: How to Identify the Cause</li></ol> </nav>
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
<article class="post-2421 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-dc-motor-vibration tag-vibration-analysis tag-rotor-balancing tag-shaft-alignment tag-pmdc-motors tag-globe-scott-motors" id="post-2421">

<img alt="Industrial BLDC motor used to illustrate how to identify DC motor vibration problems by measurement and frequency" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-vibration-problems-how-to-identify.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>Every rotating machine vibrates; the questions are whether it vibrates more than it should, and why. <strong>DC motor vibration problems</strong> rarely announce their cause. A motor shaking on its base could have an unbalanced armature, a misaligned coupling, a soft foot, a failing bearing, an out-of-round commutator or a bracket resonating at running speed. Each leaves a distinct fingerprint in frequency, direction and behaviour, and reading that fingerprint is far cheaper than replacing parts in turn.</p>

<p>This guide explains how to judge severity against ISO and IEC limits, how to measure properly, and how to link each frequency signature to its cause and fix. It applies to <a href="/products-pmdc-motors/">PMDC motors</a>, <a href="/products-bldc-motors/">BLDC motors</a> and the motor end of <a href="/products-geared-motors/">geared motors</a>; gear-mesh noise has its own guide on why a <a href="/blog/geared-motor-making-noise-causes-diagnosis-solutions/">geared motor is making noise</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Judge severity first: for motors up to 15 kW, ISO 10816-1 guidance treats more than 1.8 mm/s RMS as unsatisfactory for long-term running and more than 4.5 mm/s as damaging. Then identify the cause by frequency: steady 1× running speed points to unbalance, 2× with high axial vibration to misalignment, non-synchronous peaks to bearing defects, bar-passing frequency to the commutator, and vibration that vanishes the instant power is cut to a current-driven electrical source. Fix the cause, then re-measure.
</div>

<hr/>

<h2>How Much Vibration Is Too Much?</h2>

<p>Two standards answer this, and they measure different things. <strong>IEC 60034-14</strong> sets the limit a new motor must meet on the test bench, uncoupled and freely suspended: for shaft heights of 56–132 mm, grade A (normal) allows 1.6 mm/s RMS and grade B (reduced) 0.7 mm/s RMS. <strong>ISO 10816-1</strong>, now revised as ISO 20816-1, judges the installed machine including its mounting, coupling and load. Its guidance values for Class I machines, which include electric motors up to 15 kW, are:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Zone</th><th>Velocity, mm/s RMS (10–1,000 Hz)</th><th>Meaning</th><th>Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>A</strong></td><td>up to 0.71</td><td>Typical of newly commissioned machines</td><td>Record as baseline</td></tr>
<tr><td><strong>B</strong></td><td>0.71 – 1.8</td><td>Acceptable for unrestricted long-term operation</td><td>Trend</td></tr>
<tr><td><strong>C</strong></td><td>1.8 – 4.5</td><td>Unsatisfactory for long-term continuous operation</td><td>Plan corrective action</td></tr>
<tr><td><strong>D</strong></td><td>above 4.5</td><td>Severe enough to cause damage</td><td>Stop and investigate</td></tr>
</tbody>
</table>
</div>

<p>A motor can meet grade A at the factory and still sit in zone C on your machine, because the installed reading includes everything it is bolted to. Ask suppliers which vibration grade and balance grade a motor is built to; our BLDC rotors, for example, are balanced to ISO 1940 grade G2.5. Our article on <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">motor testing before a unit ships</a> lists further questions worth asking.</p>

<hr/>

<h2>How to Measure DC Motor Vibration Properly</h2>

<ul>
<li><strong>Positions:</strong> on both bearing housings or end shields, drive end (DE) and non-drive end (NDE), in horizontal (H), vertical (V) and axial (A) directions: six readings per motor.</li>
<li><strong>Sensor mounting:</strong> a magnet-mounted accelerometer on clean, flat, bare metal; never on a thin cover or fan cowl, which has its own resonance.</li>
<li><strong>Broadband value:</strong> velocity RMS over 10–1,000 Hz, for comparison with the zones above.</li>
<li><strong>Spectrum:</strong> a velocity FFT up to at least 10× running speed for mechanical faults, plus an acceleration or envelope spectrum to a few kHz, because bearing-impact resonances and commutator frequencies often lie above 1 kHz.</li>
<li><strong>Conditions:</strong> record speed, load and temperature with every reading so trends compare like with like.</li>
</ul>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb: Two Separation Tests</strong><br/>
<strong>Power-cut test:</strong> run at speed, cut the supply and watch the reading. Vibration that disappears instantly is driven by armature current; vibration that decays gradually with speed is mechanical. In permanent-magnet motors, cogging persists while the shaft coasts because the magnets remain, so it behaves like a mechanical source in this test.<br/>
<strong>Uncoupled test:</strong> run the motor alone. If vibration falls to bench levels, look at the coupling, load and base; if not, the problem is inside the motor.
</div>

<p>Compare directions as well as magnitudes. Unbalance gives broadly similar horizontal and vertical readings, with horizontal often higher on foot-mounted motors because the base is less stiff that way. A reading far higher in one direction points to looseness or resonance, and axial vibration above roughly half the radial value points to misalignment or a bent shaft.</p>

<hr/>

<h2>Reading the Frequency: Identifying DC Motor Vibration Problems</h2>

<p>Running-speed frequency is \( f_r = N/60 \), so 3,000 rpm gives 50 Hz, called "1×". Most diagnoses come from where the spectral peaks sit relative to 1×.</p>

<h3>1. Unbalance: Steady 1× Radial Vibration</h3>

<p>Unbalance creates a force rotating at exactly running speed, strongest radially and steady in phase:</p>

<div class="gsm-equation">\[ F = m\,e\,\omega^2 \qquad\qquad G = e\,\omega \]</div>

<p>Here \( m e \) is the residual unbalance and \( G \) the balance grade in mm/s under ISO 21940-11 (formerly ISO 1940-1). Because force rises with \( \omega^2 \), unbalance vibration climbs steeply with speed, a useful check on variable-speed drives.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Worked Example: A Rewound Armature</strong><br/>
A 2.5 kg armature runs at 3,000 rpm, so \( \omega = 2\pi \times 3000/60 = 314.2\,\mathrm{rad/s} \).
<ul>
<li>Balanced to G2.5: \( e = G/\omega = 2.5/314.2 = 0.0080\,\mathrm{mm} \), so \( U = m e = 2500\,\mathrm{g} \times 0.0080\,\mathrm{mm} \approx 20\,\mathrm{g\,mm} \) and \( F = 20 \times 10^{-6} \times 314.2^2 \approx 2.0\,\mathrm{N} \).</li>
<li>After a rewind, 3 g of extra solder and varnish at 30 mm radius adds 90 g·mm. Worst case, in phase: \( U = 110\,\mathrm{g\,mm} \) and \( F = 110 \times 10^{-6} \times 314.2^2 \approx 10.9\,\mathrm{N} \), equivalent to \( G = (110/2500) \times 314.2 \approx 13.8\,\mathrm{mm/s} \), worse than G6.3.</li>
<li>Run that rotor at 4,500 rpm and force rises by \( (4500/3000)^2 = 2.25 \), to about 24.4 N.</li>
</ul>
A 5.5-fold rise in force gives roughly a 5.5-fold rise in 1× vibration on the same mounting (away from resonance), enough to push a zone A motor into zone C. Insist that rewound armatures are dynamically balanced before refitting.
</div>

<h3>2. Misalignment: 2× Radial and High Axial Vibration</h3>

<p>Angular misalignment shows as high axial vibration at 1×; parallel (offset) misalignment as strong 2× radial vibration, often with a warm coupling. Flange (B5) and face (B14) mounts build alignment into the spigot, whereas foot-mounted (B3) drives rely on the installer. Align with a laser or reverse dial indicators to within about 0.05 mm offset, and use a flexible coupling.</p>

<h3>3. Soft Foot and Mechanical Looseness</h3>

<p>Soft foot, where one foot does not sit flat, twists the frame when bolted down and distorts the bearing bores. It shows as 1× vibration in the least stiff direction that changes markedly when one hold-down bolt is slackened. Check each foot with a dial indicator while loosening its bolt: more than about 0.05 mm lift means soft foot, corrected with stainless shims rather than bolt torque. Rotating looseness (a bearing loose in its end shield, worn fits) produces a string of 1× harmonics, often with half-order peaks and unsteady phase. Mounting failure modes are covered in <a href="/blog/motor-mounting-configurations-explained/">motor mounting configurations explained</a>.</p>

<h3>4. Bearing Defects: Non-Synchronous Peaks</h3>

<p>Damaged rolling bearings generate impacts at frequencies set by bearing geometry, not by whole multiples of running speed:</p>

<div class="gsm-equation">\[ f_{BPFO} = \frac{n}{2} f_r \left(1 - \frac{d}{D}\cos\phi\right) \qquad f_{BPFI} = \frac{n}{2} f_r \left(1 + \frac{d}{D}\cos\phi\right) \]</div>

<p>Here \( n \) is the number of balls, \( d \) the ball diameter, \( D \) the pitch diameter and \( \phi \) the contact angle. For an 8-ball bearing with \( d/D \approx 0.24 \) at 50 Hz, outer-race defects appear near \( 4 \times 50 \times 0.76 = 152\,\mathrm{Hz} \) and inner-race defects near \( 4 \times 50 \times 1.24 = 248\,\mathrm{Hz} \). Early damage shows best in the envelope spectrum; late damage raises broadband noise and temperature. Replace the bearing, then find why it failed (misalignment, belt tension, contamination); see the <a href="/blog/industrial-motor-premature-failure-checklist/">industrial motor premature failure checklist</a>.</p>

<h3>5. Commutator and Brush Gear</h3>

<p>Unique to brushed motors: an out-of-round commutator, a high or low bar, or high mica makes the brushes bounce, producing vibration at 1× with harmonics and at the bar-passing frequency:</p>

<div class="gsm-equation">\[ f_{bar} = N_{bars} \times \frac{N}{60} \]</div>

<p>A 22-bar commutator at 3,000 rpm gives 1,100 Hz, above the broadband window, so use the wider spectrum. Brush bounce also causes sparking and fast brush wear. Check runout with a dial indicator against the manufacturer's limit, then skim and undercut the commutator and re-bed the brushes, as described in our <a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC motor maintenance and troubleshooting guide</a>.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Vibration Survey &amp; Fault Frequency Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable worksheet for recording H, V and A readings at both bearings, ISO severity zones, separation tests and a fault-frequency calculator for unbalance, bearings and commutators.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<h3>6. Resonance</h3>

<p>If vibration peaks sharply in one speed band and falls away either side, a natural frequency of the base, bracket or guard coincides with a forcing frequency, and even a small residual unbalance can then produce zone D readings. A hammer bump test with the motor stopped finds the natural frequency. Stiffen or detune the structure, or skip that speed band in the controller; a common target is to keep natural frequencies at least 20 % away from running speed and its main multiples.</p>

<h3>7. Electrical and Magnetic Sources: Ripple, Cogging and PWM</h3>

<ul>
<li><strong>Rectifier ripple:</strong> a PMDC motor fed from a single-phase full-wave bridge on 50 Hz mains sees current, and therefore torque, ripple at 100 Hz. It vanishes on a battery or well-smoothed supply.</li>
<li><strong>Cogging:</strong> magnets attracting armature teeth cause torque pulsations at \( \mathrm{LCM}(Z, 2p) \times N/60 \) for \( Z \) slots and \( 2p \) poles, most noticeable at low speed and felt as detents when the shaft is turned by hand. Skewed slots reduce it.</li>
<li><strong>BLDC commutation ripple:</strong> six-step trapezoidal drive ripples at six times electrical frequency; the sinusoidal FOC drivers offered with our BLDC motors reduce it markedly.</li>
<li><strong>PWM:</strong> switching in the audible band excites magnetic forces at the carrier frequency; moving it above roughly 16–20 kHz takes them out of hearing range.</li>
</ul>
<p>Ripple, commutation and PWM effects disappear the instant power is cut, which is the fastest way to confirm a current-driven cause. Cogging does not, because the magnet field remains, but its low-speed character and the detents felt by hand make it easy to recognise.</p>

<hr/>

<h2>DC Motor Vibration Diagnostic Matrix</h2>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Dominant Frequency</th><th>Likely Cause</th><th>Confirming Check</th><th>Corrective Action</th></tr>
</thead>
<tbody>
<tr><td><strong>1×, radial, steady phase</strong></td><td>Unbalance: armature, fan, pulley, coupling</td><td>Rises with speed squared; persists uncoupled</td><td>Dynamic balance to the specified grade</td></tr>
<tr><td><strong>1× axial plus 2× radial</strong></td><td>Misalignment</td><td>Laser or dial alignment check; warm coupling</td><td>Realign to about 0.05 mm; flexible coupling</td></tr>
<tr><td><strong>1× in one direction, bolt-sensitive</strong></td><td>Soft foot</td><td>Dial indicator on each foot</td><td>Stainless shims; re-torque</td></tr>
<tr><td><strong>Many 1× harmonics, 0.5× peaks</strong></td><td>Rotating looseness, worn fits</td><td>Unsteady phase; shaft play</td><td>Restore fits; replace bearing or end shield</td></tr>
<tr><td><strong>Non-synchronous peaks</strong></td><td>Bearing defect</td><td>Envelope spectrum at BPFO or BPFI</td><td>Replace bearing; remove root cause</td></tr>
<tr><td><strong>Bar-passing frequency</strong></td><td>Commutator runout, high bar or mica</td><td>Runout check; sparking</td><td>Skim, undercut, re-bed brushes</td></tr>
<tr><td><strong>Peak in one speed band only</strong></td><td>Structural resonance</td><td>Bump test</td><td>Stiffen bracket or skip speed band</td></tr>
<tr><td><strong>100 Hz on mains-fed motors</strong></td><td>Rectifier ripple</td><td>Gone on battery or on power cut</td><td>Smoothing choke or better drive</td></tr>
<tr><td><strong>Slot-related, worst at low speed</strong></td><td>Cogging</td><td>Detents felt by hand; persists after power cut</td><td>Skewed armature or low-cogging design</td></tr>
<tr><td><strong>Six times electrical frequency (BLDC)</strong></td><td>Trapezoidal commutation ripple</td><td>Gone on power cut</td><td>Sinusoidal FOC drive</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Preventing Vibration in New Installations</h2>

<ul>
<li>State the required balance grade and vibration grade in the enquiry, and ask how they are verified.</li>
<li>Design motor brackets stiff enough that their natural frequency sits well clear of running speed across the whole speed range.</li>
<li>Prefer flange or face mounting where alignment cannot be controlled on site, and keep pulleys close to the bearing.</li>
<li>Record six readings and a spectrum at commissioning as a baseline; a sustained step change from baseline deserves investigation even while readings remain inside zone B.</li>
</ul>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What is an acceptable vibration level for a small DC motor?</h3>
<p>For installed motors up to 15 kW, ISO 10816-1 guidance (Class I) treats up to 0.71 mm/s RMS as typical of a new machine, up to 1.8 mm/s as acceptable for long-term running, 1.8 to 4.5 mm/s as unsatisfactory for continuous operation, and above 4.5 mm/s as damaging. On the test bench, IEC 60034-14 grade A allows 1.6 mm/s for shaft heights of 56 to 132 mm.</p>

<h3>Q2. How can I tell if motor vibration is electrical or mechanical?</h3>
<p>Use the <strong>power-cut test</strong>. Run the motor at normal speed, switch off the supply and watch the vibration reading. If it disappears instantly, the source is driven by current, such as rectifier ripple, commutation ripple or PWM. If it decays gradually as the shaft slows, it is mechanical, such as unbalance, misalignment, looseness or a bearing defect. Cogging in permanent-magnet motors persists while the shaft coasts.</p>

<h3>Q3. What does vibration at twice running speed indicate?</h3>
<p>A strong peak at twice running speed (2×) in the radial direction most often indicates parallel shaft misalignment, especially when axial vibration at 1× is also high and the coupling runs warm. It can also come from mechanical looseness or soft foot. Check alignment with a laser or dial indicators, aim for roughly 0.05 mm offset, and check each foot for soft foot before re-measuring.</p>

<h3>Q4. Can rewinding a DC motor armature cause vibration?</h3>
<p>Yes. Rewinding adds or redistributes copper, solder and varnish, so a rewound armature is almost always out of balance until it is dynamically balanced again. Even 3 g of extra mass at 30 mm radius on a 2.5 kg armature can raise the unbalance force more than five-fold at 3,000 rpm. Always ask the rewind shop for a balancing report before refitting the armature.</p>

<h3>Q5. How do I check a motor for soft foot?</h3>
<p>Tighten all hold-down bolts, place a dial indicator on one foot, then slacken that foot's bolt and read the lift. Repeat for every foot. As a field rule, more than about 0.05 mm of lift indicates soft foot. Correct it with clean stainless steel shims under the affected foot rather than by forcing the frame down with bolt torque, then re-check alignment.</p>

<h3>Q6. Why does my DC motor vibrate only at certain speeds?</h3>
<p>Vibration that peaks in one narrow speed band and falls away either side usually means <strong>resonance</strong>: a natural frequency of the base, bracket or guard coincides with running speed or one of its multiples. Confirm it with a hammer bump test while the motor is stopped. Stiffen or detune the structure, or programme the controller to skip that speed band.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Vibration is a symptom with a signature. Judge severity against ISO zones, measure in three directions at both bearings, separate electrical from mechanical with the power-cut and uncoupled tests, then let the frequency point to the cause: 1× for unbalance, 2× and axial for misalignment, non-synchronous peaks for bearings, bar-passing for the commutator. Fix the cause and re-measure against your baseline.</p>

<p>If vibration traces back to the motor's design (rotor balance, cogging at low speed, or a mounting that does not suit your frame), our engineers can recommend a better-matched PMDC, geared or BLDC motor. <a href="/contact-us/">Share your speed range, mounting and vibration readings with our team</a>.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Chasing a Vibration Problem You Cannot Pin Down?</strong></h3>
<p style="margin-bottom: 0;">Send us your speed range, mounting arrangement and H, V and A vibration readings with a spectrum if you have one. Globe Scott engineers will help interpret the signature and recommend a motor, balance grade or mounting that suits your machine.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Vibration, Vibration Analysis, Rotor Balancing, Shaft Alignment, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/geared-motor-making-noise-causes-diagnosis-solutions/">
<h4 class="post-title">Why Is Your Geared Motor Making Noise? Causes, Diagnosis and Solutions</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/dc-motor-not-starting-troubleshooting-guide/">
<h4 class="post-title">Why Does a DC Motor Fail to Start? A Troubleshooting Guide</h4>
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
<li><a href="/blog/motor-mounting-configurations-explained/">Motor Mounting Configurations Explained</a></li>
<li><a href="/blog/geared-motor-making-noise-causes-diagnosis-solutions/">Geared Motor Making Noise: Causes &amp; Diagnosis</a></li>
<li><a href="/blog/industrial-motor-premature-failure-checklist/">Industrial Motor Premature Failure Checklist</a></li>
<li><a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">Motor Testing Standards Before Dispatch</a></li>
<li><a href="/dc-motor-maintenance/">DC Motor Maintenance Guide</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Vibration Survey Worksheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Vibration Survey &amp; Fault Frequency Worksheet</h3>
          <p class="gsm-modal-subtitle">Record readings consistently, classify severity against ISO zones and calculate the fault frequencies that identify the cause of DC motor vibration.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Six-Point Survey Sheet:</strong> H, V and A readings at drive and non-drive ends</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>ISO Severity Zones:</strong> Class I limits with the action required for each zone</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Fault Frequency Calculator:</strong> Unbalance, bearing, commutator and cogging frequency formulas</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Vibration: How to Identify the Cause Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor Vibration Survey &amp; Fault Frequency Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-vibration-problems-how-to-identify/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Vibration Survey Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor Vibration Survey &amp; Fault Frequency Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-vibration-survey-fault-frequency-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
