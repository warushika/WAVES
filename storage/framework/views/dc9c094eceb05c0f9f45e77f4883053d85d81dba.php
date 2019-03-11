<?php $__env->startSection('content'); ?>
<h1><?php echo e($boats->boatname); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>