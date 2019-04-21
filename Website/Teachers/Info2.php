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
<body>
<a href="Teacher_Home.html" class="active">Home</a>
<div class="container">
  <h1 align="center" style="padding-bottom:50px">Send Notification</h1>

    <div style="padding-bottom:50px">
        <div class="row">
    
    <div>
    
    <?php
    
    ?>
    </div>


         <form id="selection-from" action="teacher2.php" method="post">
        </form>
    <table class='My-Table'><?php
      $sql=mysqli_query($db,"SELECT student.SEMESTER,student.SECTION,count(*) FROM student GROUP BY student.SEMESTER,student.SECTION");
      echo "<script type='text/javascript'>
                    var d=document.querySelector('.My-Table');
                    d.innerHTML=`<tr>
                                    <th>SEMESTER</th>
                                    <th>SECTION</th>
                                    <th>No. Of Students</th>
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
                    c1.innerHTML=\"".$arr['SEMESTER']."\";
                    c2.innerHTML=\"".$arr['SECTION']."\";
                    c3.innerHTML=\"".$arr['count(*)']."\";
                    </script>";
                  }
            
            ?>
      
    ?>
    </div>



</div>

</body>
</html>


  