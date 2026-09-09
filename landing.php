<?php
/**
 * Plantilla Dinámica de Landing Pages para URLs SEO de prodoral.cl
 * Maneja las 23 URLs indexadas en Google con contenido optimizado, FAQs y Schemas de Reseñas
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/pages_content.php';
require_once __DIR__ . '/includes/schemas.php';

// Obtener el slug solicitado
$slug = $slug ?? trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$allPages = get_all_pages_data();

// Si el slug existe exactamente en la biblioteca, cargarlo; si no, buscar el más cercano o usar predeterminado
$pageData = $allPages[$slug] ?? null;

if (!$pageData) {
    // Si no está mapeado exactamente, asignar a la intención más cercana
    if (strpos($slug, 'precio') !== false) {
        $pageData = $allPages['precio-reparar-fuga-de-gas-chile'];
    } elseif (strpos($slug, 'senales') !== false) {
        $pageData = $allPages['senales-fuga-de-gas-casa'];
    } elseif (strpos($slug, 'h') !== false && strpos($slug, 'prodoral-h') !== false) {
        $pageData = $allPages['prodoral-h'];
    } elseif (strpos($slug, 'sec') !== false || strpos($slug, 'gasfiter') !== false) {
        $pageData = $allPages['gasfiter-certificado-sec-en-gas-y-en-prodoral'];
    } elseif (strpos($slug, 'r6') !== false || strpos($slug, 'que-es') !== false) {
        $pageData = $allPages['prodoral-r6-1'];
    } else {
        $pageData = $allPages['sellar-fuga-de-gas-con-prodoral'];
    }
}

$pageData['slug'] = $slug;

$pageTitle = $pageData['title'];
$pageDesc = $pageData['meta_desc'];
$pageSlug = $slug;
$ogImage = BASE_URL . '/assets/img/og-prodoral-social.jpg';

$faqs = $pageData['faqs'];
$jsonLdSchema = get_main_schemas($faqs, $pageData);

$reviews = get_verified_reviews_data();

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Encabezado de la Landing Page con Video de Fondo y Reproductor Destacado -->
    <section class="hero-section" style="min-height: auto; padding: 75px 0 65px 0; position: relative; overflow: hidden;" id="hero">
        <img src="<?= BASE_URL ?>/assets/img/background-sellante-fugas-prodoral-chile.webp" alt="Sellado de Fugas de Gas con Prodoral R6-1 en Chile" class="hero-bg-img" width="1280" height="720" fetchpriority="high" decoding="async">
        <video class="hero-video-bg" width="1280" height="720" muted loop playsinline preload="none" aria-hidden="true" data-hero-video>
            <source data-src="<?= BASE_URL ?>/assets/videos/hero-video.mp4" type="video/mp4" media="(min-width: 768px)">
            <track kind="captions" src="" label="Español" default>
        </video>
        <div class="hero-overlay"></div>

        <div class="container" style="position: relative; z-index: 3; text-align: center;">
            <div class="section-tag tag-gold" style="margin-bottom: 14px;">
                <i class="fa-solid fa-certificate"></i> <?= htmlspecialchars($pageData['badge']) ?>
            </div>

            <!-- Insignia de Calificación de Google y Garantía Oficial en la Cabecera -->
            <div style="display: flex; justify-content: center; align-items: center; gap: 10px; flex-wrap: wrap; margin-bottom: 18px;">
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.08); padding: 6px 16px; border-radius: var(--radius-full); border: 1px solid rgba(245, 158, 11, 0.35); backdrop-filter: blur(8px);">
                    <i class="fa-solid fa-star" style="color: #f59e0b;"></i>
                    <span style="font-weight: 800; color: #f59e0b; font-size: 0.92rem;">4.9 / 5.0</span>
                    <span style="color: var(--text-muted); font-size: 0.82rem;">(3.428 Reseñas Verificadas)</span>
                </div>
                <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(16, 185, 129, 0.15); padding: 6px 16px; border-radius: var(--radius-full); border: 1px solid rgba(16, 185, 129, 0.4); backdrop-filter: blur(8px);">
                    <i class="fa-solid fa-shield-halved" style="color: #34d399;"></i>
                    <span style="font-weight: 800; color: #34d399; font-size: 0.92rem;">Garantía Escrita 3 Años</span>
                    <span style="color: var(--text-light); font-size: 0.82rem;">• Vida Útil +30 Años</span>
                </div>
            </div>

            <h1 style="font-size: 2.85rem; font-weight: 900; line-height: 1.2; max-width: 950px; margin: 0 auto 18px auto; color: var(--text-white);">
                <?= htmlspecialchars($pageData['h1']) ?>
            </h1>
            <p style="font-size: 1.18rem; color: var(--text-light); opacity: 0.92; max-width: 800px; margin: 0 auto 26px auto; line-height: 1.6;">
                <?= htmlspecialchars($pageData['subtitle']) ?>
            </p>

            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; margin-bottom: 24px;">
                <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn">
                    <i class="fa-solid fa-phone-volume"></i> Llamar al <?= PHONE_DISPLAY ?>
                </a>
                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Cotizar por WhatsApp
                </a>
            </div>

            <!-- Fila de Confianza y Garantía -->
            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-bottom: 30px; font-size: 0.88rem; color: var(--text-light);">
                <div><i class="fa-solid fa-shield-halved" style="color: var(--primary-light);"></i> <strong>Garantía Escrita 3 Años</strong></div>
                <div><i class="fa-solid fa-check-circle" style="color: var(--primary-light);"></i> <strong>Duración +30 Años</strong> (Indefinida)</div>
                <div><i class="fa-solid fa-certificate" style="color: var(--primary-light);"></i> Gasfiter Certificado SEC</div>
                <div><i class="fa-solid fa-gauge-high" style="color: var(--primary-light);"></i> Test Hermeticidad 150 mbar</div>
            </div>

            <!-- Reproductor de Video Destacado en el Hero -->
            <div style="max-width: 820px; margin: 0 auto; background: rgba(7, 13, 25, 0.9); border: 2px solid rgba(16, 185, 129, 0.45); border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6), 0 0 35px rgba(16, 185, 129, 0.25); backdrop-filter: blur(14px);">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                    <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.webp" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
                        <source src="<?= BASE_URL ?>/assets/videos/prodoral-r6-1-sellado-fuga-sin-romper.mp4" type="video/mp4">
                        <source src="<?= BASE_URL ?>/assets/videos/trabajo-2.mp4" type="video/mp4">
                        <track kind="captions" src="" label="Español" default>
                        Su navegador no soporta reproducción de video HTML5.
                    </video>
                </div>
                <div style="padding: 16px 22px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; background: rgba(11, 19, 43, 0.98); text-align: left;">
                    <div>
                        <strong style="color: var(--primary-light); font-size: 0.975rem; display: block; margin-bottom: 2px;">
                            <i class="fa-solid fa-circle-play"></i> Demostración en Terreno: Sellado de Fuga de Gas con Prodoral R6-1
                        </strong>
                        <span style="font-size: 0.825rem; color: var(--text-muted);">
                            Vea cómo realizamos la inyección neumática y la prueba de hermeticidad a 150 mbar sin romper muros.
                        </span>
                    </div>
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency" style="padding: 9px 18px; font-size: 0.85rem;">
                        <i class="fa-solid fa-phone"></i> Urgencias SEC
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido Técnico Principal -->
    <section class="section-padding" style="background-color: var(--bg-white);">
        <div class="container">
            <div class="two-col-grid" style="align-items: center; gap: 50px;">
                <div>
                    <div class="section-tag">Atención Especializada</div>
                    <h2 class="section-title">Solución Definitiva en Redes Interiores de Gas</h2>
                    <p style="font-size: 1.05rem; color: var(--text-body); margin-bottom: 20px; line-height: 1.7;">
                        Cuando se presenta una fuga de gas en cañerías embutidas o la empresa distribuidora (Metrogas, Lipigas, Gasco o Abastible) suspende el suministro con <strong>Sello Rojo o Amarillo</strong>, la reparación tradicional de romper paredes y demoler pisos resulta traumática, lenta y excesivamente costosa.
                    </p>
                    <p style="font-size: 1.05rem; color: var(--text-body); margin-bottom: 24px; line-height: 1.7;">
                        Con la tecnología alemana <strong>Prodoral R6-1</strong> y la dirección técnica de <strong><?= EXPERT_NAME ?></strong>, Gasfiter Certificado SEC, realizamos la inyección del sellante polimérico por el interior de la instalación. El sellado se logra en el transcurso del mismo día y se valida mediante una <strong>prueba de hermeticidad normada a 150 mbar</strong>, permitiendo recuperar el Sello Verde de inmediato.
                    </p>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px;">
                        <div style="background: var(--bg-light); padding: 16px; border-radius: var(--radius-sm); border-left: 3px solid var(--primary);">
                            <strong style="color: var(--navy-900); display: block; margin-bottom: 4px;"><i class="fa-solid fa-shield-halved" style="color: var(--primary);"></i> 100% Sin Romper</strong>
                            <span style="font-size: 0.875rem; color: var(--text-body);">Muros, losas y cerámicos quedan completamente intactos.</span>
                        </div>
                        <div style="background: var(--bg-light); padding: 16px; border-radius: var(--radius-sm); border-left: 3px solid var(--accent-gold);">
                            <strong style="color: var(--navy-900); display: block; margin-bottom: 4px;"><i class="fa-solid fa-gauge-high" style="color: var(--accent-gold);"></i> Prueba a 150 mbar</strong>
                            <span style="font-size: 0.875rem; color: var(--text-body);">Verificación instrumental con manómetro digital SEC.</span>
                        </div>
                    </div>

                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-primary">
                        <i class="fa-solid fa-phone"></i> Consultar Disponibilidad Inmediata
                    </a>
                </div>

                <div>
                    <div class="interactive-media-box">
                        <img src="<?= BASE_URL ?>/assets/img/<?= htmlspecialchars($pageData['image']) ?>" alt="<?= htmlspecialchars($pageData['h1']) ?>" style="width: 100%; height: auto;">
                        <div class="media-badge-float">
                            <strong><i class="fa-solid fa-user-shield"></i> Ejecutado por Domingo Isain Plaza Caamaño</strong>
                            <p>Gasfiter Certificado SEC • Especialista en Prodoral R6-1 • Más de 40 años de oficio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reseñas Verificadas de Clientes (Estrellas Visibles en Pantalla) -->
    <section class="section-padding" style="background-color: var(--bg-light);" id="testimonios">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">
                    <i class="fa-solid fa-star"></i> Valoraciones en Google
                </div>
                <h2 class="section-title">Opiniones y Reseñas de Clientes Verificados</h2>
                <div style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 8px;">
                    <span style="font-size: 1.75rem; font-weight: 900; color: #f59e0b; font-family: var(--font-heading);">4.9</span>
                    <div style="color: #f59e0b; font-size: 1.25rem;">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span style="color: var(--text-muted); font-size: 1rem;">(3.428 clientes satisfechos en Chile)</span>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                <?php foreach ($reviews as $rev): ?>
                <div style="background: var(--bg-white); border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 26px; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                            <div style="color: #f59e0b; font-size: 0.95rem;">
                                <?php for ($s = 0; $s < $rev['stars']; $s++): ?>
                                    <i class="fa-solid fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <span style="font-size: 0.775rem; color: var(--text-muted);"><i class="fa-regular fa-clock"></i> <?= $rev['date'] ?></span>
                        </div>
                        <h4 style="font-size: 1.05rem; color: var(--navy-900); margin-bottom: 8px; font-weight: 700;">
                            "<?= htmlspecialchars($rev['title']) ?>"
                        </h4>
                        <p style="font-size: 0.925rem; color: var(--text-body); line-height: 1.6; margin-bottom: 16px;">
                            <?= htmlspecialchars($rev['text']) ?>
                        </p>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(5, 150, 105, 0.12); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 0.9rem;">
                            <?= substr($rev['author'], 0, 1) ?>
                        </div>
                        <div>
                            <strong style="display: block; font-size: 0.9rem; color: var(--navy-900);"><?= htmlspecialchars($rev['author']) ?></strong>
                            <span style="font-size: 0.775rem; color: var(--text-muted);"><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($rev['comuna']) ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQs Específicas de la Página -->
    <section class="section-padding faqs-section">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">Preguntas y Respuestas</div>
                <h2 class="section-title">Preguntas Frecuentes sobre <?= htmlspecialchars($pageData['keyword']) ?></h2>
                <p class="section-subtitle">
                    Información clara para resolver todas sus dudas y contratar con total seguridad.
                </p>
            </div>

            <div class="faq-accordion-wrap">
                <?php foreach ($faqs as $i => $faq): ?>
                <div class="faq-item" id="faq-item-<?= $i + 1 ?>">
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

    <!-- CTA Final -->
    <section class="cta-banner-section">
        <div class="container">
            <div class="cta-banner-content">
                <h2>¿Necesita Solucionar su Fuga de Gas Hoy Mismo?</h2>
                <p>Comuníquese directamente con Domingo Isain Plaza Caamaño, Gasfiter Certificado SEC.</p>
                <div class="cta-banner-buttons">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn">
                        <i class="fa-solid fa-phone-volume"></i> Llamar al <?= PHONE_DISPLAY ?>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i> Chatear por WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
