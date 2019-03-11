<?php $__env->startSection('content'); ?>
<div style="margin-top:100px;margin-left:-100px">

        <table class="table">
               <thead class="black white-text">
                 <tr>
                   <th scope="col">Reservation ID</th>
                   <th>Boat Id</th>
                   <th>Start Date</th>
                   <th>	End Date</th>
                   <th>Location</th>
                   <th>Starting Time</th>
                   <th>Boat name</th>
                   <th>	Owner ID</th>
                   <th>Status</th>
                  
                  
                   <th></th>
                   
                   <th scope="col"></th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>
                    
                      <?php $__currentLoopData = $trip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trips): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                             <tr>
                                
                             <th ><?php echo e($trips->reservationid); ?></th>
                             <th ><?php echo e($trips->boatid); ?></th>
                             <th ><?php echo e($trips->start_date); ?></th>
                             <th ><?php echo e($trips->end_date); ?></th>
                             <th ><?php echo e($trips->location); ?></th>
                             <th ><?php echo e($trips->startingtime); ?></th>
                             <th ><?php echo e($trips->boatname); ?></th>
                             <th ><?php echo e($trips->ownerid); ?></th>
                             <th ><?php echo e($trips->status); ?></th>
                             
                            
                           
                            
                            
                            
    
                          
                             </tr>
                            
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e($trip->links()); ?>

                   
               </tbody>
              
             </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>