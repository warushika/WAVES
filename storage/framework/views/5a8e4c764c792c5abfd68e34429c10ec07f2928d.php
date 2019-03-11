<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Waves whales and dolphing watching reservation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <meta charset="utf-8">
   
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
        background: 
    }
    </style>
    

</head>






<body  background="img/ww.jpeg">
    <div>
        
<div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/"><h6 class="font3 custom-header text-primary"  style="font-size:40px">WAVES</h6></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
           
           
            
            </ul>
           

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>

             </div>
        </nav>
    </div>
</div>
    
    
    <?php echo $calendar->script(); ?>

    <div style="margin-top:100px;margin-left:50px">
            <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-primary ">
                                <div class="panel-heading" style="color:white;background-color:black">
                                   <h5> Choose a date from the following to start the reservation.
                                    Boat trips may not be available in certain days. Sorry for the inconvenience!</h5>
                                </div>
                
                                <div class="panel-body text-white" style="background-color:white;opacity:0.8;color:white">
                                    <?php echo $calendar->calendar(); ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4"style="background-color:black;opacity:0.8;height:400px">
                                <div class="">
                                        <?php if(Session::has('success')): ?>
                                         <div class="alert alert-success"><?php echo e(session::get('success')); ?></div>
                                        <?php elseif(Session::has('warning')): ?>
                                         <div class="alert alert-danger"><?php echo e(session::get('warning')); ?></div>
                                        <?php endif; ?> 
                                     </div>
                           <form action="/changloc" method="post">
                            <?php echo csrf_field(); ?>
                            <label class="text-white">Select location</label>
                                <select name="location" id="" class="form-control">
                                    <option value="all">ALL</option>
                                    <option value="mirissa">Mirissa</option>
                                    <option value="colombo">Colombo</option>
                                    <option value="trincomalee">Trincomalee</option>
                                    
                                </select>
                                
						<div class="form-group">
							
							<label for="seats" id="laseats" class="text-white">Number of seats</label>
							<div>
                                <h5 id="error" style="color:white ;background-color:red"></h5>
								<input type="text" name="seats" class="form-control" id="seats">
								<?php echo $errors->first('seats','<p class="alert alert-danger">:message</p>'); ?>

							</div>

                        </div>
                        <div class="form-group">
                                
                                <label for="boat type" class="text-white">Boat type</label>
                                
                                <div>
                                
                                        <select name="btype" id="select" class="form-control">
                                                <option value="Normal">Normal Boat Ride</option>
                                                <option value="family">Family Boat Ride</option>
                                                <option value="luxury">Luxury Boat Ride</option>
                                                
                                                
                                            </select>
                                            
                                    <?php echo $errors->first('btype','<p class="alert alert-danger">:message</p>'); ?>

                                </div>
    
                            </div>

				
                                  
                           
                                    <input type="submit" class="btn btn-outline-warning" value="check for available trips" onClick="return empty()" id="check">
                           </form>
                           <h5 id="note" style="color:white ;background-color:red"><b></b></h5> 
                        </div>
                        
                    </div>
                  
                </div>
    </div>


  
    <script>
        $(document).ready(function(){
    
   
  
   $('#select').change(function(){
      var type=$('#select').val();
      if(type=='family'){
          $('#note').text('If you are choosing a family boat you will have to reserve the whole boat of 10 seats')
         
        //   $("#seats").attr('disabled','disabled');
          $("#seats").val('1');
          $('#seats').hide();
          $('#laseats').hide();
      }
      
   });
   $("#check").click(function(){
        var x;
        x = $("#seats").val();
        if (x == "" || x=="0") {
            $('#error').text('Please enter the required number of seats');
            $("#seats").css("background-color", "#FADBD8  ");
        return false;
    };
    
    });
   

	
});
   
    </script>


</body>






