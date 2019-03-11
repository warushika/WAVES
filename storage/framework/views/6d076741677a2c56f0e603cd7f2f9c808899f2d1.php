<?php $__env->startSection('content'); ?>

<h1>boats</h1>
<div class="container" >
<?php if(count($hotel) > 0): ?>
    <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row jumbotron text-center blue-grey lighten-5 ">
         <div class=" col-md-6">
            <h3><a href="/hotel/<?php echo e($hotel->id); ?>"><?php echo e($hotel->hotel_name); ?></a></h3>
            <h6><?php echo e($hotel->registration_no); ?></h6>
            <small><?php echo e($hotel->hotel_name); ?></small>

        </div> 
        <div class="col-md-6">
            <button class="btn btn-info">RESERVE RIDE</button>
            <button class="btn btn-success">VIEW DETAILS</button>
            <button class="btn btn-danger">CONTACT US</button>
        </div>
    </div>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php else: ?>


<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>