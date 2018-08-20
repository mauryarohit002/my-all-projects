<?php
	session_start();
	if(!isset($_SESSION['log_name'])){
		// echo "yes";
		header("location:logout.php");
	}
	require_once 'header.php';
?>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Password Update Form</h2>
						<form id="password_form">
							
							<input type="password" placeholder="your Current password" name="cpass" />
							<input type="password" placeholder="your New password" name="npass" />
							<input type="password" placeholder="your Confirm New password" name="cnpass" />
								
							<button type="button" class="btn btn-default btn_password">Update</button>
						</form>
						<div class="err_password"></div>

					</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->
<?php
	require_once 'footer.php';
?>