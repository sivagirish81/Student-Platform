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
<div class="Mylister">
					<a href="Teacher_Home.php" >Home</a>
					<a href="Attendance.php" >Attendance</a>
					<a href="teacher1.php" >Notifications</a>
					<a href="teacher3.php" class="active">Text links and  Video links</a>
					
</div>

					
</div>


<div class="container">
  <h1 align="center" style="padding-bottom:50px">Send Text and video links</h1>

    <div style="padding-bottom:50px">
        <div class="row">
  	

     

    

        <div class="col-sm-3" >Course Id <select name="section" form="selection-from"> <?php 
        $sql = mysqli_query($db, "SELECT Course_id FROM course");
        while ($row = $sql->fetch_assoc()){
            
            ?>
            <option value="<?php echo $row['Course_id']; ?>"><?php echo $row['Course_id']; ?></option>
            
            <?php
        
            }
        ?>
        </select> 
        </div>
		
		<div class="col-sm-3" >Initial <select name="init" form="selection-from"> <?php 
        $sql = mysqli_query($db, "SELECT Initials FROM teacher");
        while ($row = $sql->fetch_assoc()){
            
            ?>
            <option value="<?php echo $row['Initials']; ?>"><?php echo $row['Initials']; ?></option>
            
            <?php
        
            }
        ?>
        </select> 
        </div>

		<div>
		
		<?php
		
		?>
		</div>


        <form id="selection-from" action="teacher4.php" method="post">
        <br>
		<br>
		<input type="text" name="content1" size="50" maxlength="200"\>
		<br>
		<br>
		<br>
		<input type="text" name="content2" size="50" maxlength="200"\>
		<br>
		<br>
		<input class="col-sm-3 btn btn-primary" " type=submit value="Apply"\>
		
        </form>
		
    </div>



</div>

</body>
</html>
