<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 05:55:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ProClinic-Bootstrap4 Hospital Admin</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	<!-- <div class="theme-settings" id="switcher">
		<span class="theme-click">
			<span class="ti-settings"></span>
		</span>
		<span class="theme-color theme-default" data-color="green"></span>
		<span class="theme-color theme-blue" data-color="blue"></span>
		<span class="theme-color theme-red theme-active" data-color="red"></span>
		<span class="theme-color theme-violet" data-color="violet"></span>
		<span class="theme-color theme-yellow" data-color="yellow"></span>
	</div> -->
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="proclinic-bg">
			<div class="sidebar-header">
				<a href="admin.php"><img src="images/logo.png" class="logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li>
					<a href="manage-staff.php">
						<span class="ti-user"></span> Manage Staff
					</a>
				</li>
				<li>
					<a href="manage-payment.php">
						<span class="ti-money"></span> Manage Payments
					</a>
				</li>
			</ul>
			<div class="nav-help animated fadeIn">
                <h5><span class="ti-comments"></span> Need Help</h5>
                <h6>
                    <span class="ti-mobile"></span> +91-9879228567
                </h6>
                <h6>
                    <span class="ti-email"></span> support@ayushya.co.in
                </h6>
                <p class="copyright-text">Copy rights &copy; 2023</p>
            </div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="responsive-logo">
						<a href="admin.php"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<span class="ti-menu" id="sidebarCollapse"></span>
						</li>
						<li class="nav-item">
							<span title="Fullscreen" class="ti-fullscreen fullscreen"></span>
						</li>
						<li class="nav-item">
							<div class="modal fade proclinic-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">Search Patient/Doctor:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens proclinic-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
								<a class="dropdown-item" href="#">
									<span class="ti-money"></span> Patient payment done</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span>Patient Appointment booked</a>
								<a class="dropdown-item" href="#">
									<span class="ti-wheelchair"></span> New Patient Added</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				
				</div>
			</nav>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Admin Dashboard</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="admin.php">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item active">Admin Dashboard</li>
					</ol>
				</div>
			</div>
			<!-- /Page Title -->

			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">


				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-red">
							<div class="widget-left">
								<span class="ti-user"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Patients</h4>
								<span class="numeric color-red">348</span>
								<p class="inc-dec mb-0"><span class="ti-angle-up"></span> +20% Increased</p>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-green">
							<div class="widget-left">
								<span class="ti-bar-chart"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Appointments</h4>
								<span class="numeric color-green">1585</span>
								<p class="inc-dec mb-0"><span class="ti-angle-down"></span> -15% Decreased</p>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-4">
						<div class="widget-area proclinic-box-shadow color-yellow">
							<div class="widget-left">
								<span class="ti-money"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Revenue</h4>
								<span class="numeric color-yellow">$7300</span>
								<p class="inc-dec mb-0"><span class="ti-angle-up"></span> +10% Increased</p>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Appointments Year by Year</h3>
							<div id="lineMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title"> Patients Year by Year</h3>
							<div id="barMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
				<div class="row">
					<!-- Widget Item -->
					<div class="col-sm-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Appointments Status</h3>
							<div id="dopaymentutMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 progress-status proclinic-box-shadow">
							<h3 class="widget-title">Doctors Availability</h3>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Doctor</th>
											<th>Speciality</th>
											<th>Availability</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Rajesh</td>
											<td>Dental</td>
											<td>
												<span class="badge badge-success">Available</span>
											</td>
										</tr>
										<tr>
											<td>Riya</td>
											<td>Ortho</td>
											<td>
												<span class="badge badge-warning">On Leave</span>
											</td>
										</tr>
										<tr>
											<td>Siri</td>
											<td>Skin</td>
											<td>
												<span class="badge badge-danger">Not Available</span>
											</td>
										</tr>
										<tr>
											<td>Rajesh</td>
											<td>Dental</td>
											<td>
												<span class="badge badge-success">Available</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

						</div>
					</div>
					<!-- /Widget Item -->

				</div>

			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
		<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- morris charts -->
	<script src="charts/js/raphael-min.js"></script>
	<script src="charts/js/morris.min.js"></script>
	<script src="js/custom-morris.js"></script>

	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 05:55:43 GMT -->
</html>
