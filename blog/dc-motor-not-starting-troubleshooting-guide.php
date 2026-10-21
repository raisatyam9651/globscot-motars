<?php
$current_page     = 'dc-motor-not-starting-troubleshooting-guide';
$canonical_path   = 'blog/dc-motor-not-starting-troubleshooting-guide/';
$page_title       = 'DC Motor Not Starting? Fault Tree | Globe Scott Motors';
$meta_description = 'DC motor not starting? Follow a safe fault tree: no current, current but no rotation, or starts only when pushed, with starting-torque maths and a test table.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-not-starting-troubleshooting-guide.jpg';
$body_class       = 'post-template-default single single-post postid-2422 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/"
      },
      "headline": "Why Does a DC Motor Fail to Start? A Troubleshooting Guide",
      "name": "Why Does a DC Motor Fail to Start? A Troubleshooting Guide",
      "description": "DC motor not starting? Follow a safe fault tree: no current, current but no rotation, or starts only when pushed, with starting-torque maths and a test table.",
      "url": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Troubleshooting, Starting Torque, Maintenance",
      "keywords": "dc motor not starting, dc motor won't start, motor hums but won't turn, commutator dead spot, starting torque, open armature circuit, cable voltage drop",
      "wordCount": 2316,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-not-starting-troubleshooting-guide.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-not-starting-troubleshooting-guide.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Internal construction of an electric motor used to illustrate DC motor no-start troubleshooting."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#breadcrumb",
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
          "name": "DC Motor Not Starting: Troubleshooting Guide",
          "item": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why does my DC motor hum but not turn?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A hum with no rotation means current is flowing but starting torque is below the load's breakaway torque. Either the shaft is locked (seized bearing, jammed load, brake not released) or starting current is restricted by cable resistance or a low controller current limit. Uncouple the motor and turn it by hand, then compare terminal voltage during the attempted start with the supply voltage."
          }
        },
        {
          "@type": "Question",
          "name": "Why does a DC motor only start when I spin the shaft by hand?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "That points to a commutator dead spot . An open armature coil, lifted riser or burnt bar breaks one current path at certain rotor positions, roughly doubling resistance and halving starting torque there. Isolate the motor and read terminal resistance while turning the shaft slowly; a reading that doubles or goes open at certain positions confirms it. Bar-to-bar resistance testing then locates the faulty coil."
          }
        },
        {
          "@type": "Question",
          "name": "How do I test whether the DC motor or the controller is faulty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Disconnect the motor from the controller, uncouple it from the load and connect it to a current-limited bench supply at reduced voltage. If it runs smoothly, the motor is serviceable and the fault lies in the controller, wiring or load. If it does not, measure terminal resistance and insulation resistance to find the open circuit or winding fault inside the motor."
          }
        },
        {
          "@type": "Question",
          "name": "Can a long or thin cable stop a DC motor from starting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. At standstill there is no back-EMF, so starting current is limited by armature plus cable resistance. Because a low-voltage PMDC armature is only a fraction of an ohm, a long thin cable can remove more than half the starting torque even when the running voltage drop looks tolerable. Measure voltage at the motor terminals during the attempted start and size the cable for standstill current."
          }
        },
        {
          "@type": "Question",
          "name": "Why won't my DC motor start after a long shutdown or the monsoon?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Damp standstill oxidises the commutator, raises brush contact resistance, corrodes brushes into their holders, lowers insulation resistance and can corrode bearings. Before applying power, measure insulation resistance and dry the winding if it is low, free and inspect the brushes, clean the commutator and turn the shaft by hand. Sealed BLDC motors avoid most of these brush and commutator issues."
          }
        },
        {
          "@type": "Question",
          "name": "Can a controller current limit prevent a DC motor from starting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Starting torque equals the torque constant multiplied by starting current, so a current limit set too low caps starting torque regardless of supply voltage. A limit of 1.5 times rated current gives only about 1.5 times rated torque, which may be less than a loaded machine's breakaway torque. Raise the limit only after checking the motor's peak rating and the gearbox's peak torque rating."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/",
      "url": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/",
      "name": "DC Motor Not Starting? Fault Tree | Globe Scott Motors",
      "description": "DC motor not starting? Follow a safe fault tree: no current, current but no rotation, or starts only when pushed, with starting-torque maths and a test table.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/#primaryimage"
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
<h1>Why Does a DC Motor Fail to Start? A Troubleshooting Guide</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">DC Motor Not Starting: Troubleshooting Guide</li></ol> </nav>
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
<article class="post-2422 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-dc-motor-not-starting tag-motor-troubleshooting tag-starting-torque tag-commutator-dead-spot tag-pmdc-motors tag-globe-scott-motors" id="post-2422">

<img alt="Stator and rotor construction of an electric motor, illustrating troubleshooting when a DC motor is not starting" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-not-starting-troubleshooting-guide.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A motor that will not start stops the whole machine, and the pressure to swap parts until something works is intense. Yet a <strong>DC motor not starting</strong> almost always falls into one of three situations: no current reaches the armature, current flows but the shaft cannot turn, or the motor starts only when pushed. Identifying which one you have, with a meter rather than guesswork, cuts the search from a dozen suspects to two or three.</p>

<p>This troubleshooting guide sets out that fault tree for <a href="/products-pmdc-motors/">PMDC motors</a> and <a href="/products-geared-motors/">geared motors</a>, explains the starting-torque physics that catches out many installations, and finishes with a test table you can take to the machine. If your motor starts but then cuts out intermittently, see <a href="/blog/dc-motor-keeps-stopping-during-operation/">why a DC motor keeps stopping during operation</a> instead.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> First isolate safely, then measure motor current with the run command applied.
<ul>
<li><strong>No current:</strong> the circuit is open (supply, fuse, contactor, controller enable, connector, brushes or armature).</li>
<li><strong>Current but no rotation:</strong> the shaft is locked (bearing, load, brake) or starting torque is too low (cable drop, controller current limit, weak magnets).</li>
<li><strong>Starts only when pushed:</strong> a commutator dead spot or marginal starting torque.</li>
</ul>
</div>

<hr/>

<h2>Safety First: Isolate Before You Investigate</h2>

<p>Lock out and tag out the supply, then prove it dead with a tested meter. Remember the stored energy a DC drive keeps after isolation: charged controller capacitors, battery packs that no switch fully isolates, gravity loads held only by a brake, and spring energy in gates and barriers. Support any suspended load mechanically before releasing a brake. A PMDC motor turned by hand also acts as a generator, so disconnect it from the controller before spinning the shaft. Live measurements belong to competent persons using correctly rated meters.</p>

<hr/>

<h2>Starting Torque: Why the First Revolution Is the Hardest</h2>

<p>At standstill there is no back-EMF, so the only things limiting current are the armature, brush and external circuit resistance, or a controller current limit:</p>

<div class="gsm-equation">\[ I_{start} = \min\left( \frac{V - V_{brush}}{R_a + R_{cable} + R_{joints}},\; I_{lim} \right) \qquad T_{start} = K_t \cdot I_{start} \]</div>

<p>Meanwhile the load demands its breakaway torque: static friction, settled product, cold grease and the lower starting efficiency of a gearbox, all of which exceed running torque. If \( T_{start} \) is below breakaway, the motor stalls and hums, typically at the PWM frequency or, on rectified supplies, at 100 Hz. Because the armature resistance of a low-voltage PMDC motor is a fraction of an ohm, external resistance that looks harmless while running can remove most of the starting torque.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Worked Example: Starts on the Bench, Not on Site</strong><br/>
A 24 V, 250 W PMDC geared motor has \( K_t = 0.065\,\mathrm{Nm/A} \), \( R_a = 0.19\,\Omega \) and about 1 V brush drop; rated current is 13.4 A. It drives a screw feeder that, restarting full of settled material, needs 2.5 Nm at the motor shaft to break away. On the bench, uncoupled, it runs perfectly. On site it sits 20 m from the supply on 1.5 mm² cable (40 m loop):
<ul>
<li>Cable: \( 0.0172 \times 40 / 1.5 = 0.459\,\Omega \); plus 0.02 Ω of joints gives 0.479 Ω.</li>
<li>\( I_{start} = (24 - 1)/(0.19 + 0.479) = 34.4\,\mathrm{A} \), so \( T_{start} = 0.065 \times 34.4 = 2.24\,\mathrm{Nm} \), below the 2.5 Nm needed. The motor stalls.</li>
<li>The panel reads 24 V, but the motor terminals read only \( 1 + 34.4 \times 0.19 = 7.5\,\mathrm{V} \): 16.5 V is lost in the cable.</li>
<li>With 6 mm² cable: \( 0.0172 \times 40/6 + 0.02 = 0.135\,\Omega \), \( I_{start} = 23/0.325 = 70.8\,\mathrm{A} \) and \( T_{start} = 4.60\,\mathrm{Nm} \). It starts with margin, provided the supply can deliver that current briefly.</li>
</ul>
Size starting circuits for current at standstill, not for ampacity.
</div>

<p>The fraction of the motor's potential starting torque that survives the external resistance does not depend on supply voltage or brush drop at all:</p>

<div class="gsm-equation">\[ \frac{T_{start}}{T_{start,ideal}} = \frac{R_a}{R_a + R_{cable} + R_{joints}} \]</div>

<p>Even a 10 mm² cable, which drops about 5 % at rated running current, leaves only \( 0.19/(0.19 + 0.089) \approx 68\,\% \) of this motor's potential starting torque, while the 1.5 mm² cable leaves 28 %. A controller current limit has the same effect: set at 20 A (1.5 × rated), it caps starting torque at \( 0.065 \times 20 = 1.3\,\mathrm{Nm} \), whatever the cable. Raise the limit only after checking that the motor's peak rating and the gearbox's peak torque rating allow it. Voltage-related starting problems are explored further in <a href="/blog/wrong-motor-voltage-problems-solutions/">wrong motor voltage problems</a>.</p>

<hr/>

<h2>The DC Motor Not Starting Fault Tree</h2>

<p>With the run command applied, measure current with a Hall-effect DC clamp meter and voltage at the motor terminals. Those two readings choose the branch.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Branch</th><th>What You Observe</th><th>Likely Causes</th><th>First Test</th>
</tr>
</thead>
<tbody>
<tr><td><strong>A: No current</strong></td><td>Silent; 0 A</td><td>Supply, fuse, contactor, controller enable, connector, brushes, open armature, protector</td><td>Voltage at the motor terminals</td></tr>
<tr><td><strong>B: Current, no rotation</strong></td><td>Hums or buzzes; current high</td><td>Seized bearing, jammed load, brake applied, low starting torque, weak magnets</td><td>Turn shaft by hand, uncoupled</td></tr>
<tr><td><strong>C: Starts when pushed</strong></td><td>Runs once nudged or tapped</td><td>Dead spot, stuck brush, marginal torque</td><td>Resistance while rotating shaft</td></tr>
<tr><td><strong>D: Fuse blows</strong></td><td>Trips instantly</td><td>Shorted armature, earth fault, wiring short</td><td>Insulation and bar-to-bar tests</td></tr>
</tbody>
</table>
</div>

<h3>Branch A: No Current Flows</h3>

<p>Work from the supply towards the motor. If there is <strong>no voltage at the motor terminals</strong>, the break is upstream: blown fuse, tripped breaker, battery isolator, a contactor whose coil never energises, a loose connector, or a controller that is not enabled. Controllers refuse to run for many reasons: an open interlock or E-stop input, both directions selected, a speed reference of zero or in the wrong range (0–5 V versus 0–10 V), a fault latched until the key is cycled, or, on many traction controllers, a throttle that was not at zero when the key was switched on.</p>

<p>If <strong>full voltage is present but current is zero</strong>, the open circuit is inside the motor: brushes worn past their limit or stuck in their holders, a broken brush shunt, an open internal thermal protector, or a broken armature lead. With the motor isolated, measure terminal resistance using a four-wire or zeroed low-resistance meter; an open reading confirms it. Brush checks are covered in our <a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC motor maintenance and troubleshooting guide</a>.</p>

<h3>Branch B: Current Flows but the Shaft Will Not Turn</h3>

<p>Isolate, uncouple and turn the shaft by hand with the brake released. If the motor itself is tight or rough, suspect a seized bearing, corrosion or a jammed gear; if it turns freely uncoupled, the load is jammed or its breakaway torque exceeds what the motor can deliver. Then check:</p>
<ul>
<li><strong>Brake not released:</strong> with the run command applied, confirm rated coil voltage at the brake terminals and listen for the release click. Voltage with no click points to an open coil or an excessive air gap; no voltage points to the brake supply, rectifier or relay. Our <a href="/products-pmdc-geared-motors/">PMDC geared motors</a> are available with electromagnetic brakes; take the coil rating from the brake nameplate or data sheet.</li>
<li><strong>Low starting torque:</strong> compare terminal voltage during the attempted start with the supply voltage, as in the worked example, and check the controller current limit.</li>
<li><strong>Weak magnets:</strong> repeated stalls or reversing at full voltage, especially in a cold motor, can partly demagnetise ferrite magnets, lowering \( K_t \) so the same current makes less torque. A no-load speed noticeably above the original test-sheet value at rated voltage is the giveaway; see <a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC motor losing torque under load</a>.</li>
</ul>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor No-Start Fault Tree &amp; Test Sheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable fault tree and test record covering safe isolation, the three no-start branches, starting-torque checks, dead-spot and bar-to-bar tests, and expected readings.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<h3>Branch C: Starts Only When Pushed or Tapped</h3>

<p>A motor that starts once the shaft is nudged has a position-dependent fault. In a two-pole winding, an open coil, lifted riser or burnt bar breaks one of the two parallel current paths whenever that coil is in circuit. Armature resistance roughly doubles at that position, so starting current and torque roughly halve: enough to fail against a real load, though the motor may still start uncoupled. With the motor isolated, turn the shaft slowly while reading terminal resistance; a reading that doubles or goes open at certain positions confirms a dead spot. Then measure bar-to-bar resistance around the commutator: readings should agree within a few per cent, an open coil reads many times higher and a shorted coil reads low.</p>

<p>A motor that starts after the frame is tapped usually has a brush sticking in its holder. Clean the holder, check the brush slides freely and replace it if it is below the replacement length.</p>

<h3>Branch D: Fuse or Breaker Trips Instantly</h3>

<p>Instant tripping means current far above normal stall current: a shorted armature, an earth fault or a wiring short. Test insulation resistance from winding to frame with a 500 V DC megger and check bar-to-bar readings for a shorted coil. Do not keep re-energising; each attempt damages the commutator further. Current-related faults are covered in <a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC motor high current draw</a>.</p>

<h3>BLDC Motors: Hall Sensor and Driver Faults</h3>

<p>Brushless motors replace brushes with electronic commutation, so their no-start faults move to the sensors and driver. A failed Hall sensor, a broken Hall wire or a swapped phase or Hall sequence makes the motor twitch, vibrate or draw current without turning. With the driver powered but the motor disabled, confirm the Hall supply voltage the driver specifies, then turn the shaft slowly by hand: each of the three Hall outputs should toggle. With 120° sensors, as used on our BLDC motors, the states 000 and 111 should never appear; if they do, a sensor or its wiring has failed.</p>

<hr/>

<h2>Test, Expected Reading and Conclusion</h2>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Test</th><th>Expected Reading</th><th>If Not, Conclusion</th></tr>
</thead>
<tbody>
<tr><td><strong>Supply voltage, run command on</strong></td><td>Nameplate voltage ± 10 %</td><td>Supply, fuse, breaker or battery fault</td></tr>
<tr><td><strong>Motor terminal voltage, run command on</strong></td><td>Close to supply voltage</td><td>0 V: upstream open. Low: cable or joint drop</td></tr>
<tr><td><strong>Motor current, run command on</strong></td><td>Rises, then falls as shaft accelerates</td><td>0 A: open circuit. High and steady: locked shaft</td></tr>
<tr><td><strong>Terminal resistance, shaft turned slowly</strong></td><td>Close to test sheet; steady</td><td>Open: brushes or armature. Doubling: dead spot</td></tr>
<tr><td><strong>Bar-to-bar resistance</strong></td><td>Within a few per cent of each other</td><td>High pair: open coil. Low pair: shorted coil</td></tr>
<tr><td><strong>Insulation resistance, 500 V DC</strong></td><td>High and stable</td><td>Low: moisture or earth fault; dry out or rewind</td></tr>
<tr><td><strong>Shaft by hand, uncoupled, brake released</strong></td><td>Smooth and free</td><td>Tight or rough: bearing, corrosion, gear jam</td></tr>
<tr><td><strong>Bench supply, uncoupled, reduced voltage</strong></td><td>Runs smoothly</td><td>Motor faulty. If it runs: controller, wiring or load</td></tr>
<tr><td><strong>No-load speed at rated voltage</strong></td><td>Close to test-sheet no-load speed</td><td>Clearly higher: weakened magnets</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Special Case: Motors That Will Not Start After Monsoon Standstill</h2>

<p>Equipment that stands idle through the Indian monsoon often refuses to start when the season ends. Humidity oxidises the commutator surface and raises brush contact resistance, corrosion locks brushes in their holders, moisture lowers insulation resistance, and bearings can corrode in place. Before applying power, measure insulation resistance and dry the winding if it is low, free and inspect the brushes, clean the commutator, and turn the shaft by hand. For outdoor or wash-down duty, sealed <a href="/products-bldc-motors/">BLDC motors</a> rated IP54 to IP67 remove the brush and commutator failure points altogether.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. Why does my DC motor hum but not turn?</h3>
<p>A hum with no rotation means current is flowing but starting torque is below the load's breakaway torque. Either the shaft is locked (seized bearing, jammed load, brake not released) or starting current is restricted by cable resistance or a low controller current limit. Uncouple the motor and turn it by hand, then compare terminal voltage during the attempted start with the supply voltage.</p>

<h3>Q2. Why does a DC motor only start when I spin the shaft by hand?</h3>
<p>That points to a <strong>commutator dead spot</strong>. An open armature coil, lifted riser or burnt bar breaks one current path at certain rotor positions, roughly doubling resistance and halving starting torque there. Isolate the motor and read terminal resistance while turning the shaft slowly; a reading that doubles or goes open at certain positions confirms it. Bar-to-bar resistance testing then locates the faulty coil.</p>

<h3>Q3. How do I test whether the DC motor or the controller is faulty?</h3>
<p>Disconnect the motor from the controller, uncouple it from the load and connect it to a current-limited bench supply at reduced voltage. If it runs smoothly, the motor is serviceable and the fault lies in the controller, wiring or load. If it does not, measure terminal resistance and insulation resistance to find the open circuit or winding fault inside the motor.</p>

<h3>Q4. Can a long or thin cable stop a DC motor from starting?</h3>
<p>Yes. At standstill there is no back-EMF, so starting current is limited by armature plus cable resistance. Because a low-voltage PMDC armature is only a fraction of an ohm, a long thin cable can remove more than half the starting torque even when the running voltage drop looks tolerable. Measure voltage at the motor terminals during the attempted start and size the cable for standstill current.</p>

<h3>Q5. Why won&#x27;t my DC motor start after a long shutdown or the monsoon?</h3>
<p>Damp standstill oxidises the commutator, raises brush contact resistance, corrodes brushes into their holders, lowers insulation resistance and can corrode bearings. Before applying power, measure insulation resistance and dry the winding if it is low, free and inspect the brushes, clean the commutator and turn the shaft by hand. Sealed BLDC motors avoid most of these brush and commutator issues.</p>

<h3>Q6. Can a controller current limit prevent a DC motor from starting?</h3>
<p>Yes. Starting torque equals the torque constant multiplied by starting current, so a current limit set too low caps starting torque regardless of supply voltage. A limit of 1.5 times rated current gives only about 1.5 times rated torque, which may be less than a loaded machine's breakaway torque. Raise the limit only after checking the motor's peak rating and the gearbox's peak torque rating.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>A DC motor that fails to start tells you a great deal once you take two readings: current with the run command applied, and voltage at the motor terminals. No current means an open circuit; current without rotation means a locked shaft or too little starting torque; a start that needs a push means a dead spot. Work through the branch, confirm with the test table, and fix the cause rather than replacing the motor by default.</p>

<p>If the investigation shows that your load's breakaway torque, cable run or controller limit leaves too little starting margin, our engineers can size a PMDC, geared or BLDC drive with the right starting torque for your installation. <a href="/contact-us/">Send your load, supply and cable details to our engineering team</a>.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Struggling With a DC Motor That Will Not Start Under Load?</strong></h3>
<p style="margin-bottom: 0;">Send us your load&#x27;s breakaway torque, supply voltage, cable length and size, and controller settings. Globe Scott engineers will check the starting margin and recommend a PMDC, geared or BLDC drive that starts reliably in your installation.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Not Starting, Motor Troubleshooting, Starting Torque, Commutator Dead Spot, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/dc-motor-vibration-problems-how-to-identify/">
<h4 class="post-title">Why Does a DC Motor Vibrate Excessively? How to Identify the Problem</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/motor-insufficient-torque-under-load-how-to-choose/">
<h4 class="post-title">How to Choose a Motor When Your Machine Cannot Handle the Required Load</h4>
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
<li><a href="/blog/dc-motor-keeps-stopping-during-operation/">Why Does a DC Motor Keep Stopping?</a></li>
<li><a href="/blog/dc-motor-high-current-draw-causes-solutions/">DC Motor High Current Draw: Causes &amp; Solutions</a></li>
<li><a href="/blog/wrong-motor-voltage-problems-solutions/">Wrong Motor Voltage: Problems &amp; Solutions</a></li>
<li><a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC Motor Maintenance &amp; Troubleshooting</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Troubleshooting Test Sheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor No-Start Fault Tree &amp; Test Sheet</h3>
          <p class="gsm-modal-subtitle">A shop-floor procedure that takes you from a silent or humming motor to a confirmed root cause, with expected readings for every test.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Three-Branch Fault Tree:</strong> No current, no rotation, or starts only when pushed</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Starting Torque Check:</strong> Calculate starting current and torque from cable and limit data</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Expected Readings Table:</strong> Every test with its normal reading and what a fault means</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Not Starting: Troubleshooting Guide Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor No-Start Fault Tree &amp; Test Sheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-not-starting-troubleshooting-guide/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your No-Start Test Sheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor No-Start Fault Tree &amp; Test Sheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-no-start-fault-tree-test-sheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
