<?php
require_once("Includes/db.php");
session_start();
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/lunchboxlogo.png">
    <link rel="icon" type="image/png" href="assets/img/lunchboxlogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Plan | MunchKit</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="choosePlan">
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

	<div class="page-header header-filter" style="background-image: url('assets/img/food/veggies_chicken.jpg'); background-size: cover; background-position: top center;">
		<div class="container" style="padding-top: 0px;">
			<div class="pricing-2" id="pricing" style="padding-bottom: 0px;>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="title">Ready to Join us at MunchKit?</h2>
						<ul class="nav nav-pills nav-pills-rose" role="tablist">
							<li class="active">
								<a href="#personal" role="tab" data-toggle="tab">
									Ages 5-11
								</a>
							</li>
							<li>
								<a href="#commercial" role="tab" data-toggle="tab">
									Ages 12+
								</a>
							</li>
						</ul>
					</div>

					<div class="col-md-8 col-md-offset-2">
						<div class="tab-content tab-space">
							<div class="tab-pane fade in active" id="personal">
								<form class="form" method="POST" action="orderEntry.php">
									<div class="col-md-4">
										<div class="card card-pricing card-raised">
											<div class="content">
												<h6 class="category text-info">1 Meal A Week (Trial)</h6>
												<h1 class="card-title"><small>$</small>10.25<small>/meal</small></h1>
												<h6 class="category text-info">(Trial is available for 8 weeks)</h6>
												<ul>
													<li><b>Free Delivery</b></li>
													<li><b>Recyclable</b> Containers</li>
												</ul>

												<input type="hidden" name="numMeals" value="1">
												<input type="submit" class="btn btn-rose btn-raised btn-round" value="Get Started">
												
											</div>
										</div>
									</div>
								</form>
								<form class="form" method="POST" action="orderEntry.php">
									<div class="col-md-4">
										<div class="card card-pricing card-raised">
											<div class="content content-rose">
												<h6 class="category text-info">5 Meals A Week</h6>
												<h1 class="card-title"><small>$</small>8<small>/meal</small></h1>
												<h6 class="category text-info">($40 per week + tax)</h6>
												<ul>
													<li><b>Free Delivery</b></li>
													<li><b>Reusable</b> Containers</li>
													<li><b>Customized</b> LunchBoxes</li>
													<li><b>Reusable</b> Totebag</li>
													<li><b>Access</b> to PayItForward program</b></li>
													<!-- <li><b>+ more!</b></li> -->
												</ul>
												<input type="hidden" name="numMeals" value="5">
												<input type="submit" class="btn btn-rose btn-raised btn-round" value="Get Started">
											</div>
										</div>
									</div>
								</form>
								<form class="form" method="POST" action="orderEntry.php">
									<div class="col-md-4">
										<div class="card card-pricing card-raised">
											<div class="content">
												<h6 class="category text-info">3 Meals A Week</h6>
												<h1 class="card-title"><small>$</small>9.25<small>/meal</small></h1>
												<h6 class="category text-info">($27.75 per week + tax)</h6>
												<ul>
													<li><b>Free Delivery</b></li>
													<li><b>Reusable</b> Containers</li>
													<li><b>Customized</b> LunchBoxes</li>
													<li><b>Reusable</b> Totebag</li>
												</ul>
												<input type="hidden" name="numMeals" value="3">
												<input type="submit" class="btn btn-rose btn-raised btn-round" value="Get Started">
											</div>
										</div>
									</div>
								</form>
							</div>

							<div class="tab-pane fade" id="commercial">
								<form class="form" method="POST" action="orderEntry.php">
									<div class="col-md-4">
										<div class="card card-pricing card-raised">
											<div class="content">
												<h6 class="category text-info">1 Meal A Week (Trial)</h6>
												<h1 class="card-title"><small>$</small>10.25<small>/meal</small></h1>
												<h6 class="category text-info">(Trial is available for 8 weeks)</h6>
												<ul>
													<li><b>Free Delivery</b></li>
													<li><b>Recyclable</b> Containers</li>
												</ul>
												<input type="hidden" name="numMeals" value="1">
												<input type="submit" class="btn btn-rose btn-raised btn-round" value="Get Started">
											</div>
										</div>
									</div>
								</form>
								<form class="form" method="POST" action="orderEntry.php">
									<div class="col-md-4">
										<div class="card card-pricing card-raised">
											<div class="content content-rose">
												<h6 class="category text-info">5 Meals A Week</h6>
												<h1 class="card-title"><small>$</small>8.50<small>/meal</small></h1>
												<h6 class="category text-info">($42.50 per week + tax)</h6>
												<ul>
													<li><b>Free Delivery</b></li>
													<li><b>Reusable</b> Containers</li>
													<li><b>Customized</b> LunchBoxes</li>
													<li><b>Reusable</b> Totebag</li>
													<li><b>Access</b> to PayItForward program</b></li>
													<!-- <li><b>more!</b></li> -->
												</ul>
												<input type="hidden" name="numMeals" value="5">
												<input type="submit" class="btn btn-rose btn-raised btn-round" value="Get Started">
											</div>
										</div>
									</div>
								</form>
								<form class="form" method="POST" action="orderEntry.php">
									<div class="col-md-4">
										<div class="card card-pricing card-raised">
											<div class="content">
												<h6 class="category text-info">3 Meals A Week</h6>
												<h1 class="card-title"><small>$</small>9.25<small>/meal</small></h1>
												<h6 class="category text-info">($27.75 per week + tax)</h6>
												<ul>
													<li><b>Free Delivery</b></li>
													<li><b>Reusable</b> Containers</li>
													<li><b>Customized</b> LunchBoxes</li>
													<li><b>Reusable</b> Totebag</li>
												</ul>
												<input type="hidden" name="numMeals" value="3">
												<input type="submit" class="btn btn-rose btn-raised btn-round" value="Get Started">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-md-8 col-md-offset-2 text-center" >
						<p class="description" style="color:#1cb5b9" >You can <b>Update Your Account</b> and <b>Suspend or Cancel Anytime</b>. Just let us know <b>3 days</b> a head of time process your request.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- <footer class="footer">
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
							<a href="contact-us">
							   Contact Us
							</a>
						</li>
						<li>
							<a href="http://www.creative-tim.com/license">
								Licenses
							</a>
						</li>
					</ul>
	            </nav>
	            <div class="copyright pull-right">
	                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">MunchKit</a>
	            </div>
	        </div>
	    </footer> -->

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
