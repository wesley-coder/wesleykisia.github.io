<?php
// sections/projects.php
?>

<section
    id="projects"
    class="relative pt-24 pb-24 overflow-hidden bg-cover bg-center"
    style="background-image: url('assets/images/projects-bg.jpg');"
>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/60"></div>

    <!-- Animated Background Blobs -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute top-1/2 -right-40 w-96 h-96 bg-amber-400/20 rounded-full blur-3xl animate-pulse delay-300"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-20 text-white">
            <h2 class="text-4xl font-bold">Projects</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-slate-200">
                Carefully crafted systems and websites built with performance, scalability, and clean UI in mind.
            </p>
            <div class="mt-6 h-1 w-28 mx-auto rounded-full bg-gradient-to-r from-blue-600 to-amber-400"></div>
        </div>

        <!-- Core Project Types -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 justify-items-center">

            <?php
            $coreProjects = [
                [
                    'title' => 'eCommerce Platforms',
                    'color' => 'blue',
                    'tasks' => [
                        'Complete online stores with carts & order management',
                        'Secure payment integrations and user authentication'
                    ]
                ],
                [
                    'title' => 'Stand-Alone Systems',
                    'color' => 'amber',
                    'tasks' => [
                        'Requisition & workflow management systems',
                        'Approval flows, reporting & admin dashboards'
                    ]
                ],
                [
                    'title' => 'Freight & Logistics Websites',
                    'color' => 'blue',
                    'tasks' => [
                        'Logistics portals & shipment tracking',
                        'Client dashboards and responsive layouts'
                    ]
                ],
            ];

            foreach ($coreProjects as $project): ?>
                <div class="group w-full sm:w-80 p-7 rounded-2xl bg-white/20 backdrop-blur border border-white/30
                            shadow-lg transition-all duration-500
                            hover:-translate-y-3 hover:shadow-2xl hover:border-<?= $project['color']; ?>-500/50">

                    <div class="h-1 w-12 mb-4 rounded-full bg-<?= $project['color']; ?>-500 group-hover:w-20 transition-all duration-500"></div>

                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-<?= $project['color']; ?>-400 transition">
                        <?= $project['title']; ?>
                    </h3>

                    <ul class="list-disc list-inside text-slate-200 space-y-2">
                        <?php foreach ($project['tasks'] as $task): ?>
                            <li><?= $task; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>

        </div>

        <!-- Featured Projects -->
        <div class="mt-28">
            <h3 class="text-3xl font-bold text-center mb-14 text-white">
                Featured Projects
            </h3>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">

                <?php
                $featured = [
                    ['name'=>'Barmaks Networks','logo'=>'acl2.jpg','link'=>'https://barmaksnetworks.co.ke/','stack'=>'eCommerce Platform'],
                    ['name'=>'Dandelion RMS','logo'=>'dandelion.jpg','link'=>'https://darms.co.ke/','stack'=>'Requisition Management System'],
                    ['name'=>'Jeisa Logistics','logo'=>'jeisa.png','link'=>'http://www.jeisalogistics.co.ke/','stack'=>'Logistics Website'],
                    ['name'=>'Freelance Website','logo'=>'logo.jpeg','link'=>'#','stack'=>'Nursing Freelance Website'],
                    ['name'=>'Portfolio / Company Profiles','logo'=>'portfolio.png','link'=>'#','stack'=>'Business & Personal Branding'],
                ];

                foreach ($featured as $p): ?>
                    <a href="<?= $p['link']; ?>" target="_blank"
                       class="group relative bg-white/20 backdrop-blur border border-white/30 rounded-2xl p-6
                              shadow-md transition-all duration-500 hover:-translate-y-2 hover:shadow-xl">

                        <!-- Hover Glow -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-600/10 to-amber-400/10
                                    opacity-0 group-hover:opacity-100 transition"></div>

                        <img src="assets/icons/<?= $p['logo']; ?>" alt="<?= $p['name']; ?>"
                             class="relative w-16 h-16 mx-auto mb-4 object-contain">

                        <h4 class="relative font-semibold text-white text-center group-hover:text-blue-400 transition">
                            <?= $p['name']; ?>
                        </h4>

                        <p class="relative mt-2 text-sm text-slate-200 text-center">
                            <?= $p['stack']; ?>
                        </p>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>
