<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('connect.php');
if(!isset($_SESSION["token"]) || !isset($_SESSION["name"]))
	header("location:login.php");
$email = "";
if(isset($_SESSION["token"]) && isset($_SESSION["name"])){
	$username = $_SESSION["name"];
	$email = $_SESSION["email"];
	$current_token_id = $_SESSION["token"];
}	// } else
	// 		fetch the timestamp of the last token from the db and add 5 min to it
	

?>
<!doctype html>
<html class="fixed">
<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Modals | Porto Admin - Responsive HTML5 Template 1.4.1</title>
	<meta name="keywords" content="HTML5 Admin Template" />
	<meta name="description" content="Porto Admin - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
	<link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="assets/vendor/modernizr/modernizr.js"></script>
</head>
<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="../" class="logo">
					LOGO OF THE BANK
					<!-- IMAGE -->
				</a>
				
			</div>

			
			<!-- start: search & user box -->
			<div class="header-right">
				<div class="btn-group">
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default" >Contact Us</button>
				</div>
				<div class="btn-group">
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default" >Notifications</button>
				</div>
				<div class="btn-group">
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">About Us<span class="caret"></span></button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="team.php">Team</a></li>
													<li><a href="about.php">Project</a></li>
												</ul>
				</div>
				<span class="separator"></span>
				
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name"><?php echo $username; ?></span>
							<!-- <span class="role">Token Number: <?php echo $current_token_id; ?></span> -->
							<span class="role">Appointment Time: </span>
						</div>
						<i class="fa custom-caret"></i>
					</a>
					
					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->

			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<!-- start: page -->
				<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading bg-white">
										<div>
											<!-- <i class="fa fa-rocket"></i> -->
											<!-- Put the image here -->
										</div>
									</header>
									<div class="panel-body">
										<h3 class="text-weight-semibold mt-none text-center">Our Team</h3>
										<p class="text-center">Adrija Ganguly-1405095<br>
Akanksha-1405096 <br>
Akash Sharma-1405097<br>
Akriti Kumari-1405098<br>
Akshat Gupta-1405099</p>
									</div>
								</section>
							</div>

				<!-- end: page -->
			</section>
		</div>		
	</section>

	<!-- Vendor -->
	<script src="assets/vendor/jquery/jquery.js"></script>
	<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

	<!-- Specific Page Vendor -->
	<script src="assets/vendor/select2/select2.js"></script>
	<script src="assets/vendor/pnotify/pnotify.custom.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="assets/javascripts/theme.js"></script>

	<!-- Theme Custom -->
	<script src="assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="assets/javascripts/theme.init.js"></script>


	<!-- Examples -->
	<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
				
</body>
</html>