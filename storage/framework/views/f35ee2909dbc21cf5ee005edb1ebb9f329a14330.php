<?php $__env->startSection('content'); ?>



<div style="margin-top:100px;margin-left:-150px">
  <div style="background-color:#D1F7E3;height:40px">
    
  <p style="">TOTAL CASH TRANSFERED :  USD <?php echo e($total); ?></p>
  </div>
<br>
  <form action="/search_history">
    <div class="row">
      <div class="col-md-3">
          <input type="date" class="form-control" name="start_date"></div> 
    
      <div class="col-md-3">
          <input type="date" class="form-control" name="end_date">
        </div>
    
    <div class="col-md-3">
        <input type="submit" class=" btn-success" value="search" >
    </div>
  </div>
  </form>
  <br>
    <table class="table">
           <thead class="black white-text">
             <tr>

               <th scope="col">Payment ID</th>
               <th scope="col">Reservation ID</th>
               <th scope="col">Transfered Amount</th>
               <th scope="col">Paid Date</th>
              
               
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                 <?php $__currentLoopData = $payement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <tr>
                         <th><?php echo e($payement->payementid); ?></th>
                         <th><?php echo e($payement->res_id); ?></th>
                         <th>$ <?php echo e($payement->payement_amount); ?></th>
                         <th><?php echo e($payement->updated_at); ?></th>
                   

                      
                         </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                
           </tbody>
          
         </table>
         
        
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>