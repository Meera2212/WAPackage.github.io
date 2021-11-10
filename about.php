<!DOCTYPE html>
						<?php
error_reporting(E_ERROR);
session_start();
error_reporting(E_ERROR);
$regValue = $_GET['regName'];

?>
<html lang="en">

	<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-71TEC6VBEP"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-71TEC6VBEP');
	</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Primex</title>
    <!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	    <script src="js/vendor/html5shim.js"></script>
	    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	</head>


	<body onload='myFunction()'>

	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			 	<header>
					<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
						<div class="container">
							<div class="navbar-header">
				                <button type="button" class="navbar-toggle collapsed" >
				                  <span class="sr-only">Toggle navigation</span>
				                  <span class="icon-bar"></span>
				                  <span class="icon-bar"></span>
				                  <span class="icon-bar"></span>
				                </button>
						    	<!-- offcanvas-trigger-effects -->
								<h1 class="logo"><a class="navbar-brand" href="index.html"><img src="img/logo.png" alt=""></a></h1>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.html">Home</a></li>
									<li class="dropdown active"><a href="#" >About <b class="caret"></b></a>
										<!-- submenu-wrapper -->
										<div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li class="active"><a href="about-us.html">About Us</a></li>
													<li><a href="about-me.html">About Me</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>

									<li class="dropdown"><a href="#" >Blog <b class="caret"></b></a>
										<!-- submenu-wrapper -->
										<div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li><a href="blog.html">Blog Standard</a></li>
													<li><a href="blog-single.html">Blog Single</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>
									<li class="dropdown"><a href="#" >Portfolio <b class="caret"></b></a>
										<!-- submenu-wrapper -->
										<div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li><a href="portfolio-four.html">Portfolio Four Col</a></li>
													<li><a href="portfolio-three.html">Portfolio Three Col</a></li>
													<li><a href="portfolio-two.html">Portfolio Two Col</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>
									<li class="dropdown"><a href="#" >Pages <b class="caret"></b></a>
										<!-- submenu-wrapper -->
										<div class="submenu-wrapper submenu-wrapper-topbottom">
											<div class="submenu-inner  submenu-inner-topbottom">
												<ul class="dropdown-menu">
													<li><a href="job-page.html">Job Page</a></li>
													<li><a href="clients-page.html">Clients Page</a></li>
													<li><a href="faq.html">FAQ Page</a></li>
													<li><a href="typography.html">Typography</a></li>
												</ul>
											</div><!-- /.submenu-inner -->
										</div> <!-- /.submenu-wrapper -->
									</li>

									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container -->
					</nav>
				</header>

				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>Hola amigo</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="#">Home</a></li>
								  <li><a href="#">About</a></li>
								  <li class="active">About you</li>
								</ol>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>


				<div class="container">
					<div class="content-wrapper">
						<section class="about-us-wrapper">
						
						


