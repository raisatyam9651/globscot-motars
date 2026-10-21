<?php
$current_page     = 'why-does-a-dc-motor-overheat-causes-and-fixes';
$canonical_path   = 'blog/why-does-a-dc-motor-overheat-causes-and-fixes/';
$page_title       = 'Why Does a DC Motor Overheat? 7 Causes & How to Fix | Globe Scott Motors';
$meta_description = 'Why is your DC motor overheating? Discover the 7 root causes of DC motor thermal runaway—from overloads to brush arcing—with diagnostic steps and fixes.';
$og_image         = 'https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-overheating-causes-and-fixes.jpg';
$body_class       = 'post-template-default single single-post postid-2415 single-format-standard wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'GSMJSONLD'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/#article",
      "isPartOf": {
        "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/"
      },
      "mainEntityOfPage": {
        "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/"
      },
      "headline": "Why Does a DC Motor Overheat? 7 Common Causes and How to Fix Them",
      "name": "Why Does a DC Motor Overheat? 7 Common Causes and How to Fix Them",
      "description": "Why is your DC motor overheating? Discover the 7 root causes of DC motor thermal runaway—from mechanical overloads to brush arcing—with diagnostic steps and proven engineering fixes.",
      "url": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/",
      "datePublished": "2026-10-19",
      "dateModified": "2026-10-19",
      "inLanguage": "en-IN",
      "articleSection": "Motor Maintenance, Troubleshooting, Thermal Engineering",
      "keywords": "why does a dc motor overheat, dc motor overheating causes, dc motor running hot, how to fix dc motor overheating, dc motor high temperature, pmdc motor overheating",
      "wordCount": 2450,
      "image": {
        "@type": "ImageObject",
        "url": "https://www.globescott.net/wp-content/uploads/2026/10/dc-motor-overheating-causes-and-fixes.jpg",
        "width": 1200,
        "height": 675,
        "caption": "Diagnostic thermal testing and temperature measurement of a DC electric motor in an industrial test facility"
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
      "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/#breadcrumb",
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
          "name": "DC Motor Overheating Causes & Fixes",
          "item": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How hot is too hot for a DC motor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For most industrial Class F insulated DC motors, the outer frame temperature should typically remain below 80°C to 90°C under normal ambient conditions (40°C). If the surface exceeds 95°C to 100°C or produces an acrid varnish odor, internal winding hot-spots are likely exceeding safe thermal limits (155°C for Class F), which cuts insulation lifespan in half for every additional 10°C rise."
          }
        },
        {
          "@type": "Question",
          "name": "Can an undervoltage supply cause a DC motor to overheat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It can, but not by raising current. In a DC motor, torque is set by armature current (T = Kt × Ia), so on a constant-torque load a lower voltage mainly reduces speed while current and I²R copper loss stay about the same. Heating rises indirectly: a shaft-mounted fan moves less air at the lower speed, each cycle takes longer so the motor stays loaded longer, and a sagging supply often carries ripple that adds losses. If the motor also draws more current, look for a rising load torque rather than blaming the voltage."
          }
        },
        {
          "@type": "Question",
          "name": "Does overheating permanently damage permanent magnets in PMDC motors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It depends on the magnet. Ferrite magnets, used in most PMDC motors, lose roughly 0.2% of their flux per °C while hot but recover on cooling; they are most at risk of permanent demagnetisation when cold, under heavy stall or reversing current. Rare-earth NdFeB magnets, common in BLDC motors, behave the other way: above their grade's maximum working temperature they lose flux permanently. Either way, check no-load speed and current against the test sheet after a severe overheat or stall."
          }
        },
        {
          "@type": "Question",
          "name": "Why does a DC motor overheat even with no mechanical load attached?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Overheating under no-load conditions typically points to an electrical or internal mechanical defect: an inter-turn short circuit in the armature coils, severe supply overvoltage causing core saturation, severe AC ripple from an unfiltered power supply, excessive brush spring tension, or seized/over-greased bearings."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate if my DC motor duty cycle is causing overheating?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Check the motor rating plate for the duty rating: S1 represents continuous duty, while S2 (short-time) and S3 (intermittent periodic) specify maximum run times and minimum rest cooling periods. Running an S2 15-minute or S3 25% duty motor continuously prevents heat dissipation, quickly driving thermal saturation and winding burnout."
          }
        },
        {
          "@type": "Question",
          "name": "When should I switch from a brushed DC motor to a BLDC motor to avoid overheating?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If overheating in your application is primarily driven by high-speed brush friction, continuous 24/7 duty cycles, enclosed non-ventilated IP65/IP67 housings, or heavy carbon dust buildup, upgrading to a Brushless DC (BLDC) motor eliminates commutators and brushes entirely, dissipating heat much more efficiently directly through the outer stator housing."
          }
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/",
      "url": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/",
      "name": "Why Does a DC Motor Overheat? 7 Causes & How to Fix | Globe Scott Motors",
      "description": "Why is your DC motor overheating? Discover the 7 root causes of DC motor thermal runaway—from mechanical overloads to brush arcing—with diagnostic steps and fixes.",
      "isPartOf": {
        "@id": "https://www.globescott.net/#website"
      },
      "breadcrumb": {
        "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@id": "https://www.globescott.net/blog/why-does-a-dc-motor-overheat-causes-and-fixes/#article"
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
<h1>Why Does a DC Motor Overheat? 7 Common Causes and How to Fix Them</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb justify-content-center"><li class="breadcrumb-item"><a class="home" href="/">Home</a></li><li class="breadcrumb-item"><a href="/blog/">Blog</a></li><li class="breadcrumb-item active">DC Motor Overheating Causes & Fixes</li></ol> </nav>
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
<article class="post-2415 post type-post status-publish format-standard has-post-thumbnail hentry category-motors category-maintenance tag-dc-motor-overheating tag-motor-troubleshooting tag-pmdc-motor tag-thermal-rating" id="post-2415">

<img alt="DC electric motor undergoing thermal testing and temperature diagnostic analysis in an engineering laboratory" class="img-fluid full-thumb-img" src="/wp-content/uploads/2026/10/dc-motor-overheating-causes-and-fixes.jpg" width="1200" height="675" loading="eager" fetchpriority="high"/>

<div class="blog-meta-info mb-15">
<ul>
<li><i class="fa fa-user-o"></i>GLOBE SCOTT MOTORS</li>
<li><i aria-hidden="true" class="fa fa-clock-o"></i>October 19, 2026</li>
<li><i aria-hidden="true" class="fa fa-area-chart"></i>Maintenance, Troubleshooting, Engineering</li>
<li><i class="fa fa-comment-o"></i>0 Comments</li>
</ul>
</div>

<div class="blog-inner-blog">

<p>Few sights on a busy factory floor or railway installation are as alarming as an electric motor running so hot that you cannot hold your hand against its housing. When a <strong>direct current (DC) motor overheats</strong>, it is not merely an inconvenience—it is an urgent warning of impending equipment failure, unbudgeted downtime, and permanent insulation destruction.</p>

<p>Every electric motor converts electrical energy into mechanical power, generating unavoidable internal thermal losses in the process. However, when heat generation outpaces the motor’s ability to dissipate it into the surrounding environment, thermal equilibrium collapses. Left unchecked, operating just <strong>10&deg;C above a motor's rated insulation threshold cuts its functional lifespan by 50%</strong>. In <a href="/products-pmdc-motors/">permanent magnet DC (PMDC) motors</a>, heat also weakens the field magnets&mdash;reversibly for ferrite, and permanently for rare-earth magnets pushed past their rated temperature&mdash;eroding the torque available from every amp.</p>

<p>In this comprehensive troubleshooting guide, we dissect the <strong>7 primary reasons why DC motors overheat</strong>, how maintenance teams and equipment designers can diagnose each root cause, and the exact engineering fixes to restore safe, reliable operation.</p>

<div class="alert alert-info" style="background-color: #f0f7fd; border-left: 4px solid #0056b3; padding: 15px; margin: 25px 0;">
<strong>Quick Diagnostic Summary:</strong> If your DC motor is running unusually hot, isolate whether the heat occurs under full mechanical load or in uncoupled no-load conditions. Load-dependent overheating usually stems from <em>mechanical overloads, improper gear ratios, or voltage drop</em>. No-load overheating indicates <em>commutator arcing, supply overvoltage, harmonic ripple, bearing seizure, or armature inter-turn shorts</em>.
</div>

<h2>Understanding Thermal Limits: How Hot is "Too Hot"?</h2>

<p>Before pulling a motor from service, it is critical to distinguish between <em>normal operating warmth</em> and <em>damaging overheating</em>. Industrial DC motors are engineered to operate at temperatures that feel uncomfortably hot to human skin.</p>

<p>Under international standards such as <strong>IEC 60085</strong>, motor temperature limits are dictated by their insulation rating:</p>

<div class="table-responsive">
<table class="table table-bordered table-striped" style="margin: 20px 0;">
<thead>
<tr style="background-color: #212529; color: #fff;">
<th>Insulation Class</th>
<th>Max Winding Hot-Spot Temp</th>
<th>Max Permissible Temp Rise (&Delta;T)</th>
<th>Typical Safe Outer Surface Temp</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Class B</strong></td>
<td>130 &deg;C</td>
<td>80 K (above 40&deg;C ambient)</td>
<td>65 &deg;C &ndash; 75 &deg;C</td>
</tr>
<tr>
<td><strong>Class F</strong> (Standard Industrial)</td>
<td>155 &deg;C</td>
<td>105 K (above 40&deg;C ambient)</td>
<td>80 &deg;C &ndash; 90 &deg;C</td>
</tr>
<tr>
<td><strong>Class H</strong> (Heavy Duty / Severe)</td>
<td>180 &deg;C</td>
<td>125 K (above 40&deg;C ambient)</td>
<td>95 &deg;C &ndash; 110 &deg;C</td>
</tr>
</tbody>
</table>
</div>

<p>As detailed in our breakdown of <a href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">motor insulation classes (Class F vs Class H)</a>, the temperature of the external motor shell is typically 15&deg;C to 25&deg;C cooler than the internal rotor windings. Therefore, if an infrared pyrometer reads 95&deg;C on the outer housing of a Class F motor in a 40&deg;C ambient room, internal copper windings may already be flirting dangerously with 120&deg;C&ndash;130&deg;C.</p>

<hr/>

<h2>The 7 Common Causes of DC Motor Overheating and Proven Fixes</h2>

<h3>1. Excessive Mechanical Overload and Inadequate Torque Sizing</h3>
<p>The single most frequent reason a DC motor overheats is being forced to deliver more mechanical torque than its electromagnetic frame was designed to produce continuously. In direct current machines, <strong>armature current is strictly proportional to shaft torque</strong> (\( T \propto I_a \)).</p>

<p>When driven equipment encounters mechanical binding, elevated friction, heavier conveyor payloads, or excessive pump head pressures, the motor pulls elevated current. Electrical resistive losses in the copper windings are governed by Joule's Law:</p>

<p style="text-align: center; font-size: 1.15em; font-weight: bold; background: #f8f9fa; padding: 12px; border-radius: 4px;">
\[ P_{loss} = I_a^2 \times R_a \]
</p>

<p>Notice the squared term: <strong>doubling the load current quadruples thermal copper losses</strong>. This creates an exponential thermal runaway that rapid fan cooling cannot counter.</p>

<div class="row align-items-center mb-30">
<div class="col-md-7">
<h5>How to Diagnose It:</h5>
<ul>
<li>Measure actual operating current with an accurate clamp-on DC ammeter while running under maximum peak duty. Compare this against the <strong>Full Load Amps (FLA)</strong> printed on the motor nameplate.</li>
<li>Check whether the motor speed drops significantly below rated nominal RPM under load.</li>
<li>Uncouple the motor from the driven machinery; if the motor runs cool when decoupled, the issue is an external overload or mechanical binding.</li>
</ul>
</div>
<div class="col-md-5">
<div style="background: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 6px;">
<strong>Field Rule of Thumb:</strong><br/>
If a DC motor continuously draws more than 105% of its rated nameplate current during normal cycles, you have an undersized motor or a mechanical drive fault.
</div>
</div>
</div>

<h5>How to Fix It:</h5>
<ul>
<li><strong>Reduce mechanical load:</strong> Inspect driven gearboxes, rollers, conveyors, or belts for misaligned sprockets, over-tightened drive belts, or inadequate lubrication.</li>
<li><strong>Optimize mechanical advantage:</strong> If the driven machine requires high torque at low rotational speeds, do not run a standard DC motor in an overloaded low-speed state. Integrate an engineered gearhead: explore our <a href="/products-pmdc-geared-motors/">PMDC geared motors</a> or calculate exact speed-torque requirements using our guide on <a href="/blog/custom-geared-pmdc-motors-gear-ratio-torque-selection/">gear ratio and torque selection</a>.</li>
<li><strong>Upsize the motor frame:</strong> If the load requirement is unavoidable, upgrade to a higher-rated continuous power output from our standard <a href="/products-pmdc-motors/">PMDC motor catalog (25W to 3000W)</a>.</li>
</ul>

<hr/>

<h3>2. Poor Ventilation, Clogged Air Vents, and High Ambient Temperatures</h3>
<p>Electric motors rely on convective heat transfer to shed thermal losses. In open drip-proof (ODP) or fan-cooled DC motors, an internal or shaft-mounted radial fan pulls ambient air through the housing over the armature and field poles.</p>

<p>Overheating occurs when:</p>
<ol>
<li><strong>Ventilation screens are blocked:</strong> Airborne fibers, carbon dust, cement dust, or oil mists clog intake grills and cooling fan cowls.</li>
<li><strong>High ambient temperature:</strong> Standard motor ratings assume a maximum ambient temperature of <strong>40&deg;C (104&deg;F)</strong>. If a motor is installed inside an unventilated steel cabinet, near furnaces, or in direct harsh desert sunlight where ambient temperatures reach 55&deg;C, the motor has sacrificed 15&deg;C of its permissible thermal rise before even drawing an amp.</li>
<li><strong>Low-speed operation with shaft-mounted fans:</strong> Because a shaft-driven fan’s airflow falls in direct proportion to motor speed (\( Q \propto N \)) while the pressure it develops falls with the square of speed (\( p \propto N^2 \)), running a fan-cooled motor at 25% rated speed via PWM speed control leaves only a quarter of the cooling airflow, and very little pressure to push it through the windings.</li>
</ol>

<h5>How to Diagnose It:</h5>
<ul>
<li>Check for dust blankets or greasy deposits coating the motor's outer stator frame or cooling shroud (even a 1mm layer of dust acts as a thermal insulator).</li>
<li>Place a calibrated thermocouple in the ambient air 150mm away from the motor inlet. If \( T_{ambient} &gt; 40^\circ\mathrm{C} \), standard thermal calculations no longer apply.</li>
<li>Check air velocity at the exhaust ports while the motor spins.</li>
</ul>

<h5>How to Fix It:</h5>
<ul>
<li>Implement a strict preventive maintenance cleaning cycle using clean, dry compressed air (under 30 psi) to blow out accumulated dust and debris. Consult our actionable <a href="/dc-motor-maintenance/">DC motor maintenance procedures</a>.</li>
<li>When ambient temperatures exceed 40&deg;C, apply standard <strong>derating factors</strong> (typically 1% derating per degree above 40&deg;C up to 60&deg;C), or specify custom windings with Class H (180&deg;C) insulation systems.</li>
<li>For variable low-speed applications, replace shaft-driven fans with an independently powered <strong>constant-velocity auxiliary cooling blower</strong>.</li>
<li>For wet, corrosive, or dusty industrial washdown environments, select totally enclosed, non-ventilated (TENV) or <a href="/blog/ip67-motors-for-railway-applications-benefits-protection-performance/">IP67-sealed motors</a> that utilize robust conduction through aluminum or finned housings.</li>
</ul>

<hr/>

<h3>3. Supply Voltage Anomalies: Overvoltage, Undervoltage, and Unfiltered Rectifier Ripple</h3>
<p>A DC motor requires a steady, clean direct current power source. Electrical supply deviations in voltage magnitude or waveform purity directly trigger excessive heating:</p>

<ul>
<li><strong>Undervoltage:</strong> Torque is set by current (\( T = K_t I_a \)), so on a constant-torque load a sagging supply does not reduce armature current&mdash;the motor simply runs slower. The \( I^2 R \) copper loss stays the same while a shaft-mounted fan moves less air, and each machine cycle takes longer, so the windings spend more time hot. A supply that sags under load is also often poorly filtered, adding the ripple heating described below.</li>
<li><strong>Overvoltage:</strong> Excessive voltage forces the magnetic iron circuit (rotor armature laminations and stator poles) into magnetic saturation. Once the iron saturates, core losses—comprising <strong>hysteresis and eddy current losses</strong>—escalate dramatically, heating both the core and armature coils even when running completely without a load.</li>
<li><strong>AC Voltage Ripple (Form Factor &gt; 1.05):</strong> Powering DC motors with inexpensive single-phase bridge rectifiers without adequate LC smoothing filters introduces substantial alternating current harmonic ripple. This high-frequency AC component creates parasitic eddy currents in the solid iron field poles and armature laminations, causing severe thermal buildup without producing useful shaft torque.</li>
</ul>

<h5>How to Diagnose It:</h5>
<ul>
<li>Measure DC terminal voltage under full dynamic load using a calibrated <strong>True-RMS multimeter</strong>. Verify whether line voltage deviates by more than &plusmn;5% to &plusmn;10% from nominal nameplate specifications.</li>
<li>Inspect the voltage waveform on an oscilloscope or digital power analyzer. Calculate the <strong>Form Factor</strong> (\( FF = I_{RMS} / I_{AVG} \)). A Form Factor exceeding 1.4 on a single-phase supply indicates high ripple content that requires derating.</li>
<li>If the motor frame becomes intensely hot while idling without mechanical load, overvoltage or severe harmonic ripple is the prime suspect.</li>
</ul>

<h5>How to Fix It:</h5>
<ul>
<li>Calibrate and adjust the output tap on your DC regulated power supply or battery charging unit.</li>
<li>Ensure adequate wire gauge sizing between the power supply and motor terminals to eliminate resistive voltage drop over long electrical cabling runs.</li>
<li>Add smoothing DC choke inductors or filter capacitor banks downstream of full-wave rectifiers, or upgrade to a modern high-frequency PWM four-quadrant DC speed controller.</li>
</ul>

<hr/>

<h3>4. Worn Bearings, Shaft Misalignment, and Mechanical Binding</h3>
<p>Mechanical bearings represent the primary wear component inside any rotating electrical machine. Bearing degradation introduces parasitic rotational drag, turning mechanical friction directly into localized heat that transfers rapidly along the motor shaft into the windings and commutators.</p>

<p>The root causes of bearing failure in DC motors include:</p>
<ul>
<li><strong>Loss or thermal breakdown of lubricating grease:</strong> Operating at elevated temperatures dries out grease bases, causing metal-to-metal contact between ball bearings and raceways.</li>
<li><strong>Over-greasing:</strong> Forcing excess grease into bearing cavities creates hydrodynamic churning resistance, which ironically causes bearings to overheat much faster than mild under-lubrication.</li>
<li><strong>Shaft Misalignment:</strong> Angular or parallel misalignment between the motor output shaft and the driven machinery creates severe radial and axial cantilever loads, fatiguing the drive-end bearing.</li>
<li><strong>Over-tensioned drive belts:</strong> Over-tightened V-belts exert excessive bending moments on the motor shaft, overloading the front bearing.</li>
</ul>

<h5>How to Diagnose It:</h5>
<ul>
<li>Use a stethoscope or vibration accelerometer on the bearing end-shields. Listen for rhythmic clicking, rumbling, or high-pitched squealing.</li>
<li>Check bearing housing temperatures: if the endbells adjacent to the shaft are noticeably hotter than the center stator frame, bearing friction is the heat source.</li>
<li>De-energize and lock out the motor. Turn the output shaft by hand. It should rotate smoothly and freely without binding, rough spots, or axial play.</li>
</ul>

<h5>How to Fix It:</h5>
<ul>
<li>Use laser alignment tools or dial indicators to achieve shaft alignment within 0.05 mm (0.002 in) total indicated runout (TIR).</li>
<li>Set belt tension strictly to manufacturer deflection specifications using a belt tension gauge.</li>
<li>Replace failing bearings immediately with premium, double-sealed ball bearings featuring high-temperature polyurea or synthetic grease and C3 radial internal clearance to accommodate thermal shaft expansion.</li>
</ul>

<hr/>

<h3>5. Commutator Degradation, Brush Sparking, and Carbon Dust Buildup</h3>
<p>Unlike brushless motors, brushed DC motors rely on physical carbon brushes pressing continuously against copper commutator segments to reverse current polarity in the rotating armature coils. In a healthy motor, a microscopic chocolate-colored copper oxide film lubricates this mechanical contact zone.</p>

<p>When the commutation system falls out of tune, intense electrical arcing and friction generate localized temperatures exceeding <strong>300&deg;C right at the commutator surface</strong>:</p>

<ul>
<li><strong>Excessive or uneven brush spring tension:</strong> Excessive spring force creates heavy mechanical friction and grooves the copper bars; insufficient spring force causes brushes to bounce, initiating sustained destructive electrical arcing.</li>
<li><strong>High mica segments:</strong> As copper commutator bars wear down faster than the intervening mica insulation strips, the brushes bounce over raised mica edges, sparking continuously.</li>
<li><strong>Incorrect brush grade:</strong> Using brushes with incorrect electrical resistivity or hardness for your operating voltage and current density creates rapid thermal escalation.</li>
<li><strong>Carbon dust contamination:</strong> Conductive carbon dust wears off brushes and settles into the commutator bar undercuts, causing partial inter-segment short circuits that draw parasitic circulating currents.</li>
</ul>

<h5>How to Diagnose It:</h5>
<ul>
<li>Inspect the commutator through inspection windows while running under load. A faint blue glow under the brush trailing edge is acceptable; flying orange sparks, pinprick arcing, or circumferential "ring fire" around the commutator indicates severe commutation distress.</li>
<li>Examine the commutator surface: check for copper dragging, pitch bar burning, or threading.</li>
<li>Measure spring tension using a small spring balance scale (target standard brush pressure is typically 15 to 20 kPa / 2.2 to 2.9 psi).</li>
</ul>

<h5>How to Fix It:</h5>
<ul>
<li>Clean the commutator using industrial lint-free wipes and non-conductive solvent. Clean out carbon soot bridging commutator slots.</li>
<li>Re-stone and true the commutator on a lathe, ensuring mica is undercut cleanly by 0.8 mm to 1.2 mm below the copper bar level.</li>
<li>Replace brushes when they reach 1/3 of their original manufactured length, ensuring correct seating across 100% of the contact arc.</li>
<li>If repetitive brush maintenance and spark-generated heat are unacceptable in your application, consider transitioning to an electronically commutated motor: read our comparison on <a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">brushed vs brushless motor maintenance</a> or evaluate <a href="/products-bldc-motors/">Globe Scott industrial BLDC motors</a>.</li>
</ul>

<hr/>

<h3>6. Duty Cycle Violations and Rapid Cycling (S1 vs S2/S3 Duty Ratings)</h3>
<p>Electric motors are engineered around specific thermal heating and cooling curves defined by the <strong>IEC 60034-1 duty cycle classifications</strong>:</p>

<ul>
<li><strong>S1 (Continuous Duty):</strong> The motor operates at constant load until reaching permanent thermal equilibrium. Designed with substantial heat dissipation capacity.</li>
<li><strong>S2 (Short-Time Duty):</strong> The motor operates at rated load for a brief duration (e.g., 5, 15, or 30 minutes) and then stops long enough to cool down completely to ambient temperature before restarting. Common in railway lifting barriers, valve actuators, and hoist winches.</li>
<li><strong>S3 (Intermittent Periodic Duty):</strong> Defined by a cyclic percentage (e.g., 25% or 40% duty factor). Operates for a few seconds, then rests for a few seconds.</li>
</ul>

<p>A frequent error made by OEMs and retrofit engineers is installing an economical motor rated for S2 or S3 duty into an application that gets switched into continuous S1 operation. Because S2/S3 motors have smaller frames, less copper, and minimal internal thermal reserves, running them beyond their rated on-time causes rapid thermal accumulation with no cooldown phase, resulting in catastrophic overheating.</p>

<div class="row align-items-center mb-30">
<div class="col-md-6">
<h5>How to Diagnose It:</h5>
<ul>
<li>Verify the <strong>Duty Rating (S-rating)</strong> stamped on the motor rating plate.</li>
<li>Log the machine's actual duty cycle: count the number of start/stops per hour and measure continuous run time vs rest dwell time with a stopwatch.</li>
<li>Notice if the motor performs perfectly for 15 minutes, but begins overheating and smelling of hot varnish after 45 minutes of sustained cycling.</li>
</ul>
</div>
<div class="col-md-6">
<div style="background: #e8f4f8; border: 1px solid #bee5eb; padding: 15px; border-radius: 6px;">
<strong>Duty Sizing Guidance:</strong><br/>
Frequent starting and reversing triggers severe heat. A DC motor draws <strong>4 to 7 times its rated full-load current during starting</strong>. If a machine starts 30 times a minute, the starting inrush current dominates the thermal profile.
</div>
</div>
</div>

<h5>How to Fix It:</h5>
<ul>
<li>Review our comprehensive engineering guide on <a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">choosing the right motor power, RPM, and duty cycle</a>.</li>
<li>If application requirements have evolved to continuous running, replace the unit with an <strong>S1 continuous-duty rated motor</strong> designed with larger frame surface area and heavier copper wire gauges.</li>
<li>Implement a soft-start ramp in your motor drive controller to limit starting inrush current spikes during repetitive acceleration cycles.</li>
</ul>

<hr/>

<h3>7. Internal Electrical Faults: Armature Inter-Turn Short Circuits</h3>
<p>When enamel wire insulation degrades due to thermal aging, repetitive voltage spikes, or moisture penetration, the thin dielectric coating separating adjacent copper wire turns breaks down. This creates an <strong>inter-turn short circuit</strong> within an armature coil.</p>

<p>The shorted loop forms a closed electrical loop with extremely low resistance. As the armature spins through the permanent magnet or stator field flux, a massive circulating eddy current is induced directly into that shorted loop—acting like a miniature induction furnace inside the rotor. The motor will overheat drastically within 2 to 5 minutes of starting, even with completely disconnected mechanical loads.</p>

<h5>How to Diagnose It:</h5>
<ul>
<li><strong>The "Smell Test":</strong> A sharp, pungent odor of burnt phenolic varnish or charred insulation indicates active coil breakdown.</li>
<li><strong>Growler Testing:</strong> An internal armature growler test or high-frequency surge tester readily detects shorted turns.</li>
<li><strong>Bar-to-Bar Resistance Measurement:</strong> Using a high-precision digital low-resistance micro-ohmmeter (DLRO), measure electrical resistance between adjacent commutator bars around the entire circumference. An abrupt drop in resistance across a specific bar pair pinpoints shorted windings.</li>
<li><strong>Megohmmeter (Megger) Insulation Test:</strong> Test insulation resistance between the armature windings and the grounded motor shaft. Readings below 1 Megaohm indicate serious insulation compromise (see our reference on <a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">industrial motor testing standards</a>).</li>
</ul>

<h5>How to Fix It:</h5>
<ul>
<li>An armature with inter-turn short circuits cannot be repaired in the field with sprays or tape; it requires complete rewinding or replacement.</li>
<li>Ensure replacement armatures receive <strong>Vacuum Pressure Impregnation (VPI)</strong> with Class H solventless polyester or epoxy resins to eliminate air voids and guarantee maximum dielectric and moisture resistance.</li>
<li>Check power supply transient suppression (varistors / snubber circuits) to prevent high-voltage switching spikes from damaging newly installed windings.</li>
</ul>

<!-- In-Content Lead Magnet Callout Card -->
<div class="gsm-lead-magnet-callout" style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #ffffff; border-radius: 10px; padding: 25px 30px; margin: 35px 0; box-shadow: 0 10px 25px rgba(11, 37, 69, 0.15); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 20px;">
<div style="flex: 1 1 320px;">
<span style="display: inline-block; background: #eef4f8; color: #0b2545; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.8px; padding: 4px 10px; border-radius: 4px; margin-bottom: 10px;">⚡ Free Engineering Resource</span>
<h3 style="color: #ffffff; margin: 0 0 8px 0; font-size: 22px; font-weight: 700;">Download the DC Motor Thermal Diagnostic & Maintenance Checklist</h3>
<p style="color: #d0e1fd; font-size: 14.5px; margin: 0; line-height: 1.5;">Printable shop-floor SOP covering safe temperature thresholds, megger insulation testing procedures, and brush/commutator wear limits.</p>
</div>
<div style="flex: 0 0 auto;">
<button type="button" onclick="openLeadMagnetModal()" class="btn" style="background: #ffaa00; color: #111; font-weight: 700; font-size: 15px; padding: 12px 24px; border-radius: 6px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(255, 170, 0, 0.35); transition: transform 0.2s, background 0.2s;">
<i class="fa fa-file-pdf-o" style="font-size: 17px;"></i> Download Free PDF
</button>
</div>
</div>

<hr/>

<h2>Quick Diagnostic Troubleshooting Matrix</h2>

<p>Use this reference table to rapidly pinpoint and solve DC motor thermal runaway in the workshop or field:</p>

<div class="table-responsive">
<table class="table table-bordered table-hover" style="margin: 25px 0;">
<thead style="background-color: #0056b3; color: white;">
<tr>
<th>Observed Symptom</th>
<th>Most Likely Root Cause</th>
<th>Verification Check</th>
<th>Corrective Engineering Action</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Hot only when loaded; normal when idle</strong></td>
<td>Mechanical overload or undersized motor frame</td>
<td>Clamp meter reads &gt;100% Full Load Amps (FLA)</td>
<td>Inspect driven machinery for binding; add gear reduction; upsize motor.</td>
</tr>
<tr>
<td><strong>Overheats rapidly within minutes at no load</strong></td>
<td>Armature short circuit or extreme overvoltage</td>
<td>Micro-ohmmeter test across commutator bars; check DC input volts</td>
<td>Rewind or replace armature; regulate power supply to nominal voltage.</td>
</tr>
<tr>
<td><strong>Commutator glowing or heavy orange sparking</strong></td>
<td>Worn brushes, high mica, or low spring tension</td>
<td>Visual spark inspection; measure brush spring force (15–20 kPa)</td>
<td>Undercut mica; replace brushes; restore correct spring tension.</td>
</tr>
<tr>
<td><strong>Bearing housing hotter than motor stator</strong></td>
<td>Bearing lubrication failure or shaft misalignment</td>
<td>Acoustic stethoscope check; dial indicator shaft alignment</td>
<td>Re-align coupling (&lt;0.05mm); replace bearing with C3 clearance unit.</td>
</tr>
<tr>
<td><strong>Motor hot; low airflow from cooling shroud</strong></td>
<td>Clogged air vents or low-speed PWM operation</td>
<td>Visual debris inspection; check RPM vs airflow draft</td>
<td>Clean air grills; install constant-speed auxiliary blower for low RPMs.</td>
</tr>
<tr>
<td><strong>Motor runs cool for 15 min, then overheats</strong></td>
<td>Duty cycle mismatch (S2/S3 motor in continuous use)</td>
<td>Check nameplate duty code against machine on-time logging</td>
<td>Upgrade to S1 continuous duty motor frame.</td>
</tr>
<tr>
<td><strong>Motor runs hot; high AC hum / vibration</strong></td>
<td>Unfiltered single-phase DC power supply (high ripple)</td>
<td>Oscilloscope check: Form Factor &gt; 1.4</td>
<td>Add LC choke/capacitor filter or switch to high-frequency PWM drive.</td>
</tr>
</tbody>
</table>
</div>

<hr/>

<h2>Preventing DC Motor Overheating: Best Practices for System Designers</h2>

<p>Preventing thermal failures begins long before a motor is commissioned on the factory floor. By incorporating sound thermal engineering principles during early machine design, OEMs can achieve decades of uninterrupted operation:</p>

<ol>
<li><strong>Design with a 20% Thermal Margin:</strong> Size continuous motor torque requirements at roughly 75% to 80% of the motor’s rated nominal capacity. This accommodates friction spikes, mechanical aging, and voltage fluctuations without pushing the motor into thermal runaway.</li>
<li><strong>Specify Proper Ingress Protection (IP) and Enclosure Cooling:</strong> Match motor enclosures to environmental realities. Where water spray or heavy particulate prevents through-flow ventilation, specify sealed <a href="/products-pmdc-motors/">IP44 to IP67 designs</a> with external finned aluminum heat-dissipating bodies.</li>
<li><strong>Incorporate Thermal Protection Devices:</strong> Protect critical installations by specifying motors embedded with internal <strong>PTC thermistors, PT100 RTD temperature sensors, or bi-metallic thermal switches</strong> directly within the winding end-turns. These connect directly to drive interlocks to safely trip power before insulation reaches destructive temperatures.</li>
<li><strong>Implement Condition-Based Monitoring:</strong> Include non-contact infrared thermal imaging during periodic maintenance rounds. Establish thermal baselines for every installed motor; any sudden 10&deg;C increase over the baseline warrants immediate investigation.</li>
</ol>

<hr/>

<h2>Frequently Asked Questions (FAQ)</h2>

<h3>Q1. How hot is too hot for a DC motor?</h3>
<p>For most standard industrial Class F insulated DC motors, the outer frame temperature should typically remain below <strong>80&deg;C to 90&deg;C</strong> under normal ambient conditions (40&deg;C). If the surface exceeds 95&deg;C to 100&deg;C or produces an acrid varnish odor, internal winding hot-spots are likely exceeding safe thermal limits (155&deg;C for Class F), which cuts insulation lifespan in half for every additional 10&deg;C rise.</p>

<h3>Q2. Can an undervoltage supply cause a DC motor to overheat?</h3>
<p>It can, but not by raising current. In a DC motor, torque is set by armature current (T = Kt × Ia), so on a constant-torque load a lower voltage mainly reduces speed while current and I²R copper loss stay about the same. Heating rises indirectly: a shaft-mounted fan moves less air at the lower speed, each cycle takes longer so the motor stays loaded longer, and a sagging supply often carries ripple that adds losses. If the motor also draws more current, look for a rising load torque rather than blaming the voltage.</p>

<h3>Q3. Does overheating permanently damage permanent magnets in PMDC motors?</h3>
<p>It depends on the magnet. Ferrite magnets, used in most <a href="/what-is-pmdc-motor/">PMDC</a> motors, lose roughly 0.2% of their flux per °C while hot but recover on cooling; they are most at risk of permanent demagnetisation when cold, under heavy stall or reversing current. Rare-earth NdFeB magnets, common in BLDC motors, behave the other way: above their grade's maximum working temperature they lose flux permanently. Either way, check no-load speed and current against the test sheet after a severe overheat or stall.</p>

<h3>Q4. Why does a DC motor overheat even with no mechanical load attached?</h3>
<p>Overheating under no-load conditions typically points to an electrical or internal mechanical defect: an inter-turn short circuit in the armature coils, severe supply overvoltage causing core saturation, severe AC ripple from an unfiltered power supply, excessive brush spring tension, or seized/over-greased bearings.</p>

<h3>Q5. How do I calculate if my DC motor duty cycle is causing overheating?</h3>
<p>Check the motor rating plate for the duty rating: S1 represents continuous duty, while S2 (short-time) and S3 (intermittent periodic) specify maximum run times and minimum rest cooling periods. Running an S2 15-minute or S3 25% duty motor continuously prevents heat dissipation, quickly driving thermal saturation and winding burnout.</p>

<h3>Q6. When should I switch from a brushed DC motor to a BLDC motor to avoid overheating?</h3>
<p>If overheating in your application is primarily driven by high-speed brush friction, continuous 24/7 duty cycles, enclosed non-ventilated IP65/IP67 housings, or heavy carbon dust buildup, upgrading to a <a href="/products-bldc-motors/">Brushless DC (BLDC) motor</a> eliminates commutators and brushes entirely, dissipating heat much more efficiently directly through the outer stator housing.</p>

<hr/>

<h2>Conclusion and Engineering Next Steps</h2>
<p>Overheating in a DC motor is rarely random. It is an electromagnetic, mechanical, or thermal symptom of an underlying system imbalance—whether caused by mechanical overloads, degraded brushes, dirty power supplies, or duty cycle misapplications. By methodically diagnosing whether the heating is electrical or mechanical, you can correct the root failure mode, safeguard your machinery, and prevent costly production shutdowns.</p>

<div class="wp-block-columns are-vertically-aligned-center mr-top" style="background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 8px; padding: 25px; margin: 30px 0;">
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<h3 class="has-text-align-center" style="margin-top: 0;"><strong>Experiencing Chronic Motor Overheating in Your Equipment?</strong></h3>
<p style="margin-bottom: 0;">Globe Scott Motors has engineered custom, high-reliability PMDC, BLDC, and Geared Motors in India since 1985. Share your mechanical load requirements, ambient envelope, and duty cycle with our design engineers for a custom-sized thermal solution.</p>
</div>
<div class="wp-block-column is-vertically-aligned-center text-center" style="flex-basis:33.33%">
<div class="wp-block-buttons">
<div class="wp-block-button is-style-outline cubutton"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" href="/contact-us/" rel="noopener" style="font-weight: 700; padding: 12px 24px; border: 2px solid #0056b3; background-color: #0056b3; color: white;">Consult Our Engineers</a></div>
</div>
</div>
</div>

<div class="tags-list">
<strong>Tags:</strong> DC Motor Overheating, Motor Maintenance, Thermal Management, PMDC Motors, Motor Troubleshooting, Globe Scott Motors 
</div>

</div>
</article>

<div class="post-navigation">
<div class="row no-gutters">
<div class="col-md-6">
<div class="post-previous">
<a class="single-post-nav" href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">
<h4 class="post-title">Motor Insulation Classes Explained: What Class F vs Class H Actually Means</h4>
<h3 class="post-nav-title icon-left"><i class="fa fa-long-arrow-left"></i> Previous Post</h3>
</a>
</div>
</div>
<div class="col-md-6">
<div class="post-next">
<a class="single-post-nav" href="/blog/dc-motor-losing-torque-under-load-causes-solutions/">
<h4 class="post-title">Why Is Your DC Motor Losing Torque Under Load? Causes and Solutions</h4>
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
<li><a href="/blog/motor-insulation-classes-explained-class-f-vs-class-h/">Motor Insulation Classes: Class F vs Class H Explained</a></li>
<li><a href="/dc-motor-maintenance/">DC Motor Maintenance Guide: Inspection & Repair</a></li>
<li><a href="/blog/brushed-vs-brushless-motor-maintenance-comparison/">Brushed vs Brushless Motor Maintenance Comparison</a></li>
<li><a href="/blog/how-to-choose-right-motor-power-rpm-and-gear-ratio/">How to Choose Motor Power, RPM & Gear Ratio</a></li>
<li><a href="/blog/electric-motor-testing-standards-before-a-unit-ships/">Motor Testing Standards Before Dispatch</a></li>
</ul>
</div>
<div class="widget mb-40 widget_categories">
<h3 class="widget-title">Engineered Motor Solutions</h3>
<ul>
<li><a href="/products-pmdc-motors/">PMDC Motors (25W &ndash; 3000W)</a></li>
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
          <span class="gsm-badge"><i class="fa fa-file-text-o"></i> Free Engineering SOP Checklist</span>
          <h3 id="gsmModalTitle" class="gsm-modal-title">DC Motor Thermal Diagnostic & Maintenance Checklist</h3>
          <p class="gsm-modal-subtitle">Get our practical shop-floor SOP covering temperature limits, megger testing thresholds, and brush inspection tolerances.</p>
        </div>

        <ul class="gsm-modal-perks">
          <li><i class="fa fa-check-circle"></i> <strong>7-Step Troubleshooting SOP:</strong> Pinpoint mechanical vs electrical faults</li>
          <li><i class="fa fa-check-circle"></i> <strong>Thermal Benchmark Table:</strong> Class B, F, and H infrared pyrometer limits</li>
          <li><i class="fa fa-check-circle"></i> <strong>Commutator & Brush Guide:</strong> Wear tolerances & spring force specs</li>
        </ul>

        <form id="gsmLeadMagnetForm" accept-charset="UTF-8" action="https://app.formester.com/forms/4YfTiyKIi/submissions" method="POST" onsubmit="handleLeadMagnetSubmit(event)" novalidate>
          <input type="hidden" name="source" value="DC Motor Overheating Blog Post">
          <input type="hidden" name="lead_magnet" value="DC Motor Thermal Diagnostic & Maintenance Checklist">
          <div id="gsmFormError" class="gsm-form-alert" style="display: none;"></div>

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
        <h3 class="gsm-modal-title" style="color: #0b2545;">Your SOP Checklist is Ready!</h3>
        <p class="gsm-modal-subtitle" style="margin-bottom: 25px;">Thank you for registering. You can download the complete troubleshooting checklist immediately below.</p>
        
        <a id="gsmDownloadLink" href="/wp-content/uploads/2026/10/dc-motor-thermal-troubleshooting-checklist.pdf" class="gsm-submit-btn" style="text-decoration: none; display: inline-flex; justify-content: center; align-items: center; gap: 8px;" download>
          <i class="fa fa-file-pdf-o"></i> Download SOP Checklist (PDF)
        </a>

        <div style="margin-top: 25px; padding-top: 15px; border-top: 1px solid #e2e8f0;">
          <p style="font-size: 13.5px; color: #64748b; margin-bottom: 12px;">Need custom motor sizing or experiencing urgent motor failure?</p>
          <a href="/contact-us/" class="btn btn-sm btn-outline-primary" style="font-size: 13px; font-weight: 600; padding: 6px 16px;">Contact Globe Scott Engineering Team</a>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Lead Magnet Modal Styling */
.gsm-modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 999999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 15px;
  box-sizing: border-box;
}

.gsm-modal-backdrop {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(11, 37, 69, 0.78);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
}

.gsm-modal-dialog {
  position: relative;
  z-index: 1000000;
  background: #ffffff;
  border-radius: 12px;
  max-width: 520px;
  width: 100%;
  box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.4);
  overflow: hidden;
  animation: gsmModalSlideUp 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes gsmModalSlideUp {
  from {
    opacity: 0;
    transform: translateY(28px) scale(0.96);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

.gsm-modal-close {
  position: absolute;
  top: 12px;
  right: 15px;
  background: transparent;
  border: none;
  font-size: 28px;
  line-height: 1;
  color: #64748b;
  cursor: pointer;
  padding: 5px;
  transition: color 0.2s;
  z-index: 10;
}
.gsm-modal-close:hover {
  color: #0f172a;
}

.gsm-modal-body {
  padding: 32px 30px 28px 30px;
}

.gsm-badge {
  display: inline-block;
  background: #eef4f8;
  color: #0b2545;
  font-size: 11.5px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  padding: 4px 10px;
  border-radius: 4px;
  margin-bottom: 10px;
}

.gsm-modal-title {
  color: #0b2545;
  font-size: 22px;
  font-weight: 700;
  margin: 0 0 8px 0;
  line-height: 1.3;
}

.gsm-modal-subtitle {
  color: #475569;
  font-size: 13.5px;
  margin: 0 0 16px 0;
  line-height: 1.5;
}

.gsm-modal-perks {
  list-style: none;
  padding: 10px 14px;
  margin: 0 0 20px 0;
  background: #f8fafc;
  border-radius: 6px;
  border-left: 3px solid #0056b3;
}
.gsm-modal-perks li {
  font-size: 12.5px;
  color: #334155;
  margin-bottom: 6px;
  line-height: 1.4;
  display: flex;
  align-items: flex-start;
  gap: 8px;
}
.gsm-modal-perks li:last-child {
  margin-bottom: 0;
}
.gsm-modal-perks li i {
  color: #10b981;
  font-size: 14px;
  margin-top: 2px;
}

.gsm-form-group {
  margin-bottom: 14px;
  text-align: left;
}
.gsm-form-group label {
  display: block;
  font-size: 12.5px;
  font-weight: 600;
  color: #1e293b;
  margin-bottom: 5px;
}
.gsm-form-group label i {
  color: #0056b3;
  margin-right: 4px;
}

.gsm-form-control {
  width: 100%;
  box-sizing: border-box;
  padding: 10px 13px;
  font-size: 14px;
  border: 1px solid #cbd5e1;
  border-radius: 6px;
  color: #1e293b;
  transition: border-color 0.2s, box-shadow 0.2s;
}
.gsm-form-control:focus {
  outline: none;
  border-color: #0056b3;
  box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.15);
}

.gsm-submit-btn {
  width: 100%;
  background: linear-gradient(135deg, #0056b3 0%, #003d80 100%);
  color: #ffffff;
  font-size: 15px;
  font-weight: 700;
  padding: 12px 18px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0, 86, 179, 0.3);
  transition: transform 0.15s, box-shadow 0.15s, background 0.2s;
  margin-top: 6px;
}
.gsm-submit-btn:hover {
  background: linear-gradient(135deg, #0066cc 0%, #004d99 100%);
  box-shadow: 0 6px 16px rgba(0, 86, 179, 0.4);
}
.gsm-submit-btn:active {
  transform: scale(0.985);
}

.gsm-privacy-text {
  font-size: 11.5px;
  color: #64748b;
  text-align: center;
  margin: 10px 0 0 0;
}
.gsm-privacy-text i {
  color: #10b981;
}

.gsm-form-alert {
  background: #fef2f2;
  border: 1px solid #fecaca;
  color: #b91c1c;
  padding: 8px 12px;
  border-radius: 6px;
  font-size: 13px;
  margin-bottom: 12px;
  text-align: left;
}

.gsm-success-icon {
  width: 60px;
  height: 60px;
  background: #ecfdf5;
  color: #10b981;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  margin-bottom: 15px;
}
</style>

<script>
// ==========================================
// Lead Magnet Popup Controller (15s Timer)
// ==========================================
(function() {
  var POPUP_DELAY_MS = 15000; // 15 seconds
  var STORAGE_KEY = 'gsm_lead_magnet_dismissed';

  function initLeadMagnetTimer() {
    // If the visitor already closed or converted in this session, do not auto-pop
    if (sessionStorage.getItem(STORAGE_KEY)) {
      return;
    }

    setTimeout(function() {
      // Check again in case it was opened manually earlier
      if (!sessionStorage.getItem(STORAGE_KEY)) {
        openLeadMagnetModal();
      }
    }, POPUP_DELAY_MS);
  }

  window.openLeadMagnetModal = function() {
    var modal = document.getElementById('gsmLeadMagnetModal');
    if (modal) {
      modal.style.display = 'flex';
      document.body.style.overflow = 'hidden'; // prevent background scrolling
    }
  };

  window.closeLeadMagnetModal = function() {
    var modal = document.getElementById('gsmLeadMagnetModal');
    if (modal) {
      modal.style.display = 'none';
      document.body.style.overflow = '';
      sessionStorage.setItem(STORAGE_KEY, 'true');
    }
  };

  // Close on ESC key (only when the modal is actually open)
  document.addEventListener('keydown', function(event) {
    var modal = document.getElementById('gsmLeadMagnetModal');
    if ((event.key === 'Escape' || event.keyCode === 27) && modal && modal.style.display !== 'none') {
      closeLeadMagnetModal();
    }
  });

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

    // Email regex validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailVal)) {
      errorBox.textContent = 'Please enter a valid email address.';
      errorBox.style.display = 'block';
      return;
    }

    // Button loading state
    submitBtn.disabled = true;
    btnText.style.display = 'none';
    btnLoader.style.display = 'inline-block';

    var formEl = document.getElementById('gsmLeadMagnetForm');
    var formData = new FormData(formEl);

    // Submit directly to Formester endpoint. no-cors: Formester does not return CORS
    // headers, so a normal fetch would reject after the submission was already recorded
    // and the catch below would submit it a second time.
    fetch('https://app.formester.com/forms/4YfTiyKIi/submissions', {
      method: 'POST',
      mode: 'no-cors',
      body: formData
    })
    .then(function(res) {
      submitBtn.disabled = false;
      btnText.style.display = 'inline-block';
      btnLoader.style.display = 'none';

      // Mark session so it won't reopen
      sessionStorage.setItem(STORAGE_KEY, 'true');

      // Transition to Success State with instant PDF download
      document.getElementById('gsmLeadMagnetFormState').style.display = 'none';
      document.getElementById('gsmLeadMagnetSuccessState').style.display = 'block';
    })
    .catch(function(err) {
      // Network failure before the request left the browser: submit the form natively
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
