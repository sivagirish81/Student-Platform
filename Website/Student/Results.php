<?php
	session_start();
	if (!isset($_SESSION['uname']))
	{
		header("location:D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html");
	}
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>

<html>
	<head>
		<title>Results</title>
		<style>
			.Mylister{
					background-color: black;
					overflow: hidden;
					}
			.Mylister a {
					float : left;
					color : green;
					text-align: center;
					padding: 14px 16px;
					text-decoration: none;
					font-size: 17px;
					}
			.Mylister a:hover {
					background-color: gray;
					color: black;
					}
			
			.Mylister a.active {
					background-color: #4CAF50;
					color: black;
					}
			
			.top-right-corner{
					position:absolute;
					top:14px;
					right:17px;
					}
			.My-Table
			{
				border-collapse: collapse;
				width: 100%;
			}
			
			.My-Table th,td{
				text-align: left;
				padding: 8px;
			}
			
			.My-Table tr:nth-child(even){background-color: black;color:red;}
			.My-Table tr:nth-child(odd){background-color: black;color:green;}
			.My-Table th {
				background-color: black;
				color: red;
			}
			
			.My-container
			{
				border: 2px solid black;
				padding: 400px;
				background: url(Images/attendance.jpg);
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			.Positioner{
				position:relative;
				float:center;
				#padding:200px;
				top:-250px;
				
				}
					
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="Topper">
			<div class="Mylister">
					<a href="Student_Home.php">Home</a>
					<a href="Attendance.php" >Attendance</a>
					<a href="Reminders.html">Reminders</a>
					<a href="Profiler.php">TOPPERS</a>
					<a href="Results.php" class="active">Results</a>
					<a href="Stats.php">Statistics</a>
					<a href="Text_and_Video.php">Text/Video Links</a>
					<a href="Info.php">Info</a>
					<a href="Time-Table.php">Time Table</a>
                    <a href="Calender_of_events.php">Calendar Of Events</a>
			</div>
			<div class="top-right-corner">
				<a href="D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html"><u>Logout</u></a>
			</div>
		<div class="My-container">
			<div class="Att-Displayer">
			<form action="attendance.php" method="post">
				<div class="Positioner">
					<table class="My-Table">
					  <tr>
						<th>COURSE ID</th>
						<th>ISA_1_Marks</th>
						<th>ISA_2_Marks</th>
						<th>SGPA</th>
					  </tr>
					 </table>
					 <?php 
					  	
					  	$sql1=mysqli_query($db,"SELECT Course_ID FROM exam_department where SSN=\"".$_SESSION['uname']."\";");
					  	$sql2=mysqli_query($db,"SELECT ISA_1_Marks FROM exam_department where SSN=\"".$_SESSION['uname']."\";");
					  	$sql=mysqli_query($db,"SELECT ISA_2_Marks FROM exam_department where SSN=\"".$_SESSION['uname']."\";");
					  	$sql3=mysqli_query($db,"SELECT SGPA FROM exam_department where SSN=\"".$_SESSION['uname']."\";");
					  	while (($row1 = $sql1->fetch_assoc()) && ($row2 = $sql2->fetch_assoc()) && ($row = $sql->fetch_assoc()) && ($row3 = $sql3->fetch_assoc()))
					  	{
					  		echo "<script type='text/javascript'>
                					var x=document.querySelector('.My-Table');
                					var t=x.insertRow(1);
                					var c1=t.insertCell(0);
                					var c2=t.insertCell(1);
                					var c3=t.insertCell(2);
                					var c4=t.insertCell(3);
                					c1.innerHTML=\"".$row1['Course_ID']."\";
                					c2.innerHTML=\"".$row2['ISA_1_Marks']."\";
                					c3.innerHTML=\"".$row['ISA_2_Marks']."\";
                					c4.innerHTML=\"".$row3['SGPA']."\";</script>";
                					
                					
                				}
					  ?>
				</div>	
			</div>
		</div>
	</body>
</html>


