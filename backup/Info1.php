<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Send Notification</title>
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
            .container1
            {
                
                background: url(Images/Classroom-2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
  </style>
<body class="container1">
  <div class="Mylister">
                    <a href="Student_Home.php">Home</a>
                    <a href="Attendance.php" >Attendance</a>
                    <a href="Reminders.html">Reminders</a>
                    <a href="Profiler.php">TOPPERS</a>
                    <a href="Results.php">Results</a>
                    <a href="Stats.php">Statistics</a>
                    <a href="Text_and_Video.php">Text/Video Links</a>
                    <a href="Info.php" class="active">Info</a>
                    <a href="Time-Table.php">Time Table</a>
                    <a href="Calender_of_events.php">Calendar Of Events</a>
            </div>
            <div class="top-right-corner">
                <a href="D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html"><u>Logout</u></a>
            </div>
<div class="container">

  <h1 align="center" style="padding-bottom:50px">Teachers Teaching ME</h1>

    <div style="padding-bottom:50px">
        <div class="row">
    
    <div>
    
    <?php
    
    ?>
    </div>


         <form id="selection-from" action="teacher2.php" method="post">
        </form>
    <table class='My-Table'><?php
    session_start();


      $stmt = "SELECT Name FROM teacher WHERE Initials in (SELECT t.Initials FROM teacher as t, course_taken as ct WHERE t.Initials = ct.Teacher_Initials and ct.SSN ='".$_SESSION['uname']."')";
      #print_r($stmt);
      $sql=mysqli_query($db,$stmt);

      echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    d.innerHTML=`<tr>
                                    <th>Teachers Teaching ME</th>
                                    
                                </tr>`;

                </script>";
      while ($arr=mysqli_fetch_assoc($sql))
        {
          echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    var t=d.insertRow(1);
                    var c1=t.insertCell(0);
                    c1.innerHTML=\"".$arr['Name']."\";
                    </script>";
                  }
            
            
      
    ?>
    </div>



</div>

</body>
</html>


  