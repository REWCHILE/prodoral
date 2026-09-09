<?php
/**
 * Página Contacto - Prodoral Chile (/contacto-prodoral)
 */

require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Urgencias Gas 24/7 | 📞 9 4987 7316 | Domingo Plaza Gasfiter SEC';
$pageDesc = '📞 Atención inmediata 24/7: +56 9 4987 7316. Contacte a Domingo Plaza, Gasfiter Certificado SEC. Recuperación de Sello Verde y sellado de gas sin romper.';
$pageSlug = 'contacto-prodoral';
$ogImage = BASE_URL . '/assets/img/og-prodoral-social.jpg';

$formSent = false;
$formError = '';
$whatsappRedirectUrl = '';
$submittedNombre = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars(trim($_POST['nombre'] ?? ''));
    $telefono = htmlspecialchars(trim($_POST['telefono'] ?? ''));
    $comuna = htmlspecialchars(trim($_POST['comuna'] ?? ''));
    $propiedad = htmlspecialchars(trim($_POST['propiedad'] ?? ''));
    $mensaje = htmlspecialchars(trim($_POST['mensaje'] ?? ''));

    if (!empty($nombre) && !empty($telefono)) {
        $formSent = true;
        $submittedNombre = $nombre;

        $waMsg = "🚨 *SOLICITUD DE EVALUACIÓN TÉCNICA - PRODORAL CHILE*\n\n";
        $waMsg .= "👤 *Nombre:* " . $nombre . "\n";
        $waMsg .= "📞 *Teléfono:* " . $telefono . "\n";
        if (!empty($comuna)) {
            $waMsg .= "📍 *Comuna/Ciudad:* " . $comuna . "\n";
        }
        if (!empty($propiedad)) {
            $waMsg .= "🏠 *Tipo de Inmueble:* " . $propiedad . "\n";
        }
        if (!empty($mensaje)) {
            $waMsg .= "📝 *Detalle del problema:* " . $mensaje . "\n";
        } else {
            $waMsg .= "📝 *Detalle:* Solicito evaluación técnica urgente para sellado de fuga de gas con Prodoral R6-1.\n";
        }
        $waMsg .= "\n_Enviado desde el formulario de contacto prodoral.cl_";

        $whatsappRedirectUrl = 'https://wa.me/' . PHONE_WSP_DIGITS . '?text=' . urlencode($waMsg);
    } else {
        $formError = 'Por favor complete su nombre y número telefónico de contacto.';
    }
}

