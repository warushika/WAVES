<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="js/formvalidation.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.12/css/mdb.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  
  
  <div>
    <h3>PLEASE FILL THE FOLLOWING DETAILS</h3>
        <div class="container" style="margin-top:100px">

        <div class="row">
           
            <div class="col-md-10 ">
            <!-- Material form register -->
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign up</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
        <form class="text-center" style="color: #757575;"  method="POST" action="/boatedit">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                    <div class="col">
                        <!-- Boat Name -->
                        <div class="md-form">
                            <p class="left">Name of the boat</p>
                            <input type="text" id="FirstName" class="form-control" name="fname" placeholder="<?php echo e($boats->name); ?>" value="<?php echo e($boats->name); ?>">
                        <input type="hidden" name="id" value="<?php echo e($boats->boatid); ?>">
                        </div>
                    </div>
                    <div class="col">
                    
                        <div class="md-form">
                            <p class="left">Government Registration number</p>
                            <input type="text" id="Regno" class="form-control" name="regno" placeholder="<?php echo e($boats->governmentregno); ?>"  value="<?php echo e($boats->governmentregno); ?>">
                           
                        </div>

                    </div>
                </div>

                
                <select class="mdb-select md-form form-control" name="btype">
                    <option value="" disabled selected>Choose your boat type</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>

                
                <select class="mdb-select md-form form-control" name="location">
                    <option value="" disabled selected>Choose your location</option>
                    <option value="mirissa">mirissa</option>
                    <option value="trincomalee">Trincomalee</option>
                    <option value="colombo">colombo</option>
                </select>
            
                
                <!-- number of insured passengers-->
                <div class="md-form">
                    <p class="left">No of seats</p>
                    <input type="text" id="noofseats" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="noofseats" placeholder="<?php echo e($boats->noofseats); ?>" value="<?php echo e($boats->noofseats); ?>">
                    
                    
                </div>
                
                
                


                <!-- Phone number -->
                <div class="md-form">
                    <p class="left">Phone number</p>
                    <input type="text" id="Phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="tp" placeholder="<?php echo e($boats->phonenumber); ?>" value="<?php echo e($boats->phonenumber); ?>">
                    
                </div>

                <!-- number of insured passengers-->
                <div class="md-form">
                    <p class="left">No of insured passengers</p>
                    <input type="text" id="noofinsuredpasengers" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="noofinsuredpassengers" placeholder="<?php echo e($boats->noofinsuredpassengers); ?>" value="<?php echo e($boats->noofinsuredpassengers); ?>">
                    
                    
                </div>
                
                <div class="md-form">
                    <p  class="left">Insuarance company name</p>
                    <input type="text" id="insuarancecompany" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="insuarancecompany" placeholder="<?php echo e($boats->insuarancecpmpanyname); ?>" value="<?php echo e($boats->insuarancecpmpanyname); ?>">
                    
                    
                </div>

                <div class="md-form">
                    <p  class="left">Insuarance registration number</p>
                    <input type="text" id="insuaranceregno" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="insuaranceregno" placeholder="<?php echo e($boats->insuaranceregno); ?>" value="<?php echo e($boats->insuaranceregno); ?>">
                </div>
                

                <div class="md-form">
                    <p  class="left">Bank account number</p>
                    <input type="text" id="bankaccno" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="bankaccno" placeholder="<?php echo e($boats->bankacountnumber); ?>" value="<?php echo e($boats->bankacountnumber); ?>">
                </div>

                <div class="md-form">
                    <p class="left">name of the bank</p>
                <input type="text" id="bankname" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="bankname" placeholder="<?php echo e($boats->Nameofthebank); ?>" value="<?php echo e($boats->Nameofthebank); ?>">
                    
                    
                </div>

                <!-- Sign up button -->
            <input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">

                <!-- Social register -->
                

                <hr>

                

            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form register -->
            </div>
                <div class="col-md-2">
                </div>
                
        </div>   
    
        </div>
    </div>


    <div>
 
     <?php $__env->stopSection(); ?>
        <script src="js/formvalidation.js"></script>
        <script>


        </script>

        <style>
         .left{
             text-align: left;
         }
        </style>
<?php echo $__env->make('layouts.userprofileboat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>