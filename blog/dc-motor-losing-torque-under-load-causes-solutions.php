<?php
$current_page     = 'dc-motor-losing-torque-under-load-causes-solutions';
$canonical_path   = 'blog/dc-motor-losing-torque-under-load-causes-solutions/';
$page_title       = 'DC Motor Losing Torque? Causes & Fixes | Globe Scott Motors';
$meta_description = 'DC motor losing torque under load? Learn the six causes, from magnet demagnetisation to voltage sag, and the field tests that pinpoint each one quickly.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-losing-torque-under-load-causes-solutions.jpg';
$body_class       = 'post-template-default single single-post postid-2416 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/"
      },
      "headline": "Why Is Your DC Motor Losing Torque Under Load? Causes and Solutions",
      "name": "Why Is Your DC Motor Losing Torque Under Load? Causes and Solutions",
      "description": "DC motor losing torque under load? Learn the six causes, from magnet demagnetisation to voltage sag, and the field tests that pinpoint each one quickly.",
      "url": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Troubleshooting, Torque, Maintenance",
      "keywords": "dc motor losing torque, dc motor torque drop, pmdc magnet demagnetization, motor torque constant kt, voltage drop under load, armature current limit, back emf constant test",
      "wordCount": 2441,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-losing-torque-under-load-causes-solutions.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-losing-torque-under-load-causes-solutions.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Workshop inspection of an electric motor's copper windings, part of diagnosing a DC motor that is losing torque under load."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#breadcrumb",
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
          "name": "DC Motor Torque Loss: Causes & Fixes",
          "item": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Can a DC motor lose torque over time?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A brushed DC motor can lose torque gradually through brush wear and rising contact resistance, or suddenly through magnet demagnetisation after a stall, a full-voltage reversal or severe overheating. Torque can also appear to fall when the battery ages, a cable joint degrades or gearbox friction rises. Comparing today's cold no-load speed, current and terminal voltage with the original test data shows which has changed."
          }
        },
        {
          "@type": "Question",
          "name": "How do I know if the magnets in a PMDC motor are weak?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Run the motor cold and uncoupled at a measured voltage and record speed and current. Weak magnets make it run faster than its original no-load speed while drawing slightly more no-load current, because the back-EMF constant Ke has fallen. Calculate Ke = (V − I × R − brush drop) ÷ ω and compare it with the original; a drop of more than about 5 % indicates real flux loss."
          }
        },
        {
          "@type": "Question",
          "name": "Does low voltage reduce DC motor torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Low voltage does not change the torque produced per ampere, but it reduces the current the motor can draw at any given speed, so the torque available at that speed falls. At stall, maximum torque is proportional to the terminal voltage minus the brush drop. That is why a sagging battery, a long thin cable or a high-resistance joint makes a motor bog down on peaks it used to handle."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my DC motor lose torque when it gets hot?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two reversible effects combine. Copper winding resistance rises about 0.393 % per °C, limiting current, and ferrite magnets lose roughly 0.18–0.2 % of their flux per °C, lowering torque per ampere. A winding at 100 °C with magnets at 70 °C can cut the stall-torque ceiling by around 30 % compared with a cold motor. If full torque returns after cooling, treat the heat source as the root cause."
          }
        },
        {
          "@type": "Question",
          "name": "Can a demagnetised PMDC motor be repaired?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not in the field. Irreversible flux loss is not cured by cleaning, rewinding the armature or changing brushes, so the usual remedy is replacing the motor. More importantly, remove what caused it: full-voltage reversing, repeated stalls on a stiff supply, a current limit set above the motor's peak rating, or overheating. Otherwise the replacement will suffer the same flux loss."
          }
        },
        {
          "@type": "Question",
          "name": "Is torque loss a sign that my motor is undersized?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only if the motor never handled the load properly. If it delivered rated torque at commissioning and has weakened since, the cause is degradation, supply or controller related, and this guide applies. If the load has grown or the motor struggled from the start, the drive needs re-sizing; see our guide to choosing a motor for a machine that cannot handle its load ."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/",
      "url": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/",
      "name": "DC Motor Losing Torque? Causes & Fixes | Globe Scott Motors",
      "description": "DC motor losing torque under load? Learn the six causes, from magnet demagnetisation to voltage sag, and the field tests that pinpoint each one quickly.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/#primaryimage"
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
<h1>Why Is Your DC Motor Losing Torque Under Load? Causes and Solutions</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">DC Motor Torque Loss: Causes &amp; Fixes</li></ol> </nav>
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
<article class="post-2416 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-dc-motor-torque tag-pmdc-motors tag-magnet-demagnetisation tag-motor-troubleshooting tag-torque-constant tag-globe-scott-motors" id="post-2416">

<img alt="Technician holding an electric motor stator with copper windings, illustrating a DC motor losing torque under load" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-losing-torque-under-load-causes-solutions.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A <strong>DC motor losing torque</strong> under load is a frustrating fault because the motor usually still runs. It spins freely on the bench, then bogs down, stalls on the breakaway peak or slows sharply the moment the conveyor, trolley or actuator takes up its normal load. If the same motor delivered rated torque at commissioning, something has changed: the magnets, the supply, the controller, the brush gear or the machinery around it.</p>

<p>This guide is for engineers working with brushed <a href="/products-pmdc-motors/">permanent magnet DC (PMDC) motors</a> and <a href="/products-geared-motors/">industrial geared DC motors</a> that were once adequate. It covers the physics that limits torque, six causes of degradation and the field tests, with a worked calculation, that identify each one. If the load itself has grown beyond the original sizing, that is a selection problem, covered in <a href="/blog/motor-insufficient-torque-under-load-how-to-choose/">choosing a motor when the machine cannot handle the required load</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> DC motor torque equals the torque constant (set by magnet flux) multiplied by armature current, so torque falls when either term falls:
<ol>
<li><strong>Less torque per amp:</strong> demagnetised magnets, or magnets running hot.</li>
<li><strong>Fewer amps available:</strong> terminal-voltage sag, a low controller current limit, worn brushes or hot, high-resistance windings.</li>
<li><strong>Torque consumed before the load:</strong> worn gears, dry bearings or a dragging brake.</li>
</ol>
Measure terminal voltage under load and back-calculate Ke from a cold no-load test to tell them apart.
</div>

<h2>The Physics: Where DC Motor Torque Comes From</h2>

<p>In a PMDC motor, shaft torque is proportional to armature current, with a constant set by the air-gap flux:</p>

<div class="gsm-equation">\[ T = K_t \cdot I_a, \qquad K_t = k\,\Phi \]</div>

<p>In SI units the torque constant \( K_t \) (Nm/A) equals the back-EMF constant \( K_e \) (V·s/rad). That equality makes field diagnosis possible: flux is hard to measure, but speed and voltage give you \( K_e \), and therefore \( K_t \). The current available to make torque is limited by the supply and the circuit resistance:</p>

<div class="gsm-equation">\[ I_a = \frac{V - E_b - V_{brush}}{R_a}, \qquad E_b = K_e\,\omega \]</div>

<p>At stall the back-EMF vanishes and torque reaches its ceiling, \( T_{stall} = K_t (V - V_{brush})/R_a \). Every cause of torque loss attacks one of three things: the flux, the current that can actually flow, or the share of torque that reaches the load rather than being absorbed by friction. The underlying relationships are covered in our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">practical guide to motor torque and speed calculation</a>.</p>

<hr/>

<h2>Six Reasons for a DC Motor Losing Torque Under Load</h2>

<h3>1. Magnet Demagnetisation</h3>

<p>The ferrite magnets in most industrial PMDC motors resist demagnetisation well, but the armature's own field opposes them in proportion to armature current. A large enough current pulse drives part of the magnet past the knee of its demagnetisation curve, and that flux does not return. Typical triggers:</p>

<ul>
<li><strong>Locked-rotor events on a stiff supply,</strong> where only armature resistance limits current, commonly 5 to 15 times rated current in fractional-kW motors.</li>
<li><strong>Reversing at full voltage (plugging).</strong> Supply voltage and back-EMF add, so current approaches \( (V + E_b)/R_a \), close to twice the stall current.</li>
<li><strong>Heavy current pulses when cold.</strong> Ferrite's coercivity falls as temperature drops, so the same pulse does more damage in a cold motor.</li>
<li><strong>Severe overheating.</strong> In ferrite, heat mainly causes reversible loss (cause 5) but can crack or debond magnets; rare-earth (NdFeB) magnets lose coercivity when hot, making irreversible loss far more likely.</li>
</ul>

<p>The signature is distinctive: no-load speed rises (\( \omega_0 \approx V/K_e \)), no-load current rises slightly, and the motor draws more current for the same work. On a current-limited controller this shows up at once as lost torque; on a stiff supply it shows up first as heat, later as a weak breakaway.</p>

<h4>How to Fix It:</h4>
<ul>
<li>Irreversible flux loss cannot be restored in the field; replace the motor.</li>
<li>Remove the trigger: ramp through zero speed before reversing, keep the current limit within the motor's rated peak and add stall detection on machines that can jam.</li>
</ul>

<h3>2. Terminal Voltage Sag Under Load</h3>

<p>Available torque depends on the voltage at the motor terminals, not at the battery or power supply. Source resistance adds directly to the armature resistance:</p>

<div class="gsm-equation">\[ T_{max} = \frac{K_t\,(V_{oc} - V_{brush})}{R_a + R_{source}} \]</div>

<p>\( V_{oc} \) is the open-circuit supply voltage; \( R_{source} \) covers battery internal resistance, cable, fuses, contactors and crimps. On a 24 V motor with 0.18 Ω armature resistance, an extra 50 mΩ from an ageing battery and a long, thin cable scales available current and torque by 0.18/0.23 ≈ 0.78, a 22 % loss. Usual culprits are sulphated batteries, low charge late in a shift, cables extended during a relocation and rectified supplies that sag with the grid at peak hours.</p>

<h4>How to Diagnose It:</h4>
<ul>
<li>Measure voltage at the motor terminals and at the supply simultaneously, motor loaded; the difference is the circuit drop.</li>
<li>Measure the drop across each joint and contactor pole; one dropping several times more than similar joints is the fault.</li>
<li>Design target: total circuit drop within about 3 % of nominal voltage at rated current.</li>
</ul>

<h3>3. Controller Current Limit Set Too Low</h3>

<p>Battery and PWM controllers clamp armature current, and because \( T = K_t I_a \), the current limit is also a torque limit. A replacement controller with a conservative default, a limit trimmed after an earlier failure, or thermal foldback in a 45 °C summer enclosure all produce a motor that appears to have lost torque. Some controllers also cut the limit as battery voltage falls.</p>

<div class="row align-items-center mb-30">
<div class="col-md-7">
<h4>How to Diagnose It:</h4>
<ul>
<li>Log armature current while the machine bogs down.</li>
<li>Current climbing to a flat plateau while speed collapses means the controller is limiting, not the motor.</li>
<li>Compare the plateau with the setting and with what the load needs: (load torque + friction torque) ÷ \( K_t \), referred through the gearbox.</li>
</ul>
</div>
<div class="col-md-5">
<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px;"><strong>Field Rule of Thumb:</strong><br/>Raise a current limit only within the rated peak of both motor and gearbox. A higher limit also means a stronger demagnetising field and higher gear-tooth stress.</div>
</div>
</div>

<h3>4. Brush Wear and Commutator Film Problems</h3>

<p>The brush-commutator contact behaves like an extra voltage drop, typically 1–2 V in total for carbon and electrographite grades and less for the metal-graphite brushes common on low-voltage motors. Short brushes with weak springs, glazed faces, the wrong grade fitted at the last change, or a patchy, blackened commutator film all raise it. On a 24 V motor, an extra 1.5 V of brush drop cuts the voltage driving stall current, and so the stall-torque ceiling, by about 6.5 %. Check brush length, spring force and film as described in our <a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC motor maintenance and troubleshooting guide</a>.</p>

<h3>5. Hot Windings and Reversible Flux Loss</h3>

<p>Even a healthy motor makes less torque hot than cold. Copper resistance rises with temperature:</p>

<div class="gsm-equation">\[ R_T = R_{20}\left[1 + 0.00393\,(T - 20)\right] \]</div>

<p>At 100 °C the winding resistance is 1.31 times its 20 °C value, while ferrite magnets lose roughly 0.18–0.2 % of flux per °C, reversibly; with magnets at 70 °C, \( K_t \) is about 9–10 % down. Combined, the stall-torque ceiling falls to roughly \( 0.905/1.31 \approx 0.69 \) of its cold value. That is why a machine that clears its breakaway load at the start of a shift can stall on the same load two hours later. If full torque returns after cooling, the root cause is thermal; see <a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">DC motor overheating causes</a>.</p>

<h3>6. Added Mechanical Drag Masquerading as Torque Loss</h3>

<p>The motor may produce as much torque as ever while more is consumed before the load. Worn gears and dry bearings raise friction, worm gearboxes lose efficiency as the wheel wears, and an electromagnetic brake that does not fully release (low coil voltage, wrong air gap) drags continuously:</p>

<div class="gsm-equation">\[ T_{out} = (K_t I_a - T_f) \cdot i \cdot \eta_g \]</div>

<p>Here \( T_f \) is motor friction torque, \( i \) the ratio and \( \eta_g \) gear efficiency. A worm stage falling from 70 % to 55 % efficiency removes over a fifth of output torque with no change in the motor.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Torque Loss Diagnostic Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable field procedure covering terminal-voltage, current-limit, no-load Ke and locked-rotor tests, with a worked back-EMF worksheet and pass/fail guidance for each cause.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Field Tests That Identify the Cause</h2>

<p>Four measurements, taken in order, separate the six causes. You need a calibrated multimeter, a true-DC Hall-effect clamp meter and a tachometer. If the complaint is mainly speed, see our guide on a <a href="/blog/dc-motor-running-slow-causes-troubleshooting/">DC motor running slow</a>; if amps are the concern, see <a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC motor high current draw</a>.</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Test</th><th>How to Perform It</th><th>Healthy Result</th><th>Deviation Points To</th></tr>
</thead>
<tbody>
<tr><td><strong>1. Terminal voltage under load</strong></td><td>Motor terminals and supply measured together, motor loaded</td><td>Circuit drop within about 3 %</td><td>Battery, cable, joints, contactor (cause 2)</td></tr>
<tr><td><strong>2. Current at bog-down</strong></td><td>Log current as speed collapses</td><td>Current rises smoothly with load</td><td>Flat plateau: current limit or foldback (cause 3)</td></tr>
<tr><td><strong>3. Cold, decoupled no-load test</strong></td><td>Motor at ambient, uncoupled; exact voltage, current, speed</td><td>\( K_e \) within about 5 %, no-load current within about 10 % of original</td><td>Higher speed and current: flux loss (cause 1)</td></tr>
<tr><td><strong>4. Locked-rotor test at reduced voltage</strong></td><td>Rotor blocked, about rated current, a few seconds at several shaft positions</td><td>\( V/I \) close to original at the same current, consistent</td><td>High R: brushes or joints (cause 4); normal motor: look downstream (cause 6)</td></tr>
</tbody>
</table>
</div>

<h3>Worked Example: Back-Calculating Kt From a No-Load Test</h3>

<p>Rearranging the voltage equation at no load gives the back-EMF constant directly:</p>

<div class="gsm-equation">\[ K_e = \frac{V - I_0 R_a - V_{brush}}{\omega_0}, \qquad \omega_0 = \frac{2\pi N_0}{60} \]</div>

<p>A 24 V, 250 W PMDC motor on a battery trolley now stalls on a ramp it used to climb. Its original test data shows 3,350 rpm and 1.20 A at 24.0 V, no load; armature-plus-brush resistance is 0.18 Ω and brush drop about 1.0 V:</p>

<div class="gsm-equation">\[ K_e = \frac{24.0 - 1.20 \times 0.18 - 1.0}{2\pi \times 3350/60} = \frac{22.78}{350.8} = 0.0650\,\mathrm{V\,s/rad} \]</div>

<p>Tested today, cold and decoupled at 24.0 V, it runs at 3,750 rpm and draws 1.35 A:</p>

<div class="gsm-equation">\[ K_e = \frac{24.0 - 1.35 \times 0.18 - 1.0}{2\pi \times 3750/60} = \frac{22.76}{392.7} = 0.0580\,\mathrm{V\,s/rad} \]</div>

<p>\( K_t \) has fallen to 0.0580/0.0650 = 0.892 of its original value, a 10.8 % flux loss. Two cross-checks confirm a magnetic cause: friction torque \( K_e I_0 \) is unchanged (0.0650 × 1.20 = 0.078 Nm then, 0.0580 × 1.35 = 0.078 Nm now), and no-load speed has risen, which drag or a supply fault could never cause.</p>

<p>The consequence: at the trolley's 30 A controller limit, maximum shaft torque falls from 0.0650 × 30 − 0.078 = 1.87 Nm to 0.0580 × 30 − 0.078 = 1.66 Nm, the 11 % shortfall the ramp exposes. At the rated 0.80 Nm, current rises from 13.5 A to 15.1 A and copper loss by about 25 %, so the motor runs hotter and loses still more flux reversibly.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Test Guidance:</strong><br/>
Always compare cold with cold. Magnets 40 K warmer than in the original test show a 7–8 % "flux loss" that is entirely reversible. Readings at two voltages, using \( K_e \approx \Delta V / \Delta\omega \), largely cancel the brush drop on 12 V and 24 V motors.
</div>

<hr/>

<h2>Torque Loss Diagnostic Matrix</h2>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Observed Symptom</th><th>Most Likely Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Weak under load, fast at no load</strong></td><td>Magnet flux loss</td><td>Cold \( K_e \) over 5 % below original</td><td>Replace motor; soft reversal; correct current limit</td></tr>
<tr><td><strong>Bogs down on peaks; flat current plateau</strong></td><td>Current limit or thermal foldback</td><td>Current log vs parameter setting</td><td>Reset limit within peak ratings; cool the controller</td></tr>
<tr><td><strong>Weak late in shift or on long cables</strong></td><td>Voltage sag</td><td>Terminal vs supply voltage, loaded</td><td>Charge or replace battery; upsize cable; remake joints</td></tr>
<tr><td><strong>Strong cold, weak after warm-up</strong></td><td>Hot windings, reversible flux loss</td><td>Frame temperature; locked-rotor R hot vs cold</td><td>Remove heat source; improve cooling; review duty</td></tr>
<tr><td><strong>Sparking, weak at breakaway</strong></td><td>Worn brushes, weak springs, poor film</td><td>Brush length, spring force, locked-rotor R</td><td>Correct-grade brushes, bedded in; restore film</td></tr>
<tr><td><strong>Decoupled motor normal, machine sluggish</strong></td><td>Gear wear, bearings, brake drag</td><td>Hand rotation; brake gap and coil voltage</td><td>Repair driveline; set brake correctly</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Preventing Torque Loss in Service</h2>

<ol>
<li><strong>Ramp, never plug.</strong> Bringing the motor to rest before reversing removes the largest demagnetising current most PMDC motors ever see.</li>
<li><strong>Set the current limit deliberately</strong> and record it, so a replacement controller is configured the same way.</li>
<li><strong>Size the supply path</strong> for about 3 % drop at rated current, with battery capacity for the end of the shift, not the first hour.</li>
<li><strong>Baseline every motor</strong> with cold no-load voltage, current and speed at commissioning. Globe Scott PMDC motors are dynamometer load-tested for torque, speed, current and efficiency, and their magnets are checked for flux density and coercivity; our article on <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">motor testing before a unit ships</a> explains what those tests establish.</li>
<li><strong>Remove brush-related causes</strong> on high-hour or sealed duties: <a href="/products-bldc-motors/">BLDC motors</a> with matched drivers have no brush drop or commutator film and manage current electronically.</li>
</ol>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. Can a DC motor lose torque over time?</h3>
<p>Yes. A brushed DC motor can lose torque gradually through brush wear and rising contact resistance, or suddenly through magnet demagnetisation after a stall, a full-voltage reversal or severe overheating. Torque can also appear to fall when the battery ages, a cable joint degrades or gearbox friction rises. Comparing today's cold no-load speed, current and terminal voltage with the original test data shows which has changed.</p>

<h3>Q2. How do I know if the magnets in a PMDC motor are weak?</h3>
<p>Run the motor cold and uncoupled at a measured voltage and record speed and current. Weak magnets make it run faster than its original no-load speed while drawing slightly more no-load current, because the back-EMF constant Ke has fallen. Calculate Ke = (V − I × R − brush drop) ÷ ω and compare it with the original; a drop of more than about 5 % indicates real flux loss.</p>

<h3>Q3. Does low voltage reduce DC motor torque?</h3>
<p>Low voltage does not change the torque produced per ampere, but it reduces the current the motor can draw at any given speed, so the torque available at that speed falls. At stall, maximum torque is proportional to the terminal voltage minus the brush drop. That is why a sagging battery, a long thin cable or a high-resistance joint makes a motor bog down on peaks it used to handle.</p>

<h3>Q4. Why does my DC motor lose torque when it gets hot?</h3>
<p>Two reversible effects combine. Copper winding resistance rises about 0.393 % per °C, limiting current, and ferrite magnets lose roughly 0.18–0.2 % of their flux per °C, lowering torque per ampere. A winding at 100 °C with magnets at 70 °C can cut the stall-torque ceiling by around 30 % compared with a cold motor. If full torque returns after cooling, treat the heat source as the root cause.</p>

<h3>Q5. Can a demagnetised PMDC motor be repaired?</h3>
<p>Not in the field. Irreversible flux loss is not cured by cleaning, rewinding the armature or changing brushes, so the usual remedy is replacing the motor. More importantly, remove what caused it: full-voltage reversing, repeated stalls on a stiff supply, a current limit set above the motor's peak rating, or overheating. Otherwise the replacement will suffer the same flux loss.</p>

<h3>Q6. Is torque loss a sign that my motor is undersized?</h3>
<p>Only if the motor never handled the load properly. If it delivered rated torque at commissioning and has weakened since, the cause is degradation, supply or controller related, and this guide applies. If the load has grown or the motor struggled from the start, the drive needs re-sizing; see our guide to <a href="/blog/motor-insufficient-torque-under-load-how-to-choose/">choosing a motor for a machine that cannot handle its load</a>.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>A DC motor that has started losing torque is telling you that flux, available current or driveline efficiency has changed. Terminal voltage under load, current at bog-down and a cold no-load \( K_e \) separate those possibilities within an hour, and stop you replacing a healthy motor that sits on a weak battery or behind a mis-set controller. If the readings point to a motor that no longer suits the duty, <a href="/contact-us/">contact our application engineers</a> with the nameplate data, original test values and today's results.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is a Motor in Your Machine Losing Torque Under Load?</strong></h3>
<p style="margin-bottom: 0;">Send our application engineers your motor&#x27;s nameplate data, original test values, today&#x27;s no-load speed and current, the terminal voltage under load and your duty cycle. We will help you pinpoint the cause and, where needed, specify a PMDC, geared or BLDC motor with the torque margin your machine needs.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Torque, PMDC Motors, Magnet Demagnetisation, Motor Troubleshooting, Torque Constant, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">
<h4 class="post-title">Why Does a DC Motor Overheat? 7 Common Causes and How to Fix Them</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/dc-motor-running-slow-causes-troubleshooting/">
<h4 class="post-title">Why Does a DC Motor Run Slowly? Common Causes and Troubleshooting Steps</h4>
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
<li><a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">Motor Torque and Speed Calculation Guide</a></li>
<li><a href="/blog/dc-motor-running-slow-causes-troubleshooting/">Why a DC Motor Runs Slowly: Troubleshooting</a></li>
<li><a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC Motor High Current Draw: Causes &amp; Fixes</a></li>
<li><a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">Why DC Motors Overheat: 7 Causes &amp; Fixes</a></li>
<li><a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC Motor Maintenance &amp; Troubleshooting</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Field Diagnostic Checklist</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Torque Loss Diagnostic Checklist</h3>
          <p class="gsm-modal-subtitle">Get the step-by-step test sequence our engineers use to separate magnet, supply, controller, brush and driveline causes of torque loss.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Six-Step Test Sequence:</strong> From terminal voltage to locked-rotor resistance, in the right order</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Ke Back-Calculation Worksheet:</strong> Detect magnet flux loss from a simple cold no-load test</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Cause-to-Fix Guidance:</strong> Clear thresholds and corrective actions for each likely cause</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Torque Loss: Causes &amp; Fixes Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor Torque Loss Diagnostic Checklist">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-losing-torque-under-load-causes-solutions/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Torque Loss Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor Torque Loss Diagnostic Checklist immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-torque-loss-diagnostic-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
