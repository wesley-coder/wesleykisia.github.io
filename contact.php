<?php
// sections/contact.php
?>
<section id="contact" class="relative pt-24 pb-24 overflow-hidden">

    <!-- Background Image -->
    <div class="absolute inset-0">
                <div class="absolute inset-0 bg-black/40"></div> <!-- Dark overlay -->
    </div>

    <!-- Decorative Blobs -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-amber-400/20 rounded-full blur-3xl animate-pulse delay-300"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Title -->
        <div class="text-center mb-12 text-white">
            <h2 class="text-4xl font-bold">Contact Me</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg">
                Feel free to reach out through any of the channels below.
            </p>
        </div>

        <!-- Contact Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">

            <?php
            $contacts = [
                ['title' => 'Email', 'icon' => 'M2 4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2 0v.01L12 13 20 4.01V4H4zm16 2.99L12 15 4 6.99V20h16V6.99z', 'href' => 'mailto:wesleykisia78@gmail.com', 'color' => 'text-blue-400'],
                ['title' => 'WhatsApp', 'icon' => 'M20.52 3.48A11.906 11.906 0 0012 0C5.373 0 0 5.373 0 12c0 2.122.552 4.09 1.514 5.816L0 24l6.374-1.514A11.906 11.906 0 0012 24c6.627 0 12-5.373 12-12 0-3.2-1.242-6.227-3.48-8.52zm-8.52 17c-2.065 0-4.003-.633-5.615-1.692l-.401-.25-3.772.946.998-3.648-.259-.414A9.938 9.938 0 012 12c0-5.523 4.477-10 10-10s10 4.477 10 10-4.477 10-10 10zm5.07-7.534c-.196-.098-1.161-.573-1.34-.64-.18-.066-.311-.098-.442.097-.13.196-.504.64-.618.77-.113.13-.226.147-.423.049-.196-.098-.825-.303-1.57-.968-.58-.516-.972-1.152-1.087-1.347-.113-.196-.012-.302.086-.4.089-.088.196-.226.294-.339.098-.113.13-.196.196-.327.065-.13.033-.245-.016-.343-.049-.098-.442-1.064-.606-1.46-.159-.382-.32-.33-.442-.337-.113-.007-.245-.008-.377-.008s-.343.049-.523.245c-.18.196-.688.674-.688 1.64s.705 1.899.803 2.033c.098.13 1.38 2.105 3.342 2.948.467.201.831.321 1.113.411.467.146.893.126 1.23.077.375-.052 1.161-.474 1.327-.933.163-.456.163-.849.114-.933-.049-.084-.18-.13-.377-.226z', 'href' => 'https://wa.me/254707413929', 'color' => 'text-green-400'],
                ['title' => 'LinkedIn', 'icon' => 'M4.98 3.5C3.34 3.5 2 4.84 2 6.48c0 1.63 1.34 2.97 2.98 2.97s2.98-1.34 2.98-2.97c0-1.64-1.34-2.98-2.98-2.98zM2.4 21.5h5.18v-11H2.4v11zm7.56-11h4.96v1.5h.07c.69-1.3 2.38-2.67 4.88-2.67 5.22 0 6.18 3.43 6.18 7.88v8.29h-5.18v-7.35c0-1.75-.03-3.99-2.44-3.99-2.44 0-2.82 1.91-2.82 3.88v7.46h-5.18v-11z', 'href' => 'https://www.linkedin.com/in/wesley-kisia-8a68481a3/', 'color' => 'text-blue-500'],
                ['title' => 'Phone', 'icon' => 'M6.62 10.79a15.054 15.054 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21c1.21.49 2.53.76 3.88.76a1 1 0 011 1v3.5a1 1 0 01-1 1C10.27 21.5 2.5 13.73 2.5 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.35.27 2.67.76 3.88.1.18.07.39-.21 1.11l-2.2 2.2z', 'href' => 'tel:+2547074139292', 'color' => 'text-blue-400']
            ];

            foreach ($contacts as $contact): ?>
                <a href="<?= $contact['href']; ?>" target="_blank"
                   class="w-full sm:w-64 p-6 bg-white/20 backdrop-blur border border-white/30 rounded-2xl shadow-lg
                          hover:shadow-2xl hover:-translate-y-2 transition flex flex-col items-center text-center text-white">

                    <div class="mb-4 <?= $contact['color']; ?>">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="<?= $contact['icon']; ?>"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold"><?= $contact['title']; ?></h3>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</section>
