# Full SEO Audit — Globe Scott Motors (globescott.net)

**Date:** 2026-08-13
**Audit target:** Local rebuilt PHP codebase of `globescott.net` (WordPress → static PHP migration in progress)
**Pages analyzed:** 21 PHP templates (source-level audit)
**Business type:** Manufacturer / Local B2B — DC, BLDC, PMDC & Geared motors and railway signalling products, Killa Pardi, Gujarat, India

> **Method note:** This is a **source-level** audit of the PHP rebuild in this repository, cross-checked against the live site. `includes/config.php` still sets `SITE_URL` to `http://localhost:8000`, so this code is pre-deployment. Findings describe how the site **will** behave when this code goes live under the committed `.htaccess`. The single most important item (broken asset paths) should be **verified on the live server immediately after deploy**.

---

## Executive Summary

### Overall SEO Health Score: **42 / 100** — *Needs Significant Work*

| Category | Weight | Score |
|---|---|---|
| Technical SEO | 22% | 35 |
| Content Quality | 23% | 55 |
| On-Page SEO | 20% | 45 |
| Schema / Structured Data | 10% | 5 |
| Performance (CWV) | 10% | 45 |
| AI Search Readiness | 10% | 40 |
| Images | 5% | 45 |

The site has a genuine foundation to build on — a real manufacturer with 40 years of history, certifications, detailed technical pages, and consistent NAP. But it ships **none** of the modern on-page and technical SEO essentials (meta descriptions, canonicals, structured data, sitemap, robots.txt), and it carries a **deployment-breaking asset-path bug** that will leave every interior page unstyled with broken navigation.

### Top 5 Critical / High Issues
1. **Relative asset & link paths break on trailing-slash URLs.** CSS/JS load as `wp-content/...` (no leading slash) while `.htaccess` forces directory URLs like `/about-us/`. On any interior page the browser resolves `wp-content/.../style.css` to `/about-us/wp-content/.../style.css` → **404**. Pages render unstyled; nav (`href="index/"`) and the contact form (`action="contact-us/"`) break too.
2. **Zero meta descriptions** across all 21 pages.
3. **Zero canonical tags, Open Graph, or Twitter Cards** site-wide.
4. **Zero structured data** — no Organization, LocalBusiness, Product, Breadcrumb, or Article JSON-LD.
5. **No robots.txt and no XML sitemap.**

### Top 5 Quick Wins
1. Publish `robots.txt` + `sitemap.xml` (ready-to-use files in [`fixes/`](fixes/)).
2. Add Organization + LocalBusiness JSON-LD to the header include (template provided).
3. Add meta description + canonical + Open Graph output to `header.php` (one edit, all pages).
4. Fix the broken `/dc-mo/` link → `/products-pmdc-motors/`.
5. Remove the outdated 2020 **COVID-19 banner** and correct the spelling errors baked into URLs/titles (`Benifits`, `Transaxel`, `Amuzement`, `Handeling`, `morden`).

---

## 1. Technical SEO — 35/100

### What works
- Clean, extensionless, keyword-friendly URLs with trailing slashes, enforced by `.htaccess`.
- 301 redirect from `/page.php` → `/page/` (single canonical form for the extension).
- Valid `viewport` meta and `lang="en-US"`.
- Semantic breadcrumb navigation (`<nav aria-label="breadcrumb">`) on interior pages.
- Each page template owns exactly one `<main>` landmark (header/footer add none).

