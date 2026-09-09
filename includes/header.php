<?php
/**
 * Header Global - Prodoral Chile
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/schemas.php';

// Variables de página por defecto si no vienen definidas
$pageTitle = $pageTitle ?? 'Prodoral Chile | Sellado de Fugas de Gas Sin Romper con Prodoral R6-1';
$pageDesc = $pageDesc ?? 'Servicio especializado de sellado de fugas de gas con Prodoral R6-1. Reparación sin romper muros ni pisos por Domingo Isain Plaza Caamaño, Gasfiter Certificado SEC.';
$pageSlug = $pageSlug ?? '';
$canonicalUrl = get_canonical_url($pageSlug);
$ogImage = $ogImage ?? BASE_URL . '/assets/img/og-prodoral-social.jpg';
$jsonLdSchema = $jsonLdSchema ?? get_main_schemas(get_homepage_faqs());
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta name="google-site-verification" content="Rmp0j8cr3Pu3CeW1UJicCxNUbHGNdOmFqStnRPrYubs">
    
    <!-- Open Graph / Redes Sociales (Facebook Sharing Debugger & WhatsApp) -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:image:secure_url" content="<?= htmlspecialchars($ogImage) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="Prodoral Chile - Sellado de Fugas de Gas Sin Romper • Urgencias <?= PHONE_DISPLAY ?>">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta name="twitter:label1" content="Teléfono Urgencias">
    <meta name="twitter:data1" content="<?= PHONE_DISPLAY ?>">
    <meta name="twitter:label2" content="Especialista SEC">
    <meta name="twitter:data2" content="<?= htmlspecialchars(EXPERT_NAME) ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="<?= BASE_URL ?>/assets/img/logotipo.webp">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>/assets/img/logotipo.webp">
    <meta name="theme-color" content="#064e3b">

    <!-- Preload de Fuentes Locales Críticas (Zero External CDN) -->
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/inter.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/outfit.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Preload del Elemento LCP Crítico para Móvil (Fondo Hero) -->
    <link rel="preload" as="image" href="<?= BASE_URL ?>/assets/img/background-sellante-fugas-prodoral-chile.webp" fetchpriority="high">

    <!-- CSS Integral Optimizado Inlined (Zero Render-Blocking, Zero CLS, Zero Network Delays) -->
    <style>
<?php
$styleCss = file_get_contents(__DIR__ . '/../assets/css/style.min.css');
$faCss = file_get_contents(__DIR__ . '/../assets/css/fontawesome.min.css');
$styleCss = str_replace('../fonts/', BASE_URL . '/assets/fonts/', $styleCss);
$faCss = str_replace('../fonts/', BASE_URL . '/assets/fonts/', $faCss);
echo $styleCss . "\n" . $faCss;
?>
    </style>

    <!-- Datos Estructurados JSON-LD -->
    <?php if (!empty($jsonLdSchema)): ?>
    <script type="application/ld+json">
        <?= $jsonLdSchema ?>
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Centinela para Sticky Header sin Reflows -->
    <div id="topSentinel" style="position:absolute;top:0;left:0;height:30px;width:1px;pointer-events:none;" aria-hidden="true"></div>

    <!-- Barra Superior Informativa -->
    <aside class="top-bar" aria-label="Información de contacto rápido y urgencias de gas">
        <div class="container top-bar-inner">
            <div class="top-bar-badge">
                <span class="pulse-dot"></span>
                <strong>Urgencias SEC:</strong> 24/7 Santiago y Regiones
            </div>
            <div class="top-bar-contact">
                <a href="tel:<?= PHONE_RAW ?>" class="top-bar-link" title="Llamar a Domingo Plaza">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span><?= PHONE_DISPLAY ?></span>
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="top-bar-link top-bar-wsp" title="Consultar por WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>WhatsApp 24/7</span>
                </a>
                <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="top-bar-link d-none-mobile" style="color: var(--accent-gold); font-weight: 700;" title="Verificar Licencia de Domingo Plaza en la SEC">
                    <i class="fa-solid fa-certificate"></i>
                    <span>Licencia SEC Activa</span>
                </a>
                <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="top-bar-link d-none-mobile" title="Descargar Ficha Técnica Oficial de Prodoral R6-1 en PDF">
                    <i class="fa-solid fa-file-pdf" style="color: #f87171;"></i>
                    <span>Ficha PDF</span>
                </a>
                <span class="top-bar-schedule d-none-mobile">
                    <i class="fa-regular fa-clock"></i> 24/7 Emergencias
                </span>
            </div>
        </div>
    </aside>

    <!-- Encabezado Principal / Navbar -->
    <header class="site-header" id="siteHeader">
        <div class="container header-container">
            <!-- Logo Institucional -->
            <a href="<?= BASE_URL ?>/" class="site-logo" title="<?= SITE_NAME ?> - Inicio">
                <img src="<?= BASE_URL ?>/assets/img/logotipo.webp" alt="Logotipo Prodoral Chile - Sellado de Fugas de Gas" width="96" height="120" fetchpriority="high">
                <div class="logo-text">
                    <span class="logo-title">PRODORAL CHILE</span>
                    <span class="logo-subtitle">Gasfiter Certificado SEC • Prodoral R6-1</span>
                </div>
            </a>

            <!-- Menú de Navegación de Escritorio -->
            <nav class="main-navigation" aria-label="Navegación principal">
                <ul class="nav-menu">
                    <?php foreach ($navLinks as $nav): 
                        $isActive = ($pageSlug === $nav['slug']) || ($pageSlug === '' && $nav['slug'] === '');
                    ?>
                    <li class="nav-item <?= $isActive ? 'current-item' : '' ?>">
                        <a href="<?= $nav['url'] ?>" class="nav-link"><?= htmlspecialchars($nav['title']) ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <!-- Acciones de Cabecera -->
            <div class="header-actions">
                <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn" title="Llamar para sellar fuga de gas">
                    <i class="fa-solid fa-phone-flip"></i>
                    <span><?= PHONE_DISPLAY ?></span>
                </a>
                <!-- Botón Hamburguesa Móvil -->
                <button type="button" class="mobile-toggle" id="mobileMenuToggle" aria-label="Abrir menú de navegación" aria-expanded="false">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </button>
            </div>
        </div>

        <!-- Menú Móvil Desplegable Premium -->
        <div class="mobile-drawer" id="mobileDrawer" aria-hidden="true" inert>
            <div class="drawer-header">
                <div class="drawer-brand">
                    <img src="<?= BASE_URL ?>/assets/img/logotipo.webp" alt="Prodoral Chile" class="drawer-logo" width="96" height="120" loading="lazy">
                    <span class="drawer-sec-tag"><i class="fa-solid fa-shield-halved"></i> SEC Clase 3</span>
                </div>
                <button type="button" class="drawer-close-btn" id="mobileDrawerClose" aria-label="Cerrar menú">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <div class="drawer-body">
                <div class="drawer-section-title">
                    <span>MENÚ PRINCIPAL</span>
                </div>

                <ul class="mobile-nav-list">
                    <?php foreach ($navLinks as $nav): 
                        $isActive = ($pageSlug === $nav['slug']) || ($pageSlug === '' && $nav['slug'] === '');
                    ?>
                    <li class="mobile-nav-item <?= $isActive ? 'active' : '' ?>">
                        <a href="<?= $nav['url'] ?>" class="mobile-nav-link">
                            <span class="drawer-link-left">
                                <span class="drawer-icon-wrap"><i class="<?= $nav['icon'] ?>"></i></span>
                                <span class="drawer-link-title"><?= htmlspecialchars($nav['title']) ?></span>
                            </span>
                            <span class="drawer-link-right">
                                <?php if ($isActive): ?>
                                    <span class="drawer-active-pill">Activo</span>
                                <?php endif; ?>
                                <i class="fa-solid fa-chevron-right drawer-chevron"></i>
                            </span>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <div class="drawer-quick-services">
                    <div class="drawer-section-title">
                        <span>DOCUMENTOS Y SERVICIOS</span>
                    </div>
                    <div class="drawer-services-grid">
                        <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="drawer-quick-card">
                            <span class="quick-card-icon" style="background: rgba(239, 68, 68, 0.15); color: #ef4444;"><i class="fa-solid fa-file-pdf"></i></span>
                            <div class="quick-card-text">
                                <strong>Ficha Técnica Prodoral</strong>
                                <small>Dossier Alemán en PDF (1.7 MB)</small>
                            </div>
                        </a>
                        <a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas" class="drawer-quick-card">
                            <span class="quick-card-icon"><i class="fa-solid fa-fire-burner"></i></span>
                            <div class="quick-card-text">
                                <strong>Sellado Sin Romper</strong>
                                <small>Tecnología Prodoral R6-1</small>
                            </div>
                        </a>
                        <a href="<?= BASE_URL ?>/casos-exito-fugas-gas" class="drawer-quick-card">
                            <span class="quick-card-icon"><i class="fa-solid fa-certificate"></i></span>
                            <div class="quick-card-text">
                                <strong>Certificación Sello Verde</strong>
                                <small>Casos de Éxito SEC</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mobile-drawer-footer">
                <div class="drawer-expert-card">
                    <div class="drawer-expert-avatar-wrap">
                        <img src="<?= EXPERT_PHOTO_URL ?>" alt="<?= EXPERT_NAME ?> - Gasfiter SEC" class="drawer-expert-photo" width="46" height="46" style="object-position: center 15%;">
                        <span class="avatar-status-dot" title="Disponible"></span>
                    </div>
                    <div class="drawer-expert-info">
                        <div class="drawer-expert-name"><?= EXPERT_NAME ?></div>
                        <div class="drawer-expert-sec"><i class="fa-solid fa-id-badge"></i> <?= EXPERT_REG_SEC ?></div>
                        <div class="drawer-expert-rating">
                            <span class="stars">★★★★★</span>
                            <span class="score">4.9</span>
                            <span class="count">(3.428 res.)</span>
                        </div>
                    </div>
                </div>

                <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; gap: 8px; background: rgba(2, 132, 199, 0.2); border: 1px solid rgba(56, 189, 248, 0.4); color: #38bdf8; padding: 9px 12px; border-radius: var(--radius-sm); font-size: 0.8rem; font-weight: 700; text-decoration: none;">
                    <i class="fa-solid fa-id-badge"></i>
                    <span>Verificar Licencia Oficial SEC</span>
                    <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.7rem;"></i>
                </a>

                <div class="drawer-actions-grid">
                    <a href="tel:<?= PHONE_RAW ?>" class="drawer-btn drawer-btn-call" title="Llamar directamente a Domingo Plaza">
                        <i class="fa-solid fa-phone-flip"></i>
                        <span>Llamar Directo</span>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="drawer-btn drawer-btn-wsp" title="Consultar por WhatsApp con Domingo Plaza">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>WhatsApp Domingo</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Overlay Estático para Drawer (Cero Reflow en Carga) -->
        <div class="drawer-overlay" id="drawerOverlay" aria-hidden="true"></div>
    </header>
