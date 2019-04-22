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
<body>


<div class="container">
  <h1 align="center" style="padding-bottom:50px">Examination Results</h1>

    <div style="padding-bottom:50px">
        <div class="row">
  	
            <div class="col-sm-3" >Course <select name="course" form="selection-from"> <?php 
                $sql = mysqli_query($db, "SELECT Course_id FROM Course");
                while ($row = $sql->fetch_assoc()){?>
                <option value="<?php echo $row['Course_id']; ?>"><?php echo $row['Course_id']; ?></option>
                
                <?php
            
                }
            ?>
            </select> 
            </div>
    


            <div class="col-sm-3" >Semester <select name="semester" form="selection-from"> <?php 
            $sql = mysqli_query($db, "SELECT DISTINCT Semester FROM Student");
            while ($row = $sql->fetch_assoc()){
                
                ?>
                <option value="<?php echo $row['Semester']; ?>"><?php echo $row['Semester']; ?></option>
                
                <?php
            
                }
            ?>
            </select> 
            </div>

    

            <div class="col-sm-3" >Section <select name="section" form="selection-from"> <?php 
            $sql = mysqli_query($db, "SELECT DISTINCT Section FROM Student");
            while ($row = $sql->fetch_assoc()){
                
                ?>
                <option value="<?php echo $row['Section']; ?>"><?php echo $row['Section']; ?></option>
                
                <?php
            
                }
            ?>
            </select> 
            </div>


            <form id="selection-from" action="coe2.php" method="post">
            <input class="col-sm-3 btn btn-primary" " type=submit value="Apply">
            </form>
        </div>

        <div class = "row" style="padding:20px;">

            <div class="col-sm-3">

                <form  action="toppers1.php" method="post">
                <button type="submit" style="padding:0px;margin:0px" name=""> <h2>Class Toppers</h2></button>
                </form>
            </div>

                <div class="col-sm-3">
                    <h2>CNR Students:</h2> <?php

                            #$stmt = "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER='".$_POST['semester']."' and s.Section ='". $_POST['section']."' and s.SSN=ct.SSn and c.course_id ='".$_POST['course']."'  and c.course_id = ct.course_id;";
                            $stmt = "SELECT SSN FROM student WHERE SSN in (SELECT SSN FROM exam_department WHERE SGPA>9)";
                            
                            //print_r($stmt);
                            $sql = mysqli_query($db, $stmt);
                        
                            ?>
                            <div>
                                <ul class = list-group>
                                <?php
                                
                                
                                while ($row= $sql->fetch_assoc()){
                                    
                                ?>
                                

                                <li class="list-group-item">
                            
                                <?php  echo $row['SSN']; ?></li>
                                <?php
                        
                                }
                                ?>

                                </ul>
                            </div>




                </div>

                <div class="col-sm-3">
                        <h2>MRD Students:</h2> <?php
                        
                        #$stmt = "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER='".$_POST['semester']."' and s.Section ='". $_POST['section']."' and s.SSN=ct.SSn and c.course_id ='".$_POST['course']."'  and c.course_id = ct.course_id;";
                            $stmt = "SELECT DISTINCT SSN FROM exam_department ORDER BY CGPA DESC LIMIT 5";
                            
                            //print_r($stmt);
                            $sql = mysqli_query($db, $stmt);
                        
                            ?>
                            <div>
                                <ul class = list-group>
                                <?php
                                
                                
                                while ($row = $sql->fetch_assoc()){
                                    
                                ?>
                                

                                <li class="list-group-item">
                            
                                <?php  echo $row['SSN']; ?></li>
                                <?php
                        
                                }
                                ?>

                                </ul>
                            </div>

                </div>


                <div class="col-sm-3">

                    <form  action="average1.php" method="post">
                    <button type="submit" style="padding:0px;margin:0px" name=""> <h2>Average</h2></button>
                    </form>
                </div>
</div>

</div>

</body>
</html>
