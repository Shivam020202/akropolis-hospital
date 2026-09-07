<?php
// Akropolis Hospital - Data Configuration
// =========================================

// Contact Information
define('CONTACT_INFO', [
    'emergency' => '9100009744',
    'phone' => '9100009733',
    'email' => 'Info@akropolishospital.com',
    'address' => 'Near Vatika Chowk, Opposite Chinar Garden, Sector 69, Gurugram, Haryana 122101',
    'mapUrl' => 'https://maps.google.com/embed?pb=!1m18!1m12!1m3!1d3503.8!2d77.307!3d28.569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM0JzA4LjQiTiA3N8KwMTgnMjUuMiJF!5e0!3m2!1sen!2sin!4v1000000000000!5m2!1sen!2sin'
]);

// Insurance Partners
define('INSURANCE_PARTNERS', [
    'Star Health',
    'Max Bupa',
    'HDFC ERGO',
    'Bajaj Allianz',
    'ICICI Lombard',
    'Oriental Insurance',
    'United India',
    'Religare',
    'Apollo Munich',
    'Cholamandalam'
]);

// Trust Signals
define('TRUST_SIGNALS', [
    ['icon' => 'Award', 'title' => 'NABH Accredited', 'description' => 'Quality healthcare standards certified'],
    ['icon' => 'Clock', 'title' => '24×7 CT Scan', 'description' => 'Round-the-clock diagnostic services'],
    ['icon' => 'Baby', 'title' => 'Advanced NICU', 'description' => 'Level-3 neonatal intensive care'],
    ['icon' => 'CreditCard', 'title' => 'Insurance Tie-ups', 'description' => 'Cashless treatment available']
]);

// Departments Data
$departments = [
    [
        'id' => 'cardiology',
        'name' => 'Cardiology',
        'description' => 'Advanced heart care with state-of-the-art cardiac procedures',
        'image' => 'https://images.pexels.com/photos/668300/pexels-photo-668300.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Heart'
    ],
    [
        'id' => 'neurology',
        'name' => 'Neurology',
        'description' => 'Comprehensive brain and nervous system treatments',
        'image' => 'https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Brain'
    ],
    [
        'id' => 'nephrology',
        'name' => 'Nephrology',
        'description' => 'Kidney care and advanced dialysis services',
        'image' => 'https://images.pexels.com/photos/4386466/pexels-photo-4386466.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Droplets'
    ],
    [
        'id' => 'orthopedics',
        'name' => 'Orthopedics',
        'description' => 'Expert bone, joint, and muscle care',
        'image' => 'https://images.pexels.com/photos/7659564/pexels-photo-7659564.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Bone'
    ],
    [
        'id' => 'pediatrics',
        'name' => 'Pediatrics',
        'description' => 'Specialized healthcare for children and infants',
        'image' => 'https://images.pexels.com/photos/6942019/pexels-photo-6942019.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Baby'
    ],
    [
        'id' => 'oncology',
        'name' => 'Oncology',
        'description' => 'Advanced cancer treatment and care',
        'image' => 'https://images.pexels.com/photos/8376277/pexels-photo-8376277.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Shield'
    ],
    [
        'id' => 'obstetrics-gynecology',
        'name' => 'Obstetrics & Gynecology',
        'description' => 'Complete women\'s health and maternity care',
        'image' => 'https://images.pexels.com/photos/1556652/pexels-photo-1556652.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Heart'
    ],
    [
        'id' => 'plastic-surgery',
        'name' => 'Plastic Surgery',
        'description' => 'Reconstructive and cosmetic surgery excellence',
        'image' => 'https://images.pexels.com/photos/4225880/pexels-photo-4225880.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Scissors'
    ],
    [
        'id' => 'ent',
        'name' => 'ENT',
        'description' => 'Ear, nose, and throat care',
        'image' => 'https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Ear'
    ],
    [
        'id' => 'ophthalmology',
        'name' => 'Ophthalmology',
        'description' => 'Comprehensive eye care and vision services',
        'image' => 'https://images.pexels.com/photos/5752242/pexels-photo-5752242.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Eye'
    ],
    [
        'id' => 'dermatology',
        'name' => 'Dermatology',
        'description' => 'Skin, hair, and nail care',
        'image' => 'https://images.pexels.com/photos/3738346/pexels-photo-3738346.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Sparkles'
    ],
    [
        'id' => 'gastroenterology',
        'name' => 'Gastroenterology',
        'description' => 'Digestive system and endoscopy care',
        'image' => 'https://images.pexels.com/photos/4225880/pexels-photo-4225880.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Activity'
    ],
    [
        'id' => 'health-nutrition',
        'name' => 'Health & Nutrition',
        'description' => 'Nutritional counseling and wellness programs',
        'image' => 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Apple'
    ],
    [
        'id' => 'emergency',
        'name' => 'Emergency',
        'description' => '24/7 emergency and trauma care',
        'image' => 'https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=400',
        'icon' => 'Ambulance'
    ]
];

// Mega Menu Departments
$megaMenuDepartments = [
    ['id' => 'orthopedics', 'name' => 'Orthopedics', 'description' => 'Bone, joint and muscle care', 'icon' => 'Bone', 'href' => '/orthopedics'],
    ['id' => 'plastic-surgery', 'name' => 'Plastic Surgery', 'description' => 'Reconstructive and cosmetic surgery', 'icon' => 'Scissors', 'href' => '/plastic-surgery'],
    ['id' => 'obstetrics-gynecology', 'name' => 'Obstetrics & Gynecology', 'description' => 'Women\'s health and maternity care', 'icon' => 'Heart', 'href' => '/obstetrics-gynecology'],
    ['id' => 'cardiology', 'name' => 'Cardiology', 'description' => 'Heart and cardiovascular care', 'icon' => 'HeartPulse', 'href' => '/cardiology'],
    ['id' => 'neurology', 'name' => 'Neurology', 'description' => 'Brain and nervous system care', 'icon' => 'Brain', 'href' => '/neurology'],
    ['id' => 'nephrology', 'name' => 'Nephrology', 'description' => 'Kidney care and dialysis services', 'icon' => 'Droplets', 'href' => '/nephrology'],
    ['id' => 'gastroenterology', 'name' => 'Gastroenterology', 'description' => 'Digestive system disorders', 'icon' => 'Pill', 'href' => '/gastroenterology'],
    ['id' => 'pediatrics', 'name' => 'Pediatrics', 'description' => 'Newborn and children\'s care', 'icon' => 'Baby', 'href' => '/pediatrics'],
    ['id' => 'dermatology', 'name' => 'Dermatology', 'description' => 'Skin, hair and nail care', 'icon' => 'Sparkles', 'href' => '/dermatology'],
    ['id' => 'ent', 'name' => 'ENT', 'description' => 'Ear, nose and throat care', 'icon' => 'Ear', 'href' => '/ent'],
    ['id' => 'ophthalmology', 'name' => 'Ophthalmology', 'description' => 'Eye care and vision treatment', 'icon' => 'Eye', 'href' => '/ophthalmology'],
    ['id' => 'health-nutrition', 'name' => 'Health & Nutrition', 'description' => 'Nutritional counseling and wellness programs', 'icon' => 'Apple', 'href' => '/health-nutrition'],
    ['id' => 'oncology', 'name' => 'Oncology', 'description' => 'Cancer treatment and care', 'icon' => 'Shield', 'href' => '/oncology'],
    ['id' => 'emergency', 'name' => 'Emergency', 'description' => '24/7 Immediate Emergency & Trauma Care', 'icon' => 'Ambulance', 'href' => '/emergency']
];


// Services Data
$services = [
    ['id' => 'ct-scan', 'name' => 'CT Scan', 'description' => 'Advanced computed tomography imaging for precise diagnosis', 'icon' => 'Scan'],
    ['id' => 'endoscopy', 'name' => 'Endoscopy', 'description' => 'Minimally invasive diagnostic and therapeutic procedures', 'icon' => 'Eye'],
    ['id' => 'colonoscopy', 'name' => 'Colonoscopy', 'description' => 'Comprehensive colon examination and screening for early cancer detection', 'icon' => 'Search'],
    ['id' => 'bronchoscopy', 'name' => 'Bronchoscopy', 'description' => 'Advanced bronchoscopic procedures for respiratory system diagnosis', 'icon' => 'Activity'],
    ['id' => 'dialysis', 'name' => 'Dialysis', 'description' => 'State-of-the-art kidney dialysis treatment center', 'icon' => 'Activity', 'available247' => true],
    ['id' => 'laboratory', 'name' => 'Laboratory', 'description' => 'Comprehensive diagnostic testing and pathology services', 'icon' => 'TestTube']
];

// Blog Posts
$blogPosts = [
    [
        'id' => 'heart-health-tips',
        'title' => '10 Essential Tips for Heart Health',
        'excerpt' => 'Learn simple lifestyle changes that can significantly improve your cardiovascular health.',
        'image' => 'https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&w=400',
        'category' => 'Health Tips',
        'date' => 'January 15, 2025',
        'readTime' => '5 min read'
    ],
    [
        'id' => 'new-mri-machine',
        'title' => 'Akropolis Introduces Latest 3T MRI Technology',
        'excerpt' => 'Our new state-of-the-art MRI machine provides faster, more accurate diagnoses.',
        'image' => 'https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=400',
        'category' => 'News',
        'date' => 'January 10, 2025',
        'readTime' => '3 min read'
    ],
    [
        'id' => 'diabetes-management',
        'title' => 'Understanding Type 2 Diabetes Management',
        'excerpt' => 'Comprehensive guide to managing diabetes through diet, exercise, and medication.',
        'image' => 'https://images.pexels.com/photos/6823557/pexels-photo-6823557.jpeg?auto=compress&cs=tinysrgb&w=400',
        'category' => 'Medical Updates',
        'date' => 'January 8, 2025',
        'readTime' => '7 min read'
    ],
    [
        'id' => 'vaccination-drive',
        'title' => 'Free Vaccination Drive for Children',
        'excerpt' => 'Join our community vaccination program to protect your children against preventable diseases.',
        'image' => 'https://images.pexels.com/photos/4167541/pexels-photo-4167541.jpeg?auto=compress&cs=tinysrgb&w=400',
        'category' => 'News',
        'date' => 'January 5, 2025',
        'readTime' => '4 min read'
    ]
];

// Testimonials
$testimonials = [
    [
        'id' => 'testimonial-1',
        'patientName' => 'Parvana',
        'condition' => 'Patient Recovery',
        'testimonial' => 'Every patient\'s recovery is our greatest reward. Parvana shares her heartfelt journey of healing at Akropolis Super Speciality Hospital, where expert care and compassion made all the difference.',
        'rating' => 5,
        'videoThumbnail' => 'https://img.youtube.com/vi/27YYyNBTmqE/maxresdefault.jpg',
        'date' => 'January 2025'
    ],
    [
        'id' => 'testimonial-2',
        'patientName' => 'Mr. Attar Singh',
        'condition' => 'Medical Treatment',
        'testimonial' => 'Every story of healing inspires us! Mr. Attar Singh shares his heartfelt experience at Akropolis Super Speciality Hospital, where care and compassion come together with advanced medical expertise.',
        'rating' => 5,
        'videoThumbnail' => 'https://img.youtube.com/vi/VZCHBjHabgA/maxresdefault.jpg',
        'date' => 'January 2025'
    ],
    [
        'id' => 'testimonial-3',
        'patientName' => 'Sunil',
        'condition' => 'Medical Care',
        'testimonial' => 'A healing journey filled with care and compassion. Sunil shares his experience at Akropolis Super Speciality Hospital, where expert doctors and advanced facilities supported him every step of the way.',
        'rating' => 5,
        'videoThumbnail' => 'https://img.youtube.com/vi/J8hHjdXNZK4/maxresdefault.jpg',
        'date' => 'January 2025'
    ],
    [
        'id' => 'testimonial-4',
        'patientName' => 'Mr. Uppendra',
        'condition' => 'Patient Recovery',
        'testimonial' => 'A healing journey built on trust and care. Uppendra shares his experience at Akropolis Super Speciality Hospital, where expert doctors, advanced facilities, and compassionate support made his recovery smoother and stronger.',
        'rating' => 5,
        'videoThumbnail' => 'https://img.youtube.com/vi/2ptCdyAoazY/maxresdefault.jpg',
        'date' => 'January 2025'
    ]
];

