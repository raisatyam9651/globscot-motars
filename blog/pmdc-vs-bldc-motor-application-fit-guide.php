<?php
$current_page     = 'pmdc-vs-bldc-motor-application-fit-guide';
$canonical_path   = 'blog/pmdc-vs-bldc-motor-application-fit-guide/';
$page_title       = 'PMDC vs BLDC Motor Selection Guide | Globe Scott Motors';
$meta_description = 'PMDC vs BLDC motor selection on real criteria: torque curve, duty cycle, controller cost and 5-year brush wear economics, plus a decision checklist.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/09/pmdc-vs-bldc-motor-selection-guide.jpg';
$body_class       = 'post-template-default single single-post postid-2413 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/"
      },
      "headline": "PMDC vs BLDC Motors: Which One Actually Fits Your Application",
      "name": "PMDC vs BLDC Motors: Which One Actually Fits Your Application",
      "description": "PMDC vs BLDC motor selection on real criteria: torque curve, duty cycle, controller cost and 5-year brush wear economics, plus a decision checklist.",
      "url": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/",
      "datePublished": "2026-09-01",
      "dateModified": "2026-09-01",
      "inLanguage": "en-IN",
      "articleSection": "PMDC Motors, BLDC Motors, Motor Selection",
      "keywords": "PMDC vs BLDC motor, permanent magnet DC motor, brushless DC motor industrial, motor selection guide",
      "wordCount": 1500,
      "image": {
        "@type": "ImageObject",
        "url": "https://www.globescott.net/wp-content/uploads/2026/09/pmdc-vs-bldc-motor-selection-guide.jpg",
        "width": 1200,
        "height": 675,
        "caption": "Permanent magnet DC geared motor on a workbench during application selection review"
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
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/#breadcrumb",
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
          "name": "PMDC vs BLDC Application Fit",
          "item": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is a PMDC or BLDC motor better for my application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Start with annual running hours. Under about 2,000 hours a year a brushed PMDC motor is usually the better economic choice. Above roughly 4,000 hours, brush replacement intervals and efficiency losses make a brushless motor the stronger option. Access cost and whether your product already contains a microcontroller decide the middle ground."
          }
        },
        {
          "@type": "Question",
          "name": "What does the PMDC torque-speed curve look like?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A straight line. Torque is proportional to armature current and speed to back-EMF, so the characteristic runs from stall torque at zero speed to no-load speed at zero torque. Maximum mechanical power occurs at half stall torque and half no-load speed."
          }
        },
        {
          "@type": "Question",
          "name": "Why does a PMDC motor self-regulate under load?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When load increases the motor slows, which reduces back-EMF, which increases armature current, which increases torque. The loop is inherent in the physics and needs no sensor, feedback or firmware, which is why brushed motors handle obstructions and load steps gracefully."
          }
        },
        {
          "@type": "Question",
          "name": "How much does the controller add to a BLDC system?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A brushless motor cannot run from a plain DC supply, so the three-phase inverter, position sensing, firmware and the associated EMC work are all part of the drive rather than optional extras. On low volumes this may be immaterial; on high volumes it is a programme-level cost."
          }
        },
        {
          "@type": "Question",
          "name": "At what running hours does brushless become worth it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "As a rough guide, above about 4,000 hours a year the brush replacement schedule and efficiency gap usually justify brushless. Between 2,000 and 4,000 hours the deciding factor is normally how expensive it is to access the motor for a planned service stoppage."
          }
        },
        {
          "@type": "Question",
          "name": "Can a PMDC motor run at high speed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not comfortably above roughly 10,000 RPM. At high speed the brushes begin to bounce on the commutator and contact heating becomes limiting. Above that threshold a brushless machine is effectively the only viable option."
          }
        },
        {
          "@type": "Question",
          "name": "Which motor has higher starting torque?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A PMDC motor delivers very high stall torque, limited only by supply voltage and armature resistance, with no special control. A brushless motor can match it but needs a current-limiting driver to do so without risking demagnetisation."
          }
        },
        {
          "@type": "Question",
          "name": "Do you manufacture both PMDC and BLDC motors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Globe Scott Motors builds permanent magnet brushed DC motors from 25 W to 3000 W and brushless DC motors to customer specification, both at our plant in Killa Pardi, Gujarat. We have no commercial reason to steer a customer toward one topology over the other."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/",
      "url": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/",
      "name": "PMDC vs BLDC Motor Selection Guide | Globe Scott Motors",
      "description": "PMDC vs BLDC motor selection on real criteria: torque curve, duty cycle, controller cost and 5-year brush wear economics, plus a decision checklist.",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/pmdc-vs-bldc-motor-application-fit-guide/#article"
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
<h1>PMDC vs BLDC Motors: Which One Actually Fits Your Application</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active">PMDC vs BLDC Application Fit</li></ol> </nav>
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
<article class="post-2413 post type-post status-publish format-standard has-post-thumbnail hentry category-pmdcmotors category-bldcmotor tag-pmdc-vs-bldc tag-motor-selection-guide" id="post-2413">
<img alt="Permanent magnet DC geared motor on a workbench during application selection review" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/09/pmdc-vs-bldc-motor-selection-guide.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>
<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>September 1, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>PMDC Motors, BLDC Motors, Motor Selection</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>
<div class="blog-inner-blog">

<p>Most PMDC versus BLDC decisions are made by default. The team used a brushed motor last time, it worked, so the new design gets one too. Occasionally the opposite happens and a brushless motor is specified because it sounds more modern.</p>

<p>Both defaults are wrong roughly half the time. Here are the four criteria that actually decide it: torque curve behaviour, duty cycle, controller cost and five-year wear economics.</p>

<h2>1. How a PMDC Motor Is Built, and Where Its Torque Curve Helps You</h2>

<p>In a permanent magnet DC motor, ferrite or neodymium magnets are bonded to the stationary housing and provide the field. The armature windings rotate, and current reaches them through carbon brushes sliding on a segmented copper commutator. Construction detail is in our explainer on <a href="/what-is-pmdc-motor/">how a PMDC motor works</a>.</p>

<p>Because the field is constant, the behaviour is unusually simple. Torque is proportional to armature current, and speed is proportional to back-EMF:</p>

<p><strong>T = K<sub>t</sub> &times; I<sub>a</sub></strong> &nbsp;&nbsp;and&nbsp;&nbsp; <strong>&omega; = (V &minus; I<sub>a</sub>R<sub>a</sub>) / K<sub>e</sub></strong></p>

<p>Eliminate current between them and the torque-speed characteristic is a straight line, running from stall torque at zero speed down to no-load speed at zero torque:</p>

<ul>
<li><strong>Stall torque:</strong> T<sub>stall</sub> = K<sub>t</sub>V / R<sub>a</sub></li>
<li><strong>No-load speed:</strong> &omega;<sub>0</sub> = V / K<sub>e</sub></li>
<li><strong>Maximum mechanical power</strong> occurs at half stall torque and half no-load speed</li>
</ul>

<p>Three practical consequences follow:</p>

<p><strong>It self-regulates against load.</strong> Add load and the motor slows, back-EMF falls, current rises, torque rises. That happens with no sensing, no feedback and no firmware. For a barrier that meets an obstruction or a conveyor that starts under load, this is genuinely useful behaviour you get for free.</p>

<p><strong>Speed control is a voltage knob.</strong> Change V and the whole curve shifts, keeping its slope. A low-cost PWM chopper is a complete variable-speed drive.</p>

<p><strong>Stall torque is very high.</strong> Limited only by winding resistance, which is why brushed motors punch above their weight on starting torque. It is also why sustained stall will cook them, since all that current becomes heat in the armature.</p>

<p>Our <a href="/products-pmdc-motors/">PMDC motor range covers 25 W to 3000 W</a> across 12 V DC to 220 V DC.</p>

<h2>2. How a BLDC Motor Is Built, and Where Controller Cost Changes the Equation</h2>

<p>A brushless motor inverts the architecture. Windings sit on the stationary outer stator, magnets rotate on the rotor, and commutation is performed electronically by a three-phase inverter switching in sync with Hall sensor or back-EMF feedback. Background is in <a href="/what-is-bldc-motor/">what a BLDC motor is</a>.</p>

<p>Two structural advantages follow. Heat is generated in the outer stator and conducts straight into the casing rather than radiating across an air gap, which makes continuous-duty thermal behaviour markedly better. And with no brush friction or contact voltage drop, efficiency lands in the <strong>85&ndash;95%</strong> band against <strong>78&ndash;88%</strong> for a brushed machine.</p>

<p>The cost story is where designers get caught out. A BLDC motor <em>cannot</em> run from a plain DC supply. The inverter is not an accessory, it is part of the motor. So the honest comparison is:</p>

<p><strong>PMDC system = motor + (optional PWM chopper)</strong><br/>
<strong>BLDC system = motor + inverter + sensors + firmware + EMC work</strong></p>

<p>On a one-off machine that difference may be immaterial. Across ten thousand units it is a programme-level decision. Our <a href="/products-bldc-motors/">BLDC motor range</a> is built to customer specification where the duty justifies that investment.</p>

<h2>3. Duty Cycle: The Criterion That Usually Decides It</h2>

<p>If you take one thing from this article, take this. The single most predictive variable is <strong>annual running hours</strong>.</p>

<table class="table table-bordered table-striped">
<thead>
<tr><th>Duty</th><th>Annual Hours</th><th>Brush Changes in 10 Years</th><th>Sensible Choice</th></tr>
</thead>
<tbody>
<tr><td>Occasional actuation (S3)</td><td>&lt; 200</td><td>Likely none</td><td>PMDC, clearly</td></tr>
<tr><td>Intermittent duty (S3)</td><td>200&ndash;1,000</td><td>0 to 2</td><td>PMDC</td></tr>
<tr><td>Single shift (S1)</td><td>~2,000</td><td>4 to 6</td><td>Depends on access cost</td></tr>
<tr><td>Two shift (S1)</td><td>~4,000</td><td>8 to 13</td><td>BLDC usually</td></tr>
<tr><td>Three shift (S1)</td><td>6,000&ndash;8,000</td><td>12 to 26</td><td>BLDC, clearly</td></tr>
</tbody>
</table>

<p>The table assumes industrial copper-graphite brushes lasting 3,000 to 5,000 hours. Notice how quickly the picture changes between rows three and five. A machine at 200 hours a year may never need a brush change in its entire service life. The same motor at 7,000 hours a year needs one roughly every six months.</p>

<p>Thermal duty matters too. Continuous S1 loading is precisely the condition where a brushed motor's rotor-mounted windings struggle to shed heat, which feeds back into insulation life as covered in <a href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">motor insulation classes explained</a>.</p>

<h2>4. Maintenance and Brush Wear: The Real Five-Year Cost Difference</h2>

<p>The part cost of a brush set is trivial. The cost that matters is access.</p>

<p>At 2,000 hours a year, expect two to three brush replacements over five years plus probably one commutator skim and mica undercut. Each is a planned stoppage. The question is what a planned stoppage costs on <em>your</em> machine:</p>

<p><strong>5-year brushed cost = (brush sets &times; part cost) + (stoppages &times; labour) + (stoppages &times; downtime) + commutator service</strong></p>

<p>On a floor-standing machine in an accessible plant, that total is small and brushed wins comfortably. On a motor at height, inside a sealed assembly, in a remote installation, or embedded in a production line where a stoppage halts output, the same total can dwarf the price of a brushless system. The detailed breakdown is in <a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">the brushed versus brushless maintenance comparison</a>, and energy cost sits on top of it, worked through in <a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">motor efficiency ratings explained</a>.</p>

<h2>A Simple Decision Checklist</h2>

<p>Score each line. Majority wins, and any single "must" overrides the rest.</p>

<table class="table table-bordered table-striped">
<thead>
<tr><th>Question</th><th>Points to PMDC</th><th>Points to BLDC</th></tr>
</thead>
<tbody>
<tr><td>Annual running hours</td><td>Under 2,000</td><td>Over 4,000</td></tr>
<tr><td>Is the motor easy to reach for service?</td><td>Yes</td><td>No</td></tr>
<tr><td>Does the product already contain a microcontroller?</td><td>No</td><td>Yes</td></tr>
<tr><td>Production volume</td><td>High, cost-critical</td><td>Low to moderate</td></tr>
<tr><td>Peak speed required</td><td>Under 10,000 RPM</td><td>Over 10,000 RPM (must)</td></tr>
<tr><td>Environment</td><td>Normal industrial</td><td>Cleanroom or explosive (must)</td></tr>
<tr><td>Is the product sold on an efficiency rating?</td><td>No</td><td>Yes</td></tr>
<tr><td>Battery powered with runtime as a headline spec?</td><td>No</td><td>Yes</td></tr>
<tr><td>Is high stall torque from a simple supply needed?</td><td>Yes</td><td>No</td></tr>
</tbody>
</table>

<h2>Where Each Ends Up in Practice</h2>

<p>Brushed permanent magnet motors dominate <a href="/blog/dc-motors-for-automatic-doors-and-gates-selection-guide/">automatic doors and gates</a>, <a href="/blog/dc-gear-motors-for-winches-torque-speed-load-selection-guide/">winches and hoists</a>, <a href="/blog/electric-motors-for-material-handling-equipment-types-selection/">material handling equipment</a> and the <a href="/products-pmdc-transaxle/">transaxle drives</a> used in <a href="/blog/motors-for-industrial-cleaning-machines-pmdc-transaxle-applications/">industrial cleaning machines</a>. Brushless wins in continuous ventilation, high-speed spindles, battery-powered mobile equipment and anything sold on an energy label.</p>

<p>Globe Scott Motors builds both at Killa Pardi, so if you are genuinely undecided, we have no stake in which way it goes. Send the duty profile and we will tell you what the numbers say. If you are still shortlisting suppliers, our <a href="/blog/select-industrial-motor-manufacturer-in-india-custom-requirements/">guide to selecting an industrial motor manufacturer in India</a> is a useful next read.</p>

<hr/>

<h2>Frequently Asked Questions</h2>

<h3>Q1. Is a PMDC or BLDC motor better for my application?</h3>
<p>Start with annual running hours. Under about 2,000 hours a year a brushed PMDC motor is usually the better economic choice. Above roughly 4,000 hours, brush replacement intervals and efficiency losses make a brushless motor the stronger option. Access cost and whether your product already contains a microcontroller decide the middle ground.</p>

<h3>Q2. What does the PMDC torque-speed curve look like?</h3>
<p>A straight line. Torque is proportional to armature current and speed to back-EMF, so the characteristic runs from stall torque at zero speed to no-load speed at zero torque. Maximum mechanical power occurs at half stall torque and half no-load speed.</p>

<h3>Q3. Why does a PMDC motor self-regulate under load?</h3>
<p>When load increases the motor slows, which reduces back-EMF, which increases armature current, which increases torque. The loop is inherent in the physics and needs no sensor, feedback or firmware, which is why brushed motors handle obstructions and load steps gracefully.</p>

<h3>Q4. How much does the controller add to a BLDC system?</h3>
<p>A brushless motor cannot run from a plain DC supply, so the three-phase inverter, position sensing, firmware and the associated EMC work are all part of the drive rather than optional extras. On low volumes this may be immaterial; on high volumes it is a programme-level cost.</p>

<h3>Q5. At what running hours does brushless become worth it?</h3>
<p>As a rough guide, above about 4,000 hours a year the brush replacement schedule and efficiency gap usually justify brushless. Between 2,000 and 4,000 hours the deciding factor is normally how expensive it is to access the motor for a planned service stoppage.</p>

<h3>Q6. Can a PMDC motor run at high speed?</h3>
<p>Not comfortably above roughly 10,000 RPM. At high speed the brushes begin to bounce on the commutator and contact heating becomes limiting. Above that threshold a brushless machine is effectively the only viable option.</p>

<h3>Q7. Which motor has higher starting torque?</h3>
<p>A PMDC motor delivers very high stall torque, limited only by supply voltage and armature resistance, with no special control. A brushless motor can match it but needs a current-limiting driver to do so without risking demagnetisation.</p>

<h3>Q8. Do you manufacture both PMDC and BLDC motors?</h3>
<p>Yes. Globe Scott Motors builds permanent magnet brushed DC motors from 25 W to 3000 W and brushless DC motors to customer specification, both at our plant in Killa Pardi, Gujarat. We have no commercial reason to steer a customer toward one topology over the other.</p>

<hr/>

<h2>Conclusion</h2>
<p>The PMDC versus BLDC choice comes down to four numbers: annual running hours, the cost of a service stoppage, whether your product already has control electronics, and your production volume. Torque curve behaviour and efficiency are real considerations, but they rarely overturn what those four say.</p>
<p>Work through the checklist above with your own figures. In most cases the answer is unambiguous, and it is often not the one the previous project used.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center"><strong>Still weighing PMDC against BLDC for a new design?</strong></h3>
<p>Send your duty profile, running hours and volume. We build both, so you will get a straight answer.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" rel="noopener">Get an Independent Recommendation</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> PMDC vs BLDC, Motor Selection Guide, Torque Curve, Duty Cycle, Controller Cost </div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/custom-motor-specification-checklist-first-call/">
<h4 class="post-title">Custom Motor Specifications: What to Bring to Your First Call</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/electric-motor-testing-standards-before-a-unit-ships/">
<h4 class="post-title">Motor Testing Standards: What Happens Before a Unit Ships</h4>
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
<h3 class="widget-title">Related Reading</h3>
<ul>
<li><a href="/blog/bldc-vs-pmdc-motors-which-is-right-for-your-application/">BLDC vs PMDC Motors: Which is Right for You?</a></li>
<li><a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">Brushed vs Brushless Maintenance Comparison</a></li>
<li><a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">Motor Efficiency Ratings Explained</a></li>
<li><a href="/blog/motor-torque-and-speed-calculation-practical-guide-industrial-applications/">Motor Torque and Speed Calculation Guide</a></li>
</ul>
</div>
<div class="widget mb-40 widget_categories">
<h3 class="widget-title">Explore Our Motors</h3>
<ul>
<li><a href="/products-pmdc-motors/">PMDC Motors (25W&ndash;3000W)</a></li>
<li><a href="/products-bldc-motors/">BLDC Motors</a></li>
<li><a href="/products-geared-motors/">Geared Motors</a></li>
<li><a href="/products-pmdc-geared-motors/">PMDC Geared Motors</a></li>
<li><a href="/products-pmdc-transaxle/">PMDC Transaxles</a></li>
<li><a href="/products-railway-signalling-products/">Railway Signalling Products</a></li>
</ul>
</div>
</aside>
</div>

</div>
</div>
</section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
