<?php 
	$data= array(
		0=> [1,"rohit",20],
		1=> [2,"Aakash",19],
		2=> [3,"nilesh",22]
	);

	echo "<pre>";
	print_r($data);
	echo "</pre>";

 ?>

<table border="1" width="300" align="center">
	<?php 
	foreach($data as $ans){
	 ?>
	
	<tr>
		<td><?php echo $ans[0] ?></td>
		<td><?php echo $ans[1] ?></td>
		<td><?php echo $ans[2] ?></td>

	</tr>
	<?php 
	}
	 ?>
</table>