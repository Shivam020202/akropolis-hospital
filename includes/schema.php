<?php
/**
 * Schema.php - JSON-LD Structured Data Helper
 * Outputs Google-readable schema markup for all pages
 */

// ── Base Hospital / LocalBusiness Schema (used on ALL pages) ─────────────────
function schemaHospital(string $pageUrl = ''): string {
    $base = 'https://akropolishospital.com';
    $url  = $base . ($pageUrl ?: '/');
    return json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => ['Hospital', 'MedicalOrganization'],
        'name'            => 'Akropolis Super Speciality Hospital',
        'alternateName'   => 'Akropolis Hospital',
        'url'             => $base,
        'logo'            => $base . '/favicon.svg',
        'image'           => 'https://brandingpioneers.co.in/akropolis/hero-banner.webp',
        'description'     => 'NABH accredited multi-speciality hospital in Gurugram, Haryana offering 24×7 emergency care, expert doctors, advanced diagnostics and comprehensive healthcare.',
        'telephone'       => '+91-9100009744',
        'email'           => 'info@akropolishospital.com',
        'address'         => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69',
            'addressLocality' => 'Gurugram',
            'addressRegion'   => 'Haryana',
            'postalCode'      => '122101',
            'addressCountry'  => 'IN',
        ],
        'geo'             => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => '28.3976223',
            'longitude' => '77.0455906',
        ],
        'openingHoursSpecification' => [
            [
                '@type'       => 'OpeningHoursSpecification',
                'dayOfWeek'   => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                'opens'       => '08:00',
                'closes'      => '20:00',
                'description' => 'OPD Hours',
            ],
            [
                '@type'       => 'OpeningHoursSpecification',
                'dayOfWeek'   => ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],
                'opens'       => '00:00',
                'closes'      => '23:59',
                'description' => 'Emergency Services',
            ],
        ],
        'hasMap'          => 'https://maps.app.goo.gl/GdmJvL8Yuz1VUMvw8',
        'sameAs'          => [
            'https://www.facebook.com/akropolishospital',
            'https://www.instagram.com/akropolishospital',
        ],
        'medicalSpecialty' => [
            'Orthopedics', 'Cardiology', 'Neurology', 'Nephrology',
            'Pediatrics', 'Oncology', 'Plastic Surgery', 'Obstetrics and Gynecology',
            'ENT', 'Ophthalmology', 'Gastroenterology', 'Dermatology',
        ],
        'availableService' => [
            ['@type' => 'MedicalProcedure', 'name' => 'Joint Replacement Surgery'],
            ['@type' => 'MedicalProcedure', 'name' => 'Cardiac Angioplasty'],
            ['@type' => 'MedicalProcedure', 'name' => 'CT Scan'],
            ['@type' => 'MedicalProcedure', 'name' => 'Dialysis'],
            ['@type' => 'MedicalProcedure', 'name' => 'Endoscopy'],
        ],
        'accreditation'   => 'NABH (National Accreditation Board for Hospitals & Healthcare Providers)',
        '@id'             => $base . '/#hospital',
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

// ── BreadcrumbList Schema ─────────────────────────────────────────────────────
// $items: array of ['name' => '...', 'url' => '...']
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

// ── MedicalWebPage + MedicalSpecialty Schema (department pages) ───────────────
function schemaMedicalPage(string $deptName, string $pageUrl, string $description = ''): string {
    return json_encode([
        '@context'    => 'https://schema.org',
        '@type'       => 'MedicalWebPage',
        'name'        => $deptName . ' - Akropolis Super Speciality Hospital',
        'url'         => 'https://akropolishospital.com' . $pageUrl,
        'description' => $description ?: 'Expert ' . $deptName . ' care at Akropolis Hospital, Gurugram – advanced treatment, experienced specialists, and 24×7 support.',
        'medicalAudience' => ['@type' => 'Patient'],
        'about'       => [
            '@type'            => 'MedicalCondition',
            'name'             => $deptName,
            'associatedAnatomy' => ['@type' => 'AnatomicalStructure'],
        ],
        'isPartOf'    => ['@id' => 'https://akropolishospital.com/#hospital'],
        'inLanguage'  => 'en-IN',
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

// ── Physician / Doctor Schema ─────────────────────────────────────────────────
// $doctor: array with name, specialty, image, bio etc.
function schemaPhysician(array $doctor): string {
    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'Physician',
        'name'       => $doctor['name'] ?? '',
        'jobTitle'   => $doctor['specialty'] ?? 'Specialist',
        'worksFor'   => ['@id' => 'https://akropolishospital.com/#hospital'],
        'url'        => 'https://akropolishospital.com/doctors/' . ($doctor['id'] ?? ''),
        'medicalSpecialty' => $doctor['specialty'] ?? '',
    ];
    if (!empty($doctor['image'])) {
        $schema['image'] = $doctor['image'];
    }
    if (!empty($doctor['bio'])) {
        $schema['description'] = $doctor['bio'];
    }
    if (!empty($doctor['qualifications'])) {
        $schema['alumniOf'] = ['@type' => 'EducationalOrganization', 'name' => implode(', ', $doctor['qualifications'])];
    }
    return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

// ── FAQPage Schema ────────────────────────────────────────────────────────────
// $faqs: array of ['question' => '...', 'answer' => '...']
function schemaFAQ(array $faqs): string {
    $mainEntity = [];
    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type'          => 'Question',
            'name'           => $faq['question'],
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

// ── WebSite Schema with SearchAction (homepage only) ─────────────────────────
function schemaWebSite(): string {
    return json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'WebSite',
        'name'            => 'Akropolis Super Speciality Hospital',
        'url'             => 'https://akropolishospital.com',
        'potentialAction' => [
            '@type'       => 'SearchAction',
            'target'      => [
                '@type'       => 'EntryPoint',
                'urlTemplate' => 'https://akropolishospital.com/doctors?q={search_term_string}',
            ],
            'query-input' => 'required name=search_term_string',
        ],
        'inLanguage'      => 'en-IN',
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
        'isPartOf'    => ['@id' => 'https://akropolishospital.com/#hospital'],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

// ── Render helper: wraps schema in <script> tag ───────────────────────────────
function renderSchema(string $jsonLd): string {
    return '<script type="application/ld+json">' . "\n" . $jsonLd . "\n" . '</script>' . "\n";
}
