<?php

    extract($_POST);
    
    $arr = explode(",",$required_attr);


    $db = mysqli_connect("localhost:3306","root","","dbms_1");
  
    $stmt = "SELECT  COURSE_ID, ISA_1_Marks, ISA_2_Marks, ESA_Marks, Scaling, SGPA, CGPA FROM exam_department where SSN='".$arr[0]."' and Course_ID='".trim($arr[2])."' ;";
    
    $sql = mysqli_query($db, $stmt );    

    while ($row = $sql->fetch_assoc()){
        $ssn = $arr[0];
        $course_id = $row['COURSE_ID'];
        $isa1 = $row['ISA_1_Marks'];
        $isa2 = $row['ISA_2_Marks'];
        $esa = $row['ESA_Marks'];
        $scaling = $row['Scaling'];
        $SGPA = $row['SGPA'];
        $CGPA = $row['CGPA'];        
    }       

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1 align = "center" style="padding:50px"><?php echo $ssn;?></h1>
  
  
  <div class="row">
    <div class="col-sm-3"></div>
   


    <div class="col-sm-3" > <ul  class="list-group"  > 
            <li class="list-group-item" >ISA 1</li>
            <li class="list-group-item" >ISA 2</li>
            <li class="list-group-item" >ESA</li>
            <li class="list-group-item" >Scaling</li>
            <li class="list-group-item" >SGPA</li>
            <li class="list-group-item" >CGPA</li>
        </ul> 
    </div>
  
    <div class="col-sm-3" >
        <ul  class="list-group" > 
            <li class="list-group-item" ><?php echo $isa1; ?></li>
            <li class="list-group-item" ><?php echo $isa2; ?></li>
            <li class="list-group-item" ><?php echo $esa; ?></li>
            <li class="list-group-item" ><?php echo $scaling; ?></li>
            <li class="list-group-item" ><?php echo $SGPA; ?></li>
            <li class="list-group-item" ><?php echo $CGPA; ?></li>


        </ul> 
    </div>
  
  
  </div>
</div>

</body>
</html>
