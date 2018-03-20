<!DOCTYPE html>
<?php
require_once('config.php');
   if(isset($_SESSION['user_id'])){
      header("location:dashboard.php");
   }  
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | <?= SITE_TITLE; ?></title>
    <?php include('top-header.php'); ?>
</head>

<body class="gray-bg">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=227542381141559&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-5">
                <h2 class="font-bold">Welcome to <?= SITE_TITLE; ?></h2>

                <p>
                    Kissan Mitra portal is a farming related to farming in Rajasthan, which means the sowing of crops for Moto farmers, Seeds, fertilizers, fertilizers, and biocides have to remove the problem of manure, irrigation, lack of mechanization, soil erosion, and the sale of crops. 
                </p>

                <p>
                    The farmer will register with the help of e-Mitra at the Kisan Mitra Portal, and to provide telephonic support to the portal, he will cooperate through the voice call for the uneducated farmers, sell the crop directly and buyer's registration with the help of this portal and buy the direct  crop from those farmers. So the farmer will get good money
                </p>

            </div>
                <div class="col-lg-7">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#farmerSignup">Farmer Signup</a></li>
                            <li class=""><a data-toggle="tab" href="#vendorSignup">Vendor Signup</a></li>
                            <li class=""><a data-toggle="tab" href="#mentorSignup">Mentor Signup</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="farmerSignup" class="tab-pane active">
                                <div class="panel-body">
								<div class="text-center">
									<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
								</div>
								<form role="form"  id="farmer-signup" method="post" class="m-t">
									  <input type="hidden" name="user_type" value="Farmer"/>
									  <div class="form-group">
										<input type="text" name="first_name" placeholder="Enter Name" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="email" name="email" placeholder="Enter Email Address" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="text" name="mobile_number" placeholder="Enter Mobile Number" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="text" placeholder="Enter Aadhar Number.." name="aadhar_card_no" data-mask="9999 - 9999 - 9999" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="password" name="password1" placeholder="Enter Password" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										  <div class="input-group m-b">
											<input type="password" autocomplete="off" placeholder="Re-Enter Password here" name="password2" class="form-control"  required="" />
											<span class="input-group-addon"></span>
										  </div>
									  </div>
									  <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
									  <div style="height: 0px;padding-top: 4px;" class="spiner-example">
										<div id="lodding" style="display:none;" class="sk-spinner sk-spinner-rotating-plane"></div>
									  </div>

										<p class="text-muted text-center">
											<small>Do not have an account?</small>
										</p>
										<a class="btn btn-sm btn-white btn-block" href="login.php">login Here!</a>
									  <div id="error" class="error"></div>
								</form>
                                </div>
                            </div>
                            <div id="vendorSignup" class="tab-pane">
                                <div class="panel-body">
								<div class="text-center">
									<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
								</div>
									<form role="form" id="vendor-signup" method="post" class="m-t">
                                    <input type="hidden" name="user_type" value="Vendor"/>
									  <div class="form-group">
										<input type="text" name="first_name" placeholder="Enter Name" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="email" name="email" placeholder="Enter Email Address" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="text" name="mobile_number" placeholder="Enter Mobile Number" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="text" placeholder="Enter Aadhar Number.." name="aadhar_card_no" data-mask="9999 - 9999 - 9999" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="password" name="password1" placeholder="Enter Password" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										  <div class="input-group m-b">
											<input type="password" autocomplete="off" placeholder="Re-Enter Password here" name="password2" class="form-control"  required="" />
											<span class="input-group-addon"></span>
										  </div>
									  </div>
									  <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
									  <div style="height: 0px;padding-top: 4px;" class="spiner-example">
										<div id="lodding" style="display:none;" class="sk-spinner sk-spinner-rotating-plane"></div>
									  </div>
									  <div id="error" class="error"></div>
									</form>
                                </div>
                            </div>
                            <div id="mentorSignup" class="tab-pane">
                                <div class="panel-body">
								<div class="text-center">
									<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
								</div>
									<form role="form"  id="mentor-signup" method="post" class="m-t">
                                    <input type="hidden" name="user_type" value="Mentor"/>
									  <div class="form-group">
										<input type="text" name="first_name" placeholder="Enter Name" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="email" name="email" placeholder="Enter Email Address" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="text" name="mobile_number" placeholder="Enter Mobile Number" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="text" placeholder="Enter Aadhar Number.." name="aadhar_card_no" data-mask="9999 - 9999 - 9999" class="form-control"/>
									  </div>
									  <div class="form-group">
										<input type="password" name="password1" placeholder="Enter Password" required="" class="form-control"/>
									  </div>
									  <div class="form-group">
										  <div class="input-group m-b">
											<input type="password" autocomplete="off" placeholder="Re-Enter Password here" name="password2" class="form-control"  required="" />
											<span class="input-group-addon"></span>
										  </div>
									  </div>
									  <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
									  <div style="height: 0px;padding-top: 4px;" class="spiner-example">
										<div id="lodding" style="display:none;" class="sk-spinner sk-spinner-rotating-plane"></div>
									  </div>
									  <div id="error" class="error"></div>
                                </div>
                            </div>
                        </div>


                    </div>
        </div>
        <hr/>
		<?php include("footer.php"); ?>
    </div>
<?php include("bot-footer.php"); ?>
<script>
$('input[name=password2]').on('keyup', function(event){
	var userPassword1 = $('input[name=password1]').val();
	var userPassword2 = $(this).val();
	if(userPassword1 != userPassword2){
		$(this).next('span').html('<i class="fa fa-times text-danger"></i>');
		$('button[type=submit]').attr('disabled','true');
	} else {
		$(this).next('span').html('<i class="fa fa-check text-navy"></i>');
		$("button[type=submit]").removeAttr('disabled','false');
	}
});

$('#farmer-signup').submit(function(even){
 $('#error').html('');
 $.post('signupSubmit.php',$('#farmer-signup').serialize(),function(res){
    document.getElementById("lodding").style.display = "block";
    console.log(res);
    res = JSON.parse(res);
    if(res.status == 'Success'){
       setTimeout(function(){ 
          document.getElementById("lodding").style.display = "none";
          window.location.href = "dashboard.php";
       }, 1000);
    } else {
       document.getElementById("lodding").style.display = "none";
       $('#error').html(res.msg);
    }
 });
 even.preventDefault();
});  


$('#vendor-signup').submit(function(even){
 $('#error').html('');
 $.post('signupSubmit.php',$('#vendor-signup').serialize(),function(res){
    document.getElementById("lodding").style.display = "block";
    console.log(res);
    res = JSON.parse(res);
    if(res.status == 'Success'){
       setTimeout(function(){ 
          document.getElementById("lodding").style.display = "none";
          window.location.href = "dashboard.php";
       }, 1000);
    } else {
       document.getElementById("lodding").style.display = "none";
       $('#error').html(res.msg);
    }
 });
 even.preventDefault();
});  

$('#mentor-signup').submit(function(even){
 $('#error').html('');
 $.post('signupSubmit.php',$('#mentor-signup').serialize(),function(res){
    document.getElementById("lodding").style.display = "block";
    console.log(res);
    res = JSON.parse(res);
    if(res.status == 'Success'){
       setTimeout(function(){ 
          document.getElementById("lodding").style.display = "none";
          window.location.href = "dashboard.php";
       }, 1000);
    } else {
       document.getElementById("lodding").style.display = "none";
       $('#error').html(res.msg);
    }
 });
 even.preventDefault();
});   
</script>
</body>
</html>
