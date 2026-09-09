<?php
/**
 * Página Proyectos / Casos de Éxito - Prodoral Chile (/casos-exito-fugas-gas)
 */

require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Casos Reales de Sellado de Gas | 📞 9 4987 7316 | Evidencia en Terreno';
$pageDesc = '📞 Consulte su caso al +56 9 4987 7316. Fotos y videos reales de sellado con Prodoral R6-1 en casas y edificios de Santiago. Solución definitiva sin picar ni demoler.';
$pageSlug = 'casos-exito-fugas-gas';
$ogImage = BASE_URL . '/assets/img/og-prodoral-social.jpg';

require_once __DIR__ . '/includes/header.php';
?><main id="main-content">
    <!-- Encabezado de Página -->
    <section style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 100%); color: var(--text-white); padding: 70px 0 50px 0; text-align: center;">
        <div class="container">
            <div class="section-tag tag-gold" style="margin-bottom: 12px;">
                <i class="fa-solid fa-photo-film"></i> Evidencia en Terreno
            </div>
            <h1 style="font-size: 2.75rem; font-weight: 900; color: var(--text-white); margin-bottom: 14px;">
                Casos Reales de Sellado de Fugas de Gas
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 750px; margin: 0 auto;">
                Experiencia técnica comprobada en terreno: videos y fotografías de procedimientos exitosos en Santiago y regiones.
            </p>
        </div>
    </section>

    <!-- Galería de Videos en Terreno -->
    <section class="section-padding" style="background-color: var(--bg-white);">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Registro Audiovisual</div>
                <h2 class="section-title">Videos de Aplicación y Verificación de Hermeticidad</h2>
                <p class="section-subtitle">
                    Observe paso a paso el bombeo neumático de Prodoral R6-1 y las pruebas instrumentales a 150 mbar.
                </p>
            </div>

            <div class="media-gallery-grid" style="margin-bottom: 50px;">
                <!-- Video 1 -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/trabajo-2.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Inyección de Sellante Prodoral R6-1</h3>
                        <p>Procedimiento de bombeo a presión en cañerías embutidas en departamento de Santiago.</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/manometro-digital.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/video-3.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Prueba de Hermeticidad Instrumental</h3>
                        <p>Control de presión con manómetro digital de precisión certificando cero pérdida de gas.</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/trabajo-1.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/video-testimonio-trabajo.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Testimonio de Rehabilitación de Suministro</h3>
                        <p>Cliente satisfecho tras recuperar el gas en el mismo día sin haber roto sus muros.</p>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-santiago.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/prodoral-r6-1-sellado-fuga-sin-romper.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Sellado No Destructivo en Casa Residencial</h3>
                        <p>Tratamiento de red completa de cobre con múltiples microfugas en uniones roscadas.</p>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/background-sellante-fugas-prodoral-chile.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/prodoral-r-6-prodoral-chile.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Aplicación de Prodoral Chile en Edificio</h3>
                        <p>Recuperación de columna matriz de gas para habilitación de Sello Verde ante la SEC.</p>
                    </div>
                </div>

                <!-- Video 6 -->
                <div class="video-card">
                    <div class="video-wrap">
                        <video controls preload="none" poster="<?= BASE_URL ?>/assets/img/manometro-digital.webp">
                            <source src="<?= BASE_URL ?>/assets/videos/video-manometro.mp4" type="video/mp4">
                            <track kind="captions" src="" label="Español" default>
                        </video>
                    </div>
                    <div class="video-info">
                        <h3>Comprobación Final a 150 mbar</h3>
                        <p>Demostración práctica de estanqueidad total durante 15 minutos continuos de testeo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galería Fotográfica de Trabajos -->
    <section class="section-padding" style="background-color: var(--bg-light);">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">Registro Fotográfico</div>
                <h2 class="section-title">Galería de Trabajos y Equipamiento Técnico</h2>
                <p class="section-subtitle">
                    Equipamiento de alta gama, vehículos de servicio y labores de gasfitería especializada.
                </p>
            </div>

            <div class="media-gallery-grid">
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/trabajo-1.webp" alt="Conexión de válvulas para purga de gas" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Conexión de Válvulas de Purga en Red Interior</div>
                </div>
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/trabajo-4.webp" alt="Inyección de Prodoral R6-1 en nicho de gas" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Inyección en Nicho y Cañerías Principales</div>
                </div>
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/trabajo-5.webp" alt="Acoples y mangueras de presión" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Acoples Rápidos y Mangueras de Alta Presión</div>
                </div>
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/trabajo-6.webp" alt="Inspección de red de gas" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Inspección de Artefactos y Calefones</div>
                </div>
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/trabajo-7.webp" alt="Equipamiento móvil" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Equipamiento Neumático Completo</div>
                </div>
                <div class="photo-card">
                    <img src="<?= BASE_URL ?>/assets/img/nuestros moviles.webp" alt="Móviles de Prodoral Chile" width="400" height="300" loading="lazy">
                    <div class="photo-caption">Móviles Equipados para Atención de Urgencia</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-banner-section">
        <div class="container">
            <div class="cta-banner-content">
                <h2>¿Quiere Solucionar su Fuga de Gas de Forma Limpia y Definitiva?</h2>
                <p>Contáctenos hoy mismo y reciba la atención directa de Domingo Isain Plaza Caamaño, Gasfiter SEC.</p>
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
