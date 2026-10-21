<?php
$current_page     = 'dc-motor-speed-fluctuation-solutions';
$canonical_path   = 'blog/dc-motor-speed-fluctuation-solutions/';
$page_title       = 'DC Motor Speed Fluctuation Solutions | Globe Scott Motors';
$meta_description = 'Fix DC motor speed fluctuation by its pattern: load droop, supply sag, PI loop hunting, belt slip or commutator faults. Includes regulation maths and fixes.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-speed-fluctuation-solutions.jpg';
$body_class       = 'post-template-default single single-post postid-2425 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/"
      },
      "headline": "How to Solve Speed Fluctuations in Motor-Driven Machinery",
      "name": "How to Solve Speed Fluctuations in Motor-Driven Machinery",
      "description": "Fix DC motor speed fluctuation by its pattern: load droop, supply sag, PI loop hunting, belt slip or commutator faults. Includes regulation maths and fixes.",
      "url": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Troubleshooting, Speed Control, Drives",
      "keywords": "dc motor speed fluctuation, dc motor speed regulation, closed loop speed control, encoder feedback, pid tuning motor, ir compensation, motor speed hunting",
      "wordCount": 2510,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-speed-fluctuation-solutions.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-speed-fluctuation-solutions.jpg",
      "width": 1200,
      "height": 675,
      "caption": "A motor-driven production line, where speed fluctuation must be traced to the supply, the controller or the mechanics."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#breadcrumb",
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
          "name": "DC Motor Speed Fluctuation Solutions",
          "item": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What causes speed fluctuation in a DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The common causes are load changes acting on an open-loop motor's natural droop, supply voltage variation, an over-tuned PI speed loop, and mechanical problems such as belt slip, gear backlash or cyclic load torque. Brush and commutator faults add once-per-revolution or random dips. Logging speed, current and voltage together and comparing the fluctuation period with the shaft revolution and machine cycle usually isolates the cause."
          }
        },
        {
          "@type": "Question",
          "name": "What is good speed regulation for a DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on the control method. An open-loop PMDC motor on a fixed voltage typically changes speed by about 5–20 % between no load and full load, more on small frames. Armature-voltage feedback with IR compensation usually holds 1–3 %, an analogue tachogenerator about 0.5–1 %, and an encoder-based digital loop 0.1 % or better at medium and high speeds. Specify the figure the process genuinely needs, because tighter regulation costs more."
          }
        },
        {
          "@type": "Question",
          "name": "How do I stop a motor speed controller from hunting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hunting is usually caused by too much integral action, too much proportional gain, or both. With the real load coupled, reduce integral gain first; if the oscillation persists, reduce proportional gain. Also check for integrator wind-up at current limit and for backlash or soft couplings creating a resonance. If the oscillation frequency does not change with gains, the cause is mechanical, not the controller."
          }
        },
        {
          "@type": "Question",
          "name": "What is IR compensation on a DC motor drive?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IR compensation is a controller feature that measures armature current and raises the output voltage by that current multiplied by a set resistance, cancelling the drop across the armature, brushes and cables. Set correctly, it makes a PMDC motor's speed nearly independent of load without a speed sensor. Set too high, the motor speeds up with load and can surge, so adjust it at full load and back it off slightly."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my motor speed fluctuate only at low speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three effects grow at low speed. Encoder or Hall feedback delivers very few edges per sample, so the measured speed is noisy and the loop reacts to that noise. Motor cogging and static friction in the load cause stick-slip motion. And torque ripple matters more when little kinetic energy is available to smooth it. Higher-resolution feedback, more gear reduction or a BLDC motor with sinusoidal drive usually helps."
          }
        },
        {
          "@type": "Question",
          "name": "Is a BLDC motor better than a PMDC motor for stable speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A BLDC motor with an encoder and field-oriented control gives the tightest regulation and the smoothest low-speed running, and it removes brush wear as a source of intermittent dips. However, a PMDC motor with tachogenerator or encoder feedback and a well-tuned controller holds speed within about 1 % in many industrial machines at lower system cost. Decide on the regulation target, speed range and annual running hours."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/",
      "url": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/",
      "name": "DC Motor Speed Fluctuation Solutions | Globe Scott Motors",
      "description": "Fix DC motor speed fluctuation by its pattern: load droop, supply sag, PI loop hunting, belt slip or commutator faults. Includes regulation maths and fixes.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/#primaryimage"
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
<h1>How to Solve Speed Fluctuations in Motor-Driven Machinery</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">DC Motor Speed Fluctuation Solutions</li></ol> </nav>
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
<article class="post-2425 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-dc-motor-speed-control tag-speed-regulation tag-pi-loop-tuning tag-pmdc-motors tag-bldc-motors tag-globe-scott-motors" id="post-2425">

<img alt="Motor-driven production line in an industrial plant, illustrating the causes of DC motor speed fluctuation" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-speed-fluctuation-solutions.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Speed Control, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A conveyor that surges every few seconds, a mixer that slows each time a batch drops in, a winder whose line speed wanders as the reel builds: <strong>DC motor speed fluctuation</strong> takes many forms, and each points to a different root cause. Replacing the motor rarely cures it, because the fault usually sits in the supply, the controller or the mechanics between shaft and load, whether the drive is a brushed <a href="/products-pmdc-motors/">PMDC motor</a> on a PWM controller or a <a href="/products-bldc-motors/">BLDC motor with a matched driver</a>.</p>

<p>This guide shows how to classify a fluctuation by its time signature, predict open-loop droop, choose feedback, tune a PI speed loop without hunting, and recognise mechanical faults that imitate control problems. If the motor is steadily slow rather than unstable, see our guide to a <a href="/blog/dc-motor-running-slow-causes-troubleshooting/">DC motor running slow</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Match the fix to the pattern. Speed that falls with load is the natural droop of an open-loop PMDC motor, typically several per cent, and is cured with IR compensation or closed-loop feedback. Slow wander follows supply voltage or temperature. A steady oscillation that changes when you change controller gains is an over-tuned PI loop. Dips locked to each shaft revolution or machine cycle point to commutator, coupling, belt or load-torque problems.
</div>

<h2>Step 1: Classify the Fluctuation Before Adjusting Anything</h2>

<p>A handheld tachometer gives an average and hides the shape. Log speed, armature current and terminal voltage together with a data logger, an oscilloscope on the tacho or encoder signal, or a digital drive's trend screen. Compare the period of the fluctuation with one shaft revolution, one machine cycle, and the 10 ms ripple period of a single-phase rectifier on 50 Hz mains. Most cases fall into four patterns:</p>

<ul>
<li><strong>Load droop:</strong> speed falls whenever current rises and recovers when the load eases. In open loop this is inherent behaviour, not a fault.</li>
<li><strong>Slow drift:</strong> speed wanders over minutes, following battery state of charge, mains voltage or motor warm-up.</li>
<li><strong>Hunting:</strong> a regular oscillation whose frequency matches no mechanical period and shifts when the controller gains change.</li>
<li><strong>Periodic dips:</strong> disturbances locked to shaft rotation or the machine cycle, pointing to commutation, couplings, belts or cyclic load torque.</li>
</ul>

<hr/>

<h2>Why an Open-Loop PMDC Motor Changes Speed With Load</h2>

<p>With a fixed field from its permanent magnets, a PMDC motor runs at the speed set by whatever voltage remains after the resistive and brush drops:</p>

<div class="gsm-equation">\[ \omega = \frac{V - I_a R_a - V_{brush}}{K_e} \]</div>

<p>Because torque is \( T = K_t I_a \), a torque step \( \Delta T \) produces a speed step \( \Delta\omega = R_a \Delta T / (K_e K_t) \) (see our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a>). Circuit resistance sets the slope, and the result is quoted as speed regulation:</p>

<div class="gsm-equation">\[ SR = \frac{N_{nl} - N_{fl}}{N_{fl}} \times 100\% \]</div>

<h3>Worked Example: Droop and Supply Sag on a 24 V PMDC Drive</h3>

<p>Take a 24 V PMDC motor with \( K_e = K_t = 0.070\,\mathrm{V\cdot s/rad} \), a total circuit resistance of 0.25 Ω (armature, brushes and cable, with brush drop folded in), 0.8 A at no load and 8 A at full load.</p>

<ul>
<li><strong>No load:</strong> \( \omega = (24 - 0.8 \times 0.25)/0.070 = 340\,\mathrm{rad/s} \), or 3,247 rpm.</li>
<li><strong>Full load:</strong> \( \omega = (24 - 8 \times 0.25)/0.070 = 314.3\,\mathrm{rad/s} \), or 3,001 rpm.</li>
<li><strong>Regulation:</strong> \( (3247 - 3001)/3001 \times 100 \approx 8.2\% \).</li>
<li><strong>Load swinging between 3 A and 8 A:</strong> at 3 A, \( \omega = 23.25/0.070 = 332.1\,\mathrm{rad/s} \) (3,172 rpm), so speed cycles between 3,001 and 3,172 rpm, about ±2.8 % around the mean.</li>
<li><strong>Battery sagging to 22 V at full load:</strong> \( \omega = (22 - 2)/0.070 = 285.7\,\mathrm{rad/s} \), or 2,728 rpm, a further 9 % loss.</li>
</ul>

<p>In open loop, supply variation usually moves speed more than load does. Warm-up adds drift: copper resistance rises about 0.393 % per °C, increasing droop, while ferrite magnets lose roughly 0.2 % of flux per °C, raising light-load speed. A PMDC motor running a few per cent faster at light load after an hour is behaving normally.</p>

<h3>Voltage Headroom: The Hidden Limit on Any Speed Controller</h3>

<p>Unregulated transformer–rectifier supplies pass mains variation straight through, and in many Indian plants the grid moves by ±10 % across a shift. Closed-loop control can only hold speed with voltage in reserve. The example motor needs the full 24 V for 3,001 rpm at full load; on a battery that sags to 22 V no controller can hold it, so set the reference below about 2,700 rpm or choose a higher-voltage winding. Size the set speed against the lowest supply voltage the machine will see.</p>

<hr/>

<h2>Closing the Loop: IR Compensation, Tachogenerators and Encoders</h2>

<p>The cheapest improvement is <strong>IR compensation</strong>. The controller measures armature current and raises its output voltage in proportion, cancelling the resistive drop:</p>

<div class="gsm-equation">\[ V_{out} = V_{set} + I_a R_{comp} \]</div>

<p>With \( R_{comp} \) equal to the hot circuit resistance, droop nearly disappears. Set higher, the drive over-compensates: speed rises with load and the positive feedback can make the motor surge. Adjust it at full load until no-load and full-load speeds match, then back it off slightly. Beyond that, true speed feedback is needed. Typical industrial results:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Speed Control Method</th><th>Typical Regulation (No Load to Full Load)</th><th>Strengths</th><th>Limitations</th></tr>
</thead>
<tbody>
<tr><td><strong>Open loop, fixed voltage (PMDC)</strong></td><td>About 5–20 %, higher on small frames</td><td>Simplest; no sensor</td><td>Follows supply and temperature</td></tr>
<tr><td><strong>Armature-voltage feedback with IR compensation</strong></td><td>About 1–3 %</td><td>No sensor on the motor</td><td>Cannot correct magnet or brush-drop changes</td></tr>
<tr><td><strong>Analogue DC tachogenerator</strong></td><td>About 0.5–1 %</td><td>Robust, continuous signal</td><td>Tacho ripple and its own brush wear</td></tr>
<tr><td><strong>Incremental encoder, digital PI loop</strong></td><td>0.1 % or better at medium and high speed</td><td>Precise; also supports positioning</td><td>Quantisation at low speed</td></tr>
<tr><td><strong>BLDC with Hall sensors only</strong></td><td>Around 1 % at medium speed</td><td>No extra sensor, no brushes</td><td>Coarse speed estimate at low rpm</td></tr>
<tr><td><strong>BLDC with encoder and FOC</strong></td><td>0.1 % or better, smooth to low speed</td><td>Tightest regulation, low torque ripple</td><td>Higher controller cost and set-up effort</td></tr>
</tbody>
</table>
</div>

<h3>Encoder Resolution and Low-Speed Jitter</h3>

<p>A digital drive usually estimates speed by counting encoder edges in a fixed sample time \( T_s \). With quadrature decoding, the count per sample is:</p>

<div class="gsm-equation">\[ n = 4 \cdot \mathrm{PPR} \cdot \frac{N}{60} \cdot T_s \]</div>

<p>For a 500 PPR encoder sampled every 1 ms at 3,000 rpm, \( n = 4 \times 500 \times 50 \times 0.001 = 100 \) counts, so one count of uncertainty is 1 %. At 30 rpm the same arithmetic gives a single count, and the measured speed jumps between 0, 30 and 60 rpm from sample to sample. A PI loop acting on that noise makes the real shaft speed fluctuate. Measure time between edges at low speed, average over a longer window (accepting lag), or fit a higher-resolution encoder.</p>

<hr/>

<h2>Tuning the PI Speed Loop: Hunting Versus Sluggish Response</h2>

<p>Most speed controllers apply a proportional–integral law to the speed error \( e = \omega_{ref} - \omega \):</p>

<div class="gsm-equation">\[ V_{cmd} = K_p \, e + K_i \int e \, dt \]</div>

<p>Excess proportional gain gives a nervous response, amplifies encoder noise and often makes the motor buzz. Excess integral gain produces the classic slow hunt: speed overshoots after every load step and swings several times before settling. Too little of either leaves a sag that takes seconds to recover. A useful yardstick is the mechanical time constant \( \tau_m = J R_a / (K_t K_e) \): with 1.0 × 10<sup>−3</sup> kg·m² of motor plus reflected load inertia on the example motor, \( \tau_m = 0.001 \times 0.25 / 0.0049 \approx 51\,\mathrm{ms} \). A closed loop can respond faster than this only while the controller has spare voltage and current.</p>

<h4>A Practical Tuning Sequence:</h4>
<ol>
<li>Tune with the real load coupled; bare-motor gains rarely suit the machine.</li>
<li>Set integral gain to zero. Raise proportional gain in small steps, applying small reference or load steps, until the response rings; then halve it.</li>
<li>Add integral action gradually until steady-state error disappears within the recovery time the process needs, stopping before overshoot exceeds roughly 10–20 %.</li>
<li>Re-check at minimum and maximum speed, cold and hot, and at extremes of load inertia.</li>
<li>Watch the current limit. If a load step drives the controller into limit, the integrator winds up and overshoots on recovery; enable anti-windup or raise the limit within the motor's peak rating.</li>
</ol>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Change the controller gains and watch the fluctuation. If its frequency moves, the control loop is the cause. If it stays locked to shaft speed or the machine cycle, the cause is mechanical or electrical, and retuning will only mask it.
</div>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Speed Stability Diagnostic Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable worksheet covering how to log and classify fluctuation, supply and voltage-headroom checks, a step-by-step PI tuning sequence, mechanical checks and a pattern-to-cause reference table.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Mechanical and Commutation Causes That Look Like Control Problems</h2>

<h3>Belt Slip, Compliance and Gear Backlash</h3>

<p>Measure speed at both ends of the drive train. If the motor is steady and the driven pulley is not, the belt is slipping from low tension, glazing or oil. Long shafts, soft couplings and belts add compliance, forming a torsional resonance that an aggressive loop will excite. With overrunning loads such as vertical axes or out-of-balance rotors, the load periodically drives the motor and the gear teeth cross the backlash zone with a knock and a speed kick. Remedies are a constant torque bias, lower gains, or a stiffer, lower-backlash gearbox from our <a href="/products-geared-motors/">industrial geared motor</a> range.</p>

<h3>Cyclic Load Torque From Cams, Cranks and Pumps</h3>

<p>Presses, reciprocating pumps and cam mechanisms demand torque unevenly within each cycle. If \( \Delta E \) is the energy surplus or deficit over a cycle, the coefficient of speed fluctuation is approximately:</p>

<div class="gsm-equation">\[ C_s = \frac{\omega_{max} - \omega_{min}}{\omega_{mean}} \approx \frac{\Delta E}{J \, \omega_{mean}^2} \]</div>

<p>With \( \Delta E = 5\,\mathrm{J} \), \( J = 1.0 \times 10^{-3}\,\mathrm{kg\cdot m^2} \) and 314 rad/s, \( C_s \approx 5/98.6 \approx 5\% \). A 4.0 × 10<sup>−3</sup> kg·m² flywheel on the motor shaft cuts it to about 1 % (conservatively, ignoring the motor's own corrective torque). Inertia is most effective on the high-speed side, but it lengthens every start and stop, a trade-off covered in our guide to choosing a <a href="/blog/motor-for-frequent-start-stop-applications/">motor for frequent start-stop applications</a>.</p>

<h3>Brush, Commutator and Connection Intermittency</h3>

<p>A dip or current spike that repeats every revolution (twice per revolution on a two-pole motor, once as the defect passes each brush) suggests a high or low commutator bar, a flat spot or an open armature coil. Random dips suggest sticking brushes, weak springs, brushes near minimum length, or a loose lug that opens under vibration. A healthy brushed motor's armature current shows a fine, regular commutation ripple on an oscilloscope; these faults show notches or gaps. Check the commutator, brush length and spring force against our <a href="/dc-motor-maintenance/">DC motor maintenance</a> limits. If dips grow into full stops, see why a <a href="/blog/dc-motor-keeps-stopping-during-operation/">DC motor keeps stopping</a>.</p>

<h3>Cogging and Stick-Slip at Low Speed</h3>

<p>Below roughly a tenth of base speed, slot cogging and static friction in slides or seals can make motion jerky under even a perfect controller. Gear the drive so the motor runs faster, reduce breakaway friction, or use a BLDC motor with sinusoidal drive and encoder feedback for smoother low-speed torque.</p>

<hr/>

<h2>Diagnostic Matrix: DC Motor Speed Fluctuation Patterns and Fixes</h2>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Fluctuation Pattern</th><th>Most Likely Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Speed falls with load, recovers when it eases</strong></td><td>Open-loop droop across circuit resistance</td><td>Speed and current at no load and full load; calculate regulation</td><td>IR compensation, tacho or encoder feedback</td></tr>
<tr><td><strong>Slow wander that tracks other loads switching</strong></td><td>Supply variation or battery sag</td><td>Log terminal voltage alongside speed</td><td>Regulated supply; closed loop with voltage headroom; heavier cable</td></tr>
<tr><td><strong>Regular oscillation that changes with gains</strong></td><td>PI gains too high or integral too fast</td><td>Step test; reduce integral gain and observe</td><td>Retune using the sequence above</td></tr>
<tr><td><strong>Large overshoot after heavy load steps</strong></td><td>Integrator wind-up at current limit</td><td>Log current; check whether it sits at the limit</td><td>Anti-windup; raise limit within motor rating</td></tr>
<tr><td><strong>Jitter mainly at low speed</strong></td><td>Encoder or Hall quantisation; cogging</td><td>Count edges per sample period</td><td>Period measurement, higher PPR, more gear reduction</td></tr>
<tr><td><strong>Dips repeating every motor revolution</strong></td><td>Commutator bar defect, open coil, bent shaft</td><td>Scope armature current; check shaft runout</td><td>Skim commutator, repair armature, realign</td></tr>
<tr><td><strong>Fluctuation locked to the machine cycle</strong></td><td>Cyclic load torque</td><td>Overlay speed on cam or crank position</td><td>Flywheel, more inertia, feed-forward</td></tr>
<tr><td><strong>Motor steady, driven shaft varies</strong></td><td>Belt slip or coupling compliance</td><td>Tachometer at both ends of the drive</td><td>Re-tension or replace belt; stiffer coupling</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>When to Move to a BLDC Motor With Field-Oriented Control</h2>

<p>Where the process needs regulation tighter than about 1 % down to low speed, or brush wear is itself causing dips, a brushless drive is the robust answer. Our <a href="/products-bldc-motors/">BLDC motors</a> use 120° Hall sensors with optional encoders, with matched drivers offering sensored trapezoidal or sinusoidal FOC and 0–5 V, PWM, RS-485 Modbus or CAN commands. Rotors are balanced to ISO 1940 G2.5, keeping once-per-revolution disturbance low. Our <a href="/blog/pmdc-vs-bldc-motor-application-fit-guide/">PMDC vs BLDC application fit guide</a> covers the cost side. If the real need is to stop at a position rather than hold a speed, read our <a href="/blog/motor-position-control-selection-guide/">motor position control selection guide</a>.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What causes speed fluctuation in a DC motor?</h3>
<p>The common causes are load changes acting on an open-loop motor's natural droop, supply voltage variation, an over-tuned PI speed loop, and mechanical problems such as belt slip, gear backlash or cyclic load torque. Brush and commutator faults add once-per-revolution or random dips. Logging speed, current and voltage together and comparing the fluctuation period with the shaft revolution and machine cycle usually isolates the cause.</p>

<h3>Q2. What is good speed regulation for a DC motor?</h3>
<p>It depends on the control method. An open-loop PMDC motor on a fixed voltage typically changes speed by about 5–20 % between no load and full load, more on small frames. Armature-voltage feedback with IR compensation usually holds 1–3 %, an analogue tachogenerator about 0.5–1 %, and an encoder-based digital loop 0.1 % or better at medium and high speeds. Specify the figure the process genuinely needs, because tighter regulation costs more.</p>

<h3>Q3. How do I stop a motor speed controller from hunting?</h3>
<p>Hunting is usually caused by too much integral action, too much proportional gain, or both. With the real load coupled, reduce integral gain first; if the oscillation persists, reduce proportional gain. Also check for integrator wind-up at current limit and for backlash or soft couplings creating a resonance. If the oscillation frequency does not change with gains, the cause is mechanical, not the controller.</p>

<h3>Q4. What is IR compensation on a DC motor drive?</h3>
<p>IR compensation is a controller feature that measures armature current and raises the output voltage by that current multiplied by a set resistance, cancelling the drop across the armature, brushes and cables. Set correctly, it makes a PMDC motor's speed nearly independent of load without a speed sensor. Set too high, the motor speeds up with load and can surge, so adjust it at full load and back it off slightly.</p>

<h3>Q5. Why does my motor speed fluctuate only at low speed?</h3>
<p>Three effects grow at low speed. Encoder or Hall feedback delivers very few edges per sample, so the measured speed is noisy and the loop reacts to that noise. Motor cogging and static friction in the load cause stick-slip motion. And torque ripple matters more when little kinetic energy is available to smooth it. Higher-resolution feedback, more gear reduction or a BLDC motor with sinusoidal drive usually helps.</p>

<h3>Q6. Is a BLDC motor better than a PMDC motor for stable speed?</h3>
<p>A <a href="/products-bldc-motors/">BLDC motor</a> with an encoder and field-oriented control gives the tightest regulation and the smoothest low-speed running, and it removes brush wear as a source of intermittent dips. However, a PMDC motor with tachogenerator or encoder feedback and a well-tuned controller holds speed within about 1 % in many industrial machines at lower system cost. Decide on the regulation target, speed range and annual running hours.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Speed fluctuation is solved fastest by measuring first. Log speed, current and voltage together, compare the period of the disturbance with the load cycle and shaft revolution, and the cause usually identifies itself. Droop and supply sag call for compensation, feedback and voltage headroom; hunting calls for disciplined PI tuning; periodic dips call for mechanical and commutator work, not gain changes.</p>

<p>If your machine needs tighter regulation than its present drive can deliver, <a href="/contact-us/">share your speed range, load profile and regulation target with our engineers</a> and we will help you compare a closed-loop PMDC solution with a BLDC drive.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is Unstable Speed Affecting Product Quality on Your Machine?</strong></h3>
<p style="margin-bottom: 0;">Share your speed range, regulation target, load profile, supply voltage and current controller details with Globe Scott&#x27;s engineers. We will help you decide whether better feedback, retuning, a geared PMDC drive or a BLDC motor with a matched FOC driver will hold the speed your process needs.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Speed Control, Speed Regulation, PI Loop Tuning, PMDC Motors, BLDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/conveyor-motor-overload-heavy-loads/">
<h4 class="post-title">Why Does Your Conveyor Motor Struggle to Move Heavy Loads?</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/automatic-door-motor-problems-open-close/">
<h4 class="post-title">Why Does an Automatic Door Motor Fail to Open or Close Properly?</h4>
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
<li><a href="/blog/dc-motor-running-slow-causes-troubleshooting/">Why Does a DC Motor Run Slowly? Troubleshooting Steps</a></li>
<li><a href="/blog/motor-position-control-selection-guide/">Choosing a Motor for Precise Position Control</a></li>
<li><a href="/blog/dc-motor-keeps-stopping-during-operation/">Why Does a DC Motor Keep Stopping During Operation?</a></li>
<li><a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">Motor Torque and Speed Calculation Guide</a></li>
<li><a href="/blog/pmdc-vs-bldc-motor-application-fit-guide/">PMDC vs BLDC Motors: Application Fit Guide</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Diagnostic Worksheet</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Speed Stability Diagnostic Worksheet</h3>
          <p class="gsm-modal-subtitle">Classify speed fluctuation by its pattern, check supply headroom and tune a PI speed loop step by step, with a quick-reference table of causes and fixes.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Pattern Logging Guide:</strong> Separate droop, drift, hunting and periodic dips quickly</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>PI Tuning Sequence:</strong> Adjust gains without inducing hunting or integrator wind-up</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Cause Reference Table:</strong> Each fluctuation pattern mapped to likely cause and first check</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Speed Fluctuation Solutions Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor Speed Stability Diagnostic Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-speed-fluctuation-solutions/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Speed Stability Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor Speed Stability Diagnostic Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-speed-stability-diagnostic-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
