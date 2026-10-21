<?php
$current_page     = 'undersized-motor-problems-how-to-avoid';
$canonical_path   = 'blog/undersized-motor-problems-how-to-avoid/';
$page_title       = 'How to Avoid Undersized Motor Problems | Globe Scott Motors';
$meta_description = 'Undersized motor problems start at specification. Learn 8 common sizing errors, a step-by-step method with peak, RMS and margin checks, and a worked example.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/undersized-motor-problems-how-to-avoid.jpg';
$body_class       = 'post-template-default single single-post postid-2442 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/"
      },
      "headline": "How to Avoid Choosing an Undersized Motor for Your Industrial Application",
      "name": "How to Avoid Choosing an Undersized Motor for Your Industrial Application",
      "description": "Undersized motor problems start at specification. Learn 8 common sizing errors, a step-by-step method with peak, RMS and margin checks, and a worked example.",
      "url": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Sizing, Specification",
      "keywords": "undersized motor problems, motor sizing calculation, motor safety factor, peak vs continuous torque, motor oversizing vs undersizing, duty cycle sizing, lead screw motor sizing",
      "wordCount": 2548,
      "image": {
        "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/undersized-motor-problems-how-to-avoid.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/undersized-motor-problems-how-to-avoid.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Specification-stage motor sizing with peak torque, RMS torque, ambient and supply-voltage checks to avoid an undersized motor"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#breadcrumb",
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
          "name": "How to Avoid an Undersized Motor",
          "item": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What happens if a motor is undersized?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An undersized motor draws more current than its design allows for the torque demanded, so it runs hot, trips thermal or current protection, accelerates slowly and may stall at start. Insulation then ages faster, with life roughly halving for every 10 K above its rating. In a DC motor the brushes and commutator wear quickly, and repeated high-current starts can partially demagnetise ferrite magnets."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate the right motor size for an industrial application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Define the full duty cycle, then calculate torque at the motor shaft for every segment, including breakaway friction, acceleration of the load and the motor's own rotor, and all transmission losses. Take the peak and the RMS torque, correct for ambient temperature and minimum supply voltage, and apply separate margins. Choose a motor whose continuous rating covers the RMS and whose current-limited torque covers the peak."
          }
        },
        {
          "@type": "Question",
          "name": "What safety factor should I use when sizing a motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Use separate, explicit margins rather than one blanket factor. A practical set is RMS torque at 75–90 % of the continuous rating at the real ambient, peak torque at no more than about 80 % of the current-limited torque, 5–10 % speed headroom at minimum supply voltage, a gearbox service factor of 1.0–2.0 for the shock level, and an agreed allowance for future load growth."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between peak and continuous torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Continuous torque is what a motor can deliver indefinitely without exceeding its temperature limit at rated ambient; heat dissipation sets it. Peak torque is the higher torque available for short periods, limited by the controller's current limit, commutation and, in PMDC motors, the current at which the magnets begin to demagnetise. A duty cycle must satisfy both: RMS within continuous, every peak within the peak rating."
          }
        },
        {
          "@type": "Question",
          "name": "Is it better to oversize or undersize a motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Neither, but a modest, deliberate margin is far cheaper than undersizing. An undersized motor overheats, trips and fails early. An oversized one costs more, runs less efficiently at light load, adds rotor inertia, and its higher stall torque can damage a gearbox in a jam unless current is limited. Aim for RMS torque at roughly 75–90 % of the continuous rating."
          }
        },
        {
          "@type": "Question",
          "name": "How does ambient temperature affect motor sizing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ratings under IEC 60034-1 assume cooling air no hotter than 40 °C and altitude up to 1,000 m. A hotter ambient eats into the allowable temperature rise, so continuous torque must be reduced. If copper loss dominates, allowable torque falls roughly with the square root of the remaining rise budget: about 3 % at 45 °C and 6–7 % at 50 °C for an 80 K rating. Fixed losses make the reduction larger: with about 30 % fixed losses, typical of small motors, it is roughly 5 % at 45 °C and 9 % at 50 °C."
          }
        },
        {
          "@type": "Question",
          "name": "How does duty cycle affect motor sizing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Duty cycle decides which rating applies. Continuous running needs an S1 rating; short or intermittent operation may allow a smaller S2 or S3 motor, provided the real on-time and rest periods match the rating. For repeating cycles, size on RMS torque over the whole cycle including rests, which is valid when each on-period is short compared with the motor's thermal time constant, and check every peak separately."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/",
      "url": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/",
      "name": "How to Avoid Undersized Motor Problems | Globe Scott Motors",
      "description": "Undersized motor problems start at specification. Learn 8 common sizing errors, a step-by-step method with peak, RMS and margin checks, and a worked example.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/#primaryimage"
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
<h1>How to Avoid Choosing an Undersized Motor for Your Industrial Application</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">How to Avoid an Undersized Motor</li></ol> </nav>
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
<article class="post-2442 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-motor-sizing tag-undersized-motor tag-duty-cycle tag-geared-motors tag-pmdc-motors tag-globe-scott-motors" id="post-2442">

<img alt="Engineer sizing an industrial DC motor at specification stage to avoid undersized motor problems in service" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/undersized-motor-problems-how-to-avoid.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Engineering, Specification</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>Most <strong>undersized motor problems</strong> are decided long before the machine is built: on the day someone divides load power by an optimistic efficiency, rounds to the nearest catalogue size and moves on. The motor passes the factory acceptance run, then overheats in its first Indian summer, trips on every cold start or wears out its brushes within a year.</p>

<p>Undersizing is rarely one big mistake. It is several small omissions that compound: acceleration here, a lead-screw efficiency there, a sagging supply, a duty cycle that tightened after launch. This guide lists the common sizing errors, sets out a step-by-step method with explicit margins for <a href="/products-pmdc-motors/">PMDC motors</a> and geared drives, and works a complete example from load to selection. If you are rescuing a machine that has already outgrown its motor, start instead with our guide to <a href="/blog/motor-insufficient-torque-under-load-how-to-choose/">choosing a motor when a machine cannot handle the load</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> To avoid an undersized motor, size from the duty cycle, not from average power. Calculate motor-shaft torque for every segment (breakaway, acceleration including the rotor, running and process loads) through realistic transmission efficiencies. Check the peak against current-limited torque at minimum supply voltage, the RMS against the continuous rating at the real ambient temperature, and the duty type against S1, S2 or S3. Then apply separate, explicit margins plus an agreed allowance for load growth, not one blanket factor.
</div>

<h2>Undersized Motor Problems: What They Look Like in Service</h2>

<p>For a PMDC motor the physics is simple: torque is proportional to current (\( T = K_t I \)) and heat to current squared. Any torque left out of the calculation turns into current, and the heat follows the square. The symptoms point back to the error:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Symptom in Service</th><th>Limit Being Exceeded</th><th>Usual Sizing Error Behind It</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Runs hot; thermal trips late in the shift</strong></td><td>Continuous (RMS) rating</td><td>Average used instead of RMS; ambient or duty type ignored</td></tr>
<tr><td><strong>Stalls or trips on a cold start</strong></td><td>Peak, current-limited torque</td><td>Breakaway friction or acceleration ignored</td></tr>
<tr><td><strong>Slow acceleration; misses cycle time</strong></td><td>Torque available at speed</td><td>Rotor or load inertia left out</td></tr>
<tr><td><strong>Speed sags under load</strong></td><td>Voltage-limited torque-speed line</td><td>Nominal supply voltage assumed</td></tr>
<tr><td><strong>Rapid brush and commutator wear</strong></td><td>Current at the commutator</td><td>Sustained running near peak current</td></tr>
</tbody>
</table>
</div>

<p>A motor that once met its duty and has since lost torque is a different problem, covered in our guide to a <a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC motor losing torque under load</a>.</p>

<hr/>

<h2>Eight Sizing Errors That Lead to an Undersized Motor</h2>

<h3>1. Sizing on Average Power Instead of Peak and RMS Torque</h3>

<p>Average power hides everything that matters. A drive averaging 40 W may need 150 W for half a second at every start, and a motor idle for most of the cycle can still overheat if its working stroke is long. Size two numbers separately: the peak torque the motor must produce, and the RMS torque, \( \sqrt{\sum T_k^2 t_k / \sum t_k} \), it must carry thermally.</p>

<h3>2. Ignoring Acceleration and Inertia, Including the Motor's Own</h3>

<p>Steady-state sums leave out \( T = J\alpha \). Load inertia reaches the motor divided by \( i^2 \), so with high gear ratios the motor's own rotor often dominates the acceleration torque. Use the rotor inertia of the motor you are actually considering, and repeat the sum when you change frame.</p>

<h3>3. Ignoring Transmission Efficiency</h3>

<p>Every stage takes its share: roughly 95–98 % per spur or helical stage, 40–90 % for worm gears depending on ratio and lead angle, around 90 % for ball screws and only about 30–50 % for trapezoidal lead screws. Two spur stages and a trapezoidal screw can deliver well under 40 % of motor output to the load.</p>

<h3>4. Forgetting Breakaway Friction</h3>

<p>Static friction exceeds running friction, especially after an overnight stand, in cold grease and in sliding contacts such as screw nuts, slides and seals. Breakaway coincides with the start of acceleration, so the two add at the worst possible moment.</p>

<h3>5. Rating at 40 °C When the Machine Lives at 45–50 °C</h3>

<p>IEC 60034-1 ratings assume cooling air no hotter than 40 °C and altitude up to 1,000 m. In an Indian shop in May, inside a cabinet or beside an oven, 45–50 °C is normal. If copper loss dominates, allowable continuous torque falls roughly with the square root of the remaining temperature-rise budget:</p>

<div class="gsm-equation">\[ T_{cont}(\theta_a) \approx T_{cont,40}\sqrt{\frac{\theta_w - \theta_a}{\theta_w - 40^\circ\mathrm{C}}} \]</div>

<p>Here \( \theta_w \) is the winding temperature the rating is based on. Fixed losses make the real figure lower, so treat this as an upper bound; our guide to <a href="/blog/continuous-duty-motor-overheating-prevention/">continuous duty motor overheating</a> gives the fuller method, and our <a href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">Class F vs Class H explainer</a> covers the insulation side.</p>

<h3>6. Assuming Nominal Supply Voltage</h3>

<p>A PMDC motor's loaded speed is \( \omega = (V - I R_a - V_b)/K_e \), so battery discharge, cable drop and an unregulated rectifier on a fluctuating grid all cost speed at a given torque. Size at the minimum terminal voltage you will actually see, not the nominal one.</p>

<h3>7. Matching the Wrong Duty Type</h3>

<p>S1 (continuous), S2 (short-time) and S3 (intermittent periodic) ratings under IEC 60034-1 are not interchangeable: a motor rated S2 for 10 minutes can be physically smaller than an S1 motor of the same torque. Use the real on-time and cycle, not the brochure cycle. RMS averaging is valid only when each on-period is short compared with the motor's thermal time constant; long runs count as continuous. If a shaft-mounted fan cools the motor, count only part of each rest period, because the fan stops too.</p>

<h3>8. No Allowance for Future Load Growth</h3>

<p>Products get heavier, cycles get faster and attachments get added; that is exactly how machines end up needing a rescue. Agree a growth allowance with the product team (10–25 % on load mass or force is a reasonable starting point) and apply it to the load, not as a multiplier on the motor.</p>

<hr/>

<h2>A Step-by-Step Motor Sizing Method With Explicit Margins</h2>

<p>The basic formulae are in our guides to <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">motor power, RPM and gear ratio</a> and <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">torque and speed calculation</a>. The method below adds the discipline that stops a selection coming out undersized:</p>

<ol>
<li><strong>Define the duty:</strong> masses, forces, distances, times, on and off periods, worst-case product and the agreed growth allowance.</li>
<li><strong>Map the transmission:</strong> every ratio, screw lead and drum diameter, with a realistic efficiency for each stage at breakaway as well as running.</li>
<li><strong>Calculate motor-shaft torque for every segment:</strong> breakaway, acceleration (load reflected by \( i^2 \), plus rotor), running, deceleration or lowering, holding.</li>
<li><strong>Extract the peak and RMS torque</strong> and the speed required at each point.</li>
<li><strong>Correct for the environment:</strong> ambient, altitude, enclosure and minimum supply voltage.</li>
<li><strong>Apply separate margins</strong> from the table below and shortlist motor and gearbox.</li>
<li><strong>Verify with real data:</strong> re-run step 3 with the candidate's rotor inertia, check its torque-speed line at minimum voltage, and confirm the gearbox output rating.</li>
</ol>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Check</th><th>Requirement</th><th>Typical Margin</th><th>What It Covers</th></tr>
</thead>
<tbody>
<tr><td><strong>Thermal</strong></td><td>RMS torque within continuous rating at actual ambient</td><td>RMS at 75–90 % of rating</td><td>Friction growth, wear, unmeasured losses</td></tr>
<tr><td><strong>Peak</strong></td><td>Peak torque within current-limited torque</td><td>Peak at no more than ~80 %</td><td>Variation without nuisance trips</td></tr>
<tr><td><strong>Speed</strong></td><td>Required speed at load torque and minimum voltage</td><td>5–10 % speed headroom</td><td>Supply sag, hot winding resistance</td></tr>
<tr><td><strong>Gearbox</strong></td><td>Output torque within gearbox rating</td><td>Service factor 1.0–2.0 by shock and hours</td><td>Tooth fatigue and shock loads</td></tr>
<tr><td><strong>Load growth</strong></td><td>Agreed allowance on load</td><td>Typically 10–25 %</td><td>Product and cycle changes</td></tr>
</tbody>
</table>
</div>

<p>Notice what is missing: a blanket 1.5 × on everything. Stacking a generous factor on top of already conservative inputs is how the opposite error, oversizing, happens.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
If a lead screw or worm gear is in the drive, never trust a power-only estimate. Transmission efficiency alone can multiply the required motor torque by 2.5 or more.
</div>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Motor Sizing Worksheet: Peak, RMS and Margin Checks</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable six-step worksheet that takes you from duty cycle and transmission efficiencies to peak and RMS torque, ambient and supply corrections, and explicit margins before you specify a motor.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Sizing a Lead-Screw Lift Table</h2>

<p>An ergonomic lift table raises a payload of up to 150 kg through 300 mm in 15 s (20 mm/s), holds while the operator works, then lowers. Platform and carriage weigh 30 kg. The drive is a 24 V DC geared motor at 9:1 (two spur stages, \( \eta_g = 0.94 \)) turning a Tr20×4 trapezoidal lead screw: 18 mm mean diameter, 4 mm lead, steel on bronze, \( \mu = 0.10 \) running and 0.15 at breakaway. The cell reaches 45 °C in summer, the supply can sag to 21.6 V at the motor, and the product team has agreed 20 % payload growth. Worst-case cycle: 60 s, with a 15 s raise, a 15 s lower and 30 s stopped.</p>

<p>The obvious estimate is \( P = mgv = 150 \times 9.81 \times 0.020 = 29\,\mathrm{W} \), so a 40 W motor looks generous. The disciplined version follows.</p>

<h4>Load and Transmission</h4>

<p>Design mass is \( 1.2 \times 150 + 30 = 210\,\mathrm{kg} \), so \( F = 2{,}060\,\mathrm{N} \). The screw turns at 300 rpm and the motor at 2,700 rpm. Lead angle \( \lambda = 4.05^\circ \); for the 30° thread the friction angle \( \phi' = \arctan(\mu/\cos 15^\circ) \) is 5.91° running and 8.83° at breakaway:</p>

<div class="gsm-equation">\[ T_s = F\,\frac{d_m}{2}\tan(\lambda + \phi'), \qquad \eta_s = \frac{\tan\lambda}{\tan(\lambda + \phi')} \]</div>

<p>Running, \( T_s = 2{,}060 \times 0.009 \times \tan 9.96^\circ = 3.25\,\mathrm{Nm} \) (\( \eta_s = 0.40 \)); at breakaway 4.24 Nm (\( \eta_s = 0.31 \)). Through the gearbox (\( i\,\eta_g = 8.46 \)) that is 0.385 Nm running and 0.501 Nm at breakaway.</p>

<h4>Acceleration, Lowering and RMS</h4>

<p>A 0.5 s ramp to 2,700 rpm needs \( \alpha_m = 565\,\mathrm{rad/s^2} \). Reflected load inertia is only about \( 1 \times 10^{-6}\,\mathrm{kg\,m^2} \), so the rotor (assumed \( 1.5 \times 10^{-4}\,\mathrm{kg\,m^2} \)) dominates: 0.086 Nm. Peak at start is \( 0.501 + 0.086 = 0.59\,\mathrm{Nm} \). The screw is self-locking (\( \lambda &lt; \phi' \)), so lowering is powered: \( 2{,}060 \times 0.009 \times \tan 1.86^\circ = 0.60\,\mathrm{Nm} \) at the screw, 0.071 Nm at the motor. Assuming a motor without a shaft fan, the 30 s rest counts in full:</p>

<div class="gsm-equation">\[ T_{rms} = \sqrt{\frac{0.385^2 \times 15 + 0.071^2 \times 15}{60}} = 0.196\,\mathrm{Nm} \]</div>

<p>Start transients add about 2.5 %, giving 0.20 Nm.</p>

<h4>Environment, Supply and Margins</h4>

<p>With the rating based on an 80 K rise, the 45 °C factor is \( \sqrt{75/80} = 0.97 \) for copper loss alone; allowing for the roughly 30 % fixed losses (24 K of the 80 K) typical of small motors, it is \( \sqrt{51/56} = 0.95 \). The 40 °C rating must therefore reach 0.21 Nm, and with RMS at 80 % of rating, 0.26 Nm continuous. The 0.59 Nm peak at 80 % of available torque needs 0.74 Nm. For a candidate with \( K_t = 0.060\,\mathrm{Nm/A} \), \( R_a = 0.30\,\Omega \), 0.6 A no-load current and 1 V brush drop, at 21.6 V and 0.385 Nm: \( I = 0.385/0.060 + 0.6 = 7.0\,\mathrm{A} \) and \( \omega = (21.6 - 7.0 \times 0.30 - 1.0)/0.060 = 308\,\mathrm{rad/s} \), or 2,940 rpm, 9 % above the 2,700 rpm needed. Peak current is 10.4 A, so a 13 A limit gives 0.74 Nm.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Sizing Step</th><th>Motor-Shaft Figure</th><th>Comment</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Naive: 150 kg × g × 20 mm/s</strong></td><td>0.10 Nm (29 W)</td><td>Suggests a 40 W motor</td></tr>
<tr><td><strong>+ platform and 20 % growth</strong></td><td>0.15 Nm</td><td>Still looks light</td></tr>
<tr><td><strong>+ screw (40 %) and gearbox (94 %)</strong></td><td>0.385 Nm</td><td>Running raise torque</td></tr>
<tr><td><strong>+ breakaway (screw 31 %)</strong></td><td>0.50 Nm</td><td>At start</td></tr>
<tr><td><strong>+ rotor acceleration</strong></td><td>0.59 Nm</td><td>Peak requirement</td></tr>
<tr><td><strong>RMS over 60 s cycle</strong></td><td>0.20 Nm</td><td>Thermal requirement</td></tr>
<tr><td><strong>÷ 0.95 for 45 °C, ÷ 0.8 margin</strong></td><td>0.26 Nm</td><td>Minimum continuous rating</td></tr>
</tbody>
</table>
</div>

<p>The answer is a motor of at least 0.26 Nm continuous, S3 at 50 % or better, about 0.74 Nm current-limited peak and \( K_t \approx 0.06\,\mathrm{Nm/A} \) at 24 V: roughly an 80–100 W PMDC geared motor, a size our A80 <a href="/products-geared-motors/">geared motors</a> (40–200 W, including 9:1) cover. The "generous" 40 W choice, about 0.13 Nm continuous, would have run at over 150 % of its thermal rating and stalled at breakaway.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
The rotor inertia, \( K_t \) and \( R_a \) above are assumptions until a motor is chosen. Re-run the acceleration, peak and voltage checks with the actual datasheet values before releasing the specification.
</div>

<hr/>

<h2>The Cost of Erring the Other Way: Oversizing</h2>

<p>Oversizing is not free insurance. A motor loaded to a small fraction of its rating spends more of its input on fixed losses (bearing and brush friction, iron loss), so efficiency falls, which matters on battery equipment. Its bigger rotor adds inertia to every acceleration. Its higher stall torque, multiplied by the gear ratio, can exceed what the gearbox or machine can survive in a jam unless current is limited. It also costs more, weighs more and needs a larger controller and cabling.</p>

<p>Aim for RMS torque at roughly 75–90 % of the continuous rating, not 40 %. Where a duty has high peaks over a modest RMS, <a href="/products-bldc-motors/">BLDC motors</a> with matched drivers can meet the peaks without carrying a large frame for the average.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What happens if a motor is undersized?</h3>
<p>An undersized motor draws more current than its design allows for the torque demanded, so it runs hot, trips thermal or current protection, accelerates slowly and may stall at start. Insulation then ages faster, with life roughly halving for every 10 K above its rating. In a DC motor the brushes and commutator wear quickly, and repeated high-current starts can partially demagnetise ferrite magnets.</p>

<h3>Q2. How do I calculate the right motor size for an industrial application?</h3>
<p>Define the full duty cycle, then calculate torque at the motor shaft for every segment, including breakaway friction, acceleration of the load and the motor's own rotor, and all transmission losses. Take the peak and the RMS torque, correct for ambient temperature and minimum supply voltage, and apply separate margins. Choose a motor whose continuous rating covers the RMS and whose current-limited torque covers the peak.</p>

<h3>Q3. What safety factor should I use when sizing a motor?</h3>
<p>Use separate, explicit margins rather than one blanket factor. A practical set is RMS torque at 75–90 % of the continuous rating at the real ambient, peak torque at no more than about 80 % of the current-limited torque, 5–10 % speed headroom at minimum supply voltage, a gearbox service factor of 1.0–2.0 for the shock level, and an agreed allowance for future load growth.</p>

<h3>Q4. What is the difference between peak and continuous torque?</h3>
<p>Continuous torque is what a motor can deliver indefinitely without exceeding its temperature limit at rated ambient; heat dissipation sets it. Peak torque is the higher torque available for short periods, limited by the controller's current limit, commutation and, in PMDC motors, the current at which the magnets begin to demagnetise. A duty cycle must satisfy both: RMS within continuous, every peak within the peak rating.</p>

<h3>Q5. Is it better to oversize or undersize a motor?</h3>
<p>Neither, but a modest, deliberate margin is far cheaper than undersizing. An undersized motor overheats, trips and fails early. An oversized one costs more, runs less efficiently at light load, adds rotor inertia, and its higher stall torque can damage a gearbox in a jam unless current is limited. Aim for RMS torque at roughly 75–90 % of the continuous rating.</p>

<h3>Q6. How does ambient temperature affect motor sizing?</h3>
<p>Ratings under IEC 60034-1 assume cooling air no hotter than 40 °C and altitude up to 1,000 m. A hotter ambient eats into the allowable temperature rise, so continuous torque must be reduced. If copper loss dominates, allowable torque falls roughly with the square root of the remaining rise budget: about 3 % at 45 °C and 6–7 % at 50 °C for an 80 K rating. Fixed losses make the reduction larger: with about 30 % fixed losses, typical of small motors, it is roughly 5 % at 45 °C and 9 % at 50 °C.</p>

<h3>Q7. How does duty cycle affect motor sizing?</h3>
<p>Duty cycle decides which rating applies. Continuous running needs an S1 rating; short or intermittent operation may allow a smaller S2 or S3 motor, provided the real on-time and rest periods match the rating. For repeating cycles, size on RMS torque over the whole cycle including rests, which is valid when each on-period is short compared with the motor's thermal time constant, and check every peak separately.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Undersized motor problems are designed in, one omission at a time. Size from the duty cycle, carry breakaway, acceleration and transmission losses through to the motor shaft, check peak and RMS separately against the real ambient and the minimum supply voltage, and apply explicit margins, including agreed load growth. Then verify with the chosen motor's own data.</p>

<p>Our guide to <a href="/blog/custom-motor-specification-checklist-first-call/">what to bring to your first call</a> lists the data that makes this quick. Share your duty cycle, loads and environment through our <a href="/contact-us/">engineering enquiry page</a>, and our engineers will check the sizing against our PMDC, geared and BLDC ranges.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Specifying a Motor for a New Machine?</strong></h3>
<p style="margin-bottom: 0;">Send our engineers your duty cycle, load masses and forces, transmission details, ambient temperature and supply voltage range. We will check peak and RMS torque, speed at minimum voltage and gearbox margins, and recommend a PMDC, geared or BLDC motor sized for the job.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Motor Sizing, Undersized Motor, Duty Cycle, Geared Motors, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/custom-motor-manufacturing-delays-specifications/">
<h4 class="post-title">Why Do Custom Motor Projects Face Delays? Specifications Buyers Should Finalise Early</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/industrial-motor-premature-failure-checklist/">
<h4 class="post-title">Why Do Industrial Motors Fail Prematurely? A Maintenance and Selection Checklist</h4>
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
<li><a href="/blog/motor-insufficient-torque-under-load-how-to-choose/">Choosing a Motor When the Machine Can&#x27;t Handle the Load</a></li>
<li><a href="/blog/continuous-duty-motor-overheating-prevention/">Preventing Continuous-Duty Motor Overheating</a></li>
<li><a href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">DC Motor Losing Torque Under Load: Causes &amp; Fixes</a></li>
<li><a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">How to Choose Motor Power, RPM &amp; Gear Ratio</a></li>
<li><a href="/blog/custom-motor-specification-checklist-first-call/">Custom Motor Specifications: What to Bring</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">Motor Sizing Worksheet: Peak, RMS and Margin Checks</h3>
          <p class="gsm-modal-subtitle">Specification-stage sizing in six steps, with transmission efficiency ranges, margin targets and the lead-screw lift table example from the article.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Eight Errors Checklist:</strong> Catch the omissions that turn a sound design into an undersized motor</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Peak and RMS Method:</strong> Motor-shaft torque per segment with breakaway and rotor inertia</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Margin Targets:</strong> Separate thermal, peak, speed, gearbox and load-growth margins</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="How to Avoid an Undersized Motor Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Motor Sizing Worksheet: Peak, RMS and Margin Checks">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/undersized-motor-problems-how-to-avoid/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Motor Sizing Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Motor Sizing Worksheet: Peak, RMS and Margin Checks immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/motor-sizing-worksheet-peak-rms-margins.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
