<?php
$current_page     = 'conveyor-motor-overload-heavy-loads';
$canonical_path   = 'blog/conveyor-motor-overload-heavy-loads/';
$page_title       = 'Conveyor Motor Overload: Causes, Fixes | Globe Scott Motors';
$meta_description = 'Conveyor motor overload explained: calculate belt pull and drum torque, find seized idlers, belt slip and restart problems, and size the right geared motor.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/conveyor-motor-overload-heavy-loads.jpg';
$body_class       = 'post-template-default single single-post postid-2424 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/"
      },
      "headline": "Why Does Your Conveyor Motor Struggle to Move Heavy Loads?",
      "name": "Why Does Your Conveyor Motor Struggle to Move Heavy Loads?",
      "description": "Conveyor motor overload explained: calculate belt pull and drum torque, find seized idlers, belt slip and restart problems, and size the right geared motor.",
      "url": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Conveyor Drives, Motor Troubleshooting, Material Handling",
      "keywords": "conveyor motor overload, conveyor motor sizing, conveyor belt pull calculation, conveyor gear motor, conveyor starting torque, inclined conveyor, conveyor belt slip",
      "wordCount": 2453,
      "image": {
        "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#primaryimage"
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
      "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#primaryimage",
      "url": "https://www.globescott.net/wp-content/uploads/2026/10/conveyor-motor-overload-heavy-loads.jpg",
      "contentUrl": "https://www.globescott.net/wp-content/uploads/2026/10/conveyor-motor-overload-heavy-loads.jpg",
      "width": 1200,
      "height": 675,
      "caption": "Calculating belt pull, drum torque and loaded restart torque for a geared DC motor driving a heavily loaded conveyor"
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#breadcrumb",
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
          "name": "Conveyor Motor Overload: Causes & Fixes",
          "item": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I calculate the motor size for a belt conveyor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Start with belt pull: friction coefficient × g × (product + belt + roller mass) × cos of the incline, plus product mass × g × sin of the incline. Multiply by drum radius for drum torque, divide by gear ratio × gearbox efficiency for motor torque, and multiply pull by belt speed for power. Then check a loaded restart, adding breakaway friction and acceleration, against the motor's peak torque."
          }
        },
        {
          "@type": "Question",
          "name": "Why does my conveyor motor stall only when restarting with a loaded belt?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Because starting needs more torque than running. A loaded restart must overcome static friction, commonly allowed for as 1.3–1.5 times running friction on roller beds, lift the full load on an incline and accelerate every moving mass at once. If the controller's current limit caps torque below that total, the motor hums and stalls. A longer soft-start ramp reduces the acceleration share; a larger motor may still be needed."
          }
        },
        {
          "@type": "Question",
          "name": "How much extra power does an inclined conveyor need?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lift power equals product mass × g × belt speed × sin of the incline angle, added to the friction power. On a roller-bed conveyor at 12°, lift adds about 2.0 N of pull per kilogram of product against roughly 0.4 N for friction, so lift usually dominates. Inclined conveyors also need a holding brake or backstop, because a parallel-shaft gearbox will let a loaded belt run back."
          }
        },
        {
          "@type": "Question",
          "name": "How can I tell if the conveyor belt is slipping or the motor is overloaded?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Chalk-mark the belt and the drive drum and watch them under load. If the drum keeps turning while the belt stalls or creeps, the belt is slipping: restore take-up tension, dry or re-lag the drum, or increase wrap with a snub pulley. If drum and belt stop together and motor current climbs to the limit, the drive itself is overloaded and the pull calculation needs revisiting."
          }
        },
        {
          "@type": "Question",
          "name": "Will a soft start fix conveyor motor overload?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A soft start fixes restart failures caused by acceleration, not running overload. Stretching the ramp from 0.5 s to 2 s cuts the acceleration force by three-quarters, which can bring a loaded restart within the current limit. It does nothing for running torque above the continuous rating, so a motor that overheats in normal running still needs mechanical fixes, a ratio change or a larger geared motor."
          }
        },
        {
          "@type": "Question",
          "name": "What gear ratio should a conveyor gear motor use?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Divide the motor's loaded speed by the drum speed, where drum speed in rpm is 60 × belt speed ÷ (π × drum diameter). A 0.30 m/s belt on a 150 mm drum needs 38 rpm, so a motor running near 2,300 rpm under load needs about 60:1. Use the loaded motor speed, not the no-load speed, and remember that any ratio change also alters belt speed and throughput."
          }
        },
        {
          "@type": "Question",
          "name": "Can seized conveyor rollers really overload the motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A free-turning roller adds rolling resistance equivalent to a friction coefficient of about 0.03–0.05, but a seized one makes the belt slide over it at 0.3 or more, roughly eight times the drag. On a short roller-bed conveyor, two or three seized rollers can add more drag than all the other rollers combined. Walk the line, replace stuck rollers and re-check empty-belt current."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/",
      "url": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/",
      "name": "Conveyor Motor Overload: Causes, Fixes | Globe Scott Motors",
      "description": "Conveyor motor overload explained: calculate belt pull and drum torque, find seized idlers, belt slip and restart problems, and size the right geared motor.",
      "inLanguage": "en-IN",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/#primaryimage"
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
<h1>Why Does Your Conveyor Motor Struggle to Move Heavy Loads?</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active" aria-current="page">Conveyor Motor Overload: Causes &amp; Fixes</li></ol> </nav>
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
<article class="post-2424 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-engineering tag-conveyor-motor tag-conveyor-sizing tag-geared-motors tag-material-handling tag-motor-troubleshooting tag-globe-scott-motors" id="post-2424">

<img alt="Loaded belt conveyor driven by a geared DC motor, illustrating conveyor motor overload when moving heavy loads" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/conveyor-motor-overload-heavy-loads.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Troubleshooting, Material Handling, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>A belt conveyor that runs happily when empty but labours, stalls or trips once it is loaded is showing the classic symptoms of <strong>conveyor motor overload</strong>. The geared motor hums at restart with a full belt, the controller drops out on over-current, the belt slows on the incline, or the motor housing is too hot to touch by mid-shift. Sometimes the motor really is too small for the duty. Just as often it is being asked to drag seized idlers, a slipping belt or a queue of product that the original sizing never included.</p>

<p>This guide works through belt pull and drum torque, the mechanical and electrical causes that inflate them, and the fixes in order of cost: from idler maintenance and soft-start ramps to re-ratioing or fitting a larger <a href="/products-geared-motors/">industrial geared motor</a>. A full worked example sizes the drive for an inclined sack conveyor.</p>

<div class="alert alert-info gsm-quick-summary" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Summary:</strong> A conveyor motor struggles with heavy loads when the drum torque needed for the required belt pull exceeds what the geared motor can deliver. That pull is the friction of everything that moves, plus incline lift, plus breakaway and acceleration on a loaded restart. The usual culprits are loaded restarts, incline lift, seized idlers, product accumulating against a stop, belt slip, a wrong ratio or drum size, and voltage drop. Calculate the pull, fix the mechanics, then re-ratio, soft-start or upsize.
</div>

<h2>How Much Pull Does a Loaded Conveyor Need?</h2>

<p>For a belt conveyor, the effective pull at the drive drum is the friction resistance plus the force needed to lift the load:</p>

<div class="gsm-equation">\[ F = \mu\, g\,(m_L + m_B + m_R)\cos\theta + m_L\, g \sin\theta \]</div>

<p>Here \( m_L \) is the mass of product on the belt at any moment, \( m_B \) the total belt mass, \( m_R \) the rotating mass of rollers and idlers, \( \theta \) the incline angle and \( \mu \) the equivalent friction coefficient. Only the product appears in the lift term, because the carrying and return strands of the belt balance each other. Drum torque, motor torque through the gearbox and drum speed then follow:</p>

<div class="gsm-equation">\[ T_{drum} = \frac{F D}{2}, \qquad T_m = \frac{F D}{2\, i\, \eta_g}, \qquad N_{drum} = \frac{60\, v}{\pi D} \]</div>

<p>The friction coefficient depends heavily on construction, which is why a slider-bed conveyor needs several times the drive of a roller-bed conveyor carrying the same product:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 20px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr><th>Construction or Contact</th><th>Typical μ</th><th>Notes</th></tr>
</thead>
<tbody>
<tr><td><strong>Slider bed</strong> (belt sliding on a steel or wooden pan)</td><td>0.25–0.45</td><td>Depends on belt underside and bed finish; rises with dust and moisture</td></tr>
<tr><td><strong>Roller bed</strong> (belt on carrying rollers)</td><td>0.03–0.05</td><td>Assumes free-turning rollers; a few seized ones can double it</td></tr>
<tr><td><strong>Troughed idlers</strong> (bulk material)</td><td>0.02–0.03</td><td>Long conveyors; formal methods add secondary resistances</td></tr>
<tr><td><strong>Product sliding on belt</strong> (accumulation)</td><td>0.3–0.6</td><td>Depends on belt cover and packaging</td></tr>
</tbody>
</table>
</div>

<p>These are typical design ranges; use the belt manufacturer's figures where you have them. The general power and ratio method is covered in our guide to <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">choosing motor power, RPM and gear ratio</a>.</p>

<hr/>

<h2>Diagnosing Conveyor Motor Overload: Seven Common Causes</h2>

<h3>1. Restarting a Fully Loaded Belt</h3>

<p>Running pull is not starting pull. After a stoppage with product on the belt, the drive must overcome static friction (designers commonly allow 1.3–1.5 times running friction on roller beds, more on slider beds) while accelerating the whole moving mass. On an incline the full lift term is present from the first millimetre. A motor sized only for running pull hums and stalls, or sits on current limit until the controller trips. Frequent stops add heating on top; see our guide to choosing a <a href="/blog/motor-for-frequent-start-stop-applications/">motor for frequent start-stop duty</a>.</p>

<h3>2. Incline Lift on Heavier Product</h3>

<p>On an incline the lift component \( m_L g \sin\theta \) usually dwarfs friction. At 12°, each extra kilogram of product on a roller-bed belt adds about 2.0 N of lift but only 0.4 N of friction, so moving to heavier sacks raises the pull far more than friction figures suggest.</p>

<h3>3. Seized Idlers, Misalignment and Tracking Drag</h3>

<p>A roller with a collapsed bearing stops rolling and becomes a brake: the belt slides over it at a friction coefficient of 0.3 or more instead of about 0.04. Mistracking adds edge drag against frames; over-tight skirt rubbers and scrapers add a steady load that never appeared in the design calculation. Walk the running conveyor looking for stationary rollers, polished flats and belt-edge wear, and scan bearings with an infrared thermometer.</p>

<h3>4. Product Accumulating Against a Stop</h3>

<p>When product is held by a stop gate or a blocked discharge while the belt keeps running, the belt slides underneath it, adding \( F_{acc} = \mu_p\, m_{acc}\, g \). Sixty kilograms of cartons queued on a rubber-covered belt can add 180–350 N, more than the entire running pull of a short roller-bed conveyor.</p>

<h3>5. Belt Slip at the Drive Drum</h3>

<p>If the drum keeps turning while the belt stops, the problem is traction, not torque. The pull a drum can transmit is limited by the Euler–Eytelwein relation:</p>

<div class="gsm-equation">\[ \frac{T_1}{T_2} \le e^{\mu_d \phi}, \qquad F = T_1 - T_2 \]</div>

<p>\( T_1 \) and \( T_2 \) are the tight- and slack-side tensions, \( \mu_d \) the belt-to-drum friction and \( \phi \) the wrap angle in radians. With 180° wrap and \( \mu_d = 0.3 \) on a lagged drum, \( e^{\mu_d\phi} \approx 2.57 \), so the slack side needs at least \( F/1.57 \). Lost take-up tension, a wet or glazed drum, or a heavier load pushes the pull past this limit. A bigger motor will only spin the drum faster.</p>

<h3>6. Wrong Gear Ratio or a Larger Drum</h3>

<p>Motor torque rises in proportion to drum diameter and falls with gear ratio. Lagging a 150 mm drum up to 170 mm raises the required motor torque, and belt speed, by 13 %. Swapping in a faster ratio to gain throughput does the same.</p>

<h3>7. Voltage Drop at the Motor Terminals</h3>

<p>A PMDC motor's stall torque is \( T_{stall} = K_t V/R_a \) and its speed falls with voltage, so a supply that sags at start-up (long cable runs, undersized conductors, or a simple rectifier on a fluctuating grid) cuts breakaway capability and running speed together. Measure at the motor terminals during a loaded start. Our guide to <a href="/blog/wrong-motor-voltage-problems-solutions/">wrong motor voltage problems</a> covers the effects in detail.</p>

<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Field Rule of Thumb:</strong><br/>
Split the problem with two current readings. Log motor current with the belt running empty, then fully loaded. Empty-belt current well above its commissioning value points to mechanical drag: idlers, alignment, skirting or the gearbox. A normal empty reading with a high loaded reading means the product load itself, or accumulation, has outgrown the drive.
</div>

<hr/>

<h2>Conveyor Overload Diagnostic Matrix</h2>

<p>Match what you see on the conveyor to a likely cause and a quick check before changing anything:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Observed Symptom</th><th>Most Likely Cause</th><th>Verification Check</th><th>Corrective Action</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Stalls on restart with full belt, runs once moving</strong></td><td>Breakaway plus acceleration exceed current-limited torque</td><td>Current sits at limit during restart</td><td>Soft-start ramp; larger motor if running torque is also high</td></tr>
<tr><td><strong>High current with empty belt</strong></td><td>Seized idlers, mistracking, tight skirting, gearbox drag</td><td>Empty current against commissioning value; IR scan</td><td>Replace rollers, re-track, adjust skirts</td></tr>
<tr><td><strong>Current climbs as product queues</strong></td><td>Accumulation drag</td><td>Current against queue length</td><td>Stop belt on a queue sensor; low-friction belt cover</td></tr>
<tr><td><strong>Drum turns, belt stops or stutters</strong></td><td>Belt slip: low take-up tension, wet or glazed drum</td><td>Chalk marks on belt and drum</td><td>Re-tension, re-lag, add a snub pulley</td></tr>
<tr><td><strong>Belt slows on incline, motor hot</strong></td><td>Load or incline beyond design; wrong ratio or drum</td><td>Recalculate pull; running torque against rating</td><td>Re-ratio if throughput allows; larger geared motor</td></tr>
<tr><td><strong>Weak start at end of long cable run</strong></td><td>Voltage drop at terminals</td><td>Terminal voltage during loaded start</td><td>Larger cable; stable supply</td></tr>
<tr><td><strong>Belt runs back when stopped</strong></td><td>No holding brake</td><td>Observe a loaded stop</td><td>Fail-safe brake or backstop</td></tr>
</tbody>
</table>
</div>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">&#9889; Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the Conveyor Drive Sizing and Overload Check Worksheet</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">A printable worksheet to calculate running pull, drum torque and loaded restart torque, run the mechanical checks before upsizing, and size the geared motor, ratio and holding brake.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Worked Example: Inclined Sack Conveyor</h2>

<p>In this illustrative example, a roller-bed belt conveyor lifts sacks into a loading bay: 6 m long, 12° incline, 0.30 m/s belt speed, 150 mm drive drum, \( \mu = 0.04 \), belt mass 19 kg, rotating roller mass 24 kg. It was sized for 15 kg sacks at 1 m pitch (six on the belt, 90 kg) and now carries 25 kg sacks (150 kg). The drive is a 24 V PMDC geared motor at 60:1 (\( \eta_g = 0.85 \)) rated 0.45 Nm continuous, rotor inertia \( 2.0 \times 10^{-4}\,\mathrm{kg\,m^2} \), with the controller current limit giving about 0.80 Nm. It runs hot and will not restart with a full belt.</p>

<h4>Running Pull</h4>

<div class="gsm-equation">\[ F = 0.04 \times 9.81 \times 193 \times \cos 12^\circ + 150 \times 9.81 \times \sin 12^\circ = 74 + 306 = 380\,\mathrm{N} \]</div>

<p>Drum torque is \( 380 \times 0.075 = 28.5\,\mathrm{Nm} \) and motor torque \( 28.5/(60 \times 0.85) = 0.56\,\mathrm{Nm} \), 124 % of rating. The drum turns at \( 60 \times 0.30/(\pi \times 0.15) = 38.2\,\mathrm{rpm} \), so the motor runs at about 2,290 rpm and delivers 134 W. With the original 15 kg sacks the same sum gives 235 N and 0.35 Nm, 77 % of rating, which is why it worked at commissioning.</p>

<h4>Loaded Restart</h4>

<p>Allowing 1.5 times running friction at breakaway (111 N), the full lift (306 N) and acceleration to 0.30 m/s in 0.5 s, which takes \( 193 \times 0.6 = 116\,\mathrm{N} \):</p>

<div class="gsm-equation">\[ T_{start} = \frac{533 \times 0.075}{51} + 2.0 \times 10^{-4} \times \frac{240}{0.5} = 0.784 + 0.096 = 0.88\,\mathrm{Nm} \]</div>

<p>That exceeds the 0.80 Nm available, so the motor stalls on current limit. A 2 s ramp cuts the acceleration force to 29 N and the rotor term to 0.024 Nm, bringing the restart to 0.68 Nm: it starts, but still overheats.</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Case</th><th>Belt Pull</th><th>Motor Torque</th><th>Against Limit</th><th>Result</th>
</tr>
</thead>
<tbody>
<tr><td><strong>15 kg sacks, running</strong></td><td>235 N</td><td>0.35 Nm</td><td>77 % of rating</td><td>Worked at commissioning</td></tr>
<tr><td><strong>25 kg sacks, running</strong></td><td>380 N</td><td>0.56 Nm</td><td>124 % of rating</td><td>Overheats</td></tr>
<tr><td><strong>25 kg, restart in 0.5 s</strong></td><td>533 N</td><td>0.88 Nm</td><td>110 % of current limit</td><td>Stalls</td></tr>
<tr><td><strong>25 kg, restart with 2 s ramp</strong></td><td>446 N</td><td>0.68 Nm</td><td>85 % of current limit</td><td>Starts, still overheats</td></tr>
</tbody>
</table>
</div>

<h4>Selecting the Fix</h4>

<p>Re-ratioing to 75:1 brings running torque to 0.45 Nm, exactly the rating with no margin, and drops belt speed to 0.24 m/s, cutting throughput from 1,080 to 864 sacks per hour. Rejected. The answer is a larger geared motor at the same 60:1 ratio, with continuous rating of at least \( 0.56 \times 1.25 = 0.70\,\mathrm{Nm} \) at about 2,300 rpm (roughly 170 W), keeping the 2 s ramp. A frame from our A92 150–400 W geared range, which includes 60:1, keeps belt speed unchanged. Check the gearbox against the 33 Nm drum-side restart torque; our guide to <a href="/blog/motor-gearbox-sizing-problems-output/">motor gearbox sizing problems</a> explains why.</p>

<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px; margin: 20px 0;">
<strong>Design Guidance:</strong><br/>
A loaded incline conveyor will run backwards if the drive lets go when power is lost. Conservatively ignoring friction and gear losses, the six sacks apply \( 306 \times 0.075/60 = 0.38\,\mathrm{Nm} \) at the motor shaft. A parallel-shaft gearbox will back-drive, so specify a fail-safe electromagnetic brake (brakes are an option on our geared motors) or a mechanical backstop rated comfortably above this.
</div>

<hr/>

<h2>Fixes in Order of Cost</h2>

<ol>
<li><strong>Mechanical maintenance:</strong> free or replace rollers, re-track the belt, relieve skirting, restore take-up tension. Cheapest, and often enough.</li>
<li><strong>Control changes:</strong> soft-start and stop ramps on the DC speed controller, a current limit matched to the motor's permitted peak, and queue sensors that stop the belt instead of letting product accumulate.</li>
<li><strong>Re-ratio:</strong> only where throughput can tolerate the lower belt speed.</li>
<li><strong>Larger geared motor and brake:</strong> when running torque exceeds the continuous rating, re-size the drive and, on inclines, add a fail-safe brake. Our guide to <a href="/blog/motor-insufficient-torque-under-load-how-to-choose/">choosing a motor when a machine cannot handle the load</a> sets out the full re-sizing method.</li>
<li><strong>BLDC geared drive:</strong> for long continuous duty with tight speed regulation and no brush maintenance, our <a href="/products-bldc-motors/">BLDC motors</a> with matched drivers suit conveyors well.</li>
</ol>

<p>For conveyors still on the drawing board, our overview of <a href="/blog/electric-motors-for-material-handling-equipment-types-selection/">motors for material handling equipment</a> and the guide to avoiding <a href="/blog/undersized-motor-problems-how-to-avoid/">undersized motor problems</a> help you get the sizing right first time.</p>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How do I calculate the motor size for a belt conveyor?</h3>
<p>Start with belt pull: friction coefficient × g × (product + belt + roller mass) × cos of the incline, plus product mass × g × sin of the incline. Multiply by drum radius for drum torque, divide by gear ratio × gearbox efficiency for motor torque, and multiply pull by belt speed for power. Then check a loaded restart, adding breakaway friction and acceleration, against the motor's peak torque.</p>

<h3>Q2. Why does my conveyor motor stall only when restarting with a loaded belt?</h3>
<p>Because starting needs more torque than running. A loaded restart must overcome static friction, commonly allowed for as 1.3–1.5 times running friction on roller beds, lift the full load on an incline and accelerate every moving mass at once. If the controller's current limit caps torque below that total, the motor hums and stalls. A longer soft-start ramp reduces the acceleration share; a larger motor may still be needed.</p>

<h3>Q3. How much extra power does an inclined conveyor need?</h3>
<p>Lift power equals product mass × g × belt speed × sin of the incline angle, added to the friction power. On a roller-bed conveyor at 12°, lift adds about 2.0 N of pull per kilogram of product against roughly 0.4 N for friction, so lift usually dominates. Inclined conveyors also need a holding brake or backstop, because a parallel-shaft gearbox will let a loaded belt run back.</p>

<h3>Q4. How can I tell if the conveyor belt is slipping or the motor is overloaded?</h3>
<p>Chalk-mark the belt and the drive drum and watch them under load. If the drum keeps turning while the belt stalls or creeps, the belt is slipping: restore take-up tension, dry or re-lag the drum, or increase wrap with a snub pulley. If drum and belt stop together and motor current climbs to the limit, the drive itself is overloaded and the pull calculation needs revisiting.</p>

<h3>Q5. Will a soft start fix conveyor motor overload?</h3>
<p>A soft start fixes restart failures caused by acceleration, not running overload. Stretching the ramp from 0.5 s to 2 s cuts the acceleration force by three-quarters, which can bring a loaded restart within the current limit. It does nothing for running torque above the continuous rating, so a motor that overheats in normal running still needs mechanical fixes, a ratio change or a larger geared motor.</p>

<h3>Q6. What gear ratio should a conveyor gear motor use?</h3>
<p>Divide the motor's loaded speed by the drum speed, where drum speed in rpm is 60 × belt speed ÷ (π × drum diameter). A 0.30 m/s belt on a 150 mm drum needs 38 rpm, so a motor running near 2,300 rpm under load needs about 60:1. Use the loaded motor speed, not the no-load speed, and remember that any ratio change also alters belt speed and throughput.</p>

<h3>Q7. Can seized conveyor rollers really overload the motor?</h3>
<p>Yes. A free-turning roller adds rolling resistance equivalent to a friction coefficient of about 0.03–0.05, but a seized one makes the belt slide over it at 0.3 or more, roughly eight times the drag. On a short roller-bed conveyor, two or three seized rollers can add more drag than all the other rollers combined. Walk the line, replace stuck rollers and re-check empty-belt current.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>

<p>A conveyor motor that struggles with heavy loads is telling you the belt pull has grown past what the drive was sized for. Calculate the pull for running and for a loaded restart, separate mechanical drag from genuine load growth with an empty-belt current reading, fix slip and accumulation first, and only then choose between a ramp, a ratio change and a larger geared motor with a brake.</p>

<p>Send us your conveyor length, incline, belt speed, drum diameter, product mass and pitch, and current readings through our <a href="/contact-us/">engineering enquiry page</a>, and our engineers will help you size the drive with proper restart and thermal margins.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Is Your Conveyor Drive Running at Its Limit?</strong></h3>
<p style="margin-bottom: 0;">Send our engineers the conveyor length, incline, belt speed, drum diameter, product mass and pitch, and your running and restart current readings. We will help you size a geared motor, ratio and brake with proper restart and thermal margins for your duty.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Conveyor Motor, Conveyor Sizing, Geared Motors, Material Handling, Motor Troubleshooting, Globe Scott Motors
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/motor-insufficient-torque-under-load-how-to-choose/">
<h4 class="post-title">How to Choose a Motor When Your Machine Cannot Handle the Required Load</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/dc-motor-speed-fluctuation-solutions/">
<h4 class="post-title">How to Solve Speed Fluctuations in Motor-Driven Machinery</h4>
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
<li><a href="/blog/motor-gearbox-sizing-problems-output/">Motor and Gearbox Sizing Problems</a></li>
<li><a href="/blog/motor-for-frequent-start-stop-applications/">Motors for Frequent Start-Stop Applications</a></li>
<li><a href="/blog/electric-motors-for-material-handling-equipment-types-selection/">Motors for Material Handling Equipment</a></li>
<li><a href="/blog/geared-pmdc-motor-working-benefits-applications-selection-guide/">Geared PMDC Motor Selection Guide</a></li>
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
          <h3 id="gsmModalTitle" class="gsm-modal-title">Conveyor Drive Sizing and Overload Check Worksheet</h3>
          <p class="gsm-modal-subtitle">Step-by-step belt pull, restart torque and mechanical checks for belt conveyors driven by geared DC motors, with typical friction coefficients.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <span><strong>Belt Pull Calculator:</strong> Friction and incline lift turned into drum and motor torque</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Loaded Restart Check:</strong> Breakaway, acceleration and rotor terms against the current limit</span></li>
          <li><i class="fa fa-check-circle"></i> <span><strong>Before-You-Upsize List:</strong> Idlers, slip, accumulation and voltage checks that cost little</span></li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="Conveyor Motor Overload: Causes &amp; Fixes Lead Magnet">
          <input type="hidden" name="lead_magnet" value="Conveyor Drive Sizing and Overload Check Worksheet">
          <input type="hidden" name="page_url" value="https://www.globescott.net/blog/conveyor-motor-overload-heavy-loads/">
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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your Conveyor Worksheet is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the Conveyor Drive Sizing and Overload Check Worksheet immediately below.</p>

        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/conveyor-drive-sizing-overload-worksheet.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
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
