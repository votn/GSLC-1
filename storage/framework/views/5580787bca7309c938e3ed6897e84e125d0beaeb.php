<?php $__env->startSection('title', 'legend'); ?>

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $postMap; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PM): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src=<?php echo e($PM->MapUrl); ?> alt="" style="width: 100%">
<div class="p-5">
    <h2 class="mb-2"><?php echo e($PM->MapName); ?></h2>

    <p class="fs-5"><?php echo e($PM->MapDesc); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 5\WEB PROGRAMMING\PROJECT\Gslc-1\resources\views/home.blade.php ENDPATH**/ ?>