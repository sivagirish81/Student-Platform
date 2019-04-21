<?php
    $db = mysqli_connect("localhost:3306","root","","student_platform");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<style>
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
				background: url(Images/Classroom-2.jpg);
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
					
        </style>
        
  <title>Send Notification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="Mylister">
					<a href="Teacher_HOME.html" >Home</a>
					<a href="Attendance.php" >Attendance</a>
					<a href="teacher1.php" class="active">Notifications</a>
					<a href="teacher3.php">Text links and  Video links</a>
					
</div>


<div class="container">
  <h1 align="center" style="padding-bottom:50px">Send Notifications</h1>

    <div style="padding-bottom:50px">
        <div class="row">
  	

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

		<div>
		
		<?php
		
		?>
		</div>

         <form id="selection-from" action="teacher2.php" method="post">
		
		<textarea rows="20" cols="40" name="content" >
		</textarea>
		
		
		<div>
		<input class="col-sm-3 btn btn-primary"  type=submit value="Apply">
		</div>
        </form>
		
    </div>



</div>

</body>
</html>
