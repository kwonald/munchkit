<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
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

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" id="sectionsNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MunchKit</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about-us.html">
                            <i class="material-icons">apps</i> About Us
                        </a>
                    </li>
                    <li>
                        <a href="blog-posts.html">
                            <i class="material-icons">art_track</i> Blog Posts
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">view_day</i> More
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            <li>
                                <a href="pricing.html">
                                    <i class="material-icons">attach_money</i> Pricing Page
                                </a>
                            </li>
                            <li>
                                <a href="product-page.html">
                                    <i class="material-icons">beach_access</i> Previous Meals
                                </a>
                            </li>
                            <li>
                                <a href="contact-us.html">
                                    <i class="material-icons">location_on</i> Contact Us
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">account_circle</i> My Account
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons">
                            
                            <li>
                                <a href="login-page.html">
                                    <i class="material-icons">fingerprint</i> Login Page
                                </a>
                            </li>
                            
                            <li>
                                <a href="profile-page.html">
                                    <i class="material-icons">account_circle</i> Profile Page
                                </a>
                            </li>
                            <li>
                                <a href="signup-page.html">
                                    <i class="material-icons">person_add</i> Signup Page
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="pricing.html" class="btn btn-rose btn-round">
                            <i class="material-icons">shopping_cart</i> Join Us Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter clear-filter" data-parallax="active" style="background-image: url('assets/img/landingbg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>MunchKit
                            <!-- <div class="pro-badge">
                                Co
                            </div> -->
                        </h1>   

                        <h3 class="title">Your Locally Sourced School Lunches Delivered Straight To Your Doorstep</h3>
                        <a href="pricing.html" class="btn btn-rose btn-round">
                                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 class="description text-center">MunchKit is your local lunchbox delivery service. Catered toward students aged 5-18, your children will always have a tasty meal made of fresh, sustainably-sourced ingredients. Munchkit is customized to your child's dietary restrictions and delivered right to your door every Sunday.</h4>
                    </div>
                </div>

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
                    <h2 class="title">Why you and your child should choose MunchKit</h2>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">format_bold</i>
                                </div>
                                <h4 class="info-title">Local, Sustainable, Organic</h4>
                                <p>All our meals are made from fresh, sustainably sourced, local ingredients! No artifical or processed ingredients in our meals. That's a guarantee.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">phonelink</i>
                                </div>
                                <h4 class="info-title">Nutrition is our life</h4>
                                <p> All our meals are carefully designed by nutritionists and our chefs to provide a well-balanced nutritous meal for your child</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <h4 class="info-title">Zero Waste</h4>
                                <p>MunchKit believes in reducing our impact in the world. We reduce anything we can, then we try and reuse anything that can't be reduced, if something can't be reused then we make sure it is recycleable!</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <h4 class="info-title">Pay It Forward</h4>
                                <p> You can donate an additional meal with your subscription which MunchKit will match and deliver to a student in your neighborhood who cannot afford a lunch. At MunchKit, well-balanced, nutritious meals are a right for school children, not a priviledge. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section-testimonials team-3">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h2 class="title">Trusted by 5300 Families</h2>
                            <h5 class="description">MunchKit is proud to be serving nutritious meals to <b>91,500+ children</b> in over <b>300 Cities</b>. This is what some of them think:</h5>
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

                    <div class="our-clients">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="assets/img/cityofvanlogo.png" alt="" />
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/ubccrest.jpg" alt="" />
                            </div>
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

    <div class="section section-pricing pricing-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
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
                            <p class="description">
                                Great nutritious, well-balanced lunches for school kids aged 5-11 with busy parents!
                                Joining is simple as choosing, customizing, ordering!
                            </p>

                            <div class="col-md-6" style="width: 33.33%">
                                <div class="card card-pricing card-margin">
                                    <div class="content">
                                        <h6 class="category">1 Meal A Week (Trial)</h6>
                                        <h1 class="card-title"><small>$</small>10.75<small>/meal</small></h1>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Recyclable</b> Containers</li>
                                        </ul>
                                        <a href="pricing.html" class="btn btn-rose btn-round">
                                            Buy Now!
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="width: 33.33%">
                                <div class="card card-pricing">
                                    <div class="content">
                                        <h6 class="category">5 Meals A Week</h6>
                                        <h1 class="card-title"><small>$</small><big>8</big><small>/meal</small></h1>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Reusable</b> Containers</li>
                                            <li><b>Customized</b> LunchBoxes</li>
                                            <li><b>Reusable</b> Totebag</li>
                                            <li><b>+ Access</b> to PayItForward program</b></li>
                                            <li><b>+ more!</b></li>
                                        </ul>
                                        <a href="pricing.html" class="btn btn-rose btn-round">
                                            Buy Now!
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="width: 33.33%">
                                <div class="card card-pricing card-margin">
                                    <div class="content">
                                        <h6 class="category">3 Meals A Week</h6>
                                        <h1 class="card-title"><small>$</small>9.25<small>/meal</small></h1>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Reusable</b> Containers</li>
                                            <li><b>Customized</b> LunchBoxes</li>
                                            <li><b>Reusable</b> Totebag</li>
                                        </ul>
                                        <a href="pricing.html" class="btn btn-rose btn-round">
                                            Buy Now!
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="commercial">
                            <p class="description">
                                Great nutritious, well-balanced lunches for school kids aged 12 and up with busy parents!
                                Joining is simple as choosing, customizing, ordering!
                            </p>

                            <div class="col-md-6">
                                <div class="card card-pricing card-margin">
                                    <div class="content">
                                        <h6 class="category">3 Meals A Week</h6>
                                        <h1 class="card-title"><small>$</small>9.25<small>/meal</small></h1>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Reusable</b> Containers</li>
                                            <li><b>Customized</b> LunchBoxes</li>
                                            <li><b>Reusable</b> Totebag</li>
                                        </ul>
                                        <a href="pricing.html" class="btn btn-rose btn-round">
                                            Buy Now!
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-pricing">
                                    <div class="content">
                                        <h6 class="category">5 Meals A Week</h6>
                                        <h1 class="card-title"><small>$</small>8.50<small>/meal</small></h1>
                                        <ul>
                                            <li><b>Free Delivery</b></li>
                                            <li><b>Reusable</b> Containers</li>
                                            <li><b>Customized</b> LunchBoxes</li>
                                            <li><b>Reusable</b> Totebag</li>
                                            <li><b>+ Access</b> to PayItForward program</b></li>
                                            <li><b>+ more!</b></li>
                                        </ul>
                                        <a href="pricing.html" class="btn btn-rose btn-round">
                                            Buy Now!
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

        <div class="social-line text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title">Check us out!</h4>
                    </div>
                        <a href="https://twitter.com/munchkitco" class="btn btn-twitter btn-round">
                            <i class="fa fa-twitter"></i> Twitter
                        </a>
                        <a href="https://www.facebook.com/MunchKitCo/" class="btn btn-facebook btn-round">
                            <i class="fa fa-facebook-square"></i> Facebook
                        </a>
                        <a href="https://www.instagram.com/munchkitco/" class="btn btn-instagram btn-round">
                            <i class="fa fa-instagram"></i> Instagram
                        </a>
                </div>
            </div>
        </div>


    </div>


    <footer class="footer footer-white">
        <div class="container">
            <a class="footer-brand" href="index.php">MunchKit</a>

            <ul class="pull-center">
                <li>
                    <a href="index.php">
                        MunchKit
                    </a>
                </li>
                <li>
                    <a href="about-us.html">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="blog-posts.html">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/license" target="_blank">
                        Licenses
                    </a>
                </li>
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
<? 
} 
?>