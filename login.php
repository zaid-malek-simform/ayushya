<!DOCTYPE html>
<html>
<?php 
	session_start();
	if (isset($_SESSION['email']) && isset($_SESSION['role'])){
		header("Location: index.php");
		die();
	}
	require ("head.php");
?>

<body class="auth-bg">
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->

	<div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3 ">
                <div class="card-heading docimglogin"></div>
                <div class="card-body">
                    <h2 class="title">Ayushya</h2>
                    <form method="POST" action="login_process.php">
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="pass">
                        </div>
						<div class="form-group row">
							<div class="col-sm-12">
								<span class="text-danger">
									<?php 
									if (isset($_REQUEST['error'])) {
										echo $_REQUEST['error'];
									}
									?>
								</span>
							</div>
						</div>
                        <div class="p-t-10">
                            <input class="btn btn--pill" type="submit" name="Submit" value="Log-In">
                        </div>
                        <div class="prompt">
                            <br><br>
                            <h5><a href="index.php">Ayushya.co.in</a> | Support</h5>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

	
		<!-- /Page Content  -->
	</div>
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


</html>