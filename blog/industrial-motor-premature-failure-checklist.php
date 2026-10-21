<?php
$current_page     = 'industrial-motor-premature-failure-checklist';
$canonical_path   = 'blog/industrial-motor-premature-failure-checklist/';
$page_title       = 'Industrial Motor Premature Failure | Globe Scott Motors';
$meta_description = 'Industrial motor premature failure explained: bearing L10 life, insulation ageing, moisture, brushes, power quality, plus maintenance and selection checklists.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/industrial-motor-premature-failure-checklist.jpg';
$body_class       = 'post-template-default single single-post postid-2443 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/"
      },
      "headline": "Why Do Industrial Motors Fail Prematurely? A Maintenance and Selection Checklist",
      "name": "Why Do Industrial Motors Fail Prematurely? A Maintenance and Selection Checklist",
      "description": "Industrial motor premature failure explained: bearing L10 life, insulation ageing, moisture, brushes, power quality, plus maintenance and selection checklists.",
      "url": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Reliability, Maintenance, Selection",
      "keywords": "industrial motor premature failure, motor failure causes, bearing l10 life, insulation resistance test, motor reliability, root cause failure analysis, polarisation index",
      "wordCount": 2372,
      "image": {
        "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/industrial-motor-premature-failure-checklist.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/industrial-motor-premature-failure-checklist.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Root cause investigation of an industrial motor on the test bench, with temperature and electrical readings being taken."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#breadcrumb",
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
          "name": "Industrial Motor Premature Failure Checklist",
          "item": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the most common cause of industrial motor failure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bearing failure. Large-motor reliability surveys by IEEE and EPRI consistently put bearings at the top of the list, followed by stator winding failures. Most bearings never reach their calculated fatigue life; they fail early from lubrication breakdown, contamination, overload from belts or misalignment, and electrical erosion in inverter-fed motors. In brushed DC motors, brush and commutator wear is a further common cause."
          }
        },
        {
          "@type": "Question",
          "name": "How do you calculate bearing L10 life for a motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For ball bearings, ISO 281 gives L10 = (C/P)³ × 1,000,000 revolutions, where C is the dynamic load rating and P the equivalent dynamic load. Divide by 60 × rpm to convert to hours. A bearing with C = 14 kN carrying 0.70 kN at 1,500 rpm has an L10 of about 88,900 hours ; doubling the load cuts that to about 11,100 hours."
          }
        },
        {
          "@type": "Question",
          "name": "What insulation resistance reading is acceptable for a motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Test windings rated below 1 kV at 500 V DC and correct the reading to 40 °C, because insulation resistance roughly halves for every 10 °C rise. IEEE 43 recommends minimum values that depend on winding type, for example 5 MΩ for most random-wound windings below 1 kV , and a polarisation index of at least 2.0 on larger Class B-and-above windings. A falling trend matters more than any single reading."
          }
        },
        {
          "@type": "Question",
          "name": "How much does temperature reduce motor life?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "By the widely used 10 K rule, insulation life roughly halves for every 10 K that the winding runs above its thermal class rating, so running 20 K too hot leaves about a quarter of the expected life . Bearing grease is also sensitive: a common rule of thumb halves grease life for every 15 K above about 70 °C. Heat therefore shortens both of the leading failure paths."
          }
        },
        {
          "@type": "Question",
          "name": "Can a motor be used again after flooding or water ingress?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Often, but never straight away. Isolate it, dismantle as needed, clean out silt and dry the windings with gentle heat until insulation resistance, corrected to 40 °C, recovers and stabilises. Replace bearings that took in water, because rust and contaminated grease shorten their life. Re-energise only when insulation resistance and, on larger windings, polarisation index are acceptable. This is routine after monsoon water-logging."
          }
        },
        {
          "@type": "Question",
          "name": "What is root cause failure analysis for electric motors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Root cause failure analysis (RCFA) finds why a motor failed, not just which part failed. Preserve the evidence, collect operating data (load, current, temperature, vibration, supply), inspect failed parts before cleaning, identify the mechanism from the damage pattern and then the condition that accelerated it. The corrective action targets that condition, such as belt tension, sealing or sizing, so the replacement does not fail the same way."
          }
        },
        {
          "@type": "Question",
          "name": "Do BLDC motors last longer than brushed DC motors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In high-hour applications they usually need less maintenance, because there are no brushes or commutator to wear. Our BLDC motors use sealed bearings rated for 20,000+ hours. Bearings and insulation still age, so the same rules on load, temperature, sealing and power quality apply. For moderate running hours, a well-applied PMDC motor with accessible brushes remains a reliable, economical choice."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/",
      "url": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/",
      "name": "Industrial Motor Premature Failure | Globe Scott Motors",
      "description": "Industrial motor premature failure explained: bearing L10 life, insulation ageing, moisture, brushes, power quality, plus maintenance and selection checklists.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/#primaryimage"
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
<h1>Why Do Industrial Motors Fail Prematurely? A Maintenance and Selection Checklist</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Industrial Motor Premature Failure Checklist</li></ol> </nav>
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
<article class="post-2443 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-motor-reliability tag-motor-failure-analysis tag-bearing-life tag-insulation-resistance-testing tag-preventive-maintenance tag-pmdc-motors tag-globe-scott-motors" id="post-2443">

<img alt="Industrial motor premature failure analysis on a workshop bench, with the windings exposed and test meters connected" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/industrial-motor-premature-failure-checklist.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Reliability, Maintenance, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>When a motor that should have run for a decade fails in its second year, the replacement is the cheap part. The real cost is the unplanned stoppage, and the near-certainty that the next motor will fail the same way unless the cause is found. <strong>Industrial motor premature failure</strong> is rarely random: it is almost always one of a handful of well-understood mechanisms, accelerated by how the motor was selected, installed or maintained.</p>

<p>This guide explains those mechanisms for <a href="/products-pmdc-motors/">PMDC motors</a>, <a href="/products-bldc-motors/">BLDC motors</a> and industrial motors generally, then turns them into two working checklists: one for maintenance teams and one for engineers specifying a new or replacement motor.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Most premature motor failures trace back to six mechanisms: bearing damage, insulation thermal ageing, moisture and contamination, brush and commutator wear in DC machines, power-quality stress, and mechanical stress or misapplication. Prevent them by sizing and specifying correctly, protecting the motor from its environment, trending insulation resistance, vibration, temperature and current against a commissioning baseline, and investigating every failure to its root cause instead of simply replacing the motor.
</div>

<h2>What Counts as a Premature Failure?</h2>

<p>Every motor contains parts with a predictable wear-out life: bearings fatigue, insulation ages and brushes wear. A failure is premature when it arrives well before the life those parts should deliver at the actual load and temperature. Large-motor reliability surveys published by IEEE and EPRI consistently attribute the largest share of failures to bearings, followed by stator windings. In brushed DC machines, brushes and commutators add a third wear-out path.</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Component</th><th>What Sets Its Life</th><th>How to Estimate or Track It</th><th>Main Accelerators</th></tr>
</thead>
<tbody>
<tr><td><strong>Bearings</strong></td><td>Rolling-contact fatigue</td><td>ISO 281 L10 life from load and speed</td><td>Overload, poor lubrication, contamination, electrical erosion</td></tr>
<tr><td><strong>Winding insulation</strong></td><td>Thermal ageing</td><td>10 K rule against the thermal class</td><td>Overload, high ambient, blocked cooling, moisture</td></tr>
<tr><td><strong>Brushes and commutator</strong></td><td>Mechanical and electrical wear</td><td>Brush length trend per 1,000 running hours</td><td>Sparking, contamination, wrong brush grade</td></tr>
<tr><td><strong>Magnets (PMDC)</strong></td><td>Stable within temperature and current limits</td><td>No-load speed and current trend</td><td>Locked-rotor current, full-voltage reversals; ferrite is most at risk when cold, NdFeB when hot</td></tr>
<tr><td><strong>Shaft and fixings</strong></td><td>Bending and fretting fatigue</td><td>Overhung load check; vibration trend</td><td>Misalignment, overhung pulleys, resonance</td></tr>
</tbody>
</table>
</div>

<p>The practical discipline is root cause failure analysis (RCFA): identify the mechanism from the physical evidence, then the condition that accelerated it, and only then choose a fix. Replacing a failed bearing without asking why it failed usually buys the same failure again.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Before a failed motor goes for rewinding or scrap, keep the failed bearing and a grease sample, and photograph the windings and commutator. The evidence that identifies the mechanism is usually destroyed by the first wipe with a rag.
</div>

<hr/>

<h2>The Six Mechanisms Behind Industrial Motor Premature Failure</h2>

<h3>1. Bearing Damage</h3>

<p>Rolling bearings have a calculable fatigue life. ISO 281 gives the basic rating life of a ball bearing, the life that 90 % of identical bearings will reach:</p>

<div class="gsm-equation">\[ L_{10} = \left(\frac{C}{P}\right)^3 \times 10^6\ \text{rev}, \qquad L_{10h} = \frac{10^6}{60\,n}\left(\frac{C}{P}\right)^3 \]</div>

<p>Here \( C \) is the dynamic load rating, \( P \) the equivalent dynamic load and \( n \) the speed in rpm. The cube makes life very sensitive to load: a 25 % load increase roughly halves it (\( 1/1.25^3 = 0.51 \)). In practice few bearings die of fatigue. They are killed earlier by lubrication failure (a common rule of thumb halves grease life for every 15 K above about 70 °C), contamination and moisture, overload from over-tensioned belts or misalignment, and, in inverter-fed machines, electrical erosion: shaft voltages discharge through the bearing and etch a washboard "fluting" pattern into the raceways. ISO 281's modified life adds factors for lubrication and contamination for exactly this reason.</p>

<p><strong>Worked example: belt tension and bearing life.</strong> A 1,500 rpm motor drives a fan by V-belt. Its drive-end bearing has \( C = 14\,\mathrm{kN} \), typical of a 25 mm bore deep-groove ball bearing, and the correctly tensioned belt gives \( P = 0.70\,\mathrm{kN} \):</p>

<div class="gsm-equation">\[ L_{10h} = \frac{10^6}{60 \times 1500} \times \left(\frac{14}{0.70}\right)^3 = 11.1 \times 8000 \approx 88{,}900\,\mathrm{h} \]</div>

<p>That is about ten years of 24/7 running. Over-tension the belt and leave the pulleys misaligned, and the bearing load can easily double to 1.40 kN. Now \( (C/P)^3 = 1000 \) and \( L_{10h} \approx 11{,}100\,\mathrm{h} \), about 15 months. Nothing about the motor changed; the installation cut its bearing life by a factor of eight.</p>

<h3>2. Insulation Thermal Ageing</h3>

<p>Winding insulation degrades chemically with temperature. The widely used 10 K rule, an approximation of Arrhenius behaviour, says life roughly halves for each 10 K above the thermal class rating:</p>

<div class="gsm-equation">\[ L \approx L_{rated} \cdot 2^{-(\theta - \theta_{class})/10} \]</div>

<p>Running 20 K hot cuts expected life to about a quarter, with no warning: torque, speed and noise stay normal. The usual causes are overload, high ambient, blocked fins, fan-cooled motors run slowly at full torque, and S2 or S3 motors used continuously. For troubleshooting a hot motor see <a href="/blog/why-does-a-dc-motor-overheat-causes-and-fixes/">why a DC motor overheats</a>; for designing it out, see <a href="/blog/continuous-duty-motor-overheating-prevention/">how to prevent continuous-duty motor overheating</a>.</p>

<h3>3. Moisture and Contamination</h3>

<p>Water, condensation, oil mist and conductive dust lower insulation resistance and create tracking paths. Monsoon humidity is the classic Indian case: a motor that cools overnight breathes in moist air and condensation collects inside. Standby motors, machines idle for weeks and wet-process equipment are most at risk, as our guide to <a href="/blog/industrial-cleaning-machine-motor-problems-failures/">industrial cleaning machine motor problems</a> shows.</p>

<p>Insulation resistance (IR) testing to IEEE 43 is the standard check. For windings rated below 1 kV, test at 500 V DC. IR roughly halves for every 10 °C rise in winding temperature, so correct readings to 40 °C before comparing them:</p>

<div class="gsm-equation">\[ R_{40} = R_T \cdot 0.5^{(40 - T)/10} \]</div>

<p>For example, 40 MΩ measured on a winding at 25 °C corrects to \( 40 \times 0.5^{1.5} = 14.1\,\mathrm{M\Omega} \). IEEE 43 recommends minimum values at 40 °C that depend on winding type (for example 5 MΩ for most random-wound windings below 1 kV) and, on larger windings, a polarisation index \( PI = R_{10\,min}/R_{1\,min} \) of at least 2.0 for Class B and higher insulation. The trend matters more than any single reading.</p>

<h3>4. Brush and Commutator Wear in DC Machines</h3>

<p>Brushes are a designed wear part; failure is premature when they wear far faster than expected or damage the commutator. Accelerating factors include overload and sparking, a brush grade wrong for the current density, long periods at very light load (poor film formation), oil or silicone vapour contamination, very dry air, bearing wear that lets the commutator run out, and incorrect spring pressure. A uniform chocolate-brown film is healthy. Our PMDC motors are available with externally accessible brushes for quick replacement; where brush service dominates maintenance cost, compare options in <a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">brushed vs brushless motor maintenance</a>.</p>

<h3>5. Power Quality and Electrical Stress</h3>

<p>Low voltage makes a loaded induction motor draw more current, while a DC motor slows at the same current (its load torque sets the current), losing fan cooling; overvoltage raises speed and commutation stress; high ripple from simple single-phase rectifiers adds heat without useful torque; switching transients and lightning surges stress turn-to-turn insulation. In inverter-fed drives, fast PWM edges add voltage overshoot on long cables as well as bearing currents. Measure at the motor terminals under load, not at the panel.</p>

<h3>6. Mechanical Stress, Vibration and Misapplication</h3>

<p>Misalignment, soft foot, unbalance, resonance and loose fixings drive cyclic loads into bearings, shafts and windings, while pulleys mounted far out on the shaft cause bending fatigue at the keyway or shoulder. Diagnosis by frequency is covered in <a href="/blog/dc-motor-vibration-problems-how-to-identify/">how to identify DC motor vibration problems</a>. Misapplication at selection (wrong duty type, IP code or frame size) accelerates every mechanism above, which is why the second checklist below concerns selection.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Motor Premature Failure Prevention Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable checklist covering commissioning baselines, routine electrical and mechanical checks with thresholds, brushed DC inspection, a selection checklist and a root cause investigation worksheet.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Failure-Mode Table: Reading the Evidence</h2>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Evidence on the Failed Motor</th><th>Mechanism</th><th>Usual Root Cause</th><th>Prevention</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Flaking (spalling) on raceways</strong></td><td>Fatigue, often early from overload</td><td>Over-tensioned belt, overhung load, misalignment</td><td>Check L10h at real loads; align; tension correctly</td></tr>
<tr><td><strong>Dry, darkened grease; worn cage</strong></td><td>Lubrication failure</td><td>Hot bearing, wrong grease or interval</td><td>Correct grease and interval; reduce temperature</td></tr>
<tr><td><strong>Dents, rust, abrasive wear</strong></td><td>Contamination, moisture</td><td>Poor seals, washdown, condensation</td><td>Correct IP code and seals; dry storage</td></tr>
<tr><td><strong>Washboard fluting or frosted band</strong></td><td>Electrical erosion</td><td>Inverter shaft voltages</td><td>Insulated or hybrid bearings, shaft grounding</td></tr>
<tr><td><strong>Uniformly darkened, brittle insulation</strong></td><td>Thermal ageing</td><td>Overload, high ambient, blocked cooling</td><td>RMS sizing, derating, clean cooling paths</td></tr>
<tr><td><strong>Localised burn, turn-to-turn short</strong></td><td>Dielectric breakdown</td><td>Moisture, contamination, surges</td><td>IR trending, dry-out, surge protection</td></tr>
<tr><td><strong>Grooved, burnt or threaded commutator</strong></td><td>Commutation distress</td><td>Overload, wrong brush grade, contamination</td><td>Brush grade review, cleanliness, load check</td></tr>
<tr><td><strong>Shaft crack with beach marks at keyway</strong></td><td>Bending fatigue</td><td>Overhung load, misalignment, resonance</td><td>Reduce overhang, outboard bearing, alignment</td></tr>
</tbody>
</table>
</div>

<hr/>

<h2>Maintenance Checklist to Prevent Premature Motor Failure</h2>

<p>Record a baseline at commissioning (IR, running current, vibration, bearing and frame temperatures at a known load and ambient), then trend every check against it. Our <a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC motor preventive maintenance guide</a> covers the routine tasks in more detail.</p>

<ul>
<li><strong>Insulation resistance:</strong> 500 V DC for windings below 1 kV, corrected to 40 °C; investigate any sustained downward trend, and test before restarting a motor that has stood idle or been exposed to water.</li>
<li><strong>Vibration:</strong> trend velocity RMS at each bearing against ISO 20816 zones; a step change matters more than the absolute value.</li>
<li><strong>Temperature:</strong> check frame and bearing housings at comparable load and ambient; investigate a rise of 10 K or more over baseline.</li>
<li><strong>Current:</strong> a rising trend at the same load signals added friction, wear or weakened magnets.</li>
<li><strong>Lubrication:</strong> follow the relubrication interval, shorten it for hot bearings, and never over-grease.</li>
<li><strong>Brushes and commutator (DC):</strong> measure brush length, check spring pressure and film colour, replace before minimum length and remove carbon dust.</li>
<li><strong>Cooling:</strong> clear fins, vents and fan covers; dust layers insulate the frame.</li>
<li><strong>Mechanical:</strong> re-check alignment (within about 0.05 mm), belt tension, fixings and soft foot after every intervention.</li>
<li><strong>Connections and seals:</strong> re-torque terminals and inspect glands and gaskets, especially before the monsoon.</li>
<li><strong>Standby motors:</strong> keep them dry, turn shafts periodically to avoid false brinelling, and test IR before use.</li>
</ul>

<hr/>

<h2>Selection Checklist for Long Motor Life</h2>

<ul>
<li><strong>Duty and size:</strong> match S1, S2 or S3 to the real cycle and size on RMS torque with margin; see <a href="/blog/undersized-motor-problems-how-to-avoid/">how to avoid undersized motor problems</a>.</li>
<li><strong>Thermal:</strong> state the ambient at the motor and the altitude; specify Class F insulation with a Class B rise.</li>
<li><strong>Environment:</strong> choose the IP code for actual exposure to dust, washdown or water-logging.</li>
<li><strong>Bearings:</strong> check L10h at the real radial and axial loads against the required service life; keep overhung loads within rating or add a coupling and outboard bearing.</li>
<li><strong>Supply:</strong> define voltage tolerance, ripple and transients; for inverter-fed motors, specify bearing-current mitigation.</li>
<li><strong>Technology:</strong> choose brushed or brushless on running hours and maintenance access.</li>
<li><strong>Gearing:</strong> apply a service factor for shock loads on <a href="/products-geared-motors/">geared motors</a>.</li>
<li><strong>Maintainability:</strong> provide brush access, lubrication points, thermal sensors and room to align.</li>
<li><strong>Supplier testing:</strong> ask what is verified. Globe Scott PMDC motors undergo magnet flux and coercivity checks, ultrasonic flaw detection, armature surge and HV dielectric tests, dynamometer load testing, and endurance and temperature-rise testing; see <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">motor testing before a unit ships</a>.</li>
</ul>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What is the most common cause of industrial motor failure?</h3>
<p>Bearing failure. Large-motor reliability surveys by IEEE and EPRI consistently put bearings at the top of the list, followed by stator winding failures. Most bearings never reach their calculated fatigue life; they fail early from lubrication breakdown, contamination, overload from belts or misalignment, and electrical erosion in inverter-fed motors. In brushed DC motors, <strong>brush and commutator wear</strong> is a further common cause.</p>

<h3>Q2. How do you calculate bearing L10 life for a motor?</h3>
<p>For ball bearings, ISO 281 gives L10 = (C/P)³ × 1,000,000 revolutions, where C is the dynamic load rating and P the equivalent dynamic load. Divide by 60 × rpm to convert to hours. A bearing with C = 14 kN carrying 0.70 kN at 1,500 rpm has an <strong>L10 of about 88,900 hours</strong>; doubling the load cuts that to about 11,100 hours.</p>

<h3>Q3. What insulation resistance reading is acceptable for a motor?</h3>
<p>Test windings rated below 1 kV at 500 V DC and correct the reading to 40 °C, because insulation resistance roughly halves for every 10 °C rise. IEEE 43 recommends minimum values that depend on winding type, for example <strong>5 MΩ for most random-wound windings below 1 kV</strong>, and a polarisation index of at least 2.0 on larger Class B-and-above windings. A falling trend matters more than any single reading.</p>

<h3>Q4. How much does temperature reduce motor life?</h3>
<p>By the widely used 10 K rule, insulation life roughly halves for every 10 K that the winding runs above its thermal class rating, so running 20 K too hot leaves about <strong>a quarter of the expected life</strong>. Bearing grease is also sensitive: a common rule of thumb halves grease life for every 15 K above about 70 °C. Heat therefore shortens both of the leading failure paths.</p>

<h3>Q5. Can a motor be used again after flooding or water ingress?</h3>
<p>Often, but never straight away. Isolate it, dismantle as needed, clean out silt and dry the windings with gentle heat until insulation resistance, corrected to 40 °C, recovers and stabilises. Replace bearings that took in water, because rust and contaminated grease shorten their life. Re-energise only when insulation resistance and, on larger windings, polarisation index are acceptable. This is routine after monsoon water-logging.</p>

<h3>Q6. What is root cause failure analysis for electric motors?</h3>
<p>Root cause failure analysis (RCFA) finds why a motor failed, not just which part failed. Preserve the evidence, collect operating data (load, current, temperature, vibration, supply), inspect failed parts before cleaning, identify the mechanism from the damage pattern and then the condition that accelerated it. The corrective action targets that condition, such as belt tension, sealing or sizing, so the replacement does not fail the same way.</p>

<h3>Q7. Do BLDC motors last longer than brushed DC motors?</h3>
<p>In high-hour applications they usually need less maintenance, because there are no brushes or commutator to wear. Our <a href="/products-bldc-motors/">BLDC motors</a> use sealed bearings rated for 20,000+ hours. Bearings and insulation still age, so the same rules on load, temperature, sealing and power quality apply. For moderate running hours, a well-applied PMDC motor with accessible brushes remains a reliable, economical choice.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>Industrial motor premature failure is almost always explainable. Bearings, insulation, moisture, brushes, power quality and mechanical stress each leave recognisable evidence, and each is accelerated by choices made at selection, installation or maintenance. Read the evidence before replacing anything, trend the basic measurements against a baseline, and treat the specification as the first line of reliability.</p>

<p>If a motor keeps failing in the same position, <a href="/contact-us/">send our engineers the failure evidence and operating data</a>; we will help identify the mechanism and specify a motor that suits the duty.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Motors Failing Early in Your Plant or Product?</strong></h3>
<p style="margin-bottom: 0;">Send us the failure evidence and operating data: duty cycle, load, supply voltage, ambient, environment and how the motor is mounted and driven. Our engineers will help identify the failure mechanism and specify a PMDC, BLDC or geared motor built for the real duty, with the test data to back it.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Motor Reliability, Motor Failure Analysis, Bearing Life, Insulation Resistance Testing, Preventive Maintenance, PMDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/undersized-motor-problems-how-to-avoid/">
<h4 class="post-title">How to Avoid Choosing an Undersized Motor for Your Industrial Application</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/custom-dc-motor-sourcing-oem-mistakes/">
<h4 class="post-title">How to Avoid Costly Mistakes When Sourcing Custom DC Motors for OEM Production</h4>
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
<li><a href="/blog/dc-motor-vibration-problems-how-to-identify/">How to Identify DC Motor Vibration Problems</a></li>
<li><a href="/blog/continuous-duty-motor-overheating-prevention/">Preventing Overheating in Continuous-Duty Motors</a></li>
<li><a href="/blog/dc-motor-maintenance-common-problems-troubleshooting-preventive/">DC Motor Maintenance and Troubleshooting Guide</a></li>
<li><a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">Motor Testing Before a Unit Ships</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Reliability Checklist</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">Motor Premature Failure Prevention Checklist</h3>
          <p class="gsm-modal-subtitle">Get the maintenance and selection checklists from this guide in printable form, with insulation, temperature and bearing-life checks and a root cause worksheet.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Baseline and Trend Sheet:</strong> Record IR, current, vibration and temperature at commissioning</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Failure-Mode Guide:</strong> Match damage evidence to mechanism, root cause and first check</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Selection Checklist:</strong> Duty, thermal, IP, bearing and supply checks before ordering</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Industrial Motor Premature Failure Checklist Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Motor Premature Failure Prevention Checklist">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/industrial-motor-premature-failure-checklist/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Failure Prevention Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Motor Premature Failure Prevention Checklist immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/motor-premature-failure-prevention-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
