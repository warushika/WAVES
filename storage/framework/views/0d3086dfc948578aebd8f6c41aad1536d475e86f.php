
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Waves whales and dolphing watching reservation</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Monoton|Ultra" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Monoton|Satisfy|Ultra" rel="stylesheet">
    <style>
    body{
        overflow-x: hidden;
        
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        
        <?php echo $__env->make('include.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       
            
        <?php echo $__env->make('include.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        
        <?php echo $__env->yieldContent('content'); ?>
        <div style="margin-bottom:0px">
        
        
              
        
        </div>
       
    </div>
    

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
