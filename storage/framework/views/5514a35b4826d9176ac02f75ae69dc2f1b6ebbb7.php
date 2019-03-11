<?php $__env->startSection('content'); ?>



<div style="margin-top:100px;margin-left:-150px">

    <table class="table">
      <p>commission for the waves have been deducted from the original cash flow</p>
           <thead class="black white-text">
             <tr>
               <th scope="col">Payment ID</th>
               <th scope="col">Reservation ID</th>
               <th scope="col">payement Transfer Status</th>
               <th scope="col">Receivable Cash</th>
               
               <th>Trip ended date & time</th>
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                  <?php $__currentLoopData = $payement_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payement_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                         <th ><?php echo e($payement_details->payementid); ?></th>
                         <th ><?php echo e($payement_details->res_id); ?></th>
                         <th ><?php echo e($payement_details->status); ?></th>
                         <th>$ <?php echo e($payement_details->payement_amount); ?></th>
                         
                         <th><?php echo e($payement_details->created_at); ?></th>
                       <th><form action="/payement_history"><input type="hidden" value="<?php echo e($payement_details->payementid); ?>" name="payid">
                    <input type="submit" class="btn btn-outline-primary btn-sm" value="TRANSFER THE MONEY">
                    </form></th>
                         
                   

                      
                         </tr>
                      
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </tbody>
          
         </table>
         
        
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>