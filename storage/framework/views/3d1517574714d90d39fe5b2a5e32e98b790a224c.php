<?php $__env->startSection('content'); ?>
<div style="margin-top:100px;margin-left:-50px">

        <table class="table ">
                <tbody >
                 <tr class="table-info"><th class=>Boat ID</th><td><?php echo e($details->boatid); ?></td></tr>
                <tr><th>owner ID</th><td><?php echo e($details->ownerid); ?></td></tr>
                 <tr class="table-info"><th>owner name</th><td><?php echo e($owner->fname); ?> <?php echo e($owner->lname); ?></td></tr>
                 <tr><th>email</th><td><?php echo e($owner->email); ?></td></tr>
                 
                 <tr class="table-info"><th>Government Reg No</th><td><?php echo e($details->governmentregno); ?></td></tr>
                 <tr><th>Name</th><td><?php echo e($details->name); ?></td></tr>
                 <tr class="table-info"> <th>Boat type</th><td><?php echo e($details->boattype); ?></td></tr>
                 <tr><th>Location</th><td><?php echo e($details->location); ?></td></tr>
                 <tr class="table-info"><th>No of seats</th><td><?php echo e($details->noofseats); ?></td></tr>
                 <tr><th>Phone Number</th><td><?php echo e($details->phonenumber); ?></td></tr>
                 <tr class="table-info"><th>Insuered passengers</th><td><?php echo e($details->noofinsuredpassengers); ?></td></tr>
                 <tr><th>Insuarence company</th><td><?php echo e($details->insuarancecpmpanyname); ?></td></tr>
                 <tr class="table-info"><th>Insuarence ID</th><td><?php echo e($details->insuaranceregno); ?></td></tr>
                 <tr><th>Bank acc No</th><td><?php echo e($details->bankacountnumber); ?></td></tr>
                 <tr class="table-info"><th>Registered Date</th><td><?php echo e($details->created_at); ?></td></tr>
                </tbody>
               
              </table>
              <div class="card">
                  <div class="row">
                      <div class="col-md-3"><form action="/setconfirmation">
                            <input type="hidden" value=<?php echo e($details->boatid); ?> name="id">
                            <input type="submit" class="btn btn-primary" value="CONFIRM RESERVATION">
                            
                        </form></div>
                      <div class="col-md-2"><form action="">
                            <input type="hidden" value=<?php echo e($details->boatid); ?> name="id">
                            <input type="submit" class="btn btn-danger" value="Decline">
                            
                        </form> </div>
                  </div>
                    
                        
                </div>  
</div>

<?php $__env->stopSection(); ?>
<style>

    /* th{
        background:gainsboro;
    }
    td{
        background:palegreen;
    } */
</style>
<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>