<?php
require_once('Includes/db.php');
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

	<title>Your Order | MunchKit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>


<body class="orderEntry">
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

<div class="page-header header-filter header-small" data-parallax="active" style="background-image: url('assets/img/food/berries.jpeg');"></div>
	

	<div class="main">
		<div class="profile-content">
            <div class="container" style="padding-bottom: 200px;">

                <div class="row">
	                <div class="col-xs-6 col-xs-offset-3" style="padding-top: 70px;">
        	           <div class="profile">
	                        <!-- <div class="avatar">
	                            <img src="assets/img/squirrel.png">
	                        </div> -->
	                        <div >
                                
	                            <h2 class="title"> Tell Us About Your Kid </h2>
								
								
	                        </div>
	                    </div>
    	            </div>
                </div>


				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="profile-tabs">
		                    <div class="nav-align-center">
								<ul class="nav nav-pills nav-pills-icons" role="tablist">
									<li class="active">
			                            <a href="#work" role="tab" data-toggle="tab">
											<!-- <i class="material-icons">schedule</i> -->
											Order
			                            </a>
			                        </li>
                                    <li>
										<a href="#connections" role="tab" data-toggle="tab">
											<!-- <i class="material-icons">people</i> -->
											Add/Edit Child Profile
										</a>
									</li>
			                        
			                    </ul>


							</div>
						</div>
						<!-- End Profile Tabs -->
					</div>
                </div>
                <div class="tab-content">
			        <div class="tab-pane active work" id="work">
				        <div class="row">
	                        <div class="col-md-7 col-md-offset-3">
		                        <!-- <h4 class="title">Cancel or Suspend Subscription</h4> -->
		                        
                                <div class="row collections">
                                <!-- Alex ADD -->
                                    <div class="row">
	                                    <form class="form" method="POST" action="updateOrder.php">	
	                                        <?php
	                                            $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
	                                            $i=0;
	                                            if($result != NULL){
	                                                while ($row = $result->fetch_assoc()) {
	                                                    $idMunchKid = $row['idMunchKids'];
	                                                    $f_name = $row['f_name'];
	                                                    $dietType = $row['dietType'];
	                                                    $i++;
	                                                    ?>
	                                                    <div class="col-md-5 ">
	                                                        <!-- <div class="card card-profile card-plain"> -->
	                                                            <div class="col-md-5">
	                                                            </div>
	                                                            <div class="col-md-7">
	                                                                <div class="content">
	                                                                    <h4 class="card-title"> <?php echo $f_name ?> </h4>
	                                                                    <h6 class="category text-muted"> <?php echo $dietType ?> </h6>
	                                                                    <select id="mealPlan" name= <?php echo 'mealPlan_' . $i ?> > 
	                                                                        <option value="5">5 meals/wk ($8/meal)  </option>
	                                                                        <option value="3">3 meals/wk ($9.25/meal)  </option>
	                                                                        <option value="1">1 meal/wk ($10.25/meal)  </option>

	                                                                    </select>
	                                                                    <input type="hidden" name= <?php echo 'idMunchKid_' . $i ?> value=<?php echo $idMunchKid ?> />
	                                                                    <input type="hidden" name= <?php echo 'f_name_' . $i ?> value=<?php echo $f_name ?> />
	                                                                    <input type="hidden" name=<?php echo "dietType_" . $i ?> value=<?php echo $dietType ?> />
	                                                                    <input type="hidden" name=<?php echo "allergies" .$i ?> value="" />
	                                                                    <input type="hidden" name="numOrders" value=<?php echo $i ?> />
	                                                                </div>
	                                                            </div>
	                                                        <!-- </div> -->
	                                                    </div>
	                                            <?php
	                                                }

	                                            }
	                                            else{
	                                            ?>
	                                            <h6> You have no MunchKids to display! Please Add A Child By Clicking on our Add/Edit Child Profile Tab</h6>
	                                            <?php } ?>
	                                        <div class="footer text-center">
												<input type="submit" class="btn btn-primary btn-round" value="Almost Done!" style="margin-top: 50px;">
											</div>
	                                    </form>
                                    </div>
                                <!-- end of aadd -->


                                </div>
		                    </div>
	                    </div>
			        </div>
                    <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="card card-signup" style="width: 350px;"">
                                <form class="logon" method="POST" action="addMunchKidFromOE.php" style="width: 350px;">
                                    <div class="header header-primary text-center">
                                        <h4 class="card-title">Add a MunchKID</h4>
                                        
                                    </div>
                                    <div class="content">
                                        <div class="input-group">
                                           
                                            <input type="text" name ="f_name" required="" class="form-control" placeholder="First Name...">
                                            <input type="text" name="dietType" class="form-control" placeholder="Diet Type (Original, Vegetarian, etc)..."  >  
                                            <input type="text" name="allergies" placeholder="Allergies..." class="form-control" />
                                            <input type="hidden" name="userID" value=<?php echo munchKitDB::getInstance()->get_user_id_by_email($_SESSION['user']); ?> >    
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <!-- <a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Log In</a> -->
                                        <input type="submit" class="btn btn-primary btn-simple btn-wd btn-lg" value="Submit"/>
                                    </div>
                                </form>
                            </div>

                            <?php
                                $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
                                if($result != NULL){
                                    while ($row = $result->fetch_assoc()) {
                                        $f_name = $row['f_name'];
                                        $dietType = $row['dietType'];

                                        ?>
                                        <div class="col-md-5">
                                            <!-- <div class="card card-profile card-plain"> -->
                                                <div class="col-md-5">
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="content">
                                                        <h4 class="card-title"> <?php echo $f_name ?> </h4>
                                                        <h6 class="category text-muted"> <?php echo $dietType ?> </h6>

                                                        <p class="card-description">
                                                            Allergic to: peanuts, tofu
                                                        </p>
                                                        <input type="hidden" name="fname" value=<?php echo $f_name ?> />
                                                        <input type="hidden" name="dietType" value=<?php echo $dietType ?> />
                                                        <input type="hidden" name="allergies" value="" />

                                                        <button class="btn btn-fab btn-primary" rel="tooltip" title="edit">
                                                            <i class="material-icons">create</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                <?php
                                    }

                                }
                                else{
                                ?>
                                <h6> You have no MunchKids to display!</h6>
                                <?php } ?>
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