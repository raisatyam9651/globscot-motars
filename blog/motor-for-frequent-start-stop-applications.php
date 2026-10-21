<?php
$current_page     = 'motor-for-frequent-start-stop-applications';
$canonical_path   = 'blog/motor-for-frequent-start-stop-applications/';
$page_title       = 'Motor for Frequent Start-Stop Duty | Globe Scott Motors';
$meta_description = 'Choosing a motor for frequent start-stop applications: S4/S5 duty, inertia ratio, heat per start, RMS current, braking and brake life, with a worked example.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/motor-for-frequent-start-stop-applications.jpg';
$body_class       = 'post-template-default single single-post postid-2435 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/"
      },
      "headline": "How to Choose a Motor for Frequent Start-Stop Applications",
      "name": "How to Choose a Motor for Frequent Start-Stop Applications",
      "description": "Choosing a motor for frequent start-stop applications: S4/S5 duty, inertia ratio, heat per start, RMS current, braking and brake life, with a worked example.",
      "url": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Duty Cycles, Braking",
      "keywords": "motor for frequent start stop applications, s4 s5 duty cycle, starts per hour, inertia ratio, dynamic braking dc motor, electromagnetic brake, rms current calculation",
      "wordCount": 2266,
      "image": {
        "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/motor-for-frequent-start-stop-applications.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/motor-for-frequent-start-stop-applications.jpg",
      "width": 1200,
      "height": 675,
      "caption": "A geared motor on an indexing production line, where start rate, inertia and braking method decide the motor size."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#breadcrumb",
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
          "name": "Motors for Frequent Start-Stop Applications",
          "item": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How many starts per hour can a DC motor handle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no single figure, because the limit depends on the inertia being accelerated, the starting current, the braking method and how well the motor cools at rest. A motor driving a light load with current-limited ramps can tolerate many times more starts than the same motor accelerating a heavy flywheel direct-on-line. Calculate the RMS current over the real cycle, allow for reduced cooling at standstill, and confirm the start rate with the manufacturer."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between S3, S4 and S5 duty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All three are intermittent periodic duty types defined in IEC 60034-1. S3 consists of identical cycles of running and rest in which starting has no significant effect on temperature. S4 adds a significant starting period to each cycle, so the rating must state the cyclic duration factor and the motor and load inertias. S5 adds electric braking as well. If a machine starts a heavy load many times an hour, an S3 rating alone is not enough."
          }
        },
        {
          "@type": "Question",
          "name": "Why does frequent starting overheat a motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "During acceleration the motor carries several times its rated current, and copper loss rises with the square of current. Starting a pure inertia direct-on-line dissipates as much energy in the armature as ends up stored in the load, and plug braking or reversal dissipates three to four times that. Meanwhile a self-ventilated motor cools poorly at low speed and at rest, so heat accumulates faster than it can escape."
          }
        },
        {
          "@type": "Question",
          "name": "Is dynamic braking or regenerative braking better for a DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Regenerative braking returns most of the kinetic energy to the supply and leaves only a little I²R heat in the motor, which suits battery systems and high cycle rates, but it needs a regenerative (two- or four-quadrant) controller and, on rectified mains supplies, a brake chopper. Dynamic braking through a resistor is simpler and keeps most of the heat outside the motor, but its braking torque falls with speed, so stops are slower and less precise."
          }
        },
        {
          "@type": "Question",
          "name": "Can an electromagnetic brake be used to stop a motor every cycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It can, but it is usually a poor choice in frequent start-stop duty. Used as the stopping device, the brake absorbs the full kinetic energy of the load as friction heat at every stop, wearing the lining and widening the air gap. Bring the load to rest electrically with dynamic or regenerative braking and engage the fail-safe brake at or near zero speed, so it serves as a holding and emergency brake."
          }
        },
        {
          "@type": "Question",
          "name": "Is a BLDC motor better than a brushed motor for frequent start-stop duty?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Often, yes. A BLDC motor has no brushes to wear at every high-current start, its windings sit in the stator where heat conducts directly to the housing, and its driver typically provides programmable current limits and ramps, often with regenerative braking. A brushed PMDC motor with a current-limited controller remains economical for moderate start rates and low annual running hours, particularly where the machine has no other control electronics."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/",
      "url": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/",
      "name": "Motor for Frequent Start-Stop Duty | Globe Scott Motors",
      "description": "Choosing a motor for frequent start-stop applications: S4/S5 duty, inertia ratio, heat per start, RMS current, braking and brake life, with a worked example.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/#primaryimage"
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
<h1>How to Choose a Motor for Frequent Start-Stop Applications</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Motors for Frequent Start-Stop Applications</li></ol> </nav>
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
<article class="post-2435 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-start-stop-duty tag-s4-s5-duty-cycle tag-electromagnetic-brakes tag-dynamic-braking tag-pmdc-motors tag-bldc-motors tag-globe-scott-motors" id="post-2435">

<img alt="Motor for frequent start stop applications driving an indexing production line with braking and current-limited starts" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/motor-for-frequent-start-stop-applications.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Duty Cycle, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>Indexing tables, packaging machines, shuttle conveyors, door operators and dosing pumps may start and stop hundreds of times an hour. Choosing a <strong>motor for frequent start-stop applications</strong> is a different exercise from sizing for continuous running: every start and stop leaves a burst of heat in the armature, wears brushes and brakes and shocks the gearbox, while the motor spends little time at the speed where its cooling works best. A motor that is comfortable on running torque can still fail within weeks on a demanding cycle.</p>

<p>This guide covers the IEC 60034-1 duty types for start-stop service, reflected inertia, the heat dissipated per start and stop, an RMS current check over the full cycle, braking methods and brake life, and when a <a href="/products-bldc-motors/">BLDC motor</a> or a <a href="/products-geared-motors/">geared PMDC motor</a> is the better fit. Thermal design for steady S1 running is covered separately in our guide to <a href="/blog/continuous-duty-motor-overheating-prevention/">continuous duty motor overheating</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> In start-stop service the motor is sized by what happens during acceleration and braking, not by running torque. Reflect the load inertia to the motor shaft and keep the inertia ratio moderate, replace direct-on-line starts with current-limited ramps, stop electrically and use the brake only to hold, and check RMS current over the whole cycle with an allowance for poor cooling at rest. Specify S4 or S5 duty with starts per hour, and consider BLDC where brush wear limits the start rate.
</div>

<h2>Why Starts and Stops, Not Running Torque, Decide the Motor</h2>

<p>At every start, current is at its highest and speed, along with any shaft-fan cooling, at its lowest. Started direct-on-line, a PMDC motor draws its stall current \( V/R_a \): for a 48 V motor with 0.40 Ω armature circuit resistance, that is 120 A, fifteen times an 8 A rating. The surge arcs at the brushes, hammers the gear teeth and, in a ferrite-magnet motor, applies one of the strongest demagnetising fields the magnets will ever see. Uncontrolled stopping repeats the stress. The real questions are how much inertia is being accelerated, how much heat each start and stop leaves in the motor, and whether the motor can shed that heat between cycles.</p>

<hr/>

<h2>IEC 60034-1 Duty Types for Start-Stop Service</h2>

<p>IEC 60034-1 defines duty types S1 to S10. Three intermittent types matter here, and the rating should match the real cycle:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Duty Type</th><th>Cycle Content</th><th>Typical Use</th><th>What to Specify</th></tr>
</thead>
<tbody>
<tr><td><strong>S3 — intermittent periodic</strong></td><td>Identical cycles of running and rest; starting does not significantly affect temperature</td><td>Light inertia, few starts</td><td>Cyclic duration factor, e.g. S3 40 %</td></tr>
<tr><td><strong>S4 — intermittent periodic with starting</strong></td><td>Identical cycles with a significant starting time, running and rest</td><td>Indexing heavy loads, frequent starts</td><td>Cyclic duration factor, starts per hour, motor and external inertia referred to the motor shaft</td></tr>
<tr><td><strong>S5 — intermittent periodic with electric braking</strong></td><td>As S4, plus electric braking in every cycle</td><td>Reversing and indexing drives with controlled stops</td><td>As S4, plus the braking method</td></tr>
</tbody>
</table>
</div>

<p>The cyclic duration factor is the energised share of the cycle, with braking time \( t_B = 0 \) for S4:</p>

<div class="gsm-equation">\[ \mathrm{CDF} = \frac{t_A + t_N + t_B}{t_A + t_N + t_B + t_R} \times 100\% \]</div>

<p>Our standard PMDC motors are rated for S1, S2 and S3 duty. For an S4 or S5 cycle the starts per hour and the inertias decide the frame, so they belong in the enquiry rather than being covered by an S3 rating.</p>

<hr/>

<h2>Inertia: The Number That Sets the Cost of Every Start</h2>

<p>Gearing divides load inertia by the square of the ratio, and acceleration time follows from the net torque available:</p>

<div class="gsm-equation">\[ J_{total} = J_M + \frac{J_{load}}{i^2}, \qquad t_A = \frac{J_{total}\,\omega}{T_m - T_L} \]</div>

<p>A 1.8 kg·m² turntable behind a 30:1 gearbox therefore appears at the motor as only 0.0020 kg·m². For quick, well-controlled starts keep the external-to-motor inertia ratio below about 5:1; higher ratios work with gentler ramps but raise the time and energy per start. For a pure inertia load, acceleration time is shortest when \( i = \sqrt{J_{load}/J_M} \), a point our guide to <a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">DC motor gear ratio selection</a> develops. The general power, speed and ratio method is in our guide to <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">choosing motor power, RPM and gear ratio</a>.</p>

<hr/>

<h2>The Heat Cost of Every Start and Stop</h2>

<h3>Direct-On-Line Starting Wastes as Much Energy as It Stores</h3>

<p>Accelerating a pure inertia from rest on a fixed voltage dissipates as much energy in the armature resistance as ends up stored in the load:</p>

<div class="gsm-equation">\[ E_{DOL} = \frac{1}{2} J_{total} \, \omega_0^2 \]</div>

<p>Load torque makes it worse, because acceleration takes longer at high current. Plug stopping, reversing the supply on a running motor, dissipates three times the stored kinetic energy, and a plug reversal from full speed one way to full speed the other dissipates four times.</p>

<h3>Current-Limited Ramps Cut the Heat per Start</h3>

<p>A controller that accelerates at a constant current limit \( I_{lim} \) dissipates \( I_{lim}^2 R_a t_A \). For a pure inertia load this works out to:</p>

<div class="gsm-equation">\[ \frac{E_{ramp}}{E_{DOL}} = \frac{2 I_{lim}}{I_{stall}} \]</div>

<p>Limiting the 120 A motor above to 20 A cuts the armature heat per unloaded start to about a third (2 × 20/120 ≈ 0.33), and it also protects brushes, magnets and gear teeth. The PWM controller does not simply move the waste elsewhere; at low duty it draws less energy from the supply in the first place.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Never plug-reverse a ferrite PMDC motor at full voltage. At the instant of reversal the back-EMF adds to the supply, so armature current approaches \( (V + E_b)/R_a \), nearly twice the stall current, which risks partial demagnetisation of the magnets. Brake electrically to near zero speed first, with the current limit inside the motor's peak rating.
</div>

<hr/>

<h2>Worked Example: Sizing a Motor for Frequent Start-Stop Applications</h2>

<p>A 48 V geared PMDC motor drives a 1.8 kg·m² turntable through 30:1. Motor data: \( K_t = K_e = 0.12\,\mathrm{Nm/A} \), hot armature circuit resistance 0.40 Ω, rated continuous current 8 A, and an assumed 5.0 × 10<sup>−4</sup> kg·m² of motor and gearbox input inertia. Reflected load inertia is 1.8/900 = 2.0 × 10<sup>−3</sup> kg·m², so \( J_{total} = 2.5 \times 10^{-3}\,\mathrm{kg\cdot m^2} \) and the inertia ratio is 4:1. Friction takes 0.48 Nm (4 A), and the motor runs at 314 rad/s (3,000 rpm, 100 rpm at the table). At 600 starts per hour each 6.0 s cycle is:</p>

<ul>
<li><strong>Accelerate at a 20 A limit:</strong> net torque \( 0.12 \times 20 - 0.48 = 1.92\,\mathrm{Nm} \), so \( t_A = 0.0025 \times 314/1.92 \approx 0.41\,\mathrm{s} \). At full speed this needs \( 37.7 + 20 \times 0.40 = 45.7\,\mathrm{V} \), within the 48 V supply.</li>
<li><strong>Run:</strong> 1.8 s at 4 A.</li>
<li><strong>Regenerative braking at 15 A:</strong> \( 0.12 \times 15 + 0.48 = 2.28\,\mathrm{Nm} \) of braking torque, so \( t_B \approx 0.34\,\mathrm{s} \).</li>
<li><strong>Rest:</strong> 3.45 s at zero current.</li>
</ul>

<div class="gsm-equation">\[ I_{rms} = \sqrt{\frac{\sum I_k^2 t_k}{\sum t_k}} = \sqrt{\frac{20^2(0.41) + 4^2(1.8) + 15^2(0.34)}{6.0}} = \sqrt{\frac{269.3}{6.0}} \approx 6.7\,\mathrm{A} \]</div>

<p>That is 84 % of the 8 A rating, which looks acceptable. Two checks change the picture. A self-ventilated motor cools less at standstill, so a cautious designer counts only part of the rest time; counting half gives \( \sqrt{269.3/4.28} \approx 7.9\,\mathrm{A} \), leaving no margin for a 45–50 °C summer ambient. And if production later asks for 900 starts per hour (a 4.0 s cycle with 1.45 s rest), the plain calculation already gives 8.2 A, over the rating. The start rate, not the running load, has become the limit.</p>

<p>Each start leaves \( 20^2 \times 0.40 \times 0.41 \approx 66\,\mathrm{J} \) in the armature. A direct-on-line start would draw 120 A and dissipate roughly \( \frac{1}{2} \times 0.0025 \times 400^2 = 200\,\mathrm{J} \) or more, where 400 rad/s is the 48 V no-load speed.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Start-Stop Duty Cycle Sizing Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A step-by-step worksheet to log the cycle, reflect load inertia, estimate heat per start and stop, check RMS current and choose a braking method, with a starting and braking comparison table.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Braking Methods and Brake Life</h2>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Starting or Braking Method</th><th>Peak Motor Current</th><th>Heat Left in the Motor</th><th>Best Use</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Direct-on-line start</strong></td><td>Stall current, \( V/R_a \)</td><td>\( \frac{1}{2} J \omega_0^2 \) per start, more under load</td><td>Rare starts, small inertia</td></tr>
<tr><td><strong>Current-limited ramp start</strong></td><td>Set limit within peak rating</td><td>About \( 2 I_{lim}/I_{stall} \) of the DOL figure</td><td>Frequent starts; the default</td></tr>
<tr><td><strong>Coast to stop</strong></td><td>None</td><td>None; friction absorbs the energy</td><td>Long cycles, loose stopping accuracy</td></tr>
<tr><td><strong>Dynamic braking resistor</strong></td><td>\( E_b/(R_a + R_b) \)</td><td>Fraction \( R_a/(R_a + R_b) \) of the kinetic energy</td><td>Simple, robust controlled stops</td></tr>
<tr><td><strong>Regenerative braking</strong></td><td>Set by controller</td><td>Only \( I^2 R_a \) during braking</td><td>Battery systems, high cycle rates</td></tr>
<tr><td><strong>Plug stop or reversal</strong></td><td>Up to about twice stall</td><td>3× (stop) or 4× (reversal) the kinetic energy</td><td>Avoid on PMDC motors</td></tr>
<tr><td><strong>Mechanical brake as stopping device</strong></td><td>None</td><td>None in motor; all energy into the lining</td><td>Emergency stops only</td></tr>
</tbody>
</table>
</div>

<h3>Sizing a Dynamic Braking Resistor</h3>

<p>Shorting the armature through a resistor turns the motor into a generator whose braking torque falls with speed. In the example, back-EMF at 314 rad/s is \( 0.12 \times 314 \approx 37.7\,\mathrm{V} \). To cap braking current at 20 A the circuit needs 37.7/20 ≈ 1.9 Ω, so \( R_b \approx 1.5\,\Omega \), and the armature absorbs only 0.40/1.9 ≈ 21 % of the braking energy. Regenerative braking returns most of that energy to the supply instead; on batteries that is pure gain, but on a rectified mains supply it pumps up the DC bus, so the controller needs a brake chopper and resistor.</p>

<h3>Electromagnetic Brakes: Hold, Do Not Stop</h3>

<p>A fail-safe brake used to stop the load every cycle absorbs the full kinetic energy as friction heat: in the example \( \frac{1}{2} \times 0.0025 \times 314^2 \approx 123\,\mathrm{J} \) per stop, about 74 kJ an hour at 600 cycles. Linings wear quickly and the air gap opens until the brake drags or fails to release. Check release and engagement times against the cycle, and permissible friction energy per operation and per hour against the brake data. Globe Scott offers electromagnetic fail-safe brakes on PMDC and geared motors and spring-applied brakes on BLDC motors.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Stop electrically, hold mechanically. Let the controller bring the load to rest with regenerative or dynamic braking and engage the brake at or near zero speed. Brake wear then becomes negligible, and its rated friction energy stays in reserve for emergency stops.
</div>

<hr/>

<h2>Brushes, Gearboxes and When BLDC Pays Off</h2>

<p>In a brushed motor every start pushes peak current across the brush–commutator contact, and electrical wear rises steeply with current, so a fast-cycling machine can consume brushes far sooner than its running hours suggest. Current limiting is the first defence, and the externally accessible brush option on our <a href="/products-pmdc-motors/">PMDC motors</a> makes replacement quick. Gearboxes see the same peaks as shock torque, with backlash slammed closed at every reversal, so soft ramps protect them too.</p>

<p>A BLDC motor removes brush wear entirely, carries its windings in the stator where heat conducts straight to the housing, and its electronic driver sets current limits, ramps and, where supported, regenerative braking. The G-BLDC 57/80 series offers up to 3.8 Nm peak against 0.10–1.30 Nm continuous across the range, useful headroom for acceleration. Our <a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">brushed vs brushless maintenance comparison</a> shows how brush service costs mount with running hours; in start-stop duty they mount faster. For door and gate operators see our guide to <a href="/blog/automatic-door-motor-problems-open-close/">automatic door motor problems</a>, and for axes that must also stop at an exact point, our <a href="/blog/motor-position-control-selection-guide/">motor position control selection guide</a>.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How many starts per hour can a DC motor handle?</h3>
<p>There is no single figure, because the limit depends on the inertia being accelerated, the starting current, the braking method and how well the motor cools at rest. A motor driving a light load with current-limited ramps can tolerate many times more starts than the same motor accelerating a heavy flywheel direct-on-line. Calculate the RMS current over the real cycle, allow for reduced cooling at standstill, and confirm the start rate with the manufacturer.</p>

<h3>Q2. What is the difference between S3, S4 and S5 duty?</h3>
<p>All three are intermittent periodic duty types defined in IEC 60034-1. S3 consists of identical cycles of running and rest in which starting has no significant effect on temperature. S4 adds a significant starting period to each cycle, so the rating must state the cyclic duration factor and the motor and load inertias. S5 adds electric braking as well. If a machine starts a heavy load many times an hour, an S3 rating alone is not enough.</p>

<h3>Q3. Why does frequent starting overheat a motor?</h3>
<p>During acceleration the motor carries several times its rated current, and copper loss rises with the square of current. Starting a pure inertia direct-on-line dissipates as much energy in the armature as ends up stored in the load, and plug braking or reversal dissipates three to four times that. Meanwhile a self-ventilated motor cools poorly at low speed and at rest, so heat accumulates faster than it can escape.</p>

<h3>Q4. Is dynamic braking or regenerative braking better for a DC motor?</h3>
<p>Regenerative braking returns most of the kinetic energy to the supply and leaves only a little I²R heat in the motor, which suits battery systems and high cycle rates, but it needs a regenerative (two- or four-quadrant) controller and, on rectified mains supplies, a brake chopper. Dynamic braking through a resistor is simpler and keeps most of the heat outside the motor, but its braking torque falls with speed, so stops are slower and less precise.</p>

<h3>Q5. Can an electromagnetic brake be used to stop a motor every cycle?</h3>
<p>It can, but it is usually a poor choice in frequent start-stop duty. Used as the stopping device, the brake absorbs the full kinetic energy of the load as friction heat at every stop, wearing the lining and widening the air gap. Bring the load to rest electrically with dynamic or regenerative braking and engage the fail-safe brake at or near zero speed, so it serves as a holding and emergency brake.</p>

<h3>Q6. Is a BLDC motor better than a brushed motor for frequent start-stop duty?</h3>
<p>Often, yes. A <a href="/products-bldc-motors/">BLDC motor</a> has no brushes to wear at every high-current start, its windings sit in the stator where heat conducts directly to the housing, and its driver typically provides programmable current limits and ramps, often with regenerative braking. A brushed PMDC motor with a current-limited controller remains economical for moderate start rates and low annual running hours, particularly where the machine has no other control electronics.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>In start-stop service, inertia, start rate and braking method size the motor as much as running torque does. Reflect the load inertia to the motor shaft and keep the ratio moderate, replace direct-on-line starts with current-limited ramps, stop electrically and hold with the brake, and check RMS current over the full cycle with a realistic allowance for standstill cooling. Where brush wear or rotor heating still limits the start rate, move to a BLDC drive.</p>

<p><a href="/contact-us/">Send our engineers your cycle times, starts per hour, load inertia and supply voltage</a>, and we will check the duty against a geared PMDC or BLDC solution.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Does Your Machine Start and Stop Hundreds of Times an Hour?</strong></h3>
<p style="margin-bottom: 0;">Share your cycle times, starts per hour, load inertia, gear ratio, braking method and supply voltage with Globe Scott&#x27;s engineers. We will check the RMS current and energy per start, and recommend a geared PMDC or BLDC motor with the right brake and controller for the duty.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Start-Stop Duty, S4 S5 Duty Cycle, Electromagnetic Brakes, Dynamic Braking, PMDC Motors, BLDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/continuous-duty-motor-overheating-prevention/">
<h4 class="post-title">How to Prevent Motor Overheating in Continuous-Duty Applications</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/custom-motor-design-non-standard-sizes/">
<h4 class="post-title">How to Select a Motor When Standard Sizes Do Not Fit Your Equipment</h4>
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
<li><a href="/blog/continuous-duty-motor-overheating-prevention/">Preventing Motor Overheating in Continuous Duty</a></li>
<li><a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">Brushed vs Brushless Motor Maintenance Compared</a></li>
<li><a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">How to Choose Motor Power, RPM and Gear Ratio</a></li>
<li><a href="/blog/automatic-door-motor-problems-open-close/">Why Automatic Door Motors Fail to Open or Close</a></li>
<li><a href="/blog/motor-position-control-selection-guide/">Choosing a Motor for Precise Position Control</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">Start-Stop Duty Cycle Sizing Worksheet</h3>
          <p class="gsm-modal-subtitle">Size a motor for frequent starts and stops from real cycle data: inertia, heat per start, RMS current, braking method and brake life.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Cycle Logging Template:</strong> Capture phase times, currents and peak starts per hour</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>RMS Current Check:</strong> Includes an allowance for reduced cooling at standstill</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Braking Method Table:</strong> Peak current and heat left in the motor for each method</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Motors for Frequent Start-Stop Applications Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Start-Stop Duty Cycle Sizing Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/motor-for-frequent-start-stop-applications/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Start-Stop Sizing Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Start-Stop Duty Cycle Sizing Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/start-stop-duty-cycle-sizing-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
