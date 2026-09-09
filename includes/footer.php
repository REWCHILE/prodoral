<?php
/**
 * Footer Global - Prodoral Chile
 */
?>
    <!-- Pie de Página Institucional -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container footer-grid">
                <!-- Columna 1: Presentación y Certificaciones -->
                <div class="footer-col footer-col-brand">
                    <div class="footer-logo">
                        <img src="<?= BASE_URL ?>/assets/img/logotipo.webp" alt="Prodoral Chile Logo" width="160" height="55" loading="lazy">
                        <span class="footer-brand-text">PRODORAL CHILE</span>
                    </div>
                    <p class="footer-description">
                        Servicio líder en Chile de sellado de fugas de gas sin romper muros ni pisos mediante la aplicación del sellante polimérico alemán <strong>Prodoral R6-1</strong>. Trabajos certificados y ejecutados directamente por <strong><?= EXPERT_NAME ?></strong>, Gasfiter Autorizado SEC.
                    </p>
                    <div class="footer-cert-badges">
                        <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="cert-pill" style="border-color: var(--accent-gold); color: var(--accent-gold);" title="Verificar Licencia de Domingo Plaza en la SEC">
                            <i class="fa-solid fa-id-badge"></i>
                            <span>Licencia SEC Oficial</span>
                        </a>
                        <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="cert-pill" style="border-color: rgba(239, 68, 68, 0.4); color: #fca5a5;" title="Descargar Ficha Técnica Prodoral R6-1 en PDF">
                            <i class="fa-solid fa-file-pdf"></i>
                            <span>Ficha Prodoral PDF</span>
                        </a>
                        <div class="cert-pill">
                            <i class="fa-solid fa-award"></i>
                            <span>Norma DIN-DVGW</span>
                        </div>
                    </div>
                </div>

                <!-- Columna 2: Servicios Especializados -->
                <div class="footer-col">
                    <h3 class="footer-title">Servicios Técnicos</h3>
                    <ul class="footer-links">
                        <li><a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas"><i class="fa-solid fa-chevron-right"></i> Sellado con Prodoral R6-1</a></li>
                        <li><a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas#fugas-calefaccion"><i class="fa-solid fa-chevron-right"></i> Sellado Calefacción Prodoral H</a></li>
                        <li><a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas#deteccion"><i class="fa-solid fa-chevron-right"></i> Detección de Fugas con Manómetro</a></li>
                        <li><a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas#hermeticidad"><i class="fa-solid fa-chevron-right"></i> Pruebas de Hermeticidad a 150 mbar</a></li>
                        <li><a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas#sello-verde"><i class="fa-solid fa-chevron-right"></i> Regularización y Sello Verde SEC</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Cobertura Geográfica -->
                <div class="footer-col">
                    <h3 class="footer-title">Cobertura en Chile</h3>
                    <ul class="footer-links">
                        <li><a href="<?= BASE_URL ?>/contacto-prodoral"><i class="fa-solid fa-location-dot"></i> Santiago (Todas las Comunas)</a></li>
                        <li><a href="<?= BASE_URL ?>/contacto-prodoral"><i class="fa-solid fa-location-dot"></i> Providencia, Las Condes, Vitacura</a></li>
                        <li><a href="<?= BASE_URL ?>/contacto-prodoral"><i class="fa-solid fa-location-dot"></i> Santiago Centro, Ñuñoa, La Reina</a></li>
                        <li><a href="<?= BASE_URL ?>/contacto-prodoral"><i class="fa-solid fa-location-dot"></i> Región de Valparaíso y Viña del Mar</a></li>
                        <li><a href="<?= BASE_URL ?>/contacto-prodoral"><i class="fa-solid fa-location-dot"></i> Regiones O'Higgins, Maule y Biobío</a></li>
                    </ul>
                </div>

                <!-- Columna 4: Contacto Directo y Urgencias -->
                <div class="footer-col">
                    <h3 class="footer-title">Contacto Directo</h3>
                    <ul class="footer-contact-info">
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <span>Teléfono Urgencias:</span>
                                <a href="tel:<?= PHONE_RAW ?>" class="contact-highlight"><?= PHONE_DISPLAY ?></a>
                            </div>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                            <div>
                                <span>WhatsApp Inmediato:</span>
                                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="contact-highlight">Chatear con Domingo Plaza</a>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-arrow"></i>
                            <div>
                                <span>Dirección Técnica:</span>
                                <address><?= ADDRESS_STREET ?>, <?= ADDRESS_CITY ?>, <?= ADDRESS_COUNTRY ?></address>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <span>Horarios:</span>
                                <p><?= SCHEDULE_WEEKDAYS ?></p>
                                <p><?= SCHEDULE_SATURDAY ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Barra Inferior de Copyright -->
        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>&copy; <?= date('Y') ?> <strong><?= SITE_NAME ?></strong>. Todos los derechos reservados. Especialistas Autorizados SEC en Sellado de Fugas de Gas con Prodoral R6-1.</p>
                <div class="footer-bottom-links">
                    <a href="<?= BASE_URL ?>/">Inicio</a>
                    <a href="<?= BASE_URL ?>/prodoral-chile">Nosotros</a>
                    <a href="<?= BASE_URL ?>/sellado-de-fugas-de-gas">Servicios</a>
                    <a href="<?= BASE_URL ?>/casos-exito-fugas-gas">Proyectos</a>
                    <a href="<?= BASE_URL ?>/contacto-prodoral">Contacto</a>
                    <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" style="color: var(--accent-gold);">Licencia SEC</a>
                    <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" style="color: #93c5fd;">Ficha Prodoral (PDF)</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botón Flotante de WhatsApp -->
    <aside class="floating-whatsapp-wrap" aria-label="Contacto directo por WhatsApp">
        <div class="whatsapp-tooltip">
            <strong>¿Fuga de gas o corte de suministro?</strong>
            <p>Hable con Domingo Plaza (SEC)</p>
        </div>
        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp-btn" title="Contactar por WhatsApp a Domingo Plaza">
            <i class="fa-brands fa-whatsapp"></i>
            <span class="wsp-pulse"></span>
        </a>
    </aside>

    <!-- Barra Rápida Flotante en Móviles -->
    <nav class="mobile-sticky-action-bar" aria-label="Acciones rápidas en dispositivos móviles">
        <a href="tel:<?= PHONE_RAW ?>" class="mobile-action-btn mobile-action-call">
            <i class="fa-solid fa-phone-flip"></i>
            <span>Llamar Ahora</span>
        </a>
        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="mobile-action-btn mobile-action-wsp">
            <i class="fa-brands fa-whatsapp"></i>
            <span>WhatsApp SEC</span>
        </a>
    </nav>

    <!-- Scripts Principales con Carga Diferida (Non-blocking) -->
    <script src="<?= BASE_URL ?>/assets/js/main.min.js?v=<?= filemtime(__DIR__ . '/../assets/js/main.min.js') ?: time() ?>" defer></script>
</body>
</html>
