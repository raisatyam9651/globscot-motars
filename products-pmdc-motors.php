<?php
$current_page = 'products-pmdc-motors';
$canonical_path = 'products-pmdc-motors/';
$page_title = 'PMDC Motor Manufacturer in India | Permanent Magnet DC Motor Supplier | Globe Scott Motors';
$meta_description = 'Globe Scott Motors is a leading PMDC motor manufacturer in India. We engineer precision Permanent Magnet DC motors (12V-220V DC, 15W-1500W) with IEC B3, B5 & B14 mountings for industrial, automotive & pump OEMs.';
$og_image = 'https://www.globescott.net/wp-content/uploads/2020/02/Permanent-Magnet-DC-Motors-1-550x367.png';
$body_class = 'page-template page-template-page-template page-template-blank-page-sidebar page-template-page-templateblank-page-sidebar-php page page-id-2377 page-child parent-pageid-2375 wpb-js-composer js-comp-ver-6.1 vc_responsive';

$extra_head_content = <<<'EOD'
<style>
  /* PMDC Product Page Modern Styling */
  .pmdc-intro-box {
    background: #fdfdfd;
    border-left: 4px solid #eb9600;
    padding: 25px 30px;
    margin-bottom: 35px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border-radius: 0 8px 8px 0;
  }
  .pmdc-intro-box p {
    font-size: 15px;
    line-height: 1.8;
    color: #444;
    margin-bottom: 12px;
  }
  .pmdc-badge {
    display: inline-block;
    background: #eb9600;
    color: #fff;
    padding: 4px 12px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 4px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 12px;
  }
  .series-nav-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 35px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #edf1f5;
  }
  .series-nav-pills a {
    background: #fff;
    color: #111e38;
    border: 1px solid #dcdfe6;
    padding: 8px 16px;
    border-radius: 5px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
  }
  .series-nav-pills a:hover {
    background: #eb9600;
    color: #fff;
    border-color: #eb9600;
    transform: translateY(-2px);
  }
  .series-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    margin-bottom: 45px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.04);
    overflow: hidden;
    scroll-margin-top: 100px;
  }
  .series-card-header {
    background: #111e38;
    color: #fff;
    padding: 15px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
  }
  .series-card-header h3 {
    color: #fff;
    font-size: 20px;
    margin: 0;
    font-weight: 700;
  }
  .series-card-header .header-badges {
    display: flex;
    gap: 8px;
  }
  .series-badge-power {
    background: #eb9600;
    color: #fff;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
  }
  .series-badge-volt {
    background: #203354;
    color: #fff;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 12px;
    border: 1px solid #3b5073;
  }
  .series-card-body {
    padding: 25px;
  }
  .feature-table-sm {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: collapse;
  }
  .feature-table-sm td {
    padding: 10px 14px;
    font-size: 13.5px;
    border-bottom: 1px solid #edf1f5;
  }
  .feature-table-sm td.prop-name {
    font-weight: 600;
    color: #222;
    width: 38%;
    background: #fcfdfe;
  }
  .dim-table-heading {
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #111e38;
    margin: 20px 0 10px 0;
    display: flex;
    align-items: center;
  }
  .dim-table-heading:before {
    content: "";
    display: inline-block;
    width: 4px;
    height: 16px;
    background: #eb9600;
    margin-right: 8px;
    border-radius: 2px;
  }
  .table-responsive-wrapper {
    overflow-x: auto;
    border: 1px solid #e9ecef;
    border-radius: 6px;
    background: #fff;
    margin-bottom: 15px;
  }
  .dim-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 750px;
    font-size: 12.5px;
    text-align: center;
  }
  .dim-table th, .dim-table td {
    padding: 8px 10px;
    border: 1px solid #edf1f5;
  }
  .dim-table th {
    background: #f4f6f9;
    color: #111e38;
    font-weight: 700;
  }
  .dim-table tr:hover td {
    background: #fafbfc;
  }
  .dim-table td.highlight-col {
    background: #fdfdfd;
    font-weight: 600;
  }
  .option-card {
    background: #fff;
    border: 1px solid #e5e9f2;
    border-radius: 8px;
    padding: 22px 18px;
    text-align: center;
    transition: all 0.3s ease;
    height: calc(100% - 20px);
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
  }
  .option-card:hover {
    transform: translateY(-4px);
    border-color: #eb9600;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  }
  .option-card-icon {
    width: 55px;
    height: 55px;
    line-height: 55px;
    background: #fff5e6;
    color: #eb9600;
    border-radius: 50%;
    margin: 0 auto 15px auto;
    font-size: 22px;
  }
  .option-card h5 {
    font-size: 15px;
    font-weight: 700;
    color: #111e38;
    margin-bottom: 8px;
  }
  .option-card p {
    font-size: 12.5px;
    color: #666;
    line-height: 1.5;
    margin: 0;
  }
  .qc-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .qc-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    font-size: 14px;
    color: #444;
    line-height: 1.6;
  }
  .qc-list li i {
    position: absolute;
    left: 0;
    top: 3px;
    color: #eb9600;
    font-size: 16px;
  }
  .rfq-box {
    background: #f7f9fc;
    border: 2px solid #eb9600;
    border-radius: 10px;
    padding: 35px;
    margin: 40px 0 20px 0;
  }
  .btn-rfq {
    background: #eb9600 !important;
    color: #fff !important;
    border: none !important;
    padding: 12px 28px !important;
    font-weight: 600;
    border-radius: 5px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
  }
  .btn-rfq:hover {
    background: #d48400 !important;
    transform: translateY(-2px);
  }
  .bldc-cross-banner {
    background: linear-gradient(135deg, #111e38 0%, #1e3a6a 100%);
    border-radius: 8px;
    padding: 25px 30px;
    color: #fff;
    margin: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 15px;
  }
  .bldc-cross-banner h4 {
    color: #fff;
    margin: 0 0 6px 0;
    font-size: 18px;
    font-weight: 700;
  }
  .bldc-cross-banner p {
    color: #cfd9e8;
    margin: 0;
    font-size: 13.5px;
  }
</style>

<!-- Schema.org JSON-LD Structured Data for Product, Breadcrumbs & FAQs -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Product",
      "@id": "https://www.globescott.net/products-pmdc-motors/#product",
      "name": "Permanent Magnet DC (PMDC) Motors",
      "image": [
        "https://www.globescott.net/wp-content/uploads/2020/02/Permanent-Magnet-DC-Motors-1-550x367.png",
        "https://www.globescott.net/wp-content/uploads/2020/02/Permanent-Magnet-DC-Motors_1-550x367.png",
        "https://www.globescott.net/wp-content/uploads/2020/02/D144-SERIES-550x367.png"
      ],
      "description": "High-performance Permanent Magnet DC (PMDC) motors manufactured in India by Globe Scott Motors. Available from 12V to 220V DC, 15W to 1500W with IEC B3, B5, and B14 mountings for industrial, automotive, pump, and automation OEMs.",
      "sku": "GSM-PMDC-SERIES",
      "mpn": "GSM-PMDC-IND",
      "brand": {
        "@type": "Brand",
        "name": "Globe Scott Motors"
      },
      "manufacturer": {
        "@type": "Organization",
        "name": "Globe Scott Motors Pvt. Ltd.",
        "url": "https://www.globescott.net/"
      },
      "category": "Electric Motors > PMDC Motors",
      "offers": {
        "@type": "AggregateOffer",
        "url": "https://www.globescott.net/products-pmdc-motors/",
        "priceCurrency": "INR",
        "lowPrice": "1200",
        "highPrice": "35000",
        "offerCount": "25",
        "priceValidUntil": "2027-12-31",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "Globe Scott Motors Pvt. Ltd."
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "34",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [
        {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          },
          "author": {
            "@type": "Organization",
            "name": "Industrial Equipment Engineering"
          },
          "datePublished": "2026-02-18",
          "reviewBody": "Robust PMDC motors with high starting torque, low vibration, and reliable brush housings. Ideal for our hospital bed actuators and pumping units."
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.globescott.net/products-pmdc-motors/#breadcrumb",
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
          "name": "Products",
          "item": "https://www.globescott.net/products/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "PMDC Motors Manufacturer India",
          "item": "https://www.globescott.net/products-pmdc-motors/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.globescott.net/products-pmdc-motors/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a PMDC motor and where is it used?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Permanent Magnet DC (PMDC) motor utilizes high-energy permanent magnets in the stator instead of field windings. This design delivers high starting torque, a linear speed-torque curve, compact dimensions, and high power density. PMDC motors are widely used in automotive wipers, power windows, industrial conveyor drives, medical equipment, actuators, and portable power tools."
          }
        },
        {
          "@type": "Question",
          "name": "What supply voltages and power ratings are available in Globe Scott PMDC motors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Globe Scott Motors manufactures PMDC motors across 12V, 24V, 36V, 48V, 110V, 180V, and 220V DC. Power output ratings range from fractional 15W up to 1500W (2 HP) across five standard frame series: A60, A80, A90, B114, and D144."
          }
        },
        {
          "@type": "Question",
          "name": "What mounting configurations are offered for PMDC motors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our PMDC motors adhere to international IEC metric standards and are available in B3 (foot mount), B5 (flange mount), and B14 (face mount) configurations, with custom shaft diameters, lengths, and keyway machining."
          }
        },
        {
          "@type": "Question",
          "name": "Can you provide PMDC motors with gearboxes and brakes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer integrated worm or spur gearboxes, power-off electromagnetic brakes, optical encoders, and PWM electronic controllers tailored to customer specifications."
          }
        }
      ]
    }
  ]
}
</script>
EOD;

