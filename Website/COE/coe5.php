<?php

    extract($_POST);
    
    #print_r($_POST);

    $arr = explode(",",$ssn_course);
    $ssn = $arr[0];
    $course_id = $arr[1];


    $db = mysqli_connect("localhost:3306","root","","student_platform");
  

    $stmt1 = "update exam_department set ISA_1_MARKS = '".$isa1."' where SSN='".$ssn."' and Course_ID='".$course_id."';";
    //echo $stmt1;
    $stmt2 = "update exam_department set ISA_2_MARKS = '".$isa2."'where SSN='".$ssn."' and Course_ID='".$course_id."';";
    $stmt3 = "update exam_department set ESA_MARKS = '".$esa."'where SSN='".$ssn."' and Course_ID='".$course_id."';";
    $stmt4 = "update exam_department set Scaling = '".$scaling."'where SSN='".$ssn."' and Course_ID='".$course_id."';";
    $stmt5 = "update exam_department set SGPA = '".$sgpa."'where SSN='".$ssn."' and Course_ID='".$course_id."';";
    $stmt6 = "update exam_department set CGPA = '".$cgpa."'where SSN='".$ssn."' and Course_ID='".$course_id."';";
    
    $sql = mysqli_query($db, $stmt1 );
    $sql = mysqli_query($db, $stmt2);
    $sql = mysqli_query($db, $stmt3 );
    $sql = mysqli_query($db, $stmt4 );
    $sql = mysqli_query($db, $stmt5 );
    $sql = mysqli_query($db, $stmt6 );
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marks</title>

  <style>

body
{
    background-image: url("Images/paper2.jpg");
				background-repeat: no-repeat;
				background-size: cover;
}
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

.My-container
{
    border: 2px solid black;
    padding: 400px;
    background: url(Images/paper1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.Trans-container 
{
  /*position: relative;*/
  position:relative;
  bottom:-200px;
  max-width: 800px;
  margin: 0 auto;
  /*height:500px;*/
}


.Trans-container .Trans-content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); 
  background: rgba(0, 0, 0, 0.5); 		/*opacity = 0.5*/
  width: 100%;
  padding: 20px;
  height:500px;
  text-align:center;
}

.deco{
    text-shadow: 2px 2px #FF0000;
    color:black;
    }

#stylish
{
    text-align: center;
    text-shadow: 3px 2px green;
    font-family:Arial, Helvetica, sans-serif;
    font-size:40px;
}

.needed_padding
{
    padding:10px;
}
        
</style>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>


<div class="Topper">
			<div class="Mylister">
					<a href="coe1.php" class="active">Marks</a>
					<a href="scholarships.php">Scholarships</a>
					<a href="toppers1.php">Toppers</a>
					<a href="average1.php">Average</a>
			</div>
			<div class="top-right-corner">
				<a href="#"><u>Logout</u></a>
            </div>
</div>



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
            <li class="list-group-item" ><?php echo $sgpa; ?></li>
            <li class="list-group-item" ><?php echo $cgpa; ?></li>


        </ul> 
    </div>
  
  
  </div>

  <div align="center">
    <form action="coe4.php" method="post">
  <button type="submit" class="btn btn-primary" name="ssn_course" value="<?php echo $ssn;?>,<?php echo $course_id;?>"  > Change </button>
</form>    
</div>

</div>

</body>
</html>
