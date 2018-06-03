<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> BULLETIN &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />



	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head><script>
    function validate(){

		if(document.getElementById("username").value=="")
		{   alert("Please enter username");
	        return false;
	    }
		if(document.getElementById("password").value=="")
		{
					alert("Enter Password");
					return false;
		}
		if(document.getElementById("email").value=="")
		{
			alert("Please enter email id");
			return false;
		}
	}
</script>
	<body>
  <div class="gtco-loader"></div>
	<div id="page">
<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
    	<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Bulletin <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
           	<li><a href="aboutus.html">About</a></li>
						<li><a href="contactus.html">Contact</a></li>
						<li class="btn-cta"><a href="index1.php"><span>HOME</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
           <div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Welcome to Bulletin</span>
							<h1>Create innovative Application letters in minutes</h1>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<?php
	                          //getting input from user
	                        if(isset($_POST['submit']))
	                        {
	                          $name=$_POST['username'];
	                          $password=$_POST['password'];
	                          $email=$_POST['email'];
	                         //connect to database
	                          $con=mysqli_connect("localhost","root","Mylinux24","application")or die('fail');
	                         //insert the data into database
                          mysqli_query($con,"INSERT INTO register (uid,username,email,password)VALUES (NULL,'$name','$email','$password')");
	                        if(mysqli_affected_rows($con)==1)
                            {
															 echo"REGISTERED SUCCESSFULLY";
	                          }
	                          else
		                        {
		                           echo"<p>SORRY!UNABLE TO REGISTER</p>";
		                           echo mysqli_error($con);
	                          }
	                          }
                                ?>
                  	<form onsubmit="return validate()"action="index1.php" method="POST" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Username</label>
														<input type="text" name= "username"class="form-control" id="username">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password2">Email</label>
														<input type="email"  name="email"class="form-control" id="email">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" name="password"class="form-control" id="password">
													</div>
												</div>
                      <div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name ="submit"class="btn btn-primary" value="Sign up">
													</div>
												</div>
											</form>
										</div>
										<div class="tab-content-inner" data-content="login">
                     <form  action="next.php" method="POST" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Username </label>
														<input type="text" name="username" class="form-control" id="username" required >
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Password</label>
														<input type="password" name="password"class="form-control" id="password" required>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="login" class="btn btn-primary" value="Login">
													</div>
												</div>
											</form>
										</div>
										</div>
								</div>
							</div>
						</div>
					</div>
       </div>
			</div>
		</div>
	</header>
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Beautiful Templates</h2>

			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/11.jpeg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/11.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><b>we have got the best templates for you.</b></h2>
        	</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/12.jpeg" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/12.jpeg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><b>Have a look to this</b></h2>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/13.png" class="fh5co-project-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/13.png" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><b>your first job application!!</b></h2>
						</div>
					</a>
				</div>
     	</div>
		</div>
	</div>
 <div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Bulletin Features</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
						<h3>Plethora of letter types </h3>
						<p>We have ample of templates for different types of letters.You just have to select.:) </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
						 <i class="ti-magnet"></i>
					 </span>
						<h3>Variety of Fonts</h3>
						<p> To improve the visuals you can use different fonts.Make it professional or attractive as you please.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-vector"></i>
						</span>
						<h3>Easily shareable </h3>
<p>The document you made can easily be linked to your mail. </p>					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-ruler-pencil"></i>
						</span>
						<h3>Rich Editor</h3>
						<p>  With an editor with great editing tools You can add your touch to it. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
<div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">
<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About <span class="footer-logo">Bulletin<span>.<span></span></h3>
						<p>Started in 2018,Bulletin is a sincere effort to be time efficient way of creating letters.In this word where everything is fast forward,nobody wants to storm their brains for the content of letter.And if you are one among them ,you are at the right place .we will give you best content  which you can use by making little ammendments.</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">

							<li><a href="#">Terms of services</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i>+918871903550</a></li>

							<li><a href="#"><i class="icon-mail2"></i>bulletin@gmail.com</a></li>


						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2018 Bulletin. All Rights Reserved.</small>
						<small class="block">Designed by <a href="http://Bulletin.co/" target="_blank">Bulletin.co</a> </small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
