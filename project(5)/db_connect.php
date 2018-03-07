<?php
	if(session_id() == ""){
		session_start();
		// echo session_id();
	}
	$conn = mysqli_connect("localhost","root","","rohit");