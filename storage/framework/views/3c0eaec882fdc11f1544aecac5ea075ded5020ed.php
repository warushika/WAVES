<?php $__env->startSection('content'); ?>
<div>
<h3>PLEASE FILL THE FOLLOWING DETAILS</h3>
    <div class="container" style="margin-top:100px">

     <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8 ">
            <h3 class="font4">TRANSPORT VEHICLE REGISTRATION</h3>
                
            <?php echo Form::open(['action'=> 'TransportController@store','method'=>'POST','enctype'=>'multipart/form-data']); ?>

            <div class="form-group">
                
      
               
                <?php echo e(FORM::text('title','',['class'=>'form-control','placeholder'=>'title to display'])); ?>

                <br>
           
                <?php echo e(FORM::text('availableseats','',['class'=>'form-control','placeholder'=>'No of seats available'])); ?>

                <br>
                
                <?php echo e(FORM::text('priceperday','',['class'=>'form-control','placeholder'=>'price per head'])); ?>

                <br>
                
                <?php echo e(FORM::text('registrationnumber','',['class'=>'form-control','placeholder'=>'government registration number'])); ?>

                <br>
                
               
                <?php echo e(FORM::textarea('body','',['class'=>'form-control','placeholder'=>'write a message to your customers'])); ?>

                <br>
                <?php echo e(FORM::textarea('telephone','',['class'=>'form-control','placeholder'=>'telephone'])); ?>

                <br>

                <div class="form-group">
                    <label for="">CHOOSE COVER PHOTO FOR YOUR PROFILE</label>
                    <br>
                    <?php echo e(FORM::file('cover_image')); ?>

                </div>
                <div class="form-group">
                    <label for="">CHOOSE PROFILE PHOTO FOR YOUR PROFILE</label>
                    <br>
                    <?php echo e(FORM::file('profile_image')); ?>

                </div>
                <div class="container">
                        <?php echo e(FORM::submit('submit',['class'=>'btn btn-primary btn-lg'])); ?>

                        <?php echo e(FORM::Reset('reset',['class'=>'btn btn-danger btn-lg'])); ?>

                </div>
               
                <?php echo Form::close(); ?>

            </div>
            </div>
            <div class="col-md-2">

            </div>
             
    </div>   
   
    </div>
</div>


<div>
    <!-- Material form register -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>