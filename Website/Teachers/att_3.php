<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
    
    extract($_POST);

    session_start();
    if (!isset($_SESSION['uname']))
    {
        header("location:D:\SoftwareTools\Xampp\htdocs\Student-Platform\Website\login.html");
    }

    $arr = explode(",",$required_attr);
    $ssn = $arr[0];
    $name = $arr[1];
    $course_id = trim($arr[2]);
    $semester = trim($arr[3]);
    $section = trim($arr[4]);


    $stmt = "update attendance set Attendance=".$_POST['att']." where SSN='".$ssn."' and Teacher_Initials='".$_SESSION['uname']."' and course_id='".$course_id."';";
    #echo $stmt;
    $sql = mysqli_query($db, $stmt);

?>


<!DOCTYPE html>
<html lang="en">
<head>

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
        
</style>

  <title>COE</title>
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


  <h1 align="center" style="padding-bottom:50px;color:white">Examination Results</h1>


  
    <div align = "center">
        <div class="row">
    
            <div class="col-sm-3"></div>

            <div class="col-sm-6" >  <?php 

                #$stmt = "SELECT s.SSN, s.Name FROM Student as s, course_taken as ct, course as c where s.SEMESTER='".$_POST['semester']."' and s.Section ='". $_POST['section']."' and s.SSN=ct.SSn and c.course_id ='".$_POST['course']."'  and c.course_id = ct.course_id;";
                $stmt = "SELECT s.SSN, Name , attendance FROM attendance as a, student as s WHERE a.SSN = s.SSN and a.Course_ID ='".$course_id."' and s.SSN IN (SELECT s.SSN FROM Student as s, course_taken as ct, course as c WHERE s.SEMESTER= '".$semester."' and s.Section = '".$section."' and s.SSN=ct.SSn and c.course_id = '".$course_id."' and c.course_id = ct.course_id)";                
               
                $sql = mysqli_query($db, $stmt);
               
                ?>
                <div>
                    <form action="att_2.php" method="post">
                    <?php
                    
                    
                    while ($row = $sql->fetch_assoc()){
                        
                    ?>
                    

                    <button name="required_attr" value="<?php 
                
                echo $row['SSN']; ?>,<?php  echo $row['Name']; ?> , <?php  echo $course_id; ?>, <?php echo $semester;?>, <?php echo $section?> "
                type="submit"> 
                <pre> <?php  echo $row['SSN']; ?>         <?php  echo $row['Name']; ?></pre> </button>

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
