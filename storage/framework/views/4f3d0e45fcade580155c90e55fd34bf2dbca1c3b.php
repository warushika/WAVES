<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>


<div class="row" style="margin-top:100px; " id="intro1" >
	<div class="col-md-1">
		<div>
			<p id="p"></p>
		</div>
	</div>
	<div class="col-md-7" style="padding-left:105px;padding-top:20px;">
			<form action="/invoice" method="post" style="margin-left:100px;margin-top:50px">
				<?php echo csrf_field(); ?>
			   <div class="row">
				   <div class="col-md-12">
					   <?php if(Session::has('success')): ?>
						<div class="alert alert-success"><?php echo e(session::get('success')); ?></div>
					   <?php elseif(Session::has('warning')): ?>
						<div class="alert alert-danger"><?php echo e(session::get('warning')); ?></div>
					   <?php endif; ?> 
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							
							<label for="" class="">First Name</label>
							<div>
							
								<input type="text" name="first_name" class="form-control" id="fname" >
								<p style="color:red" id="fname_error"></p>
								<?php echo $errors->first('first_name','<p class="alert alert-danger">:message</p>'); ?>

							</div>

						</div>

					</div>
					
					

						
						<div class="col-md-4">
								<div class="form-group">
									<label for="" class="">Last Name</label>
									<div>
										<input type="text" class="form-control" name="lname" id="lname">
										<p style="color:red" id="lname_error"></p>
										<?php echo $errors->first('last_name','<p class="alert alert-danger">:message</p>'); ?>

									</div>
	
								</div>
	
							</div>
						

						
						<div class="col-md-8">
								<div class="form-group" >
									<label for="" id="lseats" class="">Number Of Seats</label>
									<div>
										
										
										<input type="number" name="seats" class="form-control" id="seats">
										<?php echo $errors->first('seats','<p class="alert alert-danger">:message</p>'); ?>

										<p id="seats_error" style="color:red"></p>
									</div>
								</div>
						</div>
						
						
						
						<div class="col-md-8">
								<div class="form-group">
									<label for="" class="">National ID Card Number or Passport ID</label>
									<div>
										<input type="text" name="nic" class="form-control" id="nic">	
										<p style="color:red" id="nic_error"></p>
										<?php echo $errors->first('nic','<p class="alert alert-danger">:message</p>'); ?>

									</div>
	
								</div>
	
								
							</div>
						
						
						<div class="col-md-8">
								<div class="form-group">
									<label for="" class="">Telephone Number</label>
									<div>
										  <input type="text" class="form-control" name="telephone" id="tel">
										  <p style="color:red" id="tel_error"></p>
										<?php echo $errors->first('telephone','<p class="alert alert-danger">:message</p>'); ?>

									</div>
	
								</div>
	
								<div>
	
								</div>
							</div>
						

						
						<div class="col-md-8">
								<div class="form-group">
									<label for="" class=""	>email</label>
									<div>
										  <input type="email" class="form-control" name="email" id="email">
										  <p style="color:red" id="email_error"></p>
										<?php echo $errors->first('email','<p class="alert alert-danger">:message</p>'); ?>

									</div>
	
								</div>
	
								
							</div>
						

						
						
						
						<input type="hidden" value="<?php echo e($reservationdetails->ownerid); ?>" name="owner_id">
						<input type="hidden" value="<?php echo e($reservationdetails->start_date); ?>" name="start_date">
						<input type="hidden" value="<?php echo e($reservationdetails->boatid); ?>" name="boat_id">
						<input type="hidden" value="<?php echo e($reservationdetails->availableseats); ?>" name="seatsavailable" id="available_seats">
						<input type="hidden" value="<?php echo e($reservationdetails->reservationid); ?>" name="res_id">
						<input type="hidden" value="<?php echo e($boattype); ?>" name="type" id="type">
							<input type="hidden" value="<?php echo e($pricing->price); ?>" name="priceperhead" id="priceperhead">
						<input type="hidden" value="<?php echo e($pricing->discount); ?>" id="disc">
					
								   
						
						
			   </div>
					
	</div>
	<div class="col-md-3">
			<div class="card">

				
					<div class="card-body">
				  
					  <!-- Title -->
					<h3 style="background-color:black;color:white">Seats available:<?php echo e($reservationdetails->availableseats); ?></h3> 
					<h3>Price Per Head: $ <?php echo e($pricing->price); ?>.00</h3>
					  <p>Number Of Seats: <span id="numseats"></span> </p>
					  <p>Total : USD <span id="tot"></span></p>
					<p><b>Discounts:<?php echo e($pricing->discount); ?>%</b></p>
					  <p><b>Final payment: USD <span id="price"></span></b><p>
					 

						<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
								<i class="fa fa-credit-card"></i> Credit Card</a></li>
							
						</ul>

							
						<div class="form-group">
							<label for="username">Full name (on the card)</label>
							<input type="text" class="form-control" name="username" placeholder="" required="">
						</div> 
				  
						<div class="form-group">
							<label for="cardNumber">Card number</label>
							<div class="input-group">
								<input type="text" class="form-control" name="cardNumber" placeholder="">
								<div class="input-group-append">
									<span class="input-group-text text-muted">
										<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
										<i class="fab fa-cc-mastercard"></i> 
									</span>
								</div>
							</div>
						</div> 

						<div class="row">
							<div class="col-sm-8">
								<div class="form-group">
									<label><span class="hidden-xs">Expiration</span> </label>
									<div class="input-group">
										<input type="number" class="form-control" placeholder="MM" name="">
										<input type="number" class="form-control" placeholder="YY" name="">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
									<input type="number" class="form-control" required="">
								</div> <!-- form-group.// -->
							</div>
						</div>

						<div class="col-md-6 ">
							<input type="submit" class="btn btn-danger btn-md" value="CONFIRM RESERVATION" onClick="return empty()" id="check">
						</div>
					</div>
				  
				  </div>
				  <!-- Card -->
				  
						  
			</div>
			<!-- Card -->	
  
					
