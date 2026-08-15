<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale() ?? 'en')); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token() ?? ''); ?>">

    <title><?php echo e($companyName ?? config('company.name', 'NovaCore Technologies')); ?> | Next-Gen Enterprise Software Engineering</title>
    <meta name="description" content="NovaCore Technologies engineers resilient digital platforms, cloud architecture, and intelligent software systems for global enterprises.">
    <meta name="keywords" content="software engineering, custom software, enterprise apps, Laravel development, cloud infrastructure, AI solutions">

    <!-- Open Graph / Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e($companyName ?? config('company.name', 'NovaCore Technologies')); ?> | Next-Gen Software Systems">
    <meta property="og:description" content="Engineering high-scale cloud platforms, custom enterprise software, and AI systems.">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2306B6D4'><path d='M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'/></svg>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom CSS Design System -->
    <link rel="stylesheet" href="<?php echo e(asset('css/landing.css')); ?>">
</head>
<body>
    <!-- Ambient Background Lighting Orbs -->
    <div class="bg-ambient-orbs" aria-hidden="true">
        <div class="orb-1"></div>
        <div class="orb-2"></div>
        <div class="orb-3"></div>
    </div>

    <!-- Header Navigation -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Main Landing Content -->
    <main id="main-content">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Interactive JS -->
    <script src="<?php echo e(asset('js/landing.js')); ?>" defer></script>
</body>
</html>
<?php /**PATH C:\Users\chami\OneDrive\Desktop\New folder\resources\views/layouts/app.blade.php ENDPATH**/ ?>