require_once __DIR__ . '/includes/header.php';
?>

<!-- End of Header ============================================= -->
<main class="normal-footer">

  <!-- Breadcrumb Section -->
  <section class="breadcrumb-area breadcrumb-bg image-overlay" style="background-image: url(/wp-content/uploads/2020/02/AdobeStock_115615488_Preview-e1581314210869.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="page-title header1-height">
            <h1>PMDC Motor Manufacturer in India</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="home" href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/products/">Products</a></li>
                <li class="breadcrumb-item active">PMDC Motors</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb End -->

  <!-- Main Content Container -->
  <div class="container pt-60 pb-50">

    <!-- Executive Overview & Engineering Value -->
    <div class="row">
      <div class="col-lg-12">
        <div class="pmdc-intro-box">
          <span class="pmdc-badge">Precision Motion Control</span>
          <h2>Permanent Magnet DC (PMDC) Motors — 15W to 1,500W (12V to 220V DC)</h2>
          <p>
            <strong>Globe Scott Motors Pvt. Ltd.</strong> is one of India's foremost manufacturers of high-performance <strong>Permanent Magnet Direct Current (PMDC) Motors</strong>. Established in 1985 under an Indo-US joint venture, our ISO 9001:2015 certified manufacturing plant in Killa Pardi, Gujarat produces industrial-grade PMDC motors engineered for maximum torque density, linear speed-torque control, and dependable continuous service.
          </p>
          <p>
            In a PMDC motor, high-coercivity permanent magnets positioned inside a cylindrical steel stator housing establish a constant magnetic field, eliminating stator winding copper losses and reducing physical motor dimensions. From fractional 15W precision drives to 1.5 kW heavy-duty industrial drives, our PMDC motor families (A60, A80, A90, B114, and D144) are available in standard <strong>IEC B3 (Foot), B5 (Flange), and B14 (Face)</strong> mountings.
          </p>
          <p class="mb-0">
            <em>Need higher torque at reduced speeds? Explore our integrated <a href="/products-pmdc-geared-motors/" style="color:#eb9600; font-weight:600;">PMDC Geared Motors</a> or view our <a href="/products-pmdc-transaxle/" style="color:#eb9600; font-weight:600;">PMDC Transaxles</a> for mobility vehicles.</em>
          </p>
        </div>
      </div>
    </div>

    <!-- Quick Navigation Pills -->
    <div class="series-nav-pills">
      <span style="align-self:center; font-weight:700; color:#555; margin-right:5px; font-size:13px;"><i class="fa fa-sliders" style="color:#eb9600;"></i> Jump to Series:</span>
      <a href="#series-a60">A 60 Series (15W - 75W)</a>
      <a href="#series-a80">A 80 Series (45W - 200W)</a>
      <a href="#series-a90">A 90 Series (90W - 250W)</a>
      <a href="#series-b114">B 114 Series (200W - 750W)</a>
      <a href="#series-d144">D 144 Series (500W - 1500W)</a>
      <a href="#pmdc-options">Custom Options</a>
      <a href="#inquire">Request Quote</a>
    </div>

    <!-- SERIES 1: A60 SERIES -->
    <div class="series-card" id="series-a60">
      <div class="series-card-header">
        <h3>PMDC Motors — A 60 Series</h3>
        <div class="header-badges">
          <span class="series-badge-power">15W – 75W</span>
          <span class="series-badge-volt">12V – 220V DC</span>
        </div>
      </div>
      <div class="series-card-body">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-5 text-center mb-3 mb-md-0">
            <img src="/wp-content/uploads/2020/02/Permanent-Magnet-DC-Motors-1-550x367.png" alt="Globe Scott Motors PMDC Motors A 60 Series" class="img-fluid" style="max-height:240px; object-fit:contain;" />
            <p class="text-muted mt-2" style="font-size:12px;">A 60 Series PMDC Motor with IEC Mounting Flange</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <table class="feature-table-sm">
              <tbody>
                <tr>
                  <td class="prop-name">Stator Magnet Field</td>
                  <td>High-energy permanent ferrite magnets; 2-Pole cylindrical steel stator</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Supply</td>
                  <td>12V, 24V, 36V, 48V, 110V, 180V, 220V DC</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Output Range</td>
                  <td>From 15W up to 75W</td>
                </tr>
                <tr>
                  <td class="prop-name">Duty Cycle</td>
                  <td>S1 (Continuous), S2 (Short-time), S3 (Intermittent)</td>
                </tr>
                <tr>
                  <td class="prop-name">Brush Housing</td>
                  <td>Totally enclosed / Rapid external brush replacement column</td>
                </tr>
                <tr>
                  <td class="prop-name">Protection &amp; Options</td>
                  <td>IP20 to IP44 standard (IP54 optional); Electromagnetic failsafe brake available</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="dim-table-heading">A 60 Series — Dimensional Specifications (in mm)</div>
        <div class="table-responsive-wrapper">
          <table class="dim-table">
            <thead>
              <tr>
                <th>Mounting</th>
                <th>IEC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>H</th>
                <th>J</th>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>P</th>
                <th>Q</th>
                <th>R</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="highlight-col"><strong>B3 (Foot)</strong></td>
                <td>-</td>
                <td>99</td>
                <td>80</td>
                <td>40</td>
                <td>11</td>
                <td>23</td>
                <td>-</td>
                <td>50-53</td>
                <td>7</td>
                <td>7</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">100 to 150</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">63 to 72</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B5 (Flange)</strong></td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
                <td>20</td>
                <td>7.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>100</td>
                <td>80</td>
                <td>120</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>9.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>115</td>
                <td>95</td>
                <td>140</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B14 (Face)</strong></td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
                <td>20</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>65</td>
                <td>50</td>
                <td>-</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>75</td>
                <td>60</td>
                <td>-</td>
                <td>3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- SERIES 2: A80 SERIES -->
    <div class="series-card" id="series-a80">
      <div class="series-card-header">
        <h3>PMDC Motors — A 80 Series</h3>
        <div class="header-badges">
          <span class="series-badge-power">45W – 200W</span>
          <span class="series-badge-volt">12V – 220V DC</span>
        </div>
      </div>
      <div class="series-card-body">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-5 text-center mb-3 mb-md-0">
            <img src="/wp-content/uploads/2020/02/Permanent-Magnet-DC-Motors_1-550x367.png" alt="Globe Scott Motors PMDC Motors A 80 Series" class="img-fluid" style="max-height:240px; object-fit:contain;" />
            <p class="text-muted mt-2" style="font-size:12px;">A 80 Series Industrial PMDC Motor</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <table class="feature-table-sm">
              <tbody>
                <tr>
                  <td class="prop-name">Stator Magnet Field</td>
                  <td>Ceramic permanent magnet stator; 2-Pole heavy-duty frame</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Supply</td>
                  <td>12V, 24V, 36V, 48V, 110V, 180V, 220V DC</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Output Range</td>
                  <td>From 45W up to 200W</td>
                </tr>
                <tr>
                  <td class="prop-name">Duty Cycle</td>
                  <td>S1 (Continuous), S2 (Short-time), S3 (Intermittent)</td>
                </tr>
                <tr>
                  <td class="prop-name">Brush Housing</td>
                  <td>Totally enclosed / External brush access for rapid servicing</td>
                </tr>
                <tr>
                  <td class="prop-name">Protection &amp; Options</td>
                  <td>IP20 to IP44 standard; Electromagnetic brake &amp; encoder ready</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="dim-table-heading">A 80 Series — Dimensional Specifications (in mm)</div>
        <div class="table-responsive-wrapper">
          <table class="dim-table">
            <thead>
              <tr>
                <th>Mounting</th>
                <th>IEC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>H</th>
                <th>J</th>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>P</th>
                <th>Q</th>
                <th>R</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="highlight-col"><strong>B3 (Foot)</strong></td>
                <td>-</td>
                <td>99</td>
                <td>80</td>
                <td>40</td>
                <td>11</td>
                <td>23</td>
                <td>-</td>
                <td>50-53</td>
                <td>7</td>
                <td>7</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">100 to 150</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">78 to 84</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B5 (Flange)</strong></td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
                <td>20</td>
                <td>7.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>100</td>
                <td>80</td>
                <td>120</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>9.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>115</td>
                <td>95</td>
                <td>140</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B14 (Face)</strong></td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
                <td>20</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>65</td>
                <td>50</td>
                <td>-</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>75</td>
                <td>60</td>
                <td>-</td>
                <td>3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- SERIES 3: A90 SERIES -->
    <div class="series-card" id="series-a90">
      <div class="series-card-header">
        <h3>PMDC Motors — A 90 Series</h3>
        <div class="header-badges">
          <span class="series-badge-power">90W – 250W</span>
          <span class="series-badge-volt">12V – 220V DC</span>
        </div>
      </div>
      <div class="series-card-body">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-5 text-center mb-3 mb-md-0">
            <img src="/wp-content/uploads/2020/02/Permanent-magnet-DC-Motors_2-550x367.png" alt="Globe Scott Motors PMDC Motors A 90 Series" class="img-fluid" style="max-height:240px; object-fit:contain;" />
            <p class="text-muted mt-2" style="font-size:12px;">A 90 Series Continuous Duty PMDC Motor</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <table class="feature-table-sm">
              <tbody>
                <tr>
                  <td class="prop-name">Stator Magnet Field</td>
                  <td>Permanent magnet excitation; 2-Pole precision balanced armature</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Supply</td>
                  <td>12V, 24V, 36V, 48V, 110V, 180V, 220V DC</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Output Range</td>
                  <td>From 90W up to 250W</td>
                </tr>
                <tr>
                  <td class="prop-name">Duty Cycle</td>
                  <td>S1 (Continuous), S2 (Short-time), S3 (Intermittent)</td>
                </tr>
                <tr>
                  <td class="prop-name">Brush Housing</td>
                  <td>Totally enclosed / Fast replacement brush holders</td>
                </tr>
                <tr>
                  <td class="prop-name">Protection &amp; Options</td>
                  <td>IP20 to IP44 standard; Electromagnetic brake, gearhead ready</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="dim-table-heading">A 90 Series — Dimensional Specifications (in mm)</div>
        <div class="table-responsive-wrapper">
          <table class="dim-table">
            <thead>
              <tr>
                <th>Mounting</th>
                <th>IEC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>H</th>
                <th>J</th>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>P</th>
                <th>Q</th>
                <th>R</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="highlight-col"><strong>B3 (Foot)</strong></td>
                <td>-</td>
                <td>99</td>
                <td>80</td>
                <td>40</td>
                <td>11</td>
                <td>23</td>
                <td>-</td>
                <td>50-53</td>
                <td>7</td>
                <td>7</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">111 to 187</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">90 to 94</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B5 (Flange)</strong></td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
                <td>20</td>
                <td>7.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>100</td>
                <td>80</td>
                <td>120</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>9.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>115</td>
                <td>95</td>
                <td>140</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B14 (Face)</strong></td>
                <td>56</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>9</td>
                <td>20</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>65</td>
                <td>50</td>
                <td>-</td>
                <td>2.5</td>
              </tr>
              <tr>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>75</td>
                <td>60</td>
                <td>-</td>
                <td>3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- SERIES 4: B114 SERIES -->
    <div class="series-card" id="series-b114">
      <div class="series-card-header">
        <h3>PMDC Motors — B 114 Series</h3>
        <div class="header-badges">
          <span class="series-badge-power">200W – 750W (Up to 1 HP)</span>
          <span class="series-badge-volt">12V – 220V DC</span>
        </div>
      </div>
      <div class="series-card-body">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-5 text-center mb-3 mb-md-0">
            <img src="/wp-content/uploads/2020/02/Permanent-magnet-DC-Motors_3-550x367.png" alt="Globe Scott Motors PMDC Motors B 114 Series" class="img-fluid" style="max-height:240px; object-fit:contain;" />
            <p class="text-muted mt-2" style="font-size:12px;">B 114 Series Heavy-Duty PMDC Motor</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <table class="feature-table-sm">
              <tbody>
                <tr>
                  <td class="prop-name">Stator Magnet Field</td>
                  <td>High-torque permanent ferrite magnets; 2-Pole precision dynamically balanced armature</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Supply</td>
                  <td>12V, 24V, 36V, 48V, 110V, 180V, 220V DC</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Output Range</td>
                  <td>From 200W up to 750W (1 Horsepower)</td>
                </tr>
                <tr>
                  <td class="prop-name">Duty Cycle</td>
                  <td>S1 (Continuous), S2 (Short-time), S3 (Intermittent)</td>
                </tr>
                <tr>
                  <td class="prop-name">Brush Housing</td>
                  <td>Totally enclosed / External brush inspection and replacement columns</td>
                </tr>
                <tr>
                  <td class="prop-name">Protection &amp; Options</td>
                  <td>IP20 to IP44 standard (IP54 optional); Electromagnetic brake available</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="dim-table-heading">B 114 Series — Dimensional Specifications (in mm)</div>
        <div class="table-responsive-wrapper">
          <table class="dim-table">
            <thead>
              <tr>
                <th>Mounting</th>
                <th>IEC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>H</th>
                <th>J</th>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>P</th>
                <th>Q</th>
                <th>R</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="highlight-col"><strong>B3 (Foot)</strong></td>
                <td>71</td>
                <td>112</td>
                <td>90</td>
                <td>45</td>
                <td>14</td>
                <td>30</td>
                <td>-</td>
                <td>71</td>
                <td>8.5</td>
                <td>14</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">142 to 265</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td rowspan="5" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">114</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B5 (Flange)</strong></td>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>9.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>115</td>
                <td>95</td>
                <td>140</td>
                <td>3</td>
              </tr>
              <tr>
                <td>71</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>14</td>
                <td>30</td>
                <td>9.5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>130</td>
                <td>110</td>
                <td>160</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td class="highlight-col" rowspan="2"><strong>B14 (Face)</strong></td>
                <td>63</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>11</td>
                <td>23</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>75</td>
                <td>60</td>
                <td>-</td>
                <td>3</td>
              </tr>
              <tr>
                <td>71</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>14</td>
                <td>30</td>
                <td>M5</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>85</td>
                <td>70</td>
                <td>-</td>
                <td>2.5</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- SERIES 5: D144 SERIES -->
    <div class="series-card" id="series-d144">
      <div class="series-card-header">
        <h3>PMDC Motors — D 144 Series</h3>
        <div class="header-badges">
          <span class="series-badge-power">500W – 1500W (Up to 2 HP)</span>
          <span class="series-badge-volt">12V – 48V High Current DC</span>
        </div>
      </div>
      <div class="series-card-body">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-5 text-center mb-3 mb-md-0">
            <img src="/wp-content/uploads/2020/02/D144-SERIES-550x367.png" alt="Globe Scott Motors PMDC Motors D 144 Series" class="img-fluid" style="max-height:240px; object-fit:contain;" />
            <p class="text-muted mt-2" style="font-size:12px;">D 144 Series Heavy Traction &amp; Hydraulic Drive PMDC Motor</p>
          </div>
          <div class="col-lg-8 col-md-7">
            <table class="feature-table-sm">
              <tbody>
                <tr>
                  <td class="prop-name">Stator Magnet Field</td>
                  <td>Heavy-duty 2-Pole and 4-Pole permanent magnet configurations</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Supply</td>
                  <td>12V, 24V, 36V, 48V DC (Battery &amp; Low-Voltage High-Current Systems)</td>
                </tr>
                <tr>
                  <td class="prop-name">Power Output Range</td>
                  <td>From 500W up to 1,500W (2 Horsepower continuous)</td>
                </tr>
                <tr>
                  <td class="prop-name">Duty Cycle</td>
                  <td>S1 (Continuous), S2 (Short-time), S3 (Intermittent)</td>
                </tr>
                <tr>
                  <td class="prop-name">Brush Housing</td>
                  <td>Heavy-duty totally enclosed brush gear with high-current carbon brushes</td>
                </tr>
                <tr>
                  <td class="prop-name">Protection &amp; Options</td>
                  <td>IP20 to IP44 standard; Spring-applied electromagnetic brake available</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="dim-table-heading">D 144 Series — Dimensional Specifications (in mm)</div>
        <div class="table-responsive-wrapper">
          <table class="dim-table">
            <thead>
              <tr>
                <th>Mounting</th>
                <th>IEC</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>H</th>
                <th>J</th>
                <th>K</th>
                <th>L</th>
                <th>M</th>
                <th>N</th>
                <th>P</th>
                <th>Q</th>
                <th>R</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="highlight-col"><strong>B3 (Foot)</strong></td>
                <td>80</td>
                <td>125</td>
                <td>100</td>
                <td>50</td>
                <td>19</td>
                <td>40</td>
                <td>-</td>
                <td>80</td>
                <td>9</td>
                <td>9</td>
                <td rowspan="3" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">164 to 256</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td rowspan="3" style="vertical-align:middle; background:#fbfcfd; font-weight:bold;">144.5</td>
              </tr>
              <tr>
                <td class="highlight-col"><strong>B5 (Flange)</strong></td>
                <td>80</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>19</td>
                <td>40</td>
                <td>12</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>165</td>
                <td>130</td>
                <td>200</td>
                <td>3.5</td>
              </tr>
              <tr>
                <td class="highlight-col"><strong>B14 (Face)</strong></td>
                <td>71</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>19</td>
                <td>40</td>
                <td>M6</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>100</td>
                <td>80</td>
                <td>-</td>
                <td>3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- CROSS-LINK: BLDC Upgrade Recommendation -->
    <div class="bldc-cross-banner">
      <div>
        <h4><i class="fa fa-lightbulb-o" style="color:#eb9600; margin-right:8px;"></i> Considering Brushless Technology for Next-Gen Projects?</h4>
        <p>Explore our high-efficiency Brushless DC (BLDC) motor range (12V to 310V DC) delivering >20,000 hours of zero-maintenance lifespan.</p>
      </div>
      <a href="/products-bldc-motors/" class="btn btn-rfq" style="background:#fff !important; color:#111e38 !important; padding:10px 20px !important;">View BLDC Motors</a>
    </div>

    <!-- CUSTOM OPTIONS & ACCESSORIES SECTION -->
    <div class="row mb-40" id="pmdc-options">
      <div class="col-lg-12 text-center mb-35">
        <span class="pmdc-badge">Custom Engineering</span>
        <h2>Available Options &amp; Integrated Accessories</h2>
        <p class="text-muted">Globe Scott PMDC motors can be fully customized with factory-fitted accessories for demanding OEM applications.</p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="option-card">
          <div class="option-card-icon"><i class="fa fa-hand-stop-o"></i></div>
          <h5>Electromagnetic Brakes</h5>
          <p>Power-off spring-applied failsafe brakes for holding loads securely during power outages.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="option-card">
          <div class="option-card-icon"><i class="fa fa-crosshairs"></i></div>
          <h5>Optical &amp; Magnetic Encoders</h5>
          <p>High-resolution incremental encoders for closed-loop positioning and speed control.</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="option-card">
          <div class="option-card-icon"><i class="fa fa-cogs"></i></div>
          <h5>Reduction Gearboxes</h5>
          <p>Direct-coupled worm and planetary gearheads for high torque multiplication.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="option-card">
          <div class="option-card-icon"><i class="fa fa-sliders"></i></div>
          <h5>Electronic Speed Controls</h5>
          <p>Matched PWM speed controllers with analog 0-10V, potentiometer, or digital control interfaces.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="option-card">
          <div class="option-card-icon"><i class="fa fa-shield"></i></div>
          <h5>EMI Suppression Filters</h5>
          <p>Integrated capacitors and chokes to suppress brush sparking and electromagnetic interference.</p>
        </div>
      </div>
    </div>

    <!-- QUALITY CONTROL & TESTING STANDARDS -->
    <div class="row align-items-center mb-50">
      <div class="col-lg-6 mb-30">
        <span class="pmdc-badge">Quality Assurance</span>
        <h3>Quality Control &amp; 100% Inspection Standards</h3>
        <p>
          Every PMDC motor produced at our Killa Pardi manufacturing facility complies with stringent ISO 9001:2015 quality standards and undergoes thorough testing before dispatch:
        </p>
        <ul class="qc-list">
          <li><i class="fa fa-check-circle"></i> <strong>Magnet Testing:</strong> Magnetic flux density and coercivity evaluation to ensure permanent field stability.</li>
          <li><i class="fa fa-check-circle"></i> <strong>Ultrasonic Flaw Detection:</strong> Raw material inspection for shafts and rotor laminations to eliminate structural defects.</li>
          <li><i class="fa fa-check-circle"></i> <strong>Computerized Armature Testing:</strong> Surge and high-voltage dielectric test across all commutator bars to detect inter-turn insulation faults.</li>
          <li><i class="fa fa-check-circle"></i> <strong>Dynamometer Load Testing:</strong> Torque, RPM, current draw, and overall efficiency testing across varying mechanical load profiles.</li>
          <li><i class="fa fa-check-circle"></i> <strong>Endurance &amp; Temperature Rise:</strong> Extended duty-cycle evaluation under full thermal ratings (Class F 155°C insulation).</li>
        </ul>
      </div>
      <div class="col-lg-6 mb-30">
        <div class="pmdc-intro-box" style="border-left:4px solid #111e38;">
          <h4 style="color:#111e38; margin-bottom:15px; font-weight:700;"><i class="fa fa-industry" style="color:#eb9600;"></i> Applications Across Industry</h4>
          <p style="font-size:14px; color:#555;">
            Our permanent magnet DC motors provide proven reliability in harsh automotive and industrial settings:
          </p>
          <ul style="font-size:13.5px; color:#444; line-height:1.8; padding-left:20px;">
            <li><strong>Automotive:</strong> Heavy-duty windshield wipers, window lifters, heater blowers, hydraulic tailgate lifts</li>
            <li><strong>Healthcare &amp; Medical:</strong> Electric hospital beds, patient hoists, mobility scooters, lab centrifuges</li>
            <li><strong>Industrial Equipment:</strong> Printing machines, packaging equipment, conveyors, valve actuators</li>
            <li><strong>Commercial &amp; Domestic:</strong> Portable electric tools, drilling units, pool cleaners, rotary blowers</li>
          </ul>
          <a href="/applications/" class="btn btn-sm btn-rfq mt-2">Explore All Applications</a>
        </div>
      </div>
    </div>

    <!-- REQUEST FOR QUOTE (RFQ) / INQUIRY SECTION -->
    <div class="row" id="inquire">
      <div class="col-lg-12">
        <div class="rfq-box">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <span class="pmdc-badge">Factory Direct Supply</span>
              <h3>Request Technical Data Sheets or a PMDC Motor Quote</h3>
              <p>
                Provide your required operating voltage, power rating, rated speed, torque, mounting preference (B3, B5, or B14), and anticipated batch volumes. Our application engineers in Killa Pardi, Gujarat will prepare customized technical proposals and CAD outline drawings.
              </p>
              <div class="row text-muted" style="font-size:13px;">
                <div class="col-sm-6 mb-2">
                  <i class="fa fa-phone" style="color:#eb9600; margin-right:5px;"></i> Factory: +91 260 2584144 / 2584145
                </div>
                <div class="col-sm-6 mb-2">
                  <i class="fa fa-envelope" style="color:#eb9600; margin-right:5px;"></i> Email: sales@globescott.net
                </div>
                <div class="col-sm-12">
                  <i class="fa fa-map-marker" style="color:#eb9600; margin-right:5px;"></i> Works: Plot No. 1802, GIDC, Killa Pardi - 396125, Dist. Valsad, Gujarat, India
                </div>
              </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0 text-center">
              <div style="background:#fff; padding:25px; border-radius:8px; box-shadow:0 4px 15px rgba(0,0,0,0.06);">
                <h5 style="color:#111e38; margin-bottom:15px; font-weight:700;">Connect with our Engineering Team</h5>
                <p style="font-size:13px; color:#666; margin-bottom:20px;">Get direct engineering assistance on motor sizing, shaft modifications, and OEM discounts.</p>
                <a href="/contact-us/" class="btn btn-rfq btn-block"><i class="fa fa-paper-plane" style="margin-right:8px;"></i> Contact Engineering Specialists</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Main Content Container End -->

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
