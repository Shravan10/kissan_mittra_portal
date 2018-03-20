
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kissan Mitra Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/img.ico" type="image/x-icon" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen">    
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/camera.css" type="text/css" media="screen">


<script type="text/javascript" src="js/jquery.js"></script>  
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<script>
$(document).ready(function() {
	/////// icons
	$(".social li").find("a").css({opacity:0.6});
	$(".social li a").hover(function() {
		$(this).stop().animate({opacity:1 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).stop().animate({opacity:0.6 }, 400, 'easeOutExpo' );		   
	}); 

	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		autoAdvance			: true,		
		mobileAutoAdvance	: true,
		height: '37%',
		hover: false,
		loader: 'none',
		navigation: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		pagination			: true,
		time: 7000,
		transPeriod: 1000,
		minHeight: '300px'
	});

	

}); //
$(window).load(function() {
	//

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body>
<div id="main">

<?php
include('includes/header.php');
?>

<div id="slider" class="clearfix">
<?php
include('includes/slider.php');

?>
</div>

<div id="content">
<div id="content2">

<div id="inner">
<div class="banners">
<div class="container">
<div class="row">
<div class="span4 banner banner1">
	<div class="txt1">Sell & Buy Crops</div>
	<figure><img src="images/banner1.jpg" alt=""></figure>
	<div class="txt2">Sell & Buy Crops</div>
	<div class="txt3">A Farmer will buy the crops</div>
	<a href="site/add-product.php" class="button0">more</a>
</div>
<div class="span4 banner banner2">
	<div class="txt1">Farmer Mentors</div>
	<figure><img src="images/banner2.jpg" alt=""></figure>
	<div class="txt2">Beginning Farmer Mentorship Program</div>
	<div class="txt3">The Beginning Farmer Program of Kissan mitra is excited to present the 2018 Mentorship Program.  Each  pairs 10 beginning farmers with experienced growers who can help them work towards specific learning goals. </div>
	<a href="farmer_mentor.php" class="button0">more</a>
</div>
<div class="span4 banner banner3">
	<div class="txt1">Knowledge Base</div>
	<figure><img src="images/banner3.jpg" alt=""></figure>
	<div class="txt2">All Knowledge about farming </div>
	<div class="txt3">Knowledge base segment will provides all about the knowledge of farming</div>
	<a href="blog/" class="button0">more</a>
</div>	
</div>	
</div>	
</div>
<div id="inner2">
	<div class="container">
		<div class="row">
			<div class="span8">
				
				<h1 class="home">Welcome!<br><span>KISSAN MITRA PORTAL RAJASHTHAN</span></h1>

				<h4>
					To remove the problem related to the sowing of crops, Seed, Manures, Fertilizers, and Biocides manure, Irrigation,  Lack of mechanization, Soil erosion,  sold crops ,  Scarcity of capital  farmers in Rajasthan
				</h4>
				<p>
					Kissan Mitra portal is a farming related to farming in Rajasthan, which means the sowing of crops for Moto farmers, Seeds, fertilizers, fertilizers, and biocides have to remove the problem of manure, irrigation, lack of mechanization, soil erosion, and the sale of crops. The farmer will register with the help of e-Mitra at the Kisan Mitra Portal, and to provide telephonic support to the portal, he will cooperate through the voice call for the uneducated farmers, sell the crop directly and buyer's registration with the help of this portal and buy the direct  crop from those farmers. So the farmer will get good money.
				</p>
				<a href="#" class="button1">Read more about us</a>

				<div class="line1"></div>

				<h2 class="home">New generation of farming</h2>

				<div class="thumb1">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="images/home01.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								The mathematics revolution
							</h4>
							<p>
								We’re long overdue for a mathematical revolution in agriculture. The power of advanced mathematics is boosting farm productivity made accessible by the processing capabilities in the latest generation of computing hardware and software. For example, farmers can now know the best time to plant crops by looking at historical data and using simulation models to make informed choices based on current conditions, rather than guesswork.  resources wisely.
							</p>
							<a href="#" class="button1">Details</a>
						</div>
					</div>
				</div>
				<div class="thumb1">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="images/home02.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								The sensing revolution
							</h4>
							<p>
								The mathematics revolution can only deliver these benefits if the simulation models are fed high-quality data. That need is being met by advanced sensor technologies that are enabling a real-time understanding of what’s happening on the modern farm, unlike anything seen in the past..
							</p>
							<a href="#" class="button1">Details</a>
						</div>
					</div>
				</div>




			</div>
			<div class="span4">
				
				<h3 class="home">NEWS<br><span>Latest news and events</span></h3>

				<div class="thumb2">
				<marquee direction = "up">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/home03.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								<a href="#">
मुख्यमंत्राी श्रीमती वसुन्धरा राजे को निगम अध्यक्ष श्री जनार्दन सिंह गहलोत ने चैक भेंट किया । श्रीमती राजे ने निगम की बेहतर व्यवस्थाओं, कार्यशैली तथा लाभ में बढ़ोतरी के लिए श्री गहलोत के प्रयासों को सराहा।</a>
							</h4>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">...</a>
							</p>							
						</div>
					</div>
				</div>
				<div class="thumb2">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/home04.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								<a href="#">Maecenas sit</a>
							</h4>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">...</a>
							</p>							
						</div>
					</div>
				</div>
				<div class="thumb2">
					<div class="thumbnail clearfix">
						<figure class=""><img src="images/home05.jpg" alt=""></figure>
						<div class="caption">
							<h4>
								<a href="#">Vestibulum vel</a>
							</h4>
							<p>
								Amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#">...</a>
							</p>							
						</div>
					</div>
				</div>
				</marquee>
				<div class="text-right"><a href="#" class="button1">More news</a></div>

				<div class="line1"></div>

				<h3>What we offer</h3>

				<div class="accordion" id="accordion1">
					<div class="accordion-group">
					    <div class="accordion-heading">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
					        	Sell & Buy Crops
					        </a>
					    </div>
					    <div id="collapse1" class="accordion-body collapse in">
					        <div class="accordion-inner">
					        	<h4></h4>
					        	The farmer will register with the help of e-Mitra at the Kisan Mitra Portal, and to provide telephonic support to the portal, he will cooperate through the voice call for the uneducated farmers, sell the crop directly and buyer's registration with the help of this portal and buy the direct  crop from those farmers. So the farmer will get good money.
					        </div>
					    </div>
					</div>
					<div class="accordion-group">
					    <div class="accordion-heading">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
					        	Farmer Mentorship program.
					        </a>
					    </div>
					    <div id="collapse2" class="accordion-body collapse">
					        <div class="accordion-inner">
					        	<h4>Benifit</h4>
					        	THE KISSAN MITRA BEGINNING FARMER MENTORSHIP PROGRAM AIMS TO HELP FILL THE EDUCATION GAP BETWEEN APPRENTICE/FARM WORKER AND INDEPENDENT FARMER. BY PAIRING MENTEES WITH EXPERIENCED GROWERS WHO ARE NOT THEIR EMPLOYERS, THE PROGRAM ENABLES ASPIRING FARMERS TO GAIN FARMING EXPERIENCES, SKILLS, AND PERSPECTIVES THAT THEY MAY OTHERWISE MISS IN THEIR DAY-TO-DAY WORK.
					        </div>
					    </div>
					</div>
					<div class="accordion-group">
					    <div class="accordion-heading">
					        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
					        	Knowledge Base
					        </a>
					    </div>
					    <div id="collapse3" class="accordion-body collapse">
					        <div class="accordion-inner">
					        	<h4>Farmer Facility</h4>
					        	Knowledge base segment will provides all about the knowledge of farming
					        </div>
					    </div>
					</div>					
				</div>





			</div>
		</div>
	</div>
</div>	
</div>
	
</div>	
</div>

<?php

include('includes/footer.php');
?>






	
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
