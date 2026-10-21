<?php
$current_page     = 'dc-motor-keeps-stopping-during-operation';
$canonical_path   = 'blog/dc-motor-keeps-stopping-during-operation/';
$page_title       = 'DC Motor Keeps Stopping? 10 Causes | Globe Scott Motors';
$meta_description = 'DC motor keeps stopping mid-run? Learn the 10 causes, from thermal trips and battery sag to brush faults and brake drag, and how to log and test the stop event.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-keeps-stopping-during-operation.jpg';
$body_class       = 'post-template-default single single-post postid-2419 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/"
      },
      "headline": "Why Does a DC Motor Keep Stopping During Operation?",
      "name": "Why Does a DC Motor Keep Stopping During Operation?",
      "description": "DC motor keeps stopping mid-run? Learn the 10 causes, from thermal trips and battery sag to brush faults and brake drag, and how to log and test the stop event.",
      "url": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Troubleshooting, Motor Protection, Maintenance",
      "keywords": "dc motor keeps stopping, motor stops intermittently, thermal overload trip, motor controller fault, commutator dead spot, electromagnetic brake drag, battery voltage sag",
      "wordCount": 2400,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-keeps-stopping-during-operation.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-keeps-stopping-during-operation.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Diagnosing intermittent stoppages of an industrial PMDC motor installed on a production line."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#breadcrumb",
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
          "name": "DC Motor Keeps Stopping: Causes & Tests",
          "item": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why does my DC motor stop after running for a while and then restart on its own?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "That pattern usually points to a bimetal thermal protector opening when the winding gets too hot and reclosing once it cools. The first stop usually takes longest because the motor starts cold; later on and off cycles are shorter. Measure frame temperature and running current at the moment it stops, then remove the heat source (overload, blocked cooling or the wrong duty rating) instead of bypassing the protector."
          }
        },
        {
          "@type": "Question",
          "name": "Can a weak battery make a DC motor keep cutting out?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. During a current peak, battery internal resistance plus cable and joint resistance pull the controller voltage down by I × R. If it falls below the controller's under-voltage threshold or the BMS cut-off, the drive stops; once the load is removed the voltage recovers and it restarts. Log terminal voltage at the stop, clean and tighten every high-current joint, and replace batteries whose internal resistance has risen."
          }
        },
        {
          "@type": "Question",
          "name": "What is a commutator dead spot and how do I test for it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A dead spot is a shaft position where the motor cannot restart, usually because an open armature coil, lifted riser or burnt bar breaks one of the current paths. Armature resistance roughly doubles there, so starting torque roughly halves. Isolate the motor, connect a low-resistance ohmmeter across the terminals and turn the shaft slowly by hand; a reading that doubles or goes open at certain positions confirms it."
          }
        },
        {
          "@type": "Question",
          "name": "How do I check whether an electromagnetic brake is dragging?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Measure coil voltage at the brake terminals while it is energised and compare it with the nameplate tolerance, listen for a clean release click, and check the air gap with feeler gauges against the brake maker's maximum. With the brake released, the shaft should turn freely by hand. A brake that drags only when hot usually has a worn lining, an oversized gap or a sagging coil supply."
          }
        },
        {
          "@type": "Question",
          "name": "Can electrical noise cause a motor controller to stop the motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Fast transients from brush commutation, PWM switching, welders or unsuppressed contactor coils can couple into Hall, encoder or speed-reference cables, or into the controller's logic supply, and trigger a reset that looks like a random stop. Correlate stops with nearby equipment switching, add suppression at the noise source, separate signal and power cables, and terminate cable screens exactly as the drive manufacturer specifies."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my DC motor stop only when braking or reversing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "On a rectifier or switch-mode supply, a decelerating high-inertia load turns the motor into a generator and pushes energy back into the DC bus. The supply cannot absorb it, so bus voltage rises and the controller trips on over-voltage . Lengthen the deceleration ramp, fit a braking resistor, or use a supply that can accept regenerated energy. Battery systems usually absorb this energy without tripping."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/",
      "url": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/",
      "name": "DC Motor Keeps Stopping? 10 Causes | Globe Scott Motors",
      "description": "DC motor keeps stopping mid-run? Learn the 10 causes, from thermal trips and battery sag to brush faults and brake drag, and how to log and test the stop event.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/#primaryimage"
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
<h1>Why Does a DC Motor Keep Stopping During Operation?</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">DC Motor Keeps Stopping: Causes &amp; Tests</li></ol> </nav>
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
<article class="post-2419 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-dc-motor-troubleshooting tag-intermittent-motor-faults tag-thermal-protection tag-motor-controllers tag-pmdc-motors tag-globe-scott-motors" id="post-2419">

<img alt="PMDC motor on an industrial production line, illustrating why a DC motor keeps stopping during operation" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-keeps-stopping-during-operation.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A conveyor runs for forty minutes, cuts out, and is running again by the time the technician arrives. When a <strong>DC motor keeps stopping</strong> like this, the fault is rarely random: something is opening the circuit, telling the controller to shut down, or demanding more torque than the motor can deliver at that instant.</p>

<p>Intermittent faults are hard because the evidence disappears when the motor restarts. The answer is to capture the stop event and read the pattern of stopping and recovery. This guide covers the causes we see most often on <a href="/products-pmdc-motors/">PMDC motors</a> and <a href="/products-geared-motors/">industrial geared motors</a>, with the tests that separate them. If the motor will not start at all, see our <a href="/blog/dc-motor-not-starting-troubleshooting-guide/">DC motor not starting troubleshooting guide</a>; if it runs but surges, see <a href="/blog/dc-motor-speed-fluctuation-solutions/">DC motor speed fluctuation</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> A DC motor that keeps stopping is usually being stopped by one of three things:
<ol>
<li><strong>A protective device:</strong> thermal protector, controller over-current, voltage or temperature trip, or a battery BMS cut-off.</li>
<li><strong>A momentary open circuit:</strong> loose crimp, fatigued brush lead, sticking brush or commutator dead spot.</li>
<li><strong>A load or control event:</strong> torque peak above the current limit, dragging brake, bouncing interlock or EMI.</li>
</ol>
Log the stop event, then match the recovery pattern to the cause.
</div>

<hr/>

<h2>Read the Stop Pattern Before Opening the Motor</h2>

<p>How the motor stops, and above all how it comes back, narrows the search more than any single measurement. Ask the operator how long it runs before the first stop, how long it stays stopped, what brings it back, and what else was happening at that moment.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Stop Pattern</th><th>Most Likely Cause</th><th>First Check</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Runs 20–60 min, restarts by itself; later cycles shorter</strong></td><td>Thermal protector cycling</td><td>Frame temperature and current at the stop</td></tr>
<tr><td><strong>Stays stopped until supply or key is cycled</strong></td><td>Latched controller fault or polymer PTC fuse</td><td>Controller fault code</td></tr>
<tr><td><strong>Stops on ramps, lifts or heavy product</strong></td><td>Supply sag, under-voltage or BMS cut-off</td><td>Terminal voltage at the stop</td></tr>
<tr><td><strong>Stops while braking or reversing</strong></td><td>Over-voltage from regenerated energy</td><td>DC bus voltage during braking</td></tr>
<tr><td><strong>Stops at random when the machine moves</strong></td><td>Loose crimp, connector or brush lead</td><td>Wiggle test; joint voltage drop</td></tr>
<tr><td><strong>Stops at one shaft position; restarts if nudged</strong></td><td>Commutator dead spot or stuck brush</td><td>Resistance while turning the shaft</td></tr>
<tr><td><strong>Stops at the same point in the cycle</strong></td><td>Load peak, brake drag or interlock</td><td>Current and PLC inputs at that point</td></tr>
<tr><td><strong>Stops when nearby equipment switches</strong></td><td>EMI or supply dip</td><td>Correlate stops with that equipment</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Protective Trips: When a DC Motor Keeps Stopping by Design</h2>

<p>Often nothing is broken: a protective device is doing its job. Find out which device acted and why its trip condition keeps recurring.</p>

<h3>1. Thermal Protector Tripping and Auto-Resetting</h3>

<p>Many fractional-kW DC motors carry a bimetal protector that opens at a fixed temperature and recloses after the motor cools by a set differential, so the motor stops, cools and restarts by itself. A polymer PTC resettable fuse instead stays tripped until power is removed. The heating curve produces a tell-tale timing signature:</p>

<div class="gsm-equation">\[ \Delta\theta(t) = \Delta\theta_\infty \left(1 - e^{-t/\tau}\right) \quad \Rightarrow \quad t_{trip} = -\tau \ln\left(1 - \frac{\Delta\theta_{trip}}{\Delta\theta_\infty}\right) \]</div>

<p>Here \( \tau \) is the thermal time constant and the final rise \( \Delta\theta_\infty \) scales roughly with copper loss, and therefore with \( I^2 \).</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Worked Example: Why the First Stop Takes Longest</strong><br/>
A geared PMDC motor settles at a 75 K winding rise at rated current, with a 30-minute time constant. Its protector opens at 140 °C and recloses at 110 °C. Heavier product pushes current to 1.25 × rated in a 45 °C ambient. Assuming copper loss dominates:
<ul>
<li>Final rise: \( 75 \times 1.25^2 \approx 117\,\mathrm{K} \), heading for \( 45 + 117 = 162^\circ\mathrm{C} \).</li>
<li>Trip at 95 K rise. From cold: \( t = -30 \ln(1 - 95/117) = -30 \ln(0.188) \approx 50\,\mathrm{min} \).</li>
<li>Cooling to 65 K at standstill: \( t = 30 \ln(95/65) \approx 11\,\mathrm{min} \).</li>
<li>Re-heating 65 K to 95 K: \( t = 30 \ln\frac{117 - 65}{117 - 95} = 30 \ln(2.36) \approx 26\,\mathrm{min} \).</li>
</ul>
So the machine runs about 50 minutes, then cycles roughly 26 minutes on and 11 off: the classic "fine in the morning, cutting out after lunch" complaint. On a fan-cooled motor the standstill time constant is longer, so the off-periods stretch further.
</div>

<p>Measure frame temperature and current (with a Hall-effect DC clamp meter) immediately after a stop. Treat the protector as the messenger: the heat source is covered in our guide to <a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">DC motor overheating causes</a>. Never bridge out a protector to keep production running.</p>

<h3>2. Controller Over-Current, Voltage and Temperature Faults</h3>

<ul>
<li><strong>Over-current or stall timer:</strong> current sits at the limit with no speed for longer than the programmed time, and the controller latches off.</li>
<li><strong>Under-voltage:</strong> the supply dips below threshold during a current peak (cause 3).</li>
<li><strong>Over-voltage:</strong> a decelerating high-inertia load drives the motor as a generator. A battery absorbs the energy; a rectifier or switch-mode supply cannot, so the drive trips during braking or reversing.</li>
<li><strong>Over-temperature:</strong> the drive heatsink overheats, common in sealed panels during a 45–50 °C summer.</li>
</ul>
<p>Read the fault code before resetting anything and enable fault history if available; one recorded code eliminates half the possibilities here. For over-current trips, see <a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC motor high current draw</a>.</p>

<h3>3. Battery Sag and BMS Low-Voltage Cut-Off</h3>

<p>On trolleys, scrubber-driers and golf carts, the controller sees:</p>

<div class="gsm-equation">\[ V_{ctrl} = V_{oc} - I \left( R_{int} + R_{cable} + R_{joints} \right) \]</div>

<h4>Worked Example: A 24 V Trolley That Stops on the Ramp</h4>
<p>Two 12 V lead-acid batteries at about 50 % charge give 24.4 V open-circuit. Loop resistance: ageing batteries 28 mΩ, 4 m of 16 mm² cable \( (0.0172 \times 4 / 16 = 4.3\,\mathrm{m\Omega}) \) and about 8 mΩ of contactor, fuse and lugs, roughly 40 mΩ in all. Under-voltage cut-out: 20.0 V.</p>
<ul>
<li>Cruising at 40 A: \( 24.4 - 40 \times 0.040 = 22.8\,\mathrm{V} \). Fine.</li>
<li>Ramp at 120 A: \( 24.4 - 120 \times 0.040 = 19.6\,\mathrm{V} \). The controller cuts out, current falls, voltage recovers and it re-enables.</li>
</ul>
<p>A full pack (about 25.4 V) still holds 20.6 V, which is why the fault "only happens in the afternoon"; one corroded lug adding 10 mΩ costs another 1.2 V at 120 A. Clean and torque high-current joints, size cables for drop at peak current rather than ampacity, replace high-resistance batteries and soften the acceleration ramp. Never lower a lithium BMS cut-off to cure nuisance stops. Traction sizing is covered in <a href="/blog/pmdc-transaxle-motors-for-golf-carts-and-small-evs/">PMDC transaxle motors for golf carts and small EVs</a>.</p>

<hr/>

<h2>Intermittent Open Circuits: Connections, Brushes and Commutator</h2>

<h3>4. Loose Crimps, Connectors and Brush-Lead Fatigue</h3>

<p>Vibration, thermal cycling and monsoon humidity raise the resistance of crimps and connectors until one opens momentarily. Inside the motor, each brush's flexible copper shunt fatigues; as strands break, current flows through the brush spring, which overheats, loses its temper and stops pressing the brush onto the commutator.</p>

<div class="row align-items-center mb-30">
<div class="col-md-7">
<h4>How to Diagnose It:</h4>
<ul>
<li><strong>Wiggle test:</strong> at light load, flex each harness section and connector while watching current.</li>
<li><strong>Voltage-drop test:</strong> measure millivolts across each joint under normal load.</li>
<li>Isolated: inspect brush shunts for broken strands and springs for discolouration.</li>
</ul>
</div>
<div class="col-md-5">
<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px;"><strong>Field Rule of Thumb:</strong><br/>More than about 0.1 V across one crimp or bolted joint, or 0.2–0.3 V across a contactor, at running current is suspect.</div>
</div>
</div>

<h3>5. Brushes Hanging Up or Worn to Minimum Length</h3>

<p>A brush that sticks in its holder (packed carbon dust, post-monsoon corrosion, a heat-distorted holder) stops following the commutator, so the motor drops out whenever it lifts. A brush worn to minimum length does the same once its spring hits the end stop. Check each brush slides freely and is above the replacement length; Globe Scott PMDC motors can be supplied with externally accessible brushes, making this a quick check. Intervals are in our <a href="/dc-motor-maintenance/">DC motor maintenance guide</a>.</p>

<h3>6. Commutator Dead Spot</h3>

<p>If the motor always stops at the same shaft position and restarts when nudged, suspect a dead spot. An open coil, lifted riser or burnt bar breaks one of the two parallel paths in a two-pole winding whenever that coil is in circuit; resistance roughly doubles there, so restart torque roughly halves. With the motor isolated, turn the shaft slowly while reading terminal resistance: a value that doubles or goes open at certain positions confirms it. Bar-to-bar testing is covered in the not-starting guide linked above.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Intermittent Stop Diagnostic Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable shop-floor checklist with a stop-pattern triage table, data-logging set-up, joint voltage-drop limits, brush and dead-spot checks, and brake air-gap verification steps.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Load, Brake and Control-Circuit Causes</h2>

<h3>7. Load Peaks That Exceed the Current Limit</h3>

<p>A current-limited controller caps output torque at:</p>

<div class="gsm-equation">\[ T_{out,max} = K_t \cdot I_{lim} \cdot i \cdot \eta_g \]</div>

<p>With \( K_t = 0.11\,\mathrm{Nm/A} \), a 30 A limit, a 30:1 gearbox and 85 % efficiency: \( 0.11 \times 30 \times 30 \times 0.85 \approx 84\,\mathrm{Nm} \). A jam needing 90 Nm stalls the motor, the stall timer trips the drive, and it runs normally once the jam clears. If the load has permanently grown, see how to choose a motor when the <a href="/blog/motor-insufficient-torque-under-load-how-to-choose/">machine cannot handle the required load</a>.</p>

<h3>8. Electromagnetic Brake Not Fully Releasing</h3>

<p>A spring-applied brake must pull its armature plate across an air gap. Pull-in force falls steeply as lining wear widens the gap, and coil current falls as the coil heats:</p>

<div class="gsm-equation">\[ I_{coil} = \frac{V_{coil}}{R_{20}\left[1 + 0.00393\,(T - 20)\right]} \]</div>

<p>At 100 °C coil resistance is \( 1 + 0.00393 \times 80 = 1.31 \) times its 20 °C value, so current is about 24 % lower. Add a sagging supply or worn lining and a brake that released cleanly when cold drags on a hot afternoon; the motor fights it and a protective trip stops it. Check coil voltage at the brake terminals against nameplate tolerance, listen for a clean release click, and measure the air gap against the brake maker's maximum. Our <a href="/products-pmdc-geared-motors/">PMDC geared motors</a> are available with electromagnetic brakes.</p>

<h3>9. Limit Switches, Interlocks and E-Stop Chains</h3>

<p>A worn interlock actuator, a bouncing limit switch or a loose terminal in an E-stop chain can drop the run command for milliseconds, long enough to release a contactor. Trend PLC inputs with time stamps: a run-enable that drops before the current does clears the motor immediately.</p>

<h3>10. EMI Resetting the Controller</h3>

<p>Commutation, PWM switching, welders and unsuppressed coils generate fast transients that can couple into unscreened Hall, encoder or reference cables and reset the controller. Suppress at the source with capacitors across the motor terminals and snubbers across relay and brake coils (a plain diode slows brake engagement; use a diode–Zener where stopping distance matters), and route signal cables away from power cables. Our <a href="/products-geared-motors/">geared motors</a> can be supplied with EMI suppression filters.</p>

<hr/>

<h2>How to Capture the Stop Event: A Field Procedure</h2>

<p>Read and photograph the controller fault code first. Then data-log motor current, voltage at both the motor terminals and the supply, frame temperature and the run-enable signal. Sample current and voltage at 1 kHz or faster to catch millisecond dips; temperature at 1 Hz is enough. Change one thing at a time and confirm the stop does not recur over a full shift.</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Logged Channel</th><th>Healthy at the Stop</th><th>Fault Signature</th></tr>
</thead>
<tbody>
<tr><td><strong>Motor current</strong></td><td>Falls only after the run command drops</td><td>Pinned at limit first: load peak. Zero first: open circuit or trip</td></tr>
<tr><td><strong>Terminal vs supply voltage</strong></td><td>Within a few per cent at peak current</td><td>Large gap: cable or joints. Both sag: battery or supply</td></tr>
<tr><td><strong>Frame temperature</strong></td><td>Stable, well below protector setting</td><td>Same value at every stop: thermal protector</td></tr>
<tr><td><strong>Run-enable input</strong></td><td>Constant while running</td><td>Drops first: interlock or E-stop chain</td></tr>
<tr><td><strong>Controller fault log</strong></td><td>Empty</td><td>Identifies the over-current, voltage or temperature trip</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Designing Out Repeat Stoppages</h2>

<ul>
<li>Match the duty rating (S1, S2 or S3) to the real cycle in the worst summer ambient.</li>
<li>Size cables and battery links for voltage drop at peak current, and use sealed, latched connectors with strain relief on moving harnesses.</li>
<li>Coordinate protection: controller current limit first, then the motor's thermal protector, then the fuse.</li>
<li>Where brush intermittency keeps recurring in high-hour duty, consider <a href="/products-bldc-motors/">BLDC motors</a>; see <a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">brushed vs brushless motor maintenance</a> for the trade-offs.</li>
</ul>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. Why does my DC motor stop after running for a while and then restart on its own?</h3>
<p>That pattern usually points to a <strong>bimetal thermal protector</strong> opening when the winding gets too hot and reclosing once it cools. The first stop usually takes longest because the motor starts cold; later on and off cycles are shorter. Measure frame temperature and running current at the moment it stops, then remove the heat source (overload, blocked cooling or the wrong duty rating) instead of bypassing the protector.</p>

<h3>Q2. Can a weak battery make a DC motor keep cutting out?</h3>
<p>Yes. During a current peak, battery internal resistance plus cable and joint resistance pull the controller voltage down by I × R. If it falls below the controller's under-voltage threshold or the BMS cut-off, the drive stops; once the load is removed the voltage recovers and it restarts. Log terminal voltage at the stop, clean and tighten every high-current joint, and replace batteries whose internal resistance has risen.</p>

<h3>Q3. What is a commutator dead spot and how do I test for it?</h3>
<p>A dead spot is a shaft position where the motor cannot restart, usually because an open armature coil, lifted riser or burnt bar breaks one of the current paths. Armature resistance roughly doubles there, so starting torque roughly halves. Isolate the motor, connect a low-resistance ohmmeter across the terminals and turn the shaft slowly by hand; a reading that doubles or goes open at certain positions confirms it.</p>

<h3>Q4. How do I check whether an electromagnetic brake is dragging?</h3>
<p>Measure coil voltage at the brake terminals while it is energised and compare it with the nameplate tolerance, listen for a clean release click, and check the air gap with feeler gauges against the brake maker's maximum. With the brake released, the shaft should turn freely by hand. A brake that drags only when hot usually has a worn lining, an oversized gap or a sagging coil supply.</p>

<h3>Q5. Can electrical noise cause a motor controller to stop the motor?</h3>
<p>Yes. Fast transients from brush commutation, PWM switching, welders or unsuppressed contactor coils can couple into Hall, encoder or speed-reference cables, or into the controller's logic supply, and trigger a reset that looks like a random stop. Correlate stops with nearby equipment switching, add suppression at the noise source, separate signal and power cables, and terminate cable screens exactly as the drive manufacturer specifies.</p>

<h3>Q6. Why does my DC motor stop only when braking or reversing?</h3>
<p>On a rectifier or switch-mode supply, a decelerating high-inertia load turns the motor into a generator and pushes energy back into the DC bus. The supply cannot absorb it, so bus voltage rises and the controller trips on <strong>over-voltage</strong>. Lengthen the deceleration ramp, fit a braking resistor, or use a supply that can accept regenerated energy. Battery systems usually absorb this energy without tripping.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>A DC motor that keeps stopping is reporting a condition, not a mystery. Protective trips point to heat, current or voltage; open circuits point to connections, brushes and the commutator; load and control events point outside the motor. Capture the stop, match the recovery pattern to the cause, and fix the condition rather than the symptom.</p>

<p>If the motor is working outside its rating, our engineers can review your load, duty cycle and supply data and recommend a correctly rated PMDC, geared or BLDC drive. <a href="/contact-us/">Send your application details to our engineering team</a>.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is Your DC Motor Stopping Without an Obvious Cause?</strong></h3>
<p style="margin-bottom: 0;">Share your logged current, voltage and temperature data together with the load profile, duty cycle and supply arrangement. Globe Scott engineers will help identify the root cause and recommend a correctly rated PMDC, geared or BLDC drive for your machine.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Troubleshooting, Intermittent Motor Faults, Thermal Protection, Motor Controllers, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/dc-motor-high-current-draw-causes-solutions/">
<h4 class="post-title">Why Does a DC Motor Draw Too Much Current? Causes and Solutions</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/geared-motor-making-noise-causes-diagnosis-solutions/">
<h4 class="post-title">Why Is Your Geared Motor Making Noise? Causes, Diagnosis and Solutions</h4>
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
<li><a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">Why Does a DC Motor Overheat? 7 Causes &amp; Fixes</a></li>
<li><a href="/blog/dc-motor-not-starting-troubleshooting-guide/">DC Motor Not Starting: Troubleshooting Guide</a></li>
<li><a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC Motor High Current Draw: Causes &amp; Solutions</a></li>
<li><a href="/dc-motor-maintenance/">DC Motor Maintenance Guide</a></li>
<li><a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">Brushed vs Brushless Motor Maintenance</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Engineering SOP Checklist</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Intermittent Stop Diagnostic Checklist</h3>
          <p class="gsm-modal-subtitle">A step-by-step field procedure to capture the stop event, identify which device tripped, and isolate intermittent electrical or mechanical faults.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Stop-Pattern Triage:</strong> Match the recovery pattern to the most likely cause</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Data-Logging Set-Up:</strong> Channels, sample rates and what each fault signature means</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Isolated Bench Checks:</strong> Brush, dead-spot, brake air-gap and joint voltage-drop tests</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Keeps Stopping: Causes &amp; Tests Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor Intermittent Stop Diagnostic Checklist">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-keeps-stopping-during-operation/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Intermittent Stop Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor Intermittent Stop Diagnostic Checklist immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-intermittent-stop-diagnostic-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
