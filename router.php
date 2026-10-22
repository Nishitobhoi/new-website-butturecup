<?php
// Local router for PHP built-in web server
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve homepage for root
if ($uri === '/' || $uri === '' || $uri === '/index.html') {
    if (isset($_GET['s']) || isset($_GET['post_type'])) {
        $_SERVER['SCRIPT_NAME'] = '/index.php';
        require __DIR__ . '/index.php';
        return;
    }
    require __DIR__ . '/home.php';
    return;
}

// Redirect case study gallery aliases to canonical /casestudies/
if ($uri === '/case-study' || $uri === '/case-study/' || 
    $uri === '/case-studies' || $uri === '/case-studies/' || 
    $uri === '/casestudies' || $uri === '/casestudy' || $uri === '/casestudy/' ||
    $uri === '/casestudy.php' || $uri === '/casestudies.php') {
    header("Location: /casestudies/", true, 301);
    exit;
}

// Redirect single case study URL variations to canonical /casestudies/<slug>/
if (preg_match('#^/(?:case-study|case-studies)/([^/]+)/?$#', $uri, $matches)) {
    header("Location: /casestudies/" . $matches[1] . "/", true, 301);
    exit;
}

// Serve existing static or php file directly
$filePath = __DIR__ . $uri;
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    if ($ext === 'php') {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Pragma: no-cache");
        header("Expires: 0");
        require $filePath;
        return;
    }
    // Return false for PHP built-in server to handle static assets
    return false;
}

// Check if appending .php matches an existing file (e.g. /aboutus -> /aboutus.php)
if (file_exists($filePath . '.php')) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: 0");
    require $filePath . '.php';
    return;
}

// Otherwise pass to WordPress front controller
$_SERVER['SCRIPT_NAME'] = '/index.php';
require __DIR__ . '/index.php';
