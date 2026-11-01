<?php
require_once __DIR__ . '/../includes/data.php';
require_once __DIR__ . '/../includes/schema.php';

$page_title = 'Akropolis Hospital in the News | Press & Media';
$page_description = 'Explore press coverage and media mentions of Akropolis Super Speciality Hospital, including its launch and healthcare presence in Gurugram.';
$canonical_url = '/press-media/';
$schema_blocks = [
    schemaBreadcrumb([
        ['name' => 'Home', 'url' => '/'],
        ['name' => 'Press & Media', 'url' => '/press-media/']
    ])
];

include __DIR__ . '/../includes/head.php';
?>

<div class="bg-[#D66C43] text-white py-2 px-4 text-center sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-center space-x-2">
        <?php echo getIcon('Phone', 'h-4 w-4'); ?>
        <span class="font-semibold text-sm md:text-base">
            Emergency 24×7:
            <a href="tel:<?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>" class="hover:underline">
                <?php echo htmlspecialchars(CONTACT_INFO['emergency'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </span>
    </div>
</div>

<?php include __DIR__ . '/../includes/header-v2.php'; ?>

<main>
    <section class="relative overflow-hidden bg-gradient-to-r from-[#17649B] via-[#328CCB] to-[#2a7bb5] text-white">
        <div class="absolute inset-0 opacity-10" aria-hidden="true">
            <div class="absolute -top-24 -right-16 w-96 h-96 rounded-full border-[40px] border-white"></div>
            <div class="absolute -bottom-40 -left-20 w-96 h-96 rounded-full border-[40px] border-white"></div>
        </div>
        <div class="relative container mx-auto px-4 py-20 lg:py-28">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 mb-6 text-yellow-300 font-semibold">
                    <?php echo getIcon('Newspaper', 'h-5 w-5'); ?>
                    <span>Newsroom</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                    Akropolis Super Speciality Hospital in the News
                </h1>
                <p class="text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    Explore announcements and media coverage featuring Akropolis Super Speciality Hospital
                    and its presence in Gurugram’s healthcare community.
                </p>
            </div>
        </div>
    </section>

    <section class="py-14 lg:py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-5xl text-center">
            <span class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5">
                <?php echo getIcon('Megaphone', 'h-4 w-4'); ?> Media & Announcements
            </span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">Media Coverage & Hospital Announcements</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                This page brings together selected third-party publications and healthcare industry
                coverage mentioning Akropolis Super Speciality Hospital. Each item links to its
                original publisher so visitors can read the source material and understand its context.
            </p>
        </div>
    </section>

    <section class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center mb-12">
                <span class="inline-flex items-center gap-2 bg-[#D66C43]/10 text-[#D66C43] px-4 py-2 rounded-full text-sm font-medium mb-5">
                    <?php echo getIcon('Newspaper', 'h-4 w-4'); ?> Featured Coverage
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Akropolis in the Media</h2>
                <p class="text-gray-600 leading-relaxed">Read the original articles and announcements published by the outlets below.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8 max-w-6xl mx-auto">

                <article class="bg-white border border-gray-200 rounded-2xl p-7 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <span class="text-xl font-bold text-gray-900">ANI News</span>
                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-2 rounded-full">Press release</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-snug mb-4">Akropolis Super Speciality Hospital: Grand Opening Marks a New Era in Healthcare</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 flex-grow">Announcement covering the grand opening of Akropolis Super Speciality Hospital in Gurugram.</p>
                    <a href="https://www.aninews.in/news/business/business/akropolis-super-speciality-hospital-grand-opening-marks-a-new-era-in-healthcare20231023182225/" target="_blank" rel="nofollow noopener noreferrer" class="inline-flex items-center gap-2 text-[#D66C43] font-semibold hover:underline">
                        Read on ANI News <?php echo getIcon('ExternalLink', 'h-4 w-4'); ?>
                    </a>
                </article>

                <article class="bg-white border border-gray-200 rounded-2xl p-7 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <span class="text-xl font-bold text-gray-900">ThePrint</span>
                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-2 rounded-full">ANI press release</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-snug mb-4">Akropolis Super Speciality Hospital: Grand Opening Marks a New Era in Healthcare</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 flex-grow">The grand opening announcement carried in ThePrint’s ANI Press Releases section.</p>
                    <a href="https://theprint.in/ani-press-releases/akropolis-super-speciality-hospital-grand-opening-marks-a-new-era-in-healthcare/1815783/" target="_blank" rel="nofollow noopener noreferrer" class="inline-flex items-center gap-2 text-[#D66C43] font-semibold hover:underline">
                        Read on ThePrint <?php echo getIcon('ExternalLink', 'h-4 w-4'); ?>
                    </a>
                </article>

                <article class="bg-white border border-gray-200 rounded-2xl p-7 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <span class="text-xl font-bold text-gray-900">Business Standard</span>
                        <span class="text-xs font-semibold text-[#328CCB] bg-[#328CCB]/10 px-3 py-2 rounded-full">ANI press release</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-snug mb-4">Akropolis Super Speciality Hospital: Grand Opening Marks a New Era in Healthcare</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 flex-grow">
                        Partner/press-release content in Business Standard’s Press Releases ANI section.
                        The publisher states that the content was provided by PNN and that no Business
                        Standard journalist was involved in its creation.
                    </p>
                    <a href="https://www.business-standard.com/content/press-releases-ani/akropolis-super-speciality-hospital-grand-opening-marks-a-new-era-in-healthcare-123102300839_1.html" target="_blank" rel="nofollow noopener noreferrer" class="inline-flex items-center gap-2 text-[#D66C43] font-semibold hover:underline">
                        Read on Business Standard <?php echo getIcon('ExternalLink', 'h-4 w-4'); ?>
                    </a>
                </article>

                <article class="bg-white border border-gray-200 rounded-2xl p-7 shadow-sm hover:shadow-lg transition-shadow duration-300 flex flex-col">
                    <div class="flex items-center justify-between gap-3 mb-5">
                        <span class="text-xl font-bold text-gray-900">Hospital Management</span>
                        <span class="text-xs font-semibold text-green-700 bg-green-50 px-3 py-2 rounded-full">Industry coverage</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 leading-snug mb-4">Akropolis Super Speciality Hospital opens in Haryana, India</h3>
                    <p class="text-gray-600 leading-relaxed mb-6 flex-grow">Healthcare industry coverage announcing the opening of Akropolis Super Speciality Hospital.</p>
                    <a href="https://www.hospitalmanagement.net/news/akropolis-super-speciality-hospital/" target="_blank" rel="nofollow noopener noreferrer" class="inline-flex items-center gap-2 text-[#D66C43] font-semibold hover:underline">
                        Read on Hospital Management <?php echo getIcon('ExternalLink', 'h-4 w-4'); ?>
                    </a>
                </article>
            </div>

            <p class="max-w-6xl mx-auto mt-8 text-sm text-gray-500 leading-relaxed">
                Editorial transparency: The ANI News, ThePrint and Business Standard features share the same hospital opening announcement distributed through press-release channels. They are listed as separate publication placements and should not be interpreted as independent editorial endorsements.
            </p>
        </div>
    </section>

    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-white rounded-3xl border border-gray-100 shadow-sm p-8 lg:p-12 text-center">
                <span class="inline-flex items-center gap-2 bg-[#328CCB]/10 text-[#328CCB] px-4 py-2 rounded-full text-sm font-medium mb-5">
                    <?php echo getIcon('Building2', 'h-4 w-4'); ?> About the Hospital
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-5">About Akropolis Super Speciality Hospital</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Akropolis Super Speciality Hospital is an NABH-accredited hospital located in
                    Sector 69, Gurugram, Haryana. The hospital provides specialist medical care,
                    diagnostic services and emergency services.
                </p>
                <a href="/about" class="inline-flex items-center justify-center gap-2 bg-[#328CCB] hover:bg-[#267bb6] text-white px-7 py-3 rounded-xl font-semibold transition-colors">
                    Learn More About Akropolis <?php echo getIcon('ArrowRight', 'h-4 w-4'); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="rounded-3xl bg-gradient-to-r from-[#17649B] to-[#328CCB] text-white p-8 lg:p-12 text-center">
                <div class="inline-flex items-center justify-center bg-white/15 rounded-2xl p-4 mb-5">
                    <?php echo getIcon('Mail', 'h-8 w-8'); ?>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">Media & Press Enquiries</h2>
                <p class="text-blue-100 text-lg leading-relaxed max-w-2xl mx-auto mb-8">
                    For media-related enquiries, information about the hospital or interview requests,
                    please contact the Akropolis team.
                </p>
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white text-[#17649B] hover:bg-blue-50 px-8 py-4 rounded-xl font-bold transition-colors">
                    Contact Akropolis <?php echo getIcon('ArrowRight', 'h-5 w-5'); ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<?php include __DIR__ . '/../includes/scripts.php'; ?>
