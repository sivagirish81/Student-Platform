<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Text and Video Links</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
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
    .row
            {
                border-collapse: collapse;
                width: 100%;
            }
            
            .row th,td{
                text-align: left;
                padding: 8px;
            }
            
            .row tr:nth-child(even){background-color: black;color:red;}
            .row tr:nth-child(odd){background-color: black;color:green;}
            .row th {
                background-color: black;
                color: red;
            }
            .container1
            {
                
                background: url(Images/Classroom-2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }

            #Stylish
            {
                text-align: center;
                text-shadow: 3px 2px green;
                font-family:Arial, Helvetica, sans-serif;
                font-size:30px;
            }
            .Date_and_Event
            {
                #padding:28px 30px;
                background-color: black;
                color: green;
            }
</style>
<body class="container1">
    <div class="Topper">
            <div class="Mylister">
                    <a href="Student_Home.php">Home</a>
                    <a href="Attendance.php">Attendance</a>
                    <a href="Reminders.html">Reminders</a>
                    <a href="Profiler.php">Profile</a>
                    <a href="Results.php">TOPPERS</a>
                    <a href="Stats.php">Statistics</a>
                    <a href="Text_and_Video.php">Text/Video Links</a>
                    <a href="Info.php">Info</a>
                    <a href="Time-Table.php">Time Table</a>
                    <a href="Calender_of_events.php" class="active">Calendar Of Events</a>
            </div>
            <div class="top-right-corner">
                <a href="D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html"><u>Logout</u></a>
            </div>

<div class="container">
  <h1 align="center" style="padding-bottom:50px" id="Stylish">Calender Of Events</h1>

  
    <div id="Content" align = "center">
        <?php 
                    $sql=mysqli_query($db,"SELECT * FROM Calender_Of_Events");
                    while ($arr=mysqli_fetch_array($sql, MYSQLI_ASSOC))
                    {
                        echo "<script type='text/javascript'>
                               var x=document.getElementById('Content');
                               var d=document.createElement('div');
                               d.className='Date_and_Event'
                               d.innerHTML=`<h3>".$arr['Date']."</h3>
                                            </br>
                                            <h6><b><i>".$arr['EVENTS']."</i></b></h6>
                                            </br>`
                               x.appendChild(d);
                               </script>";
                    }
                ?>
                    </form>
                </div>
            </div>

        </div>
    </div>


</div>

</body>
</html>
