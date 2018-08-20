<?php 
$name="Rohit Maurya";
$pattern="/^[a-zA-Z][a-zA-Z ]{1,}[a-zA-Z]$/";

$ans=preg_match($pattern,$name);
// var_dump($ans);

if($ans==1){
	echo"valid";
}
else{
	echo"invalid";
}

 ?>