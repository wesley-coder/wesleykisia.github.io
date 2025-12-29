<?php
// sections/education.php
?>
<section id="education" class="relative pt-24 pb-24 overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
        
        <div class="absolute inset-0 bg-black/40"></div> <!-- Dark overlay -->
    </div>

    <!-- Decorative Blobs / Accent Shapes -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-400/20 rounded-full blur-3xl animate-pulse delay-300"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-20 text-white">
            <h2 class="text-4xl font-bold">Education & Experience</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg">
                Academic background and hands-on experience that shape my professional journey.
            </p>
            <div class="mt-6 h-1 w-28 mx-auto rounded-full bg-gradient-to-r from-blue-600 to-amber-400"></div>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">

            <?php
            $cards = [
                [
                    'title' => 'Bachelor of Science in IT',
                    'subtitle' => 'Technical University of Mombasa',
                    'period' => '2019 – 2023',
                    'color' => 'blue-600',
                    'items' => [
                        'Focused on software development and system administration.',
                        'Built multiple full-stack applications and internal systems.'
                    ]
                ],
                [
                    'title' => 'Networking & Systems Experience',
                    'subtitle' => 'Practical / Hands-on Experience',
                    'period' => '2017 – Present',
                    'color' => 'amber-400',
                    'items' => [
                        'LAN setup, intranet configuration, and system troubleshooting.',
                        'Server maintenance and basic virtualization.',
                        'Network reliability and performance support.'
                    ]
                ],
                [
                    'title' => 'Technical Skills',
                    'subtitle' => 'Experience-Driven Expertise',
                    'period' => '',
                    'color' => 'blue-600/amber-400',
                    'items' => [
                        'PHP & MySQL (CRUD, authentication, role-based systems)',
                        'Tailwind CSS & modern JavaScript',
                        'API integrations (REST, third-party services, M-Pesa)',
                        'System automation & backend logic',
                        'Git version control & deployments',
                        'Basic networking & server configuration'
                    ]
                ]
            ];

            foreach ($cards as $card): ?>
                <div class="w-full sm:w-80 p-6 bg-white/20 backdrop-blur border border-white/30 rounded-2xl shadow-lg
                            hover:shadow-2xl hover:-translate-y-2 transition flex flex-col relative overflow-hidden">

                    <div class="absolute top-0 left-0 h-1 w-full rounded-t-xl bg-gradient-to-r
                                <?= $card['color'] === 'blue-600/amber-400' ? 'from-blue-600 to-amber-400' : 'bg-'.$card['color']; ?>"></div>

                    <h3 class="text-xl font-semibold text-white mt-4 mb-1"><?= $card['title']; ?></h3>
                    <p class="text-blue-200 font-medium mb-1"><?= $card['subtitle']; ?></p>
                    <?php if ($card['period']): ?>
                        <span class="text-sm text-amber-300 font-medium mb-3 block"><?= $card['period']; ?></span>
                    <?php endif; ?>

                    <ul class="list-disc list-inside text-white/90 space-y-1">
                        <?php foreach ($card['items'] as $item): ?>
                            <li><?= $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
