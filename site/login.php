<!DOCTYPE html>
<?php
require_once('config.php');
require_once('facebook.config.php');
if(isset($_SESSION['user_id'])){
  header("location:dashboard.php");
}

$user = $facebook->getUser();

if ($user) { // IF FACEBOOK
  try { 
     $user_profile = $facebook->api('/me');
     $logoutUrl = $facebook->getLogoutUrl();
     $_SESSION['oauth_type'] ="facebook";
     } 
     
     catch (FacebookApiException $e) {
     //error_log($e);
     $user = null;
  }
} 


else { // NOT FACEBOOK

$loginUrl = $facebook->getLoginUrl(array('scope' => 'email'));
  
}  
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | <?= SITE_TITLE; ?></title>
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

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to <?= SITE_TITLE; ?></h2>

                <p>
                    Kissan Mitra portal is a farming related to farming in Rajasthan, which means the sowing of crops for Moto farmers, Seeds, fertilizers, fertilizers, and biocides have to remove the problem of manure, irrigation, lack of mechanization, soil erosion, and the sale of crops. 
                </p>

                <p>
                    The farmer will register with the help of e-Mitra at the Kisan Mitra Portal, and to provide telephonic support to the portal, he will cooperate through the voice call for the uneducated farmers, sell the crop directly and buyer's registration with the help of this portal and buy the direct  crop from those farmers. So the farmer will get good money
                </p>

                <p>
                    
                </p>

                <p>
                    <small>.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <h3 class="m-t text-center">Login to <?= SITE_TITLE; ?></h3>
					<!--<div class="text-center">
						<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
					</div>
                    <p class="m-t text-center">OR</p>-->
                    <form class="m-t" role="form" id="login-frm">
                        <div class="form-group">
                            <input type="email" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
							<a href="#" class="pull-right">
								<small>Forgot password?</small>
							</a>
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
						  <div style="height: 0px;padding-top: 4px;" class="spiner-example">
							<div id="lodding" style="display:none;" class="sk-spinner sk-spinner-rotating-plane"></div>
						  </div>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="signup.php">Create an account</a>
                    </form>
                    <p class="m-t text-right">
                        <small>KISAAN MITRA 2018</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
    </div>
<?php include('bot-footer.php'); ?>
<script>
$('#login-frm').submit(function(even){
 $('#error').html('');
 $.post('login_submit.php',$(this).serialize(),function(res){
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
