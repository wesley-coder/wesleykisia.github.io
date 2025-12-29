<?php
// sections/hero.php
?>

<section
    id="home"
    class="relative pt-28 pb-24 overflow-hidden bg-cover bg-center"
    style="background-image: url('assets/images/hero-bg.jpg');"
>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Decorative Blurred Shapes -->
    <div class="absolute -top-24 -left-24 w-80 h-80 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl animate-pulse"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Text Content -->
            <div class="text-white">
                <h1 class="text-4xl sm:text-5xl font-bold leading-tight">
                    Wesley Davies Kisia
                </h1>

                <!-- Animated Role -->
                <h2 class="mt-4 text-xl sm:text-2xl font-semibold text-blue-400">
                    <span class="typed-text"></span>
                </h2>

                <p class="mt-6 text-base text-slate-200 leading-relaxed max-w-xl">
                    I design and build reliable, scalable web systems using PHP, MySQL,
                    and modern frontend tools. I specialize in eCommerce platforms,
                    management systems, and automation for real-world organizations.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-8 flex flex-wrap gap-4">
                    <a
                        href="#projects"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white
                               bg-blue-600 rounded-md hover:bg-blue-700 transition"
                    >
                        View Projects
                    </a>

                    <a
                        href="#contact"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold
                               text-white border border-white/30 rounded-md hover:bg-white/10 transition"
                    >
                        Contact Me
                    </a>
                </div>

                <!-- Meta Info -->
                <div class="mt-8 text-sm text-slate-300 flex flex-wrap items-center gap-2">
                    📍 Nairobi, Kenya &nbsp;•&nbsp; Available for freelance & full-time roles
                </div>

                <!-- Social Icons -->
                <div class="mt-6 flex space-x-4">
                    <a href="https://github.com/wesley-coder" target="_blank"
                       class="text-slate-300 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 .5C5.73.5.5 5.73.5 12c0 5.09 3.29 9.41 7.86 10.94.58.11.79-.25.79-.56 0-.28-.01-1.03-.02-2.02-3.2.7-3.88-1.54-3.88-1.54-.53-1.36-1.3-1.72-1.3-1.72-1.06-.73.08-.72.08-.72 1.18.08 1.8 1.21 1.8 1.21 1.04 1.78 2.73 1.26 3.4.97.11-.75.41-1.26.74-1.55-2.56-.29-5.25-1.28-5.25-5.72 0-1.26.45-2.29 1.2-3.09-.12-.3-.52-1.5.11-3.13 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 5.8 0c2.21-1.49 3.18-1.18 3.18-1.18.63 1.63.23 2.83.11 3.13.75.8 1.2 1.83 1.2 3.09 0 4.45-2.7 5.43-5.27 5.72.42.36.79 1.08.79 2.18 0 1.57-.01 2.83-.01 3.22 0 .31.21.68.8.56C20.71 21.41 24 17.09 24 12c0-6.27-5.23-11.5-12-11.5z"/>
                        </svg>
                    </a>

                    <a href="https://linkedin.com/" target="_blank"
                       class="text-slate-300 hover:text-white transition">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5C3.34 3.5 2 4.84 2 6.48c0 1.63 1.34 2.97 2.98 2.97s2.98-1.34 2.98-2.97c0-1.64-1.34-2.98-2.98-2.98zM2.4 21.5h5.18v-11H2.4v11zm7.56-11h4.96v1.5h.07c.69-1.3 2.38-2.67 4.88-2.67 5.22 0 6.18 3.43 6.18 7.88v8.29h-5.18v-7.35c0-1.75-.03-3.99-2.44-3.99-2.44 0-2.82 1.91-2.82 3.88v7.46h-5.18v-11z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="flex justify-center md:justify-end">
                <div class="relative group">
                    <img
                        src="assets/images/wes.jpg"
                        alt="Wesley Davies Kisia"
                        class="w-72 h-72 object-cover rounded-2xl shadow-xl
                               transition-transform duration-500 group-hover:-translate-y-2"
                    >
                    <div class="absolute -z-10 -bottom-4 -right-4 w-72 h-72 bg-blue-600/30 rounded-2xl"></div>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    new Typed('.typed-text', {
        strings: [
            "Full-Stack Web Developer",
            "IT Consultant",
            "PHP and MySQL Specialist",
            "Android and Flutter Developer"
        ],
        typeSpeed: 50,
        backSpeed: 25,
        loop: true
    });
</script>
