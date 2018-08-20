<?php 
$result = mysqli_connect("localhost","root","","rohit");
$str = "select id,name,salary from maurya";
//echo $str;
$ans =$result ->query($str) or die($result->error);
//print_r($ans);
if ($ans -> num_rows >0) {
//fetch_arrey(mysquli_num)
	//fetch_arrey(mysquli_assoc)
	//fetch_arrey(mysquli_both)
	//fetch_object()
	echo "<table>";
	while ($rec = $ans->fetch_array(MYSQLI_ASSOC)) 
	{
		//print_r($rec);
		//echo "<br>";
$x = $rec[ 'id'];
echo "<tr>";
echo "<td>";
echo $rec['id'];
echo "</td>";
echo "<td>";
echo $rec['name'];
echo "</td>";
echo "<td>";
echo $rec['salary'];
echo "</td>";
echo "<td>";
echo "<a href='deletedata.php?abcd=$x'> delete </a>";
echo "</td>";
echo "</tr>";

	}
	echo "</table>";
}
else 
{

echo "no data"	;
}

mysqli_close($result);

 ?>