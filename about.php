<?php
// sections/about.php
?>

<section
    id="about"
    class="relative py-24 bg-cover bg-center overflow-hidden"
    style="background-image: url('assets/images/about-bg.jpg');"
>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/65"></div>

    <!-- Soft Accent Blobs -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white">
                About Me
            </h2>
            <p class="mt-4 text-slate-300 max-w-2xl mx-auto">
                I'm a versatile full-stack web developer and freelance consultant with 3+ years of experience,
                specializing in PHP-based systems and real-world digital solutions.
            </p>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

            <!-- Narrative -->
            <div class="text-slate-200 leading-relaxed">
                <h3 class="text-xl font-semibold text-white mb-4">
                    What I Do
                </h3>

                <p class="mb-4">
                    I design and build scalable web systems that solve real operational problems.
                    My work ranges from eCommerce platforms and portfolio/company profiles
                    to corporate websites and automated management systems.
                </p>

                <p>
                    I focus heavily on performance, maintainability, and user experience — ensuring
                    that systems are not just functional, but easy to use and easy to scale.
                </p>
            </div>

            <!-- Highlights Card -->
            <div class="bg-white/10 backdrop-blur border border-white/20 rounded-xl p-8">
                <h3 class="text-xl font-semibold text-white mb-6">
                    Key Highlights
                </h3>

                <ul class="space-y-4 text-slate-200">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-400 font-semibold">✓</span>
                        <span>3+ years building PHP & MySQL systems</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-400 font-semibold">✓</span>
                        <span>Experience across eCommerce & corporate solutions</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-400 font-semibold">✓</span>
                        <span>Strong focus on automation & system efficiency</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-400 font-semibold">✓</span>
                        <span>Comfortable working with clients and technical teams</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>
