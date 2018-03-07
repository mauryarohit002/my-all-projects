<?php
	session_start();
	if(!isset($_SESSION['log_name'])){
		header("location:logout.php");
	}
	else{
		if($_SESSION['log_status']!=0){
			header("location:index.php");
		}
	}
	require_once 'header.php';
?>
<div class="container">
	<div class="login-form"><!--login form-->
		<h2>Login to your account</h2>
		<form action="category_action.php" method="post">
			<input placeholder="Mens Wear" type="text" name="cat_name">
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>
<?php
	require_once 'footer.php';
?>