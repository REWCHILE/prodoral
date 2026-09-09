<?php
/**
 * Router para el servidor embebido de PHP (php -S localhost:8080 router.php)
 * Simula las reglas de .htaccess para URLs limpias sin .php en desarrollo local
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

// Redirección si se llama con .php directamente
$slug = trim($uri, '/');
if (preg_match('/\.php$/i', $slug) && $slug !== 'router.php') {
    $clean = preg_replace('/\.php$/i', '', $slug);
    if ($clean === 'index') $clean = '';
    header("Location: /$clean", true, 301);
    exit;
}

// Servir archivos estáticos reales (imágenes, CSS, JS, videos, PDFs)
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// Rutas institucionales con nombres canónicos y alias
$routes = [
    '' => 'index.php',
    'prodoral-chile' => 'prodoral-chile.php',
    'nosotros' => 'prodoral-chile.php',
    'sellado-de-fugas-de-gas' => 'sellado-de-fugas-de-gas.php',
    'servicios' => 'sellado-de-fugas-de-gas.php',
    'casos-exito-fugas-gas' => 'casos-exito-fugas-gas.php',
    'proyectos' => 'casos-exito-fugas-gas.php',
    'contacto-prodoral' => 'contacto-prodoral.php',
    'contacto' => 'contacto-prodoral.php',
];

if (isset($routes[$slug])) {
    require __DIR__ . '/' . $routes[$slug];
    return true;
}

if (file_exists(__DIR__ . '/' . $slug . '.php')) {
    require __DIR__ . '/' . $slug . '.php';
    return true;
}

// Rutas SEO de Fugas de Gas y Prodoral R6-1
require_once __DIR__ . '/includes/pages_content.php';
$seoPages = get_all_pages_data();
if (isset($seoPages[$slug]) || strpos($slug, 'prodoral') !== false || strpos($slug, 'fuga') !== false || strpos($slug, 'gas') !== false || strpos($slug, 'precio') !== false || strpos($slug, 'senales') !== false) {
    require __DIR__ . '/landing.php';
    return true;
}

// 404 / Default
http_response_code(404);
require __DIR__ . '/landing.php';
return true;
