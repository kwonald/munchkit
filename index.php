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
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/lunchboxlogo.png">
    <link rel="icon" type="image/png" href="assets/img/lunchboxlogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>MunchKit</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="presentation-page">

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
                    <?php    
                    }else{
                    ?>
                    <li>
                        <a href="login-page.php">
                            <!-- <i class="material-icons">account_circle</i> --> Log In
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <!-- End of myaccount tab/ sign in tab -->

                    <li>
                        <a href="pricing.php" class="btn btn-rose btn-square">
                             Sign Up
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main" style="background-color:#FFFFFF;color:#FFFFFF;padding:30px;">
        <!-- <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="brand"> 

                    <h2 class="title" >Your Locally Sourced School Lunches</h2>
                    <h3 class="title">Delivered Straight To Your Doorstep</h3>
                    <a href="pricing.php" class="btn btn-rose btn-square">
                                        Get Started
                    </a>
                </div>
            </div>
        </div> -->
    </div>
    <div class="page-header header-filter clear-filter" data-parallax="" style="background-image: url('assets/img/landingBG.png');">
        <div class="container">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="brand"> 
                    <h2 class="title" >Your Locally Sourced School Lunches</h2>
                    <h3 class="title">Delivered Straight To Your Doorstep</h3>
                    <a href="pricing.php" class="btn btn-rose btn-square">
                                        Get Started
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="pricing-2" style="padding:20px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="row">
                    <div class="our-clients" align="center">
                        <div class="row">
                            <!-- <div class="col-md-3">
                                <img src="assets/img/cityofvanlogo.png" alt="" />
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/ubccrest.jpg" alt="" />
                            </div> -->
                            <div class="col-md-3">
                                <img src="assets/img/ubcfarmlogo.jpeg" alt="" />
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/eubclogo.jpg" alt="" />
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

    <!-- end of alex add -->
    <div class="main ">
        <div class="section" style="padding:10px">
            <div class="container">
                <div class="features-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-rose">
                                    <!-- <i class="material-icons">apps</i> -->
                                    <img src="assets/img/lunchboxlogo.png"/>
                                </div>
                                <h4 class="info-title">Step 1: Choose A Meal Plan</h4>
                                <p> Choose between one time, three times, or five times a week plan that fits your busy schedule </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <img src="assets/img/squirrel.png"  />
                                </div>
                                <h4 class="info-title">Step 2: Tell Us About Your Kid!</h4>
                                <p>The well-being of your child is our number one priority! Let us know about their allergies and dietary needs so that their meals are customized to your kid!</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <img src="assets/img/deliverytruck.png" />
                                </div>
                                <h4 class="info-title">Step 3: Payment & Delivery</h4>
                                <p> We deliver straight to your doorstep every Wednesday and Sunday afternoons! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--     *********    END FEATURES 5      *********      -->



        <!--     *********     FEATURES 5      *********      -->

        <div class="section section-overview">
            <div class="features-5"  style="background-image: url('assets/assets-for-demo/landingbg.jpg')">


                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">Why Your Family Should Choose MunchKit</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">nature people</i>
                                </div>
                                <h4 class="info-title">Local, Sustainable, Organic</h4>
                                <p align="left">All our meals are made from fresh, sustainably sourced, local ingredients! All meals will be made of at least 25% local ingredients and we will always strive for 100%!</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">restaurant</i>
                                </div>
                                <h4 class="info-title">Nutrition is our life</h4>
                                <p align="left"> Our rotating set menus are carefully designed by nutritionists and chefs to provide a well-balanced nutritous meal for your child while highlighting in-season local produce in the process!</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">delete</i>
                                </div>
                                <h4 class="info-title">Zero Waste</h4>
                                <p align="left">MunchKit believes in reducing our impact in the world. We reduce anything we can, then we try and reuse anything that can't be reduced, if something can't be reused then we make sure it is recycleable!</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">redeem</i>
                                </div>
                                <h4 class="info-title">Pay It Forward</h4>
                                <p align="left"> MunchKit will match and deliver any PayItForward Meal to a student in your neighborhood who cannot afford a lunch. At MunchKit, access to well-balanced, nutritious meals is a right for school children. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section-testimonials team-3">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title">Trusted by Families</h2>
                            <h5 class="description">Experience the convenience of providing <b>FRESH, LOCALLY SOURCED</b> lunches to your children.</h5>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="card card-profile card-plain">
                                <div class="col-md-3">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="assets/assets-for-demo/test1.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="content">
                                        <h4 class="card-title">Justin and Sophie</h4>

                                        <p class="card-description">
                                            "As soon as we started using MunchKit, everything else isn't the same anymore. We have so much more time and energy to spend with the children knowing that our kids are getting good food for lunch! Thank you MunchKit!"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-profile card-plain">
                                <div class="col-md-3">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="assets/assets-for-demo/test2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="content">
                                        <h4 class="card-title">Josh Murray</h4>

                                        <p class="card-description">
                                            "I really like my lunch. The food is yummy and the my lunchbox is really cool!"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-profile card-plain">
                                <div class="col-md-3">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img" src="assets/assets-for-demo/test3.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="content">
                                        <h4 class="card-title">Michael Onubogu</h4>

                                        <p class="card-description">
                                            "I feel like I'm not only providing a healthier lunch for my child, I feel like I'm giving back to my community and the world. My son Jacob and I learn so much about our local community through MunchKit!"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

        <div class="pricing-2">
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
                            <div class="col-md-4">
                                <div class="card card-pricing card-plain">
                                    <div class="content">
                                        <h6 class="category text-info">1 Meal A Week (Trial)</h6>
                                        <h1 class="card-title"><small>$</small>10.25<small>/meal</small></h1>
                                        <h6 class="category text-info">(Trial is available for 8 weeks)</h6>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Recyclable</b> Containers</li>
                                        </ul>
                                        <a href="tellusaboutyourkid.php" class="btn btn-rose btn-raised btn-round">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>

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
                                            <!-- <li><b>Discounts</b> to local programs</li> -->
                                        </ul>
                                        <a href="tellusaboutyourkid.php" class="btn btn-white btn-raised btn-round">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-pricing card-plain">
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
                                        <a href="tellusaboutyourkid.php" class="btn btn-rose btn-raised btn-round">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="commercial">
                            <div class="col-md-4">
                                <div class="card card-pricing card-plain">
                                    <div class="content">
                                        <h6 class="category text-info">1 Meal A Week (Trial)</h6>
                                        <h1 class="card-title"><small>$</small>10.25<small>/meal</small></h1>
                                        <h6 class="category text-info">(Trial is available for 8 weeks)</h6>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Recyclable</b> Containers</li>
                                        </ul>
                                        <a href="tellusaboutyourkid.php" class="btn btn-rose btn-raised btn-round">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>

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
                                            <li><b>+ Access</b> to PayItForward program</b></li>
                                            <li><b>+ more!</b></li>
                                        </ul>
                                        <a href="tellusaboutyourkid.php" class="btn btn-white btn-raised btn-round">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-pricing card-plain">
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
                                        <a href="tellusaboutyourkid.php" class="btn btn-rose btn-raised btn-round">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2 text-center">
                    <p class="description">You can <b>Update Your Account</b> and <b>Suspend or Cancel Anytime</b>. Just let us know <b>3 days</b> a head of time process your request.</p>

                </div>
            </div>
        </div>

    <footer class="footer footer-white">
        <div class="container">
            <a class="footer-brand" href="index.php">MUNCHKIT</a>

            <ul class="pull-center">
                <!-- <li>
                    <a href="index.php">
                        MunchKit
                    </a>
                </li> -->
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
               <!--  <li>
                    <a href="http://www.creative-tim.com/license" target="_blank">
                        Licenses
                    </a>
                </li> -->
            </ul>

            <ul class="social-buttons pull-right">
                <li>
                    <a href="https://twitter.com/munchkitco" target="_blank" class="btn btn-just-icon btn-simple btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/MunchKitCo/" target="_blank" class="btn btn-just-icon btn-simple btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/munchkitco/" target="_blank" class="btn btn-just-icon btn-simple btn-instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>

        </div>
    </footer>

    <!--     *********    END PRICING 5      *********      -->
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

    <!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script type="text/javascript">
        var $section_features = '';
        $().ready(function(){

        });
    </script>

</html>