<script>
var my_variable_name = "<?php echo $regValue; ?>";
function myFunction() {
	
  
  if(my_variable_name==""){
	  setTimeout(function(){ alert("Sign in"); }, 5000);
	  
  }
}
</script>
					
							
							 <h1><?php echo "Welcome  ".$regValue."";?> </h1>
							<div class="row margin-bottom-60"> 
								<div class="col-md-6">
									<p>THIS IS A SAMPLE PAGE. WILL CONTAIN THE USER's BLOGS</p>

									<p>Sed enim eros Proin Nullam laoreet dictumst cursus Sed Fusce eu. Est auctor et mauris egestas at Quisque montes lacus ac pede. Felis vel tincidunt wisi elit quis vestibulum Curabitur iaculis consequat Proin itae Pellentesque.</p>
								</div><!-- /.col-md-6 -->

								<div class="col-md-6">
									<p>Vestibulum interdum sit nisl est lorem augue. Adipiscing hendrerit cursus et at nunc id natoque vitae mattis vitae. Curabitur tristique laoreet ut ut odio Lorem ante Integer tincidunt in. Congue Sed est quis justo pellentesque neque eros dolor eu et. Cras ipsum tempus non Donec ac ut neque sem nisl ut. Pretium magnis nisl nibh purus eu pellentesque.</p>

									<p>Vestibulum interdum sit nisl est lorem augue. Adipiscing hendrerit cursus et at nunc id natoque vitae mattis vitae. Curabitur tristique laoreet ut ut odio.</p>
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->

							<h2>Our work station</h2>
							<div class="row">
								<div class="col-md-12">
									<em>Leo cursus a nibh Vestibulum interdum sit nisl est lorem augue. Adipiscing hendrerit cursus et at nunc id natoque vitae mattis vitae. Curabitur tristique laoreet ut ut odio Lorem ante Integer tincidunt in. Congue Sed est quis justo pellentesque neque eros dolor eu et. Cras ipsum tempus non Donec ac ut neque sem nisl ut. Pretium magnis nisl nibh purus eu pellentesque Curabitur senectus pellentesque congue. Dui velsenectus dapibus fringilla tortor Nulla laoreet tempus pretium lorem. Vestibulum lacus et nonummy id Nam ut volutpat ipsum sit metus.</em>
								</div>
							</div>
						</section><!-- /.about-us-wrapper -->

						<section class="about-us-slider-wrapper">
							<div id="about-us-slider" class="carousel slide" data-ride="carousel">
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
								    <div class="row">
								    	<div class="col-md-6">
								    		<img class="img-responsive" src="img/abt-slider1.jpg" alt="">
								    	</div>
								    	<div class="col-md-6">
									    	<div class="abt-slider-intro">
									    		<p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills. Proactively expedite front-end bandwidth with collaborative leadership.</p>

									    		<p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills.</p>
									    	</div>
								    	</div>
								    </div>
							    </div><!-- /.item -->

							    <div class="item">
								    <div class="row">
								    	<div class="col-md-6">
								    		<img class="img-responsive" src="img/abt-slider2.jpg" alt="">
								    	</div>
								    	<div class="col-md-6">
									    	<div class="abt-slider-intro">
									    		<p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills. Proactively expedite front-end bandwidth with collaborative leadership.</p>

									    		<p>Seamlessly plagiarize professional deliverables before enterprise-wide leadership. Authoritatively transition open-source solutions for client-centered leadership skills.</p>
									    	</div>
								    	</div>
								    </div>
							    </div><!-- /.item -->
							  </div><!-- /.carousel-inner -->

							  <!-- Controls -->
							  <a class="left carousel-control" href="#about-us-slider" role="button" data-slide="prev">
							    <i class="flaticon-arrowhead4"></i>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#about-us-slider" role="button" data-slide="next">
							    <i class="flaticon-arrow437"></i>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</section>

						<section class="team-wrapper">
							<h2 class="section-title">Our Team</h2>
							<div class="css-team">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<figure>
											<div class="css-team-avatar">
												<div class="css-overlay"></div>
												<img class="media-object img-responsive" src="img/team/tm1.jpg" alt="Image">
												<a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
											</div>
											<div class="css-team-info">
											<h3 class="css-team-heading">Bobby Webb<br> <small>Chairman</small></h3>
											</div>
										</figure>
									</div><!-- /.col-md-4 -->
									<div class="col-md-4 col-sm-4 col-xs-12">
										<figure>
											<div class="css-team-avatar">
												<div class="css-overlay"></div>
												<img class="media-object img-responsive" src="img/team/tm2.jpg" alt="Image">
												<a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
											</div>
											<div class="css-team-info">
											<h3 class="css-team-heading">BRYAN SOTO<br> <small>Managing Partner</small></h3>
											</div>
										</figure>
									</div><!-- /.col-md-4 -->
									<div class="col-md-4 col-sm-4 col-xs-12">
										<figure>
											<div class="css-team-avatar">
												<div class="css-overlay"></div>
												<img class="media-object img-responsive" src="img/team/tm3.jpg" alt="Image">
												<a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
											</div>
											<div class="css-team-info">
											<h3 class="css-team-heading">THEODORE PARKER<br> <small>General Manager</small></h3>
											</div>
										</figure>
									</div><!-- /.col-md-4 -->
									<div class="col-md-4 col-sm-4 col-xs-12">
										<figure>
											<div class="css-team-avatar">
												<div class="css-overlay"></div>
												<img class="media-object img-responsive" src="img/team/tm4.jpg" alt="Image">
												<a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
											</div>
											<div class="css-team-info">
											<h3 class="css-team-heading">WALLACE JIMENEZ<br> <small>Head Of Risk Management</small></h3>
											</div>
										</figure>
									</div><!-- /.col-md-4 -->
									<div class="col-md-4 col-sm-4 col-xs-12">
										<figure>
											<div class="css-team-avatar">
												<div class="css-overlay"></div>
												<img class="media-object img-responsive" src="img/team/tm5.jpg" alt="Image">
												<a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
											</div>
											<div class="css-team-info">
											<h3 class="css-team-heading">ERIC RICE<br> <small>Head Of Risk Management</small></h3>
											</div>
										</figure>
									</div><!-- /.col-md-4 -->
									<div class="col-md-4 col-sm-4 col-xs-12">
										<figure>
											<div class="css-team-avatar">
												<div class="css-overlay"></div>
												<img class="media-object img-responsive" src="img/team/tm6.jpg" alt="Image">
												<a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
											</div>
											<div class="css-team-info">
											<h3 class="css-team-heading">FERNANDO BLACK<br> <small>Senior Analyst</small></h3>
											</div>
										</figure>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->
							</div><!-- /.css-team -->

							<h2 class="section-title">Join Our Team</h2>
							<div class="row">
								<div class="col-sm-8">
									<p>Conveniently incentivize intermandated manufactured products via interactive best practices. Quickly disintermediate low-risk high-yield portals through distributed services. Professionally conceptualize distinctive technologies before flexible ROI. Enthusiastically mesh prospective markets for emerging web-readiness. Objectively morph B2B vortals and enabled ideas.</p>
									<p>Professionally implement B2B catalysts for change through efficient services. Quickly architect synergistic expertise before maintainable ROI.</p>
								</div>
								<div class="col-sm-4">
									
									<ul class="joblist-link">
										<li><a href="job-page.html">Software Engineer</a></li>
										<li><a href="job-page.html">Web Developer</a></li>
										<li><a href="job-page.html">PHP Programmer</a></li>
										<li><a href="job-page.html">Oracle Programmer</a></li>
										<li><a href="job-page.html">Graphic Designer</a></li>
									</ul>

									<a class="btn btn-primary joblist-btn" href="#">View all jobs <i style="" class="fa fa-angle-right "></i> </a>

								</div>
							</div>
						</section>

						<section class="download-box-wrapper">
							<div class="download-box">
								<ul class="list-inline">
									<li><a href="#">Company Profile <span>Download</span></a></li>
									<li><a href="#">Annual Report <span>Download</span></a></li>
									<li><a href="#">Corporate Brochure <span>Download</span></a></li>
								</ul>
							</div>
						</section>
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->

				<section class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="footer-widget">
									<p class="subcsribe-text">Quickly utilize installed base channels before premier expertise. Conveniently extend web-enabled niche markets without 2.0 e-markets. Collaboratively incentivize .</p>

									<h3>Subscribe to newsletter</h3>

									<form>
									  <div class="form-group">
									    <label class="sr-only" for="exampleInputEmail1">Email address</label>
									    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									  </div>
									  <button type="submit" class="btn btn-primary">Subscribe</button>
									</form>

									<div class="social-link">
										<ul>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-flickr"></i></a></li>
										</ul>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-6 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3>Customer Care</h3>
									<ul>
										<li><a href="#">Customer Support</a></li>
										<li><a href="#">Platinum Support</a></li>
										<li><a href="#">Gold Support</a></li>
										<li><a href="#">Standard Support</a></li>
										<li><a href="#">Training</a></li>
										<li><a href="#">Online Training</a></li>
										<li><a href="#">Custom Training</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3>Information</h3>
									<ul>
										<li><a href="#">Press</a></li>
										<li><a href="#">Articles</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Awards</a></li>
										<li><a href="#">Video Clips</a></li>
										<li><a href="#">Blog</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3>Solutions</h3>
									<ul>
										<li><a href="#">Contact Center</a></li>
										<li><a href="#">Knowledge</a></li>
										<li><a href="#">Management</a></li>
										<li><a href="#">Web Self-Service</a></li>
										<li><a href="#">Performance Metrics</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</section>


				<footer class="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright">
									<p>Copyright &copy; 2015 primex . All Rights Reserved. Designed by <a href="http://www.uicookies.com">uicookies.com</a> </p>
								</div><!-- /.copyright -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</footer>

	        </div> <!-- .st-content-inner -->
	      </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->


		<!-- ======== OFFCANVAS MENU ========= -->
    	<div class="offcanvas-menu offcanvas-effect visible-xs">
	        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	        <h3>Sidebar Menu</h3>
	        <div>
	          <div>
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
						</ul>
					</li>

					<li><a href="#">About</a>
						<ul>
							<li class="active"><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
							<li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
						</ul>
					</li>

					<li><a href="#">Blog</a>
						<ul>
							<li><a href="blog.html"><i class="fa fa-pencil-square-o"></i> Standard Blog</a></li>
							<li><a href="blog-single.html"><i class="fa fa-pencil"></i> Single Article</a></li>
						</ul>
					</li>

					<li><a href="#">Portfolio</a>
						<ul>
							<li><a href="portfolio-four.html"><i class="fa fa-picture-o"></i> Four Column</a></li>
							<li><a href="portfolio-three.html"><i class="fa fa-paper-plane-o"></i> Three Column</a></li>
							<li><a href="portfolio-two.html"><i class="fa fa-magic"></i> Two Column</a></li>
						</ul>
					</li>


					<li><a href="#">Pages</a>
						<ul>
							<li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
							<li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
							<li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
							<li><a href="typography.html"><i class="fa fa-puzzle-piece"></i> Typography Page</a></li>
						</ul>
					</li>

					<li><a href="#">Contact</a>
						<ul>
							<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
						</ul>
					</li>
				</ul>
	          </div>
	        </div>
    	  </div><!-- .offcanvas-menu -->
		</div><!-- /st-container -->



		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>


	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- wow.min.js -->
	    <script src="js/wow.min.js"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	    <!-- owl-carousel -->
	    <script src="owl-carousel/owl.carousel.min.js"></script>
	    <!-- smoothscroll -->
	    <script src="js/smoothscroll.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- easypiechart -->
		<script src="js/jquery.easypiechart.min.js"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="js/jquery.easing.min.js"></script>
		<!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="js/jquery.shuffle.min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>
