# Schema, Performance, Images, GEO & Local — Findings

## Schema / Structured Data — 5/100 (High severity)
- **Zero JSON-LD** site-wide. Missing Organization, LocalBusiness, WebSite, BreadcrumbList, Product/ItemList, Article, FAQPage.
- Add sitewide Organization + LocalBusiness (ready file: `../fixes/schema-organization-localbusiness.jsonld`), BreadcrumbList on interior pages (breadcrumb HTML already present), Product on product pages, Article on blog posts.

## Performance (CWV) — 45/100
- **No WebP/AVIF; ~10 MB across 188 images.** Largest 300–430 KB (e.g. `pexels-darshak-pandya-2526935.jpg` 428 KB, `blog2-min-1024x507.png` 364 KB). Convert + compress; target LCP image < 150 KB.
- **Heavy homepage:** Slick slider + Bootstrap, Isotope, Magnific Popup, WOW, Waypoints, CounterUp, Meanmenu, Popper, jQuery. Remove unused, defer/async, lazy-init slider, preload first slide.
- **Unbundled/unminified** ~15 CSS + ~17 JS. Bundle, minify, strip unused CSS, long-cache headers.
- Positive: `loading="lazy"` + `srcset` on product thumbnails; most JS at end of `<body>`.

## Images — 45/100
- 0 next-gen formats; oversized PNGs; **13+ missing alt** (homepage 13, about 2, applications 2, footer logo empty). Add alt; convert to WebP/AVIF; size correctly.

## AI Search Readiness (GEO) — 40/100
- No schema / `sameAs` / author entities / FAQ → weak grounding for AI Overviews/ChatGPT/Perplexity.
- Add schema + `sameAs`, FAQ blocks + FAQPage schema, keep key facts (1985, Indo-US JV, certifications, product families) as clean prose. Optional `/llms.txt`.

## Local SEO — 50/100
- Consistent NAP (header/footer/contact) + embedded Google Map (Killa Pardi, Gujarat) + FB/Twitter/LinkedIn links.
- **No LocalBusiness schema / geo.** Add it; claim/optimize Google Business Profile; ensure NAP consistency.
- Map iframe uses `pointer-events:none`; add a "Get directions" link to the GBP listing.
