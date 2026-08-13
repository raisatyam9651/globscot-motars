# Action Plan — Globe Scott Motors (globescott.net)

Prioritized by impact and effort. **Critical → High → Medium → Low.**
Effort key: S = < 1 hr · M = few hrs · L = 1+ day.

---

## 🔴 CRITICAL — fix this week (blocks correct rendering/indexing)

| # | Action | Effort | Files |
|---|---|---|---|
| C1 | **Fix relative asset/link paths.** Convert every CSS/JS `href`/`src` and internal link to **root-relative** (leading `/`), or add `<base href="https://www.globescott.net/">` to `<head>`. Then load an interior page (e.g. `/about-us/`) on the live server and confirm CSS/JS load and nav works. | M | `includes/header.php`, `includes/footer.php`, all page nav/forms |
| C2 | **Add self-referencing canonical** built from `SITE_URL` + slug (trailing slash). | S | `includes/header.php` |
| C3 | **Set `SITE_URL` = `https://www.globescott.net`** and standardize on www+https. | S | `includes/config.php` |
| C4 | **Publish `robots.txt` + `sitemap.xml`** (use the files in `fixes/`). | S | site root |
| C5 | **Fix broken link** `href="/dc-mo/"` → `/products-pmdc-motors/`. | S | `products-pmdc-motors.php` |

---

## 🟠 HIGH — within 2–3 weeks (significant ranking impact)

| # | Action | Effort | Files |
|---|---|---|---|
| H1 | **Add per-page meta descriptions.** Introduce `$meta_description` per page; output `<meta name="description">` in the header include (140–160 chars, keyword + value + location). | M | `header.php` + all pages |
| H2 | **Add Open Graph + Twitter Card** tags (title, description, image, url, type) in the header include. | S | `header.php` |
| H3 | **Add Organization + LocalBusiness JSON-LD** sitewide (template in `fixes/`). | S | `header.php` |
| H4 | **Add BreadcrumbList JSON-LD** on interior pages (breadcrumb HTML already exists). | M | interior templates |
| H5 | **Expand thin pages** (`products-bldc-motors`, `applications`, `products`, `products-pmdc-transaxel`, `products-pmdc-geared-motors`) to 400–700 words with spec tables. | L | those pages |
| H6 | **Convert images to WebP/AVIF** + compress (start with hero/slider and product photos; 10 MB → target < 3 MB). | L | `wp-content/uploads/` |

---

## 🟡 MEDIUM — within a month

| # | Action | Effort | Files |
|---|---|---|---|
| M1 | **Reduce homepage to a single keyword-rich H1** ("DC, BLDC & Geared Motor Manufacturer in India"); demote slider headings to `<h2>`/`<span>`. | S | `index.php` |
| M2 | **Rewrite titles** with keywords + location; use title case, drop all-caps brand. | M | all pages |
| M3 | **Correct spelling** in slugs/titles/H1s (`Benifits`→Benefits, `Transaxel`→Transaxle, `Amuzement`→Amusement, `Handeling`→Handling, `morden`→modern) and **301-redirect** old slugs. | M | pages + `.htaccess` |
| M4 | **Remove the COVID-19 banner** and the dead WordPress **comment/search** forms. | S | `header.php`, blog templates |
| M5 | **Add Product/ItemList schema** on product pages and **Article schema** + author/date on blog posts. | M | product/blog templates |
| M6 | **Add FAQ blocks + FAQPage schema** on product and key blog pages (AI/GEO + rich results). | M | product/blog templates |
| M7 | **Bundle & minify** CSS/JS, defer non-critical JS, add `preconnect` for fonts. | M | `header.php`, `footer.php` |

---

## 🔵 LOW — backlog

| # | Action | Effort |
|---|---|---|
| L1 | Add missing `alt` text (13 homepage, 2 about, 2 applications, footer logo). | S |
| L2 | Claim/optimize Google Business Profile; verify NAP consistency; enable map interaction / add "Get directions". | M |
| L3 | Optionally add `/llms.txt` for AI crawlers. | S |
| L4 | Add internal links from blog posts → relevant product pages. | M |
| L5 | Add long-cache headers for static assets in `.htaccess`. | S |

---

## Verification checklist (after Phase 1–2)
- [ ] `/about-us/` and `/index/` render **with CSS/JS** and working navigation on the live server.
- [ ] `curl -I https://www.globescott.net/about-us/` returns `200`; a sample asset URL returns `200`.
- [ ] `View Source` shows one `<link rel="canonical">`, one `<meta name="description">`, OG tags, and an Organization/LocalBusiness JSON-LD block per page.
- [ ] `robots.txt` reachable and references the sitemap; `sitemap.xml` validates and lists all canonical URLs.
- [ ] Submit sitemap in **Google Search Console**; check Coverage + Core Web Vitals reports after crawl.
- [ ] Rich Results Test passes for Organization, LocalBusiness, Breadcrumb, Product, Article.
