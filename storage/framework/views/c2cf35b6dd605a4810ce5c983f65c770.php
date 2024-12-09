

<?php $__env->startSection('title', 'Despre noi'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center">
        <h1 class="display-5">Despre noi</h1>
        <p class="lead mt-3">To-Do App este o aplicație pentru echipe care doresc să-și organizeze mai bine sarcinile.</p>
    </div>

    <div class="mt-4">
        <h2 class="h5">Funcționalități principale:</h2>
        <ul class="list-group mt-3">
            <li class="list-group-item">Crearea și gestionarea sarcinilor</li>
            <li class="list-group-item">Stabilirea priorităților</li>
            <li class="list-group-item">Monitorizarea progresului</li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Herd\todoapp\resources\views/about.blade.php ENDPATH**/ ?>