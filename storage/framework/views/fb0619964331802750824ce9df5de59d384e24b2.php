<?php $__env->startSection('content'); ?>

<div>
       
</div>
<div style="margin-top:100px;margin-left:-150px">
<div>
              <?php echo $__env->make('include.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
       <table class="table">
              <thead class="black white-text">
                <tr>
                  <th scope="col">Boat Name</th>
                  <th scope="col">Available Seats</th>
                  <th scope="col">Reserved Seats</th>
                  <th scope="col">Trip Date</th>
                  <th scope="col">Location</th>
                  
                  <th scope="col"></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
              <!-- data reteiving from the table -->
                     <?php $__currentLoopData = $ongoing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ongoing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <th ><?php echo e($ongoing->boatname); ?></th>
                            <td><?php echo e($ongoing->availableseats); ?></td>
                            <td><?php echo e($ongoing->reservedseats); ?></td>
                            <td><?php echo e($ongoing->start_date); ?></td>
                            <td><?php echo e($ongoing->location); ?></td>
                            <td><form action="/res_details"><input type="hidden" name="resid" value="<?php echo e($ongoing->reservationid); ?>">
                                   <input type="submit" class="btn btn-outline-primary btn-sm" value=" VIEW RESERVATION DETAILS"></form></td>
                            <td><a href="" class="btn btn-danger btn-sm">End Trip</a></td>
                            </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            
           
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>