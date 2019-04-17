<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>TOPPERS</title>
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
    </style>
</head>
<body class="container1">
    <div class="Topper">
            <div class="Mylister">
                    <a href="Student_Home.php">Home</a>
                    <a href="Attendance.php" >Attendance</a>
                    <a href="Reminders.html">Reminders</a>
                    <a href="Profiler.php" class="active">TOPPERS</a>
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
<div class="container">

  <h1 align="center" style="padding-bottom:50px">List Of Distinction Students</h1>
        
    


        <div class="out"><table class='My-Table'><?php 
        $sql = mysqli_query($db, "SELECT DISTINCT stud.SSN,stud.NAME,exam_department.CGPA,phone_number.Mobile_Number FROM student stud INNER JOIN exam_department ON stud.SSN=exam_department.SSN INNER JOIN phone_number ON stud.SSN=phone_number.SSN where exam_department.CGPA>=9");
        echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    d.innerHTML=`<tr>
                                    <th>NAME</th>
                                    <th>CGPA</th>
                                    <th>MOBILE NUMBER</th>
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
                    c1.innerHTML=\"".$arr['NAME']."\";
                    c2.innerHTML=\"".$arr['CGPA']."\";
                    c3.innerHTML=\"".$arr['Mobile_Number']."\";
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
