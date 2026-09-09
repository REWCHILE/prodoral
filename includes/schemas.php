<?php
/**
 * Generador de Datos Estructurados JSON-LD para Prodoral Chile
 * Cumple con especificaciones Schema.org, Google Rich Results y Review Snippets
 */

require_once __DIR__ . '/pages_content.php';

function get_main_schemas($faqs = [], $customPageData = null) {
    $schemas = [];

    // 1. Schema LocalBusiness / Plumber
    $localBusiness = [
        "@context" => "https://schema.org",
        "@type" => ["LocalBusiness", "Plumber"],
        "@id" => "https://prodoral.cl/#organization",
        "name" => "Prodoral Chile - Sellado de Fugas de Gas",
        "alternateName" => ["Prodoral", "Prodoral R6-1", "Prodoral Gas Chile"],
        "url" => "https://prodoral.cl/",
        "logo" => [
            "@type" => "ImageObject",
            "@id" => "https://prodoral.cl/#logo",
            "url" => "https://prodoral.cl/assets/img/logotipo.png",
            "caption" => "Prodoral Chile - Sellado de Fugas de Gas Sin Romper"
        ],
        "image" => "https://prodoral.cl/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.png",
        "telephone" => PHONE_RAW,
        "email" => EMAIL_CONTACT,
        "priceRange" => "$$",
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => ADDRESS_STREET,
            "addressLocality" => ADDRESS_CITY,
            "addressRegion" => ADDRESS_REGION,
            "postalCode" => "8320000",
            "addressCountry" => "CL"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => -33.4447,
            "longitude" => -70.6558
        ],
        "areaServed" => [
            ["@type" => "AdministrativeArea", "name" => "Región Metropolitana de Santiago"],
            ["@type" => "AdministrativeArea", "name" => "Región de Valparaíso"],
            ["@type" => "AdministrativeArea", "name" => "Región de O'Higgins"],
            ["@type" => "AdministrativeArea", "name" => "Región del Maule"],
            ["@type" => "AdministrativeArea", "name" => "Región del Biobío"],
            ["@type" => "AdministrativeArea", "name" => "Región de Coquimbo"],
            ["@type" => "Country", "name" => "Chile"]
        ],
        "openingHoursSpecification" => [
            [
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens" => "08:30",
                "closes" => "20:00"
            ],
            [
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => ["Saturday"],
                "opens" => "09:00",
                "closes" => "16:00"
            ]
        ],
        "founder" => [
            "@type" => "Person",
            "@id" => "https://prodoral.cl/#domingo-plaza",
            "name" => EXPERT_NAME,
            "jobTitle" => EXPERT_TITLE,
            "description" => "Gasfiter Certificado por la Superintendencia de Electricidad y Combustibles (SEC) y ChileValora. Más de 40 años de trayectoria y especialista acreditado en la aplicación del sellante alemán Prodoral R6-1 para sellar fugas de gas sin romper muros ni losas.",
            "image" => "https://prodoral.cl/assets/img/domingo-plaza.png"
        ]
    ];
    $schemas[] = $localBusiness;

    // 2. Schema Person (Domingo Isain Plaza Caamaño)
    $personSchema = [
        "@context" => "https://schema.org",
        "@type" => "Person",
        "@id" => "https://prodoral.cl/#domingo-plaza",
        "name" => EXPERT_NAME,
        "jobTitle" => EXPERT_TITLE,
        "url" => "https://prodoral.cl/prodoral-chile",
        "image" => "https://prodoral.cl/assets/img/domingo-plaza.png",
        "hasCredential" => [
            "@type" => "EducationalOccupationalCredential",
            "name" => "Instalador de Gas Clase 3 Autorizado SEC",
            "url" => SEC_LICENSE_URL,
            "recognizedBy" => [
                "@type" => "GovernmentOrganization",
                "name" => "Superintendencia de Electricidad y Combustibles (SEC)",
                "url" => "https://www.sec.cl"
            ]
        ],
        "worksFor" => [
            "@type" => "LocalBusiness",
            "name" => "Prodoral Chile"
        ],
        "knowsAbout" => [
            "Prodoral R6-1",
            "Sellado de fugas de gas sin romper",
            "Pruebas de hermeticidad a 150 mbar",
            "Norma SEC DS 66",
            "Norma alemana DIN EN 13090 / DVGW G 624",
            "Gasfitería autorizada SEC",
            "Detección de fugas por ultrasonido y manometría digital"
        ],
        "hasCredential" => [
            [
                "@type" => "EducationalOccupationalCredential",
                "name" => "Licencia de Instalador de Gas Clase 3",
                "credentialCategory" => "Certificación Oficial SEC",
                "recognizedBy" => [
                    "@type" => "Organization",
                    "name" => "Superintendencia de Electricidad y Combustibles (SEC)"
                ]
            ],
            [
                "@type" => "EducationalOccupationalCredential",
                "name" => "Certificación de Competencias Laborales en Detección de Fugas",
                "credentialCategory" => "Certificación Laboral",
                "recognizedBy" => [
                    "@type" => "Organization",
                    "name" => "ChileValora - Comisión Sistema Nacional de Certificación de Competencias Laborales"
                ]
            ],
            [
                "@type" => "EducationalOccupationalCredential",
                "name" => "Acreditación de Aplicador Especialista Prodoral R6-1",
                "credentialCategory" => "Certificación Técnica de Fabricante",
                "recognizedBy" => [
                    "@type" => "Organization",
                    "name" => "TIB Chemicals AG (Mannheim, Alemania)"
                ]
            ]
        ]
    ];
    $schemas[] = $personSchema;

    // 3. Schema Product / Service con AggregateRating & Reviews (Fragmento Enriquecido de Estrellas)
    $reviewsData = get_verified_reviews_data();
    $reviewsSchemaList = [];
    foreach ($reviewsData as $rev) {
        $reviewsSchemaList[] = [
            "@type" => "Review",
            "author" => [
                "@type" => "Person",
                "name" => $rev['author']
            ],
            "datePublished" => $rev['date'],
            "reviewBody" => $rev['text'],
            "name" => $rev['title'],
            "reviewRating" => [
                "@type" => "Rating",
                "ratingValue" => (string)$rev['stars'],
                "bestRating" => "5",
                "worstRating" => "1"
            ]
        ];
    }

    $productName = $customPageData['h1'] ?? "Sellado de Fugas de Gas con Prodoral R6-1 Sin Romper";
    $productDesc = $customPageData['meta_desc'] ?? "Servicio profesional de sellado de microfugas de gas con el sellante alemán Prodoral R6-1 sin romper muros ni pisos. Atención por Gasfiter Certificado SEC en Santiago y regiones de Chile.";
    $productUrl = $customPageData ? get_canonical_url($customPageData['slug'] ?? '') : "https://prodoral.cl/sellado-de-fugas-de-gas/";
    $productImage = isset($customPageData['image']) ? BASE_URL . '/assets/img/' . $customPageData['image'] : "https://prodoral.cl/assets/img/prodoral-r6-1-sellado-fugas-gas-chile.png";

    $productReviewSchema = [
        "@context" => "https://schema.org/",
        "@type" => "Product",
        "@id" => $productUrl . "#product",
        "name" => $productName,
        "description" => $productDesc,
        "image" => $productImage,
        "url" => $productUrl,
        "brand" => [
            "@type" => "Brand",
            "name" => "Prodoral R6-1"
        ],
        "offers" => [
            "@type" => "Offer",
            "priceCurrency" => "CLP",
            "price" => "190000",
            "priceValidUntil" => "2027-12-31",
            "availability" => "https://schema.org/InStock",
            "url" => $productUrl,
            "seller" => [
                "@type" => "LocalBusiness",
                "name" => "Prodoral Chile"
            ]
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => "4.9",
            "bestRating" => "5",
            "worstRating" => "1",
            "ratingCount" => "3428",
            "reviewCount" => "3428"
        ],
        "review" => $reviewsSchemaList
    ];
    $schemas[] = $productReviewSchema;

    // 4. Schema FAQPage
    if (!empty($faqs)) {
        $faqEntities = [];
        foreach ($faqs as $faq) {
            $faqEntities[] = [
                "@type" => "Question",
                "name" => $faq['question'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq['answer']
                ]
            ];
        }
        $faqSchema = [
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "@id" => $productUrl . "#faq",
            "mainEntity" => $faqEntities
        ];
        $schemas[] = $faqSchema;
    }

    return json_encode($schemas, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

// Lista Maestra de FAQs por defecto para la Home
function get_homepage_faqs() {
    return [
        [
            'question' => '¿Qué es Prodoral R6-1 y cómo soluciona las fugas de gas sin romper?',
            'answer' => 'Prodoral R6-1 es una dispersión polimérica alemana desarrollada por TIB Chemicals AG certificada bajo norma DIN-DVGW NG-5153 y DIN EN 13090. Se introduce de forma líquida bajo presión en el interior de la cañería de gas; al recorrer la instalación, penetra en las uniones roscadas y microfisuras, secando con un soplador térmico para crear una junta elástica permanente, hermética y resistente a vibraciones, todo sin picar ni demoler un solo muro o piso.'
        ],
        [
            'question' => '¿Cuál es la garantía del trabajo de sellado y cuánto dura Prodoral R6-1?',
            'answer' => 'El servicio cuenta con Garantía Escrita de 3 Años por efectos de sellado, otorgada y firmada por Domingo Isain Plaza Caamaño, Gasfiter Certificado SEC Clase 3. Adicionalmente, la duración de la junta polimérica alemana es INDEFINIDA, con una vida útil comprobada de más de 30 años en redes de gas europeas y chilenas sin deteriorarse ni perder elasticidad.'
        ],
        [
            'question' => '¿Por qué es fundamental que la aplicación sea realizada por Domingo Isain Plaza Caamaño?',
            'answer' => 'Domingo Isain Plaza Caamaño es Gasfiter Instalador Autorizado por la Superintendencia de Electricidad y Combustibles (SEC), certificado por ChileValora y especialista acreditado en la técnica Prodoral R6-1 con más de 40 años de experiencia. La normativa chilena e internacional exige que este procedimiento sea ejecutado exclusivamente por instaladores calificados con equipamiento neumático de precisión, garantizando seguridad absoluta y validez legal ante las empresas distribuidoras de gas.'
        ],
        [
            'question' => '¿En qué tipos de tuberías y redes de gas se puede aplicar Prodoral R6-1?',
            'answer' => 'Prodoral R6-1 es apto para tuberías de acero galvanizado, fierro negro y cobre con conexiones roscadas en instalaciones interiores de gas natural y gas licuado (GLP), tanto en casas, departamentos, comunidades de edificios, locales comerciales e industrias. Soporta presiones de operación de hasta 100 mbar y fugas de hasta 5 litros por hora conforme a la hoja técnica DVGW G 624.'
        ],
        [
            'question' => '¿Cuánto tiempo demora el trabajo y cuándo se puede volver a usar el gas?',
            'answer' => 'A diferencia de las obras tradicionales de albañilería que toman días o semanas, el sellado con Prodoral R6-1 se completa en el transcurso del mismo día (habitualmente entre 4 y 7 horas según la extensión de la red). Inmediatamente después del secado y de aprobar la prueba de hermeticidad a 150 mbar, la red queda habilitada para el suministro normal de gas.'
        ],
        [
            'question' => '¿Cómo se comprueba que la instalación quedó 100% hermética tras el sellado?',
            'answer' => 'Al finalizar el proceso de secado, Domingo Isain Plaza Caamaño realiza un riguroso test de hermeticidad a 150 mbar durante al menos 10 a 15 minutos utilizando manómetros digitales certificados de alta precisión. Si la columna de presión se mantiene inmóvil en cero caída, se comprueba la estanqueidad total de la red conforme al protocolo DVGW-TRGI y normativa SEC DS 66.'
        ],
        [
            'question' => '¿El sellado con Prodoral R6-1 permite recuperar el Sello Verde de la SEC tras un corte de Metrogas, Lipigas o Gasco?',
            'answer' => 'Sí. Cuando una distribuidora o entidad de certificación corta el suministro o coloca Sello Rojo/Amarillo por pérdida de presión en la red interior, el sellado con Prodoral R6-1 elimina las microfugas internas. Posteriormente, nuestro equipo emite el informe técnico y protocolo de hermeticidad para que la entidad certificadora autorizada otorgue el Sello Verde y se restituya el suministro.'
        ],
        [
            'question' => '¿Cuál es la diferencia de costo y molestias comparado con romper muros y pisos?',
            'answer' => 'Romper muros, cerámicos, losas y pisos flotantes implica elevados costos de demolición, polvo perjudicial, retiro de escombros, reemplazo de tuberías y reconstrucción de terminaciones, superando habitualmente en un 60% a 80% el valor del tratamiento con Prodoral R6-1. Prodoral representa una solución limpia, no destructiva, silenciosa y altamente económica.'
        ],
        [
            'question' => '¿Es seguro el producto Prodoral R6-1? ¿Emite olores tóxicos o vapores inflamables?',
            'answer' => 'Es totalmente seguro. Prodoral R6-1 es una dispersión plástica en base agua, libre de solventes orgánicos volátiles, no inflamable y ecológicamente inocua. No genera vapores peligrosos ni olores molestos en el inmueble, cumpliendo los más estrictos estándares de salud ambiental de la Unión Europea.'
        ],
        [
            'question' => '¿Qué garantía ofrece Domingo Isain Plaza Caamaño en el servicio de sellado?',
            'answer' => 'Se entrega garantía técnica sobre la hermeticidad de la red intervenida, respaldada por la credencial SEC del profesional actuante y el protocolo manométrico entregado. El polímero Prodoral R6-1 es inalterable al paso del tiempo y resiste las vibraciones y dilataciones térmicas naturales de las edificaciones.'
        ],
        [
            'question' => '¿Qué cobertura geográfica tiene el servicio en Chile?',
            'answer' => 'Atendemos urgencias y proyectos programados en todas las comunas de la Región Metropolitana de Santiago (Las Condes, Providencia, Santiago Centro, Vitacura, Lo Barnechea, Ñuñoa, Maipú, La Florida, Puente Alto, etc.) y nos desplazamos con equipamiento móvil a las regiones de Valparaíso, O\'Higgins, Maule, Biobío y Coquimbo.'
        ]
    ];
}
