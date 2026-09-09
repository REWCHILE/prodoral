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
$ogImage = $ogImage ?? BASE_URL . '/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.png';
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
    
    <!-- Open Graph / Redes Sociales -->
    <meta property="og:locale" content="es_CL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
    <meta property="og:site_name" content="<?= htmlspecialchars(SITE_NAME) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">
    <meta name="twitter:label1" content="Especialista SEC">
    <meta name="twitter:data1" content="<?= htmlspecialchars(EXPERT_NAME) ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/webp" href="<?= BASE_URL ?>/assets/img/logotipo.webp">
    <link rel="apple-touch-icon" href="<?= BASE_URL ?>/assets/img/logotipo.webp">
    <meta name="theme-color" content="#064e3b">

    <!-- Preload de Fuentes Locales Críticas (Zero External CDN) -->
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/inter.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?= BASE_URL ?>/assets/fonts/outfit.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Iconos FontAwesome Locales Ultralivianos (3 KB vs 289 KB de CDN) -->
    <link rel="preload" href="<?= BASE_URL ?>/assets/css/fontawesome.min.css?v=<?= filemtime(__DIR__ . '/../assets/css/fontawesome.min.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/fontawesome.min.css"></noscript>

    <!-- Preload del Elemento LCP Crítico para Móvil (Fondo Hero) -->
    <link rel="preload" as="image" href="<?= BASE_URL ?>/assets/img/background-sellante-fugas-prodoral-chile.webp" fetchpriority="high">

    <!-- CSS Crítico Above-the-Fold Inlined (Zero Render-Blocking, Zero CLS) -->
    <style>
        @font-face{font-family:'Inter';font-style:normal;font-weight:400 700;font-display:swap;src:url('<?= BASE_URL ?>/assets/fonts/inter.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
        @font-face{font-family:'Outfit';font-style:normal;font-weight:600 800;font-display:swap;src:url('<?= BASE_URL ?>/assets/fonts/outfit.woff2') format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}
        :root{--primary:#059669;--primary-light:#10b981;--primary-dark:#047857;--navy-900:#070d19;--navy-800:#0b132b;--navy-700:#1c2541;--navy-600:#3a506b;--accent-gold:#f59e0b;--accent-gold-dark:#92400e;--text-white:#ffffff;--text-light:#f1f5f9;--text-muted:#94a3b8;--text-dark:#0f172a;--text-body:#334155;--bg-light:#f8fafc;--bg-white:#ffffff;--border-light:#e2e8f0;--font-heading:'Outfit',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;--font-body:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;--radius-sm:8px;--radius-md:14px;--radius-lg:22px;--radius-full:9999px;--transition:all 0.3s cubic-bezier(0.16,1,0.3,1);}
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
        body{font-family:var(--font-body);font-size:1rem;line-height:1.65;color:var(--text-body);background-color:var(--bg-light);overflow-x:hidden;}
        .container{width:100%;max-width:1240px;margin:0 auto;padding:0 20px;}
        a{color:inherit;text-decoration:none;}
        img{max-width:100%;height:auto;display:block;}
        .top-bar{background-color:var(--navy-900);color:var(--text-light);font-size:0.85rem;padding:8px 0;border-bottom:1px solid rgba(255,255,255,0.08);}
        .top-bar-inner{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px;}
        .top-bar-badge{display:flex;align-items:center;gap:8px;font-size:0.825rem;}
        .pulse-dot{width:8px;height:8px;background-color:var(--primary-light);border-radius:50%;display:inline-block;}
        .top-bar-contact{display:flex;align-items:center;gap:18px;}
        .top-bar-link{display:inline-flex;align-items:center;gap:6px;color:var(--text-light);font-weight:500;}
        .top-bar-wsp{color:#25d366;}
        .site-header{background-color:rgba(255,255,255,0.96);backdrop-filter:blur(14px);border-bottom:1px solid var(--border-light);position:sticky;top:0;z-index:1000;}
        .header-container{display:flex;align-items:center;justify-content:space-between;padding-top:12px;padding-bottom:12px;}
        .site-logo{display:flex;align-items:center;gap:12px;}
        .site-logo img{height:48px;width:auto;object-fit:contain;}
        .logo-text{display:flex;flex-direction:column;}
        .logo-title{font-family:var(--font-heading);font-size:1.25rem;font-weight:900;color:var(--navy-900);line-height:1.1;}
        .logo-subtitle{font-size:0.725rem;font-weight:600;color:var(--primary-dark);text-transform:uppercase;letter-spacing:0.5px;}
        .main-navigation .nav-menu{display:flex;align-items:center;gap:8px;}
        .nav-link{display:block;padding:8px 14px;font-size:0.95rem;font-weight:600;color:var(--navy-800);border-radius:var(--radius-sm);}
        .mobile-toggle{display:none;flex-direction:column;justify-content:space-around;width:40px;height:40px;background:transparent;border:1px solid var(--border-light);border-radius:var(--radius-sm);padding:8px;cursor:pointer;}
        .mobile-toggle .bar{width:100%;height:2.5px;background-color:var(--navy-900);border-radius:2px;}
        @media(max-width:991px){.main-navigation{display:none;}.mobile-toggle{display:flex;}.d-none-mobile{display:none!important;}}
        .hero-section{position:relative;background-color:var(--navy-900);color:var(--text-white);min-height:88vh;display:flex;align-items:center;overflow:hidden;padding:60px 0;contain:paint layout;}
        .hero-video-bg{position:absolute;top:50%;left:50%;min-width:100%;min-height:100%;transform:translate(-50%,-50%);object-fit:cover;opacity:0.35;z-index:1;filter:brightness(0.8) contrast(1.1);}
        @media(max-width:767px){.hero-video-bg{display:none!important;}}
        .hero-bg-img{position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;opacity:0.35;z-index:1;filter:brightness(0.8) contrast(1.1);pointer-events:none;}
        .hero-overlay{position:absolute;inset:0;background:radial-gradient(circle at 30% 30%,rgba(7,13,25,0.75) 0%,rgba(7,13,25,0.95) 100%);z-index:2;}
        .hero-container{position:relative;z-index:3;display:grid;grid-template-columns:1.15fr 0.85fr;gap:40px;align-items:center;}
        @media(max-width:991px){.hero-container{grid-template-columns:1fr;text-align:center;}}
        .hero-badge{display:inline-flex;align-items:center;gap:10px;background:rgba(16,185,129,0.15);border:1px solid rgba(16,185,129,0.35);color:var(--primary-light);font-weight:700;font-size:0.85rem;padding:8px 18px;border-radius:var(--radius-full);margin-bottom:20px;}
        .hero-title{font-size:3.25rem;font-weight:900;line-height:1.15;letter-spacing:-0.025em;color:var(--text-white);margin-bottom:20px;}
        .hero-title .highlight-green{background:linear-gradient(135deg,#34d399 0%,#10b981 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
        .hero-title .highlight-gold{color:var(--accent-gold);}
        @media(max-width:768px){.hero-title{font-size:2.2rem;}}
        .hero-lead{font-size:1.175rem;line-height:1.6;color:var(--text-light);opacity:0.92;margin-bottom:30px;max-width:650px;}
        .hero-cta-group{display:flex;align-items:center;gap:16px;flex-wrap:wrap;margin-bottom:35px;}
        @media(max-width:991px){.hero-cta-group{justify-content:center;}}
        .btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:13px 26px;font-weight:600;font-size:1rem;border-radius:var(--radius-sm);border:none;cursor:pointer;text-align:center;}
        .btn-emergency{background:linear-gradient(135deg,#e11d48 0%,#be123c 100%);color:var(--text-white);font-weight:700;}
        .btn-whatsapp{background:linear-gradient(135deg,#25d366 0%,#128c7e 100%);color:var(--text-white);font-weight:700;}
        .btn-outline-white{background:rgba(255,255,255,0.12);color:var(--text-white);border:1px solid rgba(255,255,255,0.3);}
        .hero-pdf-pill{display:inline-flex;align-items:center;gap:10px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.18);color:#f1f5f9;padding:9px 18px;border-radius:var(--radius-full);font-size:0.875rem;font-weight:600;}
        .hero-trust-row{display:flex;align-items:center;gap:24px;flex-wrap:wrap;border-top:1px solid rgba(255,255,255,0.12);padding-top:24px;}
        @media(max-width:991px){.hero-trust-row{justify-content:center;}}
        .trust-item{display:flex;align-items:center;gap:10px;font-size:0.9rem;color:var(--text-light);}
        .trust-item i{color:var(--primary-light);}
        .hero-expert-card{background:rgba(28,37,65,0.65);border:1px solid rgba(255,255,255,0.15);border-radius:var(--radius-lg);padding:30px;text-align:center;position:relative;}
        .sec-verified-stamp{position:absolute;top:-14px;right:24px;background:linear-gradient(135deg,var(--accent-gold) 0%,var(--accent-gold-dark) 100%);color:var(--navy-900);font-weight:800;font-size:0.75rem;padding:6px 14px;border-radius:var(--radius-full);display:flex;align-items:center;gap:6px;}
        .hero-expert-img-wrap{width:140px;height:140px;margin:10px auto 16px auto;position:relative;}
        .hero-expert-img{width:100%;height:100%;border-radius:50%;object-fit:cover;object-position:center 15%;border:4px solid var(--accent-gold);}
        .hero-expert-online-dot{position:absolute;bottom:6px;right:10px;width:16px;height:16px;background:#10b981;border:3px solid #070d19;border-radius:50%;}
        .hero-expert-name{color:var(--text-white);font-size:1.35rem;font-weight:800;margin-bottom:4px;}
        .hero-expert-title{color:var(--accent-gold);font-size:0.9rem;font-weight:600;margin-bottom:16px;}
        .hero-expert-chips{display:flex;flex-wrap:wrap;gap:8px;justify-content:center;margin-bottom:16px;}
        .chip{background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);font-size:0.775rem;color:var(--text-light);padding:5px 12px;border-radius:var(--radius-full);}
        .btn-sec-license{display:flex;align-items:center;justify-content:center;gap:8px;background:linear-gradient(135deg,#0284c7 0%,#0369a1 100%);color:#ffffff;border:1px solid rgba(255,255,255,0.25);padding:11px 16px;border-radius:var(--radius-sm);font-size:0.88rem;font-weight:700;margin-bottom:12px;}
        .hero-card-actions-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px;}
        .mobile-drawer:not(.active){visibility:hidden;pointer-events:none;}
    </style>

    <!-- Estilos Principales Asíncronos No Bloqueantes -->
    <link rel="preload" href="<?= BASE_URL ?>/assets/css/style.min.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.min.css') ?: time() ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.min.css"></noscript>

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
                <strong>Urgencias y Fugas de Gas SEC:</strong> Atención en Santiago y Regiones
            </div>
            <div class="top-bar-contact">
                <a href="tel:<?= PHONE_RAW ?>" class="top-bar-link" title="Llamar a Domingo Plaza">
                    <i class="fa-solid fa-phone-volume"></i>
                    <span><?= PHONE_DISPLAY ?></span>
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="top-bar-link top-bar-wsp" title="Consultar por WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>WhatsApp Directo</span>
                </a>
                <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="top-bar-link d-none-mobile" style="color: var(--accent-gold); font-weight: 700;" title="Verificar Licencia de Domingo Plaza en la SEC">
                    <i class="fa-solid fa-certificate"></i>
                    <span>Licencia SEC</span>
                </a>
                <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="top-bar-link d-none-mobile" title="Descargar Ficha Técnica Oficial de Prodoral R6-1 en PDF">
                    <i class="fa-solid fa-file-pdf" style="color: #f87171;"></i>
                    <span>Ficha Técnica PDF</span>
                </a>
                <span class="top-bar-schedule d-none-mobile">
                    <i class="fa-regular fa-clock"></i> <?= SCHEDULE_WEEKDAYS ?>
                </span>
            </div>
        </div>
    </aside>

    <!-- Encabezado Principal / Navbar -->
    <header class="site-header" id="siteHeader">
        <div class="container header-container">
            <!-- Logo Institucional -->
            <a href="<?= BASE_URL ?>/" class="site-logo" title="<?= SITE_NAME ?> - Inicio">
                <img src="<?= BASE_URL ?>/assets/img/logotipo.webp" alt="Logotipo Prodoral Chile - Sellado de Fugas de Gas" width="180" height="60" fetchpriority="high">
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
                    <img src="<?= BASE_URL ?>/assets/img/logotipo.webp" alt="Prodoral Chile" class="drawer-logo" width="130" height="42" loading="lazy">
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
                    <a href="tel:<?= PHONE_RAW ?>" class="drawer-btn drawer-btn-call">
                        <i class="fa-solid fa-phone-flip"></i>
                        <span>Llamar Ahora</span>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="drawer-btn drawer-btn-wsp">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>WhatsApp SEC</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Overlay Estático para Drawer (Cero Reflow en Carga) -->
        <div class="drawer-overlay" id="drawerOverlay" aria-hidden="true"></div>
    </header>
