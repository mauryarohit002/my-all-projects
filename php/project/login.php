<?php 
session_start();
if(isset($_SESSION['log_name'])){
	//echo "yes";
	header("location:index.php");
}
require_once 'header.php';

 ?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="login_form">
							<input type="text" placeholder="admine@gmail.com" name="log_email" />
					    	<input type="password" placeholder="your password" name="log_password" />
                             
							<button type="button" class="btn btn-default btn_login">Login</button>
						</form>
						<div class="err_login"></div>
					
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="register_form">
							<input type="text" placeholder="rohit" name="log_name"/>
							<input type="text" placeholder="8286850973" name="log_mobile"/>
							<input type="text" placeholder="rohit@gmail.com" name="log_email"/>
							<input type="password" placeholder="your Password" name="log_password"/>
							<input type="password" placeholder="same as Password" name="log_cpassword"/>
							<button type="button" class="btn btn-default btn_register">Signup</button>
						</form>
						<div class="err_register"></div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->





 <?php 

require_once 'footer.php'
  ?>