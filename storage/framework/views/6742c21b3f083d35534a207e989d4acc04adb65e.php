<?php $__env->startSection('title', 'legend'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row p-md-6">
    <?php $__currentLoopData = $postLegend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 p-3">
        <div class="card" style="width: 28rem;">
            <img src="<?php echo e($PL->LegendUrl); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($PL->LegendName); ?></h5>
                <p class="card-text"><?php echo e($PL->LegendDesc); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 5\WEB PROGRAMMING\PROJECT\Gslc-1\resources\views/legend.blade.php ENDPATH**/ ?>