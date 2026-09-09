<?php
/**
 * Página de Inicio - Prodoral Chile (prodoral.cl)
 * Recreación profesional y moderna optimizada para SEO en Google
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/schemas.php';

$pageTitle = 'Prodoral Chile | Sellado de Fugas de Gas Sin Romper con Prodoral R6-1';
$pageDesc = 'Servicio profesional de sellado de fugas de gas con Prodoral R6-1. Reparación sin romper muros ni pisos. Atención en Santiago y regiones por Domingo Isain Plaza Caamaño, Gasfiter Certificado SEC.';
$pageSlug = '';
$ogImage = BASE_URL . '/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.png';

$faqs = get_homepage_faqs();
$jsonLdSchema = get_main_schemas($faqs);

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- 1. Hero Section con Video de Fondo y Perfil del Experto -->
    <section class="hero-section" id="hero">
        <img src="<?= BASE_URL ?>/assets/img/background-sellante-fugas-prodoral-chile.webp" alt="Sellado de Fugas de Gas con Prodoral R6-1 en Chile" class="hero-bg-img" width="1280" height="720" fetchpriority="high" decoding="async">
        <video class="hero-video-bg" width="1280" height="720" muted loop playsinline preload="none" aria-hidden="true" data-hero-video>
            <source data-src="<?= BASE_URL ?>/assets/videos/hero-video.mp4" type="video/mp4" media="(min-width: 768px)">
            <track kind="captions" src="" label="Español" default>
        </video>
        <div class="hero-overlay"></div>

        <div class="container hero-container">
            <!-- Columna Izquierda: Información Principal y CTAs -->
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Gasfiter Certificado SEC • Tecnología Alemana TIB Chemicals</span>
                </div>
                <h1 class="hero-title">
                    Sellado de Fugas de Gas <span class="highlight-green">Sin Romper</span> Muros ni Pisos con <span class="highlight-gold">Prodoral R6-1</span>
                </h1>
                <p class="hero-lead">
                    Reparación definitiva y no destructiva de microfugas en redes de gas embutidas. Sellado interno polimérico alemán aplicado por <strong><?= EXPERT_NAME ?></strong>, Gasfiter Certificado por la Superintendencia de Electricidad y Combustibles (SEC).
                </p>

                <div class="hero-cta-group">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn" title="Llamar de urgencia para sellar fuga de gas">
                        <i class="fa-solid fa-phone-volume"></i>
                        <span>Llamar al <?= PHONE_DISPLAY ?></span>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" title="Cotizar evaluación por WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>WhatsApp Inmediato</span>
                    </a>
                    <a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas" class="btn btn-outline-white" title="Conocer más sobre el procedimiento">
                        <span>Ver Procedimiento</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Botón Directo al Dossier PDF de Prodoral -->
                <div style="margin-bottom: 24px;">
                    <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="hero-pdf-pill" title="Descargar Ficha Técnica Oficial y Certificación Alemana Prodoral R6-1 en PDF">
                        <i class="fa-solid fa-file-pdf"></i>
                        <span>Ficha Técnica Oficial Prodoral R6-1 (PDF)</span>
                        <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.75rem; opacity: 0.85;"></i>
                    </a>
                </div>

                <div class="hero-trust-row">
                    <div class="trust-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span><strong>Garantía Escrita 3 Años</strong></span>
                    </div>
                    <div class="trust-item">
                        <i class="fa-solid fa-check-circle"></i>
                        <span><strong>Duración +30 Años</strong> (Indefinida)</span>
                    </div>
                    <div class="trust-item">
                        <i class="fa-solid fa-certificate"></i>
                        <span>Norma DIN-DVGW NG-5153</span>
                    </div>
                    <div class="trust-item">
                        <i class="fa-solid fa-gauge-high"></i>
                        <span>Prueba a 150 mbar</span>
                    </div>
                </div>
            </div>

            <!-- Columna Derecha: Tarjeta Oficial de Domingo Isain Plaza Caamaño con Foto Real -->
            <div class="hero-expert-card">
                <div class="sec-verified-stamp">
                    <i class="fa-solid fa-star"></i>
                    <span>INSTALADOR SEC AUTORIZADO</span>
                </div>
                <div class="hero-expert-img-wrap">
                    <img src="<?= EXPERT_PHOTO_URL ?>" alt="Domingo Isain Plaza Caamaño - Gasfiter Certificado SEC" class="hero-expert-img" width="160" height="160" fetchpriority="high">
                    <span class="hero-expert-online-dot" title="Domingo Plaza disponible para emergencias de gas"></span>
                </div>
                <h2 class="hero-expert-name"><?= EXPERT_NAME ?></h2>
                <p class="hero-expert-title"><?= EXPERT_TITLE ?></p>
                <div class="hero-expert-chips">
                    <span class="chip" style="background: rgba(16, 185, 129, 0.18); border-color: rgba(16, 185, 129, 0.45); color: #34d399; font-weight: 700;"><i class="fa-solid fa-shield-halved"></i> Garantía 3 Años por Escrito</span>
                    <span class="chip"><i class="fa-solid fa-award"></i> 40+ Años Experiencia</span>
                    <span class="chip"><i class="fa-solid fa-id-card"></i> Instalador Clase 3 SEC</span>
                    <span class="chip"><i class="fa-solid fa-flask"></i> Duración Indefinida (+30 Años)</span>
                </div>

                <!-- Botón Oficial de Verificación SEC -->
                <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sec-license" title="Abrir y verificar la licencia oficial de Domingo Plaza en el portal de la SEC">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Verificar Licencia Oficial SEC</span>
                    <i class="fa-solid fa-arrow-up-right-from-square sec-ext-icon"></i>
                </a>

                <div class="hero-card-actions-grid">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn" title="Llamar a Domingo Plaza">
                        <i class="fa-solid fa-phone"></i> Llamar Directo
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" title="WhatsApp con Domingo Plaza">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp SEC
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Barra de Estadísticas & Logros -->
    <section class="stats-bar" aria-label="Indicadores de experiencia, garantía y confianza">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">3 AÑOS</div>
                    <div class="stat-label">Garantía Escrita por Efectos de Sellado</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">+30 AÑOS</div>
                    <div class="stat-label">Duración Indefinida Comprobada</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Sin Romper Muros, Pisos ni Losas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">40+</div>
                    <div class="stat-label">Años Solucionando Fugas de Gas SEC</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Sección: ¿Qué es Prodoral R6-1 y Cómo Sella las Fugas? -->
    <section class="section-padding about-prodoral-section" id="que-es-prodoral">
        <div class="container">
            <div class="two-col-grid">
                <div class="about-text">
                    <div class="section-tag">Tecnología Alemana de Sellado</div>
                    <h2 class="section-title">¿Tiene una Fuga de Gas? La Solución Definitiva es Prodoral R6-1</h2>
                    <p class="section-subtitle">
                        <strong>Prodoral® R6-1</strong> es una dispersión polimérica especializada fabricada en Alemania por <em>TIB Chemicals AG</em>, diseñada exclusivamente para reparar microfugas en cañerías interiores de gas sin picar muros, cerámicos ni pisos flotantes.
                    </p>
                    
                    <div class="prodoral-feature-list">
                        <div class="feature-item">
                            <div class="feature-icon-wrap"><i class="fa-solid fa-house-chimney-crack"></i></div>
                            <div class="feature-text">
                                <h3>Cero Destrucción en su Propiedad</h3>
                                <p>El sellante ingresa en forma líquida por la tubería existente, recorre todo el trazado y sella las uniones con pérdidas sin necesidad de albañilería ni escombros.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrap"><i class="fa-solid fa-shield-virus"></i></div>
                            <div class="feature-text">
                                <h3>Resistente a Vibraciones y al Envejecimiento</h3>
                                <p>Una vez polimerizado con secado térmico controlado, el producto forma una película elástica permanente que resiste movimientos sísmicos y cambios térmicos.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrap"><i class="fa-solid fa-leaf"></i></div>
                            <div class="feature-text">
                                <h3>Inocuo y Amigable con el Medio Ambiente</h3>
                                <p>Formulado en base acuosa sin solventes orgánicos tóxicos. Es 100% no inflamable y no emite vapores nocivos ni deja olores en el hogar.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrap"><i class="fa-solid fa-certificate"></i></div>
                            <div class="feature-text">
                                <h3>Norma Europea DIN EN 13090 y DVGW G 624</h3>
                                <p>Aprobado y certificado bajo el registro internacional DIN-DVGW NG-5153 AR 0634 para presiones de trabajo en gas natural y GLP.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon-wrap" style="background: rgba(16, 185, 129, 0.15); color: #10b981;"><i class="fa-solid fa-shield-halved"></i></div>
                            <div class="feature-text">
                                <h3>Garantía Escrita de 3 Años y Duración Indefinida (+30 Años)</h3>
                                <p>Cada servicio de sellado incluye <strong>Garantía Formal por Escrito de 3 Años</strong> por efectos de sellado. Su formulación alemana no se degrada en contacto con el gas y tiene una <strong>durabilidad comprobada superior a 30 años</strong> en redes interiores.</p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 30px; display: flex; flex-wrap: wrap; gap: 14px;">
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Solicitar Diagnóstico de Mi Red
                        </a>
                        <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white" style="background: rgba(28, 37, 65, 0.9); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff;">
                            <i class="fa-solid fa-file-pdf" style="color: #ef4444;"></i> Descargar Ficha Técnica PDF
                        </a>
                    </div>
                </div>

                <div class="about-media">
                    <div class="interactive-media-box">
                        <picture>
                            <source media="(max-width: 640px)" srcset="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-santiago-sm.webp">
                            <img src="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-santiago.webp" alt="Aplicación de Prodoral R6-1 en Santiago por Gasfiter SEC" width="575" height="1066" loading="lazy" decoding="async">
                        </picture>
                        <div class="media-badge-float">
                            <strong><i class="fa-solid fa-circle-check"></i> Garantía Escrita de 3 Años • Duración +30 Años</strong>
                            <p>Procedimiento limpio, seguro y certificado por Domingo Plaza para casas, departamentos, comunidades y empresas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner Oficial de Dossier Técnico PDF -->
            <div class="prodoral-pdf-banner">
                <div class="pdf-banner-left">
                    <div class="pdf-banner-icon">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="pdf-banner-text">
                        <h3>Ficha Técnica Oficial y Certificación Alemana Prodoral R6-1</h3>
                        <p>Descargue el dossier técnico original de TIB Chemicals AG (Alemania): protocolo de hermeticidad DIN EN 13090, registro DVGW NG-5153 y aprobación de seguridad para redes de gas.</p>
                    </div>
                </div>
                <div class="pdf-banner-right">
                    <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="pdf-banner-btn" title="Descargar PDF Oficial Prodoral R6-1">
                        <i class="fa-solid fa-file-arrow-down"></i>
                        <span>Abrir Documento Técnico (PDF 1.7 MB)</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. SECCIÓN PRINCIPAL: 10 Puntos Clave de Posicionamiento de Domingo Isain Plaza Caamaño -->
    <section class="section-padding authority-section" id="domingo-plaza-sec">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">
                    <i class="fa-solid fa-award"></i> Autoridad Técnica y Respaldo Oficial
                </div>
                <h2 class="section-title">
                    10 Razones de Confianza: ¿Por Qué Domingo Isain Plaza Caamaño es el Máximo Referente en Prodoral en Chile?
                </h2>
                <p class="section-subtitle">
                    La aplicación del sellante Prodoral R6-1 en redes de gas exige alta precisión técnica, equipamiento neumático especializado y acreditación legal para garantizar la seguridad de su familia y comunidad.
                </p>
            </div>

            <!-- Grilla de los 10 Puntos de Autoridad -->
            <div class="points-grid-10">
                <!-- Punto 1 -->
                <article class="point-card">
                    <div class="point-number">01</div>
                    <div class="point-content">
                        <h3>Gasfiter Instalador Autorizado por la SEC</h3>
                        <p>Domingo cuenta con licencia y registro oficial activo ante la Superintendencia de Electricidad y Combustibles (SEC), habilitado legalmente para intervenir, certificar y firmar protocolos en redes interiores de gas de baja y media presión.</p>
                        <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" style="color: var(--primary-light); font-weight: 700; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 6px; margin-top: 8px;">
                            <i class="fa-solid fa-id-badge"></i> Comprobar Licencia en Portal SEC Oficial &rarr;
                        </a>
                    </div>
                </article>

                <!-- Punto 2 -->
                <article class="point-card">
                    <div class="point-number">02</div>
                    <div class="point-content">
                        <h3>Especialista Acreditado en Aplicación de Prodoral R6-1</h3>
                        <p>Capacitado y certificado directamente bajo los lineamientos del fabricante alemán TIB Chemicals AG y la hoja de trabajo técnica DVGW G 624 para el resellado interno de cañerías de gas.</p>
                        <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" style="color: var(--primary-light); font-weight: 700; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 6px; margin-top: 8px;">
                            <i class="fa-solid fa-file-pdf"></i> Ver Certificación y Ficha Técnica Prodoral (PDF) &rarr;
                        </a>
                    </div>
                </article>

                <!-- Punto 3 -->
                <article class="point-card">
                    <div class="point-number">03</div>
                    <div class="point-content">
                        <h3>Más de 40 Años de Trayectoria Comprobada en Gas</h3>
                        <p>Cuatro décadas de experiencia resolviendo fallas complejas de hermeticidad, matrices en edificios antiguos, fugas subterráneas y regularización de instalaciones en todo el país.</p>
                    </div>
                </article>

                <!-- Punto 4 -->
                <article class="point-card">
                    <div class="point-number">04</div>
                    <div class="point-content">
                        <h3>Certificación Gubernamental ChileValora en Fugas de Gas</h3>
                        <p>Acreditado por el Sistema Nacional de Certificación de Competencias Laborales de Chile (ChileValora) en diagnóstico, detección instrumental y reparación de fugas en redes de gas.</p>
                    </div>
                </article>

                <!-- Punto 5 -->
                <article class="point-card">
                    <div class="point-number">05</div>
                    <div class="point-content">
                        <h3>Pionero en Chile en Sellado No Destructivo (Sin Romper)</h3>
                        <p>Domingo es el técnico pionero en Chile en evitar que los propietarios tengan que demoler paredes, romper cerámicas de cocina o picar losas para solucionar una fuga de gas embutida.</p>
                    </div>
                </article>

                <!-- Punto 6 -->
                <article class="point-card">
                    <div class="point-number">06</div>
                    <div class="point-content">
                        <h3>Equipamiento de Inyección y Nitrógeno Seco de Alta Pureza</h3>
                        <p>Utiliza bombas neumáticas de diafragma, tacos de calibración de espuma y nitrógeno seco para purgar, presurizar y secar la red conforme a los estándares técnicos europeos más exigentes.</p>
                    </div>
                </article>

                <!-- Punto 7 -->
                <article class="point-card">
                    <div class="point-number">07</div>
                    <div class="point-content">
                        <h3>Prueba de Hermeticidad Normada a 150 mbar</h3>
                        <p>Verificación final con manómetros digitales certificados de alta precisión durante 10 a 15 minutos, garantizando estanqueidad total antes de la reapertura de la llave de paso.</p>
                    </div>
                </article>

                <!-- Punto 8 -->
                <article class="point-card">
                    <div class="point-number">08</div>
                    <div class="point-content">
                        <h3>Cobertura Completa en Santiago y Principales Regiones</h3>
                        <p>Atención directa para casas, departamentos, comunidades de edificios, colegios e industrias en las 52 comunas de Santiago y regiones de Valparaíso, O'Higgins, Maule, Biobío y Coquimbo.</p>
                    </div>
                </article>

                <!-- Punto 9 -->
                <article class="point-card">
                    <div class="point-number">09</div>
                    <div class="point-content">
                        <h3>Atención Personalizada y Supervisión Directa del Titular</h3>
                        <p>Sin subcontrataciones a terceros inexpertos: Domingo Isain Plaza Caamaño evalúa, ejecuta y responde personalmente por cada servicio realizado, brindando máxima tranquilidad.</p>
                    </div>
                </article>

                <!-- Punto 10 -->
                <article class="point-card">
                    <div class="point-number">10</div>
                    <div class="point-content">
                        <h3>Garantía Escrita de 3 Años y Duración Indefinida (+30 Años)</h3>
                        <p>Cada trabajo cuenta con garantía legal y técnica por escrito de 3 años por efectos de sellado. Además, el polímero alemán posee una vida útil indefinida superior a 30 años sin degradación, permitiendo recuperar de inmediato el Sello Verde de la SEC tras cortes de Metrogas, Lipigas, Abastible o Gasco.</p>
                    </div>
                </article>
            </div>

            <!-- Tarjeta de Perfil y Credencial de Domingo Plaza -->
            <div class="domingo-profile-highlight">
                <div class="profile-credential-box">
                    <img src="<?= EXPERT_PHOTO_URL ?>" alt="<?= EXPERT_NAME ?> - Gasfiter Autorizado SEC" class="profile-sec-img">
                    <div class="profile-avatar-tag">
                        <strong><?= EXPERT_NAME ?></strong>
                        <span>Instalador Titular Responsable</span>
                    </div>

                    <!-- Credencial Oficial SEC con Código QR Grande y Escaneable -->
                    <div class="sec-qr-card">
                        <div class="sec-qr-card-header">
                            <span class="sec-subhead"><i class="fa-solid fa-shield-halved" style="color: #f59e0b;"></i> Superintendencia de Electricidad y Combustibles</span>
                            <span class="sec-title">LICENCIA SEC CLASE 3 OFICIAL</span>
                        </div>
                        <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="sec-qr-link" title="Escanear con tu celular o hacer clic para abrir la certificación oficial en SEC.cl">
                            <img src="<?= SEC_QR_URL ?>" alt="Código QR Licencia SEC - Domingo Isain Plaza Caamaño" class="sec-qr-image" width="200" height="200">
                        </a>
                        <div class="sec-qr-card-footer">
                            <div class="sec-qr-scan-badge">
                                <i class="fa-solid fa-camera"></i> Escanear con tu Celular
                            </div>
                            <span class="sec-qr-hint-text">Apunta la cámara de tu teléfono para validar</span>
                            <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="sec-qr-direct-btn" title="Abrir portal oficial de la SEC">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i> O Clic para Verificar en SEC.cl
                            </a>
                        </div>
                    </div>
                </div>

                <div class="profile-text-box">
                    <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(245, 158, 11, 0.15); border: 1px solid rgba(245, 158, 11, 0.4); color: var(--accent-gold); padding: 5px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; margin-bottom: 12px;">
                        <i class="fa-solid fa-award"></i> Respaldo Técnico y Firma Autorizada SEC
                    </div>
                    <h3><?= EXPERT_NAME ?></h3>
                    <span class="role"><?= EXPERT_TITLE ?></span>
                    <p>
                        "En más de cuatro décadas de oficio, he visto a cientos de propietarios angustiados porque les dijeron que para reparar una fuga de gas debían romper toda su casa. Con el método Prodoral R6-1 recuperamos la estanqueidad total de las cañerías en un solo día, con respaldo normativo SEC y sin destruir un solo muro."
                    </p>

                    <div class="profile-trust-points">
                        <div class="profile-trust-point">
                            <i class="fa-solid fa-circle-check"></i>
                            <div><strong>Instalador de Gas Clase 3 SEC:</strong> Certificación gubernamental activa y verificable en línea ante la Superintendencia.</div>
                        </div>
                        <div class="profile-trust-point">
                            <i class="fa-solid fa-circle-check"></i>
                            <div><strong>Certificación ChileValora:</strong> Validación oficial de competencias técnicas en instalaciones y redes de gas.</div>
                        </div>
                        <div class="profile-trust-point">
                            <i class="fa-solid fa-circle-check"></i>
                            <div><strong>Supervisión Directa del Titular:</strong> Sin subcontrataciones; Domingo Plaza diagnostica, ejecuta y firma cada informe técnico.</div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 20px;">
                        <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sec-license" style="width: auto; padding: 10px 18px;" title="Verificar licencia de instalador en el portal oficial de la SEC">
                            <i class="fa-solid fa-shield-halved"></i> Verificar Licencia SEC en Portal Oficial
                        </a>
                        <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white" style="border-color: rgba(255,255,255,0.3); font-size: 0.9rem; padding: 10px 18px;" title="Descargar Ficha Técnica Prodoral en PDF">
                            <i class="fa-solid fa-file-pdf" style="color: #f87171;"></i> Ficha Técnica Prodoral (PDF)
                        </a>
                    </div>
                    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                        <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency">
                            <i class="fa-solid fa-phone"></i> Llamar al <?= PHONE_DISPLAY ?>
                        </a>
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Hablar por WhatsApp Directo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Sección: Proceso Técnico en 6 Pasos -->
    <section class="section-padding process-section" id="proceso">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Procedimiento Certificado DVGW G 624</div>
                <h2 class="section-title">¿Cómo Funciona el Proceso de Sellado con Prodoral R6-1?</h2>
                <p class="section-subtitle">
                    Un protocolo riguroso de ingeniería química y neumática que restaura la hermeticidad de la instalación en pocas horas.
                </p>
            </div>

            <div class="process-grid-6">
                <!-- Paso 1 -->
                <div class="process-step-card">
                    <div class="step-badge">1</div>
                    <h3>Inspección y Diagnóstico</h3>
                    <p>Evaluación de presiones iniciales con manómetro de precisión para determinar el caudal de pérdida y constatar que la red sea apta para el tratamiento.</p>
                </div>
                <!-- Paso 2 -->
                <div class="process-step-card">
                    <div class="step-badge">2</div>
                    <h3>Aislamiento y Purga</h3>
                    <p>Se desacoplan los artefactos de consumo, se colocan válvulas de purga en cada salida y se limpia el polvo interno con soplado de nitrógeno seco.</p>
                </div>
                <!-- Paso 3 -->
                <div class="process-step-card">
                    <div class="step-badge">3</div>
                    <h3>Inyección a Presión</h3>
                    <p>Se bombea el sellante líquido Prodoral R6-1 mediante bomba neumática de diafragma, manteniéndolo a presión para que penetre en cada fisura y rosca.</p>
                </div>
                <!-- Paso 4 -->
                <div class="process-step-card">
                    <div class="step-badge">4</div>
                    <h3>Evacuación con Tacos</h3>
                    <p>Se recupera el producto sobrante introduciendo tacos de espuma calibrados que recorren la cañería empujados por nitrógeno, dejando una película uniforme.</p>
                </div>
                <!-- Paso 5 -->
                <div class="process-step-card">
                    <div class="step-badge">5</div>
                    <h3>Secado Forzado</h3>
                    <p>Se conecta el soplador térmico para secar y polimerizar la resina elástica en el interior de la tubería, consolidando una junta hermética indestructible.</p>
                </div>
                <!-- Paso 6 -->
                <div class="process-step-card">
                    <div class="step-badge">6</div>
                    <h3>Prueba a 150 mbar</h3>
                    <p>Test de estanqueidad normado durante 10 a 15 minutos. Al verificar cero caída de presión, se reconectan artefactos y se restituye el suministro seguro.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Sección: Casos Reales y Videos de Trabajos -->
    <section class="section-padding cases-section" id="casos-reales">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Casos Comprobados en Terreno</div>
                <h2 class="section-title">Videos y Trabajos Reales de Sellado de Fugas</h2>
                <p class="section-subtitle">
                    Observe en video cómo realizamos la inyección de Prodoral R6-1 y las pruebas de hermeticidad en terreno.
                </p>
            </div>

            <div class="media-gallery-grid">
                <!-- Video 1: Procedimiento de Inyección -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/trabajo-2.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                            Su navegador no soporta reproducción de video.
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Inyección de Prodoral R6-1 en Terreno</h3>
                        <p>Conexión de mangueras de presión y llenado de la red de gas interior sin romper superficies.</p>
                    </div>
                </div>

                <!-- Video 2: Prueba con Manómetro -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/manometro-digital.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/video-3.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                            Su navegador no soporta reproducción de video.
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Verificación de Hermeticidad Manométrica</h3>
                        <p>Control exacto a 150 mbar demostrando la eliminación completa de las pérdidas de gas.</p>
                    </div>
                </div>

                <!-- Video 3: Testimonio / Resultado Final -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/trabajo-1.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/video-testimonio-trabajo.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                            Su navegador no soporta reproducción de video.
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Resultado Final en Comunidad</h3>
                        <p>Prueba exitosa y rehabilitación inmediata de gas en departamento con Sello Verde recuperado.</p>
                    </div>
                </div>

                <!-- Foto 1: Manómetro Digital -->
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/manometro-digital.webp" alt="Manómetro digital de precisión para fugas de gas" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Manometría Digital de Alta Precisión</div>
                </div>

                <!-- Foto 2: Móvil y Equipamiento -->
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/nuestros moviles.webp" alt="Móviles de atención técnica rápida en Santiago y regiones" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Unidades Móviles Equipadas para Urgencias</div>
                </div>

                <!-- Foto 3: Gasfiter Certificado en Acción -->
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/gasfiter-certificado-sec-deteccion-fugas-gas-prodoral-r6-1.webp" alt="Gasfiter SEC aplicando sellante Prodoral" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Gasfiter Certificado SEC en Acción</div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="<?= BASE_URL ?>/casos-exito-fugas-gas" class="btn btn-primary">
                    <i class="fa-solid fa-photo-film"></i> Ver Galería Completa de Proyectos
                </a>
            </div>
        </div>
    </section>

    <!-- 7. Sección: Preguntas Frecuentes (FAQs Acordeón Interactivo) -->
    <section class="section-padding faqs-section" id="faqs">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">Respuestas Claras & Confiables</div>
                <h2 class="section-title">Preguntas Frecuentes Sobre Sellado de Fugas y Prodoral R6-1</h2>
                <p class="section-subtitle">
                    Todo lo que necesita saber sobre el sellante alemán, la normativa chilena SEC y cómo recuperar el suministro sin romper su hogar.
                </p>
            </div>

            <div class="faq-accordion-wrap">
                <?php foreach ($faqs as $i => $faq): ?>
                <div class="faq-item<?= $i === 0 ? ' active' : '' ?>" id="faq-item-<?= $i + 1 ?>">
                    <button type="button" class="faq-question" aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                        <span><?= htmlspecialchars($faq['question']) ?></span>
                        <span class="faq-chevron"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-inner">
                            <p><?= htmlspecialchars($faq['answer']) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 8. Sección: Cobertura en Santiago y Regiones -->
    <section class="section-padding coverage-section" id="cobertura">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Cobertura Integral</div>
                <h2 class="section-title">Atención en Santiago y Principales Regiones de Chile</h2>
                <p class="section-subtitle">
                    Desplazamiento rápido con unidades equipadas para inspección, diagnóstico y sellado de fugas de gas.
                </p>
            </div>

            <div class="coverage-box">
                <h3 style="font-size: 1.25rem; margin-bottom: 12px; color: var(--navy-900);">
                    <i class="fa-solid fa-map-location-dot" style="color: var(--primary);"></i> Región Metropolitana de Santiago
                </h3>
                <p style="font-size: 0.95rem; color: var(--text-body);">
                    Atendemos todas las comunas del Gran Santiago y provincia con servicio de emergencia:
                </p>
                <div class="coverage-tags">
                    <span class="coverage-tag">Santiago Centro</span>
                    <span class="coverage-tag">Las Condes</span>
                    <span class="coverage-tag">Providencia</span>
                    <span class="coverage-tag">Vitacura</span>
                    <span class="coverage-tag">Lo Barnechea</span>
                    <span class="coverage-tag">Ñuñoa</span>
                    <span class="coverage-tag">La Reina</span>
                    <span class="coverage-tag">Peñalolén</span>
                    <span class="coverage-tag">La Florida</span>
                    <span class="coverage-tag">Macul</span>
                    <span class="coverage-tag">San Miguel</span>
                    <span class="coverage-tag">Maipú</span>
                    <span class="coverage-tag">Pudahuel</span>
                    <span class="coverage-tag">Quilicura</span>
                    <span class="coverage-tag">Huechuraba</span>
                    <span class="coverage-tag">Recoleta</span>
                    <span class="coverage-tag">Independencia</span>
                    <span class="coverage-tag">San Bernardo</span>
                    <span class="coverage-tag">Puente Alto</span>
                    <span class="coverage-tag">Colina / Chicureo</span>
                </div>

                <hr style="margin: 24px 0; border: none; border-top: 1px solid var(--border-light);">

                <h3 style="font-size: 1.25rem; margin-bottom: 12px; color: var(--navy-900);">
                    <i class="fa-solid fa-route" style="color: var(--primary);"></i> Atención en Regiones
                </h3>
                <div class="coverage-tags">
                    <span class="coverage-tag">Viña del Mar</span>
                    <span class="coverage-tag">Valparaíso</span>
                    <span class="coverage-tag">Concón</span>
                    <span class="coverage-tag">Quilpué / Villa Alemana</span>
                    <span class="coverage-tag">Rancagua / Machalí</span>
                    <span class="coverage-tag">San Fernando</span>
                    <span class="coverage-tag">Curicó</span>
                    <span class="coverage-tag">Talca</span>
                    <span class="coverage-tag">Concepción</span>
                    <span class="coverage-tag">La Serena / Coquimbo</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Llamado a la Acción Final (CTA Banner) -->
    <section class="cta-banner-section">
        <div class="container">
            <div class="cta-banner-content">
                <h2>¿Le Cortaron el Gas o Detectó Pérdida de Presión?</h2>
                <p>
                    No permita que piquen sus paredes ni destruyan su hogar. Comuníquese de inmediato con <strong><?= EXPERT_NAME ?></strong>, Gasfiter Certificado SEC, y solucione la fuga hoy mismo con Prodoral R6-1.
                </p>
                <div class="cta-banner-buttons">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn">
                        <i class="fa-solid fa-phone-volume"></i> Llamar al <?= PHONE_DISPLAY ?>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i> Chatear por WhatsApp Directo
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
