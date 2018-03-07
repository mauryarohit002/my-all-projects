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
						<h2>product page</h2>
						<form action="product_action.php" method="post" enctype="multipart/form-data">
							<select name="pro_caid">
								<option value="">please select category</option>
<?php 
		$str="select ca_id,ca_name from categories";
		//print($str);
		$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
		if($res->num_rows>0):
		while($ans = $res->fetch_array(MYSQLI_ASSOC)):
?> 
		<option value="<?php echo $ans['ca_id']; ?>">
<?php
		echo $ans['ca_name'];
?>

		</option>
<?php
		endwhile;
		endif;
?>
							</select>
							<br/><br/>
							<select name="pro_brid">
								<option value="">please select category</option>
<?php 
		$str="select br_id,br_name from brands";
		//print($str);
		$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
		if($res->num_rows>0):
		while($ans = $res->fetch_array(MYSQLI_ASSOC)):
?> 
        <option value=" <?php echo $ans['br_id'] ?>">
<?php
		echo $ans['br_name'];
?>

        </option>
<?php
		endwhile;
		endif;
?>
							</select>
							<br/><br/>
							<input placeholder="mens formal Tshirt from Adidas" type="text" name="pro_name">
							<input placeholder="product price in rs: 2560" type="text" name="pro_price">
							<input placeholder="product discount from 1 to 99" type="number" name="pro_discount" value="0" min="0" max="99">
							<input  type="file" name="pro_path">
							<textarea  placeholder="product description" name="pro_desc"></textarea>
							<button type="submit" class="btn btn-default">add</button>
						</form>
					</div>

</div>


<?php 

require_once 'footer.php';
 ?>