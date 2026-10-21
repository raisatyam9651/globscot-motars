<?php
$current_page     = 'high-torque-low-speed-dc-motor-selection';
$canonical_path   = 'blog/high-torque-low-speed-dc-motor-selection/';
$page_title       = 'High Torque Low Speed DC Motor Guide | Globe Scott Motors';
$meta_description = 'Need a high torque low speed DC motor? Learn why gearing beats voltage reduction and how to size ratio, gear type and brake, with a 50 Nm at 30 rpm example.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/high-torque-low-speed-dc-motor-selection.jpg';
$body_class       = 'post-template-default single single-post postid-2432 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/"
      },
      "headline": "How to Select a Motor When You Need High Torque at Low Speed",
      "name": "How to Select a Motor When You Need High Torque at Low Speed",
      "description": "Need a high torque low speed DC motor? Learn why gearing beats voltage reduction and how to size ratio, gear type and brake, with a 50 Nm at 30 rpm example.",
      "url": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Selection, Gear Reduction, Engineering",
      "keywords": "high torque low speed dc motor, low rpm high torque motor, gear reduction ratio, worm gear motor, planetary gearbox, torque speed curve, geared dc motor sizing",
      "wordCount": 2492,
      "image": {
        "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/high-torque-low-speed-dc-motor-selection.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/high-torque-low-speed-dc-motor-selection.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Selecting a geared DC motor drive that delivers high torque at low output speed."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#breadcrumb",
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
          "name": "High Torque Low Speed DC Motor Selection",
          "item": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What type of motor is best for high torque at low speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In most industrial machines the best choice is a geared motor : a PMDC or BLDC motor running at 1,500–3,000 rpm driving a planetary, helical or worm gearbox. The gearbox multiplies torque by the ratio times its efficiency, so a small motor delivers tens of newton-metres at the output. Direct-drive brushless torque motors make sense only where zero backlash or very low noise justifies their much larger size and cost."
          }
        },
        {
          "@type": "Question",
          "name": "Can I reduce the voltage of a DC motor to get more torque at low speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Lowering voltage lowers speed but does not raise torque, because torque is proportional to armature current (T = Kt × I) and continuous current is limited by winding temperature. At low speed the back-EMF is small, so most of the input becomes I²R heat: a motor held at rated torque at one-tenth of its rated speed converts well under half its input into shaft power, and its speed holding under load becomes poor."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate the gear ratio for a low-speed application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Divide the motor's loaded speed by the required output speed. A 3,000 rpm motor driving a 30 rpm load needs 100:1, while a 1,500 rpm motor needs 50:1. Then check the motor torque as output torque ÷ (ratio × gearbox efficiency). Round the ratio to a standard value and confirm the resulting output speed is within your process tolerance. Our gear ratio selection guide covers rounding in detail."
          }
        },
        {
          "@type": "Question",
          "name": "Is a worm gear motor a good choice for high torque at low speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A worm gear motor is a good choice when you need a compact right-angle drive, a high ratio in one stage and resistance to back-driving, on intermittent duty. Its weakness is efficiency: high-ratio worms often run at 40–60 %, so the motor must be larger and the gearbox sheds more heat. A worm that is truly self-locking is below 50 % efficient, and it should never replace a brake on suspended loads."
          }
        },
        {
          "@type": "Question",
          "name": "Planetary or spur gearbox: which is better for high torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For the highest torque in the smallest envelope, a planetary gearbox is usually better, because several planet gears share the load and stages stack coaxially to high ratios at about 95–97 % efficiency per stage. Spur and helical parallel-shaft gearboxes are simpler, very efficient and tolerant of overhung loads, and helical teeth run quieter. For moderate torque and ratios, parallel-shaft gearing is often the more economical option."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need a brake if my gearbox is self-locking?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, wherever the load could move, fall or run back if the drive lets go. Self-locking depends on friction, which changes with lubrication, temperature, wear and vibration, so a worm can creep. A fail-safe electromagnetic brake sized at about twice the output holding torque divided by the gear ratio gives a defined holding torque, and suspended loads may also need output-side holding under the applicable lifting standard."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/",
      "url": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/",
      "name": "High Torque Low Speed DC Motor Guide | Globe Scott Motors",
      "description": "Need a high torque low speed DC motor? Learn why gearing beats voltage reduction and how to size ratio, gear type and brake, with a 50 Nm at 30 rpm example.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/#primaryimage"
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
<h1>How to Select a Motor When You Need High Torque at Low Speed</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">High Torque Low Speed DC Motor Selection</li></ol> </nav>
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
<article class="post-2432 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-high-torque-low-speed-motor tag-geared-motors tag-gear-reduction tag-pmdc-motors tag-bldc-motors tag-globe-scott-motors" id="post-2432">

<img alt="Industrial DC motor and gearbox selection for a high torque low speed DC motor drive" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/high-torque-low-speed-dc-motor-selection.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Selection, Gearing, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>Mixers, turntables, indexing tables, slow agitators and roller drives all need a lot of torque at a few tens of rpm. Selecting a <strong>high torque low speed DC motor</strong> drive is therefore mostly a gearing decision: in nearly every industrial case the answer is a compact motor running near its rated speed, followed by a reduction stage such as those in our <a href="/products-geared-motors/">industrial geared motors</a>.</p>

<p>The tempting shortcut, turning a standard motor's voltage down until the speed looks right, fails for reasons that are easy to quantify. This guide shows why, then sets out the sizing sequence and a worked example for 50 Nm at 30 rpm. If you already own a motor that simply runs too fast, picking a ratio for it is covered in our guide to <a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">DC motor gear ratio selection when speed is too high</a>.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> Define the output torque, speed and duty, then calculate output power (P = T &times; &omega;). Pick a motor with a loaded speed of roughly 1,500&ndash;3,000 rpm and a gearbox ratio that brings it down to the target speed; the motor then needs only T<sub>out</sub> &divide; (i &times; &eta;<sub>gear</sub>). Do not create low speed by lowering voltage: torque comes from current, efficiency falls with speed and speed holding becomes poor. Use planetary or helical gearing for efficiency, worm gearing for compact right-angle drives, and a brake for holding.
</div>

<h2>Why Turning Down the Voltage Is the Wrong Way to Get Low Speed</h2>

<p>In a permanent-magnet DC motor, voltage sets speed but current sets torque, \( T = K_t I_a \). That relationship explains most of what goes wrong when a motor is simply run slowly.</p>

<h3>1. Torque Comes From Current, and Current Is Limited by Heat</h3>

<p>A frame's continuous torque is fixed by how much armature current it can carry before the winding reaches its insulation-class limit. Copper loss \( I_a^2 R_a \) does not depend on speed, so a motor rated 0.6 Nm at 3,000 rpm is at best still a 0.6 Nm motor at 30 rpm. Lowering the voltage moves the operating point down the speed axis; it does not stretch the torque axis.</p>

<h3>2. Efficiency Falls Steeply as Speed Drops</h3>

<p>The fraction of electrical input a DC motor can turn into shaft power is capped by the ratio of back-EMF to terminal voltage:</p>

<div class="gsm-equation">\[ \eta_{em} = \frac{P_{mech}}{P_{elec}} = \frac{E_b \, I_a}{V \, I_a} = \frac{E_b}{V} \]</div>

<p>Take a 24 V motor in which, at rated torque, the resistive drop \( I_a R_a \) is about 2 V and the brush drop about 1 V. At 3,000 rpm the back-EMF is 21 V and the ceiling is 21/24 = 87.5 %. Hold the same torque at 300 rpm: the back-EMF falls to 2.1 V while the 3 V of resistive and brush drop stays, so the terminal voltage is 5.1 V and the ceiling becomes 2.1/5.1 &asymp; 41 %. At 30 rpm it is 0.21/3.21 &asymp; 6.5 %, before friction and iron losses. Nearly all the energy drawn becomes armature heat.</p>

<h3>3. Poor Speed Holding, Ripple and Commutation Stress at Crawl Speeds</h3>

<div class="gsm-equation">\[ \omega = \frac{V - I_a R_a - V_{brush}}{K_e} \]</div>

<p>The load-dependent term \( I_a R_a / K_e \) is a fixed number of rpm at a given torque, whatever the voltage. In the motor above, 2 V of resistive drop against 21 V of back-EMF at 3,000 rpm means roughly 290 rpm of droop between light load and rated torque. Set the voltage for 300 rpm at light load and the shaft almost stops at rated torque; small friction changes become large speed changes.</p>

<p>Crawl speeds add three more problems: cogging and commutation ripple that inertia hides at 3,000 rpm become visible pulsation; the brushes dwell on the same few commutator bars while carrying high current, overheating those coils; and a shaft-mounted fan's airflow falls roughly in proportion to speed.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Gear for any permanent reduction of more than about 20&ndash;30 % of rated speed, and avoid running for long periods below about one-fifth of rated speed. Use voltage or PWM to trim, ramp and vary speed around the geared design point, not to create it.
</div>

<hr/>

<h2>The Gear Reduction Maths: Output Power First, Then Ratio</h2>

<p>A gearbox trades speed for torque at nearly constant power, so the calculation starts at the output shaft:</p>

<div class="gsm-equation">\[ P_{out} = T_{out} \, \omega_{out} = \frac{2\pi N_{out} T_{out}}{60} \]</div>

<div class="gsm-equation">\[ N_{out} = \frac{N_m}{i}, \qquad T_{out} = T_m \cdot i \cdot \eta_g, \qquad \eta_g = \eta_{stage}^{\,n} \]</div>

<p>50 Nm at 30 rpm is only about 157 W. A high-torque, low-speed requirement is usually a modest-power requirement, which is why a small motor can meet it once the gearing is right.</p>

<h3>Step 1 &mdash; Define the Output Requirement Completely</h3>
<ul>
<li><strong>Continuous torque</strong> at the operating point, measured or calculated as in our <a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">motor torque and speed calculation guide</a>.</li>
<li><strong>Peak and breakaway torque</strong> with duration, such as start-up of a loaded mixer.</li>
<li><strong>Output speed under load</strong> and its tolerance.</li>
<li><strong>Duty type</strong> to IEC 60034-1 (S1, S2 or S3), holding needs, and output-shaft loads.</li>
</ul>

<h3>Step 2 &mdash; Choose the Motor Base Speed</h3>
<p>For brushed PMDC motors a loaded speed of roughly 1,500&ndash;3,000 rpm is a sensible region: brush wear and commutation difficulty rise with speed, while a low-speed winding makes the motor larger for the same power. A faster motor is smaller but needs a larger ratio, often an extra stage, and gives up some gearbox efficiency. Use the <em>loaded</em> speed, not the no-load speed, for the ratio.</p>

<h3>Step 3 &mdash; Calculate the Ratio and the Motor Torque</h3>
<p>The ratio is \( i = N_m / N_{out} \) and the motor must supply \( T_m = T_{out} / (i \, \eta_g) \) continuously, with margin, plus the breakaway peak for its duration. Round the ratio to a standard value and confirm the output speed stays within tolerance. Our guide to <a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">custom geared PMDC gear ratio and torque selection</a> covers service factors for shock loads.</p>

<hr/>

<h2>Choosing the Gear Type for a High Torque Low Speed DC Motor</h2>

<p>The gear type decides efficiency, envelope, noise and whether the load can drive the motor backwards:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Gear Type</th><th>Typical Ratio per Stage</th><th>Efficiency per Stage</th><th>Back-Driving</th><th>Best Suited To</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Spur (parallel shaft)</strong></td><td>Up to about 8:1</td><td>95&ndash;98 %</td><td>Freely back-drivable</td><td>Cost-sensitive drives</td></tr>
<tr><td><strong>Helical (parallel shaft)</strong></td><td>Up to about 8:1</td><td>95&ndash;98 %</td><td>Freely back-drivable</td><td>Quieter, continuous and traction duty</td></tr>
<tr><td><strong>Planetary (in-line)</strong></td><td>3:1 to 10:1</td><td>About 95&ndash;97 %</td><td>Freely back-drivable</td><td>Highest torque density, high ratios</td></tr>
<tr><td><strong>Worm (right angle)</strong></td><td>5:1 to 60:1 or more</td><td>Roughly 40&ndash;90 %, falling as ratio rises</td><td>Resisted or prevented at high ratios</td><td>Compact right-angle, intermittent duty</td></tr>
</tbody>
</table>
</div>

<h3>Worm Gears and the Self-Locking Question</h3>
<p>A single worm stage reaches 30:1 or 60:1 in a compact right-angle package, which suits <a href="/blog/winch-motor-insufficient-torque-lifting-load/">winches</a>, gates and actuators. The price is sliding friction: efficiency falls as ratio rises and lead angle shrinks. A worm is statically self-locking only when its lead angle is smaller than the friction angle, and then its forward efficiency is necessarily below 50 %, so you pay for holding in every running hour. Vibration can still let a "self-locking" worm creep; never treat one as the safety brake on a suspended or inclined load.</p>

<h3>Planetary Versus Parallel-Shaft Gearing</h3>
<p>Planetary stages share the load between several planets, so they carry high torque in a slim coaxial envelope and stack to 100:1 in three stages at good efficiency. Parallel-shaft spur and helical trains are robust, efficient and tolerant of overhung load; helical teeth run quieter. For traction, a 7:1 or 10:1 parallel-exit stage, as in our <a href="/products-pmdc-geared-motors/">PMDC geared traction motors</a>, is often enough because the wheel radius converts torque into tractive force.</p>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Low-Speed High-Torque Drive Sizing Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable step-by-step worksheet covering output power, motor base speed, ratio, gear efficiency, peak and stall checks, brake torque and overhung load, plus a gear-type reference table.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Selecting a Drive for 50 Nm at 30 rpm</h2>

<p>An agitator needs 50 Nm continuously at 30 rpm on S1 duty, with 75 Nm breakaway for under 2 s at start. The output power is:</p>

<div class="gsm-equation">\[ P_{out} = \frac{2\pi \times 30 \times 50}{60} \approx 157\,\mathrm{W} \]</div>

<p>Option A uses a 3,000 rpm motor and a three-stage 100:1 planetary at 95 % per stage (\( \eta_g = 0.95^3 \approx 0.857 \)):</p>

<div class="gsm-equation">\[ T_m = \frac{50}{100 \times 0.857} \approx 0.583\,\mathrm{Nm}, \qquad P_m = 0.583 \times \frac{2\pi \times 3000}{60} \approx 183\,\mathrm{W} \]</div>

<p>Repeating this for two alternatives, with motor efficiency taken as 78 % throughout:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Parameter</th><th>A: 3,000 rpm + 100:1 planetary</th><th>B: 1,500 rpm + 50:1 helical (2 stages)</th><th>C: 1,500 rpm + 50:1 worm</th></tr>
</thead>
<tbody>
<tr><td><strong>Gearbox efficiency</strong></td><td>0.857</td><td>0.922 (0.96 per stage)</td><td>About 0.55</td></tr>
<tr><td><strong>Motor torque required</strong></td><td>0.58 Nm</td><td>1.09 Nm</td><td>1.82 Nm</td></tr>
<tr><td><strong>Motor shaft power</strong></td><td>183 W</td><td>170 W</td><td>286 W</td></tr>
<tr><td><strong>Electrical input</strong></td><td>235 W</td><td>219 W</td><td>366 W</td></tr>
<tr><td><strong>Heat rejected by gearbox</strong></td><td>26 W</td><td>13 W</td><td>129 W</td></tr>
<tr><td><strong>Overall efficiency</strong></td><td>67 %</td><td>72 %</td><td>43 %</td></tr>
<tr><td><strong>Holding</strong></td><td>Brake required</td><td>Brake required</td><td>May self-lock; brake still advised</td></tr>
</tbody>
</table>
</div>

<p>Option A gives the smallest motor. Option B is the most efficient, but its motor needs nearly twice the torque and so roughly twice the rotor volume. Option C is the most compact right-angle package, yet it needs 1.6&ndash;1.7 times the motor power of A or B and must reject 129 W through the gearbox housing: acceptable for short S2 duty, a thermal problem on S1. For a continuous agitator, A or B is the sound choice.</p>

<p>Two checks complete the selection. Breakaway: in option A, 75 Nm needs 0.875 Nm at the motor, 150 % of continuous torque, which a PMDC motor delivers briefly if the controller current limit allows it. Jam: if the motor's stall torque is six times rated, a jammed agitator could see about 300 Nm at the output, so the gearbox must survive it or the current limit must prevent it; see our article on <a href="/blog/motor-gearbox-sizing-problems-output/">motor gearbox sizing problems</a>.</p>

<p>The ratio then snaps to a standard value. Our A92 geared motors (150&ndash;400 W) offer 15:1, 30:1, 60:1 and 75:1: 75:1 gives 30 rpm from a loaded motor speed of 2,250 rpm, and 60:1 from 1,800 rpm. Heavier duties move to the A114 geared range (1,000&ndash;3,000 W, 60:1 and 80:1).</p>

<hr/>

<h2>Holding the Load and Protecting the Output Shaft</h2>

<p>Many low-speed drives must also hold position. A brake on the motor shaft sees the output torque divided by the ratio:</p>

<div class="gsm-equation">\[ T_{brake} \ge SF \times \frac{T_{out}}{i} \]</div>

<p>Taking gear efficiency as 1 for the back-driven case and a safety factor of 2, holding 50 Nm through 100:1 needs at least 1.0 Nm of brake torque. Fail-safe electromagnetic brakes, available on our PMDC and geared motors, hold when power is lost. A motor-side brake relies on an intact gear train, so for suspended loads follow the applicable lifting-equipment standard, which may require output-side holding too.</p>

<p>Output torque also becomes shaft load: a 100 mm pitch-diameter sprocket transmitting 50 Nm pulls \( F = 2T/d = 1{,}000\,\mathrm{N} \). Check this against the gearbox's permissible overhung load at the actual load position and mount the sprocket close to the housing.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
Redraw the torque&ndash;speed curve at the output shaft by dividing motor speed by i and multiplying motor torque by i &times; &eta;<sub>g</sub>. The continuous operating point must sit inside the continuous zone and the breakaway point inside the intermittent zone.
</div>

<hr/>

<h2>When a Direct-Drive BLDC Makes More Sense</h2>

<p>The alternative to gearing is a motor built for the torque itself: a large-diameter, high-pole-count brushless torque motor. Torque capacity scales with rotor volume (\( D^2 L \)), so at the same torque density the 0.58 Nm motor in option A would need roughly 86 times its active rotor volume to deliver 50 Nm directly, a limit explained in our guide to <a href="/blog/compact-dc-motor-selection-limited-space/">compact DC motor selection</a>.</p>

<p>Direct drive brings zero backlash, no gear wear or lubricant, low noise and, with field-oriented control and an encoder, smooth low-speed rotation. It costs diameter, mass, magnet material and a high-current drive, and because copper loss still follows torque while output power stays small, it is not automatically more efficient at 30 rpm than a good geared drive. It pays off where backlash or noise is unacceptable.</p>

<p>For most industrial loads the practical brushless route is a geared BLDC. Option A's 0.58 Nm continuous requirement sits inside the rating of our <a href="/products-bldc-motors/">G-BLDC 57/80 series BLDC motors</a> (30&ndash;400 W, 3,000 rpm rated, 0.10&ndash;1.30 Nm continuous), which can be paired with planetary or helical gearboxes and spring-applied brakes, removing brush maintenance on S1 duty. Where brushed is preferred, our <a href="/products-pmdc-motors/">PMDC motors</a> from 15 W to 1,500 W provide the base motor.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. What type of motor is best for high torque at low speed?</h3>
<p>In most industrial machines the best choice is a <strong>geared motor</strong>: a PMDC or BLDC motor running at 1,500–3,000 rpm driving a planetary, helical or worm gearbox. The gearbox multiplies torque by the ratio times its efficiency, so a small motor delivers tens of newton-metres at the output. Direct-drive brushless torque motors make sense only where zero backlash or very low noise justifies their much larger size and cost.</p>

<h3>Q2. Can I reduce the voltage of a DC motor to get more torque at low speed?</h3>
<p>No. Lowering voltage lowers speed but does not raise torque, because torque is proportional to armature current (T = Kt × I) and continuous current is limited by winding temperature. At low speed the back-EMF is small, so most of the input becomes I²R heat: a motor held at rated torque at one-tenth of its rated speed converts well under half its input into shaft power, and its speed holding under load becomes poor.</p>

<h3>Q3. How do I calculate the gear ratio for a low-speed application?</h3>
<p>Divide the motor's <strong>loaded</strong> speed by the required output speed. A 3,000 rpm motor driving a 30 rpm load needs 100:1, while a 1,500 rpm motor needs 50:1. Then check the motor torque as output torque ÷ (ratio × gearbox efficiency). Round the ratio to a standard value and confirm the resulting output speed is within your process tolerance. Our <a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">gear ratio selection guide</a> covers rounding in detail.</p>

<h3>Q4. Is a worm gear motor a good choice for high torque at low speed?</h3>
<p>A worm gear motor is a good choice when you need a compact right-angle drive, a high ratio in one stage and resistance to back-driving, on intermittent duty. Its weakness is efficiency: high-ratio worms often run at 40–60 %, so the motor must be larger and the gearbox sheds more heat. A worm that is truly self-locking is below 50 % efficient, and it should never replace a brake on suspended loads.</p>

<h3>Q5. Planetary or spur gearbox: which is better for high torque?</h3>
<p>For the highest torque in the smallest envelope, a <strong>planetary gearbox</strong> is usually better, because several planet gears share the load and stages stack coaxially to high ratios at about 95–97 % efficiency per stage. Spur and helical parallel-shaft gearboxes are simpler, very efficient and tolerant of overhung loads, and helical teeth run quieter. For moderate torque and ratios, parallel-shaft gearing is often the more economical option.</p>

<h3>Q6. Do I need a brake if my gearbox is self-locking?</h3>
<p>Yes, wherever the load could move, fall or run back if the drive lets go. Self-locking depends on friction, which changes with lubrication, temperature, wear and vibration, so a worm can creep. A <strong>fail-safe electromagnetic brake</strong> sized at about twice the output holding torque divided by the gear ratio gives a defined holding torque, and suspended loads may also need output-side holding under the applicable lifting standard.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>High torque at low speed is a gearing problem disguised as a motor problem. Fix the output torque, speed, peak and duty; calculate output power; choose a motor base speed in the efficient region; then pick the ratio and gear type that balance efficiency, envelope and holding. Turning the voltage down gives a hot, inefficient motor with poor speed holding. For how the motor and gearbox stages work together, see our <a href="/blog/geared-pmdc-motor-working-benefits-applications-selection-guide/">geared PMDC motor selection guide</a>.</p>

<p>If you have a torque, speed and duty specification in hand, share it through our <a href="/contact-us/">engineering enquiry page</a> and our engineers will check ratio, gear type and brake sizing against standard and custom options.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Need High Torque at Low Speed for Your Machine?</strong></h3>
<p style="margin-bottom: 0;">Send us your output torque, speed, peak load, duty cycle and mounting envelope. Globe Scott engineers will check motor base speed, gear ratio, gear type and brake sizing across our PMDC, BLDC and geared motor ranges, and propose a standard or custom drive.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> High Torque Low Speed Motor, Geared Motors, Gear Reduction, PMDC Motors, BLDC Motors, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/compact-dc-motor-selection-limited-space/">
<h4 class="post-title">How to Choose the Right DC Motor When Space Inside Your Machine Is Limited</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/wrong-motor-voltage-problems-solutions/">
<h4 class="post-title">What Happens When You Choose the Wrong Motor Voltage? Common Problems and Solutions</h4>
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
<li><a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">Custom Geared PMDC Motors: Gear Ratio &amp; Torque</a></li>
<li><a href="/blog/geared-pmdc-motor-working-benefits-applications-selection-guide/">Geared PMDC Motor Selection Guide</a></li>
<li><a href="/blog/dc-motor-gear-ratio-selection-speed-too-high/">Gear Ratio Selection When Motor Speed Is Too High</a></li>
<li><a href="/blog/motor-gearbox-sizing-problems-output/">Motor and Gearbox Sizing Problems</a></li>
<li><a href="/blog/winch-motor-insufficient-torque-lifting-load/">Winch Motor Insufficient Torque: Causes &amp; Fixes</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">Low-Speed High-Torque Drive Sizing Worksheet</h3>
          <p class="gsm-modal-subtitle">Size a geared motor for high torque at low speed in five steps, from load definition through to brake and output-shaft checks.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Five-Step Sizing Method:</strong> Power, base speed, ratio, motor torque, peaks and holding</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Gear Type Table:</strong> Ratio, efficiency and back-driving for spur, helical, planetary and worm</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Fill-In Calculations:</strong> Ready formulas for brake torque and overhung shaft load</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="High Torque Low Speed DC Motor Selection Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Low-Speed High-Torque Drive Sizing Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/high-torque-low-speed-dc-motor-selection/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Drive Sizing Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Low-Speed High-Torque Drive Sizing Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/low-speed-high-torque-drive-sizing-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
