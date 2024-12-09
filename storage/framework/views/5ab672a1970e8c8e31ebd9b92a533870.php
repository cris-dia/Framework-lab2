

<?php $__env->startSection('title', 'Lista de sarcini'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-4">Lista de sarcini</h1>
    <div class="row g-3">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($task['title']); ?></h5>
                        <p class="card-text"><?php echo e($task['description']); ?></p>
                        <span
                            class="badge bg-<?php echo e(strtolower($task['priority']) == 'mare' ? 'danger' : (strtolower($task['priority']) == 'medie' ? 'warning text-dark' : 'success')); ?>">
                            <?php echo e($task['priority']); ?>

                        </span>
                        <a href="<?php echo e(route('tasks.show', $task['id'])); ?>" class="btn btn-primary btn-sm mt-2">Vezi detalii</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Herd\todoapp\resources\views/tasks/index.blade.php ENDPATH**/ ?>