// Doctors Data
$doctors = [
    [
        'id' => 'dr-anu-nagpal',
        'name' => 'Dr. Anu Nagpal',
        'specialization' => 'Obstetrician & Gynecologist',
        'qualification' => 'MBBS, MS - Obstetrics & Gynaecology',
        'experience' => '11+ years',
        'yearsAsSpecialist' => '7 years as specialist',
        'opdTiming' => 'Mon-Sat: 9:00 AM - 5:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/DR. ANU-NAGPAL.png',
        'department' => 'Obstetrics & Gynaecology',
        'registrationVerified' => true,
        'description' => 'Dr. Anu Nagpal is a highly experienced Obstetrician and Gynecologist in Badshahpur, Gurgaon with 11 years of comprehensive experience in women\'s health care.'
    ],
    [
        'id' => 'dr-prateek-girotra',
        'name' => 'Dr. Prateek Girotra',
        'specialization' => 'Director & Head, Department of Orthopedics',
        'qualification' => 'MBBS, MS (Orthopaedics)',
        'experience' => '12+ years',
        'yearsAsSpecialist' => '10+ years as specialist',
        'opdTiming' => 'Mon-Sat: 8:00 AM - 2:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/DR. PRATEEK-GIROTRA.png',
        'department' => 'Orthopedics',
        'registrationVerified' => true,
        'description' => 'Dr. Prateek Girotra is a highly skilled Orthopaedic Surgeon specializing in Trauma, Joint Replacement, and Arthroscopy.'
    ],
    [
        'id' => 'dr-rahul-jain',
        'name' => 'Dr. Rahul Jain',
        'specialization' => 'Consultant Plastic & Reconstructive Surgeon',
        'qualification' => 'MBBS, MS - General Surgery, MCh - Plastic Surgery',
        'experience' => '12+ years',
        'yearsAsSpecialist' => '2 years as specialist',
        'opdTiming' => 'Mon-Fri: 10:00 AM - 4:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/DR. RAHUL-JAIN.png',
        'department' => 'Plastic Surgery',
        'registrationVerified' => true,
        'description' => 'Dr. Rahul Jain is a dedicated Plastic and Reconstructive Surgeon with over 12 years of experience.'
    ],
    [
        'id' => 'dr-naresh-kumar',
        'name' => 'Dr. Naresh Kumar',
        'specialization' => 'Orthopedic Surgeon',
        'qualification' => 'MBBS, MS (Orthopaedics)',
        'experience' => '8+ years',
        'opdTiming' => 'Mon-Sat: 9:00 AM - 3:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/DR. NARESH-KUMAR.png',
        'department' => 'Orthopedics',
        'registrationVerified' => true,
        'description' => 'Dr. Naresh Kumar is a skilled Orthopaedic Surgeon with over 8 years of experience in treating a wide range of musculoskeletal conditions.'
    ],
    [
        'id' => 'dr-ankit-garg',
        'name' => 'Dr. Ankit Garg',
        'specialization' => 'Internal Medicine Physician',
        'qualification' => 'MBBS, DNB - Internal Medicine',
        'experience' => '8+ years',
        'yearsAsSpecialist' => '2 years as specialist',
        'opdTiming' => 'Mon-Fri: 9:00 AM - 5:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/DR. ANKIT-GARG.png',
        'department' => 'Internal Medicine',
        'registrationVerified' => true,
        'description' => 'Dr. Ankit Garg is a skilled Internal Medicine Physician with expertise in diagnosing and treating complex medical conditions.'
    ],
    [
        'id' => 'dr-subhash-chanana',
        'name' => 'Dr. Subhash Chandra Chanana',
        'specialization' => 'Senior Consultant - General & Onco Surgery',
        'qualification' => 'MBBS, MS (General Surgery), FACS (Onco Surgery)',
        'experience' => '50+ years',
        'yearsAsSpecialist' => '45+ years as specialist',
        'opdTiming' => 'Mon-Sat: 10:00 AM - 4:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/Dr. Subhash-Chandra.png',
        'department' => 'General & Oncology Surgery',
        'registrationVerified' => true,
        'description' => 'Dr. Subhash Chandra Chanana is a highly distinguished General and Oncological Surgeon with over five decades of medical experience.'
    ],
    [
        'id' => 'dr-jona-garikana',
        'name' => 'Dr. Jona Manohar Garikana',
        'specialization' => 'Internal Medicine Physician',
        'qualification' => 'MBBS, DNB - Internal Medicine',
        'experience' => '14+ years',
        'yearsAsSpecialist' => '5+ years as specialist',
        'opdTiming' => 'Mon-Sat: 9:00 AM - 5:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/Jona-Manohar-Garikana.png',
        'department' => 'Internal Medicine',
        'registrationVerified' => true,
        'description' => 'Dr. Jona Manohar Garikana is an accomplished Internal Medicine Physician with extensive international training and research experience.'
    ],
    [
        'id' => 'dr-madan-lal',
        'name' => 'Dr. Madan Lal',
        'specialization' => 'Consultant Paediatrician',
        'qualification' => 'MBBS, DCH (Paediatrics), SEC DNB (Paediatrics)',
        'experience' => '12+ years',
        'opdTiming' => 'Mon-Sat: 10:00 AM - 6:00 PM',
        'image' => 'https://brandingpioneers.co.in/akropolis/dr-madan-lal.webp',
        'department' => 'Pediatrics',
        'registrationVerified' => true,
        'description' => 'Dr. Madan Lal is a highly dedicated and experienced Pediatrician with over 12 years of expertise in child healthcare.'
    ]
];

// Insurance Partner Logos
$insuranceLogos = [
    ['name' => 'Acko Health Insurance', 'logo' => 'https://brandingpioneers.co.in/akropolis/Acko-Health-Insurance.png'],
    ['name' => 'Aditya Birla', 'logo' => 'https://brandingpioneers.co.in/akropolis/Aditya-Birla.png'],
    ['name' => 'Bajaj Allianz General Insurance', 'logo' => 'https://brandingpioneers.co.in/akropolis/Bajaj-Allianz-General-Insurance-Co. Ltd.png'],
    ['name' => 'Care Health Insurance', 'logo' => 'https://brandingpioneers.co.in/akropolis/Car-Health-Insurance.png'],
    ['name' => 'Cholamandalam MS', 'logo' => 'https://brandingpioneers.co.in/akropolis/Cholamandalam \'.png'],
    ['name' => 'Ericson', 'logo' => 'https://brandingpioneers.co.in/akropolis/Ericson-TPA.png'],
    ['name' => 'GIPSA', 'logo' => 'https://brandingpioneers.co.in/akropolis/GIPSA.png'],
    ['name' => 'Genins', 'logo' => 'https://brandingpioneers.co.in/akropolis/Genins-TPA.png'],
    ['name' => 'Future-Generali', 'logo' => 'https://brandingpioneers.co.in/akropolis/Future-Generali.png'],
    ['name' => 'FHP', 'logo' => 'https://brandingpioneers.co.in/akropolis/FHP- TPA.png'],
    ['name' => 'Go-Digit', 'logo' => 'https://brandingpioneers.co.in/akropolis/Go-Digit.png'],
    ['name' => 'Good-Health-Plan-Ltd', 'logo' => 'https://brandingpioneers.co.in/akropolis/Good-Health-Plan-Ltd.png'],
    ['name' => 'Health-India-TPA', 'logo' => 'https://brandingpioneers.co.in/akropolis/Health-India-TPA.png'],
    ['name' => 'Heritage-Health-TPA', 'logo' => 'https://brandingpioneers.co.in/akropolis/Heritage-Health-TPA.png'],
    ['name' => 'IFFCO-Tokio-General-Insurance Co. Ltd', 'logo' => 'https://brandingpioneers.co.in/akropolis/IFFCO-Tokio-General-Insurance Co. Ltd.png'],
    ['name' => 'NATIONAL-INSURANCE-COMPANY', 'logo' => 'https://brandingpioneers.co.in/akropolis/NATIONAL-INSURANCE-COMPANY.png'],
    ['name' => 'Medsave-TPA', 'logo' => 'https://brandingpioneers.co.in/akropolis/Medsave-TPA.png'],
    ['name' => 'Mediassist-TPA- Pvt-Insurance', 'logo' => 'https://brandingpioneers.co.in/akropolis/Mediassist-TPA- Pvt-Insurance.png'],
    ['name' => 'MD-India', 'logo' => 'https://brandingpioneers.co.in/akropolis/MD-India.png'],
    ['name' => 'LIBERTY-GENERA- INSURANCE', 'logo' => 'https://brandingpioneers.co.in/akropolis/LIBERTY-GENERA- INSURANCE.png']
];

// Icon SVG Map
$iconMap = [
    'Heart' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>',
    'Brain' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 4.44-1.54"/><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-4.44-1.54"/></svg>',
    'Bone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 10c.7-.7 1.69 0 2.5 0a2.5 2.5 0 1 0 0-5 .5.5 0 0 1-.5-.5 2.5 2.5 0 1 0-5 0c0 .81.7 1.8 0 2.5l-7 7c-.7.7-1.69 0-2.5 0a2.5 2.5 0 0 0 0 5c.28 0 .5.22.5.5a2.5 2.5 0 1 0 5 0c0-.81-.7-1.8 0-2.5Z"/></svg>',
    'Baby' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5"/><path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5c-.8 0-1.5-.4-1.5-1"/></svg>',
    'Shield' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>',
    'Scissors' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="6" cy="6" r="3"/><path d="M8.12 8.12 12 12"/><path d="M20 4 8.12 15.88"/><circle cx="6" cy="18" r="3"/><path d="M14.8 14.8 20 20"/></svg>',
    'Ear' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8.5a6.5 6.5 0 1 1 13 0c0 6-6 6-6 10a3.5 3.5 0 1 1-7 0"/><path d="M15 8.5a2.5 2.5 0 0 0-5 0v1a2 2 0 0 0 4 0"/></svg>',
    'Eye' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>',
    'Sparkles' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>',
    'Activity' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>',
    'Droplets' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
    'HeartPulse' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"/></svg>',
    'Pill' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"/><path d="m8.5 8.5 7 7"/></svg>',
    'Apple' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20.94c1.5 0 2.75 1.06 4 1.06 3 0 6-8 6-12.22A4.91 4.91 0 0 0 17 5c-2.22 0-4 1.44-5 3-1-1.56-2.78-3-5-3a4.9 4.9 0 0 0-5 4.78C2 14 5 22 8 22c1.25 0 2.5-1.06 4-1.06Z"/><path d="M10 2c1 .5 2 2 2 5"/></svg>',
    'Ambulance' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 6v4"/><path d="M14 14h-4"/><path d="M14 18h-4"/><path d="M14 8h-4"/><path d="M18 12h2a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2h2"/><path d="M18 22V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v18"/></svg>',
    'Phone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
    'Calendar' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>',
    'Mail' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>',
    'MapPin' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
    'ChevronDown' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>',
    'ChevronLeft' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>',
    'ChevronRight' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>',
    'Award' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>',
    'Clock' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
    'CreditCard' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>',
    'Users' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
    'Star' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
    'CheckCircle' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>',
    'ArrowRight' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
    'Menu' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>',
    'X' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
    'Play' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"/></svg>',
    'Quote' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>',
    'Send' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>',
    'User' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>',
    'MessageSquare' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
    'Navigation' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>',
    'TrendingUp' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>',
    'Building2' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>',
    'Zap' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
    'Stethoscope' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.8 2.3A.3.3 0 1 0 5 2a.3.3 0 0 0-.2.3Z"/><path d="M10 22v-2"/><path d="M7 15H4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-3"/><path d="M21 10V8a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v3a4 4 0 0 1-4 4 4 4 0 0 1-4-4V8a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2"/><path d="M12 11V5.42a2 2 0 1 1 0-3.42"/></svg>',
    'Target' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
    'BookOpen' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
    'Microscope' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 18h8"/><path d="M3 22h18"/><path d="M14 22a7 7 0 1 0-14 0"/><path d="M9 14h2"/><path d="M9 12a2 2 0 1 0-4 0v6c0 1.1.9 2 2 2h1"/><path d="M12 6V3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3"/><path d="M12 11V6a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v5"/><path d="M20 14V3a2 2 0 0 0-2-2H16a2 2 0 0 0-2 2v11l4 4z"/></svg>',
    'Box' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>',
    'Utensils' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/><path d="M7 2v20"/><path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/></svg>',
    'Wind' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.7 7.7a2.5 2.5 0 1 1 1.8 4.3H2"/><path d="M9.6 4.6A2 2 0 1 1 11 8H2"/><path d="M12.6 19.4A2 2 0 1 0 14 16H2"/></svg>',
    'Mic' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="22"/><line x1="8" y1="22" x2="16" y2="22"/></svg>',
    'Syringe' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 2 4 4"/><path d="m17 7 3-3"/><path d="M19 9 8.7 19.3c-1 1-2.5 1-3.4 0l-.6-.6c-1-1-1-2.5 0-3.4L15 5"/><path d="m9 11 4 4"/><path d="m5 19-3 3"/><path d="m14 4 6 6"/></svg>',
    'AlertCircle' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
    'ArrowLeft' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>',
    'FileText' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
    'TestTube' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2v6"/><path d="M6.5 2v6"/><path d="M4 10v4a6 6 0 0 0 6 6h4a6 6 0 0 0 6-6v-4"/><path d="M7 20l2-6"/><path d="M12 20l2-6"/><path d="M17 20l2-6"/><path d="M2 10h20"/></svg>',
    'Scan' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"/><path d="M17 3h2a2 2 0 0 1 2 2v2"/><path d="M21 17v2a2 2 0 0 1-2 2h-2"/><path d="M7 21H5a2 2 0 0 1-2-2v-2"/><rect width="10" height="8" x="7" y="8" rx="1"/></svg>',
    'Search' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>',
    'Facebook' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>',
    'Instagram' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>',
    'Youtube' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>',
    'Twitter' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>'
];


