<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>
<html>
	<head>
		<title>Home</title>
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
			
			.My-container
			{
				border: 2px solid black;
				padding: 400px;
				background: url(Images/Classroom-2.jpg);
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			.Trans-container 
			{
			  /*position: relative;*/
			  position:relative;
			  bottom:-200px;
			  max-width: 800px;
			  margin: 0 auto;
			  /*height:500px;*/
			}


			.Trans-container .Trans-content {
			  position: absolute;
			  bottom: 0;
			  background: rgb(0, 0, 0); 
			  background: rgba(0, 0, 0, 0.5); 		/*opacity = 0.5*/
			  width: 100%;
			  padding: 20px;
			  height:500px;
			  text-align:center;
			}
			
			.deco{
				text-shadow: 2px 2px #FF0000;
				color:black;
				}
			
			#stylish
			{
				text-align: center;
				text-shadow: 3px 2px green;
				font-family:Arial, Helvetica, sans-serif;
				font-size:40px;
			}
					
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="Topper">
			<div class="Mylister">
					<a href="Student_Home.php" class="active">Home</a>
					<a href="Attendance.php">Attendance</a>
					<a href="Reminders.html">Reminders</a>
					<a href="Profiler.php">Profile</a>
					<a href="Results.php">TOPPERS</a>
					<a href="Stats.php">Statistics</a>
					<a href="Text_and_Video.php">Text/Video Links</a>
					<a href="Time-Table.php">Time Table</a>
                    <a href="Calender_of_events.php">Calendar Of Events</a>
			</div>
			<div class="top-right-corner">
				<a href="D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html"><u>Logout</u></a>
			</div>
		<div class="My-container">
			<div class="Notifier">
				<div class="Trans-Container">
					<div class="Trans-content">
						<h1 class="deco">Notifications</h1>
						<p id="Stylish" align="center">As if you could kill time without injuring eternity.</p>
						<?php
							session_start();
							extract($_POST);
							$sql=mysqli_query($db,"SELECT Notifications FROM student WHERE SSN=\"".$_SESSION['uname']."\"");
							while ($arr=mysqli_fetch_assoc($sql))
							{
								echo "<script type='text/javascript'>
										var x=document.getElementById('Stylish');
										x.innerHTML=\"".$arr['Notifications']."\"</script>";
							}

						?>
					</div>
				</div>
			</div>
			<form id="selection-from" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        		</form>
		</div>
	</body>
</html>
