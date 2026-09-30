<?php
/**
 * Schema.php - JSON-LD Structured Data Helper
 * Outputs Google-readable schema markup for all pages
 */

// ── Base Hospital Schema ──────────────────────────────────────────────────────
function schemaHospital(string $pageUrl = ''): string {
    $base = 'https://akropolishospital.com';

    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Hospital',
        '@id'      => $base . '/#hospital',

        'name'          => 'Akropolis Super Speciality Hospital',
        'alternateName' => 'Akropolis Hospital',
        'url'           => $base . '/',

        'logo' => $base . '/assets/images/homepage/akropolis-official-logo-footer.png',

        'image' => $base . '/assets/images/homepage/akropolis-building-hero-banner.webp',

        'description' => 'Akropolis Super Speciality Hospital is a NABH-accredited hospital in Gurugram, Haryana, providing specialist medical care, advanced diagnostic services and 24/7 emergency care.',

        'telephone' => '+91-9100009744',
        'email'     => 'info@akropolishospital.com',

        'address' => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69',
            'addressLocality' => 'Gurugram',
            'addressRegion'   => 'Haryana',
            'postalCode'      => '122101',
            'addressCountry'  => 'IN',
        ],

        'areaServed' => [
            'Gurugram',
            'Gurgaon',
            'Badshahpur',
            'Vatika Chowk',
            'Sector 69',
        ],

        'sameAs' => [
            'https://www.facebook.com/akropolishospital/',
            'https://www.instagram.com/akropolishospital/',
            'https://www.linkedin.com/company/akropolis-superspeciality-hospital',
        ],

        'medicalSpecialty' => [
            'https://schema.org/Musculoskeletal',
            'https://schema.org/PlasticSurgery',
            'https://schema.org/Obstetric',
            'https://schema.org/Gynecologic',
            'https://schema.org/Cardiovascular',
            'https://schema.org/Neurologic',
            'https://schema.org/Renal',
            'https://schema.org/Gastroenterologic',
            'https://schema.org/Pediatric',
            'https://schema.org/Dermatology',
            'https://schema.org/Otolaryngologic',
            'https://schema.org/Ophthalmology',
            'https://schema.org/DietNutrition',
            'https://schema.org/Oncologic',
            'https://schema.org/Emergency',
        ],

        'availableService' => [
            [
                '@type' => 'MedicalTest',
                'name'   => 'CT Scan',
            ],
            [
                '@type' => 'MedicalProcedure',
                'name'   => 'Endoscopy',
            ],
            [
                '@type' => 'MedicalTherapy',
                'name'   => 'Dialysis',
            ],
            [
                '@type' => 'MedicalProcedure',
                'name'   => 'Bronchoscopy',
            ],
            [
                '@type' => 'MedicalProcedure',
                'name'   => 'Colonoscopy',
            ],
        ],

        'hasCertification' => [
            '@type' => 'Certification',
            'name'  => 'NABH Accreditation',

            'certificationStatus' =>
                'https://schema.org/CertificationActive',

            'issuedBy' => [
                '@type' => 'Organization',
                'name'  => 'National Accreditation Board for Hospitals & Healthcare Providers',
            ],
        ],

        'hasMap' => 'https://maps.app.goo.gl/GdmJvL8Yuz1VUMvw8',

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Emergency Services Schema ─────────────────────────────────────────────────
function schemaEmergencyServices(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => 'https://akropolishospital.com/#emergency-services',

        'name'        => 'Emergency Services',
        'serviceType' => 'Emergency Services',

        'provider' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'hoursAvailable' => [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens'  => '00:00',
            'closes' => '23:59',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── OPD Schema ────────────────────────────────────────────────────────────────
function schemaOPD(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => 'https://akropolishospital.com/#opd',

        'name'        => 'OPD',
        'serviceType' => 'Outpatient Department',

        'provider' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'hoursAvailable' => [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens'  => '08:00',
            'closes' => '20:00',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Laboratory Schema ─────────────────────────────────────────────────────────
function schemaLaboratory(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => 'https://akropolishospital.com/#laboratory',

        'name'        => 'Laboratory',
        'serviceType' => 'Laboratory Services',

        'provider' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'hoursAvailable' => [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens'  => '00:00',
            'closes' => '23:59',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Pharmacy Schema ───────────────────────────────────────────────────────────
function schemaPharmacy(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => 'https://akropolishospital.com/#pharmacy',

        'name'        => 'Pharmacy',
        'serviceType' => 'Pharmacy Services',

        'provider' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'hoursAvailable' => [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens'  => '00:00',
            'closes' => '23:59',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Radiology Schema ──────────────────────────────────────────────────────────
function schemaRadiology(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => 'https://akropolishospital.com/#radiology',

        'name'        => 'Radiology',
        'serviceType' => 'Radiology Services',

        'provider' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'hoursAvailable' => [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens'  => '00:00',
            'closes' => '23:59',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Dialysis Center Schema ────────────────────────────────────────────────────
function schemaDialysisCenter(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'Service',
        '@id'      => 'https://akropolishospital.com/#dialysis-center',

        'name'        => 'Dialysis Center',
        'serviceType' => 'Dialysis Services',

        'provider' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'hoursAvailable' => [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday',
                'Sunday',
            ],
            'opens'  => '00:00',
            'closes' => '23:59',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── BreadcrumbList Schema ─────────────────────────────────────────────────────
function schemaBreadcrumb(array $items): string {
    $listItems = [];

    foreach ($items as $i => $item) {
        $listItems[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $item['name'],
            'item'     => 'https://akropolishospital.com' . $item['url'],
        ];
    }

    return json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $listItems,
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── MedicalWebPage Schema ─────────────────────────────────────────────────────
function schemaMedicalPage(
    string $deptName,
    string $pageUrl,
    string $description = ''
): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'MedicalWebPage',

        'name' => $deptName . ' - Akropolis Super Speciality Hospital',

        'url' => 'https://akropolishospital.com' . $pageUrl,

        'description' => $description ?: 
            'Expert ' . $deptName . ' care at Akropolis Hospital, Gurugram – advanced treatment, experienced specialists, and 24×7 support.',

        'medicalAudience' => [
            '@type' => 'Patient',
        ],

        'about' => [
            '@type' => 'MedicalCondition',
            'name'  => $deptName,
            'associatedAnatomy' => [
                '@type' => 'AnatomicalStructure',
            ],
        ],

        'isPartOf' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'inLanguage' => 'en-IN',

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Physician / Doctor Schema ─────────────────────────────────────────────────
function schemaPhysician(array $doctor): string {
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'Physician',

        'name' => $doctor['name'] ?? '',

        'jobTitle' => $doctor['specialty'] ?? 'Specialist',

        'worksFor' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'url' => 'https://akropolishospital.com/doctors/' . ($doctor['id'] ?? ''),

        'medicalSpecialty' => $doctor['specialty'] ?? '',
    ];

    if (!empty($doctor['image'])) {
        $schema['image'] = $doctor['image'];
    }

    if (!empty($doctor['bio'])) {
        $schema['description'] = $doctor['bio'];
    }

    if (!empty($doctor['qualifications'])) {
        $schema['alumniOf'] = [
            '@type' => 'EducationalOrganization',
            'name'  => implode(', ', $doctor['qualifications']),
        ];
    }

    return json_encode(
        $schema,
        JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
    );
}


// ── FAQPage Schema ────────────────────────────────────────────────────────────
function schemaFAQ(array $faqs): string {
    $mainEntity = [];

    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name'  => $faq['question'],

            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['answer'],
            ],
        ];
    }

    return json_encode([
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $mainEntity,
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── WebSite Schema ────────────────────────────────────────────────────────────
function schemaWebSite(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        '@id'      => 'https://akropolishospital.com/#website',

        'url'  => 'https://akropolishospital.com/',
        'name' => 'Akropolis Super Speciality Hospital',

        'description' => 'The official website of Akropolis Super Speciality Hospital provides information about medical departments, specialist doctors, diagnostic services, emergency care, online appointments and official contact details in Gurugram, Haryana.',

        'publisher' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'inLanguage' => 'en-IN',

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Homepage WebPage Schema ───────────────────────────────────────────────────
function schemaWebPage(): string {
    return json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'WebPage',
        '@id'      => 'https://akropolishospital.com/#webpage',

        'url' => 'https://akropolishospital.com/',

        'name' => 'Akropolis Super Speciality Hospital',

        'description' => 'Akropolis Super Speciality Hospital in Gurugram offers NABH-accredited healthcare, 24/7 emergency services, expert doctors, advanced diagnostics and specialised care.',

        'isPartOf' => [
            '@id' => 'https://akropolishospital.com/#website',
        ],

        'mainEntity' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

        'inLanguage' => 'en-IN',

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── ContactPage Schema ────────────────────────────────────────────────────────
function schemaContactPage(): string {
    return json_encode([
        '@context'    => 'https://schema.org',
        '@type'       => 'ContactPage',

        'name'        => 'Contact Akropolis Super Speciality Hospital',
        'url'         => 'https://akropolishospital.com/contact',

        'description' => 'Contact Akropolis Hospital for appointments, emergency services, and all healthcare needs.',

        'isPartOf' => [
            '@id' => 'https://akropolishospital.com/#hospital',
        ],

    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}


// ── Render Helper ─────────────────────────────────────────────────────────────
function renderSchema(string $jsonLd): string {
    return '<script type="application/ld+json">' . "\n"
        . $jsonLd
        . "\n"
        . '</script>' . "\n";
}