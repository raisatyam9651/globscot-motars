# Technical SEO — Findings (Score 35/100)

## Critical
- **Relative asset/link paths vs. trailing-slash URLs.** `includes/header.php` loads CSS/JS as `wp-content/...`, `wp-includes/...` (document-relative). `.htaccess` 301s every URL to a directory form (`/about-us/`, `/index/`). On an interior page the browser resolves `wp-content/.../style.css` → `/about-us/wp-content/.../style.css` = 404. Interior pages render unstyled with broken nav; contact form `action="contact-us/"` posts to `/contact-us/contact-us/`. **Verify on live server after deploy.** Fix: root-relative paths or `<base href>`.
- **No canonical tags** (0/21). Duplicate-URL risk (`/page.php`, `/page/`, `/`, `/index/` all resolvable).

## High
- **No robots.txt, no sitemap.xml.** (Templates in `../fixes/`.)
- **`SITE_URL` = `http://localhost:8000`** in `includes/config.php`. Production absolute URLs would be wrong.

## Medium
- **Dead WP forms.** Comment forms POST `/wp-comments-post/` (404); search forms GET `/` (no backend).
- **Broken link** `href="/dc-mo/"` in `products-pmdc-motors.php` → 404.
- **Render-blocking head:** ~15 stylesheets + jQuery in `<head>`, unbundled/unminified; no `preconnect`.

## Positive
- Clean extensionless URLs; `.php`→`/dir/` 301; valid viewport; `lang="en-US"`; semantic breadcrumbs; single `<main>` per page.

## `.htaccess` review
Redirect logic is sound in isolation (force trailing slash, internal rewrite to `.php`). The failure is that page **markup uses relative paths** that don't survive the added path depth. Fix the markup, not the rewrites. Add long-cache headers for static assets as a follow-up.
