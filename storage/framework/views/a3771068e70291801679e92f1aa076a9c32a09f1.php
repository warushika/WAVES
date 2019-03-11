<?php $__env->startSection('content'); ?>

<div style="margin-top:100px;margin-left:-100px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Payment ID</th>
               <th scope="col">Pricing Plan</th>
               <th scope="col">Price</th>
              
              
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                
                  <?php $__currentLoopData = $pricing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                         <tr>
                            
                         <th ><?php echo e($price->pricing_id); ?></th>
                         <th ><?php echo e($price->pricing_plan); ?></th>
                         
                         <th >
                                
                            
                        <form action="/update_pricing">
                         <div class="row">
                             <div class="col-md-5">
                                <input type="text" value="<?php echo e($price->price); ?>" placeholder="<?php echo e($price->price); ?>" class="form-control" name="price">
                             </div>
                             <div class="col-md-5">
                                  
                                <input type="hidden" value="<?php echo e($price->pricing_id); ?> " name="id"> 
                                <input type="submit" value="update pricing plan" class="btn btn-success btn-md">
                             </div>
                               
                            </div>   
                            
                     
                        </form>
                        </th>
                        
                        
                        

                      
                         </tr>
                        
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
              
           </tbody>
          
         </table>


         <table class="table">
                <thead class="black white-text">
                  <tr>
                    <th scope="col">Payement ID</th>
                    <th scope="col">Pricing Plan</th>
                    <th scope="col">Discounts</th>
                   
                   
                    <th></th>
                    
                    <th scope="col"></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                     
                       <?php $__currentLoopData = $pricing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                              <tr>
                                 
                              <th ><?php echo e($price->pricing_id); ?></th>
                              <th ><?php echo e($price->pricing_plan); ?></th>
                              
                              <th >
                                     
                                 
                             <form action="/update_discounts">
                              <div class="row">
                                  <div class="col-md-5">
                                     <input type="text" value="<?php echo e($price->discount); ?>" placeholder="<?php echo e($price->discount); ?>" class="form-control" name="discount">
                                  </div>
                                  <div class="col-md-5">
                                       
                                     <input type="hidden" value="<?php echo e($price->pricing_id); ?> " name="id"> 
                                     <input type="submit" value="update discounts" class="btn btn-info btn-md">
                                  </div>
                                    
                                 </div>   
                                 
                          
                             </form>
                             </th>
                             
                             
                             
     
                           
                              </tr>
                             
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                   
                </tbody>
               
              </table>
              
         
        
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>