
<?php
session_start();
if(!isset($_SESSION['log_name'])){
	header("location:logout.php");
}
require_once 'header.php';
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>password update form</h2>
						<form id="password_form">
							<input type="password" placeholder="enter current password" name="cpass" />
							<input type="password" placeholder="Enter new Password" name="npass" />
							<input type="password" placeholder="Enter confirm new Password" name="cnpass" />
							<button type="button" class="btn btn-default btn_password">update</button>
						</form>
						<div class="err_password"></div>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section>
<?php
require_once 'footer.php';
?>
