<?php $__env->startSection('content'); ?>

<h1>boats</h1>
<div class="container" >
<?php if(count($boats) > 0): ?>
    <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row jumbotron text-center blue-grey lighten-5 ">
        <div class=" col-md-6">
            <h3><a href="/boats/<?php echo e($boats->boatid); ?>"><?php echo e($boats->boatname); ?></a></h3>
            <h6><?php echo e($boats->boatid); ?></h6>
            <small><?php echo e($boats->	registrationnumber); ?></small>

        </div>
        <div class="col-md-6">
            <button class="btn btn-info">RESERVE RIDE</button>
            <button class="btn btn-success">VIEw DETAILS</button>
            <button class="btn btn-danger">CONTACT US</button>
        </div>
    </div>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php else: ?>


<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>