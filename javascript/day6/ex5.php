<?php 
	
	$data=["php","mysql","Ajax"];
	print_r($data);

	echo $data[0];
	echo $data[1];
	echo $data[2];

	echo "<hr>";

	for($i=0;$i<count($data);$i++)
	{
		echo $data[$i];
		echo"<br>";
	}
	
	echo "<hr>";

	$i=0;
	while($i<count($data))
	{
		echo $data[$i];
		echo"<br>";
		$i++;
	}
	
	echo "<hr>";

	foreach($data as $ans) 
	{
		echo $ans;
		echo"<br>";
	}

 ?>