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
  <style>
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
            .container
            {
                border: 2px solid black;
                padding: 400px;
                background: url(Images/Classroom-2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
            }
    </style>
</head>
<body>

<div class="container">
  <h1 align="center" style="padding-bottom:50px">List Of Distinction Students</h1>

    


        <div class="out"><table class='My-Table'><?php 
        $sql = mysqli_query($db, "SELECT DISTINCT stud.SSN,stud.NAME,exam_department.CGPA,phone_number.Mobile_Number FROM student stud INNER JOIN exam_department ON stud.SSN=exam_department.SSN INNER JOIN phone_number ON stud.SSN=phone_number.SSN where exam_department.CGPA>=9");
        echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    var t1=d.insertRow(1);
                    var c11=t.insertCell(0);
                    var c21=t.insertCell(1);
                    var c31=t.insertCell(2);
                    c11.innerHTML='NAME';
                    c21.innerHTML='SGPA';
                    c31.innerHTML='PHONE NUMBER';
                </script>";
        while ($arr=mysqli_fetch_array($sql, MYSQL_ASSOC))
        {
            echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    var t=d.insertRow(1);
                    var c1=t.insertCell(0);
                    var c2=t.insertCell(1);
                    var c3=t.insertCell(2);
                    c1.innerHTML=\"".$arr['NAME']."\";
                    c2.innerHTML=\"".$arr['SGPA']."\";
                    c3.innerHTML=\"".$arr['Mobile_Number']."\";
                    </script>";
                  }
            
            ?>
        </select> 
        </div>

    
        </select> 
        </div>


        <form id="selection-from" action="Profiler1.php" method="post">
        <input class="col-sm-3 btn btn-primary" type=submit value="Get Data">
        </form>
    </div>



</div>

</body>
</html>
