<?php

    extract($_POST);
    
    $arr = explode(",",$required_attr);

    


    $db = mysqli_connect("localhost:3306","root","","dbms_1");
  
    $stmt = "SELECT  COURSE_ID, ISA_1_Marks, ISA_2_Marks, ESA_Marks, Scaling, SGPA, CGPA FROM exam_department where SSN='".$arr[0]."' and Course_id='".$arr[2]."' ;";
    
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
    <div class="col-sm-3" style="background-color:lavenderblush;">
    <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>

    </div>
    <div class="col-sm-3" style="background-color:lavender;">.col-sm-4</div>
  </div>
</div>

</body>
</html>
