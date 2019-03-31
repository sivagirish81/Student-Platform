<?php

    extract($_POST);


    $arr = explode(",",$ssn_course);
    $ssn = $arr[0];
    $course_id = $arr[1];


    $db = mysqli_connect("localhost:3306","root","","student_platform");
  
    //$stmt = "SELECT  COURSE_ID, ISA_1_Marks, ISA_2_Marks, ESA_Marks, Scaling, SGPA, CGPA FROM exam_department where SSN='".$arr[0]."' and Course_ID='".trim($arr[2])."' ;";
    
    //$sql = mysqli_query($db, $stmt );    

    /*
    while ($row = $sql->fetch_assoc()){
        $ssn = $arr[0];
        $course_id = $row['COURSE_ID'];
        $isa1 = $row['ISA_1_Marks'];
        $isa2 = $row['ISA_2_Marks'];
        $esa = $row['ESA_Marks'];
        $scaling = $row['Scaling'];
        $SGPA = $row['SGPA'];
        $CGPA = $row['CGPA'];        
    } */      

   
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
  <h1 align = "center" style="padding:50px"></h1>
  
  
  <div class="row">
    <div class="col-sm-3"></div>
   


    <div class="col-sm-3" > <ul  class="list-group"  > 
            <li class="list-group-item needed_padding" >ISA 1</li>
            <li class="list-group-item needed_padding" >ISA 2</li>
            <li class="list-group-item needed_padding" >ESA</li>
            <li class="list-group-item needed_padding" >Scaling</li>
            <li class="list-group-item needed_padding" >SGPA</li>
            <li class="list-group-item needed_padding" >CGPA</li>
        </ul> 
    </div>
  
    <div class="col-sm-3" >
        <form action="coe5.php" method="post">
            <ul  class="list-group" > 
                <li class="list-group-item" ><input type="text" name="isa1"></li>
                <li class="list-group-item" ><input type="text" name="isa2"></li>
                <li class="list-group-item" ><input type="text" name="esa"></li>
                <li class="list-group-item" ><input type="text" name="scaling"></li>
                <li class="list-group-item" ><input type="text" name="sgpa"></li>
                <li class="list-group-item" ><input type="text" name="cgpa"></li>


            </ul> 
        
    </div>
  
  
  </div>

  <div align="center"> 
  <button type="submit" class="btn btn-primary" name="ssn_course" value="<?php echo $ssn;?>,<?php echo $course_id;?>"  > Submit </button>
    </div>
    </form>
</div>

</body>
</html>
