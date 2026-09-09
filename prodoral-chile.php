<?php
/**
 * Página Nosotros - Prodoral Chile (/prodoral-chile)
 */

require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Sobre Nosotros | Gasfiter Certificado SEC Especialista en Prodoral R6-1';
$pageDesc = 'Conozca la trayectoria de Domingo Isain Plaza Caamaño, Gasfiter Certificado SEC con más de 40 años de experiencia y pionero en Chile en la aplicación del sellante alemán Prodoral R6-1.';
$pageSlug = 'prodoral-chile';
$ogImage = BASE_URL . '/assets/img/SEC-DOMINGO.webp';

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Encabezado de Página -->
    <section style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 100%); color: var(--text-white); padding: 70px 0 50px 0; text-align: center;">
        <div class="container">
            <div class="section-tag tag-gold" style="margin-bottom: 12px;">
                <i class="fa-solid fa-users"></i> Trayectoria y Respaldo Profesional
            </div>
            <h1 style="font-size: 2.75rem; font-weight: 900; color: var(--text-white); margin-bottom: 14px;">
                Especialistas en Sellado de Fugas de Gas con Prodoral R6-1
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 750px; margin: 0 auto;">
                Más de 40 años entregando soluciones definitivas, limpias y autorizadas por la SEC para viviendas, edificios e industrias en Chile.
            </p>
        </div>
    </section>

    <!-- Contenido Principal: Perfil y Misión -->
    <section class="section-padding" style="background-color: var(--bg-white);">
        <div class="container">
            <div class="two-col-grid">
                <div>
                    <div class="section-tag">Perfil del Fundador</div>
                    <h2 class="section-title">Domingo Isain Plaza Caamaño</h2>
                    <p class="section-subtitle" style="margin-bottom: 20px;">
                        <strong>Gasfiter Certificado por la Superintendencia de Electricidad y Combustibles (SEC)</strong> y acreditado por <strong>ChileValora</strong> en detección y diagnóstico de fugas.
                    </p>
                    <p style="margin-bottom: 16px; color: var(--text-body);">
                        Con más de cuatro décadas de trayectoria técnica en instalaciones de gas en Chile, Domingo Isain Plaza Caamaño se ha consolidado como el principal referente nacional en la aplicación del sellante polimérico alemán <strong>Prodoral R6-1</strong>.
                    </p>
                    <p style="margin-bottom: 20px; color: var(--text-body);">
                        Frente a la práctica destructiva tradicional que obliga a romper cerámicas, losas y muros estructurales para buscar una fuga, Domingo introdujo y perfeccionó el método de inyección interna bajo normas europeas <strong>DIN EN 13090</strong> y <strong>DVGW G 624</strong>, devolviendo la tranquilidad y el suministro continuo a miles de hogares y comunidades en tiempo récord.
                    </p>

                    <div style="background: var(--bg-light); border-left: 4px solid var(--primary); padding: 20px; border-radius: var(--radius-sm); margin-bottom: 24px;">
                        <h4 style="color: var(--navy-900); font-size: 1.05rem; margin-bottom: 6px;">Nuestra Misión</h4>
                        <p style="font-size: 0.925rem; color: var(--text-body); margin: 0;">
                            Garantizar la seguridad de las familias y la continuidad del suministro de gas en Chile mediante tecnología no destructiva de vanguardia, actuando con estricto apego a las normativas de seguridad de la SEC y entregando una solución limpia, económica y definitiva.
                        </p>
                    </div>

                    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                        <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency">
                            <i class="fa-solid fa-phone"></i> Contactar a Domingo Plaza
                        </a>
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Consultar por WhatsApp
                        </a>
                    </div>
                </div>

                <div style="text-align: center;">
                    <div style="background: var(--navy-900); padding: 30px; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
                        <img src="<?= EXPERT_PHOTO_URL ?>" alt="Domingo Isain Plaza Caamaño - Gasfiter Certificado SEC" style="border-radius: 50%; width: 180px; height: 180px; object-fit: cover; object-position: center 15%; margin: 0 auto 16px auto; border: 4px solid var(--accent-gold); box-shadow: 0 0 25px rgba(245, 158, 11, 0.4);">
                        <h3 style="color: var(--text-white); font-size: 1.3rem; margin-bottom: 4px;"><?= EXPERT_NAME ?></h3>
                        <p style="color: var(--accent-gold); font-size: 0.9rem; margin-bottom: 14px;"><?= EXPERT_TITLE ?></p>
                        <div style="display: flex; justify-content: center; margin-bottom: 16px;">
                            <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sec-license" style="width: auto; padding: 10px 18px;" title="Verificar licencia en el portal de la SEC">
                                <i class="fa-solid fa-id-badge"></i>
                                <span>Verificar Licencia Oficial SEC</span>
                                <i class="fa-solid fa-arrow-up-right-from-square sec-ext-icon"></i>
                            </a>
                        </div>
                        <span class="chip" style="background: rgba(16, 185, 129, 0.2); color: var(--primary-light); border-color: var(--primary);">
                            <i class="fa-solid fa-shield-halved"></i> Credencial SEC Verificada y Activa
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificaciones y Respaldo Institucional -->
    <section class="section-padding" style="background-color: var(--bg-light);">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">Acreditaciones Oficiales</div>
                <h2 class="section-title">Certificaciones y Respaldo Técnico</h2>
                <p class="section-subtitle">
                    Respaldamos cada trabajo con certificaciones estatales y normas técnicas de ingeniería alemana.
                </p>
            </div>

            <div class="process-grid-6" style="grid-template-columns: repeat(3, 1fr);">
                <div class="process-step-card">
                    <div class="step-badge" style="background: var(--navy-900);"><i class="fa-solid fa-id-badge"></i></div>
                    <h3>Superintendencia de Electricidad y Combustibles (SEC)</h3>
                    <p>Registro legal oficial como Instalador de Gas Clase 3. Autorización para ejecutar obras de gas, pruebas de hermeticidad y emisión de actas técnicas.</p>
                    <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" style="color: var(--primary); font-weight: 700; font-size: 0.85rem; margin-top: 10px; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i> Comprobar en Portal SEC &rarr;
                    </a>
                </div>
                <div class="process-step-card">
                    <div class="step-badge" style="background: var(--navy-900);"><i class="fa-solid fa-award"></i></div>
                    <h3>ChileValora (Estado de Chile)</h3>
                    <p>Certificación de competencias laborales en detección instrumental de fugas en redes de gas licuado y gas natural.</p>
                    <span style="color: var(--text-muted); font-size: 0.825rem; margin-top: 10px; display: block;">
                        <i class="fa-solid fa-check"></i> Competencias Acreditadas
                    </span>
                </div>
                <div class="process-step-card">
                    <div class="step-badge" style="background: var(--navy-900);"><i class="fa-solid fa-flask"></i></div>
                    <h3>TIB Chemicals AG (Alemania)</h3>
                    <p>Acreditación técnica en la manipulación y aplicación del sellante Prodoral® R6-1 conforme a las directrices de la norma DIN-DVGW NG-5153.</p>
                    <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" style="color: #ef4444; font-weight: 700; font-size: 0.85rem; margin-top: 10px; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="fa-solid fa-file-pdf"></i> Descargar Ficha Técnica PDF (1.7 MB) &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-banner-section">
        <div class="container">
            <div class="cta-banner-content">
                <h2>Confíe en Verdaderos Especialistas Certificados en Gas</h2>
                <p>No arriesgue su seguridad con maestros no autorizados. Comuníquese hoy mismo con Domingo Plaza.</p>
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
