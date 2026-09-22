<?php
// Router for PHP built-in web server to mimic .htaccess rewrites
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

// 1. Serve static files directly if they exist
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// 2. Root request
if ($uri === '/' || $uri === '') {
    require __DIR__ . '/index.php';
    exit;
}

$trimmed = trim($uri, '/');

// 3. Blog routing: /blog/<slug>/ -> blog/<slug>.php or /blog/ -> blog/index.php or blog.php
if (preg_match('#^blog/(.+)$#', $trimmed, $matches)) {
    $blogSlug = $matches[1];
    $blogFile = __DIR__ . '/blog/' . $blogSlug . '.php';
    if (file_exists($blogFile)) {
        require $blogFile;
        exit;
    }
}
if ($trimmed === 'blog') {
    if (file_exists(__DIR__ . '/blog/index.php')) {
        require __DIR__ . '/blog/index.php';
        exit;
    } elseif (file_exists(__DIR__ . '/blog.php')) {
        require __DIR__ . '/blog.php';
        exit;
    }
}

// 4. Top-level page routing: /<slug>/ -> <slug>.php
$topFile = __DIR__ . '/' . $trimmed . '.php';
if (file_exists($topFile)) {
    require $topFile;
    exit;
}

// 5. Check if directory has an index.php
if (is_dir($file) && file_exists($file . '/index.php')) {
    require $file . '/index.php';
    exit;
}

// 6. 404 fallback
http_response_code(404);
echo "404 Not Found: " . htmlspecialchars($uri);
