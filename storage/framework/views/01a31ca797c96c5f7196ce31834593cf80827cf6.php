<?php $__env->startSection('content'); ?>
<title>Download Your Monthly Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div style="margin-top:100px">

    <h3>Boattrips Information</h3>
<a href="getPDFcolombo" class="btn btn-success" >GET PDF</a>
<h2>Royal tours</h2>
    <table id="boattrips">

        <thead>
            <tr>
                <th>Boat ID</th>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $boat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $boats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($boats->boatid); ?></td>
                <td><?php echo e($boats->location); ?></td>
                <td><?php echo e($boats->start_date); ?></td>
                <td><?php echo e($boats->end_date); ?></td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table> 





<style type="text/css">

    #boattrips {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#cboattrips td, #boattrips th {
    border: 1px solid #ddd;
    padding: 8px;
}

#boattrips tr:nth-child(even){background-color: #BAE2F9;}

#boattrips tr:hover {background-color: #DCE6EC;}

#boattrips th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #0C82C5;
    color: white;

    /* #boattrips{ */
        /* border-collapse: collapse; */
        /* width:100%; */
        /* margin:0 auto; */
        /* border:2px solid; */
        /* background-color: #BCE2F8; */

    }

    </style>

</div>

<?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layouts.userprofileadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>