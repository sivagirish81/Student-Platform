<?php
    $db = mysqli_connect("localhost:3306","root","","dbms_1");
    

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

  
    <div align = "center">
        <div class="row">
    
            <div class="col-sm-3"></div>

            <div class="col-sm-6" >  <?php 

                $stmt = "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER='".$_POST['semester']."' and s.Section ='". $_POST['section']."' and s.SSN=ct.SSn and c.course_name ='".$_POST['course']."'  and c.course_id = ct.course_id;";
                
                $sql = mysqli_query($db, $stmt);
               
                ?>
                <div>
                    <form action="marks.php" method="post">
                    <?php
                    
                    
                    while ($row = $sql->fetch_assoc()){
                        
                    ?>
                    

                    <button name="required_attr" value="<?php 
                
                echo $row['SSN']; ?>,<?php  echo $row['Name']; ?>,<?php  echo $_POST['course']; ?> "
                type="submit"> <?php 
                
                echo $row['SSN']; ?> ,<?php  echo $row['Name']; ?> </button>

                    <?php
            
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
