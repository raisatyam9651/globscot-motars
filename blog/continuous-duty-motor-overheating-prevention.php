<?php
$current_page     = 'continuous-duty-motor-overheating-prevention';
$canonical_path   = 'blog/continuous-duty-motor-overheating-prevention/';
$page_title       = 'Stop Continuous Duty Motor Overheating | Globe Scott Motors';
$meta_description = 'Prevent continuous duty motor overheating at the design stage: RMS torque sizing, loss budgets, ambient and altitude derating, cooling and thermal protection.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/continuous-duty-motor-overheating-prevention.jpg';
$body_class       = 'post-template-default single single-post postid-2434 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/"
      },
      "headline": "How to Prevent Motor Overheating in Continuous-Duty Applications",
      "name": "How to Prevent Motor Overheating in Continuous-Duty Applications",
      "description": "Prevent continuous duty motor overheating at the design stage: RMS torque sizing, loss budgets, ambient and altitude derating, cooling and thermal protection.",
      "url": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Thermal Design, Continuous Duty",
      "keywords": "continuous duty motor overheating, s1 duty motor, motor thermal time constant, motor derating ambient temperature, rms torque calculation, motor cooling methods, motor temperature rise calculation",
      "wordCount": 2500,
      "image": {
        "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/continuous-duty-motor-overheating-prevention.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/continuous-duty-motor-overheating-prevention.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Thermal design of a DC motor for S1 continuous duty, covering loss budget, temperature rise, cooling method and protection."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#breadcrumb",
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
          "name": "Preventing Continuous-Duty Motor Overheating",
          "item": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What does S1 duty mean on a motor nameplate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S1 is continuous duty as defined in IEC 60034-1: the motor runs at constant load long enough to reach thermal equilibrium and can deliver its rated output indefinitely within its insulation class temperature. The rating assumes a 40 °C ambient and up to 1,000 m altitude. An S2 or S3 motor was rated on the assumption of rest periods, so it must not carry its nameplate output continuously."
          }
        },
        {
          "@type": "Question",
          "name": "How do you calculate RMS torque for a varying load?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Square each torque level in the cycle, multiply by its duration, add the results, divide by the total cycle time and take the square root. For example, 7 Nm for 8 s, 3 Nm for 28 s and 1 Nm for 24 s gives an RMS torque of 3.34 Nm against an average of 2.73 Nm. Compare the RMS value, not the average, with the motor's continuous rated torque."
          }
        },
        {
          "@type": "Question",
          "name": "How much should a motor be derated for high ambient temperature?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Every degree above the 40 °C reference ambient removes one kelvin from the permissible temperature rise. For a typical small motor with about 30 % fixed losses, that means roughly 5 % less continuous torque at 45 °C, 9 % less at 50 °C and 20 % less at 60 °C . Confirm the factor with the manufacturer and measure the ambient at the motor, inside any enclosure."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a motor take to reach its full operating temperature?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "About three to five thermal time constants. After one time constant the winding reaches 63 % of its final rise, after three about 95 % and after five over 99 %. Small fractional-kilowatt motors typically have time constants of tens of minutes, so they settle within one to three hours. Any load running longer than about three time constants should be sized as S1 duty."
          }
        },
        {
          "@type": "Question",
          "name": "Is a PTC thermistor or a PT100 sensor better for motor protection?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "They do different jobs. A PTC thermistor switches sharply at its rated response temperature and suits trip-only protection through a thermistor relay. A PT100 RTD gives a continuous, accurate reading that a drive or SCADA system can trend and alarm on before a trip. Both must be embedded where windings are stationary: the stator of a BLDC motor , not a rotating PMDC armature."
          }
        },
        {
          "@type": "Question",
          "name": "Does a fan-cooled motor overheat when it runs at low speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It can. In a TEFC (IC411) motor the fan sits on the shaft, so airflow falls roughly in proportion to speed. If load torque stays constant while PWM control lowers speed, copper loss is unchanged but cooling drops. For constant-torque low-speed service use an independently powered fan (IC416), a non-ventilated frame sized for the duty, or a larger motor."
          }
        },
        {
          "@type": "Question",
          "name": "How much thermal margin should a continuous-duty motor have?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A sound target is Class F insulation with the rise held within the 80 K Class B limit at rated load, leaving about 25 K of headroom. In torque terms, keep the RMS load at the worst realistic ambient to around 80–85 % of the continuous rating . Since insulation life roughly halves per 10 K of overtemperature, design margin costs far less than early rewinds."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/",
      "url": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/",
      "name": "Stop Continuous Duty Motor Overheating | Globe Scott Motors",
      "description": "Prevent continuous duty motor overheating at the design stage: RMS torque sizing, loss budgets, ambient and altitude derating, cooling and thermal protection.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/#primaryimage"
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
<h1>How to Prevent Motor Overheating in Continuous-Duty Applications</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Preventing Continuous-Duty Motor Overheating</li></ol> </nav>
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
<article class="post-2434 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-continuous-duty-motors tag-s1-duty-rating tag-motor-thermal-design tag-rms-torque-sizing tag-pmdc-motors tag-bldc-motors tag-globe-scott-motors" id="post-2434">

<img alt="Continuous-duty DC motor thermal design showing temperature rise, cooling and S1 duty sizing for industrial machinery" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/continuous-duty-motor-overheating-prevention.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Thermal Engineering, Design</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A machine that runs three shifts a day, seven days a week, never lets its motor cool down. Every watt of loss must be removed as fast as it is generated, and when the design gets that balance wrong the result is <strong>continuous duty motor overheating</strong>: windings that age years ahead of schedule, weakened magnets and cooked bearing grease. The problem is almost always created at the specification stage, which is also the cheapest place to solve it.</p>

<p>This guide is for OEM designers and plant engineers selecting <a href="/products-pmdc-motors/">PMDC motors</a> or <a href="/products-bldc-motors/">BLDC motors</a> for S1 duty on pumps, conveyors, fans and process lines. If a motor already in service is running hot, start instead with our troubleshooting guide on <a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">why a DC motor overheats and how to fix it</a>. This article is about designing the problem out.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Continuous-duty overheating is prevented by sizing the motor thermally, not just mechanically:
<ol>
<li>Size on RMS torque over the real load cycle, never average torque.</li>
<li>Build a loss budget and estimate the rise as loss × thermal resistance.</li>
<li>Derate for ambient above 40 °C and altitude above 1,000 m.</li>
<li>Choose a cooling method (IC code) that still works at the lowest speed.</li>
<li>Design to a Class B rise on Class F insulation.</li>
<li>Fit thermal protection that suits where the windings sit.</li>
</ol>
</div>

<h2>What S1 Duty Means for Motor Temperature</h2>

<p>IEC 60034-1 defines duty type S1 as operation at constant load long enough to reach thermal equilibrium. A motor heats along an exponential curve set by its thermal time constant \( \tau \):</p>

<div class="gsm-equation">\[ \Delta\theta(t) = \Delta\theta_{\infty}\left(1 - e^{-t/\tau}\right) \]</div>

<p>After one time constant the winding reaches 63 % of its final rise \( \Delta\theta_{\infty} \), after three about 95 %, after five over 99 %. Small fractional-kilowatt frames typically have time constants of tens of minutes, so any load running longer than about three time constants must be treated as S1, whatever the machine manual calls it.</p>

<p>An S1 motor never rests, so its <em>steady-state</em> temperature at the worst realistic load and ambient is what matters, and S2 or S3 ratings cannot be carried over. Brief torque peaks are averaged thermally in an RMS sense; frequent starting adds its own I²t heating, covered in our guide to choosing a <a href="/blog/motor-for-frequent-start-stop-applications/">motor for frequent start-stop applications</a>.</p>

<hr/>

<h2>Where the Heat Comes From: Building the Loss Budget</h2>

<p>Every watt that enters the motor and does not leave through the shaft becomes heat:</p>

<div class="gsm-equation">\[ P_{loss} = P_{out}\left(\frac{1}{\eta} - 1\right) \]</div>

<p>A 500 W output at 80 % efficiency means 125 W of heat to remove around the clock; at 90 % it is about 56 W. On continuous duty efficiency is a thermal specification, as our article on <a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">motor efficiency ratings for equipment buyers</a> explains. The budget has four parts:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Loss Component</th><th>How It Scales</th><th>Main Design Lever</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Armature copper loss</strong></td><td>\( \propto I^2 \); resistance rises 0.393 % per °C</td><td>More copper area, longer stack or larger frame</td></tr>
<tr><td><strong>Brush contact loss</strong> (PMDC)</td><td>\( \approx V_{brush} \cdot I \), brush drop typically 1–2 V</td><td>Correct brush grade, or BLDC</td></tr>
<tr><td><strong>Iron (core) loss</strong></td><td>Hysteresis \( \propto f \), eddy current \( \propto f^2 \)</td><td>Lamination grade; avoid needless speed</td></tr>
<tr><td><strong>Friction and windage</strong></td><td>Rises with speed; fan power \( \propto N^3 \)</td><td>Correct grease fill, low-friction seals</td></tr>
</tbody>
</table>
</div>

<p>Copper loss is the only term that changes strongly with load, and it hides a feedback loop because resistance rises with temperature:</p>

<div class="gsm-equation">\[ R_T = R_{20}\left[1 + 0.00393\,(T - 20)\right] \]</div>

<p>At 140 °C resistance is 1.47 times its 20 °C value, so the same current produces 47 % more copper loss than a cold datasheet figure suggests. In a PMDC motor the magnets add a second loop: ferrite loses roughly 0.18–0.2 % of its remanence per °C, so magnets running 60 K above room temperature give about 11–12 % less flux. Current for the same torque rises by about 13 %, and copper loss by roughly a quarter.</p>

<hr/>

<h2>Six Steps to Prevent Continuous Duty Motor Overheating</h2>

<h3>Step 1: Size on RMS Torque, Not Average Torque</h3>

<p>Real S1 loads repeat cycles of heavy and light sections. Because copper loss follows current squared and \( T = K_t I_a \), the thermally equivalent torque is the RMS value over one cycle:</p>

<div class="gsm-equation">\[ T_{rms} = \sqrt{\frac{\sum T_k^2\, t_k}{\sum t_k}} \]</div>

<p>RMS torque is never below the average, and the gap widens as the cycle gets peakier. Compare it with the continuous rated torque, then check that the highest peak, including any \( J\alpha \) acceleration torque, sits inside the intermittent zone and the controller current limit. The wider sizing method is in our guide on <a href="/blog/undersized-motor-problems-how-to-avoid/">how to avoid undersized motor problems</a>.</p>

<h3>Step 2: Convert the Loss Budget into Temperature Rise</h3>

<div class="gsm-equation">\[ \Delta T = P_{loss} \cdot R_{th} \]</div>

<p>Thermal resistance \( R_{th} \) (K/W) lumps conduction from winding to frame with convection and radiation to air. It falls with surface area, fins, airflow and a conduction path into the machine; a B5 or B14 flange bolted to a substantial metal plate lowers it noticeably on small frames. Take it from the manufacturer's heat-run test. Copper loss depends on the temperature being solved for, so iterate until assumed and calculated temperatures agree.</p>

<h3>Step 3: Derate for Ambient Temperature and Altitude</h3>

<p>Standard ratings assume 40 °C ambient and no more than 1,000 m altitude. A motor inside a machine enclosure on a Rajasthan or Vidarbha shop floor in May can see 50 °C, and every degree above 40 °C consumes the thermal budget one for one, as our guide to <a href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">motor insulation classes (Class F vs Class H)</a> explains. Above 1,000 m thinner air cools less; a common rule of thumb reduces the permissible rise by about 1 % per 100 m, but confirm it with the supplier. With copper loss scaling as torque squared and fixed losses \( P_{fixed} \) unchanged:</p>

<div class="gsm-equation">\[ \frac{T_{allow}}{T_{rated}} \approx \sqrt{\frac{\Delta T_{allow} - P_{fixed}R_{th}}{\Delta T_{rated} - P_{fixed}R_{th}}} \]</div>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Ambient at the Motor</th><th>Rise Allowance (80 K Design)</th><th>Torque Factor, Copper Losses Only</th><th>Torque Factor, 30 % Fixed Losses</th></tr>
</thead>
<tbody>
<tr><td><strong>40 °C</strong></td><td>80 K</td><td>1.00</td><td>1.00</td></tr>
<tr><td><strong>45 °C</strong></td><td>75 K</td><td>0.97</td><td>0.95</td></tr>
<tr><td><strong>50 °C</strong></td><td>70 K</td><td>0.94</td><td>0.91</td></tr>
<tr><td><strong>55 °C</strong></td><td>65 K</td><td>0.90</td><td>0.86</td></tr>
<tr><td><strong>60 °C</strong></td><td>60 K</td><td>0.87</td><td>0.80</td></tr>
</tbody>
</table>
</div>

<p>The right-hand column is the realistic one for small motors. Treat it as an estimate, not a substitute for the manufacturer's derating data.</p>

<h3>Step 4: Choose a Cooling Method That Works at Your Lowest Speed</h3>

<ul>
<li><strong>IC410, non-ventilated (TENV):</strong> natural convection and radiation only. Cooling is independent of speed, which suits variable-speed drives, but output per frame is lower.</li>
<li><strong>IC411, fan-cooled (TEFC):</strong> airflow from the shaft fan is roughly proportional to speed, so a constant-torque load at half speed keeps its copper loss but loses about half its cooling air.</li>
<li><strong>IC416, independent fan:</strong> full cooling at any speed, including torque at standstill; the standard answer for constant-torque duty over a wide speed range.</li>
</ul>

<p>Sealed IP54-and-above frames rely on surface cooling alone, so specify the IP code and the IEC 60034-6 cooling code together.</p>

<h3>Step 5: Design to a Class B Rise on Class F Insulation</h3>

<p>IEC 60085 limits are 130 °C for Class B, 155 °C for Class F and 180 °C for Class H. Fitting Class F insulation but holding the rated-load rise within Class B's 80 K leaves about 25 K of headroom for a hot summer, a low-voltage spell or creeping load. Insulation life roughly halves for every 10 K above rating, so each 10 K of margin roughly doubles it. Our PMDC motors are endurance and temperature-rise tested against Class F (155 °C) limits.</p>

<h3>Step 6: Fit Thermal Protection That Suits the Motor</h3>

<p>In a BLDC motor the windings are on the stationary stator, so sensors can be embedded in the end windings. In a PMDC motor they are on the rotating armature, so protection relies on a frame or brush-gear sensor plus an I²t thermal model in the controller.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Device</th><th>Best Suited To</th><th>Limitation</th>
</tr>
</thead>
<tbody>
<tr><td><strong>PTC thermistor</strong></td><td>Trip-only protection via a thermistor relay</td><td>No temperature reading, so no early warning</td></tr>
<tr><td><strong>KTY / PT1000</strong></td><td>Drives that trend temperature and derate progressively</td><td>Needs a configured analogue input</td></tr>
<tr><td><strong>PT100 RTD</strong></td><td>Critical motors monitored by plant SCADA</td><td>Needs 3- or 4-wire connection</td></tr>
<tr><td><strong>Bimetal protector</strong></td><td>Low-cost interlocks on small motors</td><td>Auto-reset types restart a hot motor</td></tr>
<tr><td><strong>Controller I²t model</strong></td><td>PMDC armatures</td><td>Only as good as its thermal parameters</td></tr>
</tbody>
</table>
</div>

<p>An auto-reset protector that trips and recloses is a common reason a <a href="/blog/dc-motor-keeps-stopping-during-operation/">DC motor keeps stopping</a>, so use manual reset where an unexpected restart would be unsafe.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the S1 Continuous-Duty Motor Thermal Sizing Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A step-by-step worksheet for RMS torque, loss budget, temperature rise and ambient or altitude derating, plus a cooling-method and thermal-protection checklist to attach to your motor specification.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Predicting Temperature Rise for a 24/7 Drive</h2>

<p>In this illustrative example, a packaging line runs around the clock on a 180 V DC PMDC motor rated 3.5 Nm continuous at 1,500 rpm, with \( K_t = 1.0\,\mathrm{Nm/A} \), \( R_{20} = 4.0\,\Omega \), \( R_{th} = 0.85\,\mathrm{K/W} \) from the heat run and 18 W of iron, friction and windage loss. At rated current these give a 79 K rise, a Class B design. The shaft load repeats every 60 s: 7.0 Nm for 8 s, 3.0 Nm for 28 s, 1.0 Nm for 24 s.</p>

<p><strong>1. Torque.</strong> The average is \( 164/60 = 2.73\,\mathrm{Nm} \), only 78 % of rating. The RMS value is higher:</p>

<div class="gsm-equation">\[ T_{rms} = \sqrt{\frac{7.0^2 \times 8 + 3.0^2 \times 28 + 1.0^2 \times 24}{60}} = \sqrt{\frac{668}{60}} = 3.34\,\mathrm{Nm} \]</div>

<p>So RMS current is 3.34 A and average current 2.73 A (no-load current ignored).</p>

<p><strong>2. First pass, 40 °C ambient.</strong> Assume a 120 °C winding: \( R = 4.0 \times 1.393 = 5.57\,\Omega \). Copper loss \( 3.34^2 \times 5.57 = 62.0\,\mathrm{W} \), brush loss \( 2\,\mathrm{V} \times 2.73\,\mathrm{A} = 5.5\,\mathrm{W} \), fixed 18 W: total 85.5 W, so \( \Delta T = 85.5 \times 0.85 = 72.7\,\mathrm{K} \), a 112.7 °C winding.</p>

<p><strong>3. Second pass.</strong> At 112.7 °C, \( R = 5.46\,\Omega \), copper loss 60.8 W, total 84.2 W, \( \Delta T = 71.6\,\mathrm{K} \). It converges at about 71 K: acceptable.</p>

<p><strong>4. The real site.</strong> The motor sits in a guarded enclosure that reaches 50 °C in summer. Iterating again gives a 73 K rise and a 123 °C average winding, about 133 °C at the hot spot: inside Class F, but the Class B margin has gone. The derating table agrees: \( 0.91 \times 3.5 = 3.17\,\mathrm{Nm} \) allowable against 3.34 Nm required.</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Scenario</th><th>Total Loss</th><th>Rise</th><th>Average Winding</th></tr>
</thead>
<tbody>
<tr><td><strong>Average torque (wrong method), 40 °C</strong></td><td>61.9 W</td><td>52.6 K</td><td>92.6 °C</td></tr>
<tr><td><strong>RMS torque, 40 °C</strong></td><td>84.0 W</td><td>71.4 K</td><td>111.4 °C</td></tr>
<tr><td><strong>RMS torque, 50 °C enclosure</strong></td><td>86.1 W</td><td>73.1 K</td><td>123.1 °C</td></tr>
<tr><td><strong>RMS torque, 50 °C, \( R_{th} \) cut to 0.70 K/W</strong></td><td>83.5 W</td><td>58.4 K</td><td>108.4 °C</td></tr>
</tbody>
</table>
</div>

<p>Sizing on average torque would have under-predicted the rise by about 19 K. The fix need not be a bigger motor: bolting the B14 face to the steel frame and adding an enclosure fan to reach 0.70 K/W restores the margin. Confirm on the prototype by the resistance method (copper constant 235):</p>

<div class="gsm-equation">\[ \Delta\theta = \frac{R_2 - R_1}{R_1}\,(235 + \theta_1) + \theta_1 - \theta_a \]</div>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Ask the supplier for rise by resistance at rated load and stated ambient, thermal resistance or time constant from the heat run, \( K_t \) and resistance at 20 °C, continuous and intermittent torque zones, and the IC code assumed. The test stages behind those figures are described in <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">what happens before a motor unit ships</a>.
</div>

<hr/>

<h2>PMDC or BLDC for Round-the-Clock Operation?</h2>

<p>Both run S1 duty reliably when sized correctly; they put the heat in different places. In a <strong>PMDC</strong> motor, armature copper loss must cross the air gap to reach the frame, and brushes add heat and an inspection interval. In return it is simple to drive and cost-effective; our range covers 15 W to 1,500 W at 12–220 V DC with S1, S2 and S3 ratings and optional externally accessible brushes.</p>

<p>In a <strong>BLDC</strong> motor, stator windings conduct heat straight into the housing and there is no brush loss. Our BLDC motors are specified at 88–94 % efficiency, with sealed bearings rated for 20,000+ hours, IP54–IP67 enclosures, Class F or H insulation and thermal testing up to 50 °C ambient. The more hours a machine runs, the more that pays back; see our <a href="/blog/pmdc-vs-bldc-motor-application-fit-guide/">PMDC vs BLDC application fit guide</a>.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Keep RMS torque at the worst realistic ambient at or below about 80–85 % of continuous rated torque, and check predicted rise against heat-run data rather than cold resistance. If the margin cannot be met in the frame that fits, improve the cooling path before stepping up a frame.
</div>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What does S1 duty mean on a motor nameplate?</h3>
<p>S1 is <strong>continuous duty</strong> as defined in IEC 60034-1: the motor runs at constant load long enough to reach thermal equilibrium and can deliver its rated output indefinitely within its insulation class temperature. The rating assumes a 40 °C ambient and up to 1,000 m altitude. An S2 or S3 motor was rated on the assumption of rest periods, so it must not carry its nameplate output continuously.</p>

<h3>Q2. How do you calculate RMS torque for a varying load?</h3>
<p>Square each torque level in the cycle, multiply by its duration, add the results, divide by the total cycle time and take the square root. For example, 7 Nm for 8 s, 3 Nm for 28 s and 1 Nm for 24 s gives an <strong>RMS torque of 3.34 Nm</strong> against an average of 2.73 Nm. Compare the RMS value, not the average, with the motor's continuous rated torque.</p>

<h3>Q3. How much should a motor be derated for high ambient temperature?</h3>
<p>Every degree above the 40 °C reference ambient removes one kelvin from the permissible temperature rise. For a typical small motor with about 30 % fixed losses, that means roughly <strong>5 % less continuous torque at 45 °C, 9 % less at 50 °C and 20 % less at 60 °C</strong>. Confirm the factor with the manufacturer and measure the ambient at the motor, inside any enclosure.</p>

<h3>Q4. How long does a motor take to reach its full operating temperature?</h3>
<p>About three to five thermal time constants. After one time constant the winding reaches 63 % of its final rise, after three about 95 % and after five over 99 %. Small fractional-kilowatt motors typically have time constants of tens of minutes, so they settle within one to three hours. Any load running longer than about three time constants should be sized as S1 duty.</p>

<h3>Q5. Is a PTC thermistor or a PT100 sensor better for motor protection?</h3>
<p>They do different jobs. A <strong>PTC thermistor</strong> switches sharply at its rated response temperature and suits trip-only protection through a thermistor relay. A <strong>PT100 RTD</strong> gives a continuous, accurate reading that a drive or SCADA system can trend and alarm on before a trip. Both must be embedded where windings are stationary: the stator of a <a href="/products-bldc-motors/">BLDC motor</a>, not a rotating PMDC armature.</p>

<h3>Q6. Does a fan-cooled motor overheat when it runs at low speed?</h3>
<p>It can. In a TEFC (IC411) motor the fan sits on the shaft, so airflow falls roughly in proportion to speed. If load torque stays constant while PWM control lowers speed, copper loss is unchanged but cooling drops. For constant-torque low-speed service use an independently powered fan (IC416), a non-ventilated frame sized for the duty, or a larger motor.</p>

<h3>Q7. How much thermal margin should a continuous-duty motor have?</h3>
<p>A sound target is Class F insulation with the rise held within the 80 K Class B limit at rated load, leaving about 25 K of headroom. In torque terms, keep the RMS load at the worst realistic ambient to around <strong>80–85 % of the continuous rating</strong>. Since insulation life roughly halves per 10 K of overtemperature, design margin costs far less than early rewinds.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Continuous duty motor overheating is a sizing outcome, not bad luck. Calculate RMS torque from the real cycle, build a loss budget with hot resistance, convert it to a rise through measured thermal resistance, derate for the ambient at the motor and the altitude, and choose cooling that works at the lowest speed. For the wider picture, see our <a href="/blog/industrial-motor-premature-failure-checklist/">industrial motor premature failure checklist</a>.</p>

<p>Specifying a motor for 24/7 service? <a href="/contact-us/">Share your load cycle, ambient and enclosure details with our engineers</a> and we will check the thermal margin before anything is built.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Specifying a Motor for 24/7 Continuous Duty?</strong></h3>
<p style="margin-bottom: 0;">Send us your load cycle (torque and time for each segment), speed range, supply voltage, the ambient temperature at the motor, site altitude and enclosure details. Our engineers will check RMS torque, predicted temperature rise and cooling method, and propose a PMDC or BLDC motor with genuine thermal margin.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Continuous Duty Motors, S1 Duty Rating, Motor Thermal Design, RMS Torque Sizing, PMDC Motors, BLDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/wrong-motor-voltage-problems-solutions/">
<h4 class="post-title">What Happens When You Choose the Wrong Motor Voltage? Common Problems and Solutions</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/motor-for-frequent-start-stop-applications/">
<h4 class="post-title">How to Choose a Motor for Frequent Start-Stop Applications</h4>
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
<li><a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">Why Does a DC Motor Overheat? 7 Causes and Fixes</a></li>
<li><a href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">Motor Insulation Classes: Class F vs Class H</a></li>
<li><a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">Motor Efficiency Ratings Explained for Buyers</a></li>
<li><a href="/blog/motor-for-frequent-start-stop-applications/">Choosing a Motor for Frequent Start-Stop Duty</a></li>
<li><a href="/blog/undersized-motor-problems-how-to-avoid/">How to Avoid Choosing an Undersized Motor</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">S1 Continuous-Duty Motor Thermal Sizing Worksheet</h3>
          <p class="gsm-modal-subtitle">Work out RMS torque, losses and steady-state temperature rise for any 24/7 drive, then specify cooling and protection with confidence before you order.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>RMS Torque Template:</strong> Tabulate any load cycle and get the thermally equivalent torque</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Derating Table:</strong> Ambient and altitude correction factors for continuous-duty motor sizing</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Protection Checklist:</strong> Match PTC, PT100, bimetal or I²t protection to the motor type</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Preventing Continuous-Duty Motor Overheating Lead Magnet">
          <input type="hidden" name="lead_magnet" value="S1 Continuous-Duty Motor Thermal Sizing Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/continuous-duty-motor-overheating-prevention/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Thermal Sizing Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the S1 Continuous-Duty Motor Thermal Sizing Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/s1-continuous-duty-motor-thermal-sizing-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
