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

	<title>Order Summary | MunchKit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>


<body class="orderSummary">

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
                                
	                            <h2 class="title"> Summary of Your Order </h2>
								
								
	                        </div>
	                    </div>
    	            </div>
                </div>


				<div class="row">
                    <form class="form" method="POST" action="updateOrder.php">  
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $i = 0;
                        $num = (int)$_POST['numOrders'];
                        $num5meals=0;
                        $num3meals=0;
                        $num1meals=0;
                        $cost = 0;
                        $changesInOrder = FALSE;
                        $oldNum5Meals=0;
                        $oldNum3Meals=0;
                        $oldNum1Meals=0;
                
                        while($i <= $num){
                            $mealPlan = $_POST['mealPlan_'.$i];
                            $oldMealPlan = munchKitDB::getInstance()->get_order_by_idMunchKid($_POST['idMunchKid_'.$i]);
                            if($oldMealPlan != NULL && $mealPlan != $oldMealPlan){ $changesInOrder = TRUE; }
                            if($mealPlan == '5'){ $num5meals++; }
                            else if($mealPlan == '3'){ $num3meals++; }
                            else if ($mealPlan == '1'){ $num1meals++; }
                            if($oldMealPlan == '5'){ $oldNum5Meals++; }
                            else if($oldMealPlan == '3'){ $oldNum3Meals++; }
                            else if ($oldMealPlan == '1'){ $oldNum1Meals++; }

                            ?>
                            <div class="col-md-5 ">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-7">
                                    <div class="content">
                                        <h4 class="card-title"> <?php echo $_POST['f_name_'. $i]; ?> </h4>
                                        <h6 class="category text-muted"> <?php echo $_POST['dietType_' . $i]; ?> </h6>
                                        <h6 class="category text-muted"> <?php if($oldMealPlan != NULL && $mealPlan != $oldMealPlan){ echo "Meal plan changed from ". $oldMealPlan . " to " . $mealPlan . " meals a week"; } else {echo $mealPlan . ' Meal(s) A Week';} ?> </h6>
                                    </div>
                                </div>
                            </div> 
                            <input type="hidden" name= <?php echo 'idMunchKid_' . $i; ?> value=<?php echo $_POST['idMunchKid_' .$i]; ?> />
                            <input type="hidden" name= <?php echo 'f_name_' . $i; ?> value=<?php echo $_POST['f_name_' . $i]; ?> />
                            <input type="hidden" name=<?php echo "dietType_" . $i; ?> value=<?php echo $_POST['dietType_' . $i]; ?> />
                            <input type="hidden" name=<?php echo "allergies" .$i; ?> value=<?php echo $_POST['allergies_' . $i]; ?> />
                            <input type="hidden" name=<?php echo "numOrders"; ?> value=<?php echo $i; ?>> 
                            <input type="hidden" name= <?php echo 'mealPlan_' . $i; ?> value=<?php echo $mealPlan; ?> />
                            <?php
                            $i++;   
                            }
                        } ?>
                        <div class="footer text-center">
                            <input type="submit" class="btn btn-primary btn-round" value="checkout" style="margin-top: 50px;">
                        </div>
                    </form>
                </div>
                
                <!-- IF THERE ARE CHANGED IN THE ORDER THE CHANGES ARE SHOWN -->
                <?php
                if($changesInOrder){
                ?>
                <h4 class="card-title"> ------------------ BEFORE ---------------------- </h4>
                <h6> <?php echo 'Number of 5 meal plans: '.$oldNum5Meals . '<br> 3 meal plans: '. $oldNum3Meals . '<br>1 meal plans: ' . $oldNum1Meals ?></h6>
                <h6> <?php echo '$' . 5*8*$oldNum5Meals . ' CDN<br>'. '$' . 3*9.25*$oldNum3Meals . ' CDN<br>' . '$'. 10.25*$oldNum1Meals .' CDN' ?></h6>
                <?php $total = 5*8*$oldNum5Meals+3*9.25*$oldNum3Meals+10.25*$oldNum1Meals; ?>
                <h6> <?php echo 'TOTAL-------------------------------------------------------------- $' . $total .' CDN'; ?></h6>
                <br>
                <br>
                <br>
                <h4 class="card-title"> ------------------ NOW ---------------------- </h4>
                <?php
                }
                ?>



                <h6> <?php echo 'Number of 5 meal plans: '.$num5meals . '<br> 3 meal plans: '. $num3meals . '<br>1 meal plans: ' . $num1meals ?></h6>
                <h6> <?php echo '$' . 5*8*$num5meals . ' CDN<br>'. '$' . 3*9.25*$num3meals . ' CDN<br>' . '$'. 10.25*$num1meals .' CDN' ?></h6>
                <h6> <?php echo 'Your munchkits will be delivered to you: ' . munchKitDB::getInstance()->get_next_delivery_date(); ?> </h6>
                <?php $total = 5*8*$num5meals+3*9.25*$num3meals+10.25*$num1meals; ?>
                <h6> <?php echo 'TOTAL-------------------------------------------------------------- $' . $total .' CDN'; ?></h6>
                <h6> Free shipping. Taxes are added at checkout. </h6>
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