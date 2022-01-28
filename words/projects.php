<?php

if($_POST["submit"]) {
    $recipient="roch_morris@hotmail.co.uk";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rochelle Morris Golf</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<h1 class="text-center"><a class="fh5co-logo" href="index.html">Menu</a></h1>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About me</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="sponsorship.html">Sponsorship</a></li>
					<li><a href="projects.html">Other projects</a></li>
				</ul>
				<p class="fh5co-social-icon">
					<a href="https://twitter.com/RochelleMorris?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="icon-twitter2"></i></a>
					<a href="https://www.instagram.com/rochellemorrisgolf/?hl=en"><i class="icon-instagram"></i></a>
					<a href="https://www.linkedin.com/in/rochelle-morris-b99a49198/"><i class="icon-linkedin-with-circle"></i></a>
					<a href="mailto:roch_morris@hotmail.co.uk"><i class="icon-envelope2"></i></a>													
				</p>
			</div>
		</div>
	</nav>
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<div class="row">
						<div class="col-xs-6">
							<h1 class="text-left"><a class="fh5co-logo" href="index.html"> Rochelle Morris Golf </a></h1>
						</div>
						<div class="col-xs-6">
							<p class="fh5co-social-icon text-right">
								<a href="https://twitter.com/RochelleMorris?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="icon-twitter2"></i></a>
								<a href="https://www.instagram.com/rochellemorrisgolf/?hl=en"><i class="icon-instagram"></i></a>
								<a href="https://www.linkedin.com/in/rochelle-morris-b99a49198/"><i class="icon-linkedin-with-circle"></i></a>
								<a href="mailto:roch_morris@hotmail.co.uk"><i class="icon-envelope2"></i></a>													
							</p>
						</div>
					</div>
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				</div>
			</div>
		</header>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/1.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<h2>Other projects</h2>
										<hr></hr>
										<p>Some of the other great projects I am involved in.</p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/underpin.png" alt=""></a>
									<div class="blog-text">
										<span class="posted_on">October 2019 - present</span>
										<h3>Underpin</h3>
										<p>In October 2019 I signed with Underpin sports management. I am very excited to be part of such a fantastic team managed by Greg Robertson and Duncan McCarthy. Underpin's goal is to give the player the freedom to perform and they do this through performance coaching, off course personal development, and general management.</p>
									</div> 
								</div>
							</div>
							<div class="col-md-12">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/speak.jpg" alt=""></a>
									<div class="blog-text">
										<span class="posted_on">2019 - present</span>
										<h3>Public speaking</h3>
										<p>In the past few years I have given talks at many different events, from the Yorkshire Ladies AGM to Junior talks at my own golf club to try and inspire the next generation. I have recently given after dinner talks at different golf clubs locally. These engaging talks can be a fantastic way to entertain guests or members at your own golf club, giving an insight into life as a touring pro and giving some tips to help develop their game. If you are interested in having me talk at your club then please do not hestitate to get in touch. </p>
									</div> 
								</div>
							</div>							
						</div>
					</div>					
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/forget.jpg" alt=""></a>
									<div class="blog-text">
										<span class="posted_on">2019 - present</span>
										<h3><a href="#">Forget me not</a></h3>
										<p>I have been involved with the <a href="https://www.forgetmenotchild.co.uk/">forget me not children's hospice</a> since the start of 2019, helping to fundraise and raise awareness for the charity through golf days. They are very deserving children's charity, providing support through pregnancy, childhood and loss. I am really pleased to be able to support such a fantastic cause as an ambassador for the <a href="https://www.forgetmenotchild.co.uk/supporting-us/how-you-can-help/shooting-star-appeal">shooting stars capaign</a>.</p>
									</div> 
								</div>
							</div>
							<div class="col-md-12">
								<div class="fh5co-blog animate-box">
									<img class="img-responsive" src="images/trigolf.jpg" alt="">
									<div class="blog-text">
										<span class="posted_on">2018 - present</span>
										<h3>Sports coaching</h3>
										<p>I have been coaching different sports in primary schools, running P.E. lessons, lunch time clubs and after school clubs since 2018. I have a level 3 golf coaching and level 2 dodgeball qualification but I am also involved in coaching football and many other sports. I'm passionate in introducing and encouraging children to try new sports, especially golf which many will not be introduced to. I also run my own tri-golf class at Holmfirth Community sports centre on a Monday evening for children aged 8-12. Please contact me if you're interested in getting your kids involved in my class!</p>
									</div> 
								</div>
							</div>							
						</div>
					</div>					
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-12">
								<div class="fh5co-blog animate-box">
									<a href="#"><img class="img-responsive" src="images/france2.jpg" alt=""></a>
									<div class="blog-text">
										<span class="posted_on">July 2019</span>
										<h3><a href="#">French golf week</a></h3>
										<p>In July 2019 I spent a week in France coaching golf to my partners family and their friends! This was a fantastic week enjoyed by all, where the main focus of the week was to coach 4 beginners. Coaching from a touring pro can be very beneficial in easing them into the game without lots of technicalities. Of course we also enjoyed the amazing weather, food and wine! </p>
										<img class="img-responsive" src="images/france3.jpg" alt="">
									</div> 
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<h3 class="section-title">Newsletter</h3>
							<p>I like to keep all of my supporters up to date with my progress, tour results, training tips and other stories! I write a monthly blog which I send out via email. If you'd like to be included in my blog mailing list then please subscribe by entering your email below!</p>
<!--							<form class="form-inline" id="fh5co-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your email">
											<button type="submit" class="btn btn-default"><i class="icon-paper-plane"></i></button>
										</div>
									</div>
								</div>
							</form> -->
						<?=$thankYou ?>

						<form method="post" action="contact.php">
								<label>Name:</label>
								<input name="sender">

								<label>Email address:</label>
								<input name="senderEmail">

								<label>Message:</label>
								<textarea rows="5" cols="20" name="message"></textarea>

								<input type="submit" name="submit">
						</form>
						</div>
						<div class="col-md-3">
						</div>
						<div class="col-md-3">
							<h3 class="section-title">Information</h3>
							<p>If you'd like to get in touch then please send me an email to <a href="mailto:roch_morris@hotmail.co.uk">roch_morris@hotmail.co.uk</a></p>
						</div> <!-- Ends info column -->						
						
						
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icon">
								<a href="https://twitter.com/RochelleMorris?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="icon-twitter2"></i></a>
								<a href="https://www.instagram.com/rochellemorrisgolf/?hl=en"><i class="icon-instagram"></i></a>
								<a href="https://www.linkedin.com/in/rochelle-morris-b99a49198/"><i class="icon-linkedin-with-circle"></i></a>
								<a href="mailto:roch_morris@hotmail.co.uk"><i class="icon-envelope2"></i></a>																
							</p>
							<p>Copyright 2016 <a href="http://freehtml5.co/" target="_blank">Free Html5</a> <a href="https://freehtml5.co/words-free-html5-bootstrap-template-multi-purpose/">Words</a>. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

