<?php
	session_start();
	$_SESSION["uname"]=$_POST["uname"];
	extract($_POST);


	#$db = mysqli_connect("localhost:3306","root","","student-platform");

	echo $_SESSION["uname"];

?>