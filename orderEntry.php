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
    <!-- ADDED BY ALEX FOR MODAL  -->
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="addMunchKidModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
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
                    <label><input type="checkbox" name="allergies[]" value="nuts">Tree Nuts (Cashews or Walnuts)</label>
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

<!-- EDIT MODAL -->

<div class="modal fade bs-modal-sm" id="editMunchKidModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <?php
              // CREATE TABS IN EDIT MODAL WITH FIRST NAME OF THE MUNCHKID AS THE TITLE OF THE TAB
            $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
            $i=0;
            if($result != NULL){
                while ($row = $result->fetch_assoc()) {
                    $idMunchKid = $row['idMunchKids'];
                    $f_name = $row['f_name'];
                    $dietType = $row['dietType'];
                    
          ?>
              <li class=<?php if ($i==0){echo "active";} else {echo "''";} ?>><a href=<?php echo "#edit".$f_name; ?> data-toggle="tab"> <?php echo $f_name; ?> </a></li>
          <?php
              $i++;
                }
              } else{
          ?>
            <center><p> YOU HAVE NO MUNCHKIDS TO EDIT! </p></center>
          <?php
          }
        ?>

            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
          <?php
          // FOR EVERY CHILD OF THE USER, THE ADDED INFORMATION COMES UP IN AN EDIT MODAL WITH ALL THE ADDED VALUES AS DEFAULT VALUES READY FOR EDIT
            $result = munchKitDB::getInstance()->get_munchkids_by_user_email($_SESSION['user']);
            $i=0;
            if($result != NULL){
                while ($row = $result->fetch_assoc()) {
                    $idMunchKid = $row['idMunchKids'];
                    $f_name = $row['f_name'];
                    $dietType = $row['dietType'];
                    $allergies = $row['allergies'];
                    $list_allergies = explode(',', $allergies);
          ?>
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

              <!-- Required to identify which MunchKid belongs to which user -->
              <!-- <input type="hidden" name="userID" value=<?php echo munchKitDB::getInstance()->get_user_id_by_email($_SESSION['user']); ?> >     -->
              <input type="hidden" name="idMunchKid" value=<?php echo $idMunchKid; ?> />
              <!-- <input type="hidden" name=numKids value=<?php echo $i; ?> > -->
            </form>
          </div>

          <?php
            $i++;
                }
              }
          ?>
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


<!-- END OF EDIT MODAL -->



    <!-- END OF ADD BY ALEX -->
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
                          
                        <center><h2 class="title"> Tell Us About Your Kid </h2></center>
                    </div>
                </div>
            </div>
          </div>
  <!-- ADDED BY ALEX -->
          <div class="col-md-7 col-md-offset-3">
            <!-- MODAL BUTTON -->
            <center>
            <button id="addMunchKidBtn" class="btn btn-primary btn-lg" href="#addMunchKidModal" data-toggle="modal" data-target="#addMunchKidModal">Add a MunchKid</button>
            <button id="editMunchKidBtn" class="btn btn-primary btn-lg" href="#editMunchKidModal" data-toggle="modal" data-target="#editMunchKidModal" style="margin-right: 100px;">Edit MunchKids</button>
            </center>
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
                                $allergies = $row['allergies'];
                                $i++;
                                ?>
                                <div class="col-md-5 ">
                                  <div class="col-md-5">
                                  </div>
                                  <div class="col-md-7">
                                      <div class="content">
                                          <h4 class="card-title"> <?php echo $f_name ; ?> </h4> 
                                          <h6 class="category text-muted"> <?php echo $dietType ; ?> </h6>
                                          <h4> </h4>
                                          <select id="mealPlan" name= <?php echo 'mealPlan_' . $i ?> > 
                                              <option <?php if ($_SERVER['REQUEST_METHOD'] == "POST"){if($_POST['numMeals']=='5'){echo 'selected="selected"';} }?> value="5">5 meals/wk ($8/meal)  </option>
                                              <option <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {if($_POST['numMeals']=='3'){echo 'selected="selected"';} }?> value="3">3 meals/wk ($9.25/meal)  </option>
                                              <option <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {if($_POST['numMeals']=='1'){echo 'selected="selected"';} }?> value="1">1 meal/wk ($10.25/meal)  </option>

                                          </select>
                                          <input type="hidden" name= <?php echo 'idMunchKid_' . $i; ?> value=<?php echo $idMunchKid; ?> />
                                          <input type="hidden" name= <?php echo 'f_name_' . $i; ?> value=<?php echo $f_name; ?> />
                                          <input type="hidden" name=<?php echo "dietType_" . $i; ?> value=<?php echo $dietType; ?> />
                                          <input type="hidden" name=<?php echo "allergies" .$i; ?> value=<?php echo $allergies; ?> />
                                      </div>
                                  </div>
                                </div>
                        <?php
                            }
                        }
                        else{
                        ?>
                        <center><h6> You have no MunchKids to display! Please Add A Child Profile</h6></center>
                        <?php } ?>
                      <div class="footer text-center">
                        <input type="submit" class="btn btn-primary btn-round" value="Complete Order" style="margin-top: 50px; margin-right: 100px;" <?php if ($i == 0){ echo "disabled";} ?>>
                      </div>
                  </form>
                </div>
            <!-- end of aadd -->
            </div>
          </div>
        </div>              
      </div>
<!-- END -->          
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

    <!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--    Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!--    Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
    <script src="assets/js/jquery.dropdown.js" type="text/javascript"></script>

    <!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
    <script src="assets/js/jquery.tagsinput.js"></script>

    <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="assets/js/jasny-bootstrap.min.js"></script>

    <!-- Plugin For Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="assets/js/material-kit.js" type="text/javascript"></script>


</html>