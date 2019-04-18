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
                    <a href="Info.php">Info</a>
                    <a href="Time-Table.php">Time Table</a>
                    <a href="Calender_of_events.php">Calendar Of Events</a>
            </div>
            <div class="top-right-corner">
                <a href="D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html"><u>Logout</u></a>
            </div>

<div class="container">
  <h1 align="center" style="padding-bottom:50px" id="Stylish">Text and Video Links</h1>

  
    <div align = "center">
        <table class="row">
    
              <?php 

                #$stmt = "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER='".$_POST['semester']."' and s.Section ='". $_POST['section']."' and s.SSN=ct.SSn and c.course_id ='".$_POST['course']."'  and c.course_id = ct.course_id;";
                $stmt = "SELECT DISTINCT R.Course_ID,R.Text_Link,R.Video_Link,course.Anchor FROM resources R INNER JOIN course ON course.Course_id=R.Course_ID WHERE R.Teacher_Initials=course.Anchor";
                
                $sql = mysqli_query($db, $stmt);

                echo "<script type='text/javascript'>
                        var d=document.querySelector('.row');
                        d.innerHTML=`<tr>
                                    <th>Course ID</th>
                                    <th>TextBooks</th>
                                    <th>Videos</th>
                                    <th>Anchor</th>
                                </tr>`;
                                 </script>";
                            
                         while ($arr=mysqli_fetch_array($sql, MYSQLI_ASSOC))
                        {
                            echo "<script type='text/javascript'>
                                    var d=document.querySelector('.row');
                                    var t=d.insertRow(1);
                                    var c1=t.insertCell(0);
                                    var c2=t.insertCell(1);
                                    var c3=t.insertCell(2);
                                    var c4=t.insertCell(3);
                                    c1.innerHTML=\"".$arr['Course_ID']."\";
                                    c2.innerHTML=\"".$arr['Text_Link']."\";
                                    c3.innerHTML=\"".$arr['Video_Link']."\";
                                    c4.innerHTML=\"".$arr['Anchor']."\";
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
