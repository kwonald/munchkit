<?php
require_once('Includes/db.php');
session_start();
date_default_timezone_set('America/Los_Angeles');
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;
    // $f_name_parent = munchKitDB::getInstance()->get_user_name_by_email($_SESSION['user']);
    // echo $f_name_parent;
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

	<title>My Account | MunchKit</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>


<body class="profile-page">

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
<div class="page-header header-filter" data-parallax="active" style="background-image: url('assets/img/landingbg.png');"></div>
<!-- MODALS FOR ADD/ EDIT AND REMOVE MUNCHKIDS -->
<div class="modal fade bs-modal-sm" id="addMunchKidModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content" style="bottom: 100px;">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#newMunchKid" data-toggle="tab">New MunchKid</a></li>
              <!-- <li class=""><a href="#signup" data-toggle="tab">Register</a></li> -->
              <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in" id="why">
            <p>MunchKit requires this information so that we can prepare meals that are customized to your MunchKid's needs. Rest assured information will not be sold, traded, or given to any third parties.</p>
            <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>munchkitfoods@gmail.com for any other inquiries.
          </div>
          <div class="tab-pane fade active in" id="newMunchKid">
            <form class="form-horizontal" method="POST" action="addMunchKidFromOE.php">
            
              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="f_name">First Name:</label>
                <div class="controls">
                  <input name="f_name" class="form-control" type="text" placeholder="John" class="input-large" required="">
                </div>
              </div>
              
              <!-- Text input-->
              <div class="control-group">
                  <label class="control-label" for="dietType">Diet Type:</label>
                  <div class="controls">
                      <label class="radio-inline">
                          <input type="radio" name="dietType" value="original" checked="checked"> 
                              Original
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name="dietType" value="vegetarian" >
                              Vegetarian
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name="dietType" value="glutenfree">
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
                    <label><input type="checkbox" name="allergies[]" value="milk">Milk</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="eggs">Eggs</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="peanuts">Peanuts</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="fish">Fish</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="shellfish">Shellfish</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="nuts">Tree Nuts</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="wheat">Wheat</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name="allergies[]" value="soy">Soy</label>
                  </div>
                </div>
              </div>
              
              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="additionalNotes">Additional Notes:</label>
                <div class="controls">
                  <input class="form-control" name="additionalNotes" type="text" placeholder="..." class="input-large" >
                </div>
              </div>
              
              <!-- Button -->
              <div class="control-group">
                <label class="control-label" for="confirmsignup"></label>
                <div class="controls">
                  <center><input type="submit" name="addMunchKid" class="btn btn-primary btn-simple btn-wd btn-lg" value="Submit"/></center>

                </div>
              </div>

              <!-- Required to identify which MunchKid belongs to which user -->
              <input type="hidden" name="userID" value=<?php echo munchKitDB::getInstance()->get_user_id_by_email($_SESSION['user']); ?> >    
              <input type="hidden" name="refURL" value="profile-page.php">
            </form>
          </div>  
        </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>

<!-- EDIT MODAL  -->

