<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
<?php
	$str = "select ca_id,ca_name from categories";
	$res = mysqli_query($conn,$str) or die(mysqli_error($conn));
	// print_r($res);
	if($res->num_rows>0):
	while($ans = $res->fetch_array(MYSQLI_ASSOC)):
?>							
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title"><a href="category-wise-product.php?catid=<?php echo $ans['ca_id']?>">
				<?php
				echo $ans['ca_name'];
				?>
			</a></h4>
		</div>
	</div>
<?php
	endwhile;
	endif;
?>								
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">

<?php
	$str = "select br_id,br_name from brands";
	$res = mysqli_query($conn,$str) or die(mysqli_error($conn));
	// print_r($res);
	if($res->num_rows>0):
	while($ans = $res->fetch_array(MYSQLI_ASSOC)):
?>
	<li><a href="#" class="filter_brand" for="<?php echo $ans['br_id'];?>"> <span class="pull-right">(50)</span>
	<?php 
	// print_r($ans);
	echo $ans['br_name'];
	?>
	</a></li>
<?php
	endwhile;
	endif;
?>									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>