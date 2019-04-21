<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>COE</title>
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
                    <a href="Text_and_Video.php" class="active">Text/Video Links</a>
            </div>
            <div class="top-right-corner">
                <a href="#"><u>Logout</u></a>
            </div>
<div class="container">
    
  <h1 align="center" style="padding-bottom:50px">Anchor Teacher Resources</h1>

    <div style="padding-bottom:50px">
        <div class="row">
        <form id="selection-from" action="Text_and_Video1.php" method="post">
        <input class="col-sm-3 btn btn-primary" type=submit value="Apply">
        </form>
    </div>



</div>

</body>
</html>
