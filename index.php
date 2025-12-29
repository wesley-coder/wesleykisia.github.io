<?php include 'includes/header.php'; ?>

<!-- Page Background Wrapper -->
<section class="relative min-h-screen">

    <!-- Background Image -->
    <div class="absolute inset-0 bg-cover bg-center"
         style="background-image: url('assets/images/bg.jpg');">
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900/80 via-blue-900/75 to-slate-900/85"></div>

    <!-- Page Content -->
    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php include 'hero.php'; ?>
        <?php include 'about.php'; ?>
        <?php include 'skills.php'; ?>
        <?php include 'experience.php'; ?>
        <?php include 'projects.php'; ?>
        <?php include 'education.php'; ?>
        <?php include 'contact.php'; ?>

    </main>
</section>

<?php include 'includes/footer.php'; ?>
