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

	<title>About Us | MunchKit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="about-us">

<!-- for GOOGLE ANALYTICS  -->
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
                        <a href="signup.php" class="btn btn-rose btn-square">
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
    <div class="main" style="background-color:#FFFFFF;color:#FFFFFF;padding:35px;">
    </div>
	<div class="page-header header-filter" data-parallax="" style="background-image: url('assets/img/theteam.jpg');">

		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
                    <h1 class="title">About Us</h1>
                        <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
                </div>
            </div>
        </div>
	</div>

	<div class="main">
		<div class="container">
            <div class="about-description text-center">
                <div class="row">
    				<div class="col-md-8 col-md-offset-2">
    					<h5 class="description" align="left">We are on mission. A mission to reconnect families with real, wholesome, good food! Industrialization and processing of food has let us achieve ungodly societal advantages in the last century but with it came so many health consequences we had not anticipated. At MunchKit we realize that to the problems of health, global warming, societal issues can be tackled with the simple act of cooking. Caring about what we put into our bodies and celebrating the people dedicated to providing wholesome, nutritious ingredients! We are excited for you to join us on our journey to a better you, a better community, and a better world!</h5>
    				</div>
    			</div>
            </div>
            <div class="about-team team-1">
    			<div class="row">
    				<div class="col-md-9 col-md-offset-2 text-center">
    					<h2 class="title" >We are a group of foodies, nerds, and rockstars!</h2>
    					<h5 class="description">MunchKit has a passionate and dedicated team whose sole purpose is to help making eating right an easy choice.</h5>
    				</div>
    			</div>

    			<div class="row">
    				<div class="col-md-3">
    					<div class="card card-profile card-plain">
    						<div class="card-avatar">
    							<a href="#pablo">
    								<img class="img" src="assets/img/faces/alexheadshot.png" />
    							</a>
    						</div>

    						<div class="content">
    							<h4 class="card-title">Alex Kwon</h4>
    							<h6 class="category text-muted">CEO / Co-Founder</h6>

    							<p class="card-description" align="left">
    								"If you dare to change the world you must first change your community. To change your community you must have the courage to change yourself. Only then can we truly invoke change."
    							</p>
    							<div class="footer">
    								<!-- <a href="https://www.instagram.com/kwonald/" target="_blank" class="btn btn-just-icon btn-simple btn-instagram"><i class="fa fa-instagram"></i></a> -->
    								<a href="https://www.linkedin.com/in/alex-kwon-56351b71/" target="_blank" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-3">
    					<div class="card card-profile card-plain">
    						<div class="card-avatar">
    							<a href="#pablo">
    								<img class="img" src="assets/img/faces/costaheadshot.jpg" />
    							</a>
    						</div>

    						<div class="content">
    							<h4 class="card-title">Costa Lambrinoudis</h4>
    							<h6 class="category text-muted">CSO / Co-Founder</h6>

    							<p class="card-description" align="left">
    								"I like math and making black holes on my computer."
    							</p>
    							<div class="footer">
    								<a href="https://www.linkedin.com/in/costa-lambrinoudis-9a29bb136/" target="_blank" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-3">
    					<div class="card card-profile card-plain">
    						<div class="card-avatar">
    							<a href="#pablo">
    								<img class="img" src="assets/img/faces/christian.jpg" />
    							</a>
    						</div>

    						<div class="content">
    							<h4 class="card-title">Christian Mike</h4>
    							<h6 class="category text-muted">Web Developer</h6>

    							<p class="card-description" align="left">
    								"If this website is buggy, it wasn't me."
    							</p>
    							<div class="footer">
    								<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
    								<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-3">
    					<div class="card card-profile card-plain">
    						<div class="card-avatar">
    							<a href="#pablo">
    								<img class="img" src="assets/img/faces/avatar.jpg" />
    							</a>
    						</div>

    						<div class="content">
    							<h4 class="card-title">Rebecca Stormvile</h4>
    							<h6 class="category text-muted">Marketing Director</h6>

    							<p class="card-description" align="left">
    								"I like instagram. and liking photos    "
    							</p>
    							<div class="footer">
    								<a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
    								<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
    								<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>

            </div>
            <div class="about-services features-2">
                <div class="row">
    				<div class="col-md-8 col-md-offset-2 text-center">
    					<h2 class="title">Our Values</h2>
    					<h5 class="description">To make well-balanced, nutritious meals accessible to all people while minimizing our impact to the enviornment. Access to fresh, sustainably sourced foods should be a right to all people, it is not a priviledge.</h5>
    				</div>
    			</div>

    			<div class="row">
    				<div class="col-md-4">
    		           	<div class="info info-horizontal">
    						<div class="icon icon-rose">
    							<!-- <i class="material-icons">gesture</i> -->
    						</div>
    						<div class="description">
    							<h4 class="info-title">Empowering Your Local Communities</h4>
    							<p>We always turn to your local farmers, butchers and artisans to make your child's lunch! We celebrate independent entrepreneurs and want to help you connect with your local community! </p>
    							<!-- <a href="#pablo">Find more...</a> -->
    						</div>
    		        	</div>

    		        </div>

    				<div class="col-md-4">
    					<div class="info info-horizontal">
    						<div class="icon icon-rose">
    							<!-- <i class="material-icons">build</i> -->
    						</div>
    						<div class="description">
    							<h4 class="info-title">Striving for zero waste</h4>
    							<p>We are always aware about our impact to our environment and we obsess over how we can reduce it! MunchKit is very much a reduce, if not THEN recuse, if not THEN recycle.</p>
    							<!-- <a href="#pablo">Find more...</a> -->
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
    					<div class="info info-horizontal">
    						<div class="icon icon-rose">
    							<!-- <i class="material-icons">mode_edit</i> -->
    						</div>
    						<div class="description">
    							<h4 class="info-title">We don't compromise on our values</h4>
    							<p>Any decision we make, as a team we ask, "Does this or person align with our values?" If the answer is 'no' then we don't go through with it or don't partner with that person or group. If the answer is 'YES YES YES YES!' then you are sure to see us trying our hardest to make it happen!!!</p>
    							<!-- <a href="#pablo">Find more...</a> -->
    						</div>
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
					<!-- <li>
						<a href="http://www.creative-tim.com/license">
							Licenses
						</a>
					</li> -->
				</ul>
            </nav>
            <div class="copyright pull-right">
                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by MunchKit
            </div>
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
