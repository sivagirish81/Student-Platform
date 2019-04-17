

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
			  overflow: auto;
			  /*height: 100%;*/
			}
			
			#test{
			padding-bottom:500px;
			}
			.deco{
				text-shadow: 2px 2px #FF0000;
				color:black;
				}
			
			.form-group{
				margin: auto;
				width:30%;
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
					<a href="Attendance.php">Attendance</a>
					<a href="Reminders.html" class="active">Reminders</a>
					<a href="Profiler.php">TOPPER</a>
					<a href="Results.php">Results</a>
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
			<div class="Notifier">
				<div class="Trans-Container">
					<div class="Trans-content">
						<h1 class="deco">Reminders</h1>
						<p id="test">Some Text...</p>
						<form action="Reminders1.php" method="post">
							<div class="form-group">
								<input id="submit" type="submit" name="Submitter">Insert/remove Remainders</input>
							</div>
						</form>
					</div>
				</div>
			</div>
			
		</div>
		<?php
	session_start();
	if(!isset($_SESSION["uname"])){
		echo "Sorry, Please login and use this page";
		exit;
		}
	
	extract($_POST);


	$db = mysqli_connect("localhost:3306","root","","student_platform");

	#echo $_SESSION["uname"];

	$stmt="select Reminders from student where SSN=\"".$_SESSION["uname"]."\";";		//sql query
   
    $res = mysqli_query($db,$stmt);				//query object

    if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
        {
            while($arr=mysqli_fetch_assoc($res))	
            {	
                echo "<script type='text/javascript'>
                		var x=document.querySelector('#test');
                		x.innerHTML=`<div>".$arr['Reminders']."</div>`;
                	</script>";
            }
         }

?>
		
	</body>
</html>