require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <!-- Encabezado de Página -->
    <section style="background: linear-gradient(135deg, var(--navy-900) 0%, var(--navy-800) 100%); color: var(--text-white); padding: 70px 0 50px 0; text-align: center;">
        <div class="container">
            <div class="section-tag tag-gold" style="margin-bottom: 12px;">
                <i class="fa-solid fa-headset"></i> Atención Inmediata & Urgencias
            </div>
            <h1 style="font-size: 2.75rem; font-weight: 900; color: var(--text-white); margin-bottom: 14px;">
                Contacto Directo con Gasfiter Certificado SEC
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-muted); max-width: 750px; margin: 0 auto;">
                ¿Tiene una fuga de gas, olor a gas o corte de suministro por Sello Rojo? Hable hoy mismo con Domingo Plaza.
            </p>
        </div>
    </section>

    <!-- Sección de Contacto: Datos + Formulario -->
    <section class="section-padding" style="background-color: var(--bg-white);">
        <div class="container">
            <div class="two-col-grid" style="gap: 60px; align-items: flex-start;">
                
                <!-- Columna Izquierda: Información de Contacto Directo -->
                <div>
                    <div class="section-tag">Canales Oficiales</div>
                    <h2 class="section-title" style="margin-bottom: 20px;">Estamos para Atenderle</h2>
                    <p style="color: var(--text-body); margin-bottom: 30px;">
                        Para urgencias de gas recomendamos comunicarse de manera inmediata por vía telefónica o WhatsApp. Domingo Isain Plaza Caamaño le asesorará directamente sobre los pasos de seguridad a seguir.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 24px; margin-bottom: 35px;">
                        <!-- Teléfono -->
                        <div style="display: flex; gap: 18px; align-items: center; background: var(--bg-light); padding: 18px 22px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: #ffe4e6; color: #e11d48; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0;">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div>
                                <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase;">Teléfono de Urgencias:</span>
                                <a href="tel:<?= PHONE_RAW ?>" style="font-size: 1.35rem; font-weight: 800; color: var(--navy-900); display: block; font-family: var(--font-heading);">
                                    <?= PHONE_DISPLAY ?>
                                </a>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div style="display: flex; gap: 18px; align-items: center; background: var(--bg-light); padding: 18px 22px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.6rem; flex-shrink: 0;">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <div>
                                <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase;">WhatsApp Directo:</span>
                                <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noopener noreferrer" style="font-size: 1.15rem; font-weight: 700; color: #16a34a; display: block;">
                                    Enviar Mensaje a Domingo Plaza
                                </a>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div style="display: flex; gap: 18px; align-items: center; background: var(--bg-light); padding: 18px 22px; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0;">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <span style="font-size: 0.85rem; color: var(--text-muted); font-weight: 600; text-transform: uppercase;">Dirección Base Operativa:</span>
                                <p style="font-size: 1rem; font-weight: 600; color: var(--navy-900); margin: 0;">
                                    <?= ADDRESS_STREET ?>, <?= ADDRESS_CITY ?>
                                </p>
                                <span style="font-size: 0.85rem; color: var(--text-muted);">(Desplazamiento a toda la RM y Regiones)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Cuadro de Advertencia y Seguridad -->
                    <div style="background: #fffbeb; border: 1px solid #fef3c7; border-left: 4px solid var(--accent-gold); padding: 20px; border-radius: var(--radius-sm);">
                        <h4 style="color: #92400e; font-size: 1rem; margin-bottom: 6px;">
                            <i class="fa-solid fa-triangle-exclamation"></i> ¿Huele a gas en su propiedad?
                        </h4>
                        <ul style="font-size: 0.875rem; color: #78350f; display: flex; flex-direction: column; gap: 6px; padding-left: 18px; list-style-type: disc;">
                            <li>Cierre inmediatamente la llave de paso general del medidor o cilindro.</li>
                            <li>Abra puertas y ventanas para ventilar ampliamente los recintos.</li>
                            <li><strong>NO</strong> encienda fósforos, interruptores eléctricos ni artefactos.</li>
                            <li>Llámenos de inmediato desde el exterior de la vivienda.</li>
                        </ul>
                    </div>
                </div>

                <!-- Columna Derecha: Formulario de Solicitud con Envío Directo a WhatsApp -->
                <div style="background: var(--bg-light); border: 1px solid var(--border-light); border-radius: var(--radius-lg); padding: 35px; box-shadow: var(--shadow-sm);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px;">
                        <h3 style="font-size: 1.5rem; color: var(--navy-900); margin: 0;">
                            Solicitar Evaluación Técnica
                        </h3>
                        <span style="font-size: 0.75rem; font-weight: 700; color: #16a34a; background: #dcfce7; padding: 4px 8px; border-radius: var(--radius-full);">
                            <i class="fa-brands fa-whatsapp"></i> Envío a WhatsApp
                        </span>
                    </div>
                    <p style="font-size: 0.925rem; color: var(--text-body); margin-bottom: 24px;">
                        Complete los datos de su red y la solicitud se abrirá automáticamente en WhatsApp para atención prioritaria con el instalador SEC.
                    </p>

                    <?php if ($formSent): ?>
                    <div class="whatsapp-success-box" style="background: #ecfdf5; border: 2px solid #10b981; border-radius: var(--radius-md); padding: 26px 20px; text-align: center; margin-bottom: 24px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.15);">
                        <div style="width: 64px; height: 64px; background: #25d366; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 16px auto; box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <h4 style="color: #065f46; font-size: 1.35rem; font-weight: 800; margin-bottom: 8px;">
                            ¡Solicitud Lista para WhatsApp!
                        </h4>
                        <p style="color: #047857; font-size: 0.95rem; margin-bottom: 20px; line-height: 1.5;">
                            Estimado(a) <strong><?= $submittedNombre ?></strong>, se ha preparado el mensaje con todos sus datos para coordinar de inmediato con <strong>Domingo Plaza (Gasfiter Autorizado SEC)</strong>.
                        </p>
                        <a href="<?= $whatsappRedirectUrl ?>" id="autoWspBtn" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-block" style="padding: 16px 20px; font-size: 1.15rem; font-weight: 800; text-decoration: none; box-shadow: 0 6px 24px rgba(37, 211, 102, 0.45); display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <i class="fa-brands fa-whatsapp" style="font-size: 1.4rem;"></i>
                            <span>Abrir WhatsApp y Enviar Mensaje</span>
                        </a>
                        <p style="font-size: 0.8rem; color: #059669; margin-top: 12px; margin-bottom: 0;">
                            <i class="fa-solid fa-circle-info"></i> Si WhatsApp no se abrió automáticamente, presione el botón verde de arriba.
                        </p>
                        <div style="margin-top: 20px; border-top: 1px solid #a7f3d0; padding-top: 14px;">
                            <a href="<?= BASE_URL ?>/contacto-prodoral" style="font-size: 0.85rem; color: #047857; text-decoration: underline; font-weight: 600;">
                                ← Volver al formulario de contacto
                            </a>
                        </div>
                    </div>
                    <script>
                        // Intento de apertura automática inmediata de WhatsApp
                        (function() {
                            try {
                                const wspUrl = "<?= $whatsappRedirectUrl ?>";
                                if (wspUrl) {
                                    window.open(wspUrl, '_blank');
                                }
                            } catch(e) {}
                        })();
                    </script>
                    <?php endif; ?>

                    <?php if ($formError): ?>
                    <div style="background: #fef2f2; border: 1px solid #fecaca; color: #991b1b; padding: 14px; border-radius: var(--radius-sm); margin-bottom: 20px; font-size: 0.9rem;">
                        <i class="fa-solid fa-triangle-exclamation"></i> <?= $formError ?>
                    </div>
                    <?php endif; ?>

                    <?php if (!$formSent): ?>
                    <form id="contactForm" action="<?= BASE_URL ?>/contacto-prodoral" method="POST" style="display: flex; flex-direction: column; gap: 16px;">
                        <div>
                            <label for="nombre" style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--navy-900); margin-bottom: 6px;">Nombre Completo *</label>
                            <input type="text" id="nombre" name="nombre" required placeholder="Ej: Juan Pérez" style="width: 100%; padding: 12px 16px; border: 1px solid var(--border-light); border-radius: var(--radius-sm); background: var(--bg-white);">
                        </div>

                        <div>
                            <label for="telefono" style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--navy-900); margin-bottom: 6px;">Teléfono de Contacto (Celular) *</label>
                            <input type="tel" id="telefono" name="telefono" required placeholder="Ej: +56 9 1234 5678" style="width: 100%; padding: 12px 16px; border: 1px solid var(--border-light); border-radius: var(--radius-sm); background: var(--bg-white);">
                        </div>

                        <div>
                            <label for="comuna" style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--navy-900); margin-bottom: 6px;">Comuna o Ciudad</label>
                            <input type="text" id="comuna" name="comuna" placeholder="Ej: Las Condes, Santiago Centro, Viña del Mar" style="width: 100%; padding: 12px 16px; border: 1px solid var(--border-light); border-radius: var(--radius-sm); background: var(--bg-white);">
                        </div>

                        <div>
                            <label for="propiedad" style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--navy-900); margin-bottom: 6px;">Tipo de Inmueble</label>
                            <select id="propiedad" name="propiedad" style="width: 100%; padding: 12px 16px; border: 1px solid var(--border-light); border-radius: var(--radius-sm); background: var(--bg-white);">
                                <option value="Casa Residencial">Casa Residencial</option>
                                <option value="Departamento">Departamento</option>
                                <option value="Edificio / Comunidad">Edificio / Comunidad de Copropietarios</option>
                                <option value="Local Comercial / Restaurante">Local Comercial / Restaurante</option>
                                <option value="Industria / Colegio / Clínica">Industria / Colegio / Clínica</option>
                            </select>
                        </div>

                        <div>
                            <label for="mensaje" style="display: block; font-size: 0.9rem; font-weight: 600; color: var(--navy-900); margin-bottom: 6px;">Descripción del Problema</label>
                            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Indique si le cortaron el gas, si colocaron sello amarillo/rojo, o si tiene fuga en losa/pared..." style="width: 100%; padding: 12px 16px; border: 1px solid var(--border-light); border-radius: var(--radius-sm); background: var(--bg-white); resize: vertical;"></textarea>
                        </div>

                        <button type="submit" id="submitContactBtn" class="btn btn-whatsapp btn-block pulse-btn" style="padding: 16px; font-size: 1.1rem; font-weight: 800; border-radius: var(--radius-sm); box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4); display: flex; align-items: center; justify-content: center; gap: 10px;">
                            <i class="fa-brands fa-whatsapp" style="font-size: 1.35rem;"></i>
                            <span>Enviar Solicitud a WhatsApp</span>
                        </button>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 6px; font-size: 0.8rem; color: var(--text-muted); text-align: center;">
                            <i class="fa-solid fa-lock"></i> Sus datos se envían de forma directa y segura al WhatsApp de Domingo Plaza (SEC).
                        </div>
                    </form>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const form = document.getElementById('contactForm');
                            if (form) {
                                form.addEventListener('submit', function(e) {
                                    const nombre = document.getElementById('nombre').value.trim();
                                    const telefono = document.getElementById('telefono').value.trim();
                                    const comuna = document.getElementById('comuna').value.trim();
                                    const propiedad = document.getElementById('propiedad').value;
                                    const mensaje = document.getElementById('mensaje').value.trim();

                                    if (!nombre || !telefono) return;

                                    let waText = "🚨 *SOLICITUD DE EVALUACIÓN TÉCNICA - PRODORAL CHILE*\n\n";
                                    waText += "👤 *Nombre:* " + nombre + "\n";
                                    waText += "📞 *Teléfono:* " + telefono + "\n";
                                    if (comuna) waText += "📍 *Comuna/Ciudad:* " + comuna + "\n";
                                    if (propiedad) waText += "🏠 *Tipo de Inmueble:* " + propiedad + "\n";
                                    if (mensaje) {
                                        waText += "📝 *Detalle del problema:* " + mensaje + "\n";
                                    } else {
                                        waText += "📝 *Detalle:* Solicito evaluación técnica urgente para sellado de fuga de gas con Prodoral R6-1.\n";
                                    }
                                    waText += "\n_Enviado desde el formulario de contacto prodoral.cl_";

                                    const phoneRaw = "<?= PHONE_WSP_DIGITS ?>";
                                    const waUrl = "https://wa.me/" + phoneRaw + "?text=" + encodeURIComponent(waText);

                                    // Abre WhatsApp inmediatamente al hacer click
                                    try {
                                        window.open(waUrl, '_blank');
                                    } catch(err) {}
                                });
                            }
                        });
                    </script>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
