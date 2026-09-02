<?php
$current_page     = 'motor-insulation-classes-explained-class-f-vs-class-h';
$canonical_path   = 'blog/motor-insulation-classes-explained-class-f-vs-class-h/';
$page_title       = 'Motor Insulation Class F vs Class H | Globe Scott Motors';
$meta_description = 'Motor insulation class explained: Class B, F and H temperature limits, how ambient and winding rise add up, and why exceeding the rating halves motor life.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/09/motor-insulation-class-thermal-rating.jpg';
$body_class       = 'post-template-default single single-post postid-2409 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/"
      },
      "headline": "Motor Insulation Classes Explained: What Class F vs Class H Actually Means",
      "name": "Motor Insulation Classes Explained: What Class F vs Class H Actually Means",
      "description": "Motor insulation class explained: Class B, F and H temperature limits, how ambient and winding rise add up, and why exceeding the rating halves motor life.",
      "url": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/",
      "datePublished": "2026-08-28",
      "dateModified": "2026-08-28",
      "inLanguage": "en-IN",
      "articleSection": "Motor Design, Thermal Ratings, Specification",
      "keywords": "motor insulation class explained, Class F vs Class H motor, motor thermal rating, insulation class temperature rating",
      "wordCount": 1320,
      "image": {
        "@type": "ImageObject",
        "url": "https://www.globescott.net/wp-content/uploads/2026/09/motor-insulation-class-thermal-rating.jpg",
        "width": 1200,
        "height": 675,
        "caption": "Glowing electric heating elements illustrating thermal limits behind motor insulation classes"
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
      "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/#breadcrumb",
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
          "name": "Motor Insulation Classes",
          "item": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What does motor insulation Class F mean?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Class F means the winding insulation system is rated for a maximum hot-spot temperature of 155 degrees Celsius. That budget is normally made up of a 40 degree ambient, a 105 kelvin permitted temperature rise and a 10 kelvin hot-spot allowance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Class F and Class H insulation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Class F is rated to 155 degrees Celsius and Class H to 180 degrees Celsius. The extra 25 kelvin can be spent two ways: more output from the same frame, or the same output with a large thermal margin and a much longer insulation life."
          }
        },
        {
          "@type": "Question",
          "name": "Does a higher insulation class mean a better motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. It means more thermal headroom. Whether that headroom becomes extra output or extra life is a design decision, and both are described as the same class on a datasheet. Ask which one a quoted motor is doing."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if a motor runs above its insulation class rating?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Nothing immediately visible. Torque, speed and noise stay normal while the insulation ages faster. As a rule of thumb, every 10 kelvin of sustained overtemperature roughly halves the remaining insulation life, so 20 kelvin over rating cuts expected life to about a quarter."
          }
        },
        {
          "@type": "Question",
          "name": "What is Class F insulation with Class B temperature rise?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It is a specification that uses insulation rated to 155 degrees Celsius but designs the winding for the 80 kelvin rise permitted for Class B. The insulation then runs about 25 kelvin below its limit, which substantially extends service life. It is one of the most cost-effective reliability choices on a motor specification."
          }
        },
        {
          "@type": "Question",
          "name": "Does ambient temperature change the insulation class I need?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, directly. Standard ratings assume a 40 degree Celsius ambient. Every degree of higher ambient consumes the thermal budget one for one, so a motor in a hot enclosure must either be derated or specified with a higher insulation class."
          }
        },
        {
          "@type": "Question",
          "name": "Does a higher IP rating affect the thermal rating?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Usually yes. Better sealing reduces convective cooling, so a highly protected motor often needs derating compared with an equivalent open frame. Ingress protection and thermal capacity should be specified together, not separately."
          }
        },
        {
          "@type": "Question",
          "name": "Can high temperature damage the magnets in a PMDC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Ferrite and neodymium magnet grades have maximum working temperatures, and sustained operation above them causes irreversible demagnetisation that permanently reduces torque. This is a separate limit from the insulation class and both must be respected."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/",
      "url": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/",
      "name": "Motor Insulation Class F vs Class H | Globe Scott Motors",
      "description": "Motor insulation class explained: Class B, F and H temperature limits, how ambient and winding rise add up, and why exceeding the rating halves motor life.",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/motor-insulation-classes-explained-class-f-vs-class-h/#article"
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
<h1>Motor Insulation Classes Explained: What Class F vs Class H Actually Means</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active">Motor Insulation Classes</li></ol> </nav>
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
<article class="post-2409 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-motor-design tag-insulation-class tag-class-f tag-class-h tag-thermal-rating" id="post-2409">
<img alt="Glowing electric heating elements illustrating thermal limits behind motor insulation classes" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/09/motor-insulation-class-thermal-rating.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>
<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>August 28, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Motor Design, Thermal Ratings, Specification</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>
<div class="blog-inner-blog">

<p>A datasheet line reading "Insulation Class F" tells most buyers nothing useful. It is not a quality grade, it is not a durability score, and a higher letter does not mean a better motor. It is a single temperature number, and understanding what that number governs changes how you read every thermal specification on the page.</p>

<h2>What an Insulation Class Actually Specifies</h2>

<p>An insulation class states the <strong>maximum temperature the winding insulation system can tolerate continuously</strong> while still achieving a normal service life. It says nothing about the magnets, the bearings, the housing or the brushes. It is purely a property of the varnish, films, slot liners and sleeving that keep the copper from shorting.</p>

<p>The classes and their limits under IEC 60085 are:</p>

<table class="table table-bordered table-striped">
<thead>
<tr><th>Class</th><th>Maximum Hot-Spot Temperature</th><th>Where It Is Typically Specified</th></tr>
</thead>
<tbody>
<tr><td>A</td><td>105 &deg;C</td><td>Legacy designs, largely superseded</td></tr>
<tr><td>E</td><td>120 &deg;C</td><td>Light-duty and appliance motors</td></tr>
<tr><td>B</td><td>130 &deg;C</td><td>General purpose industrial duty</td></tr>
<tr><td>F</td><td>155 &deg;C</td><td>The current industrial default</td></tr>
<tr><td>H</td><td>180 &deg;C</td><td>High ambient, heavy or continuous duty</td></tr>
<tr><td>N (200)</td><td>200 &deg;C</td><td>Specialised high-temperature applications</td></tr>
</tbody>
</table>

<h2>The Arithmetic Behind the Number</h2>

<p>The class limit is not the temperature the motor runs at. It is a budget, and three things spend it:</p>

<p><strong>Ambient temperature + temperature rise + hot-spot allowance = insulation class limit</strong></p>

<p>Standard ratings assume a 40 &deg;C ambient. Working through Class F:</p>

<ul>
<li>40 &deg;C ambient</li>
<li>+ 105 K permitted temperature rise of the winding</li>
<li>+ 10 K hot-spot allowance, because the hottest point in the winding is always hotter than the average the resistance measurement sees</li>
<li>= 155 &deg;C, the Class F limit</li>
</ul>

<p>Class B works out as 40 + 80 + 10 = 130 &deg;C, and Class H as 40 + 125 + 15 = 180 &deg;C.</p>

<p>Two consequences fall out of this immediately.</p>

<p>First, <strong>your ambient is part of the rating</strong>. A motor rated for 40 &deg;C ambient installed in a 55 &deg;C enclosure has lost 15 K of its thermal budget before it does any work. Either the permissible rise drops by 15 K, meaning the motor must be derated, or you specify a higher class.</p>

<p>Second, <strong>a higher class is not free performance</strong>. It is headroom. What you do with the headroom is the actual engineering decision.</p>

<h2>Class F vs Class H: The Two Ways to Spend the Margin</h2>

<p>Given a Class F insulation system, a designer has a choice.</p>

<p><strong>Option one: use the margin for output.</strong> Load the motor to the full 105 K rise that Class F allows. You get maximum power from the frame. The insulation runs at its rated limit, so it achieves its designed life and no more.</p>

<p><strong>Option two: use the margin for life.</strong> Specify Class F insulation but design for a Class B rise of 80 K. The insulation now runs 25 K below its limit. This is the widely used "Class F insulation with Class B rise" specification, and it is one of the most effective reliability decisions available on a motor datasheet.</p>

<p>The same logic applies moving from F to H. Class H buys you either more output from the same frame, or a substantial life extension at the same output. Ask a supplier which of the two a quoted motor is doing, because both are legitimately described as "Class H".</p>

<h2>Why Exceeding the Rating Shortens Life Rather Than Performance</h2>

<p>This is the part most often misunderstood. Run a motor 15 K over its insulation rating and nothing happens. It does not trip, it does not lose torque, it does not sound different. It runs perfectly and quietly ages faster.</p>

<p>Thermal degradation of organic insulation follows an Arrhenius relationship, commonly stated as the <strong>10-degree rule</strong>: every 10 K of sustained operation above the rated hot-spot temperature roughly halves the expected insulation life.</p>

<table class="table table-bordered table-striped">
<thead>
<tr><th>Sustained Overtemperature</th><th>Approximate Remaining Insulation Life</th></tr>
</thead>
<tbody>
<tr><td>At rating</td><td>100%</td></tr>
<tr><td>+10 K</td><td>~50%</td></tr>
<tr><td>+20 K</td><td>~25%</td></tr>
<tr><td>+30 K</td><td>~12%</td></tr>
</tbody>
</table>

<p>A motor specified for a ten-year life and run 20 K hot becomes a two-and-a-half-year motor. Nothing in its behaviour warns you. This is why thermal specification is a reliability question rather than a performance one, and it is why the endurance testing described on our <a href="/electromechanical-integrity/">electromechanical integrity page</a> runs motors continuously at rated load rather than briefly at nameplate.</p>

<p>Because the ageing is silent, it usually surfaces as an unexplained cluster of winding failures several years after commissioning. The symptom patterns and what they indicate are covered in our <a href="/dc-motor-maintenance/">DC motor maintenance guide</a>.</p>

<h2>What Pushes a Motor Over Its Thermal Budget</h2>

<ul>
<li><strong>Enclosure temperature, not room temperature.</strong> A motor inside a sealed cabinet lives in the cabinet's ambient. Measure it.</li>
<li><strong>Duty cycle drift.</strong> A drive specified for S3 intermittent duty that gets used continuously will overheat even though nothing about the load changed. Duty class matters as much as power rating.</li>
<li><strong>Restricted airflow.</strong> Higher ingress protection reduces convective cooling. A sealed motor rated IP65 or above generally needs derating relative to an open frame, a trade-off discussed in our article on <a href="/blog/ip67-motors-for-railway-applications-benefits-protection-performance/">IP67 rated motors and protection levels</a>.</li>
<li><strong>Altitude.</strong> Thinner air cools less effectively above roughly 1000 m.</li>
<li><strong>Voltage drop and harmonics.</strong> A motor fed below its rated voltage draws more current for the same torque, and current is what makes heat.</li>
</ul>

<h2>A Note on Brushed DC Machines Specifically</h2>

<p>In a permanent magnet DC motor the windings are in the rotating armature, so their heat has to cross an air gap before it reaches the housing. That makes thermal management genuinely harder than in a brushless machine, where the windings sit on the outer stator and conduct straight into the casing. It is one reason continuous high-load duty tends to favour brushless, as set out in <a href="/blog/pmdc-vs-bldc-motor-application-fit-guide/">our PMDC versus BLDC application fit guide</a>. Where thermal duty rather than cost is the binding constraint, our <a href="/products-bldc-motors/">brushless DC motor range</a> is usually the better starting point, and the long-run service implications are compared in <a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">the brushed versus brushless maintenance article</a>.</p>

<p>Sustained overtemperature in a permanent magnet machine also risks the magnets themselves. Ferrite and NdFeB grades have their own maximum working temperatures, and irreversible demagnetisation above them permanently reduces torque. Magnet quality control is therefore part of thermal reliability, which is why residual flux density and coercive force are checked on incoming batches, as described in <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">our motor testing sequence</a>.</p>

<h2>What to Specify</h2>

<p>When you send an enquiry, give the ambient temperature at the motor rather than in the room, the duty class (S1, S2 or S3), the enclosure and ventilation arrangement, and the required service life. Our standard <a href="/products-pmdc-motors/">PMDC motor range</a> covers 25 W to 3000 W across S1, S2 and S3 duty with IP20 to IP44 protection, and thermal design is matched to your actual conditions rather than a nominal 40 &deg;C. The same applies to geared builds, where the gearhead adds its own heat: see the <a href="/products-geared-motors/">geared motor range</a> and the end markets on our <a href="/applications/">applications page</a>. The full information list is in the <a href="/blog/custom-motor-specification-checklist-first-call/">custom motor specification checklist</a>, and related sizing guidance is in <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">choosing motor power, RPM and gear ratio</a>.</p>

<hr/>

<h2>Frequently Asked Questions</h2>

<h3>Q1. What does motor insulation Class F mean?</h3>
<p>Class F means the winding insulation system is rated for a maximum hot-spot temperature of 155 degrees Celsius. That budget is normally made up of a 40 degree ambient, a 105 kelvin permitted temperature rise and a 10 kelvin hot-spot allowance.</p>

<h3>Q2. What is the difference between Class F and Class H insulation?</h3>
<p>Class F is rated to 155 degrees Celsius and Class H to 180 degrees Celsius. The extra 25 kelvin can be spent two ways: more output from the same frame, or the same output with a large thermal margin and a much longer insulation life.</p>

<h3>Q3. Does a higher insulation class mean a better motor?</h3>
<p>No. It means more thermal headroom. Whether that headroom becomes extra output or extra life is a design decision, and both are described as the same class on a datasheet. Ask which one a quoted motor is doing.</p>

<h3>Q4. What happens if a motor runs above its insulation class rating?</h3>
<p>Nothing immediately visible. Torque, speed and noise stay normal while the insulation ages faster. As a rule of thumb, every 10 kelvin of sustained overtemperature roughly halves the remaining insulation life, so 20 kelvin over rating cuts expected life to about a quarter.</p>

<h3>Q5. What is Class F insulation with Class B temperature rise?</h3>
<p>It is a specification that uses insulation rated to 155 degrees Celsius but designs the winding for the 80 kelvin rise permitted for Class B. The insulation then runs about 25 kelvin below its limit, which substantially extends service life. It is one of the most cost-effective reliability choices on a motor specification.</p>

<h3>Q6. Does ambient temperature change the insulation class I need?</h3>
<p>Yes, directly. Standard ratings assume a 40 degree Celsius ambient. Every degree of higher ambient consumes the thermal budget one for one, so a motor in a hot enclosure must either be derated or specified with a higher insulation class.</p>

<h3>Q7. Does a higher IP rating affect the thermal rating?</h3>
<p>Usually yes. Better sealing reduces convective cooling, so a highly protected motor often needs derating compared with an equivalent open frame. Ingress protection and thermal capacity should be specified together, not separately.</p>

<h3>Q8. Can high temperature damage the magnets in a PMDC motor?</h3>
<p>Yes. Ferrite and neodymium magnet grades have maximum working temperatures, and sustained operation above them causes irreversible demagnetisation that permanently reduces torque. This is a separate limit from the insulation class and both must be respected.</p>

<hr/>

<h2>Conclusion</h2>
<p>An insulation class is a temperature budget, not a quality grade. It is spent by ambient temperature, by winding rise under load and by the hot-spot allowance, and once it is exceeded the penalty arrives as shortened life rather than degraded performance.</p>
<p>Specify the ambient at the motor, the real duty class and the service life you need, and let the supplier choose the class. That produces a better motor than picking a letter off a datasheet.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center"><strong>Not sure which insulation class your application needs?</strong></h3>
<p>Send us your ambient temperature, duty cycle and enclosure arrangement. We will size the thermal design around it.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" rel="noopener">Ask Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> Motor Insulation Class, Class F, Class H, Thermal Rating, Motor Specification, Globe Scott Motors </div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/made-in-india-since-1985-motor-reliability/">
<h4 class="post-title">What “Made in India Since 1985” Actually Means for Motor Reliability</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">
<h4 class="post-title">Brushed vs Brushless: The Maintenance Conversation Nobody Has Upfront</h4>
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
<li><a href="/blog/ip67-motors-for-railway-applications-benefits-protection-performance/">IP67 Motors: Benefits, Protection and Performance</a></li>
<li><a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">How to Choose the Right Motor Power, RPM and Gear Ratio</a></li>
<li><a href="/blog/motor-efficiency-ratings-explained-for-equipment-buyers/">Motor Efficiency Ratings Explained for Equipment Buyers</a></li>
<li><a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">Motor Testing Standards: What Happens Before a Unit Ships</a></li>
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