$deptConfig = [
    'cardiology' => [
        'name' => 'Cardiology',
        'title' => 'Advanced Heart Care & Cardiovascular Excellence',
        'subtitle' => 'Heart Health Excellence',
        'subtitle_color' => 'text-red-400',
        'icon' => 'Heart',
        'bg_image' => 'https://images.pexels.com/photos/668300/pexels-photo-668300.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-red-600',
        'emergency_title' => 'Recognize Cardiac Emergency Signs',
        'conditions' => [
            'Coronary Artery Disease', 'Heart Failure', 'Arrhythmias',
            'Valve Disorders', 'Hypertension', 'Congenital Heart Defects',
            'Peripheral Artery Disease', 'Chest Pain (Angina)', 'Cardiac Arrest Prevention'
        ],
        'services' => [
            ['name' => 'Interventional Cardiology', 'description' => 'Advanced procedures including angioplasty and stenting', 'icon' => 'Activity'],
            ['name' => 'Non-Invasive Diagnostics', 'description' => 'Echocardiography, stress tests, and Holter monitoring', 'icon' => 'HeartPulse'],
            ['name' => 'Preventive Cardiology', 'description' => 'Risk assessment and lifestyle management for heart health', 'icon' => 'Shield'],
            ['name' => 'Cardiac Emergency', 'description' => '24/7 immediate care for heart attacks and acute conditions', 'icon' => 'Zap']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Modern Cath Lab', 'description' => 'State-of-the-art facility for precision cardiac interventions'],
            ['icon' => 'Award', 'title' => 'Expert Cardiologists', 'description' => 'Board-certified specialists in complex heart conditions'],
            ['icon' => 'Clock', 'title' => '24/7 Care', 'description' => 'Round-the-clock emergency cardiac support services'],
            ['icon' => 'Shield', 'title' => 'NABH Accredited', 'description' => 'Quality healthcare standards for patient safety']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Evidence-Based Care', 'description' => 'Following international protocols for cardiac diagnosis and treatment.', 'features' => ['Guideline-Directed Therapy', 'Precision Medicine']],
            ['icon' => 'Activity', 'title' => 'Minimally Invasive', 'description' => 'Advanced interventional techniques for faster recovery.', 'features' => ['Radial Access', 'Stent Technology']],
            ['icon' => 'Heart', 'title' => 'Holistic Wellness', 'description' => 'Comprehensive management including diet and rehabilitation.', 'features' => ['Cardiac Rehab', 'Dietary Guidance']]
        ],
        'statistics' => [
            ['number' => '10,000+', 'label' => 'Cardiac Procedures Done'],
            ['number' => '98%', 'label' => 'Success Rate'],
            ['number' => '24/7', 'label' => 'Emergency Support'],
            ['number' => '20+', 'label' => 'Years of Experience']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Heart Health Guide', 'description' => 'Essential tips for maintaining a healthy cardiovascular system.'],
            ['icon' => 'Activity', 'title' => 'Post-Procedure Care', 'description' => 'Recovery instructions after angioplasty or cardiac surgery.'],
            ['icon' => 'BookOpen', 'title' => 'Dietary Resources', 'description' => 'Heart-healthy nutritional guidelines and meal plans.']
        ],
        'faqs' => [
            ['question' => 'What are the signs of a heart attack?', 'answer' => 'Common signs include chest pain, shortness of breath, and pain in arms or jaw.'],
            ['question' => 'How can I prevent heart disease?', 'answer' => 'Maintain a healthy diet, exercise regularly, and manage stress levels.'],
            ['question' => 'Is angioplasty a major surgery?', 'answer' => 'It is a minimally invasive procedure with a relatively quick recovery time.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Chest Pain/Pressure', 'description' => 'Sudden intense squeezing or pressure in the chest area'],
            ['symptom' => 'Shortness of Breath', 'description' => 'Sudden difficulty breathing or gasping for air'],
            ['symptom' => 'Sudden Dizziness', 'description' => 'Fainting or severe lightheadedness with chest discomfort']
        ]
    ],
    'neurology' => [
        'name' => 'Neurology',
        'title' => 'Comprehensive Brain & Nervous System Care',
        'subtitle' => 'Neurological Excellence',
        'subtitle_color' => 'text-purple-400',
        'icon' => 'Brain',
        'bg_image' => 'https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-purple-600',
        'emergency_title' => 'Recognize Stroke Warning Signs',
        'conditions' => [
            'Stroke & Brain Injury', 'Epilepsy & Seizures', 'Alzheimer\'s & Dementia',
            'Parkinson\'s Disease', 'Multiple Sclerosis', 'Headaches & Migraines',
            'Neuropathy', 'Sleep Disorders', 'Spinal Cord Disorders'
        ],
        'services' => [
            ['name' => 'Neuro-Diagnostics', 'description' => 'Advanced EEG, EMG, and nerve conduction studies', 'icon' => 'Activity'],
            ['name' => 'Stroke Management', 'description' => 'Rapid response and rehabilitation for stroke patients', 'icon' => 'Zap'],
            ['name' => 'Movement Disorder Clinic', 'description' => 'Specialized care for Parkinson\'s and tremors', 'icon' => 'Activity'],
            ['name' => 'Sleep Studies', 'description' => 'Comprehensive evaluation for sleep-related disorders', 'icon' => 'Moon']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Neuro ICU', 'description' => 'Dedicated intensive care for neurological emergencies'],
            ['icon' => 'Award', 'title' => 'Expert Neurologists', 'description' => 'Specialists in complex brain and nerve conditions'],
            ['icon' => 'Clock', 'title' => '24/7 Stroke Care', 'description' => 'Immediate response for acute stroke emergencies'],
            ['icon' => 'Shield', 'title' => 'Quality Standards', 'description' => 'Certified care for patient safety and outcomes']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Precision Neuro-Care', 'description' => 'Targeted diagnosis and treatment plans for complex brain disorders.', 'features' => ['Neuro-Imaging', 'Genetic Profiling']],
            ['icon' => 'Zap', 'title' => 'Rapid Response', 'description' => 'Dedicated protocols for acute stroke and seizure management.', 'features' => ['Thrombolysis', 'Emergency EEG']],
            ['icon' => 'Activity', 'title' => 'Rehab Focus', 'description' => 'Comprehensive rehabilitation to restore function and mobility.', 'features' => ['Neuro-Physiotherapy', 'Speech Therapy']]
        ],
        'statistics' => [
            ['number' => '8,000+', 'label' => 'Patients Treated'],
            ['number' => '95%', 'label' => 'Satisfaction Rate'],
            ['number' => '24/7', 'label' => 'Service Availability'],
            ['number' => '15+', 'label' => 'Specialist Doctors']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Stroke Education', 'description' => 'How to recognize and respond to stroke symptoms immediately.'],
            ['icon' => 'Activity', 'title' => 'Epilepsy Guide', 'description' => 'Management strategies and safety tips for seizure disorders.'],
            ['icon' => 'BookOpen', 'title' => 'Dementia Care', 'description' => 'Resources and support for families caring for memory loss patients.']
        ],
        'faqs' => [
            ['question' => 'What is the "Golden Hour" in stroke?', 'answer' => 'The first 4.5 hours are critical for starting treatment to minimize brain damage.'],
            ['question' => 'Can epilepsy be cured?', 'answer' => 'While not always cured, most cases are effectively managed with medication.'],
            ['question' => 'What causes chronic migraines?', 'answer' => 'Factors include genetics, environmental triggers, and lifestyle habits.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Face Drooping', 'description' => 'Sudden weakness or numbness on one side of the face'],
            ['symptom' => 'Arm Weakness', 'description' => 'Sudden weakness or numbness in one arm'],
            ['symptom' => 'Speech Difficulty', 'description' => 'Slurred speech or difficulty finding the right words']
        ]
    ],
    'plastic-surgery' => [
        'name' => 'Plastic Surgery',
        'title' => 'Reconstructive & Cosmetic Surgery Excellence',
        'subtitle' => 'Aesthetic Excellence',
        'subtitle_color' => 'text-teal-400',
        'icon' => 'Scissors',
        'bg_image' => 'https://images.pexels.com/photos/4225880/pexels-photo-4225880.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-teal-600',
        'emergency_title' => 'Plastic Surgery Trauma Signs',
        'conditions' => [
            'Traumatic Injuries', 'Congenital Deformities', 'Burn Injuries',
            'Skin Cancer Reconstruction', 'Hand Injuries', 'Aesthetic Enhancements',
            'Post-Bariatric Contouring'
        ],
        'services' => [
            ['name' => 'Reconstructive Surgery', 'description' => 'Restoring function and appearance after injury or illness', 'icon' => 'Shield'],
            ['name' => 'Cosmetic Surgery', 'description' => 'Enhancing appearance through advanced surgical techniques', 'icon' => 'Sparkles'],
            ['name' => 'Micro-Surgery', 'description' => 'Precision procedures for complex tissue reconstruction', 'icon' => 'Microscope'],
            ['name' => 'Burn Care', 'description' => 'Comprehensive management and reconstruction for burns', 'icon' => 'Activity']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Modern OT', 'description' => 'Advanced surgical suites with specialized equipment'],
            ['icon' => 'Award', 'title' => 'Expert Surgeons', 'description' => 'Board-certified plastic and reconstructive specialists'],
            ['icon' => 'Clock', 'title' => 'Trauma Response', 'description' => 'Immediate surgical support for emergency cases'],
            ['icon' => 'Shield', 'title' => 'Patient Safety', 'description' => 'Highest standards of surgical care and outcomes']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Aesthetic Precision', 'description' => 'Combining surgical expertise with an artistic eye for natural results.', 'features' => ['Natural-Looking Outcomes', 'Precision Mapping']],
            ['icon' => 'Shield', 'title' => 'Safety First', 'description' => 'Rigorous pre-surgical assessment and post-operative monitoring.', 'features' => ['Advanced Safety Protocols', 'Post-Op Monitoring']],
            ['icon' => 'Zap', 'title' => 'Minimally Invasive', 'description' => 'Utilizing advanced techniques for smaller incisions and faster recovery.', 'features' => ['Endoscopic Plastic Surgery', 'Fast-Track Recovery']]
        ],
        'statistics' => [
            ['number' => '5,000+', 'label' => 'Successful Surgeries'],
            ['number' => '97%', 'label' => 'Patient Satisfaction'],
            ['number' => '10+', 'label' => 'Expert Surgeons'],
            ['number' => '24/7', 'label' => 'Emergency Support']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Pre-Surgical Prep', 'description' => 'Essential guidelines to follow before your plastic surgery procedure.'],
            ['icon' => 'Activity', 'title' => 'Recovery Guidelines', 'description' => 'Detailed care instructions for optimal healing and scarring.'],
            ['icon' => 'BookOpen', 'title' => 'Aesthetic FAQ', 'description' => 'Answers to common questions about cosmetic and reconstructive procedures.']
        ],
        'faqs' => [
            ['question' => 'How long is the recovery from rhinoplasty?', 'answer' => 'Initial swelling subsides in 2 weeks, with full results in 6-12 months.'],
            ['question' => 'Are plastic surgery scars permanent?', 'answer' => 'While scars exist, surgeons use techniques to minimize and hide them effectively.'],
            ['question' => 'Is cosmetic surgery covered by insurance?', 'answer' => 'Cosmetic procedures are typically not covered, but reconstructive ones often are.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Excessive Swelling', 'description' => 'Sudden extreme swelling or bruising at the surgical site'],
            ['symptom' => 'Severe Pain', 'description' => 'Intense pain not managed by prescribed medication'],
            ['symptom' => 'Surgical Site Changes', 'description' => 'Sudden redness, warmth, or discharge from incisions']
        ]
    ],
    'health-nutrition' => [
        'name' => 'Health & Nutrition',
        'title' => 'Personalized Nutritional Care & Wellness',
        'subtitle' => 'Wellness Excellence',
        'subtitle_color' => 'text-green-400',
        'icon' => 'Apple',
        'bg_image' => 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-green-600',
        'emergency_title' => 'Recognize Nutritional Red Flags',
        'conditions' => [
            'Obesity & Weight Management', 'Diabetes Diet Control', 'Renal Nutrition',
            'Cardiac Diet', 'Pediatric Nutrition', 'Clinical Malnutrition',
            'Digestive Health Nutrition', 'Sports Nutrition'
        ],
        'services' => [
            ['name' => 'Nutritional Counseling', 'description' => 'Expert guidance for healthy eating and lifestyle', 'icon' => 'Users'],
            ['name' => 'Disease-Specific Diets', 'description' => 'Tailored meal plans for chronic condition management', 'icon' => 'Utensils'],
            ['name' => 'Weight Management', 'description' => 'Structured programs for healthy weight loss or gain', 'icon' => 'Activity'],
            ['name' => 'Corporate Wellness', 'description' => 'Health and nutrition programs for organizations', 'icon' => 'Building2']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Wellness Center', 'description' => 'Dedicated space for nutritional consultation'],
            ['icon' => 'Award', 'title' => 'Expert Dietitians', 'description' => 'Certified clinical nutritionists with expert knowledge'],
            ['icon' => 'Clock', 'title' => 'Personalized Plans', 'description' => 'Customized nutrition strategies for every individual'],
            ['icon' => 'Shield', 'title' => 'Scientific Approach', 'description' => 'Evidence-based nutritional care and management']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Nutrition', 'description' => 'Tailoring diets based on metabolic needs, lifestyle, and medical history.', 'features' => ['Metabolic Assessment', 'Customized Meal Plans']],
            ['icon' => 'Apple', 'title' => 'Functional Nutrition', 'description' => 'Using food as a tool for healing and disease prevention.', 'features' => ['Anti-Inflammatory Diets', 'Superfood Integration']],
            ['icon' => 'Activity', 'title' => 'Behavioral Coaching', 'description' => 'Supporting sustainable lifestyle changes and habit formation.', 'features' => ['Mindful Eating', 'Lifestyle Coaching']]
        ],
        'statistics' => [
            ['number' => '5,000+', 'label' => 'Client Consultations'],
            ['number' => '99%', 'label' => 'Success Rate'],
            ['number' => '10+', 'label' => 'Expert Nutritionists'],
            ['number' => '24/7', 'label' => 'Support Available']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Healthy Recipe Book', 'description' => 'Nutritious and delicious meal ideas for all dietary needs.'],
            ['icon' => 'Activity', 'title' => 'Weight Loss Tracker', 'description' => 'Tools to help you monitor and achieve your health goals.'],
            ['icon' => 'BookOpen', 'title' => 'Wellness Library', 'description' => 'Articles and guides on various health and nutrition topics.']
        ],
        'faqs' => [
            ['question' => 'Do I need a referral to see a dietitian?', 'answer' => 'No, you can book an appointment directly for nutritional counseling.'],
            ['question' => 'How long before I see results?', 'answer' => 'Sustainable changes typically take 4-8 weeks to show significant results.'],
            ['question' => 'Are your meal plans customized?', 'answer' => 'Yes, all plans are tailored to individual medical needs and preferences.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Extreme Weight Loss', 'description' => 'Sudden unexplained weight loss over a short period'],
            ['symptom' => 'Severe Deficiency Signs', 'description' => 'Extreme fatigue, dizziness, or bone pain indicating deficiencies'],
            ['symptom' => 'Eating Disorders', 'description' => 'Critical changes in eating behavior requiring immediate support']
        ]
    ],
    'orthopedics' => [
        'name' => 'Orthopedics',
        'title' => 'Advanced Bone & Joint Care Solutions',
        'subtitle' => 'Orthopedics Excellence',
        'subtitle_color' => 'text-green-400',
        'icon' => 'Bone',
        'bg_image' => 'https://images.pexels.com/photos/2182975/pexels-photo-2182975.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-green-600',
        'emergency_title' => 'Recognize Orthopedic Emergency Signs',
        'conditions' => [
            'Arthritis (Osteoarthritis & Rheumatoid)', 'Sports Injuries (ACL, MCL, Rotator Cuff)',
            'Fractures and Dislocations', 'Back Pain and Spinal Disorders', 'Joint Pain (Hip, Knee, Shoulder)',
            'Carpal Tunnel Syndrome', 'Tendonitis and Bursitis', 'Bone Tumors', 'Deformities (Scoliosis, Club Foot)', 'Osteoporosis'
        ],
        'services' => [
            ['name' => 'Joint Replacement Surgery', 'description' => 'Advanced knee, hip, and shoulder replacement with minimally invasive techniques', 'icon' => 'Bone'],
            ['name' => 'Sports Injury Treatment', 'description' => 'Comprehensive care for athletic injuries including ACL, meniscus, and rotator cuff', 'icon' => 'Activity'],
            ['name' => 'Spine Surgery', 'description' => 'Advanced spinal procedures for disc herniation, stenosis, and deformities', 'icon' => 'Stethoscope'],
            ['name' => 'Arthroscopy', 'description' => 'Minimally invasive joint surgery with faster recovery and minimal scarring', 'icon' => 'Scissors'],
            ['name' => 'Fracture Care', 'description' => 'Expert treatment of simple and complex fractures with advanced fixation', 'icon' => 'AlertCircle'],
            ['name' => 'Pediatric Orthopedics', 'description' => 'Specialized care for children\'s bone, joint, and growth plate conditions', 'icon' => 'Users']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Operation Theaters', 'description' => 'State-of-the-art surgical facilities with latest orthopedic equipment'],
            ['icon' => 'Award', 'title' => 'Expert Orthopedic Surgeons', 'description' => 'Board-certified specialists with fellowship training in joint replacement'],
            ['icon' => 'Clock', 'title' => '24/7 Trauma Care', 'description' => 'Round-the-clock emergency orthopedic services for fractures and injuries'],
            ['icon' => 'Shield', 'title' => 'NABH Accredited', 'description' => 'Quality healthcare standards certified for patient safety']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Minimally Invasive Surgery', 'description' => 'Advanced arthroscopic and robotic-assisted procedures that minimize tissue damage, reduce pain, and accelerate recovery time.', 'features' => ['Arthroscopic Surgery', 'Robotic Joint Replacement', 'Small Incision Techniques']],
            ['icon' => 'Bone', 'title' => 'Joint Preservation', 'description' => 'Conservative treatments and regenerative therapies to preserve natural joints and delay or avoid replacement surgery.', 'features' => ['PRP Therapy', 'Cartilage Regeneration', 'Osteotomy Procedures']],
            ['icon' => 'Zap', 'title' => 'Pain Management', 'description' => 'Comprehensive pain relief strategies combining medications, injections, and physical therapy for chronic conditions.', 'features' => ['Joint Injections', 'Nerve Blocks', 'Pain Medication Management']],
            ['icon' => 'Heart', 'title' => 'Rehabilitation Programs', 'description' => 'Structured physical therapy and rehabilitation to restore strength, mobility, and function after surgery or injury.', 'features' => ['Post-Surgical Rehab', 'Sports Rehabilitation', 'Functional Training']]
        ],
        'statistics' => [
            ['number' => '12,000+', 'label' => 'Orthopedic Procedures Annually'],
            ['number' => '95%', 'label' => 'Joint Replacement Success Rate'],
            ['number' => '25+', 'label' => 'Years of Excellence'],
            ['number' => '<2hrs', 'label' => 'Average Surgery Wait Time']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Pre-Surgery Education', 'description' => 'Comprehensive guides to prepare for joint replacement and orthopedic procedures.'],
            ['icon' => 'Bone', 'title' => 'Post-Op Recovery Plans', 'description' => 'Detailed recovery timelines, exercises, and milestones for optimal healing.'],
            ['icon' => 'BookOpen', 'title' => 'Physical Therapy Guides', 'description' => 'Exercise programs and rehabilitation protocols to restore mobility and strength.']
        ],
        'faqs' => [
            ['question' => 'When should I consider joint replacement surgery?', 'answer' => 'Consider joint replacement when conservative treatments no longer provide relief and pain affects daily life.'],
            ['question' => 'How long is the recovery?', 'answer' => 'Most patients start walking within 24 hours. Initial recovery takes 6-12 weeks.'],
            ['question' => 'What is arthroscopy?', 'answer' => 'Minimally invasive surgery using a camera to view and treat joint problems through small incisions.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Severe Injury or Deformity', 'description' => 'Visible bone, severe bleeding, or obvious deformity after injury'],
            ['symptom' => 'Inability to Bear Weight', 'description' => 'Cannot put weight on injured limb or joint after fall or injury'],
            ['symptom' => 'Severe Joint Swelling or Locking', 'description' => 'Sudden extreme swelling, warmth, or joint that is locked and cannot move'],
            ['symptom' => 'Numbness or Loss of Sensation', 'description' => 'Tingling, numbness, or loss of feeling in arm, leg, hand, or foot after injury']
        ]
    ],
    'pediatrics' => [
        'name' => 'Pediatrics',
        'title' => 'Comprehensive Child Health & Wellness Care',
        'subtitle' => 'Pediatrics Excellence',
        'subtitle_color' => 'text-pink-400',
        'icon' => 'Baby',
        'bg_image' => 'https://images.pexels.com/photos/1648375/pexels-photo-1648375.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-pink-600',
        'conditions' => [
            'Childhood Infections', 'Asthma and Allergies', 'Growth Delays',
            'Newborn Jaundice', 'Feeding Issues', 'Childhood Obesity',
            'Behavioral Problems', 'Skin Conditions', 'ENT Infections', 'GI Issues'
        ],
        'services' => [
            ['name' => 'Newborn & Infant Care', 'description' => 'Comprehensive care for newborns including feeding and developmental screening', 'icon' => 'Baby'],
            ['name' => 'Vaccination Programs', 'description' => 'Complete immunization schedule with WHO-recommended vaccines', 'icon' => 'Syringe'],
            ['name' => 'Growth & Development', 'description' => 'Regular monitoring of physical, cognitive, and social development milestones', 'icon' => 'Activity'],
            ['name' => 'Pediatric Emergency', 'description' => '24/7 emergency services for childhood illnesses and injuries', 'icon' => 'AlertCircle']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Child-Friendly', 'description' => 'Specially designed spaces to make children comfortable and reduce anxiety'],
            ['icon' => 'Award', 'title' => 'Experienced Team', 'description' => 'Board-certified specialists with extensive experience in child healthcare'],
            ['icon' => 'Clock', 'title' => '24/7 Care', 'description' => 'Round-the-clock emergency care with a dedicated pediatric team'],
            ['icon' => 'Shield', 'title' => 'Quality Standards', 'description' => 'NABH accredited standards for safe and effective pediatric care']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Preventive Care', 'description' => 'Focus on vaccinations and early detection to ensure healthy development.', 'features' => ['Immunization', 'Monitoring', 'Screening']],
            ['icon' => 'Baby', 'title' => 'Holistic Health', 'description' => 'Comprehensive care addressing physical and emotional wellbeing.', 'features' => ['Physical Health', 'Mental Wellbeing']],
            ['icon' => 'Heart', 'title' => 'Family-Centered', 'description' => 'Involving parents in treatment decisions and providing home care guidance.', 'features' => ['Parent Education', 'Counseling']]
        ],
        'statistics' => [
            ['number' => '15,000+', 'label' => 'Children Treated Annually'],
            ['number' => '98%', 'label' => 'Parent Satisfaction Rate'],
            ['number' => '30+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Emergency Care']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Vaccination Schedule', 'description' => 'Complete immunization timeline from birth to adolescence.'],
            ['icon' => 'Baby', 'title' => 'Newborn Care Guide', 'description' => 'Essential information for new parents on infant care.'],
            ['icon' => 'BookOpen', 'title' => 'Milestones Guide', 'description' => 'Age-appropriate milestones for physical and social development.']
        ],
        'faqs' => [
            ['question' => 'When should my child see a pediatrician?', 'answer' => 'Regular visits start at 2 weeks, then 2, 4, 6, 9, 12, 15, 18, 24 months, then annually.'],
            ['question' => 'What vaccinations are needed?', 'answer' => 'Hep B, DTaP, Polio, Hib, MMR, Varicella, Hep A, and annual flu shots.'],
            ['question' => 'What if my child has a fever?', 'answer' => 'Under 102°F ensure rest and fluids. See a doctor for infants under 3 months with fever over 100.4°F.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Difficulty Breathing', 'description' => 'Rapid breathing, wheezing, or blue lips/face'],
            ['symptom' => 'High Fever in Infant', 'description' => 'Temperature over 100.4°F in babies under 3 months old'],
            ['symptom' => 'Severe Dehydration', 'description' => 'No wet diapers for 8+ hours or sunken eyes']
        ]
    ],
    'oncology' => [
        'name' => 'Oncology',
        'title' => 'Advanced Cancer Treatment & Compassionate Care',
        'subtitle' => 'Oncology Excellence',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'Shield',
        'bg_image' => 'https://images.pexels.com/photos/8376277/pexels-photo-8376277.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-yellow-400',
        'emergency_title' => 'Warning Signs of Cancer',
        'conditions' => [
            'Breast Cancer', 'Lung Cancer', 'Colorectal Cancer', 'Prostate Cancer',
            'Leukemia & Lymphoma', 'Head and Neck Cancers', 'Gynecological Cancers',
            'GI Cancers', 'Bone Sarcomas', 'Brain Tumors'
        ],
        'services' => [
            ['name' => 'Chemotherapy', 'description' => 'Advanced protocols with specialized supportive care management', 'icon' => 'Pill'],
            ['name' => 'Radiation Therapy', 'description' => 'Precision radiation treatment using state-of-the-art technology', 'icon' => 'Activity'],
            ['name' => 'Surgical Oncology', 'description' => 'Expert surgical intervention for various cancer types', 'icon' => 'Shield'],
            ['name' => 'Supportive Care', 'description' => 'Pain management, nutrition counseling, and psychological support', 'icon' => 'Heart']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Facilities', 'description' => 'Modern oncology center with latest treatment technology'],
            ['icon' => 'Award', 'title' => 'Expert Oncologists', 'description' => 'Board-certified specialists with extensive cancer care experience'],
            ['icon' => 'Clock', 'title' => 'Comprehensive Care', 'description' => 'Full spectrum care from diagnosis through recovery'],
            ['icon' => 'Shield', 'title' => 'NABH Accredited', 'description' => 'Certified quality standards for patient safety and care']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Care', 'description' => 'Customized strategy based on cancer type and genetic profile.', 'features' => ['Genomic Testing', 'Molecular Profiling']],
            ['icon' => 'Users', 'title' => 'Tumor Board', 'description' => 'Collaborative team approach for optimal treatment outcomes.', 'features' => ['Case Reviews', 'Combined Expertise']],
            ['icon' => 'Zap', 'title' => 'Advanced Therapies', 'description' => 'Access to cutting-edge immunotherapy and precision medicine.', 'features' => ['Immunotherapy', 'Targeted Therapy']]
        ],
        'statistics' => [
            ['number' => '10,000+', 'label' => 'Patients Treated Annually'],
            ['number' => '85%', 'label' => 'Patient Satisfaction Rate'],
            ['number' => '20+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Care Availability']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Education Materials', 'description' => 'Comprehensive guides about cancer types and treatments.'],
            ['icon' => 'Users', 'title' => 'Support Groups', 'description' => 'Connect with other patients and survivors for mutual support.'],
            ['icon' => 'BookOpen', 'title' => 'Treatment Guides', 'description' => 'Detailed info about chemo, radiation, and surgical options.']
        ],
        'faqs' => [
            ['question' => 'What should I bring first?', 'answer' => 'Bring all previous records, imaging reports, biopsy results, and medications.'],
            ['question' => 'How long is treatment?', 'answer' => 'Varies by type and stage; can range from weeks to several months.'],
            ['question' => 'Are there side effects?', 'answer' => 'Common effects like fatigue are managed with modern medications.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Severe Pain', 'description' => 'Sudden intense pain not managed by prescribed medication'],
            ['symptom' => 'Uncontrolled Fever', 'description' => 'Persistent high fever indicating potential infection'],
            ['symptom' => 'Breathing Difficulty', 'description' => 'Shortness of breath or persistent chest pain']
        ]
    ],
    'nephrology' => [
        'name' => 'Nephrology',
        'title' => 'Advanced Kidney Care & Renal Services',
        'subtitle' => 'Renal Care Excellence',
        'subtitle_color' => 'text-blue-200',
        'icon' => 'Droplets',
        'bg_image' => 'https://images.pexels.com/photos/4225880/pexels-photo-4225880.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-blue-200',
        'emergency_title' => 'Kidney Health Warnings',
        'conditions' => [
            'Chronic Kidney Disease', 'Acute Kidney Injury', 'End-Stage Renal Disease',
            'Kidney Stones', 'Glomerulonephritis', 'Polycystic Kidney Disease',
            'Diabetic Nephropathy', 'Hypertensive Nephropathy', 'Kidney Infections', 'Electrolyte Imbalances'
        ],
        'services' => [
            ['name' => 'Dialysis Services', 'description' => 'Expert hemodialysis and peritoneal dialysis for kidney failure', 'icon' => 'Activity'],
            ['name' => 'Transplant Care', 'description' => 'Comprehensive evaluation and post-operative management', 'icon' => 'Shield'],
            ['name' => 'CKD Management', 'description' => 'Proactive treatment to slow the progression of kidney disease', 'icon' => 'Stethoscope'],
            ['name' => 'Hypertension Care', 'description' => 'Specialized management for kidney-related high blood pressure', 'icon' => 'Heart']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Modern Dialysis', 'description' => 'State-of-the-art facility with latest renal technology'],
            ['icon' => 'Award', 'title' => 'Expert Nephrologists', 'description' => 'Board-certified specialists in complex renal care'],
            ['icon' => 'Clock', 'title' => 'Comprehensive Care', 'description' => 'Integrated care from diagnosis through treatment'],
            ['icon' => 'Shield', 'title' => 'Quality Standards', 'description' => 'NABH accredited standards for patient safety and comfort']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Plans', 'description' => 'Customized care based on metabolic needs and kidney function.', 'features' => ['Detailed Assessment', 'Customized Protocols']],
            ['icon' => 'Activity', 'title' => 'Advanced Dialysis', 'description' => 'Modern dialysis treatment with expert monitoring systems.', 'features' => ['Hemodialysis', 'Peritoneal Dialysis']],
            ['icon' => 'Shield', 'title' => 'Disease Management', 'description' => 'Comprehensive management to preserve renal function.', 'features' => ['Pressure Control', 'Dietary Guidance']]
        ],
        'statistics' => [
            ['number' => '5,000+', 'label' => 'Consultations Annually'],
            ['number' => '98%', 'label' => 'Patient Satisfaction'],
            ['number' => '20+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Emergency Service']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Kidney Education', 'description' => 'Guides about kidney disorders and lifestyle changes.'],
            ['icon' => 'Activity', 'title' => 'Dialysis Guidelines', 'description' => 'Instructions for treatment and renal-safe diet.'],
            ['icon' => 'BookOpen', 'title' => 'Renal Diet Plans', 'description' => 'Personalized nutritional guides for kidney health.']
        ],
        'faqs' => [
            ['question' => 'How can I prevent CKD?', 'answer' => 'Control blood pressure, manage diabetes, and maintain healthy weight.'],
            ['question' => 'Is dialysis painful?', 'answer' => 'The procedure isn\'t painful; only the needle insertion causes brief discomfort.'],
            ['question' => 'Can it be reversed?', 'answer' => 'Acute injury can often be reversed; chronic disease is managed.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Shortness of Breath', 'description' => 'Sudden breathing difficulty due to fluid overload'],
            ['symptom' => 'Severe Swelling', 'description' => 'Sudden or excessive swelling in limbs or face'],
            ['symptom' => 'Urinary Changes', 'description' => 'Sudden decrease in output or visible blood in urine']
        ]
    ],
    'obstetrics-gynecology' => [
        'name' => 'Obstetrics & Gynecology',
        'title' => 'Expert Women\'s Health & Maternity Services',
        'subtitle' => 'Women\'s Health Excellence',
        'subtitle_color' => 'text-blue-200',
        'icon' => 'Heart',
        'bg_image' => 'https://images.pexels.com/photos/1556652/pexels-photo-1556652.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-blue-400',
        'emergency_title' => 'Maternity Emergency Signs',
        'conditions' => [
            'Prenatal Care', 'High-Risk Pregnancy', 'Menstrual Disorders',
            'PCOS Management', 'Endometriosis', 'Uterine Fibroids',
            'Ovarian Cysts', 'Infertility', 'Menopause', 'Cancer Screening'
        ],
        'services' => [
            ['name' => 'Maternity Care', 'description' => 'Comprehensive support from conception through delivery', 'icon' => 'Baby'],
            ['name' => 'High-Risk Pregnancy', 'description' => 'Specialized care for complicated pregnancies with monitoring', 'icon' => 'Shield'],
            ['name' => 'GYN Surgery', 'description' => 'Minimally invasive laparoscopic and traditional procedures', 'icon' => 'Activity'],
            ['name' => 'Infertility Treatment', 'description' => 'Advanced evaluation and personalized fertility options', 'icon' => 'Sparkles']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Delivery Suites', 'description' => 'Modern labor rooms with fetal monitoring and NICU support'],
            ['icon' => 'Award', 'title' => 'Expert OB/GYN Team', 'description' => 'Board-certified obstetricians with decades of experience'],
            ['icon' => 'Clock', 'title' => '24/7 Maternity', 'description' => 'Round-the-clock emergency and delivery support available'],
            ['icon' => 'Shield', 'title' => 'Safety Focus', 'description' => 'NABH accredited standards for mother and baby health']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Preventive Health', 'description' => 'Regular screenings to maintain health at every life stage.', 'features' => ['Pap Smears', 'Mammography']],
            ['icon' => 'Baby', 'title' => 'Maternity Care', 'description' => 'Complete support including prenatal and delivery care.', 'features' => ['Monitoring', 'Normal/C-Section']],
            ['icon' => 'Activity', 'title' => 'GYN Treatment', 'description' => 'Medical and surgical care using advanced techniques.', 'features' => ['Laparoscopy', 'Medical Care']]
        ],
        'statistics' => [
            ['number' => '12,000+', 'label' => 'Deliveries Conducted'],
            ['number' => '98%', 'label' => 'Satisfaction Rate'],
            ['number' => '25+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Service Availability']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Pregnancy Guide', 'description' => 'Week-by-week tips for a healthy pregnancy journey.'],
            ['icon' => 'Baby', 'title' => 'Newborn Care', 'description' => 'Essential info for caring for your baby at home.'],
            ['icon' => 'BookOpen', 'title' => 'Women\'s Wellness', 'description' => 'Resources on menstruation and gynecological health.']
        ],
        'faqs' => [
            ['question' => 'When to start prenatal?', 'answer' => 'Ideally within the first 8 weeks of pregnancy.'],
            ['question' => 'How often for check-ups?', 'answer' => 'Annually starting at age 21, or as recommended by your doctor.'],
            ['question' => 'What about PCOS?', 'answer' => 'Management involves lifestyle changes, hormones, and medications.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Heavy Bleeding', 'description' => 'Excessive bleeding during pregnancy or postpartum'],
            ['symptom' => 'Severe Pelvic Pain', 'description' => 'Sudden intense pain, especially if accompanied by fever'],
            ['symptom' => 'Labor Signs', 'description' => 'Regular contractions or water breaking during pregnancy']
        ]
    ],
    'gastroenterology' => [
        'name' => 'Gastroenterology',
        'title' => 'Advanced Digestive Health & Endoscopy',
        'subtitle' => 'Digestive Health Excellence',
        'subtitle_color' => 'text-blue-200',
        'icon' => 'Activity',
        'bg_image' => 'https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-blue-400',
        'emergency_title' => 'Digestive Emergency Signs',
        'conditions' => [
            'GERD & Acid Reflux', 'IBS Management', 'IBD & Crohn\'s',
            'Peptic Ulcers', 'Liver Disease', 'Pancreatitis',
            'Colon Screening', 'Gallbladder Disease', 'Celiac Disease', 'Esophageal Disorders'
        ],
        'services' => [
            ['name' => 'Endoscopy Services', 'description' => 'Advanced diagnostic and therapeutic endoscopic procedures', 'icon' => 'Microscope'],
            ['name' => 'Liver Care', 'description' => 'Management for hepatitis, cirrhosis, and liver disorders', 'icon' => 'Activity'],
            ['name' => 'IBD Treatment', 'description' => 'Expert care for Crohn\'s disease and ulcerative colitis', 'icon' => 'Shield'],
            ['name' => 'Digestive Care', 'description' => 'Treatment for IBS, bottom-up and acid reflux issues', 'icon' => 'Utensils']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Suite', 'description' => 'Modern facilities for complete digestive diagnosis'],
            ['icon' => 'Award', 'title' => 'Expert Specialists', 'description' => 'Board-certified specialists with extensive GI experience'],
            ['icon' => 'Clock', 'title' => 'Comprehensive Care', 'description' => 'Integrated care from diagnosis through management'],
            ['icon' => 'Shield', 'title' => 'Quality Focus', 'description' => 'NABH accredited standards for patient safety and comfort']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Plans', 'description' => 'Customized care based on specific GI conditions.', 'features' => ['Evaluation', 'Testing']],
            ['icon' => 'Zap', 'title' => 'Minimally Invasive', 'description' => 'Advanced endoscopic techniques for quick recovery.', 'features' => ['Endoscopy', 'Laser Care']],
            ['icon' => 'Stethoscope', 'title' => 'Medical Management', 'description' => 'Treatment including medications and lifestyle changes.', 'features' => ['Medication', 'Dietary Support']]
        ],
        'statistics' => [
            ['number' => '15,000+', 'label' => 'GI Procedures Annually'],
            ['number' => '95%', 'label' => 'Patient Satisfaction'],
            ['number' => '25+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Emergency Care']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Condition Guides', 'description' => 'Detailed info about digestive system health.'],
            ['icon' => 'Heart', 'title' => 'Procedure Preparation', 'description' => 'Guidelines for prepping and recovering from GI exams.'],
            ['icon' => 'Utensils', 'title' => 'Nutrition for GI', 'description' => 'Eating guidelines for maintaining digestive health.']
        ],
        'faqs' => [
            ['question' => 'When to see a GI specialist?', 'answer' => 'For persistent reflux, chronic pain, or swallowing difficulties.'],
            ['question' => 'What is an endoscopy?', 'answer' => 'A minimally invasive exam using a camera to view the GI tract.'],
            ['question' => 'How to prevent reflux?', 'answer' => 'Maintain healthy weight and avoid late-night trigger meals.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Severe GI Pain', 'description' => 'Sudden intense pain indicating potential blockage'],
            ['symptom' => 'Internal Bleeding', 'description' => 'Vomiting blood or passing black, tarry stools'],
            ['symptom' => 'Inability to Swallow', 'description' => 'Sudden blockage or extreme difficulty swallowing']
        ]
    ],
    'dermatology' => [
        'name' => 'Dermatology',
        'title' => 'Expert Skin, Hair & Aesthetic Solutions',
        'subtitle' => 'Dermatology Excellence',
        'subtitle_color' => 'text-blue-200',
        'icon' => 'Sparkles',
        'bg_image' => 'https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-blue-400',
        'emergency_title' => 'Skin Emergency Signs',
        'conditions' => [
            'Acne & Scars', 'Eczema Management', 'Psoriasis',
            'Rosacea Care', 'Skin Cancer Screening', 'Hair Loss',
            'Viral Infections', 'Fungal Care', 'Dermatitis', 'Pigmentation'
        ],
        'services' => [
            ['name' => 'Acne Clinic', 'description' => 'Comprehensive medical and cosmetic solutions for acne', 'icon' => 'Sparkles'],
            ['name' => 'Medical Derm', 'description' => 'Advanced treatment for eczema, psoriasis, and infections', 'icon' => 'Shield'],
            ['name' => 'Aesthetic Care', 'description' => 'Botox, fillers, peels, and anti-aging treatments', 'icon' => 'Heart'],
            ['name' => 'Pediatric Derm', 'description' => 'Specialized care for children\'s skin and hair health', 'icon' => 'Baby']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Modern Clinic', 'description' => 'State-of-the-art diagnostic and treatment equipment'],
            ['icon' => 'Award', 'title' => 'Expert Specialists', 'description' => 'Board-certified dermatologists with extensive experience'],
            ['icon' => 'Clock', 'title' => 'Complete Care', 'description' => 'Full spectrum from clinical diagnosis to aesthetics'],
            ['icon' => 'Shield', 'title' => 'Quality Focus', 'description' => 'NABH accredited standards for patient safety and care']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Care', 'description' => 'Customized plans based on skin type and needs.', 'features' => ['Evaluation', 'Protocols']],
            ['icon' => 'Zap', 'title' => 'Minimally Invasive', 'description' => 'Laser and microsurgical techniques for fast recovery.', 'features' => ['Laser Care', 'Microneedling']],
            ['icon' => 'HeartHandshake', 'title' => 'Integrated Aesthetics', 'description' => 'Medical expertise combined with aesthetic results.', 'features' => ['Consultation', 'Maintenance']]
        ],
        'statistics' => [
            ['number' => '15,000+', 'label' => 'Treatments Annually'],
            ['number' => '95%', 'label' => 'Satisfaction Rate'],
            ['number' => '25+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Care Availability']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Condition Guides', 'description' => 'Detailed info about skin, hair, and nail health.'],
            ['icon' => 'Sparkles', 'title' => 'Skincare Routines', 'description' => 'Proper maintenance tips for healthy, glowing skin.'],
            ['icon' => 'BookOpen', 'title' => 'Cosmetic Options', 'description' => 'Guides about medical and aesthetic skin treatments.']
        ],
        'faqs' => [
            ['question' => 'When to see a doctor?', 'answer' => 'For changing moles, persistent rashes, or sudden hair loss.'],
            ['question' => 'Is Botox safe?', 'answer' => 'Yes, when performed by board-certified specialists in clinical settings.'],
            ['question' => 'Best routine for sensitivity?', 'answer' => 'Use fragrance-free products and avoid harsh physical exfoliants.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Severe Blistering', 'description' => 'Sudden painful blisters covering large body areas'],
            ['symptom' => 'Rapid Spreading Rash', 'description' => 'A rash spreading quickly, especially with fever'],
            ['symptom' => 'Anaphylaxis', 'description' => 'Severe hives with swelling or difficulty breathing']
        ]
    ],
    'ent' => [
        'name' => 'ENT',
        'title' => 'Comprehensive Ear, Nose & Throat Care',
        'subtitle' => 'ENT Excellence',
        'subtitle_color' => 'text-blue-200',
        'icon' => 'Ear',
        'bg_image' => 'https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-blue-400',
        'emergency_title' => 'ENT Emergency Signs',
        'conditions' => [
            'Sinusitis', 'Ear Infections', 'Hearing Loss',
            'Tonsillitis', 'Sleep Apnea', 'Vertigo',
            'Nasal Polyps', 'Voice Disorders', 'Head/Neck Tumors', 'Allergy'
        ],
        'services' => [
            ['name' => 'Ear Care', 'description' => 'Treatment for hearing loss, infections, and balance issues', 'icon' => 'Ear'],
            ['name' => 'Sinus Care', 'description' => 'Management for sinusitis, polyps, and breathing issues', 'icon' => 'Wind'],
            ['name' => 'Throat Care', 'description' => 'Expert management of voice and swallowing disorders', 'icon' => 'Mic'],
            ['name' => 'Hearing Center', 'description' => 'Audiology services and hearing restoration options', 'icon' => 'Stethoscope']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Equipment', 'description' => 'Modern facilities for precise ENT diagnosis'],
            ['icon' => 'Award', 'title' => 'Expert Specialists', 'description' => 'Board-certified otolaryngologists with extensive training'],
            ['icon' => 'Clock', 'title' => 'Comprehensive Care', 'description' => 'Full spectrum from diagnosis to surgical recovery'],
            ['icon' => 'Shield', 'title' => 'Quality Standards', 'description' => 'NABH accredited standards for patient safety and comfort']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Care', 'description' => 'Customized plans based on specific ENT symptoms.', 'features' => ['Evaluation', 'Protocols']],
            ['icon' => 'Zap', 'title' => 'Minimally Invasive', 'description' => 'Advanced endoscopic and laser surgical techniques.', 'features' => ['Endoscopy', 'Laser Care']],
            ['icon' => 'Stethoscope', 'title' => 'Medical Management', 'description' => 'Treatment using targeted medications and therapies.', 'features' => ['Medication', 'Allergy Care']]
        ],
        'statistics' => [
            ['number' => '15,000+', 'label' => 'Procedures Annually'],
            ['number' => '95%', 'label' => 'Satisfaction Rate'],
            ['number' => '25+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Emergency Care']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Condition Guides', 'description' => 'Detailed info about ear, nose, and throat health.'],
            ['icon' => 'Ear', 'title' => 'Hearing Resources', 'description' => 'Information about aids and auditory rehabilitation.'],
            ['icon' => 'Leaf', 'title' => 'Allergy Tips', 'description' => 'Guidelines for managing rhinitis and environmental triggers.']
        ],
        'faqs' => [
            ['question' => 'When to see an ENT?', 'answer' => 'For persistent infections, hearing changes, or chronic sinusitis.'],
            ['question' => 'What is sinus surgery?', 'answer' => 'A minimally invasive procedure to clear blockages using endoscopes.'],
            ['question' => 'How to prevent infections?', 'answer' => 'Keep ears dry, manage allergies, and avoid sharp objects.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Hearing Loss', 'description' => 'Sudden onset hearing loss in one or both ears'],
            ['symptom' => 'Severe Bleeding', 'description' => 'Uncontrolled bleeding from the nose or throat'],
            ['symptom' => 'Breathing Difficulty', 'description' => 'Sudden difficulty breathing or extreme swallowing pain']
        ]
    ],
    'ophthalmology' => [
        'name' => 'Ophthalmology',
        'title' => 'Advanced Eye Care & Vision Services',
        'subtitle' => 'Vision Excellence',
        'subtitle_color' => 'text-blue-200',
        'icon' => 'Eye',
        'bg_image' => 'https://images.pexels.com/photos/5215024/pexels-photo-5215024.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-blue-400',
        'emergency_title' => 'Eye Emergency Warnings',
        'conditions' => [
            'Cataracts', 'Glaucoma', 'Macular Degeneration',
            'Retinopathy', 'Dry Eye', 'Refractive Errors',
            'Detachment', 'Corneal Disease', 'Infections', 'Strabismus'
        ],
        'services' => [
            ['name' => 'Cataract Surgery', 'description' => 'Modern lens replacement with advanced intraocular implants', 'icon' => 'Eye'],
            ['name' => 'Laser Correction', 'description' => 'LASIK and laser vision correction for refractive errors', 'icon' => 'Zap'],
            ['name' => 'Glaucoma Care', 'description' => 'Medical and surgical management to preserve vision', 'icon' => 'AlertCircle'],
            ['name' => 'Retina Services', 'description' => 'Specialized care for detachment and degenerative issues', 'icon' => 'Activity']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Equipment', 'description' => 'Modern diagnostic tools for precise vision evaluation'],
            ['icon' => 'Award', 'title' => 'Expert Specialists', 'description' => 'Board-certified ophthalmologists in vision restoration'],
            ['icon' => 'Clock', 'title' => 'Comprehensive Care', 'description' => 'Integrated care from eye exams to microsurgery'],
            ['icon' => 'Shield', 'title' => 'Quality Standards', 'description' => 'NABH accredited standards for patient safety and care']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Personalized Care', 'description' => 'Customized treatment based on detailed eye evaluations.', 'features' => ['Diagnostic Testing', 'Evaluation']],
            ['icon' => 'Zap', 'title' => 'Microsurgery', 'description' => 'Advanced techniques for fast recovery and minimal scarring.', 'features' => ['Laser Care', 'Microsurgery']],
            ['icon' => 'HeartHandshake', 'title' => 'Vision Rehab', 'description' => 'Support for restoring and maintaining optimal vision.', 'features' => ['Vision Therapy', 'Consultation']]
        ],
        'statistics' => [
            ['number' => '15,000+', 'label' => 'Eye Procedures Annually'],
            ['number' => '95%', 'label' => 'Satisfaction Rate'],
            ['number' => '25+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Emergency Care']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Condition Guides', 'description' => 'Detailed info about eye conditions and treatments.'],
            ['icon' => 'Eye', 'title' => 'Correction Info', 'description' => 'Information about glasses, lenses, and surgery options.'],
            ['icon' => 'Leaf', 'title' => 'Eye Health Tips', 'description' => 'Guidelines for maintaining vision and preventing issues.']
        ],
        'faqs' => [
            ['question' => 'When to see an eye doctor?', 'answer' => 'For sudden vision changes, persistent pain, or severe redness.'],
            ['question' => 'Is cataract surgery safe?', 'answer' => 'Yes, it is one of the most common and safest procedures.'],
            ['question' => 'How often for exams?', 'answer' => 'Generally every 1-2 years, or more often based on risk.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Vision Loss', 'description' => 'Sudden onset of vision loss in one or both eyes'],
            ['symptom' => 'Severe Eye Pain', 'description' => 'Intense pain in or around the eye with redness'],
            ['symptom' => 'Flashers & Floaters', 'description' => 'Sudden increase in floaters or bright flashes of light']
        ]
    ],
    'dialysis' => [
        'name' => 'Dialysis',
        'title' => 'Advanced Kidney Care & Dialysis Services',
        'subtitle' => 'Kidney Care Excellence',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'Droplets',
        'bg_image' => 'https://brandingpioneers.co.in/akropolis/Dialysis-Breadcrum.webp',
        'accent_color' => 'text-yellow-400',
        'conditions' => [
            'Chronic Kidney Disease (CKD)', 'End-Stage Renal Disease (ESRD)', 'Acute Kidney Injury',
            'Kidney Failure', 'Fluid Overload', 'Electrolyte Imbalances',
            'Uremia', 'Poisoning/Drug Overdose', 'Diabetic Nephropathy', 'Hypertensive Nephropathy',
            'Polycystic Kidney Disease', 'Glomerulonephritis'
        ],
        'services' => [
            ['name' => 'Hemodialysis', 'description' => 'Blood filtration using an artificial kidney machine to remove waste and excess fluid (3-4 hours)', 'icon' => 'Droplets'],
            ['name' => 'Peritoneal Dialysis', 'description' => 'Internal blood filtration using the abdomen lining, designed for home-based care', 'icon' => 'Activity'],
            ['name' => 'Continuous Renal Replacement', 'description' => 'Slow, continuous dialysis for critically ill patients in intensive care units (24 hours)', 'icon' => 'Heart'],
            ['name' => 'Emergency Dialysis', 'description' => 'Immediate dialysis for acute kidney failure and life-threatening emergencies', 'icon' => 'Zap']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Modern Dialysis Center', 'description' => 'State-of-the-art machines with advanced monitoring systems and patient comfort features'],
            ['icon' => 'Award', 'title' => 'Expert Nephrologists', 'description' => 'Board-certified specialists with extensive experience in kidney care management'],
            ['icon' => 'Clock', 'title' => '24/7 Emergency Dialysis', 'description' => 'Round-the-clock services for critical care patients and acute renal emergencies'],
            ['icon' => 'Shield', 'title' => 'Infection Control', 'description' => 'Strict sterilization protocols and infection control measures ensuring patient safety']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Pre-Dialysis Preparation', 'description' => 'Comprehensive preparation for your dialysis journey.', 'features' => ['Vascular Access Creation', 'Medical Evaluation', 'Dietary Counseling']],
            ['icon' => 'Clock', 'title' => 'During Dialysis Session', 'description' => 'Comfort-focused treatment with continuous vital monitoring.', 'features' => ['Vital Signs Tracking', 'Fluid Removal', 'Continuous Monitoring']],
            ['icon' => 'HeartHandshake', 'title' => 'Post-Dialysis Care', 'description' => 'Ongoing support and recovery assessment after every session.', 'features' => ['Recovery Monitoring', 'Access Site Care', 'Medication Adjustment']]
        ],
        'statistics' => [
            ['number' => '10,000+', 'label' => 'Dialysis Sessions Annually'],
            ['number' => '98%', 'label' => 'Patient Safety Record'],
            ['number' => '20+', 'label' => 'Years of Excellence'],
            ['number' => '24/7', 'label' => 'Emergency Availability']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Kidney Health Education', 'description' => 'Comprehensive information about CKD and dialysis management.'],
            ['icon' => 'Droplets', 'title' => 'Fluid Management', 'description' => 'Guidelines for maintaining fluid balance and dietary restrictions.'],
            ['icon' => 'BookOpen', 'title' => 'Vascular Access Care', 'description' => 'Instructions for maintaining and protecting your fistula or graft.']
        ],
        'faqs' => [
            ['question' => 'How long does a dialysis session take?', 'answer' => 'Typically 3-4 hours, three times a week for hemodialysis.'],
            ['question' => 'Can I do dialysis at home?', 'answer' => 'Yes, peritoneal dialysis is designed for home-based treatment.'],
            ['question' => 'Is dialysis painful?', 'answer' => 'The treatment itself isn\'t painful, though needle insertion may cause brief discomfort.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Shortness of Breath', 'description' => 'Sudden difficulty breathing due to fluid overload'],
            ['symptom' => 'Access Site Bleeding', 'description' => 'Uncontrolled bleeding from fistula or graft'],
            ['symptom' => 'Severe Weakness', 'description' => 'Extreme fatigue or confusion from electrolyte imbalance'],
            ['symptom' => 'Sudden Chest Pain', 'description' => 'Sharp pain which could indicate cardiac complications']
        ]
    ],
    'laboratory' => [
        'name' => 'Laboratory',
        'title' => 'Advanced Diagnostic Laboratory Services',
        'subtitle' => 'Diagnostic Excellence',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'TestTube',
        'bg_image' => 'https://brandingpioneers.co.in/akropolis/Laboratory.webp',
        'accent_color' => 'text-yellow-400',
        'conditions' => [
            'Complete Blood Count (CBC)', 'Metabolic Panel', 'Lipid Profile',
            'Thyroid Function Tests', 'Liver Function Tests', 'Kidney Function Tests',
            'HbA1c (Diabetes)', 'Vitamin D & B12', 'Cardiac Markers', 'Hormone Assays',
            'Tumor Markers', 'Infectious Disease Tests', 'Allergy Testing'
        ],
        'services' => [
            ['name' => 'Blood Tests', 'description' => 'Complete blood count, chemistry, and lipid profiles for health assessment', 'icon' => 'Droplets'],
            ['name' => 'Cardiac Markers', 'description' => 'Heart-specific enzymes (Troponins, CK-MB) for cardiac disease diagnosis', 'icon' => 'Heart'],
            ['name' => 'Hormone Tests', 'description' => 'Thyroid, diabetes, and reproductive hormone testing for endocrine health', 'icon' => 'Activity'],
            ['name' => 'Microbiology', 'description' => 'Culture and sensitivity testing for bacterial and viral infections', 'icon' => 'Microscope']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Laboratory', 'description' => 'State-of-the-art automated analyzers and latest diagnostic equipment'],
            ['icon' => 'Award', 'title' => 'NABL Accredited', 'description' => 'Quality assured testing with national accreditation standards and certified processes'],
            ['icon' => 'Clock', 'title' => 'Quick Results', 'description' => 'Fast turnaround times with emergency capabilities and same-day reporting'],
            ['icon' => 'Shield', 'title' => 'Quality Control', 'description' => 'Rigorous quality control and external assurance ensuring accurate results']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Before Your Test', 'description' => 'Guidelines to ensure accurate sample collection and testing.', 'features' => ['Fasting Instructions', 'Medication Review', 'Preparation Support']],
            ['icon' => 'Activity', 'title' => 'Sample Collection', 'description' => 'Quick and sterile collection by experienced phlebotomists.', 'features' => ['Expert Collection', 'Safety Protocols', 'Comfort Focus']],
            ['icon' => 'FileText', 'title' => 'Results & Reporting', 'description' => 'Fast digital reporting with expert pathologist interpretation.', 'features' => ['SMS Notifications', 'Online Reports', 'Expert Interpretation']]
        ],
        'statistics' => [
            ['number' => '100,000+', 'label' => 'Tests Performed Annually'],
            ['number' => '99.9%', 'label' => 'Accuracy Rate'],
            ['number' => '24/7', 'label' => 'Service Availability'],
            ['number' => '<4 Hours', 'label' => 'Average Turnaround Time']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Test Preparation', 'description' => 'Essential guidelines for fasting and pre-test requirements.'],
            ['icon' => 'Activity', 'title' => 'Understanding Results', 'description' => 'Educational guides to help interpret common laboratory values.'],
            ['icon' => 'Clock', 'title' => 'Home Collection', 'description' => 'Information about our safe and sterile home sample collection services.']
        ],
        'faqs' => [
            ['question' => 'Do I need to fast for my laboratory test?', 'answer' => 'Typically 8-12 hours of fasting is required for glucose and lipid profiles.'],
            ['question' => 'When will I receive my laboratory results?', 'answer' => 'Most routine results are available within 4-6 hours via SMS and online.'],
            ['question' => 'Is home sample collection available?', 'answer' => 'Yes, we provide safe and sterile home collection services for your convenience.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Critical Values', 'description' => 'Results indicating immediate life-threatening imbalances'],
            ['symptom' => 'Acute Infection', 'description' => 'Markers indicating severe systemic infection (Sepsis)'],
            ['symptom' => 'Cardiac Marker Spike', 'description' => 'Elevated troponins indicating acute heart damage'],
            ['symptom' => 'Severe Anemia', 'description' => 'Critically low hemoglobin levels requiring intervention']
        ]
    ],
    'ct-scan' => [
        'name' => 'CT Scan',
        'title' => 'Advanced Multi-Slice CT Scan Services',
        'subtitle' => 'Advanced Imaging',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'Scan',
        'bg_image' => 'https://brandingpioneers.co.in/akropolis/CT.webp',
        'accent_color' => 'text-yellow-400',
        'conditions' => [
            'Brain Tumors & Strokes', 'Lung Diseases', 'Abdominal Disorders',
            'Bone Fractures', 'Cancer Detection', 'Vascular Anomalies',
            'Kidney Stones', 'Spinal Disorders', 'Heart Disease', 'Trauma Assessment'
        ],
        'services' => [
            ['name' => 'Brain CT', 'description' => 'Detailed imaging for neurological and stroke evaluation', 'icon' => 'Brain'],
            ['name' => 'Chest CT', 'description' => 'Lung and thoracic cavity imaging for respiratory health', 'icon' => 'Activity'],
            ['name' => 'Abdominal CT', 'description' => 'Internal organ imaging for digestive evaluation', 'icon' => 'Heart'],
            ['name' => 'Bone CT', 'description' => 'High-resolution imaging for orthopedic and spinal health', 'icon' => 'Bone'],
            ['name' => 'CT Angiography', 'description' => 'Visualizing blood vessels for blockages or aneurysms', 'icon' => 'Zap'],
            ['name' => 'Emergency CT', 'description' => 'Rapid trauma and acute condition assessment', 'icon' => 'Shield']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Technology', 'description' => 'Latest multi-slice scanners with AI enhancement'],
            ['icon' => 'Award', 'title' => 'Expert Radiologists', 'description' => 'Board-certified specialists with extensive experience'],
            ['icon' => 'Clock', 'title' => '24/7 Availability', 'description' => 'Round-the-clock services for emergency cases'],
            ['icon' => 'Shield', 'title' => 'Radiation Safety', 'description' => 'Low-dose protocols ensuring patient protection']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Precision Imaging', 'description' => 'High-resolution slices for accurate diagnostic detail.', 'features' => ['3D Reconstruction', 'Contrast Enhancement']],
            ['icon' => 'Shield', 'title' => 'Safety First', 'description' => 'Prioritizing patient comfort and low radiation exposure.', 'features' => ['ALARA Principle', 'Contrast Safety']],
            ['icon' => 'Activity', 'title' => 'Rapid Reporting', 'description' => 'Quick interpretation for immediate clinical decisions.', 'features' => ['Digital Access', 'Radiologist Consult']]
        ],
        'statistics' => [
            ['number' => '12,000+', 'label' => 'Scans Performed Annually'],
            ['number' => '99.5%', 'label' => 'Diagnostic Accuracy'],
            ['number' => '24/7', 'label' => 'Emergency Service'],
            ['number' => '<15 Min', 'label' => 'Average Scan Time']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Preparation Guide', 'description' => 'Instructions for fasting and contrast safety.'],
            ['icon' => 'Shield', 'title' => 'Safety Information', 'description' => 'Details about radiation levels and safety measures.'],
            ['icon' => 'BookOpen', 'title' => 'Procedure Video', 'description' => 'Walkthrough of what to expect during your scan.']
        ],
        'faqs' => [
            ['question' => 'How long does it take?', 'answer' => 'The actual scan takes only 5-10 minutes.'],
            ['question' => 'Is contrast necessary?', 'answer' => 'Depends on the area being scanned and diagnostic requirements.'],
            ['question' => 'Is it safe?', 'answer' => 'We use modern low-dose technology and strict safety protocols.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Acute Trauma', 'description' => 'Severe injuries requiring rapid internal assessment'],
            ['symptom' => 'Stroke Signs', 'description' => 'Sudden neurological changes needing brain imaging'],
            ['symptom' => 'Severe Internal Pain', 'description' => 'Sudden extreme abdominal or chest pain'],
            ['symptom' => 'Acute Respiratory Distress', 'description' => 'Severe breathing difficulty needing chest evaluation']
        ]
    ],
    'endoscopy' => [
        'name' => 'Endoscopy',
        'title' => 'Advanced Diagnostic & Therapeutic Endoscopy',
        'subtitle' => 'Advanced Diagnostics',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'Eye',
        'bg_image' => 'https://brandingpioneers.co.in/akropolis/Endoscopy-service.webp',
        'accent_color' => 'text-yellow-400',
        'conditions' => [
            'GERD & Acid Reflux', 'Peptic Ulcers', 'IBD & Crohn\'s',
            'Colon Polyps', 'GI Bleeding', 'Swallowing Disorders',
            'Celiac Disease Diagnosis', 'Diverticular Disease', 'Bile Duct Stones', 'Pancreatic Disorders'
        ],
        'services' => [
            ['name' => 'Upper Endoscopy (EGD)', 'description' => 'Detailed examination of esophagus, stomach, and duodenum (15-30 mins)', 'icon' => 'Eye'],
            ['name' => 'Colonoscopy', 'description' => 'Complete examination of the colon and rectum for cancer screening (30-60 mins)', 'icon' => 'Activity'],
            ['name' => 'Flexible Sigmoidoscopy', 'description' => 'Focused examination of the lower colon and rectum (15-20 mins)', 'icon' => 'Heart'],
            ['name' => 'ERCP', 'description' => 'Specialized examination of bile and pancreatic ducts for stones and tumors (30-90 mins)', 'icon' => 'Pill']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Modern Endoscopy Suite', 'description' => 'State-of-the-art equipment with high-definition imaging and therapeutic capabilities'],
            ['icon' => 'Award', 'title' => 'Expert Gastroenterologists', 'description' => 'Board-certified specialists with extensive experience in complex endoscopic procedures'],
            ['icon' => 'Clock', 'title' => 'Same-Day Procedures', 'description' => 'Convenient scheduling with minimal waiting times and efficient patient care'],
            ['icon' => 'Shield', 'title' => 'Patient Safety First', 'description' => 'Comprehensive safety protocols and patient comfort measures for optimal experience']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Pre-Procedure Preparation', 'description' => 'Essential steps to ensure a safe and successful procedure.', 'features' => ['Fasting Instructions', 'Medication Adjustment', 'Bowel Prep']],
            ['icon' => 'Zap', 'title' => 'During the Procedure', 'description' => 'Comfort-first examination with expert clinical monitoring.', 'features' => ['IV Sedation', 'Vital Monitoring', 'Therapeutic Utility']],
            ['icon' => 'HeartHandshake', 'title' => 'Post-Procedure Care', 'description' => 'Recovery-focused support and detailed results discussion.', 'features' => ['Recovery Monitoring', 'Results Discussion', 'After-Care Plan']]
        ],
        'statistics' => [
            ['number' => '8,000+', 'label' => 'Procedures Performed Annually'],
            ['number' => '98%', 'label' => 'Diagnostic Success'],
            ['number' => '24/7', 'label' => 'Emergency GI Service'],
            ['number' => '<30 Min', 'label' => 'Average Procedure Time']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Prep Instructions', 'description' => 'Detailed step-by-step guidelines for bowel and stomach preparation.'],
            ['icon' => 'Heart', 'title' => 'After-Care Guide', 'description' => 'Instructions for recovery, resumed diet, and post-procedure monitoring.'],
            ['icon' => 'BookOpen', 'title' => 'GI Health Library', 'description' => 'Information about digestive health and the utility of endoscopic procedures.']
        ],
        'faqs' => [
            ['question' => 'Is an endoscopy procedure painful?', 'answer' => 'Most procedures are performed under sedation to ensure complete patient comfort and relaxation.'],
            ['question' => 'How long do I need to fast before the procedure?', 'answer' => 'Typically 8-12 hours for upper GI, while lower GI requires specific bowel preparation.'],
            ['question' => 'Can I drive home after my endoscopy?', 'answer' => 'No, you must have a responsible adult drive you home as sedation effects take time to wear off.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Severe GI Bleeding', 'description' => 'Vomiting blood or passing severe bloody stools'],
            ['symptom' => 'Acute Abdominal Pain', 'description' => 'Sudden extreme pain requiring immediate investigation'],
            ['symptom' => 'Complete Blockage', 'description' => 'Inability to swallow or pass bowel movements'],
            ['symptom' => 'Biliary Crisis', 'description' => 'Severe jaundice or acute gallstone pain']
        ]
    ],
    'bronchoscopy' => [
        'name' => 'Bronchoscopy',
        'title' => 'Advanced Bronchoscopy Services',
        'subtitle' => 'Respiratory Care',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'Activity',
        'bg_image' => 'https://brandingpioneers.co.in/akropolis/Bronchoscopy-Breadcrumes.webp',
        'accent_color' => 'text-yellow-400',
        'conditions' => [
            'Chronic Cough Investigation', 'Lung Cancer Diagnosis', 'Lung Infections',
            'Airway Obstruction', 'Hemoptysis (Coughing Blood)', 'Lung Nodules',
            'Interstitial Lung Disease', 'Foreign Body Removal', 'Airway Stenosis', 'Tuberculosis'
        ],
        'services' => [
            ['name' => 'Flexible Bronchoscopy', 'description' => 'Minimally invasive diagnostic examination of airways (20-30 mins)', 'icon' => 'Activity'],
            ['name' => 'Rigid Bronchoscopy', 'description' => 'Therapeutic procedure for complex interventions and foreign body removal (30-60 mins)', 'icon' => 'Heart'],
            ['name' => 'Endobronchial Ultrasound', 'description' => 'Advanced imaging for precise diagnosis combining bronchoscopy with ultrasound (45-90 mins)', 'icon' => 'Eye'],
            ['name' => 'Therapeutic Bronchoscopy', 'description' => 'Treatment including laser therapy, stent placement, and airway clearance (30-120 mins)', 'icon' => 'Zap']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Bronchoscopy Suite', 'description' => 'State-of-the-art equipment with high-definition imaging and therapeutic capabilities'],
            ['icon' => 'Award', 'title' => 'Expert Pulmonologists', 'description' => 'Board-certified specialists with extensive experience in complex respiratory procedures'],
            ['icon' => 'Clock', 'title' => 'Same-Day Procedures', 'description' => 'Convenient scheduling with minimal waiting times and efficient patient care'],
            ['icon' => 'Shield', 'title' => 'Patient Safety First', 'description' => 'Comprehensive safety protocols and sedation monitoring for patient comfort']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Pre-Procedure Preparation', 'description' => 'Essential steps for a safe and successful respiratory examination.', 'features' => ['Fasting (8-12 hrs)', 'Medication Review', 'Preparation Support']],
            ['icon' => 'Activity', 'title' => 'During the Procedure', 'description' => 'Minimally invasive examination with continuous clinical monitoring.', 'features' => ['Local Anesthesia', 'Mild Sedation', 'Vital Monitoring']],
            ['icon' => 'HeartHandshake', 'title' => 'Post-Procedure Care', 'description' => 'Recovery-focused support and results review with specialists.', 'features' => ['Recovery Monitoring', 'Results Review', 'Follow-up Plan']]
        ],
        'statistics' => [
            ['number' => '5,000+', 'label' => 'Procedures Performed'],
            ['number' => '97%', 'label' => 'Diagnostic Accuracy'],
            ['number' => '24/7', 'label' => 'Emergency Availability'],
            ['number' => '<1 Hour', 'label' => 'Average Procedure Time']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Preparation Guide', 'description' => 'Detailed instructions for fasting and medication adjustments before the procedure.'],
            ['icon' => 'Heart', 'title' => 'Post-Procedure Care', 'description' => 'Guidelines for recovery, resuming normal activities, and monitoring.'],
            ['icon' => 'BookOpen', 'title' => 'Respiratory Health', 'description' => 'Information about common lung and airway conditions and their management.']
        ],
        'faqs' => [
            ['question' => 'How long does a bronchoscopy take?', 'answer' => 'Most diagnostic procedures take 20-30 minutes, while therapeutic ones may take longer.'],
            ['question' => 'Will I be awake during the procedure?', 'answer' => 'You will receive local anesthesia and mild sedation to ensure you are comfortable and relaxed.'],
            ['question' => 'When can I eat or drink after the procedure?', 'answer' => 'You should wait until the throat numbness subsides, which typically takes 1-2 hours.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Severe Breathlessness', 'description' => 'Sudden extreme difficulty breathing'],
            ['symptom' => 'Coughing Blood', 'description' => 'Acute coughing up of significant amounts of blood'],
            ['symptom' => 'Inhaled Foreign Body', 'description' => 'Sudden choking or persistent cough after inhalation'],
            ['symptom' => 'Airway Blockage', 'description' => 'Sudden stridor or inability to move air']
        ]
    ],
    'colonoscopy' => [
        'name' => 'Colonoscopy',
        'title' => 'Advanced Colonoscopy & GI Screening',
        'subtitle' => 'Preventive Care',
        'subtitle_color' => 'text-yellow-400',
        'icon' => 'Search',
        'bg_image' => 'https://brandingpioneers.co.in/akropolis/Colonoscopy-breadcrumbs.webp',
        'accent_color' => 'text-yellow-400',
        'conditions' => [
            'Colon Polyps', 'Colorectal Cancer', 'IBD',
            'Rectal Bleeding', 'Chronic Diarrhea', 'Abdominal Pain',
            'Iron Deficiency', 'Crohn\'s Disease', 'Ulcerative Colitis', 'Diverticular Disease'
        ],
        'services' => [
            ['name' => 'Screening Colonoscopy', 'description' => 'Preventive exam for early cancer and polyp detection', 'icon' => 'Search'],
            ['name' => 'Diagnostic Colonoscopy', 'description' => 'Investigation of bleeding, pain, or bowel changes', 'icon' => 'Eye'],
            ['name' => 'Polypectomy', 'description' => 'Removal of polyps found during the examination', 'icon' => 'Zap'],
            ['name' => 'Virtual Colonoscopy', 'description' => 'Non-invasive CT-based colon examination', 'icon' => 'Activity']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced Suite', 'description' => 'HD imaging and latest colonoscopy equipment'],
            ['icon' => 'Award', 'title' => 'Expert Team', 'description' => 'Board-certified gastroenterologists with specialized training'],
            ['icon' => 'Clock', 'title' => 'Same-Day Discussion', 'description' => 'Immediate review of findings with your specialist'],
            ['icon' => 'Shield', 'title' => 'Maximum Comfort', 'description' => 'Safe sedation options and comfort-focused protocols']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Preventive Focus', 'description' => 'Proactive screening to detect and prevent colorectal cancer.', 'features' => ['Polyp Removal', 'Early Detection']],
            ['icon' => 'Shield', 'title' => 'Sedation Safety', 'description' => 'Ensuring complete comfort and monitoring throughout.', 'features' => ['IV Sedation', 'Vital Monitoring']],
            ['icon' => 'Activity', 'title' => 'Precision Mapping', 'description' => 'Systematic examination of the entire colon surface.', 'features' => ['High-Def View', 'Complete Insertion']]
        ],
        'statistics' => [
            ['number' => '10,000+', 'label' => 'Procedures Performed'],
            ['number' => '99%', 'label' => 'Safety Record'],
            ['number' => '100%', 'label' => 'Detection Rate Focus'],
            ['number' => '10 Yrs', 'label' => 'Standard Screening Gap']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'Preparation Regimen', 'description' => 'Step-by-step bowel preparation instructions.'],
            ['icon' => 'Calendar', 'title' => 'Screening Guidelines', 'description' => 'Age and risk-based screening recommendations.'],
            ['icon' => 'Heart', 'title' => 'Recovery Info', 'description' => 'What to expect after your colonoscopy procedure.']
        ],
        'faqs' => [
            ['question' => 'Is bowel prep necessary?', 'answer' => 'Yes, a clean colon is vital for a thorough and accurate exam.'],
            ['question' => 'Will I be asleep?', 'answer' => 'You will be under sedation, feeling relaxed and comfortable.'],
            ['question' => 'How often do I need it?', 'answer' => 'Every 10 years for standard risk if findings are normal.']
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Rectal Bleeding', 'description' => 'Sudden or significant bleeding from the rectum'],
            ['symptom' => 'Acute Abdominal Pain', 'description' => 'Sudden extreme pain requiring immediate assessment'],
            ['symptom' => 'Obstructed Bowel', 'description' => 'Sudden inability to pass stool or gas']
        ]
    ],
    'emergency' => [
        'name' => 'Emergency',
        'title' => '24/7 Immediate Emergency & Trauma Care',
        'subtitle' => 'Emergency Excellence',
        'subtitle_color' => 'text-red-300',
        'icon' => 'Ambulance',
        'bg_image' => 'https://images.pexels.com/photos/263402/pexels-photo-263402.jpeg?auto=compress&cs=tinysrgb&w=1600',
        'accent_color' => 'text-red-600',
        'conditions' => [
            'Heart Attack & Chest Pain', 'Stroke & Paralysis', 'Severe Injuries & Trauma',
            'Breathing Difficulties', 'Severe Bleeding', 'Poisoning & Overdose',
            'Severe Burns', 'Fractures & Dislocations', 'Allergic Reactions', 'Loss of Consciousness'
        ],
        'services' => [
            ['name' => '24/7 Emergency Care', 'description' => 'Round-the-clock emergency medical services with triage', 'icon' => 'Ambulance'],
            ['name' => 'Trauma Care', 'description' => 'Advanced trauma management for accidents and injuries', 'icon' => 'Activity'],
            ['name' => 'Cardiac Emergency', 'description' => 'Immediate care for heart attacks and chest pain', 'icon' => 'Heart'],
            ['name' => 'Stroke Response', 'description' => 'Rapid stroke assessment with door-to-needle protocol', 'icon' => 'Zap']
        ],
        'features' => [
            ['icon' => 'Building2', 'title' => 'Advanced ER', 'description' => 'State-of-the-art facilities with latest life-saving equipment'],
            ['icon' => 'Award', 'title' => 'Expert Physicians', 'description' => 'Board-certified specialists trained in trauma medicine'],
            ['icon' => 'Clock', 'title' => '24/7 Availability', 'description' => 'Always open with full staff ready for any emergency'],
            ['icon' => 'Shield', 'title' => 'Quality Standards', 'description' => 'NABH accredited standards for critical care and safety']
        ],
        'approaches' => [
            ['icon' => 'Target', 'title' => 'Rapid Triage', 'description' => 'Immediate assessment and prioritization based on severity.', 'features' => ['Priority System', 'Immediate Assessment']],
            ['icon' => 'Ambulance', 'title' => 'Golden Hour', 'description' => 'Time-sensitive care focusing on the critical first hour.', 'features' => ['Quick Response', 'Stabilization']],
            ['icon' => 'Heart', 'title' => 'Life Support', 'description' => 'Advanced equipment and protocols for critical conditions.', 'features' => ['ACLS Protocol', 'Ventilator Support']]
        ],
        'statistics' => [
            ['number' => '20,000+', 'label' => 'Emergency Cases Annually'],
            ['number' => '<10min', 'label' => 'Average Response Time'],
            ['number' => '100%', 'label' => 'Availability - Always Open'],
            ['number' => '95%', 'label' => 'Survival Rate']
        ],
        'resources' => [
            ['icon' => 'FileText', 'title' => 'ER Visit Guide', 'description' => 'Recognizing true emergencies and when to seek care.'],
            ['icon' => 'Ambulance', 'title' => 'Calling Emergency', 'description' => 'Guide for providing critical info to responders.'],
            ['icon' => 'BookOpen', 'title' => 'First Aid Basics', 'description' => 'Essential techniques for immediate emergency response.']
        ],
        'faqs' => [
            ['question' => 'When to visit ER?', 'answer' => 'For life-threatening chest pain, stroke, or severe bleeding.'],
            ['question' => 'What to bring?', 'answer' => 'ID, insurance, meds list, and medical history if possible.'],
            ['question' => 'If I can\'t afford it?', 'answer' => 'Emergency treatment is provided regardless of ability to pay.'],
        ],
        'emergency_symptoms' => [
            ['symptom' => 'Chest Pain', 'description' => 'Severe pressure or squeezing in the center of the chest'],
            ['symptom' => 'Stroke Signs', 'description' => 'Face drooping, arm weakness, or speech difficulty'],
            ['symptom' => 'Severe Bleeding', 'description' => 'Uncontrolled bleeding that won\'t stop with pressure']
        ]
    ]
];

// Helper function to get icon SVG
function getIcon($name, $class = '') {
    global $iconMap;
    $icon = $iconMap[$name] ?? '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/></svg>';
    if ($class) {
        // Add class to the SVG
        $icon = str_replace('<svg ', '<svg class="'.$class.'" ', $icon);
    }
    return $icon;
}
?>