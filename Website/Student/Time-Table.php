<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stats</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

            #Stylish
            {
                text-align: center;
                text-shadow: 3px 2px green;
                font-family:Arial, Helvetica, sans-serif;
                font-size:30px;
            }

    </style>
</head>
<body class="container1">
    <div class="Topper">
            <div class="Mylister">
                    <a href="Student_Home.php">Home</a>
                    <a href="Attendance.php" >Attendance</a>
                    <a href="Reminders.html">Reminders</a>
                    <a href="Profiler.php">TOPPERS</a>
                    <a href="Results.php">Results</a>
                    <a href="Stats.php">Statistics</a>
                    <a href="Text_and_Video.php">Text/Video Links</a>
                    <a href="Info.php">Info</a>
                    <a href="#" class="active">Time Table</a>
                    <a href="Calender_of_events.php">Calendar Of Events</a>
            </div>
            <div class="top-right-corner">
                <a href="#"><u>Logout</u></a>
            </div>
<div class="container">
            <h1 align="center" style="padding-bottom:50px">TIME TABLE</h1>
        <div class="out"><p id="Stylish"></p><table class='My-Table'><?php 
        session_start();
        extract($_POST);
        $str="SELECT Day,Period1,Period2,Period3,Period4,Period5,Period6 FROM time_table where SECTION =(SELECT SECTION FROM student WHERE SSN=\"".$_SESSION['uname']."\")";
        $sql = mysqli_query($db, "SELECT Day,Period1,Period2,Period3,Period4,Period5,Period6 FROM time_table where SECTION =(SELECT SECTION FROM student WHERE SSN=\"".$_SESSION['uname']."\"") ;
        echo $str;
        echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    d.innerHTML=`<tr>
                                    <th>DAY</th>
                                    <th>8:15-9:15</th>
                                    <th>9:15-10:15</th>
                                    <th>10:15-10:45</th>
                                    <th>10:45-11:45</th>
                                    <th>11:45-12:45</th>
                                    <th>12:45-1:30</th>
                                    <th>1:30-2:30</th>
                                    <th>2:30-3:30</th>
                                </tr>`;

                </script>";
        while ($arr=mysqli_fetch_array($sql, MYSQLI_ASSOC))
        {
            echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    var t=d.insertRow(1);
                    var c1=t.insertCell(0);
                    var c2=t.insertCell(1);
                    var c3=t.insertCell(2);
                    var c4=t.insertCell(3);
                    var c5=t.insertCell(4);
                    var c6=t.insertCell(5);
                    var c7=t.insertCell(6);
                    var c8=t.insertCell(7);
                    var c9=t.insertCell(8);
                    c1.innerHTML=\"".$arr['Day']."\";
                    c2.innerHTML=\"".$arr['Period1']."\";
                    c3.innerHTML=\"".$arr['Period2']."\";
                    c4.innerHTML=\"SB\";
                    c5.innerHTML=\"".$arr['Period3']."\";
                    c6.innerHTML=\"".$arr['Period4']."\";
                    c7.innerHTML=\"LB\";
                    c8.innerHTML=\"".$arr['Period5']."\";
                    c9.innerHTML=\"".$arr['Period6']."\";
                    </script>";
                  }
            
            ?>
        </select> 
        </div>

    
        </select> 
        </div>


        <form id="selection-from" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        </form>
    </div>



</div>

</body>
</html>
