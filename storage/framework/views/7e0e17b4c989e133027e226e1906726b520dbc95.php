
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
       
         
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="row">
   <div class="col-md-4" >
    <div class="wrapper">
        <aside class="main_sidebar">
            <ul style="margin-top:100px">
                <li><i class="fa fa-arrows"></i><a href="#">arrows</a></li>
                <li><i class="fa fa-battery-2"></i><a href="#">battery</a></li>
                <li class="active"><i class="fa fa-bell"></i><a href="#">bell</a></li>
                <li><i class="fa fa-bicycle"></i><a href="#">bicycle</a></li>
                <li><i class="fa fa-circle"></i><a href="#">circle</a></li>
                <li><i class="fa fa-crosshairs"></i><a href="#">crosshairs</a></li>
                <li><i class="fa fa-deaf"></i><a href="#">deaf</a></li>
                <li><i class="fa fa-desktop"></i><a href="#">desktop</a></li>
                <li><i class="fa fa-dot-circle-o"></i><a href="#">dot</a></li>
                <li><i class="fa fa-folder"></i><a href="#">folder</a></li>
            </ul>
        </aside>
        
    </div>
    
   </div>

   <div class="col-md-8">
     <div>
        <?php echo $__env->yieldContent('content'); ?>
     </div>
   </div>

       
            
        <?php echo $__env->make('include.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        
      
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

<style>
    body {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
   
}
.main_sidebar {
    min-height:100vh;
    position:fixed;
    top:0;
    left:0;
    width:350px;
    transition: all 300ms cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: left, width;
    box-shadow: inset -1px 0 10px rgba(0, 0, 0, 0.4);
    background: #293749;
}
.main_sidebar:after {
    content: '';
    background-color: #253238;
    position: absolute;
    top: 0;
    z-index: -1;
    height: 100%;
    width: 58px;
}
.main_sidebar ul {
    list-style:none;
    padding-left:58px;
}
.main_sidebar ul li {
    padding:10px;
}
.main_sidebar ul li a {
    color:#fff;
    display:block;
}
.main_sidebar ul li i {
    float:left;
    color:grey;
    margin-left:-58px;
    font-size:24px;
    padding-left:7px;
}
.main_sidebar ul li:hover {
    background:#167696;
}
.main_sidebar ul li a:hover {
    color:#fff;
    text-decoration:none;
}
.main_sidebar ul li:hover i {
    color:#fff;
}
.main_sidebar ul li.active {
    background:#0f4698;
}
.main_sidebar ul li.active i {
    color:#fff;
}
.main_sidebar ul li.active:hover {
    background:#167696;
}
.main_sidebar ul li.active:hover i {
    color:#fff;
}

.main {
    float:right;
    color:#fff;
    display:block;
    width:100%;
    background:red;
    min-height:100vh;
}





</style>
</html>
