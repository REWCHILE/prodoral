<?php
/**
 * Página Servicios - Prodoral Chile (/sellado-de-fugas-de-gas)
 */

require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Servicios de Sellado de Fugas de Gas con Prodoral R6-1 Sin Romper';
$pageDesc = 'Servicios especializados en sellado de fugas de gas sin romper muros con Prodoral R6-1, detección instrumental con manómetro y sellado de calefacción con Prodoral H en Chile.';
$pageSlug = 'sellado-de-fugas-de-gas';
$ogImage = BASE_URL . '/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.png';

require_once __DIR__ . '/includes/header.php';
?>

    <!-- Encabezado de Página -->
    <section style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 100%); color: var(--text-white); padding: 70px 0 50px 0; text-align: center;">
        <div class="container">
            <div class="section-tag tag-gold" style="margin-bottom: 12px;">
                <i class="fa-solid fa-wrench"></i> Ingeniería & Soluciones Técnicas
            </div>
            <h1 style="font-size: 2.75rem; font-weight: 900; color: var(--text-white); margin-bottom: 14px;">
                Sellado de Fugas de Gas y Calefacción Sin Romper
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 750px; margin: 0 auto;">
                Tecnología alemana certificada y procedimientos normados por la SEC para restaurar la estanqueidad de sus instalaciones.
            </p>
        </div>
    </section>

    <!-- Lista de Servicios Principales -->
    <section class="section-padding" style="background-color: var(--bg-white);">
        <div class="container">
            <div class="section-header">
                <div class="section-tag">Nuestras Especialidades</div>
                <h2 class="section-title">Servicios Profesionales de Gasfitería Especializada SEC</h2>
                <p class="section-subtitle">
                    Ejecutados y supervisados directamente por Domingo Isain Plaza Caamaño.
                </p>
            </div>

            <!-- Servicio 1: Prodoral R6-1 Gas -->
            <div class="two-col-grid" style="margin-bottom: 70px;">
                <div>
                    <div class="section-tag">Servicio Principal</div>
                    <h2 style="font-size: 2rem; margin-bottom: 14px; color: var(--navy-900);">
                        Sellado de Fugas de Gas con Prodoral R6-1
                    </h2>
                    <p style="color: var(--text-body); margin-bottom: 16px;">
                        Reparación de pérdidas de presión y microfugas en redes interiores de gas natural y gas licuado (GLP) sin realizar obras civiles de albañilería. El sellante verde <strong>Prodoral® R6-1</strong> se bombea a través de las cañerías existentes, alcanzando y obturando cada punto de fuga por el interior de las roscas y uniones embutidas.
                    </p>
                    <ul style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px;">
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body);">
                            <i class="fa-solid fa-check" style="color: var(--primary);"></i> Aplicable en tuberías de fierro negro, acero galvanizado y cobre.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body);">
                            <i class="fa-solid fa-check" style="color: var(--primary);"></i> Sin romper pisos flotantes, cerámicos, tabiques ni losas de hormigón.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body);">
                            <i class="fa-solid fa-check" style="color: var(--primary);"></i> Ejecución rápida en el mismo día con restitución de suministro.
                        </li>
                    </ul>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Cotizar Sellado con Prodoral R6-1
                        </a>
                        <a href="<?= PRODORAL_PDF_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white" style="background: var(--navy-900); color: #ffffff; border: 1px solid rgba(255,255,255,0.2);">
                            <i class="fa-solid fa-file-pdf" style="color: #ef4444;"></i> Ficha Técnica Prodoral (PDF)
                        </a>
                    </div>
                </div>
                <div>
                    <img src="<?= BASE_URL ?>/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.png" alt="Sellado de fugas de gas con Prodoral R6-1 en Chile" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                </div>
            </div>

            <!-- Servicio 2: Prodoral H Calefacción -->
            <div class="two-col-grid" id="fugas-calefaccion" style="margin-bottom: 70px;">
                <div>
                    <img src="<?= BASE_URL ?>/assets/img/sellador-prodoral-1.png" alt="Sellado de calefacción con Prodoral H" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                </div>
                <div>
                    <div class="section-tag tag-gold">Circuitos Hidrónicos</div>
                    <h2 style="font-size: 2rem; margin-bottom: 14px; color: var(--navy-900);">
                        Sellado de Microfugas en Calefacción con Prodoral H
                    </h2>
                    <p style="color: var(--text-body); margin-bottom: 16px;">
                        Pérdidas de presión constantes en calderas, radiadores o losas radiantes. Prodoral H sella fugas inaccesibles en circuitos cerrados sin necesidad de demoler pavimentos.
                    </p>
                    <ul style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px;">
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body);">
                            <i class="fa-solid fa-check" style="color: var(--primary);"></i> Compatible con calderas murales y sistemas de piso radiante.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body);">
                            <i class="fa-solid fa-check" style="color: var(--primary);"></i> No afecta bombas circuladoras ni válvulas termostáticas.
                        </li>
                        <li style="display: flex; align-items: center; gap: 10px; color: var(--text-body);">
                            <i class="fa-solid fa-check" style="color: var(--primary);"></i> Elimina la necesidad de picar pisos de madera o porcelanatos.
                        </li>
                    </ul>
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency">
                        <i class="fa-solid fa-phone"></i> Consultar por Prodoral H
                    </a>
                </div>
            </div>

            <!-- Servicio 3: Detección y Pruebas a 150 mbar -->
            <div class="two-col-grid" id="hermeticidad">
                <div>
                    <div class="section-tag">Diagnóstico Normado</div>
                    <h2 style="font-size: 2rem; margin-bottom: 14px; color: var(--navy-900);">
                        Detección Instrumental y Pruebas de Hermeticidad SEC
                    </h2>
                    <p style="color: var(--text-body); margin-bottom: 16px;">
                        Contamos con manómetros digitales certificados de precisión milimétrica para medir presiones estáticas y dinámicas en redes de gas conforme a la normativa <strong>DS 66 de la SEC</strong>.
                    </p>
                    <p style="color: var(--text-body); margin-bottom: 20px;">
                        Al finalizar cada sellado, sometemos la red a una presión de prueba de <strong>150 mbar</strong> durante 10 a 15 minutos. Al comprobar cero caída manométrica, emitimos el informe técnico para que la entidad de certificación proceda al otorgamiento del Sello Verde.
                    </p>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Solicitar Prueba de Hermeticidad
                        </a>
                        <a href="<?= SEC_LICENSE_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white" style="background: #0284c7; color: #ffffff; border: 1px solid rgba(255,255,255,0.25);">
                            <i class="fa-solid fa-certificate"></i> Verificar Licencia SEC
                        </a>
                    </div>
                </div>
                <div>
                    <img src="<?= BASE_URL ?>/assets/img/manometro-digital.jpeg" alt="Manómetro digital de precisión para pruebas de hermeticidad de gas" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                </div>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa: Romper Muros vs Prodoral R6-1 -->
    <section class="section-padding" style="background-color: var(--bg-light);">
        <div class="container">
            <div class="section-header">
                <div class="section-tag tag-gold">Comparativa Real</div>
                <h2 class="section-title">¿Por Qué Elegir Prodoral R6-1 en Lugar de Romper Muros?</h2>
                <p class="section-subtitle">
                    Compare los costos, tiempos y molestias entre ambos métodos.
                </p>
            </div>

            <div style="overflow-x: auto; background: var(--bg-white); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--border-light);">
                <table style="width: 100%; border-collapse: collapse; min-width: 650px; text-align: left;">
                    <thead>
                        <tr style="background-color: var(--navy-900); color: var(--text-white);">
                            <th style="padding: 18px 20px;">Criterio</th>
                            <th style="padding: 18px 20px; background: rgba(225, 29, 72, 0.9);">Método Tradicional (Romper)</th>
                            <th style="padding: 18px 20px; background: var(--primary);">Método Prodoral R6-1 (Sin Romper)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 16px 20px; font-weight: 700;">Daño a Muros y Pisos</td>
                            <td style="padding: 16px 20px; color: #be123c;"><i class="fa-solid fa-xmark"></i> Destrucción de cerámicos, tabiques y losas</td>
                            <td style="padding: 16px 20px; color: var(--primary); font-weight: 600;"><i class="fa-solid fa-check"></i> Cero roturas, todo limpio e intacto</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background: #fafbfc;">
                            <td style="padding: 16px 20px; font-weight: 700;">Tiempo de Ejecución</td>
                            <td style="padding: 16px 20px; color: #be123c;"><i class="fa-solid fa-xmark"></i> De 5 a 15 días con polvo y escombros</td>
                            <td style="padding: 16px 20px; color: var(--primary); font-weight: 600;"><i class="fa-solid fa-check"></i> Pocas horas en el mismo día</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 16px 20px; font-weight: 700;">Costo Total</td>
                            <td style="padding: 16px 20px; color: #be123c;"><i class="fa-solid fa-xmark"></i> Muy alto (albañiles, pintura, cerámicas, tuberías)</td>
                            <td style="padding: 16px 20px; color: var(--primary); font-weight: 600;"><i class="fa-solid fa-check"></i> Hasta 70% de ahorro total</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background: #fafbfc;">
                            <td style="padding: 16px 20px; font-weight: 700;">Microfugas Múltiples</td>
                            <td style="padding: 16px 20px; color: #be123c;"><i class="fa-solid fa-xmark"></i> Difícil localizar todas sin romper toda la red</td>
                            <td style="padding: 16px 20px; color: var(--primary); font-weight: 600;"><i class="fa-solid fa-check"></i> Sella simultáneamente todas las fugas internas</td>
                        </tr>
                        <tr>
                            <td style="padding: 16px 20px; font-weight: 700;">Respaldo Normativo</td>
                            <td style="padding: 16px 20px;">Depende del maestro contratado</td>
                            <td style="padding: 16px 20px; color: var(--primary); font-weight: 600;"><i class="fa-solid fa-check"></i> Gasfiter SEC + Norma alemana DIN-DVGW</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-banner-section">
        <div class="container">
            <div class="cta-banner-content">
                <h2>¿Necesita Asistencia Técnica Especializada?</h2>
                <p>Contáctenos hoy y reciba la asesoría directa de Domingo Isain Plaza Caamaño.</p>
                <div class="cta-banner-buttons">
                    <a href="tel:<?= PHONE_RAW ?>" class="btn btn-emergency pulse-btn">
                        <i class="fa-solid fa-phone-volume"></i> Llamar al <?= PHONE_DISPLAY ?>
                    </a>
                    <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp Inmediato
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
