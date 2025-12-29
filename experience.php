<?php
// sections/experience.php
?>
<section
    id="experience"
    class="relative pt-24 pb-20 bg-cover bg-center overflow-hidden"
    style="background-image: url('assets/images/experience-bg.jpg');"
>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/60"></div>

    <!-- Accent Blobs -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400/20 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-14 text-white">
            <h2 class="text-3xl font-bold">Work Experience</h2>
            <p class="mt-4 max-w-2xl mx-auto text-slate-200">
                Over the years, I’ve contributed to projects across multiple industries,
                building scalable systems and automating processes.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            <?php
            $experiences = [
                [
                    'company' => 'Langdale Care Homes',
                    'role' => 'Web & Framer Developer',
                    'location' => 'Nairobi, Kenya & UK',
                    'period' => 'Oct 2025 – Dec 2025',
                    'tasks' => [
                        'Developed and maintained Framer websites',
                        'Designed Empathika Care App activity flows',
                        'Managed TalentLMS compliance'
                    ]
                ],
                [
                    'company' => 'ICEA Lion',
                    'role' => 'Financial Advisor',
                    'location' => 'Nairobi, Kenya',
                    'period' => 'Jan 2025 – Aug 2025',
                    'tasks' => [
                        'Financial planning & investments',
                        'Portfolio monitoring',
                        'Regulatory compliance'
                    ]
                ],
                [
                    'company' => 'Kenya Power (KPLC)',
                    'role' => 'IT Intern',
                    'location' => 'Kisumu, Kenya',
                    'period' => 'Jan 2023 – Apr 2023',
                    'tasks' => [
                        'System administration & SAP',
                        'Website maintenance',
                        'Fiber optic & technical support'
                    ]
                ],
            ];

            foreach ($experiences as $exp): ?>
                <div class="bg-white/20 backdrop-blur border border-white/30 rounded-xl p-6
                            hover:shadow-lg hover:scale-105 transition text-white">
                    <h3 class="text-xl font-semibold mb-1"><?= $exp['company']; ?></h3>
                    <p class="text-blue-400 font-medium"><?= $exp['role']; ?></p>
                    <p class="text-sm text-slate-200 mb-4"><?= $exp['location']; ?> · <?= $exp['period']; ?></p>
                    <ul class="list-disc list-inside space-y-2 text-slate-200">
                        <?php foreach ($exp['tasks'] as $task): ?>
                            <li><?= $task; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
