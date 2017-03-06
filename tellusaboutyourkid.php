<?php
require_once("Includes/db.php");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/lunchboxlogo.png">
	<link rel="icon" type="image/png" href="assets/img/lunchboxlogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sign Up | MunchKit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="signup-page">
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
        		<a class="navbar-brand" href="index.php"> MunchKit</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
						<a href="about-us.php">
							<i class="material-icons">apps</i> About Us
						</a>
					</li>
					<li>
                        <a href="meals-page.php">
                            <i class="material-icons">restaurant</i> Our Meals
                        </a>
                    </li>
					<li>
                        <a href="pricing.php">
                            <i class="material-icons">attach_money</i> Pricing Page
                        </a>
                    </li>
                    <li>
                        <a href="contact-us.php">
                            <i class="material-icons">location_on</i> Contact Us
                        </a>
                    </li>

					 <li>
                        <a href="profile-page.php">
                            <i class="material-icons">account_circle</i> My Account
                        </a>
                    </li>

					<li>
						<a href="pricing.php" class="btn btn-rose btn-round">
							<i class="material-icons">shopping_cart</i> Join Us Now
						</a>
					</li>
        		</ul>
        	</div>
    	</div>
    </nav>


	<div class="page-header header-filter" filter-color="none" style="background-image: url('assets/img/landingbg.jpg'); background-size: cover; background-position: top center;">
    	<div class="container">
			<div class="row">
    			<div class="col-md-10 col-md-offset-1">

					<div class="card card-signup">
                        <h2 class="card-title text-center">Tell Us About You & Your Kid!</h2>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
            					<div class="info info-horizontal">
            						<div class="icon icon-rose">
            							<i class="material-icons">face</i>
            						</div>
            						<div class="description">
            							<h4 class="info-title">Customized to your child</h4>
            							<p class="description">
            								Every child is unique and so is their taste buds! Your kid's health is our number one priority so let us know about their dietary restrictions and allergies so that we can meet those needs. 
            							</p>
            						</div>
            		        	</div>

            					<div class="info info-horizontal">
            						<div class="icon icon-primary">
            							<i class="material-icons">group</i>
            						</div>
            						<div class="description">
            							<h4 class="info-title">More than one child?</h4>
            							<p class="description">
            								Add as many children you have! Click on the 'add child' button below.
            							</p>
            						</div>
            					</div>

            					<div class="info info-horizontal">
            						<div class="icon icon-info">
            							<i class="material-icons">redeem</i>
            						</div>
            						<div class="description">
            							<h4 class="info-title">PayItForward</h4>
            							<p class="description">
            								At MunchKit, we believe access to nutritious, well-balanced meals is not a priviledge but a right to children. By purchasing and donating an extra meal using the 'PayItForward' button, MunchKit will match that donation and deliver the meals to a student who cannot afford lunch in your local school area.
            							</p>
            						</div>
            					</div>
            				</div>
                            <div class="col-md-5">
                            <h4 class="info-title">Tell Us A Little About You</h4>
								<form class="form" method="" action="">
									<div class="content">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<input type="text" class="form-control" placeholder="First Name...">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<input type="text" class="form-control" placeholder="Last Name...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<input type="text" class="form-control" placeholder="Email...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">phone</i>
											</span>
											<input type="text" class="form-control" placeholder="Phone...">
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">local_shipping</i>
											</span>
											<input type="password" placeholder="Address to Deliver..." class="form-control" />
										</div>
										
										<h4 class="info-title">Tell Us About Your MunchKID</h4>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">child_care</i>
											</span>
											<input type="text" class="form-control" placeholder="First Name...">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">restaurant</i>
											</span>
											<input type="text" class="form-control" placeholder="Diet ...">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">priority_high</i>
											</span>
											<input type="text" class="form-control" placeholder="Allergies...">
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">textsms</i>
											</span>
											<input type="text" class="form-control" placeholder="Additional Notes...">
										</div>
										<div class="footer text-center">
											<a href="#pablo" class="btn btn-primary btn-round">
											<i class="material-icons">person_add</i> Add Child
										</a>
										</div>
										
										<!-- If you want to add a checkbox to this form, uncomment this code -->

										<div class="checkbox">
											<label>
												<input type="checkbox" name="optionsCheckboxes" unchecked>
												I agree to the <a href="#something">terms and conditions</a>.
											</label>
										</div>
									</div>
									<div class="footer text-center">
										<a href="#pablo" class="btn btn-primary btn-round">Payment & Delivery</a>
									</div>
								</form>
                            </div>
                        </div>
                	</div>

                </div>
            </div>
		</div>

		<footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
					<ul>
						<li>
							<a href="index.php">
								MunchKit
							</a>
						</li>
						<li>
							<a href="about-us.php">
							   About Us
							</a>
						</li>
						<li>
							<a href="contact-us.php">
								Contact Us
							</a>
						</li>
					</ul>
	            </nav>
	            <div class="copyright pull-right">
	                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">MunchKit</a>
	            </div>
	        </div>
	    </footer>

    </div>


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
