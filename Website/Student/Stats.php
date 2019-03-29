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
                    <a href="Stats.php" class="active">Statistics</a>
                    <a href="Text_and_Video.php">Text/Video Links</a>
            </div>
            <div class="top-right-corner">
                <a href="#"><u>Logout</u></a>
            </div>
<div class="container">
            <h1 align="center" style="padding-bottom:50px">STATISTICS</h1>
        <div class="out"><p id="Stylish">List of People Eligible for placements</p><table class='My-Table'><?php 
        $sql = mysqli_query($db, "SELECT NAME,DATE_OF_BIRTH,GENDER,Class_10_Marks,Class_12_Marks FROM student where SSN in( SELECT SSN FROM exam_department where CGPA>8)") ;
        echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    d.innerHTML=`<tr>
                                    <th>NAME</th>
                                    <th>DATE_OF_BIRTH</th>
                                    <th>Gender</th>
                                    <th>Class_10_Marks</th>
                                    <th>Class_12_Marks</th>
                                    <th>Tier</th>
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
                    c1.innerHTML=\"".$arr['NAME']."\";
                    c2.innerHTML=\"".$arr['DATE_OF_BIRTH']."\";
                    c3.innerHTML=\"".$arr['GENDER']."\";
                    c4.innerHTML=\"".$arr['Class_10_Marks']."\";
                    c5.innerHTML=\"".$arr['Class_12_Marks']."\";
                    c6.innerHTML=\"Tier1\";

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
