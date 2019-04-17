

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
			padding-bottom:300px;
			left:10px;
			width:200%;
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
						<h1 class="deco">Add or Remove Reminders</h1>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<div class="form-group">
								<input id="test" type="textarea" name="Submitter" value="">
								<input id="testing" type="submit" name="tster" value="Update">
							</div>
						</form>
						<?php
							session_start();
							if (!(isset($_SESSION['uname'])))
							{
								header("location:D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html");
							}
							extract($_POST);
							$string="";
							$temp="";
							$db = mysqli_connect("localhost:3306","root","","student_platform");
							$i=0;
							$brflag=0;
							if (!($Submitter=="1") && !($Submitter=="Nothing To be Reminded Off") && !($Submitter=="1") && !($Submitter=="Insert/remove Remainders") && !(strlen($Submitter)==1)&&(is_string($Submitter)))
							{
								echo "console.log('Hi')";
								$stmt2="select Reminders from student where SSN=\"".$_SESSION["uname"]."\";";		//sql query
		   						$res2 = mysqli_query($db,$stmt2);
		   						if($res2 && mysqli_num_rows($res2)==1)				//atleast one row and only one row
						        {
			   						while($arr=mysqli_fetch_assoc($res2))	
							            {	#echo "console.log('Hi')";
							        
							        		if ($arr['Reminders']=="Nothing To be Reminded Off")
							        		{
							        			$arr['Reminders']="";
							        		}

							        		if ($Submitter=="Nothing To be Reminded Off")
							        		{
							        			$Submitter="";
							        		}
							            	$string=$arr['Reminders'].$Submitter."<br\>";
							            	$stmt3="update student set Reminders=\"".$string."\"where SSN=\"".$_SESSION['uname']."\"";
							            	$res3=mysqli_query($db,$stmt3);
							            }
							     }
							     echo "console.log('Hi')";

							}
							else if ($Submitter=="1" || is_numeric((int)$Submitter) || (int)$Submitter==1)
							{
								$stmt="select Reminders from student where SSN=\"".$_SESSION["uname"]."\";";		//sql query
		   						$res = mysqli_query($db,$stmt);
		   						if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
						        {
						            while($arr=mysqli_fetch_assoc($res))	
						            {	
						            	$string=$arr['Reminders'];
						            	echo $string;
						            	for ($i=0;$i<strlen($string);$i++)
						                {
						                	#echo $string;
						                	if ($string[$i]==$Submitter)
						                	{
						                		for ($j=$i+1;$j<(strlen($string)-1);$j++)
						                		{
						                			
						                			if ((is_numeric((int)$string[$j])&&$string[$j+1]=="."))
						                			{
						                				echo $string;
						                				#$temp=substr($string,$i).substr($string,(-1*$j));
						                				$temp="Nothing To be Reminded Off";
						                				#echo $temp;
						                				$stmt1="update student set Reminders=\"".$temp."\"where SSN=\"".$_SESSION['uname']."\"";
						                				$res=mysqli_query($db,$stmt1);
						                				$brflag=1;
						                				break;
						                			}
						                			if ($brflag==1)
							                		{
							                			break;
							                		}
						                		}
						                		if ($brflag==1)
							                		{
							                			break;
							                		}
						                	}
						                	if ($brflag==1)
							                		{
							                			break;
							                		}
						                }
									}
								}
							} 

							if (isset($_POST['tster']))
							{
								header("location:Reminders.html");
							}

						?>
					</div>
				</div>
			</div>
			
		</div>

	</body>
</html>
