<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
    
    $stmt = "SELECT AVG(e.SGPA) as Avg FROM exam_department as e,student as s WHERE e.SSN = s.SSN and s.Semester='".$_POST['semester']."'";

    $sql = mysqli_query($db, $stmt);

    $row = $sql->fetch_assoc();

?>


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


<div class="Topper">
			<div class="Mylister">
					<a href="coe1.php" >Marks</a>
					<a href="scholarships.php">Scholarships</a>
					<a href="toppers1.php">Toppers</a>
					<a href="average1.php" class="active">Average</a>
			</div>
			<div class="top-right-corner">
				<a href="#"><u>Logout</u></a>
            </div>
</div>


<div class = "row" align="center" style="padding:200px">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"> <h1> <?php echo $row['Avg'] ?> </h1> </div>
</div>
