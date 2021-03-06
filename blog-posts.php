<?php
session_start();
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;
}
// else
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/lunchboxlogo.png">
	<link rel="icon" type="image/png" href="assets/img/lunchboxlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Blog Posts | MunchKit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="blog-posts">

<!-- For GOOGLE ANALYTICS  -->
<?php include_once("Includes/analyticstracking.php") ?>


	<nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                    <img src="assets/img/lunchboxlogo.png"  width="45" height="45" border="0">
                </a>
                <a class="navbar-brand" href="index.php">MUNCHKIT</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                   <li>
                        <a href="meals-page.php">
                            <!-- <i class="material-icons">restaurant</i> --> Our Meals
                        </a>
                    </li>
                    <li>
                        <a href=#pablo>
                            <!-- <i class="material-icons">restaurant</i> --> How It Works
                        </a>
                    </li>
                    
                    <!-- added by alex -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_day</i> <!-- More -->
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="pricing.php">
                                    <!-- <i class="material-icons">attach_money</i> --> Pricing
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.php">
                                    <!-- <i class="material-icons">location_on</i> --> Contact Us
                                </a>
                            </li>
                             <li>
                                <a href="about-us.php">
                                    <!-- <i class="material-icons">apps</i>  -->About Us
                                </a>
                            </li>

                        </ul>
                    </li>

                    
                    <!-- end of add -->

                    <!-- if you're logged in, this is the MyAccount tab, else its sign in tab -->
                    <?php
                    if ($loggedIn){
                    ?>
                    <li>
                        <a href="profile-page.php">
                            <!-- <i class="material-icons">account_circle</i> --> My Account
                        </a>
                    </li>
                    <li>
                      <a href="logout.php">
                        Log Out
                      </a>
                    </li>
                    <li>
                        <a href="choosePlan.php" class="btn btn-rose btn-square">
                             Order Now
                        </a>
                    </li>
                    <?php    
                    }else{
                    ?>
                    <li>
                        <a href="login-page.php">
                            <!-- <i class="material-icons">account_circle</i> --> Log In
                        </a>
                    </li>
                    <li>
                        <a href="pricing.php" class="btn btn-rose btn-square">
                             Sign Up
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <!-- End of myaccount tab/ sign in tab -->

                    <!-- <li>
                        <a href="pricing.php" class="btn btn-rose btn-square">
                             Sign Up
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

	<div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('assets/img/examples/card-project5.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="title">A Place To Discover New Stories About Your Local Community, Food, and More</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="container">

			<div class="section">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<ul class="nav nav-pills nav-pills-primary">
						  <li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
						  <li><a href="#pill2" data-toggle="tab">World</a></li>
						  <li><a href="#pill3" data-toggle="tab">Arts</a></li>
						  <li><a href="#pill4" data-toggle="tab">Tech</a></li>
						  <li><a href="#pill5" data-toggle="tab">Business</a></li>
						</ul>
						<div class="tab-content tab-space">
							<div class="tab-pane active" id="pill1">

							</div>
							<div class="tab-pane" id="pill2">

							</div>
							<div class="tab-pane" id="pill3">

							</div>
							<div class="tab-pane" id="pill4">

							</div>
						</div>

					</div>
				</div>

				<div class="row">

					<div class="col-md-6">
						<div class="card card-raised card-background" style="background-image: url('assets/img/examples/office2.jpg')">
							<div class="content">
								<h6 class="category text-info">Worlds</h6>
								<a href="#pablo">
									<h3 class="card-title">The Best Productivity Apps on Market</h3>
								</a>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<a href="#pablo" class="btn btn-danger btn-round">
									<i class="material-icons">format_align_left</i> Read Article
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-raised card-background" style="background-image: url('assets/img/examples/blog8.jpg')">
							<div class="content">
								<h6 class="category text-info">Business</h6>
								<h3 class="card-title">Working on Wallstreet is Not So Easy</h3>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<a href="#pablo" class="btn btn-primary btn-round">
									<i class="material-icons">format_align_left</i> Read Article
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="card card-raised card-background" style="background-image: url('assets/img/examples/card-project6.jpg')">
							<div class="content">
								<h6 class="category text-info">Marketing</h6>
								<h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<a href="#pablo" class="btn btn-warning btn-round">
									<i class="material-icons">subject</i> Read Case Study
								</a>
								<a href="#pablo" class="btn btn-white btn-just-icon btn-simple" title="Save to Pocket" rel="tooltip">
									<i class="fa fa-get-pocket"></i>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="section">
				<h3 class="title text-center">You may also be interested in</h3>
				<br />
				<div class="row">
					<div class="col-md-4">
						<div class="card card-plain card-blog">
							<div class="card-image">
								<a href="#pablo">
									<img class="img img-raised" src="assets/img/bg5.jpg" />
								</a>
							</div>

							<div class="content">
								<h6 class="category text-info">Enterprise</h6>
								<h4 class="card-title">
									<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
								</h4>
								<p class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-plain card-blog">
							<div class="card-image">
								<a href="#pablo">
									<img class="img img-raised" src="assets/img/examples/blog5.jpg" />
								</a>
							</div>
							<div class="content">
								<h6 class="category text-success">
									Startups
								</h6>
								<h4 class="card-title">
									<a href="#pablo">Lyft launching cross-platform service this week</a>
								</h4>
								<p class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-plain card-blog">
							<div class="card-image">
								<a href="#pablo">
									<img class="img img-raised" src="assets/img/examples/blog6.jpg" />
								</a>
							</div>

							<div class="content">
								<h6 class="category text-danger">
									<i class="material-icons">trending_up</i> Enterprise
								</h6>
								<h4 class="card-title">
									<a href="#pablo">6 insights into the French Fashion landscape</a>
								</h4>
								<p class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="team-5 section-image" style="background-image: url('assets/img/bg10.jpg')">

			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<div class="card card-profile card-plain">
							<div class="col-md-5">
								<div class="card-image">
									<a href="#pablo">
										<img class="img" src="assets/img/faces/card-profile1-square.jpg" />
									</a>
								</div>
							</div>
							<div class="col-md-7">
								<div class="content">
									<h4 class="card-title">Alec Thompson</h4>
									<h6 class="category text-muted">Author of the Month</h6>

									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth...
									</p>

									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-profile card-plain">
							<div class="col-md-5">
								<div class="card-image">
									<a href="#pablo">
										<img class="img" src="assets/img/faces/card-profile4-square.jpg" />
									</a>
								</div>
							</div>
							<div class="col-md-7">
								<div class="content">
									<h4 class="card-title">Kendall Andrew</h4>
									<h6 class="category text-muted">Author of the Week</h6>

									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth...
									</p>

									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-linkedin"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-dribbble"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<div class="subscribe-line">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="title">Get Tips & Tricks every Week!</h4>
						<p class="description">
							Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
						</p>
					</div>
					<div class="col-md-6">
						<div class="card card-plain card-form-horizontal">
							<div class="content">
								<form method="" action="">
									<div class="row">
										<div class="col-md-8">

											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">mail</i>
												</span>
												<input type="email" value="" placeholder="Your Email..." class="form-control" />
											</div>
										</div>
										<div class="col-md-4">
											<button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
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

	<footer class="footer">
		<div class="container">
			<a class="footer-brand" href="index.php">MunchKit</a>


			<ul class="pull-center">
				<li>
					<a href="index.php">
						MunchKit
					</a>
				</li>
				<li>
					<a href="blog-posts.php">
					   Blog
					</a>
				</li>
				<li>
					<a href="pricing.php">
						Pricing
					</a>
				</li>
				<li>
					<a href="contact-us.php">
						Contact Us
					</a>
				</li>
			</ul>

			<ul class="social-buttons pull-right">
				<li>
					<a href="https://twitter.com/munchkitco" target="_blank" class="btn btn-just-icon btn-twitter btn-simple">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/MunchKitCo/" target="_blank" class="btn btn-just-icon btn-facebook btn-simple">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/munchkitco/" target="_blank" class="btn btn-just-icon btn-instagram btn-simple">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
			</ul>

		</div>
	</footer>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
	<script src="assets/js/jquery.dropdown.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/jquery.tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>

	<!-- Plugin For Google Maps -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

</html>
