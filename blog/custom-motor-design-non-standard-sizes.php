<?php
$current_page     = 'custom-motor-design-non-standard-sizes';
$canonical_path   = 'blog/custom-motor-design-non-standard-sizes/';
$page_title       = 'Custom Motor Design: Non-Standard Fits | Globe Scott Motors';
$meta_description = 'Custom motor design for non-standard sizes: which shaft, flange, winding and stack-length changes are low effort, plus shaft checks and tolerance stack-up.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/custom-motor-design-non-standard-sizes.jpg';
$body_class       = 'post-template-default single single-post postid-2436 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/"
      },
      "headline": "How to Select a Motor When Standard Sizes Do Not Fit Your Equipment",
      "name": "How to Select a Motor When Standard Sizes Do Not Fit Your Equipment",
      "description": "Custom motor design for non-standard sizes: which shaft, flange, winding and stack-length changes are low effort, plus shaft checks and tolerance stack-up.",
      "url": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Custom Motor Engineering, OEM Design",
      "keywords": "custom motor design, custom dc motor manufacturer, custom motor shaft, oem motor customization, non-standard motor, motor stack length, tolerance stack-up",
      "wordCount": 2354,
      "image": {
        "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/custom-motor-design-non-standard-sizes.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/custom-motor-design-non-standard-sizes.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Dimensioned interface drawing used to define shaft, flange and envelope requirements for a custom DC motor design."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#breadcrumb",
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
          "name": "Custom Motor Design for Non-Standard Sizes",
          "item": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is custom motor design and when do I need it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Custom motor design means adapting a motor's shaft, mounting, winding, length or integrated options to a specific machine instead of reshaping the machine around a catalogue part. You need it when a standard motor fails on a definite number: body too long, shaft too short, wrong spigot or connector position, or the wrong speed for your supply voltage. Most cases are solved by modifying a standard frame rather than designing a new motor."
          }
        },
        {
          "@type": "Question",
          "name": "Which motor customisations need the least engineering effort?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Shaft machining (length, flats, keyways, threads and cross-holes), cable length and lead exit position, and rewinding for a different voltage or speed are usually the lightest changes, because they reuse the existing laminations, magnets and housing. Flange changes, stack length, integrated brakes or encoders and sealing upgrades take more work. New lamination profiles or housing diameters need new tooling and sit at the top of the effort scale."
          }
        },
        {
          "@type": "Question",
          "name": "Can the shaft of a standard DC motor be lengthened or reduced?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, shaft length, diameter, flats, keyways and threads can normally be machined to your drawing, within the limit set by the bearing bore. Check the new geometry against stall torque, not rated torque, because stall is the highest torque the shaft will see and torsional stress varies with the inverse cube of the diameter. A longer extension also moves the load further from the front bearing, which raises bearing load and shortens bearing life."
          }
        },
        {
          "@type": "Question",
          "name": "Can a DC motor be made shorter to fit a tight space?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Often, by reducing the stack length of the armature and magnets. Torque at a given current falls roughly in proportion, so a stack 25 % shorter gives about 25 % less continuous torque, and the winding must be retuned with more turns to keep the same speed. If length is critical but diameter is free, a wider, shorter motor or a smaller motor with a gearhead may deliver more torque in the same envelope."
          }
        },
        {
          "@type": "Question",
          "name": "Can a DC motor be rewound for a different voltage without losing power?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, within practical limits. On the same laminations, doubling the turns doubles the back-EMF constant and quadruples resistance, so the motor runs at the same speed on twice the voltage while drawing half the current for the same torque. Copper loss, and therefore continuous torque, stays essentially unchanged. The limits are the available wire sizes, slot fill and the voltage between commutator bars at higher supply voltages."
          }
        },
        {
          "@type": "Question",
          "name": "What drawings should I send for a custom motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Send a STEP model of the mating parts and the available envelope, and a 2D interface drawing with datums and toleranced dimensions for the spigot, PCD, shaft diameter, extension length, key or flat and cable exit. Mark keep-out zones and service access. Add the load torque, speed, supply voltage, duty cycle and environment, so the motor can be checked electrically as well as dimensionally."
          }
        },
        {
          "@type": "Question",
          "name": "When does a custom motor need new tooling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "New tooling is needed when the lamination profile, rotor diameter or housing diameter must change, for example when the envelope is too narrow for any existing frame or when production volume makes a dedicated design economical. Shaft, flange, lead exit, winding and stack-length changes normally reuse existing tooling. Exhaust those lower-effort options, and gearhead alternatives, before committing to a new frame."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/",
      "url": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/",
      "name": "Custom Motor Design: Non-Standard Fits | Globe Scott Motors",
      "description": "Custom motor design for non-standard sizes: which shaft, flange, winding and stack-length changes are low effort, plus shaft checks and tolerance stack-up.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/#primaryimage"
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
<h1>How to Select a Motor When Standard Sizes Do Not Fit Your Equipment</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Custom Motor Design for Non-Standard Sizes</li></ol> </nav>
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
<article class="post-2436 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-custom-motor-design tag-custom-motor-shaft tag-oem-motor-customisation tag-motor-stack-length tag-pmdc-motors tag-globe-scott-motors" id="post-2436">

<img alt="Steel rule on a dimensioned engineering drawing illustrating custom motor design for non-standard equipment envelopes" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/custom-motor-design-non-standard-sizes.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Custom Design, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>The catalogue motor has the right torque and speed, but its body is 12 mm too long for the chassis, the shaft stops 6 mm short of the coupling and the cable leaves on the side that faces a wall. At that point most OEM teams ask for <strong>custom motor design</strong>, and the useful question is no longer "can it be customised?" but "what is the smallest change that makes it fit?" Some changes are a different machining operation on a standard part; others mean new lamination or housing tooling. Knowing which is which keeps a project simple.</p>

<p>This guide ranks the common customisations by engineering effort, gives the checks each one triggers, and works through a tolerance stack-up. The examples use permanent magnet DC motors such as our <a href="/products-pmdc-motors/">PMDC motors (15 W to 1,500 W, B3, B5 and B14 mountings)</a>, but the logic applies equally to <a href="/products-bldc-motors/">BLDC motors</a> and geared units.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> When no standard motor fits, work up an effort ladder and stop at the first rung that solves the problem:
<ol>
<li>interface changes: shaft length, diameter, flats, keys, flange or lead exit;</li>
<li>electrical changes on the same frame: winding for voltage or speed, then stack length;</li>
<li>integrated options: brake, encoder, gearhead, sealing;</li>
<li>new laminations or housings, only when volume or a hard envelope limit justifies tooling.</li>
</ol>
Send a dimensioned interface drawing, load data and tolerances before samples are made.
</div>

<hr/>

<h2>Define What Does Not Fit Before Starting a Custom Motor Design</h2>

<p>"Standard sizes do not fit" covers three different problems, and each points to a different rung of the ladder:</p>
<ul>
<li><strong>Geometric:</strong> length, diameter, mounting face, shaft or cable exit clash with the machine. Usually solved by interface changes.</li>
<li><strong>Performance:</strong> the frame fits but speed, voltage or torque is wrong for the supply or load. Usually solved by a winding change, a gearhead or a stack-length change.</li>
<li><strong>Integration:</strong> the motor fits, but the brake, encoder, gearbox or seals bolted around it do not. Usually solved by integrating those items into the motor.</li>
</ul>
<p>Write the problem down in one line per item, with the dimension or number that fails. "Body 12 mm too long; shaft engagement 6 mm short; connector must exit at 9 o'clock" is a specification. "Needs to be more compact" is not.</p>

<hr/>

<h2>The Customisation Effort Ladder</h2>

<p>Effort here means engineering and tooling change, not price. The table is a planning guide; the exact boundary between rungs depends on the frame.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Customisation</th><th>What Changes in the Motor</th><th>Effort</th><th>Typical Impact or Watch-Out</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Shaft length, flat, keyway, thread, cross-hole</strong></td><td>Shaft machining only</td><td>Low</td><td>Recheck torsion at stall torque and bearing load from overhang</td></tr>
<tr><td><strong>Shaft diameter</strong></td><td>Shaft machining; bearing bore sets the upper limit</td><td>Low–medium</td><td>Torsional stress rises with \( 1/d^3 \)</td></tr>
<tr><td><strong>Double-ended shaft</strong></td><td>Rear endshield and seal</td><td>Low–medium</td><td>Enables encoder, brake or handwheel; adds length</td></tr>
<tr><td><strong>Lead exit, cable length, connector</strong></td><td>Lead routing, grommet, harness</td><td>Low</td><td>Maintain IP rating and strain relief at the exit</td></tr>
<tr><td><strong>Flange, spigot, PCD</strong></td><td>Machined endshield or adaptor</td><td>Medium</td><td>Adaptors add length and a concentricity fit</td></tr>
<tr><td><strong>Winding for voltage or speed</strong></td><td>Turns and wire gauge on the same laminations</td><td>Low–medium</td><td>Retest back-EMF constant, resistance, temperature rise</td></tr>
<tr><td><strong>Motor stack length</strong></td><td>Same lamination tooling; magnet and housing length</td><td>Medium</td><td>Torque scales roughly with stack length</td></tr>
<tr><td><strong>Integrated brake, encoder, gearhead</strong></td><td>Rear module or output stage</td><td>Medium</td><td>Length grows; check brake voltage and gearbox rating</td></tr>
<tr><td><strong>Sealing upgrade</strong></td><td>Shaft seals, gaskets, glands</td><td>Medium</td><td>Seal friction adds no-load current; cooling falls</td></tr>
<tr><td><strong>New lamination or housing diameter</strong></td><td>New tooling</td><td>High</td><td>Justified by volume or a hard envelope limit</td></tr>
</tbody>
</table>
</div>

<p>Hollow shafts, for a through-rod or a cable, are missing from the low rungs for a reason: the bore needs larger bearings and a redesigned rotor, so treat them as a high-effort change. Before climbing the ladder at all, check the machine side too. A spacer, a longer coupling hub or a re-drilled bracket is sometimes cheaper than any motor change, and a different frame or a geared variant from a standard range may already fit.</p>

<p>Most non-standard requirements are solved on the first three rungs. Our longer guide to <a href="/blog/custom-dc-motors-design-for-specific-applications/">how custom DC motors are designed for specific applications</a> covers magnet and winding options in more depth.</p>

<hr/>

<h2>Interface Changes: Shaft, Flange and Lead Exit</h2>

<h3>Custom Motor Shaft: Check It at Stall, Not at Rated Torque</h3>
<p>Shaft changes are the cheapest customisation and the one most often under-checked. Torsional shear stress in a solid round shaft is:</p>

<div class="gsm-equation">\[ \tau = \frac{16\,T}{\pi d^3} \]</div>

<p>Take a 24 V motor rated at 0.8 Nm with a stall torque of 6.0 Nm, and a request to turn the 10 mm shaft end down to 8 mm to suit an existing pinion. At stall, \( \tau_{10} = 16 \times 6.0/(\pi \times 0.010^3) = 30.6\,\mathrm{MPa} \) and \( \tau_8 = 16 \times 6.0/(\pi \times 0.008^3) = 59.7\,\mathrm{MPa} \). A 2 mm reduction nearly doubles the stress, because \( (10/8)^3 = 1.95 \). A keyway or flat then multiplies the local stress further, often by a factor of two or more. At rated torque the same shaft sees under 8 MPa, which is why a rated-torque check approves almost anything.</p>

<p>A longer extension matters too. With bearing span \( L \) and the load a distance \( a \) beyond the front bearing, the front bearing carries \( F(L + a)/L \). With \( L = 60 \) mm, moving the pulley from \( a = 20 \) mm to 35 mm raises that load from 1.33F to 1.58F, about 19 %, and because ball bearing \( L_{10} \) life varies with \( (C/P)^3 \), life falls by roughly 40 %.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Size every custom shaft feature against the highest torque the drive can deliver: stall torque, or the controller's current limit multiplied by \( K_t \). Keep pulleys and pinions as close to the shaft shoulder as the design allows.
</div>

<h3>Flange, Spigot and Adaptor Plates</h3>
<p>A machined endshield with the customer's spigot and PCD is cleaner than an adaptor, because every extra fit adds concentricity error and length. Adaptors suit low volumes and prototypes; locate them on a machined register, never on bolt clearance alone. Our article on <a href="/blog/motor-mounting-configurations-explained/">motor mounting configurations</a> explains the load paths of B3, B5 and B14 mountings.</p>

<h3>Lead and Connector Exits</h3>
<p>Specify exit position as a clock angle relative to a mounting hole, plus cable length, connector part number, pin-out and minimum bend radius. A connector that clears the chassis on the drawing can still foul it once the cable bends.</p>

<hr/>

<h2>Electrical Changes on an Existing Frame: Winding and Stack Length</h2>

<h3>Rewinding for Voltage or Speed</h3>
<p>For a given lamination and slot area, the back-EMF constant rises in proportion to turns \( N \), while resistance rises with \( N^2 \) because the wire becomes both longer and thinner:</p>

<div class="gsm-equation">\[ K_e \propto N, \qquad R_a \propto N^2, \qquad P_{cu} = \left(\frac{T}{K_t}\right)^2 R_a \propto \frac{N^2}{N^2} = \text{constant} \]</div>

<p>Rewinding a 24 V motor for 48 V therefore doubles the turns, halves the current for the same torque and leaves copper loss, and hence continuous torque, essentially unchanged. The same logic retunes speed at a fixed voltage. The practical limits are the nearest standard wire size, slot fill and, at high voltage, voltage between commutator bars. This is why winding is a low-effort rung: no new tooling, only a new specification and retest.</p>

<h3>Changing Motor Stack Length</h3>
<p>Torque at a given current, and \( K_e \), scale with the active stack length because flux linkage does. Cutting a 40 mm stack to 30 mm removes 10 mm of body length and roughly 25 % of continuous torque, slightly more in practice because end windings and bearings do not shrink. Restoring the original no-load speed needs about a third more turns. Stack length reuses the lamination tooling but changes magnet length, housing length and the armature, so it sits a rung higher than winding. When the envelope is short but wide, a larger diameter is the stronger lever, since torque scales with rotor diameter squared; our guide to <a href="/blog/compact-dc-motor-selection-limited-space/">compact DC motor selection</a> develops this trade-off.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Custom Motor Interface and Drawing Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable checklist for defining shaft, flange, envelope, connector and integrated-option requirements, with an effort-level table and a tolerance stack-up worksheet for sample approval.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Tolerance Stack-Up on a Custom Shaft</h2>

<p>A motor bolts through an 8 mm adaptor plate, and its shaft must engage at least 19.5 mm into a coupling hub (the coupling maker's minimum) without bottoming in the 24 mm bore. Engagement is \( E = L_s - T_a - G \):</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Contributor</th><th>Nominal (mm)</th><th>Tolerance (mm)</th></tr>
</thead>
<tbody>
<tr><td><strong>Shaft extension from motor mounting face, \( L_s \)</strong></td><td>32.0</td><td>±0.3</td></tr>
<tr><td><strong>Adaptor plate thickness, \( T_a \)</strong></td><td>8.0</td><td>±0.1</td></tr>
<tr><td><strong>Machine face to start of hub bore, \( G \)</strong></td><td>4.0</td><td>±0.2</td></tr>
<tr><td><strong>Armature axial float</strong></td><td>0</td><td>±0.2</td></tr>
</tbody>
</table>
</div>

<div class="gsm-equation">\[ E_{min,\,wc} = E_{nom} - \sum_i |t_i|, \qquad E_{min,\,RSS} = E_{nom} - \sqrt{\sum_i t_i^2} \]</div>

<ul>
<li>Nominal: \( E = 32.0 - 8.0 - 4.0 = 20.0\,\mathrm{mm} \).</li>
<li>Worst case: \( 20.0 - (0.3 + 0.1 + 0.2 + 0.2) = 19.2\,\mathrm{mm} \), which fails the 19.5 mm minimum.</li>
<li>Root-sum-square: \( 20.0 - \sqrt{0.09 + 0.01 + 0.04 + 0.04} = 20.0 - 0.42 = 19.58\,\mathrm{mm} \), a statistical pass with almost no margin.</li>
<li>Fix on the lowest rung: specify the custom shaft extension as 32.5 ± 0.2 mm. Worst case becomes \( 20.5 - 0.7 = 19.8\,\mathrm{mm} \), and the maximum of \( 20.5 + 0.7 = 21.2\,\mathrm{mm} \) stays clear of the 24 mm bore.</li>
</ul>

<p>Two lessons follow. Worst-case analysis suits safety-relevant fits and small batches; RSS suits high volumes with stable processes. And tolerances belong on the interface drawing you send, because a supplier cannot hold a dimension nobody specified.</p>

<hr/>

<h2>Integrated Options and Sealing</h2>

<p>Bolting a separate brake, encoder or gearbox around a standard motor often creates the envelope problem in the first place. Integrating them shortens the stack of parts and removes couplings. Our PMDC motors are available with electromagnetic fail-safe brakes and encoder-ready builds, and our <a href="/products-geared-motors/">geared motors</a> add reduction gears, encoders and EMI suppression filters. For traction and trolley drives, our <a href="/products-pmdc-geared-motors/">PMDC geared motors</a> use parallel-exit steel gearboxes with exit axles up to 20 mm.</p>

<p>Sealing is the integration change most often underestimated. Our PMDC range is IP20 to IP44 as standard (IP54 optional on the A60 series), while our BLDC motors are built from IP54 to IP67 with IP67 connectors available. Lip seals add friction and raise no-load current, and a sealed enclosure sheds less heat, so a sealing upgrade should be followed by a temperature-rise retest.</p>

<hr/>

<h2>What to Send and How the Prototype Cycle Runs</h2>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Send a STEP model of the mating parts and the available envelope, plus a 2D interface drawing with datums and toleranced dimensions for spigot, PCD, shaft, key or flat, extension length and cable exit. Mark keep-out zones and service access, and attach torque, speed, voltage and duty data.
</div>

<p>The general data list is in our <a href="/blog/custom-motor-specification-checklist-first-call/">first-call custom motor specification checklist</a>. A typical prototype cycle then runs through feasibility review, drawing exchange and approval, samples, fit and performance testing, validation in the machine, and release against a frozen drawing with written acceptance criteria. Late changes to the shaft or mounting after samples are the classic cause of slippage, as our guide to <a href="/blog/custom-motor-manufacturing-delays-specifications/">custom motor manufacturing delays</a> explains. If you are adapting a machine around an obsolete motor rather than a new design, start with our guide to <a href="/blog/discontinued-motor-replacement-selection-guide/">discontinued motor replacement</a>.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What is custom motor design and when do I need it?</h3>
<p>Custom motor design means adapting a motor's shaft, mounting, winding, length or integrated options to a specific machine instead of reshaping the machine around a catalogue part. You need it when a standard motor fails on a definite number: body too long, shaft too short, wrong spigot or connector position, or the wrong speed for your supply voltage. Most cases are solved by modifying a standard frame rather than designing a new motor.</p>

<h3>Q2. Which motor customisations need the least engineering effort?</h3>
<p>Shaft machining (length, flats, keyways, threads and cross-holes), cable length and lead exit position, and rewinding for a different voltage or speed are usually the lightest changes, because they reuse the existing laminations, magnets and housing. Flange changes, stack length, integrated brakes or encoders and sealing upgrades take more work. New lamination profiles or housing diameters need new tooling and sit at the top of the effort scale.</p>

<h3>Q3. Can the shaft of a standard DC motor be lengthened or reduced?</h3>
<p>Yes, shaft length, diameter, flats, keyways and threads can normally be machined to your drawing, within the limit set by the bearing bore. Check the new geometry against stall torque, not rated torque, because stall is the highest torque the shaft will see and torsional stress varies with the inverse cube of the diameter. A longer extension also moves the load further from the front bearing, which raises bearing load and shortens bearing life.</p>

<h3>Q4. Can a DC motor be made shorter to fit a tight space?</h3>
<p>Often, by reducing the stack length of the armature and magnets. Torque at a given current falls roughly in proportion, so a stack 25 % shorter gives about 25 % less continuous torque, and the winding must be retuned with more turns to keep the same speed. If length is critical but diameter is free, a wider, shorter motor or a smaller motor with a gearhead may deliver more torque in the same envelope.</p>

<h3>Q5. Can a DC motor be rewound for a different voltage without losing power?</h3>
<p>Yes, within practical limits. On the same laminations, doubling the turns doubles the back-EMF constant and quadruples resistance, so the motor runs at the same speed on twice the voltage while drawing half the current for the same torque. Copper loss, and therefore continuous torque, stays essentially unchanged. The limits are the available wire sizes, slot fill and the voltage between commutator bars at higher supply voltages.</p>

<h3>Q6. What drawings should I send for a custom motor?</h3>
<p>Send a STEP model of the mating parts and the available envelope, and a 2D interface drawing with datums and toleranced dimensions for the spigot, PCD, shaft diameter, extension length, key or flat and cable exit. Mark keep-out zones and service access. Add the load torque, speed, supply voltage, duty cycle and environment, so the motor can be checked electrically as well as dimensionally.</p>

<h3>Q7. When does a custom motor need new tooling?</h3>
<p>New tooling is needed when the lamination profile, rotor diameter or housing diameter must change, for example when the envelope is too narrow for any existing frame or when production volume makes a dedicated design economical. Shaft, flange, lead exit, winding and stack-length changes normally reuse existing tooling. Exhaust those lower-effort options, and gearhead alternatives, before committing to a new frame.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>When standard sizes do not fit, the best custom motor is usually a standard frame with the fewest possible changes: a shaft machined to your drawing, a flange or lead exit moved, a winding matched to your supply, and only then a different stack length or integrated options. New tooling is the last rung, not the first. Check every change against stall torque, bearing load and the tolerance stack, and put the numbers on the drawing.</p>

<p>To see which rung your requirement sits on, <a href="/contact-us/">share your envelope drawing and load data with our engineers</a> and we will propose the least invasive change to a standard Globe Scott frame.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Does Your Equipment Need a Motor That Standard Sizes Cannot Fit?</strong></h3>
<p style="margin-bottom: 0;">Send our engineers your envelope drawing or STEP model, the interface dimensions with tolerances, and your torque, speed, voltage and duty data. We will identify the least invasive change to a standard Globe Scott PMDC, BLDC or geared motor frame that meets your requirement.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Custom Motor Design, Custom Motor Shaft, OEM Motor Customisation, Motor Stack Length, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/motor-for-frequent-start-stop-applications/">
<h4 class="post-title">How to Choose a Motor for Frequent Start-Stop Applications</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/battery-powered-motor-efficiency-runtime/">
<h4 class="post-title">Why Does Your Battery-Powered Equipment Have Poor Motor Runtime?</h4>
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
<li><a href="/blog/custom-dc-motors-design-for-specific-applications/">How Custom DC Motors Are Designed for Specific Applications</a></li>
<li><a href="/blog/importance-of-customization-in-pmdc-motor-design/">The Importance of Customisation in PMDC Motor Design</a></li>
<li><a href="/blog/compact-dc-motor-selection-limited-space/">Compact DC Motor Selection for Limited Space</a></li>
<li><a href="/blog/discontinued-motor-replacement-selection-guide/">Selecting a Replacement for a Discontinued Motor</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Engineering Checklist</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">Custom Motor Interface and Drawing Checklist</h3>
          <p class="gsm-modal-subtitle">Define exactly what does not fit, choose the lowest-effort change and send a drawing package that a motor manufacturer can quote and build from.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Interface Checklist:</strong> Shaft, spigot, PCD, lead exit and keep-out fields</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Effort Level Table:</strong> Ten common customisations ranked with their key engineering checks</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Stack-Up Worksheet:</strong> Worst-case and RSS method for critical interface dimensions</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Custom Motor Design for Non-Standard Sizes Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Custom Motor Interface and Drawing Checklist">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/custom-motor-design-non-standard-sizes/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Interface Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Custom Motor Interface and Drawing Checklist immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/custom-motor-interface-drawing-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
