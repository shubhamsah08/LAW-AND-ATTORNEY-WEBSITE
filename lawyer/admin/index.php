
<?php
session_start();
// error_reporting(0);
include('../db.php');
if(isset($_POST['submit']))
{

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($con , $query);
// echo $result; die;
$res = mysqli_fetch_assoc($result);

if($res)
{
$_SESSION['id']= $res['id'];
$_SESSION['username']= $res['username'];
$_SESSION['password']= $res['password'];

// echo $_SESSION['username']; die;

header("location:Dashboard.php");
}
else
{
echo"Wrong Username And Password";
}
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from w3crm.Manasvi Tech Solutions Pvt Ltd.com/xhtml/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 03:14:23 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Login</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="../img/hero/logo.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
	<div class="page-wraper">

		<!-- Content -->
		<div class="browse-job login-style3">
			<!-- Coming Soon -->
			<div class="bg-img-fix overflow-hidden">
				<div class="row gx-0">
                <div class="col-xl-4">
                    </div>
					<div class="col-xl-4 vh-100 bg-white ">
						<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
							<div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
								<div class="login-form style-2">
									
									
									<div class="card-body">
										<div class="logo-header">
											<!-- <img src="images/logo1.png" style="margin-left:40px" alt="" class="width-100 light-logo"> -->
											<a href="index-2.html" >
										<img src="../assets/img/download.png" style="width:90px; height:80px; margin-left:90px;" alt="" ></a>
										</div>
									
										<nav>
											<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
												
										<div class="tab-content w-100" id="nav-tabContent">
										  <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
											<form action="#" method="post" class="dz-form pb-3">
														<div class="dz-separator-outer m-b5">
														<div class="dz-separator bg-primary style-liner"></div>
													</div>
													<!-- <p>Enter your username and your password. </p> -->
													<div class="form-group mb-3">
														<input type="email" name="username" id="username" class="form-control" value="" placeholder="Enter Your Email" required="">
													</div>
													<div class="form-group mb-3">
														<input type="password" name="password" id="password" class="form-control" value="" placeholder="Enter Your Passwoerd" required>
													</div>

                                                  <!--  -->


													<div class="form-group text-left mb-5 forget-main">
												
                                                        <input type="submit" class="btn btn-primary" name="submit" value="Sign In">
														</div>
											
												</form>
											
										  </div>
										
										  
										</div>
										
										</div>
									</nav>
									</div>
									
									</div>	
											
								</div>
							</div>
							<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
								<div class="mCSB_draggerContainer">
								<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
								<div class="mCSB_dragger_bar" style="line-height: 0px;"></div><div class="mCSB_draggerRail"></div></div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Full Blog Page Contant -->
		</div>
		<!-- Content END-->
	</div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/deznav-init.js"></script>
 <script src="js/custom.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from w3crm.Manasvi Tech Solutions Pvt Ltd.com/xhtml/page-login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 03:14:23 GMT -->
</html>