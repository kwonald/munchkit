<?php
require_once('Includes/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$email = $_POST['email'];
	$neighbourhood = '';
	$numKids = -1;
	$ages='';
	$reasons='';
	$referralSources='';

	if($_POST['location']){
		$location = $_POST['location'];
	}

	if($_POST['numKids']){
		$numKids = $_POST['numKids'];
	}

	if($_POST['age']){
		foreach($_POST['age'] as $age){
			$ages = $ages . $age  . ",";
		}
	}

	if($_POST['reason']){
		foreach($_POST['reason'] as $reason){
			$reasons = $reasons . $reason . ",";
		}
	}
	if($_POST['referral']){
		foreach($_POST['referral'] as $referral){
			$referralSources = $referralSources . $referral. ","  ;
		}
	}
	if($_POST['alt-location']){
		$location .= $_POST['alt-location'];
	}
	if($_POST['alt-reason']){
		$reasons .= $_POST['alt-reason'];
	}
	if($_POST['alt-referral']){
		$location .= $_POST['alt-referral'];
	}

	// save to the db
	munchKitDB::getInstance()->insert_prelaunch_data($email, $neighbourhood, $numKids, $ages, $reasons, $referralSources);
}
?>
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
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body id="backtotop">

<div class="fullwidth clearfix">
	<div id="topcontainer" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
		
		<p><img src="images/squirrel.png"  width="150" height="150" border="0"></p>
		<h1><span>Thank you for your interest!</span></h1>
		<h1><strong>#mysuperparentmoment</strong></h1> 
		<h2>Join The Conversation</h2>
		
	</div>
</div>

<div class="arrow-separator arrow-white"></div>

<div class="fullwidth colour1 clearfix">
	<div id="countdown" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<div id="footercont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
			<p class="backtotop">Follow us on social media for events and exclusive deals!</p>
			<div id="socialmedia" class="clearfix">
				<ul>
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
			<div class="copyright ">
	                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by MunchKit
	            </div>
			
		</div>
	
	</div>
</div>
	
   
</body>
</html>