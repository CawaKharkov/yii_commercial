<!DOCTYPE html>
<html>
<head>    
	<!-- Define Charset -->
	<meta charset="utf-8">
	
	<!-- Page Title -->
	<title>Gym Club - Home</title>
	
	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	   
	<!-- CSS -->
	<link href="/resources/frontend/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="/resources/frontend/rs-plugin/css/settings.css" media="screen" />
	<link href="/resources/frontend/css/styles.css" rel="stylesheet" />
    <link href="/resources/frontend/css/color/green.css" rel="stylesheet" />
	<link href="/resources/frontend/css/media-queries.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>        
	<![endif]-->

	<!-- Media queries -->
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Header -->
	<header>
		<!-- Top Bar -->
		<div class="top-bar" >
			<div class="container" >
				<div class="row">
					<ul class="misc pull-left" >
						<li class="dropdown">
							<a href="#" class="dropdown-toggle"><i class="entypo-calendar" ></i>Opening Hours</a>
							<ul>
								<li><i class="entypo-calendar" ></i>Monday to Friday</li>
								<li><i class="entypo-clock" ></i>10AM - 11AM and 7PM - 8PM</li>
								<li><i class="entypo-location" ></i>Room 07, Center Plaza 15654</li>
								<li><a href="price.html">See Pricing Tables</a></li>
							</ul>
						</li>   
						<li>
							<a href="#"><i class="entypo-phone" ></i>2-985-505-6574</a>
						</li>
						<li>
							<a href="contact.html"><i class="entypo-mail" ></i>Contact</a>
						</li>
					</ul>
					<ul class="social-header pull-right">
						<li>
							<a href="#"><i class="entypo-flickr" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-gplus" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-play" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-facebook" ></i></a>
						</li>
						<li>
							<a href="#"><i class="entypo-twitter" ></i></a>
						</li>
					</ul>
				</div>    
			</div>
		</div>
		<!-- End Top Bar -->
	   
		<!-- Main Menu -->
		<div class="main-menu" >
			<div class="main-menu-line" >
				<div class="container">
					<div class="row">
						<nav class="navbar" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1 class="logo">
									<a class="navbar-brand" href="index.html"><img src="/resources/frontend/img/logo-green.png" alt="Logo" /></a>
								</h1>  
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="classes.html">Classes</a></li>
									<li class="dropdown">
										<a href="trainers.html" class="dropdown-toggle">Trainers</a>
										<ul>
											<li><a href="trainers.html">All Trainers</a></li>
											<li><a href="single-trainer.html">Single Trainers</a></li>
										</ul>
									</li>
									<li class="dropdown">
											<a href="#" class="dropdown-toggle">Pages</a>
											<ul>
												<li><a href="club.html">Club</a></li>
												<li><a href="features.html">Features Page</a></li>
												<li><a href="faq.html">FAQ</a></li>
												<li><a href="tabs.html">Tabs</a></li>
												<li><a href="404.html">404 Error</a></li>
												<li><a href="single-class.html">Single Class</a></li>
												<li><a href="gallery-two.html">Gallery 2 col</a></li>
												<li><a href="gallery-three.html">Gallery 3 col</a></li>
												<li><a href="gallery-four.html">Gallery 4 col</a></li>
												<li><a href="single-news.html">Single News</a></li>
											</ul>
									</li>	
									<li><a href="news.html">News</a></li>
									<li><a href="price.html">Price</a></li>

								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Menu -->
	</header>   
	<!-- End header -->

	<?php echo $content; ?>

	<!-- Footer -->
	<footer>
		<div class="container" >
			<div class="row misc">
				<div class="col-md-3" >
					<h3>About the Club</h3>
					<p>Phasellus sit amet justo sapien. Praesent bibendum, enim non fringilla vestibulum.</p>
					<p>We can condimentum est lacus ut dolor. Sed facilisis ante felis, vitae mattis massa luctus sit amet. Vestibulum eu blandit ipsum. In ornare enim nunc.</p>
					<ul class="about" >
						<li><i class="entypo-location" ></i>Street 32165, 646 UK</li>
						<li><i class="entypo-mobile" ></i>(62626) 5154 4545</li>
						<li><i class="entypo-mail" ></i>email@democompany.com</li>
						<li><i class="entypo-clock" ></i>From 10:15 AM to 7:30 PM</li>
					</ul>
				</div>  
				<div class="col-md-3">
					<h3>Useful Links</h3>
					<ul class="links" >
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Meet the Coaches of the Club</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Meet the Trainers</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>See the Club inside</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Testimonials Videos</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Meet the Trainers of the Club</a></li>  
						<li><a href="#"><i class="entypo-right-open-mini" ></i>Personal Coaching Video</a></li>                      
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Newsletter</h3>
					<p>Suscribe to our ahasellus sit amet justo sapien and raesent bibendum you will get nim non fringilla vestibulum.</p>
					<form method="post" action="//" role="form">
						<div class="form-group">
							<label for="name" class="sr-only">Your Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Your name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email address</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<button class="button-gym" >Suscribe now</button>

					</form>
				</div>
				<div class="col-md-3">
					<h3>Get Social</h3>
					<p>Follow us on the Social Networks to let all the news and win disccounts!</p>
					<ul class="social" >
						<li><a href="#"><i class="entypo-facebook" ></i></a></li>
						<li><a href="#"><i class="entypo-twitter" ></i></a></li>
						<li><a href="#"><i class="entypo-linkedin" ></i></a></li>
						<li><a href="#"><i class="entypo-play" ></i></a></li>
						<li><a href="#"><i class="entypo-tumblr" ></i></a></li>
						<li><a href="#"><i class="entypo-gplus" ></i></a></li>
						<li><a href="#"><i class="entypo-pinterest-circled" ></i></a></li>
					</ul>
				</div>                
			</div>
		</div>
		<div class="copyright" >
			<div class="container">
				<p class="pull-left" >&copy; All rights reserved. Gym Website by <a href="#">Demo</a></p>
				<ul class="main-links pull-right" >
					<li><a href="#">Home</a></li>
					<li><a href="#">Classes</a></li>
					<li><a href="#">Trainers</a></li>
					<li><a href="#">Club</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Price</a></li>
				</ul>
			</div>
		</div>           
	</footer>
	<!-- End footer -->


	<a href="#" class="scrollup"><i class="entypo-up-open"></i></a>      

	<!-- Javascript Files -->
	<!-- jQuery -->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" ></script>
	<script>window.jQuery || document.write("<script src=\"js/jquery-1.9.1.min.js\" type=\"text/javascript\"><\/script>")</script>
	    
    <!-- Respond.j media queries for IE8 -->
    <script src="/resources/frontend/js/respond.min.js"></script>
    
	<!-- Bootstrap-->
	<script src="/resources/frontend/js/bootstrap.min.js" type="text/javascript" ></script>
 
	<!-- Easing -->
	<script type="text/javascript" src="/resources/frontend/js/jquery.easing.min.js" ></script>

	<!-- Placeholder.js http://widgetulous.com/placeholderjs/ -->
	<script type="text/javascript" src="/resources/frontend/js/placeholder.js" ></script>

    <!-- Retina.js -->
    <script type="text/javascript" src="/resources/frontend/js/retina.js" ></script>
    
	<!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="/resources/frontend/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="/resources/frontend/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- Custom site js-->
	<script src="/resources/frontend/js/script.js" type="text/javascript" ></script>
	<!-- End Javascript Files -->
</body>

</html>