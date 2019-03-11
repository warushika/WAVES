<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php $__env->startSection('content'); ?>

<h1>Arrange your transport</h1>
<div class="container" >
<?php if(count($transport) > 0): ?>
    <?php $__currentLoopData = $transport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row jumbotron text-center blue-grey lighten-5 ">
        <div class="col-md-4">
        <img src="storage/profile_image/<?php echo e($transport->profile_image); ?>" alt="" class="img-size">
        </div>
        <div class=" col-md-6" class="divdetails" style="margin-top:50px">
            <h3><a href="/boats/<?php echo e($transport->transportid); ?>"><?php echo e($transport->title); ?></a></h3>
            
            <h5>Contact:<span class="fas fa-phone"></span><?php echo e($transport->telephone); ?></h5>
            <small>Reg No:<?php echo e($transport->registrationnumber); ?></small>

        </div>
        <div class="col-md-2" class="padding" style="margin-top:50px">
            <button class="btn btn-info">RESERVE RIDE</button>
            
        </div>
    </div>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php else: ?>


<?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<style>
    .img-size{
        height:200px;
        width:300px;
    }
    .divdetails{
        margin-top:200px;
    }
</style>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>