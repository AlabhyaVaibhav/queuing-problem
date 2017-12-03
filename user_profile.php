<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('connect.php');
if(!isset($_SESSION["token"]) || !isset($_SESSION["name"]))
	header("location:login.php");

if(isset($_SESSION["token"]) && isset($_SESSION["name"])){
	$username = $_SESSION["name"];
	$current_token_id = $_SESSION["token"];
}
if(isset($_POST["request_teller_1"]) || isset($_POST["request_teller_2"])){
	$full_name = $username;
	$phone_number = $_SESSION['pnum'];
	$token = md5(uniqid(rand(), true));
	if (!empty($_POST["request_teller_1"])) {
		$teller_id = $_POST['request_teller_1'];       
	}
	elseif (!empty($_POST["request_teller_2"])) {
		$teller_id = $_POST['request_teller_2'];       
	}
	else{
		$teller_id = 0;       
	}
	$request = $con->prepare("SELECT * FROM request_queue WHERE teller_id= 1 && request_status = 0 ORDER BY 'timestamp' DESC");
	$request->execute();
	$row1 = $request->fetch();
	if ($row1>0) {
		echo '<script type="text/javascript">alert("You have alredy made a request knidly wait for your turn");</script>';
	}
	else{
		$sql = "INSERT request_queue SET 
		full_name = :name,          
		phone_number = :pnum,
		token = :gentoken,
		teller_id = :tellerid";
		$stmt = $con->prepare($sql); 
		$stmt->bindParam(':name', $full_name,PDO::PARAM_STR);   
		$stmt->bindParam(':pnum', $phone_number,PDO::PARAM_STR);
		$stmt->bindParam(':gentoken', $token,PDO::PARAM_STR);
		$stmt->bindParam(':tellerid', $teller_id,PDO::PARAM_STR); 
		$stmt->execute();
	}
	
}

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
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Default <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
				<div class="btn-group">
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Default <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
				<div class="btn-group">
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Default <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
				<div class="btn-group">
					<button type="button" class="mb-xs mt-xs mr-xs btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Default <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
				<span class="separator"></span>
				
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name"><?php echo $username; ?></span>
							<span class="role">Token Number: <?php echo $current_token_id; ?></span>
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
								<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
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
				<div class="row">
					<div class="col-md-3">
						<section class="panel">
							<header class="panel-heading bg-primary">
								<div class="panel-heading-icon">
									<i class="fa fa-globe"></i>
								</div>
							</header>
							<div class="panel-body text-center">
								<h3 class="text-weight-semibold mt-sm text-center">Withdraw/ Deposit</h3>
								<p class="text-center">Description about the teller</p>
								
								<section class="panel">

									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-striped mb-none">
												<thead>
													<tr>
														<th>Current Token</th>
														<th>Queue Status</th>
														<th>Next Token</th>
													</tr>
												</thead>
												<tbody>
													<tr>

														<td>SBI1111</td>
														<td>
															<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
																<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																	6/10
																</div>
															</div>

														</td>
														<td>SBI2222</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</section>
								<form method="POST" action="user_profile.php">
									<button type="submit" class="btn btn-success" name="teller_1" id="teller_1">Request</button>
									
									<input type="hidden" name="request_teller_1" value="1">
								</form>
							</div>

						</section>
					</div>
					<div class="col-md-3">
						<section class="panel">
							<header class="panel-heading bg-primary">
								<div class="panel-heading-icon">
									<i class="fa fa-globe"></i>
								</div>
							</header>
							<div class="panel-body text-center">
								<h3 class="text-weight-semibold mt-sm text-center">Counter 2</h3>
								<p class="text-center">Description about the teller</p>
								
								<section class="panel">

									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-striped mb-none">
												<thead>
													<tr>
														<th>Current Token</th>
														<th>Queue Status</th>
														<th>Next Token</th>
													</tr>
												</thead>
												<tbody>
													<tr>

														<td>SBI1111</td>
														<td>
															<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
																<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																	6/10
																</div>
															</div>

														</td>
														<td>SBI2222</td>
													</tr>

												</tbody>
											</table>
										</div>
									</div>
								</section>
								<form method="POST" action="user_profile.php">
									<button type="submit" class="btn btn-success" name="teller_2" id="teller_2">Request</button>
									
									<input type="hidden" name="request_teller_2" value="2">
								</form>
							</div>

						</section>
					</div>
				</div>
				<!-- <div id="modalHeaderColorSuccess" class="modal-block modal-header-color modal-block-success mfp-hide">
					<section class="panel">
						<header class="panel-heading">
							<h2 class="panel-title">Success!</h2>
						</header>
						<div class="panel-body">
							<div class="modal-wrapper">
								<div class="modal-icon">
									<i class="fa fa-check"></i>
								</div>
								<div class="modal-text">
									<p><h4>Success</h4></p>
									<p>Your Token No. : <b>SBI1111</b></p>
									<p>Scheduled Time: </p>
									<p>Scheduled Date: </p>
								</div>
							</div>
						</div>
					-->
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