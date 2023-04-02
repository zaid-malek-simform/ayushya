<!DOCTYPE html>
<html>


<?php
if (substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == "admin.php") {
	header("Location: index.php");
}
require ("head.php");
?>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	
	<div class="wrapper">
		<!-- Sidebar -->
		<?php
		include_once ("recep-nav.php");
		?>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			<?php
				include_once ("top-nav.php");
			?>
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<!-- Page Title -->
			<div class="row no-margin-padding">
				<div class="col-md-6">
					<h3 class="block-title">Receptionist Dashboard</h3>
				</div>
				<div class="col-md-6">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">
								<span class="ti-home"></span>
							</a>
						</li>
						<li class="breadcrumb-item active">Dashboard</li>
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
					<button type="button" class="btn btn-primary btnnew mt-3 ml-2"> New Case </button> 
					<button type="button" class="btn btn-secondary btnexist mt-3 ml-5"> Existing Case </button> 
				</div>	
				
				<div class="row">
					<!-- Widget Item -->
					<div class="col-sm-6">
						<div class="widget-area-2 proclinic-box-shadow">
							<h3 class="widget-title">Next Appointment</h3>
							<div class="table-responsive">
								<table class="table table1 table-bordered">
									<thead>
										<tr>
											<th>Token No.</th>
											<th>Patient Name</th>
											<th>Status</th>
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
										
									</tbody>
								</table>
							</div>

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
					<!-- modal new patient -->
					<div class="modal proclinic-modal-lg" id="newPatient" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content proclinic-box-shadow2">
										<div class="modal-header">
											<h5 class="modal-title">New Case</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<label for="name"> Patient Name* </label>
													<input type="text" class="form-control" id="name" placeholder="Patient Name" required>
												</div>
												<div class="form-group">
													<label for="contact"> Patient Contact </label>
													<input type="text" class="form-control" id="contact" placeholder="Patient Contact">
												</div>
												<div class="form-group">
													<label for="email"> Patient Email </label>
													<input type="email" class="form-control" id="email" placeholder="Patient Email">
												</div>
												<div class="form-group">
													<label for="city"> Patient City* </label>
													<input type="text" class="form-control" id="city" placeholder="Patient City" required>
												</div>
												<div class="form-group">
													<label for="gender"> Patient gender* </label>
													<div class="gender-control">
														<input type="radio" name="gender" id="male" value="Male" class="gender" required> Male
														<input type="radio" name="gender" id="female" value="Female"  class="gender"> Female
														<input type="radio" name="gender" id="other" value="Other"  class="gender"> Other
													</div>
												</div>
												<div class="form-group">
													<label for="DOB"> Birth Date* </label>
													<input type="date" class="form-control" name="dob" id="DOB" required>
												</div>
												<div class="form-group">
													<label for="BG"> Blood Group </label>
													<input type="text" class="form-control" id="BG" name="blood">
												</div>
												
												<button type="button" class="btn btn-lorvens proclinic-bg"> Create Case</button>
											</form>
										</div>
									</div>
								</div>
							</div>
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
<!-- Datatable  -->
<script src="datatable/jquery.dataTables.min.js"></script>
    <script src="datatable/dataTables.bootstrap4.min.js"></script>

	<!-- Custom Script-->
	<script src="js/custom.js"></script>
    <script src="js/custom-datatables.js"></script>

</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 05:55:43 GMT -->
</html>
