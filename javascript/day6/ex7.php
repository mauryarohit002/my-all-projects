<?php 
	$data= array(
		0=> [1,"rohit",20],
		1=> [2,"Aakash",19],
		2=> [3,"nilesh",22]
	);

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	foreach($data as $ans){
		echo "<p>";
		echo $ans[0];
		echo $ans[1];
		echo $ans[2];
		echo "</p>";
	}

 ?>

