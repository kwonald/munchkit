<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<!-- Website Template designed by www.downloadwebsitetemplates.co.uk -->
<meta charset="UTF-8">
<title>MunchKit | Coming Soon</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="google-site-verification" content="65haxjpe2GW4XpuYWwykY59vj2LZ8_26NuXZnyBChx4" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
<link rel="shortcut icon" href="images/ico/lunchboxlogo.png">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/material-kit.css" rel="stylesheet"/>
<!--[if IE]><![endif]-->
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/countdown.js"></script>
<script src="js/owlcarousel.js"></script>
<script src="js/uikit.scrollspy.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(function() {
        $('button').click(function() {
          $('p').toggle;
          $("#myTextField").toggle();
        });
    });
</script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body id="backtotop">
<!-- For GOOGLE ANALYTICS  -->
<?php include_once("Includes/analyticstracking.php") ?>
<div class="fullwidth clearfix header-filter" data-parallax="active" style="background-image: url('assets/img/food/food-salad-healthy-lunch.jpg'); padding-bottom: 400px;bottom: 0px; background-size: cover;">	
</div>
<div class="fullwidth colour1 clearfix">
<div id="countdown" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
	<div>
		<h1><strong>MunchKit </strong></h1>
		<h3>coming your way soon.</h3>
		<p>Nutritious, well-balanced school lunches for your kids. Being a super parent made that much easier.</p>		
	</div>
</div>
</div>


<div class="arrow-separator arrow-theme"></div>

<div class="fullwidth colour2 clearfix">
	<div id="countdown" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<div> 	
			<h2><strong><p><big>Making school lunches everyday isn't easy.</big></p></strong></h1>
			<p>The time you spend making nutritious school lunches for your kids week after week can be overwhelming. Each <strong>MunchKit</strong> is personalized to each of your <strong>MunchKids</strong> and is delivered to your doorstep twice a week! With children's nutrition being our top priority, all our quality ingredients are fresh and locally sourced.</h3>	
		</div>
	
	</div>
</div>

<!-- <div class="arrow-separator arrow-theme"></div> -->
<div class="arrow-separator arrow-themelight"></div>
<div class="fullwidth colour1 clearfix">
	<div id="maincont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
	<p><img src="images/squirrel.png"  width="150" height="150" border="0"></p>
	<h3><strong>Coming to a neighbourhood near you!</strong></h3>
		<form method="POST" id="contact" class="clearfix" action="thankyou.php">
			<div>
			<p> Which neighbourhood are you in? </p>
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="location" id="location1" autocomplete="off" value="westpointgrey"> West Point Grey
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="location" id="location2" autocomplete="off" value="kistilano"> Kitsilano
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="location" id="location3" autocomplete="off" value="kerrisdale"> Kerrisdale
				  </label>
				 <!--  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="location" id="location4" autocomplete="off" value="other"> Other
				  </label> -->
				</div>
				<div id="signupform" class="sb clearfix">
					<p> If other: <input class="sb-search-input" name="alt-location" placeholder="Neighbourhood ..." type="text" value="" style="color:#000;" ></p>
				</div>
			</div>
			<br>
			<div>
			<p> How many kids do you have? </p>
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="numKids" id="numKids1" autocomplete="off" value="0"> 0 MunchKids
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="numKids" id="numKids1" autocomplete="off" value="1"> 1 MunchKid
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="numKids" id="numKids2" autocomplete="off" value="2"> 2 MunchKids
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="numKids" id="numKids3" autocomplete="off" value="3"> 3 MunchKids
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="radio" name="numKids" id="numKids4" autocomplete="off" value="4"> 4 or more
				  </label>
				</div>
			</div>
			<br>
			<p> How old are they? (Select all that apply) </p>
			<div>
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="age[]" id="age1" autocomplete="off" value="0"> Age 0 to 3
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="age[]" id="age2" autocomplete="off" value="4"> Age 4 to 7
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="age[]" id="age3" autocomplete="off" value="8"> Age 8 to 11
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="age[]" id="age4" autocomplete="off" value="12"> Age 12 and Up
				  </label>
				</div>
			</div>
			<br>
			<p> What are the challenges when it comes to making school lunches? (Select all that apply)</p>
			<div>
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="reason[]" id="reason1" autocomplete="off" value="time"> Finding the Time
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="reason[]" id="reason2" autocomplete="off" value="groceries"> Groceries
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="reason[]" id="reason3" autocomplete="off" value="variet"> Variety of Meals
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="reason[]" id="reason4" autocomplete="off" value="effort"> Effort
				  </label>
				 <!--  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="reason[]" id="reason4" autocomplete="off" value="other"> Other
				  </label> -->
				</div>
				<div id="reasonform" class="sb-search clearfix">
					<input class="sb-search-input" name="alt-reason" placeholder="Other Challenges If Any..." type="text" value="" style="color:#000;">
				</div>
			</div>
			<br>
			<p> How did you hear about us? (Select all that apply)</p>
			<div>
				<div class="btn-group" data-toggle="buttons">
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="referral[]" id="referral1" autocomplete="off" value="online"> Online
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="referral[]" id="referral2" autocomplete="off" value="mouth"> Word of mouth
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="referral[]" id="referral3" autocomplete="off" value="print"> Newspaper/Magazine
				  </label>
				  <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="referral[]" id="referral4" autocomplete="off" value="person"> I saw you in person!
				  </label>
				  <!-- <label class="btn btn-rose btn-square btn-lg">
				    <input type="checkbox" name="referral[]" id="referral5" autocomplete="off" value="other"> Other
				  </label> -->
				</div>
				<div id="referral" class="sb clearfix">
					<p> If other: <input class="sb-search-input" name="alt-referral" placeholder="Sources ..." type="text" value="" style="color:#000;"></p>
				</div>
			</div>
		
			<br>
	        <h2>You'll be the first ones to know when we launch</h2>
	        <p> You'll automatically be entered to win a free weeks worth of MunchKits for you and a friend! </p>
			<div id="signupform" class="sb-search clearfix">
				<input class="sb-search-input" name="email" placeholder="Enter email ..." type="text" value="" required>
				<input class="sb-search-submit" value="" type="submit">
				<button class="formbutton" type="submit"><span class="fa fa-sign-in"></span></button>
			
		</form>
		
	</div>
	<div class="copyright ">
        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by MunchKit
    </div>
	
	</div>
</div>

<div class="arrow-separator arrow-theme"></div>

<div class="fullwidth colour3 clearfix">
	<div id="quotecont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

        <div id="commentslider" class="owl-carousel">
            <div class="item">
                <p><strong>Our Story & Our Mission</strong> MunchKit was born of a desire to set you free from the daily grind of making lunch for your kids.  We know first-hand how difficult it can be to provide children with a nutritious, well-balanced meal every day, and we're here to help.  Forged in the fires of UBC's Startup Weekend 2017 competition, hosted by Google, MunchKit came first place overall and also recieved awards for Crowd Favourite and Most Socially Impactful Business.  The passion and drive that led us to success there are now completely dedicated to providing the best service possible for you and your kids.  Eating right shouldn't be a chore; let MunchKit set you free. </p>
            	<p class="author">- MunchKit</p>
            </div>
            
        </div>
	
	</div>
</div>


   
</body>
</html>