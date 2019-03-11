<?php $__env->startSection('content'); ?>

    
    <div class="row" style="margin-top:100px;margin-left:-100px">
    <div class="col-md-12" >
            <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Number Of Seats</th>
                            <th>Status</th>
                            <th>Boat Type</th>
                            <th>Details</th>
                            
                        </tr>
                    </thead>

            <!-- data retreiving to the table--> 
            <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tbody>
                    <tr class="">
                            <td><?php echo e($boats->boatid); ?></td>
                            <td><?php echo e($boats->name); ?></td>
                            <td><?php echo e($boats->location); ?></td>
                            <td><?php echo e($boats->noofinsuredpassengers); ?></td>
                            <td><?php echo e($boats->status); ?></td>
                            <td><?php echo e($boats->boattype); ?></td>
                            <td>
                            <a href="/boats/<?php echo e($boats->boatid); ?>/edit" class="btn btn-primary">EDIT DETAILS</a>
                            </td>
                            

                        </tr>
            </tbody>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>