<?php
    // CREATE TABS IN EDIT MODAL WITH FIRST NAME OF THE MUNCHKID AS THE TITLE OF THE TAB
  $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
  $i=0;
  if($result != NULL){
      while ($row = $result->fetch_assoc()) {
          $idMunchKid = $row['idMunchKids'];
          $f_name = $row['f_name'];
          $dietType = $row['dietType'];
          $list_allergies = explode(',', $row['allergies']);
          
?>
<div class="modal fade bs-modal-sm" id=<?php echo "editMunchKidModal_" . $i; ?> tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content" style="bottom: 100px;">
      <br>
      <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs">
            <li class=<?php if ($i==0){echo "active";} else {echo "''";} ?>><a href=<?php echo "#edit".$f_name; ?> data-toggle="tab"> <?php echo $f_name; ?> </a></li>
            <li class=""><a href=<?php echo "#remove".$f_name; ?> data-toggle="tab">Remove</a></li>
          </ul>
      </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
          <!-- REMOVE MUNCHKID TAB -->
          <div class="tab-pane fade in" id=<?php echo "remove".$f_name; ?>>
            <p> By Clicking 'CONFIRM', the profile of </p> <?php echo $f_name; ?> <p> will be permanently deleted from our records. </p>

            <form class="form-horizontal" method="POST" action="removeMunchKidFromOE.php">
              <input type="hidden" name="idMunchKid" value=<?php echo $idMunchKid; ?> />
              <input type="hidden" name="refURL" value="profile-page.php">
              <div class="controls">
                <center><input type="submit" name="removeMunchKid" class="btn btn-primary btn-simple btn-wd btn-lg" value="CONFIRM"/></center>
              </div>
            </form>
          </div>

          <!-- EDIT MUNCHKID TAB -->
          <div class="tab-pane fade active in" id=<?php echo "edit".$f_name; ?>>
            <form class="form-horizontal" method="POST" action="updateMunchKidFromOE.php">
            
              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="f_name">First Name:</label>
                <div class="controls">
                  <input name=<?php echo "f_name"; ?> class="form-control" type="text" placeholder="John" class="input-large" required="" value=<?php echo $f_name; ?>>
                </div>
              </div>
              
              <!-- Text input-->
              <div class="control-group">
                  <label class="control-label" for="dietType">Diet Type:</label>
                  <div class="controls">
                      <label class="radio-inline">
                          <input type="radio" name=<?php echo "dietType"; ?> value="original" <?php if($dietType == "original") {echo 'checked="checked"';} ?> > 
                              Original
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name=<?php echo "dietType"; ?> value="vegetarian" <?php if($dietType == "vegetarian") {echo 'checked="checked"';} ?> >
                              Vegetarian
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name=<?php echo "dietType"; ?> value="glutenfree" <?php if($dietType == "glutenfree") {echo 'checked="checked"';} ?>>
                              GF
                      </label>
                  </div>
              </div>

              <!-- text input-->
              <div class="control-group">
                <label class="control-label" for="allergies">Allergies:</label>
                <div class="controls">
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]"; ?> <?php if(in_array("milk", $list_allergies)){echo "checked";} ?> value="milk">Milk</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]";  ?> <?php if(in_array("eggs", $list_allergies)){echo "checked";} ?> value="eggs">Eggs</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]";  ?> <?php if(in_array("peanuts", $list_allergies)){echo "checked";} ?> value="peanuts">Peanuts</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]";  ?> <?php if(in_array("fish", $list_allergies)){echo "checked";} ?> value="fish">Fish</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]"; ?> <?php if(in_array("shellfish", $list_allergies)){echo "checked";} ?> value="shellfish">Shellfish</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]"; ?> <?php if(in_array("nuts", $list_allergies)){echo "checked";} ?> value="nuts">Tree Nuts (Cashews or Walnuts)</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]"; ?> <?php if(in_array("wheat", $list_allergies)){echo "checked";} ?> value="wheat">Wheat</label>
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox" name=<?php echo "allergies[]"; ?> <?php if(in_array("soy", $list_allergies)){echo "checked";} ?> value="soy">Soy</label>
                  </div>
                </div>
              </div>
              
              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="additionalNotes">Additional Notes:</label>
                <div class="controls">
                  <input class="form-control" name=<?php echo "additionalNotes"; ?> type="text" placeholder="..." class="input-large" >
                </div>
              </div>
              
              <!-- Button -->
              <div class="control-group">
                <label class="control-label" for="confirmsignup"></label>
                <div class="controls">
                  <center><input type="submit" name="editMunchKid" class="btn btn-primary btn-simple btn-wd btn-lg" value="Edit"/></center>

                </div>
              </div>
              <input type="hidden" name="refURL" value="profile-page.php">
              <input type="hidden" name="idMunchKid" value=<?php echo $idMunchKid; ?> />
              
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <center>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>
<?php
  $i++;
      }
    }
?>

