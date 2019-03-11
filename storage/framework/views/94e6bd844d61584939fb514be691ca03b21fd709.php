<?php $__env->startSection('content'); ?>



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
        <?php echo $__env->yieldContent('contentprofiles'); ?>
     </div>
   </div>

</div>



<style>
    body {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    background:#354545;
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
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>