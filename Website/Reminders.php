<?php
	extract($_POST);
	print_r($GLOBALS);

	$db = mysqli_connect("localhost:3306","root","","student-platform");



?>