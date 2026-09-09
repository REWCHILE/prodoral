# Prodoral Chile (prodoral.cl)

Sitio web oficial de **Prodoral Chile** — Especialistas en Sellado de Fugas de Gas en Cañerías Interiores Sin Romper Muros ni Pisos mediante el método y polímero alemán **Prodoral R6-1**.

## Características del Proyecto
- **Tecnología**: PHP nativo rápido y liviano, HTML5 semántico, CSS3 moderno, JavaScript modular.
- **Autoridad Técnica**: Respaldo y firma de **Domingo Isain Plaza Caamaño**, Gasfiter e Instalador de Gas Clase 3 Autorizado por la **SEC** (Superintendencia de Electricidad y Combustibles) y competencias **ChileValora**.
- **SEO y Posicionamiento**:
  - URLs canónicas amigables gestionadas vía `.htaccess` y `router.php`.
  - Schema.org completo (`LocalBusiness`, `GasUtilityService`, `FAQPage`, `Person`, `BreadcrumbList`).
  - Metadatos OpenGraph y Twitter Cards optimizados para conversión.
- **Herramientas de Conversión**:
  - Formulario de contacto directo con derivación a WhatsApp preconfigurado.
  - Llamadas directas de emergencia 24/7 (`+56 9 4987 7316`).
  - Validación de Licencia SEC con código QR interactivo de alta definición y enlace directo al portal gubernamental.
  - Descarga y visualización de la Ficha Técnica oficial del polímero Prodoral en PDF.

## Estructura del Directorio
```
prodoral/
├── assets/
│   ├── css/          # Hojas de estilo personalizadas
│   ├── img/          # Imágenes, fotos oficiales, sellos SEC y QR
│   ├── js/           # Scripts interactivos (menú, modales, formularios)
│   ├── videos/       # Demostraciones técnicas y testimonios
│   └── Prodoral-1.pdf# Ficha técnica oficial Prodoral R6-1
├── includes/
│   ├── config.php    # Constantes globales, URLs y datos de contacto
│   ├── header.php    # Topbar, navegación principal y drawer móvil
│   ├── footer.php    # Pie de página y enlaces institucionales
│   ├── schemas.php   # Marcado estructurado JSON-LD Schema.org
│   └── pages_content.php # Contenido de páginas programáticas
├── index.php         # Página principal / Home
├── prodoral-chile.php# Página Nosotros y Metodología
├── sellado-de-fugas-de-gas.php # Página de Servicio Principal
├── contacto-prodoral.php # Formulario de cotización y contacto
├── landing.php       # Enrutador para landing pages por comuna y tipo de fuga
├── router.php        # Enrutador para servidor de desarrollo PHP
└── .htaccess         # Reglas de reescritura Apache para producción
```

## Requisitos y Ejecución Local
- **PHP**: Versión 8.0 o superior con extensión `gd` habilitada.
- **Servidor Web**: Apache con `mod_rewrite` habilitado (Laragon, XAMPP) o servidor integrado de PHP:
  ```bash
  php -S 127.0.0.1:8090 router.php
  ```
