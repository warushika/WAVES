<?php $__env->startSection('content'); ?>
<div style="margin-top:100px;margin-left:-50px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Boat ID</th>
               <th scope="col">Location</th>
               <th scope="col">Boat type</th>
               <th scope="col">view more details</th>
               <th>confirm registration</th>
              
               
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                 <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                         <th><?php echo e($boats->boatid); ?></th>
                         <th><?php echo e($boats->location); ?></th>
                         <th> <?php echo e($boats->boattype); ?></th>
                         <th>
                            <form action="/moredetailsboats">
                                <input type="hidden" value=<?php echo e($boats->boatid); ?> name="id">
                                <input type="hidden" value=<?php echo e($boats->ownerid); ?> name="owner">
                                <input type="submit" class="btn btn-outline-danger btn-sm" value="view more details">
                            </form>
                        </th>
                        <th>
                            <form action="/setconfirmation">
                                <input type="hidden" value=<?php echo e($boats->boatid); ?> name="id">
                                <input type="submit" class="btn btn-outline-success btn-sm" value="confirm registration">
                            </form>
                        </th>
                   

                      
                         </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                
           </tbody>
          
         </table>
         

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>