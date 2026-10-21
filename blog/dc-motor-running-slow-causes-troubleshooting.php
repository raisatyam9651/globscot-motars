<?php
$current_page     = 'dc-motor-running-slow-causes-troubleshooting';
$canonical_path   = 'blog/dc-motor-running-slow-causes-troubleshooting/';
$page_title       = 'DC Motor Running Slow? Causes & Checks | Globe Scott Motors';
$meta_description = 'DC motor running slow? Use the speed equation to separate low voltage, PWM, overload, resistance and gear ratio faults, with step-by-step meter checks.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-running-slow-causes-troubleshooting.jpg';
$body_class       = 'post-template-default single single-post postid-2417 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/"
      },
      "headline": "Why Does a DC Motor Run Slowly? Common Causes and Troubleshooting Steps",
      "name": "Why Does a DC Motor Run Slowly? Common Causes and Troubleshooting Steps",
      "description": "DC motor running slow? Use the speed equation to separate low voltage, PWM, overload, resistance and gear ratio faults, with step-by-step meter checks.",
      "url": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Troubleshooting, Speed, Maintenance",
      "keywords": "dc motor running slow, dc motor speed drop, dc motor speed equation, back emf constant, pwm duty cycle, ir compensation, tachometer speed check",
      "wordCount": 2531,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-running-slow-causes-troubleshooting.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-running-slow-causes-troubleshooting.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Multimeter checks at a motor terminal block, the first step in troubleshooting a DC motor running slow."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#breadcrumb",
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
          "name": "DC Motor Running Slow: Causes & Checks",
          "item": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why is my DC motor running slower than its rated speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A DC motor runs slow when too little voltage reaches its terminals, when too much voltage is lost to load current and circuit resistance, or when the motor or gear ratio is not what was specified. Check whether it is slow at no load or only under load, then measure terminal voltage, current and speed together and compare them with the nameplate."
          }
        },
        {
          "@type": "Question",
          "name": "Does low voltage make a DC motor run slow?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A permanent magnet DC motor's speed is close to proportional to its terminal voltage, so a 10 % shortfall costs slightly more than 10 % of loaded speed. Measure at the motor terminals, not the supply, because cable and connection drops only appear under load. Common causes are a wrong supply tap, half-wave rectification, battery discharge and undersized cables."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my DC motor slow down when a load is applied?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Some slowdown is normal: load current through the armature and brush resistance reduces the voltage left to generate back-EMF, so speed droops in proportion to current. Excessive droop means the load current is too high, extra resistance has appeared in brushes, lugs or cable, or the controller's IR compensation is missing or set too low. A volt-drop survey under load finds the resistance."
          }
        },
        {
          "@type": "Question",
          "name": "Can a PWM speed controller cause a DC motor to run slow?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A PWM controller sets average motor voltage through its duty cycle, so anything that stops the duty reaching maximum caps the speed: a maximum-speed trimmer set low, a worn potentiometer, a 0–5 V reference wired into a 0–10 V input, or IR compensation switched off after a controller replacement. Measure the speed reference and output voltage at full scale, using the meter's DC (average) mode."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my geared motor run slow on cold mornings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Grease and gear-oil viscosity rise sharply as temperature falls, so a cold gearbox absorbs more torque and the motor draws extra current, which increases the voltage drop and lowers speed. Battery voltage also sags more in the cold. If speed recovers within minutes as the drive warms up, choose a lubricant rated for the minimum ambient temperature rather than replacing the motor."
          }
        },
        {
          "@type": "Question",
          "name": "Can weak magnets make a DC motor run slower?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not at no load. A demagnetised PMDC motor has a lower back-EMF constant, so it runs faster than normal when unloaded and still runs at or above normal speed at moderate load, while drawing more current. Its torque ceiling has fallen, though, so it slows sharply on heavy loads or at the controller's current limit. If a motor is fast empty but bogs down on heavy load, test its back-EMF constant cold, as described in our DC motor torque loss guide ."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/",
      "url": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/",
      "name": "DC Motor Running Slow? Causes & Checks | Globe Scott Motors",
      "description": "DC motor running slow? Use the speed equation to separate low voltage, PWM, overload, resistance and gear ratio faults, with step-by-step meter checks.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/#primaryimage"
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
<h1>Why Does a DC Motor Run Slowly? Common Causes and Troubleshooting Steps</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">DC Motor Running Slow: Causes &amp; Checks</li></ol> </nav>
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
<article class="post-2417 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-dc-motor-speed tag-pmdc-motors tag-motor-troubleshooting tag-pwm-speed-control tag-geared-motors tag-globe-scott-motors" id="post-2417">

<img alt="Multimeter probes testing a motor terminal block to troubleshoot a DC motor running slow" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-running-slow-causes-troubleshooting.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A <strong>DC motor running slow</strong> is one of the most common complaints on conveyors, mixers, feeders and battery vehicles, and one of the easiest to misdiagnose. The motor is often replaced, only for the new unit to run just as slowly because the real cause was a low supply tap, a capped speed reference or a corroded terminal. A DC motor's speed is set almost entirely by voltage, current and resistance, so a few meter readings usually identify the cause without dismantling anything.</p>

<p>This guide applies to brushed <a href="/products-pmdc-motors/">PMDC motors</a> and geared motors running steadily below their expected speed. If the speed hunts, surges or varies from moment to moment, that is a stability problem covered in our guide to <a href="/blog/dc-motor-speed-fluctuation-solutions/">DC motor speed fluctuation</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> DC motor speed equals (terminal voltage − armature current × resistance − brush drop) ÷ Ke, so a slow motor has too little voltage at its terminals, too much voltage lost to current and resistance, or the wrong motor or gear ratio. First establish whether it is slow at no load (supply, controller reference, winding or gear ratio) or only under load (overload, high circuit resistance, voltage sag, missing IR compensation). Then measure terminal voltage, current and speed, and compare the measured speed with the speed the equation predicts.
</div>

<h2>The Speed Equation Behind Every Slow DC Motor</h2>

<p>Rearranging the armature voltage equation gives the steady-state speed of a PMDC motor:</p>

<div class="gsm-equation">\[ \omega = \frac{V - I_a R_a - V_{brush}}{K_e}, \qquad N = \frac{60\,\omega}{2\pi}, \qquad N_{out} = \frac{N}{i} \]</div>

<p>Each term maps to a family of faults. \( V \) is the average voltage actually reaching the motor terminals, so supply, controller and cable problems act here. \( I_a R_a \) is the voltage lost inside the armature circuit, which grows with load current and with any extra resistance in brushes, commutator or connections. \( K_e \) is fixed by the winding and magnets, so a wrong winding variant changes it, and \( i \) is the gear ratio between motor and machine. The speed lost between no load (current \( I_0 \)) and a given load is the droop:</p>

<div class="gsm-equation">\[ \Delta N = \frac{60}{2\pi} \cdot \frac{(I_a - I_0)\,R_a}{K_e} \]</div>

<p>For the full torque, speed and power relationships, see our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a>.</p>

<hr/>

<h2>First Split: Slow at No Load, or Slow Only Under Load?</h2>

<p>Decouple the motor, or run the machine empty, and measure speed. This single observation halves the list of suspects:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Speed Pattern</th><th>Term in the Equation</th><th>Likely Causes</th><th>First Check</th></tr>
</thead>
<tbody>
<tr><td><strong>Slow at no load and under load</strong></td><td>\( V \) too low, \( K_e \) or \( i \) too high</td><td>Low supply or wrong tap, reference not at 100 %, wrong winding, wrong gear ratio</td><td>Terminal voltage at no load; nameplate and ratio</td></tr>
<tr><td><strong>Normal at no load, slow under load</strong></td><td>\( I_a R_a \) too large, or \( V \) sagging with current</td><td>Overload, high circuit resistance, voltage sag, no IR compensation</td><td>Terminal voltage and current under load</td></tr>
<tr><td><strong>Slow when cold, recovers when warm</strong></td><td>Extra load current from drag</td><td>Stiff grease, thick gear oil, binding</td><td>Speed and current logged from a cold start</td></tr>
<tr><td><strong>Slower through the shift</strong></td><td>\( V \) falling</td><td>Battery state of charge and ageing</td><td>Battery voltage under load, start vs end of shift</td></tr>
<tr><td><strong>Fast at no load, bogs down on heavy load</strong></td><td>\( K_e \) reduced</td><td>Demagnetised magnets</td><td>Cold no-load \( K_e \) test</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Eight Common Causes of a DC Motor Running Slow</h2>

<h3>1. Low Terminal Voltage or the Wrong Supply Tap</h3>

<p>Speed is close to proportional to terminal voltage, so a 10 % voltage shortfall costs slightly more than 10 % of loaded speed. Beyond obvious supply faults, check how the DC is derived. Unfiltered full-wave rectification of 230 V AC averages about 0.9 × 230 ≈ 207 V, but half-wave rectification averages only about 104 V. A 180 V motor connected to a half-wave output or to a 110 V tap runs at roughly 55–60 % of its rated speed while appearing perfectly healthy. In plants with weak grid supply, also log voltage over a shift; evening dips are common.</p>

<h3>2. Speed Reference or PWM Duty Not Reaching 100 %</h3>

<p>A PWM controller delivers an average voltage \( V_{avg} = D \cdot V_{bus} \), where \( D \) is the duty cycle. If the duty never reaches its maximum, the motor never reaches full speed. Typical causes are a worn potentiometer track, a maximum-speed trimmer set low during commissioning, a 0–5 V reference wired to a 0–10 V input (which caps speed at half), or an analogue reference losing voltage along a long cable shared with power wiring. Measure the reference at the controller terminals with the operator control at full scale.</p>

<h3>3. Missing or Mis-set IR Compensation</h3>

<p>Open-loop armature-voltage controllers cannot see speed. IR compensation raises the output voltage in proportion to armature current, offsetting the \( I_a R_a \) droop. If it is switched off, set to zero after a controller swap, or calibrated for a smaller motor, speed sags with every increase in load. Set it carefully: over-compensation makes speed rise with load and can cause hunting.</p>

<h3>4. Overload and Rising Load Current</h3>

<p>Every extra ampere of load current costs \( 9.549\,R_a/K_e \) rpm, about 62 rpm per ampere for the motor in the example below, and if the controller reaches its current limit, speed collapses rather than droops. A motor that is slow and drawing well above nameplate current is being asked for more torque than intended; if the load has genuinely grown, the drive needs re-sizing, and if the motor seems weak rather than overloaded, see our guide on a <a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC motor losing torque</a>.</p>

<h3>5. High Circuit Resistance: Brushes, Commutator, Lugs and Cable</h3>

<p>Any resistance in series with the armature adds to the droop. Worn brushes with weak springs, a poor commutator film, loose or corroded lugs, a heat-damaged terminal block and an undersized or extended cable all subtract voltage in proportion to current. Because they only act under load, these faults hide during a no-load check. A volt-drop survey under load finds them: measure across each joint and conductor and compare like with like.</p>

<h3>6. Wrong Gear Ratio or Wrong Winding Variant</h3>

<p>An 18:1 and a 20:1 gearhead look identical on a stores shelf, but fitting 20:1 where 18:1 was specified slows the output by 10 %. Similarly, a replacement motor wound for a higher voltage has a higher \( K_e \) and runs proportionally slower on the original supply. Check the gearbox plate and count shaft turns if in doubt; our <a href="/products-geared-motors/">industrial geared motors</a> are offered in defined ratios such as 9:1, 18:1, 20:1, 30:1, 36:1 and 61:1, so the ratio on record should match what is fitted. For choosing a ratio afresh, see <a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">DC motor gear ratio selection</a>; for voltage mismatches, see <a href="/blog/wrong-motor-voltage-problems-solutions/">wrong motor voltage problems</a>.</p>

<h3>7. Stiff Cold Grease, Binding and Brake Drag</h3>

<p>Grease and gear-oil viscosity rise sharply at low temperature, so a geared motor in a cold store, or outdoors on a winter morning in north India, can draw extra current and run slow until it warms up. Misaligned couplings, a tight chain, a seized idler or an electromagnetic brake that does not fully release produce the same symptom without recovering. Turn the driveline by hand with the motor isolated and log speed from a cold start.</p>

<h3>8. Battery State of Charge</h3>

<p>On battery equipment, speed tracks battery voltage. A lead-acid block falls from about 12.7 V open-circuit at full charge to about 12.2 V at half charge, and sags further under load as internal resistance rises with discharge, age and cold. A 24 V vehicle running at 22 V under load is roughly 10 % slower before anything else is wrong.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Diagnostic Nuance:</strong><br/>
Demagnetised magnets do not make a PMDC motor slow at no load; they make it faster, because \( \omega_0 \approx V/K_e \) and \( K_e \) has fallen. At moderate load it still runs at or above its usual speed while drawing more current; it slows sharply only when a heavy load or the controller's current limit meets its lower torque ceiling. If you see "fast empty, bogs down on heavy load", test \( K_e \) cold before blaming the supply.
</div>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Slow-Speed Troubleshooting Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable meter-and-tachometer procedure with a speed-budget worksheet that splits lost rpm between supply voltage, load current, circuit resistance and gearing.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Step-by-Step Troubleshooting Sequence</h2>

<p>You need an optical or contact tachometer, a multimeter used in DC mode at the motor terminals and a true-DC Hall-effect clamp meter. On PWM drives, DC mode reads the average voltage, which is what sets speed; an AC+DC true-RMS reading will be higher and misleading.</p>

<ol>
<li><strong>Collect the reference data:</strong> nameplate voltage, current and speed, the no-load speed from the test sheet, and the gear ratio on record.</li>
<li><strong>Measure no-load speed</strong> with the machine empty or the motor decoupled, at a measured terminal voltage. On geared motors, measure the output and multiply by the ratio to confirm the ratio fitted.</li>
<li><strong>Measure under normal load:</strong> output speed, terminal voltage, controller output voltage and current, all at the same moment.</li>
<li><strong>Check the controller:</strong> reference voltage at full scale, duty or output voltage at full reference, IR compensation and maximum-speed settings.</li>
<li><strong>Build a speed budget</strong> with the speed equation, as in the example below, and compare predicted with measured speed.</li>
<li><strong>Chase the residual:</strong> if measured speed is well below prediction, look inside the armature circuit (brushes, commutator, internal connections) or for slip in belts and couplings.</li>
</ol>

<h3>Worked Example: A Speed Budget for a Slow Conveyor</h3>

<p>A conveyor drive uses a 180 V, 3.5 A, 1,750 rpm, 0.5 kW PMDC motor. Its test data gives a no-load speed of 1,950 rpm at 0.35 A; armature-plus-brush resistance is 5.6 Ω hot and brush drop about 2 V. From the no-load data:</p>

<div class="gsm-equation">\[ K_e = \frac{180 - 0.35 \times 5.6 - 2}{2\pi \times 1950/60} = \frac{176.0}{204.2} = 0.862\,\mathrm{V\,s/rad} \]</div>

<p>At the rated 3.5 A the equation predicts \( (180 - 19.6 - 2)/0.862 = 183.8\,\mathrm{rad/s} \), or 1,755 rpm, matching the nameplate. In service the motor turns at only 1,520 rpm. Simultaneous readings show 172 V at the controller output, 168 V at the motor terminals and 4.2 A. The budget, using \( \Delta N = 9.549 \times \Delta V / K_e \):</p>

<ul>
<li><strong>Voltage shortfall:</strong> 12 V below rated (8 V from a low maximum-speed trim, 4 V lost in cable and terminals) costs 9.549 × 12/0.862 ≈ 133 rpm.</li>
<li><strong>Extra load current:</strong> 0.7 A above rated × 5.6 Ω = 3.9 V, costing about 43 rpm.</li>
<li><strong>Predicted speed:</strong> 1,755 − 133 − 43 ≈ 1,578 rpm.</li>
<li><strong>Unexplained residual:</strong> 1,578 − 1,520 = 58 rpm, equal to 5.2 V of extra drop, or about 1.25 Ω of extra resistance at 4.2 A.</li>
</ul>

<p>Three separate faults therefore share the blame. A locked-rotor test at about 4 A should confirm roughly 1.25 Ω more apparent resistance than the original record, pointing to worn brushes or a poor commutator film; our <a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC motor maintenance guide</a> covers the brush gear checks. Restoring 180 V at the terminals and the correct resistance brings the motor back to about 1,711 rpm at 4.2 A; finding why the conveyor now needs 0.7 A more, perhaps a dry idler, recovers the rest.</p>

<hr/>

<h2>Slow-Speed Troubleshooting Matrix</h2>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Observed Symptom</th><th>Most Likely Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Slow by the same proportion empty and loaded</strong></td><td>Low supply, wrong tap or rectifier</td><td>Terminal voltage vs nameplate at no load</td><td>Correct supply tap or rectifier; restore rated voltage</td></tr>
<tr><td><strong>Never reaches full speed at full reference</strong></td><td>Reference scaling, max-speed trim, worn pot</td><td>Reference and output voltage at full scale</td><td>Match reference scaling; reset trim; replace pot</td></tr>
<tr><td><strong>Droops heavily as load rises</strong></td><td>No IR compensation or high circuit resistance</td><td>IR comp setting; volt-drop survey under load</td><td>Set IR compensation; remake joints; upsize cable</td></tr>
<tr><td><strong>Slow and above nameplate current</strong></td><td>Overload or driveline drag</td><td>Current vs nameplate; hand rotation of driveline</td><td>Remove drag; re-size the drive if load has grown</td></tr>
<tr><td><strong>Output slow, motor speed correct</strong></td><td>Wrong gear ratio or belt slip</td><td>Output speed × ratio vs motor speed</td><td>Fit specified ratio; re-tension or replace belt</td></tr>
<tr><td><strong>Slow when cold, normal later</strong></td><td>Grease or gear-oil viscosity</td><td>Speed and current from a cold start</td><td>Lubricant rated for minimum ambient</td></tr>
<tr><td><strong>Fast empty, bogs down on heavy load</strong></td><td>Demagnetised magnets</td><td>Cold no-load \( K_e \) vs original</td><td>Replace motor; remove the demagnetising cause</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Keeping Speed Where It Belongs</h2>

<p>Most slow-speed faults are prevented by recording what "correct" looks like at commissioning: terminal voltage, current and speed at no load and at normal load, the controller settings and the gear ratio. With that baseline, a five-minute measurement shows which term of the speed equation has moved. When the application genuinely needs a different speed, choose the motor speed and ratio together, as described in <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">how to choose motor power, RPM and gear ratio</a>, rather than running a motor well below its rated voltage. Where speed must hold tightly against load changes, closed-loop control is the answer, and <a href="/products-bldc-motors/">BLDC motors</a> with matched sensored drivers are a strong option.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. Why is my DC motor running slower than its rated speed?</h3>
<p>A DC motor runs slow when too little voltage reaches its terminals, when too much voltage is lost to load current and circuit resistance, or when the motor or gear ratio is not what was specified. Check whether it is slow at no load or only under load, then measure terminal voltage, current and speed together and compare them with the nameplate.</p>

<h3>Q2. Does low voltage make a DC motor run slow?</h3>
<p>Yes. A permanent magnet DC motor's speed is close to proportional to its terminal voltage, so a 10 % shortfall costs slightly more than 10 % of loaded speed. Measure at the motor terminals, not the supply, because cable and connection drops only appear under load. Common causes are a wrong supply tap, half-wave rectification, battery discharge and undersized cables.</p>

<h3>Q3. Why does my DC motor slow down when a load is applied?</h3>
<p>Some slowdown is normal: load current through the armature and brush resistance reduces the voltage left to generate back-EMF, so speed droops in proportion to current. Excessive droop means the load current is too high, extra resistance has appeared in brushes, lugs or cable, or the controller's IR compensation is missing or set too low. A volt-drop survey under load finds the resistance.</p>

<h3>Q4. Can a PWM speed controller cause a DC motor to run slow?</h3>
<p>Yes. A PWM controller sets average motor voltage through its duty cycle, so anything that stops the duty reaching maximum caps the speed: a maximum-speed trimmer set low, a worn potentiometer, a 0–5 V reference wired into a 0–10 V input, or IR compensation switched off after a controller replacement. Measure the speed reference and output voltage at full scale, using the meter's DC (average) mode.</p>

<h3>Q5. Why does my geared motor run slow on cold mornings?</h3>
<p>Grease and gear-oil viscosity rise sharply as temperature falls, so a cold gearbox absorbs more torque and the motor draws extra current, which increases the voltage drop and lowers speed. Battery voltage also sags more in the cold. If speed recovers within minutes as the drive warms up, choose a lubricant rated for the minimum ambient temperature rather than replacing the motor.</p>

<h3>Q6. Can weak magnets make a DC motor run slower?</h3>
<p>Not at no load. A demagnetised PMDC motor has a lower back-EMF constant, so it runs faster than normal when unloaded and still runs at or above normal speed at moderate load, while drawing more current. Its torque ceiling has fallen, though, so it slows sharply on heavy loads or at the controller's current limit. If a motor is fast empty but bogs down on heavy load, test its back-EMF constant cold, as described in our <a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC motor torque loss guide</a>.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>A DC motor running slow is almost always following its speed equation faithfully: too little voltage arrives, too much is lost to current and resistance, or the motor and gearing are not what the drawing says. Separate no-load from loaded behaviour, take simultaneous voltage, current and speed readings, and build a speed budget before replacing anything. If your readings point to a mismatch between the motor and the duty, <a href="/contact-us/">contact our application engineers</a> with the nameplate, measured values and the speed your machine needs.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is a DC Motor in Your Machine Running Below Its Required Speed?</strong></h3>
<p style="margin-bottom: 0;">Share your motor&#x27;s nameplate, gear ratio, the speed your machine needs and your measured terminal voltage, current and speed under load. Our application engineers will help you find where the speed is going and, if needed, recommend a PMDC, geared or BLDC drive matched to the duty.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Speed, PMDC Motors, Motor Troubleshooting, PWM Speed Control, Geared Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">
<h4 class="post-title">Why Is Your DC Motor Losing Torque Under Load? Causes and Solutions</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/dc-motor-high-current-draw-causes-solutions/">
<h4 class="post-title">Why Does a DC Motor Draw Too Much Current? Causes and Solutions</h4>
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
<li><a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">How to Choose Motor Power, RPM &amp; Gear Ratio</a></li>
<li><a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">Why a DC Motor Loses Torque Under Load</a></li>
<li><a href="/blog/dc-motor-speed-fluctuation-solutions/">Solving DC Motor Speed Fluctuations</a></li>
<li><a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">DC Motor Gear Ratio Selection Guide</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Troubleshooting Worksheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Slow-Speed Troubleshooting Worksheet</h3>
          <p class="gsm-modal-subtitle">Get the measurement sequence and speed-budget worksheet our engineers use to find why a DC motor runs below its expected speed.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Six-Step Measurement Sequence:</strong> No-load, loaded and controller checks in the right order</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Speed Budget Worksheet:</strong> Turn voltage, current and speed readings into lost-rpm figures</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Symptom-to-Fix Matrix:</strong> Match each speed pattern to its cause and corrective action</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Running Slow: Causes &amp; Checks Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor Slow-Speed Troubleshooting Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-running-slow-causes-troubleshooting/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Slow-Speed Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor Slow-Speed Troubleshooting Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-slow-speed-troubleshooting-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
