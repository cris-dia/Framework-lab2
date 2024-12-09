

<?php $__env->startSection('title', 'Pagina principală'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <h1 class="display-4">Bine ați venit la To-Do App!</h1>
        <p class="lead">Gestionați sarcinile echipei rapid și eficient.</p>
    </div>

    <div class="mt-5">
        <h2 class="h4">Ultima sarcină creată</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($lastTask['title']); ?></h5>
                <p class="card-text"><?php echo e($lastTask['description']); ?></p>
                <span class="badge bg-warning text-dark">Prioritate medie</span>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Herd\todoapp\resources\views/home.blade.php ENDPATH**/ ?>