### 🔴 Critical — Relative asset/link paths will break every non-root page
`includes/header.php` references stylesheets and scripts with **document-relative** paths:
```
<link href="wp-content/themes/rounding/assets/css/rounding-main.css" .../>
<script src="wp-includes/js/jquery/jquery.min.js"></script>
```
Navigation and the contact form are relative too:
```
<a href="index/">Home</a>   <a href="about-us/">About Us</a>
<form action="contact-us/" method="post">   (contact-us.php)
```
`.htaccess` 301-redirects every request to a **directory-style** URL (`/about-us/`, `/products/`, and even the homepage link `/index/`). When the browser is on `https://www.globescott.net/about-us/` and sees `href="wp-content/.../style.css"`, it resolves it to `https://www.globescott.net/about-us/wp-content/.../style.css` — which does not exist. **Result: interior pages load with no CSS/JS (unstyled, broken menus), broken internal links, and a contact form that posts to `/contact-us/contact-us/`.**

Note the inconsistency that masks the bug during casual testing: hero/breadcrumb **background images** in `index.php`/`products.php` use *absolute* `https://www.globescott.net/...` URLs (so they appear to work), while the CSS/JS `<link>`/`<script>` tags and most nav use relative paths (so they break). The homepage viewed at `/` may look fine, but clicking the logo/Home (`/index/`) breaks it.

**Fix:** make all asset `src`/`href` and internal links **root-relative** (leading `/`), e.g. `href="/wp-content/...css"`, `href="/about-us/"`, `action="/contact-us/"`. Alternatively add `<base href="https://www.globescott.net/">` to `<head>` (simpler, but affects in-page `#anchor` links). Root-relative is recommended. **Verify on the live server after deploying.**

### 🔴 Critical — No canonical tags
0/21 pages emit `<link rel="canonical">`. Because both `/page.php` and `/page/` (and `/`, `/index/`) can resolve, duplicate-URL indexation is a real risk. Emit a self-referencing absolute canonical from the header include.

### 🟠 High — No robots.txt, no XML sitemap
Neither `/robots.txt` nor `/sitemap.xml` exists. Crawlers get no crawl guidance and no sitemap hint. Ready-to-deploy files are in [`fixes/robots.txt`](fixes/robots.txt) and [`fixes/sitemap.xml`](fixes/sitemap.xml).

### 🟠 High — `SITE_URL` = `http://localhost:8000`
`includes/config.php` still holds a localhost URL. Any absolute URL you generate for canonical/sitemap/OG/schema from this constant will be wrong in production. Set it to `https://www.globescott.net` and standardize on the **www + https** host (consistent with the absolute image URLs already in the code).

### 🟡 Medium — Dead WordPress leftover forms
- Blog comment forms POST to `https://www.globescott.net/wp-comments-post/` (no longer exists on a static site → 404).
- Sidebar search forms GET `https://www.globescott.net/` with `role="search"` (no search backend → just reloads the homepage).

Remove these widgets or wire them to a working handler.

### 🟡 Medium — Broken internal link
`products-pmdc-motors.php` links *"DC motor"* to `href="/dc-mo/"` (truncated slug → 404). Repoint to `/products-pmdc-motors/` or `/what-is-bldc-motor/`.

### 🟡 Medium — Render-blocking head resources
~15 separate stylesheets plus jQuery load in `<head>`, unbundled/unminified; no `preconnect`, no critical-CSS strategy. See Performance.

---

## 2. On-Page SEO — 45/100

### What works
- Every page has a **unique** `<title>` and a consistent brand suffix.
- Interior pages use a single H1.
- Product thumbnails and contact icons carry descriptive `alt`.

### 🟠 High — No meta descriptions
0/21 pages define one; `header.php` never outputs a description tag. Google will scrape arbitrary snippets, costing you CTR control on branded and product queries.

### 🟡 Medium — Homepage has 4 H1 tags
The Slick slider renders four `<h1>`s:
> "Driving Motorized Innovation" · "Guaranteed Faster Engineering Solution" · "Best Motors For **Amuzement** Park Rides" · "Motors For Material **Handeling** Equipments"

Multiple H1s dilute topical focus and **none** contains the core query *"DC motor manufacturer"*. Keep one keyword-rich H1 and demote slide headings to `<h2>`/`<span>`.

