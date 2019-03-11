<?php $__env->startSection('content'); ?>
<!-- Card -->
<div class="card card-cascade wider reverse col-md-8" style="margin-top:100px;margin-left:-100px">

        <!-- Card image -->
        
      
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
      
          <!-- Title -->
          <h4 class="card-title"><strong>TOTAL CASH FLOW</strong></h4>
          <!-- Subtitle -->
          <h6 class="font-weight-bold indigo-text py-2">Peoples Bank Mirissa</h6>
          <!-- Text -->
        <h4 class="card-title"><strong>USD <?php echo e($totalcashflow); ?></strong></h4>
      
        </div>
      
      </div>
      <!-- Card -->

      <!-- Card -->
<div class="card card-cascade wider reverse col-md-8" style="margin-top:10px;margin-left:-100px">

        <!-- Card image -->
        
      
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
      
          <!-- Title -->
          <h4 class="card-title"><strong>REVENUE GAINED</strong></h4>
          <!-- Subtitle -->
          <h6 class="font-weight-bold indigo-text py-2">Total cash gained from the reservations</h6>
          <!-- Text -->
        <h4 class="card-title"><strong>USD <?php echo e($totalrevenuegained); ?></strong></h4>
      
        </div>
      
      </div>
      <!-- Card -->

      <!-- Card -->
<div class="card card-cascade wider reverse col-md-8" style="margin-top:10px;margin-left:-100px">

        <!-- Card image -->
        
      
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
      
          <!-- Title -->
          <h4 class="card-title"><strong>PAID AMOUNT</strong></h4>
          <!-- Subtitle -->
          <h6 class="font-weight-bold indigo-text py-2">Total Amount paid to the boat owners</h6>
          <!-- Text -->
        <h4 class="card-title"><strong>USD <?php echo e($totalcashpaid); ?></strong></h4>
      
        </div>
      
      </div>
      <!-- Card -->


      <?php
          
      

      ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>