<!-- END OF MODALS  -->
	<div class="main">
		<div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3">
	           <div class="profile">
                  <div class="avatar">
                      <img src="assets/img/squirrel.png">
                  </div>
                  <div class="name">
                    <?php
                    $result = munchKitDB::getInstance()->get_user_by_email($_SESSION['user']);
                    if($result != NULL){
                        while ($row = $result->fetch_assoc()) {
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $f_name = $row['f_name'];
                            $l_name = $row['l_name'];
                        }
                    }
                    ?>
                     <h2 class="title"> <?php echo $f_name . ' ' . $l_name ?> </h2>
				              <!-- Displaying first names of kids associated to this account -->

				              <h6> <?php echo $email ?></h6>
                      <h6> <?php echo $phone ?></h6>
                       


                    <button class="btn btn-fab btn-primary" rel="tooltip" title="Edit Profile">
                    	<i class="material-icons">create</i>
                		</button>
				
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
  											<i class="material-icons">schedule</i>
  											Cancel/Suspend
  			               </a>
  			             </li>
                    <li>
  										<a href="#connections" role="tab" data-toggle="tab">
  											<i class="material-icons">people</i>
  											Add/Edit Child Profile
  										</a>
  									</li>
  			            <li>
  			                <a href="#media" role="tab" data-toggle="tab">
  											 <i class="material-icons">payment</i>
  			                 Billing
                        </a>
                    </li>
  			          </ul>
                </div>
						</div>
					</div>
        </div>
        <div class="tab-content">
	        <div class="tab-pane active work" id="work">
		        <div class="row">
              <div class="col-md-7 col-md-offset-3">
                <div class="row collections">
                  <div class="row">
                    <form class="form" method="POST" action="suspendOrder.php"> 
                      <?php
                          $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
                          $i=0;
                          $num5meals = 0;
                          $num3meals = 0;
                          $num1meals = 0;
                          
                          if($result != NULL){
                              while ($row = $result->fetch_assoc()) {
                                  $idMunchKid = $row['idMunchKids'];
                                  $mealPlan = munchKitDB::getInstance()->get_order_by_idMunchKid($idMunchKid);
                                  $f_name = $row['f_name'];
                                  $dietType = $row['dietType'];
                                  $suspend = $row['suspend'];
                                  $nextDeliveryDate = munchKitDB::getInstance()->get_order_dateRequired_by_idMunchKid($idMunchKid);
                                  if($mealPlan == '5'){$num5meals++;}
                                  else if($mealPlan == '3'){$num3meals++;}
                                  else if($mealPlan == '1'){$num1meals++;}
                                  
                                  ?>
                                  <div class="col-md-5 ">
                                    <div class="col-md-5">
                                    </div>
                                    <div class="col-md-7">
                                      <div class="content">
                                        <h4 class="card-title"> <?php echo $f_name ?> </h4>
                                        <h6 class="category text-muted"> <?php echo $dietType ?> </h6>
                                        <h6 class="category text-muted"> <?php echo $mealPlan; if($mealPlan==1){echo ' Meal A Week';} else if($mealPlan==''){echo 'No Meal Plan Selected';} else{echo ' Meals A Week';} ?> </h6>
                                        <?php
                                        if($suspend){ if(strtotime($nextDeliveryDate) > strtotime("+100 Sunday") ){ ?>
                                        <h6 class="category text-muted"> ***Subscription Cancelled </h6>
                                        <?php } else{ ?>
                                        <h6 class="category text-muted"> ***Delivery Suspended Until: <?php echo $nextDeliveryDate; ?> </h6>
                                        <?php } ?>
                                        <select id="id_period" name=<?php echo "period_".$i ?> > 
                                            <option value="">Resume or Cancel delivery...</option>
                                            <option value="0">Resume</option>
                                            <option value="999">cancel subscription for this child  </option>
                                        </select>
                                        <?php
                                        }else{
                                        ?>
                                        <select id="id_period" name=<?php echo "period_".$i ?> > 
                                            <option value="">suspend delivery for...</option>
                                            <option value="999">cancel subscription for this child  </option>
                                            <option value="1">1 week <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(1) .")<br>" ; ?></option>
                                            <option value="2">2 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(2) .")<br>" ; ?></option>
                                            <option value="3">3 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(3) .")<br>" ; ?></option>
                                            <option value="4">4 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(4) .")<br>" ; ?></option>
                                            <option value="5">5 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(5) .")<br>" ; ?></option>
                                            <option value="6">6 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(6) .")<br>" ; ?></option>
                                            <option value="7">7 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(7) .")<br>" ; ?></option>
                                            <option value="8">8 weeks <?php echo "(Until ". munchKitDB::getInstance()->get_suspend_until_date(8) .")<br>" ; ?></option>
                                        </select>
                                        <?php } ?>
                                        <input type="hidden" name=<?php echo "idMunchKid_".$i ?> value=<?php echo $idMunchKid ?> />
                                        <input type="hidden" name=<?php echo "fname_".$i ?> value=<?php echo $f_name ?> />
                                        <input type="hidden" name=<?php echo "dietType_".$i ?>  value=<?php echo $dietType ?> />
                                        <input type="hidden" name=<?php echo "mealPlan_".$i ?>  value=<?php echo $mealPlan ?> />
                                        <input type="hidden" name="numOrders" value=<?php echo $i ?> />
                                      </div>
                                    </div>
                                  </div>
                          <?php
                          $i++;
                              }

                          }
                          else{
                          ?>
                          <h6> You have no MunchKids to display!</h6>
                          <?php } ?>
                      <div class="footer text-center">
                          <input type="submit" class="btn btn-primary btn-round" value="Update" style="margin-top: 50px;">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
	        </div>
          <div class="tab-pane connections" id="connections">
            <center>
            <button id="addMunchKidBtn" class="btn btn-primary btn-lg" href="#addMunchKidModal" data-toggle="modal" data-target="#addMunchKidModal" style="margin-right: 100px;">Add a MunchKid</button>
            </center>
            <div class="row">
              <form class="form" method="POST" action="order_summary.php">  
                <?php
                  $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
                  $i=0;
                  if($result != NULL){
                    while ($row = $result->fetch_assoc()) {
                        $idMunchKid = $row['idMunchKids'];
                        $f_name = $row['f_name'];
                        $dietType = $row['dietType'];
                        $allergies = $row['allergies'];
                        $suspend = $row['suspend'];
                        $mealPlan = munchKitDB::getInstance()->get_order_by_idMunchKid($idMunchKid);
                        $nextDeliveryDate = munchKitDB::getInstance()->get_order_dateRequired_by_idMunchKid($idMunchKid);
                        
                        ?>
                        <div class="col-md-5 ">
                          <div class="col-md-5">
                          </div>
                          <div class="col-md-7">
                            <div class="content">
                                <h4 class="card-title"> <?php echo $f_name ; ?> </h4> 
                                <h6 class="category text-muted"> <?php echo $dietType ; ?> </h6>
                                <h4> </h4>

                                 <?php
                                  if($suspend){ 
                                    if(strtotime($nextDeliveryDate) > strtotime("+100 Sunday") ){ ?>
                                      <h6 class="category text-muted"> ***Subscription Cancelled </h6>
                              <?php } 
                                    else { ?>
                                      <h6 class="category text-muted"> ***Delivery Suspended Until: <?php echo $nextDeliveryDate; ?> </h6>
                              <?php } 
                                  } 
                                  else { ?>
                                  <h6 class="category text-muted"> Next Delivery Cycle: <?php echo $nextDeliveryDate; ?> </h6>
                            <?php } ?>
                               

                                <select id="mealPlan" name= <?php echo 'mealPlan_' . $i ?> >
                                  <?php if($mealPlan ==''){ ?>
                                  <option selected="selected" value="0"> SELECT A MEAL PLAN </option>
                                  <?php } ?>
                                  <option <?php if($mealPlan =='5'){echo 'selected="selected"';} ?> value="5"> <?php if($mealPlan =='5'){echo '5 meals/wk (CURRENT PLAN)';} else {echo "5 meals/wk ($8/meal)";}?> </option>
                                  <option <?php if($mealPlan =='3'){echo 'selected="selected"';} ?> value="3"> <?php if($mealPlan =='3'){echo '3 meals/wk (CURRENT PLAN)';} else {echo "3 meals/wk ($9.25/meal)";}?> </option>
                                  <option <?php if($mealPlan =='1'){echo 'selected="selected"'; }?> value="1"> <?php if($mealPlan =='1'){echo '1 meals/wk (CURRENT PLAN)';} else {echo "1 meal/wk ($10.25/meal) ";}?> </option>
                                </select>

                                <!-- additional info for update order -->
                                <input type="hidden" name= <?php echo 'idMunchKid_' . $i; ?> value=<?php echo $idMunchKid; ?> />
                                <input type="hidden" name= <?php echo 'f_name_' . $i; ?> value=<?php echo $f_name; ?> />
                                <input type="hidden" name=<?php echo "dietType_" . $i; ?> value=<?php echo $dietType; ?> />
                                <input type="hidden" name=<?php echo "allergies_" .$i; ?> value=<?php echo $allergies; ?> />
                                <input type="hidden" name=<?php echo "numOrders"; ?> value=<?php echo $i; ?>> 
                                <input type="hidden" name= <?php echo 'oldMealPlan_' . $i; ?> value=<?php echo $mealPlan; ?> />
                                <input type="editBtn" id=<?php echo "editMunchKidBtn_".$i ?> class="btn btn-primary btn-sm" href=<?php echo "#editMunchKidModal_".$i ?> data-toggle="modal" data-target=<?php echo "#editMunchKidModal_".$i ?> style="margin-right: 100px;" value="Edit/Remove" readonly>
                                </div>
                              </div>
                            </div>
                    <?php
                      $i++;
                        }
                    }
                    else{
                    ?>
                    <center><h6> You have no MunchKids to display! Please Add A Child Profile</h6></center>
                    <?php } ?>
                  <div class="footer text-center">
                    <input type="submit" class="btn btn-primary btn-round" value="Update Order" onclick="" style="margin-top: 50px; margin-right: 100px;" <?php if ($i == 0){ echo "disabled";} ?>/>
                  </div>
              </form>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="media">
            <div class="col-md-5 col-md-offset-4">
              <?php
              $result = munchKitDB::getInstance()->get_user_by_email($_SESSION['user']);
              if($result != NULL){
                  while ($row = $result->fetch_assoc()) {
                      $addr = $row['addr'];
                      $city = $row['city'];
                      $zipCode = $row['zipCode'];

                  }
              }
              ?>
              <h4 class="title">Billing Info</h4>
              <ul class="list-unstyled">
                  <li><b>Address</b> <?php echo $addr ?></li>
                  <li><b>City</b> <?php echo $city ?></li>
                  <li><b>PostalCode</b> <?php echo $zipCode ?></li>
                  <li><b>CreditCard</b> ...1234</li>
              </ul>
              <hr />
              <h4 class="title">Weekly Charge</h4>
              <?php
              $totalNumMeals = $num5meals*5 + $num3meals*3 + $num1meals;
              $totalCost = $num5meals*5*8 + $num3meals*3*9.25 + $num1meals*10.25;
              ?>
              
              <?php if($num5meals>0){ ?>
              <h6> Number of 5 meals/week ($8/meal): <?php echo $num5meals ?> ---------------- $<?php echo $num5meals*5*8 ?>CDN </h6>
              <?php
              }
              ?>

              <?php if($num3meals>0){ ?>
              <h6> Number of 3 meals/week ($9.25/meal): <?php echo $num3meals ?> ---------------- $<?php echo $num3meals*3*9.25 ?>CDN </h6>
              <?php
              }
              ?>

              <?php if($num1meals>0){ ?>
              <h6> Number of 1 meal/week ($10.25/meal): <?php echo $num1meals ?> ---------------- $<?php echo $num1meals*10.25 ?>CDN </h6>
              <?php
              }
              ?>
              
              <p class="description"> Your <?php echo $totalNumMeals ?> meals a week comes to a total of <b> $<?php echo $totalCost ?>CDN </b> + tax</p>
              <hr />
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
