<?php

    session_start();
    if (!isset($_SESSION['uname']))
    {
        header("location:D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html");
    }
    extract($_POST);


    $arr = explode(",",$required_attr);
    $ssn = $arr[0];
    $name = $arr[1];
    $course_id = $arr[2];
    $semester = $arr[3];
    $section = $arr[4];



    $db = mysqli_connect("localhost:3306","root","","student_platform");
  
    $stmt = "SELECT  Attendance FROM attendance where SSN='".$arr[0]."' and Teacher_Initials = '".$_SESSION['uname']."'and Course_ID='".trim($arr[2])."' ;";
    
    $sql = mysqli_query($db, $stmt );    

    
    while ($row = $sql->fetch_assoc()){
        $attendance = $row['Attendance'];
    }   

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance</title>

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
                                <a href="Teacher_HOME.php" >Home</a>
                                <a href="Attendance.php" class="active">Attendance</a>
                                <a href="teacher1.php" >Notifications</a>
                                <a href="teacher3.php">Text links and  Video links</a>
                                
            </div>
			<div class="top-right-corner">
				<a href="../login.html"><u>Logout</u></a>
            </div>
</div>


<div class="container">
  <h1 align = "center" style="padding:50px;color:white"></h1>
  
  
  <div class="row">
    <div class="col-sm-3"></div>
   


    <div class="col-sm-3" > <ul  class="list-group"  > 
            <li class="list-group-item needed_padding" >Attendance:</li>

        </ul> 
    </div>
  
    <div class="col-sm-3" >
        <form action="att_3.php" method="post">
            <ul  class="list-group" > 
                <li class="list-group-item" ><input type="text" name="att" value="<?php echo $attendance?>"></li>
            </ul> 
        
    </div>
  
  
  </div>

  <div align="center"> 
  <button type="submit" class="btn btn-primary" name="required_attr" value="<?php echo $ssn;?>,<?php echo $name;?>,<?php echo $course_id;?>,<?php echo $semester;?>,<?php echo $section;?>"  > Submit </button>
    </div>
    </form>
</div>

</body>
</html>
