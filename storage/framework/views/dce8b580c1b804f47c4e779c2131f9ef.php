<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'To-Do App'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <header class="bg-primary text-white py-3">
        <div class="container">
            <nav class="d-flex justify-content-between">
                <a href="<?php echo e(route('home')); ?>" class="text-white text-decoration-none fw-bold">Acasă</a>
                <a href="<?php echo e(route('about')); ?>" class="text-white text-decoration-none fw-bold">Despre noi</a>
                <a href="<?php echo e(route('tasks.index')); ?>" class="text-white text-decoration-none fw-bold">Sarcini</a>
            </nav>
        </div>
    </header>
    <main class="py-5">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; <?php echo e(date('Y')); ?> To-Do App. Toate drepturile rezervate.</p>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\User\Herd\todoapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>