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
			padding-bottom:100px;
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
					<a href="Reminders.php" class="active">Reminders</a>
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
						    <p id="test"><br></p>
                            <div> 
                                <textarea rows="5" columns="150" form="form1" name="Add"></textarea>
                                <input type="Submit" value="Add" form="form1">

                            </div>
					    </div>
				    </div>
			    </div>
			</div>
		</div>
        <?php
            session_start();
            if(!isset($_SESSION["uname"]))
            {
                echo "Sorry, Please login and use this page";
                exit;
            }
            $db = mysqli_connect("localhost:3306","root","","student_platform");
            extract($_POST);
            $stmt="select Reminders from student where SSN=\"".$_SESSION["uname"]."\";";		//sql query
   
            $res = mysqli_query($db,$stmt);				//query object
        
            echo "<form  id='form1' method='post'></form>";            
            if($res && mysqli_num_rows($res)==1)				//atleast one row and only one row
            {
                while($arr=mysqli_fetch_assoc($res))	
                {	
                    $reminders = explode("|",$arr['Reminders']);   
                    if(isset($Delete) && strlen($Delete)>0)
                    {
                        $Delete = str_replace("-"," ",$Delete);
                        
                        for($i = 0; $i<count($reminders); ++$i)
                        {
                            if(strcmp($reminders[$i],$Delete)==0)
                            {
                                unset($reminders[$i]);
                                $new_string = implode("|",$reminders);
                                $stmt1 = "update student set Reminders='".$new_string."' where SSN='".$_SESSION["uname"]."';";
                                $res1 = mysqli_query($db,$stmt1);
                            }
                        }   
                        
                    }
                    if(isset($Add) && strlen($Add)>0)
                    {
                        array_push($reminders,$Add);
                        $new_string=implode("|",$reminders);
                        $stmt2 = "update student set Reminders='".$new_string."' where SSN='".$_SESSION["uname"]."';";
                        $res2  = mysqli_query($db,$stmt2);                        
                    }
                    foreach($reminders as $reminder)
                    {
                        $reminder = str_replace(" ","-",$reminder);
                        echo "<script type='text/javascript'>
                            var x=document.querySelector('#test');
                            x.innerHTML +=`<div align='left'><span><strong><big>*".$reminder." </big></strong></span>
                            <button name='Delete' value=".$reminder." type='submit' style='float:right' form='form1'>Delete</button></div><br>`;
                        </script>";
                    }
                    
                }
             }
        
        ?>
		
	</body>
</html>