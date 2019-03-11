<?php $__env->startSection('content'); ?>

    
    
    <div class="row" style="margin-top:100px;margin-left:-100px">
    <div class="col-md-12" >
            <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Number Of Seats</th>
                            <th>Status</th>
                            
                            <th>Delete Boat</th>
                            
                        </tr>
                    </thead>
                   
                
                                           
            <?php $__currentLoopData = $boats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tbody>
                    <tr class="">
                             <td ><?php echo e($boats->name); ?></td>
                            <td><?php echo e($boats->location); ?></td>
                            <td><?php echo e($boats->noofinsuredpassengers); ?></td>
                            <td><?php echo e($boats->status); ?></td>
                           
                            <td>
                            <?php echo Form::open(['action'=>['BoatsController@destroy',$boats->boatid ],'method'=>'post','class'=>'delete']); ?>

                                    <?php echo e(Form::hidden('_method','DELETE')); ?>

                                    <?php echo e(Form::submit('Remove Boat',['class'=>'btn btn-danger'])); ?>

                               <?php echo Form::close(); ?>

                            </td>

                        </tr>
            </tbody>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    
</div>

<?php $__env->stopSection(); ?>



<style>
    .counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}
</style>

<script>

    
</script>
<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>