<?php $__env->startSection('content'); ?>
<div style="margin-top:150px;margin-left:-50px">
        <table class="table">
                <thead class="black white-text">
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th>ID</th>
                   
                  </tr>
                </thead>
                <tbody>
                     
                       <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                              <tr>
                                 
                              <th ><?php echo e($user->fname); ?></th>
                              <th ><?php echo e($user->lname); ?></th>
                              <th><?php echo e($user->email); ?></th>
                              <th><?php echo e($user->id); ?></th>
                              
                              
                            
                             
                             
                             
     
                           
                              </tr>
                             
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </tbody>
               
              </table>      
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>