<?php
// sections/skills.php
?>
<section
    id="skills"
    class="relative py-24 bg-cover bg-center overflow-hidden"
    style="background-image: url('assets/images/skills-bg.jpg');"
>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/60"></div>

    <!-- Soft Accent Blobs -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-yellow-400/20 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <header class="text-center mb-16 text-white">
            <h2 class="text-3xl font-bold">Skills</h2>
            <p class="mt-4 max-w-2xl mx-auto text-slate-200">
                Technologies and professional strengths I bring to every project.
            </p>
        </header>

        <!-- Skills Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">

            <?php
            $skills = [
                ['name' => 'PHP', 'icon' => 'php.svg'],
                ['name' => 'MySQL', 'icon' => 'mysql.svg'],
                ['name' => 'JavaScript', 'icon' => 'javascript.svg'],
                ['name' => 'Tailwind CSS', 'icon' => 'tailwind.svg'],
                ['name' => 'Android Development', 'icon' => 'android.png'],
                ['name' => 'APIs / Payment APIs', 'icon' => 'api.svg'],
                ['name' => 'Git', 'icon' => 'git.svg'],
                ['name' => 'Networking', 'icon' => 'networking.svg'],
                ['name' => 'Flutter', 'icon' => 'flutter.svg'],
                ['name' => 'Agile', 'icon' => 'agile.svg'],
            ];

            foreach ($skills as $skill): ?>
                <div class="flex flex-col items-center justify-center bg-white/20 backdrop-blur border border-white/30 rounded-xl p-6
                            hover:shadow-lg hover:scale-105 transition text-center">
                    <img
                        src="assets/icons/<?= $skill['icon']; ?>"
                        alt="<?= $skill['name']; ?> logo"
                        class="w-12 h-12 mb-4 object-contain"
                    >

                    <span class="text-sm font-medium text-white">
                        <?= $skill['name']; ?>
                    </span>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