### 🟡 Medium — Under-optimized titles
Titles lead with generic labels and an all-caps brand (`Products – GLOBE SCOTT MOTORS PVT LTD`), omit high-intent keywords and location (India/Gujarat). Rewrite, e.g.:
- `PMDC Motors Manufacturer & Supplier in India | Globe Scott Motors`
- `Railway Signalling Motors — Point Machine & Signalling | Globe Scott`

### 🟡 Medium — Spelling errors in indexable slugs/titles/H1s
| Wrong | Correct | Where |
|---|---|---|
| Benifits | Benefits | URL `benifits-of-using-dc-motors`, title, H1 |
| Transaxel | Transaxle | URL `products-pmdc-transaxel`, title, menu inconsistency |
| Amuzement | Amusement | Homepage H1 |
| Handeling | Handling | Homepage H1 |
| morden | modern | Homepage slider body copy |

Correct these and 301-redirect the old slugs.

### 🔵 Low — Missing alt text
13 homepage images, 2 on about-us, 2 on applications, and the footer logo (`alt=""`) lack alt text.

---

## 3. Content Quality — 55/100

### What works
- Genuine expertise: **railway-signalling** (~1,700 words) and **PMDC motors** (~1,000 words) pages are substantive.
- Strong E-E-A-T raw material: founded **1985**, Indo-US JV with Scott Motors Inc. USA, **ISO 9001:2015** and **CE** certifications on the About page.
- Real NAP + embedded Google Map.

### 🟠 High — Thin product & hub pages
| Page | Approx. words |
|---|---|
| products-bldc-motors | ~36 |
| applications | ~45 (over 9 images) |
| products (hub) | ~136 |
| products-pmdc-transaxel | ~179 |
| products-pmdc-geared-motors | ~223 |

These are too thin to rank for product/commercial queries. Expand each to 400–700 words with specs (voltage, power, RPM, torque), applications, materials, differentiators, and a spec table.

### 🟡 Medium — Outdated COVID-19 banner (site-wide)
`header.php` hardcodes *"COVID-19 Alert: We have resumed manufacturing…"* on **every** page — a strong stale-content signal. Remove it.

### 🟡 Medium — No E-E-A-T bylines on blog
Blog posts lack visible author, credentials, and structured publish/updated dates; comment threads are dead. Add author bios + Article schema.

### 🔵 Low — Duplicated boilerplate blurbs
Product hub descriptions are generic marketing lines; make each unique and specification-rich.

---

## 4. Schema / Structured Data — 5/100

### 🟠 High — No structured data at all
Zero JSON-LD blocks site-wide. Missing, in priority order:
- **Organization + LocalBusiness** (physical manufacturer with NAP, geo, `sameAs` socials) — sitewide.
- **BreadcrumbList** — interior pages (breadcrumb HTML already exists).
- **Product / ItemList** — product pages.
- **Article** — blog posts.
- **WebSite** — homepage.

This blocks rich results and weakens entity understanding for both Google and AI engines. Copy-paste Organization + LocalBusiness JSON-LD is in [`fixes/schema-organization-localbusiness.jsonld`](fixes/schema-organization-localbusiness.jsonld).

---

## 5. Performance (Core Web Vitals) — 45/100

*(Lab-level estimate from source; no field/CrUX data available in this environment.)*

### What works
- `loading="lazy"` and `srcset` on several product images.
- Most JS loads before `</body>`.

### 🟠 High — No next-gen images; heavy payload
~**10 MB** of images across **188** files, **0** WebP/AVIF. Largest 300–430 KB; many product photos shipped as PNG. This inflates **LCP** on the image-led hero/slider and product pages. Convert to WebP/AVIF, compress, and size correctly (target LCP image < 150 KB).

### 🟡 Medium — Heavy slider + many JS libraries
Homepage loads Slick, Bootstrap, Isotope, Magnific Popup, WOW, Waypoints, CounterUp, Meanmenu, Popper, jQuery — a large footprint for a brochure site. Remove unused libs, defer/async, lazy-init the slider, preload the first slide image.

