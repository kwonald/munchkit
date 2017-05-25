<?php
require_once('Includes/db.php');
session_start();
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;
}
$db = munchKitDB::getInstance();

if(isset($_POST['city'])){
    $city = $_POST['city'];
    $sql = "SELECT * FROM Zipcode WHERE city='" . $city ."'";
    $select = $db->query($sql);

    if($select->num_rows == 1){
        $row = $select->fetch_assoc();
        $zipcode = $row['zip'];
        $prov = $row['state'];
        $country = $row['country'];
        $available = $row['available'];   // if False, the service is not availble in this area 
        
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/lunchboxlogo.png">
    <link rel="icon" type="image/png" href="assets/img/lunchboxlogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Tell Us About You | MunchKit</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="signup-page">

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


	<div class="page-header header-filter" filter-color="none" style="background-color: #16a085; background-size: cover; background-position: top center;">
    	<div class="container">
			<div class="row">
    			<div class="col-md-10 col-md-offset-1">
            
                <!-- The form for munchkid info and parent info -->
                    <form class="form" method="POST" action="createUserAccount.php">
                        <!-- Determine number of kids to show n number of forms -->
                        <div class="card card-signup" style="margin-bottom: 200px;">
                            <h2 class="card-title text-center">How many MunchKids do you have?</h2>
                            <h3 class="card-title text-center">(Available for Ages 3 - 11)</h3>
                            <br>
                            <br>
                            <br>

                            <div class="row">
                                
                                <div class="col-md-6 col-md-offset-3">
                                    <center>
                                    <div class="controls">
                                      <label class="radio-inline" onchange="oneMunchKid()">
                                          <input type="radio" name="numKids" value="1" checked="checked"> 
                                              1 MunchKid
                                      </label>
                                      <label class="radio-inline" onchange="twoMunchKid()">
                                          <input type="radio" name="numKids" value="2" >
                                              2 MunchKids
                                      </label>
                                      <label class="radio-inline" onchange="threeMunchKid()">
                                          <input type="radio" name="numKids" value="3">
                                              3 MunchKids
                                      </label>
                                      <label class="radio-inline" onchange="fourMunchKid()">
                                          <input type="radio" name="numKids" value="4">
                                              4 MunchKids
                                      </label>
                                  </div>
                                  <br>
                                  <br>
                                  <!-- button that scrolls down to first munchkid -->
                                   <div id="munchkid_0_next">
                                        <center>
                                            <a href="#munchkid_1" class="btn btn-rose btn-round">
                                            Next
                                            </a>
                                        </center>
                                    </div>
                                  </center>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>


                        <!-- First MunchKid -->
    					<div class="card card-signup" id="munchkid_1">
                <h2 class="card-title text-center">New MunchKid!</h2>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
  								
    								<div class="content">
    									<!-- Text input-->
                      <div class="control-group">
                      <label class="control-label" for="f_name">First Name:</label>
                      <div class="controls">
                        <input name="f_name_1" class="form-control" type="text" placeholder="ex. John" class="input-large" required="">

                      </div>
                      </div>

                      <!-- Text input-->
                      <div class="control-group">
                        <label class="control-label" for="mealPlan">Meal Plan</label>
                        <div class="controls">
                            <label class="radio-inline">
                                <input type="radio" name="mealplan_1" value="1" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='1'){echo 'checked="checked"';} }?>> 
                                    1 Meal/Week
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="mealplan_1" value="3" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='3'){echo 'checked="checked"';} }?> >
                                    3 Meals/Week
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="mealplan_1" value="5" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='5'){echo 'checked="checked"';} }?>>
                                    5 Meals/Week
                            </label>
                        </div>
                      </div>

                      <!-- Text input-->
                      <div class="control-group">
                        <label class="control-label" for="dietType">Diet Type:</label>
                        <div class="controls">
                            <label class="radio-inline">
                                <input type="radio" name="dietType_1" value="original" checked="checked"> 
                                    Original
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="dietType_1" value="vegetarian" >
                                    Vegetarian
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="dietType_1" value="glutenfree">
                                    GF
                            </label>
                        </div>
                      </div>

                      <!-- text input-->
                      <div class="control-group">
                      <label class="control-label" for="allergies">Allergies:</label>
                      <div class="controls">
                        <!-- <input name="allergies" class="form-control" type="text" placeholder="List of allergies" class="input-large" required=""> -->
                        <div class="checkbox">
                          <label><input type="checkbox" name="allergies_1[]" value="milk">Milk</label>
                        
                          <label><input type="checkbox" name="allergies_1[]" value="eggs">Eggs</label>
                        
                          <label><input type="checkbox" name="allergies_1[]" value="peanuts">Peanuts</label>
                        
                          <label><input type="checkbox" name="allergies_1[]" value="fish">Fish</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" name="allergies_1[]" value="shellfish">Shellfish</label>
                       
                          <label><input type="checkbox" name="allergies_1[]" value="nuts">Tree Nuts</label>
                        
                          <label><input type="checkbox" name="allergies_1[]" value="wheat">Wheat</label>
                        
                          <label><input type="checkbox" name="allergies_1[]" value="soy">Soy</label>
                        </div>
                      </div>
                      </div>

                      <!-- Text input-->
                      <div class="control-group">
                      <label class="control-label" for="additionalNotes">Additional Notes:</label>
                      <div class="controls">
                        <input class="form-control" name="additionalNotes_1" type="text" placeholder="..." class="input-large" >
                      </div>
                      </div>
    								</div>
                  </div>
                </div>
                            <!-- Only one of these buttons are available. When there is another munchkid, the screen scrolls down to the next kid, if not, it scrolls down to the parent info card  -->
                            <div id="munchkid_1_next" style="display: none;">
                                <center>
                                    <a href="#munchkid_2" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <div id="munchkid_1_alt_next">
                                <center>
                                    <a href="#parentInfo" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <!-- end of alternating buttons  -->
                    	</div>

                        <!-- Second MunchKid -->
                        <div class="card card-signup" id="munchkid_2" style="display: none;">
                            <h2 class="card-title text-center">New MunchKid #2!</h2>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    
                                        <div class="content">
                                            <!-- Text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="f_name">First Name:</label>
                                            <div class="controls">
                                              <input name="f_name_2" class="form-control" type="text" placeholder="ex. John" class="input-large" value="">
                                            </div>
                                            </div>


                                            <!-- Text input-->
                                            <div class="control-group">
                                              <label class="control-label" for="mealPlan">Meal Plan</label>
                                              <div class="controls">
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_2" value="1" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='1'){echo 'checked="checked"';} }?>> 
                                                          1 Meal/Week
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_2" value="3" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='3'){echo 'checked="checked"';} }?>>
                                                          3 Meals/Week
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_2" value="5" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='5'){echo 'checked="checked"';} }?>>
                                                          5 Meals/Week
                                                  </label>
                                              </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                              <label class="control-label" for="dietType">Diet Type:</label>
                                              <div class="controls">
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_2" value="original" checked="checked"> 
                                                          Original
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_2" value="vegetarian" >
                                                          Vegetarian
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_2" value="glutenfree">
                                                          GF
                                                  </label>
                                              </div>
                                            </div>

                                            <!-- text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="allergies">Allergies:</label>
                                            <div class="controls">
                                              <!-- <input name="allergies" class="form-control" type="text" placeholder="List of allergies" class="input-large" required=""> -->
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="allergies_2[]" value="milk">Milk</label>
                                              
                                                <label><input type="checkbox" name="allergies_2[]" value="eggs">Eggs</label>
                                              
                                                <label><input type="checkbox" name="allergies_2[]" value="peanuts">Peanuts</label>
                                              
                                                <label><input type="checkbox" name="allergies_2[]" value="fish">Fish</label>
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="allergies_2[]" value="shellfish">Shellfish</label>
                                             
                                                <label><input type="checkbox" name="allergies_2[]" value="nuts">Tree Nuts</label>
                                              
                                                <label><input type="checkbox" name="allergies_2[]" value="wheat">Wheat</label>
                                              
                                                <label><input type="checkbox" name="allergies_2[]" value="soy">Soy</label>
                                              </div>
                                            </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="additionalNotes">Additional Notes:</label>
                                            <div class="controls">
                                              <input class="form-control" name="additionalNotes_2" type="text" placeholder="..." class="input-large" >
                                            </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <!-- Only one of these buttons are available. When there is another munchkid, the screen scrolls down to the next kid, if not, it scrolls down to the parent info card  -->
                            <div id="munchkid_2_next">
                                <center>
                                    <a href="#munchkid_3" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <div id="munchkid_2_alt_next" style="display: none;">
                                <center>
                                    <a href="#parentInfo" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <!-- end of alternating buttons  -->
                        </div>

                        <!-- Third MunchKid -->
                        <div class="card card-signup" id="munchkid_3" style="display: none;">
                            <h2 class="card-title text-center">New MunchKid #3!</h2>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    
                                        <div class="content">
                                            <!-- Text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="f_name">First Name:</label>
                                            <div class="controls">
                                              <input name="f_name_3" class="form-control" type="text" placeholder="ex. John" class="input-large" value="">
                                            </div>
                                            </div>


                                            <!-- Text input-->
                                            <div class="control-group">
                                              <label class="control-label" for="mealPlan">Meal Plan</label>
                                              <div class="controls">
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_3" value="1" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='1'){echo 'checked="checked"';} }?>> 
                                                          1 Meal/Week
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_3" value="3" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='3'){echo 'checked="checked"';} }?>>
                                                          3 Meals/Week
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_3" value="5" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='5'){echo 'checked="checked"';} }?>>
                                                          5 Meals/Week
                                                  </label>
                                              </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                              <label class="control-label" for="dietType">Diet Type:</label>
                                              <div class="controls">
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_3" value="original" checked="checked"> 
                                                          Original
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_3" value="vegetarian" >
                                                          Vegetarian
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_3" value="glutenfree">
                                                          GF
                                                  </label>
                                              </div>
                                            </div>

                                            <!-- text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="allergies">Allergies:</label>
                                            <div class="controls">
                                              <!-- <input name="allergies" class="form-control" type="text" placeholder="List of allergies" class="input-large" required=""> -->
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="allergies_3[]" value="milk">Milk</label>
                                              
                                                <label><input type="checkbox" name="allergies_3[]" value="eggs">Eggs</label>
                                              
                                                <label><input type="checkbox" name="allergies_3[]" value="peanuts">Peanuts</label>
                                              
                                                <label><input type="checkbox" name="allergies_3[]" value="fish">Fish</label>
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="allergies_3[]" value="shellfish">Shellfish</label>
                                             
                                                <label><input type="checkbox" name="allergies_3[]" value="nuts">Tree Nuts</label>
                                              
                                                <label><input type="checkbox" name="allergies_3[]" value="wheat">Wheat</label>
                                              
                                                <label><input type="checkbox" name="allergies_3[]" value="soy">Soy</label>
                                              </div>
                                            </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="additionalNotes">Additional Notes:</label>
                                            <div class="controls">
                                              <input class="form-control" name="additionalNotes_3" type="text" placeholder="..." class="input-large" >
                                            </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <!-- Only one of these buttons are available. When there is another munchkid, the screen scrolls down to the next kid, if not, it scrolls down to the parent info card  -->
                            <div id="munchkid_3_next">
                                <center>
                                    <a href="#munchkid_4" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <div id="munchkid_3_alt_next" style="display: none;">
                                <center>
                                    <a href="#parentInfo" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <!-- end of alternating buttons  -->
                        </div>

                        <!-- Fourth MunchKid -->
                        <div class="card card-signup" id="munchkid_4" style="display: none;">
                            <h2 class="card-title text-center">New MunchKid #4!</h2>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    
                                        <div class="content">
                                            <!-- Text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="f_name">First Name:</label>
                                            <div class="controls">
                                              <input name="f_name_4" class="form-control" type="text" placeholder="ex. John" class="input-large" value="">
                                            </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                              <label class="control-label" for="mealPlan">Meal Plan</label>
                                              <div class="controls">
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_4" value="1" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='1'){echo 'checked="checked"';} }?>> 
                                                          1 Meal/Week
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_4" value="3" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='3'){echo 'checked="checked"';} }?>>
                                                          3 Meals/Week
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="mealplan_4" value="5" <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='5'){echo 'checked="checked"';} }?>>
                                                          5 Meals/Week
                                                  </label>
                                              </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                              <label class="control-label" for="dietType">Diet Type:</label>
                                              <div class="controls">
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_4" value="original" checked="checked"> 
                                                          Original
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_4" value="vegetarian" >
                                                          Vegetarian
                                                  </label>
                                                  <label class="radio-inline">
                                                      <input type="radio" name="dietType_4" value="glutenfree">
                                                          GF
                                                  </label>
                                              </div>
                                            </div>

                                            <!-- text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="allergies">Allergies:</label>
                                            <div class="controls">
                                              <!-- <input name="allergies" class="form-control" type="text" placeholder="List of allergies" class="input-large" required=""> -->
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="allergies_4[]" value="milk">Milk</label>
                                              
                                                <label><input type="checkbox" name="allergies_4[]" value="eggs">Eggs</label>
                                              
                                                <label><input type="checkbox" name="allergies_4[]" value="peanuts">Peanuts</label>
                                              
                                                <label><input type="checkbox" name="allergies_4[]" value="fish">Fish</label>
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="allergies_4[]" value="shellfish">Shellfish</label>
                                             
                                                <label><input type="checkbox" name="allergies_4[]" value="nuts">Tree Nuts</label>
                                              
                                                <label><input type="checkbox" name="allergies_4[]" value="wheat">Wheat</label>
                                              
                                                <label><input type="checkbox" name="allergies_4[]" value="soy">Soy</label>
                                              </div>
                                            </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="control-group">
                                            <label class="control-label" for="additionalNotes">Additional Notes:</label>
                                            <div class="controls">
                                              <input class="form-control" name="additionalNotes_4" type="text" placeholder="..." class="input-large" >
                                            </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                            <!-- Only one of these buttons are available. When there is another munchkid, the screen scrolls down to the next kid, if not, it scrolls down to the parent info card  -->
                            <div id="munchkid_4_next">
                                <center>
                                    <a href="#munchkid_1" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <div id="munchkid_4_alt_next" style="display: none;">
                                <center>
                                    <a href="#parentInfo" class="btn btn-rose btn-round">
                                    Next
                                    </a>
                                </center>
                            </div>
                            <!-- end of alternating buttons  -->
                        </div>

                    <!-- Parents Info-->
                    <div class="card card-signup" id="parentInfo">
                        <h2 class="card-title text-center">Tell Us About You!</h2>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3" align="center">
                            <h4 class="info-title">It's nice to finally meet you!</h4>
                                
                                    <div >
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">mail</i>
                                            </span>
                                            <input type="text" name="email" required="" class="form-control" placeholder="email...">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <input type="text" name="firstName" required="" class="form-control" placeholder="First Name...">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                            <input type="text" name="lastName" class="form-control" placeholder="Last Name...">
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <input type="text" name="phone" required="" class="form-control" placeholder="Phone...">
                                        </div>
                                    </div>
                                    

                                    <div class="footer text-center">
                                      <center>
                                        <a href="#deliveryInfo" class="btn btn-rose btn-round">
                                        Almost done we promise!
                                        </a>
                                      </center>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>



                    <!-- Delivery Info -->
                    <div class="card card-signup" id="deliveryInfo">
                        <h2 class="card-title text-center">Where should we deliver them?</h2>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3" align="center">
                            <h4 class="info-title">MunchKits are delivered straight to your home!</h4>
                                    <div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">local_shipping</i>
                                            </span>
                                            <input type="text" name="streetAddress" required="" placeholder="Street Address..." class="form-control" />
                                            <!-- <input type="text" name="extraAddress" placeholder="(OPTIONAL) Suite/Apt..." class="form-control" /> -->
                                            <input type="text" name="zipCode" required="" placeholder=<?php echo $zipcode . "..."; ?> class="form-control" value=""/>
                                            <input type="hidden" name="city" required="" placeholder="City..." class="form-control" value=<?php echo "'".$city . "'"; ?> />
                                            <input type="hidden" name="prov" required="" placeholder="Prov/State..." class="form-control" value=<?php echo "'".$prov."'"; ?>/>
                                        </div>
                                            <!-- <input type="hidden" name="email" value =<?php echo $_POST['email'] ?> > 
                                            <input type="hidden" name="userpassword" value=<?php echo $_POST['userpassword'] ?> >  -->
                                    </div>
                                    <div class="footer text-center">
                                        <input type="submit" class="btn btn-primary btn-round" value="Checkout"/>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>
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

	<!-- Check account validation pw matching and unique email account  -->
	<script src="assets/js/accountValidate.js"></script>

    <!-- Hide/show more munchkid forms -->
    <script src="js/hideShowForms.js"></script>

    <!-- smooth scrolling -->
    <script src="assets/js/smoothScroll.js"></script>

</html>
