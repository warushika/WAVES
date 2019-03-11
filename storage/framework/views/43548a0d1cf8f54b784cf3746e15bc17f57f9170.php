<?php $__env->startSection('content'); ?>
<div>
<h3>EDIT POST</h3>
    <div class="container" style="margin-top:100px">

     <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8 ">
            <h3 class="font4">BOAT REGISTRATION</h3>
                
            <?php echo Form::open(['action'=> ['BoatsController@update',$boats->boatid],'method'=>'POST' ,'class'=>' ']); ?>

            <div class="form-group">
                
                
                 <?php echo e(FORM::hidden('email','',['class'=>'form-control','placeholder'=>'email'])); ?>

                 <br>
                 <?php echo e(FORM::hidden('password','',['class'=>'form-control','placeholder'=>'password'])); ?>

                <br>
               <label for="">Title of the boat</label>
                <?php echo e(FORM::text('title',$boats->boatname,['class'=>'form-control',])); ?>

                <br>
                <label for="">Number of seats Available</label>
                <?php echo e(FORM::text('availableseats',$boats->availableseats,['class'=>'form-control',])); ?>

                <br>
                <label for="">Price per head</label>
                <?php echo e(FORM::text('priceperhead',$boats->priceperhead,['class'=>'form-control',])); ?>

                <br>
                <label for="">goverbment registration number</label>
                <?php echo e(FORM::text('registrationnumber',$boats->registrationnumber,['class'=>'form-control',])); ?>

                <br>
                <label for="">write a message to your customers</label>
                <?php echo e(FORM::textarea('body',$boats->body,['class'=>'form-control',])); ?>

                <?php echo e(Form::hidden('_method','PUT')); ?>

                <br>
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