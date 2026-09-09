<?php
/**
 * Configuración Global - Prodoral Chile (prodoral.cl)
 * Especialistas en Sellado de Fugas de Gas con Prodoral R6-1 Sin Romper
 */

// Información de Contacto Directo
define('SITE_NAME', 'Prodoral Chile');
define('SITE_SLOGAN', 'Sellado de Fugas de Gas Sin Romper con Prodoral R6-1');
define('PHONE_DISPLAY', '+56 9 4987 7316');
define('PHONE_RAW', '+56949877316');
define('PHONE_WSP_DIGITS', '56949877316');
define('WHATSAPP_URL', 'https://wa.me/' . PHONE_WSP_DIGITS . '?text=' . urlencode('Hola, necesito una evaluación para sellar una fuga de gas sin romper con Prodoral R6-1.'));
define('EMAIL_CONTACT', 'contacto@prodoral.cl');
define('ADDRESS_STREET', 'Av. Libertador Bernardo O\'Higgins 1302');
define('ADDRESS_CITY', 'Santiago');
define('ADDRESS_REGION', 'Región Metropolitana');
define('ADDRESS_COUNTRY', 'Chile');

// Información del Experto Técnico / Fundador
define('EXPERT_NAME', 'Domingo Isain Plaza Caamaño');
define('EXPERT_TITLE', 'Gasfiter Certificado SEC & Especialista en Aplicación de Prodoral R6-1');
define('EXPERT_REG_SEC', 'Instalador de Gas Clase 3 Autorizado por la SEC');
define('EXPERT_CHILEVALORA', 'Certificación Oficial de Competencias Laborales en Fugas de Gas');
define('EXPERT_EXP_YEARS', '40+ Años');
define('SEC_LICENSE_URL', 'https://wlhttp.sec.cl/rnii/public/licencia/qr?o=285eb263edf5cb049f3f4cc7fa0d2182');

// Horarios de Atención
define('SCHEDULE_WEEKDAYS', 'Lunes a Viernes: 08:30 a 20:00 hrs');
define('SCHEDULE_SATURDAY', 'Sábados: 09:00 a 16:00 hrs');
define('SCHEDULE_EMERGENCY', 'Atención de Emergencias y Consultas Técnicas 24/7');

// Detección Dinámica de Base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$scriptDir = ($scriptDir === '/' || $scriptDir === '\\') ? '' : rtrim($scriptDir, '/');

if (strpos($host, 'prodoral.cl') !== false) {
    define('BASE_URL', 'https://prodoral.cl');
} else {
    define('BASE_URL', $protocol . $host . $scriptDir);
}

// Rutas de Documentos y Medios Clave
define('PRODORAL_PDF_URL', BASE_URL . '/assets/Prodoral-1.pdf');
define('EXPERT_PHOTO_URL', BASE_URL . '/assets/img/domingo-plaza.webp');
define('SEC_QR_URL', BASE_URL . '/assets/img/sec-qr-hd.png');

// Navegación Principal del Sitio (URLs limpias sin .php)
$navLinks = [
    [
        'title' => 'Inicio',
        'url' => BASE_URL . '/',
        'slug' => '',
        'icon' => 'fa-solid fa-house'
    ],
    [
        'title' => 'Nosotros',
        'url' => BASE_URL . '/prodoral-chile',
        'slug' => 'prodoral-chile',
        'icon' => 'fa-solid fa-shield-halved'
    ],
    [
        'title' => 'Servicios',
        'url' => BASE_URL . '/sellado-de-fugas-de-gas',
        'slug' => 'sellado-de-fugas-de-gas',
        'icon' => 'fa-solid fa-wrench'
    ],
    [
        'title' => 'Proyectos',
        'url' => BASE_URL . '/casos-exito-fugas-gas',
        'slug' => 'casos-exito-fugas-gas',
        'icon' => 'fa-solid fa-photo-film'
    ],
    [
        'title' => 'Contacto Prodoral',
        'url' => BASE_URL . '/contacto-prodoral',
        'slug' => 'contacto-prodoral',
        'icon' => 'fa-solid fa-headset'
    ]
];

// Helper para obtener URL canónica
function get_canonical_url($slug = '') {
    if (empty($slug)) {
        return 'https://prodoral.cl/';
    }
    return 'https://prodoral.cl/' . trim($slug, '/') . '/';
}