</div>
								
</form>								
							
					

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var type=$('#type').val();
	if(type=="family"){
		$('#seats').val('10');
		$('#seats').hide();
		$('#lseats').hide();
			$('#numseats').text('10');
			
		var discont=$('#disc').val();
		var priceperhead=$('#priceperhead').val();
			// alert('abcd');
		var availableseats=parseInt($('#available_seats').val(),10);
		//  alert(availableseats);
		 var seats=parseInt($('#seats').val(),10);
		var price=seats*priceperhead;
		
		var discountedprice=price*(discont/100);
		var tot=price-discountedprice;
		
		$("#price").text('$'+  tot);
			
	}
    $("#seats").focusout(function(){
		
		// alert('abcd');
		 var availableseats=parseInt($('#available_seats').val(),10);
		//  alert(availableseats);
		 var seats=parseInt($('#seats').val(),10);
		//  alert(seats)
		 var a=availableseats-seats;
		//  alert(a);
		
		if(a<"0" || seats=="0"){
			$('#seats_error').text("There is only " +" "+availableseats+" "+ "seats available for your reservation");
			$("#seats").css("background-color", "#FADBD8  ");
		}
	
	else{
		$("#seats").css("background-color", "white ");
		 $('#seats_error').text("");
		 var priceperhead=$('#priceperhead').val();
			var discont=$('#disc').val();
		 	var price=seats*priceperhead;
			 var discountedprice=price*(discont/100);
			 var finalprice= price-discountedprice;
			$("#price").text('$'+ finalprice );
			$('#numseats').text(seats);
			$('#tot').text(price);
			$("#seats").css("background-color", "#ABEBC6   ");
			$("#numseats").css("background-color", "#ABEBC6   ");
			$("#tot").css("background-color", "#ABEBC6 ");
			
		 }
		
    });

  $("#check").click(function(){
	var firstname = $('#fname').val(); 
	var lastname =$('#lname').val(); 
	var tel=$('#tel').val();
	var email=$('#email').val();
	var nic=$('#nic').val();
	var email_regex = '/^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/';
	
	
	var x=0;
	if (firstname.length == 0) {
	$('#fname_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#fname").focus();
	x=1;
	
}
if (firstname.length == 0) {
	$('#nic_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#nic").focus();
	x=1;
	
}

if (lastname.length == 0) {
	$('#lname_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#lname").focus();
	x=1;
	
}
if (tel.length == 0) {
	$('#tel_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#tel").focus();
	x=1;
	
}
if (email.length == 0) {
	$('#email_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#emai").focus();
	x=1;
	
}
var email=$("#email").val();
	var pattern_email= /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
  
if(pattern_email.test(email)){
	
	$("#email").css("background-color","#B8FAC6  ");
	$("#email_error").hide();
}
else{
	$("#email").css("background-color","#FCA2A2   ");
	$("#email_error").html("please enter a valid email address");
	$("#email_error").show();
	 error_email=true;
}
var tel=$("#tel").val();
var tellen=$("#tel").val().length;
var pattern=/^[a-zA-Z]+( [a-zA-Z]+)*$/;
var patternone=/^[a-zA-Z0-9]+( [a-zA-Z0-9]+)*$/;

if( tellen<9 || pattern.test(tel)){
	
	 $("#tel").css("background-color","#FCA2A2");
	$("#tel_error").html("please enter valid a telephone number");

	$("#telephone_error_message").show();
	x=1;
}
else{
$("#tel").css("background-color","#B8FAC6  ");
$("#tel_error").hide();
}

if(x==1){
	return false;
}
    });
   
});
</script>

<style>
.abc{
	
}
</style>
<!-- Bootstrap core JavaScript -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>