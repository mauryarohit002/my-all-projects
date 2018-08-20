<?php 
for($i=1;$i<=10;$i++)
{
	if($i%2==0){
		echo pow($i,2) . "<br>";
	}
	else{
		echo round(sqrt($i),2)."<br>";
	}
}


 ?>