<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top:100px;margin-left:-100px">
        <div class="card">
                <h6 class="card-header primary-color white-text">Start trips to receive bookings</h6>
                <div class="card-body">
                  <form action="/addtrip" method="post">
                    <?php echo csrf_field(); ?>
                   <div class="row">
                       <div class="col-md-12">
                           <?php if(Session::has('success')): ?>
                            <div class="alert alert-success"><?php echo e(session::get('success')); ?></div>
                           <?php elseif(Session::has('warning')): ?>
                            <div class="alert alert-danger"><?php echo e(session::get('warning')); ?></div>
                           <?php endif; ?> 
                        </div>
                        
                        <p style="color:red">If you are publishing a family boat ride fixed amount of seats(10) will be added for the reservation</p>
                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label for="">select the boat</label>
                                <div>
                                    <select name="selectboat" id="" class="form-control">
                                    <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($boats->boatid); ?>"><?php echo e($boats->name); ?></option>
                            
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php echo $errors->first('select_boat','<p class="alert alert-danger">:message</p>'); ?>

                                </div>

                            </div>

                            <div>

                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">select starting date</label>
                                    <div>
                                        <?php echo Form::date('start_date',null,['calss'=>'form-control','id'=>'date1']); ?>

                                        <?php echo $errors->first('start_date','<p class="alert alert-danger">:message</p>'); ?>

                                    </div>
    
                                </div>
    
                                <div>
    
                                </div>
                            </div>
                            

                            
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">select ending date</label>
                                        <div>
                                            <?php echo Form::date('end_date',null,['calss'=>'form-control','id'=>'date2']); ?>

                                            <?php echo $errors->first('end_date','<p class="alert alert-danger">:message</p>'); ?>

                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            
                        
                            
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">available seats</label>
                                        <div>
                                            
                                            
                                            <?php echo e(Form::text('availableseats','',array_merge(['class' => 'form-control']))); ?>

                                            <?php echo $errors->first('availableseats','<p class="alert alert-danger">:message</p>'); ?>

                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            
                            
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">select starting time</label>
                                        <div>
                                                <?php echo e(Form::text('startingtime','',array_merge(['class' => 'form-control']))); ?>

                                            <?php echo $errors->first('startingtime','<p class="alert alert-danger">:message</p>'); ?>

                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>

                            
                            
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">select location</label>
                                        <div>
                                               <select name="location" id="" class="form-control">
                                                   <option value="mirissa">mirissa</option>
                                                   <option value="colombo">colombo</option>
                                                   <option value="trincomalee">trincomalee</option>
                                               </select>
                                            <?php echo $errors->first('location','<p class="alert alert-danger">:message</p>'); ?>

                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            
                            

                            <div class="col-md-6 ">
                                <input type="submit" class="btn btn-primary btn-md" value="ADD TRIP TO THE CALENDER">
                            </div>
                   </div>
                </form>
                </div>
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        document.getElementById('date1').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
        document.getElementById('date2').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
    })


</script>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>