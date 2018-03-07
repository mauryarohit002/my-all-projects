<?php 

require_once 'header.php';
 ?>
<div class="container">
	
<h2 class="text-center">cart data</h2>
<?php 
//print_r($_COOKIE['products']);
if(!isset($_COOKIE['products'])){
 	echo "cart Empty";
}
else{
	$data=$_COOKIE['products'];
	//echo $data;
	$str ="select pro_id,pro_name,pro_price,pro_discount,pro_description,pro_path,br_name,ca_name from brands,categories,products where br_id=pro_brid and ca_id=pro_caid and pro_id in($data) order by pro_id desc";
	//echo $str;
	$res=mysqli_query($conn,$str) or die(mysqli_error($conn));
//print_r($res);
 if($res->num_rows>0):
 	while($ans=$res->fetch_array(MYSQLI_ASSOC)):
//  echo "<pre>";
// print_r($res);
// echo "<pre>";
 ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
<img src="<?php echo $ans['pro_path'];  ?>" alt="" />
<h2><?php echo round($ans['pro_price']) ;?></h2>
<p><?php echo $ans['pro_name']; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>delete</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
<h2><?php echo round($ans['pro_price']) ;?></h2>
<p><?php echo $ans['pro_name']; ?></p>

												<a href="#" for="<?php echo $ans['pro_id']; ?>" class="btn btn-default add-to-cart delete-from-cart"><i class="fa fa-shopping-cart "></i>delete</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i><?php echo $ans['ca_name']; ?></a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i><?php echo $ans['br_name']; ?></a></li>
									</ul>
								</div>
							</div>
						</div>
<?php 
endwhile;
endif;



}
?>
</div>

 <?php 
require_once 'footer.php';
  ?>