### 🟡 Medium — Unminified/unbundled CSS & JS
~15 CSS + ~17 JS files load individually. Bundle, minify, strip unused CSS, add long-cache headers.

---

## 6. AI Search Readiness (GEO) — 40/100

- **No entity/structured signals** (no schema, no `sameAs`, no author entities, no FAQ) → weak grounding for AI Overviews / ChatGPT / Perplexity. Add schema + `sameAs`, plus concise **FAQ blocks with FAQPage schema** on product/blog pages.
- Key facts (founded 1985, Indo-US JV, certifications, product families) are present as prose — good — but not machine-linked to the entity.
- **No `llms.txt`** (optional, ignored by Google) — cheap to add if desired.

---

## 7. Local SEO — 50/100

- **Consistent NAP** in header/footer/contact and a working embedded Google Map (Killa Pardi, Gujarat). Facebook, Twitter/X, LinkedIn linked.
- **No LocalBusiness schema / geo coordinates** — add it (template provided) and ensure the Google Business Profile is claimed and NAP-consistent.
- The contact map iframe sets `pointer-events:none`; add a "Get directions" link to the GBP listing.

---

## 8. Images — 45/100

- `srcset` + lazy loading on product thumbnails; mostly descriptive alt.
- **No WebP/AVIF**, 10 MB total, several oversized files; **13+ images missing alt**; footer logo `alt=""`.

---

## Page Inventory (signals)

| Page | Title unique | Meta desc | Canonical | H1 count | Approx words |
|---|---|---|---|---|---|
| index (home) | ✓ | ✗ | ✗ | **4** | ~1,535 |
| about-us | ✓ | ✗ | ✗ | 1 | ~957 |
| products (hub) | ✓ | ✗ | ✗ | 1 | ~136 (thin) |
| products-pmdc-motors | ✓ | ✗ | ✗ | 1 | ~996 |
| products-geared-motors | ✓ | ✗ | ✗ | 1 | ~472 |
| products-pmdc-geared-motors | ✓ | ✗ | ✗ | 1 | ~223 (thin) |
| products-pmdc-transaxel | ✓ | ✗ | ✗ | 1 | ~179 (thin) |
| products-railway-signalling-products | ✓ | ✗ | ✗ | 1 | ~1,722 |
| products-bldc-motors | ✓ | ✗ | ✗ | 1 | ~36 (very thin) |
| applications | ✓ | ✗ | ✗ | 1 | ~45 (very thin) |
| electromechanical-integrity | ✓ | ✗ | ✗ | 1 | ~419 |
| case-study | ✓ | ✗ | ✗ | 1 | ~385 |
| contact-us | ✓ | ✗ | ✗ | 1 | ~65 |
| blog | ✓ | ✗ | ✗ | 1 | ~393 |
| privacy-policy | ✓ | ✗ | ✗ | 1 | ~702 |
| what-is-bldc-motor | ✓ | ✗ | ✗ | 1 | ~407 |
| advantages-of-using-bldc-motor… | ✓ | ✗ | ✗ | 1 | ~742 |
| benifits-of-using-dc-motors | ✓ | ✗ | ✗ | 1 | ~362 |
| dc-motor-maintenance | ✓ | ✗ | ✗ | 1 | ~652 |
| difference-between-dc-motors-and-geared-motors | ✓ | ✗ | ✗ | 1 | ~491 |
| which-motor-is-preferable | ✓ | ✗ | ✗ | 1 | ~241 |

---

See [`ACTION-PLAN.md`](ACTION-PLAN.md) for the prioritized roadmap, [`findings/`](findings/) for per-category detail, and [`fixes/`](fixes/) for copy-paste robots.txt, sitemap.xml, and JSON-LD schema.
