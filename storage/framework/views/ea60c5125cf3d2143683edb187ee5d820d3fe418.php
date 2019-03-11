<?php $__env->startSection('content'); ?>

<div style="margin-top:100px;margin-left:-100px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Payement Id</th>
               <th scope="col">acc No</th>
               <th scope="col">status</th>
               <th>payed amount</th>
               <th>Revenue</th>
               <th>payed Date</th>
               <th>Trip Ended Date</th>
              
              
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                
                  <?php $__currentLoopData = $payements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                         <tr>
                            
                         <th ><?php echo e($payement->payementid); ?></th>
                         <th ><?php echo e($payement->acc_no); ?></th>
                         <th><?php echo e($payement->status); ?></th>
                         <th><?php echo e($payement->payement_amount); ?></th>
                         <th><?php echo e($payement->revenue); ?></th>
                         <th><?php echo e($payement->updated_at); ?></th>
                         <th><?php echo e($payement->Enddate); ?></th>
                         
                       
                        
                        
                        

                      
                         </tr>
                        
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php echo e($payements->links()); ?>

                <div class="row">
                    <form action="/searchpayement" class="form-group">
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="stdate">
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="enddate">
                        </div>
                        <div class="col-md-4">
                           <input type="submit" value="search" class="btn-info">
                        </div>
                    </form>

                </div>
           </tbody>
          
         </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>