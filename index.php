<?php
// Root entrypoint: forward to /public (keeps MVC structure untouched).
// NOTE: For proper routing & relative asset paths, the browser must land under /public/.

$reqUri = $_SERVER['REQUEST_URI'] ?? '/';

// Avoid redirect loop if already under /public/
if (preg_match('#^/public(/|$)#', $reqUri)) {
    require __DIR__ . '/public/index.php';
    exit;
}

$query = $_SERVER['QUERY_STRING'] ?? '';
$dest = 'public/index.php' . ($query !== '' ? ('?' . $query) : '');

header('Location: ' . $dest, true, 302);
exit;
