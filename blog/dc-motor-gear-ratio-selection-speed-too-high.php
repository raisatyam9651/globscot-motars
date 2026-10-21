<?php
$current_page     = 'dc-motor-gear-ratio-selection-speed-too-high';
$canonical_path   = 'blog/dc-motor-gear-ratio-selection-speed-too-high/';
$page_title       = 'DC Motor Gear Ratio Selection Guide | Globe Scott Motors';
$meta_description = 'DC motor gear ratio selection when motor speed is too high: calculate the ratio from loaded speed, round to a standard ratio, then check tolerance and inertia.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-gear-ratio-selection-speed-too-high.jpg';
$body_class       = 'post-template-default single single-post postid-2438 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/"
      },
      "headline": "How to Choose the Right Gear Ratio When Your Motor Speed Is Too High",
      "name": "How to Choose the Right Gear Ratio When Your Motor Speed Is Too High",
      "description": "DC motor gear ratio selection when motor speed is too high: calculate the ratio from loaded speed, round to a standard ratio, then check tolerance and inertia.",
      "url": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Gear Ratio Sizing, Drive Engineering",
      "keywords": "dc motor gear ratio selection, gear reduction calculation, gear ratio formula, output speed and torque, inertia matching, gearhead selection, reduce dc motor speed",
      "wordCount": 2268,
      "image": {
        "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-gear-ratio-selection-speed-too-high.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-gear-ratio-selection-speed-too-high.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Selecting a gear reduction ratio from loaded motor speed to bring a fast DC motor down to the required machine speed."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#breadcrumb",
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
          "name": "Gear Ratio Selection: Motor Speed Too High",
          "item": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I calculate the gear ratio for a DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Divide the motor's speed at its actual load by the speed you need at the output: i = N_motor(loaded) / N_required. Because the motor's torque depends on the ratio, start with a first guess, calculate motor torque as output torque divided by ratio and efficiency, read the loaded speed from the motor's speed–torque line, and recalculate. One or two iterations are normally enough."
          }
        },
        {
          "@type": "Question",
          "name": "Should I use no-load speed or rated speed to choose a gear ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Neither, strictly. No-load speed overstates the motor's running speed, so the ratio comes out too high and the output runs slow. Rated speed is only correct if the motor will run at exactly rated torque, so a lighter load leaves the output fast. Use the speed at the torque your load actually reflects through the gearbox, at your real supply voltage."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use a PWM controller instead of a gearbox to reduce motor speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only for modest trims, typically up to about 20–30 % below base speed. PWM lowers speed but does not multiply torque, so the motor must still produce the full load torque directly. Its load droop stays the same in rpm, becoming a large fraction of a low set speed, and efficiency falls because copper loss stays constant while output power drops."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if the gear ratio is too high?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The output runs slower than required, and nothing electronic can recover the speed without over-volting the motor. Extra stages also reduce efficiency, add backlash and multiply the rotor inertia seen at the output by the square of the ratio, lengthening stops and raising shock loads on the teeth. If you must round, a slightly low ratio with a PWM trim is usually safer."
          }
        },
        {
          "@type": "Question",
          "name": "Does a higher gear ratio always give more torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Output torque rises in proportion to the ratio, T_out = T_m × i × η, but only up to the gearbox's own torque rating, and efficiency falls as stages are added. Beyond the speed you actually need, extra ratio simply wastes speed. Size the ratio for speed first, then confirm the motor's torque margin and the gearbox rating at that ratio."
          }
        },
        {
          "@type": "Question",
          "name": "What is inertia matching when selecting a gear ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Inertia matching chooses the ratio that lets the motor accelerate a load with the least torque. For a purely inertial load it occurs when the reflected load inertia equals the rotor inertia, giving i = √(J_load / J_motor). The optimum is shallow, so in most machines the speed requirement sets the ratio and inertia serves as a check on acceleration torque."
          }
        },
        {
          "@type": "Question",
          "name": "What if no standard gear ratio gives exactly the speed I need?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Choose the nearest standard ratio below the ideal so the output runs slightly fast, then trim the speed down with voltage, PWM duty or a closed-loop speed controller. Check that motor torque and current remain within rating at the chosen ratio. If the gap is too large to trim, a different base motor speed or a custom reduction is the cleaner solution."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/",
      "url": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/",
      "name": "DC Motor Gear Ratio Selection Guide | Globe Scott Motors",
      "description": "DC motor gear ratio selection when motor speed is too high: calculate the ratio from loaded speed, round to a standard ratio, then check tolerance and inertia.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/#primaryimage"
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
<h1>How to Choose the Right Gear Ratio When Your Motor Speed Is Too High</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Gear Ratio Selection: Motor Speed Too High</li></ol> </nav>
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
<article class="post-2438 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-gear-ratio-selection tag-geared-motors tag-dc-motor-speed tag-inertia-matching tag-pmdc-geared-motors tag-globe-scott-motors" id="post-2438">

<img alt="DC motor gear ratio selection: geared PMDC motor with a reduction gearbox bringing high motor speed down to machine speed" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-gear-ratio-selection-speed-too-high.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Engineering, Gearboxes</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A motor that is strong enough but far too fast is one of the most common problems in machine building: a 3,000 rpm PMDC motor driving a roller, feeder, agitator or wheel that needs 50–150 rpm. The tempting fix is to turn the voltage or PWM duty down. For anything beyond a modest trim the answer is gearing, and <strong>DC motor gear ratio selection</strong> done properly, from the motor's loaded speed rather than its no-load or nameplate figure, decides whether the machine hits its speed, keeps its torque margin and stays cool.</p>

<p>Our guide to <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">choosing motor power, RPM and gear ratio</a> sets out the general sizing sequence. This article is problem-led: you already have a motor, or a motor family, whose speed is too high, and you need the reduction that brings the output on target, ideally a standard ratio such as those offered on our <a href="/products-geared-motors/">industrial geared motors</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Calculate the ratio from the motor's speed at its actual load, not its no-load speed: \( i = N_{m,load}/N_{req} \). Because the motor's load depends on the ratio, iterate once or twice or use the direct formula below. Round to a standard ratio, preferring the slightly lower one if you can trim speed electronically, then recheck motor torque, output speed across supply and motor tolerances, and acceleration torque for dynamic loads. Use voltage or PWM reduction only for small trims.
</div>

<h2>Gear for the Bulk, Trim With Electronics</h2>

<p>Reducing armature voltage lowers speed, but it does not multiply torque, and the speed lost to load does not shrink with voltage. From the DC machine equations:</p>

<div class="gsm-equation">\[ \omega = \frac{V - I_a R_a}{K_e}, \qquad \Delta\omega_{load} = \frac{T R_a}{K_t K_e} \]</div>

<p>The droop term contains no \( V \). Take the 24 V motor from the worked example below: no-load speed 3,450 rpm, stall torque 4.6 Nm, rated 0.60 Nm at 3,000 rpm. At rated torque it droops 450 rpm at any voltage. To turn a load directly at 100 rpm with that torque, it would need a no-load speed of 550 rpm, about 3.8 V (ignoring brush drop); a 22 % torque rise would then stall it, and roughly 28 W of copper loss would accompany just 6.3 W of output. Through the 30:1 gearbox of that example, it runs near 3,000 rpm with under 10 % droop and normal efficiency.</p>

<p>The practical rule is to use gearing for any reduction beyond about 20–30 % of base speed, and keep voltage or PWM for trimming, ramps and variable speed around the geared value. Our guide to selecting a <a href="/blog/high-torque-low-speed-dc-motor-selection/">high torque low speed DC motor</a> explains the thermal and commutation reasons in more depth.</p>

<hr/>

<h2>DC Motor Gear Ratio Selection Starts With Loaded Speed</h2>

<p>The ratio is the motor's speed at its real operating point divided by the output speed you need:</p>

<div class="gsm-equation">\[ i = \frac{N_{m,load}}{N_{req}}, \qquad T_m = \frac{T_L}{i \cdot \eta_g}, \qquad N_{m,load} = N_0\left(1 - \frac{T_m}{T_{stall}}\right) \]</div>

<p>The three are coupled: the ratio sets the motor torque, the torque sets the motor speed, and the speed sets the ratio. Start from rated speed, calculate motor torque, read the loaded speed and recalculate; one or two iterations converge. If the new ratio needs an extra gear stage, update \( \eta_g \) before the next pass, because each stage adds its own loss. For a PMDC motor with a linear speed–torque line, the loop solves directly:</p>

<div class="gsm-equation">\[ i = \frac{N_0 + \sqrt{N_0^2 - 4\,N_{req}\,N_0\,T_L/(\eta_g T_{stall})}}{2\,N_{req}} \]</div>

<p>Use \( N_0 \) and \( T_{stall} \) at the voltage actually present at the motor terminals under load. If the term under the root is negative, no ratio can work: the load needs more power than the motor's theoretical maximum of one quarter of no-load speed times stall torque. Even when the root is real, check the resulting motor torque against its continuous rating. The <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a> shows how to establish the load torque \( T_L \) itself.</p>

<p>Both common shortcuts err. No-load speed overstates running speed, so the ratio comes out high and the output slow. Rated speed is correct only if the motor will run at exactly rated torque; lighter loads leave the output fast.</p>

<hr/>

<h2>Standard Ratios and How to Round Them</h2>

<p>Production gearboxes come in fixed ratios, so the calculated value must be rounded. Globe Scott's standard ratios are:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Product Range</th><th>Power</th><th>Standard Ratios</th></tr>
</thead>
<tbody>
<tr><td><strong>A80 geared PMDC</strong></td><td>40–200 W</td><td>9:1, 18:1, 20:1, 30:1, 36:1, 61:1</td></tr>
<tr><td><strong>A92 geared PMDC</strong></td><td>70–250 W</td><td>9:1, 18:1, 20:1, 30:1, 36:1, 61:1</td></tr>
<tr><td><strong>A92 geared PMDC, higher power</strong></td><td>150–400 W</td><td>15:1, 30:1, 60:1, 75:1</td></tr>
<tr><td><strong>A114 geared PMDC</strong></td><td>1,000–3,000 W</td><td>60:1, 80:1</td></tr>
<tr><td><strong><a href="/products-pmdc-geared-motors/">PMDC geared traction motors</a></strong></td><td>Up to 200 W (MP56) – 600 W (MP80)</td><td>7:1, 10:1</td></tr>
<tr><td><strong><a href="/products-pmdc-transaxle/">PMDC transaxles</a> MRP9D / MRP6D</strong></td><td>Up to 600 W</td><td>7:1, 10:1</td></tr>
</tbody>
</table>
</div>

<ul>
<li><strong>Prefer the next lower ratio when you can trim.</strong> The output runs slightly fast and a PWM or voltage reduction brings it down; nothing electronic can make a motor run faster than its supply allows.</li>
<li><strong>Prefer the higher ratio</strong> only when a slightly slow output is acceptable and torque margin is tight.</li>
<li><strong>Recalculate</strong> motor torque, loaded speed and current at the chosen ratio; never scale output speed linearly.</li>
<li><strong>Avoid needless height.</strong> Very high ratios add stages, lose efficiency and multiply the rotor inertia seen at the output, as covered in our guide to <a href="/blog/motor-gearbox-sizing-problems-output/">motor gearbox sizing problems</a>; per-stage efficiencies are tabulated in our <a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">custom geared PMDC motor guide</a>.</li>
</ul>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Round down, trim down. A ratio that leaves the output 5–10 % fast is corrected with a PWM duty change; a ratio that leaves it 10 % slow usually means a new gearbox.
</div>

<hr/>

<h2>The Two Checks Most Often Skipped: Speed Tolerance and Inertia</h2>

<h3>Output Speed Tolerance Against Motor Speed Spread</h3>

<p>Output speed inherits every variation of motor speed: production tolerance on no-load speed; supply voltage, since a nominal 24 V lead-acid system can sit anywhere from about 21 V discharged to about 28.8 V on charge; winding temperature; and, in ferrite PMDC motors, magnet temperature, which raises light-load speed slightly as the motor warms. Evaluate both extremes:</p>

<div class="gsm-equation">\[ N_{out,min} = \frac{N_{m,load,min}}{i}, \qquad N_{out,max} = \frac{N_{m,load,max}}{i} \]</div>

<p>If the spread exceeds your tolerance, plan a commissioning trim, a regulated supply or closed-loop speed control; our <a href="/products-pmdc-motors/">PMDC motors</a> are available encoder-ready for this purpose.</p>

<h3>Inertia Matching for Dynamic Loads</h3>

<p>When the load accelerates and stops frequently, the ratio also governs acceleration. For a purely inertial load, the motor torque needed for a given output acceleration \( \alpha_{out} \) is lowest when the reflected load inertia equals the rotor inertia:</p>

<div class="gsm-equation">\[ i_{opt} = \sqrt{\frac{J_{load}}{J_m}}, \qquad T_{m,acc} = \left(J_m + \frac{J_{load}}{i^2 \eta_g}\right) i \cdot \alpha_{out} \]</div>

<p>The optimum is shallow, so in most machines speed sets the ratio and inertia is a check rather than the driver. For closed-loop positioning, a reflected load-to-rotor inertia ratio of up to about 5–10:1 is a widely used guideline; open-loop drives tolerate more if acceleration torque and stopping energy are verified.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Gear Ratio Selection Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A step-by-step worksheet for calculating the loaded-speed gear ratio, rounding to a standard ratio, checking speed tolerance and confirming torque, current and inertia margins, with a completed example.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Gearing a 3,000 rpm Motor Down to a 100 rpm Roller</h2>

<p>A feed roller must turn at 100 rpm ± 5 % with a running load of 9 Nm and reach speed in 0.5 s. It is solid steel, 100 mm in diameter and 1 m long, about 0.077 kg·m², so take 0.08 kg·m² with its coupling. The 24 V PMDC motor is rated 0.60 Nm at 3,000 rpm, with no-load speed 3,450 rpm, stall torque 4.6 Nm and rotor inertia 3.0 × 10<sup>-4</sup> kg·m², driving a two-stage parallel-shaft gearbox at 90 % efficiency.</p>

<h3>Step 1 — Avoid the Shortcuts</h3>

<p>No-load speed gives \( i = 3450/100 = 34.5 \), which rounds to 36:1; rated speed gives 30:1. The two disagree, and Step 3 shows why neither can be trusted without a check.</p>

<h3>Step 2 — Solve for the Loaded-Speed Ratio</h3>

<p>Here \( N_0 T_L/(\eta_g T_{stall}) = 3450 \times 9/(0.9 \times 4.6) = 7500 \), so:</p>

<div class="gsm-equation">\[ i = \frac{3450 + \sqrt{3450^2 - 4 \times 100 \times 7500}}{2 \times 100} = \frac{3450 + 2983.7}{200} \approx 32.2 \]</div>

<p>Iterating from 30:1 gives 32.0 and then 32.2, confirming the result.</p>

<h3>Step 3 — Round to a Standard Ratio</h3>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Ratio</th><th>Motor Torque</th><th>Loaded Motor Speed</th><th>Output Speed</th><th>Verdict</th>
</tr>
</thead>
<tbody>
<tr><td><strong>30:1</strong></td><td>0.333 Nm</td><td>3,200 rpm</td><td>106.7 rpm (+6.7 %)</td><td>Selected; trim with PWM</td></tr>
<tr><td><strong>32.2:1 (ideal)</strong></td><td>0.311 Nm</td><td>3,217 rpm</td><td>100.0 rpm</td><td>Not a standard ratio</td></tr>
<tr><td><strong>36:1</strong></td><td>0.278 Nm</td><td>3,242 rpm</td><td>90.0 rpm (−10 %)</td><td>Too slow; cannot be recovered</td></tr>
</tbody>
</table>
</div>

<p>With 30:1, the motor droops 250 rpm under its 0.333 Nm load, so it needs a no-load speed of 3,250 rpm to run at 3,000 rpm: a PWM duty of \( 3250/3450 \approx 94\,\% \), or an effective 22.6 V. Motor torque is 56 % of rated, a healthy margin.</p>

<h3>Step 4 — Check Tolerance and Acceleration</h3>

<p>If the datasheet allowed ±5 % on no-load speed, a fixed 94 % duty would give 2,838–3,163 rpm at the motor, or 94.6–105.4 rpm at the roller: marginally outside ±5 %, so trim each machine at commissioning or close the loop with an encoder. Had the roller run from a nominal 24 V lead-acid battery instead, the same fixed duty would give about 86.5 rpm at 21 V and 121.7 rpm at 28.8 V, because the 250 rpm droop stays constant while no-load speed follows the voltage; only closed-loop control holds ±5 % across that range. For acceleration, \( \alpha_{out} = 10.47/0.5 = 20.9\,\mathrm{rad/s}^2 \), and:</p>

<div class="gsm-equation">\[ T_{m,acc} = \left(3.0 \times 10^{-4} + \frac{0.08}{900 \times 0.9}\right) \times 30 \times 20.9 \approx 0.25\,\mathrm{Nm} \]</div>

<p>Running plus acceleration torque is about 0.58 Nm for half a second, inside the rated 0.60 Nm. The inertia-optimal ratio would be \( \sqrt{0.08/0.0003} \approx 16.3 \), yet even there the inertial torque would be only about 14 % lower, so speed rightly sets the ratio.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
When requesting a geared motor, specify the output, not the motor: required output speed under load with its tolerance, output torque, load inertia, acceleration time and the supply voltage range. Quoting only a motor rpm and a ratio hides the loaded-speed and tolerance checks that decide whether the machine runs on target.
</div>

<hr/>

<h2>Gear Ratio Selection Problems: Symptom-to-Fix Matrix</h2>

<p>If an installed drive misses its speed for reasons unrelated to the ratio, such as supply sag or brush wear, see our guide to a <a href="/blog/dc-motor-running-slow-causes-troubleshooting/">DC motor running slow</a>.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Observed Symptom</th><th>Most Likely Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Output 5–15 % slow</strong></td><td>Ratio based on no-load speed, or efficiency overestimated</td><td>Loaded motor speed and current</td><td>Next lower standard ratio, then trim</td></tr>
<tr><td><strong>Output fast; motor lightly loaded</strong></td><td>Ratio based on rated speed at light load</td><td>Motor current against rated</td><td>PWM trim or next higher ratio</td></tr>
<tr><td><strong>Correct speed but motor hot</strong></td><td>Ratio too low; motor torque near or above rated</td><td>Current at the operating point</td><td>Higher ratio, then trim speed</td></tr>
<tr><td><strong>Speed varies between machines</strong></td><td>Motor speed tolerance and supply variation</td><td>No-load speed of each unit; supply voltage</td><td>Commissioning trim or closed loop</td></tr>
<tr><td><strong>Sluggish starts, long stops</strong></td><td>Rotor inertia magnified by a high ratio</td><td>Current trace during acceleration</td><td>Ratio nearer the inertia optimum; ramps</td></tr>
<tr><td><strong>Slows as the battery discharges</strong></td><td>No-load speed taken at nominal voltage</td><td>Terminal voltage under load at low charge</td><td>Size at minimum voltage; closed loop</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How do I calculate the gear ratio for a DC motor?</h3>
<p>Divide the motor's speed at its actual load by the speed you need at the output: i = N_motor(loaded) / N_required. Because the motor's torque depends on the ratio, start with a first guess, calculate motor torque as output torque divided by ratio and efficiency, read the loaded speed from the motor's speed–torque line, and recalculate. One or two iterations are normally enough.</p>

<h3>Q2. Should I use no-load speed or rated speed to choose a gear ratio?</h3>
<p>Neither, strictly. No-load speed overstates the motor's running speed, so the ratio comes out too high and the output runs slow. Rated speed is only correct if the motor will run at exactly rated torque, so a lighter load leaves the output fast. Use the speed at the torque your load actually reflects through the gearbox, at your real supply voltage.</p>

<h3>Q3. Can I use a PWM controller instead of a gearbox to reduce motor speed?</h3>
<p>Only for modest trims, typically up to about 20–30 % below base speed. PWM lowers speed but does not multiply torque, so the motor must still produce the full load torque directly. Its load droop stays the same in rpm, becoming a large fraction of a low set speed, and efficiency falls because copper loss stays constant while output power drops.</p>

<h3>Q4. What happens if the gear ratio is too high?</h3>
<p>The output runs slower than required, and nothing electronic can recover the speed without over-volting the motor. Extra stages also reduce efficiency, add backlash and multiply the rotor inertia seen at the output by the square of the ratio, lengthening stops and raising shock loads on the teeth. If you must round, a slightly low ratio with a PWM trim is usually safer.</p>

<h3>Q5. Does a higher gear ratio always give more torque?</h3>
<p>Output torque rises in proportion to the ratio, T_out = T_m × i × η, but only up to the gearbox's own torque rating, and efficiency falls as stages are added. Beyond the speed you actually need, extra ratio simply wastes speed. Size the ratio for speed first, then confirm the motor's torque margin and the gearbox rating at that ratio.</p>

<h3>Q6. What is inertia matching when selecting a gear ratio?</h3>
<p>Inertia matching chooses the ratio that lets the motor accelerate a load with the least torque. For a purely inertial load it occurs when the reflected load inertia equals the rotor inertia, giving i = √(J_load / J_motor). The optimum is shallow, so in most machines the speed requirement sets the ratio and inertia serves as a check on acceleration torque.</p>

<h3>Q7. What if no standard gear ratio gives exactly the speed I need?</h3>
<p>Choose the nearest standard ratio below the ideal so the output runs slightly fast, then trim the speed down with voltage, PWM duty or a closed-loop speed controller. Check that motor torque and current remain within rating at the chosen ratio. If the gap is too large to trim, a different base motor speed or a custom reduction is the cleaner solution.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>When a motor runs too fast for the machine, gear down for the bulk of the reduction and trim the rest electronically. Calculate the ratio from loaded speed, round to a standard ratio on the fast side, then confirm torque margin, speed tolerance and acceleration torque at the ratio you actually choose.</p>

<p>If none of the standard ratios fits, or you would like the calculation checked against real motor data, <a href="/contact-us/">contact our engineering team</a> with the output speed, tolerance, load torque, inertia and supply details.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Need Help Choosing the Right Gear Ratio for Your Motor?</strong></h3>
<p style="margin-bottom: 0;">Tell us the required output speed and tolerance, load torque, load inertia, acceleration time, supply voltage and duty cycle. Our engineers will calculate the loaded-speed ratio, match it to a standard Globe Scott gearbox where possible and confirm the torque, speed and thermal margins.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Gear Ratio Selection, Geared Motors, DC Motor Speed, Inertia Matching, PMDC Geared Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/battery-powered-motor-efficiency-runtime/">
<h4 class="post-title">Why Does Your Battery-Powered Equipment Have Poor Motor Runtime?</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/railway-point-machine-motor-problems-parameters/">
<h4 class="post-title">What Causes Railway Point Machine Failures, and Which Motor Parameters Should Be Checked?</h4>
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
<li><a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">How to Choose Motor Power, RPM and Gear Ratio</a></li>
<li><a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">Custom Geared PMDC Motors: Ratio and Torque</a></li>
<li><a href="/blog/motor-gearbox-sizing-problems-output/">Motor and Gearbox Sizing Problems</a></li>
<li><a href="/blog/high-torque-low-speed-dc-motor-selection/">High Torque Low Speed DC Motor Selection</a></li>
<li><a href="/blog/dc-motor-running-slow-causes-troubleshooting/">Why a DC Motor Runs Slowly: Troubleshooting</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Gear Ratio Selection Worksheet</h3>
          <p class="gsm-modal-subtitle">Calculate the right reduction from loaded motor speed, choose a standard ratio and verify speed, torque and inertia in one structured worksheet.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Loaded-Speed Method:</strong> Iteration and direct formula for the exact ratio</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Rounding Rules:</strong> Choose between standard ratios without losing speed or torque</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Tolerance and Inertia:</strong> Check speed spread and acceleration torque before ordering</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Gear Ratio Selection: Motor Speed Too High Lead Magnet">
          <input type="hidden" name="lead_magnet" value="DC Motor Gear Ratio Selection Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/dc-motor-gear-ratio-selection-speed-too-high/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Gear Ratio Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the DC Motor Gear Ratio Selection Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-gear-ratio-selection-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
